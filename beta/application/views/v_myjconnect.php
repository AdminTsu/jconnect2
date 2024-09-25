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

        $cntrid = isset($row['PKR_CONTRY']) ? $row['PKR_CONTRY'] : NULL;
        $contry = isset($row['CONTRY']) ? $row['CONTRY'] : NULL;
        $prvnid = isset($row['PKR_PROVNC']) ? $row['PKR_PROVNC'] : NULL;
        $provnc = isset($row['PROVNC']) ? $row['PROVNC'] : NULL;
        $cityid = isset($row['PKR_CITYSS']) ? $row['PKR_CITYSS'] : NULL;
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
        background-color: #ffffff;
        /*position:fixed;*/
        position:relative;
        width: 100%;
    }
    a {
        color: #000066;
    }
    a:hover {
        /*background-color: #ffffff;*/
        color: #ff0066;
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
<!-- <form enctype="multipart/form-data" method='post' action="<?= base_url() ?>myjconnect/profile_simpan/"> -->
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
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/<?=$link_menu?>/<?=$idpkrj?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                            </div><br>
                            <?php }else{ ?>
                                <div class="single-listing">
                                    <!-- <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                &nbsp;&nbsp;Simpan</i>
                                    </button> -->
                                    <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" onclick="jvSave()" disbaled>&nbsp;&nbsp;<i>Simpan</i></button>
                                    <a id='cancel' href="<?php echo base_url(); ?>myjconnect" class="genric-btn primary-border small">Batal</a>
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

</style>

<!-- Right content -->
<!-- <script src="https://cdn.tiny.cloud/1/9bht0kml5e1c0a40l79e4uak0lvl3zivckvygufyfhilekor/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
<!-- <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/4/tinymce.min.js'></script> -->
<!-- <script src="https://cdn.tiny.cloud/1/9bht0kml5e1c0a40l79e4uak0lvl3zivckvygufyfhilekor/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->

<!-- <script type="text/javascript">
tinymce.init({
    selector: '#texarea',
    branding: false,
    toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    toolbar_mode: 'sliding',
    toolbar_sticky: true,
    plugins: 'lists advlist',
    advlist_number_styles: 'default,lower-alpha,lower-greek,lower-roman,upper-alpha,upper-roman',
});
// ,
//     plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
//   imagetools_cors_hosts: ['picsum.photos'],
//   menubar: 'file edit view insert format tools table help',
//   toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
//   toolbar_sticky: true,
//   autosave_ask_before_unload: true,
//   autosave_interval: "30s",
//   autosave_prefix: "{path}{query}-{id}-",
//   autosave_restore_when_empty: false,
//   autosave_retention: "2m",
//   image_advtab: true,
//   content_css: '//www.tiny.cloud/css/codepen.min.css',
//   link_list: [
//     { title: 'My page 1', value: 'http://www.tinymce.com' },
//     { title: 'My page 2', value: 'http://www.moxiecode.com' }
//   ],
//   image_list: [
//     { title: 'My page 1', value: 'http://www.tinymce.com' },
//     { title: 'My page 2', value: 'http://www.moxiecode.com' }
//   ],
//   image_class_list: [
//     { title: 'None', value: '' },
//     { title: 'Some class', value: 'class-name' }
//   ],
//   importcss_append: true,
//   file_picker_callback: function (callback, value, meta) {
//      Provide file and text for the link dialog 
//     if (meta.filetype === 'file') {
//       callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
//     }

//     /* Provide image and alt text for the image dialog */
//     if (meta.filetype === 'image') {
//       callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
//     }

//     /* Provide alternative source and posted for the media dialog */
//     if (meta.filetype === 'media') {
//       callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
//     }
//   },
//   templates: [
//         { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
//     { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
//     { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
//   ],
//   template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
//   template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
//   height: 300,
//   width: 650,
//   image_caption: true,
//   quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
//   noneditable_noneditable_class: "mceNonEditable",
//   toolbar_mode: 'sliding',
//   contextmenu: "link image imagetools table",
// });
</script> -->
<script>
$(document).ready(function(){
    $('#bdlain_field').hide();
     
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

    if(<?=$mntbid?> != 99){
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
            url: "/myjconnect_client/comboProvince/"+idcontry, // Isi dengan url/path file php yang dituju
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
            url: "/myjconnect_client/comboKota/"+idcontry+"/"+idprovnc, // Isi dengan url/path file php yang dituju
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

function jvSave(){
    var idpkrj = <?=$idpkrj?>;
    var nomors = $('#txtNOMPKR').val(); 
    var namess = $('#txtNAMESS').val();
    // var fotoss = $('#txtFOTOSS').val();
    var fotoss = $('#txtFOTOSS')[0].files[0];
    var birthp = $('#txtBIRTHP').val();
    var birthd = $('#datBIRTHD').val();
    var emails = $('#txtEMAILS').val();
    var contry = $('#cmbCONTRY').val();
    var provnc = $('#cmbPROVNC').val();

    var cityss = $('#cmbCITYSS').val();
    var addres = $('#txaADDRES').val();
    var addrdo = $('#txaADDRDO').val();
    var nomktp = $('#txtNOMKTP').val();
    var nonpwp = $('#txtNONPWP').val();
    var nomtlp = $('#txtNOMTLP').val();
    var nomrhp = $('#txtNOMRHP').val();
    var jnsklm = $('#cmbSEXESS').val();
    var relign = $('#cmbRELIGN').val();
    var eductn = $('#cmbEDUCTN').val();
    var marrid = $('#cmbMARRID').val();

    var expnpt = $('#txtEXPNPT').val();
    var posisi = $('#txtPOSISI').val();
    var exprnc = $('#cmbEXPRNC').val();
    var deskjb = $('#txaDESKJB').val();

    var visafl = $('#txtVISAFL').val();
    var lvlbhs = $('#txtLVLBHS').val();
    var sswfil = $('#txtSSWFIL').val();
    var magang = $('#txtMAGANG').val();
    var mntbdg = $('#cmbMNTBDG').val();
    var bdlain = $('#txtBDLAIN').val();
    var expsal = $('#txtEXPSAL').val();
    var filecv = $('#filFILECV').val();
    var active = $('#cmbACTIVE').val();
    var param = {};

    param['idpkrj'] = idpkrj; param['nomors'] = nomors;
    param['namess'] = namess; param['fotoss'] = fotoss;
    param['birthp'] = birthp; param['birthd'] = birthd;
    param['emails'] = emails; param['contry'] = contry;
    param['provnc'] = provnc; param['cityss'] = cityss;
    param['addres'] = addres; param['addrdo'] = addrdo;
    param['nomktp'] = nomktp; param['nonpwp'] = nonpwp;
    param['nomtlp'] = nomtlp; param['nomrhp'] = nomrhp;
    param['jnsklm'] = jnsklm; param['relign'] = relign;
    param['eductn'] = eductn; param['marrid'] = marrid;

    param['expnpt'] = expnpt; param['posisi'] = posisi;
    param['exprnc'] = exprnc; param['deskjb'] = deskjb;

    param['visafl'] = visafl; param['lvlbhs'] = lvlbhs;
    param['sswfil'] = sswfil; param['magang'] = magang;
    param['mntbdg'] = mntbdg; param['bdlain'] = bdlain;
    param['expsal'] = expsal; param['filecv'] = filecv;
    param['active'] = active;

    var prm = {};
    var detail = {};
    var i = 1;
    $('#detail_pengalaman tbody tr').each(function() {
        $('#detail_pengalaman tr').not('thead tr');
        var expnam = $(this).find('td').eq(0).text();
        var expbdg = $(this).find('td').eq(1).text();
        var posisi = $(this).find('td').eq(2).text();
        var explen = $(this).find('td').eq(3).text();
        var expdes = $(this).find('td').eq(4).text();

        // alert(i+'~'+expnam+'~'+expbdg+'~'+posisi+'~'+explen+'~'+expdes);
        prm['expnam'] = expnam;
        prm['expbdg'] = expbdg;
        prm['posisi'] = posisi;
        prm['explen'] = explen;
        prm['expdes'] = expdes;
        // detail = JSON.stringify(prm);
        i++;
    });
    param['detail'] = prm;

    // var detail = $('#hidDETAIL').val(JSON.stringify(param));
    // param['detail'] = detail;
    // return;

    if(confirm('Simpan data?')){
        $.post('/Myjconnect/profile_simpan/'+idpkrj+'/',param,function(rebound){
            alert('Data berhasil di simpan!');

        });
    };
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
<!-- ----------------------------------------------------  view profile ------------------------------------------------------------- -->
                <!-- <tr>
                    <td><span><b><?=$icon?>&nbsp;&nbsp;<?=$menu?></b></span></td>
                </tr> -->
            <table class='table1'>
                <tr>
                    <th colspan=3><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <!-- <tr>
                    <td colspan=3 style='text-align: right;'>
                        <div class="single-listing">
                            <div id='single-listing' class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/profile_edit/<?=$usr_idents?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                            </div><br>
                        </div>
                    </td>
                </tr> -->
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
                <!-- <tr>
                    <td  width="300px">Level Pengalaman</td>
                    <td colspan=3><?=$level_exp?> (<?=$ket_exp?>) Bidang <?=$expbdg?></td>
                </tr> -->

                <tr><td style="top: 0;">No. Member</td><td colspan=2>: <?=$nompkr?></td></tr>
                <tr><td style="top: 0;">Tempat, Tgl. Lahir</td><td colspan=2>: <?=$tmplhr?>, <?=$tgllhr_conv?></td></tr>
                <tr><td style="top: 0;">No. KTP</td><td colspan=2>: <?=$nomktp?></td></tr>
                <tr><td style="top: 0;">No. NPWP</td><td colspan=2>: <?=$nonpwp?></td></tr>
                <tr><td style="top: 0;">Jenis Kelamin</td><td colspan=2>: <?=$jnsklm?></td></tr>
                <tr><td style="top: 0;">Agama</td><td colspan=2>: <?=$relgin?></td></tr>
                <tr><td style="top: 0;">Pendidikan</td><td colspan=2>: <?=$eductn?></td></tr>
                <tr><td style="top: 0;">Status Pernikahan</td><td colspan=2>: <?=$marred?></td></tr>
                <!-- <tr><td style="top: 0;">Negara</td><td colspan=2>: <?=$contry?></td></tr>
                <tr><td style="top: 0;">Provinsi</td><td colspan=2>: <?=$provnc?></td></tr>
                <tr><td style="top: 0;">Kota</td><td colspan=2>: <?=$cityss?></td></tr> -->
                <tr><td style="top: 0;">Alamat Sesuai KTP</td><td colspan=2>: <?=$addres?></td></tr>
                <tr><td style="top: 0;">Alamat Sesuai Domisili</td><td colspan=2>: <?=$addrdo?></td></tr>
                <tr><td>No. Telp</td><td colspan=2>: <?=$nomtlp?></td></tr>
                <!-- <tr><td>No. Handphone</td><td colspan=2>: <?=$nomrhp?></td></tr> -->
                <tr>
                    <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <!-- --------------------------------------  view Pengalaman kerja ----------------------------------------------- -->
                <tr>
                    <td width="10px" height="10px" style='text-align: left;'><b><u>Pengalaman Kerja</u></b>
                    </td>
                </tr>
                <!-- <tr><td>Nama Perusahaan</td><td colspan=2>: <?=$expnpt?></td></tr>
                <tr><td>Pengalaman Kerja</td><td colspan=2>: <?=$exprnc?> Tahun</td></tr>
                <tr><td>Bidang Usaha</td><td colspan=2>: <?=$expbdg?></td></tr>
                <tr>
                    <td colspan=2><b>Daftar Pengalaman</b></td>
                    <td>&nbsp;</td>
                </tr> -->
                <tr>
                    <!-- <td>&nbsp;</td> -->
                    <td colspan=3>
                        <?php

                            // $this->table->set_heading('Name', 'Bidang', 'Posisi');
                            // $this->table->add_row('Ujang', 'Elektro', 'Operator Produksi');

                            // echo $this->table->generate();

                        ?>
                        <table id="item-list" class="tablemanager" style='border: 1px solid #bbb;width: 100%;'>
                            <thead>
                                <tr class="table-primary" style='border: 1px solid #bbb;'>
                                    <th style="text-align: center;border: 1px solid #bbb;column-width: 20%;font-size:10px;">Nama</th>
                                    <th style="text-align: center;border: 1px solid #bbb;column-width: 25%;font-size:10px;">Bidang</th>
                                    <th style="text-align: center;border: 1px solid #bbb;column-width: 20%;font-size:10px;">Posisi</th>
                                    <th style="text-align: center;border: 1px solid #bbb;column-width: 10%;font-size:10px;">Lama Kerja</th>
                                    <th style="text-align: center;border: 1px solid #bbb;column-width: 25%;font-size:10px;">Jobdesk</th>
                                </tr>
                            </thead>
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
            $jbdesk = isset($row['EXP_JBDESK']) ? $row['EXP_JBDESK'] : NULL;

            echo "
                <tr style='border: 1px solid #bbb;'>
                    <td style='border: 1px solid #bbb;'>".$ptname."</td>
                    <td style='border: 1px solid #bbb;'>".$bidang."</td>
                    <td style='border: 1px solid #bbb;'>".$posisi."</td>
                    <td style='border: 1px solid #bbb;'>".$exprnc."</td>
                    <td style='border: 1px solid #bbb;'>".$jbdesk."</td>
                </tr>
            ";
            $i++;
        }
    }else{
        echo "
            <tr>
                <td colspan=8 style='text-align:center'>Maaf, perusahaan anda belum ada pemasangan lowongan kerja, silahkan mulai membuat lowongan kerja anda.</td>
            </tr>
        ";
    }
?>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <!-- --------------------------------------  view Sertifikasi ----------------------------------------------- -->
                <tr>
                    <td width="10px" height="10px" style='text-align: left;'><b><u>Sertifikasi</u></b>
                    </td>
                </tr>
                <tr style="top: 0;">
                    <!-- <td>&nbsp;</td> -->
                    <td style='text-align: left;'>
                        <a>
                        <?php if($visafl != ''){?>
                            <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt="">
                        <?php }else{?>
                            <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>resources/img/no-image.jpg" alt="Avatar" class="image">
                        <?php }?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="float:top">Foto Visa di Jepang</td>
                    <?php if($visafl != ''){?>
                        <td colspan=2>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" target='_blank'><?=$visafl?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td>Sertifikat Level Bahasa Jepang</td>
                    <?php if($lvlbhs != ''){?>
                        <td colspan=2>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$lvlbhs?>" target='_blank'><?=$lvlbhs?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td>Sertifikat SSW</td>
                    <?php if($sswfil != ''){?>
                        <td colspan=2>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$sswfil?>" target='_blank'><?=$sswfil?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td>Sertifikat Magang (JITCO/OTIT)</td>
                    <?php if($magang != ''){?>
                        <td colspan=2>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$magang?>" target='_blank'><?=$magang?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <!-- ---------------------------------------------  view minat kerja ------------------------------------------------------ -->
                <tr>
                    <td width="10px" height="10px" style='text-align: left;'><b><u>Minat Kerja</u></b>
                    </td>
                </tr>
                <tr><td>Minat Bidang</td><td colspan=2>: <?=$mntbdg?></td></tr>
                <tr id='bdlain_field'><td>Bidang Lainnya</td><td colspan=2>: <?=$bdlain?></td></tr>
                <tr><td>Gaji yang Diinginkan</td><td colspan=2>: Rp. <?=number_format($expsal,0)?>,-</td></tr>
                <tr>
                    <td>Dokumen CV</td>
                    <?php if($filecv != ''){?>
                        <td colspan=2>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$filecv?>" target='_blank'><?=$filecv?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
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
                                <!-- <td style='text-align: center;'>
                                    <a>
                                        <img style="width: 180px;height:150px;border: 0px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: center;" src="<?=base_url()?>resources/img/Screenshot_BG.png" alt="">
                                    </a>
                                </td> -->
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

                        <!-- ---------------------------------------- pengalaman kerja --------------------------------------------------- -->
                            <script type="text/javascript">
                                $(document).ready(function(){

                                });

                                function jvAdd(){
                                    var explen = $('#cmbEXPRNC option:selected').text();
                                    var exlnid = $('#cmbEXPRNC option:selected').val();
                                    var expnam = $('#txtEXPNPT').val();
                                    var expbdg = $('#txtEXPBDG').val();
                                    var posisi = $('#txtPOSISI').val();
                                    var expdes = $('#txaDESKJB').val();
                                    // var expdes = tinymce.activeEditor.getContent('txaDESKJB');
                                    // var expdes = tinymce.get("txaDESKJB").getContent();
                                    // var btndel = '<?php echo base_url()."myjconnect/pengalaman_delete/".$idpkrj; ?>';

                                    if(expnam == ''){
                                        alert('Nama Perusahaan belum diisi!');
                                        return;
                                    }
                                    if(expbdg == ''){
                                        alert('Bidang Usaha belum diisi!');
                                        return;
                                    }
                                    if(expdes == ''){
                                        alert('Deskripsi pekerjaan belum diisi!');
                                        return;
                                    }
                                    
                                    $('#detail_pengalaman').append('<tr style="border: 1px solid #bbb;"><td style="border: 1px solid #bbb;font-size:10px;column-width: 25%;" id="expnam">'+expnam+'</td><td style="border: 1px solid #bbb;font-size:10px;column-width: 25%;" id="expbdg">'+expbdg+'</td><td style="border: 1px solid #bbb;font-size:10px;column-width: 15%;" id="explen">'+posisi+'</td><td style="border: 1px solid #bbb;font-size:10px;column-width: 15%;" id="posisi">'+explen+'</td><td style="border: 1px solid #bbb;font-size:10px;column-width: 25%;" id="expdes">'+expdes+'</td><td style="border: 1px solid #bbb;font-size:10px;column-width: 5%;text-align:center;"><button id="delete_exp" class="genric-btn danger small" onclick="jvDel();"><i class="fa fa-times"></i></button></td><td style="border: 1px solid #bbb;display:none;">'+exlnid+'</td></tr>');

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
                                    // tinymce.get("txaDESKJB").setContent("");
                                    // tinymce.activeEditor.setContent('');
                                }
                            </script>
                            <tr>
                                <th colspan=3>Pengalaman Kerja</th>
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
                                <td>Pengalaman Kerja</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbEXPRNC" id="cmbEXPRNC">
                                        <?php
                                            foreach($optEXPRNC as $key=>$row){
                                                // if($exprnc == $key){
                                                //     $selected = 'selected';
                                                // }else{
                                                //     $selected = '';
                                                // }".$selected."
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
                                <!-- <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td> -->
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>Daftar Pengalaman Kerja</u></b><br></td>
                            </tr>
                            <!-- table detail pengalaman kerja -->
                            <tr>
                                <!-- <td>
                                    &nbsp;
                                </td> -->
                                <td colspan=2>
                                    <button type="button" name="add" id="add" onclick="jvAdd()" class="genric-btn primary-border small" disbaled>
                                        <i class="fa fa-plus"></i> Add
                                    </button>
                                    <!-- <a id='cancel' href="<?php echo base_url(); ?>myjconnect/minat_kerja" class="genric-btn primary-border small"><i class="fas fas-rotate-right"></i> Reset</a> -->
                                    <!-- <button type="button" name="cancel" id="cancel" class="genric-btn danger-border small" disbaled>
                                        <img style="width: 18px;height:18px;text-align: center;" src="<?=base_url()?>resources/img/btnReset.png" alt=""> Reset
                                    </button> -->
                                </td>
                            </tr>
                            <tr>
                                <td colspan=3>
                                    <table id="detail_pengalaman" class="tablemanager" style='border: 1px solid #bbb;width: 100%;'>
                                        <thead>
                                            <tr class="table-primary" style='border: 1px solid #bbb;'>
                                                <th style="text-align: center;border: 1px solid #bbb;column-width: 25%;font-size:10px;">Perusahaan</th>
                                                <th style="text-align: center;border: 1px solid #bbb;column-width: 25%;font-size:10px;">Bidang</th>
                                                <th style="text-align: center;border: 1px solid #bbb;column-width: 20%;font-size:10px;">Posisi</th>
                                                <th style="text-align: center;border: 1px solid #bbb;column-width: 15%;font-size:10px;">Lama Kerja</th>
                                                <th style="text-align: center;border: 1px solid #bbb;column-width: 15%;font-size:10px;">Jobdesk</th>
                                                <th class="disableFilterBy disableSort" style="text-align: center;border: 1px solid #bbb;column-width: 5%;font-size:10px;">Hapus</th>
                                            </tr>
                                        </thead>
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
            $jbdesk = isset($row['EXP_JBDESK']) ? $row['EXP_JBDESK'] : NULL;

            echo "
                <tr style='border: 1px solid #bbb;'>
                    <td style='border: 1px solid #bbb;'>".$ptname."</td>
                    <td style='border: 1px solid #bbb;'>".$bidang."</td>
                    <td style='border: 1px solid #bbb;'>".$posisi."</td>
                    <td style='border: 1px solid #bbb;'>".$exprnc."</td>
                    <td style='border: 1px solid #bbb;'>".$jbdesk."</td>
                    <td style='border: 1px solid #bbb;font-size:10px;column-width: 5%;text-align:center;'><button id='delete_exp' class='genric-btn danger small' onclick='jvDel();'><i class='fa fa-times'></i></button></td>
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
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style='display:none;'>
                                <td colspan=8 id='hidDetail' style='text-align:center'></td>
                            </tr>
                            <tr>
                                <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                            </tr>

                        <!-- ---------------------------------------- sertifikasi --------------------------------------------------- -->
                            <tr>
                                <!-- <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>Sertifikasi</u></b><br></td> -->
                                <th colspan=3>Sertifikasi</th>
                            </tr>
                            <tr id='fivj'>
                                <!-- <td>
                                    <img style="width: 180px;height:150px;border: 0px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: center;" src="<?=base_url()?>resources/img/Screenshot_BG.png" alt="">
                                </td> -->
                                <?php if($visafl != ''){?>
                                <td>
                                    <img src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt="Avatar" class="image" style="width: 150px;height:150px;border: 3px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;">
                                    <p>Foto Visa</p>
                                </td>
                                <td>
                                    <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" target='_blank' alt=""><?=$visafl?>
                                    </a> <?=$not_click?>
                                </td>
                                <?php }else{?>
                                <td style='text-align: left;'><img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width: 150px;height:150px;border: 3px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;"></td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td>Foto Visa di Jepang</td>
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
                        <!-- ---------------------------------------- minat kerja --------------------------------------------------- -->
                            <tr>
                                <!-- <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>Minat Kerja</u><br></b> -->
                                <th colspan=3>Minat Kerja</th>
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
                                    <input class="form-control" name="txtEXPSAL" id="txtEXPSAL" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gaji'" placeholder="Gaji" value='<?=$expsal?>' style='width: 110px;text-align: right;'>
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
                                <td colspan=3 style='text-align: right;background-color: white;'><hr>
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
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" onclick="jvSave()" disbaled>
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
                    <th colspan=3><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr>
                    <td colspan=3 width="1px" height="1px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <tr>
                    <td width="10px" height="10px" style='text-align: left;'><b><u>Pengalaman dan Sertifikasi</u><br></b>
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
                    <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
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
                            <!-- <tr>
                                <td colspan=2>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/profile_edit/<?=$usr_idents?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;Simpan</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>myjconnect/pengalaman" class="genric-btn primary-border small">Batal</a>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </td>
                            </tr> -->
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
                            <tr>
                                <td>Posisi</td>
                                <td>
                                    <input class="form-control" name="txtPOSISI" id="txtPOSISI" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Posisi'" placeholder="Posisi" value='<?=$expbdg?>' style='width: 500px;text-align: left;'>
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
                                <td colspan=3 style='text-align: right;background-color: white;'><hr>
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
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
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
                    <th colspan=3><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr>
                    <td width="10px" height="10px" style='text-align: left;'><b><u>Minat Kerja</u></b>
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
                    <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
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
                                    <input class="form-control" name="txtEXPSAL" id="txtEXPSAL" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Perkiraan Gaji'" placeholder="Perkiraan Gaji" value='<?=$expsal?>' style='width: 100px;text-align: right;'>
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
                                <td colspan=3 style='text-align: right;background-color: white;'><hr>
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
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
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
                                <td colspan=3 style='text-align: right;background-color: white;'>
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
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
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
                height: 310px;
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
                                        <label for="tab1">Semua Lamaran</label>
                                          
                                        <input id="tab2" name="mTab" type="radio"/>
                                        <label for="tab2">Lamaran Aktif</label>
                                          
                                        <div class="content">
                                            
                                            <div class="tab1">
                                                <!-- -------------------------- tab 1 ------------------------------------ -->
                                                
                                                <!-- <h2>Daftar Semua Lamaran Anda</h2> -->
                                                <ul id="bodynya" class="badan">
                                                <?php
                                                    $column = $this->m_pekerja->getApplayJob($idpkrj,0);
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
                                            
                                            <!-- <h2>Daftar Lamaran Aktif</h2> -->
                                            <div class="tab2">
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
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
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
