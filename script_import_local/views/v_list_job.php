
<!-- Start untuk conten list job dynamis dari database -->
<?php
    // $no = $this->uri->segment(3) + 1;
    // print_r($data);
    // $arrData = $data->result_array();
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
    <div class="single-job-items mb-30" id="joblist">
        <div class="job-items">
            <div class="company-img">
            <?php if($logoss != '' || $logoss != null){?>
                <a href="<?=base_url()?>find_jobs/#"><img style="width: 55px;height:55px;border: 1px solid gainsboro;border-radius:3px;border-color:#f2f2f2;" src="<?=base_url()?>assets/documents/upload/client/<?=$comidn?>/<?=$logoss?>" alt=""></a>
            <?php }else{?>
                <a href="<?=base_url()?>find_jobs/#"><img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" class="image" style="width:100%"></a>
            <?php }?>
            </div>
            <div class="job-tittle">
                <a href="<?=base_url()?>find_jobs/find_jobs_detail/<?=$idents?>"><h4><?=$titles?></h4></a>
                <ul>
                    <li><?=$comnam?></li>
                    <!-- <li><?=$bidang?></li> -->
                    <li><i class="fas fa-map-marker-alt"></i><?=$lokasi?></li>
                    <li>Rp. <?=number_format($salmin,0)?> - Rp. <?=number_format($salmax,0)?></li>
                </ul>
            </div>
        </div>
        <div class="items-link f-right">
            <a href="<?=base_url()?>find_jobs/find_jobs_detail/<?=$idents?>">Detail</a>
        </div>
        <div class="items-link f-right">
            <span><br><b>Diiklankan </b> <?=$durasi?> </span>
        </div>
    </div>
<?php
    }
?>
<!-- End untuk conten list job dynamis dari database -->

<!--Pagination Start  -->
<div class="pagination-area pb-115 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                <span class="ti-angle-right"></span></a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
                <?=$pagination?>
            </div>
        </div>
    </div>
</div>
<!--Pagination End  -->