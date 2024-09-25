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
        $data['title'] = '求人情報を探す';
        $data['content'] = 'Jobs';

        $keywrd = $this->input->post('txtKEYWRD');
        $lokasi = $this->input->post('txtLOCKSI');
        $spsliz = $this->input->post('cmbSPSLIZ');
        $typjob = $this->input->post('cmbTYPJOB');
        // echo "$keywrd ~ $lokasi <br>";

        $this->load->library('pagination');
        $from        = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        $segment = $this->uri->segment_array();
        // echo "$from <br> segment = ".$segment['1'].'<br>';
        // print_r($segment).'<br>';
        $limit       = 5;
        $page        = isset($pagess) ? (int)$pagess : 1;
        $jumlah_data = $this->m_job->get_list_jobs_num($keywrd,$lokasi);
        $start       = ($page > 1) ? (($page * $limit) - $limit) : 0;
        // echo "($page > 1) ? (($page * $limit) - $jumlah_data) : 0 <br>";
 
        // echo $segment['4'];
        $config['use_page_numbers'] = true;
        $config['reuse_query_string'] = true;
        $config['display_pages'] = true;
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'page';

        $config['per_page']         = $limit;
        $config['base_url']         = base_url() . 'find_jobs/'; //sini
        $config['total_rows']       = $jumlah_data;
        $config['first_link']       = 'はじめに';
        $config['last_link']        = '最後';
        $config['next_link']        = '次のページ';
        $config['prev_link']        = '前';
        $config["uri_segment"]      = 3;

        $config['full_tag_open']    = '<div class="pagging text-right"><nav><ul class="pagination justify-content-end">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(電流)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['prev_tagl_close']  = '</span>次のページ</li>';
        $config['first_tag_open']   = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);

        if($jumlah_data == '' || $jumlah_data == 0 || $jumlah_data == null){
            $jumlah_data = 0;
        }
        
        $data['isi'] = $this->m_job->get_list_jobs($limit,$start,$keywrd,$lokasi,$spsliz,$typjob);
        $data['jml'] = $jumlah_data;
        $data['keywrd'] = $keywrd;
        $data['lokasi'] = $lokasi;
        $data['spsliz'] = $spsliz;
        $data['typjob'] = $typjob;
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('jpn/v_dashboard',$data);
    }

    function search() {
        $data = array();
        $data['title'] = '求人情報を探す';
        $data['content'] = 'Jobs';

        $keywrd = $this->input->post('txtKEYWRD');
        $lokasi = $this->input->post('txtLOCKSI');
        $spsliz = $this->input->post('txtSPSLIZ');
        $typjob = $this->input->post('cmbTYPJOB');
        // echo "$keywrd ~ $lokasi <br>";

        $this->load->library('pagination');
        $from        = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        $segment = $this->uri->segment_array();
        // echo "$from <br> segment = ".$segment['1'].'<br>';
        // print_r($segment).'<br>';
        $limit       = 5;
        $page        = isset($pagess) ? (int)$pagess : 1;
        $jumlah_data = $this->m_job->get_list_jobs_num($keywrd,$lokasi,$spsliz,$typjob);
        $start       = ($page > 1) ? (($page * $limit) - $limit) : 0;
        // echo "($page > 1) ? (($page * $limit) - $jumlah_data) : 0 <br>";
 
        // echo $segment['4'];
        $config['use_page_numbers'] = true;
        $config['reuse_query_string'] = true;
        $config['display_pages'] = true;
        $config['page_query_string'] = true;
        $config['query_string_segment'] = 'page';

        $config['per_page']         = $limit;
        $config['base_url']         = base_url() . 'find_jobs/'; //sini
        $config['total_rows']       = $jumlah_data;
        $config['first_link']       = 'はじめに';
        $config['last_link']        = '最後';
        $config['next_link']        = '次のページ';
        $config['prev_link']        = '前';
        $config["uri_segment"]      = 3;

        $config['full_tag_open']    = '<div class="pagging text-right"><nav><ul class="pagination justify-content-end">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span style="border-color:#000066" class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(電流)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['prev_tagl_close']  = '</span>次のページ</li>';
        $config['first_tag_open']   = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span style="border-color:#000066" class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        
        if($jumlah_data == '' || $jumlah_data == 0 || $jumlah_data == null){
            $jumlah_data = 0;
        }
        
        $data['isi'] = $this->m_job->get_list_jobs($limit,$start,$keywrd,$lokasi,$spsliz,$typjob);
        $data['jml'] = $jumlah_data;
        $data['keywrd'] = $keywrd;
        $data['lokasi'] = $lokasi;
        $data['spsliz'] = $spsliz;
        $data['typjob'] = $typjob;
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('jpn/v_dashboard',$data);
    }

    function Find_Jobs_detail($idjob){
        $data['title'] = '求人情報の詳細を見る';
        $data['content'] = 'Jobs_detail';
        // $data['range'] = $this->m_job->get_salary_range();
        // echo $idjob;die();
        $data['idjobs'] = $idjob;
        $this->load->view('jpn/v_dashboard',$data);
    }

    function Apply($idjob){
        $data['title'] = '適用';
        $data['content'] = 'Apply';
        $data['idjobs'] = $idjob;
        $this->load->view('jpn/v_dashboard',$data);
    }

    function SubmitApply($idjobs){
        // $id =  $this->uri->segment(3);
        $userid = $this->userid;
        $reason = $this->input->get('reason');

        $result = $this->m_job->getDataUser($idjobs);
        
        foreach($result as $row){
            $idnya = $row->idnya;
        }
        // echo "$id - $idnya - $nama";die();
        
        if($userid){
            $data = array(
                'APP_IDJOBS' => $idjobs,
                'APP_IDPKRJ' => $userid,
                'APP_STATUS' => 1,
                'APP_REASON' => $reason,
                'APP_USRCRT' => $this->login,
                'APP_DATCRT' => $this->datesave
            );

            $this->crud->useTable('T_TRN_APPLYJ');
            $this->crud->save($data);
            $this->crud->unsetMe();

            $this->session->set_flashdata('msg','<div class="alert alert-success"><strong>この度は、ご応募ありがとうございました。</strong>弊社からの確認をお待ちください<a href=/login/destroy_session>休憩時間</a>?&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-</div>');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>申し訳ございませんが、応募は無効となりました。</strong><a href=/login/destroy_session>休憩時間</a>?&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-</div>');
        }
        redirect('jpn/find_jobs/apply/'.$idjobs.'');
    }
}