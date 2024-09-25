<?php
$usr_fnames = $this->session->userdata('nama');
$usr_logins = $this->session->userdata('username');
$usr_leveld = "";//$this->crud->getCommon_idents(2, $usr_levels);
// if($this->session->userdata('USR_PICTUR')!=""){
//     $picture = $this->session->userdata('USR_PICTUR');
//     // echo base_url(USERPIC.$picture);
//     // echo "<br><BR>" .file_exists();
//     if(!file_exists("public/picture/" .$picture)){
//         $picture = "default-user-icon.png";   
//     }
// }else{
    $picture = "default-user-icon.png";
// }
?>
  <header class="main-header" style="position:fixed;">
    <!-- Logo -->
    <a href="#" class="logo" data-toggle="offcanvas" role="button">
      <span class="logo-mini"><b>SDM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">SDM</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="/home/welcome">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <?php
        echo $this->common->vmenu();
        ?>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i><?=$usr_logins?>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/master/user/ubahpassword"><i class="fa fa-key"></i>Ubah Password</span></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="/login/bye">
            <i class="fa fa-power-off"></i><span>Log Out <b> <font size='2'><?=$usr_logins?> </font></b></span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>