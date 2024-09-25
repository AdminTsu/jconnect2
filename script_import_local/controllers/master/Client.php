<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends MY_Controller {
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
		$this->title = "Client";
    }
    
	public function index(){
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'#','text'=> 'Client'),
		);
		$bc = generateBreadcrumb($arrbread);
		$this->_render('pages/home', $this->listClient(),'admin',$bc);
    }

    function listClient(){
        $gridname = "jqxClient";
		$url ='/master/nosj/getClient_list';
		$urut=0;
		
		$col[] = array('lsturut'=>$urut++,'namanya' => 'CLI_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CLI_NOMORS', 'label' => 'NIC','aw'=>'10%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CLI_NAMESS', 'label' => 'Nama Client','aw'=>'25%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CLI_ASPECS', 'label' => 'Bidang','aw'=>'10%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CONTRY', 'label' => 'Negara','aw'=>'10%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PROVNC', 'label' => 'Provinsi','aw'=>'10%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CITY', 'label' => 'Kota','aw'=>'10%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CLI_ADDRES', 'label' => 'Alamat','aw'=>'25%','adtype'=>'text');

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
                        <div class='col-md-8 col-sm-8 col-xs-8' style='width:100%;height:300px;valign:left;'>	
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
			array('link'=>'/master/client','text'=> 'Client'),
			array('link'=>'#','text'=> $keterangan),
		);			
		$bc = generateBreadcrumb($arrbread);
    	$this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $arrColumn = array(
            'txtNOMORS' =>'CLI_NOMORS',
            'txtASPECS' =>'CLI_ASPECS',
            'txtNAMESS' =>'CLI_NAMESS',
            'txtCONTRY' =>'CLI_CONTRY',
            'txtADDRES' =>'CLI_ADDRES',
            'txaDESCRE' =>'CLI_DESCRE',
            'txtPHONES' =>'CLI_PHONES',
            'txtFAXNUM' =>'CLI_FAXNUM',
            'txtFAXNUM' =>'CLI_MOBILE',
            'txtCONTRY_DESC' =>'CLI_CONTRY_DESC',
            'txtPROVNC' =>'CLI_PROVNC',
            'txtPROVNC_DESC' =>'CLI_PROVNC_DESC',
            'txtCITYSS' =>'CLI_CITYSS',
            'txtCITYSS_DESC' =>'CLI_CITYSS_DESC'
        );

        if($type!="add"){
            $column = $this->m_master->getClient_edit($param,1);
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

        // ----------------- Combobox atau Autotag START
        $CountryTag = array(
            'limit'=>1,
            'data'=>$txtCONTRY.'~'.$txtCONTRY_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/master/client/tagdata/country";}'
        );

        $ProvinceTag = array(
            'limit'=>1,
            'data'=>$txtPROVNC.'~'.$txtPROVNC_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/master/client/tagdata/province/"+ $("#txtCONTRY").val()+"/"+$("#txtPROVNC").val();}'
        );

        $CityTag = array(
            'limit'=>1,
            'data'=>$txtCITYSS.'~'.$txtCITYSS_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/master/client/tagdata/province/"+ $("#txtCONTRY").val();}'
        );

        $optCountry = $this->crud->getCommon(3,7);
        $optProvinc = $this->m_master->getComboProvince();
        $disabled_des = false;

        $formname = 'formgw';
        $urutan=0;

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNOMORS','label'=>'N.I.C (Nomor Induk Client)',  'size'=>'100','value'=> isset($column) ? $txtNOMORS : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama Client',  'size'=>'200','value'=> isset($column) ? $txtNAMESS : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtASPECS','label'=>'Bidang Pekerjaan',  'size'=>'200','value'=> isset($column) ? $txtASPECS : "");

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtCONTRY', 'label'=>'Negara', 'size'=>'300','value'=>isset($column) ? $txtCONTRY : "",'tagsinput' => $CountryTag,'disabled'=>$disabled_des);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPROVNC', 'label'=>'Provinsi', 'size'=>'300','value'=>isset($column) ? $txtPROVNC : "",'tagsinput' => $ProvinceTag,'disabled'=>$disabled_des);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtCITYSS', 'label'=>'Kota', 'size'=>'300','value'=>isset($column) ? $txtCITYSS : "",'tagsinput' => $ProvinceTag,'disabled'=>$disabled_des);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txa', 'namanya' =>'txtADDRES','label'=>'Alamat',  'size'=>'200','value'=> isset($column) ? $txtADDRES : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtPHONES','label'=>'No. Telp',  'size'=>'200','value'=> isset($column) ? $txtPHONES : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtFAXNUM','label'=>'No. Fax',  'size'=>'200','value'=> isset($column) ? $txtFAXNUM : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtMOBILE','label'=>'No. Hp',  'size'=>'200','value'=> isset($column) ? $txtMOBILE : "");

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCONTRY_bc', 'label'=>'Country BC', 'size'=>'200','value'=> isset($column) ? $txtCONTRY : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtPROVNC_bc', 'label'=>'Province BC', 'size'=>'200','value'=>isset($column) ? $txtPROVNC : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCITYSS_bc', 'label'=>'cITY BC', 'size'=>'200','value'=>isset($column) ? $txtCITYSS : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/save/master/client";
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

                $('#cmbCONTRY').bind('change',function(data){
                    var id = $('#cmbCONTRY').val();
                    $('#hidMNUNOM').val(id);
                    if(id != ''){
                        $.post('/master/otorisasi/getDataMenu/' +id,function(data){
                            var datanya = data.split('~');
                            $('#hidMNUNOM').val(datanya[0]);
                            $('#txtDESCRE').val(datanya[1]);
                            $('#txtHVCHLD').val(datanya[2]);
                            $('#txtCHILDS').val(datanya[3]);
                        });
                    }
                });
            });

            function jvSave(){
                intial = $('#txtNOMORS').val();
                namess = $('#txtNAMESS').val();
                namess = $('#txtASPECS').val();
                contry = $('#txtCONTRY').val();
                provnc = $('#txtPROVNC').val();
                cityss = $('#txtCITYSS').val();
                addres = $('#txtADDRES').val();
                phones = $('#txtPHONES').val();
                faxnum = $('#txtFAXNUM').val();
                mobile = $('#txtMOBILE').val();

                if(contry == '' || contry == null){
                    alert('Country harus diisi!');
                    $('#cmbCONTRY').focus();
                    return;
                }

                if(provnc == '' || provnc == null){
                    alert('Province harus diisi!');
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

    function tagdata($jenis,$id=null,$id2=null){
        switch ($jenis) {
            case 'country':
                $table = 'T_MAS_COMMON';
                $idnya = 'COM_TYPECD';

                $fields = array(
                    'id'=>$idnya,
                    'field'=>'COM_DESCRE',
                    'where'=>'COM_DESCRE',
                    'disabled'=>FALSE
                );
                $this->db->where('COM_HEADCD',7);
                $filter = "";                

                $json = autotag(
                    array(
                        'table'=>$table,
                        'protected'=>false,
                        'field'=>$fields,
                        'filter'=>$filter
                        )
                    );  
                break;
            case 'province':
                $table = 'T_MAS_PROVNC';
                $idnya = 'PVN_IDENTS';
                $contry = 'PVN_CONTRY';
                $fields = array(
                    'id'=>$idnya,
                    'field'=>'PVN_NAMESS',
                    'where'=>'PVN_NAMESS',
                    'disabled'=>FALSE
                );
                $this->db->where($contry,$id);
                $filter = "";
                $json = autotag(
                    array(
                        'table'=>$table,
                        'protected'=>false,
                        'field'=>$fields,
                        'filter'=>$filter
                        )
                    );  
                break;
            case 'city':
                $table = 'T_MAS_CITYSS';
                $idnya = 'CTY_IDENTS';
                $contry = 'CTY_CONTRY';
                $provnc = 'CTY_PROVNC';
                $fields = array(
                    'id'=>$idnya,
                    'field'=>'PVN_NAMESS',
                    'where'=>'PVN_NAMESS',
                    'disabled'=>FALSE
                );
                $this->db->where($contry,$id);
                $this->db->where($provnc,$id2);
                $filter = "";
                $json = autotag(
                    array(
                        'table'=>$table,
                        'protected'=>false,
                        'field'=>$fields,
                        'filter'=>$filter
                        )
                    );  
                break;
        }
        // $this->common->debug_sql();
    }

    function save(){
        // $this->common->debug_post();
        $CLI_IDENTS = $this->input->post('hidIDENTS');
        $CLI_CONTRY = $this->input->post('txtCONTRY');
        $CLI_PROVNC = $this->input->post('txtPROVNC');
        $CLI_INTIAL = strtoupper($this->input->post('txtINTIAL'));
        $CLI_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        
        $input = array(
            'CLI_CONTRY' => $CLI_CONTRY,
            'CLI_PROVNC' => $CLI_PROVNC,
            'CLI_INTIAL' => $CLI_INTIAL,
            'CLI_NAMESS' => $CLI_NAMESS
        );

        if($this->input->post('hidTRNSKS')=='add'){
			$input = array_merge($input,array(
				'CLI_USRCRT'=>$this->userid,
				'CLI_DATCRT'=>$this->datesave
			));
			
		}else{
			$input = array_merge($input,array(
				'CLI_USRUPD'=>$this->userid,
				'CLI_DATUPD'=>$this->datesave
			));
		}

        $redirect = '/master/client';
        
        $this->crud->useTable('T_MAS_CITYSS');
		$this->crud->save($input, array('CLI_IDENTS'=> $CLI_IDENTS));
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

        $this->crud->useTable('T_MAS_CITYSS');
        $this->crud->delete_builder(array('CLI_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}