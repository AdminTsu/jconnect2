<?php
$fnames = $this->session->userdata('USR_NAMESS');
$logins = $this->session->userdata('USR_LOGINS');
$levels = $this->session->userdata('USR_LEVELS');
$menuid = $this->session->userdata('USR_MENUID');
$iduser = $this->session->userdata('USR_IDENTS');
// echo "$iduser - $idkandidat";die();
// print_r($idkandidat);die();

$optCountry = $this->crud->getCommon(3,7);
$optPrvince = $this->m_master->getComboProvince();
$optCity = $this->m_master->getComboCity();
$arrJOBS = $this->m_kandidat->getKandidatUpdate_Detail($idkandidat);

// print_r($arrJOBS);
foreach($arrJOBS as $row){
    $idents = isset($row['PKR_IDENTS']) ? $row['PKR_IDENTS'] : NULL;
    $fotoss = isset($row['PKR_FOTOSS']) ? $row['PKR_FOTOSS'] : NULL;
    $namess = isset($row['PKR_NAMESS']) ? $row['PKR_NAMESS'] : NULL;
    $contry = isset($row['DESC_CONTRY']) ? $row['DESC_CONTRY'] : NULL;
    $provnc = isset($row['DESC_PROVNC']) ? $row['DESC_PROVNC'] : NULL;
    $cityss = isset($row['DESC_CITYSS']) ? $row['DESC_CITYSS'] : NULL;
    $jnsklm = isset($row['JNSKLM_DESC']) ? $row['JNSKLM_DESC'] : NULL;
    $relign = isset($row['RELIGION']) ? $row['RELIGION'] : NULL;
    $eductn = isset($row['EDUCATION']) ? $row['EDUCATION'] : NULL;
    $marrid = isset($row['MARRIED']) ? $row['MARRIED'] : NULL;
    $datcrt = isset($row['PKR_DATCRT']) ? $row['PKR_DATCRT'] : NULL;
    $expsal = isset($row['PKR_EXPSAL']) ? $row['PKR_EXPSAL'] : NULL;
    $status = isset($row['PKR_STATUS']) ? $row['PKR_STATUS'] : NULL;
    $exprnc = isset($row['PKR_EXPRNC']) ? $row['PKR_EXPRNC'] : NULL;
    $expnpt = isset($row['PKR_EXPNPT']) ? $row['PKR_EXPNPT'] : NULL;
    $expbdg = isset($row['PKR_EXPBDG']) ? $row['PKR_EXPBDG'] : NULL;
    $usrupd = isset($row['PKR_USRUPD']) ? $row['PKR_USRUPD'] : NULL;
    $member = isset($row['PKR_NOMPKR']) ? $row['PKR_NOMPKR'] : NULL;
    $datnow = date('Y-m-d H:i:s');
    $lvlbhs = isset($row['PKR_LVLBHS']) ? $row['PKR_LVLBHS'] : 'belum di upload';
    $visafl = isset($row['PKR_VISAFL']) ? $row['PKR_VISAFL'] : 'belum di upload';
    $sswfil = isset($row['PKR_SSWFIL']) ? $row['PKR_SSWFIL'] : 'belum di upload';
    $magang = isset($row['PKR_MAGANG']) ? $row['PKR_MAGANG'] : 'belum di upload';

    if($status == 1){
        $status = 'KONTRAK';
    }else{
        $status = 'TETAP';
    }
}
?>

<div class="container">
    <div class="row justify-content-between">
        <!-- Left Content -->
        <div class="col-xl-7 col-lg-8">
            <!-- job single -->
            <div class="single-job-items mb-50">
                <div class="job-items">
                    <div class="company-img company-img-details">
                    <?php if($fotoss != '' || $fotoss != null){?>
                        <img style="width: 85px;height:85px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idents?>/<?=$fotoss?>" alt="">
                    <?php }else{?>
                        <img style="width: 85px;height:85px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%">
                    <?php }?>
                    </div>
                    <div class="job-tittle">
                        <a href="#">
                            <h4><?=$namess?></h4>
                        </a>
                        <ul>
                            <li><?=$expbdg?></li>
                            <li><i class="fas fa-map-marker-alt"></i><?=$provnc?>-<?=$cityss?>, <?=$contry?></li>
                            <li>Rp. <?=number_format($expsal,0)?>,-</li>
                        </ul>
                    </div>
                </div>
            </div>
              <!-- job single End -->
            
            <div class="job-post-details">
                <!-- Small Section Tittle -->
                <div class="post-details1 mb-50">
                    <div class="small-section-tittle">
                        <h4>Pengalaman Kerja</h4>
                    </div>
                    <p><?=$expnpt?>.</p>
                </div>

                <!-- Small Section Tittle -->
                <div class="post-details2  mb-50">
                    <div class="small-section-tittle">
                        <h4>Pengetahuan, Keterampilan, dan Kemampuan yang dimiliki</h4>
                    </div>
                    <p><?=$expbdg?></p>
                </div>

                <!-- Small Section Tittle -->
                <div class="post-details2  mb-50">
                    <div class="small-section-tittle">
                        <h4>Pendidikan dan Pengalaman</h4>
                    </div>
                    <p><?=$eductn?></p>
                </div>
            </div>

        </div>
        <!-- Right Content -->
        <div class="col-xl-4 col-lg-4">
            <div class="post-details3  mb-50">
                <!-- Small Section Tittle -->
               <div class="small-section-tittle">
                   <h4>Sertifikat yang Dimiliki</h4>
               </div>
               <p style="color:red;font-size: 12px;">Note : Klik link di bawah untuk melihat berkas.</p>
                <ul>
                    <li>Foto Visa di Jepang : </li>
                    <li><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idents?>/<?=$fotoss?>" target="_blank"><?=$visafl?></a></li>
                    <li>Sertifikat Bhs.Jepang :</li>
                    <li><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idents?>/<?=$fotoss?>" target="_blank"><?=$lvlbhs?></a></li>
                    <li>Sertifikat SSW : </li>
                    <li><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idents?>/<?=$fotoss?>" target="_blank"><?=$sswfil?></a></li>
                    <li>Sertifikat Magang : </li>
                    <li><a href="<?=base_url()?>assets/documents/upload/pekerja/<?=$idents?>/<?=$fotoss?>" target="_blank"><?=$magang?></a></li>
                </ul>
             <div class="apply-btn2">
            <?php
                    if($levels == 2){
            ?>
                        <!-- <a href="<?=base_url()?>find_jobs/apply/<?=$idents?>" disbaled class="btn">Lamar Sekarang</a> -->
            <?php
                    }
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

            <!-- <div class="post-details4  mb-50">
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
           </div> -->

        </div>
    </div>
</div>