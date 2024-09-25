<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * This file is part of Auth_AD.

    authloginad is free software: you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    authloginad is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

		authloginad is developed based on auth_ad by mark kathmann

    You should have received a copy of the GNU General Public License
    along with authloginad.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */
 
/**
 * authloginad Class
 *
 * Active Directory LDAP authentication library for Code Igniter.
 *
 * @package         authloginad
 * @author          detanto <detanto@gmail.com>
 * @version         0.1
 * @license         GNU Lesser General Public License (LGPL)
 * @copyright       Copyright © 2016 detanto <detanto@gmail.com>
 */

class Authloginad 
{
	// register properties
	private $_hosts;
	private $_ports;
	private $_base_dn;
	private $_ad_domain;
	private $_start_ou;
	private $_user;
	private $_pass;
	private $_ldap_conn;
	
	/**
     * @access public
     */
	function __construct() {
		$this->ci =& get_instance();
		log_message('debug', 'initialize authloginad');
		// load the configuration file
		$this->ci->load->config('authloginad');
		// load the session library
		$this->ci->load->library('session');
		// perform the secondary initialization
		$this->_init();
	}
	private function _init(){
		// check for an active LDAP extension
		if (!function_exists('ldap_connect')) 
		{
			log_message('error', 'Authloginad : LDAP PHP module not found.');
			show_error('LDAP PHP module not found. Please ensure that the module is loaded or compiled in.');
		}		
		// register the configuration variables as properties
		$this->_hosts      = $this->ci->config->item('ad_hosts');
		$this->_ports      = $this->ci->config->item('ad_ports');
		$this->_base_dn    = $this->ci->config->item('base_dn');
		$this->_ad_domain  = $this->ci->config->item('ad_domain');
		$this->_start_ou   = $this->ci->config->item('start_ou');
		$this->_user = $this->ci->config->item('ad_user');
		$this->_pass = $this->ci->config->item('ad_pass');
	}
	function login($username, $password) 
	{
		// preset the return marker
		$return = false;		
		// preset the process step marker
		$continue = true;
		
		// check for non-empty parameters
		if (strlen($username) > 0 && strlen($password) > 0){
			// bind to the AD
			if (!$this->bind_ad()){
				$continue = false;
			}
			
			if ($continue){
				// search for the user in the AD
				if (!$entries = $this->search_ad($username, array('dn', 'cn')))
				{
					$continue = false;
				}
			}
			
			if ($continue){
				// attempt to bind as the requested user
				if (!$bind = ldap_bind($this->_ldap_conn, stripslashes($entries['dn']), $password)) 
				{
          log_message('debug', 'Authloginad: Unable to log in the user.');
					$continue = false;
				}
				else 
				{
					// bind (i.e. login) for the user was succesful, read the user attributes
					$cn = $entries['cn'][0];
					$dn = stripslashes($entries['dn']);
					
					log_message('debug', 'Authloginad: Successful login for user ' . $cn . ' (' . $username . ') from IP ' . $this->ci->input->ip_address());
					
					// set the session data for the user
					$user_info = array('cn' => $cn, 'dn' => $dn, 'username' => $username, 'logged_in' => true);
					$this->ci->session->set_userdata($user_info);
					
					// set the return marker
					$return = true;
				}
			}
		}
		// return the login result
		return $return;
	}

	/**
	* @access public
	* @return bool
	*/
	function is_authenticated(){
		if ($this->ci->session->userdata('logged_in')) {
			return true;
		} 
		else {
			return false;
		}
	}
    
	/**
	* @access public
	*/
	function logout() {
		ldap_unbind($this->_ldap_conn);
		log_message('info', 'Auth_AD: User ' . $this->ci->session->userdata('username') . ' logged out.');		
		// set the session marker to false (superfluous but safe) and then destroy the session
		$this->ci->session->set_userdata(array('logged_in' => false));
		$this->ci->session->sess_destroy();
	}

