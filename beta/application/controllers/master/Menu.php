<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MY_Controller {
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
		$this->title = "Menu";
    }
    
	public function index(){
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'#','text'=> 'Menu'),
		);
		$bc = generateBreadcrumb($arrbread);
		$this->_render('pages/home', $this->listMenu(),'admin',$bc);
    }

    function listMenu(){
        $level = $this->level;
        $gridname = "jqxMenu";
		$url ='/master/nosj/getMenus_list';
		$urut=0;
		
		$col[] = array('lsturut'=>$urut++,'namanya' => 'MNU_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'MNU_NOMORS', 'label' => 'Nomor Menu','aw'=>'10%','adtype'=>'text','ga'=>'center');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'MNU_DESCRE', 'label' => 'Nama Menu','aw'=>'30%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'HVCHLD', 'label' => 'Head','aw'=>'5%','adtype'=>'text','ga'=>'right');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CHILDS', 'label' => 'Child','aw'=>'5%','adtype'=>'text','ga'=>'right');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'MNU_ROUTES', 'label' => 'Route','aw'=>'30%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'MNU_ICONED', 'label' => 'Icon','aw'=>'10%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'REFERENSI', 'label' => 'Referansi','aw'=>'10%','adtype'=>'text','ga'=>'center');

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
                        <div class='col-md-10 col-sm-10 col-xs-10' style='width:80%;height:500px;valign:left;'>
        ";
        if($level == 99){
            $content .=  $gridd;
        }else{
            $content .= "<b>Maaf, Menu Ini Hanya Khusus untuk Administrator!!</b>";
        }
        $content .= "
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
			array('link'=>'/master/user','text'=> 'Menu'),
			array('link'=>'#','text'=> $keterangan),
		);			
		$bc = generateBreadcrumb($arrbread);
    	$this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $arrColumn = array(
            'txtNOMORS' =>'MNU_NOMORS',
            'txtDESCRE' =>'MNU_DESCRE',
            'cmbHVCHLD' =>'MNU_HVCHLD',
            'cmbCHILDS' =>'MNU_CHILDS',
            'txtROUTES' =>'MNU_ROUTES',
            'txtICONED' =>'MNU_ICONED',
            'cmbREFERS' =>'MNU_REFERS'
        );

        if($type!="add"){
            $column = $this->m_master->getMenu_edit($param,1);
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

        $optMenuHD = $this->m_master->getComboMenu();
        $optYesNo = array(0=>'NO',1=>'YES');

        $formname = 'formgw';
        $urutan=0;
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNOMORS','label'=>'Menu Number',  'size'=>'200','value'=> isset($column) ? $txtNOMORS : "",'readonly'=>$readonly);   
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbREFERS', 'size'=>'150', 'label'=>'Referensi','option'=>$optMenuHD,  'value'=> isset($column) ? (isset($status) ? $txtREFERS_DESC : $cmbREFERS) : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtDESCRE','label'=>'Menu Name',  'size'=>'300','value'=> isset($column) ? $txtDESCRE : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbHVCHLD','label'=>'Head',  'size'=>'100','value'=> isset($column) ? $cmbHVCHLD : "",'option'=>$optYesNo);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbCHILDS','label'=>'Child',  'size'=>'100','value'=> isset($column) ? $cmbCHILDS : "",'option'=>$optYesNo);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtROUTES','label'=>'Routes',  'size'=>'300','value'=> isset($column) ? $txtROUTES : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtICONED','label'=>'Icon',  'size'=>'300','value'=> isset($column) ? $txtICONED : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/save/master/menu";
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
            });

            function jvSave(){
                nomors = $('#txtNOMORS').val();
                descre = $('#txtDESCRE').val();
                hvchld = $('#cmbHVCHLD').val();
                childs = $('#cmbCHILDS').val();
                routes = $('#txtROUTES').val();
                iconed = $('#txtICONED').val();
                refers = $('#txtREFERS').val();

                if(nomors == '' || nomors == null){
                    alert('Nomor Menu harus diisi!');
                    $('#txtNOMORS').focus();
                    return;
                }

                if(descre == '' || descre == null){
                    alert('Nama Menu harus diisi!');
                    $('#txtDESCRE').focus();
                    return;
                }

                if(hvchld == '' || hvchld == null){
                    alert('Head harus dipilih!');
                    $('#cmbHVCHLD').focus();
                    return;
                }

                if(childs == '' || childs == null){
                    alert('Child harus dipilih!');
                    $('#cmbCHILDS').focus();
                    return;
                }

                if(routes == '' || routes == null){
                    alert('Routes harus diisi!');
                    $('#txtROUTES').focus();
                    return;
                }

                if(refers == '' || refers == null){
                    alert('Referensi harus diisi!');
                    $('#txtREFERS').focus();
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

    function save(){
        // $this->common->debug_post();
        $MNU_IDENTS = $this->input->post('hidIDENTS');
        $MNU_NOMORS = $this->input->post('txtNOMORS');
        $MNU_DESCRE = $this->input->post('txtDESCRE');
        $MNU_HVCHLD = $this->input->post('cmbHVCHLD');
        $MNU_CHILDS = $this->input->post('cmbCHILDS');
        $MNU_ROUTES = $this->input->post('txtROUTES');
        $MNU_ICONED = $this->input->post('txtICONED');
        $MNU_REFERS = $this->input->post('txtREFERS');
        
        $input = array(
            'MNU_NOMORS' => $MNU_NOMORS,
            'MNU_DESCRE' => $MNU_DESCRE,
            'MNU_HVCHLD' => $MNU_HVCHLD,
            'MNU_CHILDS' => $MNU_CHILDS,
            'MNU_ROUTES' => $MNU_ROUTES,
            'MNU_ICONED' => $MNU_ICONED,
            'MNU_REFERS' => $MNU_REFERS
        );

        if($this->input->post('hidTRNSKS')=='add'){
			$input = array_merge($input,array(
				'MNU_USRCRT'=>$this->userid,
				'MNU_DATCRT'=>$this->datesave
			));
			
		}else{
			$input = array_merge($input,array(
				'MNU_USRUPD'=>$this->userid,
				'MNU_DATUPD'=>$this->datesave
			));
		}

        $redirect = '/master/menu';
        
        $this->crud->useTable('T_MAS_MENUSS');
		$this->crud->save($input, array('MNU_IDENTS'=> $MNU_IDENTS));
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

        $this->crud->useTable('T_MAS_MENUSS');
        $this->crud->delete_builder(array('MNU_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}