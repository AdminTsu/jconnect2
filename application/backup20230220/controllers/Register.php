<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
var $login;
var $level;
var $menuid;
var $active;
var $userid;

    function __construct() {
        parent::__construct();
        $CI =& get_instance();
        $this->title = $this->config->item('app_names');
        $this->load->helper(array('ginput','dashboard','jqxgrid','file'));
        $this->load->model(array('m_jconnect','m_master','m_job'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->userid = $this->session->userdata('USR_LOGINS');
        $this->datesave = date('Y-m-d H:i:s');
        $this->load->library("kirimemail");
    }

    function index() {
        $this->RegisterForm();
    }

    function RegisterForm() {
        $data['title'] = 'Register';
        $data['content'] = 'Register';
        $this->load->view('v_dashboard',$data);
    }

    function RegisterForm_vacancy() {
        $data['title'] = 'Daftar Lowongan';
        $data['content'] = 'Regvacancy';
        $this->load->view('v_dashboard',$data);
    }
    
    function comboProvince($idcontry){
        $listProvnc = '
                <div class="form-group" id="provinsi2"><font style="color:red;"> *</font>Provinsi
                <select name="cmbPROVNC" id="cmbPROVNC" class="form-control w-100" onchange="jvChangeProvinsi()" required>
                    <option value=0>-- Pilih Provinsi --</option>
        ';

        if($idcontry > 0){
            if($idcontry==1){
                $optPrvince = $this->m_master->getComboProvince_change($idcontry);
                foreach($optPrvince as $row){
                    $listProvnc .= "<option value='".$row->PRV_IDENTS."'>".$row->PRV_NAMESS."</option>";
                }
            }else{
                $optPrvince = $this->m_master->getComboProvinceJP_change($idcontry);
                foreach($optPrvince as $row){
                    $listProvnc .= "<option value='".$row->PRV_IDENTS."'>".$row->PRV_INTIAL."</option>";
                }
            }
        }

        $listProvnc .= '
                    </select>
                </div><span class="text-warning" ></span>
        ';

        $callback = array('listProvnc'=>$listProvnc);
        echo json_encode($callback);
    }

    function comboKota($idcontry,$idprovnc){
        $listCityss = '
                <div class="form-group" id="kota2"><font style="color:red;"> *</font>Kota
                <select name="cmbCITYSS" id="cmbCITYSS" class="form-control w-100" required>
                    <option value=0>-- Pilih Kota --</option>
        ';
        if($idcontry==1){
            $optCityss = $this->m_master->getComboKota_change($idcontry,$idprovnc);
            foreach($optCityss as $row){
                $listCityss .= "<option value='".$row->CTY_IDENTS."'>".$row->CTY_NAMESS."</option>";
            }
        }else{
            $optCityss = $this->m_master->getComboKotaJP_change($idcontry,$idprovnc);
            foreach($optCityss as $row){
                $listCityss .= "<option value='".$row->CTY_IDENTS."'>".$row->CTY_INTIAL."</option>";
            }
        }
        $listCityss .= '
                    </select>
                </div><span class="text-warning" ></span>
        ';
        $callback = array('listCityss'=>$listCityss);
        echo json_encode($callback);
    }

    function cekUsername(){
        $usrnam = $this->input->post('usrnam');
        $data = $this->m_jconnect->cekUsername('T_MAS_USERSS',$usrnam);
        echo $data;
    }

    function validation(){
        $this->load->library("kirimemail");
        $data['title'] = 'Register';
        $logins = $this->input->post('username', TRUE);
        $passwd = $this->input->post('password', TRUE);
        $namess = strtoupper($this->input->post('namess', TRUE));
        $emails = $this->input->post('emails', TRUE);
        $filbhs = $this->input->post('filbhs', TRUE);
        $visafl = $this->input->post('visafl', TRUE);
        $filssw = $this->input->post('filssw', TRUE);
        $magang = $this->input->post('magang', TRUE);
        $status = $this->input->post('cmbSTATUS', TRUE);
        // echo "$logins - $passwd - $namess - $emails - $filbhs - $visafl - $filssw - $magang";die();
        
        if((empty($emails) && empty($namess) && empty($logins) && empty($passwd) && empty($filbhs) && empty($visafl) && empty($magang) && empty($filssw) && empty($status))){
            $this->session->set_flashdata('msg', '
                <div class="alert alert-danger" role="alert">Data yang diisi belum lengkap!.&emsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
        }else{

            if(empty($logins)){
                $this->session->set_flashdata('msg_logins', '
                    <div class="alert alert-danger" role="alert">Username belum diisi.&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else if(empty($passwd)){
                $this->session->set_flashdata('msg_passwd', '
                    <div class="alert alert-danger" role="alert">Kata Sandi belum diisi!.&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else if(empty($namess)){
                $this->session->set_flashdata('msg_namess', '
                    <div class="alert alert-danger" role="alert">Username belum diisi!.&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else if(empty($emails)){
                $this->session->set_flashdata('msg_emails', '
                    <div class="alert alert-danger" role="alert">Email belum diisi!.&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else if(empty($filbhs)){
                $this->session->set_flashdata('msg_filbhs', '
                    <div class="alert alert-danger" role="alert">Level Bahasa Jepang belum diisi!.&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else if(empty($visafl)){
                $this->session->set_flashdata('msg_visafl', '
                    <div class="alert alert-danger" role="alert">Visa Selama di Jepang belum diisi!.&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }
            // else if(empty($filssw)){
            //     $this->session->set_flashdata('msg_filssw', '
            //         <div class="alert alert-danger" role="alert">Sertifikat SSW belum diisi!.&emsp;
            //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //                 <span aria-hidden="true">&times;</span>
            //             </button>
            //         </div>');
            // }else if(empty($magang)){
            //     $this->session->set_flashdata('msg_magang', '
            //         <div class="alert alert-danger" role="alert">Sertifikat Magang belum diisi!.&emsp;
            //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //                 <span aria-hidden="true">&times;</span>
            //             </button>
            //         </div>');
            // }
            else if(empty($status)){
                $this->session->set_flashdata('msg_status', '
                    <div class="alert alert-danger" role="alert">Status belum diisi!.&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else{
                
                if(filter_var($emails, FILTER_VALIDATE_EMAIL) === false){
                    $this->session->set_flashdata('msg_emails', '
                        <div class="alert alert-danger" role="alert">Format email belum sesuai, silahkan isi dengan benar!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }

                $subject = 'Register Notification | JConnect.co.id';
                $recipient = $emails;
                //generate simple random code
                $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $code = substr(str_shuffle($set), 0, 12);

                $data = array(
                    'USR_LOGINS' => $logins,
                    'USR_PASSWD' => md5($passwd),
                    'USR_NAMESS' => $namess,
                    'USR_EMAILS' => $emails,
                    'USR_ACTIVE' => 0,
                    'USR_LEVELS' => 2,
                    'USR_MENUID' => 2,
                    'USR_TYPESS' => 2,
                    'USR_USRCRT' => 'new_register',
                    'USR_DATCRT' => date('Y-m-d H:i:s')
                );
                
                $this->crud->useTable('T_MAS_USERSS');
                $this->crud->save($data);
                $this->crud->unsetMe();
                
                // $result = $this->m_jconnect->getUserID_byUser($logins);
                // // print_r($result);die();
                // foreach($result as $row){
                //     $IDENTS = $row->USR_IDENTS;
                // }
                $IDENTS = $this->crud->__insertID;
                
                $subjectItem = "
                    <meta charset='utf-8' />
                    <style>
                    a {
                        font-family: sans-serif;
                        font-size: 15px;
                        background: #000066;
                        color: white;
                        border: white 3px solid;
                        border-radius: 5px;
                        padding: 12px 20px;
                        margin-top: 10px;
                    }
                    a {
                        text-decoration: none;
                    }
                    a:hover{
                        opacity:0.9;
                    }
                    </style>
                    <html>
                        ".header('Content-Type: text/html; charset=UTF-8')."
                        <h3>(Verifikasi Pendaftaran | JConnect.co.id)</h3><hr>
                        <head>
                            <title>Verifikasi Akun Anda</title>
                        </head>
                        <body>
                            <h2>Terima Kasih Sudah Mendaftar</h2>
                            <p>
                                Silahkan verifikasi akun anda agar dapat melakukan akses ke website kami. Akun anda menggunakan :<br>
                                Nama     : ".$namess."<br>
                                Email    : ".$emails."<br>
                                Username : ".$logins."<br>
                                Password : ".$passwd."<br>
                                Silahkan klik link di bawah ini untuk melakukan aktivasi.
                            </p>
                            <h4>
                                <a id='menu_web' href='".base_url()."register/activate/".$IDENTS."/".$code."'><i class='fa fa-edit'>Aktivasi Akun Anda Disini</i></a>
                            </h4>
                        </body>
                        <footer>
                            <p>
                                Best Regards,<br><br>
                                Jconnect Team
                            </p>
                        </footer>
                   </html>
                ";

                $subjectItem = mb_convert_encoding($subjectItem, "UTF-8","UTF-8");
                
                // echo "$emails && $namess && $logins && $passwd";die();

                if($this->kirimemail->kirim($recipient,$subject,$subjectItem,1)){
                    // insert data pekerja
                    $CODE = 'PKR';
                    $TYPES = 'PKR';
                    $YEAR = date('Y');
                    $CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
                    
                    $data2 = array(
                        'PKR_LOGNID' => $IDENTS,
                        'PKR_NAMESS' => $namess,
                        'PKR_NOMPKR' => $CODESS,
                        'PKR_STATUS' => $status,
                        'PKR_CONTRY' => 0,
                        'PKR_PROVNC' => 0,
                        'PKR_CITYSS' => 0,
                        'PKR_ACTIVE' => 0
                    );
                    
                    $this->crud->useTable('T_MAS_PEKRJA');
                    $this->crud->save($data2);
                    $this->crud->unsetMe();

                    // $result2 = $this->m_jconnect->getUserID_byUser($namess);
                    // // echo "$id - $idnya";die();
                    // foreach($result2 as $row2){
                    //     $IDENTS_PKR = $row2->PKR_IDENTS;
                    // }

                    $IDENTS_PKR = $this->crud->__insertID;

                    //awal aplod file RND
                    $path = PATH_PEKERJA_PHOTO.$IDENTS_PKR.'/';
                    if( is_dir($path) === false )
                    {
                        mkdir($path);  
                    }
                    
                    // upload Level bhs jepang
                    if($_FILES['filbhs']['name']){
                        $cekFile           = $this->m_jconnect->getFileUpload($IDENTS_PKR,'T_MAS_PEKRJA','PKR_IDENTS','PKR_LVLBHS',1);
                        if($cekFile->HASIL != 0){
                            $getdata           = $this->m_jconnect->getFileUpload($IDENTS_PKR,'T_MAS_PEKRJA','PKR_IDENTS','PKR_LVLBHS',2);
                            $pathfull_old      = $path.$getdata->filenya;
                            
                            if (file_exists($pathfull_old)){
                                unlink($pathfull_old);
                            }
                        }

                        $img_info          = pathinfo($_FILES['filbhs']['name']);
                        $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
                        $fileExt           = $img_info['extension'];
                        $file_image_name   = $fileName.'.'.$fileExt;
                        $pathfull          = $path.$file_image_name;
                        
                        move_uploaded_file($_FILES['filbhs']['tmp_name'], $path.$file_image_name);
                        // echo $file_image_name;
                        $data = array_merge($data,array('PKR_LVLBHS'=>$file_image_name));
                        $this->crud->useTable('T_MAS_PEKRJA');
                        $this->crud->save($data, array('PKR_IDENTS'=> $IDENTS_PKR));
                        $this->crud->unsetMe();
                    }

                    // upload Visa
                    if($_FILES['visafl']['name']){
                        $cekFile           = $this->m_jconnect->getFileUpload($IDENTS_PKR,'T_MAS_PEKRJA','PKR_IDENTS','PKR_VISAFL',1);
                        if($cekFile->HASIL != 0){
                            $getdata           = $this->m_jconnect->getFileUpload($IDENTS_PKR,'T_MAS_PEKRJA','PKR_IDENTS','PKR_VISAFL',2);
                            $pathfull_old      = $path.$getdata->filenya;
                            
                            if (file_exists($pathfull_old)){
                                unlink($pathfull_old);
                            }
                        }

                        $img_info          = pathinfo($_FILES['visafl']['name']);
                        $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
                        $fileExt           = $img_info['extension'];
                        $file_image_name   = $fileName.'.'.$fileExt;
                        $pathfull          = $path.$file_image_name;
                        
                        move_uploaded_file($_FILES['visafl']['tmp_name'], $path.$file_image_name);
                        // echo $file_image_name;
                        $data = array_merge($data,array('PKR_VISAFL'=>$file_image_name));
                        $this->crud->useTable('T_MAS_PEKRJA');
                        $this->crud->save($data, array('PKR_IDENTS'=> $IDENTS_PKR));
                        $this->crud->unsetMe();
                    }
                    
                    // upload SSW
                    if($_FILES['filssw']['name']){
                        $cekFile           = $this->m_jconnect->getFileUpload($IDENTS_PKR,'T_MAS_PEKRJA','PKR_IDENTS','PKR_SSWFIL',1);
                        if($cekFile->HASIL != 0){
                            $getdata           = $this->m_jconnect->getFileUpload($IDENTS_PKR,'T_MAS_PEKRJA','PKR_IDENTS','PKR_SSWFIL',2);
                            $pathfull_old      = $path.$getdata->filenya;
                            
                            if (file_exists($pathfull_old)){
                                unlink($pathfull_old);
                            }
                        }

                        $img_info          = pathinfo($_FILES['filssw']['name']);
                        $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
                        $fileExt           = $img_info['extension'];
                        $file_image_name   = $fileName.'.'.$fileExt;
                        $pathfull          = $path.$file_image_name;
                        
                        move_uploaded_file($_FILES['filssw']['tmp_name'], $path.$file_image_name);
                        // echo $file_image_name;
                        $data = array_merge($data,array('PKR_SSWFIL'=>$file_image_name));
                        $this->crud->useTable('T_MAS_PEKRJA');
                        $this->crud->save($data, array('PKR_IDENTS'=> $IDENTS_PKR));
                        $this->crud->unsetMe();
                    }
                    
                    // upload Sertifikat magang
                    if($_FILES['magang']['name']){
                        $cekFile           = $this->m_jconnect->getFileUpload($IDENTS_PKR,'T_MAS_PEKRJA','PKR_IDENTS','PKR_MAGANG',1);
                        if($cekFile->HASIL != 0){
                            $getdata           = $this->m_jconnect->getFileUpload($IDENTS_PKR,'T_MAS_PEKRJA','PKR_IDENTS','PKR_MAGANG',2);
                            $pathfull_old      = $path.$getdata->filenya;
                            
                            if (file_exists($pathfull_old)){
                                unlink($pathfull_old);
                            }
                        }
                        
                        $img_info          = pathinfo($_FILES['magang']['name']);
                        $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
                        $fileExt           = $img_info['extension'];
                        $file_image_name   = $fileName.'.'.$fileExt;
                        $pathfull          = $path.$file_image_name;
                
                        move_uploaded_file($_FILES['magang']['tmp_name'], $path.$file_image_name);
                        // echo $file_image_name;
                        $data = array_merge($data,array('PKR_MAGANG'=>$file_image_name));
                        $this->crud->useTable('T_MAS_PEKRJA');
                        $this->crud->save($data, array('PKR_IDENTS'=> $IDENTS_PKR));
                        $this->crud->unsetMe();
                    }

                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-success" role="alert"><strong>Registrasi Berhasil '.$namess.'! </strong> Silahkan menunggu 1x24 jam untuk aktifasi akun dan silahkan melakukan login!&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }else{
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-danger" role="alert"><strong>Mohon Maaf!</strong> Registrasi Anda gagal!&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }
            }
        }

        redirect('register');
    }
    
    function activate(){
        $id =  $this->uri->segment(3);
        $code = $this->uri->segment(4);

        $result = $this->m_jconnect->getUserID($id);
        // echo "$id - $idnya";die();
        foreach($result as $row){
            $idnya = $row->idnya;
            $nama = $row->nama;
            $aktif = $row->aktif;
        
            if($aktif == 0){
                if($id == $idnya){
                    $data = array('PKR_ACTIVE' => 1);

                    $this->crud->useTable('T_MAS_PEKRJA');
                    $this->crud->save($data,array('PKR_IDENTS' => $id));
                    $this->crud->unsetMe();

                    $data2 = array('USR_ACTIVE' => 1);

                    $this->crud->useTable('T_MAS_USERSS ');
                    $this->crud->save($data2,array('USR_IDENTS' => $id));
                    $this->crud->unsetMe();

                    // untuk setting otorisasi di CMS
                    $sql = "
                      INSERT  INTO T_MAS_PRIACC(PRV_POSIDN,PRV_MNUNOM,PRV_RIGHTS,PRV_USRCRT,PRV_DATCRT) 
                      VALUES 
                      ('".$logins."','03000000','AEDV','new_kandidat',NOW()),
                      ('".$logins."','03020000','AEDV','new_kandidat',NOW()),
                      ('".$logins."','03030000','AEDV','new_kandidat',NOW()),
                      ('".$logins."','04000000','AEDV','new_kandidat',NOW()),
                      ('".$logins."','04010000','AEDV','new_kandidat',NOW());
                    ";
                    $this->db->query($sql);

                    if($id == $idnya){
                        $this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Selamat aktivasi account anda berhasil. </strong>Silahkan login menggunakan akun yang sudah terdaftar.</div>');
                    }else{
                        $this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Maaf, aktivasi anda belum berhasil.</strong></div>');
                    }
                }else{
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Akun anda tidak bisa di aktivasi, akun anda belum terdaftar!');
                }
            }else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Akun anda sudah aktif, tidak bisa di aktivasi ulang kembali!');
            }
        }
        redirect('register');
    }
    
    function validation_c(){
        $this->load->library("kirimemail");
        $data['title'] = 'Register';
        $usrnam = $this->input->post('txtUSRNAM', TRUE);
        $passwd = $this->input->post('txtPASSWD', TRUE);
        $comnam = strtoupper($this->input->post('txtCOMNAM', TRUE));
        $namess = strtoupper($this->input->post('txtNAMESS', TRUE));
        $telpon = $this->input->post('txtNOTELP', TRUE);
        $mobile = $this->input->post('txtMOBILE', TRUE);
        $addres = $this->input->post('txaADDRES', TRUE);
        $emails = $this->input->post('txtEMAILS', TRUE);
        $contry = $this->input->post('cmbCONTRY', TRUE);
        $provnc = $this->input->post('cmbPROVNC', TRUE);
        $cityss = $this->input->post('cmbCITYSS', TRUE);
        $descre = $this->input->post('txaDESCRE', TRUE);
        // $spsliz = $this->input->post('spsliz', TRUE);
        // $bdlain = $this->input->post('bdlain', TRUE);
        // echo "$logins - $passwd - $namess - $comnam - $telpon - $contry - $provnc - $cityss - $mobile";die();
        if($contry == 1){
            $contry_des = 'Indonesia';
        }else{
            $contry_des = 'Jepang';
        }
        // $provnc = $this->m_master->getDataDescre('T_MAS_PROVNC','PRV_IDENTS','PRV_NAMESS',$provnc);
        // echo $provnc;die();
        // // foreach($provnc_arr as $row){
        //     $provnc_des = $provnc;
        // // }
        // $cityss_des = $this->m_master->getDataDescre('T_MAS_CITYSS','CTY_IDENTS','CTY_NAMESS',$cityss);
        // foreach($cityss_arr as $row){
        //     $cityss_des = $row->CTY_NAMESS;
        // }        

        if(empty($usrnam) && empty($passwd) && empty($comnam) && empty($namess) && empty($namess) && empty($namess) && empty($addres) && empty($emails) && empty($contry) && empty($provnc) && empty($cityss)){
            $this->session->set_flashdata('msg', '
                <div class="alert alert-danger" role="alert">Data yang diisi belum lengkap!&emsp;
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
            }else{

                if(empty($usrnam)){
                    $this->session->set_flashdata('msg_usrnam', '
                        <div class="alert alert-danger" role="alert">Username belum diisi.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($passwd)){
                    $this->session->set_flashdata('msg_passwd', '
                        <div class="alert alert-danger" role="alert">Kata Sandi belum diisi!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($comnam)){
                    $this->session->set_flashdata('msg_comnam', '
                        <div class="alert alert-danger" role="alert">Nama Perusahaan belum diisi!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($namess)){
                    $this->session->set_flashdata('msg_namess', '
                        <div class="alert alert-danger" role="alert">Nama PIC belum diisi!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($telpon)){
                    $this->session->set_flashdata('msg_telpon', '
                        <div class="alert alert-danger" role="alert">Nomor Telp. Perusahaan belum diisi!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($mobile)){
                    $this->session->set_flashdata('msg_mobile', '
                        <div class="alert alert-danger" role="alert">Nomor Mobile Perusahaan/PIC belum diisi!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($addres)){
                    $this->session->set_flashdata('msg_addres', '
                        <div class="alert alert-danger" role="alert">Alamat Perusahaan belum diisi!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($emails)){
                    $this->session->set_flashdata('msg_emails', '
                        <div class="alert alert-danger" role="alert">Email Perusahaan belum diisi!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($contry)){
                    $this->session->set_flashdata('msg_contry', '
                        <div class="alert alert-danger" role="alert">Negara belum dipilih!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($provnc)){
                    $this->session->set_flashdata('msg_provnc', '
                        <div class="alert alert-danger" role="alert">Provinsi belum dipilih!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else if(empty($cityss)){
                    $this->session->set_flashdata('msg_cityss', '
                        <div class="alert alert-danger" role="alert">Kota belum dipilih!.&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>');
                }else{
                    if(filter_var($emails, FILTER_VALIDATE_EMAIL) === false){
                        $this->session->set_flashdata('msg_emails', '
                            <div class="alert alert-danger" role="alert">Format email belum sesuai, silahkan isi dengan benar!.&emsp;
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>');
                    }

                    $subject = 'Register Notification | JConnect.co.id';
                    $recipient = $emails;
                    //generate simple random code
                    $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $code = substr(str_shuffle($set), 0, 12);

                    $data = array(
                        'USR_LOGINS' => $logins,
                        'USR_PASSWD' => md5($passwd),
                        'USR_NAMESS' => $namess,
                        'USR_EMAILS' => $emails,
                        'USR_ACTIVE' => 0,
                        'USR_LEVELS' => 3,
                        'USR_MENUID' => 3,
                        'USR_TYPESS' => 3,
                        'USR_USRCRT' => 'new_register_client',
                        'USR_DATCRT' => date('Y-m-d H:i:s')
                    );
                    
                    $this->crud->useTable('T_MAS_USERSS');
                    $this->crud->save($data);
                    $this->crud->unsetMe();

                    // $IDENTS = $this->crud->__insertID;

                    // $result = $this->m_jconnect->getUserID_byUser($logins);
                    // // echo "$id - $idnya";die();
                    // foreach($result as $row){
                    //     $IDENTS = $row->USR_IDENTS;
                    // }
                    
                    $subjectItem = "
                        <style>
                        a {
                            font-family: sans-serif;
                            font-size: 15px;
                            background: #000066;
                            color: white;
                            border: white 3px solid;
                            border-radius: 5px;
                            padding: 12px 20px;
                            margin-top: 10px;
                        }
                        a {
                            text-decoration: none;
                        }
                        a:hover{
                            opacity:0.9;
                        }
                        </style>
                        <html>
                            ".header('Content-Type: text/html; charset=UTF-8')."
                            <h3>(Verifikasi Pendaftaran | JConnect.co.id)</h3><hr>
                            <head>
                                <title>Verifikasi Akun Anda</title>
                            </head>
                            <body>
                                <h2>Terima Kasih Sudah Bergabung Dengan Kami</h2>
                                <p>
                                    Silahkan verifikasi akun anda agar dapat melakukan akses Login dan terhubung dengan kami. Akun anda menggunakan :<br>
                                    Username        : ".$logins."<br>
                                    Password        : ".$passwd."<br>
                                    Nama Perusahaan : ".$comnam."<br>
                                    Nama/PIC        : ".$namess."<br>
                                    Email           : ".$emails."<br>
                                    Password        : ".$addres."<br>
                                    Negara          : ".$contry_des."<br>
                                    Silahkan klik link di bawah ini untuk melakukan aktivasi.
                                </p>
                                <h4>
                                    <a id='menu_web' href='".base_url()."register/activate_c/".$this->crud->__insertID."/".$code."'><i class='fa fa-edit'>Aktivasi Akun Anda Disini</i></a>
                                </h4>
                            </body>
                            <footer>
                                <p>
                                    Best Regards,<br><br>
                                    Jconnect Team
                                </p>
                            </footer>
                       </html>
                    ";
                    
                    // Deskripsi       : ".$descre."<br>
                    // Provinsi        : ".$provnc."<br>
                    // Kota            : ".$cityss."<br>
                    
                    $subjectItem = mb_convert_encoding($subjectItem, "UTF-8","UTF-8");

                    if($this->kirimemail->kirim($recipient,$subject,$subjectItem,1)){
                        // insert data pekerja
                        $CODE = 'CLI';
                        $TYPES = 'CLI';
                        $YEAR = date('Y');
                        $codess = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
                        
                        $data2 = array(
                            'CLI_LOGNID' => $this->crud->__insertID,
                            'CLI_NAMESS' => $comnam,
                            'CLI_NOMORS' => $codess,
                            'CLI_ADDRES' => $addres,
                            'CLI_CONTAC' => $namess,
                            'CLI_PHONES' => $telpon,
                            'CLI_MOBILE' => $mobile,
                            'CLI_CONTRY' => $contry,
                            'CLI_PROVNC' => $provnc,
                            'CLI_CITYSS' => $cityss,
                            'CLI_DESCRE' => $descre,
                            'CLI_ACTIVE' => 0,
                            'CLI_USRCTR' => 'new_register_client',
                            'CLI_DATCRT' => $this->datesave
                        );

                        $this->crud->useTable('T_MAS_CLIENT');
                        $this->crud->save($data2);
                        $this->crud->unsetMe();

                        // untuk setting otorisasi di CMS (sementara karena di tampilan web belum selesai)
                        $sql = "
                          INSERT  INTO T_MAS_PRIACC(PRV_POSIDN,PRV_MNUNOM,PRV_RIGHTS,PRV_USRCRT,PRV_DATCRT) 
                          VALUES 
                          ('".$logins."','03000000','AEDV','new_register_client',NOW()),
                          ('".$logins."','03020000','AEDV','new_register_client',NOW()),
                          ('".$logins."','03030000','AEDV','new_register_client',NOW()),
                          ('".$logins."','04000000','AEDV','new_register_client',NOW()),
                          ('".$logins."','04010000','AEDV','new_register_client',NOW()),
                          ('".$logins."','05000000','AEDV','new_register_client',NOW()),
                          ('".$logins."','05010000','AEDV','new_register_client',NOW());
                        ";
                        $this->db->query($sql);
                        
                        $this->session->set_flashdata('msg', '
                            <div class="alert alert-success" role="alert"><strong>Registrasi Berhasil '.$namess.'! </strong> Silahkan menunggu 1x24 jam untuk aktifasi akun dan silahkan melakukan login!&emsp;
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        ');
                    }else{
                        $this->session->set_flashdata('msg', '
                            <div class="alert alert-danger" role="alert"><strong>Mohon Maaf!</strong> Registrasi Anda gagal!&emsp;
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        ');
                    }
                }
            }
        }
        redirect('register/RegisterForm_vacancy');
    }
    
    function activate_c(){
        $id =  $this->uri->segment(3);
        $code = $this->uri->segment(4);

        $result = $this->m_jconnect->getUserID($id);
        // echo "$id - $idnya";die();
        foreach($result as $row){
            $idnya = $row->idnya;
            $nama = $row->nama;
            $aktif = $row->aktif;
        
            if($aktif == 0){
                if($id == $idnya){
                    $data2 = array('USR_ACTIVE' => 1);

                    $this->crud->useTable('T_MAS_USERSS ');
                    $this->crud->save($data2,array('USR_IDENTS' => $id));
                    $this->crud->unsetMe();
                    
                    $data = array('CLI_ACTIVE' => 1);
                    
                    $this->crud->useTable('T_MAS_CLIENT');
                    $this->crud->save($data,array('CLI_LOGNID' => $id));
                    $this->crud->unsetMe();

                    if($id == $idnya){
                        $this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Selamat aktivasi account anda berhasil. </strong>Silahkan login menggunakan akun yang sudah terdaftar.</div>');
                    }else{
                        $this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Maaf, aktivasi anda belum berhasil.</strong></div>');
                    }
                }else{
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Akun anda tidak bisa di aktivasi, akun anda belum terdaftar!');
                }
            }else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Akun anda sudah aktif, tidak bisa di aktivasi ulang kembali!');
            }
        }
        redirect('login_web');
    }
}