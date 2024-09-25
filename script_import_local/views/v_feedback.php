<?php

?>
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
    width: 90%;
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
    width: 550px;
    background: #000066;
    color: #FFFFFF;
    margin-bottom: 10px;
    padding: 0.5em 1em;
}
 
/* DESAIN INPUT FIELD */

label {
    color: #EA9000;
    display: block;
    font-size: 12px;
}

input[type="text"] {
    width: 670px;
    font-size: 14px;
}

input[type="text"]:hover {
    width: 670px;
    background: #e6e6e6;
    color: #000066;
    font-size: 14px;
}

input[type="text"]:focus {
    border-bottom: 1px solid #BFD48C;
    outline: none;
}

textarea {
    width: 670px;
    font-size: 14px;
}

textarea:hover {
    width: 670px;
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
    background: #EA9000;
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
    color: #EA9000;
}
#faq:hover {
    color: #8c8c8c;
}
#privacy {
    color: #EA9000;
}
#privacy:hover {
    color: #000066;
}
</style>
    <!-- ================ contact section start ================= -->
<div class="form-style-10">
    <form enctype="multipart/form-data" method='post' action="<?= base_url() ?>dashboard/send/" id='form-submit'>
        <!-- <div class="section"><span>1</span>First Name &amp; Address</div> -->
        <fieldset>
            <legend>Berikan kami Umpan Balik Anda</legend>

            <div class="col-12" align='center' style='color:#EA9000;'>
                <p>Silakan baca <a id='faq' href="<?php echo base_url(); ?>faq">Top FAQs</a> kami untuk jawaban cepat :</p>
            </div>
            <!-- <ul align='center'>
                <li style='font-size: 12px;'><b>Reset Password</b> - Mengalami kesulitan mengakses akun Anda?</li>
                <li style='font-size: 12px;'><b>Website Issue</b> - Mengalami kesulitan mengakses situs web kami?</li>
            </ul> -->

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
<!-- ================ contact section end ================= -->