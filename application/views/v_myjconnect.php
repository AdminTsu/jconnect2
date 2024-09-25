<?php
$levels = $this->session->userdata('USR_LEVELS');
$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_idents = $this->session->userdata('USR_IDENTS');
$optCountry = $this->crud->getCommon(3,7);
// $optPrvince = $this->m_master->getComboProvince();
// $optCity = $this->m_master->getComboCity();
$optBidang = $this->m_jconnect->getBidangKerja();
$arrJOBS = $this->m_job->getJobUpdate();
$optSEXESS = array('0'=>'-- Pilih Jenis Kelamin --','1'=>'Pria','2'=>'Wanita');
$optJENISS = array('0'=>'All','1'=>'Kontrak','2'=>'Tetap');
$optEXPRNC = array('0'=>'-- Pengalaman --','1'=>'1-2 Tahun','2'=>'2-3 Tahun','3'=>'3-6 Tahun','4'=>'> 6 Tahun');
$optRLGION = $this->m_jconnect->getReligion();
$optLSTEDU = $this->m_jconnect->getLastEdu();
$optMERRID = $this->m_jconnect->getStatusMarried();

// print_r($data);
foreach($data as $row){
    $idpkrj = isset($row['PKR_IDENTS']) ? $row['PKR_IDENTS'] : NULL;
    $fotoss = isset($row['PKR_FOTOSS']) ? $row['PKR_FOTOSS'] : NULL;
    $namess = isset($row['PKR_NAMESS']) ? $row['PKR_NAMESS'] : NULL;
    $emails = isset($row['USR_EMAILS']) ? $row['USR_EMAILS'] : NULL;
    $nompkr = isset($row['PKR_NOMPKR']) ? $row['PKR_NOMPKR'] : NULL;
    $addres = isset($row['PKR_ADDRES']) ? $row['PKR_ADDRES'] : NULL;
    $addrdo = isset($row['PKR_ADDRDO']) ? $row['PKR_ADDRDO'] : NULL;
    $tmplhr = isset($row['PKR_TMPLHR']) ? $row['PKR_TMPLHR'] : '-';
    $tgllhr = isset($row['PKR_TGLLHR']) ? $row['PKR_TGLLHR'] : '-';
    $nomktp = isset($row['PKR_NOMKTP']) ? $row['PKR_NOMKTP'] : NULL;
    $nonpwp = isset($row['PKR_NONPWP']) ? $row['PKR_NONPWP'] : NULL;
    $nomtlp = isset($row['PKR_NOMTLP']) ? $row['PKR_NOMTLP'] : NULL;
    $nomrhp = isset($row['PKR_NOMRHP']) ? $row['PKR_NOMRHP'] : NULL;
    $klmnid = isset($row['PKR_JNSKLM']) ? $row['PKR_JNSKLM'] : NULL;
    $jnsklm = isset($row['JNSKLM']) ? $row['JNSKLM'] : NULL;
    $rlgnid = isset($row['PKR_RELIGN']) ? $row['PKR_RELIGN'] : NULL;
    $relgin = isset($row['RELIGN']) ? $row['RELIGN'] : NULL;
    $educid = isset($row['PKR_EDUCID']) ? $row['PKR_EDUCID'] : NULL;
    $eductn = isset($row['EDUCTN']) ? $row['EDUCTN'] : NULL;
    $marrid = isset($row['PKR_MARRID']) ? $row['PKR_MARRID'] : NULL;
    $marred = isset($row['MARRID']) ? $row['MARRID'] : NULL;

        $cntrid = isset($row['PKR_CONTRY']) ? $row['PKR_CONTRY'] : 0;
        $contry = isset($row['CONTRY']) ? $row['CONTRY'] : NULL;
        $prvnid = isset($row['PKR_PROVNC']) ? $row['PKR_PROVNC'] : 0;
        $provnc = isset($row['PROVNC']) ? $row['PROVNC'] : NULL;
        $cityid = isset($row['PKR_CITYSS']) ? $row['PKR_CITYSS'] : 0;
        $cityss = isset($row['CITYSS']) ? $row['CITYSS'] : NULL;

    $exprnc = isset($row['PKR_EXPRNC']) ? $row['PKR_EXPRNC'] : NULL;
    $expnpt = isset($row['PKR_EXPNPT']) ? $row['PKR_EXPNPT'] : NULL;
    $expbdg = isset($row['PKR_EXPBDG']) ? $row['PKR_EXPBDG'] : NULL;
    $srtkt1 = isset($row['PKR_SRTKT1']) ? $row['PKR_SRTKT1'] : NULL;
    $srtkt2 = isset($row['PKR_SRTKT2']) ? $row['PKR_SRTKT2'] : NULL;
    $visafl = isset($row['PKR_VISAFL']) ? $row['PKR_VISAFL'] : NULL;
    $lvlbhs = isset($row['PKR_LVLBHS']) ? $row['PKR_LVLBHS'] : NULL;
    $magang = isset($row['PKR_MAGANG']) ? $row['PKR_MAGANG'] : NULL;
    $sswfil = isset($row['PKR_SSWFIL']) ? $row['PKR_SSWFIL'] : NULL;

    $mntbid = isset($row['PKR_MNTBDG']) ? $row['PKR_MNTBDG'] : NULL;
    $mntbdg = isset($row['MNTBDG']) ? $row['MNTBDG'] : NULL;
    $bdlain = isset($row['PKR_BDLAIN']) ? $row['PKR_BDLAIN'] : NULL;
    $expsal = isset($row['PKR_EXPSAL']) ? $row['PKR_EXPSAL'] : NULL;
    $filecv = isset($row['PKR_FILECV']) ? $row['PKR_FILECV'] : NULL;

    // $filktp = isset($row['PKR_FILECV']) ? $row['PKR_FILECV'] : NULL;
    // $filijz = isset($row['PKR_FILECV']) ? $row['PKR_FILECV'] : NULL;

    if($mntbid == '' || $mntbid == null){
        $mntbid = 0;
    }

    $date = date_create($tgllhr);
    $tgllhr_conv = date_format($date,"d F Y");

    if($exprnc == 1 or $exprnc < 3){
        $level_exp = 'Pemula';
        $ket_exp = 'Pengalaman kerja 1 sampai 2 tahun';
    }elseif($exprnc >= 3 or $exprnc <= 5){
        $level_exp = 'Menengah';
        $ket_exp = 'Pengalaman kerja 3 sampai 5 tahun';
    }else{
        $level_exp = 'Mahir';
        $ket_exp = 'Pengalaman kerja lebih dari 5 tahun';
    }
}

if(($visafl != '' || $lvlbhs != '' || $magang != '' || $sswfil != '' || $filecv != '') OR ($visafl != null || $lvlbhs != null || $magang != null || $sswfil != null || $filecv != null)){
    $not_click = "<font color='red'>(click untuk melihat berkas)</font>";
}else{
    $not_click = "";
}
$optPrvince = $this->m_master->getComboProvince_change($cntrid);
$optCity = $this->m_master->getComboKota_change($cntrid,$prvnid);
?>
<!-- Job List Area Start -->
<!-- <script src='//code.jquery.com/jquery-1.11.1.min.js'></script> -->
<style>
    .job-category-listing {
        /*background-color: #f5f5f5;*/
        background-color: #f2f2f2;
        /*position:fixed;*/
        position:relative;
        width: 100%;
    }
    a {
        color: #000066;
    }
    a:hover {
        /*background-color: #ffffff;*/
        color: #ff9933;
        /*margin: 0px auto 0px auto;
        width:300px;*/
    }
    #cancel:hover {
        background-color: red;
        color: #ffffff;
    }
    .single-listing {
        text-align: left;
    }
    #single-listing {
        text-align: center;
    }
</style>

