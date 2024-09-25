<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lamaran extends MY_Controller {
    var $tables;
    var $modul;
    var $identcolumn;
    var $username;
    var $datesave;
    var $adminpage;
    
    function __construct(){
        parent::__construct();
        $this->load->helper(array('ginput','jqxgrid','file'));
        $this->load->model(array('m_pekerja','m_client'));
        $this->modul = $this->router->fetch_class();
        $this->adminpage = $this->config->item('adminpage');
        $this->userid = $this->session->userdata('USR_LOGINS');
        $this->level = $this->session->userdata('USR_LEVELS');
        $this->loginid = $this->session->userdata('USR_IDENTS');
        $this->datesave = date('Y-m-d H:i:s');
        $this->title = "Lamaran Kerja";
    }
    
    public function index(){
        $arrbread = array(
            array('link'=>'/home/welcome','text'=>'Beranda'),
            array('link'=>'#','text'=> 'Lamaran Kerja'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->listLamaran(),'admin',$bc);
    }

    function listLamaran($type='edit'){
        $loginid = $this->loginid;
        $idnya = $loginid;
        $arrColumn = array(
            'COMPNY' =>'COMPNY',
            'TITLES' =>'TITLES',
            'STATUS' =>'STATUS',
            'SALMIN' =>'SALMIN',
            'SALMAX' =>'SALMAX',
            'EXPDAT' =>'EXPDAT'
        );
        
        if($this->level > 1 && $this->level < 99){
            echo "<br>".$this->level;
            $IDPkrj = $this->m_pekerja->getPekerjaID($idnya,1);
            foreach($IDPkrj as $baris=>$kolom){
                $idnya = $kolom;
            }
        }
        
        $column = $this->m_pekerja->getApplayJob($idnya,1);
        $jmlrow = count($column);

        $formname = 'formgw';
        $urutan = 0;

        // ------------------------- tab Data Pekerja
        $css = '
            <!DOCTYPE html>
                <html lang="en">
                <style>
                    *
                    {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: Arial, Helvetica, sans-serif;
                    }
                     
                    body
                    {
                        background-color: black;
                    }
                     
                    .badan
                    {
                        width: 100%;
                        margin: 35px auto;
                        background-color: white;
                        padding: 20px;
                        overflow: hidden;
                    }
                     
                    .badan h2
                    {
                        color: #000066;
                        border-bottom: 1px solid gainsboro;
                        margin: 5px;
                        margin-bottom: 13px;
                    }
                     
                    .list-produk
                    {
                        border: 1px solid gainsboro;
                        padding: 10px;
                        float: left;
                        width: 375px;
                        height: 350px;
                        margin: 5px;
                    }
                     
                    .list-produk-close
                    {
                        border: 1px solid gainsboro;
                        padding: 10px;
                        float: left;
                        width: 350px;
                        height: 300px;
                        margin: 5px;
                        background-color: red;
                    }
                     
                    .list-produk:hover
                    {
                        transition-duration: 700ms;
                        box-shadow: 5px 5px gainsboro;
                    }
                     
                    .list-produk img
                    {
                        // width: 100%;
                        width: 50px;
                        height: 50px;
                        display: block;
                        margin-bottom: 5px;
                    }
                     
                    .list-produk h4
                    {
                        color: crimson;
                        text-align: left;
                        margin-bottom: 5px;
                    }
                     
                    list-produk h5
                    {
                        color: #808080;
                        text-align: left;
                        margin-bottom: 5px;
                    }
                     
                    .tombol
                    {
                        text-decoration: none;
                        border-radius: 7px;
                        padding: 7px;
                        display: block;
                        float: left;
                        width: 45%;
                        margin: 4px;
                        text-align: center;
                        color: white;
                    }
                     
                    .tombol:hover
                    {
                        background-color: #00cccc;
                        transition-duration: 700ms;
                    }
                     
                    .tombol-detail
                    {
                        background-color: green;
                    }
                     
                    .tombol-beli
                    {
                        background-color: crimson;
                        width: 100%;
                    }

                    .tombol-beli-disabled
                    {
                        cursor: not-allowed;
                        background-color: rgb(229, 229, 229) !important;
                        pointer-events:none;
                        width: 100%;
                    }

                    #tombol
                    {
                        text-decoration: none;
                        border-radius: 7px;
                        padding: 7px;
                        display: block;
                        float: left;
                        width: 100%;
                        margin: 4px;
                        text-align: center;
                        color: white;
                        background-color: #000066;
                        cursor: not-allowed;
                        pointer-events:none;
                    }
                     
                    #tombol:hover
                    {
                        background-color: black;
                        transition-duration: 700ms;
                    }
                     
                </style>
        ';

        // ----------------------------------- Tab Lamaran Aktif ---------------------------- //
        $content ='
            <div class="badan">
                <h2>Daftar Lamaran Aktif Anda</h2>
                 
        ';

        $column = $this->m_pekerja->getApplayJob($idnya,1);
        $jmlrow = count($column);

        // print_r($column);
        $idpekerja = '';
        $idjobappl = '';
        $i=0;
        foreach($column as $row){
            $IDAPPL = $row['IDAPPL'];
            $IDPKRJ = $row['IDPKRJ'];
            $COMIDN = $row['COMIDN'];
            $COMPNY = $row['COMPNY'];
            $TITLES = $row['TITLES'];
            $TYPESS = $row['TYPESS'];
            $STATUS = $row['STATUS'];
            $SALMIN = $row['SALMIN'];
            $SALMAX = $row['SALMAX'];
            $EXPDAT = $row['EXPDAT'];
            $LOGOSS = $row['LOGOSS'];
            $CVIEWS = $row['CVIEWS'];
            $NOMJOB = $row['JOB_NOMJOB'];
            
            $btn = '<a class="tombol tombol-beli" href="lamaran/hapus_lamaran/'.$IDAPPL.'"><b>Hapus Lamaran</b></a>';
            $color = 'style=color:#339933;font-weight:900;';
            
            // if($EXPDAT > date('Y-m-d')){
                if($IDAPPL != $idjobappl && $EXPDAT > date('Y-m-d')){
                    $content .='
                                 
                        <div class="list-produk">
                            <img src="'.base_url().'assets/documents/upload/client/'.$COMIDN.'/'.$LOGOSS.'" alt="'.$COMPNY.'">
                 
                            <h4>'.$COMPNY.'</h4>
                            <h5>Job No. <b>'.$NOMJOB.'</b></h5>
                            <h5>'.$TITLES.'</h5>
                            <h5>'.$TYPESS.'</h5>
                            <h5>Rp. '.$SALMIN.' - '.$SALMAX.'</h5>
                            <h5 '.$color.'><b>'.$STATUS.'</b></h5>
                            <h5>Berlaku sampai '.$EXPDAT.'</h5>
                 
                            <a class="fa fa-bell" id="tombol" href="#">&nbsp;Sudah <font size=3 style="color:orange;width:100px;">'.$CVIEWS.'</font> kali dilihat</a>

                            '.$btn.'
                        </div>
                    ';

                    $idjobappl = $IDAPPL;
                    $i++;
                }
            // }

        }

        $content .='
                    </div>
            </html>
        ';
        
        $html = "
            ".$css."
            <div class=row>
                <div class='col-xs-18 col-md-12'>".$content."</div>
            </div>
        ";
        
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'udf', 'style'=>'padding:0px 25px 150px 25px;', 'value'=> $html);

        // ----------------------------------- Tab Lamaran Aktif ---------------------------- //
        $content2 ='
                    <div class="badan">
                        <h2>Daftar Semua Lamaran Anda</h2>
        ';

        $column = $this->m_pekerja->getApplayJob($idnya,2);
        $jmlrow = count($column);
        
        // print_r($column);
        $idpekerja = '';
        $idjobappl = '';
        $i=0;
        foreach($column as $row){
            $IDAPPL = $row['IDAPPL'];
            $COMIDN = $row['COMIDN'];
            $COMPNY = $row['COMPNY'];
            $TITLES = $row['TITLES'];
            $TYPESS = $row['TYPESS'];
            $STATUS = $row['STATUS'];
            $SALMIN = $row['SALMIN'];
            $SALMAX = $row['SALMAX'];
            $EXPDAT = $row['EXPDAT'];
            $LOGOSS = $row['LOGOSS'];
            $CVIEWS = $row['CVIEWS'];
            $JOBSTS = $row['JOBSTS'];
            $NOMJOB = $row['JOB_NOMJOB'];
            
            if($EXPDAT > date('Y-m-d')){
                if($STATUS == 'SUDAH TUTUP'){
                    $btn = '<a class="tombol tombol-beli-disabled" href="#" disbaled><b>Hapus Lamaran</b></a>';
                }else{
                    $btn = '<a class="tombol tombol-beli" href="lamaran/hapus_lamaran/'.$IDAPPL.'">Hapus Lamaran</a>';
                }
                
                if($STATUS == 'SUDAH TUTUP'){
                    $color = 'style=color:red;font-weight: 900;';
                }else{
                    $color = 'style=color:#339933;font-weight: 900;';
                }
            }else{
                $color = 'style=color:red;font-weight: 900;';
                $btn = '<a class="tombol tombol-beli-disabled" href="#" disbaled><b>Hapus Lamaran</b></a>';
                $STATUS = 'MASA BERLAKU SUDAH HABIS';
            }
            
            // if($EXPDAT > date('Y-m-d')){
                if($IDAPPL != $idjobappl){
                    $content2 .='
                                 
                        <div class="list-produk">
                            <img src="'.base_url().'assets/documents/upload/client/'.$COMIDN.'/'.$LOGOSS.'" alt="'.$COMPNY.'">
                 
                            <h4>'.$COMPNY.'</h4>
                            <h5>Job No. <b>'.$NOMJOB.'</b></h5>
                            <h5>'.$TITLES.'</h5>
                            <h5>'.$TYPESS.'</h5>
                            <h5>Rp. '.$SALMIN.' - '.$SALMAX.'</h5>
                            <h5 '.$color.'><b>'.$STATUS.'</b></h5>
                            <h5>Berlaku sampai '.$EXPDAT.'</h5>
                 
                            <a class="fa fa-bell" id="tombol" href="#">Sudah <font size=3 style="color:orange">'.$CVIEWS.'</font> kali dilihat</a>
                            '.$btn.'
                        </div>
                    ';

                    $idjobappl = $IDAPPL;
                    $i++;
                }
            // }
        }

        $content2 .='
                    </div>
            </html>
        ';
        
        $html2 = "
            ".$css."
            <div class=row>
                <div class='col-xs-18 col-md-12'>".$content2."</div>
            </div>
        ";
        
        $arrTable[] = array('group'=>2, 'urutan'=>$urutan++, 'type'=> 'udf', 'style'=>'padding:0px 25px 150px 25px;', 'value'=> $html2);

        $formname = 'formgw';
        $formcommand = "/save/pekerja/pekerja";
        $button = "";
        $arrForm =
          array(
            'type'=>$type,
            'param'=>$idnya,
            'arrTable'=>$arrTable,
            'status'=> isset($status) ? $status : "",
            'width' => '100%',
            'height' =>'100%',
            'formcommand'=>$formcommand,
            'modul' => $this->modul,
            // 'source'=>'app',
            'ftinggi' => '100%',
            'createtab'=>true,
            'tabname'=> array(
                '1'=>'Lamaran Aktif',
                '2'=>'Semua Lamaran'
            )
         );
        
        // $arrButton = array(
        // "save"=>array("Save", "jvSave()","success","save")
        // );
        $arrButton = array();

        $script = "
        <script>
            $(document).ready(function(){
                $('#txtBDLAIN').hide();
                $('#cmbMNTBDG').bind('change',function(data){
                    var pkrjid = $('#cmbMNTBDG').val();
                    // alert(pkrjid);
                    if(pkrjid == 14){
                        // alert('changing');
                        $('#txtBDLAIN').show();
                    }else{
                        $('#txtBDLAIN').hide();
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

    function tagLogins(){
        $table = 'T_MAS_USERSS';
        $idnya = 'USR_IDENTS';

        $fields = array(
            'id'=>$idnya,
            'field'=>'USR_LOGINS',
            'where'=>'USR_LOGINS',
            'disabled'=>FALSE
        );
        $this->db->where('USR_ACTIVE',1);
        $this->db->where('USR_LEVELS',2);
        $this->db->where('USR_MENUID',2);
        $this->db->where('USR_TYPESS',2);
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

    function hapus_lamaran($IDENTS){        
        $input = array(
            'APP_STATUS' => 2
        );

        $this->crud->useTable('T_TRN_APPLYJ');
        $this->crud->save($input, array('APP_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        $redirect = '/pekerja/lamaran';

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

        $this->crud->useTable('T_MAS_PEKRJA');
        $this->crud->delete_builder(array('PKR_IDENTS'=> $IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}