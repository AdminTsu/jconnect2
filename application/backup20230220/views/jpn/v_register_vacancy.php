<?php

// $optCountry = $this->crud->getCommon(3,7);
$optCountry = $this->m_master->getComboContry(7);
// print_r($optCountry);
$optPrvince = $this->m_master->getComboProvince();
// $optPrvince = array('0'=>'-');
$optCity = $this->m_master->getComboCity_autotag();
$optBidang = $this->m_job->getBidangKerja();
?>
<script>
    $(document).ready(function() {
        $('#bdlain_field').hide();
        $("#provinsi").hide();
        $("#provinsi2").hide();
        $("#kota").hide();
        $("#kota2").hide();
        $('#submit').hide();

        $('#cmbSPSLIZ').bind('change',function(data){
            var bdgmnt = $('#cmbSPSLIZ').val();
            // alert(pkrjid);
            if(bdgmnt == 99){
                $('#bdlain_field').show();
            }else{
                $('#bdlain_field').hide();
            }
        });

        $('#txtUSRNAM').bind('blur',function(){
            if($('#txtUSRNAM').val() == ''){
                alert('ユーザー名必須!');
                return false;
            }
        });
        $('#txtPASSWD').bind('blur',function(){
            if($('#txtPASSWD').val() == ''){
                alert('パスワードが必要です!');
                return false;
            }
        });
        $('#txtCOMNAM').bind('blur',function(){
            if($('#txtCOMNAM').val() == ''){
                alert('会社名の記入が必要です!');
                return false;
            }
        });
        $('#txtNAMESS').bind('blur',function(){
            if($('#txtNAMESS').val() == ''){
                alert('PIC 名の記入が必要です!');
                return false;
            }
        });
        $('#txtEMAILS').bind('blur',function(){
            if($('#txtEMAILS').val() == ''){
                alert('会社のメールアドレスは必ずご記入ください!');
                return false;
            }
        });
        $('#txtMOBILE').bind('blur',function(){
            if($('#txtMOBILE').val() == ''){
                alert('PIC携帯電話番号の記入が必要です!');
                return false;
            }
        });
        $('#cmbCONTRY').bind('blur',function(){
            if($('#cmbCONTRY').val() == ''){
                alert('会社名 国名 所在地を記入する必要があります!');
                return false;
            }
        });
        $('#cmbPROVNC').bind('blur',function(){
            if($('#cmbPROVNC').val() == ''){
                alert('会社の地方所在地の記入が必要です!');
                return false;
            }
        });
        $('#cmbCITYSS').bind('blur',function(){
            if($('#cmbCITYSS').val() == 0){
                alert('会社名 市町村名 所在地は必ず記入してください!');
                return false;
            }
        });

    });

$(function() {

});

