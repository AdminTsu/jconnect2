<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find_jobs extends CI_Controller {
var $login;
var $level;
var $menuid;
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
        $this->userid = $this->session->userdata('USR_IDENTS');
    }
    
    function index() {
        $data = array();
        $data['title'] = 'Find Jobs';
        $data['content'] = 'Jobs';
        
        $keywrd = $this->input->post('txtKEYWRD');
        $lokasi = $this->input->post('txtLOCKSI');
        $spsliz = $this->input->post('cmbSPSLIZ');
        $typjob = $this->input->post('cmbTYPJOB');
        $salmin = $this->input->post('txtSALMIN');
        $salmax = $this->input->post('txtSALMAX');
        // echo "$keywrd ~ $lokasi <br>";

        $this->load->library('pagination');
        // $from        = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        $segment = $this->uri->segment_array();
        // echo "$from <br> segment = ".$segment['1'].'<br>';
        // print_r($segment).'<br>';
        $url = $_SERVER['REQUEST_URI'];
        preg_match_all('/[0-9]+/', $url, $matches);
        if($url == '/find_jobs' || $url == '/Find_jobs'){
            $from = 1;
        }else{
            $from = $matches[0][0];
        }
        $limit       = 5;
        $page        = isset($from) ? (int)$from : 1;
        $jumlah_data = $this->m_job->get_list_jobs_num($keywrd,$lokasi,$spsliz,$typjob,$salmin,$salmax);
        $start       = ($page > 1) ? (($page * $limit) - $limit) : 0;
        // echo "($page > 1) ? (($page * $limit) - $jumlah_data) : 0 <br>";
 
        // echo $segment['4'];
        $config['use_page_numbers'] = true;
        $config['reuse_query_string'] = true;
        $config['display_pages'] = true;
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'page';

        $config['per_page']         = $limit;
        $config['base_url']         = base_url() . 'Find_jobs'; //sini
        $config['total_rows']       = $jumlah_data;
        $config['first_link']       = 'Pertama';
        $config['last_link']        = 'Terakhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config["uri_segment"]      = 3;

        $config['full_tag_open']    = '<div class="pagging text-right"><nav><ul class="pagination justify-content-end">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);

        if($jumlah_data == '' || $jumlah_data == 0 || $jumlah_data == null){
            $jumlah_data = 0;
        }
        
        $data['isi'] = $this->m_job->get_list_jobs($limit,$start,$keywrd,$lokasi,$spsliz,$typjob,$salmin,$salmax);
        $data['jml'] = $jumlah_data;
        $data['keywrd'] = $keywrd;
        $data['lokasi'] = $lokasi;
        $data['spsliz'] = $spsliz;
        $data['typjob'] = $typjob;
        $data['salmin'] = $salmin;
        $data['salmax'] = $salmax;
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('v_dashboard',$data);
    }

    function search() {
        $data = array();
        $data['title'] = 'Find Jobs';
        $data['content'] = 'Jobs';

        $keywrd = $this->input->post('txtKEYWRD');
        $lokasi = $this->input->post('txtLOCKSI');
        $spsliz = $this->input->post('txtSPSLIZ');
        $typjob = $this->input->post('cmbTYPJOB');
        $salmin = $this->input->post('txtSALMIN');
        $salmax = $this->input->post('txtSALMAX');
        // echo "$keywrd ~ $lokasi <br>";

        $this->load->library('pagination');
        // $from        = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        $segment = $this->uri->segment_array();
        // echo "$from <br> segment = ".$segment['1'].'<br>';
        // print_r($segment).'<br>';
        $url = $_SERVER['REQUEST_URI'];
        preg_match_all('/[0-9]+/', $url, $matches);
        if($url == '/find_jobs/search/' || $url == '/Find_jobs/search/'){
            $from = 1;
        }else{
            $from = $matches[0][0];
        }
        $limit       = 5;
        $page        = isset($from) ? (int)$from : 1;
        $jumlah_data = $this->m_job->get_list_jobs_num($keywrd,$lokasi,$spsliz,$typjob,$salmin,$salmax);
        $start       = ($page > 1) ? (($page * $limit) - $limit) : 0;
        // echo "($page > 1) ? (($page * $limit) - $jumlah_data) : 0 <br>";
 
        // echo $segment['4'];
        $config['use_page_numbers'] = true;
        $config['reuse_query_string'] = true;
        $config['display_pages'] = true;
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'page';

        $config['per_page']         = $limit;
        $config['base_url']         = base_url() . 'Find_jobs/search'; //sini
        $config['total_rows']       = $jumlah_data;
        $config['first_link']       = 'Pertama';
        $config['last_link']        = 'Terakhir';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config["uri_segment"]      = 3;

        $config['full_tag_open']    = '<div class="pagging text-right"><nav><ul class="pagination justify-content-end">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span style="border-color:#000066" class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        
        if($jumlah_data == '' || $jumlah_data == 0 || $jumlah_data == null){
            $jumlah_data = 0;
        }
        
        $data['isi'] = $this->m_job->get_list_jobs($limit,$start,$keywrd,$lokasi,$spsliz,$typjob,$salmin,$salmax);
        $data['jml'] = $jumlah_data;
        $data['keywrd'] = $keywrd;
        $data['lokasi'] = $lokasi;
        $data['spsliz'] = $spsliz;
        $data['typjob'] = $typjob;
        $data['salmin'] = $salmin;
        $data['salmax'] = $salmax;
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('v_dashboard',$data);
    }
    
    function Find_Jobs_detail($idjob){
        if($this->login == '' || $this->login == null){
            redirect('Login_web');
        }
        $data['title'] = 'Find Jobs Detail';
        $data['content'] = 'Jobs_detail';
        // $data['range'] = $this->m_job->get_salary_range();
        // echo $idjob;die();
        $data['idjobs'] = $idjob;
        $this->load->view('v_dashboard',$data);
    }
    
    function Apply($idjob){
        $this->datesave = date('Y-m-d H:i:s');
        if($this->login == '' || $this->login == null){
            redirect('login_web');
        }
        $data['title'] = 'Apply';
        $data['content'] = 'Apply';
        $data['idjobs'] = $idjob;
        $this->load->view('v_dashboard',$data);
    }
    
    function SubmitApply($idjobs,$idpkrj){
        // $id =  $this->uri->segment(3);
        $this->datesave = date('Y-m-d H:i:s');
        $userid = $this->userid;
        $reason = $this->input->get('reason');

        $result = $this->m_job->getDataUser($idjobs);
        
        foreach($result as $row){
            $idnya = $row->idnya;
        }
        // echo "$id - $idnya - $nama";die();
        
        if($userid != '' && $idpkrj != ''){
            $data = array(
                'APP_IDJOBS' => $idjobs,
                'APP_IDPKRJ' => $idpkrj,
                'APP_STATUS' => 1,
                'APP_REASON' => $reason,
                'APP_USRCRT' => $this->login,
                'APP_DATCRT' => $this->datesave
            );

            $this->crud->useTable('T_TRN_APPLYJ');
            $this->crud->save($data);
            $this->crud->unsetMe();

            $this->session->set_flashdata('msg','
                <div class="alert alert-success">
                    <strong>Selamat lamaran anda berhasil dilakukan. </strong>Mohon menunggu konfirmasi dari kami.?&emsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
        }else{
            $this->session->set_flashdata('msg','
                <div class="alert alert-danger"><strong>Maaf, lamaran anda belum berhasil.</strong>?&emsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
        }
        redirect('Find_jobs/apply/'.$idjobs.'');
    }
}