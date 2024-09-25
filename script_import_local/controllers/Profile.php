<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {
    var $tables;
    var $modul;
    var $identcolumn;
    var $username;
    var $datesave;
    var $adminpage;

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('ginput','jqxgrid'));
        $this->load->model(array('m_common','m_master','m_pekerja','m_client'));

        $this->modul = $this->router->fetch_class();
        $this->adminpage = $this->config->item('adminpage');
        $this->username = $this->session->userdata('USR_NAMESS');
        $this->userid = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->loginid = $this->session->userdata('USR_IDENTS');
        $this->menuid = $this->session->userdata('USR_MENUID');
        $this->types = $this->session->userdata('USR_TYPESS');
        $this->datesave = date('Y-m-d H:i:s');
        //$this->title = "SPK Masuk";

        // $this->organization = $this->m_master->get_org_bypos($this->session->userdata('posisi'));
    }


    function changepass()
    {
         $arrbread = array(
            array('link'=>'/home/welcome','text'=>'Beranda'),
            array('link'=>'#','text'=> 'Ubah Password'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->vchange(),'admin',$bc);

    }
    
    function vchange()
    {

        $onSuccess = 'jvSave()';
    
        $ruleMERK = array(array('rule'=>'empty','message'=>'Konfirmasi Password Belum Diisi!'));
        $ruleFNAMES = array(array('rule'=>'empty', 'onSuccess'=>$onSuccess,'message'=>'Password Belum Diisi!'));

        $formname = 'formgw';
        $urutan=0;

         $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'pwd', 'namanya' =>'txtPass1', 'size'=>'300','label'=>'Password Baru', 'value'=> isset($column) ? $txtNAMESS : "" ,'validator'=>$ruleFNAMES); 

         $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'pwd', 'namanya' =>'txtPass2', 'size'=>'300','label'=>'Konfirmasi Password Baru', 'value'=> isset($column) ? $txtMERK : "" ,'validator'=>$ruleMERK); 

          $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> 1);

        $formname = 'formgw';
        $formcommand = "/save/profile";
        $button = "";
        $arrForm =
          array(
            'arrTable'=>$arrTable,
            'status'=> isset($status) ? $status : "",
            'width' => '100%',
            'height' =>'100%',
            'formcommand'=>$formcommand,
            'modul' => $this->modul,
            'source'=>'app'
            
         );
         
        
        $arrButton = array(
            "save"=>array("Simpan", "jvValidate()","success","save")
        );

        $script = "
        <script>
            $(document).ready(function(){                 
            });

            function jvValidate(){
                $('#".$formname."').jqxValidator('validate');
             }

            function jvSave(){
                var a  =  $('#txtPass1' ).val();
                var b  = $('#txtPass2').val();

                if(a.length < 4){
                    alert('Minimal 4 Karakter');
                    return;
                }

                if(a != b){
                    alert('Password tidak sama');
                    return;
                }else{
                   if(confirm('Simpan Data?')){
                        document.".$formname.".submit();
                   } 
                }
            }
        </script>
        
        ";
            
        $content = generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton),"width:'100%',");      
        $content .= generateForm($arrForm,false);
        $content .= form_close();
        $content .= $script;  
        return $content;
    }

    function save(){
        $pass1 = $this->input->post('txtPass1');
        // echo md5($pass1);die();

        $input = array(
            'USR_PASSWD' => md5($this->input->post('txtPass1')),
        );

        $this->crud->useTable('T_MAS_USERSS');
        $this->crud->save($input, array('USR_LOGINS '=> $this->session->userdata('USR_LOGINS')));
        $this->crud->unsetMe();

        $redirect = '/home/welcome';
        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect); 
        }
    }

    function info()
    {
        $arrbread = array(
            array('link'=>'/home/welcome','text'=>'Beranda'),
            array('link'=>'#','text'=> 'Info'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->vinfo(),'admin',$bc);
    }

    function vinfo()
    {
        $arrColumn = array(
            'txtNAMESS' =>'BHD_NAMESS',
            'txtMERK' =>'BHD_MERKSS',
        );

        $level = $this->session->userdata('USR_LEVELS');
        if($level == 1){
            $level = 'Admin';
        }elseif($level == 2){
            $level = 'User';
        }else{
            $level = 'Super Admin';
        }

        foreach($arrColumn as $input=>$field){
            if(isset($column)){
                ${$input} = $column->{$field};
            }else{
                ${$input} = "";
            }
        }

        $formname = 'formgw';
        $urutan=0;

         $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPass1', 'size'=>'300','label'=>'Username', 'value'=>  $this->session->userdata('USR_LOGINS') , 'readonly' => true); 

         $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPass2', 'size'=>'300','label'=>'Nama', 'value'=>   $this->session->userdata('USR_NAMESS') , 'readonly' => true); 

         $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPass3', 'size'=>'300','label'=>'Level', 'value'=> $level, 'readonly' => true);

         // $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPass4', 'size'=>'300','label'=>'Struktur Organisasi', 'value'=> $this->organization['ORG_DESCRE'],'readonly' => true); 

        $formname = 'formgw';
        $formcommand = "/save/profile";
        $button = "";
        $arrForm =
          array(
            'arrTable'=>$arrTable,
            'status'=> isset($status) ? $status : "",
            'width' => '100%',
            'height' =>'100%',
            'source'=>'app'
         );
        
        $arrButton = array(
            "save"=>array("Simpan", "jvValidate()","success","save")
        );

        $script = "
        <script>
            $(document).ready(function(){                 
            });

            function jvValidate(){
                $('#".$formname."').jqxValidator('validate');
             }

            function jvSave(){

                var a  =  $('#txtPass1' ).val();
                var b  = $('#txtPass2').val();


                if(a.length < 4) 
                {
                    alert('Minimal 4 Karakter');
                    return;
                }

                if(a != b)
                {
                    alert('Password tidak sama');
                    return;
                }
                else
                {
                   if(confirm('Simpan Data?')){
                        document.".$formname.".submit();
                   } 
                }
            }
        </script>
        ";
         
        $content = generateForm($arrForm,false);
        $content .= form_close();
        $content .= $script;  
        return $content;
    }

    function info_pekerja()
    {
        $arrbread = array(
            array('link'=>'/home/welcome','text'=>'Beranda'),
            array('link'=>'#','text'=> 'Info Pekerja'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->vinfo_pekerja(),'admin',$bc);
    }

    function vinfo_pekerja()
    {
        $param = $this->loginid;
        $arrColumn = array(
            'txtLOGINS' =>'PKR_LOGNID',
            'txtNOMPKR' =>'PKR_NOMPKR',
            'txtNAMESS' =>'PKR_NAMESS',
            'txaADDRES' =>'PKR_ADDRES',
            'txtBIRTHP' =>'PKR_TMPLHR',
            'datBIRTHD' =>'PKR_TGLLHR',
            'txtFOTOSS' =>'PKR_FOTOSS',
            'txtNOMKTP' =>'PKR_NOMKTP',
            'cmbSEXESS' =>'PKR_JNSKLM',
            'cmbRELIGN' =>'PKR_RELIGN',
            'cmbEDUCTN' =>'PKR_EDUCID',
            'cmbMARRID' =>'PKR_MARRID',
            'txtNOMTLP' =>'PKR_NOMTLP',
            'txtNOMRHP' =>'PKR_NOMRHP',
            'txtWALINM' =>'PKR_WALINM',
            'txtWALIHP' =>'PKR_WALIHP',
            'cmbACTIVE' =>'PKR_ACTIVE',
            'txtEXPRNC' =>'PKR_EXPRNC',
            'txtEXPNPT' =>'PKR_EXPNPT',
            'txtEXPBDG' =>'PKR_EXPBDG',
            'txtEXPPOS' =>'PKR_EXPPOS',
            'txtSRTKT1' =>'PKR_SRTKT1',
            'txtSRTKT2' =>'PKR_SRTKT2'
        );

        $clientid = $this->m_pekerja->getPekerjaID($param,1);
        // echo '<br><br><br><br>';
        // print_r($clientid);
        // echo $clientid['CLI_IDENTS'];
        foreach($clientid as $baris=>$kolom){
            $idnya = $kolom;
        }

        $column = $this->m_pekerja->getPekerja_edit($idnya,1);
        $readonly = true;

        foreach($arrColumn as $input=>$field){
            if(isset($column)){
                ${$input} = $column->{$field};
            }else{
                ${$input} = "";
            }
        }

        $arrNamanya = array(
            'txtBIRTHP'=>array(
                'size'=> '160',
                'value'=> $txtBIRTHP,
                ),
            'datBIRTHD'=>array(
                'type'=>'dat',
                'size'=> '280',
                'value'=> $datBIRTHD
                )
        );

        $optActive = $this->crud->getCommon(3,6);
        $optSEXESS = array(''=>'','1'=>'Pria','2'=>'Wanita');
        $optRLGION = $this->crud->getCommon(3,1);
        $optLSTEDU = $this->crud->getCommon(3,3);
        $optSTATUS = $this->crud->getCommon(3,4);
        $optMERRID = $this->crud->getCommon(3,14);
        $optEXPRNC = array('0'=>'--Pilih--','1'=>'1 Tahun','2'=>'2 Tahun','3'=>'3 Tahun','4'=>'4 Tahun','5'=>'5 Tahun','6'=>'Lebih Dari 5 Tahun');

        $onSuccess = 'jvSave()';

        $ruleFNAMES = array(array('rule'=>'empty','message'=>'Nama Belum Diisi!'));
        $ruleNOMKTP = array(array('rule'=>'empty','message'=>'No.KTP Belum Diisi!'));
        $ruleSEXESS = array(array('rule'=>'empty','message'=>'Jenis Kelamin Belum Dipilih!'));
        $ruleRELIGN = array(array('rule'=>'empty','message'=>'Agama Belum Dipilih!'));
        $ruleEDUCTN = array(array('rule'=>'empty','message'=>'Pendidikan Belum Dipilih!'));
        $ruleMARRID = array(array('rule'=>'empty','message'=>'Status Pernikahan Belum Dipilih!'));
        $ruleADDRES = array(array('rule'=>'empty','message'=>'Status Rumah Belum Diisi!'));
        $ruleRMHSTS = array(array('rule'=>'empty','message'=>'Alamat Belum Dipilih!'));
        $rulePHONE1 = array(array('rule'=>'empty','message'=>'Telp Belum Diisi!', 'onSuccess'=>$onSuccess));

        if($txtFOTOSS == ''){
            $txtFOTOSS = '';
            $txtFOTOSS_bc = '';
        }else{
            $txtFOTOSS_bc = $txtFOTOSS;
            $txtFOTOSS = 'upload/pekerja/'.$param.'/'.$txtFOTOSS;
        }

        if($txtSRTKT1 == ''){
            $txtSRTKT1 = '';
            $txtSRTKT1_bc = '';
        }else{
            $txtSRTKT1_bc = $txtSRTKT1;
            $txtSRTKT1 = 'upload/pekerja/'.$param.'/'.$txtSRTKT1;
        }

        if($txtSRTKT2 == ''){
            $txtSRTKT2 = '';
            $txtSRTKT2_bc = '';
        }else{
            $txtSRTKT2_bc = $txtSRTKT2;
            $txtSRTKT2 = 'upload/pekerja/'.$param.'/'.$txtSRTKT2;
        }

        $formname = 'formgw';
        $urutan=0;

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMPKR','label'=>'N.I.P (Nomor Induk Pekerja)',  'size'=>'150','value'=> isset($column) ? $txtNOMPKR : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama',  'size'=>'300','value'=> isset($column) ? $txtNAMESS : "");

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtFOTOSS', 'label'=>'Foto', 'size'=>'150','value'=>isset($column) ? $txtFOTOSS : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>$arrNamanya,'label'=>'Tmpt/Tgl Lahir',  'size'=>'100','value'=> isset($column) ? $txtBIRTHP : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMKTP', 'masked'=>'999999-999999-9999','label'=>'KTP','size' => '150','value'=> isset($column) ? $txtNOMKTP : "", 'validator'=>$ruleNOMKTP);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbSEXESS', 'size'=>'150','label'=>'Jenis Kelamin','option'=>$optSEXESS, 'value'=> isset($column) ? (isset($status) ? $cmbSEXESS_DESC : $cmbSEXESS) : "",'validator'=>$ruleSEXESS);    
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbRELIGN', 'size'=>'150', 'label'=>'Agama','option'=>$optRLGION,  'value'=> isset($column) ? (isset($status) ? $cmbRELIGN_DESC : $cmbRELIGN) : "",'validator'=>$ruleRELIGN);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbEDUCTN', 'size'=>'150','label'=>'Pendidikan','option'=>$optLSTEDU,  'value'=> isset($column) ? (isset($status) ? $cmbEDUCTN_DESC : $cmbEDUCTN)  : "",'validator'=>$ruleEDUCTN);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbMARRID', 'size'=>'150','label'=>'Status Pernikahan','option'=>$optMERRID, 'value'=> isset($column) ? (isset($status) ? $cmbMARRID_DESC : $cmbMARRID) : "",'validator'=>$ruleMARRID);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txa', 'namanya' =>'txaADDRES','label'=>'Alamat',  'size'=>'300','value'=> isset($column) ? $txaADDRES : "",'validator'=>$ruleADDRES);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMTLP', 'masked'=>'999-999999999','label'=>'No. Telp.','size' => '150','value'=> isset($column) ? $txtNOMTLP : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMRHP', 'masked'=>'9999-9999-999999','label'=>'No. HP','size' => '150','value'=> isset($column) ? $txtNOMRHP : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbACTIVE','label'=>'Status',  'size'=>'100','value'=> isset($column) ? $cmbACTIVE : "",'option'=>$optActive);

        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'txtEXPRNC','label'=>'Pengalaman Kerja/Magang',  'size'=>'150','value'=> isset($column) ? $txtEXPRNC : "",'option'=>$optEXPRNC);
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtEXPNPT','label'=>'Nama Perusahaan',  'size'=>'300','value'=> isset($column) ? $txtEXPNPT : "");
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtEXPBDG','label'=>'Bidang Perusahaan',  'size'=>'300','value'=> isset($column) ? $txtEXPBDG : "");
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtEXPPOS','label'=>'Posisi',  'size'=>'300','value'=> isset($column) ? $txtEXPPOS : "");
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtSRTKT1', 'label'=>'Sertifikat 1', 'size'=>'150','value'=>isset($column) ? $txtSRTKT1 : '');
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtSRTKT2', 'label'=>'Sertifikat 2', 'size'=>'150','value'=>isset($column) ? $txtSRTKT2 : '');

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtFOTOSS_bc','label'=>'Foto Descre', 'value'=> $txtFOTOSS_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtSRTKT1_bc','label'=>'Sertifikat1 Descre', 'value'=> $txtSRTKT1_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtSRTKT2_bc','label'=>'Sertifikat2 Descre', 'value'=> $txtSRTKT2_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidLOGNID','label'=>'', 'value'=> $idnya);
        
        $formname = 'formgw';
        $formcommand = "/profile/save_pekerja";
        $button = "";
        $arrForm =
          array(
            'type'=>'edit',
            'param'=>$idnya,
            'arrTable'=>$arrTable,
            'status'=> isset($status) ? $status : "",
            'width' => '100%',
            'height' =>'100%',
            'formcommand'=>$formcommand,
            'modul' => $this->modul,
            // 'source'=>'app',
            'ftinggi' => '100%',
            'createtab'=>true,
            'tabname'=> array(
                '1'=>'Data Pekerja',
                '2'=>'Pengalaman dan Sertifikasi'
            )
         );
        
        $arrButton = array(
        "save"=>array("Save", "jvSave()","success","save")
        );

        $script = "
        <script>
            $(document).ready(function(){
            });

            function jvSave(){
                if(confirm('Simpan Data?')){
                    document.".$formname.".submit();
                }
            }
            
        </script>
        ";
            
        $content = generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton),"width:'100%',");      
        $content .= generateForm($arrForm,false);
        $content .= form_close();
        $content .= $script;  
        return $content;  
    }

    function save_pekerja(){
        $PKR_IDENTS = $this->input->post('hidIDENTS');
        $PKR_LOGNID = $this->input->post('hidLOGNID');
        $PKR_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        $PKR_ACTIVE = $this->input->post('cmbACTIVE');
        $PKR_ADDRES = $this->input->post('txaADDRES');
        $PKR_TMPLHR = $this->input->post('txtBIRTHP');
        $PKR_TGLLHR = $this->input->post('datBIRTHD');
        $PKR_NOMKTP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMKTP'))));
        $PKR_JNSKLM = $this->input->post('cmbSEXESS');
        $PKR_RELIGN = $this->input->post('cmbRELIGN');
        $PKR_EDUCID = $this->input->post('cmbEDUCTN');
        $PKR_MARRID = $this->input->post('cmbMARRID');
        $PKR_NOMTLP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMTLP'))));
        $PKR_NOMRHP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtNOMRHP'))));
        $PKR_WALINM = $this->input->post('txtWALINM');
        $PKR_WALIHP = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtWALIHP'))));
        $PKR_ACTIVE = $this->input->post('cmbACTIVE');
        $PKR_EXPRNC = $this->input->post('txtEXPRNC');
        $PKR_EXPNPT = $this->input->post('txtEXPNPT');
        $PKR_EXPBDG = $this->input->post('txtEXPBDG');
        $PKR_EXPPOS = $this->input->post('txtEXPPOS');
        $PKR_SRTKT1 = $this->input->post('txtSRTKT1');
        $PKR_SRTKT2 = $this->input->post('txtSRTKT2');

        $input = array(
            'PKR_LOGNID' => $PKR_LOGNID,
            'PKR_NAMESS' => $PKR_NAMESS,
            'PKR_ACTIVE' => $PKR_ACTIVE,
            'PKR_ADDRES' => $PKR_ADDRES,
            'PKR_TMPLHR' => $PKR_TMPLHR,
            'PKR_TGLLHR' => $PKR_TGLLHR,
            'PKR_NOMKTP' => $PKR_NOMKTP,
            'PKR_JNSKLM' => $PKR_JNSKLM,
            'PKR_RELIGN' => $PKR_RELIGN,
            'PKR_EDUCID' => $PKR_EDUCID,
            'PKR_MARRID' => $PKR_MARRID,
            'PKR_NOMTLP' => $PKR_NOMTLP,
            'PKR_NOMRHP' => $PKR_NOMRHP,
            'PKR_WALINM' => $PKR_WALINM,
            'PKR_WALIHP' => $PKR_WALIHP,
            'PKR_ACTIVE' => $PKR_ACTIVE,
            'PKR_EXPRNC' => $PKR_EXPRNC,
            'PKR_EXPNPT' => $PKR_EXPNPT,
            'PKR_EXPBDG' => $PKR_EXPBDG,
            'PKR_EXPPOS' => $PKR_EXPPOS
        );

        if($this->input->post('hidTRNSKS')=='add'){
            $CODE = 'PKR';
            $TYPES = 'PKR';
            $YEAR = date('Y');
            $PKR_CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array(
                'PKR_NOMPKR'=>$PKR_CODESS,
                'PKR_USRCRT'=>$this->userid,
                'PKR_DATCRT'=>$this->datesave
            ));
            
        }else{
            $input = array_merge($input,array(
                'PKR_USRUPD'=>$this->userid,
                'PKR_DATUPD'=>$this->datesave
            ));
        }
        
        $this->crud->useTable('T_MAS_PEKRJA');
        $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = ($this->input->post('hidTRNSKS') =='add') ? $this->crud->__insertID : $this->input->post('hidIDENTS');
        
        //awal aplod file RND
        $path = PATH_PEKERJA_PHOTO.$IDENTS.'/';
        if( is_dir($path) === false )
        {
            mkdir($path);  
        }

        // upload foto user
        if($_FILES['txtFOTOSS']['name']){
            $img_info          = pathinfo($_FILES['txtFOTOSS']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            // if ($this->input->post('hidTRNSKS') != 'add')
            // {
            //     if (file_exists($path.$this->input->post('txtFOTOSS_bc')))
            //     {
            //         // echo $path.$this->input->post('txtUPLOAD_bc');
            //         unlink($path.$this->input->post('txtFOTOSS_bc'));
            //     }
            // }
    
            move_uploaded_file($_FILES['txtFOTOSS']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_FOTOSS'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        // upload sertifikat 1
        if($_FILES['txtSRTKT1']['name']){
            $img_info          = pathinfo($_FILES['txtSRTKT1']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            // if ($this->input->post('hidTRNSKS') != 'add')
            // {
            //     if (file_exists($path.$this->input->post('txtSRTKT1_bc')))
            //     {
            //         // echo $path.$this->input->post('txtUPLOAD_bc');
            //         unlink($path.$this->input->post('txtSRTKT1_bc'));
            //     }
            // }
    
            move_uploaded_file($_FILES['txtSRTKT1']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_SRTKT1'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        // upload sertifikat 2
        if($_FILES['txtSRTKT2']['name']){
            $img_info          = pathinfo($_FILES['txtSRTKT2']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            // if ($this->input->post('hidTRNSKS') != 'add')
            // {
            //     if (file_exists($path.$this->input->post('txtSRTKT2_bc')))
            //     {
            //         // echo $path.$this->input->post('txtUPLOAD_bc');
            //         unlink($path.$this->input->post('txtSRTKT2_bc'));
            //     }
            // }
    
            move_uploaded_file($_FILES['txtSRTKT2']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('PKR_SRTKT2'=>$file_image_name));
            $this->crud->useTable('T_MAS_PEKRJA');
            $this->crud->save($input, array('PKR_IDENTS'=> $PKR_IDENTS));
            $this->crud->unsetMe();
        }

        $redirect = '/home/welcome';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function info_rekanan()
    {
        $arrbread = array(
            array('link'=>'/home/welcome','text'=>'Beranda'),
            array('link'=>'#','text'=> 'Info Rekanan'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->vinfo_rekanan(),'admin',$bc);
    }

    function vinfo_rekanan()
    {
        $param = $this->loginid;
        $arrColumn = array(
            'txtNOMORS' =>'CLI_NOMORS',
            'cmbASPECS' =>'CLI_ASPECS',
            'txtNAMESS' =>'CLI_NAMESS',
            'txtCONTRY' =>'CLI_CONTRY',
            'txtADDRES' =>'CLI_ADDRES',
            'txaDESCRE' =>'CLI_DESCRE',
            'txtPHONES' =>'CLI_PHONES',
            'txtFAXNUM' =>'CLI_FAXNUM',
            'txtMOBILE' =>'CLI_MOBILE',
            'txtCONTRY_DESC' =>'CONTRY',
            'txtPROVNC' =>'CLI_PROVNC',
            'txtPROVNC_DESC' =>'PROVNC',
            'txtCITYSS' =>'CLI_CITYSS',
            'txtCITYSS_DESC' =>'CITY',
            'cmbACTIVE' =>'CLI_ACTIVE'
        );

        $clientid = $this->m_client->getClientID($param,1);
        // echo '<br><br><br><br>';
        // print_r($clientid);
        // echo $clientid['CLI_IDENTS'];
        foreach($clientid as $baris=>$kolom){
            $idnya = $kolom;
        }

        $column = $this->m_client->getClient_edit($idnya,1);
        $readonly = true;

        foreach($arrColumn as $input=>$field){
            if(isset($column)){
                ${$input} = $column->{$field};
            }else{
                ${$input} = "";
            }
        }

        // ----------------- Combobox atau Autotag START
        $CountryTag = array(
            'limit'=>1,
            'data'=>$txtCONTRY.'~'.$txtCONTRY_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/rekanan/client/tagdata/country";}'
        );

        $ProvinceTag = array(
            'limit'=>1,
            'data'=>$txtPROVNC.'~'.$txtPROVNC_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/rekanan/client/tagdata/province/"+ $("#txtCONTRY").val();}'
        );

        $CityTag = array(
            'limit'=>1,
            'data'=>$txtCITYSS.'~'.$txtCITYSS_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/rekanan/client/tagdata/city/"+ $("#txtCONTRY").val()+"/"+$("#txtPROVNC").val();}'
        );

        $optASPECS = $this->m_client->getComboBidang();
        $optActive = $this->crud->getCommon(3,6);

        $disabled_des = false;

        $formname = 'formgw';
        $urutan=0;

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNOMORS','label'=>'N.I.C (Nomor Induk Client)',  'size'=>'100','value'=> isset($column) ? $txtNOMORS : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama Client',  'size'=>'300','value'=> isset($column) ? $txtNAMESS : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbASPECS', 'size'=>'250','label'=>'Bidang Pekerjaan','option'=>$optASPECS, 'value'=> isset($column) ? (isset($status) ? $cmbASPECS_DESC : $cmbASPECS) : ""); 

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtCONTRY', 'label'=>'Negara', 'size'=>'300','value'=>isset($column) ? $txtCONTRY : "",'tagsinput' => $CountryTag,'disabled'=>$disabled_des);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPROVNC', 'label'=>'Provinsi', 'size'=>'300','value'=>isset($column) ? $txtPROVNC : "",'tagsinput' => $ProvinceTag,'disabled'=>$disabled_des);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtCITYSS', 'label'=>'Kota', 'size'=>'300','value'=>isset($column) ? $txtCITYSS : "",'tagsinput' => $CityTag,'disabled'=>$disabled_des);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txa', 'namanya' =>'txtADDRES','label'=>'Alamat',  'size'=>'200','value'=> isset($column) ? $txtADDRES : "");

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPHONES', 'masked'=>'999-999999999','label'=>'No. Telp.','size' => '150','value'=> isset($column) ? $txtPHONES : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtFAXNUM', 'masked'=>'999-999999999','label'=>'No. Fax.','size' => '150','value'=> isset($column) ? $txtFAXNUM : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtMOBILE', 'masked'=>'9999-9999-999999','label'=>'No. HP','size' => '150','value'=> isset($column) ? $txtMOBILE : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'cmb', 'namanya' =>'cmbACTIVE','label'=>'Status',  'size'=>'100','value'=> isset($column) ? $cmbACTIVE : "",'option'=>$optActive);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCONTRY_bc', 'label'=>'Country BC', 'size'=>'200','value'=> isset($column) ? $txtCONTRY : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtPROVNC_bc', 'label'=>'Province BC', 'size'=>'200','value'=>isset($column) ? $txtPROVNC : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCITYSS_bc', 'label'=>'cITY BC', 'size'=>'200','value'=>isset($column) ? $txtCITYSS : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $idnya);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidLOGNID','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/profile/save_rekanan";
        $button = "";
        $arrForm =
          array(
            'type'=>'edit',
            'param'=>$idnya,
            'arrTable'=>$arrTable,
            'status'=> isset($status) ? $status : "",
            'width' => '100%',
            'height' =>'100%',
            'formcommand'=>$formcommand,
            'modul' => $this->modul,
            'source'=>'app'
            
         );
        
        $arrButton = array(
        "save"=>array("Save", "jvSave()","success","save")
        );

        $script = "
        <script>
            $(document).ready(function(){

            });

            function jvSave(){
                lognid = $('#hidLOGNID').val();
                nomors = $('#txtNOMORS').val();
                namess = $('#txtNAMESS').val();
                aspecs = $('#cmbASPECS').val();
                contry = $('#txtCONTRY').val();
                provnc = $('#txtPROVNC').val();
                cityss = $('#txtCITYSS').val();
                addres = $('#txtADDRES').val();
                phones = $('#txtPHONES').val();
                faxnum = $('#txtFAXNUM').val();
                mobile = $('#txtMOBILE').val();
                active = $('#cmbACTIVE').val();

                if(namess == '' || namess == null){
                    alert('Nama Client harus diisi!');
                    $('#txtNAMESS').focus();
                    return;
                }

                if(aspecs == '' || aspecs == null){
                    alert('Bidang Pekerjaan harus dipilih!');
                    $('#cmbASPECS').focus();
                    return;
                }

                if(contry == '' || contry == null){
                    alert('Country harus dipilih!');
                    $('#cmbCONTRY').focus();
                    return;
                }

                if(provnc == '' || provnc == null){
                    alert('Province harus dipilih!');
                    $('#cmbCONTRY').focus();
                    return;
                }

                if(cityss == '' || cityss == null){
                    alert('Kota harus dipilih!');
                    $('#cmbCONTRY').focus();
                    return;
                }

                if(addres == '' || addres == null){
                    alert('Alamat harus diisi!');
                    $('#txtADDRES').focus();
                    return;
                }

                if(phones == '' || phones == null){
                    alert('Nomor Telepon harus diisi!');
                    $('#txtPHONES').focus();
                    return;
                }

                if(mobile == '' || mobile == null){
                    alert('Nomor Handphone harus diisi!');
                    $('#txtPHONES').focus();
                    return;
                }

                if(confirm('Simpan Data?')){
                    document.".$formname.".submit();
                }
            }
            
        </script>
        ";
            
        $content = generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton),"width:'100%',");      
        $content .= generateForm($arrForm,false);
        $content .= form_close();
        $content .= $script;  
        return $content;
    }

    function save_rekanan(){
        $CLI_IDENTS = $this->input->post('hidIDENTS');
        $CLI_LOGNID = $this->input->post('hidLOGNID');
        $CLI_NOMORS = $this->input->post('txtNOMORS');
        $CLI_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        $CLI_ASPECS = $this->input->post('cmbASPECS');
        $CLI_CONTRY = $this->input->post('txtCONTRY');
        $CLI_PROVNC = $this->input->post('txtPROVNC');
        $CLI_CITYSS = $this->input->post('txtCITYSS');
        $CLI_ADDRES = $this->input->post('txtADDRES');
        $CLI_PHONES = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtPHONES'))));
        $CLI_FAXNUM = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtFAXNUM'))));
        $CLI_MOBILE = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtMOBILE'))));
        $CLI_ACTIVE = $this->input->post('cmbACTIVE');
        
        $input = array(
            'CLI_LOGNID' => $CLI_LOGNID,
            'CLI_NOMORS' => $CLI_NOMORS,
            'CLI_NAMESS' => $CLI_NAMESS,
            'CLI_ASPECS' => $CLI_ASPECS,
            'CLI_CONTRY' => $CLI_CONTRY,
            'CLI_PROVNC' => $CLI_PROVNC,
            'CLI_CITYSS' => $CLI_CITYSS,
            'CLI_ADDRES' => $CLI_ADDRES,
            'CLI_PHONES' => $CLI_PHONES,
            'CLI_FAXNUM' => $CLI_FAXNUM,
            'CLI_MOBILE' => $CLI_MOBILE,
            'CLI_ACTIVE' => $CLI_ACTIVE
        );

        if($this->input->post('hidTRNSKS')=='add'){
            $CODE = 'CLI';
            $TYPES = 'CLI';
            $YEAR = date('Y');
            $CLI_NOMORS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array(
                'CLI_NOMORS'=>$CLI_NOMORS,
                'CLI_USRCRT'=>$this->userid,
                'CLI_DATCRT'=>$this->datesave
            ));
            
        }else{
            $input = array_merge($input,array(
                'CLI_USRUPD'=>$this->userid,
                'CLI_DATUPD'=>$this->datesave
            ));
        }

        $this->crud->useTable('T_MAS_CLIENT');
        $this->crud->save($input, array('CLI_IDENTS'=> $CLI_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = ($this->input->post('hidTRNSKS') =='add') ? $this->crud->__insertID : $this->input->post('hidIDENTS');
        
        $redirect = '/home/welcome';

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->common->message_save('save_gagal',null,$redirect);
        }else{
            $this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
        }
    }

    function lihat()
    {
        // echo $this->session->userdata('nama');
        // echo "<br>";
        echo json_encode($this->organization);
    }
}