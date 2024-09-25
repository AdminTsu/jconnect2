<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TermOfUse extends CI_Controller {
var $login;
var $level;
var $menuid;
var $active;
var $userid;

    function __construct() {
        parent::__construct();
        $CI =& get_instance();
        $this->title = $this->config->item('app_names');
        $this->load->library('pagination');
        $this->load->helper(array('ginput','dashboard','jqxgrid'));
        $this->load->model(array('m_jconnect','m_master','m_job'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->active = $this->session->userdata('USR_ACTIVE');
        $this->userid = $this->session->userdata('USR_IDENTS');
    }

    function index() {
        $this->Main_TermOfUse();
    }
    
    function Main_TermOfUse() {
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 1;
        $this->load->view('v_dashboard',$data);
    }

    function Definisi(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 2;
        $this->load->view('v_dashboard',$data);
    }

    function Registrasi(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 3;
        $this->load->view('v_dashboard',$data);
    }

    function Security(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 4;
        $this->load->view('v_dashboard',$data);
    }
    
    function Hak_milik(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 5;
        $this->load->view('v_dashboard',$data);
    }
    
    function Ketersediaan(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 6;
        $this->load->view('v_dashboard',$data);
    }
    
    function penggunaan_anda_atas_situs(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 7;
        $this->load->view('v_dashboard',$data);
    }
    function penggunaan_anda_atas_layanan(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 8;
        $this->load->view('v_dashboard',$data);
    }
    
    function term_for_company(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 9;
        $this->load->view('v_dashboard',$data);
    }
    
    function term_of_user(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 10;
        $this->load->view('v_dashboard',$data);
    }
    
    function term_of_candidate(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 11;
        $this->load->view('v_dashboard',$data);
    }
    
    function user_send(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 12;
        $this->load->view('v_dashboard',$data);
    }
    
    function billing(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 13;
        $this->load->view('v_dashboard',$data);
    }
    
    function hak_menangguhkan(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 14;
        $this->load->view('v_dashboard',$data);
    }
    
    function duedate(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 15;
        $this->load->view('v_dashboard',$data);
    }
    
    function kewajiban(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 16;
        $this->load->view('v_dashboard',$data);
    }
    
    function penolakan(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 17;
        $this->load->view('v_dashboard',$data);
    }
    
    function pihak_ketiga(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 18;
        $this->load->view('v_dashboard',$data);
    }
    
    function sponsor(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 19;
        $this->load->view('v_dashboard',$data);
    }
    
    function ganti_rugi(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 20;
        $this->load->view('v_dashboard',$data);
    }
    
    function legal_valid(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 21;
        $this->load->view('v_dashboard',$data);
    }
    
    function international(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 22;
        $this->load->view('v_dashboard',$data);
    }
    
    function variety(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 23;
        $this->load->view('v_dashboard',$data);
    }
    
    function publics(){
        $data['title'] = '使用期間';
        $data['content'] = 'tou';
        $data['type'] = 24;
        $this->load->view('v_dashboard',$data);
    }
    
}