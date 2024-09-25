<?php

$optCountry = $this->crud->getCommon(3,7);
$optPrvince = $this->m_master->getComboProvince();
$optCity = $this->m_master->getComboCity_autotag();
$optBidang = $this->m_job->getBidangKerja_autotag();
$arrJOBS = $this->m_job->getJobUpdate();
$optJENISS = array(
    '0'=>'何れも &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
    '1'=>'契約 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
    '2'=>'滞在 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
);
$optEXPRNC = array('0'=>'何れも','1'=>'1-2 年','2'=>'2-3 年','3'=>'3-6 年','4'=>'> 6 年');

if($keywrd == ''){
    $keywrd = '';
}

if($lokasi == ''){
    $lokasi = '';
}

if($spsliz == ''){
    $spsliz = '';
}

?>
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
<script>
    $(document).ready(function(){
        $('#submit').bind('click',function(data){
            if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() && $('#txtSPSLIZ').val() && $('#cmbTYPJOB').val() == 0){
                alert('フィルターがない！');
                return;
            }
        });
        
        $('#reset').bind('click',function(data){
            $('#txtKEYWRD').val('');
            $('#txtLOCKSI').val('');
            $('#txtSPSLIZ').val('');
            $('#cmbTYPJOB').val(0);
        });
    });

    function jvSubmit(){
        var KEYWRD = $('#txtKEYWRD').val();
        var LOCKSI = $('#txtLOCKSI').val();
        var SPSLIZ = $('#txtSPSLIZ').val();
        var TYPJOB = $('#cmbTYPJOB').val();
        var prm = {};
        prm['keywrd'] = KEYWRD;
        prm['lokasi'] = LOCKSI;
        prm['spsliz'] = SPSLIZ;
        prm['typjob'] = TYPJOB;

        // alert(KEYWRD+'~'+LOCKSI+'~'+SPSLIZ+'~'+TYPJOB);
        // return;

        if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() == '' && $('#txtSPSLIZ').val() == '' && $('#cmbTYPJOB').val() == 0){
            $("#form-submit").submit(function (e) {
                alert('フィルターがない！');
                return false;
            });
        }else{
            $.post('/find_jobs/search/',prm,function(data){
                // alert(keyword);
                // return;
            });
        }
    }
    
    function jvReset(){
        var KEYWRD = $('#txtKEYWRD').val();
        var LOCKSI = $('#txtLOCKSI').val();
        var SPSLIZ = $('#txtSPSLIZ').val();
        var TYPJOB = $('#cmbTYPJOB').val();
        var prm = {};
        prm['keywrd'] = KEYWRD;
        prm['lokasi'] = LOCKSI;
        prm['spsliz'] = SPSLIZ;
        prm['typjob'] = TYPJOB;

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
        width: 300px;
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
                    <form enctype="multipart/form-data" id='form-submit' method='post' action="<?= base_url() ?>jpn/find_jobs/search/">
                        <div class="single-listing">

                            <div class="single-listing"><h5>専門分野</h5></div>
                            <div class="single-listing">
                                <input type="text" placeholder="専門分野" name="txtSPSLIZ" id="txtSPSLIZ" value="<?=$spsliz?>">
                            </div>
                            <br>

                            <div class="single-listing"><h5>所在地</h5></div>
                            <div class="single-listing">
                                <input type="text" placeholder="所在地" name="txtLOCKSI" id="txtLOCKSI" value="<?=$lokasi?>">
                            </div>
                            <br>

                            <div class="single-listing"><h5>職種</h5></div>
                            <div class="single-listing">
                                 <select name="cmbTYPJOB" id="cmbTYPJOB" style='width: 200px;' values='<?=$typjob?>'>
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
                            </div><br><br>

                            <div class="single-listing"><h5>キーワード</h5></div>
                            <div class="single-listing">
                                <input type="text" placeholder="キーワード" name="txtKEYWRD" id="txtKEYWRD" value="<?=$keywrd?>">
                            </div>

                            <div class="form-group mt-3">
                                <center>
                                    <button href="#" type="submit" id=submit class="genric-btn primary small" onclick='jvSubmit();'>検索</button>
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
                            <?php
                                if($jml > 0){
                                    $this->load->view('jpn/v_list_job', array('data'=>$isi)); // Load file view.php dan kirim data siswanya
                                }else{
                                    $this->load->view('jpn/v_list_job_empty');
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
