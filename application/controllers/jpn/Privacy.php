<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends CI_Controller {
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
        $this->Main_Privacy();
    }
    
    function Main_Privacy() {
        $data['title'] = 'プライバシーポリシー| Jコネクト';
        $data['content'] = 'privasi';
        $data['type'] = 1;
        $this->load->view('jpn/v_dashboard',$data);
    }

    function informasi_pribadi(){
        $data['title'] = 'プライバシーポリシー 個人情報の収集';
        $data['content'] = 'privasi';
        $data['type'] = 2;
        $this->load->view('jpn/v_dashboard',$data);
    }

    function tujuan_pengumpulan_data(){
        $data['title'] = '個人情報の収集と利用の目的';
        $data['content'] = 'privasi';
        $data['type'] = 3;
        $this->load->view('jpn/v_dashboard',$data);
    }

    function profile(){
        $data['title'] = 'プロフィール プライバシー ポリシー';
        $data['content'] = 'privasi';
        $data['type'] = 4;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function pilihan_akses(){
        $data['title'] = 'プライバシー ポリシーの選択と個人情報へのアクセス';
        $data['content'] = 'privasi';
        $data['type'] = 5;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function retensi_informasi(){
        $data['title'] = 'プライバシーポリシー 個人情報の保持';
        $data['content'] = 'privasi';
        $data['type'] = 6;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function keamanan_informasi(){
        $data['title'] = 'プライバシーポリシー 個人情報セキュリティ';
        $data['content'] = 'privasi';
        $data['type'] = 7;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function kepada_siapa(){
        $data['title'] = '個人情報の開示対象者';
        $data['content'] = 'privasi';
        $data['type'] = 8;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function kewajiban_anda(){
        $data['title'] = 'お客様の個人情報に関する義務';
        $data['content'] = 'privasi';
        $data['type'] = 9;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function transfer_informasi(){
        $data['title'] = '地元の管轄区域外への情報の転送';
        $data['content'] = 'privasi';
        $data['type'] = 10;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function situs_terkait(){
        $data['title'] = 'リンク先サイトのプライバシー ポリシー';
        $data['content'] = 'privasi';
        $data['type'] = 11;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function persetujuan_anda(){
        $data['title'] = 'プライバシー ポリシー あなたの同意';
        $data['content'] = 'privasi';
        $data['type'] = 12;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function kontak_informasi(){
        $data['title'] = 'プライバシーポリシー 連絡先情報';
        $data['content'] = 'privasi';
        $data['type'] = 13;
        $this->load->view('jpn/v_dashboard',$data);
    }
    
}