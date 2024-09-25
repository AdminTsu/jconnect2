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
    '0'=>'未選択 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '1'=>'シニアマネージャー &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '2'=>'マネジャー &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '3'=>'管理職 &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '4'=>'スタッフ &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'
);
$optJENISS = array(
    '0'=>'何れも &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '1'=>'契約 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '2'=>'滞在 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'
);
$optEXPRNC = array('0'=>'何れも','1'=>'1-2 年','2'=>'2-3 年','3'=>'3-6 年','4'=>'> 6 年');
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
            if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() == '' && $('#txtSPSLIZ').val() == '' && $('#cmbJOBPOS').val() == 0 && $('#cmbTYPJOB').val() == 0 && $('#txtSALMIN').val() == 0 && $('#txtSALMAX').val() == 0){
                alert('フィルターなし!');
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

        if($('#txtKEYWRD').val() == '' && $('#txtLOCKSI').val() == '' && $('#txtSPSLIZ').val() == '' && $('#cmbTYPJOB').val() == 0 && $('#cmbTYPJOB').val() == 0 && $('#txtSALMIN').val() == 0 && $('#txtSALMAX').val() == 0){
            $("#form-submit").submit(function (e) {
                alert('フィルターなし!');
                return false;
            });
        }else{
            $.post('/jpn/Find_jobs/search/',prm,function(data){
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

                                    <h1 style="color:#000066;padding: 50px;font-family: 'ヒラギノ角ゴ Pro W3', 'Hiragino Kaku Gothic Pro',Osaka, 'メイリオ';"><br>日本での就労経験を活かして、次のステップへ。</h1>
                                </div>
                            </div>

                            <div class="form-style-10">
                                <form enctype="multipart/form-data" id='form-submit' method='post' action="<?= base_url() ?>jpn/Find_jobs/search/">
                                    <fieldset>
                                        <legend>求人情報検索</legend>

                                        <label for="spsliz"><font size=4>専門分野</font></label>
                                        <input type="text" class="form-control w-100" placeholder="タイプ別専門性" name="txtSPSLIZ" id="txtSPSLIZ">
                                        <!-- <select name="cmbSPSLIZ" id="cmbSPSLIZ" style="width: 200px; height:15px">
                                            <?php
                                                foreach($optBidang as $bidangid=>$bidang_desc){
                                                    echo "<option value='".$bidangid."'>".$bidang_desc."</option>";
                                                }
                                            ?>
                                        </select> -->

                                        <!-- <label for="lokasi"><font size=4>Lokasi</font></label>
                                        <input type="text" name="lokasi" id="lokasi" placeholder="Isi Lokasi Tempat Kerja" /> -->
                                        <label for="typjob"><font size=4>所在地</font></label>
                                        <input type="text" class="form-control w-100" placeholder="タイプ 場所" name="txtLOCKSI" id="txtLOCKSI">
                                        <!-- <select name="cmbLCTION" id="cmbLCTION" style="width: 200px; height:15px">
                                            <?php
                                                foreach($cmbLCTION as $lctionid=>$lction_desc){
                                                    echo "<option value='".$lctionid."'>".$lction_desc."</option>";
                                                }
                                            ?>
                                        </select> -->

                                        <label for="typjob"><font size=4>ポジション</font></label>
                                         <select name="cmbJOBPOS" id="cmbJOBPOS" class="form-control w-100">
                                            <?php
                                                foreach($optJOBPOS as $jobposid=>$jobpos_desc){
                                                    echo "<option value='".$jobposid."'>".$jobpos_desc."</option>";
                                                }
                                            ?>
                                        </select><br><br>
                                        
                                        <label for="typjob"><font size=4>職種</font></label>
                                         <select name="cmbTYPJOB" id="cmbTYPJOB" class="form-control w-100">
                                            <?php
                                                foreach($optJENISS as $jenisid=>$jenis_desc){
                                                    echo "<option value='".$jenisid."'>".$jenis_desc."</option>";
                                                }
                                            ?>
                                        </select><br><br>
                                        
                                        <label for="gaji"><font size=4>給与の範囲</font></label>
                                        <input type="number" placeholder="最小" name="txtSALMIN" id="txtSALMIN" style="width:47%"> - 
                                        <input type="number" placeholder="マックス" name="txtSALMAX" id="txtSALMAX" style="width:47%">
                                        <br>

                                        <label for="keywrd"><font size=4>キーワード</font></label>
                                        <input type="text" class="form-control w-100" placeholder="キーワード" name="txtKEYWRD" id="txtKEYWRD">

                                        <!-- <label for="gaji"><font size=4>Range Gaji</font></label>
                                        <input type="number" placeholder="Min" name="txtSALMIN" id="txtSALMIN" style="width:47%"> -
                                        <input type="number" placeholder="Max" name="txtSALMAX" id="txtSALMAX" style="width:47%">

                                        <br><br> -->

                                        <!-- <br><center><input type="submit" name="cari" value="Cari" class="genric-btn primary circle" /></center> -->
                                        <br>
                                        <center><button href="#" type="submit" id=submit class="genric-btn primary circle" onclick='jvSearch();'>検索</button></center>
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
                <div class="section-top-border">
                    <div class="section-tittle white-text text-center">
                        <h2 style='color:#000066;font-family: 'ヒラギノ角ゴ Pro W3', 'Hiragino Kaku Gothic Pro',Osaka, 'メイリオ', Meiryo, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;'>私たちの簡単な紹介</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <blockquote class="generic-blockquote" style="font-family: 'ヒラギノ角ゴ Pro W3', 'Hiragino Kaku Gothic Pro',Osaka, 'メイリオ', Meiryo, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;">
                                “<b>JConncet</b>とは弊サービスと協力して頂けるインドネシア企業様と、日本での経験及び資格を有する就職希望者をつなげるオンラインサービスです。<br>技能実習生や特定技能性は、多くの人が日本での就労を終えてインドネシアに帰国後、就職先が見つからず就職ができない、起業するなどが多いです。<br>インドネシアにある企業とのマッチングがうまくいっていない理由としましては、人材紹介会社の手数料・選考基準が日本語能力で3年間〜5年間日本で働いた経験などは評価に入らず紹介対象者にならないなどがあると思います。<br>JConnectは、日本での就労経験者に対してインドネシアでキャリアアップできる環境を支援します。採用企業様・応募者からは費用は頂かず、双方の「つながる」に尽力していきます。<br><br>
                                <center><a href="<?=base_url()?>jpn/dashboard/about" class="genric-btn primary small"  style='border-radius: 10px;'>続きを読む »</a></center>
                            </blockquote>
                        </div>
                    </div>

                    <!-- <div class="section-tittle white-text text-center">
                        <h2 style='color:#000066'>私たちの目的</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">JConnect</h4>
                                <p>すべての関係者にとってより有益で、信頼できるメディア・パートナーになりえます。</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">会社概要</h4>
                                <p>証明書、経験、専門知識を持つ、より適切な候補者を得ることができる。</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">労働者</h4>
                                <p>勤務期間が終了し、インドネシアに戻ってキャリアを積みたい労働者のために、より簡単にすることができます。</p>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="section-tittle white-text text-center">
                        <h2 style='color:#000066'>私たちの仕事</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect 1.jpg" alt="Bidang Taking" title="Bidang Taking" class="img-fluid" style='text-align: center;padding-top: 80px;'>
                        </div>
                        <div class="col-md-4">
                            <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect 3.jpg" alt="Bidang Perakitan" title="Bidang Perakitan" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect 5.jpg" alt="Bidang Konstruksi" title="Bidang Konstruksi" class="img-fluid" style='text-align: center;padding-top: 80px;'>
                        </div>
                        <div class="col-md-4">
                            <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect 7.jpg" alt="Bidang Elektro" title="Bidang Elektro" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect 4.jpg" alt="Bidang Konstruksi" title="Bidang Konstruksi" class="img-fluid" style='text-align: center;padding-top: 80px;'>
                        </div>
                        <div class="col-md-4">
                            <img src="<?=base_url()?>resources/img/gallery/img-for-jconnect 2.jpg" alt="Bidang Pengolahan Makanan" title="Bidang Pengolahan Makanan" class="img-fluid">
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
        <!-- End Align Area -->

        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-50 pb-50" data-background="<?=base_url()?>resources/BG/bg4.jpg">
            <div class="container">

                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>応募方法</span>
                            <!-- <h2> Bagaimana cara kerjanya</h2> -->
                            <h2 style='color:#000066'>仕組み</h2>
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
                               <h5>1. 空室検索</h5>
                               <p>まずは職種や専門性など、自分が興味のあるタイプの検索をすることから始めてみましょう。その場合は、好きな場所を選ぶことができます。</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. 募集要項に従って応募する</h5>
                               <p>募集職種、経験、能力に応じて応募してください。そして、各社の要求に応じて、添付書類を作成する。</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. 就職する</h5>
                               <p>JConnect.co.idと連携している企業で、あなたの興味・能力・経験に合った仕事を見つけてください。</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- How  Apply Process End-->

        <section class="featured-job-area feature-padding">
            <div class="container">
                <div class="section-tittle white-text text-center">
                    <h2 style='color:#000066'>私たちの仕事</h2>
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
                    <!-- <div class="col-md-4">
                        <img src="resources/img/gallery/img-for-jconnect 1.jpg" alt="Bidang Taking" title="Bidang Taking" class="img-fluid" style='text-align: center;padding-top: 80px;'>
                    </div> -->
                </div>

            </div>
        </section>
        <!-- Featured_job_end -->
        
        <!-- Online CV Area Start -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="<?=base_url()?>resources/BG/bg13.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1"><font style='color:#ff3399;'>ベストサービス・フラッグシップ・パッケージ</font></p>
                            <p class="pera2"> オンライン・レジュメで差をつける</p>
                            <a href="<?=base_url()?>jpn/register" class="border-btn2 border-btn4">履歴書をアップロードする</a>
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
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>現在の職業</span>
                            <h2>最新の求人情報</h2>
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
                                
                                if($thn >= 00){
                                    if($bulans == 0){
                                        if($hariss == 0){
                                            if($jamnya == 0){
                                                $durasi = "$menits 議事録 $detiks 秒 前 <h5  class=\"blink\" data-text=\"新しい投稿\" contenteditable>新しい投稿</h5>";
                                            }else{
                                                $durasi = "$jamnya 時間 $menits 議事録 $detiks 秒 前 <h5  class=\"blink\" data-text=\"New Posting\" contenteditable>新しい投稿</h5>";
                                            }
                                        }else{
                                            $durasi = "$hariss 日 $jamnya 時間 前";
                                        }
                                    }else{
                                        $durasi = "$bulans 前 $hariss 日 前";
                                    }
                                }else{
                                    $durasi = "$thn 年 $bulans 前 前";
                                }

                                if($status == 1){
                                    $status = 'コントラクト';
                                }else{
                                    $status = 'ステイ';
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
                                        <a href="<?=base_url()?>jpn/dashboard/Find_Jobs_detail/<?=$idents?>"><h4><?=$titles?></h4></a>
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
                                    <span><br>広告掲載期間 <?=$durasi?> </span>
                                </div>
                            </div>
                        <?php
                            }else{
                        ?>
                                <div class="single-job-items mb-30">
                                    <div class='items-link f-right'>
                                        <span><p>申し訳ございませんが、最近の求人データはございません。</p> </span>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <center><a href="<?=base_url()?>jpn/Find_jobs" class="genric-btn primary circle">もっと見る »</a></center>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->
        
        <!-- Submit a Vacancy or Register as a Candidate  Start -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="<?=base_url()?>resources/BG/bg16.jpg">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1"><font style='color:#ff3399;'>あなたに似合うのはどれ？</font></p>
                            <h2 style='color:white;'> 今すぐ参加する</h2>
                            <a href="<?=base_url()?>jpn/register/RegisterForm_vacancy" class="border-btn2 border-btn4">求人情報を送信する</a>
                            <a href="<?=base_url()?>jpn/register" class="border-btn2 border-btn4">候補者として登録する</a>
                            <!-- <a href="<?=base_url()?>jpn/register" class="border-btn2 border-btn4">今すぐ登録する</a> -->
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
                            <h2>パートナー企業</h2>
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
                                    <h3><a href="#">日本語・職業訓練センター</a></h3>
                                    <a href="https://www.tsubame-jltc.com" target="_blank" class="more-btn">続きを読む »</a>
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
                                    <h3><a href="#">スナック菓子やビスケットなどの加工を行う会社です。</a></h3>
                                    <a href="https://www.glico.com/id/" target="_blank" class="more-btn">続きを読む »</a>
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