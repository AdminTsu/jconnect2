<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Province extends MY_Controller {
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
		$this->userid = $this->session->userdata('PRV_LOGINS');
		$this->datesave = date('Y-m-d H:i:s');
		$this->title = "Master Provinsi";
    }
    
	public function index(){
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'#','text'=> 'Provinsi'),
		);
		$bc = generateBreadcrumb($arrbread);
		$this->_render('pages/home', $this->listProvince(),'admin',$bc);
    }

    function listProvince(){
        $gridname = "jqxProvince";
		$url ='/master/nosj/getProvince_list';
		$urut=0;
		
		$col[] = array('lsturut'=>$urut++,'namanya' => 'PRV_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CONTRY', 'label' => 'Negara','aw'=>'30%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PRV_INTIAL', 'label' => 'Inisial','aw'=>'10%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PRV_NAMESS', 'label' => 'Nama Provinsi','aw'=>'30%','adtype'=>'text','ga'=>'left');

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
                        <div class='col-md-8 col-sm-8 col-xs-8' style='width:70%;height:300px;valign:left;'>	
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
			array('link'=>'/master/province','text'=> 'Province'),
			array('link'=>'#','text'=> $keterangan),
		);			
		$bc = generateBreadcrumb($arrbread);
    	$this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $arrColumn = array(
            'txtINTIAL' =>'PRV_INTIAL',
            'txtNAMESS' =>'PRV_NAMESS',
            'cmbCONTRY' =>'PRV_CONTRY'
        );

        if($type!="add"){
            $column = $this->m_master->getProvince_edit($param,1);
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

        $optCountry = $this->crud->getCommon(3,7);
        
        $formname = 'formgw';
        $urutan=0;
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbCONTRY','label'=>'Negara',  'size'=>'100','value'=> isset($column) ? $cmbCONTRY : "",'option'=>$optCountry);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama Provinsi',  'size'=>'200','value'=> isset($column) ? $txtNAMESS : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtINTIAL','label'=>'Initial',  'size'=>'100','value'=> isset($column) ? $txtINTIAL : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/save/master/province";
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
        
        $arrButton = array("save"=>array("Save", "jvSave()","success","save"));

		$script = "
        <script>
            $(document).ready(function(){

                // -------------------------------------------  cek double nama provinsi
                $('#txtNAMESS').bind('change',function(e){
                    var contry = $('#cmbCONTRY').val();
                    var provnc = $('#txtNAMESS').val();
                    var prm    = {};
                    prm['contry'] = contry;
                    prm['provnc'] = provnc;

                    $.post('/master/province/cekProvinceName/',prm,function(data){
                        if(data == 1){
                            alert('Provinsi sudah ada di negara tersebut, silahkan cek kambali!');
                            $('#txtNAMESS').val('');
                            $('#txtINTIAL').val('');
                            $('#txtNAMESS').focus();
                            return;
                        }
                    });
                });

            });

            function jvSave(){
                contry = $('#cmbCONTRY').val();
                intial = $('#txtINTIAL').val();
                namess = $('#txtNAMESS').val();

                if(contry == '' || contry == null){
                    alert('Country harus diisi!');
                    $('#cmbCONTRY').focus();
                    return;
                }

                if(intial == '' || intial == null){
                    alert('Initial harus diisi!');
                    $('#txtINTIAL').focus();
                    return;
                }

                if(namess == '' || namess == null){
                    alert('Province Name harus diisi!');
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

    function cekProvinceName(){
        $contry = $this->input->post('contry');
        $provnc = $this->input->post('provnc');
        $data = $this->m_master->cekProvince('T_MAS_PROVNC',$contry,$provnc);
        echo $data;
    }

    function save(){
        // $this->common->debug_post();
        $PRV_IDENTS = $this->input->post('hidIDENTS');
        $PRV_CONTRY = $this->input->post('cmbCONTRY');
        $PRV_INTIAL = strtoupper($this->input->post('txtINTIAL'));
        $PRV_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        
        $input = array(
            'PRV_CONTRY' => $PRV_CONTRY,
            'PRV_INTIAL' => $PRV_INTIAL,
            'PRV_NAMESS' => $PRV_NAMESS
        );

        if($this->input->post('hidTRNSKS')=='add'){
			$input = array_merge($input,array(
				'PRV_USRCRT'=>$this->userid,
				'PRV_DATCRT'=>$this->datesave
			));
			
		}else{
			$input = array_merge($input,array(
				'PRV_USRUPD'=>$this->userid,
				'PRV_DATUPD'=>$this->datesave
			));
		}

        $redirect = '/master/province';
        
        $this->crud->useTable('T_MAS_PROVNC');
        if($this->input->post('hidTRNSKS')=='add'){
		  $this->crud->save($input);
        }else{
          $this->crud->save($input, array('PRV_IDENTS'=> $PRV_IDENTS));
        }
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

        $this->crud->useTable('T_MAS_PROVNC');
        $this->crud->delete_builder(array('PRV_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}