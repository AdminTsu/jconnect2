<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job extends MY_Controller {
	var $tables;
	var $modul;
	var $identcolumn;
	var $username;
	var $datesave;
	var $adminpage;
    
	function __construct(){
		parent::__construct();
		$this->load->helper(array('ginput','jqxgrid','file'));
		$this->load->model('m_job');
		$this->modul = $this->router->fetch_class();
		$this->adminpage = $this->config->item('adminpage');
		$this->userid = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->loginid = $this->session->userdata('USR_IDENTS');
		$this->datesave = date('Y-m-d H:i:s');
		$this->title = "Pekerjaan";
    }
    
	public function index(){
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'#','text'=> 'Pekerjaan'),
		);
		$bc = generateBreadcrumb($arrbread);
		$this->_render('pages/home', $this->listJob(),'admin',$bc);
    }

    function listJob(){
        $level = $this->level;
        $loginid= $this->loginid;
        // echo "<br>$level";
        $gridname = "jqxJob";
		$url ='/job/nosj/getJob_list/'.$level.'/'.$loginid;
		$urut=0;
		
		$col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_NOMJOB', 'label' => 'No. Job','aw'=>'8%','adtype'=>'text','ga'=>'center');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_TITLES', 'label' => 'Judul','aw'=>'20%','adtype'=>'text');
        if($level == 1 || $level == 99){
            $col[] = array('lsturut'=>$urut++,'namanya' => 'CLIENT', 'label' => 'Perusahaan','aw'=>'20%','adtype'=>'text');
        }
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_LCTION', 'label' => 'Lokasi','aw'=>'10%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_ASPECS', 'label' => 'Bidang','aw'=>'17%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_DSCRIP', 'label' => 'Keterangan','aw'=>'10%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_RESPON', 'label' => 'Tanggung Jawab','aw'=>'30%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_RQSKIL', 'label' => 'Kemampuan','aw'=>'10%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_FSILTY', 'label' => 'Fasilitas','aw'=>'10%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_SALMIN', 'label' => 'Gaji Minimal','aw'=>'10%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_SALMAX', 'label' => 'Gaji Maksimal','aw'=>'10%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JENIS', 'label' => 'Status Job','aw'=>'10%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_EXPDAT', 'label' => 'Berlaku Hingga','aw'=>'10%','adtype'=>'text','ga'=>'center');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'STATUS', 'label' => 'Status','aw'=>'5%','adtype'=>'text','ga'=>'center');

        $dbutton = array(
            "Cetak"=>array("Cetak","fa-print", "jvCetak(1)","primary")
        );
		
        $gridd = gGrid(array('url'=>$url , 
            'gridname'=>$gridname,
            'width'=>'100%',
            'height'=>'100%',
            'col'=>$col,
            'button'=> 'standar',
            'modul'=>'job/'.$this->modul,
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
                        <div class='col-md-12 col-sm-12 col-xs-12' style='width:100%;height:300px;valign:left;'>	
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
			array('link'=>'/job/job','text'=> 'Pekerjaan'),
			array('link'=>'#','text'=> $keterangan),
		);
		$bc = generateBreadcrumb($arrbread);
    	$this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $level = $this->level;
        $loginid= $this->loginid;
        // echo "<br><br>$level ~ $loginid";

        $arrColumn = array(
            'txtNOMJOB' =>'JOB_NOMJOB',
            'txtTITLES' =>'JOB_TITLES',
            'txtCOMPNY' =>'JOB_COMPNY',
            'txtLCTION' =>'JOB_LCTION',
            'txtBIDANG' =>'JOB_ASPECS',
            'txaDSCRIP' =>'JOB_DSCRIP',
            'txaRQSKIL' =>'JOB_RQSKIL',
            'txaFSILTY' =>'JOB_FSILTY',
            'numSALMIN' =>'JOB_SALMIN',
            'numSALMAX' =>'JOB_SALMAX',
            'txtEMILCT' =>'JOB_EMILCT',
            'numVACNCY' =>'JOB_VACNCY',
            'cmbDRTION' =>'JOB_DRTION',
            'cmbSTATUS' =>'JOB_STATUS',
            'datEXPDAT' =>'JOB_EXPDAT',
            'txtCLIENT_DESC' =>'CLIENT'
            ,'hidCOMPID' => 'JOB_COMPNY'
        );
        
        if($type!="add"){
            $column = $this->m_job->getJob_edit($param,1);
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

        $PerusahaanTag = array(
            'limit'=>1,
            'data'=>$txtCOMPNY.'~'.$txtCLIENT_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/job/job/tagPerusahaan/'.$level.'/'.$loginid.'";}'
        );

        $optActive = $this->crud->getCommon(3,6);
        $optJenis = array(''=>'--Pilih Jenis','1'=>'Kontrak','2'=>'Tetap');
        $optStatus = array('0'=>'--Pilih Status--','1'=>'Aktif','2'=>'Seleksi','3'=>'Batal','4'=>'Tutup','5'=>'Expired','5'=>'Selesai');
        $optEXPRNC = array('0'=>'--Pilih Pengalaman--','1'=>'1 Tahun','2'=>'2 Tahun','3'=>'3 Tahun','4'=>'4 Tahun','5'=>'5 Tahun','6'=>'Lebih Dari 5 Tahun');
        
        $onSuccess = 'jvSave()';

        $ruleTITLES = array(array('rule'=>'empty','message'=>'Judul Pekerjaan Belum Diisi!'));
        $ruleCOMPNY = array(array('rule'=>'empty','message'=>'Perusahaan Belum Diisi!'));
        $ruleDSCRIP = array(array('rule'=>'empty','message'=>'Deskripsi Pekerjaan Belum Diisi!'));
        $ruleRQSKIL = array(array('rule'=>'empty','message'=>'Kemampuan/Skill Belum Diisi!'));
        $ruleSALMIN = array(array('rule'=>'empty','message'=>'Penghasilan Minimum Belum Diisi!'));
        $ruleSALMAX = array(array('rule'=>'empty','message'=>'Penghasilan Maksimal Belum Diisi!'));
        $ruleLCTION = array(array('rule'=>'empty','message'=>'Lokasi Belum Diisi!'));
        $ruleEMILCT = array(array('rule'=>'empty','message'=>'Alamat Email PIC Belum Diisi!'));
        $ruleDRTION = array(array('rule'=>'empty','message'=>'Jenis Pekerjaan Belum Dipilih!'));
        $ruleSTATUS = array(array('rule'=>'empty','message'=>'Status Pekerjaan Belum Dipilih!'));
        $ruleVACNCY = array(array('rule'=>'empty','message'=>'Jumlah Lowongan Belum Dipilih!'));
        $ruleEXPDAT = array(array('rule'=>'empty','message'=>'Masa Berlaku Belum Diisi!', 'onSuccess'=>$onSuccess));

        // if($txtFOTOSS == ''){
        //     $txtFOTOSS = '';
        //     $txtFOTOSS_bc = '';
        // }else{
        //     $txtFOTOSS_bc = $txtFOTOSS;
        //     $txtFOTOSS = 'upload/Job/'.$param.'/'.$txtFOTOSS;
        // }

        $formname = 'formgw';
        $urutan=0;

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNOMJOB','label'=>'No.Posting',  'size'=>'150','value'=> isset($column) ? $txtNOMJOB : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtTITLES','label'=>'Judul Pekerjaan','size' => '400','value'=> isset($column) ? $txtTITLES : "", 'validator'=>$ruleTITLES);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtCOMPNY','label'=>'Perusahaan',  'size'=>'400','value'=> isset($column) ? $txtCOMPNY : "",'validator'=>$ruleCOMPNY,'tagsinput' => $PerusahaanTag);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidCOMPID','label'=>'ID Perusahaan', 'value'=> $hidCOMPID);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtLCTION','label'=>'Lokasi','size' => '150','value'=> isset($column) ? $txtLCTION : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtBIDANG','label'=>'Bidang Pekerjaan','size' => '400','value'=> isset($column) ? $txtBIDANG : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txa', 'namanya' =>'txaDSCRIP','label'=>'Deskripsi Pekerjaan','size' => '150','value'=> isset($column) ? $txaDSCRIP : "",'validator'=>$ruleDSCRIP,'colInput'=>'col-md-5');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txa', 'namanya' =>'txaRQSKIL','label'=>'Kemampuan/Skill',  'size'=>'100','value'=> isset($column) ? $txaRQSKIL : "",'validator'=>$ruleRQSKIL);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txa', 'namanya' =>'txaFSILTY','label'=>'Fasilitas',  'size'=>'100','value'=> isset($column) ? $txaFSILTY : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'num', 'namanya' =>'numVACNCY','label'=>'Jumlah Lowongan',  'size'=>'80','value'=> isset($column) ? $numVACNCY : "",'validator'=>$ruleVACNCY);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'num', 'namanya' =>'numSALMIN','label'=>'Gaji Minimum',  'size'=>'80','value'=> isset($column) ? $numSALMIN : "",'validator'=>$ruleSALMIN);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'num', 'namanya' =>'numSALMAX','label'=>'Gaji Maximum',  'size'=>'80','value'=> isset($column) ? $numSALMAX : "",'validator'=>$ruleSALMAX);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtEMILCT','label'=>'Email',  'size'=>'300','value'=> isset($column) ? $txtEMILCT : "",'validator'=>$ruleEMILCT);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbDRTION','label'=>'Jenis Pekerja',  'size'=>'100','value'=> isset($column) ? $cmbDRTION : "",'validator'=>$ruleDRTION,'option'=>$optJenis);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'dat', 'namanya' =>'datEXPDAT', 'label'=>'Masa Berlaku', 'size'=>'150','value'=>isset($column) ? $datEXPDAT : '','validator'=>$ruleEXPDAT);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbSTATUS','label'=>'Status Pekerjaan',  'size'=>'150','value'=> isset($column) ? $cmbSTATUS : "",'validator'=>$ruleSTATUS,'option'=>$optStatus);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/save/job/job";
    	$button = "";
    	// $arrForm =
	    //   array(
	    //     'type'=>$type,
	    //     'param'=>$param,
     //        'button'=>$button,
	    //     'arrTable'=>$arrTable,
	    //     'status'=> isset($status) ? $status : "",
     //        'width' => '100%',
     //        'height' =>'100%',
     //        'formcommand'=>$formcommand,
	    //     'modul' => $this->modul,
     //        'source'=>'app'
     //     );
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
            'tabheight' => '90%',
            'tabname'=> array(
                '1'=>'Input Pekerjaan'
            )
         );
        
        $arrButton = array(
        "save"=>array("Save", "jvSave()","success","save")
        );

		$script = "
        <script>
            $(document).ready(function(){
                $('#txtCOMPNY').bind('change',function(data){
                    var id = $('#txtCOMPNY').val();
                    $('#hidCOMPID').val(id);
                    if(id != ''){
                        $.post('/job/job/getDataCompany/' +id,function(data){
                            var datanya = data.split('~');
                            $('#txtCOMPNY').val(datanya[0]);
                            $('#txtLCTION').val(datanya[2]);
                            $('#txtBIDANG').val(datanya[3]);
                        });
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

    function getDataCompany($id){
        $getdata = $this->m_job->getDataCompany($id);
        echo $getdata->CLI_IDENTS.'~'.$getdata->CLI_NAMESS.'~'.$getdata->CITY.'~'.$getdata->ASPECS;
    }

    function tagPerusahaan($level,$loginid){
        $table = 'T_MAS_CLIENT';
        $idnya = 'CLI_IDENTS';

        $fields = array(
            'id'=>$idnya,
            'field'=>'CLI_NAMESS',
            'where'=>'CLI_NAMESS',
            'disabled'=>FALSE
        );
        $this->db->where('CLI_ACTIVE',1);
        if($level==2 || $level==3){
            $this->db->where('CLI_LOGNID',$loginid);
        }
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
        $JOB_IDENTS = $this->input->post('hidIDENTS');
        $JOB_TITLES = strtoupper($this->input->post('txtTITLES'));
        $JOB_COMPNY = $this->input->post('txtCOMPNY');
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
            'JOB_STATUS' => $JOB_STATUS,
            'JOB_VACNCY' => $JOB_VACNCY
        );

        if($this->input->post('hidTRNSKS')=='add'){
            $CODE = 'JOB';
            $TYPES = 'JOB';
            $YEAR = date('Y');
            $JOB_CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            
            $input = array_merge($input,array(
                'JOB_NOMJOB'=>$JOB_CODESS,
                'JOB_USRCRT'=>$this->userid,
                'JOB_DATCRT'=>$this->datesave
            ));
            
        }else{
            $input = array_merge($input,array(
                'JOB_USRUPD'=>$this->userid,
                'JOB_DATUPD'=>$this->datesave
            ));
        }
        
        $this->crud->useTable('T_TRN_JOBPOS');
        $this->crud->save($input, array('JOB_IDENTS'=> $JOB_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = ($this->input->post('hidTRNSKS') =='add') ? $this->crud->__insertID : $this->input->post('hidIDENTS');

        $redirect = '/job/job';

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

        $this->crud->useTable('T_TRN_JOBPOS');
        $this->crud->delete_builder(array('JOB_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}