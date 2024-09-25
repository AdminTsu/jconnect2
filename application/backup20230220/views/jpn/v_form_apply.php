<?php
$fnames = $this->session->userdata('USR_NAMESS');
$logins = $this->session->userdata('USR_LOGINS');
$levels = $this->session->userdata('USR_LEVELS');
$menuid = $this->session->userdata('USR_MENUID');
$userid = $this->session->userdata('USR_IDENTS');

// $idents = 10;
$leveld = $this->m_common->getCommon_idents(2,$levels);
$arrJOBS = $this->m_job->getJobUpdate_Detail($idjobs);
$arrPKRJ = $this->m_job->getKandidatInfo($userid);

foreach($arrPKRJ as $row){
    $idpkrj = isset($row['PKR_IDENTS']) ? $row['PKR_IDENTS'] : NULL;
    $namapk = isset($row['PKR_NAMESS']) ? $row['PKR_NAMESS'] : NULL;
    $nomrhp = isset($row['PKR_NOMRHP']) ? $row['PKR_NOMRHP'] : NULL;
    $emails = isset($row['USR_EMAILS']) ? $row['USR_EMAILS'] : NULL;
    $expsal = isset($row['PKR_EXPSAL']) ? $row['PKR_EXPSAL'] : NULL;
    $fotoss = isset($row['PKR_FOTOSS']) ? $row['PKR_FOTOSS'] : NULL;
}

// print_r($arrJOBS);
foreach($arrJOBS as $row){
    $idents = isset($row['JOB_COMPNY']) ? $row['JOB_COMPNY'] : NULL;
    $logoss = isset($row['CLI_LOGOSS']) ? $row['CLI_LOGOSS'] : NULL;
    $titles = isset($row['JOB_TITLES']) ? $row['JOB_TITLES'] : NULL;
    $comnam = isset($row['CLI_NAMESS']) ? $row['CLI_NAMESS'] : NULL;
    $bidang = isset($row['JOB_ASPECS']) ? $row['JOB_ASPECS'] : NULL;
    $lokasi = isset($row['JOB_LCTION']) ? $row['JOB_LCTION'] : NULL;
    $salmin = isset($row['JOB_SALMIN']) ? $row['JOB_SALMIN'] : NULL;
    $salmax = isset($row['JOB_SALMAX']) ? $row['JOB_SALMAX'] : NULL;
    $status = isset($row['JOB_DRTION']) ? $row['JOB_DRTION'] : NULL;
    $expdat = isset($row['JOB_EXPDAT']) ? $row['JOB_EXPDAT'] : NULL;
    $datcrt = isset($row['JOB_DATCRT']) ? $row['JOB_DATCRT'] : NULL;
    $dscrip = isset($row['JOB_DSCRIP']) ? $row['JOB_DSCRIP'] : NULL;
    $rqskil = isset($row['JOB_RQSKIL']) ? $row['JOB_RQSKIL'] : NULL;
    $fsilty = isset($row['JOB_FSILTY']) ? $row['JOB_FSILTY'] : NULL;
    $emilct = isset($row['JOB_EMILCT']) ? $row['JOB_EMILCT'] : NULL;

    $emails = isset($row['JOB_DSCRIP']) ? $row['JOB_DSCRIP'] : NULL;
    $datnow = date('Y-m-d H:i:s');
    $websit = isset($row['CLI_WEBSIT']) ? $row['CLI_WEBSIT'] : NULL;
}

if($status == 1){
    $status = 'コントラクト';
}else{
    $status = 'ステイ';
}
?>

<hr>
<style type="text/css">
    .register {
        margin: 10px auto;
        width: 400px;
        padding: 10px;
        border: 0px solid #ccc;
        /*background: lightblue;*/
    }
    input[type=text], input[type=password], input[type=email] {
        margin: 5px auto;
        width: 400px;
        padding: 10px;
    }
</style>
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
<script type='text/javascript'>

    $(document).ready(function() {
        $('#submit').hide();
    });

    function jvChangePrivacy(){
        var check = $('#chkPrivacy:checked').val();
        // alert(check);
        if(check){
            // alert('checked');
            $('#submit').show();
        }else{
            // alert('not checked');
            $('#submit').hide();
        }
    }

