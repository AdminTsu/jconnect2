<?php
$levels = $this->session->userdata('USR_LEVELS');
$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_idents = $this->session->userdata('USR_IDENTS');

foreach($data as $row){
    $idclnt = isset($row['CLI_IDENTS']) ? $row['CLI_IDENTS'] : NULL;
}
?>
<!-- Right content -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>
<script>
$(document).ready(function(){
    $('#cmbCOMPNY').bind('change',function(data){
        var id = $('#cmbCOMPNY').val();
        $('#hidCOMPID').val(id);
        if(id != ''){
            $.post('/myjconnect_client/getDataCompany/' +id,function(data){
                var datanya = data.split('~');
                $('#txtCOMPNY').val(datanya[0]);
                $('#txtLCTION').val(datanya[2]);
                $('#txtBIDANG').val(datanya[3]);
            });
        }
    });

    $( function() {
        $( "#datEXPDAT" ).datepicker({
            dateFormat: "yy-mm-dd",
            showButtonPanel: true,
            todayHighlight: true,
            showTime: true,
            changeYear: true,
            changeMonth: true,
            inline: true
        });
    });
});

</script>

<!-- Right content -->
<?php
    //  ------------------------------------------------------ Lowongan ------------------------------- //
?>
<style>
/* Multi Tabs CSS Only by igniel.com */
.ignielMultiTab {
  border: 0;
  margin: 1.5rem 0;
  padding: 0;
}
.ignielMultiTab input, .ignielMultiTab .content div {
  display: none;
}
.ignielMultiTab label, .ignielMultiTab .content {
  border-style: solid;
  border-width: 1px;
}
.ignielMultiTab input:checked + label, .ignielMultiTab .content {
  border-color: #ddd;
}
.ignielMultiTab .label {
  display: flex;
  flex-wrap: nowrap;
  flex-direction: row;
  max-width: calc(100vw - 2.5rem);
  overflow: auto;
}
.ignielMultiTab label {
  background-color: #ededed;
  border-color: transparent;
  border-bottom: 1px solid #ddd;
  color: #666;
  cursor: pointer;
  display: inline-block;
  float: left;
  padding: .65rem 1.25rem;
  position: relative;
  top: 1px;
  transition: all .3s ease;
}
.ignielMultiTab input:checked + label {
  background-color: transparent;
  border-bottom: 1px solid #fff;
  color: #1d1d1d;
  font-weight: bold;
}
.ignielMultiTab .content {
  clear: both;
  padding: 1.5rem 1.25rem;
}
.ignielMultiTab #tab1:checked ~ .content .tab1,
.ignielMultiTab #tab2:checked ~ .content .tab2,
.ignielMultiTab #tab3:checked ~ .content .tab3,
.ignielMultiTab #tab4:checked ~ .content .tab4,
.ignielMultiTab #tab5:checked ~ .content .tab5 {
  display: block;
}

/* --------------------- untuk View Lamaran ---------------------------- */
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
    width: 370px;
    height: 420px;
    margin: 5px;
}

.list-produk:hover
{
    transition-duration: 700ms;
    box-shadow: 5px 5px gainsboro;
}

.list-produk img
{
    /*width: 100%;*/
    width: 50px;
    height: 50px;
    display: block;
    margin-bottom: 5px;
}

.list-produk h4
{
    font-size: 15px;
    color: crimson;
    text-align: left;
    margin-bottom: 5px;
}

.list-produk h5
{
    font-size: 15px;
    color: #808080;
    text-align: left;
    margin-bottom: 5px;
}

#tombol
{
    font-size: 15px;
    cursor: not-allowed;
    pointer-events:none;
    color: #ffffff;
    background-color: #000066;
    text-decoration: none;
    border-radius: 7px;
    border: 0px;
    padding: 7px;
    display: block;
    float: left;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
}
 
#tombol:hover
{
    color: #000066;
    background-color: #0000ff;
    transition-duration: 700ms;
}
 
#tombol-disabled
{
    font-size: 15px;
    cursor: not-allowed;
    pointer-events:none;
    color: #000066;
    background-color: #d9d9d9;
    text-decoration: none;
    border-radius: 7px;
    border: 0px;
    padding: 7px;
    display: block;
    float: left;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
}
 
