<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_web extends CI_Controller {
var $login;
var $level;
var $menuid;
var $active;
var $title;

    function __construct() {
        parent::__construct();
        $CI =& get_instance();
        $this->title = $this->config->item('app_names');
        $this->app_numbr = $this->config->item('app_numbr');
        $this->load->helper(array('ginput','dashboard','jqxgrid','file'));
        $this->load->model(array('m_jconnect','m_common'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->active = $this->session->userdata('USR_ACTIVE');
    }

    function index() {
        $this->LoginWeb();
    }

    function LoginWeb() {
        $data['title'] = 'Login';
        $data['content'] = 'Login';
        $this->load->view('v_dashboard',$data);
    }

    function validate_credentials(){
        $data['title'] = 'Login';
        $data['content'] = 'Login';
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($this->authlogin->login($username, $password)==true) {
            // echo $this->input->ip_address();die();
            $this->m_common->logAccess($username);
            if($this->session->userdata('USR_LEVELS') == 2){
                redirect('Myjconnect');
            }elseif($username == 'superadmin'){
                redirect('dashboard');
            }else{
                redirect('Myjconnect_Client');
            }
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
            redirect('Login_web/'.$page);
        }
    }

                // $this->session->set_flashdata('msg', '
                //     <div class="alert alert-danger" role="alert"><strong>Mohon Maaf!</strong> Login gagal, sesi lain sedang aktif!<a href=/login/destroy_session>Hancurkan Sesi</a>?&emsp;
                //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //             <span aria-hidden="true">&times;</span>
                //         </button>
                //     </div>
                // ');
    function failed($msg=null){
        $data['title'] = 'Login';
        $data['content'] = 'Login';
        // echo $msg;
        if(isset($msg)){
          switch ($msg) {
            case '1':
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-danger" role="alert"><strong>Mohon Maaf!</strong> Login gagal, sesi lain sedang aktif!&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ');
              break;
            case '2':
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-danger" role="alert"><strong>Mohon Maaf!</strong> Kombinasi nama pengguna/kata sandi Anda salah. Silakan coba lagi!&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ');
              break;
            case '3':
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-danger" role="alert"><strong>Mohon Maaf!</strong> Akun Anda belum terdaftar atau belum Aktif. Jika sudah mendaftar, silakan melakukan aktivasi di email yang sudah Anda daftarkan atau hubungi Administrator!&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ');
              break;
          }
        }
        $this->load->view('v_dashboard',$data);
    }

    function bye() {
        $data['title'] = 'Login';
        $data['content'] = 'Login';
        $this->authlogin->logout(base_url('dashboard'),$data);
    }
    
    function getValidate(){
        $ygbolehh = $this->input->post('ygbolehh');////oper nama confignya, untuk nilai-->ambil dari config
        $valid = $this->authlogin->getValidatelogin($this->input->post('username'), $this->input->post('password'),$ygbolehh);
        echo $valid;
    }
}