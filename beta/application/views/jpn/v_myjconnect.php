<?php
$levels = $this->session->userdata('USR_LEVELS');
$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_idents = $this->session->userdata('USR_IDENTS');
$optCountry = $this->crud->getCommon(3,7);
$optPrvince = $this->m_master->getComboProvince();
$optCity = $this->m_master->getComboCity();
$optBidang = $this->m_jconnect->getBidangKerja();
$arrJOBS = $this->m_job->getJobUpdate();
$optSEXESS = array('0'=>'-- 性別の選択 --','1'=>'男性','2'=>'女性');
$optJENISS = array('0'=>'何れも','1'=>'契約','2'=>'滞在');
$optEXPRNC = array('0'=>'-- 経験値 --','1'=>'1-2 年','2'=>'2-3 年','3'=>'3-6 年','4'=>'> 6 年');
$optRLGION = $this->m_jconnect->getReligion();
$optLSTEDU = $this->m_jconnect->getLastEdu();
$optMERRID = $this->m_jconnect->getStatusMarried();

// print_r($data);
foreach($data as $row){
    $idpkrj = isset($row['PKR_IDENTS']) ? $row['PKR_IDENTS'] : NULL;
    $fotoss = isset($row['PKR_FOTOSS']) ? $row['PKR_FOTOSS'] : NULL;
    $namess = isset($row['PKR_NAMESS']) ? $row['PKR_NAMESS'] : NULL;
    $emails = isset($row['USR_EMAILS']) ? $row['USR_EMAILS'] : NULL;
    $nompkr = isset($row['PKR_NOMPKR']) ? $row['PKR_NOMPKR'] : NULL;
    $addres = isset($row['PKR_ADDRES']) ? $row['PKR_ADDRES'] : NULL;
    $addrdo = isset($row['PKR_ADDRDO']) ? $row['PKR_ADDRDO'] : NULL;
    $tmplhr = isset($row['PKR_TMPLHR']) ? $row['PKR_TMPLHR'] : NULL;
    $tgllhr = isset($row['PKR_TGLLHR']) ? $row['PKR_TGLLHR'] : NULL;
    $nomktp = isset($row['PKR_NOMKTP']) ? $row['PKR_NOMKTP'] : NULL;
    $nonpwp = isset($row['PKR_NONPWP']) ? $row['PKR_NONPWP'] : NULL;
    $nomtlp = isset($row['PKR_NOMTLP']) ? $row['PKR_NOMTLP'] : NULL;
    $nomrhp = isset($row['PKR_NOMRHP']) ? $row['PKR_NOMRHP'] : NULL;
    $klmnid = isset($row['PKR_JNSKLM']) ? $row['PKR_JNSKLM'] : NULL;
    $jnsklm = isset($row['JNSKLM']) ? $row['JNSKLM'] : NULL;
    $rlgnid = isset($row['PKR_RELIGN']) ? $row['PKR_RELIGN'] : NULL;
    $relgin = isset($row['RELIGN']) ? $row['RELIGN'] : NULL;
    $educid = isset($row['PKR_EDUCID']) ? $row['PKR_EDUCID'] : NULL;
    $eductn = isset($row['EDUCTN']) ? $row['EDUCTN'] : NULL;
    $marrid = isset($row['PKR_MARRID']) ? $row['PKR_MARRID'] : NULL;
    $marred = isset($row['MARRID']) ? $row['MARRID'] : NULL;
        $cntrid = isset($row['PKR_CONTRY']) ? $row['PKR_CONTRY'] : NULL;
        $contry = isset($row['CONTRY']) ? $row['CONTRY'] : NULL;
        $prvnid = isset($row['PKR_PROVNC']) ? $row['PKR_PROVNC'] : NULL;
        $provnc = isset($row['PROVNC']) ? $row['PROVNC'] : NULL;
        $cityid = isset($row['PKR_CITYSS']) ? $row['PKR_CITYSS'] : NULL;
        $cityss = isset($row['CITYSS']) ? $row['CITYSS'] : NULL;

    $exprnc = isset($row['PKR_EXPRNC']) ? $row['PKR_EXPRNC'] : NULL;
    $expnpt = isset($row['PKR_EXPNPT']) ? $row['PKR_EXPNPT'] : NULL;
    $expbdg = isset($row['PKR_EXPBDG']) ? $row['PKR_EXPBDG'] : NULL;
    $srtkt1 = isset($row['PKR_SRTKT1']) ? $row['PKR_SRTKT1'] : NULL;
    $srtkt2 = isset($row['PKR_SRTKT2']) ? $row['PKR_SRTKT2'] : NULL;
    $visafl = isset($row['PKR_VISAFL']) ? $row['PKR_VISAFL'] : NULL;
    $lvlbhs = isset($row['PKR_LVLBHS']) ? $row['PKR_LVLBHS'] : NULL;
    $magang = isset($row['PKR_MAGANG']) ? $row['PKR_MAGANG'] : NULL;
    $sswfil = isset($row['PKR_SSWFIL']) ? $row['PKR_SSWFIL'] : NULL;

    $mntbid = isset($row['PKR_MNTBDG']) ? $row['PKR_MNTBDG'] : NULL;
    $mntbdg = isset($row['MNTBDG']) ? $row['MNTBDG'] : NULL;
    $bdlain = isset($row['PKR_BDLAIN']) ? $row['PKR_BDLAIN'] : NULL;
    $expsal = isset($row['PKR_EXPSAL']) ? $row['PKR_EXPSAL'] : NULL;
    $filecv = isset($row['PKR_FILECV']) ? $row['PKR_FILECV'] : NULL;

    if($mntbid == '' || $mntbid == null){
        $mntbid = 0;
    }

    $date = date_create($tgllhr);
    $tgllhr_conv = date_format($date,"d F Y");

    if($exprnc == 1 or $exprnc < 3){
        $level_exp = '初級編';
        $ket_exp = '1〜2年の実務経験';
    }elseif($exprnc >= 3 or $exprnc <= 5){
        $level_exp = 'ミディアム';
        $ket_exp = '3〜5年の実務経験';
    }else{
        $level_exp = 'プロフィシェント';
        $ket_exp = '5年以上の実務経験';
    }
}

