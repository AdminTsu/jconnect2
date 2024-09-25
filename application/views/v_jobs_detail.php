<?php
$fnames = $this->session->userdata('USR_NAMESS');
$logins = $this->session->userdata('USR_LOGINS');
$levels = $this->session->userdata('USR_LEVELS');
$menuid = $this->session->userdata('USR_MENUID');
$iduser = $this->session->userdata('USR_IDENTS');
// echo "$iduser - $idjobs";die();
// print_r($idjobs);

$optCountry = $this->crud->getCommon(3,7);
$optPrvince = $this->m_master->getComboProvince();
$optCity = $this->m_master->getComboCity();
$arrJOBS = $this->m_job->getJobUpdate_Detail($idjobs);

// print_r($arrJOBS);
foreach($arrJOBS as $row){
    $idents = isset($row['JOB_IDENTS']) ? $row['JOB_IDENTS'] : NULL;
    $comidn = isset($row['JOB_COMPNY']) ? $row['JOB_COMPNY'] : NULL;
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

    if($status == 1){
        $status = 'KONTRAK';
    }else{
        $status = 'TETAP';
    }
}
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>

<div class="container">
    <div class="row justify-content-between">
        <!-- Left Content -->
        <div class="col-xl-7 col-lg-8">
            <!-- job single -->
            <div class="single-job-items mb-50">
                <div class="job-items">
                    <div class="company-img company-img-details">
                    <?php if($logoss != '' || $logoss != null){?>
                        <img style="width: 85px;height:85px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" src="<?=base_url()?>assets/documents/upload/client/<?=$comidn?>/<?=$logoss?>" alt="">
                    <?php }else{?>
                        <img style="width: 85px;height:85px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
                    <?php }?>
                    </div>
                    <div class="job-tittle">
                        <a href="#">
                            <h4><?=$titles?></h4>
                        </a>
                        <ul>
                            <li><?=$bidang?></li>
                            <li><i class="fas fa-map-marker-alt"></i><?=$lokasi?></li>
                            <li>Rp. <?=number_format($salmin,0)?> - Rp. <?=number_format($salmax,0)?></li>
                        </ul>
                    </div>
                </div>
            </div>
              <!-- job single End -->
           
            <div class="job-post-details">
                <div class="post-details1 mb-50">
                    <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Deskripsi Pekerjaan</h4>
                    </div>
                    <p><?=$dscrip?>.</p>
                </div>
                <div class="post-details2  mb-50">
                     <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Pengetahuan, Keterampilan, dan Kemampuan yang Dibutuhkan</h4>
                    </div>
                       <?=$rqskil?>
                </div>
                <div class="post-details2  mb-50">
                     <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Pendidikan dan Pengalaman</h4>
                    </div>
                       <?=$fsilty?>
                </div>
            </div>

        </div>
        <!-- Right Content -->
        <div class="col-xl-4 col-lg-4">
            <div class="post-details3  mb-50">
                <!-- Small Section Tittle -->
               <div class="small-section-tittle">
                   <h4>Gambaran umum pekerjaan</h4>
               </div>
              <ul>
                  <li>Tanggal posting : <span><?=$datcrt?></span></li>
                  <li>Lokasi : <span><?=$lokasi?></span></li>
                  <li>Lowongan : <span>1</span></li>
                  <li>Job Status : <span><?=$status?></span></li>
                  <li>Gaji :  <span>Rp. <?=number_format($salmin,0)?>-<?=number_format($salmax,0)?>/bulan</span></li>
                  <li>Sejak Tanggal : <span><?=$expdat?></span></li>
              </ul>
             <div class="apply-btn2">
            <?php
                // if($iduser == "" || $iduser == null){
            ?>
                <!-- <div class="small-section-tittle">
                    <h4>Jika ingin mengajukan lamaran, silahkan mendaftar atau jika sudah punya akun silahkan lakukan login terlebih dahulu</h4>
                </div> -->
            <?php
                // }else{
                    if($levels == 2){
            ?>
                        <a href="<?=base_url()?>find_jobs/apply/<?=$idjobs?>" disbaled class="btn">Lamar Sekarang</a>
            <?php
                    }
                    // else{
                    //     echo '
                    //         <div class="small-section-tittle">
                    //             <h4>Maaf, akses Anda sebagai pihak pemberi kerja, jadi tidak bisa melakukan Lamaran Pekerjaan.</h4>
                    //         </div>';
                    // }
                // }
            ?>
            
             </div>
           </div>
            <style>
                a {
                    color: #0000ff;
                }
                a:hover {
                    color: #000066;
                }
            </style>
            <div class="post-details4  mb-50">
                <!-- Small Section Tittle -->
               <div class="small-section-tittle">
                   <h4>Informasi Perusahaan</h4>
               </div>
                  <span><?=$comnam?></span>
                  <p><?=$bidang?></p>
                <ul>
                    <li>Nama &nbsp;&nbsp;: <span><?=$comnam?></span></li>
                    <li>Web   &nbsp;&nbsp;&nbsp;: <span><a href="https://<?=$websit?>" target="_blank"><?=$websit?></a></span></li>
                    <li>Email &nbsp;: <span><?=$emilct?></span></li>
                </ul>
           </div>
        </div>
    </div>
</div>