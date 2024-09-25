<?php
// 
$username = $this->session->userdata('USR_NAMESS');
$usr_logins = $this->session->userdata('USR_LOGINS');
$level = $this->session->userdata('USR_LEVELS');
$loginid = $this->session->userdata('USR_IDENTS');
$menuid = $this->session->userdata('USR_MENUID');
$types = $this->session->userdata('USR_TYPESS');
$usr_leveld = $this->m_common->getCommon_idents(2, $level);

// echo "<br><br>username = $username<br>userid = $usr_logins<br>level = $level<br>loginid = $loginid<br>menuid =  $menuid<br>type =  $types";

$menu = $this->crud->getMenuHeader($usr_logins);
$count = count($menu);
// $count = 2;
//$data = $this->master_model->getLokasi_data($this->session->userdata('USR_LOKASI'));
$lokasi = 'Jakarta';//$data['LOK_PSTION'];?>
<style>
.dropdown-menu {
  font-size: 12px;
} 
.nav > li > a {
  font-size: 12px;
  padding: 10px 10px;
}

</style>
<header id="top-header" class="navbar-inverse navbar-fixed-top">
    <div class="container" style="width:100%">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->
            
            <!-- logo -->
            <div class="navbar-brand">
                <a class="smooth-scroll" data-section="#home" href="#home"  style="text-decoration:none;">
                    <img style="width: 25px;height:25px;" src="<?=base_url()?>resources/img/Logo_JConnect_Gradient_BG_home2.png" alt="">&nbsp;<font color='white'>JConnect</font>
                </a>
            </div>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse" role="navigation">
            <div class="main-menu">
                <ul id="nav" class="nav navbar-nav">
                    <li class="scroll"><a href="/home/welcome" data-section="#home"><i class="fa fa-home"></i>&nbsp;&nbsp;Beranda</a></li>

                    <?=$this->common->menu();?>
                    
                    <li class="divider-vertical"></li>
                </ul>

              <div class="pull-right">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;Sign as <?=$usr_logins?><b class="caret"></b></a> -->
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> <?=$this->session->userdata('USR_NAMESS')?></i>&nbsp;&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php 
                                if($level == 99 || $level == 1){
                            ?>
                                <li><a href="/profile/info"><i class="fa fa-cog"></i>&nbsp;&nbsp;Info Pengguna</b></a>
                                </li>
                                <!-- <li><a href="/pekerja/lamaran/".$usr_idents><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Lamaran anda</b></a></li>
                                <li><a href="/rekanan/pelamar/".$usr_idents><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;Daftar Pelamar</b></a></li> -->
                            <?php 
                                }elseif($level == 2){
                            ?>
                                <li><a href="/profile/info_pekerja"><i class="fa fa-cog"></i>&nbsp;&nbsp;Info Pengguna</b></a>
                                </li>
                                <!-- <li><a href="/pekerja/lamaran/".$usr_idents><i class="fa fa-clipboard-list"></i>&nbsp;&nbsp;Lamaran anda</a></li> -->
                            <?php 
                                }else{
                            ?>
                                <li><a href="/profile/info_rekanan"><i class="fa fa-cog"></i>&nbsp;&nbsp;Info Pengguna</a>
                                </li>
                                <!-- <li><a href="/rekanan/pelamar/".$usr_idents><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Daftar Pelamar</a></li> -->
                            <?php 
                                }
                            ?>
                            <li><a href="/profile/changepass/"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a></li>
                            <!-- <li><a href="/help/support"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Contact Support</a></li> -->
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>login/bye"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout </a></li>
                            <!-- <b><?=$usr_logins?></b> -->
                        </ul>
                    </li>
                </ul>
              </div>
              
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
