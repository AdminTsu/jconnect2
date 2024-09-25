<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myjconnect_Client extends CI_Controller {
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
        $this->load->model(array('m_jconnect','m_master','m_job','m_common','m_pekerja'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->active = $this->session->userdata('USR_ACTIVE');
        $this->userid = $this->session->userdata('USR_IDENTS');
        $this->datesave = date('Y-m-d H:i:s');
        if($this->login == '' || $this->login == null){
            redirect('login_web');
        }
    }

    function index() {
        $data = array();
        $data['title'] = 'マイJConnectクライアント';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = '会社概要';
        $data['icon'] = '<i class="fa fa-user"></i>';
        $data['link_menu'] = 'profile_edit';
        $data['type'] = 1;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function profile_edit($id) {
        $data = array();
        $data['title'] = 'マイJConnectクライアント';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = '会社概要の変更';
        $data['icon'] = '<i class="fa fa-user"></i>';
        $data['type'] = 1;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function profile_simpan($id){
        $CLI_IDENTS = $id;
        $CLI_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        $CLI_LOGOSS = $this->input->post('txtLOGOSS');
        $CLI_DESCRE = strtoupper($this->input->post('txaDESCRE'));
        $CLI_ADDRES = strtoupper($this->input->post('txaADDRES'));
        $CLI_EMAILS = $this->input->post('txtEMAILS');
        $CLI_CONTRY = $this->input->post('cmbCONTRY');
        $CLI_PROVNC = $this->input->post('cmbPROVNC');
        $CLI_CITYSS = $this->input->post('cmbCITYSS');
        $CLI_WEBSIT = $this->input->post('txtWEBSIT');
        $CLI_NOMTLP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMTLP'))));
        $CLI_NOMFAX = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMFAX'))));
        $CLI_NOMRHP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMRHP'))));
        $CLI_ASPECS = $this->input->post('cmbASPECS');
        $CLI_CONTAC = $this->input->post('txtCONTAC');

        $input = array(
            'CLI_NAMESS' => $CLI_NAMESS,
            'CLI_ADDRES' => $CLI_ADDRES,
            'CLI_DESCRE' => $CLI_DESCRE,
            // 'CLI_EMAILS' => $CLI_EMAILS,
            'CLI_CONTRY' => $CLI_CONTRY,
            'CLI_PROVNC' => $CLI_PROVNC,
            'CLI_CITYSS' => $CLI_CITYSS,
            'CLI_WEBSIT' => $CLI_WEBSIT,
            'CLI_NOMTLP' => $CLI_NOMTLP,
            'CLI_NOMRHP' => $CLI_NOMRHP,
            'CLI_NOMFAX' => $CLI_NOMFAX,
            'CLI_ASPECS' => $CLI_ASPECS,
            'CLI_CONTAC' => $CLI_CONTAC,
            'CLI_USRUPD' =>$this->login,
            'CLI_DATUPD' =>$this->datesave
        );
        
        $this->crud->useTable('T_MAS_CLIENT');
        $this->crud->save($input, array('CLI_IDENTS'=> $CLI_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = $CLI_IDENTS;
        
        //awal aplod file RND
        $path = PATH_CLIENT_PHOTO.$IDENTS.'/';
        if( is_dir($path) === false )
        {
            mkdir($path);  
        }
        
        if($_FILES['txtLOGOSS']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','CLI_LOGOSS',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','CLI_LOGOSS',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtLOGOSS']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;

            move_uploaded_file($_FILES['txtLOGOSS']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('CLI_LOGOSS'=>$file_image_name));
            $this->crud->useTable('T_MAS_CLIENT');
            $this->crud->save($input, array('CLI_IDENTS'=> $CLI_IDENTS));
            $this->crud->unsetMe();
        }

        $redirect = '/jpn/myjconnect_client';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function ubah_password() {
        $data = array();
        $data['title'] = 'マイJConnectクライアント';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'パスワードの変更';
        $data['icon'] = '<i class="fa fa-desktop"></i>';
        $data['type'] = 4;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function ubah_password_simpan($id){
        $IDENTS = $id;
        $PASWD1 = $this->input->post('txtPASWD1');
        $PASWD2 = $this->input->post('txtPASWD2');

        $input = array(
            'USR_PASSWD' => md5($PASWD1),
            'USR_USRUPD' =>$this->login,
            'USR_DATUPD' =>$this->datesave
        );
        
        $this->crud->useTable('T_MAS_USERSS');
        $this->crud->save($input, array('USR_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        $redirect = '/jpn/myjconnect_client';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function lowongan() {
        $data = array();
        $data['title'] = 'マイJConnectクライアント';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = '空室状況一覧';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['link_menu'] = 'lowongan_edit';
        $data['type'] = 2;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->list_jobs($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function lowongan_edit($id) {
        $data = array();
        $data['title'] = 'マイJConnectクライアント';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = '空室状況一覧の変更';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['type'] = 2;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function lowongan_simpan($id){
        $CLI_IDENTS = $id;
        $CLI_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        $CLI_FOTOSS = $this->input->post('txtFOTOSS');
        $CLI_DESCRE = strtoupper($this->input->post('txaDESCRE'));
        $CLI_ADDRES = strtoupper($this->input->post('txaADDRES'));
        $CLI_EMAILS = $this->input->post('txtEMAILS');
        $CLI_CONTRY = $this->input->post('cmbCONTRY');
        $CLI_PROVNC = $this->input->post('cmbPROVNC');
        $CLI_CITYSS = $this->input->post('cmbCITYSS');
        $CLI_WEBSIT = $this->input->post('txtWEBSIT');
        $CLI_NOMTLP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMTLP'))));
        $CLI_NOMFAX = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMFAX'))));
        $CLI_NOMRHP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMRHP'))));
        $CLI_ASPECS = $this->input->post('cmbASPECS');
        $CLI_CONTAC = $this->input->post('txtCONTAC');

        // echo "$PKR_IDENTS - $PKR_NAMESS - $PKR_TMPLHR - $PKR_TGLLHR";die();

        $input = array(
            'CLI_NAMESS' => $CLI_NAMESS,
            'CLI_ADDRES' => $CLI_ADDRES,
            'CLI_DESCRE' => $CLI_DESCRE,
            // 'CLI_EMAILS' => $CLI_EMAILS,
            'CLI_CONTRY' => $CLI_CONTRY,
            'CLI_PROVNC' => $CLI_PROVNC,
            'CLI_CITYSS' => $CLI_CITYSS,
            'CLI_WEBSIT' => $CLI_WEBSIT,
            'CLI_NOMTLP' => $CLI_NOMTLP,
            'CLI_NOMRHP' => $CLI_NOMRHP,
            'CLI_NOMFAX' => $CLI_NOMFAX,
            'CLI_ASPECS' => $CLI_ASPECS,
            'CLI_CONTAC' => $CLI_CONTAC,
            'CLI_USRUPD' =>$this->login,
            'CLI_DATUPD' =>$this->datesave
        );
        
        $this->crud->useTable('T_MAS_CLIENT');
        $this->crud->save($input, array('CLI_IDENTS'=> $CLI_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = $CLI_IDENTS;
        
        //awal aplod file RND
        $path = PATH_CLIENT_PHOTO.$IDENTS.'/';
        if( is_dir($path) === false )
        {
            mkdir($path);  
        }
        
        // upload foto user
        if($_FILES['txtLOGOSS']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','CLI_LOGOSS',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','CLI_LOGOSS',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }
            
            $img_info          = pathinfo($_FILES['txtLOGOSS']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtLOGOSS']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('CLI_LOGOSS'=>$file_image_name));
            $this->crud->useTable('T_MAS_CLIENT');
            $this->crud->save($input, array('CLI_IDENTS'=> $CLI_IDENTS));
            $this->crud->unsetMe();
        }

        $redirect = '/jpn/myjconnect_client';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function listjobs() {
        $data = array();
        $data['title'] = 'マイJConnectクライアント';
        $data['content'] = 'myjconnect';
        if($this->level == 3){
            $data['menu'] = 'リストジョブ';
        }
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['type'] = 2;
        $data['data'] = $this->m_jconnect->list_jobs($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

}
?>