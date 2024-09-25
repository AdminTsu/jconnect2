<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
var $login;
var $level;
var $menuid;

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
        $this->load->library("kirimemail");
    }

    function index() {
        $data['title'] = 'Contact';
        $data['content'] = 'Contact';
        $this->load->library('googlemaps');
        $config=array();
        $config['center']="-6.277319823830188, 106.97340992251081";
        $config['zoom']=17;
        $config['map_height']="400px";
        $this->googlemaps->initialize($config);
        $marker=array();
        $marker['position']="-6.277319823830188, 106.97340992251081";
        $this->googlemaps->add_marker($marker);
        $data['map']=$this->googlemaps->create_map();
        $this->load->view('v_dashboard',$data);
    }

    function send() {
        $data['title'] = 'Kontak';
        $data['content'] = 'Contact';

        $catgry = $this->input->get('cmbCATGRY');
        $messgs = $this->input->get('message');
        $namess = $this->input->get('name');
        $emails = $this->input->get('email');
        $subjct = $this->input->get('subject');
        // echo "$messgs ~ $namess ~ $emails ~ $subjct";return;

        $this->sendEmail($catgry,$messgs,$namess,$emails,$subjct);
    }

    function sendEmail($catgry,$messgs,$namess,$emails,$subjct){
        $this->load->library("kirimemail");

        if(isset($catgry)){
          switch ($catgry) {
            case '1':
                $catgry = 'Masalah Akses Akun/Password';
              break;
            case '2':
                $catgry = 'Halaman yang bermasalah';
              break;
            case '3':
                $catgry = 'Kritik dan Saran';
              break;
          }
        }

        $recipient = $emails;
        $subject = ucwords($subjct);
        $subjectItem = "
            <meta charset='utf-8' />
            <h3>(Contact Us | JConnect.co.id)</h3><hr>
            Kepada Yth. Bpk/Ibu/Sdra/i<br>
            ".ucwords($namess)."
            <br><br> 
            Anda sudah megirimkan kami pesan pada tanggal ".date('d')." ".date('M')." ".date('Y')." dengan rincian pesan sebagai berikut :
            <br><br>
            Kategori  : ".$catgry."
            <br>
            Pesan     : ".$messgs."
            <br><br> 
            Terima kasih sudah mengirimkan kami pesan, tim kami akan membalas atau memproses email Anda 1x24 Jam.
            <br><br>            
            Best Regards,<br><br>
            Contact Us | Jconnect Team
        ";
        
        // if(trim($recipient)!=""){
        // echo "$emails - $namess - $subjct - $messgs";die();
        if(empty($emails) AND empty($namess) AND empty($subjct) AND empty($messgs)){
            $this->session->set_flashdata('msg', '
                <div class="alert alert-warning" role="alert">Data yang diisi belum lengkap!.&emsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
        }else{
            if(filter_var($emails, FILTER_VALIDATE_EMAIL) === false){
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-warning" role="alert">Silahkan isi email Anda dengan benar.&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                // redirect('/contact', 'location');
            }else{

                // $successemail = $this->kirimemail->kirim($recipient,$subject,$subjectItem);
                if($this->kirimemail->kirim($recipient,$subject,$subjectItem)){
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-success" role="alert">Pesan Anda berhasil terkirim, kami akan membalas email Anda dalam waktu 1x24 jam.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }else{
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-danger" role="alert">Pesan Anda tidak terkirim, silahkan coba lagi atau hubungi Administartor atau silahkan cek jaringan internet Anda!&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }
            }
        }
        redirect('/contact', 'location');
    }
}