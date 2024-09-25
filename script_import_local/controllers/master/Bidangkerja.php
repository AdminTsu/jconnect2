<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bidangkerja extends MY_Controller {
	var $tables;
	var $modul;
	var $identcolumn;
	var $username;
	var $datesave;
	var $adminpage;

	function __construct(){
		parent::__construct();
		$this->load->helper(array('ginput','jqxgrid','file'));
		$this->load->model('m_master');
		$this->modul = $this->router->fetch_class();
		$this->adminpage = $this->config->item('adminpage');
        $this->userid = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
		$this->datesave = date('Y-m-d H:i:s');
		$this->title = "Bidang Pekerjaan";
    }
    
	public function index(){
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'#','text'=> 'Bidang Pekerjaan'),
		);
		$bc = generateBreadcrumb($arrbread);
		$this->_render('pages/home', $this->listBidangkerja(),'admin',$bc);
    }

    function listBidangkerja(){
        $gridname = "jqxBidangkerja";
		$url ='/master/nosj/getBidangkerja_list';
		$urut=0;
		
		$col[] = array('lsturut'=>$urut++,'namanya' => 'SPS_IDENTS', 'label' => 'Id Bidang','aw'=>'15%','ga'=>'center');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'SPS_NAMESS', 'label' => 'Nama Bidang','aw'=>'45%','adtype'=>'text');

        $dbutton = array(
            "Cetak"=>array("Cetak","fa-print", "jvCetak(1)","primary")
        );
		
        $gridd = gGrid(array('url'=>$url , 
        'gridname'=>$gridname,
        'width'=>'100%',
        'height'=>'100%',
        'col'=>$col,
        'button'=> 'standar',
        'modul'=>'master/'.$this->modul,
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
                        <div class='col-md-8 col-sm-8 col-xs-8' style='width:50%;height:300px;valign:left;'>	
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
			array('link'=>'/master/bidangkerja','text'=> 'Bidang Pekerjaan'),
			array('link'=>'#','text'=> $keterangan),
		);			
		$bc = generateBreadcrumb($arrbread);
    	$this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $arrColumn = array('txtNAMESS' =>'SPS_NAMESS');

        if($type!="add"){
            $column = $this->m_master->getBidangkerja_edit($param,1);	
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

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'hidIDENTS','label'=>'Id Bidang ',  'size'=>'50', 'value'=> $param,'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama',  'size'=>'400','value'=> isset($column) ? $txtNAMESS : "");

        $formname = 'formgw';
        $formcommand = "/save/master/bidangkerja";
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
            'source'=>'app'
            
         );
         
        
        $arrButton = array(
        "save"=>array("Save", "jvSave()","success","save")
        );

		$script = "
        <script>
            $(document).ready(function(){

                // ---------------------------------------  cek nama bidang
                $('#txtNAMESS').bind('change',function(e){
                    bidang = $('#txtNAMESS').val();
                    // alert(logins);

                    $.post('/master/bidangkerja/cekData/'+bidang,function(data){
                        if(data == 1){
                            alert('Bidang pekerjaan sudah ada, silahkan cek kembali!');
                            $('#txtNAMESS').focus();
                            $('#txtNAMESS').val('');
                            return;
                        }else{

                        }
                    });
                });

            });

            function jvSave(){
                namess = $('#txtNAMESS').val();

                if(namess == '' || namess == null){
                    alert('Nama Bidang harus diisi!');
                    $('#txtNAMESS').focus();
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

    function cekData($bidang){
        $data = $this->m_master->cekData('T_MAS_SPSLIZ','SPS_NAMESS',$bidang);
        echo $data;
    }

	function checkstatus(){
	    $idents = $this->input->post('idents');
		// echo "$idents";

		$result = $this->m_master->getBidangpekerjaan($idents);
		// print_r($result);
		foreach($result as $row){
			$status = $row['status'];
		}

		echo $status;
	}

    function save(){
        // $this->common->debug_post();
        $SPS_IDENTS = $this->input->post('hidIDENTS');
        $SPS_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        
        $input = array('SPS_NAMESS' => $SPS_NAMESS);

        if($this->input->post('hidTRNSKS')=='add'){
			$input = array_merge($input,array(
				'SPS_USRCRT'=>$this->userid,
				'SPS_DATCRT'=>$this->datesave
			));
			
		}else{
			$input = array_merge($input,array(
				'SPS_USRUPD'=>$this->userid,
				'SPS_DATUPD'=>$this->datesave
			));
		}

        $redirect = '/master/bidangkerja';
        
        $this->crud->useTable('T_MAS_SPSLIZ');
		$this->crud->save($input, array('SPS_IDENTS'=> $SPS_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = ($this->input->post('hidTRNSKS') =='add') ? $this->crud->__insertID : $this->input->post('hidIDENTS');
        
        
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

        $this->crud->useTable('T_MAS_SPSLIZ');
        $this->crud->delete_builder(array('SPS_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}