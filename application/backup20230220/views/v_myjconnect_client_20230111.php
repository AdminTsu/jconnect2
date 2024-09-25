<?php
$levels = $this->session->userdata('USR_LEVELS');
$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_idents = $this->session->userdata('USR_IDENTS');
$optCountry = $this->crud->getCommon(3,7);
$optBidang = $this->m_jconnect->getBidangKerja();
$arrJOBS = $this->m_job->getJobUpdate();
$optJeniss = array('0'=>'--Pilih Data--','1'=>'Kontrak','2'=>'Tetap');

    // print_r($data);
    foreach($data as $row){
        // if($type==1){
            $mmbrno = isset($row['CLI_NOMORS']) ? $row['CLI_NOMORS'] : NULL;
            $idclnt = isset($row['CLI_IDENTS']) ? $row['CLI_IDENTS'] : NULL;
            $logoss = isset($row['CLI_LOGOSS']) ? $row['CLI_LOGOSS'] : NULL;
            $namess = isset($row['CLI_NAMESS']) ? $row['CLI_NAMESS'] : NULL;
            $emails = isset($row['USR_EMAILS']) ? $row['USR_EMAILS'] : NULL;
            $nomtlp = isset($row['CLI_PHONES']) ? $row['CLI_PHONES'] : NULL;
            $nomrhp = isset($row['CLI_MOBILE']) ? $row['CLI_MOBILE'] : NULL;
            $addres = isset($row['CLI_ADDRES']) ? $row['CLI_ADDRES'] : NULL;
            $picnya = isset($row['CLI_CONTAC']) ? $row['CLI_CONTAC'] : NULL;
            $websit = isset($row['CLI_WEBSIT']) ? $row['CLI_WEBSIT'] : NULL;
            $cntrid = isset($row['CLI_CONTRY']) ? $row['CLI_CONTRY'] : NULL;
            $contry = isset($row['CONTRY']) ? $row['CONTRY'] : NULL;
            $prvnid = isset($row['CLI_PROVNC']) ? $row['CLI_PROVNC'] : NULL;
            $provnc = isset($row['PROVNC']) ? $row['PROVNC'] : NULL;
            $cityid = isset($row['CLI_CITYSS']) ? $row['CLI_CITYSS'] : NULL;
            $cityss = isset($row['CITY']) ? $row['CITY'] : NULL;
            $bdngid = isset($row['CLI_ASPECS']) ? $row['CLI_ASPECS'] : NULL;
            $bidang = isset($row['BIDANG']) ? $row['BIDANG'] : NULL;
            $bdlain = isset($row['CLI_BDLAIN']) ? $row['CLI_BDLAIN'] : NULL;
            $vacncy = isset($row['CLI_VACNCY']) ? $row['CLI_VACNCY'] : NULL;
            $faxnom = isset($row['CLI_FAXNUM']) ? $row['CLI_FAXNUM'] : NULL;
            $descre = isset($row['CLI_DESCRE']) ? $row['CLI_DESCRE'] : NULL;
        // }
            if($bdngid == 99){
                $bidang = $bdlain;
            }

            if($bdngid != 99){
                $bdngid = 0;
            }
    }

    if($logoss != ''){
        $not_click = "<font color='red'>(click untuk melihat berkas)</font>";
    }else{
        $not_click = "";
    }

