<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class City extends MY_Controller {
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
		$this->title = "Master Kota";
    }
    
	public function index(){
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'#','text'=> 'Kota'),
		);
		$bc = generateBreadcrumb($arrbread);
		$this->_render('pages/home', $this->listCity(),'admin',$bc);
    }

    function listCity(){
        $gridname = "jqxCity";
		$url ='/master/nosj/getCity_list';
		$urut=0;
		
		$col[] = array('lsturut'=>$urut++,'namanya' => 'CTY_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CONTRY', 'label' => 'Negara','aw'=>'25%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PROVNC', 'label' => 'Provinsi','aw'=>'25%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CTY_INTIAL', 'label' => 'Inisial','aw'=>'10%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CTY_NAMESS', 'label' => 'Nama Kota','aw'=>'30%','adtype'=>'text','ga'=>'left');

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
			array('link'=>'/master/city','text'=> 'Kota'),
			array('link'=>'#','text'=> $keterangan),
		);			
		$bc = generateBreadcrumb($arrbread);
    	$this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $arrColumn = array(
            'txtINTIAL' =>'CTY_INTIAL',
            'txtNAMESS' =>'CTY_NAMESS',
            'txtCONTRY' =>'CTY_CONTRY',
            'txtCONTRY_DESC' =>'CTY_CONTRY_DESC',
            'txtPROVNC' =>'CTY_PROVNC',
            'txtPROVNC_DESC' =>'CTY_PROVNC_DESC'
        );

        if($type!="add"){
            $column = $this->m_master->getCity_edit($param,1);
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
            'function'=>'function(){return "/master/city/tagdata/country";}'
        );
        $ProvinceTag = array(
            'limit'=>1,
            'data'=>$txtPROVNC.'~'.$txtPROVNC_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/master/city/tagdata/province/"+ $("#txtCONTRY").val();}'
        );


        $optCountry = $this->crud->getCommon(3,7);
        $optProvinc = $this->m_master->getComboProvince();
        $disabled_des = false;

        $formname = 'formgw';
        $urutan=0;

        // $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbCONTRY','label'=>'Country',  'size'=>'100','value'=> isset($column) ? $cmbCONTRY : "",'option'=>$optCountry);
        // $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbPROVNC','label'=>'Province',  'size'=>'100','value'=> isset($column) ? $cmbPROVNC : "",'option'=>$optProvinc);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtCONTRY', 'label'=>'Negara', 'size'=>'300','value'=>isset($column) ? $txtCONTRY : "",'tagsinput' => $CountryTag,'disabled'=>$disabled_des);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPROVNC', 'label'=>'Provinsi', 'size'=>'300','value'=>isset($column) ? $txtPROVNC : "",'tagsinput' => $ProvinceTag,'disabled'=>$disabled_des);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama Kota',  'size'=>'200','value'=> isset($column) ? $txtNAMESS : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtINTIAL','label'=>'Inisial',  'size'=>'100','value'=> isset($column) ? $txtINTIAL : "");

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCONTRY_bc', 'label'=>'Country BC', 'size'=>'200','value'=> isset($column) ? $txtCONTRY : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtPROVNC_bc', 'label'=>'Province BC', 'size'=>'200','value'=>isset($column) ? $txtPROVNC : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/save/master/city";
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

                // -------------------------------------------  cek double nama provinsi
                $('#txtNAMESS').bind('change',function(e){
                    var contry = $('#txtCONTRY').val();
                    var provnc = $('#txtPROVNC').val();
                    var cityss = $('#txtNAMESS').val();
                    var prm    = {};
                    prm['contry'] = contry;
                    prm['provnc'] = provnc;
                    prm['cityss'] = cityss;

                    $.post('/master/city/cekCityName/',prm,function(data){
                        if(data == 1){
                            alert('Kota sudah ada di negara dan provinsi tersebut, silahkan cek kambali!');
                            $('#txtNAMESS').val('');
                            $('#txtINTIAL').val('');
                            $('#txtNAMESS').focus();
                            return;
                        }
                    });
                });

            });

            function jvSave(){
                contry = $('#txtCONTRY').val();
                provnc = $('#txtPROVNC').val();
                intial = $('#txtINTIAL').val();
                namess = $('#txtNAMESS').val();

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

                if(namess == '' || namess == null){
                    alert('Kota harus diisi!');
                    $('#txtNAMESS').focus();
                    return;
                }

                if(intial == '' || intial == null){
                    alert('Initial harus diisi!');
                    $('#txtINTIAL').focus();
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

    function cekCityName(){
        $contry = $this->input->post('contry');
        $provnc = $this->input->post('provnc');
        $cityss = $this->input->post('cityss');
        $data = $this->m_master->cekCity('T_MAS_CITYSS',$contry,$provnc,$cityss);
        echo $data;
    }

    function tagdata($jenis,$id=null){
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
                $idnya = 'PRV_IDENTS';
                $contry = 'PRV_CONTRY';
                $fields = array(
                    'id'=>$idnya,
                    'field'=>'PRV_NAMESS',
                    'where'=>'PRV_NAMESS',
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
        }
        // $this->common->debug_sql();
    }

    function save(){
        // $this->common->debug_post();
        $CTY_IDENTS = $this->input->post('hidIDENTS');
        $CTY_CONTRY = $this->input->post('txtCONTRY');
        $CTY_PROVNC = $this->input->post('txtPROVNC');
        $CTY_INTIAL = strtoupper($this->input->post('txtINTIAL'));
        $CTY_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        
        $input = array(
            'CTY_CONTRY' => $CTY_CONTRY,
            'CTY_PROVNC' => $CTY_PROVNC,
            'CTY_INTIAL' => $CTY_INTIAL,
            'CTY_NAMESS' => $CTY_NAMESS
        );

        if($this->input->post('hidTRNSKS')=='add'){
			$input = array_merge($input,array(
				'CTY_USRCRT'=>$this->userid,
				'CTY_DATCRT'=>$this->datesave
			));
			
		}else{
			$input = array_merge($input,array(
				'CTY_USRUPD'=>$this->userid,
				'CTY_DATUPD'=>$this->datesave
			));
		}

        $redirect = '/master/city';
        
        $this->crud->useTable('T_MAS_CITYSS');
        if($this->input->post('hidTRNSKS')=='add'){
		  $this->crud->save($input);
        }else{
          $this->crud->save($input, array('CTY_IDENTS'=> $CTY_IDENTS));
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

        $this->crud->useTable('T_MAS_CITYSS');
        $this->crud->delete_builder(array('CTY_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}