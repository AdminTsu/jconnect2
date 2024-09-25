<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disclaimer extends CI_Controller {
  var $levels;

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
    }

    function index() {
        $this->Main_Disclaimer();
    }
    
    function Main_Disclaimer() {
        $data['title'] = 'Istilah Penggunaan';
        $data['content'] = 'tou';
        $data['menu'] = 'Istilah Penggunaan';
        $this->load->view('v_dashboard',$data);
    }

    function Privacy(){
        $data['title'] = 'Kebijakan Privasi';
        $data['content'] = 'privasi';
        $data['menu'] = 'Kebijakan Privacy';
        $this->load->view('v_dashboard',$data);
    }

    function Disclaimer(){
        $data['title'] = 'Kepemilikan';
        $data['content'] = 'claimer';
        $data['menu'] = 'Kepemilikan';
        $this->load->view('v_dashboard',$data);
    }
}