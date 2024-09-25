<?php

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
        <link rel="manifest" href="site.webmanifest">
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
            
    </head>
    <script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    <!-- <script src="https://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js" type="text/javascript"></script> -->
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
        });

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
        .ui-datepicker tbody td:last-child {
          border-right: 0px;
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
          background: #f7f7f7;
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
                    <div class="row align-items-center">
                        <div class="col-lg-1 col-md-1">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="<?=base_url()?>"><img src="<?=base_url()?>resources/assets/img/logo/JConnect_Logo_01.png" style='width: 140px;height:45px;' alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="<?=base_url()?>dashboard/home">&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="<?=base_url()?>dashboard/home">Beranda</a></li>
                                            <li><a href="<?=base_url()?>find_jobs">Cari Lowongan</a></li>
                                            <li><a href="<?=base_url()?>dashboard/about">Tentang</a></li>
                                            <li><a href="<?=base_url()?>contact">Kontak</a></li>
                                            <?php
                                                if($usr_logins == '' || $usr_levels == ''){
                                            ?>
                                                <li><a href="#">Akses</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web'  href="<?=base_url()?>register">Daftar</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?=base_url()?>login_web">Masuk</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            <?php
                                                }

                                                if($usr_logins != '' && $usr_levels == 2){
                                            ?>
                                                <li><a href="#">My JConnect</b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect">Profile Saya</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/pengalaman">Pengalaman</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/minat_kerja">Minat Kerja</a>
                                                        </li>
                                                        <li>
                                                            <a href="/myjconnect/lamaran/">Lamaran Saya</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            <?php
                                                }

                                                // ------------- fitur ini belum selesai
                                                if($usr_logins != '' && $usr_levels == 3){
                                            ?>

                                                <li><a href="<?=base_url()?>myjconnect_client">My JConnect Client</a></li>
                                                <!-- <li><a href="#">My JConnect Client</b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client">Profile Perusahaan</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/lowongan">Lowongan</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/lamaran">Lamaran Pekerja</a>
                                                        </li>
                                                    </ul>
                                                </li> -->
                                            <?php
                                                }

                                                // ------------- untu super admin
                                                if($usr_logins != '' && $usr_levels == 99){
                                            ?>
                                                <!-- <li><a href="#">My JConnect SA</b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect">Profile Saya</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/pengalaman">Pengalaman</a>
                                                        </li>
                                                        <li>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/minat_kerja">Minat Kerja</a>
                                                        </li>
                                                        <li>
                                                            <a href="/myjconnect/lamaran/">Lamaran Saya</a>
                                                        </li>
                                                    </ul>
                                                </li> -->

                                            <?php
                                                }
                                            ?>
                                            <li><a href="<?php echo base_url(); ?>dashboard">(ID)</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a id='menu_web' href="<?php echo base_url(); ?>jpn/dashboard">Jepang (JP)</a>
                                                    </li>
                                                </ul>
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
                                    if($usr_logins == '' || $usr_levels == ''){
                                ?>
                                    <div class="header-btn d-none f-right d-lg-block">
                                        <a href="<?=base_url()?>register" class="btn head-btn2">Daftar</a>
                                        <a href="<?=base_url()?>login_web" class="btn head-btn2">Masuk</a>
                                        <!-- <a href="<?=base_url()?>login" class="btn head-btn2">Masuk</a> -->
                                    </div>
                                <?php
                                    }else{
                                ?>
                                    <div class="main-menu">
                                        <nav class="d-none d-lg-block">
                                            <ul id="navigation">
                                                <li><a href="#">Hi, <b><?php echo $usr_logins; ?></b></a>
                                                    <ul class="submenu">
                                                        <li>
                                                        <?php
                                                            if($usr_menuid == 2){
                                                        ?>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        <?php
                                                            }elseif($usr_menuid == 1){
                                                        ?>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        <?php
                                                            }else{
                                                        ?>
                                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        <?php
                                                            }
                                                        ?>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>login_web/bye"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Keluar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>    
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
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

    <main>

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
        }else{
            echo 'Content belum di setting!';
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
                                        <font color='#EA9000'>APA YANG KAMI LAKUKAN?</font><br>
                                        Lebih dari 200 tenaga kerja berpengalaman sudah kami proses<br>
                                        Kami membantu para pekerja Indonesia yang sudah kembali ke Indonesia agar dapat mendapatkan pekerjaan baru.
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
                                    <li><a href="<?=base_url()?>find_jobs">Cari Lowongan</a></li>
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
                                    <li><a href="<?=base_url()?>termofuse">Kebijakan Penggunaan</a></li>
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
                                    <li><font color='#EA9000'>Phone : +62-857-7046-0065</font></li>
                                    <li><font color='#EA9000'>Email : jconnect@jconnect.co.id</font></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                  <div class="footer-tittle-bottom">
                       <span><a href="https://www.facebook.com/TsubameJltc" target='_blank'><i class="fab fa-facebook-f"></i></a></span>
                       <span><a href="https://www.instagram.com/lpk_tsubame_jltc/?hl=en" target='_blank'><i class="fab fa-instagram"></i></a></span>
                       <span><a href="https://www.youtube.com/channel/UCD4kbQEMW8h71xfJCDb8xnw" target='_blank'><i class="fab fa-youtube"></i></a></span>
                       <span><a href="<?=base_url()?>chat_wa" target='_blank' alt='Jika butuh bantuan bisa hubungi kami di Whatsapp ini'><i class="fab fa-whatsapp"></i></a></span>
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
                                 <p>Copyright &copy;2022 All rights reserved by <a href="<?=base_url()?>">JConnect</a></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

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
        <!-- All JS Custom Plugins Link Here here -->
        <script src="<?=base_url()?>resources/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="<?=base_url()?>resources/assets/js/vendor/jquery-1.12.4.min.js"></script>
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
        
    </body>
</html>