<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {
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
		$this->title = "Pengguna";
    }
    
	public function index(){
		$arrbread = array(
			array('link'=>'/home/welcome','text'=>'Beranda'),
			array('link'=>'#','text'=> 'Pengguna'),
		);
		$bc = generateBreadcrumb($arrbread);
		$this->_render('pages/home', $this->listUsers(),'admin',$bc);
    }

    function listUsers(){
        $gridname = "jqxUsers";
		$url ='/master/nosj/getUsers_list';
		$urut=0;
		
		$col[] = array('lsturut'=>$urut++,'namanya' => 'USR_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'USR_NAMESS', 'label' => 'Nama','aw'=>'20%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'USR_LOGINS', 'label' => 'Username','aw'=>'20%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'USR_EMAILS', 'label' => 'Email','aw'=>'20%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'LEVELS', 'label' => 'Level','aw'=>'10%','adtype'=>'text');
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
			array('link'=>'/master/user','text'=> 'User'),
			array('link'=>'#','text'=> $keterangan),
		);			
		$bc = generateBreadcrumb($arrbread);
    	$this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $arrColumn = array(
            'txtLOGINS' =>'USR_LOGINS',
            'txtPASSWD' =>'USR_PASSWD',
            'txtNAMESS' =>'USR_NAMESS',
            'txtEMAILS' =>'USR_EMAILS',
            'cmbLEVELS' =>'USR_LEVELS',
            'cmbACTIVE' =>'USR_ACTIVE'
        );

        if($type!="add"){
            $column = $this->m_master->getUsers_edit($param,1);
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

        $optLevels = $this->crud->getCommon(3,4);
        $optActive = $this->crud->getCommon(3,6);
        $optSTATUS = $this->crud->getCommon(3,4);

        $onSuccess = 'jvSave()';

        // rule tab data user
        $ruleNAMESS = array(array('rule'=>'empty','message'=>'Nama tidak boleh kosong!'));
        $ruleEMAILS = array(array('rule'=>'empty','message'=>'Email tidak boleh kosong!'));

        $formname = 'formgw';
        $urutan=0;

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama',  'size'=>'300','value'=> isset($column) ? $txtNAMESS : "", 'validator'=>$txtNAMESS);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtEMAILS','label'=>'Email',  'size'=>'300','value'=> isset($column) ? $txtEMAILS : "",'validator'=>$ruleEMAILS);

        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtLOGINS','label'=>'Username',  'size'=>'200','value'=> isset($column) ? $txtLOGINS : "",'readonly'=>$readonly);

        if($type=="add"){
            $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'pwd', 'namanya' =>'txtPASSWD','label'=>'Password',  'size'=>'300','value'=> isset($column) ? $txtPASSWD : "");
            $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'pwd', 'namanya' =>'txtPASWD2','label'=>'Confirm Password',  'size'=>'300','value'=> isset($column) ? "" : "");
        }

        if($this->level == 99){
            $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbLEVELS','label'=>'Level',  'size'=>'100','value'=> isset($column) ? $cmbLEVELS : "",'option'=>$optLevels);
        }
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbACTIVE','label'=>'Status',  'size'=>'100','value'=> isset($column) ? $cmbACTIVE : "",'option'=>$optActive);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/save/master/user";
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
            'source'=>'app',
            'ftinggi' => '100%'
         );
        
        $arrButton = array(
            "save"=>array("Save", "jvSave()","success","save"),
            "cancel"=>array("Cancel", "jvSave()","danger","delete")
        );

		$script = "
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns' crossorigin='anonymous'></script>
        <script>
            $(document).ready(function(){
                $('#txtLOGINS').bind('change',function(e){
                    logins = $('#txtLOGINS').val();
                    // alert(logins);

                    $.post('/master/user/cekData/' +logins,function(data){
                        if(data == 1){
                            alert('Username sudah digunakan, silahkan gunakan username lain!');
                            $('#txtLOGINS').focus();
                            $('#txtLOGINS').val('');
                            return;
                        }else{

                        }
                    });
                });

                // ---------------------------------------  validasi password
                $('#txtPASWD2').bind('change',function(e){
                    var passwd1 = $('#txtPASSWD').val();
                    var passwd2 = $('#txtPASWD2').val();
                    if(passwd2 != passwd1){
                        alert('Password tidak sama, silahkan ulangi kembali!');
                        $('#txtPASWD2').focus();
                        $('#txtPASWD2').val('');
                        return;
                    }
                });
            });

            function jvSave(){
                logins = $('#txtLOGINS').val();
                namess = $('#txtNAMESS').val();
                passwd = $('#txtPASSWD').val();
                emails = $('#txtEMAILS').val();
                levels = $('#cmbLEVELS').val();
                active = $('#cmbACTIVE').val();

                if(logins == '' || logins == null){
                    alert('Username harus diisi!');
                    $('#txtLOGINS').focus();
                    return;
                }

                if(namess == '' || namess == null){
                    alert('Nama harus diisi!');
                    $('#txtNAMESS').focus();
                    return;
                }

                if(passwd == '' || passwd == null){
                    alert('Password harus diisi!');
                    $('#txtPASSWD').focus();
                    return;
                }

                if(emails == '' || emails == null){
                    alert('Email harus diisi!');
                    $('#txtEMAILS').focus();
                    return;
                }

                if(levels == '' || levels == null){
                    alert('Level harus dipilih!');
                    $('#cmbLEVELS').focus();
                    return;
                }

                if(active == '' || active == null){
                    alert('Status harus dipilih!');
                    $('#cmbACTIVE').focus();
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

    function cekData($logins){
        $data = $this->m_master->cekData('T_MAS_USERSS','USR_LOGINS',$logins);
        echo $data;
    }

    function save(){
        // $this->common->debug_post();
        $USR_IDENTS = $this->input->post('hidIDENTS');
        $USR_LOGINS = $this->input->post('txtLOGINS');
        $USR_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        $USR_PASSWD = $this->input->post('txtPASSWD');
        $USR_EMAILS = $this->input->post('txtEMAILS');
        if($this->level == 99){
            $USR_LEVELS = $this->input->post('cmbLEVELS');
        }else{
            $USR_LEVELS = 2;
        }
        $USR_ACTIVE = $this->input->post('cmbACTIVE');
        
        $input = array(
            'USR_LOGINS' => $USR_LOGINS,
            'USR_NAMESS' => $USR_NAMESS,
            'USR_PASSWD' => md5($USR_PASSWD),
            'USR_EMAILS' => $USR_EMAILS,
            'USR_LEVELS' => $USR_LEVELS,
            'USR_ACTIVE' => $USR_ACTIVE
        );

        if($this->input->post('hidTRNSKS')=='add'){
			$input = array_merge($input,array(
				'USR_USRCRT'=>$this->userid,
				'USR_DATCRT'=>$this->datesave
			));
			
		}else{
			$input = array_merge($input,array(
				'USR_USRUPD'=>$this->userid,
				'USR_DATUPD'=>$this->datesave
			));
		}

        $redirect = '/master/user';
        
        $this->crud->useTable('T_MAS_USERSS');
		$this->crud->save($input, array('USR_IDENTS'=> $USR_IDENTS));
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

        $this->crud->useTable('T_MAS_USERSS');
        $this->crud->delete_builder(array('USR_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}