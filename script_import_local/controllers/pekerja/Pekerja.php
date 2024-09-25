<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pekerja extends MY_Controller {
	var $tables;
	var $modul;
	var $identcolumn;
	var $username;
	var $datesave;
	var $adminpage;

	function __construct(){
		parent::__construct();
		$this->load->helper(array('ginput','jqxgrid','file'));
		$this->load->model(array('m_pekerja','m_client'));
		$this->modul = $this->router->fetch_class();
		$this->adminpage = $this->config->item('adminpage');
		$this->userid = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->loginid = $this->session->userdata('USR_IDENTS');
		$this->datesave = date('Y-m-d H:i:s');
		$this->title = "Pekerja";
    }
    
	public function index(){
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'#','text'=> 'Pekerja'),
		);
		$bc = generateBreadcrumb($arrbread);
		$this->_render('pages/home', $this->listPekerja(),'admin',$bc);
    }
    
    function listPekerja(){
        $gridname = "jqxPekerja";
		$url ='/pekerja/nosj/getPekerja_list';
		$urut=0;
		
		$col[] = array('lsturut'=>$urut++,'namanya' => 'PKR_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PKR_NOMPKR', 'label' => 'No. Pekerja','aw'=>'10%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PKR_NAMESS', 'label' => 'Nama Pekerja','aw'=>'20%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PKR_TMPLHR', 'label' => 'Tempat Lahir','aw'=>'10%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PKR_TGLLHR', 'label' => 'Tgl. Lahir','aw'=>'10%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JNSKLM', 'label' => 'Jenis Kelamin','aw'=>'10%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PKR_ADDRES', 'label' => 'Alamat','aw'=>'30%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'STATUS', 'label' => 'Status','aw'=>'10%','adtype'=>'text');

        $dbutton = array(
            "Cetak"=>array("Cetak","fa-print", "jvCetak(1)","primary")
        );
		
        $gridd = gGrid(array('url'=>$url , 
            'gridname'=>$gridname,
            'width'=>'100%',
            'height'=>'100%',
            'col'=>$col,
            'button'=> 'standar',
            'modul'=>'pekerja/'.$this->modul,
            'sumber'=>'server',
            // 'buttonother'=>$dbutton,
            'pagesize'=>20,
            'fontsize'=>10,
            'pageable'=>true
        ));

        $script = "
            <script>
            </script>
        ";

        $content = "
			<center>
                <div class='container' style='width:100%;padding:0px 0px 0px 0px;align:left;'>
                    <div class=row>
                        <div class='col-md-10 col-sm-10 col-xs-10' style='width:80%;height:300px;valign:left;'>	
                            " . $gridd . "
                        </div>
                    </div>
                </div>
			</center>
		";
        $content .= $script;
        $content .= generateWindowjqx(array('window'=>'Overlay','title'=>'','height'=>'500', 'widths'=>'600','overflow'=>'auto'));

		return $content;
    }

    function show($type=null, $index = null, $source=null){
		if($type=='add'){
			$keterangan = "Tambah";
		}elseif($type=='view'){
			$keterangan = "Lihat";
		}else{
			$keterangan = "Ubah";
		}
		$content = $this->edit($type, $index, $source);
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'/pekerja/pekerja','text'=> 'Pekerja'),
			array('link'=>'#','text'=> $keterangan),
		);			
		$bc = generateBreadcrumb($arrbread);
    	$this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $arrColumn = array(
            'txtLOGINS' =>'PKR_LOGNID',
            'txtNOMPKR' =>'PKR_NOMPKR',
            'txtNAMESS' =>'PKR_NAMESS',
            'txaADDRES' =>'PKR_ADDRES',
            'txaADDRDO' =>'PKR_ADDRDO',
            'txtBIRTHP' =>'PKR_TMPLHR',
            'datBIRTHD' =>'PKR_TGLLHR',
            'txtFOTOSS' =>'PKR_FOTOSS',
            'txtNOMKTP' =>'PKR_NOMKTP',
            'txtNONPWP' =>'PKR_NONPWP',
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
            // 'txtEXPPOS' =>'PKR_EXPPOS',
            'txtSRTKT1' =>'PKR_SRTKT1',
            'txtSRTKT2' =>'PKR_SRTKT2',
            'cmbMNTBDG' =>'PKR_MNTBDG',
            'txtBDLAIN' =>'PKR_BDLAIN',
            'txtEXPSAL' =>'PKR_EXPSAL',
            'filFILECV' =>'PKR_FILECV',
            'txtLOGINS_DESC' =>'USR_LOGINS',
            'txtLOGNID' =>'PKR_LOGNID',
        );

        if($type!="add"){
            $column = $this->m_pekerja->getPekerja_edit($param,1);
            $readonly = true;
        }else{
            $readonly = false;
        }

        foreach($arrColumn as $input=>$field){
            if(isset($column)){
                ${$input} = $column->{$field};
            }else{
                ${$input} = "";
            }
        }

        $AccountTag = array(
            'limit'=>1,
            'data'=>$txtLOGINS.'~'.$txtLOGINS_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/pekerja/pekerja/tagLogins";}'
        );

        $optActive = $this->crud->getCommon(3,6);
        $optSEXESS = array(''=>'','1'=>'Pria','2'=>'Wanita');
        $optRLGION = $this->crud->getCommon(3,1);
        $optLSTEDU = $this->crud->getCommon(3,3);
        $optSTATUS = $this->crud->getCommon(3,4);
        $optMERRID = $this->crud->getCommon(3,14);
        $optASPECS = $this->m_client->getComboBidang();
        $optEXPRNC = array('0'=>'--Pilih--','1'=>'1 Tahun','2'=>'2 Tahun','3'=>'3 Tahun','4'=>'4 Tahun','5'=>'5 Tahun','6'=>'Lebih Dari 5 Tahun');

        $onSuccess = 'jvSave()';

        $ruleFNAMES = array(array('rule'=>'empty','message'=>'Nama Belum Diisi!'));
        $ruleNOMKTP = array(array('rule'=>'empty','message'=>'No.KTP Belum Diisi!'));
        $ruleNONPWP = array(array('rule'=>'empty','message'=>'No.NPWP Belum Diisi!'));
        $ruleSEXESS = array(array('rule'=>'empty','message'=>'Jenis Kelamin Belum Dipilih!'));
        $ruleRELIGN = array(array('rule'=>'empty','message'=>'Agama Belum Dipilih!'));
        $ruleEDUCTN = array(array('rule'=>'empty','message'=>'Pendidikan Belum Dipilih!'));
        $ruleMARRID = array(array('rule'=>'empty','message'=>'Status Pernikahan Belum Dipilih!'));
        $ruleADDRES = array(array('rule'=>'empty','message'=>'Alamat Rumah Sesuai KTP Belum Diisi!'));
        $ruleADDRDO = array(array('rule'=>'empty','message'=>'Alamat Rumah Sesuai Domisili Belum Diisi!'));
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

        // ------------------------- tab Data Pekerja
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNOMPKR','label'=>'N.I.P (Nomor Induk Pekerja)',  'size'=>'150','value'=> isset($column) ? $txtNOMPKR : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtLOGINS', 'label'=>'Login ID/Username', 'size'=>'300','value'=>isset($column) ? $txtLOGINS : "",'tagsinput' => $AccountTag,'readonly'=>$readonly);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtLOGNID', 'label'=>'Login Idents', 'size'=>'300','value'=>isset($column) ? $txtLOGINS : "",'readonly'=>$readonly);

        $arrNama = array(
            'txtNAMESS'=>array(
                'size'=> '300',
                'value'=> $txtNAMESS,
                ),
            'txtFOTOSS'=>array(
                'type'=>'file',
                'size'=> '300',
                'value'=> $txtFOTOSS
                )
        );
        
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama',  'size'=>'300','value'=> isset($column) ? $txtNAMESS : "");
        // , 'namanya' =>$arrNama
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtFOTOSS', 'label'=>'Foto', 'size'=>'150','value'=>isset($column) ? $txtFOTOSS : '');
        
        $arrTmptTglLahir = array(
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

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>$arrTmptTglLahir,'label'=>'Tmpt/Tgl Lahir',  'size'=>'100','value'=> isset($column) ? $txtBIRTHP : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNOMKTP', 'masked'=>'999999-999999-9999','label'=>'KTP','size' => '150','value'=> isset($column) ? $txtNOMKTP : "", 'validator'=>$ruleNOMKTP);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNONPWP', 'masked'=>'99.999.999.9-999.999','label'=>'NPWP','size' => '150','value'=> isset($column) ? $txtNONPWP : "", 'validator'=>$ruleNONPWP);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbSEXESS', 'size'=>'150','label'=>'Jenis Kelamin','option'=>$optSEXESS, 'value'=> isset($column) ? (isset($status) ? $cmbSEXESS_DESC : $cmbSEXESS) : "",'validator'=>$ruleSEXESS);    
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbRELIGN', 'size'=>'150', 'label'=>'Agama','option'=>$optRLGION,  'value'=> isset($column) ? (isset($status) ? $cmbRELIGN_DESC : $cmbRELIGN) : "",'validator'=>$ruleRELIGN);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbEDUCTN', 'size'=>'150','label'=>'Pendidikan','option'=>$optLSTEDU,  'value'=> isset($column) ? (isset($status) ? $cmbEDUCTN_DESC : $cmbEDUCTN)  : "",'validator'=>$ruleEDUCTN);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbMARRID', 'size'=>'150','label'=>'Status Pernikahan','option'=>$optMERRID, 'value'=> isset($column) ? (isset($status) ? $cmbMARRID_DESC : $cmbMARRID) : "",'validator'=>$ruleMARRID);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txa', 'namanya' =>'txaADDRES','label'=>'Alamat Sesuai KTP',  'size'=>'300','value'=> isset($column) ? $txaADDRES : "",'validator'=>$ruleADDRES);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txa', 'namanya' =>'txaADDRDO','label'=>'Alamat Sesuai Domisili',  'size'=>'300','value'=> isset($column) ? $txaADDRDO : "",'validator'=>$ruleADDRDO);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNOMTLP', 'masked'=>'999-999999999','label'=>'No. Telp.','size' => '150','value'=> isset($column) ? $txtNOMTLP : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNOMRHP', 'masked'=>'9999-9999-999999','label'=>'No. HP','size' => '150','value'=> isset($column) ? $txtNOMRHP : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbACTIVE','label'=>'Status',  'size'=>'100','value'=> isset($column) ? $cmbACTIVE : "",'option'=>$optActive);

        // ------------------------- tab Pengalaman dan Sertifikasi
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'txtEXPRNC','label'=>'Pengalaman Kerja/Magang',  'size'=>'150','value'=> isset($column) ? $txtEXPRNC : "",'option'=>$optEXPRNC);
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtEXPNPT','label'=>'Nama Perusahaan',  'size'=>'300','value'=> isset($column) ? $txtEXPNPT : "");
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtEXPBDG','label'=>'Bidang Perusahaan',  'size'=>'300','value'=> isset($column) ? $txtEXPBDG : "");
        // $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtEXPPOS','label'=>'Posisi',  'size'=>'300','value'=> isset($column) ? $txtEXPPOS : "");
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtLVLBHS', 'label'=>'Sertifikat Level Bahasa Jepang', 'size'=>'150','value'=>isset($column) ? $txtSRTKT1 : '');
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtVISAFL', 'label'=>'Foto Izin Visa Selama di Jepang', 'size'=>'150','value'=>isset($column) ? $txtSRTKT2 : '');
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtSSWFIL', 'label'=>'Sertifikat Spesial SKills Worker (SSW)/Surat Pernyataan Dari Perusahaan', 'size'=>'150','value'=>isset($column) ? $txtSRTKT2 : '');
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtMAGANG', 'label'=>'Sertifikat Magang (JITCO/OTIT)', 'size'=>'150','value'=>isset($column) ? $txtSRTKT2 : '');

        if($filFILECV == ''){
            $filFILECV = '';
            $filFILECV_bc = '';
        }else{
            $filFILECV_bc = $filFILECV;
            $filFILECV = 'upload/pekerja/'.$param.'/'.$filFILECV;
        }

        // ------------------------- tab Minat Pekerja
        $arrTable[] = array('group'=>3, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbMNTBDG', 'size'=>'300','label'=>'Minat Bidang Pekerjaan','option'=>$optASPECS, 'value'=> isset($column) ? (isset($status) ? $cmbMNTBDG : $cmbMNTBDG) : "");
        $arrTable[] = array('group'=>3, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtBDLAIN','label'=>' ',  'size'=>'300','value'=> isset($column) ? $txtBDLAIN : "", 'placeHolder'=>'Bidang Lainnya');
        $arrTable[] = array('group'=>3, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'num', 'namanya' =>'txtEXPSAL','label'=>'Perkiraan Gaji',  'size'=>'300','value'=> isset($column) ? $txtEXPSAL : "");
        $arrTable[] = array('group'=>3, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'filFILECV', 'label'=>'Dokumen CV', 'size'=>'150','value'=>isset($column) ? $filFILECV : '');

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtFOTOSS_bc','label'=>'Foto Descre', 'value'=> $txtFOTOSS_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtSRTKT1_bc','label'=>'Sertifikat1 Descre', 'value'=> $txtSRTKT1_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtSRTKT2_bc','label'=>'Sertifikat2 Descre', 'value'=> $txtSRTKT2_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/save/pekerja/pekerja";
    	$button = "";
    	$arrForm =
	      array(
	        'type'=>$type,
	        'param'=>$param,
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
                '1'=>'Data Pribadi Pekerja',
                '2'=>'Pengalaman dan Sertifikasi',
                '3'=>'Minat Kerja'
                // ,'4'=>'Lupa'
            )
         );
        
        $arrButton = array(
        "save"=>array("Save", "jvSave()","success","save")
        );

		$script = "
        <script>
            $(document).ready(function(){
                $('#txtBDLAIN').hide();
                $('#cmbMNTBDG').bind('change',function(data){
                    var pkrjid = $('#cmbMNTBDG').val();
                    // alert(pkrjid);
                    if(pkrjid == 15){
                        // alert('changing');
                        $('#txtBDLAIN').show();
                    }else{
                        $('#txtBDLAIN').hide();
                    }
                });
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

    function tagLogins(){
        $table = 'T_MAS_USERSS';
        $idnya = 'USR_IDENTS';

        $fields = array(
            'id'=>$idnya,
            'field'=>'USR_LOGINS',
            'where'=>'USR_LOGINS',
            'disabled'=>FALSE
        );
        $this->db->where('USR_ACTIVE',1);
        $this->db->where('USR_LEVELS',2);
        $this->db->where('USR_MENUID',2);
        $this->db->where('USR_TYPESS',2);
        $filter = "";                

        $json = autotag(
            array(
                'table'=>$table,
                'protected'=>false,
                'field'=>$fields,
                'filter'=>$filter
                )
            );
        // $this->common->debug_sql();
    }

    function save(){
        // $this->common->debug_post();
        $PKR_IDENTS = $this->input->post('hidIDENTS');
        $PKR_LOGNID = $this->input->post('txtLOGNID');
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
        $PKR_EXPRNC = strtoupper($this->input->post('txtEXPRNC'));
        $PKR_EXPNPT = strtoupper($this->input->post('txtEXPNPT'));
        $PKR_EXPBDG = strtoupper($this->input->post('txtEXPBDG'));
        // $PKR_EXPPOS = $this->input->post('txtEXPPOS');
        $PKR_SRTKT1 = $this->input->post('txtSRTKT1');
        $PKR_SRTKT2 = $this->input->post('txtSRTKT2');
        $PKR_MNTBDG = $this->input->post('cmbMNTBDG');
        $PKR_BDLAIN = $this->input->post('txtBDLAIN');
        $PKR_EXPSAL = $this->input->post('txtEXPSAL');

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
            // 'PKR_EXPPOS' => $PKR_EXPPOS,
            'PKR_MNTBDG' => $PKR_MNTBDG,
            'PKR_BDLAIN' => $PKR_BDLAIN,
            'PKR_EXPSAL' => $PKR_EXPSAL
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
            if($this->input->post('txtEXPPOS') == ''){
                $CODE = 'PKR';
                $TYPES = 'PKR';
                $YEAR = date('Y');
                $PKR_CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);

                $input = array_merge($input,array(
                    'PKR_USRUPD'=>$this->userid,
                    'PKR_NOMPKR'=>$this->PKR_CODESS,
                    'PKR_DATUPD'=>$this->datesave
                ));
            }else{
                $input = array_merge($input,array(
                    'PKR_USRUPD'=>$this->userid,
                    'PKR_DATUPD'=>$this->datesave
                ));
            }
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
            $this->crud->save($input, array('PKR_IDENTS'=> $IDENTS));
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
            $this->crud->save($input, array('PKR_IDENTS'=> $IDENTS));
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
            $this->crud->save($input, array('PKR_IDENTS'=> $IDENTS));
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
            $this->crud->save($input, array('PKR_IDENTS'=> $IDENTS));
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
            $this->crud->save($input, array('PKR_IDENTS'=> $IDENTS));
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
            $this->crud->save($input, array('PKR_IDENTS'=> $IDENTS));
            $this->crud->unsetMe();
        }

        $redirect = '/pekerja/pekerja';

        if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			$this->common->message_save('save_gagal',null,$redirect);
		}else{
			$this->db->trans_commit();
            $this->common->message_save('save_sukses',null, $redirect);
		}
    }

    function delete(){
        $IDENTS = $this->input->post('idents');

        $this->crud->useTable('T_MAS_PEKRJA');
        $this->crud->delete_builder(array('PKR_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}