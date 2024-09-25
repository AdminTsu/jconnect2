<?php
// 
$usr_fnames = $this->session->userdata('EMP_FNAMES');
$usr_logins = $this->session->userdata('USR_LOGINS');
$usr_levels = $this->session->userdata('USR_LEVELS');
$usr_leveld = $this->crud->getCommon_idents(2, $usr_levels);
if($this->session->userdata('USR_PICTUR')!=""){
    $picture = $this->session->userdata('USR_PICTUR');
    // echo base_url(USERPIC.$picture);
    // echo "<br><BR>" .file_exists();
    if(!file_exists("public/picture/" .$picture)){
        $picture = "default-user-icon.png";   
    }
}else{
    $picture = "default-user-icon.png";
}

$appnumero = $this->config->item('app_numbr');
$menu = $this->crud->getMenuHeader($appnumero, $usr_logins);
$count = count($menu);
// $count = 2;
//$data = $this->master_model->getLokasi_data($this->session->userdata('USR_LOKASI'));
$lokasi = 'Jakarta';//$data['LOK_PSTION'];?>
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
                <a class="smooth-scroll" data-section="#home" href="#home" >
                    <!-- <img src="<?=base_url(IMAGES."kbs_logo.png")?>" width=23%> -->
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
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-check-square"></i>&nbsp;&nbsp;Support<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="/support/project">Project</a></li>
                            <li><a tabindex="-1" href="/support/spk">SPK</a></li>
                            <li><a tabindex="-1" href="/support/tindakan">Tindakan</a></li>
                            <li><a tabindex="-1" href="/support/verifikasi">Verifikasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-check-square"></i>&nbsp;&nbsp;Report<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="/purchase/order">Jadwal Kedatangan</a></li>
                            <li><a tabindex="-1" href="/purchase/spb/outstanding">SPB</a></li>
                            <li><a tabindex="-1" href="/lokalsoftware/laporan">Laporan WIP Lokal Software</a></li>
                        </ul>
                    </li>
                    
                    <li class="divider-vertical"></li>
                </ul>

              <div class="pull-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;Sign as <?=$usr_logins?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/master/user/viewdetail"><i class="fa fa-cog"></i>&nbsp;&nbsp;User Information</a></li>
                            <!-- <li><a href="/help/support"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Contact Support</a></li> -->
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>login/bye"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
              
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
