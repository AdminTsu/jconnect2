<?php
$fnames = $this->session->userdata('USR_NAMESS');
$logins = $this->session->userdata('USR_LOGINS');
$levels = $this->session->userdata('USR_LEVELS');
$menuid = $this->session->userdata('USR_MENUID');
$iduser = $this->session->userdata('USR_IDENTS');
if($iduser == '' || $iduser == null){
    $iduser = 0;
}

foreach($isi as $row){
    $idjobs = isset($row->JOB_IDENTS) ? $row->JOB_IDENTS : NULL;
}

$optCountry = $this->crud->getCommon(3,7);
$optPrvince = $this->m_master->getComboProvince();
$optCity = $this->m_master->getComboCity_autotag();
$optBidang = $this->m_job->getBidangKerja_autotag();
$arrJOBS = $this->m_job->getJobUpdate();
$optJOBPOS = array(
    '0'=>'All &emsp;&emsp;&emsp;',
    '1'=>'CEO/GM/Diretur/Senior Manajer &emsp;&emsp;&emsp;',
    '2'=>'Manajer/Asisten Manager &emsp;&emsp;&emsp;',
    '3'=>'Staff (non-manajemen & non-supervisor)',
    '4'=>'Non-Eksekutif &emsp;&emsp;'
);
$optJENISS = array(
    '0'=>'All &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
    '1'=>'Kontrak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
    '2'=>'Tetap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
);
$optEXPRNC = array('0'=>'All','1'=>'1-2 Tahun','2'=>'2-3 Tahun','3'=>'3-6 Tahun','4'=>'> 6 Tahun');

if($lokasi == ''){
    $lokasi = '';
}

if($spsliz == ''){
    $spsliz = '';
}

if($typjob == 0){
    $typjob = 0;
}

// echo "$salmin - $salmax";
if($salmin == ''){
    $salmin = '';
}

if($salmax == ''){
    $salmax = '';
}

if($keywrd == ''){
    $keywrd = '';
}

if($jobpos == 0 || $jobpos == ''){
    $chk1 = '';
    $chk2 = '';
    $chk3 = '';
    $chk4 = '';
}else if($jobpos == 1){
    $chk1 = 'checked';
    $chk2 = '';
    $chk3 = '';
    $chk4 = '';
}else if($jobpos == 2){
    $chk1 = '';
    $chk2 = 'checked';
    $chk3 = '';
    $chk4 = '';
}else if($jobpos == 3){
    $chk1 = '';
    $chk2 = '';
    $chk3 = 'checked';
    $chk4 = '';
}else{
    $chk1 = '';
    $chk2 = '';
    $chk3 = '';
    $chk4 = 'checked';
}

// echo $chk1.'~'.$chk2.'~'.$chk3.'~'.$chk4;

