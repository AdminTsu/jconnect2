<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Authlogin
{
	var $CI;
	var $user_table;
	var $login;
	var $admin_path = '/login';
	var $login_information;
/*
--------------------------------------------------------------------------------
*/
	function __construct()
	{
		$this->CI =& get_instance();
		$this->user_table=$this->CI->config->item('table_user');
	}
/*
--------------------------------------------------------------------------------
*/	
	function isLoggedin($username) {
   return ($this->CI->session->userdata('USR_LOGINS') == $username && $this->CI->session->userdata('logged_in'));
  }	
/*
--------------------------------------------------------------------------------
*/
	function chkLoggedin($username) {
    if (!$this->CI->authlogin->isLoggedin($username)){
      $this->logout();
      $this->CI->session->set_flashdata('Forced Logout');
      redirect($this->admin_path);
    };
  }

	function check_user_session()	{    
		$login_session = $this->CI->session->all_userdata();
		if (!empty($login_session) && is_array($login_session) && !empty($login_session['USR_LOGINS']))
		{
			return true;// $login_session;
		}else{
			return false;
		}
	}	
/*
--------------------------------------------------------------------------------
*/	
	function login($username = '', $password = '') {
		// echo "$username ~ $password";die();
		if($username == '' OR $password == '') {
			return false;
		}

		// if ($this->isLoggedin($username)){
		// 	$this->logout();
		// 	return false;
		// };
		// $su=0;
		// $this->CI->db->where("USR_LOGINS = '$user'");
		// $query = $this->CI->db->get_where($this->user_table);
		$query = $this->CI->crud->login($username);	
		if ($query->num_rows()==1) {
			$row = $query->row_array();
            // check huruf user, kapital ato nggak
// 			if(md5($row['USR_NAMESS'])!=md5($username)){
// 				return false;
// 			}
			
			// $dbPassword = $this->CI->common->decrypt($row['USR_PASSWD']);
			$dbUsername = $row['USR_LOGINS'];
			$password 	= md5($password);
			$dbPassword = $row['USR_PASSWD'];
			// echo "$password ~ $dbPassword";die();
			// echo "$username ~ $dbUsername & $dbPassword ~ $password ~ e0afdd37f9b35cafe8442d54cd59f27d";die();
			
			if($password ==  $dbPassword) {
				$row = array_merge($row,array('USR_LAYOUT'=>'_samping'));
				$this->setSession($row);
				return true;			
			}			
		}	else {
			return false;
		}	
	}	
/*
--------------------------------------------------------------------------------
*/
	function qryActiveDirectory($username){
		$query = $this->CI->crud->login($username,2);
		if ($query->num_rows()==1) {
			$row = $query->row_array();
			$this->setSession($row);
			$return = true;
		}else{
			$return = false;
		}
		return $return;
	}

	function setSession($row){
		$this->CI->session;
		$this->CI->session->set_userdata($row);
		$this->CI->session->set_userdata(array('logged_in' => true));
		$this->CI->session->set_userdata(array('computername' => gethostbyaddr($_SERVER['REMOTE_ADDR'])));
	}
	
	function setUserArray(){
		$this->login_information= $this->CI->session->all_userdata();
	}
	
	function logout($redirect) {
		$this->CI->session->sess_destroy();
		$this->CI->login = NULL;
		$this->login_information= NULL;
		if ($redirect){
			// redirect($this->admin_path);
			redirect($redirect);
		}
	}

	function getValidatelogin($username = '', $password = '', $ygbolehh = null){
		if($username == '' OR $password == '') {
			return false;
		}
		$query = $this->CI->crud->login($username);

		if ($query->num_rows()==1) {
			$row = $query->row_array();

			if(!isset($ygbolehh)){
				return false;
			}

			if(!($this->CI->config->item($ygbolehh))){
				return false;
			}

			//check huruf user, kapital ato nggak
			if(md5($row['USR_LOGINS'])!=md5($username)){
				return false;
			}

			if($row['USR_ACCESS'] != 1){
				return false;
			}

			if(!in_array($row['EMP_POSISI'],$this->CI->config->item($ygbolehh))){
				return false;
			}

			$dbPassword = $this->CI->common->decrypt($row['USR_PASSWD']);
			if($password ==  $dbPassword) {
				return true;			
			}			
		}	else {
			return false;
		}	
	}

}	
?>