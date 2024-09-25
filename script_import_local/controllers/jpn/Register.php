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
        $this->load->model(array('m_jconnect'));
        $this->load->library("kirimemail");
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->active = $this->session->userdata('USR_ACTIVE');
        $this->userid = $this->session->userdata('USR_IDENTS');
    }

    function index() {
        $this->RegisterForm();
    }

    function RegisterForm() {
        $data['title'] = 'Register';
        $data['content'] = 'Register';
        $this->load->view('jpn/v_dashboard',$data);
    }

    function RegisterForm_vacancy() {
        $data['title'] = 'Daftar Lowongan';
        $data['content'] = 'Regvacancy';
        $this->load->view('jpn/v_dashboard',$data);
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
        $IDENTS = $this->crud->__insertID;

        $subjectItem = "
            <html>
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

        if(!empty($emails) && !empty($namess) && !empty($logins) && !empty($passwd)){
            if(filter_var($emails, FILTER_VALIDATE_EMAIL) === false){
                $this->session->set_flashdata('msg', '
                    <div class="alert alert-warning" role="alert">電子メールを正しくご記入ください。&emsp;
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>');
            }else{
                if($this->kirimemail->kirim($recipient,$subject,$subjectItem)){
                    // insert data pekerja
                    $CODE = 'PKR';
                    $TYPES = 'PKR';
                    $YEAR = date('Y');
                    $CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);

                    $data2 = array(
                        'PKR_LOGNID' => $IDENTS,
                        'PKR_NAMESS' => $namess,
                        'PKR_NOMPKR' => $CODESS,
                        'PKR_ACTIVE' => 0
                    );

                    $this->crud->useTable('T_MAS_PEKRJA');
                    $this->crud->save($data2);
                    $this->crud->unsetMe();

                    //awal aplod file RND
                    $path = PATH_PEKERJA_PHOTO.$IDENTS.'/';
                    if( is_dir($path) === false )
                    {
                        mkdir($path);  
                    }
                    
                    // upload Level bhs jepang
                    if($_FILES['filbhs']['name']){
                        $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_LVLBHS',1);
                        if($cekFile->HASIL != 0){
                            $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_LVLBHS',2);
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
                        $this->crud->save($data, array('PKR_IDENTS'=> $IDENTS));
                        $this->crud->unsetMe();
                    }

                    // upload Visa
                    if($_FILES['visafl']['name']){
                        $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_VISAFL',1);
                        if($cekFile->HASIL != 0){
                            $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_VISAFL',2);
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
                        $this->crud->save($data, array('PKR_IDENTS'=> $IDENTS));
                        $this->crud->unsetMe();
                    }

                    // upload SSW
                    if($_FILES['filssw']['name']){
                        $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_SSWFIL',1);
                        if($cekFile->HASIL != 0){
                            $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_SSWFIL',2);
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
                        $this->crud->save($data, array('PKR_IDENTS'=> $IDENTS));
                        $this->crud->unsetMe();
                    }

                    // upload Sertifikat magang
                    if($_FILES['magang']['name']){
                        $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_MAGANG',1);
                        if($cekFile->HASIL != 0){
                            $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_MAGANG',2);
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
                        $this->crud->save($data, array('PKR_IDENTS'=> $IDENTS));
                        $this->crud->unsetMe();
                    }

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
}