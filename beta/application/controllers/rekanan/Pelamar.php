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
                <form action="#" method="post">
                    <input type="text" name="hidJOBNYA" id="hidJOBNYA">
                </form>
        ';


        $jobnya = isset($_POST['hidJOBNYA']) ? $_POST['hidJOBNYA'] : 0;
        // ----------------------------------- START Tab Semua Pelamar ---------------------------- //
        $content1 ='
            <div class="badan">
        ';
                // <h2>Semua Pelamar</h2>
        $arrStatus1 = array('0'=>'--- Pindahkan ---','2'=>'Wawancara','3'=>'Terpilih','4'=>'Tidak sesuai');

        $column1 = $this->m_client->getApplayJob($param,0,$jobnya);
        $jmlrow1 = count($column1);

        // print_r($column);
        $idpekerja1 = '';
        $nomorjobs1 = '';
        $i=0;
        foreach($column1 as $row1){
            $IDPKRJ1 = $row1['IDPKRJ'];
            $PEKRJA1 = $row1['PEKRJA'];
            $TGLLHR1 = $row1['TMPTGLLHR'];
            $FOTOSS1 = $row1['FOTOSS'];
            $JNSKLM1 = $row1['JNSKLM'];
            $EXPRNC1 = $row1['EXPRNC'];
            $EXPNPT1 = $row1['EXPNPT'];
            $EXPBDG1 = $row1['EXPBDG'];
            $NOMRHP1 = $row1['NOMRHP'];
            $FILECV1 = $row1['FILECV'];
            $IDENTS1 = $row1['IDENTS'];
            $EXPDAT1 = $row1['EXPDAT'];
            $TITLES1 = $row1['TITLES'];
            $TYPESS1 = $row1['TYPESS'];
            $NOMJOB1 = $row1['JOB_NOMJOB'];
            $STATUS1 = $row1['STATUS'];
            $COMPNY1 = $row1['COMPNY'];
            
            if($EXPDAT1 > date('Y-m-d')){
                $btn1 = '<a class="tombol tombol-beli" onclick="jvDelete('.$IDENTS1.');">Tidak Sesuai</a>';
                $sts1 = 'Berlaku sampai <b>'.$EXPDAT1.'</b>';
            }else{
                $btn1 = '<a class="tombol tombol-beli-disabled" href="#" disbaled>Tidak Sesuai</a>';
                $sts1 = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih1 = '';
            if($EXPRNC1 == 6){
                $lebih1 = '>';
            }
            
            if($NOMJOB1 != $nomorjobs1){
                $content1 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ1.'/'.$FOTOSS1.'" alt="'.$PEKRJA1.'">             
                        <h4>'.$PEKRJA1.'</h4>
                        <h5>'.strtoupper($EXPNPT1).' ('.$lebih1.' '.$EXPRNC1.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG1.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB1.'</b></h5>
                        <h5><b>'.$TITLES1.'</b></h5>
                        <h5>'.$TYPESS1.'</h5>
                        <h5>'.$sts1.'</h5>
                        
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ1.',\''.$IDENTS1.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ1.'/'.$FILECV1.'" target="_blank">Lihat CV</a>
                        '.$btn1.'
                        '.form_dropdown('cmbSTATUS', $arrStatus1,'','id="cmbSTATUS" class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS1.')" style="text-align:center;"').'
                    </div>
                ';

                $idpekerja1 = $IDPKRJ1;
                $nomorjobs1 = $NOMJOB1;
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

// ------------------------------------------------------------------------------------------------------------------------------------------ //

        // ----------------------------------- START Tab Pelamar Aktif ---------------------------- //
        $content2 ='
            <div class="badan">
        ';
                // <h2>Pelamar Aktif</h2>
        $arrStatus2 = array('0'=>'--Pindahkan--','2'=>'Wawancara','3'=>'Terpilih','4'=>'Tidak sesuai');

        $column2 = $this->m_client->getApplayJob($param,1,$jobnya);
        $jmlrow2 = count($column2);

        // print_r($column);
        $idpekerja2 = '';
        $nomorjobs2 = '';
        $i=0;
        foreach($column2 as $row2){
            $IDPKRJ2 = $row2['IDPKRJ'];
            $PEKRJA2 = $row2['PEKRJA'];
            $TGLLHR2 = $row2['TMPTGLLHR'];
            $FOTOSS2 = $row2['FOTOSS'];
            $JNSKLM2 = $row2['JNSKLM'];
            $EXPRNC2 = $row2['EXPRNC'];
            $EXPNPT2 = $row2['EXPNPT'];
            $EXPBDG2 = $row2['EXPBDG'];
            $NOMRHP2 = $row2['NOMRHP'];
            $FILECV2 = $row2['FILECV'];
            $CVIEWS2 = $row2['CVIEWS'];
            $IDENTS2 = $row2['IDENTS'];
            $EXPDAT2 = $row2['EXPDAT'];
            $TITLES2 = $row2['TITLES'];
            $TYPESS2 = $row2['TYPESS'];
            $NOMJOB2 = $row2['JOB_NOMJOB'];
            $STATUS2 = $row2['STATUS'];
            $COMPNY2 = $row2['COMPNY'];

            if($EXPDAT2 > date('Y-m-d')){
                $btn2 = '<a class="tombol tombol-beli" onclick="jvDelete('.$IDENTS2.');">Tidak Sesuai</a>';
                $sts2 = 'Berlaku sampai <b>'.$EXPDAT2.'</b>';
            }else{
                $btn2 = '<a class="tombol tombol-beli-disabled" href="#" disabled>Tidak Sesuai</a>';
                $sts2 = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih2 = '';
            if($EXPRNC2 == 6){
                $lebih2 = '>';
            }
            
            if($NOMJOB2 != $nomorjobs2){
                $content2 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ2.'/'.$FOTOSS2.'" alt="'.$PEKRJA2.'">             
                        <h4>'.$PEKRJA2.'</h4>
                        <h5>'.strtoupper($EXPNPT2).' ('.$lebih2.' '.$EXPRNC2.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG2.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB2.'</b></h5>
                        <h5><b>'.$TITLES2.'</b></h5>
                        <h5>'.$TYPESS2.'</h5>
                        <h5>'.$sts2.'</h5>
             
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ2.',\''.$IDENTS2.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ2.'/'.$FILECV2.'" target="_blank">Lihat CV</a>
                        '.$btn2.'
                        '.form_dropdown('cmbSTATUS', $arrStatus2,'','id="cmbSTATUS" class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS2.')" style="text-align:center;"').'
                    </div>
                ';

                $idpekerja2 = $IDPKRJ2;
                $nomorjobs2 = $NOMJOB2;
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

// ------------------------------------------------------------------------------------------------------------------------------------------ //

        // ----------------------------------- START Tab Wawancara ---------------------------- //
        $content3 ='
            <div class="badan">
        ';
                // <h2>Wawancara</h2>
        $arrStatus3 = array('0'=>'--Pindahkan--','1'=>'Perlu Diproses','3'=>'Terpilih','4'=>'Tidak sesuai');

        $column3 = $this->m_client->getApplayJob($param,2,$jobnya);
        $jmlrow3 = count($column3);

        // echo "<br>";print_r($column3);
        $idpekerja3 = '';
        $nomorjobs3 = '';
        $i=0;
        foreach($column3 as $row3){
            $IDPKRJ3 = $row3['IDPKRJ'];
            $PEKRJA3 = $row3['PEKRJA'];
            $TGLLHR3 = $row3['TMPTGLLHR'];
            $FOTOSS3 = $row3['FOTOSS'];
            $JNSKLM3 = $row3['JNSKLM'];
            $EXPRNC3 = $row3['EXPRNC'];
            $EXPNPT3 = $row3['EXPNPT'];
            $EXPBDG3 = $row3['EXPBDG'];
            $NOMRHP3 = $row3['NOMRHP'];
            $FILECV3 = $row3['FILECV'];
            $CVIEWS3 = $row3['CVIEWS'];
            $IDENTS3 = $row3['IDENTS'];
            $EXPDAT3 = $row3['EXPDAT'];
            $TITLES3 = $row3['TITLES'];
            $TYPESS3 = $row3['TYPESS'];
            $NOMJOB3 = $row3['JOB_NOMJOB'];
            $STATUS3 = $row3['STATUS'];
            $COMPNY3 = $row3['COMPNY'];

            if($EXPDAT3 > date('Y-m-d')){
                $btn3 = '<a class="tombol tombol-beli" onclick="jvInterview('.$IDENTS3.');">Wawancara</a>';
                $sts3 = 'Berlaku sampai <b>'.$EXPDAT3.'</b>';
            }else{
                $btn3 = '<a class="tombol tombol-beli-disabled" href="#" disabled>Wawancara</a>';
                $sts3 = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih3 = '';
            if($EXPRNC3 == 6){
                $lebih3 = '>';
            }
            
            if($NOMJOB3 != $nomorjobs3){
                $content3 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ3.'/'.$FOTOSS3.'" alt="'.$PEKRJA3.'">             
                        <h4>'.$PEKRJA3.'</h4>
                        <h5>'.strtoupper($EXPNPT3).' ('.$lebih3.' '.$EXPRNC3.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG3.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB3.'</b></h5>
                        <h5><b>'.$TITLES3.'</b></h5>
                        <h5>'.$TYPESS3.'</h5>
                        <h5>'.$sts3.'</h5>
                        
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ3.',\''.$IDENTS3.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ3.'/'.$FILECV3.'" target="_blank">Lihat CV</a>
                        '.$btn3.'
                        '.form_dropdown('cmbSTATUS', $arrStatus3,'','id="cmbSTATUS" class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS3.')" style="text-align:center;"').'
                    </div>
                ';

                $idpekerja3 = $IDPKRJ3;
                $nomorjobs3 = $NOMJOB3;
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

// ------------------------------------------------------------------------------------------------------------------------------------------ //

        // ----------------------------------- START Tab Wawancara ---------------------------- //
        $content4 ='
            <div class="badan">
        ';
                // <h2>Terpilih</h2>
        $arrStatus4 = array('0'=>'--Pindahkan--','1'=>'Perlu Diproses','2'=>'Wawancara','4'=>'Tidak sesuai');

        $column4 = $this->m_client->getApplayJob($param,3,$jobnya);
        $jmlrow4 = count($column4);

        // print_r($column);
        $idpekerja4 = '';
        $nomorjobs4 = '';
        $i=0;
        foreach($column4 as $row4){
            $IDPKRJ4 = $row4['IDPKRJ'];
            $PEKRJA4 = $row4['PEKRJA'];
            $TGLLHR4 = $row4['TMPTGLLHR'];
            $FOTOSS4 = $row4['FOTOSS'];
            $JNSKLM4 = $row4['JNSKLM'];
            $EXPRNC4 = $row4['EXPRNC'];
            $EXPNPT4 = $row4['EXPNPT'];
            $EXPBDG4 = $row4['EXPBDG'];
            $NOMRHP4 = $row4['NOMRHP'];
            $FILECV4 = $row4['FILECV'];
            $CVIEWS4 = $row4['CVIEWS'];
            $IDENTS4 = $row4['IDENTS'];
            $EXPDAT4 = $row4['EXPDAT'];
            $TITLES4 = $row4['TITLES'];
            $TYPESS4 = $row4['TYPESS'];
            $NOMJOB4 = $row4['JOB_NOMJOB'];
            $STATUS4 = $row4['STATUS'];
            $COMPNY4 = $row4['COMPNY'];

            if($EXPDAT4 > date('Y-m-d')){
                $btn4 = '<a class="tombol tombol-beli" onclick="jvInterview('.$IDENTS4.');">Wawancara</a>';
                $sts4 = 'Berlaku sampai <b>'.$EXPDAT4.'</b>';
            }else{
                $btn4 = '<a class="tombol tombol-beli-disabled" href="#" disabled>Wawancara</a>';
                $sts4 = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih4 = '';
            if($EXPRNC4 == 6){
                $lebih4 = '>';
            }
            
            if($NOMJOB4 != $nomorjobs4){
                $content4 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ4.'/'.$FOTOSS4.'" alt="'.$PEKRJA4.'">             
                        <h4>'.$PEKRJA4.'</h4>
                        <h5>'.strtoupper($EXPNPT4).' ('.$lebih4.' '.$EXPRNC4.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG4.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB4.'</b></h5>
                        <h5><b>'.$TITLES4.'</b></h5>
                        <h5>'.$TYPESS4.'</h5>
                        <h5>'.$sts4.'</h5>
             
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ4.',\''.$IDENTS4.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ4.'/'.$FILECV4.'" target="_blank">Lihat CV</a>
                        '.$btn4.'
                        '.form_dropdown('cmbSTATUS', $arrStatus4,'cmbSTATUS','id="cmbSTATUS" class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS4.')" style="text-align:center;"').'
                    </div>
                ';

                $idpekerja4 = $IDPKRJ4;
                $nomorjobs4 = $NOMJOB4;
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

// ------------------------------------------------------------------------------------------------------------------------------------------ //

        // ----------------------------------- START Tab Pelamar Terpilih ---------------------------- //
        $content5 ='
            <div class="badan">
        ';
                // <h2>Tidak Sesuai</h2>
        $arrStatus5 = array('0'=>'--Pindahkan--','1'=>'Perlu Diproses','2'=>'Wawancara','3'=>'Terpilih');

        $column5 = $this->m_client->getApplayJob($param,4,$jobnya);
        $jmlrow5 = count($column5);

        // print_r($column);
        $idpekerja5 = '';
        $nomorjobs5 = '';
        $i=0;
        foreach($column5 as $row5){
            $IDPKRJ5 = $row5['IDPKRJ'];
            $PEKRJA5 = $row5['PEKRJA'];
            $TGLLHR5 = $row5['TMPTGLLHR'];
            $FOTOSS5 = $row5['FOTOSS'];
            $JNSKLM5 = $row5['JNSKLM'];
            $EXPRNC5 = $row5['EXPRNC'];
            $EXPNPT5 = $row5['EXPNPT'];
            $EXPBDG5 = $row5['EXPBDG'];
            $NOMRHP5 = $row5['NOMRHP'];
            $FILECV5 = $row5['FILECV'];
            $CVIEWS5 = $row5['CVIEWS'];
            $IDENTS5 = $row5['IDENTS'];
            $EXPDAT5 = $row5['EXPDAT'];
            $TITLES5 = $row5['TITLES'];
            $TYPESS5 = $row5['TYPESS'];
            $NOMJOB5 = $row5['JOB_NOMJOB'];
            $STATUS5 = $row5['STATUS'];
            $COMPNY  = $row5['COMPNY'];

            if($EXPDAT5 > date('Y-m-d')){
                $btn5 = '<a class="tombol tombol-beli" onclick="jvInterview('.$IDENTS5.');">Wawancara</a>';
                $sts5 = 'Berlaku sampai <b>'.$EXPDAT5.'</b>';
            }else{
                $btn5 = '<a class="tombol tombol-beli-disabled" href="#" disabled>Wawancara</a>';
                $sts5 = '<b>MASA BERLAKU SUDAH HABIS</b>';
            }
            $lebih5 = '';
            if($EXPRNC5 == 6){
                $lebih5 = '>';
            }
            
            if($NOMJOB5 != $nomorjobs5){
                $content5 .=' 
                    <div class="list-produk">
                        <img src="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ5.'/'.$FOTOSS5.'" alt="'.$PEKRJA5.'">             
                        <h4>'.$PEKRJA5.'</h4>
                        <h5>'.strtoupper($EXPNPT5).' ('.$lebih5.' '.$EXPRNC5.' Thn)</h5>
                        <h5>Bidang '.$EXPBDG5.'</h5>
                        <h5>-----------------------------------------------------------</h5>
                        <h5>Job No. <b>'.$NOMJOB5.'</b></h5>
                        <h5><b>'.$TITLES5.'</b></h5>
                        <h5>'.$TYPESS5.'</h5>
                        <h5>'.$sts5.'</h5>
             
                        <a class="tombol tombol-detail" onclick="jvCheckCounter('.$IDPKRJ5.',\''.$IDENTS5.'\');" href="'.base_url().'assets/documents/upload/pekerja/'.$IDPKRJ5.'/'.$FILECV5.'" target="_blank">Lihat CV</a>
                        '.$btn5.'
                        '.form_dropdown('cmbSTATUS', $arrStatus5,'cmbSTATUS','id="cmbSTATUS" class="pindah tombol-update" onChange="jvChangeStatus('.$IDENTS5.')" style="text-align:center;"').'
                    </div>
                ';

                $idpekerja5 = $IDPKRJ5;
                $nomorjobs5 = $NOMJOB5;
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
// ------------------------------------------------------------------------------------------------------------------------------------------ //

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
                '1'=>'Semua',
                '2'=>'Perlu Diproses',
                '3'=>'Wawancara',
                '4'=>'Terpilih',
                '5'=>'Tidak Sesuai'
            )
         );
        
        $arrButton = array();

        // $arrStatus = array('0'=>'Pindahkan','2'=>'Tidak Aktif','3'=>'Wawancara','4'=>'Tidak Sesuai','5'=>'Terpilih');
        $script = "
            <script>
                $(document).ready(function(){
                    $('#cmbJOBNYA').bind('change',function(data){
                        var jobnya = $('#cmbJOBNYA').val();
                        $('#hidJOBNYA').val(jobnya);
                    });
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
                    alert(status+'~'+id);
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
                
                function jvProcess(){
                    var jobnya = $('#cmbJOBNYA').val();
                    var hidjob = $('#hidJOBNYA').val();
                    // alert(jobnya);
                    // return;

                    var prm = {};
                    prm['jobnya'] = jobnya;

                    $.post('/rekanan/pelamar/updateJobs',prm,function(rebound){
                        if(rebound){
                            // alert(rebound);
                            location.reload();
                            $('#cmbJOBNYA option[value=hidjob]').attr('selected','selected');
                        }
                    });
                }
            </script>
        ";
        
        $datanya = $this->m_jconnect->getClientID($loginid);
        // echo "<br><br>";print_r($datanya);

        foreach($datanya as $row){
            $idclnt = $row->CLI_IDENTS;
        }

        $arrJobsClient = $this->m_client->getComboJobsClients($idclnt);
        
        $formnamefilter = 'formfiltergw';
        $urutannya=0;

        $arrTableFilter[] = array('group'=>6, 'urutan'=>$urutannya++, 'type'=> 'cmb', 'namanya' =>'cmbJOBNYA', 'label'=>'Lowongan', 'size'=>'350','value'=>'','option'=>$arrJobsClient);
        
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
        
        $content = $script;  
        $content .= generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButtonFilter));
        $content .= generateForm($arrFormFilter,false);

        $content .=  generateButton(array('posisi'=>'not','createToolbar'=>true,'button'=>$arrButton),"width:'100%',");      
        $content .= generateForm($arrForm,false);
        $content .= form_close();
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

    function updateJobs(){
        $jobnya = $this->input->post('jobnya');
        echo "Proses data Job $jobnya slesai di proses!";
        // return $jobnya;
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