#tombol-beli
{
    font-size: 10px;
    font-weight: bold;
    color: #ffffff;
    background-color: #ff0066;
    text-decoration: none;
    border-radius: 7px;
    border: 0px;
    display: block;
    float: center;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
}

#tombol-beli:hover
{
    font-size: 10px;
    font-weight: bold;
    color: #000066;
    background-color: #808080;
    text-decoration: none;
    border-radius: 7px;
    border: 1px;
    display: block;
    float: center;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
    transition-duration: 700ms;
}
 
#tombol-beli-disabled
{
    font-size: 15px;
    cursor: not-allowed;
    background-color: rgb(229, 229, 229) !important;
    pointer-events:none;
    width: 100%;
}

#bodynya {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ffffff;
}
#listnya {
    float: left;
}
#listnya a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
#listnya a:hover {
    background-color: #ffffff;
}
#tbl-tdksesuai
{
    font-size: 10px;
    font-weight: bold;
    color: #ffffff;
    background-color: crimson;
    text-decoration: none;
    border-radius: 7px;
    border: 0px;
    display: block;
    float: center;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
}
#tbl-tdksesuai:hover
{
    font-size: 10px;
    font-weight: bold;
    color: #000066;
    background-color: #808080;
    text-decoration: none;
    border-radius: 7px;
    border: 1px;
    display: block;
    float: center;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
    transition-duration: 700ms;
}
#tbl-wawancara
{
    font-size: 10px;
    font-weight: bold;
    color: #ffffff;
    background-color: #0066cc;
    text-decoration: none;
    border-radius: 7px;
    border: 0px;
    display: block;
    float: center;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
}
#tbl-wawancara:hover
{
    font-size: 10px;
    font-weight: bold;
    text-decoration: none;
    color: #000066;
    background-color: #808080;
    border-radius: 7px;
    border: 1px;
    display: block;
    float: center;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
    transition-duration: 700ms;
}
#tbl-terpilih
{
    font-size: 10px;
    font-weight: bold;
    color: #ffffff;
    background-color: #009933;
    text-decoration: none;
    border-radius: 7px;
    border: 0px;
    display: block;
    float: center;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
}
#tbl-terpilih:hover
{
    font-size: 10px;
    font-weight: bold;
    text-decoration: none;
    color: #000066;
    background-color: #808080;
    border-radius: 7px;
    border: 1px;
    display: block;
    float: center;
    width: 100%;
    height: 40px;
    margin: 4px;
    text-align: center;
    transition-duration: 700ms;
}
 
</style>
<?php
$arrJobsClient = $this->m_client->getComboJobsClients2($idclnt);
/* 
    Status Pekerjaan
    1 - Perlu diproses
    2 - Wawancara
    3 - Terpilih
    4 - Tidak sesuai
*/ 
?>
<script type="text/javascript">
function jvChangeJobs(){
    $jobsid = $('#cmbJOBCLI').val();
    // alert($jobsid);
    $('#hidJOBSID').val($jobsid);
}

function jvChangeData(){
    $jobsid = $('#hidJOBSID').val();
    // alert($jobsid);
}

function jvCheckCounter(id,idappl){
    var prm = {};
    prm['idents'] = id;
    prm['idappl'] = idappl;
    // alert(id+'~'+filenya);return;
    
    $.post('/Myjconnect_Client/updateViewCounter',prm,function(hasil){
        // alert(hasil);
        location.reload();
    });
}