function jvSend(){
    var usrnam = $('#txtUSRNAM').val();
    var passwd = $('#txtPASSWD').val();
    var comnam = $('#txtCOMNAM').val();
    var namess = $('#txtNAMESS').val();
    var emails = $('#txtEMAILS').val();
    var telpon = $('#txtNOTELP').val();
    var mobile = $('#txtMOBILE').val();
    var addres = $('#txaADDRES').val();
    var contry = $('#cmbCONTRY').val();
    var provnc = $('#cmbPROVNC').val();
    var cityss = $('#cmbCITYSS').val();
    var descre = $('#txaDESCRE').val();
    // var spsliz = $('#cmbSPSLIZ').val();
    // var bdlain = $('#txtBDLAIN').val();
    // alert('1.'+usrnam+'<br>2.'+passwd+'<br>3.'+comnam+'<br>4.'+namess+'<br>5.'+emails+'<br>6.'+telpon+'<br>7.'+mobile+'<br>8.'+addres+'<br>9.'+contry+'<br>10.'+provnc+'<br>11.'+cityss+'<br>12.'+descre);
    var prm = {};
    prm['usrnam'] = usrnam;
    prm['passwd'] = passwd;
    prm['comnam'] = comnam;
    prm['namess'] = namess;
    prm['emails'] = emails;
    prm['telpon'] = telpon;
    prm['mobile'] = mobile;
    prm['addres'] = addres;
    prm['contry'] = contry;
    prm['provnc'] = provnc;
    prm['cityss'] = cityss;
    prm['descre'] = descre;
    // prm['spsliz'] = spsliz;
    // prm['bdlain'] = bdlain;

    // if(!usrnam){
    //     alert('Username harus diisi!');
    //     return false;
    // }
    //     if(!passwd){
    //         confirm('Password harus diisi!');
    //         return;
    //     }
    //     if(!comnam){
    //         confirm('Nama Perusahaan harus diisi!');
    //         return;
    //     }
    //     if(!namess){
    //         confirm('Nama PIC harus diisi!');
    //         return;
    //     }
    //     if(!emails){
    //         confirm('Email Perusahaan harus diisi!');
    //         return;
    //     }
    //     if(!mobile){
    //         confirm('Nomor Handphone PIC harus diisi!');
    //         return;
    //     }
    //     if(!contry){
    //         confirm('Lokasi Negara Perusahaan harus diisi!');
    //         return;
    //     }
    //     if(!provnc){
    //         confirm('Lokasi Provinsi Perusahaan harus diisi!');
    //         return;
    //     }
    //     if(!cityss){
    //         confirm('Lokasi Kota Perusahaan harus diisi!');
    //         return;
    //     }
    // });
    
    if((!usrnam && !passwd && !comnam && !namess && !emails && !comnam && !mobile && !contry && !provnc && !cityss)){
        alert('入力されたデータに不備がある!');
        return false;
    }else{
        var ya = confirm('サインアップを続ける?');
        if(ya){
            $.post('/register/validation_c',prm,function(data){
                alert('登録成功!');
                return;
            });
        }else{
            return false;
        }
    }
}

function jvChangePrivacy(){
    var check = $('#chkPrivacy:checked').val();
    // alert(check);
    if(check){
        $('#submit').show();
    }else{
        $('#submit').hide();
    }
}

function jvChangeContry(idcontry){
    var idcontry = idcontry;

    if(idcontry != 0){
        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "/register/comboProvince/"+idcontry, // Isi dengan url/path file php yang dituju
            data: {idcontry : $("#cmbPROVNC").val()}, // data yang akan dikirim ke file yang dituju
            dataType: "json",
            beforeSend: function(e) {
                if(e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response){ // Ketika proses pengiriman berhasil
                $("#provinsi").html(response.listProvnc).show();
            },
            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }
        });
    }else{        
        $("#provinsi").hide();
        $("#provinsi2").hide();
        $("#kota").hide();
        $("#kota2").hide();
    }
}

function jvChangeProvinsi(){
    var idcontry = $("#cmbCONTRY").val();
    var idprovnc = $("#cmbPROVNC").val();

    if(idprovnc != 0){
        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "/register/comboKota/"+idcontry+"/"+idprovnc, // Isi dengan url/path file php yang dituju
            data: {idprovnc : $("#cmbCITYSS").val()}, // data yang akan dikirim ke file yang dituju
            dataType: "json",
            beforeSend: function(e) {
                if(e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response){ // Ketika proses pengiriman berhasil
                $("#kota").html(response.listCityss).show();
            },
            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }
        });
    }else{
        $("#kota").hide();
        $("#kota2").hide();
    }
}
</script>
<hr>
<style type="text/css">
    .register {
        margin: 10px auto;
        width: 400px;
        padding: 10px;
        border: 0px solid #ccc;
        /*background: lightblue;*/
    }
    input[type=text], input[type=password], input[type=email], input[type=file] {
        margin: 5px auto;
        width: 400px;
        padding: 10px;
    }

    .ui-menu-item-wrapper {
        background: #ffffe6;
        width: 370px;
        cursor: pointer;
    }
</style>
    <?php
        $require = "<font style='color:red;'> *</font>";
    ?>
