<?php
$levels = $this->session->userdata('USR_LEVELS');
$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_idents = $this->session->userdata('USR_IDENTS');
$optCountry = $this->crud->getCommon(3,7);
$optPrvince = $this->m_master->getComboProvince();
$optCity = $this->m_master->getComboCity();
$optBidang = $this->m_jconnect->getBidangKerja();
$arrJOBS = $this->m_job->getJobUpdate();

    // print_r($data);
    foreach($data as $row){
        // if($type==1){
            $mmbrno = isset($row['CLI_NOMORS']) ? $row['CLI_NOMORS'] : NULL;
            $idents = isset($row['CLI_IDENTS']) ? $row['CLI_IDENTS'] : NULL;
            $logoss = isset($row['CLI_LOGOSS']) ? $row['CLI_LOGOSS'] : NULL;
            $namess = isset($row['USR_NAMESS']) ? $row['USR_NAMESS'] : NULL;
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
            $vacncy = isset($row['CLI_VACNCY']) ? $row['CLI_VACNCY'] : NULL;
            $faxnom = isset($row['CLI_FAXNUM']) ? $row['CLI_FAXNUM'] : NULL;
            $descre = isset($row['CLI_DESCRE']) ? $row['CLI_DESCRE'] : NULL;
        // }

    }

    if($logoss != ''){
        $not_click = "<font color='red'>(click untuk melihat berkas)</font>";
    }else{
        $not_click = "";
    }

?>
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
</style>
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
                            <!-- <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/lowongan"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;Lowongan Pekerjaan</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/lamaran"><i class="fa fa-archive"></i>&nbsp;&nbsp;Lamaran Pekerja</a>
                            </div><br> -->
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;Ubah Password</a>
                            </div><br>
                            <?php if($jenis == 'view'){ ?>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/<?=$link_menu?>/<?=$idents?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                            </div><br>
                            <?php } ?>

                        </div>
                        <div class="result"></div>

                </div>

            </div>

<style>
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

