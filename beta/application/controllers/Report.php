<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
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
        $this->load->helper(array('ginput','dashboard','jqxgrid','file'));
        $this->load->model(array('m_jconnect','m_master','m_job','m_common','m_pekerja','m_client'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->active = $this->session->userdata('USR_ACTIVE');
        $this->userid = $this->session->userdata('USR_IDENTS');
        $this->datesave = date('Y-m-d H:i:s');
        if($this->login == '' || $this->login == null){
            redirect('Login_web');
        }
    }

    function index() {
        $data = array();
        $data['title'] = 'Laporan';
        $data['content'] = 'report';
        $data['menu'] = 'Laporan';
        $data['icon'] = '<i class="fa fa-user"></i>';
        $data['link_menu'] = 'profile_edit';
        $data['type'] = 5;
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function show_report($opt,$types,$rpt){
        $opt = "P";
        if($types == 1){
            $descre = 'Laporan Rekap';
        }else{
            $descre = 'Laporan Detail';
        }
        
        if($opt==1){
            $string = read_file("temp/$rpt.rpcx");
            unlink("temp/$rpt.rpcx");
            echo $string;
        }elseif($opt==2){
             // Fungsi header dengan mengirimkan raw data excel
              header("Content-type: application/vnd-ms-excel");    
              // Mendefinisikan nama file ekspor "Laporan-HRD.xls"
              header("Content-Disposition: attachment; filename=Laporan-$descre.xls");
              header("Expires: 0");
              header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
              header("Pragma: public");
         }
    }    

    function cetakLaporan(){
        $types = $this->input->post('types');
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');

        $data['title'] = 'Laporan';
        $data['types'] = $types;
        $data['tahun'] = $tahun;
        $data['bulan'] = $bulan;
        $data['data'] = $this->m_client->getApplayJobReport($this->userid,$types,$tahun,$bulan);

        $this->load->view('v_rpt_html',$data);
    }

    function exportExcel(){
        $this->load->library('libexcel'); 
        // $this->common->debug_post();
        $cabang = $this->input->post('CABANG');
        $areass = $this->input->post('AREASS');
        $dates1 = $this->input->post('DATESS');
        $dates2 = $this->input->post('DATAKH');

        $urut = 0;
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Cabang',    'namanya'=>'CABANG','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Area',      'namanya'=>'AREA','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'SPG',       'namanya'=>'SPG','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Tgl.Jual',  'namanya'=>'TGL_PENJUALAN','width'=>80);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Bulan',     'namanya'=>'BULAN','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Tahun',     'namanya'=>'TAHUN','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Customer',  'namanya'=>'CUSTOMER','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Produk',    'namanya'=>'PRODUK','width'=>80);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Harga',     'namanya'=>'HARGA','width'=>80,'ga'=>'right');
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Stok Awal', 'namanya'=>'STK_AWALLL','width'=>80,'ga'=>'right');
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Sell In',   'namanya'=>'SELLIN','width'=>80,'ga'=>'right');
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Qty',       'namanya'=>'QTY','width'=>80,'ga'=>'right');
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Retur',     'namanya'=>'RETURS','width'=>80,'ga'=>'right');
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Stok Akhir','namanya'=>'STK_AKHIRR','width'=>80,'ga'=>'right');
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Value',     'namanya'=>'NILAI','width'=>100,'ga'=>'right');
        
        $datenow = date('Y_m_d');
        $jdata = $this->m_client->getApplayJobReport($this->userid,$types,$tahun,$bulan);
        $arrExcel = array('sNAMESS'=>'Rekap Posting Lowongan', 'sFILNAM'=>'Rekap Posting Lowongan '.$datenow,'col'=>$arrCol, 'rsl'=>$jdata->result());
        return $this->libexcel->bangunexcel($arrExcel);
    }

    function cetak(){
        $data['title'] = 'Laporan';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);

        $this->load->view('v_rpt_html',$data);
    }
}
?>