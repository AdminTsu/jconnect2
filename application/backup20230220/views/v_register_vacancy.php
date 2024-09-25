<?php

// $optCountry = $this->crud->getCommon(3,7);
$optCountry = $this->m_master->getComboContry(7);
// print_r($optCountry);
$optPrvince = $this->m_master->getComboProvince();
// $optPrvince = array('0'=>'-');
$optCity = $this->m_master->getComboCity_autotag();
$optBidang = $this->m_job->getBidangKerja();
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>
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
                alert('Username harus diisi!');
                return false;
            }
        });
        $('#txtPASSWD').bind('blur',function(){
            if($('#txtPASSWD').val() == ''){
                alert('Password harus diisi!');
                return false;
            }
        });
        $('#txtCOMNAM').bind('blur',function(){
            if($('#txtCOMNAM').val() == ''){
                alert('Nama Perusahaan harus diisi!');
                return false;
            }
        });
        $('#txtNAMESS').bind('blur',function(){
            if($('#txtNAMESS').val() == ''){
                alert('Nama PIC harus diisi!');
                return false;
            }
        });
        $('#txtEMAILS').bind('blur',function(){
            if($('#txtEMAILS').val() == ''){
                alert('Email Perusahaan harus diisi!');
                return false;
            }
        });
        $('#txtMOBILE').bind('blur',function(){
            if($('#txtMOBILE').val() == ''){
                alert('Nomor Handphone PIC harus diisi!');
                return false;
            }
        });
        $('#cmbCONTRY').bind('blur',function(){
            if($('#cmbCONTRY').val() == ''){
                alert('Lokasi Negara Perusahaan harus diisi!');
                return false;
            }
        });
        $('#cmbPROVNC').bind('blur',function(){
            if($('#cmbPROVNC').val() == ''){
                alert('Lokasi Provinsi Perusahaan harus diisi!');
                return false;
            }
        });
        $('#cmbCITYSS').bind('blur',function(){
            if($('#cmbCITYSS').val() == 0){
                alert('Lokasi Kota Perusahaan harus diisi!');
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
    
    // if((!usrnam && !passwd && !comnam && !namess && !emails && !comnam && !mobile && !contry && !provnc && !cityss)){
    //     alert('Data yang anda masukan belum lengkap!');
    //     return false;
    // }else{
        var ya = confirm('Lanjutkan mendaftar?');
        if(ya){
            $.post('/register/validation_c',prm,function(data){
                alert('Pendaftaran Berhasil!');
                return;
            });
        }else{
            return false;
        }
    // }
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
            <center><h2 class="contact-title">Form Pendaftaran<br>Pasang Iklan Lowongan Kerja</h2></center>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <form class="form-contact contact_form" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                    <?php echo $this->session->flashdata('msg'); ?>
                    <div class="row">
                                <div class="col-12">
                                    <font size=2 style="color:#cccccc">Apakah Anda sedang merekrut untuk suatu posisi sekarang? Isi formulir mudah di bawah ini dengan detail perusahaan dan kontak PIC Anda.</font>
                                </div>
                                <div class="col-12">
                                    &nbsp;
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Username
                                        <input class="form-control w-100" name="txtUSRNAM" id="txtUSRNAM" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" placeholder="Username Anda" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Kata Sandi
                                        <input class="form-control w-100" name="txtPASSWD" id="txtPASSWD" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Sandi'" placeholder="Kata Sandi Anda" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Nama Perusahaan
                                        <input class="form-control w-100" name="txtCOMNAM" id="txtCOMNAM" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Perusahaan'" placeholder="Nama Perusahaan Anda" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Nama Anda/PIC
                                        <input class="form-control w-100" name="txtNAMESS" id="txtNAMESS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Anda'" placeholder="Nama Anda" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">No. Telp Perusahaan
                                        <input class="form-control w-100" name="txtNOTELP" id="txtNOTELP" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telepone Anda'" placeholder="No. Telepone Anda">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> No. Handphone Perusahaan/PIC
                                        <input class="form-control w-100" name="txtMOBILE" id="txtMOBILE" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No.Handphone Anda'" placeholder="No.Handphone Anda" required><span class="text-warning" ></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">Alamat Perusahaan
                                        <textarea class="form-control w-100" name="txaADDRES" id="txaADDRES" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Perusahaan'" placeholder="Alamat Perusahaan Anda"></textarea>
                                    </div>
                                </div>

                                <!-- <div class="col-sm-12">
                                    <div ><?=$require?> Bidang Industri
                                     <select name="cmbSPSLIZ" id="cmbSPSLIZ" class="form-control w-100" required>
                                        <?php
                                            foreach($optBidang as $key=>$val){
                                                echo "<option value='".$key."'>".$val."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-12" id='bdlain_field'>
                                    <div class="form-group">Bidang Lain
                                        <input class="form-control w-100" name="txtBDLAIN" id="txtBDLAIN" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Lain'" placeholder="Bidang Lain" required>
                                    </div><span class="text-warning" ></span>
                                </div> -->
                                
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Email Perusahaan
                                        <input class="form-control w-100" name="txtEMAILS" id="txtEMAILS" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email Perusahaan Anda'" placeholder="Email Perusahaan Anda" required>
                                    </div><span class="text-warning" ></span>
                                </div>
                                <div class="col-sm-6">
                                    <div ><?=$require?> Lokasi Negara Perusahaan
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
                                    <div class="form-group" id='provinsi2'><?=$require?>Provinsi</div>
                                </div>

                                <!-- <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Kota
                                        <input class="form-control w-100" name="txtCITYSS" id="txtCITYSS" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lokasi Kota Perusahaan Anda'" placeholder=" Lokasi Kota Perusahaan Anda" required>
                                    </div><span class="text-warning" ></span>
                                </div> -->
                                <div class="col-sm-6" id='kota'>
                                    <div class="form-group" id='kota2'><?=$require?>Kota</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">Deskripsi Singkat Perusahaan
                                        <textarea class="form-control w-100" name="txaDESCRE" id="txaDESCRE" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deskripsi Singkat Perusahaan'" placeholder="Deskripsi Singkat Perusahaan Anda"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <center>Sudah punya akun <a href="<?=base_url()?>login_web" class="genric-btn primary circle arrow">Masuk</a></center>
                            </div>
                            <div class="col-12">
                                <center><input type="checkbox" name="chkPrivacy" id="chkPrivacy" value"setuju" onchange="jvChangePrivacy()"> <font size=2 style="color:#cccccc">Dengan mencentang kolom ini, berarti anda membaca dan menyetujui <a href="<?=base_url()?>termofuse" target='_blank' style="color:#000066">Kebijakan Penggunaan</a> dan <a href="<?=base_url()?>privacy" target='_blank' style="color:#000066">Kebijakan Privasi</a> kami.</font></center>
                            </div>
                            <div class="form-group mt-3">
                                <center><button type="submit" name="submit" id="submit" onclick='jvSend();' class="button button-contactForm boxed-btn" disbaled>Daftar</button></center>
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
                                <p>Senin s/d Jum'at 09.00 WIB s/d 17.00 WIB</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>contact.us@jconnect.co.id</h3>
                                <p>Kirimi kami pertanyaanmu melalui email ini!</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- </section> -->