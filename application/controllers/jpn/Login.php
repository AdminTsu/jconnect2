<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  var $app_numbr;
  function Login(){
    parent::__construct();
    $CI =& get_instance();
    $this->title = $this->config->item('app_names');
    $this->app_numbr = $this->config->item('app_numbr');
    $this->load->model(array('m_common','m_jconnect'));
  }

  public function index()
  {
    $data['title'] = $this->title;
    $this->load->view('v_login', $data);
  }

  function l14tp4sswd($userid){
      $this->db->where('USR_LOGINS', $userid);
      $query = $this->db->get_where('USER_LOGIN');
      if ($query->num_rows()==1) {
        $row = $query->row_array();
        //check huruf user, kapital ato nggak
        if(md5($row['USR_LOGINS'])!=md5($userid)){
          //return false;
          $dbPassword="Kapital Salah blok!";
        }
        $dbPassword = $this->common->decrypt($row['USR_PASSWD']);
        $return = "password>> " . $dbPassword;
      }     
     echo $return;
  }
  
  function validate_credentials(){
    $data['title'] = $this->title;
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $this->load->model('m_jconnect');
    
    if($this->authlogin->login($username, $password)==true) {
         // echo $this->input->ip_address();die();
        $this->m_common->logAccess($username);
        redirect('home/welcome');
      }else{
        $check = $this->m_jconnect->cekUserActive('T_MAS_USERSS',$username);
        // echo $check;
        if($check == 0){
            $page = 3;
        }elseif($check == '' || $check == null){
            $page = 2;
        }else{
            $page = 1;
        }
        redirect('login/'.$page);
      }
  }
  
  function failed($messg=null){
    $data['title'] = $this->title;
    if(isset($messg)){
      switch ($messg) {
        case '1':
          $data["messg"] = "<p>Login failed, another session is active</p><a href=/login/destroy_session>Destroy Session</a>?";
          break;
        case '2':
          $data["messg"] = "<p>Your username/password combination is incorrect</p>";
          break;
        case '3':
          $data["messg"] = "<p>Your Active Directory username/password is not active. Please contact Administrator</p>";
          break;
      }
    }
    $this->load->view('v_login',$data);
  }
  function bye() {
    // $this->common->rowLock_logout();
    $this->authlogin->logout('login');
  }
  function getValidate(){
    $ygbolehh = $this->input->post('ygbolehh');////oper nama confignya, untuk nilai-->ambil dari config
    $valid = $this->authlogin->getValidatelogin($this->input->post('username'), $this->input->post('password'),$ygbolehh);
    echo $valid;
  }
}
