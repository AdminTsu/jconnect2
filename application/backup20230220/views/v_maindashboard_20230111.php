<?php
// $cmbLCTION = $this->m_master->getComboCity();
// $arrayJOBS = $this->m_job->getJobUpdate(1);
// $optBidang = $this->m_job->getBidangKerja();

$optCountry = $this->crud->getCommon(3,7);
$optPrvince = $this->m_master->getComboProvince();
$optCity = $this->m_master->getComboCity_autotag();
$optBidang = $this->m_job->getBidangKerja_autotag();
$arrayJOBS = $this->m_job->getJobUpdate(1);
$optJENISS = array(
    '0'=>'All &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
    '1'=>'Kontrak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
    '2'=>'Tetap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
');
$optEXPRNC = array('0'=>'All','1'=>'1-2 Tahun','2'=>'2-3 Tahun','3'=>'3-6 Tahun','4'=>'> 6 Tahun');
$iduser = $this->session->userdata('USR_IDENTS');

?>

<style type="text/css">
.form-style-10{
    /*position: fixed;*/
    width: 450px;
    /*max-width:450px;*/
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}

fieldset {
    /*border: 1px solid #DDDDDD;*/
    display: inline-block;
    font-size: 18px;
    padding: 1em 2em;
}
 
legend {
    text-align: center;
    width: 300px;
    background: #000066;
    color: #FFFFFF;
    margin-bottom: 10px;
    padding: 0.5em 1em;
}
 
/* DESAIN INPUT FIELD */

label {
    color: #ff3399;
    display: block;
    font-size: 12px;
}

input[type="text"] {
    width: 300px;
    border: none;
    border-bottom: 1px solid #DDDDDD;
    font-size: 14px;
    margin-bottom: 15px;
    padding: 0.5em 1em 0.5em 0;
}

input[type="text"]:hover {
    width: 300px;
    border: none;
    border-bottom: 1px solid #DDDDDD;
    background: #f2f2f2;
    color: #000066;
    font-size: 14px;
    margin-bottom: 15px;
    padding: 0.5em 1em 0.5em 0;
}

input[type="text"]:focus {
    border-bottom: 1px solid #BFD48C;
    outline: none;
}

input[type="number"] {
    width: 300px;
    border: none;
    border-bottom: 1px solid #DDDDDD;
    font-size: 14px;
    margin-bottom: 15px;
    padding: 0.5em 1em 0.5em 0;
}

input[type="number"]:hover {
    width: 300px;
    border: none;
    border-bottom: 1px solid #DDDDDD;
    background: #f2f2f2;
    color: #000066;
    font-size: 14px;
    margin-bottom: 15px;
    padding: 0.5em 1em 0.5em 0;
}

input[type="number"]:focus {
    border-bottom: 1px solid #BFD48C;
    outline: none;
}

select {
    width: 300px; 
    height:10px;
    border: none;
    border-bottom: 1px solid #DDDDDD;
    background: #f2f2f2;
    color: #000066;
    /*font-size: 14px;
    margin-bottom: 15px;
    padding: 0.5em 1em 0.5em 0;*/
}
 
input[type="submit"] {
    width: 200px;
    border: none;
    border-bottom: 1px solid #DDDDDD;
    background: #000066;
    color: #FFFFFF;
    font-size: 14px;
    margin-bottom: 15px;
    padding: 0.5em 1em 0.5em 0;
}
 
input[type="submit"]:hover {
    width: 200px;
    border: none;
    border-bottom: 1px solid #DDDDDD;
    background: #ff3399;
    color: #000066;
    font-size: 14px;
    margin-bottom: 15px;
    padding: 0.5em 1em 0.5em 0;
    text-align: center;
}

.ui-menu-item-wrapper {
    background: #ffffe6;
    width: 320px;
    cursor: pointer;
}
</style>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?=base_url()?>resources/js/jQuery-Autocomplete/dist/jquery.autocomplete.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').bind('click',function(data){
            if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() == '' && $('#txtSPSLIZ').val() == '' && $('#cmbTYPJOB').val() == 0 && $('#txtSALMIN').val() == 0 && $('#txtSALMAX').val() == 0){
                alert('Tidak ada filter yang di isi!');
                return;
            }
        });

        $('#reset').bind('click',function(data){
            // $(this).closest('form').find("input[type=text]").val("");
            // window.location.replace("/find_jobs");
            $('#txtKEYWRD').val('');
            $('#txtLOCKSI').val('');
            $('#txtSPSLIZ').val('');
            $('#cmbTYPJOB').val(0);
            $('#txtSALMIN').val('');
            $('#txtSALMAX').val('');
        });
    });

    function jvSearch(){
        var KEYWRD = $('#txtKEYWRD').val();
        var LOCKSI = $('#txtLOCKSI').val();
        var SPSLIZ = $('#txtSPSLIZ').val();
        var TYPJOB = $('#cmbTYPJOB').val();
        var SALMIN = $('#txtSALMIN').val();
        var SALMAX = $('#txtSALMAX').val();
        var prm = {};
        prm['keywrd'] = KEYWRD;
        prm['lokasi'] = LOCKSI;
        prm['spsliz'] = SPSLIZ;
        prm['typjob'] = TYPJOB;
        prm['salmin'] = SALMIN;
        prm['salmax'] = SALMAX;
        
        // alert(KEYWRD+'~'+LOCKSI+'~'+SPSLIZ+'~'+TYPJOB);
        // return;
        
        if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() == '' && $('#txtSPSLIZ').val() == '' && $('#cmbTYPJOB').val() == 0 && $('#txtSALMIN').val() == 0 && $('#txtSALMAX').val() == 0){
            $("#form-submit").submit(function (e) {
                alert('Tidak ada filter yang di isi!');
                return false;
            });
        }else{
            $.post('/Find_jobs/search/',prm,function(data){
            });
        }
    }

    $(function() {

        var availableTags = [
            <?php
                $bidangnya = '';
                $i = 0;
                foreach($optBidang as $bidangid=>$bidang_desc){
                    if($bidang_desc != $bidangnya){
                        echo "'".$bidang_desc."',";
                        $bidangnya = $bidang_desc;
                        $i++;
                    }
                }
            ?>
        ];

        $( "#txtSPSLIZ" ).autocomplete({
            source: availableTags
        });

        var cityTags = [
            <?php
                $citynya = '';
                $i = 0;
                foreach($optCity as $cityid=>$city_desc){
                    if($city_desc != $citynya){
                        echo "'".$city_desc."',";
                        $citynya = $city_desc;
                        $i++;
                    }
                }
            ?>
        ];

        $( "#txtLOCKSI" ).autocomplete({
            source: cityTags
        });
  });

