<?php

$optCountry = $this->crud->getCommon(3,7);
$optPrvince = $this->m_master->getComboProvince();
$optCity = $this->m_master->getComboCity();
$optBidang = $this->m_job->getBidangKerja();
$arrJOBS = $this->m_job->getJobUpdate();
$optJENISS = array('0'=>'All','1'=>'Kontrak','2'=>'Tetap');
$optEXPRNC = array('0'=>'All','1'=>'1-2 Tahun','2'=>'2-3 Tahun','3'=>'3-6 Tahun','4'=>'> 6 Tahun');


?>
<!-- Job List Area Start -->
<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <!-- Left content -->
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="row">
                    <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                            <div class="ion"> <svg 
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="20px" height="12px">
                            <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                            </svg>
                            </div>
                            <h4>Filter</h4>
                        </div>
                    </div>
                </div>

<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
<script>
var baseurl = "<?php echo base_url("find_jobs.php/"); ?>";
    $(document).ready(function(){
        $("#btn-search").click(function(){ // Ketika tombol simpan di klik
        // Ubah text tombol search menjadi SEARCHING... 
        // Dan tambahkan atribut disable pada tombol nya agar tidak bisa diklik lagi
        $(this).html("SEARCHING...").attr("disabled", "disabled");
        
        $.ajax({
          url: '<?php echo base_url()?>find_jobs/search', // File tujuan
          type: 'POST', // Tentukan type nya POST atau GET
          data: {keyword: $("#txtKEYWRD").val(),lokasi: $("#txtLOCKSI").val()}, // Set data yang akan dikirim
          dataType: "json",
          beforeSend: function(e) {
            if(e && e.overrideMimeType) {
              e.overrideMimeType("application/json;charset=UTF-8");
            }
          },
          success: function(response){ // Ketika proses pengiriman berhasil
            // Ubah kembali text button search menjadi SEARCH
            // Dan hapus atribut disabled untuk meng-enable kembali button search nya
            $("#btn-search").html("SEARCH").removeAttr("disabled");
            
            // Ganti isi dari div view dengan view yang diambil dari controller siswa function search
            // $("#view").html(response.hasil);
            alert('Tampilan data html!');
          },
          error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
            // alert(xhr.responseText); // munculkan alert
            alert('Cek lagi oii, masih ada error!'); // munculkan alert
            $("#btn-search").html("SEARCH").removeAttr("disabled");
          }
        });
      });
    });

</script>

                <!-- // Buat variabel baseurl untuk nanti di akses pada file config.js -->
                <script>
                </script>
                <div class="job-category-listing mb-50">    
                    <form enctype="multipart/form-data">
                        <div class="single-listing">

                                <div class="single-listing">
                                     <h5>Kata kunci</h5>
                                </div>
                                <div class="single-listing">
                                    <input type="text" placeholder="Kata kunci / Posisi" name="txtKEYWRD" id="txtKEYWRD">
                                </div>

                                <div class="single-listing">
                                     <h5>Lokasi</h5>
                                </div>
                                <div class="single-listing">
                                    <input type="text" placeholder="Daerah / Kota" name="txtLOCKSI" id="txtLOCKSI">
                                </div>

                                <div class="form-group mt-3">
                                    <center>
                                        <!-- <input type="submit" id="submit" onclick="submitFilter();" class="button button-contactForm boxed-btn" value="Cari"> -->
                                        <button type="button" id="btn-search" class="button button-contactForm boxed-btn">Cari</button>
                                    </center>
                                </div>

                        </div>

                        <div class="result"></div>
                    </form>
                </div>

            </div>
            <!-- Right content -->
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
                        <!-- Count of Job list Start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="count-job mb-35">

                                    <span>Urutkan sesuai</span>
                                    <div style='width:100px;'>
                                        <select name="select" style='width:100px;'>
                                            <?php
                                                foreach($optBidang as $bidangid=>$bidang_desc){
                                                    echo "<option style='width:30px;' value='".$bidangid."'>".$bidang_desc."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <span>&nbsp;</span>
                                    <span>&nbsp;</span>

                                </div>
                            </div>
                        </div>
                        <!-- Count of Job list End -->
                        
                        <div id="view">
                            <?php 
                                $this->load->view('V_list_job', array('data'=>$data)); // Load file view.php dan kirim data siswanya 
                            ?>
                        </div>

                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
<!-- Job List Area End -->