function jvDelete(id){
    // alert(id);return;
    var prm = {};
    prm['idents'] = id;
    if(confirm('Hapus Data?')){
        $.post('/Myjconnect_Client/hapusCV',prm,function(rebound){
            if(rebound){
                alert(rebound);
                location.reload();
            }
        });
    }
}
</script>
<table class='table1'>
<tr>
    <td>
        <table class='table1'>
            <tr>
                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
            </tr>
            <tr>
                <td><br>
                    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                        <div class="form-group">
                            <!-- form_dropdown('cmbJOBCLI',$arrJobsClient,'','id="cmbJOBCLI" class="pindah tombol-update" onChange="jvChangeJobs()"') -->
                            <select class="form-control" name="cmbJOBCLI" id="cmbJOBCLI">
                                <option value="0">--- Semua Lowongan ---</option>
                            <?php
                                $clijob = $_GET['cmbJOBCLI'];
                                foreach($arrJobsClient as $row){
                                    if($clijob == $row->JOB_IDENTS){
                                        $selected = 'selected';
                                    }else{
                                        $selected = '';
                                    }
                                    echo "<option value=".$row->JOB_IDENTS." ".$selected.">".$row->JOBS."</option>";
                                }
                            ?>
                            </select>
                            <br><br>
                            <input type="submit" id="tbl-terpilih" value="Lihat" style='width: 25%;'>
                             <!-- class="genric-btn success small" -->
                        </div>
                        <!-- <input type='hidden' name='hidJOBSID' id='hidJOBSID' oniput="jvChangeData()"> -->
                    </form>
                    <fieldset class="ignielMultiTab">
                      
                        <input id="tab1" name="mTab" type="radio" checked="checked"/>
                        <label for="tab1">Semua Pelamar</label>
                          
                        <input id="tab2" name="mTab" type="radio"/>
                        <label for="tab2">Perlu Diproses</label>
                        
                        <input id="tab3" name="mTab" type="radio"/>
                        <label for="tab3">Wawancara</label>
                        
                        <input id="tab4" name="mTab" type="radio"/>
                        <label for="tab4">Terpilih</label>
                        
                        <input id="tab5" name="mTab" type="radio"/>
                        <label for="tab5">Tidak Sesuai</label>
                        
                        <div class="content">
                            
<!-- --------------------------------------------------------- Tab 1 - semua pelamar ------------------------------------------------------ -->
                            <div class="tab1">
                                <ul id="bodynya" class="badan">
                                <?php
                                    if (isset($_GET['cmbJOBCLI'])) {
                                        $jobnya= $_GET['cmbJOBCLI'];
                                    }else {
                                        $jobnya= 0;
                                    }
                                    $column = $this->m_client->getApplayJob($usr_idents,0,$jobnya);
                                    $jmlrow = count($column);

                                    // print_r($column);
                                    $idpekerja = '';
                                    $nomorjobs = '';
                                    $i=0;
                                    foreach($column as $row){
                                        $JOBSID = $row['IDENTS'];
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
                                                                                
                                        $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        // if($EXPDAT > date('Y-m-d')){
                                        //     if($row['APP_STATUS'] == '3'){
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }else{
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }
                                        // }else{
                                        //     $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
                                        // }

                                        $lebih = '';
                                        if($EXPRNC == 6){
                                            $lebih = '>';
                                        }
                                        
                                        if($NOMJOB != $nomorjobs){
                                ?>
                                            <li id="listnya" class="list-produk">                                                            
                                                <img style="width: 100px;height:100px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FOTOSS?>" alt="<?=$PEKRJA?>">             
                                                <h4><?=$PEKRJA?></h4>
                                                <h5><?=strtoupper($EXPNPT)?> (<?=$lebih?> <?=$EXPRNC?> Thn)</h5>
                                                <h5>Bidang <?=$EXPBDG?></h5>
                                                <h5>----------------------------------------------------</h5>
                                                <h5>Job No. <b><?=$NOMJOB?></b></h5>
                                                <h5><b><?=$TITLES?></b></h5>
                                                <h5><?=$TYPESS?></h5>
                                                <h5><?=$sts?></h5>
                                                <a id="tombol-beli" onclick="jvCheckCounter(<?=$IDPKRJ?>,<?=$IDENTS?>);" href="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FILECV?>" target="_blank">Lihat CV</a>
                                                <table>
                                                    <tr>
                                                        <td><a id="tbl-tdksesuai" href="/myjconnect_client/update_status/<?=$JOBSID?>/4" alt="Tidak Sesuai">Tidak Sesuai</a>
                                                        <td><a id="tbl-wawancara" href="/myjconnect_client/update_status/<?=$JOBSID?>/2" alt="Wawancara">Wawancara</a>
                                                        <td><a id="tbl-terpilih" href="/myjconnect_client/update_status/<?=$JOBSID?>/3" alt="Terpilih">&nbsp;&nbsp;&nbsp;Terpilih&nbsp;&nbsp;&nbsp;</a>
                                                    </td>
                                                </table>
                                                
                                            </li>
                                <?php
                                            $idpekerja = $IDPKRJ;
                                            $nomorjobs = $NOMJOB;
                                            $i++;
                                        }
                                    }
                                ?>
                                </ul>

                            </div>