<!-- Right content -->
<script>
    $(document).ready(function(){
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
                alert('Password yang anda masukan tidak sama, silahkan masukan kembali kata sandi anda!');
                $('#txtPASWD2').val('');
                $('#txtPASWD2').focus();
                return;
            }
        });

        $( function() {
            $( "#datBIRTHD" ).datepicker({
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
</script>

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
                    <th colspan=4><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr>
                    <td rowspan=5>
                        <center>
                            <div class="container_img">
                            <?php if($visafl != '' || $visafl != null){?>
                                <img style='height: 150px;' src="<?=base_url()?>assets/documents/upload/client/<?=$idents?>/<?=$logoss?>" alt="Avatar" class="image" style="width:100%">
                            <?php }else{?>
                                <img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
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
                    <td style='text-align: left;'><i class="ti-email"></i>&nbsp;&nbsp;<?=$emails?></td>
                    <!-- <td style='text-align: left;'><i class="fas fa-desktop">&nbsp;&nbsp;</i><?=$bidang?></td> -->
                </tr>
                <tr>
                    <td colspan=3><i class="fas fa-desktop"></i>&nbsp;&nbsp;<?=$bidang?></td>
                </tr>

                <tr>
                    <td colspan=4 width="1px" height="1px" style='text-align: center;'><b><hr></b>
                    </td>
                </tr>
                <tr><td>Tentang Kami</td><td colspan=3>: <?=$descre?></td></tr>
                <tr><td>No. Member</td><td colspan=3>: <?=$mmbrno?></td></tr>
                <tr><td>Alamat</td><td colspan=3>: <?=$addres?></td></tr>
                <tr><td>Lokasi</td><td colspan=3>: <?=$provnc?> - <?=$cityss?>, <?=$contry?></td></tr>
                <tr><td>Fax</td><td colspan=3>: <?=$faxnom?></td></tr>
                <tr><td>PIC</td><td colspan=3>: <?=$picnya?></td></tr>
                <tr><td>No. Handphone</td><td colspan=3>: <?=$nomrhp?></td></tr>
            </table><br>

<?php
        }else{
?>
<!-- -------------------------------------------------------  edit profile --------------------------------------------------------------- -->
        
        <form action="/myjconnect_client/profile_simpan/<?=$idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
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
                                    <?php if($visafl != '' || $visafl != null){?>
                                        <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/client/<?=$idents?>/<?=$logoss?>" alt="">
                                    <?php }else{?>
                                        <img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
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
                                    <select style='width: 500px;text-align: left;' name="cmbASPECS" id="cmbASPECS">
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
                                    <select style='width: 500px;text-align: left;' name="cmbCONTRY" id="cmbCONTRY">
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
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbPROVNC" id="cmbPROVNC">
                                        <?php
                                            foreach($optPrvince as $key=>$row){
                                                if($prvnid == $key){
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
                                <td>Kota</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbCITYSS" id="cmbCITYSS">
                                        <?php
                                            foreach($optCity as $key=>$row){
                                                if($cityid == $key){
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
                                <td>Email</td>
                                <td>
                                    <input class="form-control" name="txtEMAILS" id="txtEMAILS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email" value='<?=$emails?>' style='width: 500px;text-align: left;' readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>
                                    <input class="form-control" name="txtWEBSIT" id="txtWEBSIT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Website'" placeholder="Website" value='<?=$websit?>' style='width: 500px;text-align: left;'>
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
                                    <input class="form-control" name="txtNOMFAX" id="txtNOMFAX" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Telp'" placeholder="No. Telp" value='<?=$faxnom?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama PIC</td>
                                <td>
                                    <input class="form-control" name="txtCONTAC" id="txtCONTAC" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama PIC'" placeholder="Nama PIC" value='<?=$picnya?>' style='width: 500px;text-align: left;'>
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
                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/profile_edit/<?=$idents?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
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
    //  ------------------------------------------------------ Lowongan ------------------------------- //
    if($type == 2){
        // print_r($data);
        foreach($data as $row){

            $jobnum = isset($row['JOB_NOMORS']) ? $row['JOB_NOMORS'] : NULL;
            $jobttl = isset($row['JOB_TITLES']) ? $row['JOB_TITLES'] : NULL;
            $lokasi = isset($row['JOB_LCTION']) ? $row['JOB_LCTION'] : NULL;
            $bidang = isset($row['JOB_ASPECS']) ? $row['JOB_ASPECS'] : NULL;
            $descre = isset($row['JOB_DSCRIP']) ? $row['JOB_DSCRIP'] : NULL;
            $respon = isset($row['JOB_RESPON']) ? $row['JOB_RESPON'] : NULL;
            $rqskil = isset($row['JOB_RQSKIL']) ? $row['JOB_RQSKIL'] : NULL;
            $fsilty = isset($row['JOB_FSILTY']) ? $row['JOB_FSILTY'] : NULL;
            $salmin = isset($row['JOB_SALMIN']) ? $row['JOB_SALMIN'] : NULL;
            $salmax = isset($row['JOB_SALMAX']) ? $row['JOB_SALMAX'] : NULL;
            $emilct = isset($row['JOB_EMILCT']) ? $row['JOB_EMILCT'] : NULL;
            $expreq = isset($row['JOB_EXPREQ']) ? $row['JOB_EXPREQ'] : NULL;
            $vacncy = isset($row['JOB_VACNCY']) ? $row['JOB_VACNCY'] : NULL;
            $status = isset($row['JOB_STATUS']) ? $row['JOB_STATUS'] : NULL;

        }

        if($jenis == 'view'){
?>
<!-- ----------------------------------------------------  view profile ------------------------------------------------------------- -->
                <!-- <tr>
                    <td><span><b><?=$icon?>&nbsp;&nbsp;<?=$menu?></b></span></td>
                </tr> -->
            <table class='table1'>
                <tr>
                    <th colspan=4><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr><td>No.</td><td>: <?=$descre?></td></tr>
                <tr><td>Tentang Kami</td><td colspan=3>: <?=$descre?></td></tr>
                <tr><td>No. Member</td><td colspan=3>: <?=$mmbrno?></td></tr>
                <tr><td>Alamat</td><td colspan=3>: <?=$addres?></td></tr>
                <tr><td>Lokasi</td><td colspan=3>: <?=$provnc?> - <?=$cityss?>, <?=$contry?></td></tr>
                <tr><td>Fax</td><td colspan=3>: <?=$faxnom?></td></tr>
                <tr><td>PIC</td><td colspan=3>: <?=$picnya?></td></tr>
                <tr><td>No. Handphone</td><td colspan=3>: <?=$nomrhp?></td></tr>
            </table><br>

<?php
        }else{
?>
<!-- -------------------------------------------------------  edit profile --------------------------------------------------------------- -->
        
        <form action="/myjconnect_client/profile_simpan/<?=$idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <tr>
                                <td colspan=2>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/profile_edit/<?=$idents?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
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
                            <tr>
                                <td colspan=2 style='text-align: left;'><b><u>Ubah Profile Perusahaan</u></b></td>
                            </tr>
                            <tr>
                                <!-- <td style='text-align: center;'>
                                    <a>
                                        <img style="width: 180px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: center;" src="<?=base_url()?>resources/img/Screenshot_BG.png" alt="">
                                    </a>
                                </td> -->
                                <td style='text-align: left;'>
                                    <a>
                                    <?php if($visafl != '' || $visafl != null){?>
                                        <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/client/<?=$idents?>/<?=$logoss?>" alt="">
                                    <?php }else{?>
                                        <img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
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
                                    <select style='width: 500px;text-align: left;' name="cmbASPECS" id="cmbASPECS">
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
                                    <select style='width: 500px;text-align: left;' name="cmbCONTRY" id="cmbCONTRY">
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
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbPROVNC" id="cmbPROVNC">
                                        <?php
                                            foreach($optPrvince as $key=>$row){
                                                if($prvnid == $key){
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
                                <td>Kota</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbCITYSS" id="cmbCITYSS">
                                        <?php
                                            foreach($optCity as $key=>$row){
                                                if($cityid == $key){
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
                                <td>Email</td>
                                <td>
                                    <input class="form-control" name="txtEMAILS" id="txtEMAILS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email" value='<?=$emails?>' style='width: 500px;text-align: left;' readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>
                                    <input class="form-control" name="txtWEBSIT" id="txtWEBSIT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Website'" placeholder="Website" value='<?=$websit?>' style='width: 500px;text-align: left;'>
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
                                    <input class="form-control" name="txtNOMFAX" id="txtNOMFAX" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Telp'" placeholder="No. Telp" value='<?=$faxnom?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama PIC</td>
                                <td>
                                    <input class="form-control" name="txtCONTAC" id="txtCONTAC" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama PIC'" placeholder="Nama PIC" value='<?=$picnya?>' style='width: 500px;text-align: left;'>
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
                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/profile_edit/<?=$idents?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
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

<!-- ----------------------------------------------------  Ubah Password ------------------------------------------------------------- -->
<?php
    if($type == 4){
?>
        
        <form action="/myjconnect_client/ubah_password_simpan/<?=$idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
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
                                                        &nbsp;&nbsp;Simpan</i>
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