<div class="job-listing-area pt-40 pb-40">
    <div class="container">
        <div class="row">
            <!-- Left content -->
            <div class="col-xl-3 col-lg-3 col-md-4">

                <div class="row">
                    <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                            <div class="ion">&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <h4><b><?=$title?></b></h4>
                        </div>
                    </div>
                </div>
                <div class="job-category-listing mb-50" id='side_myjconnect'>
                        <div class="single-listing">

                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect"><i class="fa fa-user"></i>&nbsp;&nbsp;Profile Saya</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/pengalaman/<?=$idpkrj?>"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;Pengalaman</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/minat_kerja/<?=$idpkrj?>"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Minat Kerja</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/lamaran"><i class="fa fa-folder-open"></i>&nbsp;&nbsp;Lamaran Saya</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                            </div><br>
                            <?php if($jenis == 'view'){ ?>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/<?=$link_menu?>/<?=$idpkrj?>" class="genric-btn primary small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                            </div><br>
                            <?php }else{ ?>
                                <div class="single-listing">
                                    <!-- <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                &nbsp;&nbsp;Simpan</i>
                                    </button> -->
                                    <!-- <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>&nbsp;&nbsp;<i>Simpan</i></button>
                                    <a id='cancel' href="<?php echo base_url(); ?>myjconnect" class="genric-btn primary-border small">Batal</a> -->
                                </div><br>
                            <?php } ?>

                        </div>
                        <div class="result"></div>

                </div>

            </div>

<style>
    .table1 {
        font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 100%;
        border: 1px;
    }

    .table1 tr th{
        /*background: #35A9DB;*/
        background: #000066;
        color: #fff;
        font-weight: normal;
    }

    .table1, th, td {
        padding: 2px 8px;
        text-align: left;
    }

    .table1 tr:hover {
        background-color: #ffffff;
    }

    .table1 tr:nth-child(even) {
        background-color: #ffffff;
    }

    .container_img {
        position: relative;
        width: 50%;
    }

    .image {
        opacity: 1;
        display: block;
        width: 160px;
        height: 200px;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .text {
        background-color: #04AA6D;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    #myBtn {
        cursor: pointer;
    }

    .progress,.progress:hover {
        background: transparent;
        padding: 0;
        height: 50px;
        width: 68px;
    }

    #progress-bar {
        background: #000066;
        display: block;
        height: 50px;
        width: 0;
    }
</style>

<!-- Right content -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script> -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>

<script>
$(document).ready(function(){
    if(<?=$cntrid?> == 0){
        $("#provinsi").show();
        $("#provinsi2").hide();
        $("#provinsi3").hide();
    }else{
        $("#provinsi").hide();
        $("#provinsi2").show();
        $("#provinsi3").hide();
    }
    
    if(<?=$cntrid?> == 0 && <?=$prvnid?> == 0){
        $("#kota").show();
        $("#kota2").hide();
        $("#kota3").hide();
    }else{
        $("#kota").hide();
        $("#kota2").show();
        $("#kota3").hide();
    }

    $('#bdlain_field').hide();
        
    $('#submit').bind('submit',function(data){
        if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val()){
            alert('Tidak ada filter yang di isi!');
            return;
        }
    });

    $('#reset').bind('click',function(data){
        $(this).closest('form').find("input[type=text]").val("");
        window.location.replace("/find_jobs");
    });

    $('#txtPASWD2').bind('change',function(data){
        var pass1 = $('#txtPASWD1').val();
        var pass2 = $('#txtPASWD2').val();
        if(pass1 != pass2){
            alert('Password yang anda masukan tidak sama, silahkan masukan kembali kata sandi anda!');
            $('#txtPASWD2').val('');
            $('#txtPASWD2').focus();
            return;
        }
    });
    
    $( function() {
        $( "#datBIRTHD" ).datepicker({
            dateFormat: "yy-mm-dd",
            showButtonPanel: true,
            todayHighlight: true,
            showTime: true,
            changeYear: true,
            changeMonth: true,
            inline: true,
            yearRange: '1950:2222'

            // onClose: function(dateText, inst) {
            //     var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            //     var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            //     $(this).val($.datepicker.formatDate('dd MM yy', new Date(year, month, 1)));
            // }
        });
        
        // window.onload=function(){
        //     $('#datBIRTHD').on('change', function() {
        //         var dob = new Date(this.value);
        //         var today = new Date();
        //         var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        //         var bln = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        //         var hr = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        //         var thr = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
        //         // $('#umur').val(age);
        //         $('#bulan').val(bln);
        //         $('#hari').val(hr);
        //         $('#thari').val(thr);
        //     });
        // }
    });

    if(<?=$mntbid?> != 99 || <?=$mntbid?> == 0){
        $('#bdlain_field').hide();
    }else{
        $('#bdlain_field').show();
    }
    
    $('#cmbMNTBDG').bind('change',function(data){
        var bdgmnt = $('#cmbMNTBDG').val();
        // alert(pkrjid);
        if(bdgmnt == 99){
            $('#bdlain_field').show();
        }else{
            $('#bdlain_field').hide();
        }
    });
});

var progress = 0;

function startProgress()
{
    // change button to progress button, and add progress bar
    // $('#submit').addClass('progress').html('<button id="progress-bar">Progress..</button>');
    $('#submit').addClass('progress').html('<div id="preloader-active"><div class="preloader d-flex align-items-center justify-content-center" style="opacity: 0.6;"><div class="preloader-inner position-relative"><div class="preloader-circle"></div><div class="preloader-img pere-text" style=""><img src="<?=base_url()?>resources/assets/img/logo/Logo_jconnect_new.png" alt=""></div></div></div></div>');

    // update progress bar every 0.5 second
    setInterval(function(){
        $('#progress-bar').width(progress);
        progress++;
    }, 500);
} 

function jvChangeContry(idcontry){
    var idcontry = idcontry;
    
    if(idcontry != 0){
        $("#provinsi2").hide();
        $("#provinsi3").hide();
        $("#kota").hide();
        $("#kota2").hide();
        $("#kota3").show();
        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "/myjconnect/comboProvince/"+idcontry, // Isi dengan url/path file php yang dituju
            data: {idcontry : $("#cmbPROVNC").val()}, // data yang akan dikirim ke file yang dituju
            dataType: "json",
            beforeSend: function(e) {
                if(e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response){ // Ketika proses pengiriman berhasil
                $("#provinsi").html(response.listProvnc).show();
            },
            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }
        });
    }else{
        $("#provinsi").hide();
        $("#provinsi2").hide();
        $("#provinsi3").show();
        $("#kota").hide();
        $("#kota2").hide();
        $("#kota3").show();
    }
}

function jvChangeProvinsi(){
    var idcontry = $("#cmbCONTRY").val();
    var idprovnc = $("#cmbPROVNC").val();

    if(idprovnc != 0){
        $("#kota2").hide();
        $("#kota3").hide();
        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "/myjconnect/comboKota/"+idcontry+"/"+idprovnc, // Isi dengan url/path file php yang dituju
            data: {idprovnc : $("#cmbCITYSS").val()}, // data yang akan dikirim ke file yang dituju
            dataType: "json",
            beforeSend: function(e) {
                if(e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response){ // Ketika proses pengiriman berhasil
                $("#kota").html(response.listCityss).show();
            },
            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }
        });
    }else{
        $("#kota").hide();
        $("#kota2").hide();
        $("#kota3").show();
    }
}
</script>

<div class="col-xl-9 col-lg-9 col-md-8">
    <!-- Featured_job_start -->
    <section class="featured-job-area">
        <div class="container">
