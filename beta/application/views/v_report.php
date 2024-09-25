<?php
setlocale(LC_ALL, 'id_ID.utf8');
$levels = $this->session->userdata('USR_LEVELS');
$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_idents = $this->session->userdata('USR_IDENTS');
$extendjenis = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

$optJENISS = array(
    '0'=>'Pilih Data'.$extendjenis,
    '1'=>'Rekap'.$extendjenis,
    '2'=>'Group By Jobs'.$extendjenis);

$extend = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$optBulan = array(
    '0'=>'Pilih Bulan'.$extend,
    '01'=>'Januari'.$extend,
    '02'=>'Februari'.$extend,
    '03'=>'Maret'.$extend,
    '04'=>'April'.$extend,
    '05'=>'Mei'.$extend,
    '06'=>'Juni'.$extend,
    '07'=>'Juli'.$extend,
    '08'=>'Agustus'.$extend,
    '09'=>'September'.$extend,
    '10'=>'Oktober'.$extend,
    '11'=>'November'.$extend,
    '12'=>'Desember'.$extend);

$extendthn = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

foreach($data as $row){
    $idclnt = isset($row['CLI_IDENTS']) ? $row['CLI_IDENTS'] : NULL;
}
?>
<style>
    .job-category-listing {
        background-color: #ffffff;
        position:relative;
        width: 50%;
    }
    a {
        color: #000066;
    }
    a:hover {
        color: #ff0066;
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

<div class="col-xl-12 col-lg-8 col-md-8">
    <!-- Featured_job_start -->
<section class="featured-job-area">
<div class="container">
<style>
    .badan
    {
        width: 100%;
        height: 50%;
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

function clearPopup() {
    $(".popup.visible").addClass("transitioning").removeClass("visible");
    $("html").removeClass("overlay");

    setTimeout(function () {
      $(".popup").removeClass("transitioning");
    }, 200);
}

// -------------------- JS Buat Popup Form - END ------------------------------- //

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
        $.post('/Report/cetakLaporan',param,function(data){
            window.open('Report/cetakLaporan','newwindow','width=1040,height=860');
        });
    }else{

        url = '/Report/exportExcel';
        var newWindow = window.open(url, name);
        var html = "/";
        html += "<html><head></head><body><form id='myReport' method='post' action='/Report/exportExcel'>";
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

<input type='hidden' name='iduser' id='iduser' value='<?=$iduser?>'>
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
                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;List Lowongan</a>
                        </div><br>
                        <div class="single-listing">
                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client"><i class="fa fa-archive"></i>&nbsp;&nbsp;Lamaran Pekerja</a>
                        </div><br>
                        <div class="single-listing">
                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client"><i class="fa fa-cog"></i>&nbsp;&nbsp;Perekrutan</a>
                        </div><br>
                        <div class="single-listing">
                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/Report"><i class="fa fa-file"></i>&nbsp;&nbsp;Laporan</a>
                        </div><br>
                        <div class="single-listing">
                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/ubah_password"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                        </div><br>
                        <div class="single-listing">
                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                        </div><br>
                        <div class="single-listing">
                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client" class="genric-btn primary-border small"><i class="fa fa-plus">&nbsp;Tambah</i></a>
                        </div><br>

                    </div>
                </div>

            </div>

            <!-- Right content -->
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
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
                                                                 <select class="form-control w-100" name="cmbTYPJOB" id="cmbTYPJOB" style='width: 200px;'>
                                                                    <?php
                                                                        foreach($optJENISS as $jenisid=>$jenis_desc){
                                                                            echo "<option value='".$jenisid."'>".$jenis_desc."</option>";
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div><br><br>

                                                            <div class="single-listing"><h5>Tahun</h5></div>
                                                            <div class="single-listing">
                                                                 <select class="form-control w-100" name="cmbYEARSS" id="cmbYEARSS" style='width: 200px;'>
                                                                    <?php
                                                                        $select = '';
                                                                        for($i=date('Y'); $i>=date('Y')-5; $i-=1){
                                                                            if($i == date('Y')){
                                                                                echo "<option value='$i' selected>$i$extendthn</option>";
                                                                            }else{
                                                                                echo "<option value='$i'>$i$extendthn</option>";
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div><br><br>

                                                            <div class="single-listing"><h5>Bulan</h5></div>
                                                            <div class="single-listing">
                                                                 <select class="form-control w-100" name="cmbMONTHS" id="cmbMONTHS" style='width: 200px;'>
                                                                    <?php
                                                                        foreach($optBulan as $bulanid=>$bulan_desc){
                                                                            echo "<option value='".$bulanid."'>".$bulan_desc."</option>";
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div><br><br>

                                                            <div class="form-group mt-3">
                                                                <center>

                                                                    <!-- <button href="#" type="submit" id=submit class="genric-btn primary small" onclick='jvCetak(1);'>Lihat</button> -->
                                                                    <!-- <a data-popup-target="#popup1" class="genric-btn primary small">Click to show popup</a> -->
                                                                    <!-- <a onclick="window.open('/Report/cetak', 'newwindow', 'width=300, height=250'); return false;" class="genric-btn primary small"> Print</a> -->

                                                                    <!-- <input type="button" name="cetak" id="cetak" value="Cetak" onclick="window.open('/Report/cetak', 'newwindow', 'width=1040,height=860'); return false;"' class="genric-btn primary small"> -->
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
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="popup-overlay">&nbsp;</div>
<div id="popup1" class="popup">
    <div class="popup-body">
        <div class="popup-content">
          <h1>Popup Title</h1>
          Lorem ipsum dolor sit amet, sea decore appetere te. Pro cu idque
          lucilius, eu sint ludus pri. Pro unum lucilius nominati eu, in mea
          iusto periculis. At utamur sadipscing necessitatibus cum. Libris
          ancillae sed ex, ullum erant forensibus vim at, vel libris putant
          ei.<br>

          Mei ut posse persius salutatus, duo decore dignissim et. Cibo blandit
          abhorreant et mel, quando animal facilis cu nam, pri mucius verear
          oportere in. Cu vel oportere voluptatibus. Mel graeco expetenda ei,
          alii dicat invenire duo in.<br>

          Augue menandri an eam. Ea eam suscipit consulatu. Est id primis
          explicari imperdiet, ut purto tacimates cotidieque nec. In nonumy
          adipiscing quaerendum usu. Ea nam etiam salutatus, mazim saperet qui
          ne.<br>

          Duo at impetus labitur, his vero nullam animal cu. Liber ignota
          utroque in mei, prima detraxit dissentias cum ut. An mei utamur latine
          abhorreant. Possim convenire inciderint per no, nec et liber virtute.
          Liber primis abhorreant ea mel.<br>

          Vitae omnesque ullamcorper has an, sea eruditi albucius dignissim an.
          At posse liber clita vim, vidisse albucius pri ad. Ad his labore
          eloquentiam. Senserit scribentur eloquentiam pri in, ei vim dolor
          affert. Ei porro electram usu, qui quot justo partiendo in, ei
          volutpat scripserit mea. Et verterem praesent ius, clita dictas pri
          ad.
        </div>
        <div align="right"><input type="button" name="close" id="close" value="Close" onclick='clearPopup();' class="genric-btn danger small"></div>
    </div>
</div>
