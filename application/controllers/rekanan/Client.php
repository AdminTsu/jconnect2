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
        $this->load->model(array('m_client','m_jconnect'));
        $this->modul = $this->router->fetch_class();
        $this->adminpage = $this->config->item('adminpage');
        $this->userid = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->loginid = $this->session->userdata('USR_IDENTS');
        $this->datesave = date('Y-m-d H:i:s');
        $this->title = "Rekanan";
    }
    
    public function index(){
        $arrbread = array(
            array('link'=>'/home/welcome','text'=>'Beranda'),
            array('link'=>'#','text'=> 'Rekanan'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->listClient(),'admin',$bc);
    }

    function listClient(){
        $loginid = $this->loginid;
        $gridname = "jqxClient";
        $url ='/rekanan/nosj/getClient_list/'.$loginid.'';
        $urut=0;
        
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CLI_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CLI_NOMORS', 'label' => 'NIC','aw'=>'8%','adtype'=>'text','ga'=>'center');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CLI_NAMESS', 'label' => 'Nama Client','aw'=>'20%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'BIDANG', 'label' => 'Bidang','aw'=>'15%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CONTRY', 'label' => 'Negara','aw'=>'10%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'PROVNC', 'label' => 'Provinsi','aw'=>'10%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CITY', 'label' => 'Kota','aw'=>'10%','adtype'=>'text','ga'=>'left');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CLI_ADDRES', 'label' => 'Alamat','aw'=>'20%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'STATUS', 'label' => 'Status','aw'=>'7%','adtype'=>'text','ga'=>'center');

        $dbutton = array(
            "Cetak"=>array("Cetak","fa-print", "jvCetak(1)","primary")
        );
        
        $gridd = gGrid(array('url'=>$url , 
        'gridname'=>$gridname,
        'width'=>'100%',
        'height'=>'100%',
        'col'=>$col,
        'button'=> 'standar',
        'modul'=>'rekanan/'.$this->modul,
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
            array('link'=>'/rekanan/client','text'=> 'Rekanan'),
            array('link'=>'#','text'=> $keterangan),
        );          
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $arrColumn = array(
            'txtLOGINS' =>'CLI_LOGNID',
            'txtNOMORS' =>'CLI_NOMORS',
            'cmbASPECS' =>'CLI_ASPECS',
            'txtBDLAIN' =>'CLI_BDLAIN',
            'txtNAMESS' =>'CLI_NAMESS',
            'txtCONTRY' =>'CLI_CONTRY',
            'txtADDRES' =>'CLI_ADDRES',
            'txaDESCRE' =>'CLI_DESCRE',
            'txtCONTAC' =>'CLI_CONTAC',
            'txtPHONES' =>'CLI_PHONES',
            'txtFAXNUM' =>'CLI_FAXNUM',
            'txtMOBILE' =>'CLI_MOBILE',
            'txtLOGOSS' =>'CLI_LOGOSS',
            'txtWEBSIT' =>'CLI_WEBSIT',
            'txtCONTRY_DESC' =>'CONTRY',
            'txtPROVNC' =>'CLI_PROVNC',
            'txtPROVNC_DESC' =>'PROVNC',
            'txtCITYSS' =>'CLI_CITYSS',
            'txtCITYSS_DESC' =>'CITY',
            'cmbACTIVE' =>'CLI_ACTIVE',
            'txtLOGINS_DESC' =>'USR_LOGINS'
        );

        if($type!="add"){
            $column = $this->m_client->getClient_edit($param,1);
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
        $AccountTag = array(
            'limit'=>1,
            'data'=>$txtLOGINS.'~'.$txtLOGINS_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/rekanan/client/tagdata/login";}'
        );

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

        if($txtLOGOSS == ''){
            $txtLOGOSS = '';
            $txtLOGOSS_bc = '';
        }else{
            $txtLOGOSS_bc = $txtLOGOSS;
            $txtLOGOSS = 'upload/client/'.$param.'/'.$txtLOGOSS;
        }

        $optASPECS = $this->m_client->getComboBidang();
        $optActive = $this->crud->getCommon(3,6);

        $disabled_des = false;

        $formname = 'formgw';
        $urutan=0;

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNOMORS','label'=>'N.I.C (Nomor Induk Client)',  'size'=>'100','value'=> isset($column) ? $txtNOMORS : "",'readonly'=>true);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtLOGINS', 'label'=>'Login ID/Username', 'size'=>'300','value'=>isset($column) ? $txtLOGINS : "",'tagsinput' => $AccountTag,'readonly'=>$readonly);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNAMESS','label'=>'Nama Client',  'size'=>'300','value'=> isset($column) ? $txtNAMESS : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbASPECS', 'size'=>'300','label'=>'Bidang Pekerjaan','option'=>$optASPECS, 'value'=> isset($column) ? (isset($status) ? $cmbASPECS : $cmbASPECS) : ""); 

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtBDLAIN','label'=>'Bidang Lain',  'size'=>'300','value'=> isset($column) ? $txtBDLAIN : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtWEBSIT','label'=>'Website',  'size'=>'300','value'=> isset($column) ? $txtWEBSIT : "");

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtCONTRY', 'label'=>'Negara', 'size'=>'300','value'=>isset($column) ? $txtCONTRY : "",'tagsinput' => $CountryTag,'disabled'=>$disabled_des);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtPROVNC', 'label'=>'Provinsi', 'size'=>'300','value'=>isset($column) ? $txtPROVNC : "",'tagsinput' => $ProvinceTag,'disabled'=>$disabled_des);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'txt', 'namanya' =>'txtCITYSS', 'label'=>'Kota', 'size'=>'300','value'=>isset($column) ? $txtCITYSS : "",'tagsinput' => $CityTag,'disabled'=>$disabled_des);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txa', 'namanya' =>'txtADDRES','label'=>'Alamat', 'size'=>'500','value'=> isset($column) ? $txtADDRES : "",'colInput'=>'col-md-5');

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtPHONES', 'masked'=>'999-999999999','label'=>'No. Telp.','size' => '150','value'=> isset($column) ? $txtPHONES : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtFAXNUM', 'masked'=>'999-999999999','label'=>'No. Fax.','size' => '150','value'=> isset($column) ? $txtFAXNUM : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtCONTAC','label'=>'Nama Admin',  'size'=>'300','value'=> isset($column) ? $txtCONTAC : "",'placeHolder'=>'Bapak/Ibu');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtMOBILE', 'masked'=>'9999-9999-99999','label'=>'No. HP Admin','size' => '150','value'=> isset($column) ? $txtMOBILE : "");
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'cmb', 'namanya' =>'cmbACTIVE','label'=>'Status',  'size'=>'100','value'=> isset($column) ? $cmbACTIVE : "",'option'=>$optActive);

        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'fil', 'namanya' =>'txtLOGOSS', 'label'=>'Upload Logo', 'size'=>'150','value'=>isset($column) ? $txtLOGOSS : '');
        
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtLOGOSS_bc','label'=>'Foto Descre', 'value'=> $txtLOGOSS_bc);
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCONTRY_bc', 'label'=>'Country BC', 'size'=>'200','value'=> isset($column) ? $txtCONTRY : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtPROVNC_bc', 'label'=>'Province BC', 'size'=>'200','value'=>isset($column) ? $txtPROVNC : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCITYSS_bc', 'label'=>'cITY BC', 'size'=>'200','value'=>isset($column) ? $txtCITYSS : '');
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);

        $formname = 'formgw';
        $formcommand = "/save/rekanan/client";
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
                $('#txtBDLAIN').attr('disabled',true);

                // $('#txtNAMESS').bind('change',function(e){
                //     logins = $('#txtLOGINS').val();
                //     // $('.token-input-token').remove();
                //     // $('.token-input-list').append(\"<li class='token-input-input-token'><input type='text' autocomplete='off' autocapitalize='off' id='token-input-txtLOGINS' style='outline:none;width:46px;'><tester style='posisition:absolute;top:-9999px;left:-9999;width:auto;font-size:12px;font-family:Verdana,san-serif;font-weight:400;letter-spacing:0px;white-space:nowarp;'></tester></li>\");
                //     $('.token-input-token').each(function(){
                //       if($(this).attr('value') != ''){
                //         $(this).remove();
                //         $('.token-input-input-token').remove();
                //         $('.token-input-list').append(\"<li class='token-input-input-token'><input type='text' autocomplete='on' autocapitalize='off' id='token-input-txtLOGINS' style='outline:none;width:46px;'><tester style='posisition:absolute;top:-9999px;left:-9999;width:auto;font-size:12px;font-family:Verdana,san-serif;font-weight:400;letter-spacing:0px;white-space:nowarp;'></tester></li>\");
                //       }
                //     });
                // });

                $('#cmbASPECS').bind('change',function(){
                    aspecs = $('#cmbASPECS').val();
                    if(aspecs == 99){
                        $('#txtBDLAIN').attr('disabled',false);
                    }else{
                        $('#txtBDLAIN').attr('disabled',true);
                    }
                });

            });

            function jvSave(){
                nomors = $('#txtNOMORS').val();
                namess = $('#txtNAMESS').val();
                aspecs = $('#cmbASPECS').val();
                bdlain = $('#txtBDLAIN').val();
                websit = $('#txtWEBSIT').val();
                contry = $('#txtCONTRY').val();
                provnc = $('#txtPROVNC').val();
                cityss = $('#txtCITYSS').val();
                addres = $('#txtADDRES').val();
                contac = $('#txtCONTAC').val();
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

                if(contac == '' || contac == null){
                    alert('Nama Admin harus diisi!');
                    $('#txtCONTAC').focus();
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

    function tagdata($jenis,$id=null,$id2=null){
        $level = $this->session->userdata('USR_LEVELS');
        switch ($jenis) {
            case 'login' :
                $table = 'T_MAS_USERSS';
                $idnya = 'USR_IDENTS';

                $fields = array(
                    'id'=>$idnya,
                    'field'=>'USR_LOGINS',
                    'where'=>'USR_LOGINS',
                    'disabled'=>FALSE
                );
                $this->db->where('USR_ACTIVE',1);
                if($level == 99){
                    $this->db->where('USR_LEVELS',3);
                    $this->db->where('USR_MENUID',3);
                    $this->db->where('USR_TYPESS',3);
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
                break;
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
            case 'city':
                $table = 'T_MAS_CITYSS';
                $idnya = 'CTY_IDENTS';
                $contry = 'CTY_CONTRY';
                $provnc = 'CTY_PROVNC';
                $fields = array(
                    'id'=>$idnya,
                    'field'=>'CTY_NAMESS',
                    'where'=>'CTY_NAMESS',
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
        $CLI_LOGNID = $this->input->post('txtLOGINS');
        $CLI_NOMORS = $this->input->post('txtNOMORS');
        $CLI_NAMESS = strtoupper($this->input->post('txtNAMESS'));
        $CLI_ASPECS = $this->input->post('cmbASPECS');
        $CLI_BDLAIN = $this->input->post('txtBDLAIN');
        $CLI_WEBSIT = $this->input->post('txtWEBSIT');
        $CLI_CONTRY = $this->input->post('txtCONTRY');
        $CLI_PROVNC = $this->input->post('txtPROVNC');
        $CLI_CITYSS = $this->input->post('txtCITYSS');
        $CLI_ADDRES = $this->input->post('txtADDRES');
        $CLI_CONTAC = strtoupper($this->input->post('txtCONTAC'));
        $CLI_PHONES = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtPHONES'))));
        $CLI_FAXNUM = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtFAXNUM'))));
        $CLI_MOBILE = str_replace("_","",str_replace("-","",str_replace(".","",$this->input->post('txtMOBILE'))));
        $CLI_ACTIVE = $this->input->post('cmbACTIVE');
        
        $input = array(
            'CLI_LOGNID' => $CLI_LOGNID,
            'CLI_NOMORS' => $CLI_NOMORS,
            'CLI_NAMESS' => $CLI_NAMESS,
            'CLI_ASPECS' => $CLI_ASPECS,
            'CLI_BDLAIN' => $CLI_BDLAIN,
            'CLI_WEBSIT' => $CLI_WEBSIT,
            'CLI_CONTRY' => $CLI_CONTRY,
            'CLI_PROVNC' => $CLI_PROVNC,
            'CLI_CITYSS' => $CLI_CITYSS,
            'CLI_ADDRES' => $CLI_ADDRES,
            'CLI_CONTAC' => $CLI_CONTAC,
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
        
        //awal aplod file
        $path = PATH_CLIENT_PHOTO.$IDENTS.'/';
        if( is_dir($path) === false )
        {
            mkdir($path);  
        }
        
        // upload logo perusahaan
        if($_FILES['txtLOGOSS']['name']){
            $cekFile           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','CLI_LOGOSS',1);
            if($cekFile->HASIL != 0){
                $getdata           = $this->m_jconnect->getFileUpload($IDENTS,'T_MAS_CLIENT','CLI_IDENTS','CLI_LOGOSS',2);
                $pathfull_old      = $path.$getdata->filenya;
                
                if (file_exists($pathfull_old)){
                    unlink($pathfull_old);
                }
            }

            $img_info          = pathinfo($_FILES['txtLOGOSS']['name']);
            $fileName          = strtolower(str_replace(' ', '-', $img_info['filename']));
            $fileExt           = $img_info['extension'];
            $file_image_name   = $fileName.'.'.$fileExt;
            $pathfull          = $path.$file_image_name;
            
            move_uploaded_file($_FILES['txtLOGOSS']['tmp_name'], $path.$file_image_name);
            // echo $file_image_name;
            $input = array_merge($input,array('CLI_LOGOSS'=>$file_image_name));
            $this->crud->useTable('T_MAS_CLIENT');
            $this->crud->save($input, array('CLI_IDENTS'=> $IDENTS));
            $this->crud->unsetMe();
        }

        $redirect = '/rekanan/client';

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

        $this->crud->useTable('T_MAS_CLIENT');
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