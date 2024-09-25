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

        // $('#account').bind('change',function(e){
        //     var account = $('#account').val();
        //     // alert(account);
        //     var prm    = {};
        //     prm['account'] = account;
            
        //     $.post('/LupaPassword/cekAkun/',prm,function(data){
        //         if(data == 0){
        //             alert('Akun Anda belum terdaftar, silahkan gunakan akun yang lain!');
        //             $('#account').val('');
        //             $('#account').focus();
        //             return;
        //         }else{
                    
        //         }
        //     });
        // });

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
</script>
<div class="row">
    <div class="col-12">
        <center><h1 class="fa fa-lock" style="font-size: 60px;"></h1></center>
        <center><h2 class="contact-title">Mengalami masalah saat ingin masuk/login?</h2></center>
    </div>
    <div class="col-lg-12">
        <form class="form-contact contact_form" action="/LupaPassword/respanya" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
        <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response">
            <center><?php echo $this->session->flashdata('msg'); ?></center>

            <div class="col-12">
                <!-- <center><font size=2 style="color:#999999">Masukkan email, telepon, atau nama pengguna Anda dan kami akan mengirimkan tautan untuk kembali ke akun Anda.</font></center> -->
                <center><font size=2 style="color:#999999">Masukan username atau email Anda dan kami akan mengirimkan tautan untuk kembali ke akun Anda.</font></center>
            </div>
            
            <div class="register">
                <div class="col-sm-16">

                    <div class="input-group input-group-lg">
                        <input class="form-control valid" name="account" id="account" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Anda'" placeholder="Email Anda">
                    </div>

                </div>
            </div>

            <div class="form-group mt-3">
                <!-- <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" disbaled>Kirim</button></center> -->
                <center><button type="submit" name="submit" id="submit" class="genric-btn primary radius" disbaled>Kirim</button></center>
            </div>
            <br>

        </form>
        <div id="jqxNotification">
            <div id="notificationContent">
        </div>
      </div>  
    </div>
</div>