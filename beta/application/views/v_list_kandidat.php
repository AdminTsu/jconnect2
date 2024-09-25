<!-- Start untuk conten list job dynamis dari database -->
<style>
    #detail {
        cursor:hand;
    }
    #detail:hover {
        cursor:pointer;
    }
</style>
<?php
$iduser = $this->session->userdata('USR_IDENTS');
foreach($data as $row){
// foreach($arrJOBS as $row){
    $idents = isset($row->PKR_IDENTS) ? $row->PKR_IDENTS : 'belum diisi';
    $namess = isset($row->PKR_NAMESS) ? $row->PKR_NAMESS : 'belum diisi';
    $fotoss = isset($row->PKR_FOTOSS) ? $row->PKR_FOTOSS : 'belum diisi';
    $status = isset($row->PKR_STATUS) ? $row->PKR_STATUS : 'belum diisi';
    $nomrhp = isset($row->PKR_NOMRHP) ? substr($row->PKR_NOMRHP,0,9).'xxx' : 'belum diisi';
    $relign = isset($row->RELIGION) ? $row->RELIGION : 'belum diisi';
    $eductn = isset($row->EDUCATION) ? $row->EDUCATION : 'belum diisi';
    $marrid = isset($row->MARRIED) ? $row->MARRIED : 'belum diisi';
    $exprnc = isset($row->PKR_EXPRNC) ? $row->PKR_EXPRNC : 'belum diisi';
    $expnpt = isset($row->PKR_EXPNPT) ? $row->PKR_EXPNPT : 'belum diisi';
    $expbdg = isset($row->PKR_EXPBDG) ? $row->PKR_EXPBDG : 'belum diisi';
    $expsal = isset($row->PKR_EXPSAL) ? $row->PKR_EXPSAL : 'belum diisi';
        $jnsklm = isset($row->PKR_JNSKLM) ? $row->PKR_JNSKLM : 'belum diisi';
        $contry = isset($row->PKR_CONTRY) ? $row->PKR_CONTRY : 'belum diisi';
        $provnc = isset($row->PKR_CONTRY) ? $row->PKR_PROVNC : 'belum diisi';
        $cityss = isset($row->PKR_CITYSS) ? $row->PKR_CITYSS : 'belum diisi';
    $contry_desc = isset($row->DESC_CONTRY) ? $row->DESC_CONTRY : 'belum diisi';
    $provnc_desc = isset($row->DESC_PROVNC) ? $row->DESC_PROVNC : 'belum diisi';
    $cityss_desc = isset($row->DESC_CITYSS) ? $row->DESC_CITYSS : 'belum diisi';
    $jnsklm_desc = isset($row->JNSKLM_DESC) ? $row->JNSKLM_DESC : 'belum diisi';
    $datnow = date('Y-m-d H:i:s');
    
    if($iduser == '' || $iduser == null){
        $btn_detail = '<a id="detail" onClick="jvCekLoginDetail();">Lihat Profil</a>';
    }else{
        $btn_detail = '<a id="detail" onClick="jvCekLoginDetail();" href="'.base_url().'Find_kandidat/Find_kandidat_detail/'.$idents.'">Lihat Profil</a>';
    }

    if($jnsklm == 1){
        $icon_sex = 'male';
    }else{
        $icon_sex = 'female';
    }
    
    if($status == 1){
        $status = 'KONTRAK';
    }else{
        $status = 'TETAP';
    }
    
?>
    <form action="/Find_kandidat/Find_kandidat_detail/<?=$idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
        <div class="single-job-items mb-12" id="joblist">
            <div class="job-items">
                <div class="company-img">
                <?php if($fotoss != '' || $fotoss != null){?>
                    <img style="width: 100px;height:100px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;" src="<?=base_url()?>assets/documents/upload/pekerja/<?=$idents?>/<?=$fotoss?>" alt="">
                <?php }else{?>
                    <img style="width: 100px;height:100px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image">
                <?php }?>
                </div>
                <div class="job-tittle">
                    <a href="<?=base_url()?>Find_kandidat/Find_kandidat_detail/<?=$idents?>"><h4><?=$namess?></h4></a>
                    <ul>
                        <li style="width: 550px;"><i class="fa fa-building"></i><?=$expnpt?> (<?=$expbdg?>) <?=$exprnc?> Tahun</li>
                    </ul>
                    <ul>
                        <li style="width: 550px;"><i class="fas fa-map-marker-alt"></i> <?=$provnc_desc?>-<?=$cityss_desc?>, <?=$contry_desc?></li>
                    </ul>
                    <ul>
                        <li style="width: 550px;"><i class="fas fa-address-card"></i><?=$marrid?> / <?=$eductn?> / <?=$relign?></li>
                    </ul>
                    <ul>
                        <li style="width: 550px;">Rp&nbsp;&nbsp;<?=number_format($expsal)?>,- (salary yang diharapkan)</li>
                    </ul>
                    <!-- <ul>
                        <li style="width: 300px;"><i class="fa fa-<?=$icon_sex?>"></i>  <?=$jnsklm_desc?></li>
                    </ul> -->
                </div>
            </div>
            <div class="job-tittle">
                <ul>
                    <li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</li>
                    <li class="items-link f-right"><span><?=$btn_detail?></span></li>
                </ul>
            </div>
        </div>
    </form>
<?php
    }
?>
<!-- End untuk conten list job dynamis dari database -->

<!--Pagination Start  -->
<div class="pagination-area pb-115 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?=$pagination?>
            </div>
        </div>
    </div>
</div>
<!--Pagination End 