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
        $this->load->model(array('m_jconnect','m_master','m_job','m_common','m_pekerja','m_client','m_perekrutan'));
        $this->login = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->active = $this->session->userdata('USR_ACTIVE');
        $this->userid = $this->session->userdata('USR_IDENTS');
        $this->datesave = date('Y-m-d H:i:s');
        $this->load->library('pagination');
        if($this->login == '' || $this->login == null){
            redirect('jpn/Login_web');
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
        $data['datanya'] = $data;

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
        $data['datanya'] = $data;

        $this->load->view('jpn/v_dashboard',$data);
    }

    function comboProvince($idcontry){
        $listProvnc = '
                    <td id="provinsi">
                        <select name="cmbPROVNC" id="cmbPROVNC" class="form-control" onchange="jvChangeProvinsi()" required>
                            <option value=0>-- 州を選択 --</option>
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
                    $listProvnc .= "<option value='".$row->PRV_IDENTS."'>".$row->PRV_NAMESS."</option>";
                }
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
                            <option value=0>-- 都市を選択 --</option>
        ';
        if($idcontry==1){
            $optCityss = $this->m_master->getComboKota_change($idcontry,$idprovnc);
            foreach($optCityss as $row){
                $listCityss .= "<option value='".$row->CTY_IDENTS."'>".$row->CTY_NAMESS."</option>";
            }
        }else{
            $optCityss = $this->m_master->getComboKotaJP_change($idcontry,$idprovnc);
            foreach($optCityss as $row){
                $listCityss .= "<option value='".$row->CTY_IDENTS."'>".$row->CTY_NAMESS."</option>";
            }
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
        $CLI_NOMORS = $this->input->post('txtNOMORS');
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
        
        if($CLI_NOMORS == '' || $CLI_NOMORS == null){
            $CODE = 'CLI';
            $TYPES = 'CLI';
            $YEAR = date('Y');
            $CLI_NOMORS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array('CLI_NOMORS'=>$CLI_NOMORS));
        }else{
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

        $redirect = '/jpn/Myjconnect_Client';

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

        $redirect = '/jpn/Myjconnect_Client';

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
        $data['menu'] = '空席状況一覧';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['link_menu'] = 'lowongan_add';
        $data['type'] = 2;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->list_jobs($this->userid,$jumlah_data);
        $data['datanya'] = $data;

        $this->load->view('jpn/v_dashboard',$data);
    }

    function lowongan_add($idclnt) {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = '空席を作る';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['link_menu'] = 'lowongan_add';
        $data['type'] = 2;
        $data['jenis']= 'add';
        $data['idclnt']= $idclnt;
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['data_job'] = $this->m_job->getJob_edit(0,1);
        $data['datanya'] = $data;

        $this->load->view('jpn/v_dashboard',$data);
    }

    function lowongan_edit($idjob) {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = '空室率の推移';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['link_menu'] = 'lowongan_add';
        $data['type'] = 2;
        $data['jenis']= 'edit';
        $data['idjob']= $idjob;
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['data_job'] = $this->m_job->getJob_edit($idjob,1);
        $data['datanya'] = $data;

        $this->load->view('jpn/v_dashboard',$data);
    }

    function lowongan_simpan($idjob){
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
        $this->crud->save($input, array('JOB_IDENTS'=> $idjob));
        $this->crud->unsetMe();
        $IDENTS = ($this->input->post('hidTRNSKS') =='add') ? $this->crud->__insertID : $this->input->post('hidIDENTS');

        $redirect = '/jpn/myjconnect_client/lowongan/'.$idjob;

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function getDataCompany($id){
        $getdata = $this->m_job->getDataCompany($id);
        echo $getdata->CLI_IDENTS.'~'.$getdata->CLI_NAMESS.'~'.$getdata->CITY.'~'.$getdata->ASPECS;
    }

    function getDataJob($id){
        $getdata = $this->m_perekrutan->getDataJob($id);
        echo $getdata->JOB_IDENTS.'~'.$getdata->JOB_NOMJOB.'~'.$getdata->JOB_TITLES.'~'.$getdata->JOB_DRTION.'~'.$getdata->JOB_VACNCY;
    }

    function getDataPekerja($id){
        $getdata = $this->m_perekrutan->getDataPekerja($id);
        echo $getdata->PKR_IDENTS.'~'.$getdata->NAMA.'~'.$getdata->JNSKLM.'~'.$getdata->EXPRNC.' Tahun'.'~'.$getdata->PRSHAN.'~'.$getdata->BIDANG;
    }

    function pelamar() {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = '申請者';
        $data['icon'] = '<i class="fa fa-files"></i>';
        $data['link_menu'] = 'pelamar_edit';
        $data['type'] = 3;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['datanya'] = $data;

        $this->load->view('jpn/v_dashboard',$data);
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
        $redirect = '/jpn/myjconnect_client/pelamar/'.$id;

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function perekrutan($idclen) {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $jumlah_data = $this->m_perekrutan->getRekrutListWeb_num($idclen);
        if($jumlah_data == '' || $jumlah_data == 0 || $jumlah_data == null){
            $jumlah_data = 0;
        }
        
        $jml = $this->m_job->get_list_jobs_byclient_num($idclen);        
        if($jml == '' || $jml == 0 || $jml == null){
            $jml = 0;
        }
        
        $data['jml'] = $jumlah_data;
        $data['menu'] = 'Perekrutan';
        $data['icon'] = '<i class="fa fa-book"></i>';
        $data['link_menu'] = 'perekrutan_add';
        $data['type'] = 5;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->list_jobs($this->userid,$jml);
        $data['datarecrut'] = $this->m_perekrutan->getRekrutListWeb($this->userid,$jumlah_data);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function perekrutan_add($idclnt) {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'Perekrutan';
        $data['icon'] = '<i class="fa fa-book"></i>';
        $data['link_menu'] = 'perekrutan_add';
        $data['type'] = 5;
        $data['jenis']= 'add';
        $data['idclnt']= $idclnt;
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['data_job'] = $this->m_perekrutan->getPerekrutanWeb_edit(0,1);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function perekrutan_edit($idjob,$idclnt) {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'Ubah Perekrutan';
        $data['icon'] = '<i class="fa fa-book"></i>';
        $data['link_menu'] = 'perekrutan_add';
        $data['type'] = 5;
        $data['jenis']= 'edit';
        $data['idjob']= $idjob;
        $data['idclnt']= $idclnt;
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['data_job'] = $this->m_perekrutan->getPerekrutanWeb_edit($idjob,1);
        $data['data_detail'] = $this->m_perekrutan->getPerekrutanWeb_detail($idjob,1);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function cekPekerja(){
        $pekrja = $this->input->post('cmbPEKRJA');
        $data = $this->m_perekrutan->cekPekerja($pekrja);
        echo $data;
    }

    function perekrutan_simpan(){
        $this->load->model('crud');
        $typess     = $this->input->post('hidtrn');
        $idclnt     = $this->input->post('hidcom');
        $REC_IDENTS = $this->input->post('idents');
        $REC_NOMORS = $this->input->post('nomors');
        $REC_TGLREC = $this->input->post('recdat');
        $REC_COMPNY = $this->input->post('compny');
        $REC_JOBPOS = $this->input->post('nomjob');

        // echo "$typess - $idclnt - $REC_IDENTS - $REC_NOMORS - $REC_TGLREC - $REC_COMPNY - $REC_JOBPOS";
        // die();

        $input = array(
            'REC_TGLREC' => $REC_TGLREC,
            'REC_COMPNY' => $REC_COMPNY,
            'REC_JOBPOS' => $REC_JOBPOS
        );

        if($typess=='add'){
            $CODE = 'REK';
            $TYPES = 'REK';
            $YEAR = date('Y');
            $REC_CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array(
                'REC_NOMORS'=>$REC_CODESS,
                'REC_USRCRT'=>$this->session->userdata('USR_LOGINS'),
                'REC_STATUS' => 1,
                'REC_DATCRT'=>date('Y-m-d H:i:s')
            ));
            
        }else{
            $input = array_merge($input,array(
                'REC_NOMORS'=>$REC_NOMORS,
                'REC_USRUPD'=>$this->session->userdata('USR_LOGINS'),
                'REC_STATUS' => 1,
                'REC_DATUPD'=>date('Y-m-d H:i:s')
            ));
        }
        
        $this->crud->useTable('T_TRN_RCRUIT');
        $this->crud->save($input, array('REC_IDENTS'=> $REC_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = ($typess =='add') ? $this->crud->__insertID : $REC_IDENTS;

        $DETAIL = json_decode($this->input->post('hidDETAIL'), true);
        // $this->common->debug_array($DETAIL);
        // print_r($DETAIL);
        // die();
        
        // --------------------------------------------- update table Detail ------------------------------------------------- //

        if(count($DETAIL) > 0){
            $this->crud->useTable("T_TRN_RCRUIT_DETAIL",false);
            $this->crud->delete_builder(array("REC_FIDENT"=>$REC_IDENTS));
            $this->crud->unsetMe();

            foreach ($DETAIL as $key => $value) {
                unset($value['uid']);
                unset($value['boundindex']);
                unset($value['uniqueid']);
                unset($value['visibleindex']);
                unset($value['REC_IDENTS']);
                
                // untuk input/update detail
                $value = array(
                    'REC_FIDENT'=>$REC_IDENTS,
                    'REC_PKRJID'=>$value['REC_PKRJID']
                );

                $this->crud->useTable("T_TRN_RCRUIT_DETAIL");
                $this->crud->save($value);
                $this->crud->unsetMe();
            }
        }

        $redirect = '/Myjconnect_Client/perekrutan/'.$REC_COMPNY;
        // echo $redirect;die();
        // $redirect = '';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function laporan() {
        $data = array();
        $data['title'] = 'My JConnect Client';
        $data['content'] = 'myjconnect_client';
        $data['menu'] = 'Laporan';
        $data['icon'] = '<i class="fa fa-file"></i>';
        $data['link_menu'] = 'laporan';
        $data['type'] = 6;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->getClientInfo($this->userid);
        $data['datanya'] = $data;

        $this->load->view('v_dashboard',$data);
    }

    function cetakLaporan($types,$tahun,$bulan){
        // echo "$types - $tahun - $bulan";

        $data['title'] = 'Laporan';
        $data['types'] = $types;
        $data['tahun'] = $tahun;
        $data['bulan'] = $bulan;
        $data['data'] = $this->m_client->getApplayJobReport($this->userid,$types,$tahun,$bulan);

        $this->load->view('v_rpt_html',$data);
        // $html = $this->load->view('v_rpt_html',$data);
        
        // $rpt = "rpt".rand(1,9).rand(1,9).rand(1,9).".rpcx";
        // if ( ! write_file("temp/$rpt", $html, 'w')){
        //     echo 'Unable to write the file';
        // }else{
        //     //echo 'File written!';
        //     echo substr($rpt,0,-5);
        // }       
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

    function exportExcel($types,$tahun,$bulan){
        $this->load->library('libexcel'); 
        // $this->common->debug_post();

        $urut = 0;
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'No. Job',    'namanya'=>'JOB_NOMJOB','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Judul',      'namanya'=>'TITLES','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Kandidat',       'namanya'=>'PEKRJA','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Tmpt/Tgl.Lahir',  'namanya'=>'TMPTGLLHR','width'=>80);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'Jenis Kelamin',     'namanya'=>'JNSKLM','width'=>110);
        $arrCol[] = array('lsturut'=>$urut++,'nilai'=>'No. Handphone',     'namanya'=>'NOMRHP','width'=>110);
        
        $datenow = date('Y_m_d');
        $jdata =$this->m_sales->getApplayJobReport_Excel($this->userid,$types,$tahun,$bulan);
        $arrExcel = array('sNAMESS'=>'Laporan Group By Job Order', 'sFILNAM'=>'Laporan Group By Job Order '.$datenow,'col'=>$arrCol, 'rsl'=>$jdata->result());
        return $this->libexcel->bangunexcel($arrExcel);
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