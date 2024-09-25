<?php

$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_logins = $this->session->userdata('USR_LOGINS');
$usr_levels = $this->session->userdata('USR_LEVELS');
$usr_menuid = $this->session->userdata('USR_MENUID');
$usr_idents = $this->session->userdata('USR_IDENTS');
$usr_leveld = $this->m_common->getCommon_idents(2, $usr_levels);
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>JConnect - <?=$title?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>resources/assets/img/favicon4.ico">

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

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?=base_url()?>resources/assets/img/logo/logo3_ji.png" alt="">
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
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="<?=base_url()?>"><img src="<?=base_url()?>resources/assets/img/logo/logo3_ji.png" alt=""></a>                                                        
                                <!-- <a href="<?=base_url()?>dashboard" style="color:#0040ff;text-decoration: none;">
                                    <font style="font-size:xx-large;">Got It!</font><br><font style="font-size:x-small;">(Got Job)</font>
                                </a>  -->
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="<?=base_url()?>dashboard/home">Home</a></li>
                                            <li><a href="<?=base_url()?>find">Find a Match</a></li>
                                            <li><a href="<?=base_url()?>dashboard/about">About</a></li>
                                            <li><a href="<?=base_url()?>dashboard/contact">Contact</a></li>
                                            <!-- <li><a href="#">Menu Utama</a>
                                                <ul class="submenu">
                                                    <li><a href="<?=base_url()?>jobfinderportal-master/blog.html">Submenu 1</a></li>
                                                    <li><a href="<?=base_url()?>jobfinderportal-master/single-blog.html">Submenu 2</a></li>
                                                    <li><a href="<?=base_url()?>jobfinderportal-master/elements.html">Submenu 3</a></li>
                                                    <li><a href="<?=base_url()?>jobfinderportal-master/job_details.html">Submenu 4</a></li>
                                                </ul>
                                            </li> -->
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <?php
                                    if($usr_logins == '' || $usr_levels == ''){
                                ?>
                                    <div class="header-btn d-none f-right d-lg-block">
                                        <a href="<?=base_url()?>register" class="btn head-btn1">Register</a>
                                        <a href="<?=base_url()?>login" class="btn head-btn2">Login</a>
                                    </div>
                                <?php
                                    }else{
                                ?>
                                    <div class="main-menu">
                                        <nav class="d-none d-lg-block">
                                            <ul id="navigation">
                                                <li><a href="#">User <b><?php echo $usr_logins; ?></b></a>
                                                    <ul class="submenu">
                                                        <!-- <li>
                                                            <a href="/profile/info"><i class="fa fa-cog"></i>&nbsp;&nbsp;Info <b><?php echo $this->session->userdata('USR_NAMESS') ; ?></b></a>
                                                        </li> -->
                                                        <li>
                                                        <?php
                                                            if($usr_menuid == 2){
                                                        ?>
                                                            <a href="/edit/pekerja/pekerja/".$usr_idents><i class="fa fa-cog"></i>&nbsp;&nbsp;Info <b><?php echo $this->session->userdata('USR_NAMESS') ; ?></b></a>
                                                        <?php
                                                            }elseif($usr_menuid == 1){
                                                        ?>
                                                            <a href="/edit/master/user/".$usr_idents><i class="fa fa-cog"></i>&nbsp;&nbsp;Info <b><?php echo $this->session->userdata('USR_NAMESS') ; ?></b></a>
                                                        <?php
                                                            }else{
                                                        ?>
                                                            <a href="/profileweb/vinfo/"><i class="fa fa-cog"></i>&nbsp;&nbsp;Info <b><?php echo $this->session->userdata('USR_NAMESS') ; ?></b></a>
                                                        <?php
                                                            }
                                                        ?>
                                                        </li>
                                                        <li>
                                                            <a href="/profileweb/vchange/"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>login/bye"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a>
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
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    <main>
 <!-- data-background="<?=base_url()?>resources/assets/img/hero/how-applybg.png" -->
    <div class="online-cv cv-bg section-overly pt-90 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="cv-caption text-center">
                        <?php
                        // --------------------------------------  Tampilan untuk content  ----------------------------- //
                            echo $content;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p>Tsubasys adalah</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div> -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Info Kontak</h4>
                                <ul>
                                    <li>
                                    <p>GRAND GALAXY CITY RSA 3 No 25 27, Jakasetia, RT.001/RW.002, Pekayon Jaya, Kec. Bekasi Selatan, Kota Bekasi, Jawa Barat 17147, Indonesia</p>
                                    </li>
                                    <li><a href="#">Phone : +62-857-7046-0065</a></li>
                                    <li><a href="#">Email : jconnect@gmail.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Link Penting</h4>
                                <ul>
                                    <li><a href="#"> View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                             </div>
                             <!-- Form -->
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="<?=base_url()?>resources/assets/img/icon/form.png" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               <!-- <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-logo mb-20">
                        <a href="index.html"><img src="<?=base_url()?>resources/assets/img/logo/logo2_footer.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>5000+</span>
                        <p>Talented Hunter</p>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div> -->
                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                     <div class="footer-tittle-bottom">
                         <span><a href="https://www.facebook.com/TsubameJltc"><i class="fab fa-facebook-f"></i></a></span>
                         <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                         <span><a href="https://www.instagram.com/lpk_tsubame_jltc/?hl=en"><i class="fab fa-instagram"></i></a></span>
                         <span><a href="https://www.youtube.com/channel/UCD4kbQEMW8h71xfJCDb8xnw"><i class="fab fa-youtube"></i></a></span>
                     </div>
                 </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                 <!-- <script>document.write(new Date().getFullYear());</script> -->
  Copyright &copy;2022 All rights reserved | This template is made by <a href="<?=base_url()?>" target="_blank">Jconnect!</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <!-- <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="https://www.facebook.com/TsubameJltc"><i class="fab fa-facebook-f"></i></a>
                                 <a href="https://www.instagram.com/lpk_tsubame_jltc/?hl=en"><i class="fab fa-instagram"></i></a>
                                 <a href="https://www.youtube.com/channel/UCD4kbQEMW8h71xfJCDb8xnw"><i class="fab fa-youtube"></i></a>
                             </div>
                         </div> -->
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
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="<?=base_url()?>resources/assets/js/plugins.js"></script>
        <script src="<?=base_url()?>resources/assets/js/main.js"></script>
        
    </body>
</html>