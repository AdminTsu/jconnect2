<?php
$usr_fnames = $this->session->userdata('EMP_FNAMES');
$usr_logins = $this->session->userdata('USR_LOGINS');
$usr_levels = $this->session->userdata('USR_LEVELS');
$usr_menuid = $this->session->userdata('USR_MENUID');
$usr_leveld = "";//$this->crud->getCommon_idents(2, $usr_levels);
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
$count= 1;
?>

<header id="top-header" class="navbar-inverse navbar-fixed-top">
    <div class="container">
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
                    <!-- <img src="images/logo.png" alt=""> -->
                </a>
            </div>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <div class="main-menu">
                <ul id="nav" class="nav navbar-nav">
                    <li class="scroll"><a href="/home/welcome" data-section="#home"><i class="fa fa-home"></i>&nbsp;&nbsp;Beranda</a></li>
                    <li class="scroll"><a href="/home/dasbor" data-section="#about"><i class="fa fa-tachometer"></i>&nbsp;&nbsp;Dasbor</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-check-square"></i>&nbsp;&nbsp;Audit<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="/audit/hasilaudit">Hasil Audit</a></li>
                            <li><a tabindex="-1" href="/audit/tindakanperbaikan">Tindakan Perbaikan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-file-text"></i>&nbsp;&nbsp;Dokumen<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="/permintaandokumen">Permintaan Dokumen</a></li>
                            <li><a tabindex="-1" href="/home/form">Form</a></li>
                            <li><a tabindex="-1" href="/kendalidokumen">Dokumen JO</a></li>
                            <li><a tabindex="-1" href="/mom">Minutes Meeting</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <li class="scroll"><a href="/home/search" data-section="#home"><i class="fa fa-search"></i>&nbsp;&nbsp;Pencarian</a></li>
                    </li>

                    <!-- <li class="scroll"><a href="/home/advancesearch" data-section="features"><i class="fa fa-search"></i>&nbsp;&nbsp;Pencarian</a></li> -->
                    <?php
                    if($count>0){
                    ?>
                    <li class="scroll"><a href="/adminhome/welcome" data-section="features"><i class="fa fa-cog"></i>&nbsp;&nbsp;Administrasi</a></li>
                    <?
                    }
                    ?>

                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;Sign as <?=$usr_logins?><strong class="caret"></strong></a>
                        <div class="dropdown-menu" style="padding: 15px; width:200px;padding-bottom: 0px;">
                            <p class="text-muted small">
                            <strong><?=$usr_fnames?></strong><br>
                            <?=$usr_leveld?>
                            </p>
                            <div class="divider">
                            </div>                            
                            <div class="navbar-footer">
                                <div class="navbar-footer-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="<?php echo base_url(); ?>admin/userlogin/ubahpassword" class="btn btn-primary btn-sm active"> Sandi</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="<?php echo base_url(); ?>login/bye" class="btn btn-primary btn-sm active">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style='height:10px'>&nbsp;
                            </div>                           
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
                   
        <!-- /main nav -->
        
    </div>
</header>