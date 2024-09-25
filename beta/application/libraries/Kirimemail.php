<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kirimemail {
	var $protocol = "smtp";
	
	//==== internal
	//==== external
	// var $smtp_host_external = "ssl://smtp.gmail.com";
	// var $smtp_port_external = "465";
	// var $smtp_timo_external = "45";
	// var $smtp_user_external = "fauzidwi28@gmail.com";
	// var $smtp_pass_external = "kozek123";

	var $smtp_host_external = "ssl://mail.jconnect.co.id";
	var $smtp_port_external = "465";
	var $smtp_timo_external = "45";
	var $smtp_user_external = "contact.us@jconnect.co.id";
	var $smtp_pass_external = "jc0nn3ct123";
	var $CI;

	function __construct(){
    	$this->CI =& get_instance();
		$this->CI->load->helper('string');
  	}
  	function kirim($recipient, $subject, $bodymessage, $cc=null, $attach=null,$lang=1){
  		$jenis = 'external';
	    $config['protocol']= $this->protocol;
	    $config['smtp_host']= $this->{'smtp_host_'.$jenis}; 
	    $config['smtp_port']= $this->{'smtp_port_'.$jenis}; 
	    $config['smtp_timeout']= $this->{'smtp_timo_'.$jenis};
		$config['smtp_user']= $this->{'smtp_user_'.$jenis};
		$config['smtp_pass']= $this->{'smtp_pass_'.$jenis};
		// if($lang == 1){
		// 	$config['charset'] = "iso-8859-1";
		// }else{
		// 	$config['charset'] = "ISO-2022-JP";
		// }
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$config['validate'] = false;

		// $this->CI->common->debug_array($config);
    
	
	  	$this->CI->load->library('email');
	  	$this->CI->email->initialize($config);
	    // $this->CI->email->from('detanto@gmail.com', 'no reply');
	    $this->CI->email->from($config['smtp_user'],'JConnect');

		$this->CI->email->set_newline("\r\n");
		$this->CI->email->to($recipient);
		$this->CI->email->subject($subject);		
		$this->CI->email->message($bodymessage);
		$this->CI->email->set_mailtype('html');

		if(is_array($attach)){//!=""){
			if(count($attach)>0){
				for($e=0;$e<count($attach);$e++){
					$this->CI->email->attach($attach[$e]);		
				}
			}
		}else{
			if($attach!=""){
				$this->CI->email->attach($attach);
			}
		}

		if(is_array($cc)){
			$this->CI->email->cc($cc);
		}

		if($this->CI->email->send()){
			// echo "Email Pemberitahuan Sudah Dikirim Ke ".$tujuan.". \n(" . $appmail . ")\n";
			// echo "Email Contact Us Sudah Dikirim Ke ".$recipient;
			return true;
		}else{
			return show_error($this->CI->email->print_debugger());
		}
  }
  
	function generateLogin($prm, $userid, $notran){
		$randomid=random_string('unique', 16);
		$input = array(
			'LNK_APPLIC' => $prm,
			'LNK_VALUES' => $randomid,
			'LNK_USERID' => $userid,
			'LNK_IDNTRN' => $notran,
			'LNK_CRTDAT' => date("Y-m-d H:i:s") 
		);
		$this->CI->crud->unsetMe();
		$this->CI->crud->useTable('LINKGENERATOR');
		$this->CI->crud->save($input);
		$this->CI->crud->unsetMe();
		return $randomid;
	}


}