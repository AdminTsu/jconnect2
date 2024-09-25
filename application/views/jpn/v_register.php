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
    
    .progress,.progress:hover {
        background: transparent;
        padding: 0;
        height: 50px;
        width: 68px;
    }

    #progress-bar {
        background: #000066;
        display: block;
        height: 50px;
        width: 0;
    }
</style>
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
<script type='text/javascript'>

    $(document).ready(function() {
        $('#submit').hide();

        $('#passwrd2').bind('change',function(data){
            var password = $('#password').val();
            var passwrd2 = $('#passwrd2').val();
            
            if(passwrd2 != password){
                alert('入力したパスワードが違うので、もう一度入力してください!');
                $('#passwrd2').val('');
                $('#passwrd2').focus();
                return;
            }
        });
        
        $('#username').bind('change',function(e){
            var usrnam = $('#username').val();
            var prm    = {};
            prm['usrnam'] = usrnam;

            $.post('/jpn/register/cekUsername/',prm,function(data){
                if(data == 1){
                    alert('ユーザー名はすでに使用されています。別のユーザー名を使用してください!');
                    $('#username').val('');
                    $('#username').focus();
                    return;
                }
            });
        });
    });
    
    var progress = 0;
    
    function startProgress()
    {
        // change button to progress button, and add progress bar
        // $('#submit').addClass('progress').html('<button id="progress-bar">Progress..</button>');
        $('#submit').addClass('progress').html('<div id="preloader-active"><div class="preloader d-flex align-items-center justify-content-center" style="opacity: 0.6;"><div class="preloader-inner position-relative"><div class="preloader-circle"></div><div class="preloader-img pere-text" style=""><img src="<?=base_url()?>resources/assets/img/logo/Logo_jconnect_new.png" alt=""></div></div></div></div>');

        // update progress bar every 0.5 second
        setInterval(function(){
            $('#progress-bar').width(progress);
            progress++;
        }, 500);
    } 
    
    function jvChangePrivacy(){
        var check = $('#chkPrivacy:checked').val();
        // alert(check);
        if(check){
            // alert('checked');
            $('#submit').show();
        }else{
            // alert('not checked');
            $('#submit').hide();
        }
    }
    
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
    <?php
        $optStatus = array(
            '0'=>'ステータス選択 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
            '1'=>'日本への出発を間近に控えて &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
            '2'=>'すでに日本では &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
            '3'=>'日本から帰国 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'
        );

        $require = "<font style='color:red;'> *</font>";
    ?>
    
<div class="row">
    <div class="col-12">
        <center><h2 class="contact-title">新規アカウント作成</h2></center>
    </div>
    <div class="col-lg-12">
        <form class="form-contact contact_form" action="/jpn/register/validation" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="register">
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> ユーザー名
                        <table>
                            <td>
                                <input class="form-control" name="username" id="username" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ユーザー名'" placeholder="ユーザー名" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> パスワード
                        <table>
                            <td>
                                <input class="form-control valid" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'パスワード'" placeholder="パスワード" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> パスワードの再発行
                        <table>
                            <td>
                                <input class="form-control valid" name="passwrd2" id="passwrd2" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'パスワードの再発行'" placeholder="パスワードの再発行" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> 氏名（ふりがな
                        <table>
                            <td>
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '氏名（ふりがな'" placeholder="氏名（ふりがな" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> 電子メール
                        <table>
                            <td>
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'メールアドレス'" placeholder="メールアドレス" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> 日本語レベル認定証
                        <table>
                            <td>
                                <input class="form-control" name="filbhs" id="filbhs" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = '日本語レベル認定証'" placeholder="日本語レベル認定証" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> 日本滞在中のビザ申請用写真
                        <table>
                            <td>
                                <input class="form-control" name="visafl" id="visafl" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = '日本滞在中のビザ申請用写真'" placeholder="日本滞在中のビザ申請用写真" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> スペシャルスキルワーカー（SSW）認定証
                        <table>
                            <td>
                                <input class="form-control" name="filssw" id="filssw" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'スペシャルスキルワーカー（SSW）認定証'" placeholder="スペシャルスキルワーカー（SSW）認定証" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> インターンシップ修了証（JITCO/OTIT）
                        <table>
                            <td>
                                <input class="form-control" name="magang" id="magang" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'インターンシップ修了証（JITCO/OTIT）'" placeholder="インターンシップ修了証（JITCO/OTIT）" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> 現在の状況
                        <table>
                            <td>
                                <select name="cmbSTATUS" id="cmbSTATUS" class="form-control valid" required>
                                <?php
                                    foreach($optStatus as $statusid=>$status_desc){
                                        echo "<option value='".$statusid."'>".$status_desc."</option>";
                                    }
                                ?>
                                </select>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="col-12">
                    <center>すでにアカウントをお持ちの方 <a href="<?=base_url()?>jpn/login_web" class="genric-btn primary circle arrow">ログイン</a></center>
                </div>
                <div class="col-12">
                    <center><input type="checkbox" name="chkPrivacy" id="chkPrivacy" value"setuju" onchange="jvChangePrivacy()"> <font size=2 style="color:#cccccc">このフィールドにチェックを入れることで、お客様は以下を読み、同意したことになります。 <a href="<?=base_url()?>jpn/termofuse" target='_blank' style="color:#000066">利用規定</a> . <a href="<?=base_url()?>jpn/privacy" target='_blank' style="color:#000066">プライバシーポリシー</a> 私たち。</font></center>
                </div>
            </div>
            <div class="form-group mt-3">
                <br>
                <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" onclick="startProgress();" disbaled>登録</button></center>
                <!-- <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" onclick='jvSend();' disbaled>登録</button></center> -->
            </div>
        </form>
    </div>
</div>