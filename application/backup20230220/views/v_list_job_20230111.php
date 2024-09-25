
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
        $idents = isset($row->JOB_IDENTS) ? $row->JOB_IDENTS : NULL;
        $comidn = isset($row->JOB_COMPNY) ? $row->JOB_COMPNY : NULL;
        $logoss = isset($row->CLI_LOGOSS) ? $row->CLI_LOGOSS : NULL;
        $titles = isset($row->JOB_TITLES) ? $row->JOB_TITLES : NULL;
        $comnam = isset($row->CLI_NAMESS) ? $row->CLI_NAMESS : NULL;
        $bidang = isset($row->JOB_ASPECS) ? $row->JOB_ASPECS : NULL;
        $lokasi = isset($row->JOB_LCTION) ? $row->JOB_LCTION : NULL;
        $salmin = isset($row->JOB_SALMIN) ? $row->JOB_SALMIN : NULL;
        $salmax = isset($row->JOB_SALMAX) ? $row->JOB_SALMAX : NULL;
        $status = isset($row->JOB_DRTION) ? $row->JOB_DRTION : NULL;
        $datcrt = isset($row->JOB_DATCRT) ? $row->JOB_DATCRT : NULL;
        $datnow = date('Y-m-d H:i:s');

        $diff1 = date_diff(date_create($datcrt), date_create($datnow));
        $tahuns = $diff1->y;
        $bulans = $diff1->m;
        $hariss = $diff1->d;
        $jamnya = $diff1->h;
        $menits = $diff1->i;
        $detiks = $diff1->s;
        $durasi = '';

        if($iduser == '' || $iduser == null){
            $btn_detail = '<a id="detail" onClick="jvCekLoginDetail();">Lihat Detail</a>';
        }else{
            $btn_detail = '<a id="detail" onClick="jvCekLoginDetail();" href="'.base_url().'Find_jobs/Find_jobs_detail/'.$idents.'">Lihat Detail</a>';
        }
        
        $tgl1 = substr($datcrt,0,10);
        $diffnya  = date_diff( date_create($tgl1), date_create() );
        $thn = $diffnya->format('%Y');
        // echo $diffnya->format('Usia anda adalah %Y tahun %d hari');
        
        if($thn >= 00){
            if($bulans == 0){
                if($hariss == 0){
                    if($jamnya == 0){
                        $durasi = "$menits Menit $detiks Detik yang lalu <h5  class=\"blink\" data-text=\"New Posting\" contenteditable>New Posting</h5>";
                    }else{
                        $durasi = "$jamnya Jam $menits Menit $detiks Detik yang lalu <h5  class=\"blink\" data-text=\"New Posting\" contenteditable>New Posting</h5>";
                    }
                }else{
                    $durasi = "$hariss Hari $jamnya Jam $menits Menit yang lalu";
                }
            }else{
                $durasi = "$bulans Bulan $hariss Hari $jamnya Jam $menits Menit yang lalu";
            }
        }else{
            $durasi = "$thn Tahun $bulans Bulan $hariss Hari $jamnya Jam $menits Menit yang lalu";
        }
         // <h5  class=\"blink\" data-text=\"New Posting\">New Posting</h5>
        if($status == 1){
            $status = 'KONTRAK';
        }else{
            $status = 'TETAP';
        }
        
?>
    <form action="/Find_jobs/Find_Jobs_detail/<?=$idents?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
        <div class="single-job-items mb-10" id="joblist">
            <div class="job-items">
                <div class="company-img">
                <?php if($logoss != '' || $logoss != null){?>
                    <img style="width: 100px;height:100px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;" src="<?=base_url()?>assets/documents/upload/client/<?=$comidn?>/<?=$logoss?>" alt="">
                <?php }else{?>
                    <img style="width: 100px;height:100px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;" src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image">
                <?php }?>
                </div>
                <div class="job-tittle">
                    <a href="<?=base_url()?>Find_jobs/Find_Jobs_detail/<?=$idents?>"><h4><?=$titles?></h4></a>
                    <ul>
                        <li style="width: 300px;"><i class="fas fa-building-alt"></i><?=$comnam?></li>
                        <li style="width: 250px;"><i class="fas fa-building-alt"></i><?=$bidang?></li>
                    </ul>
                    <ul>
                        <li style="width: 300px;"><i class="fas fa-flag-alt"></i>Rp. <?=number_format($salmin,0)?> - Rp. <?=number_format($salmax,0)?></li>
                        <li style="width: 250px;"><i class="fas fa-map-marker-alt"></i><?=$lokasi?></li>
                    </ul>
                    <ul>
                        <li><i class="fas fa-flag-alt"></i><span><b>Diiklankan </b> <?=$durasi?></span></li>
                    </ul>
                </div>
            </div>
            <div class="job-tittle">
                <ul>
                    <li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</li>
                    <li class="items-link f-right"><span><?=$btn_detail?></span></li>
                    <!-- <li class="genric-btn primary circle"><span><?=$btn_detail?></span></li> -->
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
<!--Pagination End  -->