<script>

    function jvSend(){
        var usrnam = $('#username').val();
        var passwd = $('#password').val();
        var namess = $('#name').val();
        var emails = $('#email').val();
        var filbhs = $('#filbhs').val();
        var visafl = $('#visafl').val();
        var filssw = $('#filssw').val();
        var magang = $('#magang').val();
        var prm = {};
        prm['usrnam'] = usrnam;
        prm['passwd'] = passwd;
        prm['namess'] = namess;
        prm['emails'] = emails;
        prm['filbhs'] = filbhs;
        prm['visafl'] = visafl;
        prm['filssw'] = filssw;
        prm['magang'] = magang;

        if(usrnam == '' && passwd == '' && namess == '' && emails == '' && filbhs == '' && visafl == '' && filssw == '' && magang == ''){
            $("#contactForm").submit(function (e) {
                alert('Data yang anda masukan belum lengkap!');
                return false;
            });
        }else{
            $.post('/register/validation',prm,function(data){
                
            });
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
</style>
    <?php
        $require = "<font style='color:red;'> *</font>";
        ?>
<!-- <section class="contact-section"> -->
    <div class="container">
        <div class="col-12">
            <center><h2 class="contact-title">Daftar Pasang Lowongan Kerja</h2></center>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="/register/validation" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                    <div class="row">
                                <div class="col-12">
                                    <font size=2 style="color:#cccccc">Apakah Anda sedang merekrut untuk suatu posisi sekarang? Isi formulir mudah di bawah ini dengan detail kontak Anda - Anda juga dapat mengunggah spesifikasi pekerjaan. Tim HR kami akan menghubungi Anda dalam waktu 24 jam.</font>
                                </div>
                                <div class="col-12">
                                    &nbsp;
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Nama Perusahaan
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ketik Nama Perusahaan'" placeholder="Ketik Nama Perusahaan">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Nama Anda/PIC
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ketik Nama Anda'" placeholder="Ketik nama anda">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Email
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Alamat Email Anda'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">&nbsp;&nbsp;No. Handphone
                                        <input class="form-control valid" name="mobile" id="mobile" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan No.Handphone Anda'" placeholder="No.Handphone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> Lokasi Pekerjaan
                                        <input class="form-control valid" name="lokasi" id="lokasi" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Lokasi Perusahaan Anda'" placeholder="Lokasi Perusahaan">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">&nbsp;&nbsp;Upload Spesifikasi Pekerjaan
                                        <table>
                                            <td>
                                                <input class="form-control" name="filreq" id="filreq" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Spesial SKills Worker (SSW)'" placeholder="Spesial SKills Worker (SSW)">
                                            </td>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group"><?=$require?> Detail Pekerjaan
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Detail Pekerjaan'" placeholder=" Masukan Detail Pekerjaan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" disbaled>Daftar</button></center>
                            </div>
                            <?php echo $this->session->flashdata('msg'); ?>
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
                                <h3>+62-857-7046-0065</h3>
                                <p>Senin s/d Jum'at 09.00 WIB s/d 17.00 WIB</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>jconnect.official@jconnect.co.id</h3>
                                <p>Kirimi kami pertanyaanmu!</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- </section> -->