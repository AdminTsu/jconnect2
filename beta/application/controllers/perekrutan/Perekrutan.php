<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perekrutan extends MY_Controller {
    var $nourut;
    var $tables;
    var $label;
    var $kind; 
    var $modul;
    var $identcolumn;
    var $username;
    var $datesave;
    var $adminpage;

    function __construct(){
        parent::__construct();
        $this->load->helper(array('ginput','jqxgrid','file'));
        $this->load->model('m_perekrutan');
        $this->modul = $this->router->fetch_class();
        $this->adminpage = $this->config->item('adminpage');
        $this->userid = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->loginid = $this->session->userdata('USR_IDENTS');
        $this->datesave = date('Y-m-d H:i:s');
        $this->title = "Perekrutan";
    }
    
    public function index(){
        $arrbread = array(
            array('link'=>'/home/welcome','text'=>'Beranda'),
            array('link'=>'#','text'=> 'Perekrutan'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->listRekrut(),'admin',$bc);
    }

    function listRekrut(){
        $level = $this->level;
        $loginid= $this->loginid;
        $gridname = "jqxRekrut";
        $gridname2 = "jqxDetail";
        $url ='/perekrutan/nosj/getRekrut_list/'.$loginid.'';
        $urut=0;
        
        $col[] = array('lsturut'=>$urut++,'namanya' => 'REC_IDENTS', 'label' => 'ident','aw'=>'4%','ga'=>'right','ah'=>true);
        $col[] = array('lsturut'=>$urut++,'namanya' => 'REC_NOMORS', 'label' => 'No. Rekrut','aw'=>'8%','adtype'=>'text','ga'=>'center');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_TITLES', 'label' => 'Pekerjaan','aw'=>'16%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_NOMJOB', 'label' => 'No. Job Posting','aw'=>'8%','adtype'=>'text','ga'=>'center');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'CLIENT', 'label' => 'Perusahaan','aw'=>'16%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_LCTION', 'label' => 'Lokasi','aw'=>'15%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'JOB_ASPECS', 'label' => 'Bidang','aw'=>'23%','adtype'=>'text');
        
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'REC_DSCRIP', 'label' => 'Keterangan','aw'=>'10%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'REC_RESPON', 'label' => 'Tanggung Jawab','aw'=>'30%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'REC_RQSKIL', 'label' => 'Kemampuan','aw'=>'10%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'REC_FSILTY', 'label' => 'Fasilitas','aw'=>'10%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'REC_SALMIN', 'label' => 'Gaji Minimal','aw'=>'10%','adtype'=>'text');
        // $col[] = array('lsturut'=>$urut++,'namanya' => 'REC_SALMAX', 'label' => 'Gaji Maksimal','aw'=>'10%','adtype'=>'text');
        
        $col[] = array('lsturut'=>$urut++,'namanya' => 'STATUS', 'label' => 'Status','aw'=>'7%','adtype'=>'text');
        $col[] = array('lsturut'=>$urut++,'namanya' => 'REC_TGLREC', 'label' => 'Berlaku Hingga','aw'=>'7%','adtype'=>'text','ga'=>'center');

        $fn_select = "
            $('#".$gridname2."').jqxGrid('clearselection');
            var nomor = event.args.row.REC_IDENTS;
            var tmpS = $('#".$gridname2."').jqxGrid('source');
            tmpS._source.url = '/perekrutan/nosj/getDetail_Rekrut/'+nomor;
            $('#".$gridname2."').jqxGrid('source',tmpS);
        ";
        
        $event = array(
            "rowselect" => $fn_select
        );

        $selrow = "
            var selectedrowindex = $('#".$gridname."').jqxGrid('getselectedrowindex');
            var id = $('#".$gridname."').jqxGrid('getrowid', selectedrowindex);
            // alert(id);
            if(id == null){
                alert('Pilih Data!');
                return;
            }
        ";

        $jvDelete = "
            function jvDelete(){
                " . $selrow . "
                var prm = {};
                prm['idents'] = id;
                prm['tipe'] = 1;
                // $.post('/perekrutan/perekrutan/checkstatus',prm,function(hasil){
                //  if(hasil == 0){
                        if(confirm('Hapus Data?')){
                            $.post('/perekrutan/perekrutan/delete',prm,function(rebound){
                                if(rebound){
                                    alert(rebound);
                                    $('#".$gridname."').jqxGrid('updateBoundData');
                                    $('#".$gridname2."').jqxGrid('updateBoundData');
                                }
                            });
                        }
                //  }else{
                //      alert('project sudah di approve!');
                //      return;
                //  }
                // })
            }
        ";

        $jvEdit = "
            function jvEdit(){
                " . $selrow . "
                var prm = {};
                prm['idents'] = id;
                prm['tipe'] = 1;
        
                if(id=='' || id==null){
                    alert('Pilih Data!');   
                }else{
                    // $.post('/perekrutan/perekrutan/checkstatus',prm,function(hasil){
                    //  if(hasil == 0){
                            self.location.replace('/edit/perekrutan/perekrutan/'+id);
                    //  }else{
                    //      alert('project sudah di approve!');
                    //      return;
                    //  }
                    // });
                }
            }
        ";
        
        // $arrCombo = array('brand'=>array('width'=>'120','idents'=>'cmbBrand','source'=>$arrBrand, 'value'=>'', 'placeHolder'=>'Brand','events'=>array('change'=>'jvChange()')));
        
        $gridd = gGrid(array('url'=>$url , 
            'gridname'=>$gridname,
            'width'=>'100%',
            'height'=>'100%',
            'col'=>$col,
            'event'=> $event,
            'button'=> 'standar',
            // 'toolbarCombo'=>$arrCombo,
            'modul'=>'perekrutan/'.$this->modul,
            'sumber'=>'server',
            'jvDelete'=>$jvDelete,
            'jvEdit'=>$jvEdit,
            'pagesize'=>18,
            'fontsize'=>10,
            'showToolbar'=>true,
            'pageable'=>true
        ));
        
        $urutan = 0;
        $urlDetail ='/nosj/getNosjnull';
        $col = array(
                array('lsturut'=>$urutan++, 'namanya'=>'IDENTS','aw'=>10,'label'=>'id','ah'=>true),
                array('lsturut'=>$urutan++, 'namanya'=>'REC_PKRJID','aw'=>'15%','label'=>'ID Pekerja','ga'=>'center','ah'=>true),
                array('lsturut'=>$urutan++, 'namanya'=>'PKR_NAMESS','aw'=>'30%','label'=>'Nama','ga'=>'left'),
                array('lsturut'=>$urutan++, 'namanya'=>'PKR_JNSKLM','aw'=>'15%','label'=>'Jenis Kelamin','ga'=>'left'),
                array('lsturut'=>$urutan++, 'namanya'=>'PKR_EXPRNC', 'aw'=>'15%','label'=>'Pengalam Kerja'),
                array('lsturut'=>$urutan++, 'namanya'=>'PKR_EXPNPT', 'aw'=>'20%','label'=>'Nama Perusahaan'),
                array('lsturut'=>$urutan++, 'namanya'=>'PKR_EXPBDG', 'aw'=>'20%','label'=>'Bidang Perusahaan')
        );
        
        $gridd2 = gGrid(array('url'=>$urlDetail,
            'gridname'=>$gridname2,
            'width'=>'100%',
            'height'=>'300px;',
            'col'=>$col,
            'pageable'=>true,
            'sumber'=>'local',
            'virtualmode'=>false,
            'modul'=>$this->modul,
            'showToolbar'=>false,
            'showaggregates' =>true
        )); 

        $script = "
            <script>
            </script>
        ";

        $content = "
            <center>
                <div class='container' style='width:100%;padding:0px 0px 0px 0px;align:left;'>
                    <div class=row>
                        <div class='col-md-12 col-sm-12 col-xs-12'>" . $gridd . "</div>
                    </div><br>
                    <div class=row style='text-align: left;'>&nbsp;&nbsp;&nbsp;&nbsp;<b>Detail Pekerja</b></div>
                    <div class=row>
                        <div class='col-md-10 col-sm-10 col-xs-10'>" . $gridd2 . "</div>
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
            array('link'=>'/perekrutan/perekrutan','text'=> 'Perekrutan'),
            array('link'=>'#','text'=> $keterangan),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $content,'admin', $bc);
    }
    
    function edit($type=null,$param=null,$source=null){
        $level = $this->level;
        $loginid= $this->loginid;

        $arrColumn = array(
            'txtNOMORS' =>'REC_NOMORS',
            'txtJOBPOS' =>'REC_JOBPOS',
            'datTGLREC' =>'REC_TGLREC',
            'txtNMCOMP' =>'COMPANY',
            'txtCOMPNY' =>'REC_COMPNY',
            'txtLCTION' =>'LCTION',
            'txtASPECS' =>'ASPECS',
            'txtJOBTTL' =>'PEKERJAAN',
            'txtSTATUS' =>'STATUS',
            'txtCLIENT_DESC' =>'COMPANY',
            'txtNOMPOS' => 'JOB_NOMJOB',
            'txtVACNCY' => 'JOB_VACNCY'
        );

        if($type!="add"){
            $column = $this->m_perekrutan->getPerekrutan_edit($param,1);
            $readonly = true;
        }else{
            $readonly = false;
            $param = 0;
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
            'data'=>$txtNMCOMP.'~'.$txtCLIENT_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/perekrutan/perekrutan/tagPerusahaan";}'
        );

        $JobTag = array(
            'limit'=>1,
            'data'=>$txtJOBPOS.'~'.$txtNOMPOS,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/perekrutan/perekrutan/tagJob/"+ $("#txtNMCOMP").val();}'
        );

        $optActive = $this->crud->getCommon(3,6);
        $optJenis = array(''=>'--Pekerjaan','1'=>'Kontrak','2'=>'Tetap');
        $optStatus = array('--Status--'=>'','1'=>'Aktif','2'=>'Close');
        $optEXPRNC = array('0'=>'--Pilih--','1'=>'1 Tahun','2'=>'2 Tahun','3'=>'3 Tahun','4'=>'4 Tahun','5'=>'5 Tahun','6'=>'Lebih Dari 5 Tahun');

        // ========================================================================================================= Tunjangan
        
        $formname = 'formgw';
        $onSuccess = 'jvSave()';
        $ruleCOMPNY = array(array('rule'=>'empty','message'=>'Perusahaan Belum Diisi!'));
        $ruleJOMJOB = array(array('rule'=>'empty','message'=>'Data Pekerjaan Belum Diisi!'));
        $ruleTGLREC = array(array('rule'=>'empty','message'=>'Tanggal Rekrut Belum Diisi!', 'onSuccess'=>$onSuccess));

        $urutan=0;

        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNOMORS','label'=>'No.Rekrut',  'size'=>'100','value'=> isset($column) ? $txtNOMPOS : "",'readonly'=>true);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'dat', 'namanya' =>'datTGLREC','label'=>'Tgl. Rekrut','size' => '100','value'=> isset($column) ? $datTGLREC : "", 'validator'=>$ruleTGLREC);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtNMCOMP','label'=>'Perusahaan',  'size'=>'300','value'=> isset($column) ? $txtNMCOMP : "",'validator'=>$ruleCOMPNY,'tagsinput' => $PerusahaanTag);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidCOMPNY','label'=>'', 'value'=> $txtCOMPNY);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtLCTION','label'=>'Lokasi',  'size'=>'500','value'=> isset($column) ? $txtLCTION : "",'readonly'=>true);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtASPECS','label'=>'Bidang',  'size'=>'300','value'=> isset($column) ? $txtASPECS : "",'readonly'=>true);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtJOBPOS','label'=>'No. Posting Pekerjaan',  'size'=>'150','value'=> isset($column) ? $txtJOBPOS : "",'validator'=>$ruleJOMJOB,'tagsinput' => $JobTag);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtJOBTTL','label'=>'Posisi Pekerjaan',  'size'=>'250','value'=> isset($column) ? $txtJOBTTL : "",'readonly'=>true);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtSTATUS','label'=>'Status Pekerjaan',  'size'=>'100','value'=> isset($column) ? $txtSTATUS : "",'readonly'=>true);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> ($type=='view') ? "view" : 'txt', 'namanya' =>'txtVACNCY','label'=>'Kebutuhan Lowongan',  'size'=>'50','value'=> isset($column) ? $txtVACNCY : "",'readonly'=>true);

        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'txtCLIENT_DESC','label'=>'', 'value'=> $param);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidIDENTS','label'=>'', 'value'=> $param);
        $arrTables[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidTRNSKS','label'=>'', 'value'=> $type);
        $arrTable[] = array('group'=>9, 'urutan'=>$urutan++, 'type'=> 'hid', 'maxlength'=>'10', 'label'=> 'hidDETAIL', 'namanya'=> 'hidDETAIL', 'size'=> '40', 'value'=>'');

        $content_dtl = "
            <style>
                h4{
                    font-family: sans-serif;
                    font-weight: bold;
                    text-align:center;
                    border-radius: 5px;
                }
                table {
                    font-family: Arial, Helvetica, sans-serif;
                    color: #666;
                    text-shadow: 1px 1px 0px #fff;
                    background: #eaebec;
                    border: #ccc 1px solid;
                    margin-left: auto; 
                    margin-right: auto; 
                    position: relative; 
                    border-radius: 5px;
                }
                 
                table th {
                    padding: 15px 35px;
                    border-left:1px solid #e0e0e0;
                    border-bottom: 1px solid #e0e0e0;
                    background: #ededed;
                    text-align:center;
                    font-weight: bold;
                    position: sticky; 
                    top: 0; 
                    box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4); 
                    border-radius: 5px;
                }
                 
                table th:first-child{  
                    border-left:none;
                    border-radius: 5px;
                }
                 
                table tr {
                    text-align: center;
                    padding-left: 20px;
                    border-radius: 5px;
                }
                 
                table td:first-child {
                    text-align: left;
                    padding-left: 20px;
                    border-left: 0;
                    border-radius: 5px;
                }
                 
                table td {
                    padding: 15px 35px;
                    border-top: 1px solid #e0e0e0;
                    border-bottom: 1px solid #e0e0e0;
                    border-left: 1px solid #e0e0e0;
                    border-radius: 5px;
                    background: #fafafa;
                    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
                    background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
                }
                
                table tr:last-child td {
                    border-bottom: 0;
                    border-radius: 5px;
                }
                 
                table tr:last-child td:first-child {
                    -moz-border-radius-bottomleft: 5px;
                    -webkit-border-bottom-left-radius: 5px;
                    border-bottom-left-radius: 5px;
                }
                 
                table tr:last-child td:last-child {
                    -moz-border-radius-bottomright: 5px;
                    -webkit-border-bottom-right-radius: 5px;
                    border-bottom-right-radius: 3px;
                }
                
                table tr:hover td {
                    background: #f2f2f2;
                    background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
                    background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
                }
                
                .tombol1{
                  background:#2C97DF;
                  color:white;
                  border-top:0;
                  border-left:0;
                  border-right:0;
                  border-bottom:5px solid #2A80B9;
                  border-radius: 5px;
                  padding:5px 10px 5px 5px;
                  text-decoration:none;
                  font-family:sans-serif;
                  font-size:11pt;
                }
                .tombol2{
                  background:#00b33c;
                  color:white;
                  border-top:0;
                  border-left:0;
                  border-right:0;
                  border-bottom:5px solid #009933;
                  border-radius: 5px;
                  padding:5px 10px;
                  text-decoration:none;
                  font-family:sans-serif;
                  font-size:11pt;
                }
                .tombol3{
                  background:#ff0000;
                  color:white;
                  border-top:0;
                  border-left:0;
                  border-right:0;
                  border-bottom:5px solid #cc0000;
                  border-radius: 5px;
                  padding:5px 10px;
                  text-decoration:none;
                  font-family:sans-serif;
                  font-size:11pt;
                }
                .tombol4{
                  background:#ffcc00;
                  color:white;
                  border-top:0;
                  border-left:0;
                  border-right:0;
                  border-bottom:5px solid #cca300;
                  border-radius: 5px;
                  padding:5px 10px;
                  text-decoration:none;
                  font-family:sans-serif;
                  font-size:11pt;
                }
            </style>

            <script>
                $(document).ready(function(){
                    // Add button Delete in row
                    $('tbody tr')
                    .find('td')
                    //.append('<input type=\"button\" value=\"Delete\" class=\"del\"/>')
                    .parent() //traversing to 'tr' Element
                    .append('<td style=\"width:3%;\"><a href=\"#\" class=\"delrow\">Delete</a></td>');

                    // For select all checkbox in table
                    $('#checkedAll').click(function (e) {
                        //e.preventDefault();
                        $(this).closest('#detail').find('td input:checkbox').prop('checked', this.checked);
                    });

                    // Add row the table
                    $('#btnAddRow').on('click', function() {
                        $('#').val();
                        var lastRow = $('#detail tbody tr:last').html();
                        //alert(lastRow);
                        $('#detail tbody').append('<tr>' + lastRow + '</tr>');
                        $('#detail tbody tr:last input').val('');
                    });

                    // Delete last row in the table
                    $('#btnDelLastRow').on('click', function() {
                        // var lenRow = $('#detail tbody tr').length;
                        // //alert(lenRow);
                        // if (lenRow == 1 || lenRow <= 1) {
                        //     alert('Tidak bisa hapus semua baris!');
                        // } else {
                            $('#detail tbody tr:last').remove();
                        // }
                    });

                    // Delete row on click in the table
                    $('#detail').on('click', 'tr a', function(e) {
                        var lenRow = $('#detail tbody tr').length;
                        e.preventDefault();
                        if (lenRow == 1 || lenRow <= 1) {
                            alert('Tidak bisa hapus semua baris!');
                        } else {
                            $(this).parents('tr').remove();
                        }
                    });

                    // Delete selected checkbox in the table
                    $('#btnDelCheckRow').click(function() {
                        var lenRow      = $('#detail tbody tr').length;
                        var lenChecked  = $('#detail input[type=\"checkbox\"]:checked').length;
                        var row = $('#detail tbody input[type=\"checkbox\"]:checked').parent().parent();
                        // alert(lenRow + ' - ' + lenChecked);
                        if (lenRow == 1 || lenRow <= 1 || lenChecked >= lenRow) {
                            alert('Tidak bisa hapus semua baris!');
                        } else {
                            row.remove();
                        }
                    });
                });

                
            </script>

            <div><h4>List Pekerja</h4></div>
            <button id='btnAddRow' type='button' class='tombol1'>Add Row</button>
            <button id='btnEdtRow' type='button'  class='tombol2'>Ubah</button>
            <button id='btnDelLastRow' type='button' class='tombol3'>Delete Last Row</button>
            <button id='btnDelCheckRow' type='button' class='tombol4'>Delete Checked Row</button>
            <table  id='detail' border='1'>
                <thead>
                    <tr>
                        <th style='width:5%;'><input type='checkbox' id='checkedAll'/></th>
                        <th style=display:none;>ROWID</th>
                        <th style=display:none;>PKRJID</th>
                        <th style='width:10%;'>Nama</th>
                        <th style='width:10%;'>Jenis Kelamin</th>
                        <th style='width:10%;'>Pengalaman Kerja</th>
                        <th style='width:10%;'>Nama Perusahaan</th>
                        <th style='width:10%;'>Bidang Usaha</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input name='ckcDel[]'' type='checkbox' /></td>
                        <td style=display:none;><input name='txtROWSID[]' value=''></td>
                        <td style=display:none;><input name='txtPKRJID[]' value=''></td>
                        <td><input name='txtNAMESS[]' value=''></td>
                        <td><input name='txtJNSKLM[]' value=''></td>
                        <td><input name='txtEXPRNC[]' value=''></td>
                        <td><input name='txtEXPNPT[]' value=''></td>
                        <td><input name='txtEXPBDG[]' value=''></td>
                    </tr>
                </tbody>
            </table>
        ";
        
        $inputform = "inputform";
        $arrForms =
        array(
            'bentuk'=>'div',
            'type'=>$type,
            'arrTable'=>$arrTables,
            'width' => '100%',
            'modul' => 'konfirm',
            'nameForm' => $inputform,
            'form_create'=>false
        );
        
        $formAtas = generateForm($arrForms,false);
        $formAtas .= "</form>";
        
        $txtPKRJID = '';
        $txtPEKRJA_DESC = '';
        
        $PekerjaTag = array(
            'limit'=>1,
            'data'=>$txtPKRJID.'~'.$txtPEKRJA_DESC,
            'tokenvalue'=>'id',
            'zindex'=>'18002',
            'tambah'=>false,
            'function'=>'function(){return "/perekrutan/perekrutan/tagPekerja/"+ $("#txtJOBPOS").val();}'
        );

        $onSuccess2 = "jvSettogrid();";
        
        $inputform = "inputGrid";
        $rulePEKRJA = array(array('rule'=>'empty','message'=>'Pekerja belum diisi!','onSuccess'=>$onSuccess2,'formnya'=>$inputform));
        
        $arrTableGrid[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'label'=>'Row Index','namanya' =>'txtROWIDX');
        $arrTableGrid[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'label'=>'Grid ID',  'namanya' =>'txtIDGRID');
        $arrTableGrid[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'hid', 'namanya' =>'hidPKRJID','label'=>'ID Pekerja');
        $arrTableGrid[] = array('group'=>1, 'urutan'=>$urutan++,  'size'=>'300', 'type'=> 'txt', 'label'=>'Tag Pekerja','namanya' =>'txtPEKRJA','tagsinput' => $PekerjaTag, 'validator'=>$rulePEKRJA);
        // $arrTableGrid[] = array('group'=>1, 'urutan'=>$urutan++,  'size'=>'100', 'type'=> 'txt', 'label'=>'Nama','namanya' =>'txtPKRJNM','readonly'=>true);
        $arrTableGrid[] = array('group'=>1, 'urutan'=>$urutan++,  'size'=>'100', 'type'=> 'txt', 'label'=>'Jenis Kelamin','namanya' =>'txtJNSKLM','readonly'=>true);
        $arrTableGrid[] = array('group'=>1, 'urutan'=>$urutan++,  'size'=>'200', 'type'=> 'txt', 'label'=>'Pengalaman','namanya' =>'txtEXPRNC','readonly'=>true);
        $arrTableGrid[] = array('group'=>1, 'urutan'=>$urutan++,  'size'=>'200', 'type'=> 'txt', 'label'=>'Perusahaan','namanya' =>'txtEXPNPT','readonly'=>true);
        $arrTableGrid[] = array('group'=>1, 'urutan'=>$urutan++,  'size'=>'200', 'type'=> 'txt', 'label'=>'Bidang','namanya' =>'txtEXPBDG','readonly'=>true);
        
        $arrForms = array(
                'bentuk'=>'div',
                'type'=>$type,
                'arrTable'=>$arrTableGrid,
                'width' => '100%',
                'modul' => 'konfirm',
                'nameForm' => $inputform,
            );
        
        $formKiri = "";
        $colTNJGAN = " col-md-10";
        if(!isset($status)){
            $formKiri = generateForm($arrForms,false);
            $formKiri .= "</form>";
            $formKiri = "<div class='col-xs-18 col-md-5'>".$formKiri."</div>";
            $colTNJGAN = " col-md-5";
        }
        
        $gridname = "jqxPekerjadetail";
        $url1 ="/perekrutan/nosj/getDetail_Rekrut/" .$param;
        $urutanDetail =0;

        $col[] = array('lsturut'=>$urutanDetail++, 'namanya'=>'IDENTS','aw'=>10,'label'=>'id','ah'=>true);
        $col[] = array('lsturut'=>$urutanDetail++, 'namanya'=>'REC_PKRJID','aw'=>'15%','label'=>'ID Pekerja','ga'=>'center','ah'=>true);
        $col[] = array('lsturut'=>$urutanDetail++, 'namanya'=>'PKR_NAMESS','aw'=>'30%','label'=>'Nama','ga'=>'left');
        $col[] = array('lsturut'=>$urutanDetail++, 'namanya'=>'PKR_JNSKLM','aw'=>'15%','label'=>'Jenis Kelamin','ga'=>'left');
        $col[] = array('lsturut'=>$urutanDetail++, 'namanya'=>'PKR_EXPRNC', 'aw'=>'15%','label'=>'Pengalam Kerja');
        $col[] = array('lsturut'=>$urutanDetail++, 'namanya'=>'PKR_EXPNPT', 'aw'=>'20%','label'=>'Nama Perusahaan');
        $col[] = array('lsturut'=>$urutanDetail++, 'namanya'=>'PKR_EXPBDG', 'aw'=>'20%','label'=>'Bidang Perusahaan');

        $button = "";
        $dbutton = ""; 
        if(!isset($status)){
            $dbutton = array(
                "Tambah"=>array("tambah","fa fa-plus-circle","jvTambahItem(1)","info"),
                // "Ubah"=>array("ubah","fa fa-pencil-square","jvUbahItem()","success"),
                "Hapus"=>array("hapus","fa fa-times-circle","jvHapusItem()","danger")
            );

            $arrButton = array(
                "save"=>array("Simpan", "jvSave()","success","save"),
            );

            $button = generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton));
        }
        
        $gridTunjangan = gGrid(
            array(
                'url'=>$url1, 
                'gridname'=>$gridname,
                'width'=>'100%',
                'col'=>$col,
                'button'=> $dbutton,
                'height'=>'250',
                'showToolbar'=>true,
                'sumber'=>'server'
        ));
        $formpekerja = generateForm($arrForms,false);
        
        $htmlPekerja = "
            <div class=row>
                <div class='col-xs-18 col-md-12'>".$formAtas."</div>
                <div class=row>
                    <div class='col-md-12' ><kbd>Tambah List Pekerja</kbd><hr></div>
                </div>
                <div class='col-xs-6 col-md-6'>".$formpekerja."</div>
                <br>
                <div class='col-xs-18 col-md-10'>".$gridTunjangan."</div>
            </div>
        ";
        // <div class='col-xs-18 col-md-12'>".$content_dtl."</div>
        
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'udf', 'value'=>$htmlPekerja);
        
        $formcommand = "save/perekrutan/perekrutan";
        // $button = "";
        $arrForm =
             array(
                'type'=>$type,
                'param'=>$param,
                'button'=>$button,
                'arrTable'=>$arrTable,
                'status'=> isset($status) ? $status : "",
                'width' => '100%',
                'height' =>'90%',
                'formcommand' => $formcommand,
                'modul' => $this->modul,
                'source'=>'app'
            );
        
        $content = $button;
        $content .= generateForm($arrForm,false);
        $content .= "
        <script>
            var idcounter = 0;
            var deletedAr = {};
            
            $(document).ready(function(){
                // --------------- onchange data perusahaan
                $('#txtNMCOMP').bind('change',function(data){
                    var id = $('#txtNMCOMP').val();
                    if(id != ''){
                        $.post('/job/job/getDataCompany/' +id,function(data){
                            var datanya = data.split('~');
                            $('#txtLCTION').val(datanya[2]);
                            $('#txtASPECS').val(datanya[3]);
                        });
                    }
                });
                
                // --------------- onchange data pekerjaan
                $('#txtJOBPOS').bind('change',function(data){
                    var id = $('#txtJOBPOS').val();
                    if(id != ''){
                        $.post('/perekrutan/perekrutan/getDataJob/' +id,function(data){
                            var datanya = data.split('~');
                            $('#txtJOBTTL').val(datanya[2]);
                            $('#txtSTATUS').val(datanya[3]);
                        });
                    }
                });
                
                // --------------- onchange data pekerja
                $('#txtPEKRJA').bind('change',function(data){
                    var id = $('#txtPEKRJA').val();
                    $('#hidPKRJID').val(id);
                    if(id != ''){
                        $.post('/perekrutan/perekrutan/getDataPekerja/' +id,function(data){
                            var datanya = data.split('~');
                            $('#hidPKRJID').val(datanya[0]);
                            $('#txtPEKRJA').val(datanya[1]);
                            $('#txtJNSKLM').val(datanya[2]);
                            $('#txtEXPRNC').val(datanya[3]);
                            $('#txtEXPNPT').val(datanya[4]);
                            $('#txtEXPBDG').val(datanya[5]);
                        });
                    }
                });
            });
            
            function jvTambahItem(opt){
                var datainformations = $('#".$gridname."').jqxGrid('getdatainformation');
                var rowscounts = datainformations.rowscount;
                var vacncy = $('#txtVACNCY').val();

                // alert(rowscounts+'~'+vacncy);return;

                if(rowscounts == vacncy){
                    alert('Maaf, lowongan yang tersedia untuk posisi ini sudah maksimal!');
                    return;
                }

                if($('#txtPEKRJA').val()=='' || $('#txtPEKRJA').val()==0){
                    alert('Pekerja tidak bisa di tambahkan, data pekerja masih kosong!');
                    return;
                }
                
                $.post('/perekrutan/perekrutan/cekPekerja/'+$('#txtPEKRJA').val(),function(data){
                    if(data == 1){
                        alert('Pekerja sudah di rekrut!');
                        return;
                    }
                });

                if(opt==1){ ///validasi dulu
                    $('#".$inputform."').jqxValidator('validate');
                }
            }
            
            function jvSettogrid(){
                var rowidx = $('#txtROWIDX').val();
                if(rowidx==''){
                    var rowidx = '".$gridname."' + (idcounter++);
                    var datarow = generatedatarow();
                    var commit = $('#".$gridname."').jqxGrid('addrow', rowidx, datarow,'first');
                }else{
                    var edt = generatedatarow(1,rowidx);
                }
                jvKosongkan();
            }
            
            function generatedatarow(go=0,rowidx=null){
                var row = {};
                var idents = $('#txtIDGRID').val();
                var pkrjid = $('#hidPKRJID').val();
                var pkrjnm = $('#txtPEKRJA').val();
                var jnsklm = $('#txtJNSKLM').val();
                var exprnc = $('#txtEXPRNC').val();
                var expnpt = $('#txtEXPNPT').val();
                var expbdg = $('#txtEXPBDG').val();
                // alert(pkrjnm+'~'+jnsklm+'~'+exprnc+'~'+expnpt+'~'+expbdg);

                row['REC_IDENTS'] = $('#txtIDGRID').val();
                row['REC_PKRJID'] = $('#hidPKRJID').val();
                row['PKR_NAMESS'] = $('#txtPEKRJA').val();
                row['PKR_JNSKLM'] = $('#txtJNSKLM').val();
                row['PKR_EXPRNC'] = $('#txtEXPRNC').val();
                row['PKR_EXPNPT'] = $('#txtEXPNPT').val();
                row['PKR_EXPBDG'] = $('#txtEXPBDG').val();
                
                if(go==1){
                    $('#".$gridname."').jqxGrid('setcellvalue', rowidx, 'REC_IDENTS', row['REC_IDENTS']);
                    $('#".$gridname."').jqxGrid('setcellvalue', rowidx, 'REC_PKRJID', row['REC_PKRJID']);
                    $('#".$gridname."').jqxGrid('setcellvalue', rowidx, 'PKR_NAMESS', row['PKR_NAMESS']);
                    $('#".$gridname."').jqxGrid('setcellvalue', rowidx, 'PKR_JNSKLM', row['PKR_JNSKLM']);
                    $('#".$gridname."').jqxGrid('setcellvalue', rowidx, 'PKR_EXPRNC', row['PKR_EXPRNC']);
                    $('#".$gridname."').jqxGrid('setcellvalue', rowidx, 'PKR_EXPNPT', row['PKR_EXPNPT']);
                    $('#".$gridname."').jqxGrid('setcellvalue', rowidx, 'PKR_EXPBDG', row['PKR_EXPBDG']);
                    return true;
                }else{
                    var rows = $('#".$gridname."').jqxGrid('getrows');
                    var arrRows = [];
                    for(i=0;i < rows.length;i++){
                        // arrRows.push($('#".$gridname."').jqxGrid('getcellvalue', i, 'REC_IDENTS'));
                        
                        arrRows.push($('#".$gridname."').jqxGrid('getcellvalue', i, 'REC_PKRJID'));
                        arrRows.push($('#".$gridname."').jqxGrid('getcellvalue', i, 'PKR_NAMESS'));
                        arrRows.push($('#".$gridname."').jqxGrid('getcellvalue', i, 'PKR_JNSKLM'));
                        arrRows.push($('#".$gridname."').jqxGrid('getcellvalue', i, 'PKR_EXPRNC'));
                        arrRows.push($('#".$gridname."').jqxGrid('getcellvalue', i, 'PKR_EXPNPT'));
                        arrRows.push($('#".$gridname."').jqxGrid('getcellvalue', i, 'PKR_EXPBDG'));
                    }
                    arrRows.reverse();
                    return row;
                }
            }
            
            function jvUbahItem(){
                jvKosongkan();
                var rowindex = $('#".$gridname."').jqxGrid('getselectedrowindex');
                if(rowindex == -1){
                    alert('Pilih Data!');
                    return;
                }

                var data = $('#".$gridname."').jqxGrid('getrowdata', rowindex);
                $('#txtROWIDX').val(rowindex);
                $('#txtIDGRID').val(data.REC_IDENTS);
                $('#hidPKRJID').val(data.REC_PKRJID);
                $('#txtPEKRJA').val(data.PKR_NAMESS);
                // $('#txtPKRJNM').val(data.PKR_NAMESS);
                $('#txtJNSKLM').val(data.PKR_JNSKLM);
                $('#txtEXPRNC').val(data.PKR_EXPRNC);
                $('#txtEXPNPT').val(data.PKR_EXPNPT);
                $('#txtEXPBDG').val(data.PKR_EXPBDG);
            }
            
            function jvHapusItem(){
                jvKosongkan();
                var rowindex = $('#".$gridname."').jqxGrid('getselectedrowindex');
                if(rowindex == -1){
                    alert('Pilih Data!');
                    return;
                }
                var idmemo = $('#".$gridname."').jqxGrid('getcellvalue', rowindex, 'REC_IDENTS');
                var rowIDs = $('#".$gridname."').jqxGrid('getrowid', rowindex);
                var data = $('#".$gridname."').jqxGrid('deleterow', rowIDs);
                deletedAr[rowIDs] = Math.abs(idmemo);
            }
            
            function jvKosongkan(){
                $('#txtROWIDX').val('');
                $('#hidPKRJID').val('');
                $('#txtPEKRJA').val('');
                // $('#txtPKRJNM').val('');
                $('#txtJNSKLM').val('');
                $('#txtEXPRNC').val('');
                $('#txtEXPNPT').val('');
                $('#txtEXPBDG').val('');
            }

            function jvSave(){
                // $('#".$formname."').jqxValidator('validate');
                var compny1 = $('#txtNMCOMP').val();
                var compny2 = $('#hidCOMPNY').val();

                var com1=compny1.length;
                var c;
                for(var i=0;i<com1;i++)
                {
                    c=compny1.charAt(i).charCodeAt(0);
                    if(c < 48 || c >57)
                    {
                        $('#txtNMCOMP').val(compny2);
                    }else{
                        $('#txtNMCOMP').val();
                    }
                }
                
                var rows = $('#".$gridname."').jqxGrid('getrows');
                var datainformations = $('#".$gridname."').jqxGrid('getdatainformation');
                var rowscounts = datainformations.rowscount;

                if(confirm('Simpan data?')){
                    $('#hidDETAIL').val(JSON.stringify(rows));
                    $('#hidDELETE').val(JSON.stringify(deletedAr));
                    document.".$formname.".submit();
                }
            }

            // function jvSimpan(){
            //     var rows = $('#".$gridname."').jqxGrid('getrows');
            //     var lanjut = true;
            //     if(rows.length==0){
            //         var conf = confirm('Tidak ada Tunjangan Skill! Lanjutkan?');
            //         if(conf==true){
            //             lanjut = true;                      
            //         }else{
            //             lanjut = false;
            //         }
            //     }
            //     if(lanjut){
            //         $('#hidDETAIL').val(JSON.stringify(rows));
            //         $('#hidDELETE').val(JSON.stringify(deletedAr));
            //         document.formgw.submit();                   
            //     }
            // }

            // function jvSave(){
            //  if($('#txtPSTION').val()==''){
            //          $('#".$formname."').jqxValidator('validate');
            //          return;
            //  }else if($('#cmbJAMKRJ').val()==''){
            //      $('#".$formname."').jqxValidator('validate');
            //      return;
            //  }else if($('#cmbISNTIF').val()==''){
            //      $('#".$formname."').jqxValidator('validate');
            //      return;
            //  }
            //  if(confirm('Simpan data?'))
            //          {
            //              $('#hidDETAIL').val(JSON.stringify(rows));
            //          document.formgw.submit();
            //      }
            // }        
        </script>
        ";

        return $content;
    }

    function cekPekerja(){
        $pekrja = $this->input->post('txtPEKRJA');
        $data = $this->m_perekrutan->cekPekerja($pekrja);
        echo $data;
    }

    function tagPerusahaan(){
        $table = 'T_MAS_CLIENT';
        $idnya = 'CLI_IDENTS';

        $fields = array(
            'id'=>$idnya,
            'field'=>'CLI_NAMESS',
            'where'=>'CLI_NAMESS',
            'disabled'=>FALSE
        );
        // $this->db->where('CLI_ACTIVE',1);
        // if($level==2 || $level==3){
        //     $this->db->where('CLI_LOGNID',$loginid);
        // }
        $filter = "";                

        $json = autotag(
            array(
                'table'=>$table,
                'protected'=>false,
                'field'=>$fields,
                'filter'=>$filter,
                'model'=>'m_perekrutan',
                'function'=>'getPerusahaanTag'
                )
            );
        // $this->common->debug_sql();
    }

    function tagJob($company){
        $table = 'T_TRN_JOBPOS';
        $idnya = 'JOB_IDENTS';

        $fields = array(
            'id'=>$idnya,
            'field'=>'CONCAT (JOB_NOMJOB, " (",JOB_TITLES,")")',
            'where'=>'JOB_NOMJOB',
            'disabled'=>FALSE
        );
        $this->db->where('JOB_STATUS',1);
        $this->db->where('JOB_COMPNY',$company);
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

    function tagPekerja($idjobs){
        $table = 'T_MAS_PEKRJA';
        $idnya = 'PKR_IDENTS';

        $fields = array(
            'id'=>$idnya,
            'field'=>'PKR_NAMESS',
            'where'=>'PKR_NAMESS',
            'disabled'=>FALSE
        );
        $this->db->where('PKR_ACTIVE',1);
        $this->db->where('APP_IDJOBS',$idjobs);
        $filter = $idjobs;
        // $filter = array("APP_IDJOBS"=>$idjobs);

        $json = autotag(
            array(
                'table'=>$table,
                'protected'=>false,
                'field'=>$fields,
                'filter'=>$filter,
                'model'=>'m_perekrutan',
                // 'all'=>$true,
                'function'=>'getPekerjaTag'
            )
        );
        // $this->common->debug_sql();
    }

    function getDataJob($id){
        $getdata = $this->m_perekrutan->getDataJob($id);
        echo $getdata->JOB_IDENTS.'~'.$getdata->JOB_NOMJOB.'~'.$getdata->JOB_TITLES.'~'.$getdata->JOB_DRTION;
    }

    function getDataPekerja($id){
        $getdata = $this->m_perekrutan->getDataPekerja($id);
        echo $getdata->PKR_IDENTS.'~'.$getdata->NAMA.'~'.$getdata->JNSKLM.'~'.$getdata->EXPRNC.' Tahun'.'~'.$getdata->PRSHAN.'~'.$getdata->BIDANG;
    }

    function save(){
        // $this->common->debug_post();
        $REC_IDENTS = $this->input->post('hidIDENTS');
        $REC_JOBPOS = strtoupper($this->input->post('txtJOBPOS'));
        $REC_TGLREC = $this->input->post('datTGLREC');
        $REC_COMPNY = $this->input->post('txtNMCOMP');
        // echo $this->input->post('hidTRNSKS');

        $input = array(
            'REC_COMPNY' => $REC_COMPNY,
            'REC_TGLREC' => $REC_TGLREC,
            'REC_JOBPOS' => $REC_JOBPOS
        );

        if($this->input->post('hidTRNSKS')=='add'){
            $CODE = 'REK';
            $TYPES = 'REK';
            $YEAR = date('Y');
            $CODESS = $this->crud->set_MaxNomor($CODE,$TYPES,$YEAR);
            // echo $CODESS;
            
            $input = array_merge($input,array(
                'REC_NOMORS'=>$CODESS,
                'REC_USRCRT'=>$this->userid,
                'REC_DATCRT'=>$this->datesave
            ));
            
        }else{
            $input = array_merge($input,array(
                'REC_USRUPD'=>$this->userid,
                'REC_DATUPD'=>$this->datesave
            ));
        }
        
        $this->crud->useTable('T_TRN_RCRUIT');
        $this->crud->save($input, array('REC_IDENTS'=> $REC_IDENTS));
        $this->crud->unsetMe();
        $IDENTS = ($this->input->post('hidTRNSKS') =='add') ? $this->crud->__insertID : $this->input->post('hidIDENTS');
        // echo $IDENTS;
        $DETAIL = json_decode($this->input->post('hidDETAIL'), true);
        // $this->common->debug_array($DETAIL);
        // print_r($DETAIL);
        // die();
        
        // --------------------------------------------- update table Detail
        if(count($DETAIL) > 0){
            $this->crud->useTable("T_TRN_RCRUIT_DETAIL",false);
            $this->crud->delete_builder(array("REC_FIDENT"=>$IDENTS));
            $this->crud->unsetMe();

            foreach ($DETAIL as $key => $value) {
                unset($value['uid']);
                unset($value['boundindex']);
                unset($value['uniqueid']);
                unset($value['visibleindex']);
                unset($value['REC_IDENTS']);
                    
                // untuk input/update detail
                $value = array(
                    'REC_FIDENT'=>$IDENTS,
                    'REC_PKRJID'=>$value['REC_PKRJID']
                    // 'REC_KONDAT'=>$value['REC_KONDAT']
                );

                $value = array_merge($value,array('REC_USRUPD'=>$this->userid));

                $this->crud->useTable("T_TRN_RCRUIT_DETAIL");
                $this->crud->save($value);
                $this->crud->unsetMe();
            }
        }
        // die();
        $redirect = '/perekrutan/perekrutan';

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

        $this->crud->useTable('T_TRN_RCRUIT_DETAIL');
        $this->crud->delete_builder(array('RND_BDVIDN'=> $IDENTS));
        $this->crud->unsetMe();

        $this->crud->useTable('T_TRN_RCRUIT');
        $this->crud->delete_builder(array('REC_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}