	/**
	* @access public
	* @param string $user_dn
	* @param string $groupname
	* @return bool
	*/
	function in_group($username, $groupname)
	{
		// preset the result
		$result = false;		
		// preset the continuation marker
		$continue = true;		
		// bind to the AD
		if (!$this->bind_ad())
		{
			$continue = false;
		}
		
		if ($continue)
		{
			// get the DN for the username
			$user_search = $this->search_ad($this->ldap_escape($username, false), array('dn'));
			$user_dn     = $user_search['dn'];
			
			// get the DN for the group
			$group_search = $this->search_ad($this->ldap_escape($groupname, false), array('dn'));
			$group_dn     = $group_search['dn'];
			
			// search for the user's object
			$attributes = array('memberof');
			$search = ldap_read($this->_ldap_conn, $user_dn, '(objectclass=*)', $attributes);
			
			// read the entries
			$entries = ldap_get_entries($this->_ldap_conn, $search);
			
			if ($entries['count'] > 0) 
			{
				if (!empty($entries[0]['memberof'])) 
				{
					for ($i = 0; $i < $entries[0]['memberof']['count']; $i++) 
					{
						if ($entries[0]['memberof'][$i] == $group_dn) 
						{
							$result = true;
						}
						elseif ($this->in_group($entries[0]['memberof'][$i], $groupname)) 
						{ 
							$result = true;
						}
					}
				}
			}
		}		
		// return the result
		return $result;
	}	
	
