<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myjconnect extends CI_Controller {
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
            redirect('jpn/Login_web');
        }
    }

    function index() {
        $data = array();
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        $data['menu'] = 'マイプロフィール';
        $data['icon'] = '<i class="fa fa-user"></i>';
        $data['link_menu'] = 'profile_edit';
        $data['type'] = 1;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function profile_edit($id) {
        $data = array();
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        $data['menu'] = 'プロフィール変更';
        $data['icon'] = '<i class="fa fa-user"></i>';
        $data['type'] = 1;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function comboProvince($idcontry){
        $listProvnc = '
                    <td id="provinsi">
                        <select name="cmbPROVNC" id="cmbPROVNC" class="form-control" onchange="jvChangeProvinsi()" required>
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
        $PKR_USERID = $this->userid;
        $PKR_IDENTS = $id;
        $PKR_CODESS = $this->input->post('txtNOMPKR');
        $PKR_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        $PKR_FOTOSS = $this->input->post('txtFOTOSS');
        $PKR_TMPLHR = strtoupper($this->input->post('txtBIRTHP'));
        $PKR_TGLLHR = $this->input->post('datBIRTHD');
        $PKR_EMAILS = $this->input->post('txtEMAILS');
        $PKR_CONTRY = $this->input->post('cmbCONTRY');
        $PKR_PROVNC = $this->input->post('cmbPROVNC');
        $PKR_CITYSS = $this->input->post('cmbCITYSS');
        $PKR_ADDRES = strtoupper($this->input->post('txaADDRES'));
        $PKR_ADDRDO = strtoupper($this->input->post('txaADDRDO'));
        $PKR_NOMKTP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMKTP'))));
        $PKR_NONPWP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNONPWP'))));
        $PKR_NOMTLP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMTLP'))));
        $PKR_NOMRHP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMRHP'))));
        $PKR_JNSKLM = $this->input->post('cmbSEXESS');
        $PKR_RELIGN = $this->input->post('cmbRELIGN');
        $PKR_EDUCID = $this->input->post('cmbEDUCTN');
        $PKR_MARRID = $this->input->post('cmbMARRID');
        $PKR_EXPRNC = $this->input->post('cmbEXPRNC');
        $PKR_EXPNPT = strtoupper($this->input->post('txtEXPNPT'));
        $PKR_EXPBDG = strtoupper($this->input->post('txtEXPBDG'));
        $PKR_VISAFL = $this->input->post('txtVISAFL');
        $PKR_LVLBHS = $this->input->post('txtLVLBHS');
        $PKR_SSWFIL = $this->input->post('txtSSWFIL');
        $PKR_MAGANG = $this->input->post('txtMAGANG');
        $PKR_MNTBDG = $this->input->post('cmbMNTBDG');
        $PKR_BDLAIN = strtoupper($this->input->post('txtBDLAIN'));
        $PKR_EXPSAL = $this->input->post('txtEXPSAL');
        $PKR_FILECV = $this->input->post('filFILECV');
        $PKR_ACTIVE = $this->input->post('cmbACTIVE');

        // echo "$PKR_IDENTS - $PKR_NAMESS - $PKR_TMPLHR - $PKR_TGLLHR";die();

        $input = array(
            'PKR_LOGNID' => $PKR_USERID,
            'PKR_NAMESS' => $PKR_NAMESS,
            'PKR_ADDRES' => $PKR_ADDRES,
            'PKR_ADDRDO' => $PKR_ADDRDO,
            'PKR_CONTRY' => $PKR_CONTRY,
            'PKR_PROVNC' => $PKR_PROVNC,
            'PKR_CITYSS' => $PKR_CITYSS,
            'PKR_TMPLHR' => $PKR_TMPLHR,
            'PKR_TGLLHR' => $PKR_TGLLHR,
            'PKR_NOMKTP' => $PKR_NOMKTP,
            'PKR_NONPWP' => $PKR_NONPWP,
            'PKR_JNSKLM' => $PKR_JNSKLM,
            'PKR_RELIGN' => $PKR_RELIGN,
            'PKR_EDUCID' => $PKR_EDUCID,
            'PKR_MARRID' => $PKR_MARRID,
            'PKR_NOMTLP' => $PKR_NOMTLP,
            'PKR_NOMRHP' => $PKR_NOMRHP,
            'PKR_ACTIVE' => $PKR_ACTIVE,
            'PKR_EXPRNC' => $PKR_EXPRNC,
            'PKR_EXPNPT' => $PKR_EXPNPT,
            'PKR_EXPBDG' => $PKR_EXPBDG,
            'PKR_MNTBDG' => $PKR_MNTBDG,
            'PKR_BDLAIN' => $PKR_BDLAIN,
            'PKR_EXPSAL' => $PKR_EXPSAL,
            'PKR_USRUPD' =>$this->login,
            'PKR_DATUPD' =>$this->datesave
        );
        
        if($PKR_CODESS == '' || $PKR_CODESS == null){
            $CODE = 'PKR';
            $TYPES = 'PKR';
            $YEAR = date('Y');
            $PKR_CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array('PKR_NOMPKR'=>$PKR_CODESS));
        }

        $this->crud->useTable('T_MAS_PEKRJA');
        $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
        $this->crud->unsetMe();
        
        $IDENTS = $PKR_IDENTS;
        
        //awal aplod file RND
        $path = PATH_PEKERJA_PHOTO.$IDENTS.'/';
        if( is_dir($path) === false )
        {
            mkdir($path);  
        }
        
        // upload foto user
        if($_FILES['txtFOTOSS']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_FOTOSS',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_FOTOSS',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtFOTOSS']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtFOTOSS']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_FOTOSS'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        // upload Visa
        if($_FILES['txtVISAFL']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_VISAFL',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_VISAFL',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtVISAFL']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtVISAFL']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_VISAFL'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        // upload Level bhs jepang
        if($_FILES['txtLVLBHS']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_LVLBHS',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_LVLBHS',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtLVLBHS']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtLVLBHS']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_LVLBHS'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        // upload SSW
        if($_FILES['txtSSWFIL']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_SSWFIL',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_SSWFIL',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtSSWFIL']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtSSWFIL']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_SSWFIL'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        // upload Sertifikat magang
        if($_FILES['txtMAGANG']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_MAGANG',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_MAGANG',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtMAGANG']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtMAGANG']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_MAGANG'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }
        
        // upload CV
        if($_FILES['filFILECV']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_FILECV',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_FILECV',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['filFILECV']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['filFILECV']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_FILECV'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        $redirect = '/jpn/Myjconnect';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

// -----------------------------------------------------  Pengalaman Kerja dan Sertifikasi ---------------------------------------- //
    function pengalaman() {
        $data = array();
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        $data['menu'] = '経験・資格';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['link_menu'] = 'pengalaman_edit';
        $data['jenis'] = 'view';
        $data['type'] = 2;
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function pengalaman_edit($id) {
        $data = array();
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        $data['menu'] = '変更経験と認定';
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['type'] = 2;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function pengalaman_simpan($id){
        $PKR_IDENTS = $id;
        $PKR_EXPRNC = strtoupper($this->input->post('cmbEXPRNC'));
        $PKR_EXPNPT = strtoupper($this->input->post('txtEXPNPT'));
        $PKR_EXPBDG = strtoupper($this->input->post('txtEXPBDG'));
        $PKR_VISAFL = $this->input->post('txtVISAFL');
        $PKR_LVLBHS = $this->input->post('txtLVLBHS');
        $PKR_SSWFIL = $this->input->post('txtSSWFIL');
        $PKR_MAGANG = $this->input->post('txtMAGANG');

        // echo "$PKR_IDENTS - $PKR_NAMESS - $PKR_TMPLHR - $PKR_TGLLHR";die();

        $input = array(
            'PKR_EXPRNC' => $PKR_EXPRNC,
            'PKR_EXPNPT' => $PKR_EXPNPT,
            'PKR_EXPBDG' => $PKR_EXPBDG,
            'PKR_USRUPD' =>$this->login,
            'PKR_DATUPD' =>$this->datesave
        );
        
        $this->crud->useTable('T_MAS_PEKRJA');
        $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = $PKR_IDENTS;
        
        //awal aplod file RND
        $path = PATH_PEKERJA_PHOTO.$IDENTS.'/';
        if( is_dir($path) === false )
        {
            mkdir($path);  
        }
        
        // upload Visa
        if($_FILES['txtVISAFL']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_VISAFL',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_VISAFL',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtVISAFL']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtVISAFL']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_VISAFL'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        // upload Level bhs jepang
        if($_FILES['txtLVLBHS']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_LVLBHS',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_LVLBHS',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtLVLBHS']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtLVLBHS']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_LVLBHS'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        // upload SSW
        if($_FILES['txtSSWFIL']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_SSWFIL',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_SSWFIL',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtSSWFIL']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtSSWFIL']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_SSWFIL'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        // upload Sertifikat magang
        if($_FILES['txtMAGANG']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_MAGANG',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_MAGANG',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtMAGANG']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtMAGANG']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_MAGANG'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }        
        
        $redirect = '/jpn/Myjconnect';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function hapus_lamaran($IDENTS){        
        $input = array(
            'APP_STATUS' => 2
        );

        $this->crud->useTable('T_TRN_APPLYJ');
        $this->crud->save($input, array('APP_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        $redirect = '/jpn/Myjconnect/lamaran';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

// -----------------------------------------------------  Minat Kerja ---------------------------------------- //
    function minat_kerja() {
        $data = array();
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        $data['menu'] = '興味のある仕事';
        $data['icon'] = '<i class="fa fa-cogs"></i>';
        $data['link_menu'] = 'minat_kerja_edit';
        $data['type'] = 3;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function minat_kerja_edit($id) {
        $data = array();
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        $data['menu'] = '仕事の趣味を変える';
        $data['icon'] = '<i class="fa fa-cogs"></i>';
        $data['type'] = 3;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function minat_kerja_simpan($id){
        $PKR_IDENTS = $id;
        $PKR_MNTBDG = $this->input->post('cmbMNTBDG');
        $PKR_BDLAIN = strtoupper($this->input->post('txtBDLAIN'));
        $PKR_EXPSAL = $this->input->post('txtEXPSAL');
        $PKR_FILECV = $this->input->post('filFILECV');

        // echo "$PKR_IDENTS - $PKR_NAMESS - $PKR_TMPLHR - $PKR_TGLLHR";die();

        $input = array(
            'PKR_MNTBDG' => $PKR_MNTBDG,
            'PKR_BDLAIN' => $PKR_BDLAIN,
            'PKR_EXPSAL' => $PKR_EXPSAL,
            'PKR_USRUPD' =>$this->login,
            'PKR_DATUPD' =>$this->datesave
        );
        
        $this->crud->useTable('T_MAS_PEKRJA');
        $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = $PKR_IDENTS;
        
        //awal aplod file RND
        $path = PATH_PEKERJA_PHOTO.$IDENTS.'/';
        if( is_dir($path) === false )
        {
            mkdir($path);  
        }
        
        // upload CV
        if($_FILES['filFILECV']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_FILECV',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_FILECV',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }
            
            $img_info          = pathinfo($_FILES['filFILECV']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['filFILECV']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_FILECV'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        $redirect = '/jpn/Myjconnect/minat_kerja';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

// -----------------------------------------------------  Ubah Password ---------------------------------------- //
    function ubah_password() {
        if($this->login == '' || $this->login == null){
            redirect('Login_web');
        }
        $data = array();
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        $data['menu'] = 'パスワードの編集';
        $data['icon'] = '<i class="fa fa-desktop"></i>';
        $data['type'] = 4;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);

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

        $redirect = '/jpn/Myjconnect';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

// -----------------------------------------------------  Minat Kerja ---------------------------------------- //
    function lamaran() {
        $data = array();
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        $data['menu'] = 'あなたのアプリケーション';
        $data['icon'] = '<i class="fa fa-files"></i>';
        $data['link_menu'] = 'lamaran_edit';
        $data['type'] = 5;
        $data['jenis']= 'view';
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function lamaran_edit($id) {
        $data = array();
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        $data['menu'] = '仕事の趣味を変える';
        $data['icon'] = '<i class="fa fa-cogs"></i>';
        $data['type'] = 3;
        $data['jenis']= 'edit';
        $data['data'] = $this->m_jconnect->getKandidatInfo($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

    function lamaran_simpan($id){
        $PKR_IDENTS = $id;
        $PKR_MNTBDG = $this->input->post('cmbMNTBDG');
        $PKR_BDLAIN = strtoupper($this->input->post('txtBDLAIN'));
        $PKR_EXPSAL = $this->input->post('txtEXPSAL');
        $PKR_FILECV = $this->input->post('filFILECV');

        // echo "$PKR_IDENTS - $PKR_NAMESS - $PKR_TMPLHR - $PKR_TGLLHR";die();

        $input = array(
            'PKR_MNTBDG' => $PKR_MNTBDG,
            'PKR_BDLAIN' => $PKR_BDLAIN,
            'PKR_EXPSAL' => $PKR_EXPSAL,
            'PKR_USRUPD' =>$this->login,
            'PKR_DATUPD' =>$this->datesave
        );
        
        $this->crud->useTable('T_MAS_PEKRJA');
        $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = $PKR_IDENTS;
        
        //awal aplod file RND
        $path = PATH_PEKERJA_PHOTO.$IDENTS.'/';
        if( is_dir($path) === false )
        {
            mkdir($path);  
        }
        
        // upload CV
        if($_FILES['filFILECV']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_FILECV',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_PEKRJA','PKR_IDENTS','PKR_FILECV',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['filFILECV']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['filFILECV']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_FILECV'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        $redirect = '/jpn/Myjconnect/minat_kerja';

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
        $data['title'] = 'マイJConnect';
        $data['content'] = 'myjconnect';
        if($this->level == 3){
            $data['menu'] = 'List Job';
        }
        $data['icon'] = '<i class="fa fa-briefcase"></i>';
        $data['type'] = 2;
        $data['data'] = $this->m_jconnect->list_jobs($this->userid);

        $this->load->view('jpn/v_dashboard',$data);
    }

}
?>