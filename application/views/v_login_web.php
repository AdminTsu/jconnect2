<!-- <hr> -->
<style type="text/css">
    .register {
        margin: 10px auto;
        width: 400px;
        padding: 10px;
        border: 0px solid #ccc;
        /*background: lightblue;*/
    }
    input[type=text], input[type=password] {
        margin: 5px auto;
        width: 400px;
        padding: 10px;
    }
</style>
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>
<script type='text/javascript'>

    $(document).ready(function() {
        // $('#submit').hide();

        // show / hide password
        $('#showhide').bind('click',function(data){
            event.preventDefault();
            if ($('#password').attr("type") == "text") {
                $('#password').attr('type', 'password');
                $(this).removeClass("fa fa-eye");
                $(this).addClass("fa fa-eye-slash");
            }else if($('#password').attr("type") == "password") {
                $('#password').attr('type', 'text');
                $(this).removeClass("fa fa-eye-slash");
                $(this).addClass("fa fa-eye");
            }
        })

    });

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

    function jvSubmit(){

    }
</script>
<div class="row">
    <div class="col-12">
        <!-- <center><h2 class="contact-title"><img src="<?=base_url(IMAGES."JConnect_Logo_01.png")?>" width='50%' height='45%'></h2></center> -->
        <center><h2 class="contact-title"><img src="<?=base_url()?>resources/assets/img/logo/Logo_jconnect_new.png" width='25%' height='45%'></h2>
        <center><h2 class="contact-title">Login</h2></center>
    </div>
    <div class="col-lg-12">
        <form class="form-contact contact_form" action="/login_web/validate_credentials" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
        <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response">
            <center><?php echo $this->session->flashdata('msg'); ?></center>
            <div class="register">
                <div class="col-sm-16">

                    <!-- <div class="form-group">
                        <table>
                            <td>
                                <input class="form-control" name="username" id="username" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" placeholder="Username">
                            </td>
                        </table>
                    </div> -->

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group addon input-group-text">
                                <input class="form-control valid" name="username" id="username" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" placeholder="Username">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-16">

                    <!-- <div class="form-group">
                        <table>
                            <td>
                                <div class="input-group input-group-lg">
                                    <input class="form-control valid" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Sandi'" placeholder="Kata Sandi">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-eye-slash" style="cursor: pointer;" id="showhide"></i>
                                        </span>
                                    </div>
                                </div>
                            </td>
                        </table>
                    </div> -->

                    <!-- <div class="form-group">
                        <table>
                            <td>
                                <div class="input-group input-group-lg">
                                    <input class="form-control" placeholder="Email">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-eye-slash" style="cursor: pointer;" id="showhide"></i>
                                        </span>
                                    </div>
                                </div>
                            </td>
                        </table>
                    </div> -->

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group addon input-group-text">
                                <input class="form-control valid" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Sandi'" placeholder="Kata Sandi">
                                <i class="fa fa-eye-slash" style="cursor: pointer;" id="showhide"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <center><font size=2 style="color:#999999">Dengan melakukan akses ini kami anggap berarti Anda<br>telah membaca dan menyetujui <a href="termofuse" target='_blank' style="color:#000066">Kebijakan Penggunaan</a> dan <a href="Privacy" target='_blank' style="color:#000066">Kebijakan Privasi</a> kami.</font></center>
            </div>
            <div class="form-group mt-3">
                <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" disbaled>Masuk</button></center>
                <!-- <br>
                <center><button type="submit" name="submit2" id="submit2" class="button button-contactForm boxed-btn" disbaled>Submit</button></center> -->
            </div><hr>
            <div class="col-12">
                <center><a class="genric-btn primary radius" href="register" target='_blank'>Belum punya akun?</a> atau <a class="genric-btn info radius" href="LupaPassword" target='_blank'>Lupa password?</a></center>
            </div>
            <br>

        </form>
        <div id="jqxNotification">
            <div id="notificationContent">
        </div>
      </div>  
    </div>
</div>