<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find extends CI_Controller {
  var $levels;

    function __construct() {
        parent::__construct();
        $CI =& get_instance();
        $this->title = $this->config->item('app_names');
        $this->load->helper(array('ginput','dashboard','jqxgrid'));
        $this->load->model(array('m_jconnect','m_master'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
    }

    function index() {
        // $this->load->view('v_dashboard');
        $this->FindForm();
    }

    function FindForm() {
        $data['title'] = 'Find Job';
        $data['content'] = 'Jobs';
        $data['script'] = "
            <script>
                $(document).ready(function(){
                    
                    alert('testing');return;
                });
            </script>
        ";
        $this->load->view('v_dashboard',$data);
    }

    function listJob(){
        $data['content'] = 'List Job';

        $this->load->view('v_dashboard',$data);
    }

    function listJob_Detail(){
        $data['content'] = 'List Job Detail';
        
        $this->load->view('v_dashboard',$data);
    }
    
}
?>