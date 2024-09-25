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
        $.post('/jpn/dashboard/send/',prm,function(data){
            
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
    color: #ff3399;
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
<div class="form-style-10">
    <form enctype="multipart/form-data" method='post' action="<?= base_url() ?>jpn/dashboard/send/" id='form-submit'>
        <fieldset>
            <legend>ご意見をお聞かせください。</legend>

            <div class="col-12" align='center' style='color:#ff3399;'>
                <p>ご一読ください <a id='faq' href="<?php echo base_url(); ?>jpn/faq">Top FAQs</a> おせわになりました :</p>
            </div>

            <br>

            <?php echo $this->session->flashdata('msg'); ?>

            <label for="nama"><font size=4>名称</font></label>
            <input type="text" placeholder="お名前" name="txtNAMESS" id="txtNAMESS">

            <label for="email"><font size=4>電子メール</font></label>
            <input type="text" placeholder="メールアドレス" name="txtEMAILS" id="txtEMAILS">

            <label for="pesan"><font size=4>ご注文</font></label>
            <textarea type="text" placeholder="メッセージ" name="txtMESSAG" id="txtMESSAG" rows='5'></textarea>

            <br><br><br>

            <div class="col-12">
                <p style='color:grey;font-size: 10px;'>
                    お客様は、ご提供いただく情報が、当社が提供するサービスを行うために必要不可欠な個人情報および機密情報であることに同意するものとします。当社がお客様から収集する情報の種類は、以下のとおりです。 <a id='privacy' href="<?=base_url()?>jpn/privacy" target='_blank'>プライバシーポリシー</a> であり、現地の個人情報保護条例に沿った形でのみ利用されます。お客様は、このような情報が、お客様が当社に登録されている間、当社によって安全に収集、共有、保管されることに同意するものとします。お客様が必要とされる個人情報および機密情報を提供する用意がないと思われる場合、当社はお客様のご要望を正確に処理することができません。
                </p>
            </div><br>

            <center><input href="#" type="submit" id=submit class="genric-btn primary circle" onclick='jvSend();' value='Kirim'></center>

        </fieldset>
    </form>
</div>
<!-- ================ contact section end ================= -->