$optPrvince = $this->m_master->getComboProvince_change($cntrid);
$optCity = $this->m_master->getComboKota_change($cntrid,$prvnid);
?>
<!-- Right content -->
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

    // $('#submit').hide();

    if(<?=$bdngid?> == 99){
        $("#bidanglain").show();
    }else{
        $("#bidanglain").hide();
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
            alert('Kata sandi yang Anda masukkan salah, harap masukkan kata sandi lagi!');
            $('#txtPASWD2').val('');
            $('#txtPASWD2').focus();
            return;
        }
    });

    $( function() {
        $( "#datBIRTHD,#datEXPDAT" ).datepicker({
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


function jvChangeBidang(){
    var bidgid = $('#cmbASPECS option:selected').val();
    var bidang = $('#cmbASPECS option:selected').text();
    // alert(check);
    if(bidang == 'BIDANG LAINNYA' || bidgid == 99){
        $('#bidanglain').show();
    }else{
        $('#bidanglain').hide();
    }
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
            url: "/Myjconnect_Client/comboProvince/"+idcontry, // Isi dengan url/path file php yang dituju
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
            url: "/Myjconnect_Client/comboKota/"+idcontry+"/"+idprovnc, // Isi dengan url/path file php yang dituju
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
        width: 100%;
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

<!-- ------------------------------------------------- script modal popup ------------------------------------------------------------------ -->
<script type="text/javascript">
$(document).ready(function(){

});
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<style type="text/css">
 body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button yang digunakan untuk membuka contact form - dipasang di bagian bawah halaman */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* form popup  - disembunyikan secara default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  /*border: 3px solid #f1f1f1;*/
  z-index: 9;
}

/* Tambahkan styles ke container form  */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Lebar maksimum untuk field input */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Saat inputan menjadi fokus, lakukan sesuatu */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* atur a style untuk submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Tambahkan warna merah untuk button cancel */
.form-container .cancel {
  background-color: red;
}

/* Tambahkan beberapa efek hover ke button */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<!-- ------------------------------------------------- script modal popup ------------------------------------------------------------------ -->

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
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client"><i class="fa fa-user"></i>&nbsp;&nbsp;Profile Perusahaan</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/lowongan/<?=$idclnt?>"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;List Lowongan</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/pelamar/<?=$idclnt?>"><i class="fa fa-archive"></i>&nbsp;&nbsp;Lamaran Pekerja</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/perekrutan/<?=$idclnt?>"><i class="fa fa-book"></i>&nbsp;&nbsp;Perekrutan</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/laporan"><i class="fa fa-file"></i>&nbsp;&nbsp;Laporan</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                            </div><br>
                            <?php if($jenis == 'view' and $type == 1){ ?>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/<?=$link_menu?>/<?=$idclnt?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                            </div><br>
                            <?php }
                                if($jenis == 'view' and ($type == 2 || $type == 5)){
                            ?>
                            <div class="single-listing">
                                <!-- <button class='genric-btn primary-border small' href=<?php echo base_url(); ?>myjconnect_client/<?=$link_menu?>/<?=$idclnt?>><i class='fa fa-plus'></i>&nbsp;Tambah</button> -->
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/<?=$link_menu?>/<?=$idclnt?>" class="genric-btn primary-border small"><i class="fa fa-plus">&nbsp;Tambah</i></a>
                            </div><br>
                            <!-- <div class="single-listing">
                                <a id='menu_web' style='color:#000066' onclick="openForm()" class="genric-btn primary-border small"><i class="fa fa-plus">&nbsp;&nbsp;Tambah Popup</i></a>
                            </div><br> -->
                            <?php } ?>

                        </div>
                        <div class="result"></div>

                </div>

            </div>

<!-- Right content -->
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
            <table class='table1'>
                <tr>
                    <th colspan=4><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr>
                    <td rowspan=5>
                        <center>
                            <div class="container_img">
                            <?php if($logoss != '' || $logoss != null){?>
                                <img style='height: 150px;' src="<?=base_url()?>assets/documents/upload/client/<?=$idclnt?>/<?=$logoss?>" alt="Avatar" class="image" style="width:100%">
                            <?php }else{?>
                                <img style='height: 150px;' src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image">
                            <?php }?>
                                <div class="middle">
                                    </div>
                                </div>
                            </div>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan=3><h4><?=$namess?></h4></a></td>
                </tr>
                <tr>
                    <td colspan=3><i class="fa fa-globe"></i>&nbsp;&nbsp;<a href="https://<?=$websit?>" target="_blank"><?=$websit?></a></td>
                </tr>
                <tr>
                    <td style='text-align: left;'><i class="fas fa-phone"></i>&nbsp;&nbsp;<?=$nomtlp?></td>
                    <td style='text-align: left;'><i class="fas fa-mobile">&nbsp;&nbsp;</i><?=$faxnom?></td>
                </tr>
                <tr>
                    <td><i class="fas fa-desktop"></i>&nbsp;&nbsp;<?=$bidang?></td>
                    <td style='text-align: left;'><i class="ti-email"></i>&nbsp;&nbsp;<?=$emails?></td>
                </tr>

                <tr>
                    <td colspan=4 width="1px" height="1px" style='text-align: center;'><b><hr></b>
                    </td>
                </tr>
                <tr><td style="top: 0;">No. Member</td><td colspan=3>: <?=$mmbrno?></td></tr>
                <tr><td style="top: 0;">Alamat</td><td colspan=3>: <?=$addres?></td></tr>
                <tr><td style="top: 0;">Lokasi</td><td colspan=3>: <?=$provnc?> - <?=$cityss?>, <?=$contry?></td></tr>
                <tr><td style="top: 0;">PIC</td><td colspan=3>: <?=$picnya?></td></tr>
                <tr><td style="top: 0;">No. Handphone</td><td colspan=3>: <?=$nomrhp?></td></tr>
                <tr><td style="top: 0;">Tentang Kami</td><td colspan=3>: <?=$descre?></td></tr>
            </table><br>

<?php
        }else{
?>
<!-- -------------------------------------------------------  edit profile --------------------------------------------------------------- -->
        
        <form action="/myjconnect_client/profile_simpan/<?=$idclnt?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
            <table class='table1'>
                
                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <tr>
                                <td colspan=2>&nbsp;</td>
                            </tr>
                            <tr>
                                <!-- <td style='text-align: center;'>
                                    <a>
                                        <img style="width: 180px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: center;" src="<?=base_url()?>resources/img/Screenshot_BG.png" alt="">
                                    </a>
                                </td> -->
                                <td style='text-align: left;'>
                                    <a>
                                    <?php if($logoss != '' || $logoss != null){?>
                                        <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/client/<?=$idclnt?>/<?=$logoss?>" alt="">
                                    <?php }else{?>
                                        <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
                                    <?php }?>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Upload Logo</td>
                                <td>
                                    <input class="form-control" name="txtLOGOSS" id="txtLOGOSS" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Logo'" placeholder="Upload Logo" style='width: 300px;'>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Member</td>
                                <td>
                                    <input class="form-control" name="txtNOMORS" id="txtNOMORS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Member'" placeholder="No. Member" value='<?=$mmbrno?>' readonly style='width: 150px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Perusahaan</td>
                                <td>
                                    <input class="form-control" name="txtNAMESS" id="txtNAMESS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Perusahaan'" placeholder="Nama Perusahaan" value='<?=$namess?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Bidang Usaha</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbASPECS" id="cmbASPECS" onchange="jvChangeBidang()">
                                        <?php
                                            foreach($optBidang as $key=>$row){
                                                if($bdngid == $key){
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
                            <tr id='bidanglain'>
                                <td>Bidang lain</td>
                                <td>
                                    <input class="form-control" name="txtBDLAIN" id="txtBDLAIN" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Lain'" placeholder="Bidang Lain" value='<?=$bdlain?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Deskripsi Perusahaan</td>
                                <td>
                                    <textarea class="form-control" name="txaDESCRE" id="txaDESCRE" type="text" rows=4 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deskripsi Perusahaan'" placeholder="Deskripsi Perusahaan" style='width: 650px;text-align: left;'><?=$descre?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>
                                    <textarea class="form-control" name="txaADDRES" id="txaADDRES" type="text" rows=3 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" placeholder="Alamat" style='width: 650px;text-align: left;'><?=$addres?></textarea>
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
                                <td>Email</td>
                                <td>
                                    <input class="form-control" name="txtEMAILS" id="txtEMAILS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email" value='<?=$emails?>' style='width: 300px;text-align: left;' readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>
                                    <input class="form-control" name="txtWEBSIT" id="txtWEBSIT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Website'" placeholder="Website" value='<?=$websit?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama PIC</td>
                                <td>
                                    <input class="form-control" name="txtCONTAC" id="txtCONTAC" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama PIC'" placeholder="Nama PIC" value='<?=$picnya?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td>
                                    <input class="form-control" name="txtNOMTLP" id="txtNOMTLP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Telp'" placeholder="No. Telp" value='<?=$nomtlp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Fax</td>
                                <td>
                                    <input class="form-control" name="txtNOMFAX" id="txtNOMFAX" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Fax'" placeholder="No. Fax" value='<?=$faxnom?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Handphone</td>
                                <td>
                                    <input class="form-control" name="txtNOMRHP" id="txtNOMRHP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Handphone'" placeholder="No. Handphone" value='<?=$nomrhp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>

                            <tr>
                                <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/profile_edit/<?=$idclnt?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;Simpan</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>myjconnect_client" class="genric-btn primary-border small">Batal</a>
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

<?php
    //  ------------------------------------------------------ Lowongan start ------------------------------- //
    if($type == 2){
        $this->load->view('v_lowongan',$datanya);
    }
    //  ------------------------------------------------------ Lowongan END ------------------------------- //


    //  ------------------------------------------------------ Pelamar start ------------------------------- //
    if($type == 3){
        $this->load->view('v_pelamar',$datanya);
    }
    //  ------------------------------------------------------ Pelamar End ------------------------------- //

    // ----------------------------------------------------  Ubah Password Start ------------------------------------------------------------ //
    if($type == 4){
?>
        
        <form action="/myjconnect_client/ubah_password_simpan/<?=$usr_idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
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
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;Simpan
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>myjconnect_client" class="genric-btn primary-border small">Batal</a>
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
    // ----------------------------------------------------  Ubah Password END ------------------------------------------------------------- //

    // ----------------------------------------------------  Perekrutan Start ------------------------------------------------------------- //
    if($type == 5){
        $this->load->view('v_perekrutan',$datanya);
    // ----------------------------------------------------  Perekrutan ENd ------------------------------------------------------------- //
    }

    if($type == 6){
        $optJENISS = array('0'=>'Pilih Data','1'=>'Rekap','2'=>'Group By Jobs');
        $optBulan = array(
            '0'=>'Pilih Bulan',
            '1'=>'Januari',
            '2'=>'Februari',
            '3'=>'Maret',
            '4'=>'April',
            '5'=>'Mei',
            '6'=>'Juni',
            '7'=>'Juli',
            '8'=>'Agustus',
            '9'=>'September',
            '10'=>'Oktober',
            '11'=>'November',
            '12'=>'Desember'
        );
?>
<style type="text/css">
    /* popup window */

      #popup_window {
        padding: 10px;
        background: #267e8a;
        cursor: pointer;
        color: #fcfcfc;
      }
      .popup-overlay {
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(196, 196, 196, 0.85);
        top: 0;
        left: 100%;
        opacity: 0;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        -webkit-transition: opacity 0.2s ease-out;
        -moz-transition: opacity 0.2s ease-out;
        -ms-transition: opacity 0.2s ease-out;
        -o-transition: opacity 0.2s ease-out;
        transition: opacity 0.2s ease-out;
      }
      .overlay .popup-overlay {
        opacity: 1;
        left: 0;
      }
      .popup {
        position: fixed;
        top: 5%;
        left: 50%;
        z-index: -9999;
      }
      .popup .popup-body {
        background: #ffffff;
        background: -moz-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
        background: -webkit-gradient(
          linear,
          left top,
          left bottom,
          color-stop(0%, #ffffff),
          color-stop(100%, #f7f7f7)
        );
        background: -webkit-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
        background: -o-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
        background: -ms-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
        background: linear-gradient(to bottom, #ffffff 0%, #f7f7f7 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7f7f7', GradientType=0);
        opacity: 0;
        min-height: 150px;
        width: 800px;
        margin-left: -400px;
        padding: 20px;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        -webkit-transition: opacity 0.2s ease-out;
        -moz-transition: opacity 0.2s ease-out;
        -ms-transition: opacity 0.2s ease-out;
        -o-transition: opacity 0.2s ease-out;
        transition: opacity 0.2s ease-out;
        position: relative;
        -moz-box-shadow: 1px 2px 3px 1px rgb(185, 185, 185);
        -webkit-box-shadow: 1px 2px 3px 1px rgb(185, 185, 185);
        box-shadow: 1px 2px 3px 1px rgb(185, 185, 185);
        border: 1px solid #e9e9e9;
      }

      .popup .popup-body {
        width: 100% !important;
        height: 100% !important;
      }

      .popup.visible,
      .popup.transitioning {
        z-index: 9999;
      }
      .popup.visible .popup-body {
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      }
      .popup .popup-exit {
        cursor: pointer;
        display: block;
        width: 24px;
        height: 24px;
        position: absolute;
        top: 150px;
        right: 195px;
        background: url("images/quit.png") no-repeat;
      }
      .popup .popup-content {
        overflow: scroll;
        height: 450px;
      }
      .popup-content .popup-title {
        font-size: 24px;
        border-bottom: 1px solid #e9e9e9;
        padding-bottom: 10px;
      }
      .popup-content p {
        font-size: 13px;
        text-align: justify;
      }

      /* popup window */
</style>
<script type="text/javascript">

// -------------------- JS Buat Popup Form - START ------------------------------- //
$(window).load(function () {
    $(document).ready(function ($) {
        $("[data-popup-target]").click(function () {
            $("html").addClass("overlay");
            var activePopup = $(this).attr("data-popup-target");
            $(activePopup).addClass("visible");
        });

        $(document).keyup(function (e) {
            if (e.keyCode == 27 && $("html").hasClass("overlay")) {
              clearPopup();
            }
        });

        $(".popup-exit").click(function () {
            clearPopup();
        });

        $(".popup-overlay").click(function () {
            clearPopup();
        });
    });
});
// -------------------- JS Buat Popup Form - END ------------------------------- //

function clearPopup() {
    $(".popup.visible").addClass("transitioning").removeClass("visible");
    $("html").removeClass("overlay");

    setTimeout(function () {
      $(".popup").removeClass("transitioning");
    }, 200);
}

function openCenterWin(url, height, width, name, parms){
    $('#printanimasi').css('display','none');
    var left = Math.floor( (screen.width - width) / 2);
    var top = Math.floor( (screen.height - height) / 3);
    var winParms = 'top=' + top + ',left=' + left + ',height=' + height + ',width=' + width;
    if (parms) { winParms += ',' + parms; }
    var win = window.open(url, name, winParms);
    if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
    return ;
}

function jvCetak(jenis){
    var types  = $('#cmbTYPJOB').val();
    var tahun  = $('#cmbYEARSS').val();
    var bulan  = $('#cmbMONTHS').val();
    // alert(types+'~'+tahun+'~'+bulan);return;

    if(types == 0){
        alert('Tipe harus dipilih!');
        return;
    }

    var param = {};
    param['types'] = types;
    param['tahun'] = tahun;
    param['bulan'] = bulan;
    
    if(jenis == 1){
        $.post('/Myjconnect_Client/cetakLaporan/'+types+'/'+tahun+'/'+bulan,param,function(data){
            window.open('/Myjconnect_Client/cetakLaporan/'+types+'/'+tahun+'/'+bulan,'newwindow','width=1040,height=860');
        });
    }else{

        url = '/Myjconnect_Client/exportExcel';
        var newWindow = window.open(url, name);
        var html = "/";
        html += "<html><head></head><body><form id='myReport' method='post' action='/Myjconnect_Client/exportExcel'>";
        html += "<input type='hidden' name='types' id='param' value='+types+'/>";
        html += "<input type='hidden' name='years' id='param' value='+tahun+'/>";
        html += "<input type='hidden' name='bulan' id='param' value='+bulan+'/>";
        html += "</form><script type='text/javascript'>document.getElementById('myReport').submit()</sc+ript></bo+dy></ht+ml>";
        
        newWindow.document.write(html);
        window.close();
        return newWindow;
    }
}
</script>

        <table class='table1'>
            <tr>
                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
            </tr>
            <tr>
                <td>
                    <table class='table1'>
                        <tr>
                            <td>

                                <div class="job-category-listing mb-50">    
                                    <form enctype="multipart/form-data" id='form-submit' method='post'>
                                        <div class="single-listing">

                                            <div class="single-listing"><h5>Tipe</h5></div>
                                            <div class="single-listing">
                                                 <select name="cmbTYPJOB" id="cmbTYPJOB">
                                                    <?php
                                                        foreach($optJENISS as $jenisid=>$jenis_desc){
                                                            echo "<option value='".$jenisid."'>".$jenis_desc."&emsp;&emsp;&emsp;</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div><br><br>

                                            <div class="single-listing"><h5>Tahun</h5></div>
                                            <div class="single-listing">
                                                 <select name="cmbYEARSS" id="cmbYEARSS" size=6>
                                                    <?php
                                                        $select = '';
                                                        for($i=date('Y')+3; $i>=date('Y')-3; $i-=1){
                                                            if($i == date('Y')){
                                                                echo "<option value='$i' selected>$i&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</option>";
                                                            }else{
                                                                echo "<option value='$i'>$i&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</option>";
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                            </div><br><br>

                                            <div class="single-listing"><h5>Bulan</h5></div>
                                            <div class="single-listing">
                                                 <select name="cmbMONTHS" id="cmbMONTHS">
                                                    <?php
                                                        foreach($optBulan as $bulanid=>$bulan_desc){
                                                            echo "<option value='".$bulanid."'>".$bulan_desc."&emsp;&emsp;&emsp;</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div><br><br>

                                            <div class="form-group mt-3">
                                                <center>

                                                    <input type="button" name="lihat" id="lihat" value="Lihat" onclick='jvCetak(1);' class="genric-btn primary small">
                                                    <input type="button" name="excel" id="excel" value="Excel" onclick='jvCetak(2);' class="genric-btn info small">
                                                    <input type="button" name="pdf" id="pdf" value="PDF" onclick='jvCetak(3);' class="genric-btn danger small">

                                                </center>
                                            </div>
                                            
                                        </div>
                                    </form>
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
