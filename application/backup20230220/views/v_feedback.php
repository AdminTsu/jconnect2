<?php

?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>
<script>
function jvSend(){
    var NAMESS = $('#txtNAMESS').val();
    var EMAILS = $('#txtEMAILS').val();
    var MESSAG = $('#txtMESSAG').val();
    var prm = {};
    prm['namess'] = NAMESS;
    prm['emails'] = EMAILS;
    prm['messag'] = MESSAG;

    if($('#txtNAMESS').val() == '' && $('#txtEMAILS').val() == '' && $('#txtMESSAG').val() == ''){
        $("#form-submit").submit(function (e) {
            alert('Data yang anda masukan belum lengkap!');
            return false;
        });
    }else{
        $.post('/dashboard/send/',prm,function(data){
            
        });
    }
}
</script>
<style type="text/css">
.form-style-10{
    /*position: fixed;*/
    width: 100%;
    /*max-width:450px;*/
    padding:30px;
    margin:40px auto;
    background: #e6f2ff;
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
    width: 80%;
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
    width: 80%;
    font-size: 14px;
}

input[type="text"]:hover {
    width: 80%;
    background: #e6e6e6;
    color: #000066;
    font-size: 14px;
}

input[type="text"]:focus {
    border-bottom: 1px solid #BFD48C;
    outline: none;
}

textarea {
    width: 80%;
    font-size: 14px;
}

textarea:hover {
    width: 80%;
    background: #e6e6e6;
    color: #000066;
    font-size: 14px;
}

textarea:focus {
    border-bottom: 1px solid #BFD48C;
    outline: none;
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
    background: #ffffb3;
}

#faq {
    color: #ff3399;
}
#faq:hover {
    color: #8c8c8c;
}
#privacy {
    color: #ff3399;
}
#privacy:hover {
    color: #000066;
}
</style>
    <!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="form-style-10">
                <form enctype="multipart/form-data" method='post' action="<?= base_url() ?>dashboard/send/" id='form-submit'>
                    <!-- <div class="section"><span>1</span>First Name &amp; Address</div> -->
                    <fieldset>
                        <legend>Umpan Balik Anda</legend>

                        <div class="col-12" align='center' style='color:#ff3399;'>
                            <p>Silakan baca <!-- <a id='faq' href="<?php echo base_url(); ?>faq"> -->Top FAQs<!-- </a> --> kami untuk jawaban cepat :</p>
                        </div>

                        <br>

                        <?php echo $this->session->flashdata('msg'); ?>

                        <label for="nama"><font size=4>Nama</font></label>
                        <input type="text" placeholder="Nama Anda" name="txtNAMESS" id="txtNAMESS">

                        <label for="email"><font size=4>Email</font></label>
                        <input type="text" placeholder="Email Anda" name="txtEMAILS" id="txtEMAILS">

                        <label for="pesan"><font size=4>Pesan</font></label>
                        <textarea type="text" placeholder="Pesan Anda" name="txtMESSAG" id="txtMESSAG" rows='5'></textarea>

                        <br><br><br>

                        <div class="col-12">
                            <p style='color:grey;font-size: 10px;'>
                                Dengan ini Anda setuju bahwa informasi yang Anda berikan bersifat pribadi dan sensitif yang penting bagi kami untuk menyediakan layanan yang kami tawarkan. Jenis-jenis informasi yang kami kumpulkan dari Anda tercantum dengan tepat dalam <a id='privacy' href="<?=base_url()?>privacy" target='_blank'>Kebijakan Privasi</a> kami dan hanya akan digunakan bersama-sama dengan peraturan privasi lokal. Anda dengan ini menyetujui informasi tersebut dikumpulkan, dibagikan, dan disimpan dengan aman oleh kami selama masa pendaftaran Anda dengan kami. Jika Anda merasa bahwa Anda tidak siap untuk memberikan informasi pribadi dan sensitif yang dibutuhkan, kami tidak akan dapat memproses permintaan Anda secara akurat.
                            </p>
                        </div><br>

                        <center><input href="#" type="submit" id=submit class="genric-btn primary circle" onclick='jvSend();' value='Kirim'></center>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <section class="contact-section">
    <div class="container">
        <div class="form-style-10">
            <div class="row">
                <div class="col-12">
                    <center><h2 class="contact-title">Berikan kami Umpan Balik Anda</h2></center>
                </div>
                <div class="col-12" align='center' style='color:#ff3399;'>
                    <p>Silakan baca <a id='faq' href="<?php echo base_url(); ?>faq">Top FAQs</a> kami untuk jawaban cepat :</p>
                </div>
                <?php echo $this->session->flashdata('msg'); ?>
                <div class="col-lg-12">
                    <form class="form-contact contact_form" action="<?= base_url() ?>dashboard/send/" method="get" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <select name="cmbCATGRY" id="cmbCATGRY">
                                    <?php
                                        foreach($optCATGRY as $catgryid=>$catgry_desc){
                                            echo "<option value='".$catgryid."'>".$catgry_desc."</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ketik Nama Anda'" placeholder="Ketik nama anda">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Alamat Email Anda'" placeholder="Masukan Email anda">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Subject Anda'" placeholder="Masukan Subject Anda">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Pesan'" placeholder=" Masukan Pesan anda"></textarea>
                                </div>
                            </div>
                        </div>
                        <br><br><br>

                        <div class="col-12">
                            <p style='color:grey;font-size: 10px;'>
                                Dengan ini Anda setuju bahwa informasi yang Anda berikan bersifat pribadi dan sensitif yang penting bagi kami untuk menyediakan layanan yang kami tawarkan. Jenis-jenis informasi yang kami kumpulkan dari Anda tercantum dengan tepat dalam <a id='privacy' href="<?=base_url()?>privacy" target='_blank'>Kebijakan Privasi</a> kami dan hanya akan digunakan bersama-sama dengan peraturan privasi lokal. Anda dengan ini menyetujui informasi tersebut dikumpulkan, dibagikan, dan disimpan dengan aman oleh kami selama masa pendaftaran Anda dengan kami. Jika Anda merasa bahwa Anda tidak siap untuk memberikan informasi pribadi dan sensitif yang dibutuhkan, kami tidak akan dapat memproses permintaan Anda secara akurat.
                            </p>
                        </div><br>
                        <div class="form-group mt-3">
                            <center><button type="submit" class="button button-contactForm boxed-btn" onclick='jvSend();'>Kirim</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ================ contact section end ================= -->