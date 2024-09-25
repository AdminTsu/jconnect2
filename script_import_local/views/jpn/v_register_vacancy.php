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
                alert('入力したデータに不備があります!');
                return false;
            });
        }else{
            $.post('/jpn/register/validation',prm,function(data){
                
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
            <center><h2 class="contact-title">求人情報一覧</h2></center>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="/jpn/register/validation" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
                    <div class="row">
                                <div class="col-12">
                                    <font size=2 style="color:#cccccc">今、募集しているのですか？以下のフォームに必要事項をご記入の上、送信してください。人事部より24時間以内にご連絡いたします。</font>
                                </div>
                                <div class="col-12">
                                    &nbsp;
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> 会社名
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社名を入力する'" placeholder="会社名を入力する">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> お名前/ご担当者名
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '名前/担当者を入力する'" placeholder="名前/担当者を入力する">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> 電子メール
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'メールアドレスを入力してください'" placeholder="メールアドレスを入力してください">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">&nbsp;&nbsp;携帯電話番号
                                        <input class="form-control valid" name="mobile" id="mobile" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = '携帯電話番号を入力する'" placeholder="携帯電話番号を入力する">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><?=$require?> 勤務地
                                        <input class="form-control valid" name="lokasi" id="lokasi" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社所在地を入力してください'" placeholder="会社所在地を入力してください">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">&nbsp;&nbsp;ジョブ仕様のアップロード
                                        <table>
                                            <td>
                                                <input class="form-control" name="filreq" id="filreq" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ジョブ仕様のアップロード'" placeholder="ジョブ仕様のアップロード">
                                            </td>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group"><?=$require?> 業務内容
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = '職務内容 入力'" placeholder=" 職務内容 入力"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" disbaled>登録</button></center>
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
                                <p>ご質問をお寄せください!</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- </section> -->