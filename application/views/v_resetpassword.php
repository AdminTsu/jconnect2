<!-- <hr> -->
<style type="text/css">
    .register {
        margin: 10px auto;
        width: 300px;
        padding: 10px;
        border: 0px solid #ccc;
        /*background: lightblue;*/
    }
    input[type=text], input[type=password] {
        margin: 10px auto;
        width: 300px;
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
        });

        $('#showhide2').bind('click',function(data){
            if ($('#password2').attr("type") == "text") {
                $('#password2').attr('type', 'password');
                $(this).removeClass("fa fa-eye");
                $(this).addClass("fa fa-eye-slash");
            }else if($('#password2').attr("type") == "password") {
                $('#password2').attr('type', 'text');
                $(this).removeClass("fa fa-eye-slash");
                $(this).addClass("fa fa-eye");
            }
        })

        $('#submit').bind('click',function(data){
            var pass1 = $('#password').val();
            var pass2 = $('#password2').val();

            if (pass1 != pass2) {
                alert('Password yang diisi tidak sama, silahkan perisa kembali!');
                $('#password2').val('');
                $('#password2').focus();
                return;
            }
        })

    });
</script>
<div class="row">
    <div class="col-12">
        <center><h1 class="fa fa-lock" style="font-size: 60px;"></h1></center>
        <center><h2 class="contact-title">Silahkan ubah kata sandi Anda</h2></center>
        <center><h5 class="mb-4" style="color:#999999">Silahkan isi Password baru Anda.</h5></center>
    </div>
    <div class="col-lg-12">
        <form class="form-contact contact_form" action="/LupaPassword/confirmrespanya" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
        <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response">
            <center><?php echo $this->session->flashdata('msg'); ?></center>

            <!-- <div class="col-12">
                <center><font size=2 style="color:#999999" class="mb-4">Silahkan isi Password baru Anda.</font></center>
            </div> -->
            
            <div class="register">
                <div class="col-sm-16">
                    
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group addon input-group-text">
                                <input class="form-control valid" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Sandi'" placeholder="Kata Sandi">
                                <i class="fa fa-eye-slash" style="cursor: pointer;" id="showhide"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group addon input-group-text">
                                <input class="form-control valid" name="password2" id="password2" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ulangi Kata Sandi'" placeholder="Ulangi Kata Sandi">
                                <i class="fa fa-eye-slash" style="cursor: pointer;" id="showhide2"></i>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="form-group mt-3">
                <!-- <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" disbaled>Kirim</button></center> -->
                <center><button type="submit" name="submit" id="submit" class="genric-btn primary radius" disbaled>Ubah Password</button></center>
            </div>
            <br>

        </form>
        <div id="jqxNotification">
            <div id="notificationContent">
        </div>
      </div>  
    </div>
</div>