</script>
<div class="row">
    <div class="col-12">
        <center><h2 class="contact-title">投稿フォーム</h2></center>
    </div>

    <div class="container">
        <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-xl-7 col-lg-8">
                <!-- job single -->
        
                <div class="single-job-items mb-50">
                    <div class="job-items">
                        <div class="company-img company-img-details">
                        <?php if($fotoss != '' || $fotoss != null){?>
                            <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idpkrj?>/<?=$fotoss?>" alt="">
                        <?php }else{?>
                            <img style="width: 150px;height:150px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
                        <?php }?>
                        </div>
                        <div class="job-tittle">
                            <a href="#"><h4><?=ucwords(strtolower($namapk))?></h4></a>
                            <ul>
                                <li><i class="fa fa-rupiah-sign"></i>Rp.  <?=number_format($expsal,0)?>,-</li>
                                <li><i class="fa fa-envelope"></i><?=$emails?></li>
                                <li><i class="fa fa-phone"></i><?=$nomrhp?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <form class="form-contact contact_form" action="/jpn/Find_jobs/submitapply/<?=$idjobs?>/<?=$idpkrj?>" method="get" id="contactForm" novalidate="novalidate">
                    <div class="col-12">プロモーションを最大限に活用する (提案)</div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="reason" id="reason" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'あなたがこのポジションに最も適している理由を、採用担当者に伝えてください。あなたの具体的なスキルと、どのように貢献できるかを書いてください。私は責任者です、などの言葉は避ける'" placeholder="(提案）あなたがこのポジションに最も適している理由を、採用担当者に伝えてください。あなたの具体的なスキルと、どのように貢献できるかを書いてください。私は責任者です、などの言葉は避ける"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <center><input type="checkbox" name="chkPrivacy" id="chkPrivacy" value"setuju" onchange="jvChangePrivacy()"> <font size=2 style="color:#cccccc">応募する」をクリックすると、Jconnect.com および会社の面接出席規定を読み、これに同意したことになります。</font></center>
                    </div>
                    <div class="form-group mt-3">
                        <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" disbaled>ラマー</button></center>
                    </div>
                    <?php echo $this->session->flashdata('msg'); ?>

                </form>

            </div>
            <!-- Right Content -->
            <div class="col-xl-4 col-lg-4">
                <div class="post-details4  mb-50">
                    <div class="small-section-tittle">
                        <h4>求人情報</h4>
                    </div>
                    <ul>
                        <li><i class="fa fa-briefcase"></i><span><b><?=ucwords(strtolower($titles))?></b></span></li>
                        <li><i class="fa fa-map-marker-alt"></i><span><?=ucwords(strtolower($lokasi))?></span></li>
                        <li><i class="fa fa-calculator"></i><span>Rp.<?=number_format($salmin,0)?> - Rp. <?=number_format($salmax,0)?>/bulan</span></li>
                    </ul>
               </div>
                <div class="post-details4  mb-40">
                    <div class="company-img company-img-details">
                    <?php if($logoss != '' || $logoss != null){?>
                        <a href="<?=base_url()?>jpn/dashboard/Find_Jobs_detail"><img style="width: 50px;height:50px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" src="<?=base_url()?>assets/documents/upload/client/<?=$idents?>/<?=$logoss?>" alt=""></a>
                    <?php }else{?>
                        <a href="#"><img style="width: 85px;height:85px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%"></a>
                    <?php }?>
                    </div><br>
                    <div class="small-section-tittle">
                        <h4>会社情報</h4>
                    </div>
                    <style>
                        a {
                            color: #0000ff;
                        }
                        a:hover {
                            color: #000066;
                        }
                    </style>
                    <table class="small-section-tittle">
                        <tr><td>名称</td><td>&nbsp;:&nbsp;</td><td><?=$comnam?></td></tr>
                        <tr><td>ウェブ</td><td>&nbsp;:&nbsp;</td><td><span><a href="https://<?=$websit?>"><?=$websit?></a></td></tr>
                        <tr><td>電子メール</td><td>&nbsp;:&nbsp;</td><td><?=$emilct?></td></tr>
                    </table>
               </div>
            </div>
        </div>
    </div>
</div>