<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_web extends CI_Controller {
var $login;
var $level;
var $menuid;
var $active;

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
        $data['title'] = 'ログイン';
        $data['content'] = 'Login';
        $this->load->view('jpn/v_dashboard',$data);
    }

    function validate_credentials(){
        $data['title'] = 'ログイン';
        $data['content'] = 'Login';
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($this->authlogin->login($username, $password)==true) {
            // echo $this->input->ip_address();die();
            $this->m_common->logAccess($username);
            if($this->session->userdata('USR_LEVELS') == 2){
                redirect('jpn/myjconnect');
            }elseif($username == 'superadmin'){
                redirect('jpn/dashboard');
            }else{
                redirect('jpn/myjconnect_client');
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
            redirect('jpn/login_web/'.$page);
        }
    }

    function failed($msg=null){
        $data['title'] = 'ログイン';
        $data['content'] = 'Login';
        // echo $msg;
        if(isset($msg)){
          switch ($msg) {
            case '1':
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-danger" role="alert"><strong>ごめんなさい！</strong> ログインに失敗しました。別のセッションがアクティブになっています。!<a href=/login/destroy_session>休憩時間</a>?&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ');
              break;
            case '2':
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-danger" role="alert"><strong>ごめんなさい！</strong> ユーザー名とパスワードの組み合わせが正しくありません。もう一度お試しください!&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ');
              break;
            case '3':
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-danger" role="alert"><strong>ごめんなさい！</strong> お客様のアカウントはまだアクティブではありません。登録したメールにアクティベーションを行うか、管理者までご連絡ください!&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ');
              break;
          }
        }
        $this->load->view('jpn/v_dashboard',$data);
    }

    function bye() {
        $data['title'] = 'ログイン';
        $data['content'] = 'Login';
        $this->authlogin->logout(base_url('jpn/dashboard'),$data);
    }
    
    function getValidate(){
        $ygbolehh = $this->input->post('ygbolehh');////oper nama confignya, untuk nilai-->ambil dari config
        $valid = $this->authlogin->getValidatelogin($this->input->post('username'), $this->input->post('password'),$ygbolehh);
        echo $valid;
    }
}