?>
<script src="<?=base_url()?>resources/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>
<script>
    $(document).ready(function(){
        // $('#gaji').hide();
        // $('#gaji2').hide();
        $('#submit').bind('click',function(data){
            if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() == '' && $('#txtSPSLIZ').val() == '' && $('#cmbJOBPOS').val() == 0 && $('#cmbTYPJOB').val() == 0 && $('#txtSALMIN').val() == 0 && $('#txtSALMAX').val() == 0){
                alert('Tidak ada filter yang di isi!');
                return;
            }
        });
        
        $('#reset').bind('click',function(data){
            $('#txtKEYWRD').val('');
            $('#txtLOCKSI').val('');
            $('#txtSPSLIZ').val('');
            $('#cmbJOBPOS').val(0);
            $('#cmbTYPJOB').val(0);
            $('#txtSALMIN').val('');
            $('#txtSALMAX').val('');
        });
    });

    function cb_checked(x){
        var cek =$("#"+x).prop('checked');
        var val =$("#"+x).val();

        // alert(cek+'~'+val);
        if(val == 1){
            if(cek==true){
                $("#"+x).prop('checked', this.value=1);
                $("#chkJOBPOS2").prop('checked', this.value=0);
                $("#chkJOBPOS3").prop('checked', this.value=0);
                $("#chkJOBPOS4").prop('checked', this.value=0);
            }else{
                $("#"+x).prop('checked', this.value=0);
            }
        }else if(val == 2){
            if(cek==true){
                $("#"+x).prop('checked', this.value=1);
                $("#chkJOBPOS1").prop('checked', this.value=0);
                $("#chkJOBPOS3").prop('checked', this.value=0);
                $("#chkJOBPOS4").prop('checked', this.value=0);
            }else{
                $("#"+x).prop('checked', this.value=0);
            }
        }else if(val == 3){
            if(cek==true){
                $("#"+x).prop('checked', this.value=1);
                $("#chkJOBPOS1").prop('checked', this.value=0);
                $("#chkJOBPOS2").prop('checked', this.value=0);
                $("#chkJOBPOS4").prop('checked', this.value=0);
            }else{
                $("#"+x).prop('checked', this.value=0);
            }
        }else{
            if(cek==true){
                $("#"+x).prop('checked', this.value=1);
                $("#chkJOBPOS1").prop('checked', this.value=0);
                $("#chkJOBPOS2").prop('checked', this.value=0);
                $("#chkJOBPOS3").prop('checked', this.value=0);
            }else{
                $("#"+x).prop('checked', this.value=0);
            }
        }
   }

    function jvCekLoginDetail(){
        var user = $('#iduser').val();
        // alert(user);

        if(user == 0){
            // $("#contactForm").submit(function (e) {
                alert('Maaf, untuk melihat detail, silahkan Login jika sudah mempunyai akses/lakukan Pendaftaran dan Aktivasi akun Anda terlebih dahulu!');
                return;
            // });
        }
    }

    function jvSubmit(){
        var KEYWRD = $('#txtKEYWRD').val();
        var LOCKSI = $('#txtLOCKSI').val();
        var SPSLIZ = $('#txtSPSLIZ').val();
        // var JOBPOS = $('#cmbJOBPOS').val();
        var JOBPOS = 0;
        var TYPJOB = $('#cmbTYPJOB').val();
        var SALMIN = $('#txtSALMIN').val();
        var SALMAX = $('#txtSALMAX').val();

        var chkJOBPOS1 = $("#chkJOBPOS1").prop('checked');
        var chkJOBPOS2 = $("#chkJOBPOS2").prop('checked');
        var chkJOBPOS3 = $("#chkJOBPOS3").prop('checked');
        var chkJOBPOS4 = $("#chkJOBPOS4").prop('checked');

        if($("#chkJOBPOS1").is(":checked")){
            JOBPOS = $('#chkJOBPOS1').val();
        }else if($("#chkJOBPOS2").is(":checked")){
            JOBPOS = $('#chkJOBPOS2').val();
        }else if($("#chkJOBPOS3").is(":checked")){
            JOBPOS = $('#chkJOBPOS3').val();
        }else{
            JOBPOS = $('#chkJOBPOS4').val();
        }

        // alert(JOBPOS);return;

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

        if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() == '' && $('#txtSPSLIZ').val() == '' && $('#cmbJOBPOS').val() == 0 && $('#cmbTYPJOB').val() == 0 && $('#txtSALMIN').val() == 0 && $('#txtSALMAX').val() == 0){
            $("#form-submit").submit(function (e) {
                alert('Tidak ada filter yang di isi!');
                return false;
            });
        }else{
            $.post('/Find_jobs/search/',prm,function(data){
                // alert(keyword);
                // return;
            });
        }
    }
    
    function jvReset(){
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

        $('[data-command="reset"]').click(function () {
            window.location.href = window.location.href;
        });
    }

    function kelapKelip() {
        $('.blink').fadeOut(); //fungsi mehilangkan
        $('.blink').fadeIn(); //fungsi munculkan
    }
    setInterval(kelapKelip, 1000);
    
    $(function() {
        // function(){return "/perekrutan/perekrutan/tagPekerja";}
        // var availableTags = ["ActionScript", "AppleScript","Asp","BASIC","C","C++","Clojure","COBOL","ColdFusion","Erlang","Fortran"];

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

<style>
    a {
        color: #000066;
    },
    span {
        border-color: #000066;
    },
    a:hover {
        background-color: #000066;
        font-color: #000000;
    }
    button {
        background-color: #000066;
        color: #ffffff;
        width: 100px;
        height: : 150px;
        border-color: #000066;
    }
    #submit:hover {
        background-color: #ff0066;
        color: #ffffff;
        border-color: #ff0066;
    }
    #reset:hover {
        background-color: #ff0066;
        color: #ffffff;
        border-color: #ff0066;
    }
    #cmbSPSLIZ {
        width: 200px;
    }
    #cmbTYPJOB {
        width: 200px;
    }
    .ui-menu-item-wrapper {
        background: #ffffb3;
        width: 220px;
        font-size: 11px;
        cursor: pointer;
    }
    /* untuk notif pekerjaan terbaru*/
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
<!-- Job List Area Start -->
<input type='hidden' name='iduser' id='iduser' value='<?=$iduser?>'>
<div class="job-listing-area pt-40 pb-40">
    <div class="container">
        <div class="row">
            <!-- Left content -->
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="row">
                    <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                            <div class="ion">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                    <path fill-rule="evenodd"  fill="rgb(27, 207, 107)" d="M7.778,12.000 L12.222,12.000 L12.222,10.000 7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                </svg>
                            </div>
                            <h4>Filter</h4>
                        </div>
                    </div>
                </div>
                <!-- method='post' action="<?= base_url() ?>dashboard/Find_Jobs"  -->
                <div class="job-category-listing mb-50">    
                    <form enctype="multipart/form-data" id='form-submit' method='post' action="<?= base_url() ?>Find_jobs/search/">
                        <div class="single-listing">

                            <div class="single-listing"><h5>Spesialisasi</h5></div>
                            <div class="single-listing">
                                <input type="text" class="form-control w-100" placeholder="Spesialisasi" name="txtSPSLIZ" id="txtSPSLIZ" value="<?=$spsliz?>">
                            </div>
                            <br>

                            <div class="single-listing"><h5>Lokasi</h5></div>
                            <div class="single-listing">
                                <input type="text" class="form-control w-100" placeholder="Lokasi" name="txtLOCKSI" id="txtLOCKSI" value="<?=$lokasi?>">
                            </div>
                            <br>

                            <div class="single-listing"><h5>Posisi</h5></div>
                            <div class="single-listing">
                                 <!-- <select class="form-control w-100" name="cmbTYPJOB" id="cmbTYPJOB" style='width: 200px;' values='<?=$typjob?>'> -->
                                    <?php
                                        // foreach($optJOBPOS as $jobposid=>$jobpos_desc){
                                        //     if($jobpos == $jobposid){
                                        //         echo "<option value='".$jobposid."' selected>".$jobpos_desc."</option>";
                                        //     }else{
                                        //         echo "<option value='".$jobposid."'>".$jobpos_desc."</option>";
                                        //     }
                                        // }
                                    ?>
                                <!-- </select> -->

                                <p><input type="checkbox" name="chkJOBPOS1" id="chkJOBPOS1" value="1" onclick="cb_checked('chkJOBPOS1')" <?=$chk1?> > Senior Manajer</p>
                                <p><input type="checkbox" name="chkJOBPOS2" id="chkJOBPOS2" value="2" onclick="cb_checked('chkJOBPOS2')" <?=$chk2?> > Manajer/Asisten Manager</p>
                                <p><input type="checkbox" name="chkJOBPOS3" id="chkJOBPOS3" value="3" onclick="cb_checked('chkJOBPOS3')" <?=$chk3?> > Supervisor/Kepala Bagian</p>
                                <p><input type="checkbox" name="chkJOBPOS4" id="chkJOBPOS4" value="4" onclick="cb_checked('chkJOBPOS4')" <?=$chk4?> > Staff (non-manajemen & non-supervisor)</p>
                            </div>
                            <!-- <br><br><br> -->

                            <div class="single-listing"><h5>Tipe Pekerjaan</h5></div>
                            <div class="single-listing">
                                 <select class="form-control w-100" name="cmbTYPJOB" id="cmbTYPJOB" style='width: 200px;' values='<?=$typjob?>'>
                                    <?php
                                        foreach($optJENISS as $jenisid=>$jenis_desc){
                                            if($typjob == $jenisid){
                                                echo "<option value='".$jenisid."' selected>".$jenis_desc."</option>";
                                            }else{
                                                echo "<option value='".$jenisid."'>".$jenis_desc."</option>";
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <br><br><br>

                            <div class="single-listing" id=gaji><h5>Gaji</h5></div>
                            <div class="single-listing" id=gaji2>
                                <input align="right" type="number" placeholder="Min" name="txtSALMIN" id="txtSALMIN" value="<?=$salmin?>" style="width:45%"> -
                                <input align="right" type="number" placeholder="Max" name="txtSALMAX" id="txtSALMAX" value="<?=$salmax?>" style="width:45%">
                                <!-- <input type="range" name="txtRANGESS" id="txtRANGESS" min="1" max="100" value=1 style="width:75%" oninput="txtRANGESS_out.value = txtRANGESS.value" step="1"> -->
                                <!-- <output id="txtRANGESS_out"></output>Jt -->
                            </div><br>

                            <div class="single-listing"><h5>Kata kunci</h5></div>
                            <div class="single-listing">
                                <input type="text" class="form-control w-100" placeholder="Kata kunci" name="txtKEYWRD" id="txtKEYWRD" value="<?=$keywrd?>">
                            </div>
                            <br>

                            <div class="form-group mt-3">
                                <center>
                                    <button href="#" type="submit" id=submit class="genric-btn primary small" onclick='jvSubmit();'>Cari</button>
                                    <input type="button" data-command="reset" name="reset" id="reset" value="Reset" onclick='jvReset();' class="genric-btn primary small">
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
                        <!-- Count of Job list End -->
                        <div id="finalResult">
                            <div class="single-listing"><h5><b><u>Daftar Pekerjaan</u></b></h5></div>
                            <?php
                                if($jml > 0){
                                    $this->load->view('v_list_job', array('data'=>$isi)); // Load file view.php dan kirim data siswanya
                                }else{
                                    $this->load->view('v_list_job_empty');
                                }
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