<!-- --------------------------------------------------------- Tab 2 - aktif -------------------------------------------------------------- -->
                            <div class="tab2">
                                <ul id="bodynya" class="badan">
                                <?php
                                    if (isset($_GET['cmbJOBCLI'])) {
                                        $jobnya= $_GET['cmbJOBCLI'];
                                    }else {
                                        $jobnya= 0;
                                    }
                                    $column = $this->m_client->getApplayJob($usr_idents,1,$jobnya);
                                    $jmlrow = count($column);

                                    // print_r($column);
                                    $idpekerja = '';
                                    $nomorjobs = '';
                                    $i=0;
                                    foreach($column as $row){
                                        $JOBSID = $row['IDENTS'];
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
                                        
                                        
                                        $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        // if($EXPDAT > date('Y-m-d')){
                                        //     if($row['APP_STATUS'] == '3'){
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }else{
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }
                                        // }else{
                                        //     $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
                                        // }

                                        $lebih = '';
                                        if($EXPRNC == 6){
                                            $lebih = '>';
                                        }
                                        
                                        if($NOMJOB != $nomorjobs){
                                ?>
                                            <li id="listnya" class="list-produk">                                                            
                                                <img style="width: 100px;height:100px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FOTOSS?>" alt="<?=$PEKRJA?>">             
                                                <h4><?=$PEKRJA?></h4>
                                                <h5><?=strtoupper($EXPNPT)?> (<?=$lebih?> <?=$EXPRNC?> Thn)</h5>
                                                <h5>Bidang <?=$EXPBDG?></h5>
                                                <h5>----------------------------------------------------</h5>
                                                <h5>Job No. <b><?=$NOMJOB?></b></h5>
                                                <h5><b><?=$TITLES?></b></h5>
                                                <h5><?=$TYPESS?></h5>
                                                <h5><?=$sts?></h5>
                                                <a id="tombol-beli" onclick="jvCheckCounter(<?=$IDPKRJ?>,<?=$IDENTS?>);" href="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FILECV?>" target="_blank">Lihat CV</a>
                                                <table>
                                                    <tr>
                                                        <td><a id="tbl-tdksesuai" href="/myjconnect_client/update_status/<?=$JOBSID?>/4" alt="Tidak Sesuai">Tidak Sesuai</a>
                                                        <td><a id="tbl-wawancara" href="/myjconnect_client/update_status/<?=$JOBSID?>/2" alt="Wawancara">Wawancara</a>
                                                        <td><a id="tbl-terpilih" href="/myjconnect_client/update_status/<?=$JOBSID?>/3" alt="Terpilih">&nbsp;&nbsp;&nbsp;Terpilih&nbsp;&nbsp;&nbsp;</a>
                                                    </td>
                                                </table>
                                                
                                            </li>
                                <?php
                                            $idpekerja = $IDPKRJ;
                                            $nomorjobs = $NOMJOB;
                                            $i++;
                                        }

                                    }
                                ?>
                                </ul>
                            </div>
                            
