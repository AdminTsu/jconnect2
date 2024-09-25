<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Otorisasi extends MY_Controller {
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
		$this->datesave = date('Y-m-d H:i:s');
		$this->title = "Otorisasi";
    }
    
	public function index(){
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'#','text'=> 'Otorisassi'),
		);
		$bc = generateBreadcrumb($arrbread);
		$this->_render('pages/home', $this->listOtorisassi(),'admin',$bc);
    }

    function listOtorisassi(){
        $gridname = "jqxOtorisasi";
		$url ='/master/nosj/getOtorisasi_list';
		$urut=0;
		
		$col[] = array('lsturut'=>$urut++,'namanya' => 'PRV_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'USR_LOGINS', 'label' => 'Username','aw'=>'20%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'MNU_DESCRE', 'label' => 'Nama Menu','aw'=>'30%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'HVCHLD', 'label' => 'Head Menu','aw'=>'10%','adtype'=>'text','ga'=>'center');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CHILDS', 'label' => 'Sub Menu','aw'=>'10%','adtype'=>'text','ga'=>'center');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PRV_RIGHTS', 'label' => 'Otorisasi','aw'=>'25%','adtype'=>'text');

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
			array('link'=>'/master/Otorisasi','text'=> 'Otorisasi'),
			array('link'=>'#','text'=> $keterangan),
		);			
		$bc = generateBreadcrumb($arrbread);
    	$this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $arrColumn = array(
            'txtPOSIDN' =>'PRV_POSIDN',
            'hidMNUNOM' =>'PRV_MNUNOM',
            'txtDESCRE' =>'MNU_DESCRE',
            'txtHVCHLD' =>'HVCHLD',
            'txtCHILDS' =>'CHILDS',
            'txtRIGHTS' =>'PRV_RIGHTS'
        );

        if($type!="add"){
            $column = $this->m_master->getOtorisasi_edit($param,1);
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

        $UserTag = array(
            'limit'=>1,
            'data'=>$txtPOSIDN.'~'.$txtPOSIDN,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/master/Otorisasi/usertag"}'
        );

        $MenuTag = array(
            'limit'=>1,
            'data'=>$hidMNUNOM.'~'.$txtDESCRE,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/master/Otorisasi/menutag"}'
        );

        $formname = 'formgw';
        $urutan=0;
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtPOSIDN','label'=>'Username',  'size'=>'200','value'=> isset($column) ? $txtPOSIDN : "",'readonly'=>$readonly,'tagsinput' => $UserTag);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtDESCRE','label'=>'Nama Menu',  'size'=>'300','value'=> isset($column) ? $txtDESCRE : "",'tagsinput' => $MenuTag);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidMNUNOM','label'=>'ID Menu', 'value'=> $hidMNUNOM);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtHVCHLD','label'=>'Head Menu',  'size'=>'50','value'=> isset($column) ? $txtHVCHLD : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtCHILDS','label'=>'Sub Menu',  'size'=>'50','value'=> isset($column) ? $txtCHILDS : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtRIGHTS','label'=>'Otorisasi',  'size'=>'80','value'=> isset($column) ? $txtRIGHTS : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/save/master/otorisasi";
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
                // $('#txtDESCRE').bind('change',function(data){
                //     var id = $('#txtDESCRE').val();
                //     $('#hidMNUNOM').val(id);
                //     if(id != ''){
                //         $.post('/master/otorisasi/getDataMenu/' +id,function(data){
                //             var datanya = data.split('~');
                //             $('#hidMNUNOM').val(datanya[0]);
                //             $('#txtDESCRE').val(datanya[1]);
                //         });
                //     }
                // });

                $('#txtDESCRE').bind('change',function(data){
                    var id = $('#txtDESCRE').val();
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
                posidn = $('#txtPOSIDN').val();
                mnunom = $('#hidMNUNOM').val();
                rights = $('#txtRIGHTS').val();

                if(posidn == '' || posidn == null){
                    alert('Level harus diisi!');
                    $('#txtPOSIDN').focus();
                    return;
                }

                if(mnunom == '' || mnunom == null){
                    alert('Menu harus diisi!');
                    $('#txtMNUNOM').focus();
                    return;
                }

                if(rights == '' || rights == null){
                    alert('Otorisasi harus diisi!');
                    $('#txtRIGHTS').focus();
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

    function getDataMenu($id){
        $getdata = $this->m_master->getDataMenu($id);
        echo $getdata->MNU_NOMORS.'~'.$getdata->MNU_DESCRE.'~'.$getdata->HVCHLD.'~'.$getdata->CHILDS;
    }

    function usertag($id=null,$strorg=null){
        $table = 'T_MAS_USERSS';
        $idnya = 'USR_LOGINS';
        $fields = array(
            'id'=>$idnya,
            'field'=>'USR_LOGINS',
            'where'=>'USR_LOGINS',
            'disabled'=>FALSE
        );
        $this->db->where("USR_ACTIVE",1);
        $filter = "";
        $json = autotag(
            array(
                'table'=>$table,
                'protected'=>false,
                'field'=>$fields,
                'filter'=>$filter
                )
            ); 
    }

    function menutag($id=null,$strorg=null){
        $table = 'T_MAS_MENUSS';
        $idnya = 'MNU_NOMORS';
        $fields = array(
            'id'=>$idnya,
            'field'=>'MNU_DESCRE',
            'where'=>'MNU_DESCRE',
            'disabled'=>FALSE
        );
        // $this->db->where("EMP_ACTIVE",'Y');
        $filter = "";
        $json = autotag(
            array(
                'table'=>$table,
                'protected'=>false,
                'field'=>$fields,
                'filter'=>$filter
                )
            ); 
    }

    function save(){
        // $this->common->debug_post();
        $PRV_IDENTS = $this->input->post('hidIDENTS');
        $PRV_POSIDN = $this->input->post('txtPOSIDN');
        $PRV_MNUNOM = $this->input->post('hidMNUNOM');
        $PRV_RIGHTS = $this->input->post('txtRIGHTS');
        
        $input = array(
            'PRV_POSIDN' => $PRV_POSIDN,
            'PRV_MNUNOM' => $PRV_MNUNOM,
            'PRV_RIGHTS' => $PRV_RIGHTS
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

        $redirect = '/master/otorisasi';
        
        $this->crud->useTable('T_MAS_PRIACC');
		$this->crud->save($input, array('PRV_IDENTS'=> $PRV_IDENTS));
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

        $this->crud->useTable('T_MAS_PRIACC');
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