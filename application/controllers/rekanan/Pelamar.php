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
        $this->load->model(array('m_pekerja','m_client','m_jconnect'));
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

        // $column = $this->m_pekerja->getApplayJob($param,1);
        // $jmlrow = count($column);

        $formname = 'formgw';
        $urutan = 0;

        // ------------------------- tab Data Pekerja
        $css = '
            <!DOCTYPE html>
                <html lang="en">
                <style>
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: Arial, Helvetica, sans-serif;
                    }
                    body {
                        background-color: black;
                    }
                    .badan {
                        width: 100%;
                        margin: 35px auto;
                        background-color: white;
                        padding: 20px;
                        overflow: hidden;
                    }
                    .badan h2 {
                        color: #ff0066;
                        border-bottom: 1px solid gainsboro;
                        margin: 5px;
                        margin-bottom: 13px;
                    }
                    .list-produk {
                        border: 1px solid gainsboro;
                        padding: 10px;
                        float: left;
                        width: 300px;
                        height: 390px;
                        margin: 5px;
                    }
                    .list-produk:hover {
                        transition-duration: 700ms;
                        box-shadow: 5px 5px gainsboro;
                    }
                    .list-produk img {
                        // width: 100%;
                        width: 50px;
                        height: 50px;
                        display: block;
                        margin-bottom: 5px;
                    }
                    .list-produk h4 {
                        color: crimson;
                        text-align: left;
                        margin-bottom: 5px;
                    }
                    list-produk h5 {
                        color: #808080;
                        text-align: left;
                        margin-bottom: 5px;
                    }
                    .tombol {
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
                    .tombol:hover {
                        // background-color: black;
                        background-color: #000066;
                        transition-duration: 700ms;
                    }
                    .tombol-detail {
                        background-color: green;
                    } 
                    .tombol-beli {
                        background-color: crimson;
                        cursor: pointer;
                    }
                    .tombol-beli-disabled {
                        cursor: not-allowed;
                        background-color: rgb(229, 229, 229) !important;
                        color: #000000;
                        pointer-events:none;
                    }
                    .pindah {
                        text-decoration: none;
                        border-radius: 7px;
                        padding: 7px;
                        display: block;
                        float: left;
                        width: 93%;
                        margin: 4px;
                        text-align: center;
                        color: white;
                    }
                    .tombol-update
                    {
                        background-color: #000066;
                        cursor: allowed;
                    }
                </style>
        ';

        // ----------------------------------- START Tab Semua Pelamar ---------------------------- //
        $jobnya = 0;
        $content1 ='
            <div class="badan">
                <h2>Semua Pelamar</h2>
        ';
        $arrStatus = array('0'=>'Pindahkan','2'=>'Wawancara','3'=>'Terpilih','4'=>'Tidak sesuai');

        $column = $this->m_client->getApplayJob($param,0,$jobnya);
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
                    $btn = '<a class="tombol tombol-beli" onclick="jvDelete('.$IDENTS.');">Tidak Sesuai</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }else{
                    $btn = '<a class="tombol tombol-beli-disabled" href="#" disbaled>Tidak Sesuai</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }
            }else{
                $btn = '<a class="tombol tombol-beli-disabled" href="#" disbaled>Tidak Sesuai</a>';
                $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih = '';
            if($EXPRNC == 6){
                $lebih = '>';
            }
            
            if($NOMJOB != $nomorjobs){
                $content1 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FOTOSS.'" alt="'.$PEKRJA.'">             
                        <h4>'.$PEKRJA.'</h4>
                        <h5>'.strtoupper($EXPNPT).' ('.$lebih.' '.$EXPRNC.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB.'</b></h5>
                        <h5><b>'.$TITLES.'</b></h5>
                        <h5>'.$TYPESS.'</h5>
                        <h5>'.$sts.'</h5>
                        
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ.',\''.$IDENTS.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FILECV.'" target="_blank">Lihat CV</a>
                        '.$btn.'
                        '.form_dropdown('cmbSTATUS', $arrStatus,'','class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS.')" style="text-align:center;"').'
                    </div>
                ';

                $idpekerja = $IDPKRJ;
                $nomorjobs = $NOMJOB;
                $i++;
            }

        }

        $content1 .='
                    </div>
            </html>
        ';
        
        $html1 = "
            ".$css."
            <div class=row>
                <div class='col-xs-18 col-md-12'>".$content1."</div>
            </div>
        ";
        
        $arrTable[] = array('group'=>1, 'urutan'=>$urutan++, 'type'=> 'udf', 'style'=>'padding:0px 25px 150px 25px;', 'value'=> $html1);
        // ----------------------------------- END Tab Semua Pelamar ---------------------------- //

        // ----------------------------------- START Tab Pelamar Aktif ---------------------------- //
        $content2 ='
            <div class="badan">
                <h2>Pelamar Aktif</h2>                 
        ';
        $arrStatus = array('0'=>'Pindahkan','2'=>'Wawancara','3'=>'Terpilih','4'=>'Tidak sesuai');

        $column = $this->m_client->getApplayJob($param,1,$jobnya);
        $jmlrow = count($column);

        // print_r($column);
        $idpekerja = '';
        $nomorjobs = '';
        $idjobappl = '';
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
                    $btn = '<a class="tombol tombol-beli" onclick="jvDelete('.$IDENTS.');">Tidak Sesuai</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }else{
                    $btn = '<a class="tombol tombol-beli-disabled" href="#" disabled>Tidak Sesuai</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }
            }else{
                $btn = '<a class="tombol tombol-beli-disabled" href="#" disabled>Tidak Sesuai</a>';
                $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih = '';
            if($EXPRNC == 6){
                $lebih = '>';
            }
            
            if($NOMJOB != $nomorjobs){
                $content2 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FOTOSS.'" alt="'.$PEKRJA.'">             
                        <h4>'.$PEKRJA.'</h4>
                        <h5>'.strtoupper($EXPNPT).' ('.$lebih.' '.$EXPRNC.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB.'</b></h5>
                        <h5><b>'.$TITLES.'</b></h5>
                        <h5>'.$TYPESS.'</h5>
                        <h5>'.$sts.'</h5>
             
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ.',\''.$IDENTS.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FILECV.'" target="_blank">Lihat CV</a>
                        '.$btn.'
                        '.form_dropdown('cmbSTATUS', $arrStatus,'','class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS.')" style="text-align:center;"').'
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
        // ----------------------------------- END Tab Pelamar Aktif ---------------------------- //

        // ----------------------------------- START Tab Aktif ---------------------------- //
        $content3 ='
            <div class="badan">
                <h2>Wawancara</h2>
        ';
        $arrStatus = array('0'=>'Pindahkan','3'=>'Terpilih','4'=>'Tidak sesuai');

        $column = $this->m_client->getApplayJob($param,2,$jobnya);
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
                if($row['APP_STATUS'] == '3'){
                    $btn = '<a class="tombol tombol-beli" onclick="jvInterview('.$IDENTS.');">Wawancara</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }else{
                    $btn = '<a class="tombol tombol-beli-disabled" href="#" disabled>Wawancara</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }
            }else{
                $btn = '<a class="tombol tombol-beli-disabled" href="#" disabled>Wawancara</a>';
                $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih = '';
            if($EXPRNC == 6){
                $lebih = '>';
            }
            
            if($NOMJOB != $nomorjobs){
                $content2 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FOTOSS.'" alt="'.$PEKRJA.'">             
                        <h4>'.$PEKRJA.'</h4>
                        <h5>'.strtoupper($EXPNPT).' ('.$lebih.' '.$EXPRNC.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB.'</b></h5>
                        <h5><b>'.$TITLES.'</b></h5>
                        <h5>'.$TYPESS.'</h5>
                        <h5>'.$sts.'</h5>
             
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ.',\''.$IDENTS.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FILECV.'" target="_blank">Lihat CV</a>
                        '.$btn.'
                        '.form_dropdown('cmbSTATUS', $arrStatus,'','class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS.')" style="text-align:center;"').'
                    </div>
                ';

                $idpekerja = $IDPKRJ;
                $nomorjobs = $NOMJOB;
                $i++;
            }
        }

        $content3 .='
                </div>
            </html>
        ';
        
        $html3 = "
            ".$css."
            <div class=row>
                <div class='col-xs-18 col-md-12'>".$content3."</div>
            </div>
        ";

        $arrTable[] = array('group'=>3, 'urutan'=>$urutan++, 'type'=> 'udf', 'style'=>'padding:0px 25px 150px 25px;', 'value'=> $html3);
        // ----------------------------------- END Tab Aktif ---------------------------- //

        // ----------------------------------- START Tab Wawancara ---------------------------- //
        $content4 ='
            <div class="badan">
                <h2>Terpilih</h2>
        ';
        $arrStatus = array('0'=>'Pindahkan','2'=>'Wawancara','4'=>'Tidak sesuai');

        $column = $this->m_client->getApplayJob($param,3,$jobnya);
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
                if($row['APP_STATUS'] == '3'){
                    $btn = '<a class="tombol tombol-beli" onclick="jvInterview('.$IDENTS.');">Wawancara</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }else{
                    $btn = '<a class="tombol tombol-beli-disabled" href="#" disabled>Wawancara</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }
            }else{
                $btn = '<a class="tombol tombol-beli-disabled" href="#" disabled>Wawancara</a>';
                $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih = '';
            if($EXPRNC == 6){
                $lebih = '>';
            }
            
            if($NOMJOB != $nomorjobs){
                $content4 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FOTOSS.'" alt="'.$PEKRJA.'">             
                        <h4>'.$PEKRJA.'</h4>
                        <h5>'.strtoupper($EXPNPT).' ('.$lebih.' '.$EXPRNC.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB.'</b></h5>
                        <h5><b>'.$TITLES.'</b></h5>
                        <h5>'.$TYPESS.'</h5>
                        <h5>'.$sts.'</h5>
             
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ.',\''.$IDENTS.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FILECV.'" target="_blank">Lihat CV</a>
                        '.$btn.'
                        '.form_dropdown('cmbSTATUS', $arrStatus,'','class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS.')" style="text-align:center;"').'
                    </div>
                ';

                $idpekerja = $IDPKRJ;
                $nomorjobs = $NOMJOB;
                $i++;
            }
        }

        $content4 .='
                </div>
            </html>
        ';
        
        $html4 = "
            ".$css."
            <div class=row>
                <div class='col-xs-18 col-md-12'>".$content4."</div>
            </div>
        ";

        $arrTable[] = array('group'=>4, 'urutan'=>$urutan++, 'type'=> 'udf', 'style'=>'padding:0px 25px 150px 25px;', 'value'=> $html4);
        // ----------------------------------- END Tab Pelamar Wawancara ---------------------------- //

        // ----------------------------------- START Tab Pelamar Terpilih ---------------------------- //
        $content5 ='
            <div class="badan">
                <h2>Tidak Sesuai</h2>
        ';
        $arrStatus = array('0'=>'Pindahkan','2'=>'Wawancara','3'=>'Terpilih');

        $column = $this->m_client->getApplayJob($param,4,$jobnya);
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
                if($row['APP_STATUS'] == '3'){
                    $btn = '<a class="tombol tombol-beli" onclick="jvInterview('.$IDENTS.');">Wawancara</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }else{
                    $btn = '<a class="tombol tombol-beli-disabled" href="#" disabled>Wawancara</a>';
                    $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                }
            }else{
                $btn = '<a class="tombol tombol-beli-disabled" href="#" disabled>Wawancara</a>';
                $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih = '';
            if($EXPRNC == 6){
                $lebih = '>';
            }
            
            if($NOMJOB != $nomorjobs){
                $content5 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FOTOSS.'" alt="'.$PEKRJA.'">             
                        <h4>'.$PEKRJA.'</h4>
                        <h5>'.strtoupper($EXPNPT).' ('.$lebih.' '.$EXPRNC.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB.'</b></h5>
                        <h5><b>'.$TITLES.'</b></h5>
                        <h5>'.$TYPESS.'</h5>
                        <h5>'.$sts.'</h5>
             
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ.',\''.$IDENTS.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ.'/'.$FILECV.'" target="_blank">Lihat CV</a>
                        '.$btn.'
                        '.form_dropdown('cmbSTATUS', $arrStatus,'','class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS.')" style="text-align:center;"').'
                    </div>
                ';

                $idpekerja = $IDPKRJ;
                $nomorjobs = $NOMJOB;
                $i++;
            }
        }

        $content5 .='
                </div>
            </html>
        ';
        
        $html5 = "
            ".$css."
            <div class=row>
                <div class='col-xs-18 col-md-12'>".$content5."</div>
            </div>
        ";

        $arrTable[] = array('group'=>5, 'urutan'=>$urutan++, 'type'=> 'udf', 'style'=>'padding:0px 25px 150px 25px;', 'value'=> $html5);
        // ----------------------------------- END Tab Pelamar Terpilih ---------------------------- //

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
            'tabheight' => '95%',
            'showToolbar'=>true,
            'createtab'=>true,
            'tabname'=> array(
                '1'=>'Semua Pelamar',
                '2'=>'Pelamar Aktif',
                '3'=>'Wawancara',
                '4'=>'Terpilih',
                '5'=>'Tidak Sesuai'
            )
         );
        
        // $arrButton = array(
        // "save"=>array("Save", "jvSave()","success","save")
        // );
        $arrButton = array();

        // $arrStatus = array('0'=>'Pindahkan','2'=>'Tidak Aktif','3'=>'Wawancara','4'=>'Tidak Sesuai','5'=>'Terpilih');
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

            function jvChangeStatus(id){
                var status = $('#cmbSTATUS').val();
                var prm = {};                
                prm['idents'] = id;
                prm['status'] = status;

                if(status == 4){
                    jvDelete(id);
                }else{
                    if(confirm('Kandidat akan di pindah?')){
                        $.post('/rekanan/pelamar/StatusUpdate',prm,function(rebound){
                            if(rebound){
                                alert(rebound);
                                location.reload();
                            }
                        });
                    }
                }
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
        
        $datanya = $this->m_jconnect->getClientID($loginid);
        // echo "<br><br>";print_r($datanya);

        foreach($datanya as $row){
            $idclnt = $row->CLI_IDENTS;
        }

        $formnamefilter = 'formfiltergw';
        $urutannya=0;

        $arrJobsClient = $this->m_client->getComboJobsClients($idclnt);

        $arrTableFilter[] = array('group'=>6, 'urutan'=>$urutannya++, 'type'=> 'cmb', 'namanya' =>'txtJOBNYA', 'label'=>'Lowongan', 'size'=>'350','value'=>'','option'=>$arrJobsClient);

        $arrFormFilter =
            array(
                'arrTable'=>$arrTableFilter,
                'modul' => $this->modul,
                'nameForm' => $formnamefilter,
                'form_create'=>true,
                'formcommand' => '',
                'ftinggi' => '100%'
            );

        $arrButtonFilter = array(
                "Process"=>array("Lihat", "jvProcess()","success","Lihat","fa-cogs")
        );
        
        $content = generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButtonFilter));
        $content .= generateForm($arrFormFilter,false);

        $content .=  generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton),"width:'100%',");      
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

    function StatusUpdate(){
        $IDENTS = $this->input->post('idents');
        $STATUS = $this->input->post('status');

        $value = array(
            'APP_STATUS'=>$STATUS,
            'APP_USRUPD'=>$this->userid,
            'APP_DATUPD'=>$this->datesave
        );

        $this->crud->useTable('T_TRN_APPLYJ');
        $this->crud->save($value, array('APP_IDENTS'=>$IDENTS));
        $this->crud->unsetMe();

        if($IDENTS != '' || $IDENTS != 0){
            echo "Data berhasil dipindahkan";
        }else{
            echo "Data gagal dipindahkan";
        }
        $this->crud->unsetMe();
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