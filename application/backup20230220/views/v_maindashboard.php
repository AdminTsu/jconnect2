<?php
// $cmbLCTION = $this->m_master->getComboCity();
// $arrayJOBS = $this->m_job->getJobUpdate(1);
// $optBidang = $this->m_job->getBidangKerja();

$optCountry = $this->crud->getCommon(3,7);
$optPrvince = $this->m_master->getComboProvince();
$optCity = $this->m_master->getComboCity_autotag();
$optBidang = $this->m_job->getBidangKerja_autotag();
$arrayJOBS = $this->m_job->getJobUpdate(1);
$optJOBPOS = array(
    '0'=>'All &emsp;&emsp;&emsp;&emsp;&emsp;',
    '1'=>'Senior Manajer &emsp;&emsp;&emsp;&emsp;&nbsp;',
    '2'=>'Manajer/Asisten Manager &emsp;&emsp;&emsp;',
    '3'=>'Supervisor/Kepala Bagian&emsp;&emsp;&emsp;',
    '4'=>'Staff (non-manajemen & non-supervisor)'
);
$optJENISS = array(
    '0'=>'All &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '1'=>'Kontrak &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '2'=>'Tetap &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'
);
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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').bind('click',function(data){
            if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() == '' && $('#txtSPSLIZ').val() == '' && $('#cmbJOBPOS').val() == 0 && $('#cmbTYPJOB').val() == 0 && $('#txtSALMIN').val() == 0 && $('#txtSALMAX').val() == 0){
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
            $('#cmbJOBPOS').val(0);
            $('#cmbTYPJOB').val(0);
            $('#txtSALMIN').val('');
            $('#txtSALMAX').val('');
        });
    });

    function jvSearch(){
        var KEYWRD = $('#txtKEYWRD').val();
        var LOCKSI = $('#txtLOCKSI').val();
        var SPSLIZ = $('#txtSPSLIZ').val();
        var JOBPOS = $('#cmbJOBPOS').val();
        var TYPJOB = $('#cmbTYPJOB').val();
        var SALMIN = $('#txtSALMIN').val();
        var SALMAX = $('#txtSALMAX').val();
        var prm = {};
        prm['keywrd'] = KEYWRD;
        prm['lokasi'] = LOCKSI;
        prm['spsliz'] = SPSLIZ;
        prm['jobpos'] = JOBPOS;
        prm['typjob'] = TYPJOB;
        prm['salmin'] = SALMIN;
        prm['salmax'] = SALMAX;
        
        // alert(KEYWRD+'~'+LOCKSI+'~'+SPSLIZ+'~'+TYPJOB);
        // return;
        
        if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() == '' && $('#txtSPSLIZ').val() == '' && $('#cmbTYPJOB').val() == 0 && $('#cmbJOBPOS').val() == 0 && $('#txtSALMIN').val() == 0 && $('#txtSALMAX').val() == 0){
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
                <div class="single-slider slider-height d-flex align-items-center" data-background="<?=base_url()?>resources/BG/bg15.jpg" style="width: 100%;position: fixed;">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="hero__caption">
                                    <!-- <h1 style='color:white;'>Temukan pekerjaan yang sesuai dengan kriteria Anda</h1> -->
                                    <!-- <br><br><br> -->
                                    <!-- <br><br><br> -->
                                    <!-- <p style='color:#000066;text-align: left;padding: 50px;'><font size=10>Temukan pekerjaan yang<br> sesuai dengan kriteria Anda</font></p> -->
                                    
                                    <h1 style='color:#000066;padding: 50px;'><br>Mengambil langkah berikutnya dengan bekal pengalaman bekerja Anda di Jepang bersama kami</h1>
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
                                        <!-- <select name="cmbLCTION" id="cmbLCTION" style="width: 200px; height:15px">
                                            <?php
                                                foreach($cmbLCTION as $lctionid=>$lction_desc){
                                                    echo "<option value='".$lctionid."'>".$lction_desc."</option>";
                                                }
                                            ?>
                                        </select> -->

                                        <label for="typjob"><font size=4>Posisi</font></label>
                                         <select name="cmbJOBPOS" id="cmbJOBPOS" class="form-control w-100">
                                            <?php
                                                foreach($optJOBPOS as $jobposid=>$jobpos_desc){
                                                    echo "<option value='".$jobposid."'>".$jobpos_desc."</option>";
                                                }
                                            ?>
                                        </select><br><br>
                                        
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

        <!-- Start Align Area -->
        <div class="whole-wrap">
            <div class="container box_1170">

                <!-- <div class="section-top-border text-right">
                    <h3 class="mb-30">Right Aligned</h3>
                    <div class="row">
                        <div class="col-md-9">
                            <p class="text-right">Over time, even the most sophisticated, memory packed computer can begin
                                to run slow if we
                                don’t do something to prevent it. The reason why has less to do with how computers are made
                                and how they age and
                                more to do with the way we use them. You see, all of the daily tasks that we do on our PC
                                from running programs
                                to downloading and deleting software can make our computer sluggish. To keep this from
                                happening, you need to
                                understand the reasons why your PC is getting slower and do something to keep your PC
                                running at its best. You
                                can do this through regular maintenance and PC performance optimization programs</p>
                            <p class="text-right">Before we discuss all of the things that could be affecting your PC’s
                                performance, let’s
                                talk a little about what symptoms</p>
                        </div>
                        <div class="col-md-3">
                            <img src="resources/img/gallery/img-for-jconnect 1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div> -->

                <div class="section-top-border">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-tittle white-text text-center">
                                    <h2 style='color:#000066'>Tentang Kami</h2>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <blockquote class="generic-blockquote">
                                “<b>JConncet</b> adalah online service berupa Job Portal untuk menghubungkan perusahaan Jepang yang ada di Indonesia yang sudah bekerja sama dengan kami dengan kandidat yang memiliki keahlian, bersertifikat serta berpengalaman di Jepang.<br>Kebanyakan dari peserta magang teknis dan Specified Skilled Worker (SSW) yang telah selesai bekerja di Jepang dan kembali ke Indonesia kesulitan mencari pekerjaan sehingga kebanyakan dari mereka akhirnya membuka usaha sendiri ataupun bekerja di perusahaan yang dimana para pekerja tersebut tidak dapat menggunakan pengalaman dan keahlianya secara maksimal.<br>Alasan sulitnya matching dengan perusahaan di Indonesia adalah karena biaya perusahaan rekrutmen, serta tidak adanya penilaian kemampuan bahasa Jepang dan pengalaman bekerja di Jepang selama 3 – 5 tahun.<br>JConnect mensupport kandidat yang berpengalaman di Jepang dapat meningkatkan kariernya. Kami tidak meminta biaya baik dari perusahaan yang merekrut maupun dari kandidat, kami berfokus untuk “menghubungkan” kedua pihak.”<br><br>
                                <center><a href="<?=base_url()?>dashboard/about" class="genric-btn primary small"  style='border-radius: 10px;'>Selengkapnya »</a></center>
                            </blockquote>
                            <!-- <div class="col-md-3">
                                <a href="<?=base_url()?>"  class="genric-btn primary circle">Selengkapnya »</a>
                            </div> -->
                        </div>
                    </div>

                    <!-- <div class="section-tittle white-text text-center">
                        <h2 style='color:#000066'>Tujuan Kami</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-30">Sejarah Kami</h4>
                                <p><b>JConncet</b> adalah online service berupa Job Portal untuk menghubungkan perusahaan Jepang yang ada di Indonesia yang sudah bekerja sama dengan kami dengan kandidat yang memiliki keahlian, bersertifikat serta berpengalaman di Jepang.</p>
                            </div>
                            <a href="<?=base_url()?>" class="more-btn">Selanjutnya »</a>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-30">Perusahaan</h4>
                                <p>Dapat mendapatkan kandidat yang lebih sesuai kebutuhan dengan adanya sertifikat, pengalaman, dan keahlian</p>
                            </div>
                        </div>
                    </div> -->
                <!-- </div> -->
                
                <!-- <div class="section-top-border">
                    <h3>Pekerja Kami</h3>
                    <div class="row gallery-item">
                        <div class="col-md-4">
                            <a href="resources/img/gallery/img-for-jconnect 1.jpg" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url(resources/img/gallery/img-for-jconnect 1.jpg);"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="resources/img/gallery/img-for-jconnect 2.jpg" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url(resources/img/gallery/img-for-jconnect 2.jpg);"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?=base_url()?>resources/img/gallery/img-for-jconnect 3.jpg" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url(<?=base_url()?>resources/img/gallery/img-for-jconnect 3.jpg);"></div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="<?=base_url()?>resources/img/gallery/img-for-jconnect 4.jpg" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url(<?=base_url()?>resources/img/gallery/img-for-jconnect 4.jpg);"></div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="<?=base_url()?>resources/img/gallery/img-for-jconnect 5.jpg" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url(<?=base_url()?>resources/img/gallery/img-for-jconnect 5.jpg);"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?=base_url()?>resources/img/gallery/img-for-jconnect 6.jpg" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url(<?=base_url()?>resources/img/gallery/img-for-jconnect 6.jpg);"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?=base_url()?>resources/img/gallery/img-for-jconnect 7.jpg" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url(<?=base_url()?>resources/img/gallery/img-for-jconnect 7.jpg);"></div>
                            </a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="section-top-border"> -->
                </div>
                
            </div>
        </div>
        <!-- End Align Area -->

        <!--================Blog Area =================-->
        <!-- <section class="blog_area single-post-area section-padding">
            <div class="container">
                <h3 class="mb-30">Tentang Kami</h3>
                <div class="row">
                    <div class="col-lg-12 posts-list">
                        <div class="single-post">
                            <div class="quote-wrapper">
                                <div class="quotes">
                                   “<b>JConncet</b> adalah online service untuk menghubungkan perusahaan Jepang yang ada di Indonesia yang sudah bekerja sama dengan kami dengan kandidat yang memiliki keahlian bersertifikat serta berpengalaman di Jepang.<br>Kebanyakan dari peserta magang teknis dan Specified Skilled Worker (SSW) yang telah selesai bekerja di Jepang dan kembali ke Indonesia kesulitan mencari pekerjaan sehingga kebanyakan dari mereka akhirnya membuka usaha sendiri.<br>Alasan sulitnya matching dengan perusahaan di Indonesia adalah karena biaya perusahaan rekrutmen, serta tidak adanya penilaian kemampuan bahasa Jepang dan pengalaman bekerja di Jepang selama 3 – 5 tahun.<br>JConnect mensupport kandidat yang berpengalaman di Jepang dapat meningkatkan kariernya. Kami tidak meminta biaya baik dari perusahaan yang merekrut maupun dari kandidat, kami berfokus untuk “menghubungkan” kedua pihak.”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- How  Apply Process Start-->
        <!-- <div class="apply-process-area apply-bg pt-50 pb-50" data-background="<?=base_url()?>resources/assets/img/gallery/how-applybg.png"> -->
        <div class="apply-process-area apply-bg pt-50 pb-50" data-background="<?=base_url()?>resources/BG/bg4.jpg">
            <div class="container">

                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Proses Lamar</span>
                            <!-- <h2> Bagaimana cara kerjanya</h2> -->
                            <h2 style='color:#000066'>Bagaimana Cara Kerjanya</h2>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Pencarian Pekerjaan</h5>
                               <p>Anda bisa memulainya dengan melakukan jenis pencarian yang di minati, seperti jenis pekerjaan, keahlian. Jika sudah, Anda bisa memilih lokasi yang diinginkan.</p>
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

        <section class="featured-job-area feature-padding">
            <div class="container">
                <div class="section-tittle white-text text-center">
                    <h2 style='color:#000066'>Pekerja Kami</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect1.jpg" alt="Bidang Taking" title="Bidang Taking" class="img-fluid" style='text-align: center;padding-top: 80px;'>
                    </div>
                    <div class="col-md-4">
                        <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect3.jpg" alt="Bidang Perakitan" title="Bidang Perakitan" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect5.jpg" alt="Bidang Konstruksi" title="Bidang Konstruksi" class="img-fluid" style='text-align: center;padding-top: 80px;'>
                    </div>
                    <!-- <div class="col-md-4">
                        <img src="resources/img/gallery/img-for-jconnect 6.jpg" alt="Bidang Elektro" title="Bidang Elektro" class="img-fluid">
                    </div> -->
                    <div class="col-md-4">
                        <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect7.jpg" alt="Bidang Elektro" title="Bidang Elektro" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect4.jpg" alt="Bidang Konstruksi" title="Bidang Konstruksi" class="img-fluid" style='text-align: center;padding-top: 80px;'>
                    </div>
                    <div class="col-md-4">
                        <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect2.jpg" alt="Bidang Pengolahan Makanan" title="Bidang Pengolahan Makanan" class="img-fluid">
                    </div>
                </div>

            </div>
        </section>
        <!-- Featured_job_end -->

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

        <!-- Blog Area Start -->
        <div class="home-blog-area blog-h-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <!-- <span>Our latest blog</span> -->
                            <h2>Rekanan Kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <!-- <img src="<?=base_url()?>assets/clients/lpk tsubame cover.jpg" style="width: 370px;height: 208px;" alt=""> -->
                                    <img src="<?=base_url()?>assets/clients/lpk tsubame cover.jpg" style="width: 570px;height: 322px;" alt="">
                                    <div class="blog-date text-center">
                                        <p>LPK Tsubame JLTC</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p><i class="fas fa-map-marker-alt"></i> Bekasi Selatan</p>
                                    <h3><a href="#">Lembaga pelatihan kerja dan bahasa Jepang</a></h3>
                                    <a href="https://www.tsubame-jltc.com/id" target="_blank" class="more-btn">Selengkapnya »</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="<?=base_url()?>assets/clients/glico pt 2.jpg" alt="">
                                    <div class="blog-date text-center">
                                        <p>PT. Glico Manufacturing Indonesia</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p><i class="fas fa-map-marker-alt"></i> Karawang, Kab. Bekasi</p>
                                    <h3><a href="#">Perusahaan yang bergerak dibidang pengolahan makanan ringan dan biskuit</a></h3>
                                    <a href="https://www.glico.com/id/" target="_blank" class="more-btn">Selengkapnya »</a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="<?=base_url()?>assets/clients/glico pt 2.jpg" alt="">
                                    <div class="blog-date text-center">
                                        <p>PT. Glico Manufacturing Indonesia</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p><i class="fas fa-map-marker-alt"></i> Karawang, Kab. Bekasi</p>
                                    <h3><a href="#">Perusahaan yang bergerak dibidang pengolahan makanan ringan dan biskuit</a></h3>
                                    <a href="https://www.glico.com/id/" target="_blank" class="more-btn">Selengkapnya »</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <style type="text/css">
            h2{
              text-align:center;
              padding: 20px;
            }
            /* Slider */

            .slick-slide {
                margin: 0px 20px;
            }

            .slick-slide img {
                width: 100%;
            }

            .slick-slider
            {
                position: relative;
                display: block;
                box-sizing: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                        user-select: none;
                -webkit-touch-callout: none;
                -khtml-user-select: none;
                -ms-touch-action: pan-y;
                    touch-action: pan-y;
                -webkit-tap-highlight-color: transparent;
            }

            .slick-list
            {
                position: relative;
                display: block;
                overflow: hidden;
                margin: 0;
                padding: 0;
            }
            .slick-list:focus
            {
                outline: none;
            }
            .slick-list.dragging
            {
                cursor: pointer;
                cursor: hand;
            }

            .slick-slider .slick-track,
            .slick-slider .slick-list
            {
                -webkit-transform: translate3d(0, 0, 0);
                   -moz-transform: translate3d(0, 0, 0);
                    -ms-transform: translate3d(0, 0, 0);
                     -o-transform: translate3d(0, 0, 0);
                        transform: translate3d(0, 0, 0);
            }

            .slick-track
            {
                position: relative;
                top: 0;
                left: 0;
                display: block;
            }
            .slick-track:before,
            .slick-track:after
            {
                display: table;
                content: '';
            }
            .slick-track:after
            {
                clear: both;
            }
            .slick-loading .slick-track
            {
                visibility: hidden;
            }

            .slick-slide
            {
                display: none;
                float: left;
                height: 100%;
                min-height: 1px;
            }
            [dir='rtl'] .slick-slide
            {
                float: right;
            }
            .slick-slide img
            {
                display: block;
            }
            .slick-slide.slick-loading img
            {
                display: none;
            }
            .slick-slide.dragging img
            {
                pointer-events: none;
            }
            .slick-initialized .slick-slide
            {
                display: block;
            }
            .slick-loading .slick-slide
            {
                visibility: hidden;
            }
            .slick-vertical .slick-slide
            {
                display: block;
                height: auto;
                border: 1px solid transparent;
            }
            .slick-arrow.slick-hidden {
                display: none;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.customer-logos').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }]
                });
            });
        </script>

        <!-- <div class="container">
            <section class="customer-logos slider">

                <div class="slide"><img style="width: 80px;height: 80px;transform: translate(-50%, 0%);display:none;" src="<?=base_url()?>resources/img/partnership/"></div>
                <div class="slide"><img style="width: 140px;height:60px;transform: translate(-50%, 20%);" src="<?=base_url()?>resources/img/partnership/tsubame_HR.jpeg"></div>
                <div class="slide"><img style="width: 80px;height: 80px;transform: translate(-50%, 0%);" src="<?=base_url()?>resources/img/partnership/workinjapan.png"></div>
                <div class="slide"><img style="width: 80px;height: 80px;transform: translate(-50%, 0%);" src="<?=base_url()?>resources/img/partnership/lptk_logo.png"></div>
                <div class="slide"><img style="width: 80px;height: 80px;transform: translate(-50%, 0%);" src="<?=base_url()?>resources/img/partnership/mmi.jpeg"></div>
                <div class="slide" style="font-size: 16px;"><b>PT. Glico Manufacture Indonesia</b></div>

            </section>
        </div> -->

    </main>