<!-- <section class="contact-section"> -->
    <div class="container">
        <div class="col-12">
            <center><h2 class="contact-title">登録フォーム<br>求人広告を掲載する</h2></center>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="/jpn/register/validation_c" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                    <div class="row">
                                <?php echo $this->session->flashdata('msg'); ?>
                                <div class="col-12">
                                    <font size=2 style="color:#cccccc">今、募集しているポジションはありますか？ 下記の簡単なフォームに会社概要とPICの連絡先をご記入ください。</font>
                                </div>
                                <div class="col-12">
                                    &nbsp;
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> ユーザー名
                                        <input class="form-control w-100" name="txtUSRNAM" id="txtUSRNAM" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ユーザー名'" placeholder="ユーザー名" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> パスワード
                                        <input class="form-control w-100" name="txtPASSWD" id="txtPASSWD" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'パスワード'" placeholder="パスワード" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> 会社名
                                        <input class="form-control w-100" name="txtCOMNAM" id="txtCOMNAM" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社名'" placeholder="貴社名" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> お名前/PIC
                                        <input class="form-control w-100" name="txtNAMESS" id="txtNAMESS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'お名前/PIC'" placeholder="お名前/PIC" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">会社電話番号
                                        <input class="form-control w-100" name="txtNOTELP" id="txtNOTELP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'お客様の電話番号'" placeholder="お客様の電話番号">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> 会社/PIC 携帯電話番号
                                        <input class="form-control w-100" name="txtMOBILE" id="txtMOBILE" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社/PIC 携帯電話番号'" placeholder="会社/PIC 携帯電話番号" required><span class="text-warning" ></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">会社住所
                                        <textarea class="form-control w-100" name="txaADDRES" id="txaADDRES" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社住所'" placeholder="会社住所"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> 会社の電子メール
                                        <input class="form-control w-100" name="txtEMAILS" id="txtEMAILS" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社の電子メール'" placeholder="会社の電子メール" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div ><?=$require?> 会社名 国名 所在地
                                     <select name="cmbCONTRY" id="cmbCONTRY" class="form-control w-100" onchange="jvChangeContry(this.value)" required>
                                        <?php
                                            foreach($optCountry as $row){
                                                echo "<option value='".$row->COM_TYPECD."'>".$row->COM_DESCRE."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div><span class="text-warning" ></span>
                                </div>

                                <div class="col-sm-6" id='provinsi'>
                                    <div class="form-group" id='provinsi2'><?=$require?>プロビンス</div>
                                </div>
                                <div class="col-sm-6" id='kota'>
                                    <div class="form-group" id='kota2'><?=$require?>都市</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">会社概要
                                        <textarea class="form-control w-100" name="txaDESCRE" id="txaDESCRE" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社概要'" placeholder="会社概要"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <center>すでにアカウントをお持ちの方 <a href="<?=base_url()?>jpn/login_web" class="genric-btn primary circle arrow">ログイン</a></center>
                            </div>
                            <div class="col-12">
                                <center><input type="checkbox" name="chkPrivacy" id="chkPrivacy" value"setuju" onchange="jvChangePrivacy()"> <font size=2 style="color:#cccccc">このフィールドにチェックを入れることで、お客様は以下を読み、同意したことになります。 <a href="<?=base_url()?>termofuse" target='_blank' style="color:#000066">利用規定</a> と <a href="<?=base_url()?>privacy" target='_blank' style="color:#000066">プライバシーポリシー</a> 私たち.</font></center>
                            </div>
                            <div class="form-group mt-3">
                                <center><button type="submit" name="submit" id="submit" onclick='jvSend();' class="button button-contactForm boxed-btn" disbaled>登録</button></center>
                            </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <p>GRAND GALAXY CITY RSA 3 No 25-27, Jakasetia, RT.001/RW.002, Pekayon Jaya, Kec. Bekasi Selatan, Kota Bekasi, Jawa Barat 17147, Indonesia</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+62 813-1234-5358</h3>
                                <p>月曜日から金曜日 09.00 WIB s/d 17.00 WIB</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>contact.us@jconnect.co.id</h3>
                                <p>お問い合わせはこちらのメールから!</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- </section> -->