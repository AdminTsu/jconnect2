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
    }

    if($logoss != ''){
        $not_click = "<font color='red'>(クリックするとファイルを表示します)</font>";
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

<!-- ------------------------------------------------- script modal popup ----------------------------------------------------------------- -->

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
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect_client"><i class="fa fa-user"></i>&nbsp;&nbsp;会社概要</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect_client/lowongan/<?=$idclnt?>"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;空席状況一覧</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect_client/pelamar/<?=$idclnt?>"><i class="fa fa-archive"></i>&nbsp;&nbsp;ワーカーアプリケーション</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect_client/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;パスワードの変更</a>
                            </div><br>
                            <?php if($jenis == 'view' and $type == 1){ ?>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect_client/<?=$link_menu?>/<?=$idclnt?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;変更</i></a>
                            </div><br>
                            <?php }
                                if($jenis == 'view' and $type == 2){
                            ?>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect_client/<?=$link_menu?>/<?=$idclnt?>" class="genric-btn primary-border small"><i class="fa fa-plus">&nbsp;&nbsp;追加</i></a>
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
                    <td style='text-align: left;'><i class="fas fa-tablet">&nbsp;&nbsp;</i><?=$faxnom?></td>
                </tr>
                <tr>
                    <td><i class="fas fa-desktop"></i>&nbsp;&nbsp;<?=$bidang?></td>
                    <td style='text-align: left;'><i class="ti-email"></i>&nbsp;&nbsp;<?=$emails?></td>
                </tr>

                <tr>
                    <td colspan=4 width="1px" height="1px" style='text-align: center;'><b><hr></b>
                    </td>
                </tr>
                <tr><td style="top: 0;">会員番号</td><td colspan=3>: <?=$mmbrno?></td></tr>
                <tr><td style="top: 0;">住所</td><td colspan=3>: <?=$addres?></td></tr>
                <tr><td style="top: 0;">所在地</td><td colspan=3>: <?=$provnc?> - <?=$cityss?>, <?=$contry?></td></tr>
                <tr><td style="top: 0;">PIC/責任者</td><td colspan=3>: <?=$picnya?></td></tr>
                <tr><td style="top: 0;">携帯電話番号</td><td colspan=3>: <?=$nomrhp?></td></tr>
                <tr><td style="top: 0;">会社概要</td><td colspan=3>: <?=$descre?></td></tr>
            </table><br>

<?php
        }else{
?>
<!-- -------------------------------------------------------  edit profile --------------------------------------------------------------- -->
        
        <form action="/jpn/myjconnect_client/profile_simpan/<?=$idclnt?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
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
                                <td>ロゴのアップロード</td>
                                <td>
                                    <input class="form-control" name="txtLOGOSS" id="txtLOGOSS" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ロゴのアップロード'" placeholder="ロゴのアップロード" style='width: 300px;'>
                                </td>
                            </tr>
                            <tr>
                                <td>会員番号</td>
                                <td>
                                    <input class="form-control" name="txtNOMORS" id="txtNOMORS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '会員番号'" placeholder="会員番号" value='<?=$mmbrno?>' readonly style='width: 150px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>会社名</td>
                                <td>
                                    <input class="form-control" name="txtNAMESS" id="txtNAMESS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社名'" placeholder="会社名" value='<?=$namess?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>事業内容</td>
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
                                <td>その他の分野</td>
                                <td>
                                    <input class="form-control" name="txtBDLAIN" id="txtBDLAIN" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'その他の分野'" placeholder="その他の分野" value='<?=$bdlain?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>会社概要</td>
                                <td>
                                    <textarea class="form-control" name="txaDESCRE" id="txaDESCRE" type="text" rows=4 onfocus="this.placeholder = ''" onblur="this.placeholder = '会社概要'" placeholder="会社概要" style='width: 650px;text-align: left;'><?=$descre?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>住所</td>
                                <td>
                                    <textarea class="form-control" name="txaADDRES" id="txaADDRES" type="text" rows=3 onfocus="this.placeholder = ''" onblur="this.placeholder = '住所'" placeholder="住所" style='width: 650px;text-align: left;'><?=$addres?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>国名</td>
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
                                <td>プロビンス</td>
                                <td id='provinsi'>
                                    <select class="form-control" name="cmbPROVNC1" id="cmbPROVNC1">
                                        <option value=0>-- 州を選択 --</option>
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
                                        <option value=0>-- 州を選択 --</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>都市</td>
                                <td id="kota">
                                    <select class="form-control" name="cmbCITYSS1" id="cmbCITYSS1">
                                        <option value=0>-- 都市を選択 --</option>
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
                                        <option value=0>-- 都市を選択 --</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>電子メール</td>
                                <td>
                                    <input class="form-control" name="txtEMAILS" id="txtEMAILS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '電子メール'" placeholder="電子メール" value='<?=$emails?>' style='width: 300px;text-align: left;' readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>ウェブサイト</td>
                                <td>
                                    <input class="form-control" name="txtWEBSIT" id="txtWEBSIT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ウェブサイト'" placeholder="ウェブサイト" value='<?=$websit?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>PIC/責任者名</td>
                                <td>
                                    <input class="form-control" name="txtCONTAC" id="txtCONTAC" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'PIC/責任者名'" placeholder="PIC/責任者名" value='<?=$picnya?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>電話番号</td>
                                <td>
                                    <input class="form-control" name="txtNOMTLP" id="txtNOMTLP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = '電話番号'" placeholder="電話番号" value='<?=$nomtlp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>ファックス番号</td>
                                <td>
                                    <input class="form-control" name="txtNOMFAX" id="txtNOMFAX" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ファックス番号'" placeholder="ファックス番号" value='<?=$faxnom?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>携帯電話番号</td>
                                <td>
                                    <input class="form-control" name="txtNOMRHP" id="txtNOMRHP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = '携帯電話番号'" placeholder="携帯電話番号" value='<?=$nomrhp?>' style='width: 200px;text-align: right;'>
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
                                            <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect_client/profile_edit/<?=$idclnt?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;変更</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;保存</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>jpn/myjconnect_client" class="genric-btn primary-border small">キャンセル</a>
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
        $this->load->view('jpn/v_lowongan',$datanya);
    }
    //  ------------------------------------------------------ Lowongan END ------------------------------- //

    //  ------------------------------------------------------ Pelamar start ------------------------------- //
    if($type == 3){
        $this->load->view('jpn/v_pelamar',$datanya);
    }
    //  ------------------------------------------------------ Pelamar End ------------------------------- //
?>

<!-- ----------------------------------------------------  Ubah Password ------------------------------------------------------------- -->
<?php
    if($type == 4){
?>
        
        <form action="/jpn/myjconnect_client/ubah_password_simpan/<?=$usr_idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <tr>
                                <td>パスワードバル</td>
                                <td>
                                    <input class="form-control" name="txtPASWD1" id="txtPASWD1" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'パスワードバル'" placeholder="パスワードバル" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>新しいパスワードの繰り返し</td>
                                <td>
                                    <input class="form-control" name="txtPASWD2" id="txtPASWD2" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = '新しいパスワードの繰り返し'" placeholder="新しいパスワードの繰り返し" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=4 style='text-align: right;background-color: white;'>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><i style='color:red;font-size: 10px;'>注 提案、大文字、小文字、数字、記号を組み合わせて使う</i></b><hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;セーブ</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>jpn/myjconnect_client" class="genric-btn primary-border small">キャンセル</a>
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
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
<!-- Job List Area End -->
<script>

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
                        <input class="form-control" name="logoss" id="logoss" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto'" placeholder="Foto" style='width: 500px;text-align: left;'>
                        <input name="txtlogoss" id="txtlogoss" type="text">
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
                    <input class="form-control" name="logoss" id="logoss" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto'" placeholder="Foto" value='<?=$expbdg?>' style='width: 500px;text-align: left;'>
                </td>
            </tr>
        </table>
  </div>
</div> -->
