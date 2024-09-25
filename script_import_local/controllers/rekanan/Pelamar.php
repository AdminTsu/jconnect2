<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelamar extends MY_Controller {
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
        $this->title = "Pelamar Kerja";
    }
    
    public function index(){
        $arrbread = array(
            array('link'=>'/home/welcome','text'=>'Beranda'),
            array('link'=>'#','text'=> 'Pelamar Kerja'),
        );
        $bc = generateBreadcrumb($arrbread);
        $this->_render('pages/home', $this->listLamaran(),'admin',$bc);
    }

    function listLamaran($type='edit'){
        $loginid = $this->loginid;
        $param = $loginid;
        $arrColumn = array(
            'COMPNY' =>'COMPNY',
            'TITLES' =>'TITLES',
            'STATUS' =>'STATUS',
            'SALMIN' =>'SALMIN',
            'SALMAX' =>'SALMAX',
            'EXPDAT' =>'EXPDAT'
        );

        $column = $this->m_pekerja->getApplayJob($param,1);
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
                        color: #ff0066;
                        border-bottom: 1px solid gainsboro;
                        margin: 5px;
                        margin-bottom: 13px;
                    }
                     
                    .list-produk
                    {
                        border: 1px solid gainsboro;
                        padding: 10px;
                        float: left;
                        width: 300px;
                        height: 400px;
                        margin: 5px;
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
                        background-color: black;
                        transition-duration: 700ms;
                    }
                     
                    .tombol-detail
                    {
                        background-color: green;
                    }
                     
                    .tombol-beli
                    {
                        background-color: crimson;
                        cursor: allowed;
                    }

                    .tombol-beli-disabled
                    {
                        cursor: not-allowed;
                        background-color: rgb(229, 229, 229) !important;
                        color: #000000;
                        pointer-events:none;
                    }
                </style>
        ';

        $content ='
                    <div class="badan">
                        <h2>Daftar Pelamar Aktif Anda</h2>
        ';

        $column = $this->m_client->getApplayJob($param,1);
        $jmlrow = count($column);

        // print_r($column);
        $idpekerja = '';
        $nomorjobs = '';
        $i=0;
        foreach($column as $row){
            $IDPKRJ = $row['IDPKRJ'];
            $PEKRJA = $row['PEKRJA'];
            $TMPTGLLHR = $row['TMPTGLLHR'];
            $FOTOSS = $row['FOTOSS'];
            $JNSKLM = $row['JNSKLM'];
            $EXPRNC = $row['EXPRNC'];
            $EXPNPT = $row['EXPNPT'];
            $EXPBDG = $row['EXPBDG'];
            $NOMRHP = $row['NOMRHP'];
            $FILECV = $row['FILECV'];
            $IDENTS = $row['IDENTS'];
            $EXPDAT = $row['EXPDAT'];
            $TITLES = $row['TITLES'];
            $TYPESS = $row['TYPESS'];
            $NOMJOB = $row['JOB_NOMJOB'];
            $STATUS = $row['STATUS'];
            $COMPNY = $row['COMPNY'];
            
            if($EXPDAT > date('Y-m-d')){
                if($row['APP_STATUS'] == '1'){
                    $btn = '<a class="tombol tombol-beli" onclick="jvDelete('.$IDENTS.');">Tolak Lamaran</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }else{
                    $btn = '<a class="tombol tombol-beli-disabled" href="#" disbaled>Tolak Lamaran</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }
            }else{
                $btn = '<a class="tombol tombol-beli-disabled" href="#" disbaled>Tolak Lamaran</a>';
                $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            
            if($NOMJOB != $nomorjobs){
                $content .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FOTOSS.'" alt="'.$PEKRJA.'">             
                        <h4>'.$PEKRJA.'</h4>
                        <h5>'.strtoupper($TMPTGLLHR).'</h5>
                        <h5>'.$JNSKLM.'</h5>
                        <h5>'.$NOMRHP.'</h5>
                        <h5>Pengalaman '.$EXPRNC.' Tahun</h5>
                        <h5>'.strtoupper($EXPNPT).'</h5>
                        <h5>Bidang '.$EXPBDG.'</h5><hr>
                        <h5>Job No. <b>'.$NOMJOB.'</b></h5>
                        <h5><b>'.$TITLES.'</b></h5>
                        <h5>'.$TYPESS.'</h5>
                        <h5>'.$sts.'</h5>
             
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ.',\''.$IDENTS.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FILECV.'" target="_blank">Lihat CV</a>
                        '.$btn.'
                    </div>
                ';

                $idpekerja = $IDPKRJ;
                $nomorjobs = $NOMJOB;
                $i++;
            }

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

        $content2 ='
                    <div class="badan">
                        <h2>Daftar Semua Pelamar Anda</h2>
                 
        ';

        $column = $this->m_client->getApplayJob($param,2);
        $jmlrow = count($column);

        // print_r($column);
        $idpekerja = '';
        $nomorjobs = '';
        $i=0;
        foreach($column as $row){
            $IDPKRJ = $row['IDPKRJ'];
            $PEKRJA = $row['PEKRJA'];
            $TMPTGLLHR = $row['TMPTGLLHR'];
            $FOTOSS = $row['FOTOSS'];
            $JNSKLM = $row['JNSKLM'];
            $EXPRNC = $row['EXPRNC'];
            $EXPNPT = $row['EXPNPT'];
            $EXPBDG = $row['EXPBDG'];
            $NOMRHP = $row['NOMRHP'];
            $FILECV = $row['FILECV'];
            $CVIEWS = $row['CVIEWS'];
            $IDENTS = $row['IDENTS'];
            $EXPDAT = $row['EXPDAT'];
            $TITLES = $row['TITLES'];
            $TYPESS = $row['TYPESS'];
            $NOMJOB = $row['JOB_NOMJOB'];
            $STATUS = $row['STATUS'];
            $COMPNY = $row['COMPNY'];

            if($EXPDAT > date('Y-m-d')){
                if($row['APP_STATUS'] == '1'){
                    $btn = '<a class="tombol tombol-beli" onclick="jvDelete('.$IDENTS.');">Tolak Lamaran</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }else{
                    $btn = '<a class="tombol tombol-beli-disabled" href="#" disbaled>Tolak Lamaran</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }
            }else{
                $btn = '<a class="tombol tombol-beli-disabled" href="#" disbaled>Tolak Lamaran</a>';
                $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            
            if($NOMJOB != $nomorjobs){
                $content2 .='
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FOTOSS.'" alt="'.$PEKRJA.'">             
                        <h4>'.$PEKRJA.'</h4>
                        <h5>'.strtoupper($TMPTGLLHR).'</h5>
                        <h5>'.$JNSKLM.'</h5>
                        <h5>'.$NOMRHP.'</h5>
                        <h5>Pengalaman '.$EXPRNC.' Tahun</h5>
                        <h5>'.strtoupper($EXPNPT).'</h5>
                        <h5>Bidang '.$EXPBDG.'</h5><hr>
                        <h5>Job No. <b>'.$NOMJOB.'</b></h5>
                        <h5><b>'.$TITLES.'</b></h5>
                        <h5>'.$TYPESS.'</h5>
                        <h5>'.$sts.'</h5>
             
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ.',\''.$IDENTS.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FILECV.'" target="_blank">Lihat CV</a>
                        '.$btn.'
                    </div>
                ';

                $idpekerja = $IDPKRJ;
                $nomorjobs = $NOMJOB;
                $i++;
            }
        }

        $content2 .='
                    </div>
            </html>
        ';
        // <a class="tombol tombol-detail" href="#">Detail</a>
        
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
            'param'=>$param,
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
                '1'=>'Pelamar Aktif',
                '2'=>'Semua Pelamar'
            )
         );
        
        // $arrButton = array(
        // "save"=>array("Save", "jvSave()","success","save")
        // );
        $arrButton = array();

        $script = "
        <script>
            $(document).ready(function(){
            });

            function jvCheckCounter(id,idappl){
                var prm = {};
                prm['idents'] = id;
                prm['idappl'] = idappl;
                // alert(id+'~'+filenya);return;

                $.post('/rekanan/pelamar/updateViewCounter',prm,function(hasil){
                    // alert(hasil);
                    location.reload();
                });
            }

            function jvDelete(id){
                // alert(id);return;
                var prm = {};
                prm['idents'] = id;
                if(confirm('Hapus Data?')){
                    $.post('/rekanan/pelamar/hapusCV',prm,function(rebound){
                        if(rebound){
                            alert(rebound);
                            location.reload();
                        }
                    });
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

    function updateViewCounter(){
        $idents = $this->input->post('idents');
        $idappl = $this->input->post('idappl');
        // echo "$idents ~ $filess";

        // $result = $this->m_sales->getUpdateCounter($idents);
        $sql =" 
            UPDATE T_TRN_APPLYJ a
            INNER JOIN (
              SELECT APP_IDENTS,APP_IDPKRJ,(APP_CVIEWS+1) CVIEWS
              FROM T_TRN_APPLYJ 
              WHERE APP_IDPKRJ = ".$idents." AND APP_IDENTS = ".$idappl."
            ) b ON a.APP_IDPKRJ = b.APP_IDPKRJ
            SET a.APP_CVIEWS = CVIEWS
            WHERE a.APP_IDPKRJ = ".$idents." AND a.APP_IDENTS = ".$idappl."
        ";

        $query = $this->db->query($sql);
        // $records = $query->result_array($query);

        // echo $this->db->last_query();
        // $this->common->debug_sql();
        // echo 'Terima kasih, Anda sedang melihat CV Kandidat kami.';
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

    function hapusCV(){
        $IDENTS = $this->input->post('idents');

        $value = array(
            'APP_STATUS'=>2,
            'APP_USRUPD'=>$this->userid,
            'APP_DATUPD'=>$this->datesave
        );

        $this->crud->useTable('T_TRN_APPLYJ');
        $this->crud->save($value, array('APP_IDENTS'=>$IDENTS));
        $this->crud->unsetMe();

        $value = array(
            'JOB_STATUS'=>2,
            'JOB_USRUPD'=>$this->userid,
            'JOB_DATUPD'=>$this->datesave
        );
        
        $this->crud->useTable('T_TRN_JOBPOS');
        $this->crud->save($value, array('JOB_IDENTS'=>$IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dihapus";
        }else{
            echo "Data gagal dihapus";
        }
        $this->crud->unsetMe();
    }
}