if(($visafl != '' || $lvlbhs != '' || $magang != '' || $sswfil != '' || $filecv != '') OR ($visafl != null || $lvlbhs != null || $magang != null || $sswfil != null || $filecv != null)){
    $not_click = "<font color='red'>(クリックするとファイルを表示します)</font>";
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
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect"><i class="fa fa-user"></i>&nbsp;&nbsp;マイプロフィール</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect/pengalaman/<?=$idpkrj?>"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;経験</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect/minat_kerja/<?=$idpkrj?>"><i class="fa fa-cogs"></i>&nbsp;&nbsp;興味のある仕事</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect/lamaran"><i class="fa fa-folder-open"></i>&nbsp;&nbsp;私の応募作品</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect/ubah_password/<?=$usr_idents?>"><i class="fa fa-key"></i>&nbsp;&nbsp;パスワードの変更</a>
                            </div><br>
                            <?php if($jenis == 'view'){ ?>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect/<?=$link_menu?>/<?=$idpkrj?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;変更</i></a>
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

    $('#bdlain_field').hide();
        
    $('#submit').bind('submit',function(data){
        if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val()){
            alert('フィルターがない！');
            return;
        }
    });

    $('#reset').bind('click',function(data){
        $(this).closest('form').find("input[type=text]").val("");
        window.location.replace("/jpn/find_jobs");
    });

    $('#txtPASWD2').bind('change',function(data){
        var pass1 = $('#txtPASWD1').val();
        var pass2 = $('#txtPASWD2').val();
        if(pass1 != pass2){
            alert('入力したパスワードが違うので、もう一度パスワードを入力してください');
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

    if(<?=$mntbid?> != 99){
        $('#bdlain_field').hide();
    }else{
        $('#bdlain_field').show();
    }
    
    $('#cmbMNTBDG').bind('change',function(data){
        var bdgmnt = $('#cmbMNTBDG').val();
        // alert(pkrjid);
        if(bdgmnt == 99){
            $('#bdlain_field').show();
        }else{
            $('#bdlain_field').hide();
        }
    });
});

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
            url: "/jpn/myjconnect_client/comboProvince/"+idcontry, // Isi dengan url/path file php yang dituju
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
            url: "/jpn/myjconnect_client/comboKota/"+idcontry+"/"+idprovnc, // Isi dengan url/path file php yang dituju
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
                <!-- <tr>
                    <td><span><b><?=$icon?>&nbsp;&nbsp;<?=$menu?></b></span></td>
                </tr> -->
            <table class='table1'>
                <tr>
                    <th colspan=4><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <!-- <tr>
                    <td colspan=4 style='text-align: right;'>
                        <div class="single-listing">
                            <div id='single-listing' class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/profile_edit/<?=$usr_idents?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                            </div><br>
                        </div>
                    </td>
                </tr> -->
                <tr>
                    <td rowspan=4>
                        <center>
                            <div class="container_img">
                            <?php if($fotoss != '' || $fotoss != null){?>
                                <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$fotoss?>" alt="Avatar" class="image">
                            <?php }else{?>
                                <img style="width: 150px;height:150px;border: 0px solid gainsboro;border-radius:3px;text-align: left;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar">
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
                <?php
                    if($exprnc == 6){
                        $ket_thn = '以上';
                    }else{
                        $ket_thn = '';
                    }
                ?>
                <tr>
                    <td colspan=3 style='text-align: left;'><i class="fa fa-building"></i>&nbsp;&nbsp;<?=$expnpt?> (<?=$expbdg?>) <?=$ket_thn?> <?=$exprnc?> 年</td>
                </tr>
                <tr>
                    <td style='text-align: left;'><i class="fas fa-mobile"></i>&nbsp;&nbsp;<?=$nomrhp?></td>
                    <td style='text-align: left;'><i class="ti-email"></i>&nbsp;&nbsp;<?=$emails?></td>
                    <td style='text-align: left;'><i class="fas fa-map-marker-alt">&nbsp;&nbsp;</i><?=$contry?></td>
                </tr>

                <!-- <tr><td colspan=4 width="1px" height="1px" style='text-align: center;'><b><hr></b></td></tr> -->
                <!-- <tr>
                    <td  width="300px">Level Pengalaman</td>
                    <td colspan=3><?=$level_exp?> (<?=$ket_exp?>) Bidang <?=$expbdg?></td>
                </tr> -->
                <tr><td>会員番号</td><td colspan=3>: <?=$nompkr?></td></tr>
                <tr><td>場所/日時 生まれ</td><td colspan=3>: <?=$tmplhr?>/<?=$tgllhr_conv?></td></tr>
                <tr><td>IDカード番号</td><td colspan=3>: <?=$nomktp?></td></tr>
                <tr><td>NPWP 番号</td><td colspan=3>: <?=$nonpwp?></td></tr>
                <tr><td>性別</td><td colspan=3>: <?=$jnsklm?></td></tr>
                <tr><td>宗教</td><td colspan=3>: <?=$relgin?></td></tr>
                <tr><td>教育</td><td colspan=3>: <?=$eductn?></td></tr>
                <tr><td>配偶者の有無</td><td colspan=3>: <?=$marred?></td></tr>
                <tr><td>国名</td><td colspan=3>: <?=$contry?></td></tr>
                <tr><td>プロビンス</td><td colspan=3>: <?=$provnc?></td></tr>
                <tr><td>都市</td><td colspan=3>: <?=$cityss?></td></tr>
                <tr><td>IDカードに記載された住所</td><td colspan=3>: <?=$addres?></td></tr>
                <tr><td>本籍地と同じ住所</td><td colspan=3>: <?=$addrdo?></td></tr>
                <tr><td>電話番号</td><td colspan=3>: <?=$nomtlp?></td></tr>
                <tr><td>携帯電話番号</td><td colspan=3>: <?=$nomrhp?></td></tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <!-- --------------------------------------  view Pengalaman dan Sertifikasi ----------------------------------------------- -->
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'><b><u>経験・資格</u><br><hr></b>
                    </td>
                </tr>
                <tr><td>会社名</td><td colspan=3>: <?=$expnpt?></td></tr>
                <tr><td>職務経歴書</td><td colspan=3>: <?=$exprnc?> 年</td></tr>
                <tr><td>事業内容</td><td colspan=3>: <?=$expbdg?></td></tr>
                <tr><td>その他の分野</td><td colspan=3>: <?=$bdlain?></td></tr>
                <tr style="top: 0;">
                    <td>&nbsp;</td>
                    <td style='text-align: left;'><a>
                    <?php if($visafl != '' || $visafl != null){?>
                        <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt="">
                    <?php }else{?>
                        <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>resources/img/no-image.jpg" alt="Avatar" class="image">
                    <?php }?>
                    </a></td>
                </tr>
                <tr>
                    <td style="float:top">日本でのビザの写真</td>
                    <?php if($visafl != '' || $visafl != null){?>
                        <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$usr_idents?>/<?=$visafl?>" target='_blank'><?=$visafl?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>Belum ada berkas yang di upload</td>
                    <?php }?>
                </tr>
                <tr>
                    <td>日本語レベル認定証</td>
                    <?php if($lvlbhs != ''){?>
                        <td colspan=3>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$lvlbhs?>" target='_blank'><?=$lvlbhs?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>まだファイルがアップロードされていません</td>
                    <?php }?>
                </tr>
                <tr>
                    <td>SSWサーティフィケート</td>
                    <?php if($sswfil != ''){?>
                        <td colspan=3>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$sswfil?>" target='_blank'><?=$sswfil?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>まだファイルがアップロードされていません</td>
                    <?php }?>
                </tr>
                <tr>
                    <td>インターンシップ証明書（JITCO/OTIT）</td>
                    <?php if($magang != ''){?>
                        <td colspan=3>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$magang?>" target='_blank'><?=$magang?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>まだファイルがアップロードされていません</td>
                    <?php }?>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <!-- ---------------------------------------------  view minat kerja ------------------------------------------------------ -->
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'><b><u>興味のある仕事</u><br><hr></b>
                    </td>
                </tr>
                <tr><td>興味のある分野</td><td colspan=3><?=$mntbdg?></td></tr>
                <tr id='bdlain_field'><td>その他の分野</td><td colspan=3><?=$bdlain?></td></tr>
                <tr><td>希望給与額</td><td colspan=3>Rp. <?=$expsal?>,-</td></tr>
                <tr>
                    <td>CV書類</td>
                    <?php if($filecv != ''){?>
                        <td colspan=3>: <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$filecv?>" target='_blank'><?=$filecv?></a> <?=$not_click?></td>
                    <?php }else{?>
                        <td colspan=3>まだファイルがアップロードされていません</td>
                    <?php }?>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
            </table><br>

<?php
        }else{
?>
<!-- -------------------------------------------------------  edit profile --------------------------------------------------------------- -->
        
        <form action="/jpn/myjconnect/profile_simpan/<?=$idpkrj?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <tr>
                                <td style='text-align: left;'><b><u>個人情報</u></b></td>
                                <td style='text-align: right;'>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>会員番号</td>
                                <td>
                                    <input class="form-control" name="txtNOMPKR" id="txtNOMPKR" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '会員番号'" placeholder="会員番号" value='<?=$nompkr?>' readonly style='width: 150px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>名称</td>
                                <td>
                                    <input class="form-control" name="txtNAMESS" id="txtNAMESS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '名称'" placeholder="名称" value='<?=$namess?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td style='text-align: center;'>
                                    <a>
                                        <img style="width: 180px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: center;" src="<?=base_url()?>resources/img/Screenshot_BG.png" alt="">
                                    </a>
                                </td>
                                <td style='text-align: left;'>
                                    <a>
                                    <?php if($fotoss != ''){?>
                                        <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$usr_idents?>/<?=$fotoss?>" alt="">
                                    <?php }else{?>
                                        <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image">
                                    <?php }?>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>写真のアップロード</td>
                                <td>
                                    <input class="form-control" name="txtFOTOSS" id="txtFOTOSS" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = '写真のアップロード'" placeholder="写真のアップロード" style='width: 300px;'>
                                </td>
                            </tr>
                            <tr>
                                <td>出生地</td>
                                <td>
                                    <input class="form-control" name="txtBIRTHP" id="txtBIRTHP" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '出生地'" placeholder="出生地" value='<?=$tmplhr?>' style='width: 300px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>生年月日</td>
                                <td>
                                    <input class="form-control" name="datBIRTHD" id="datBIRTHD" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '生年月日'" placeholder="生年月日" value='<?=$tgllhr?>' style='width: 150px;text-align: left;' data-role="datepicker" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>電子メール</td>
                                <td>
                                    <input class="form-control" name="txtEMAILS" id="txtEMAILS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '電子メール'" placeholder="電子メール" value='<?=$emails?>' style='width: 300px;text-align: left;' readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>IDカードに記載された住所</td>
                                <td>
                                    <textarea class="form-control" name="txaADDRES" id="txaADDRES" rows=5 type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'IDカードに記載された住所'" placeholder="IDカードに記載された住所" style='width: 650px;text-align: left;'><?=$addres?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>ドミサイルアドレス</td>
                                <td>
                                    <textarea class="form-control" name="txaADDRDO" id="txaADDRDO" rows=5 type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ドミサイルアドレス'" placeholder="ドミサイルアドレス" value='<?=$addrdo?>' style='width: 650px;text-align: left;'><?=$addrdo?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>IDカード番号</td>
                                <td>
                                    <input class="form-control" name="txtNOMKTP" id="txtNOMKTP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'IDカード番号'" placeholder="IDカード番号" value='<?=$nomktp?>' style='width: 200px;text-align: right;'>
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
                            <!-- ---------------------------------- untuk combo box Provinsi --------------------------------------- -->
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
                            <!-- ---------------------------------- untuk combo box Kota --------------------------------------- -->
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
                                <td>NPWP番号</td>
                                <td>
                                    <input class="form-control" name="txtNONPWP" id="txtNONPWP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NPWP番号'" placeholder="NPWP番号" value='<?=$nonpwp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>電話番号</td>
                                <td>
                                    <input class="form-control" name="txtNOMTLP" id="txtNOMTLP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = '電話番号'" placeholder="電話番号" value='<?=$nomtlp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>携帯電話番号</td>
                                <td>
                                    <input class="form-control" name="txtNOMRHP" id="txtNOMRHP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = '携帯電話番号'" placeholder="携帯電話番号" value='<?=$nomrhp?>' style='width: 200px;text-align: right;'>
                                </td>
                            </tr>

                            <tr>
                                <td>性別</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbSEXESS" id="cmbSEXESS">
                                        <?php
                                            foreach($optSEXESS as $key=>$row){
                                                if($klmnid == $key){
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
                                <td>宗教</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbRELIGN" id="cmbRELIGN">
                                        <?php
                                            foreach($optRLGION as $key=>$row){
                                                if($rlgnid == $key){
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
                                <td>教育</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbEDUCTN" id="cmbEDUCTN">
                                        <?php
                                            foreach($optLSTEDU as $key=>$row){
                                                if($educid == $key){
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
                                <td>配偶者の有無</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbMARRID" id="cmbMARRID">
                                        <?php
                                            foreach($optMERRID as $key=>$row){
                                                if($marrid == $key){
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
                                <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                            </tr>
                        <!-- ---------------------------------------- pengalaman kerja --------------------------------------------------- -->
                            <tr>
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>経験・資格</u></b><br><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>職務経歴書</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbEXPRNC" id="cmbEXPRNC">
                                        <?php
                                            foreach($optEXPRNC as $key=>$row){
                                                if($exprnc == $key){
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
                                <td>会社名</td>
                                <td>
                                    <input class="form-control" name="txtEXPNPT" id="txtEXPNPT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社名'" placeholder="会社名" value='<?=$expnpt?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>事業内容</td>
                                <td>
                                    <input class="form-control" name="txtEXPBDG" id="txtEXPBDG" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '事業内容'" placeholder="事業内容" value='<?=$expbdg?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>

                            <tr id='fivj'>
                                <td>
                                    <img style="width: 180px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: center;" src="<?=base_url()?>resources/img/Screenshot_BG.png" alt="">
                                </td>
                                <?php if($visafl != ''){?>
                                <td>
                                    <img src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt="Avatar" class="image" style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;">
                                    <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" target='_blank' alt=""><?=$visafl?>
                                    </a> <?=$not_click?>
                                </td>
                                <?php }else{?>
                                <td style='text-align: left;'><img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;text-align: left;"></td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td>日本でのビザの写真</td>
                                <td>
                                    <input class="form-control" name="txtVISAFL" id="txtVISAFL" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = '日本でのビザの写真'" placeholder="日本でのビザの写真"  style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- Sertifikat Level Bahasa Jepang -->
                            <tr id='slbj'>
                                <td>日本語レベル認定証</td>
                                <?php if($lvlbhs != ''){ ?>
                                    <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$lvlbhs?>" target='_blank'><?=$lvlbhs?></a> <?=$not_click?></td>
                                <?php }else{ ?>
                                    <td style='text-align: left;'>Belum ada berkas yang di upload.</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtLVLBHS" id="txtLVLBHS" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = '日本語レベル認定証'" placeholder="日本語レベル認定証"  style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- Sertifikat Spesial SKills Worker (SSW)/Surat Pernyataan Dari Perusahaan -->
                            <tr id='ssw'>
                                <td>SSWサーティフィケート</td>
                                <?php if($sswfil != ''){ ?>
                                    <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$sswfil?>" target='_blank'><?=$sswfil?></a> <?=$not_click?></td>
                                <?php }else{ ?>
                                    <td style='text-align: left;'>Belum ada berkas yang di upload.</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtSSWFIL" id="txtSSWFIL" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'SSWサーティフィケート'" placeholder="SSWサーティフィケート" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- File atau Foto Sertifikat -->
                            <tr id='srtmgg'>
                                <td>インターンシップ証明書（JITCO/OTIT）</td>
                                <?php if($magang != ''){ ?>
                                    <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$magang?>" target='_blank'><?=$magang?></a> <?=$not_click?></td>
                                <?php }else{ ?>
                                    <td style='text-align: left;'>Belum ada berkas yang di upload.</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtMAGANG" id="txtMAGANG" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'インターンシップ証明書（JITCO/OTIT）'" placeholder="インターンシップ証明書（JITCO/OTIT）" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                            </tr>
                        <!-- ---------------------------------------- minat kerja --------------------------------------------------- -->
                            <tr>
                                <td width="10px" height="10px" style='text-align: left;'><b><u>興味のある仕事</u><br><hr></b>
                                </td>
                            </tr>
                            <tr>
                                <td>興味のある分野</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name='cmbMNTBDG' id='cmbMNTBDG'>
                                        <?php
                                            foreach($optBidang as $key=>$row){
                                                if($mntbid == $key){
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
                            <tr id='bdlain_field'>
                                <td>その他の分野</td>
                                <td>
                                    <input class="form-control" name="txtBDLAIN" id="txtBDLAIN" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'その他の分野'" placeholder="その他の分野" value='<?=$bdlain?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>推定給与額</td>
                                <td>
                                    <input class="form-control" name="txtEXPSAL" id="txtEXPSAL" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '推定給与額'" placeholder="推定給与額" value='<?=$expsal?>' style='width: 100px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>CV書類</td>
                                <?php if($filecv != ''){ ?>
                                    <td style='text-align: left;'>
                                        <a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$filecv?>" target='_blank'><?=$filecv?></a> <?=$not_click?>
                                    </td>
                                <?php }else{ ?>
                                    <td style='text-align: left;'>Belum ada berkas yang di upload.</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="filFILECV" id="filFILECV" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CV書類'" placeholder="CV書類" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=4 style='text-align: right;background-color: white;'><hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect/profile_edit/<?=$idpkrj?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;変更</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;保存</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>jpn/myjconnect" class="genric-btn primary-border small">キャンセル</a>
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

<!-- --------------------------------------------------  pengalaman kerja dan sertifikasi ------------------------------------------------- -->
<?php
    if($type == 2){

        if($jenis == 'view'){
?>
            <table class='table1'>
                <tr>
                    <th colspan=4><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr>
                    <td colspan=4 width="1px" height="1px" style='text-align: justify;'>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'><b><u>経験・資格</u><br></b>
                    </td>
                </tr>
                <tr><td>Nama Perusahaan</td><td colspan=3><?=$expnpt?></td></tr>
                <tr><td>職務経歴書</td><td colspan=3><?=$exprnc?> 年</td></tr>
                <tr><td>事業内容</td><td colspan=3><?=$expbdg?></td></tr>
                <tr><td>その他の分野</td><td colspan=3><?=$bdlain?></td></tr>
                <tr>
                    <td>日本でのビザの写真</td>
                <?php if($visafl != '' || $visafl != null){?>
                    <td style='text-align: left;'><a><img style="width: 120px;height:120px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt=""></a></td>
                <?php }else{?>
                    <td style='text-align: left;'><img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%"></td>
                <?php }?>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" target='_blank'><?=$visafl?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td>日本語レベル認定証</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$lvlbhs?>" target='_blank'><?=$lvlbhs?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td>SSWサーティフィケート</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$sswfil?>" target='_blank'><?=$sswfil?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td>インターンシップ修了証 (JITCO/OTIT)</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$magang?>" target='_blank'><?=$magang?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
            </table><br>

<?php
        }else{
?>
<!-- -----------------------------------------------------  edit pengalaman kerja dan sertifikasi ----------------------------------------- -->
        
        <form action="/jpn/myjconnect/profile_simpan/<?=$idpkrj?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <!-- <tr>
                                <td colspan=2>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>myjconnect/profile_edit/<?=$usr_idents?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;Simpan</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>myjconnect/pengalaman" class="genric-btn primary-border small">Batal</a>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </td>
                            </tr> -->
                            <tr>
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>経験・資格</u></b><br><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>職務経歴書</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name="cmbEXPRNC" id="cmbEXPRNC">
                                        <?php
                                            foreach($optEXPRNC as $key=>$row){
                                                if($exprnc == $key){
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
                                <td>会社名</td>
                                <td>
                                    <input class="form-control" name="txtEXPNPT" id="txtEXPNPT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社名'" placeholder="会社名" value='<?=$expnpt?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>事業内容</td>
                                <td>
                                    <input class="form-control" name="txtEXPBDG" id="txtEXPBDG" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '事業内容'" placeholder="事業内容" value='<?=$expbdg?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr id='fivj'>
                                <td>写真 日本でのビザ</td>
                                <td style='text-align: left;'><a><img style="width: 120px;height:120px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" alt=""></a></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            <?php if($visafl != '' || $visafl != null){?>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$visafl?>" target='_blank'><?=$visafl?></a> <?=$not_click?></td>
                            <?php }else{?>
                                <td style='text-align: left;'><img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%"></td>
                            <?php }?>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtVISAFL" id="txtVISAFL" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto Izin Visa Selama di Jepang'" placeholder="日本滞在中のビザ申請用写真"  style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- Sertifikat Level Bahasa Jepang -->
                            <tr id='slbj'>
                                <td>    </td>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$lvlbhs?>" target='_blank'><?=$lvlbhs?></a> <?=$not_click?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtLVLBHS" id="txtLVLBHS" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = '日本語レベル認定証'" placeholder="日本語レベル認定証"  style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- Sertifikat Spesial SKills Worker (SSW)/Surat Pernyataan Dari Perusahaan -->
                            <tr id='ssw'>
                                <td>SSWサーティフィケート</td>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$sswfil?>" target='_blank'><?=$sswfil?></a> <?=$not_click?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtSSWFIL" id="txtSSWFIL" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = '特殊技能職認定証（SSW）／会社概況書」" placeholder="特殊技能労働者（SSW）証明書/会社概要書"." style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <!-- File atau Foto Sertifikat -->
                            <tr id='srtmgg'>
                                <td>インターンシップ修了証（JITCO/OTIT）</td>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$magang?>" target='_blank'><?=$magang?></a> <?=$not_click?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="txtMAGANG" id="txtMAGANG" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'インターンシップ修了証（JITCO/OTIT）'" placeholder="インターンシップ修了証（JITCO/OTIT）" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>                                        
                            <tr>
                                <td width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan=4 style='text-align: right;background-color: white;'><hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect/profile_edit/<?=$idpkrj?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;変更</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;セーブ</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>jpn/myjconnect/pengalaman" class="genric-btn primary-border small">キャンセル</a>
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

<!-- ----------------------------------------------------  Minat Kerja ------------------------------------------------------------- -->
<?php
    if($type == 3){

        if($jenis == 'view'){
?>
            <table class='table1'>
                <tr>
                    <th colspan=4><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: left;'><b><u>興味のある仕事</u></b>
                    </td>
                </tr>
                <tr><td>興味のある分野</td><td colspan=3><?=$mntbdg?></td></tr>
                <tr id='bdlain_field'><td>その他の分野</td><td colspan=3><?=$bdlain?></td></tr>
                <tr><td>希望給与額</td><td colspan=3>Rp. <?=number_format($expsal,0)?>,-</td></tr>
                <tr>
                    <td>CV書類</td>
                    <td colspan=3><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$filecv?>" target='_blank'><?=$filecv?></a> <?=$not_click?></td>
                </tr>
                <tr>
                    <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                </tr>
            </table>
            <br>

<?php
        }else{
?>
<!-- -------------------------------------------------------  edit minat kerja ------------------------------------------------------------ -->
        
        <form action="/jpn/myjconnect/minat_kerja_simpan/<?=$idpkrj?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table2'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            <tr>
                                <td colspan=2 width="10px" height="10px" style='text-align: left;'><b><u>興味のある仕事</u></b>
                                </td>
                            </tr>
                            <tr>
                                <td>興味のある分野</td>
                                <td>
                                    <select style='width: 500px;text-align: left;' name='cmbMNTBDG' id='cmbMNTBDG'>
                                        <?php
                                            foreach($optBidang as $key=>$row){
                                                if($mntbid == $key){
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
                            <tr id='bdlain_field'>
                                <td>その他の分野</td>
                                <td>
                                    <input class="form-control" name="txtBDLAIN" id="txtBDLAIN" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'その他の分野'" placeholder="その他の分野" value='<?=$bdlain?>' style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td>推定給与額</td>
                                <td>
                                    <input class="form-control" name="txtEXPSAL" id="txtEXPSAL" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '推定給与額'" placeholder="推定給与額" value='<?=$expsal?>' style='width: 100px;text-align: right;'>
                                </td>
                            </tr>
                            <tr>
                                <td>CV書類</td>
                                <td style='text-align: left;'><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$filecv?>" target='_blank'><?=$filecv?></a> <?=$not_click?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input class="form-control" name="filFILECV" id="filFILECV" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = '事業内容'" placeholder="事業内容" style='width: 500px;text-align: left;'>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=4 style='text-align: right;background-color: white;'><hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                    <?php if($jenis == 'view'){ ?>
                                        <div id='single-listing' class="single-listing">
                                            <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect/profile_edit/<?=$idpkrj?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;変更</i></a>
                                        </div><br>
                                    <?php }else{ ?>
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;キャンセル</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>jpn/myjconnect/minat_kerja" class="genric-btn primary-border small">キャンセル</a>
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
        
        <form action="/myjconnect/ubah_password_simpan/<?=$usr_idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
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
                                                        &nbsp;&nbsp;保存</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>jpn/myjconnect" class="genric-btn primary-border small">キャンセル</a>
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
<?php
    if($type == 5){
?>
        <style>
            /* Multi Tabs CSS Only by igniel.com */
            .ignielMultiTab {
              border: 0;
              margin: 1.5rem 0;
              padding: 0;
            }
            .ignielMultiTab input, .ignielMultiTab .content div {
              display: none;
            }
            .ignielMultiTab label, .ignielMultiTab .content {
              border-style: solid;
              border-width: 1px;
            }
            .ignielMultiTab input:checked + label, .ignielMultiTab .content {
              border-color: #ddd;
            }
            .ignielMultiTab .label {
              display: flex;
              flex-wrap: nowrap;
              flex-direction: row;
              max-width: calc(100vw - 2.5rem);
              overflow: auto;
            }
            .ignielMultiTab label {
              background-color: #ededed;
              border-color: transparent;
              border-bottom: 1px solid #ddd;
              color: #666;
              cursor: pointer;
              display: inline-block;
              float: left;
              padding: .65rem 1.25rem;
              position: relative;
              top: 1px;
              transition: all .3s ease;
            }
            .ignielMultiTab input:checked + label {
              background-color: transparent;
              border-bottom: 1px solid #fff;
              color: #1d1d1d;
              font-weight: bold;
            }
            .ignielMultiTab .content {
              clear: both;
              padding: 1.5rem 1.25rem;
            }
            .ignielMultiTab #tab1:checked ~ .content .tab1,
            .ignielMultiTab #tab2:checked ~ .content .tab2 {
              display: block;
            }

            /* --------------------- untuk View Lamaran ---------------------------- */

            .badan
            {
                width: 100%;
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
                height: 300px;
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
             
            /*#tombol:hover
            {
                color: #000066;
                background-color: #0000ff;
                transition-duration: 700ms;
            }*/
             
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
        </style>
        <form action="/jpn/myjconnect/ubah_password_simpan/<?=$usr_idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
            <table class='table1'>                

                <tr>
                    <td>
                        <table class='table1'>
                            <tr>
                                <th colspan=2><?=$icon?></i>&nbsp;&nbsp;<?=$menu?></th>
                            </tr>
                            
                            <tr>
                                <td>
                                    <fieldset class="ignielMultiTab">
                                      
                                        <input id="tab1" name="mTab" type="radio" checked="checked"/>
                                        <label for="tab1">アクティブアプリケーション</label>
                                          
                                        <input id="tab2" name="mTab" type="radio"/>
                                        <label for="tab2">すべてのアプリケーション</label>
                                          
                                        <div class="content">
                                            
                                            <div class="tab1">
                                                <!-- -------------------------- tab 1 ------------------------------------ -->
                                                               
                                                    <!-- <h2>Daftar Lamaran Aktif Anda</h2> -->
                                                <ul id="bodynya" class="badan">
                                                <?php
                                                    $column = $this->m_pekerja->getApplayJob($usr_idents,1);
                                                    $jmlrow = count($column);

                                                    // print_r($column);
                                                    $idpekerja = '';
                                                    $idcompany = '';
                                                    $idjobappl = '';
                                                    $i=0;
                                                    foreach($column as $row){
                                                        $IDAPPL = $row['IDAPPL'];
                                                        $IDPKRJ = $row['IDPKRJ'];
                                                        $COMIDN = $row['COMIDN'];
                                                        $COMPNY = $row['COMPNY'];
                                                        $TITLES = $row['TITLES'];
                                                        $TYPESS = $row['TYPESS'];
                                                        $STATUS = $row['STATUS'];
                                                        $SALMIN = $row['SALMIN'];
                                                        $SALMAX = $row['SALMAX'];
                                                        $EXPDAT = $row['EXPDAT'];
                                                        $LOGOSS = $row['LOGOSS'];
                                                        $CVIEWS = $row['CVIEWS'];
                                                        
                                                        $btn = '<a id="tombol-beli" href="/jpn/myjconnect/hapus_lamaran/'.$IDAPPL.'" alt="Hapus Lamaran">アプリケーションの削除</a>';

                                                        if($STATUS == 'SUDAH TUTUP'){
                                                            $color = 'style="color:#339933;font-weight:900;"';
                                                        }else{
                                                            $color = 'style="color:red;font-weight:900;"';
                                                        }
                                                        
                                                        if($IDAPPL != $idjobappl){
                                                ?>
                                                            <li id="listnya" class="list-produk">
                                                            <?php if($LOGOSS != '' || $LOGOSS != null){?>
                                                                <img src="<?=base_url()?>assets/documents/upload/client/<?=$COMIDN?>/<?=$LOGOSS?>" alt="<?=$COMPNY?>">
                                                            <?php }else{?>
                                                                <img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
                                                            <?php }?>
                                                                
                                                                <h4><?=$COMPNY?></h4>
                                                                <h5><?=$TITLES?></h5>
                                                                <h5><?=$TYPESS?></h5>
                                                                <h5>Rp. <?=$SALMIN?> - <?=$SALMAX?></h5>
                                                                <h5 <?=$color?>><b><?=$STATUS?></b></h5>
                                                                <h5>Berlaku sampai <?=$EXPDAT?></h5>
                                                                
                                                                <!-- <button class="fa fa-bell" id="tombol" href="/myjconnect/hapus_lamaran/'.$IDAPPL.'"> Sudah <font size=3 style="color:orange"><?=$CVIEWS?></font> kali dilihat</button> -->
                                                                <a class="fa fa-bell" id="tombol" href="#">&nbsp;&nbsp;すでに <font size=3 style="color:orange"><?=$CVIEWS?></font> みたび</a><br><br>

                                                                <?=$btn?>
                                                            </li>
                                                <?php
                                                            $idjobappl = $IDAPPL;
                                                            $i++;
                                                        }

                                                    }
                                                ?>
                                                </ul>

                                            </div>

                                            <div class="tab2">
                                                <ul id="bodynya" class="badan">
                                                <?php
                                                    $column = $this->m_pekerja->getApplayJob($usr_idents,2);
                                                    $jmlrow = count($column);

                                                    // print_r($column);
                                                    $idpekerja = '';
                                                    $idcompany = '';
                                                    $idjobappl = '';
                                                    $i=0;
                                                    foreach($column as $row){
                                                        $IDAPPL = $row['IDAPPL'];
                                                        $IDPKRJ = $row['IDPKRJ'];
                                                        $COMIDN = $row['COMIDN'];
                                                        $COMPNY = $row['COMPNY'];
                                                        $TITLES = $row['TITLES'];
                                                        $TYPESS = $row['TYPESS'];
                                                        $STATUS = $row['STATUS'];
                                                        $SALMIN = $row['SALMIN'];
                                                        $SALMAX = $row['SALMAX'];
                                                        $EXPDAT = $row['EXPDAT'];
                                                        $LOGOSS = $row['LOGOSS'];
                                                        $CVIEWS = $row['CVIEWS'];
                                                        
                                                        if($row['APP_STATUS'] == '1'){
                                                            // $btn = '<button id="tombol-beli" href="/myjconnect/hapus_lamaran/'.$IDAPPL.'">Hapus Lamaran</button>';
                                                            $btn = '<a id="tombol-beli" href="/jpn/myjconnect/hapus_lamaran/'.$IDAPPL.'" alt="Hapus Lamaran">アプリケーションの削除</a>';
                                                        }else{
                                                            $btn = '<a id="tombol-disabled" href="#">アプリケーションの削除</a>';
                                                        }

                                                        if($STATUS == 'SUDAH TUTUP'){
                                                            $color = 'style="color:#339933;font-weight:900;"';
                                                        }else{
                                                            $color = 'style="color:red;font-weight:900;"';
                                                        }
                                                        
                                                        if($IDAPPL != $idjobappl){
                                                ?>
                                                            <li id="listnya" class="list-produk">
                                                            <?php if($LOGOSS != '' || $LOGOSS != null){?>
                                                                <img src="<?=base_url()?>assets/documents/upload/client/<?=$COMIDN?>/<?=$LOGOSS?>" alt="<?=$COMPNY?>">
                                                            <?php }else{?>
                                                                <img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
                                                            <?php }?>
                                                                    
                                                                <h4><?=$COMPNY?></h4>
                                                                <h5><?=$TITLES?></h5>
                                                                <h5><?=$TYPESS?></h5>
                                                                <h5>Rp. <?=$SALMIN?> - <?=$SALMAX?></h5>
                                                                <h5 <?=$color?>><b><?=$STATUS?></b></h5>
                                                                <h5>Berlaku sampai <?=$EXPDAT?></h5>
                                                                
                                                                <!-- <button class="fa fa-bell" id="tombol" href="/myjconnect/hapus_lamaran/'.$IDAPPL.'"> Sudah <font size=3 style="color:orange"><?=$CVIEWS?></font> kali dilihat</button> -->
                                                                <a class="fa fa-bell" id="tombol" href="#">&nbsp;&nbsp;すでに <font size=3 style="color:orange"><?=$CVIEWS?></font> みたび</a><br><br>

                                                                <?=$btn?>
                                                            </li>
                                                <?php
                                                            $idjobappl = $IDAPPL;
                                                            $i++;
                                                        }

                                                    }
                                                ?>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </fieldset>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 style='text-align: right;'>
                                    <div class="single-listing">
                                        <div id='single-listing' class="single-listing">
                                            <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>
                                                        &nbsp;&nbsp;保存</i>
                                            </button>
                                            <a id='cancel' href="<?php echo base_url(); ?>jpn/myjconnect" class="genric-btn primary-border small">キャンセル</a>
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
    $(document).ready(function(){         
        // $("a").slideUp();

        // When a link is clicked
       $("a.tab").click(function () {
            
           // switch all tabs off
           $(".active").removeClass("active");
            
           // switch this tab on
           $(this).addClass("active");
            
           // slide all elements with the class 'content' up
           $(".content").slideUp();
            
           // Now figure out what the 'title' attribute value is and find the element with that id.  Then slide that down.
           var content_show = $(this).attr("title");
           $("#"+content_show).slideDown();
          
       });
    });

    function tabSwitch(new_tab, new_content) {
         
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'none';       
        document.getElementById(new_content).style.display = 'block';   
         
     
        document.getElementById('tab1').className = '';
        document.getElementById('tab2').className = '';      
        document.getElementById(new_tab).className = 'active';      
     
    }

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
                        <input class="form-control" name="fotoss" id="fotoss" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto'" placeholder="Foto" style='width: 500px;text-align: left;'>
                        <input name="txtFOTOSS" id="txtFOTOSS" type="text">
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
                    <input class="form-control" name="fotoss" id="fotoss" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto'" placeholder="Foto" value='<?=$expbdg?>' style='width: 500px;text-align: left;'>
                </td>
            </tr>
        </table>
  </div>
</div> -->