</script>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="<?=base_url()?>resources/BG/bg15.jpg">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="hero__caption">
                                    <!-- <h1 style='color:white;'>Temukan pekerjaan yang sesuai dengan kriteria Anda</h1> -->
                                    <!-- <br><br><br> -->
                                    <!-- <br><br><br> -->
                                    <!-- <p style='color:#000066;text-align: left;padding: 50px;'><font size=10>Temukan pekerjaan yang<br> sesuai dengan kriteria Anda</font></p> -->
                                    
                                    <h1 style='color:#000066;padding: 50px;'><br>Ayo kembangkan karir Anda selanjutnya bersama kami!</h1>
                                </div>
                            </div>

                            <div class="form-style-10">
                                <form enctype="multipart/form-data" id='form-submit' method='post' action="<?= base_url() ?>Find_jobs/search/">
                                    <!-- <div class="section"><span>1</span>First Name &amp; Address</div> -->
                                    <fieldset>
                                        <legend>Pencarian Kerja</legend>

                                        <label for="spsliz"><font size=4>Spesialisasi</font></label>
                                        <input type="text" class="form-control w-100" placeholder="Ketik Spesialisasi" name="txtSPSLIZ" id="txtSPSLIZ">
                                        <!-- <select name="cmbSPSLIZ" id="cmbSPSLIZ" style="width: 200px; height:15px">
                                            <?php
                                                foreach($optBidang as $bidangid=>$bidang_desc){
                                                    echo "<option value='".$bidangid."'>".$bidang_desc."</option>";
                                                }
                                            ?>
                                        </select> -->

                                        <!-- <label for="lokasi"><font size=4>Lokasi</font></label>
                                        <input type="text" name="lokasi" id="lokasi" placeholder="Isi Lokasi Tempat Kerja" /> -->
                                        <label for="typjob"><font size=4>Lokasi</font></label>
                                        <input type="text" class="form-control w-100" placeholder="Ketik Lokasi" name="txtLOCKSI" id="txtLOCKSI">
                                        <!-- <select name="cmbLCTION" id="cmbLCTION" style="width: 200px; height:15px"> -->
                                            <?php
                                                // foreach($cmbLCTION as $lctionid=>$lction_desc){
                                                //     echo "<option value='".$lctionid."'>".$lction_desc."</option>";
                                                // }
                                            ?>
                                        <!-- </select> -->

                                        <label for="typjob"><font size=4>Tipe Pekerjaan</font></label>
                                         <select name="cmbTYPJOB" id="cmbTYPJOB" class="form-control w-100">
                                            <?php
                                                foreach($optJENISS as $jenisid=>$jenis_desc){
                                                    echo "<option value='".$jenisid."'>".$jenis_desc."</option>";
                                                }
                                            ?>
                                        </select><br><br>
                                        
                                        <label for="gaji"><font size=4>Range Gaji</font></label>
                                        <input type="number" placeholder="Min" name="txtSALMIN" id="txtSALMIN" style="width:47%"> - 
                                        <input type="number" placeholder="Max" name="txtSALMAX" id="txtSALMAX" style="width:47%">
                                        <br>

                                        <label for="keywrd"><font size=4>Kata Kunci</font></label>
                                        <input type="text" class="form-control w-100" placeholder="Kata kunci" name="txtKEYWRD" id="txtKEYWRD">

                                        <br>

                                        <!-- <br><center><input type="submit" name="cari" value="Cari" class="genric-btn primary circle" /></center> -->
                                        <br>
                                        <center><button href="#" type="submit" id=submit class="genric-btn primary circle" onclick='jvSearch();'>Cari</button></center>
                                    </fieldset>
                                </form>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- How  Apply Process Start-->
        <!-- <div class="apply-process-area apply-bg pt-50 pb-50" data-background="<?=base_url()?>resources/assets/img/gallery/how-applybg.png"> -->
        <div class="apply-process-area apply-bg pt-50 pb-50" data-background="<?=base_url()?>resources/BG/bg4.jpg">
            <div class="container">

                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Proses Lamar</span>
                            <!-- <h2> Bagaimana cara kerjanya</h2> -->
                            <h2 style='color:#000066'>Bagaimana cara kerjanya</h2>
                        </div>
                    </div>
                </div>

                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Cari lowongan</h5>
                               <p>Anda bisa memulainya dengan melakukan jenis pencarian yang di minati, seperti jenis pekerjaan, keahlain. Jika sudah, anda bisa memilih lokasi yang diinginkan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. Lamar sesuai lowongan</h5>
                               <p>Silahkan lamar sesuai dengan lowongan yang tersedia, pengalaman dan kemampuan masing-masing. Serta persipakan dokumen pendukung sesuai syarat dari masing-masing perusahaan</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. Dapatkan pekerjaan</h5>
                               <p>Dapatkan pekerjaan yang sesuai dengan minat, kemampuan,dan pengalaman Anda masing-masing di perusahaan-perusahaan yang sudah bekerja sama dengan JConnect.co.id.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- How  Apply Process End-->

            <!-- </div> -->
        <!-- </div> -->
        <!-- slider Area End-->

        <!-- Online CV Area Start -->
         <!-- <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="<?=base_url()?>resources/lelang/images/auction/realstate/real-bg.png"> -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="<?=base_url()?>resources/BG/bg13.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1"><font style='color:#ff3399;'>PAKET UNGGULAN PELAYANAN TERBAIK</font></p>
                            <p class="pera2"> Buatlah Perbedaan dengan Resume Online Anda</p>
                            <a href="<?=base_url()?>register" class="border-btn2 border-btn4">Upload CV Anda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->

        <style>
            .blink {
              animation: blink-animation 1s steps(5, start) infinite;
              -webkit-animation: blink-animation 1s steps(5, start) infinite;
              color:red;
              /*background-color: yellow;*/
            }
            .blink span{
              background-color: yellow;
            }
            @keyframes blink-animation {
              to {
                visibility: hidden;
              }
            }
            @-webkit-keyframes blink-animation {
              to {
                visibility: hidden;
              }
            }
        </style>
        <script>
            function kelapKelip() {
                $('.blink').fadeOut(); //fungsi mehilangkan
                $('.blink').fadeIn(); //fungsi munculkan
            }
            setInterval(kelapKelip, 1000);
            //set waktu berkala 1 detik, jadi setiap 1 detik sekali akan menjalankan function kelapKelip dimana dalam function tersebut terdapat fungsi fadeOut dan fadeIn

            function jvCekLoginDetail(){
                var user = $('#iduser').val();

                if(user == 0){
                    alert('Maaf, untuk melihat detail, silahkan Login jika sudah mempunyai akses/lakukan Pendaftaran dan Aktivasi akun Anda terlebih dahulu!');
                    return;
                }
            }

        </script>

        <!-- Featured_job_start -->
        <input type='hidden' name='iduser' id='iduser' values='<?=$iduser?>'>
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Pekerjaan Saat ini</span>
                            <h2>Pekerjaan Terbaru</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        <?php
                            // print_r($arrayJOBS);
                            foreach($arrayJOBS as $row){
                                $idents = isset($row['JOB_COMPNY']) ? $row['JOB_COMPNY'] : NULL;
                                $logoss = isset($row['CLI_LOGOSS']) ? $row['CLI_LOGOSS'] : NULL;
                                $titles = isset($row['JOB_TITLES']) ? $row['JOB_TITLES'] : NULL;
                                $comnam = isset($row['CLI_NAMESS']) ? $row['CLI_NAMESS'] : NULL;
                                $bidang = isset($row['JOB_ASPECS']) ? $row['JOB_ASPECS'] : NULL;
                                $lokasi = isset($row['JOB_LCTION']) ? $row['JOB_LCTION'] : NULL;
                                $salmin = isset($row['JOB_SALMIN']) ? $row['JOB_SALMIN'] : NULL;
                                $salmax = isset($row['JOB_SALMAX']) ? $row['JOB_SALMAX'] : NULL;
                                $status = isset($row['JOB_DRTION']) ? $row['JOB_DRTION'] : NULL;
                                $datcrt = isset($row['JOB_DATCRT']) ? $row['JOB_DATCRT'] : NULL;
                                $datnow = date('Y-m-d H:i:s');
                                // echo $datcrt;
                                // $diff = $datcrt->diff($datnow);
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
                                
                                if($thn == 0){
                                    if($bulans == 0){
                                        if($hariss == 0){
                                            if($jamnya == 0){
                                                $durasi = "$menits Menit $detiks Detik  yang lalu <h5  class=\"blink\" data-text=\"New Posting\" contenteditable>New Posting</h5>";
                                            }else{
                                                $durasi = "$jamnya Jam $menits Menit yang lalu <h5  class=\"blink\" data-text=\"New Posting\" contenteditable>New Posting</h5>";
                                            }
                                        }else{
                                            $durasi = "$hariss Hari $jamnya Jam yang lalu";
                                        }
                                    }else{
                                        $durasi = "$bulans Bulan $hariss Hari yang lalu";
                                    }
                                }else{
                                    $durasi = "$tahuns Tahun $bulans Bulan yang lalu";
                                }
                                 // <h5  class=\"blink\" data-text=\"New Posting\">New Posting</h5>
                                if($status == 1){
                                    $status = 'KONTRAK';
                                }else{
                                    $status = 'TETAP';
                                }

                        if($idents != '' || $idents != null){

                            if($iduser == '' || $iduser == null){
                                $btn_detail = '<a onClick="jvCekLoginDetail();">Detail</a>';
                            }else{
                                $btn_detail = '<a href="'.base_url().'find_jobs/find_jobs_detail/'.$idents.'">Detail</a>';
                            }                                
                        ?>
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                    <?php if($logoss != '' || $logoss != null){?>
                                        <a href="<?=base_url()?>dashboard/Find_Jobs_detail"><img style="width: 85px;height:85px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" src="<?=base_url()?>assets/documents/upload/client/<?=$idents?>/<?=$logoss?>" alt=""></a>
                                    <?php }else{?>
                                        <img src="<?=base_url()?>resources/img/no-image2.jpg" alt="Avatar" style="width: 85px;height:85px;border: 1px solid gainsboro;border-radius:3px;border-color:#cccccc;" class="image" style="width:100%">
                                    <?php }?>
                                    </div>
                                    <div class="job-tittle">
                                        <a href="<?=base_url()?>dashboard/Find_Jobs_detail/<?=$idents?>"><h4><?=$titles?></h4></a>
                                        <ul>
                                            <li><?=$comnam?></li>
                                            <!-- <li><?=$bidang?></li> -->
                                            <li>Rp. <?=number_format($salmin,0)?> - Rp. <?=number_format($salmax,0)?></li>
                                            <li>&nbsp;</li>
                                        </ul>
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i><?=$lokasi?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link f-right">
                                    <!-- <a href="<?=base_url()?>dashboard/Find_Jobs_detail/<?=$idents?>">Detail</a> -->
                                    <?=$btn_detail?>
                                </div>
                                <div class="items-link f-right">
                                    <span><br>Diiklankan sejak <?=$durasi?> </span>
                                </div>
                            </div>
                        <?php
                                }else{
                        ?>
                                <div class="single-job-items mb-30">
                                    <div class='items-link f-right'>
                                        <span><p>Maaf, Tidak ada data Pekerjaan Terbaru</p> </span>
                                    </div>
                                </div>
                        <?php
                                }
                        }
                        ?>
                        <center><a href="<?=base_url()?>Find_jobs" class="genric-btn primary circle">Lihat lebih banyak »</a></center>

                        <!-- single-job-content -->
                        <!-- <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="<?=base_url()?>dashboard/Find_Jobs_detail"><img src="<?=base_url()?>resources/assets/img/icon/job-list2.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="<?=base_url()?>dashboard/Find_Jobs_detail"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                        <li>$3500 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="<?=base_url()?>jobfinderportal-master/job_details.html">Full Time</a>
                                <span>7 hours ago</span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->

        <!-- Submit a Vacancy or Register as a Candidate  Start -->
         <!-- <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="<?=base_url()?>resources/lelang/images/auction/realstate/real-bg.png"> -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="<?=base_url()?>resources/BG/bg16.jpg">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1"><font style='color:#ff3399;'>Mana yang sesuai dengan Anda?</font></p>
                            <!-- <p class="pera2"> Ayo gabung dengan kami sekarang juga</p> -->
                            <h2 style='color:white;'> Ayo gabung dengan kami sekarang juga</h2>
                            <a href="<?=base_url()?>register/RegisterForm_vacancy" class="border-btn2 border-btn4">Pasang Lowongan Pekerjaan</a>
                            <a href="<?=base_url()?>register" class="border-btn2 border-btn4">Mendaftar sebagai Kandidat</a>
                            <!-- <a href="<?=base_url()?>register" class="border-btn2 border-btn4">Daftar Sekarang</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Submit a Vacancy or Register as a Candidate End -->

    </main>