<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
        $this->load->library("kirimemail");
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
    }

    function index() {
        // $this->load->view('v_dashboard');
        $this->Main_dashboard();
    }
    
    function Main_dashboard() {
        $data['title'] = 'ホーム';
        $data['content'] = 'Dashboard';
        $this->load->view('jpn/v_dashboard',$data);
    }

    function Home() {
        $data['title'] = 'ホーム';
        $data['content'] = 'Home';
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function about() {
        $data['title'] = '会社概要';
        $data['content'] = 'About';
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function list_data($pencarian,$offset,$total){
        if ($pencarian){
            $this->db->like('nama',$pencarian);
        }     
        $result['total_rows'] = $this->db->count_all_results('data_barang');

        if ($pencarian){
            $this->db->like('nama',$pencarian);
        }
        $query = $this->db->get('data_barang',$total,$offset);

        $result['data'] = $query->result(); 
        return $result;
    }

    function kirimemail($IDENTS,$type){
        $this->load->library("kirimemail");

        $namess = $this->input->post('name');
        $emails = $this->input->post('email');
        $subjct = $this->input->post('subject');
        $messag = $this->input->post('message');
        
        $recipient = "fauzidwi28@gmail.com";
        $subject = $subjct;

        $html = "
            <html>
                <table>
                    <tr>
                        <td>管理人様へ。</td>
                    </tr>
                    <tr>
                        <td> 同時に、次のことも伝えたいと思います。 $messag</td>
                    </tr>
                    <tr>
                        <td>このようなメッセージをお伝えしています。</td>
                    </tr>
                </table>
            </html>
        ";
        
        $subjectItem = $html;
        
        if(trim($recipient)!=""){

            if($this->kirimemail->kirim($recipient,$subject,$subjectItem)){
                $successemail = true;
            }else{
                $successemail = false;
            }
        }
        return $successemail;
    }

    function Apply($idjob){
        $data['title'] = '適用';
        $data['content'] = 'Apply';
        $data['idjobs'] = $idjob;
        $this->load->view('jpn/v_dashboard',$data);
    }

    function Feedback() {
        $data['title'] = 'フィードバック';
        $data['content'] = 'feedback';
        $this->load->view('jpn/v_dashboard',$data);
    }

    function send() {
        $namess = $this->input->post('txtNAMESS');
        $emails = $this->input->post('txtEMAILS');
        $messgs = $this->input->post('txtMESSAG');
        // echo "$messgs ~ $namess ~ $emails";die();

        $this->sendEmail($messgs,$namess,$emails);
    }

    function sendEmail($messgs,$namess,$emails){
        $this->load->library("kirimemail");
        // echo "$messgs ~ $namess ~ $emails";die();

        $subject = 'フィードバック | JConnect.co.id';
        $recipient = $emails;
        $subjectItem = "
            <h3>(フィードバック | JConnect.co.id)</h3><hr>
            <head>
                <title>フィードバック</title>
            </head>
            <body>
                <p>拝啓／拝啓／拝啓／拝啓<br>
                ".ucwords($namess)."
                </p>
                <br><br> 
                <h2>ご意見をお寄せいただき、ありがとうございました :</h2>
                <p>".$messgs."
                <br><br>
                <p>お客様のご意見をもとに、弊社で評価し、必要であれば加工を行います。<p>
            </body>
            <footer>
                <p>
                    よろしくお願いします。<br><br>
                    Jconnect Team
                </p>
            </footer>
        ";

        if(!empty($emails) && !empty($namess) && !empty($messgs)){
            if(filter_var($emails, FILTER_VALIDATE_EMAIL) === false){
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-warning" role="alert">正しいEメールをご記入ください。&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else{

                if($this->kirimemail->kirim($recipient,$subject,$subjectItem)){
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-success" role="alert">メッセージは正常に送信されました。1x24時間以内にメールを返信いたします。&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }else{
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-danger" role="alert">メッセージが送信されませんでした。もう一度やり直していただくか、管理者にご連絡ください。&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }
            }
        }else{
            $this->session->set_flashdata('msg', '
                <div class="alert alert-warning" role="alert">記入したデータに不備がある！&emsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
        }
        redirect('/jpn/dashboard/feedback', 'location');
    }

    // function chek_login() {
    //     if (isset($_POST['submit'])) {
    //         // proses login disini

    //         $username = $this->input->post('username');
    //         $password = $this->input->post('password');
    //         $loginUser = $this->Model_user->chekLogin($username, $password);
    //         $loginGuru = $this->Model_guru->chekLogin($username, $password);
    //         if (!empty($loginUser)) {
    //             // sukses login user
    //             $this->session->set_userdata($loginUser);
    //             redirect('siswa');
    //         } elseif (!empty($loginGuru)) {
    //             // login guru
    //             $session = array(
    //                 'nama_lengkap'  =>  $loginGuru['nama_guru'],
    //                 'id_level_user' =>  3,
    //                 'id_guru'       =>  $loginGuru['id_guru']);
    //             $this->session->set_userdata($session);
    //             redirect('jadwal');
    //         } else {
    //             // gagal login
    //             redirect('auth');
    //         }
    //     } else {
    //         redirect('auth');
    //     }
    // }

    // function logout() {
    //     $this->session->sess_destroy();
    //     redirect('auth');
    // }

}