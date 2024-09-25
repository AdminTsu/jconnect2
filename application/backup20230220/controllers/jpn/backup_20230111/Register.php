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
        $data['title'] = '登録';
        $data['content'] = 'Register';
        $this->load->view('jpn/v_dashboard',$data);
    }

    function RegisterForm_vacancy() {
        $data['title'] = '空室状況一覧';
        $data['content'] = 'Regvacancy';
        $this->load->view('jpn/v_dashboard',$data);
    }
    
    function comboProvince($idcontry){
        $listProvnc = '
                <div class="form-group" id="provinsi2"><font style="color:red;"> *</font>プロビンス
                <select name="cmbPROVNC" id="cmbPROVNC" class="form-control w-100" onchange="jvChangeProvinsi()" required>
                    <option value=0>-- 州を選択 --</option>
        ';
        if($idcontry > 0){
            $optPrvince = $this->m_master->getComboProvince_change($idcontry);
            foreach($optPrvince as $row){
                $listProvnc .= "<option value='".$row->PRV_IDENTS."'>".$row->PRV_NAMESS."</option>";
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
                <div class="form-group" id="kota2"><font style="color:red;"> *</font>都市
                <select name="cmbCITYSS" id="cmbCITYSS" class="form-control w-100" required>
                    <option value=0>-- 都市を選択 --</option>
        ';
        $optCityss = $this->m_master->getComboKota_change($idcontry,$idprovnc);
        foreach($optCityss as $row){
            $listCityss .= "<option value='".$row->CTY_IDENTS."'>".$row->CTY_NAMESS."</option>";
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
        $data['title'] = '登録';
        $logins = $this->input->post('username', TRUE);
        $passwd = $this->input->post('password', TRUE);
        $namess = strtoupper($this->input->post('name', TRUE));
        $emails = $this->input->post('email', TRUE);
        $filbhs = $this->input->post('filbhs', TRUE);
        $visafl = $this->input->post('visafl', TRUE);
        $filssw = $this->input->post('filssw', TRUE);
        $magang = $this->input->post('magang', TRUE);
        // echo "$logins - $passwd - $namess - $emails - $filbhs - $visafl - $filssw - $magang";die();
        
        $subject = '登録の有効性 | JConnect.co.id';
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
            <html>
                ".header('Content-Type: text/html; charset=UTF-8')."
                <h3>(登録の有効性 | JConnect.co.id)</h3><hr>
                <head>
                    <title>アカウントの確認</title>
                </head>
                <body>
                    <h2>ご登録ありがとうございました</h2>
                    <p>
                        当サイトにアクセスするためには、アカウントの確認が必要です。お客様のアカウントで使用する :<br>
                        名称     : ".$namess."<br>
                        電子メール : ".$emails."<br>
                        ユーザー名 : ".$logins."<br>
                        パスワード  : ".$passwd."<br>
                        以下のリンクからアクティベーションを行ってください。
                    </p>
                    <h4><a href='".base_url()."register/activate/".$IDENTS."/".$code."'>マイアカウントの有効化</a></h4>
                </body>
                <footer>
                    <p>
                        よろしくお願いします。,<br><br>
                        Jconnectチーム
                    </p>
                </footer>
           </html>
        ";
        $subjectItem = mb_convert_encoding($subjectItem, "UTF-8","UTF-8");

        if(!empty($emails) && !empty($namess) && !empty($logins) && !empty($passwd)){
            if(filter_var($emails, FILTER_VALIDATE_EMAIL) === false){
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-warning" role="alert">電子メールを正しくご記入ください。&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else{
                if($this->kirimemail->kirim($recipient,$subject,$subjectItem,2)){
                    // insert data pekerja
                    $CODE = 'PKR';
                    $TYPES = 'PKR';
                    $YEAR = date('Y');
                    $CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);

                    $data2 = array(
                        'PKR_LOGNID' => $IDENTS,
                        'PKR_NAMESS' => $namess,
                        'PKR_NOMPKR' => $CODESS,
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
                        <div class="alert alert-success" role="alert"><strong>登録成功 '.$namess.'! </strong> 会員登録後、登録ユーザーとパスワードでログインしてください!&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }else{
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-danger" role="alert"><strong>申し訳ありません!</strong> 登録に失敗しました!&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }
            }
        }else{
            $this->session->set_flashdata('msg', '
                <div class="alert alert-warning" role="alert">入力されたデータに不備がある!.&emsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
        }
        redirect('jpn/register');
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
                        $this->session->set_flashdata('msg','<div class="alert alert-success"><strong>アカウントのアクティベーションが正常に行われたことをお祝いします。 </strong>登録したアカウントでログインしてください。</div>');
                    }else{
                        $this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>申し訳ございませんが、アクティベーションが正常に行われませんでした。</strong></div>');
                    }
                }else{
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>アカウントが登録されていません。');
                }
            }else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>あなたのアカウントはすでにアクティブになっているので、再アクティブ化することはできません。');
            }
        }
        redirect('jpn/register');
    }

    function validation_c(){
        $this->load->library("kirimemail");
        $data['title'] = 'Register';
        $logins = $this->input->post('usrnam', TRUE);
        $passwd = $this->input->post('passwd', TRUE);
        $comnam = strtoupper($this->input->post('comnam', TRUE));
        $namess = strtoupper($this->input->post('namess', TRUE));
        $emails = $this->input->post('emails', TRUE);
        $telpon = $this->input->post('telpon', TRUE);
        $mobile = $this->input->post('mobile', TRUE);
        $addres = $this->input->post('addres', TRUE);
        $contry = $this->input->post('contry', TRUE);
        $provnc = $this->input->post('provnc', TRUE);
        $cityss = $this->input->post('cityss', TRUE);
        $descre = $this->input->post('descre', TRUE);
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
        
        $subject = '登録通知書 | JConnect.co.id';
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

        $result = $this->m_jconnect->getUserID_byUser($logins);
        // echo "$id - $idnya";die();
        foreach($result as $row){
            $IDENTS = $row->USR_IDENTS;
        }
        
        $subjectItem = "
            <html>
                ".header('Content-Type: text/html; charset=UTF-8')."
                <h3>(登録通知書 | JConnect.co.id)</h3><hr>
                <head>
                    <title>アカウントの確認</title>
                </head>
                <body>
                    <h2>ご登録ありがとうございました。</h2>
                    <p>
                        当サイトにアクセスするためには、アカウントの確認が必要です。お客様のアカウントで使用する :<br>
                        ユーザー名   : ".$logins."<br>
                        パスワード    : ".$passwd."<br>
                        会社名     : ".$comnam."<br>
                        名前/PIC   : ".$namess."<br>
                        電子メール   : ".$emails."<br>
                        パスワード    : ".$addres."<br>
                        国名       : ".$contry_des."<br>
                        以下のリンクからアクティベーションを行ってください。
                    </p>
                    <h4><a href='".base_url()."register/activate_c/".$IDENTS."/".$code."'>アカウントの有効化はこちら</a></h4>
                </body>
                <footer>
                    <p>
                        よろしくお願いします,<br><br>
                        Jconnect Team
                    </p>
                </footer>
           </html>
        ";
                        // プロビンス    : ".$provnc."<br>
                        // 都市       : ".$cityss."<br>
                        // 商品説明   : ".$descre."<br>

        $subjectItem = mb_convert_encoding($subjectItem, "UTF-8","UTF-8");

        if(!empty($emails) && !empty($namess) && !empty($logins) && !empty($passwd)){
            if(filter_var($emails, FILTER_VALIDATE_EMAIL) === false){
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-warning" role="alert">メールアドレスを正しくご記入ください。.&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else{
                if($this->kirimemail->kirim($recipient,$subject,$subjectItem,1)){
                    // insert data pekerja
                    $CODE = 'CLI';
                    $TYPES = 'CLI';
                    $YEAR = date('Y');
                    $codess = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);

                    $data2 = array(
                        'CLI_LOGNID' => $IDENTS,
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
                        <div class="alert alert-success" role="alert"><strong>登録成功 '.$namess.'! </strong> アカウントの有効化とログインのため、1x24時間お待ちください。!&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }else{
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-danger" role="alert"><strong>申し訳ありません!</strong> 登録に失敗しました!&emsp;
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ');
                }
            }
        }else{
            $this->session->set_flashdata('msg', '
                <div class="alert alert-warning" role="alert">入力されたデータに不備がある!.&emsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ');
        }
        redirect('jpn/register/registerform_vacancy');
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
                    $this->crud->save($data,array('CLI_LOGINID' => $id));
                    $this->crud->unsetMe();

                    if($id == $idnya){
                        $this->session->set_flashdata('msg','<div class="alert alert-success"><strong>アカウントのアクティベーションに成功しました。 </strong>登録したアカウントでログインしてください。</div>');
                    }else{
                        $this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>申し訳ございませんが、アクティベーションが正常に行われませんでした。</strong></div>');
                    }
                }else{
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>アカウントを有効にすることができません。!');
                }
            }else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>お客様のアカウントはすでにアクティブになっており、再アクティブ化することはできません。!');
            }
        }
        redirect('jpn/register/registerform_vacancy');
    }
}