	/**
	* @access private
	* @param string $account
	* @param array $req_attrs
	* @return bool or array
	*/
	private function search_ad($account, $req_attrs = array('dn', 'cn'))
	{
		// preset the result
		$result = array();
		
		// set up the search parameters
		$filter  = '(sAMAccountName=' . $this->ldap_escape($account, false) . ')';
		if (strlen($this->_start_ou) > 0)
		{
			$search_dn = $this->_start_ou . ',' . $this->_base_dn;
		}
		else 
		{
			$search_dn = $this->_base_dn;
		}
		// perform the search for the username
		if ($search = ldap_search($this->_ldap_conn, $search_dn, $filter, $req_attrs))
		{
			if ($entries = ldap_get_entries($this->_ldap_conn, $search))
			{
				if ($entries['count'] > 0)
				{
					foreach ($req_attrs as $key => $val)
					{
						$result[$val] = $entries[0][$val];
					}
				}
			}
			else 
			{
				log_message('error', 'Authloginad: Unable to get entries for account.');
				show_error('Unable to read the AD entries for the account');
			}
		}
		else 
		{
			log_message('error', 'Authloginad: Unable to perform search for the account.');
			show_error('Unable to search the AD for the account.');
		}
		
		// return the result
		if (count($result) == count($req_attrs))
		{
			return $result;
		}
		else 
		{
			return false;
		}
	}
	/**
	* @access private
	* @return bool
	*/
	private function bind_ad()
	{
		// preset the continuation marker
		$continue = true;
		
		// attempt to connect to each of the AD servers, stop if a connection is succesful 
		foreach ($this->_hosts as $host) 
		{
			$this->_ldap_conn = ldap_connect($host);
			if ($this->_ldap_conn) 
			{
				break;
			}
			else 
			{
				log_message('info', 'Authloginad: Error connecting to AD server ' . $host);
			}
		}		
		// check for an active LDAP connection
		if (!$this->_ldap_conn){
			log_message('error', "Authloginad: unable to connect to any AD servers.");
			show_error('Error connecting to any Active Directory server(s). Please check your configuration and connections.');
			$continue = false;
		}
		
		if ($continue){
			// set some required LDAP options		
			ldap_set_option($this->_ldap_conn, LDAP_OPT_REFERRALS, 0);
			ldap_set_option($this->_ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
		
			// attempt to bind to the AD using the proxy user or anonymously if no user was configured
			if ($this->_user != null)
			{
				
				if(!ldap_bind($this->_ldap_conn, $this->_user, $this->_pass)){
					$usernya = $this->_user."@".$this->_hosts[0];
					$bind = ldap_bind($this->_ldap_conn, $usernya, $this->_pass);
				}else{
					$bind = ldap_bind($this->_ldap_conn, $this->_user, $this->_pass);
				}
			}
			else 
			{
				$bind = ldap_bind($this->_ldap_conn);
			}
			
			// verify the LDAP binding
			if (!$bind)
			{
				if ($this->_user != null)
				{
					log_message('error', 'Authloginad: Unable to perform LDAP bind using user ' . $this->_user);
					show_error('Unable to bind (i.e. login) to the AD for user ID lookup');
				}
				else
				{
					log_message('error', 'Authloginad: Unable to perform anonymous LDAP bind.');
					show_error('Unable to bind (i.e. login) to the AD for user ID lookup');
				}
				$continue = false;
			}
			else 
			{
				log_message('debug', 'Authloginad: Successfully bound to AD. Performing DN lookup for user');
			}
		}
		
		// return the result
		return $continue;
	}

	/**
	* @access private
	* @param string $str
	* @param bool $for_dn
	* @return string 
	*/
	private function ldap_escape($str, $for_dn = false){
		/**
		* This function courtesy of douglass_davis at earthlink dot net
		* Posted in comments at
		* http://php.net/manual/en/function.ldap-search.php on 2009/04/08
		*
		* see:
		* RFC2254
		* http://msdn.microsoft.com/en-us/library/ms675768(VS.85).aspx
		* http://www-03.ibm.com/systems/i/software/ldap/underdn.html
		*/  
		
		if ($for_dn)
		{
			$metaChars = array(',','=', '+', '<','>',';', '\\', '"', '#');
		}
		else
		{
			$metaChars = array('*', '(', ')', '\\', chr(0));
		}
		
		$quotedMetaChars = array();
		foreach ($metaChars as $key => $value) 
		{
			$quotedMetaChars[$key] = '\\' . str_pad(dechex(ord($value)), 2, '0');
		}
		
		$str = str_replace($metaChars, $quotedMetaChars, $str);
		return $str;  
	}
	public function getMember_ldap($returnnya='array', $OU=null){
		$arrUsersAd = array();
		$arrStatus = array(
			'512'=>'Enabled Account',
			'514'=>'Disabled Account',
			'544'=>'Enabled, Password Not Required',
			'546'=>'Disabled, Password Not Required',
			'66048'=>'Enabled, Password Doesn\'t Expire',
			'66050'=>'Disabled, Password Doesn\'t Expire',
			'66080'=>'Enabled, Password Doesn\'t Expire & Not Required',
			'66082'=>'Disabled, Password Doesn\'t Expire & Not Required',
			'262656'=>'Enabled, Smartcard Required',
			'262658'=>'Disabled, Smartcard Required',
			'262688'=>'Enabled, Smartcard Required, Password Not Required',
			'262690'=>'Disabled, Smartcard Required, Password Not Required',
			'328192'=>'Enabled, Smartcard Required, Password Doesn\'t Expire',
			'328194'=>'Disabled, Smartcard Required, Password Doesn\'t Expire',
			'328224'=>'Enabled, Smartcard Required, Password Doesn\'t Expire & Not Required',
			'328226'=>'Disabled, Smartcard Required, Password Doesn\'t Expire & Not Required'
		);

		$arrStatus = array(
			'512'=>'Enabled',
			'514'=>'Disabled',
			'544'=>'Enabled',
			'546'=>'Disabled',
			'66048'=>'Enabled',
			'66050'=>'Disabled',
			'66080'=>'Enabled',
			'66082'=>'Disabled',
			'262656'=>'Enabled',
			'262658'=>'Disabled',
			'262688'=>'Enabled',
			'262690'=>'Disabled',
			'328192'=>'Enabled',
			'328194'=>'Disabled',
			'328224'=>'Enabled',
			'328226'=>'Disabled'
		);
		foreach ($this->_hosts as $host) 
		{
			$this->_ldap_conn = ldap_connect($host, $this->_ports[0]);
			if ($this->_ldap_conn) 
			{
				break;
			}
			else 
			{
				log_message('info', 'Authloginad: Error connecting to AD server ' . $host);
				show_error('Authloginad: Error connecting to AD server ' . $host);
			}
		}
    ldap_set_option($this->_ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($this->_ldap_conn, LDAP_OPT_REFERRALS, 0);

    $bind = ldap_bind($this->_ldap_conn, $this->_user, $this->_pass);
    if ($bind) {
      $additional = "";
      if(isset($OU)){
				$additional = "OU=," . $OU;
      }
			// $additional = "OU=detanto,";
			// $results = ldap_search($mydap,$group,'cn=*',array('member')) or die('Error searching LDAP: '.ldap_error($mydap));
      // $results = ldap_search($this->_ldap_conn, $additional . $this->_base_dn,'objectClass=user',array('dn'));
      // $results = ldap_search($this->_ldap_conn, $additional . $this->_base_dn,'objectClass=user',array('sn'));
			$filter='objectClass=user';
			// $filter="(|(sn=*))"; => kalau non aktif
			$attr[] = "displayname";
			$attr[] = "samaccountname";
			$attr[] = "useraccountcontrol";
			$attr[] = "sn";
		 // $sr=ldap_search($ldapconn, $dn, $filter, $justthese);       
      $results = @ldap_search($this->_ldap_conn, $additional . $this->_base_dn,$filter,$attr);
      if($results){
      	$ad_users = ldap_get_entries($this->_ldap_conn, $results);
				array_shift($ad_users);
				// echo "<pre>";
				// print_r($ad_users);
				// echo "</pre>";
				// die();
				// foreach($ad_users as $e) $arrUsers[] = $e['dn'];
				foreach($ad_users as $e) {
					$info = $e['dn'];
					if(isset($e['samaccountname'])){
						$info .= ',username='.$e['samaccountname'][0];
					}
					if(isset($e['useraccountcontrol'])){
						$info .= ',uac='.$e['useraccountcontrol'][0];
					}
					$arrUsers[] = $info;
				}
				$arrUsersAd = array();
				for ($n=0;$n<count($arrUsers);$n++){
					$arrorgnztn = array();
					if(stripos($arrUsers[$n], "OU")){
						if(!stripos($arrUsers[$n], "Domain Controllers")){
							$expUsers = explode(",", $arrUsers[$n]);
							for($y=0;$y<count($expUsers);$y++){
								$expUsers_h = explode("=", $expUsers[$y]);
								switch ($expUsers_h[0]) {
									case 'CN':
										$fullname = $expUsers_h[1];
										break;
									case 'OU':
										if(stripos($expUsers_h[1],"KIM")===false){
											$arrorgnztn[] = $expUsers_h[1];
										}
										break;
									case 'username':
										$username = $expUsers_h[1];
										break;
									case 'uac':
										$uac = $arrStatus[$expUsers_h[1]];
										break;
								}
							}
							$orgnztn = "";
							$rc = false;
							for($l=0;$l<count($arrorgnztn);$l++){
								if($rc) $orgnztn .=",";
								$orgnztn .= $arrorgnztn[$l];
								$rc =true;
							}
							$arrUsersAd[] = array('USR_FULNAM'=>ucfirst($fullname), 'USR_LOGINS'=>$username, 'USR_UNIORG'=>$orgnztn, 'USR_STATUS'=>$uac);
						}
					}
				}
      }
    }
    // $returnnya = 'json';
    switch ($returnnya) {
    	case 'json':
    		$json = "[";

    		$ro=false;
    		for($e=0;$e<count($arrUsersAd);$e++){
    			if($ro) $json .= ",";
		      $json .= "{";
    			$rc=false;
	    		foreach ($arrUsersAd[$e] as $key => $value) {
	        	if($rc) $json .= ",";
	        	$json .= '"' . $key . '":"'.$value.'"' ;
		        $rc=true;
	    		}
		      $json .= "}";
		      $ro=true;
    		}    		
    		$json .= "]";
    		$return = $json;
    		break;
    	default:
    		$return = $arrUsersAd;
    		break;
    }
    echo $return;
    return $return;
	}
	public function jalan_getMember_ldap(){
   	$adServer = "kemas.co.id";
	
    $ldap_connection = ldap_connect($adServer);

    $username = 'aplikasi';//$_POST['username'];
    $password = 'kompak';//$_POST['password'];

    $ldaprdn = 'kemas' . "\\" . $username;
    // $ldaprdn = $username."@corp.detanto.net";
    // $ldaprdn = $username .'@' .$adServer;
    ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0);
    // die();

    $bind = ldap_bind($ldap_connection, $ldaprdn, $password);

    if ($bind) {
        $ldap_base_dn = 'DC=kemas,DC=co,DC=id';
        $search_filter = '(&(objectCategory=person)(samaccountname=*' . $username . '*))';
        $attributes = array();
        $attributes[] = 'givenname';
        $attributes[] = 'mail';
        $attributes[] = 'samaccountname';
        $attributes[] = 'sn';
        $results = ldap_search($ldap_connection, $ldap_base_dn, $search_filter, $attributes);
        if (FALSE !== $results) {
            $entries = ldap_get_entries($ldap_connection, $results);
        }
        $results = ldap_search($ldap_connection,$ldap_base_dn,'objectClass=user',array('sn'));
				$members = ldap_get_entries($ldap_connection, $results);
        ldap_unbind($ldap_connection); // Clean up after ourselves.
    } else {
        exit("Connection Succesfully, But LDAP Bind host refused with status = false");
    }

    print_r($members);
	}
	public function xgetMember_ldap(){

		foreach ($this->_hosts as $host) 
		{
			$this->_ldap_conn = ldap_connect($host, $this->_ports[0]);
			if ($this->_ldap_conn) 
			{
				break;
			}
			else 
			{
				log_message('info', 'Authloginad: Error connecting to AD server ' . $host);
				show_error('Authloginad: Error connecting to AD server ' . $host);
			}
		}


			// set some required LDAP options		
			ldap_set_option($this->_ldap_conn, LDAP_OPT_REFERRALS, 0);
			ldap_set_option($this->_ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
		if(!ldap_bind($this->_ldap_conn, "corp\detanto", '1qa2ws3ed')){
			$usernya = $this->_user."@".$this->_hosts[0];
			$bind = ldap_bind($this->_ldap_conn, $usernya, $this->_pass);
		}else{
			$bind = ldap_bind($this->_ldap_conn, $this->_user, $this->_pass);
		}
		
		// $this->search_ad($this->_user."@corp.detanto.net", array('dn', 'cn'));
		// print_r($this->_ldap_conn);
		$req_attrs = array('dn', 'cn');
		echo $this->_user;
		$filter  = '(sAMAccountName=' . $this->ldap_escape($this->_user."@corp.detanto.net", false) . ')';
		ldap_search($this->_ldap_conn, $this->_base_dn, 'objectClass=user',$req_attrs);

		// ldap_set_option($this->_ldap_conn, LDAP_OPT_REFERRALS, 0);
		// ldap_set_option($this->_ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
		// $object_dn = 'CN=Users,DC=corp,DC=detanto,DC=net';
		// $results = ldap_search($this->_ldap_conn,$object_dn,array('sn')) or die('Error searching LDAP: '.ldap_error($this->_ldap_conn));
		// $members = ldap_get_entries($this->_ldap_conn, $results);		
		// $results = ldap_search($this->_ldap_conn,'CN=Users,DC=kemas,DC=co,DC=id','objectClass=user',array('sn'))or die('Error searching LDAP: '.ldap_error($this->_ldap_conn));
		// $members = ldap_get_entries($this->_ldap_conn,$results);
		// $results = ldap_search($mydap,$object_dn,'cn=*',array('member')) or die('Error searching LDAP: '.ldap_error($mydap));
		// $members = ldap_get_entries($mydap,$results);

		// print_r($results);

	}
}
