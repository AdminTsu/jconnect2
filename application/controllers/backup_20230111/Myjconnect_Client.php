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
        $this->load->helper(array('ginput','dashboard','jqxgrid','file'));
        $this->load->model(array('m_jconnect','m_master','m_job','m_common','m_pekerja','CRUD','m_client'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->active = $this->session->userdata('USR_ACTIVE');
        $this->userid = $this->session->userdata('USR_IDENTS');
        $this->datesave = date('Y-m-d H:i:s');
        $this->load->library('pagination');
        if($this->login == '' || $this->login == null){
            redirect('Login_web');
        }
    }

    function index() {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'Profile Perusahaan';
        $data['icon'] = '<i class="fa fa-user"></i>';
        $data['link_menu'] = 'profile_edit';
        $data['type'] = 1;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function profile_edit($id) {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'Ubah Profile Perusahaan';
        $data['icon'] = '<i class="fa fa-user"></i>';
        $data['type'] = 1;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function comboProvince($idcontry){
        $listProvnc = '
                    <td id="provinsi">
                        <select name="cmbPROVNC" id="cmbPROVNC" class="form-control" onchange="jvChangeProvinsi()" required>
                            <option value=0>-- Pilih Provinsi --</option>
        ';
        if($idcontry > 0){
            $optPrvince = $this->m_master->getComboProvince_change($idcontry);
            foreach($optPrvince as $row){
                $listProvnc .= "<option value='".$row->PRV_IDENTS."'>".$row->PRV_NAMESS."</option>";
            }
        }
        $listProvnc .= '
                        </select>
                    </td>
        ';
        $callback = array('listProvnc'=>$listProvnc);
        echo json_encode($callback);
    }

    function comboKota($idcontry,$idprovnc){
        $listCityss = '
                    <td id="kota">
                        <select name="cmbCITYSS" id="cmbCITYSS" class="form-control" required>
                            <option value=0>-- Pilih Kota --</option>
        ';
        $optCityss = $this->m_master->getComboKota_change($idcontry,$idprovnc);
        foreach($optCityss as $row){
            $listCityss .= "<option value='".$row->CTY_IDENTS."'>".$row->CTY_NAMESS."</option>";
        }
        $listCityss .= '
                        </select>
                    </td>
        ';
        $callback = array('listCityss'=>$listCityss);
        echo json_encode($callback);
    }

    function profile_simpan($id){
        $CLI_USERID = $this->userid;
        $CLI_IDENTS = $id;
        $CLI_CODESS = $this->input->post('txtNOMORS');
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
        $CLI_FAXNUM = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMFAX'))));
        $CLI_NOMRHP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMRHP'))));
        $CLI_ASPECS = $this->input->post('cmbASPECS');
        $CLI_CONTAC = $this->input->post('txtCONTAC');
        $CLI_BDLAIN = $this->input->post('txtBDLAIN');
        
        $input = array(
            'CLI_LOGNID' => $CLI_USERID,
            'CLI_NAMESS' => $CLI_NAMESS,
            'CLI_ADDRES' => $CLI_ADDRES,
            'CLI_DESCRE' => $CLI_DESCRE,
            // 'CLI_EMAILS' => $CLI_EMAILS,
            'CLI_BDLAIN' => $CLI_BDLAIN,
            'CLI_CONTRY' => $CLI_CONTRY,
            'CLI_PROVNC' => $CLI_PROVNC,
            'CLI_CITYSS' => $CLI_CITYSS,
            'CLI_WEBSIT' => $CLI_WEBSIT,
            'CLI_NOMTLP' => $CLI_NOMTLP,
            'CLI_NOMRHP' => $CLI_NOMRHP,
            'CLI_FAXNUM' => $CLI_FAXNUM,
            'CLI_ASPECS' => $CLI_ASPECS,
            'CLI_CONTAC' => $CLI_CONTAC,
            'CLI_USRUPD' =>$this->login,
            'CLI_DATUPD' =>$this->datesave
        );
        
        if($CLI_CODESS == '' || $CLI_CODESS == null){
            $CODE = 'CLI';
            $TYPES = 'CLI';
            $YEAR = date('Y');
            $CLI_NOMORS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array('CLI_NOMORS'=>$CLI_NOMORS));
        }

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

        $redirect = '/Myjconnect_Client';

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
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'Ubah Password';
        $data['icon'] = '<i class="fa fa-desktop"></i>';
        $data['type'] = 4;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);

        $this->load->view('v_dashboard',$data);
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

        $redirect = '/Myjconnect_Client';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function lowongan($idclen) {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $jumlah_data = $this->m_job->get_list_jobs_byclient_num($idclen);
        
        if($jumlah_data == '' || $jumlah_data == 0 || $jumlah_data == null){
            $jumlah_data = 0;
        }
        
        $data['jml'] = $jumlah_data;
        $data['menu'] = 'Pasang Lowongan';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['link_menu'] = 'lowongan_add';
        $data['type'] = 2;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->list_jobs($this->userid,$jumlah_data);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function lowongan_add($idclnt) {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'Buat Lowongan';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['link_menu'] = 'lowongan_add';
        $data['type'] = 2;
        $data['jenis']= 'add';
        $data['idclnt']= $idclnt;
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['data_job'] = $this->m_job->getJob_edit(0,1);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function lowongan_edit($idjob) {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'Ubah Lowongan';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['link_menu'] = 'lowongan_add';
        $data['type'] = 2;
        $data['jenis']= 'edit';
        $data['idjob']= $idjob;
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['data_job'] = $this->m_job->getJob_edit($idjob,1);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function getDataCompany($id){
        $getdata = $this->m_job->getDataCompany($id);
        echo $getdata->CLI_IDENTS.'~'.$getdata->CLI_NAMESS.'~'.$getdata->CITY.'~'.$getdata->ASPECS;
    }

    function lowongan_simpan($comidn){
        $JOB_IDENTS = $this->input->post('hidIDENTS');
        $JOB_TITLES = strtoupper($this->input->post('txtTITLES'));
        $JOB_COMPNY = $this->input->post('cmbCOMPNY');
        $JOB_LCTION = $this->input->post('txtLCTION');
        $JOB_ASPECS = $this->input->post('txtBIDANG');
        $JOB_DSCRIP = $this->input->post('txaDSCRIP');
        $JOB_RQSKIL = $this->input->post('txaRQSKIL');
        $JOB_FSILTY = $this->input->post('txaFSILTY');
        $JOB_SALMIN = str_replace("_","",str_replace(",","",str_replace(".","",$this->input->post('numSALMIN'))));
        $JOB_SALMAX = str_replace("_","",str_replace(",","",str_replace(".","",$this->input->post('numSALMAX'))));
        $JOB_EMILCT = $this->input->post('txtEMILCT');
        $JOB_DRTION = $this->input->post('cmbDRTION');
        $JOB_EXPDAT = $this->input->post('datEXPDAT');
        $JOB_STATUS = $this->input->post('cmbSTATUS');
        $JOB_VACNCY = str_replace("_","",str_replace(",","",str_replace(".","",$this->input->post('numVACNCY'))));

        $input = array(
            'JOB_TITLES' => $JOB_TITLES,
            'JOB_COMPNY' => $JOB_COMPNY,
            'JOB_LCTION' => $JOB_LCTION,    
            'JOB_ASPECS' => $JOB_ASPECS,
            'JOB_DSCRIP' => $JOB_DSCRIP,
            'JOB_RQSKIL' => $JOB_RQSKIL,
            'JOB_FSILTY' => $JOB_FSILTY,
            'JOB_SALMIN' => $JOB_SALMIN,
            'JOB_SALMAX' => $JOB_SALMAX,
            'JOB_EMILCT' => $JOB_EMILCT,
            'JOB_DRTION' => $JOB_DRTION,
            'JOB_EXPDAT' => $JOB_EXPDAT,
            'JOB_VACNCY' => $JOB_VACNCY
        );

        if($this->input->post('hidTRNSKS')=='add'){
            $CODE = 'JOB';
            $TYPES = 'JOB';
            $YEAR = date('Y');
            $JOB_CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array(
                'JOB_NOMJOB'=>$JOB_CODESS,
                'JOB_USRCRT'=>$this->login,
                'JOB_STATUS' => 1,
                'JOB_DATCRT'=>$this->datesave
            ));
            
        }else{
            $input = array_merge($input,array(
                'JOB_STATUS' => $JOB_STATUS,
                'JOB_USRUPD'=>$this->login,
                'JOB_DATUPD'=>$this->datesave
            ));
        }
        
        $this->crud->useTable('T_TRN_JOBPOS');
        $this->crud->save($input, array('JOB_IDENTS'=> $JOB_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = ($this->input->post('hidTRNSKS') =='add') ? $this->crud->__insertID : $this->input->post('hidIDENTS');

        $redirect = '/Myjconnect_Client/lowongan/'.$JOB_IDENTS;

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function pelamar() {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'Pelamar Anda';
        $data['icon'] = '<i class="fa fa-files"></i>';
        $data['link_menu'] = 'pelamar_edit';
        $data['type'] = 3;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function updateViewCounter(){
        $idents = $this->input->post('idents');
        $idappl = $this->input->post('idappl');
        // echo "$idents ~ $filess";

        // $result = $this->m_sales->getUpdateCounter($idents);
        $sql =" 
            UPDATE T_TRN_APPLYJ a
            INNER JOIN (
              SELECT APP_IDENTS,APP_IDPKRJ,(APP_CVIEWS+1) CVIEWS
              FROM T_TRN_APPLYJ 
              WHERE APP_IDPKRJ = ".$idents." AND APP_IDENTS = ".$idappl."
            ) b ON a.APP_IDPKRJ = b.APP_IDPKRJ
            SET a.APP_CVIEWS = CVIEWS
            WHERE a.APP_IDPKRJ = ".$idents." AND a.APP_IDENTS = ".$idappl."
        ";

        $query = $this->db->query($sql);
        // $records = $query->result_array($query);

        // echo $this->db->last_query();
        // $this->common->debug_sql();
        // echo 'Terima kasih, Anda sedang melihat CV Kandidat kami.';
    }

    function lowongan_hapus($idents){
        $IDENTS = $idents;

        $value = array(
            'JOB_STATUS'=>3,
            'JOB_USRUPD'=>$this->userid,
            'JOB_DATUPD'=>$this->datesave
        );
        
        $this->crud->useTable('T_TRN_JOBPOS');
        $this->crud->save($value, array('JOB_IDENTS'=>$IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }

    function update_status($id,$status){
        $IDENTS = $id;

        $input = array(
            'APP_STATUS' =>$status,
            'APP_USRUPD' =>$this->login,
            'APP_DATUPD' =>$this->datesave
        );
        
        $this->crud->useTable('T_TRN_APPLYJ');
        $this->crud->save($input, array('APP_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        // $redirect = '/Myjconnect_Client/pelamar/'.$id;
        $redirect = '/Myjconnect_Client/pelamar/'.$id;

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
        $data['title'] = 'My JConnect';
        $data['content'] = 'myjconnect';
        if($this->level == 3){
            $data['menu'] = 'List Job';
        }
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['type'] = 2;
        $data['data'] = $this->m_jconnect->list_jobs($this->userid);

        $this->load->view('v_dashboard',$data);
    }

}
?>