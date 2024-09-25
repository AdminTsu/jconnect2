<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find_kandidat extends CI_Controller {
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
        $this->load->model(array('m_jconnect','m_master','m_job','m_kandidat','m_pekerja'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->userid = $this->session->userdata('USR_IDENTS');
    }
    
    function index() {
        $data = array();
        $data['title'] = 'Find Kandidat';
        $data['content'] = 'Kandidat';
        
        $keywrd = $this->input->post('txtKEYWRD');
        $lokasi = $this->input->post('txtLOCKSI');
        $spsliz = $this->input->post('cmbSPSLIZ');
        $jobpos = $this->input->post('cmbJOBPOS');
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
        if($url == '/find_kandidat' || $url == '/Find_kandidat'){
            $from = 1;
        }else{
            $from = $matches[0][0];
        }
        $limit       = 10;
        $page        = isset($from) ? (int)$from : 1;
        $jumlah_data = $this->m_pekerja->get_list_kandidat_num($keywrd,$lokasi,$spsliz,$jobpos,$typjob,$salmin,$salmax);
        $start       = ($page > 1) ? (($page * $limit) - $limit) : 0;
        // echo "($page > 1) ? (($page * $limit) - $jumlah_data) : 0 <br>";
 
        // echo $segment['4'];
        $config['use_page_numbers'] = true;
        $config['reuse_query_string'] = true;
        $config['display_pages'] = true;
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'page';

        $config['per_page']         = $limit;
        $config['base_url']         = base_url() . 'Find_kandidat'; //sini
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
        
        $data['isi'] = $this->m_pekerja->get_list_kandidat($limit,$start,$keywrd,$lokasi,$spsliz,$jobpos,$typjob,$salmin,$salmax);
        $data['jml'] = $jumlah_data;
        $data['keywrd'] = $keywrd;
        $data['lokasi'] = $lokasi;
        $data['spsliz'] = $spsliz;
        $data['jobpos'] = $jobpos;
        $data['typjob'] = $typjob;
        $data['salmin'] = $salmin;
        $data['salmax'] = $salmax;
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('v_dashboard',$data);
    }

    function search() {
        $data = array();
        $data['title'] = 'Find Kandidat';
        $data['content'] = 'Kandidat';

        $keywrd = $this->input->post('txtKEYWRD');
        $lokasi = $this->input->post('txtLOCKSI');
        $spsliz = $this->input->post('txtSPSLIZ');
        $typjob = $this->input->post('cmbTYPJOB');
        $salmin = $this->input->post('txtSALMIN');
        $salmax = $this->input->post('txtSALMAX');

        $jobpos1 = $this->input->post('chkJOBPOS1');
        $jobpos2 = $this->input->post('chkJOBPOS2');
        $jobpos3 = $this->input->post('chkJOBPOS3');
        $jobpos4 = $this->input->post('chkJOBPOS4');
        
        if(isset($jobpos1)) {
            $jobpos = $this->input->post('chkJOBPOS1');
        }else if(isset($jobpos2)){
            $jobpos = $this->input->post('chkJOBPOS2');
        }else if(isset($jobpos3)){
            $jobpos = $this->input->post('chkJOBPOS3');
        }else if(isset($jobpos4)){
            $jobpos = $this->input->post('chkJOBPOS4');
        }else{
            $jobpos = $this->input->post('cmbJOBPOS');
        }

        $this->load->library('pagination');
        $segment = $this->uri->segment_array();
        $url = $_SERVER['REQUEST_URI'];
        preg_match_all('/[0-9]+/', $url, $matches);
        if($url == '/find_kandidat/search/' || $url == '/Find_kandidat/search/'){
            $from = 1;
        }else{
            $from = $matches[0][0];
        }
        $limit       = 10;
        $page        = isset($from) ? (int)$from : 1;
        $jumlah_data = $this->m_pekerja->get_list_kandidat_num($keywrd,$lokasi,$spsliz,$jobpos,$typjob,$salmin,$salmax);
        $start       = ($page > 1) ? (($page * $limit) - $limit) : 0;
        // echo "($page > 1) ? (($page * $limit) - $jumlah_data) : 0 <br>";
 
        // echo $segment['4'];
        $config['use_page_numbers'] = true;
        $config['reuse_query_string'] = true;
        $config['display_pages'] = true;
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'page';

        $config['per_page']         = $limit;
        $config['base_url']         = base_url() . 'Find_kandidat/search'; //sini
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
        
        $data['isi'] = $this->m_pekerja->get_list_kandidat($limit,$start,$keywrd,$lokasi,$spsliz,$jobpos,$typjob,$salmin,$salmax);
        $data['jml'] = $jumlah_data;
        $data['keywrd'] = $keywrd;
        $data['lokasi'] = $lokasi;
        $data['spsliz'] = $spsliz;
        $data['jobpos'] = $jobpos;
        $data['typjob'] = $typjob;
        $data['salmin'] = $salmin;
        $data['salmax'] = $salmax;
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('v_dashboard',$data);
    }
    
    function Find_kandidat_detail($idkandidat){
        if($this->login == '' || $this->login == null){
            redirect('Login_web');
        }
        $data['title'] = 'Find Kandidat Detail';
        $data['content'] = 'Kandidat_detail';
        // $data['range'] = $this->m_job->get_salary_range();
        // echo $idjob;die();
        $data['idkandidat'] = $idkandidat;
        $this->load->view('v_dashboard',$data);
    }
    
    function Apply($idkandidat){
        $this->datesave = date('Y-m-d H:i:s');
        if($this->login == '' || $this->login == null){
            redirect('login_web');
        }
        $data['title'] = 'Apply';
        $data['content'] = 'Apply';
        $data['idkandidat'] = $idkandidat;
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
        redirect('Find_kandidat/apply/'.$idjobs.'');
    }
}