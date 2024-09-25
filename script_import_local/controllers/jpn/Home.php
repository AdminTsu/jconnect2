<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_JPN extends MY_Controller {
var $login;
var $level;
var $menuid;

  function Home_JPN(){
    parent::__construct();
		$this->load->helper(array('ginput','dashboard','jqxgrid'));
		$this->load->model(array('m_jconnect'));
    $this->login = $this->session->userdata('USR_LOGINS');
    $this->level = $this->session->userdata('USR_LEVELS');
    $this->menuid = $this->session->userdata('USR_MENUID');
  }	
	public function index(){
    // $this->load->view('v_login');
    $this->welcome();
	}
 	function welcome(){
    if($this->level == 99){
      $content = $this->dashboard();
      $content = '';
    }else{
      $content = '';
    }
    
    // $content = '';  
    $arrbread = array(
      array('link'=>'#','text'=>'家'),
    );
    $link = "#";
    $url = $this->uri->segment(2);
    // $bc = generateBreadcrumb($arrbread);  
    $bc = '';  
    $this->_render('pages/home', $content, 'admin', $bc);
	}
  
  function notauthorized(){
    $content = "<br><br><br><br><br><center><h1><i class='fa fa-exclamation-triangle'></i>&nbsp;&nbsp;申し訳ありませんが、そのアプリケーションにアクセスすることはできません。</h1>";
    $this->_render('pages/home', $content);
  }

}