<?php
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type == 1){

        if($jenis == 'view'){
?>
<!-- ----------------------------------------------------  view profile -------------------------------------------------------- -->
            <table class='table1'>
                <tr>
                    <th colspan=4><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr>
                    <td rowspan=5>
                        <center>
                            <?php if($fotoss != '' || $fotoss != null){?>
                                <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$fotoss?>" alt="Avatar">
                            <?php }else{?>
                                <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar">
                            <?php }?>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan=3><h4><?=$namess?></h4></a></td>
                </tr>
                <?php
                    if($exprnc == 6){
                        $ket_thn = 'Lebih dari';
                    }else{
                        $ket_thn = '';
                    }
                ?>
                <tr>
                    <td colspan=3 style='text-align: left;padding-top: 0px;padding-bottom: 0px;'><i class="fa fa-building"></i>&nbsp;&nbsp;<?=$expnpt?> (<?=$expbdg?>) <?=$ket_thn?> <?=$exprnc?> Tahun</td>
                </tr>
                <tr>
                    <td style='text-align: left;'><i class="fas fa-mobile"></i>&nbsp;&nbsp;<?=$nomrhp?></td>
                    <td style='text-align: left;'><i class="ti-email"></i>&nbsp;&nbsp;<?=$emails?></td>
                </tr>
                <tr>
                    <td colspan=2><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<?=$provnc?> - <?=$cityss?>,<?=$contry?></td>
                </tr>

                <tr><td colspan=3 width="1px" height="1px" style='text-align: center;'><b><hr></b></td></tr>
                
                <tr><td>No. Member</td><td colspan=3>: <?=$nompkr?></td></tr>
                <tr><td>Tempat/Tgl. Lahir</td>
                <?php if(($tmplhr != '' or $tmplhr != null) and ($tgllhr_conv != '' or $tgllhr_conv != null)){ ?>
                    <td colspan=3>: <?=$tmplhr?>/<?=$tgllhr_conv?></td>
                <?php }else {?>
                    <td colspan=3>: belum diisi.</td>
                <?php } ?>
                </tr>
                <tr><td>No. KTP</td><td colspan=3>: <?=$nomktp?></td></tr>
                <tr><td>No. NPWP</td><td colspan=3>: <?=$nonpwp?></td></tr>
                <tr><td>Jenis Kelamin</td><td colspan=3>: <?=$jnsklm?></td></tr>
                <tr><td>Agama</td><td colspan=3>: <?=$relgin?></td></tr>
                <tr><td>Pendidikan</td><td colspan=3>: <?=$eductn?></td></tr>
                <tr><td>Status Pernikahan</td><td colspan=3>: <?=$marred?></td></tr>
                <tr><td>Negara</td><td colspan=3>: <?=$contry?></td></tr>
                <tr><td>Provinsi</td><td colspan=3>: <?=$provnc?></td></tr>
                <tr><td>Kota</td><td colspan=3>: <?=$cityss?></td></tr>
                <tr><td style="top: 0;">Alamat Sesuai KTP</td><td colspan=3>: <?=$addres?></td></tr>
                <tr><td style="top: 0;">Alamat Sesuai Domisili</td><td colspan=3>: <?=$addrdo?></td></tr>
                <tr><td>No. Telp</td><td colspan=3>: <?=$nomtlp?></td></tr>
                <tr><td>No. Handphone</td><td colspan=3>: <?=$nomrhp?></td></tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <!-- --------------------------------------  view Pengalaman dan Sertifikasi ----------------------------------------------- -->
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'><b><u>Pengalaman dan Sertifikasi</u></b>
                    </td>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'>a. Pengalaman Kerja
                    </td>
                </tr>

                <tr>
                    <!-- <td>&nbsp;</td> -->
                    <td colspan=3>
                        <?php

                        ?>
                        <table id="item-list" class="tablemanager" style='border: 0px solid #bbb;width: 100%;'>
                            <tbody>
                            <?php
                                if($jml > 0){
                                    $i = 1;
                                    // print_r($detail);
                                    foreach($detail as $row){

                                        $ptname = isset($row['EXP_PTNAME']) ? $row['EXP_PTNAME'] : NULL;
                                        $bidang = isset($row['EXP_BIDANG']) ? $row['EXP_BIDANG'] : NULL;
                                        $posisi = isset($row['EXP_POSISI']) ? $row['EXP_POSISI'] : NULL;
                                        $exprnc = isset($row['EXP_EXPRNC']) ? $row['EXP_EXPRNC'] : NULL;
                                        $datmsk = isset($row['MSKKRJ']) ? $row['MSKKRJ'] : NULL;
                                        $datakh = isset($row['KLRKRJ']) ? $row['KLRKRJ'] : NULL;
                                        $jbdesk = isset($row['EXP_JBDESK']) ? $row['EXP_JBDESK'] : NULL;
                                        $gajiny = isset($row['EXP_SALARY']) ? $row['EXP_SALARY'] : NULL;

                                        echo "
                                            <tr>
                                                <thead><b>".$i.'. '.$posisi."</b></thead><br>
                                                <td>
                                                    <p>
                                                        ".$ptname." (".$bidang."/".$exprnc.")<br>
                                                        ".$datmsk." s/d ".$datakh."<br>
                                                        ".$jbdesk."<br>
                                                        Salary : Rp. ".number_format($gajiny,0).",-
                                                    </p>
                                                </td>
                                            </tr>
                                        ";
                                        $i++;
                                    }
                                }else{
                                    echo "
                                        <tr>
                                            <td colspan=8 style='text-align:center;font-size:14px;'>Maaf, perusahaan anda belum ada pemasangan lowongan kerja, silahkan mulai membuat lowongan kerja anda.</td>
                                        </tr>
                                    ";
                                }
                            ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'>b. Sertifikasi
                    </td>
                </tr>

                <!-- --------------------------------------  view Sertifikasi ----------------------------------------------- -->
                <tr style="top: 0;">
                    <!-- <td>&nbsp;</td> -->
                    <td style='text-align: left;' colspan=2>
                        <a>
                        <?php if($visafl != ''){?>
                            <img style="width: 300px;height:200px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt="">
                        <?php }else{?>
                            <img style="width: 300px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>resources/img/no-image.jpg" alt="Avatar" class="image">
                        <?php }?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="float:top">Foto Visa di Jepang</td>
                    <?php if($visafl != ''){?>
                        <td colspan=3>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" target='_blank'><?=$visafl?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td>Sertifikat Level Bahasa Jepang</td>
                    <?php if($lvlbhs != ''){?>
                        <td colspan=3>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$lvlbhs?>" target='_blank'><?=$lvlbhs?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>: Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td>Sertifikat SSW</td>
                    <?php if($sswfil != ''){?>
                        <td colspan=3>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$sswfil?>" target='_blank'><?=$sswfil?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>: Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td>Sertifikat Magang (JITCO/OTIT)</td>
                    <?php if($magang != ''){?>
                        <td colspan=3>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$magang?>" target='_blank'><?=$magang?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>: Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <!-- ---------------------------------------------  view minat kerja ------------------------------------------------------ -->
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'><b><u>Minat Kerja</u></b>
                    </td>
                </tr>
                <tr><td>Minat Bidang</td><td colspan=3>: <?=$mntbdg?></td></tr>
                <tr id='bdlain_field'><td>Bidang Lainnya</td><td colspan=3>: <?=$bdlain?></td></tr>
                <tr><td>Gaji yang Diinginkan</td><td colspan=3>: Rp. <?=number_format($expsal,0)?>,-</td></tr>
                <tr>
                    <td>Dokumen CV</td>
                    <?php if($filecv != ''){?>
                        <td colspan=3>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$filecv?>" target='_blank'><?=$filecv?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>: Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
            </table><br>

<?php
        }else{
?>
<!-- -------------------------------------------------------  edit profile --------------------------------------------------------------- -->
        
        <form action="/myjconnect/profile_simpan/<?=$idpkrj?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <tr>
                                <td style='text-align: left;'><b><u>Data Pribadi</u></b></td>
                                <td style='text-align: right;'>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>No. Member</td>
                                <td>
                                    <input class="form-control" name="txtNOMPKR" id="txtNOMPKR" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Member'" placeholder="No. Member" value='<?=$nompkr?>' readonly style='width: 150px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input class="form-control" name="txtNAMESS" id="txtNAMESS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" placeholder="Nama" value='<?=$namess?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td style='text-align: center;'>
                                    <a>
                                        <img style="width: 180px;height:150px;border: 0px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: center;" src="<?=base_url()?>resources/img/Screenshot_BG.png" alt="">
                                    </a>
                                </td>
                                <td style='text-align: left;'>
                                    <a>
                                    <?php if($fotoss != ''){?>
                                        <img style="width: 150px;height:150px;border: 3px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$fotoss?>" alt="">
                                    <?php }else{?>
                                        <img style="width: 150px;height:150px;border: 3px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image">
                                    <?php }?>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Upload Foto</td>
                                <td>
                                    <input class="form-control" name="txtFOTOSS" id="txtFOTOSS" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Foto'" placeholder="Upload Foto" style='width: 300px;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td>
                                    <input class="form-control" name="txtBIRTHP" id="txtBIRTHP" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat Lahir'" placeholder="Tempat Lahir" value='<?=$tmplhr?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>
                                    <input class="form-control" name="datBIRTHD" id="datBIRTHD" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Lahir'" placeholder="Tanggal Lahir" value='<?=$tgllhr?>' style='width: 150px;text-align: left;' data-role="datepicker" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input class="form-control" name="txtEMAILS" id="txtEMAILS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email" value='<?=$emails?>' style='width: 300px;text-align: left;' readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Sesuai KTP</td>
                                <td>
                                    <textarea class="form-control" name="txaADDRES" id="txaADDRES" rows=5 type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Sesuai KTP'" placeholder="Alamat Sesuai KTP" style='width: 650px;text-align: left;'><?=$addres?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Domisili</td>
                                <td>
                                    <textarea class="form-control" name="txaADDRDO" id="txaADDRDO" rows=5 type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Domisili'" placeholder="Alamat Domisili" value='<?=$addrdo?>' style='width: 650px;text-align: left;'><?=$addrdo?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>No. KTP</td>
                                <td>
                                    <input class="form-control" name="txtNOMKTP" id="txtNOMKTP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. KTP'" placeholder="No. KTP" value='<?=$nomktp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Negara</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' class="form-control" name="cmbCONTRY" id="cmbCONTRY" onchange="jvChangeContry(this.value)" required>
                                        <?php
                                            foreach($optCountry as $key=>$row){
                                                if($cntrid == $key){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$key." ".$selected.">".$row."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <!-- ---------------------------------- untuk combo box Provinsi --------------------------------------- -->
                            <tr>
                                <td>Provinsi</td>
                                <td id='provinsi'>
                                    <select class="form-control" name="cmbPROVNC1" id="cmbPROVNC1">
                                        <option value=0>-- Pilih Provinsi --</option>
                                    </select>
                                </td>

                                <td id='provinsi2'>
                                    <select class="form-control" name="cmbPROVNC" id="cmbPROVNC" onchange="jvChangeProvinsi()">
                                        <?php
                                            foreach($optPrvince as $row){
                                                if($prvnid == $row->PRV_IDENTS){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$row->PRV_IDENTS." ".$selected.">".$row->PRV_NAMESS."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>

                                <td id='provinsi3'>
                                    <select class="form-control" name="cmbPROVNC2" id="cmbPROVNC2">
                                        <option value=0>-- Pilih Provinsi --</option>
                                    </select>
                                </td>
                            </tr>
                            <!-- ---------------------------------- untuk combo box Kota --------------------------------------- -->
                            <tr>
                                <td>Kota</td>
                                <td id="kota">
                                    <select class="form-control" name="cmbCITYSS1" id="cmbCITYSS1">
                                        <option value=0>-- Pilih Kota --</option>
                                    </select>
                                </td>
                                <td id="kota2">
                                    <select class="form-control" name="cmbCITYSS" id="cmbCITYSS">
                                        <?php
                                            foreach($optCity as $row){
                                                if($cityid == $row->CTY_IDENTS){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$row->CTY_IDENTS." ".$selected.">".$row->CTY_NAMESS."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                                <td id="kota3">
                                    <select class="form-control" name="cmbCITYSS2" id="cmbCITYSS2">
                                        <option value=0>-- Pilih Kota --</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>No. NPWP</td>
                                <td>
                                    <input class="form-control" name="txtNONPWP" id="txtNONPWP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. NPWP'" placeholder="No. NPWP" value='<?=$nonpwp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td>
                                    <input class="form-control" name="txtNOMTLP" id="txtNOMTLP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Telp'" placeholder="No. Telp" value='<?=$nomtlp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Handphone</td>
                                <td>
                                    <input class="form-control" name="txtNOMRHP" id="txtNOMRHP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Handphone'" placeholder="No. Handphone" value='<?=$nomrhp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>

                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbSEXESS" id="cmbSEXESS">
                                        <?php
                                            foreach($optSEXESS as $key=>$row){
                                                if($klmnid == $key){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$key." ".$selected.">".$row."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbRELIGN" id="cmbRELIGN">
                                        <?php
                                            foreach($optRLGION as $key=>$row){
                                                if($rlgnid == $key){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$key." ".$selected.">".$row."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbEDUCTN" id="cmbEDUCTN">
                                        <?php
                                            foreach($optLSTEDU as $key=>$row){
                                                if($educid == $key){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$key." ".$selected.">".$row."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Status Pernikahan</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbMARRID" id="cmbMARRID">
                                        <?php
                                            foreach($optMERRID as $key=>$row){
                                                if($marrid == $key){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$key." ".$selected.">".$row."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                            </tr>

<!-- -------------------------------------------------- pengalaman kerja ------------------------------------------------------------------ -->
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    var start = $('#txtDATMSK').val();
                                    // $( "#txtDATMSK" ).datepicker({
                                    //     dateFormat: "yy-mm-dd",
                                    //     showButtonPanel: true,
                                    //     todayHighlight: true,
                                    //     showTime: true,
                                    //     changeYear: true,
                                    //     changeMonth: true,
                                    //     inline: true,
                                    //     yearRange: '1950:2222'

                                        // onClose: function(dateText, inst) {
                                        //     var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                                        //     var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                        //     $(this).val($.datepicker.formatDate('dd MM yy', new Date(year, month, 1)));
                                        // }
                                    // });

                                    // window.onload=function(){
                                    //     $('#datBIRTHD').on('change', function() {
                                    //         var dob = new Date(this.value);
                                    //         var today = new Date();
                                    //         var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                                    //         var bln = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                                    //         var hr = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                                    //         var thr = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                                    //         // $('#umur').val(age);
                                    //         $('#bulan').val(bln);
                                    //         $('#hari').val(hr);
                                    //         $('#thari').val(thr);
                                    //     });
                                    // }


                                    $('#txtDATMSK').datepicker({
                                        showButtonPanel: true,
                                        todayHighlight: true,
                                        showTime: true,
                                        inline: true,
                                        changeMonth: true,
                                        changeYear: true,
                                        yearRange: '1950:+0',
                                        defaultDate: '1980-01-01',
                                        buttonImage: "http://www.theplazaclub.com/club/images/calendar/outlook_calendar.gif",
                                        dateFormat: 'yy-mm-dd'
                                        // ,onSelect: function(DATMSK) {
                                        //     $('#txtDATMSK').val($(this).datepicker({dateFormat: 'yy-mm-dd'}).val());
                                        //     var datiin = DATMSK;
                                        //     var datout = $('#txtDATAKH').val();
                                        //     jvChangeDate(datiin,datout=0);
                                        // }
                                    });
                                    
                                    $('#txtDATAKH').datepicker({
                                        showButtonPanel: true,
                                        todayHighlight: true,
                                        showTime: true,
                                        inline: true,
                                        changeMonth: true,
                                        changeYear: true,
                                        yearRange: '1950:+0',
                                        defaultDate: '1980-01-01',
                                        buttonImage: "http://www.theplazaclub.com/club/images/calendar/outlook_calendar.gif",
                                        dateFormat: 'yy-mm-dd'
                                        // ,onSelect: function(DATAKH) {
                                        //     $('#txtDATAKH').val($(this).datepicker({dateFormat: 'yy-mm-dd'}).val());
                                        //     var datiin = $('#txtDATAKH').val();
                                        //     var datout = DATAKH;
                                        //     jvChangeDate(datiin=0,datout);
                                        // }
                                    }, function(start, end, label) {
                                        var years = moment().diff(start, 'years');
                                        alert(years + "tahun");
                                       }
                                    );

                                    $('#cmbMNTBDG').bind('change',function(data){
                                        var bdgmnt = $('#cmbMNTBDG').val();
                                        // alert(pkrjid);
                                        if(bdgmnt == 99){
                                            $('#bdlain_field').show();
                                        }else{
                                            $('#bdlain_field').hide();
                                        }
                                    });

                                    $('#txtSALARY').keyup(function(event){
                                        if(event.which >= 37 && event.which <= 40){
                                            event.preventDefault();
                                        }
                                        $(this).val(function(index, value) {
                                            return value
                                            .replace(/\D/g, "")
                                            .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                                            .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
                                        });
                                    });

                                    // $('#txtDATMSK').on('changeDate', function() {
                                    //     var datiin = $('#txtDATMSK').val();
                                    //     var datout = $('#txtDATAKH').val();
                                    //     var ranges = Math.floor((datiin-datout) / (365.25 * 24 * 60 * 60 * 1000));
                                    //     alert(ranges);
                                    //     $('#txtRANGES').val(ranges);
                                    // });
                                });

                                function jvChangeDate(DateIn,DateOut){
                                    // if(DateOut == 0 || DateOut == '0000-00-00' || DateOut == '' || DateOut == null){
                                    //     DateOut = '0000-00-00';
                                    // }
                                    // alert(DateIn+' - '+DateOut);

                                    if((DateIn != '' || DateIn != '0000-00-00') && (DateOut != '' || DateIn != '0000-00-00')){
                                        // $.ajax({
                                        //     type: "POST",
                                        //     url: "/myjconnect/RangeDate/"+DateIn+"/"+DateOut,
                                        //     data: {DateIn : $("#txtDATMSK").val()},
                                        //     dataType: "json",
                                        //     beforeSend: function(e) {
                                        //         if(e && e.overrideMimeType) {
                                        //             e.overrideMimeType("application/json;charset=UTF-8");
                                        //         }
                                        //     },
                                        //     success: function(response){ 
                                        //         $('#txtRANGES').val(DateOut);
                                        //     },
                                        //     error: function (xhr, ajaxOptions, thrownError) {
                                        //         alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                                        //     }
                                        // });
                                        var ranges = (DateOut - DateIn)/1000/60/60/24;
                                        alert(ranges);
                                        $('#txtRANGES').val(ranges);
                                    }

                                    // if(idcontry != 0){
                                    //     $("#provinsi2").hide();
                                    //     $("#provinsi3").hide();
                                    //     $("#kota").hide();
                                    //     $("#kota2").hide();
                                    //     $("#kota3").show();
                                    //     $.ajax({
                                    //         type: "POST", // Method pengiriman data bisa dengan GET atau POST
                                    //         url: "/myjconnect/comboProvince/"+idcontry, // Isi dengan url/path file php yang dituju
                                    //         data: {idcontry : $("#cmbPROVNC").val()}, // data yang akan dikirim ke file yang dituju
                                    //         dataType: "json",
                                    //         beforeSend: function(e) {
                                    //             if(e && e.overrideMimeType) {
                                    //                 e.overrideMimeType("application/json;charset=UTF-8");
                                    //             }
                                    //         },
                                    //         success: function(response){ // Ketika proses pengiriman berhasil
                                    //             $("#provinsi").html(response.listProvnc).show();
                                    //         },
                                    //         error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                                    //             alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                                    //         }
                                    //     });
                                    // }else{
                                    //     $("#provinsi").hide();
                                    //     $("#provinsi2").hide();
                                    //     $("#provinsi3").show();
                                    //     $("#kota").hide();
                                    //     $("#kota2").hide();
                                    //     $("#kota3").show();
                                    // }
                                }

                                function addCommas(numberString) {
                                    numberString += '';
                                    var x = numberString.split('.'),
                                      x1 = x[0],
                                      x2 = x.length > 1 ? '.' + x[1] : '',
                                      rgxp = /(\d+)(\d{3})/;

                                    while (rgxp.test(x1)) {
                                        x1 = x1.replace(rgxp, '$1' + ',' + '$2');
                                    }

                                    return x1 + x2;
                                }

                                function jvAdd(){
                                    var expnam  = $('#txtEXPNPT').val();
                                    var expbdg  = $('#txtEXPBDG').val();
                                    var posisi  = $('#txtPOSISI').val();
                                    var explen  = $('#cmbEXPRNC option:selected').text();
                                    var exlnid  = $('#cmbEXPRNC option:selected').val();
                                    var expdes  = $('#txaDESKJB').val();
                                    var salary  = $('#txtSALARY').val();
                                    var ranges  = $('#txtRANGES').val();


                                    let bulan = ['Jan', 'Feb', 'Mar', 'Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

                                    var datmsk  = $('#txtDATMSK').val();
                                    var from = datmsk.split("-");
                                    var f = new Date(from[2], from[1], from[0]);
                                    datmsk = bulan[f.getMonth()] + " " + f.getFullYear();

                                    var datakh  = $('#txtDATAKH').val();
                                    var from2 = datakh.split("-");
                                    var f2 = new Date(from2[2], from2[1], from2[0]);
                                    datakh = bulan[f.getMonth()] + " " + f.getFullYear();

                                    if(expnam == ''){
                                        alert('Nama Perusahaan belum diisi!');
                                        return;
                                    }
                                    if(expbdg == ''){
                                        alert('Bidang Usaha belum diisi!');
                                        return;
                                    }
                                    if(posisi == ''){
                                        alert('Posisi/Jabatan belum diisi!');
                                        return;
                                    }
                                    if(datmsk == ''){
                                        alert('Tanggal mulai kerja belum diisi!');
                                        return;
                                    }
                                    if(datakh == ''){
                                        alert('Tanggal akhir kerja belum diisi!');
                                        return;
                                    }
                                    if(expdes == ''){
                                        alert('Deskripsi pekerjaan belum diisi!');
                                        return;
                                    }
                                    if(salary == ''){
                                        alert('Upah belum diisi!');
                                        return;
                                    }
                                    
                                    $('#detail_pengalaman').append('<tr><td><p><b>'+posisi+'</b><br>'+expnam+' ('+expbdg+'/'+explen+')<br>'+datmsk+' s/d '+datakh+'<br>'+expdes+'<br>Salary : Rp. '+salary+',-<br><button id="delete_exp" class="genric-btn danger small" onclick="jvDel();">Hapus <i class="fa fa-times"></i></button><input type="hidden" name="txtIDNDTL" id="txtIDNDTL" value='+exlnid+'></p></td></tr>');                                    

                                    $('#kosong').remove();
                                    jvClear();
                                }
                                
                                function jvDel(){
                                    $('#detail_pengalaman tbody tr:last').remove();
                                }
                                
                                function jvClear(){
                                    $('#cmbEXPRNC option:selected').val(0);
                                    $('#cmbEXPRNC option:selected').text('--Pengalaman--');
                                    $('#txtEXPNPT').val('');
                                    $('#txtPOSISI').val('');
                                    $('#txtEXPBDG').val('');
                                    $('#txaDESKJB').val('');
                                    $('#txtDATMSK').val('');
                                    $('#txtDATAKH').val('');
                                    $('#txtSALARY').val('');
                                }
                            </script>
                            <tr>
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>Pengalaman dan Sertifikasi</u></b><br></td>
                            </tr>

                            <tr>
                                <td>Nama Perusahaan</td>
                                <td>
                                    <input class="form-control" name="txtEXPNPT" id="txtEXPNPT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Perusahaan'" placeholder="Nama Perusahaan" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Bidang Usaha</td>
                                <td>
                                    <input class="form-control" name="txtEXPBDG" id="txtEXPBDG" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Usaha'" placeholder="Bidang Usaha" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Posisi</td>
                                <td>
                                    <input class="form-control" name="txtPOSISI" id="txtPOSISI" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Posisi'" placeholder="Posisi" style='width: 400px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Periode</td>
                                <td>
                                    <input class="form-control" name="txtDATMSK" id="txtDATMSK" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tgl Masuk'" placeholder="Tgl Masuk" style='width: 110px;text-align: left;'> s/d 
                                    <input class="form-control" name="txtDATAKH" id="txtDATAKH" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tgl Akhir'" placeholder="Tgl Akhir" style='width: 110px;text-align: left;'>
                                    <input name="txtRANGES" id="txtRANGES" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Range'" placeholder="Range" style='width: 110px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengalaman Kerja</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbEXPRNC" id="cmbEXPRNC">
                                        <?php
                                            foreach($optEXPRNC as $key=>$row){
                                                echo "<option value=".$key." >".$row."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Deskripsi Pekerjaan</td>
                                <td>
                                    <textarea class="form-control" name="txaDESKJB" id="txaDESKJB" rows=5 type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deskripsi Pekerjaan'" placeholder="Deskripsi Pekerjaan" value='' style='width: 650px;text-align: left;'></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Upah</td>
                                <td>
                                    <input class="form-control" name="txtSALARY" id="txtSALARY" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upah'" placeholder="Upah" value='' style='width: 130px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <!-- <td>
                                    &nbsp;
                                </td> -->
                                <td colspan=2>
                                    <button type="button" name="add" id="add" onclick="jvAdd()" class="genric-btn primary-border small" disbaled>
                                        <i class="fa fa-plus"></i> Tambah
                                    </button>
                                    <!-- <a id='cancel' href="<?php echo base_url(); ?>myjconnect/minat_kerja" class="genric-btn primary-border small"><i class="fas fas-rotate-right"></i> Reset</a> -->
                                    <!-- <button type="button" name="cancel" id="cancel" class="genric-btn danger-border small" disbaled>
                                        <img style="width: 18px;height:18px;text-align: center;" src="<?=base_url()?>resources/img/btnReset.png" alt=""> Reset
                                    </button> -->
                                </td>
                            </tr>

                            <tr>
                                <!-- <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td> -->
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>Daftar Pengalaman Kerja</u></b><br></td>
                            </tr>
                            <!-- table detail pengalaman kerja -->
                            <tr>
                                <td colspan=3>
                                    <table id="detail_pengalaman" class="tablemanager" style='border: 0px solid #bbb;width: 100%;'>

                                    <?php
                                        if($jml > 0){
                                            $i = 1;
                                            // print_r($detail);
                                            foreach($detail as $row){

                                                $idndtl = isset($row['EXP_IDENTS']) ? $row['EXP_IDENTS'] : NULL;
                                                $ptname = isset($row['EXP_PTNAME']) ? $row['EXP_PTNAME'] : NULL;
                                                $bidang = isset($row['EXP_BIDANG']) ? $row['EXP_BIDANG'] : NULL;
                                                $posisi = isset($row['EXP_POSISI']) ? $row['EXP_POSISI'] : NULL;
                                                $exprnc = isset($row['EXP_EXPRNC']) ? $row['EXP_EXPRNC'] : NULL;
                                                $datmsk = isset($row['MSKKRJ']) ? $row['MSKKRJ'] : NULL;
                                                $datakh = isset($row['KLRKRJ']) ? $row['KLRKRJ'] : NULL;
                                                $jbdesk = isset($row['EXP_JBDESK']) ? $row['EXP_JBDESK'] : NULL;
                                                $gajiny = isset($row['EXP_SALARY']) ? $row['EXP_SALARY'] : NULL;
                                                
                                                echo "
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                <b>".$posisi."</b><br>
                                                                ".$ptname." (".$bidang."/".$exprnc.")<br>
                                                                ".$datmsk." s/d ".$datakh."<br>
                                                                ".$jbdesk."<br>
                                                                Salary : Rp. ".number_format($gajiny,0).",-<br>
                                                                <button id='delete_exp' class='genric-btn danger small' onclick='jvDel();'>Hapus <i class='fa fa-times'></i></button>
                                                                <input type='hidden' name='txtIDNDTL' id='txtIDNDTL' value='".$idndtl."'>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                ";
                                                $i++;
                                            }
                                        }else{
                                            echo "
                                                <tr>
                                                    <td colspan=8 id='kosong' style='text-align:center'>Tidak ada pengalaman kerja yang di input.</td>
                                                </tr>
                                            ";
                                        }
                                    ?>

                                    </table>
                                </td>
                            </tr>
                            <tr style='display:none;'>
                                <td colspan=8 id='hidDetail' style='text-align:center'></td>
                            </tr>
                            <tr>
                                <td colspan=8 style='text-align:center'><hr></td>
                            </tr>
                            <tr id='fivj'>
                                <!-- <td>
                                    <img style="width: 180px;height:150px;border: 0px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: center;" src="<?=base_url()?>resources/img/Screenshot_BG.png" alt="">
                                </td> -->
                                <td>Foto Visa di Jepang</td>
                                <?php if($visafl != ''){?>
                                    <td>
                                        <img src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt="Avatar" class="image" style="width: 300px;height:200px;border: 3px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;">
                                    </td>
                                <?php }else{?>
                                    <td style='text-align: left;'><img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%"></td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <?php if($visafl != ''){?>
                                    <td>
                                        <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" target='_blank' alt=""><?=$visafl?>
                                        </a> <?=$not_click?>
                                    </td>
                                <?php }else{?>
                                    <td style='text-align: left;'><img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width: 150px;height:200px;border: 3px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;"></td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtVISAFL" id="txtVISAFL" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto Izin Visa Selama di Jepang'" placeholder="Foto Izin Visa Selama di Jepang"  style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- Sertifikat Level Bahasa Jepang -->
                            <tr id='slbj'>
                                <td>Sertifikat Level Bahasa Jepang</td>
                                <?php if($lvlbhs != ''){ ?>
                                    <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$lvlbhs?>" target='_blank'><?=$lvlbhs?></a> <?=$not_click?></td>
                                <?php }else{ ?>
                                    <td style='text-align: left;'>Belum ada berkas yang di upload.</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtLVLBHS" id="txtLVLBHS" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Level Bahasa Jepang'" placeholder="Sertifikat Level Bahasa Jepang"  style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- Sertifikat Spesial SKills Worker (SSW)/Surat Pernyataan Dari Perusahaan -->
                            <tr id='ssw'>
                                <td>Sertifikat SSW</td>
                                <?php if($sswfil != ''){ ?>
                                    <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$sswfil?>" target='_blank'><?=$sswfil?></a> <?=$not_click?></td>
                                <?php }else{ ?>
                                    <td style='text-align: left;'>Belum ada berkas yang di upload.</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtSSWFIL" id="txtSSWFIL" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Spesial Skills Worker (SSW)/Surat Pernyataan Dari Perusahaan'" placeholder="Sertifikat Spesial Skills Worker (SSW)/Surat Pernyataan Dari Perusahaan" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- File atau Foto Sertifikat -->
                            <tr id='srtmgg'>
                                <td>Sertifikat Magang (JITCO/OTIT)</td>
                                <?php if($magang != ''){ ?>
                                    <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$magang?>" target='_blank'><?=$magang?></a> <?=$not_click?></td>
                                <?php }else{ ?>
                                    <td style='text-align: left;'>Belum ada berkas yang di upload.</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtMAGANG" id="txtMAGANG" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Magang (JITCO/OTIT)'" placeholder="Sertifikat Magang (JITCO/OTIT)" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>                                        
                            <tr>
                                <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                            </tr>
                        <!-- ---------------------------------------- minat kerja ---------------------------------------------- -->
                            <tr>
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>Minat Kerja</u><br></b>
                                </td>
                            </tr>
                            <tr>
                                <td>Minat Bidang</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name='cmbMNTBDG' id='cmbMNTBDG'>
                                        <?php
                                            foreach($optBidang as $key=>$row){
                                                if($mntbid == $key){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$key." ".$selected.">".$row."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr id='bdlain_field'>
                                <td>Bidang Lain</td>
                                <td>
                                    <input class="form-control" name="txtBDLAIN" id="txtBDLAIN" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Lain'" placeholder="Bidang Lain" value='<?=$bdlain?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Perkiraan Gaji</td>
                                <td>
                                    <input class="form-control" name="txtEXPSAL" id="txtEXPSAL" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gaji'" placeholder="Gaji" value='<?=$expsal?>' style='width: 100px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Dokumen CV</td>
                                <?php if($filecv != ''){ ?>
                                    <td style='text-align: left;'>
                                        <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$filecv?>" target='_blank'><?=$filecv?></a> <?=$not_click?>
                                    </td>
                                <?php }else{ ?>
                                    <td style='text-align: left;'>Belum ada berkas yang di upload.</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="filFILECV" id="filFILECV" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Usaha'" placeholder="Bidang Usaha" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=4 style='text-align: right;background-color: white;'><hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/profile_edit/<?=$idpkrj?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" onclick="startProgress();" disbaled>
                                                        &nbsp;&nbsp;<i>Simpan</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>myjconnect" class="genric-btn primary-border small">Batal</a>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table><br>
        </form>
<?php
        }
    }
?>

<!-- --------------------------------------------------  pengalaman kerja dan sertifikasi ------------------------------------------------- -->
<?php
    if($type == 2){

        if($jenis == 'view'){
?>
            <table class='table1'>
                <tr>
                    <th colspan=4><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr>
                    <td colspan=4 width="1px" height="1px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'><b><u>Pengalaman dan Sertifikasi</u><br></b>
                    </td>
                </tr>
                <tr><td>Nama Perusahaan</td><td colspan=3><?=$expnpt?></td></tr>
                <tr><td>Pengalaman Kerja</td><td colspan=3><?=$exprnc?> Tahun</td></tr>
                <tr><td>Bidang Usaha</td><td colspan=3><?=$expbdg?></td></tr>
                <tr><td>Bidang Lain</td><td colspan=3><?=$bdlain?></td></tr>
                <tr>
                    <td>Foto Visa di Jepang</td>
                <?php if($visafl != '' || $visafl != null){?>
                    <td style='text-align: left;'><a><img style="width: 120px;height:120px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt=""></a></td>
                <?php }else{?>
                    <td style='text-align: left;'><img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%"></td>
                <?php }?>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" target='_blank'><?=$visafl?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td>Sertifikat Level Bahasa Jepang</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$lvlbhs?>" target='_blank'><?=$lvlbhs?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td>Sertifikat SSW</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$sswfil?>" target='_blank'><?=$sswfil?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td>Sertifikat Magang (JITCO/OTIT)</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$magang?>" target='_blank'><?=$magang?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
            </table><br>

<?php
        }else{
?>
<!-- -----------------------------------------------------  edit pengalaman kerja dan sertifikasi ----------------------------------------- -->
        
        <form action="/myjconnect/profile_simpan/<?=$idpkrj?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <tr>
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>Pengalaman dan Sertifikasi</u></b><br><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengalaman Kerja</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbEXPRNC" id="cmbEXPRNC">
                                        <?php
                                            foreach($optEXPRNC as $key=>$row){
                                                if($exprnc == $key){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$key." ".$selected.">".$row."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Perusahaan</td>
                                <td>
                                    <input class="form-control" name="txtEXPNPT" id="txtEXPNPT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Perusahaan'" placeholder="Nama Perusahaan" value='<?=$expnpt?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Bidang Usaha</td>
                                <td>
                                    <input class="form-control" name="txtEXPBDG" id="txtEXPBDG" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Usaha'" placeholder="Bidang Usaha" value='<?=$expbdg?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr id='fivj'>
                                <td>Foto Visa di Jepang</td>
                                <td style='text-align: left;'><a><img style="width: 120px;height:120px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt=""></a></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            <?php if($visafl != '' || $visafl != null){?>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" target='_blank'><?=$visafl?></a> <?=$not_click?></td>
                            <?php }else{?>
                                <td style='text-align: left;'><img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%"></td>
                            <?php }?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtVISAFL" id="txtVISAFL" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto Izin Visa Selama di Jepang'" placeholder="Foto Izin Visa Selama di Jepang"  style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- Sertifikat Level Bahasa Jepang -->
                            <tr id='slbj'>
                                <td>Sertifikat Level Bahasa Jepang</td>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$lvlbhs?>" target='_blank'><?=$lvlbhs?></a> <?=$not_click?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtLVLBHS" id="txtLVLBHS" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Level Bahasa Jepang'" placeholder="Sertifikat Level Bahasa Jepang"  style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- Sertifikat Spesial SKills Worker (SSW)/Surat Pernyataan Dari Perusahaan -->
                            <tr id='ssw'>
                                <td>Sertifikat SSW</td>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$sswfil?>" target='_blank'><?=$sswfil?></a> <?=$not_click?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtSSWFIL" id="txtSSWFIL" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Spesial Skills Worker (SSW)/Surat Pernyataan Dari Perusahaan'" placeholder="Sertifikat Spesial Skills Worker (SSW)/Surat Pernyataan Dari Perusahaan" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- File atau Foto Sertifikat -->
                            <tr id='srtmgg'>
                                <td>Sertifikat Magang (JITCO/OTIT)</td>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$magang?>" target='_blank'><?=$magang?></a> <?=$not_click?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtMAGANG" id="txtMAGANG" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Magang (JITCO/OTIT)'" placeholder="Sertifikat Magang (JITCO/OTIT)" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>                                        
                            <tr>
                                <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan=4 style='text-align: right;background-color: white;'><hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/profile_edit/<?=$idpkrj?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" onclick="startProgress();" disbaled>
                                                        &nbsp;&nbsp;<i>Simpan</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>myjconnect/pengalaman" class="genric-btn primary-border small">Batal</a>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table><br>
        </form>
<?php
        }
    }
?>

<!-- ----------------------------------------------------  Minat Kerja ------------------------------------------------------------- -->
<?php
    if($type == 3){

        if($jenis == 'view'){
?>
            <table class='table1'>
                <tr>
                    <th colspan=4><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'><b><u>Minat Kerja</u></b>
                    </td>
                </tr>
                <tr><td>Minat Bidang</td><td colspan=3><?=$mntbdg?></td></tr>
                <tr id='bdlain_field'><td>Bidang Lainnya</td><td colspan=3><?=$bdlain?></td></tr>
                <tr><td>Gaji yang Diinginkan</td><td colspan=3>Rp. <?=number_format($expsal,0)?>,-</td></tr>
                <tr>
                    <td>Dokumen CV</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$filecv?>" target='_blank'><?=$filecv?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
            </table>
            <br>

<?php
        }else{
?>
<!-- -------------------------------------------------------  edit minat kerja ------------------------------------------------------------ -->
        
        <form action="/myjconnect/minat_kerja_simpan/<?=$usr_idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <tr>
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>Minat Kerja</u></b>
                                </td>
                            </tr>
                            <tr>
                                <td>Minat Bidang</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name='cmbMNTBDG' id='cmbMNTBDG'>
                                        <?php
                                            foreach($optBidang as $key=>$row){
                                                if($mntbid == $key){
                                                    $selected = 'selected';
                                                }else{
                                                    $selected = '';
                                                }
                                                echo "<option value=".$key." ".$selected.">".$row."</option>";
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr id='bdlain_field'>
                                <td>Bidang Lain</td>
                                <td>
                                    <input class="form-control" name="txtBDLAIN" id="txtBDLAIN" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Lain'" placeholder="Bidang Lain" value='<?=$bdlain?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Perkiraan Gaji</td>
                                <td>
                                    <input class="form-control" name="txtEXPSAL" id="txtEXPSAL" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Usaha'" placeholder="Bidang Usaha" value='<?=$expsal?>' style='width: 100px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Dokumen CV</td>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$filecv?>" target='_blank'><?=$filecv?></a> <?=$not_click?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="filFILECV" id="filFILECV" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Usaha'" placeholder="Bidang Usaha" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=4 style='text-align: right;background-color: white;'><hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/profile_edit/<?=$idpkrj?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" onclick="startProgress();" disbaled>
                                                        &nbsp;&nbsp;Simpan</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>myjconnect/minat_kerja" class="genric-btn primary-border small">Batal</a>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table><br>
        </form>
<?php
        }
    }
?>

<!-- ----------------------------------------------------  Ubah Password ------------------------------------------------------------- -->
<?php
    if($type == 4){
?>
        
        <form action="/myjconnect/ubah_password_simpan/<?=$usr_idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <tr>
                                <td>Password Baru</td>
                                <td>
                                    <input class="form-control" name="txtPASWD1" id="txtPASWD1" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password Baru'" placeholder="Password Baru" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Ulangi Password Baru</td>
                                <td>
                                    <input class="form-control" name="txtPASWD2" id="txtPASWD2" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ulangi Password Baru'" placeholder="Ulangi Password Baru" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=4 style='text-align: right;background-color: white;'>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><i style='color:red;font-size: 10px;'>Note : Saran, gunakan kombinasi huruf besar, huruf kecil, angka dan simbol</i></b><hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" onclick="startProgress();" disbaled>
                                                        &nbsp;&nbsp;Simpan</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>myjconnect" class="genric-btn primary-border small">Batal</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table><br>
        </form>
<?php
    }
?>
<?php
    if($type == 5){
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
            .ignielMultiTab #tab2:checked ~ .content .tab2 {
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
                height: 300px;
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
             
            /*#tombol:hover
            {
                color: #000066;
                background-color: #0000ff;
                transition-duration: 700ms;
            }*/
             
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
                font-size: 15px;
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

            #tombol-beli:hover
            {
                font-size: 15px;
                color: #000066;
                background-color: #ff8080;
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
        </style>
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table1'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            
                            <tr>
                                <td>
                                    <fieldset class="ignielMultiTab">
                                      
                                        <input id="tab1" name="mTab" type="radio" checked="checked"/>
                                        <label for="tab1">Lamaran Aktif</label>
                                          
                                        <input id="tab2" name="mTab" type="radio"/>
                                        <label for="tab2">Semua Lamaran</label>
                                          
                                        <div class="content">
                                            
                                            <div class="tab1">
                                                <!-- -------------------------- tab 1 ------------------------------------ -->
                                                               
                                                    <!-- <h2>Daftar Lamaran Aktif Anda</h2> -->
                                                <ul id="bodynya" class="badan">
                                                <?php
                                                    $column = $this->m_pekerja->getApplayJob($idpkrj,1);
                                                    $jmlrow = count($column);

                                                    // print_r($column);
                                                    $idpekerja = '';
                                                    $idcompany = '';
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
                                                        
                                                        $btn = '<a id="tombol-beli" href="/myjconnect/hapus_lamaran/'.$IDAPPL.'" alt="Hapus Lamaran">Hapus Lamaran</a>';

                                                        if($STATUS == 'SUDAH TUTUP'){
                                                            $color = 'style="color:#339933;font-weight:900;"';
                                                        }else{
                                                            $color = 'style="color:red;font-weight:900;"';
                                                        }
                                                        
                                                        if($IDAPPL != $idjobappl){
                                                ?>
                                                            <li id="listnya" class="list-produk">
                                                            <?php if($LOGOSS != '' || $LOGOSS != null){?>
                                                                <img src="<?=base_url()?>assets/documents/upload/client/<?=$COMIDN?>/<?=$LOGOSS?>" alt="<?=$COMPNY?>">
                                                            <?php }else{?>
                                                                <img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
                                                            <?php }?>
                                                                
                                                                <h4><?=$COMPNY?></h4>
                                                                <h5><?=$TITLES?></h5>
                                                                <h5><?=$TYPESS?></h5>
                                                                <h5>Rp. <?=$SALMIN?> - <?=$SALMAX?></h5>
                                                                <h5 <?=$color?>><b><?=$STATUS?></b></h5>
                                                                <h5>Berlaku sampai <?=$EXPDAT?></h5>
                                                                
                                                                <!-- <button class="fa fa-bell" id="tombol" href="/myjconnect/hapus_lamaran/'.$IDAPPL.'"> Sudah <font size=3 style="color:orange"><?=$CVIEWS?></font> kali dilihat</button> -->
                                                                <a class="fa fa-bell" id="tombol" href="#">&nbsp;&nbsp;Sudah <font size=3 style="color:orange"><?=$CVIEWS?></font> kali dilihat</a><br><br>

                                                                <?=$btn?>
                                                            </li>
                                                <?php
                                                            $idjobappl = $IDAPPL;
                                                            $i++;
                                                        }

                                                    }
                                                ?>
                                                </ul>

                                            </div>

                                            <div class="tab2">
                                                <ul id="bodynya" class="badan">
                                                <?php
                                                    $column = $this->m_pekerja->getApplayJob($idpkrj,2);
                                                    $jmlrow = count($column);

                                                    // print_r($column);
                                                    $idpekerja = '';
                                                    $idcompany = '';
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
                                                        
                                                        if($row['APP_STATUS'] == '1'){
                                                            // $btn = '<button id="tombol-beli" href="/myjconnect/hapus_lamaran/'.$IDAPPL.'">Hapus Lamaran</button>';
                                                            $btn = '<a id="tombol-beli" href="/myjconnect/hapus_lamaran/'.$IDAPPL.'" alt="Hapus Lamaran">Hapus Lamaran</a>';
                                                        }else{
                                                            $btn = '<a id="tombol-disabled" href="#">Hapus Lamaran</a>';
                                                        }

                                                        if($STATUS == 'SUDAH TUTUP'){
                                                            $color = 'style="color:#339933;font-weight:900;"';
                                                        }else{
                                                            $color = 'style="color:red;font-weight:900;"';
                                                        }
                                                        
                                                        if($IDAPPL != $idjobappl){
                                                ?>
                                                            <li id="listnya" class="list-produk">
                                                            <?php if($LOGOSS != '' || $LOGOSS != null){?>
                                                                <img src="<?=base_url()?>assets/documents/upload/client/<?=$COMIDN?>/<?=$LOGOSS?>" alt="<?=$COMPNY?>">
                                                            <?php }else{?>
                                                                <img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
                                                            <?php }?>
                                                                    
                                                                <h4><?=$COMPNY?></h4>
                                                                <h5><?=$TITLES?></h5>
                                                                <h5><?=$TYPESS?></h5>
                                                                <h5>Rp. <?=$SALMIN?> - <?=$SALMAX?></h5>
                                                                <h5 <?=$color?>><b><?=$STATUS?></b></h5>
                                                                <h5>Berlaku sampai <?=$EXPDAT?></h5>
                                                                
                                                                <!-- <button class="fa fa-bell" id="tombol" href="/myjconnect/hapus_lamaran/'.$IDAPPL.'"> Sudah <font size=3 style="color:orange"><?=$CVIEWS?></font> kali dilihat</button> -->
                                                                <a class="fa fa-bell" id="tombol" href="#">&nbsp;&nbsp;Sudah <font size=3 style="color:orange"><?=$CVIEWS?></font> kali dilihat</a><br><br>

                                                                <?=$btn?>
                                                            </li>
                                                <?php
                                                            $idjobappl = $IDAPPL;
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

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" onclick="startProgress();" disbaled>
                                                        &nbsp;&nbsp;Simpan</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>myjconnect" class="genric-btn primary-border small">Batal</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table><br>
        
<?php
    }
?> 
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
<!-- Job List Area End -->
<script>
    $(document).ready(function(){         
        // $("a").slideUp();

        // When a link is clicked
       $("a.tab").click(function () {
            
           // switch all tabs off
           $(".active").removeClass("active");
            
           // switch this tab on
           $(this).addClass("active");
            
           // slide all elements with the class 'content' up
           $(".content").slideUp();
            
           // Now figure out what the 'title' attribute value is and find the element with that id.  Then slide that down.
           var content_show = $(this).attr("title");
           $("#"+content_show).slideDown();
          
       });
    });

    function tabSwitch(new_tab, new_content) {
         
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'none';       
        document.getElementById(new_content).style.display = 'block';   
         
     
        document.getElementById('tab1').className = '';
        document.getElementById('tab2').className = '';      
        document.getElementById(new_tab).className = 'active';      
     
    }

    function jvPopupUploadFoto(id){
        var idnya = id;        
        var modal = document.getElementById("PopupUploadFoto");// Get the modal        
        var btn = document.getElementById("myBtn");// Get the button that opens the modal
        var span = document.getElementsByClassName("close")[0];// Get the <span> element that closes the modal
        btn.onclick = function() {// When the user clicks the button, open the modal 
          modal.style.display = "block";
        }
        span.onclick = function() {// When the user clicks on <span> (x), close the modal
          modal.style.display = "none";
        }
        window.onclick = function(event) {// When the user clicks anywhere outside of the modal, close it
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
    }

    function Popup_close(id){
        $('#'+id+'').hide();
    }
</script>
<!-- popup upload foto -->
<!-- <div id="PopupUploadFoto" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
        <form enctype="multipart/form-data" method='post' action="<?= base_url() ?>myjconnect/upload_foto/<?=$usr_idents?>">
            <table>
                <tr>
                    <td>Foto :
                        <input class="form-control" name="fotoss" id="fotoss" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto'" placeholder="Foto" style='width: 500px;text-align: left;'>
                        <input name="txtFOTOSS" id="txtFOTOSS" type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button  class="genric-btn info circle" type="submit" id=submit>Simpan</button>&nbsp;
                        <a href="#" class="genric-btn danger circle" onclick="Popup_close('PopupUploadFoto')">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
  </div>
</div> -->

<!-- popup upload foto -->
<!-- <div id="PopupUploadLevelBahasa" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
        <table>
            <tr>
                <td>Foto
                    <input class="form-control" name="fotoss" id="fotoss" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto'" placeholder="Foto" value='<?=$expbdg?>' style='width: 500px;text-align: left;'>
                </td>
            </tr>
        </table>
  </div>
</div> -->