<!-- --------------------------------------------------------- Tab 3 - wawancara ---------------------------------------------------------- -->
                            <div class="tab3">
                                <ul id="bodynya" class="badan">
                                <?php
                                    if (isset($_GET['cmbJOBCLI'])) {
                                        $jobnya= $_GET['cmbJOBCLI'];
                                    }else {
                                        $jobnya= 0;
                                    }
                                    $column = $this->m_client->getApplayJob($usr_idents,2,$jobnya);
                                    $jmlrow = count($column);

                                    // print_r($column);
                                    $idpekerja = '';
                                    $nomorjobs = '';
                                    $i=0;
                                    foreach($column as $row){
                                        $JOBSID = $row['IDENTS'];
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
                                        
                                        
                                        $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        // if($EXPDAT > date('Y-m-d')){
                                        //     if($row['APP_STATUS'] == '3'){
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }else{
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }
                                        // }else{
                                        //     $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
                                        // }

                                        $lebih = '';
                                        if($EXPRNC == 6){
                                            $lebih = '>';
                                        }
                                        
                                        if($NOMJOB != $nomorjobs){
                                ?>
                                            <li id="listnya" class="list-produk">                                                            
                                                <img style="width: 100px;height:100px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FOTOSS?>" alt="<?=$PEKRJA?>">             
                                                <h4><?=$PEKRJA?></h4>
                                                <h5><?=strtoupper($EXPNPT)?> (<?=$lebih?> <?=$EXPRNC?> Thn)</h5>
                                                <h5>Bidang <?=$EXPBDG?></h5>
                                                <h5>----------------------------------------------------</h5>
                                                <h5>Job No. <b><?=$NOMJOB?></b></h5>
                                                <h5><b><?=$TITLES?></b></h5>
                                                <h5><?=$TYPESS?></h5>
                                                <h5><?=$sts?></h5>
                                                <a id="tombol-beli" onclick="jvCheckCounter(<?=$IDPKRJ?>,<?=$IDENTS?>);" href="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FILECV?>" target="_blank">Lihat CV</a>
                                                <table>
                                                    <tr>
                                                        <td><a id="tbl-tdksesuai" href="/myjconnect_client/update_status/<?=$JOBSID?>/4" alt="Tidak Sesuai">Tidak Sesuai</a>
                                                        <td><a id="tbl-terpilih" href="/myjconnect_client/update_status/<?=$JOBSID?>/3" alt="Terpilih">&nbsp;&nbsp;&nbsp;Terpilih&nbsp;&nbsp;&nbsp;</a>
                                                    </td>
                                                </table>
                                                
                                            </li>
                                <?php
                                            $idpekerja = $IDPKRJ;
                                            $nomorjobs = $NOMJOB;
                                            $i++;
                                        }

                                    }
                                ?>
                                </ul>

                            </div>

<!-- --------------------------------------------------------- Tab 4 - terpilih ----------------------------------------------------------- -->
                            <div class="tab4">
                                <ul id="bodynya" class="badan">
                                <?php
                                    if (isset($_GET['cmbJOBCLI'])) {
                                        $jobnya= $_GET['cmbJOBCLI'];
                                    }else {
                                        $jobnya= 0;
                                    }
                                    $column = $this->m_client->getApplayJob($usr_idents,3,$jobnya);
                                    $jmlrow = count($column);

                                    // print_r($column);
                                    $idpekerja = '';
                                    $nomorjobs = '';
                                    $i=0;
                                    foreach($column as $row){
                                        $JOBSID = $row['IDENTS'];
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
                                        
                                        
                                        $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        // if($EXPDAT > date('Y-m-d')){
                                        //     if($row['APP_STATUS'] == '3'){
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }else{
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }
                                        // }else{
                                        //     $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
                                        // }

                                        $lebih = '';
                                        if($EXPRNC == 6){
                                            $lebih = '>';
                                        }
                                        
                                        if($NOMJOB != $nomorjobs){
                                ?>
                                            <li id="listnya" class="list-produk">                                                            
                                                <img style="width: 100px;height:100px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FOTOSS?>" alt="<?=$PEKRJA?>">             
                                                <h4><?=$PEKRJA?></h4>
                                                <h5><?=strtoupper($EXPNPT)?> (<?=$lebih?> <?=$EXPRNC?> Thn)</h5>
                                                <h5>Bidang <?=$EXPBDG?></h5>
                                                <h5>----------------------------------------------------</h5>
                                                <h5>Job No. <b><?=$NOMJOB?></b></h5>
                                                <h5><b><?=$TITLES?></b></h5>
                                                <h5><?=$TYPESS?></h5>
                                                <h5><?=$sts?></h5>
                                                <a id="tombol-beli" onclick="jvCheckCounter(<?=$IDPKRJ?>,<?=$IDENTS?>);" href="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FILECV?>" target="_blank">Lihat CV</a>
                                                <table>
                                                    <tr>
                                                        <td><a id="tbl-tdksesuai" href="/myjconnect_client/update_status/<?=$JOBSID?>/4" alt="Tidak Sesuai">Tidak Sesuai</a>
                                                        <td><a id="tbl-wawancara" href="/myjconnect_client/update_status/<?=$JOBSID?>/2" alt="Wawancara">Wawancara</a>
                                                    </td>
                                                </table>
                                                
                                            </li>
                                <?php
                                            $idpekerja = $IDPKRJ;
                                            $nomorjobs = $NOMJOB;
                                            $i++;
                                        }

                                    }
                                ?>
                                </ul>
                            </div>

