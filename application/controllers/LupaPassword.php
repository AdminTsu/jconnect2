<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LupaPassword extends CI_Controller
{
    var $login;
    var $level;
    var $menuid;
    var $active;
    var $title;

    function __construct()
    {
        parent::__construct();
        $CI = &get_instance();
        $this->title = $this->config->item('app_names');
        $this->app_numbr = $this->config->item('app_numbr');
        $this->load->helper(array('ginput', 'dashboard', 'jqxgrid', 'file'));
        $this->load->model(array('m_jconnect', 'm_common'));
    }

    function index()
    {
        $this->respa();
    }

    function respa()
    {
        $data['title'] = 'Lupa Password';
        $data['content'] = 'Lupa Password';
        $this->load->view('v_dashboard', $data);
    }

    function respanya(){
        $this->load->library('kirimemail');
        $data['title'] = 'Reset Password';
        $account = $this->input->post('account');
        $token = 0;

        // $this->form_validation->set_rules('password','Password','required');

        if(empty($account)){

            if(filter_var($account, FILTER_VALIDATE_EMAIL) === false){
                $this->session->set_flashdata('msg', "
                    <div class='alert alert-danger' role='alert'>Format email belum sesuai/belum diisi, silahkan isi dengan benar!.&emsp;
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>");
            }
            
        }else{

            if($account != ''){
                $cek_account = $this->m_jconnect->cekAccount('T_MAS_USERSS',$account);
                if($cek_account == 0){

                    $this->session->set_flashdata('msg', "
                        <div class='alert alert-danger' role='alert'>Maaf, Akun Anda belum terdaftar. Silahkan isi ulang dan perika kembali!.&emsp;
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                    ");

                    redirect('LupaPassword');
                    
                }
                
                $cek_token = $this->m_jconnect->cekAccountToken(1,'T_MAS_TOKEN',$account,$token);
                $tokens = substr(sha1(rand()), 0, 32);
                
                if($cek_token == 0){
                    $tkndta = array(
                        'TKN_ACCONT' => $account,
                        'TKN_TOKENS' => $tokens,
                        'TKN_DATCRT' => date('Y-m-d H:i:s'),
                        'TKN_COUNTS' => 1
                    );
                    $this->crud->useTable('T_MAS_TOKEN');
                    $this->crud->save($tkndta);
                }else{
                    $get_jml = $this->m_jconnect->GetCountAccount('T_MAS_TOKEN',$account);
                    $tkndta = array(
                        'TKN_TOKENS' => $tokens,
                        'TKN_DATCRT' => date('Y-m-d H:i:s'),
                        'TKN_COUNTS' => $get_jml
                    );
                    $this->crud->useTable('T_MAS_TOKEN');
                    $this->crud->save($tkndta, array('TKN_ACCONT'=> $account));
                }
                $this->crud->unsetMe();
                
                $subject = 'Reset Password | JConnect.co.id';
                $recipient = $account;

            // //generate simple random code
            // $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            // $code = substr(str_shuffle($set), 0, 12);

            // $data = array(
            //     'USR_EMAILS' => $account,
            //     'USR_USRUPD' => 'new_register',
            //     'USR_DATUPD' => date('Y-m-d H:i:s')
            // );
            
            // $this->crud->useTable('T_MAS_USERSS');
            // $this->crud->save($data, array('USR_EMAILS'=> $account));
            // $this->crud->unsetMe();

$subjectItem = "
    <meta charset='utf-8' />
    <style>
        body {
          font-family: sans-serif;
          background: #aec6cf;
        }

        h1 {
          text-align: center;
          /*ketebalan font*/
          font-weight: 300;
        }

        .kotak_login {
          width: 350px;
          background: white;
          border-radius: 10px;
          /*meletakkan form ke tengah*/
          margin: 80px auto;
          padding: 30px 20px;
        }

        label {
          font-size: 11pt;
        }

        .form_login {
          /*membuat lebar form penuh*/
          box-sizing: border-box;
          width: 100%;
          padding: 10px;
          font-size: 11pt;
          margin-bottom: 20px;
        }

        .tombol_login {
          background: #779ecb;
          color: white;
          font-size: 11pt;
          width: 100%;
          border: none;
          border-radius: 3px;
          padding: 10px 20px;
        }

    </style>

    <html>
        ".header('Content-Type: text/html; charset=UTF-8')."
        <div class='kotak_login'>
            <h3>Reset Password</h3><hr>
            <head>
                <title>JConnect</title>
            </head>
                <body>

                    <table border='0' width='430' cellspacing='0' cellpadding='0' style='border-collapse:collapse;margin:0 auto 0 auto'>
                        <tbody>
                            <tr>
                                <td>
                                    <table border='0' width='430px' cellspacing='0' cellpadding='0' style='border-collapse:collapse;margin:0 auto 0 auto;width:430px'>
                                        <tbody>
                                            <tr>
                                                <td width='20' style='display:block;width:20px'>&nbsp;&nbsp;&nbsp;</td>
                                                <td>
                                                    <p style='margin:10px 0 10px 0;color:#565a5c;font-size:18px'>Hi ".$account.",</p>
                                                    <p style='margin:10px 0 10px 0;color:#565a5c;font-size:18px;text-align:justify;'>Mohon maaf karena Anda mengalami masalah saat masuk ke akun JConnect Anda. Kami mendapat pesan bahwa Anda lupa kata sandi Anda. Jika ini memang Anda, Anda dapat langsung kembali ke akun Anda atau menyetel ulang sandi Anda sekarang.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height='20' style='line-height:20px'>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width='20' style='display:block;width:20px'>&nbsp;&nbsp;&nbsp;</td>
                                                <td>
                                                    <table border='0' width='100%' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table border='0' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <table border='0' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                                                                        <tbody>
                                                                                            <tr></tr>
                                                                                            <tr>
                                                                                                <td height='20' style='line-height:20px'>&nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <a href='".base_url()."LupaPassword/resetform?account=".$account."&token=".urlencode($tokens)."' style='color:#1b74e4;text-decoration:none;display:block;width:370px' target='_blank'>
                                                                                                    <table border='0' width='390' cellspacing='0' cellpadding='0' style='border-collapse:collapse'>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style='border-collapse:collapse;border-radius:3px;text-align:center;display:block;border:solid 1px #009fdf;padding:10px 16px 14px 16px;margin:0 2px 0 auto;min-width:80px;background-color:#000066'>
                                                                                                                    <a href='".base_url()."LupaPassword/resetform?account=".$account."&token=".urlencode($tokens)."' style='color:#1b74e4;text-decoration:none;display:block' target='_blank'><center><font size='3'><span style='font-family:Roboto,Arial,sans-serif;white-space:nowrap;font-weight:bold;vertical-align:middle;color:#fdfdfd;font-size:16px;line-height:16px'>Reset&nbsp;your&nbsp;password</span></font></center></a>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    </a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td height='20' style='line-height:20px'>&nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td width='15' style='display:block;width:15px'>&nbsp;&nbsp;&nbsp;</td>
                                                                                            </tr>
                                                                                            <tr>&nbsp;</tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div>
                                                                                                        <div style='padding:0;margin:10px 0 10px 0;color:#565a5c;font-size:16px;text-align:justify;'>Jika Anda tidak meminta tautan login atau pengaturan ulang kata sandi, Anda dapat mengabaikan pesan ini.</a> <span></span><br><br>Hanya orang yang mengetahui kata sandi JConnect Anda atau mengklik link login di email ini yang dapat login ke akun Anda.
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                                <td width='20' style='display:block;width:20px'>&nbsp;&nbsp;&nbsp;</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </body>
            <hr>
            <footer>
                <center>
                    <font size=2 style='color:#999999'>
                    <p>
                        Anda menerima email ini sebagai pemberitahuan tentang perubahan penting pada layanan dan Akun JConnect Anda.<br>
                        Pesan ini dikirimkan ke ".$account.". Bukan akun Anda? Hapus email Anda dari akun ini.
                        ©2024 JConnect. All rights reserved.
                    </p>
                    </font>
                <center>
            </footer>
        </div>
   </html>
";
                                                // <td style='width:100%;text-align:left;height:33px'>
                                                //     <img height='33' src='cid:Logo_jconnect_new.png' style='border:0' class='CToWUd' data-bit='iit'>
                                                // </td>

                $subjectItem = mb_convert_encoding($subjectItem, 'UTF-8','UTF-8');

                if($this->kirimemail->kirim($recipient,$subject,$subjectItem,1)){

                    $this->session->set_flashdata('msg', "
                        <div class='alert alert-success' role='alert'>Permintaan perubahaan password Anda sudah di kirimkan ke email Anda, silahkan lakukan perubahan password Anda.&emsp;
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                    ");

                }else{

                    $this->session->set_flashdata('msg', "
                        <div class='alert alert-danger' role='alert'><strong>Mohon Maaf!</strong> Permohonan perubahaan kata sandi Anda/email yang Anda masukan salah atau tidak terdaftar di sistem kami.&emsp;
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                    ");

                }
            }
        }

        redirect('LupaPassword');
    }
    
    function resetform()
    {
        $account = $this->input->get('account');
        $token = $this->input->get('token');
        // echo "$account ~ $token";die();

        if($account != '' && $token != ''){
            $token_cek = $this->m_jconnect->cekAccountToken(2,'T_MAS_TOKEN',$account,$token);
            // echo $token_cek;die();

            if($token_cek == 0){
                $this->session->set_flashdata('msg', "
                    <div class='alert alert-danger' role='alert'><strong>Mohon Maaf!</strong> Link yang Anda akses salah atau tidak terdaftar di sistem kami, silahkan isi email Anda kembali untuk mendapatkan link yang benar.&emsp;
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                ");

                redirect('LupaPassword');
            }
        }

        $data['title'] = 'Reset Password';
        $data['content'] = 'Reset Password';
        $this->load->view('v_dashboard', $data);
    }

    function confirmrespanya(){
        $pass1 = $this->input->post('password');
        $pass2 = $this->input->post('password2');
        // $url = $this->input->get('url');

        if($pass1 != '' && $pass2 != ''){
            if($pass1 != $pass2){
                $this->session->set_flashdata('msg', "
                    <div class='alert alert-danger' role='alert'><strong>Maaf!</strong> Password yang Anda masukan tidak sama, silahkan masukan kembali.&emsp;
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                ");

                redirect('LupaPassword');
            }else{
                $this->session->set_flashdata('msg', "
                    <div class='alert alert-danger' role='alert'><strong>Mohon Maaf!</strong> Link yang Anda akses salah atau tidak terdaftar di sistem kami, silahkan isi email Anda kembali untuk mendapatkan link yang benar.&emsp;
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                ");

                redirect('LupaPassword');
            }
        }

        redirect('LupaPassword');
    }

    function cekAkun(){
        $account = $this->input->post('account');

        // $data = $this->m_jconnect->cekUsername('T_MAS_USERSS',$usrnam);
        $data = $this->m_jconnect->cekAccount('T_MAS_USERSS',$account);
        echo $data;
    }
    
}
