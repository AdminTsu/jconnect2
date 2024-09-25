<?php
ini_set('upload_max_filesize', '800M') or ini_set('post_max_size', '2000M');
ini_set('memory_limit','1000M');
$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_logins = $this->session->userdata('USR_LOGINS');
$usr_levels = $this->session->userdata('USR_LEVELS');
$usr_menuid = $this->session->userdata('USR_MENUID');
$usr_idents = $this->session->userdata('USR_IDENTS');
$usr_leveld = $this->m_common->getCommon_idents(2, $usr_levels);
if($usr_logins != '' || $usr_logins != 0){
    setcookie($usr_logins, $usr_levels, time() + (60 * 60 * 24), '/');
}else{
    setcookie('guest', 0, time() + (60 * 60 * 24), '/');
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Jconnect | <?=$title?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <!-- <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>resources/assets/img/favicon5.ico"> -->
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>resources/assets/img/Logo_JConnect_Gradient_dot_ico_01.ico">

        <!-- CSS here -->
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/flaticon.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/price_rangs.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/slicknav.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/animate.min.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/themify-icons.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/slick.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/nice-select.css">
            <link rel="stylesheet" href="<?=base_url()?>resources/assets/css/style.css">

            <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> -->
            <!-- <link href="style.css" rel="stylesheet"> -->

    </head>
    <!-- <script src='//code.jquery.com/jquery-1.11.1.min.js'></script> -->
    <script src="<?=base_url()?>resources/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url()?>resources/js/pagination-sort-filter-manager/tableManager.js"></script>
    <script>
        $(document).ready(function(){
            // googleTranslateElementInit();
            // $(window).scroll(function () {
            //     if($(window).scrollTop() > 200) {
            //         $('#side_myjconnect').css('position','fixed');
            //         $('#side_myjconnect').css('top','0'); 
            //     }else if ($(window).scrollTop() <= 200) {
            //         $('#side_myjconnect').css('position','');
            //         $('#side_myjconnect').css('top','');
            //     }  
            //     if ($('#side_myjconnect').offset().top + $("#side_myjconnect").height() > $("#footer").offset().top) {
            //         $('#side_myjconnect').css('top',-($("#side_myjconnect").offset().top + $("#side_myjconnect").height() - $("#footer").offset().top));
            //     }
            // });

            window.onload = function() { jam(); }
        });
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <style>

        .ui-datepicker {
          width: 216px;
          height: auto;
          margin: 5px auto 0;
          font: 9pt Arial, sans-serif;
          -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);
          -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);
          box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);
        }
        .ui-datepicker a {
          text-decoration: none;
        }
        .ui-datepicker table {
          width: 100%;
        }
        .ui-datepicker-header {
          background: url('/resources/img/dark_leather.png') repeat 0 0 #000;
          color: #e0e0e0;
          font-weight: bold;
          -webkit-box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, 2);
          -moz-box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, .2);
          box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, .2);
          text-shadow: 1px -1px 0px #000;
          filter: dropshadow(color=#000, offx=1, offy=-1);
          line-height: 30px;
          border-width: 1px 0 0 0;
          border-style: solid;
          border-color: #111;
        }
        .ui-datepicker-title {
          text-align: center;
        }
        .ui-datepicker-prev, .ui-datepicker-next {
          display: inline-block;
          width: 30px;
          height: 30px;
          text-align: center;
          cursor: pointer;
          background-image: url('/resources/img/arrow.png');
          background-repeat: no-repeat;
          line-height: 600%;
          overflow: hidden;
        }
        .ui-datepicker-prev {
          float: left;
          background-position: center -30px;
        }
        .ui-datepicker-next {
          float: right;
          background-position: center 0px;
        }
        .ui-datepicker-other-month ui-datepicker-unselectable {
            background-color: #dedede;
        }
        .ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable {
            background-color: #dedede;
        }
        .ui-datepicker thead {
          background-color: #f7f7f7;
          background-image: -moz-linear-gradient(top,  #f7f7f7 0%, #f1f1f1 100%);
          background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7f7f7), color-stop(100%,#f1f1f1));
          background-image: -webkit-linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);
          background-image: -o-linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);
          background-image: -ms-linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);
          background-image: linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f7f7', endColorstr='#f1f1f1',GradientType=0 );
          border-bottom: 1px solid #bbb;
        }
        .ui-datepicker th {
          text-transform: uppercase;
          font-size: 6pt;
          padding: 5px 0;
          color: #666666;
          text-shadow: 1px 0px 0px #fff;
          filter: dropshadow(color=#fff, offx=1, offy=0);
        }
        .ui-datepicker-current {
                display:none;
        }
        .ui-datepicker-close {  
            display:none;
        }
        .ui-datepicker tbody td {
          padding: 0;
          border-right: 1px solid #bbb;
        }
        .ui-datepicker tbody td {
          padding: 0;
          border-right: 1px solid #bbb;
        }
        .ui-state-disabled {
          background: #a6a6a6;
        }
        .ui-datepicker tbody tr {
          border-bottom: 1px solid #bbb;
        }
        .ui-datepicker tbody tr:last-child {
          border-bottom: 0px;
        }
        .ui-datepicker td span, .ui-datepicker td a {
          display: inline-block;
          font-weight: bold;
          text-align: center;
          width: 30px;
          height: 30px;
          line-height: 30px;
          color: #666666;
          text-shadow: 1px 1px 0px #fff;
          filter: dropshadow(color=#fff, offx=1, offy=1);
        }
        .ui-datepicker-calendar .ui-state-default {
          background: #ededed;
          background: -moz-linear-gradient(top,  #ededed 0%, #dedede 100%);
          background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ededed), color-stop(100%,#dedede));
          background: -webkit-linear-gradient(top,  #ededed 0%,#dedede 100%);
          background: -o-linear-gradient(top,  #ededed 0%,#dedede 100%);
          background: -ms-linear-gradient(top,  #ededed 0%,#dedede 100%);
          background: linear-gradient(top,  #ededed 0%,#dedede 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#dedede',GradientType=0 );
          -webkit-box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);
          -moz-box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);
          box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);
        }
        .ui-datepicker-unselectable .ui-state-default {
          background: #f4f4f4;
          color: #b4b3b3;
        }
        .ui-datepicker-calendar .ui-state-hover {
          background: #f4f4f4;
          color: #ededed;
        }
        .ui-datepicker-calendar .ui-state-active {
          background: #6eafbf;
          -webkit-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, .1);
          -moz-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, .1);
          box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, .1);
          color: #e0e0e0;
          text-shadow: 0px 1px 0px #4d7a85;
          filter: dropshadow(color=#4d7a85, offx=0, offy=1);
          border: 1px solid #55838f;
          position: relative;
          margin: -1px;
        }

        /* -------------------  css jam ----------------*/
        /** {
          margin: 0;
          padding: 0;
          font-family: 'Montserrat', sans-serif;
        }*/
        #body {
          background: #ffffff;
          /*text-shadow: 5px 5px 2px #808080;*/
          display: grid;
          place-items: center;
          height: 7vh;
        }
        /*#clock {
          font-size: 24px;
          background: -webkit-linear-gradient(#2b32b2, #1488cc);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          font-weight: 500;
        }*/
        #jam {
          font-size: 34px;
          /*background: -webkit-linear-gradient(#2b32b2, #1488cc);*/
          background: -webkit-linear-gradient(#000066, #0000cc);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          font-weight: 1500;
          border: 2px solid #000066;
          box-shadow: 4px 4px;
        }
        #p {
          background-color: #ffffff;
        }
        .minute::after, .hour::after { 
          content: ":"; margin-left: 2px; 
          position: absolute; 
          top: 6px; 
          left: 44px; 
          font-size: 24px; 
        }
    </style>


   <body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?=base_url()?>resources/assets/img/logo/JConnect_Logo_01.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <br>
                    <div class="col-lg-22 col-md-22">
                      <div class="main-menu">
                        <nav>
                          <div id=body>
                            <?php date_default_timezone_set("Asia/jakarta"); ?>
                            <p id='p'>
                              <b><span id="jam"></span></b>
                            </p>
                          </div>
                        </nav>
                      </div>
                    </div>
                    
                    <div class="row align-items-center">
                      
                      <?php if($usr_logins == '' || $usr_levels == ''){ ?>
                        <div class="row align-items-center">
                          <div class="col-lg-22 col-md-22">
                            <!-- Main-menu -->
                            <div class="main-menu">
                              <nav>
                                <center>
                                  <?php date_default_timezone_set("Asia/jakarta"); ?>
                                  <!-- <div>Jam Digital: <b><span id="jam" style="font-size:24"></span></b></div> -->
                                  <div class="header-btn d-none f-right d-lg-block">
                                    
                                    <!-- <a href="<?=base_url()?>login" class="genric-btn primary small">Masuk Perusahaan</a> -->
                                    <a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
                                    <a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
                                    <a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
                                    <a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
                                    
                                    <a href="<?=base_url()?>register/RegisterForm_vacancy" class="genric-btn primary small">Daftar Perusahaan</a>
                                    <a href="<?=base_url()?>register" class="genric-btn info small">Daftar Kandidat</a>
                                    <a href="<?=base_url()?>login_web" class="genric-btn danger small">Masuk</a>
                                    
                                  </div>
                                </center>
                              </nav>
                            </div>
                          </div>
                        </div>
                      <?php } ?>

                        <div class="col-lg-1 col-md-1">
                            <!-- Logo -->
                            <div class="logo">
                                <!-- <a href="<?=base_url()?>"><img src="<?=base_url()?>resources/assets/img/logo/JConnect_Logo_01.png" style='width: 140px;height:45px;margin:auto;' alt="jconnect_logo"></a> -->
                                <a href="<?=base_url()?>"><img src="<?=base_url()?>resources/assets/img/logo/JConnect_Logo_02.png" style='width: 150px;height:40px;margin:auto;' alt="jconnect_logo"></a>
                            </div>  
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="<?=base_url()?>Dashboard/Home">&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="<?=base_url()?>Dashboard/Home">Beranda</a></li>
                                            <li><a href="<?=base_url()?>Find_jobs">Cari Lowongan</a></li>
                                            <li><a href="<?=base_url()?>Dashboard/About">Tentang</a></li>
                                            <li><a href="<?=base_url()?>contact">Kontak</a></li>
                                            <?php
                                                if($usr_logins == '' || $usr_levels == ''){
                                            ?>
                                                <li><a href="#">Akses</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web'  href="<?=base_url()?>register/RegisterForm_vacancy">Daftar Perusahaan</a>
                                                        </li>
                                                        <!-- <li>
                                                            <a id='menu_web'  href="<?=base_url()?>login">Masuk Perusahaan</a>
                                                        </li> -->
                                                        <li>
                                                            <a id='menu_web'  href="<?=base_url()?>register">Daftar Kandidat</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?=base_url()?>Login_web">Masuk</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            <?php
                                                }
                                                // ------------------   untuk kandidat --------------- //
                                                if($usr_logins != '' && $usr_levels == 2){
                                            ?>
                                                <li><a href="<?php echo base_url(); ?>Myjconnect">My JConnect</b></a></li>
                                                <!-- <li><a href="#">My JConnect</b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect">Profile Saya</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/pengalaman/<?=$usr_idents?>">Pengalaman</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/minat_kerja/<?=$usr_idents?>">Minat Kerja</a>
                                                        </li>
                                                        <li>
                                                            <a href="/Myjconnect/lamaran/<?=$usr_idents?>">Lamaran Saya</a>
                                                        </li>
                                                    </ul>
                                                </li> -->
                                            <?php
                                                }

                                                // ------------------   untuk perusahaan --------------- //
                                                // ------------- fitur ini belum selesai
                                                if($usr_logins != '' && $usr_levels == 3){
                                            ?>

                                                <li><a href="#">My JConnect</b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect_Client">Profile Perusahaan</a>
                                                        </li>
                                                        <!-- <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Report">Laporan</a>
                                                        </li> -->
                                                        <!-- <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect_Client/lowongan">Lowongan</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect_Client/pelamar">Lamaran Pekerja</a>
                                                        </li> -->

                                                        <!-- <li><a href="#">Laporan</a>
                                                          <ul class="submenu">
                                                              <li>
                                                                  <a id='menu_web'  href="<?=base_url()?>Myjconnect_Client/Report">Summary</a>
                                                              </li>
                                                              <li>
                                                                  <a id='menu_web'  href="<?=base_url()?>Myjconnect_Client/Report">Laporan</a>
                                                              </li>
                                                              <li>
                                                                  <a id='menu_web'  href="<?=base_url()?>Myjconnect_Client/Report">Daftar</a>
                                                              </li>
                                                          </ul>
                                                        </li> -->

                                                    </ul>
                                                </li>
                                            <?php
                                                }

                                                // ------------- untu super admin
                                                if($usr_logins != '' && $usr_levels == 99){
                                            ?>
                                                <li><a href="#">My JConnect SA</b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect">Profile Saya</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/pengalaman">Pengalaman</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/minat_kerja">Minat Kerja</a>
                                                        </li>
                                                        <li>
                                                            <a href="/Myjconnect/lamaran/">Lamaran Saya</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            <?php
                                                }
                                            ?>
                                            <!-- <li><a href="#"><i class="fa fa-globe"></i>&nbsp;&nbsp;(ID)</a> -->
                                            <li><a href="#"><i class="fa fa-language"></i>&nbsp;&nbsp;(ID)</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a id='menu_web' href="<?php echo base_url(); ?>jpn/dashboard">Jepang (JP)</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                              <?php
                                                  if($usr_menuid != 0 || $usr_menuid != ''){
                                              ?>
                                                    <li><a href="#">Hi, <b><?php echo $usr_logins; ?></b></a>
                                                      <ul class="submenu">
                                                        <li>
                                                        <?php
                                                            if($usr_menuid == 2){
                                                        ?>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        <?php
                                                            }elseif($usr_menuid == 1){
                                                        ?>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        <?php
                                                            }else{
                                                        ?>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        <?php
                                                            }
                                                        ?>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>Login_web/bye"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Keluar</a>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                <?php
                                                    }
                                                ?>
                                            </li>

                                            <!-- <i class="fa fa-home"></i>&nbsp;
                                            <i class="fa fa-list-ul"></i>&nbsp;
                                            <i class="fa fa-book"></i>&nbsp;
                                            <i class="fa fa-phone"></i>&nbsp;
                                            <i class="fa fa-globe"></i>&nbsp; -->
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <?php
                                    if($usr_logins != '' || $usr_levels != ''){
                                ?>
                                <?php
                                    }else{
                                ?> 
                                    <!-- <div class="header-btn d-none f-right d-lg-block">
                                        <a href="<?=base_url()?>register" class="btn head-btn2">Daftar</a>
                                        <a href="<?=base_url()?>login_web" class="btn head-btn2">Masuk Member</a>
                                        <a href="<?=base_url()?>login" class="btn head-btn2">Masuk</a>
                                    </div> -->
                                <?php
                                    }
                                ?>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">

                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="<?=base_url()?>dashboard/home">&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="<?=base_url()?>dashboard/home">Beranda</a></li>
                                            <li><a href="<?=base_url()?>Find_jobs">Cari Lowongan</a></li>
                                            <li><a href="<?=base_url()?>dashboard/about">Tentang</a></li>
                                            <li><a href="<?=base_url()?>contact">Kontak</a></li>
                                            <?php
                                                if($usr_logins == '' || $usr_levels == ''){
                                            ?>
                                                <li><a href="#">Akses</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web'  href="<?=base_url()?>register/RegisterForm_vacancy">Daftar Perusahaan</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web'  href="<?=base_url()?>login">Masuk Perusahaan</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web'  href="<?=base_url()?>register">Daftar Kandidat</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?=base_url()?>Login_web">Masuk Kandidat</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            <?php
                                                }
                                                // ------------------   untuk kandidat --------------- //
                                                if($usr_logins != '' && $usr_levels == 2){
                                            ?>
                                                <li><a href="#">My JConnect</b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect">Profile Saya</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/pengalaman/<?=$usr_idents?>">Pengalaman</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/minat_kerja/<?=$usr_idents?>">Minat Kerja</a>
                                                        </li>
                                                        <li>
                                                            <a href="/Myjconnect/lamaran/<?=$usr_idents?>">Lamaran Saya</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            <?php
                                                }

                                                // ------------------   untuk perusahaan --------------- //
                                                // ------------- fitur ini belum selesai
                                                if($usr_logins != '' && $usr_levels == 3){
                                            ?>

                                                <!-- <li><a href="<?=base_url()?>Myjconnect_Client">My JConnect Client</a></li> -->
                                                <li><a href="#">My JConnect</b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect_Client">Profile Perusahaan</a>
                                                        </li>
                                                        <!-- <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect_Client/lowongan">Lowongan</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect_Client/pelamar">Lamaran Pekerja</a>
                                                        </li> -->
                                                        <li><a href="#">Laporan</a>
                                                          <ul class="submenu">
                                                              <li>
                                                                  <a id='menu_web'  href="<?=base_url()?>Myjconnect_Client/Report">Summary</a>
                                                              </li>
                                                              <li>
                                                                  <a id='menu_web'  href="<?=base_url()?>Myjconnect_Client/Report">Laporan</a>
                                                              </li>
                                                              <li>
                                                                  <a id='menu_web'  href="<?=base_url()?>Myjconnect_Client/Report">Daftar</a>
                                                              </li>
                                                          </ul>
                                                      </li>
                                                    </ul>
                                                </li>
                                            <?php
                                                }

                                                // ------------- untu super admin
                                                if($usr_logins != '' && $usr_levels == 99){
                                            ?>
                                                <!-- <li><a href="#">My JConnect SA</b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect">Profile Saya</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/pengalaman">Pengalaman</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/minat_kerja">Minat Kerja</a>
                                                        </li>
                                                        <li>
                                                            <a href="/Myjconnect/lamaran/">Lamaran Saya</a>
                                                        </li>
                                                    </ul>
                                                </li> -->

                                            <?php
                                                }
                                            ?>
                                            <li><a href="#"><i class="fa fa-globe"></i>&nbsp;&nbsp;(ID)</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a id='menu_web' href="<?php echo base_url(); ?>jpn/dashboard">Jepang (JP)</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                              <?php
                                                  if($usr_menuid != 0 || $usr_menuid != ''){
                                              ?>
                                                    <li><a href="#">Hi, <b><?php echo $usr_logins; ?></b></a>
                                                      <ul class="submenu">
                                                        <li>
                                                        <?php
                                                            if($usr_menuid == 2){
                                                        ?>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        <?php
                                                            }elseif($usr_menuid == 1){
                                                        ?>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        <?php
                                                            }else{
                                                        ?>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        <?php
                                                            }
                                                        ?>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>Login_web/bye"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Keluar</a>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                <?php
                                                    }
                                                ?>

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                              
                            </div>
                        </div>

                        <!-- <div class="col-12">
                                <div id="google_translate_element"></div>
                            </div>
                        </div>
                        <br style="line-height:1px;"> -->

                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>

    <!-- <main> -->

    <!-- <section class="contact-section">
        <div class="container">
           <div id="google_translate_element"></div>
        </div>
    </section> -->
    <?php
    // ------------------------------------------------  Tampilan untuk content  ----------------------------------------- //
    // echo $content;
        if($content == 'Dashboard'){
            $this->load->view('v_maindashboard');
        }elseif($content == 'Home'){
            $this->load->view('v_maindashboard');
        }elseif($content == 'Jobs'){
            $this->load->view('v_findjobs');
        }elseif($content == 'Jobs_detail'){
            $this->load->view('v_jobs_detail');
        }elseif($content == 'About'){
            $this->load->view('v_about');
        }elseif($content == 'Contact'){
            $this->load->view('v_contact');
        }elseif($content == 'Register'){
            $this->load->view('v_register');
        }elseif($content == 'Regvacancy'){
            $this->load->view('v_register_vacancy');
        }elseif($content == 'Apply'){
            $this->load->view('v_form_apply');
        }elseif($content == 'Jobs2'){
            $this->load->view('v_findjobs2');
        }elseif($content == 'Login'){
            $this->load->view('v_login_web');
        }elseif($content == 'myjconnect'){
            $this->load->view('v_myjconnect');
        }elseif($content == 'myjconnect_client'){
            $this->load->view('v_myjconnect_client');
        }elseif($content == 'tou'){
            $this->load->view('v_term_of_use');
        }elseif($content == 'privasi'){
            $this->load->view('v_privasi');
        }elseif($content == 'claimer'){
            $this->load->view('v_claimer');
        }elseif($content == 'feedback'){
            $this->load->view('v_feedback');
        }elseif($content == 'report'){
            $this->load->view('v_report');
        }else{
            $this->load->view('v_expiredlink');
        }
    ?>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>Tentang Kita</h4>
                                 <div class="footer-pera">
                                    <p>
                                        <font color='#ff3377'>APA YANG KAMI LAKUKAN?</font><br>
                                        Kami siap membantu Anda untuk menemukan pekerjaan yang sesuai minat Anda.<br>
                                        Kami membantu para pekerja Indonesia yang bekerja di Jepang dan telah kembali ke Indonesia agar bisa mendapatkan pekerjaan baru.
                                    </p>
                                     <p>&nbsp;</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Tautan Penting</h4>
                                <ul>
                                    <li><a href="<?=base_url()?>">Beranda</a></li>
                                    <li><a href="<?=base_url()?>Find_jobs">Cari Lowongan</a></li>
                                    <li><a href="<?=base_url()?>dashboard/about">Tentang</a></li>
                                    <li><a href="<?=base_url()?>dashboard/contact">Kontak</a></li>
                                    <li><a href="<?=base_url()?>register">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Bantuan</h4>
                                <ul>
                                    <li><a href="<?=base_url()?>TermOfUse">Kebijakan Penggunaan</a></li>
                                    <li><a href="<?=base_url()?>privacy">Kebijakan Privasi</a></li>
                                    <li><a href="<?=base_url()?>dashboard/feedback">Umpan Balik</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Info Kontak</h4>
                                <ul>
                                    <li>
                                    <p>GRAND GALAXY CITY RSA 3 No 25 27, Jakasetia, RT.001/RW.002, Pekayon Jaya, Kec. Bekasi Selatan, Kota Bekasi, Jawa Barat 17147, Indonesia</p>
                                    </li>
                                    <li><font color='#ff3377'><i class="ti-tablet"></i>&emsp;+62 813-1234-5358</font></li>
                                    <li><font color='#ff3377'><i class="ti-email"></i>&emsp;jconnect.official@jconnect.co.id</font></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                  <div class="footer-tittle-bottom">
                       <span><a href="https://www.facebook.com/people/JConnect/100086303268647/" target='_blank'><i class="fab fa-facebook-f"></i></a></span>
                       <span><a href="https://www.instagram.com/jconnect-official" target='_blank'><i class="fab fa-instagram"></i></a></span>
                       <!-- <span><a href="https://www.youtube.com/jconnect-official" target='_blank'><i class="fab fa-youtube"></i></a></span> -->
                       <!-- <span><a href="<?=base_url()?>chat_wa" target='_blank' alt='Jika butuh bantuan bisa hubungi kami di Whatsapp ini'><i class="fab fa-whatsapp"></i></a></span> -->
                  </div>
                </div>
                <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
            </div>
        </div>  

        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex center-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p>Copyright &copy;2022 All rights reserved by <a href="<?=base_url()?>">JConnect</a> - Ver. 1.0</p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>

        <!-- Start direct chat Whatsapp -->
        <input class='chatMenu hidden' id='offchatMenu' type='checkbox' />
        <label class='chatButton' for='offchatMenu' title="Chat by Whatsapp">
          <svg class='svg-1' viewBox='0 0 32 32'>
            <g>
              <path d='M16,2A13,13,0,0,0,8,25.23V29a1,1,0,0,0,.51.87A1,1,0,0,0,9,30a1,1,0,0,0,.51-.14l3.65-2.19A12.64,12.64,0,0,0,16,28,13,13,0,0,0,16,2Zm0,24a11.13,11.13,0,0,1-2.76-.36,1,1,0,0,0-.76.11L10,27.23v-2.5a1,1,0,0,0-.42-.81A11,11,0,1,1,16,26Z'></path>
              <path d='M19.86,15.18a1.9,1.9,0,0,0-2.64,0l-.09.09-1.4-1.4.09-.09a1.86,1.86,0,0,0,0-2.64L14.23,9.55a1.9,1.9,0,0,0-2.64,0l-.8.79a3.56,3.56,0,0,0-.5,3.76,10.64,10.64,0,0,0,2.62,4A8.7,8.7,0,0,0,18.56,21a2.92,2.92,0,0,0,2.1-.79l.79-.8a1.86,1.86,0,0,0,0-2.64Zm-.62,3.61c-.57.58-2.78,0-4.92-2.11a8.88,8.88,0,0,1-2.13-3.21c-.26-.79-.25-1.44,0-1.71l.7-.7,1.4,1.4-.7.7a1,1,0,0,0,0,1.41l2.82,2.82a1,1,0,0,0,1.41,0l.7-.7,1.4,1.4Z'></path>
            </g>
          </svg>
          <svg class='svg-2' viewBox='0 0 512 512'>
            <path d='M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3l68.2 68.2-68.2 68.2c-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z'></path>
          </svg>
        </label>

        <div class='chatBox'>
          <div class='chatContent'>
            <div class='chatHeader'>
                <svg viewbox='0 0 32 32'>
                  <path d='M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z'></path>
                    <rect height='2' width='2' x='19' y='9'></rect>
                    <rect height='2' width='2' x='14' y='9'></rect>
                    <rect height='2' width='2' x='24' y='9'></rect>
                  <path d='M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z'></path>
                </svg>
              <div class='chatTitle'>Silahkan chat dengan Tim kami <span>Admin akan segera membalas pesan Anda</span></div>
            </div>
            <div class='chatText'>
              <span>Hallo..selamat datang di JConnect, Ada yang bisa kami bantu?</span>
              <span class='typing'>...</span>
            </div>
          </div>
          
          <a class='chatStart' href='https://api.whatsapp.com/send?phone=6281312345358&text=Hallo,%20selamat%20siang%20Bapak/Ibu%20Admin%20JConnect' rel='nofollow noreferrer' target='_blank'>
            <span>Click di sini untuk memulai chat via Whatsapp...</span>        
          </a>
        </div>
        <!-- END direct chat Whatsapp -->

        <!-- Footer End-->
    </footer>

    <!-- Start CSS Direct Chat Whatsapp -->
    <style>
      /* Chatbox Whatsapp */
      :root {
      --warna-background: #ff3377 ; /* Warna background header dan tombol chat */
      --warna-bg-chat: #f0f5fb;
      --warna-icon: #fff; /* Warna icon chat */
      --warna-text: #505050;
      --warna-text-alt: #989b9f;
      --lebar-chatbox: 320px;
      }

      svg{width: 22px;height: 22px;vertical-align: middle;fill: var(--warna-icon)}
      .chatMenu, .chatButton .svg-2{display: none}
      ..chatButton:hover {cursor: pointer;}

      .chatButton{position: fixed;background-color: var(--warna-background);bottom: 20px;left: 20px;border-radius: 50px;z-index: 20;overflow: hidden;display: flex;align-items: center;justify-content: center;width: 50px;height: 50px;-webkit-transition: all .2s ease-out;transition: all .2s ease-out;}
      .chatButton svg{margin: auto;fill: var(--warna-icon)}
        
      .chatBox{position: fixed;bottom: 70px;left: 20px;width: var(--lebar-chatbox);-webkit-transition: all .2s ease-out;transition: all .2s ease-out;z-index: 21;opacity: 0;visibility: hidden;line-height: normal}
      .chatContent{border-radius: 15px;background-color: #f2f2f2;box-shadow: 0 5px 15px 0 rgba(0,0,0,.05);overflow: hidden}
      .chatHeader{position: relative;display: flex;align-items: center;padding: 15px 20px;background-color: var(--warna-background);overflow: hidden}
      .chatHeader svg{width: 32px;height: 32px;flex-shrink: 0;fill: var(--warna-icon)}
      .chatHeader .chatTitle{padding-left: 15px;font-size: 14px;color: var(--warna-icon)}
      .chatHeader .chatTitle span{font-size: 11.5px;display: block;line-height: 1.58em}
        
      .chatText{display: flex;flex-wrap: wrap;margin: 25px 20px;font-size: 12px;color: var(--warna-text)}
      .chatText span{display: inline-block;margin-right: auto;padding: 10px 10px 10px 20px;background-color: var(--warna-bg-chat);border-radius: 3px 15px 15px}
      .chatText span:after{content: 'Just now';margin-left: 15px;font-size: 9px;color: var(--warna-text-alt)}
      .chatText .typing{margin: 15px 0 0 auto;padding: 10px 20px 10px 10px;border-radius: 15px 3px 15px 15px}
      .chatText .typing: after{display: none}
        
      .chatStart{display: flex;align-items: center;margin-top: 15px;padding: 18px 20px;border-radius: 10px;background-color: #f2f2f2;overflow: hidden;font-size: 12px;color: var(--warna-text)}
      .chatMenu:checked + .chatButton{-webkit-transform: rotate(360deg);transform: rotate(360deg)}
      .chatMenu:checked + .chatButton .svg-1{display: none}
      .chatMenu:checked + .chatButton .svg-2{display: block}
      .chatMenu:checked ~ .chatBox{bottom: 90px;opacity: 1;visibility: visible}
    </style>
    <!-- END CSS Direct Chat Whatsapp -->

  <!-- JS here -->    
        <?php 
            // echo $script; 
        ?>
        <script>
          window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
            });
          }, 10000);
        </script>

        <!-- Start box live chat JConnect -->
        <!-- <script type="text/javascript">
          window.$crisp=[];
          window.CRISP_WEBSITE_ID="354a8073-ae9c-40bb-95fe-7cb1caa26cde";
          (function(){
            d=document;
            s=d.createElement("script");
            s.src="https://client.crisp.chat/l.js";
            s.async=1;
            d.getElementsByTagName("head")[0].appendChild(s);
          })();
        </script> -->
        <!-- END box live chat JConnect -->

        <!-- All JS Custom Plugins Link Here here -->
        <script src="<?=base_url()?>resources/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="<?=base_url()?>resources/assets/js/popper.min.js"></script>
        <script src="<?=base_url()?>resources/assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="<?=base_url()?>resources/assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?=base_url()?>resources/assets/js/owl.carousel.min.js"></script>
        <script src="<?=base_url()?>resources/assets/js/slick.min.js"></script>
        <script src="<?=base_url()?>resources/assets/js/price_rangs.js"></script>
        
        <!-- One Page, Animated-HeadLin -->
        <script src="<?=base_url()?>resources/assets/js/wow.min.js"></script>
        <script src="<?=base_url()?>resources/assets/js/animated.headline.js"></script>
        <script src="<?=base_url()?>resources/assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="<?=base_url()?>resources/assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?=base_url()?>resources/assets/js/jquery.nice-select.min.js"></script>
        <script src="<?=base_url()?>resources/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <!-- <script src="<?=base_url()?>resources/assets/js/contact.js"></script> -->
        <script src="<?=base_url()?>resources/assets/js/jquery.form.js"></script>
        <script src="<?=base_url()?>resources/assets/js/jquery.validate.min.js"></script>
        <script src="<?=base_url()?>resources/assets/js/mail-script.js"></script>
        <script src="<?=base_url()?>resources/assets/js/jquery.ajaxchimp.min.js"></script>
        
        <script src="<?=base_url()?>resources/js/jquery-ui/jquery-ui.js"></script>
        <script src="<?=base_url()?>resources/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?=base_url()?>resources/js/jQuery-Autocomplete/dist/jquery.autocomplete.min.js"></script>
        <!-- Jquery Plugins, main Jquery -->    
        <script src="<?=base_url()?>resources/assets/js/plugins.js"></script>
        <script src="<?=base_url()?>resources/assets/js/main.js"></script>
        <!-- DataTables -->
        
        <!-- <link rel="stylesheet" href="<?=base_url()?>resources/DataTables-1.12.1/css/dataTables.dataTables.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>resources/DataTables-1.12.1/css/dataTables.dataTables.min.css" rel="stylesheet">
        <script src="<?=base_url()?>resources/DataTables-1.12.1/js/dataTables.dataTables.js"></script>
        <script src="<?=base_url()?>resources/DataTables-1.12.1/js/dataTables.dataTables.min.js"></script> -->

        <!-- <link rel="stylesheet" href="<?=base_url()?>resources/DataTables-1.12.1/css/jquery.dataTables.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>resources/DataTables-1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="<?=base_url()?>resources/DataTables-1.12.1/js/jquery.dataTables.js"></script>
        <script src="<?=base_url()?>resources/DataTables-1.12.1/js/jquery.dataTables.min.js"></script> -->

        <!-- <link rel="stylesheet" href="<?=base_url()?>resources/DataTables-1.12.1/css/dataTables.bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>resources/DataTables-1.12.1/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <script src="<?=base_url()?>resources/DataTables-1.12.1/js/dataTables.bootstrap.js"></script>
        <script src="<?=base_url()?>resources/DataTables-1.12.1/js/dataTables.bootstrap.min.js"></script> -->
        
    </body>
</html>