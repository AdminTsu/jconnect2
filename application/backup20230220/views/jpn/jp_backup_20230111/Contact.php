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
        $data['title'] = 'お問い合わせ先';
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
        $this->load->view('jpn/v_dashboard',$data);
    }

    function send() {
        $data['title'] = 'お問い合わせ先';
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
                $catgry = 'アカウント/パスワードのアクセスに関する問題';
              break;
            case '2':
                $catgry = '問題のあるページ';
              break;
            case '3':
                $catgry = 'ご意見・ご提案';
              break;
          }
        }

        $recipient = $emails;
        $subject = ucwords($subjct);
        $subjectItem = "
            <meta charset='utf-8' />
            <h3>(お問い合わせ | JConnect.co.id)</h3><hr>
            拝啓／拝啓／拝啓／拝啓<br>
            ".ucwords($namess)."
            <br><br> 
            にメッセージをお送りいただきました ".date('d')." ".date('M')." ".date('Y')." を、以下のメッセージの詳細とともに表示します :
            <br><br>
            カテゴリー  : ".$catgry."
            <br>
            ご注文    : ".$messgs."
            <br><br> 
            私たちのチームは、1x24時間以内にあなたの電子メールを返信または処理します。
            <br><br>            
            よろしくお願いします。<br><br>
            お問い合わせ | Jconnect Team
        ";
        
        // if(trim($recipient)!=""){
        if(!empty($emails) && !empty($namess) && !empty($subjct) && !empty($messgs)){
            if(filter_var($emails, FILTER_VALIDATE_EMAIL) === false){
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-warning" role="alert">正しいEメールをご記入ください。&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
                // redirect('/contact', 'location');
            }else{
                // $successemail = $this->kirimemail->kirim($recipient,$subject,$subjectItem);
                if($this->kirimemail->kirim($recipient,$subject,$subjectItem,2)){
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-success" role="alert">メッセージは正常に送信されました。1x24時間以内にメールを返信いたします。&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }else{
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-danger" role="alert">メッセージが送信されませんでした。もう一度やり直していただくか、管理者にご連絡ください!&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }
            }
        }else{
            $this->session->set_flashdata('msg', '
                <div class="alert alert-warning" role="alert">入力されたデータに不備がある!&emsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
        }
        redirect('/jpn/contact', 'location');
    }
}