<!-- --------------------------------------------------------- Tab 5 - tidak sesuai ------------------------------------------------------- -->
                            <div class="tab5">
                                <ul id="bodynya" class="badan">
                                <?php
                                    if (isset($_GET['cmbJOBCLI'])) {
                                        $jobnya= $_GET['cmbJOBCLI'];
                                    }else {
                                        $jobnya= 0;
                                    }
                                    $column = $this->m_client->getApplayJob($usr_idents,4,$jobnya);
                                    $jmlrow = count($column);

                                    // print_r($column);
                                    $idpekerja = '';
                                    $nomorjobs = '';
                                    $i=0;
                                    foreach($column as $row){
                                        $JOBSID = $row['IDENTS'];
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
                                        
                                        
                                        $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        // if($EXPDAT > date('Y-m-d')){
                                        //     if($row['APP_STATUS'] == '3'){
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }else{
                                        //         $sts = 'Berlaku sampai <b>'.$EXPDAT.'</b>';
                                        //     }
                                        // }else{
                                        //     $sts = '<b>MASA BERLAKU SUDAH HABIS</b>';
                                        // }

                                        $lebih = '';
                                        if($EXPRNC == 6){
                                            $lebih = '>';
                                        }
                                        
                                        if($NOMJOB != $nomorjobs){
                                ?>
                                            <li id="listnya" class="list-produk">                                                            
                                                <img style="width: 100px;height:100px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FOTOSS?>" alt="<?=$PEKRJA?>">             
                                                <h4><?=$PEKRJA?></h4>
                                                <h5><?=strtoupper($EXPNPT)?> (<?=$lebih?> <?=$EXPRNC?> Thn)</h5>
                                                <h5>Bidang <?=$EXPBDG?></h5>
                                                <h5>----------------------------------------------------</h5>
                                                <h5>Job No. <b><?=$NOMJOB?></b></h5>
                                                <h5><b><?=$TITLES?></b></h5>
                                                <h5><?=$TYPESS?></h5>
                                                <h5><?=$sts?></h5>
                                                <a id="tombol-beli" onclick="jvCheckCounter(<?=$IDPKRJ?>,<?=$IDENTS?>);" href="<?=base_url()?>assets/documents/upload/pekerja/<?=$IDPKRJ?>/<?=$FILECV?>" target="_blank">Lihat CV</a>
                                                <table>
                                                    <tr>
                                                        <td><a id="tbl-wawancara" href="/myjconnect_client/update_status/<?=$JOBSID?>/2" alt="Wawancara">Wawancara</a>
                                                        <td><a id="tbl-terpilih" href="/myjconnect_client/update_status/<?=$JOBSID?>/3" alt="Terpilih">&nbsp;&nbsp;&nbsp;Terpilih&nbsp;&nbsp;&nbsp;</a>
                                                    </td>
                                                </table>
                                                
                                            </li>
                                <?php
                                            $idpekerja = $IDPKRJ;
                                            $nomorjobs = $NOMJOB;
                                            $i++;
                                        }

                                    }
                                ?>
                                </ul>
                            </div>

                        </div>
                    </fieldset>
                </td>
            </tr>
        </table>
    </td>
</tr>
</table><br>
