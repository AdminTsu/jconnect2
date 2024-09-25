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
<script type='text/javascript'>

    $(document).ready(function() {
        $('#submit').hide();
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
        <center><h2 class="contact-title"><img src="<?=base_url(IMAGES."JConnect_Logo_01.png")?>" width='30%' height='45%'></h2></center>
        <center><h2 class="contact-title">Login</h2></center>
    </div>
    <div class="col-lg-12">
        <form class="form-contact contact_form" action="/login_web/validate_credentials" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
            <center><?php echo $this->session->flashdata('msg'); ?></center>
            <div class="register">
                <div class="col-sm-8">
                    <div class="form-group">
                        <table>
                            <td>
                                <input class="form-control" name="username" id="username" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" placeholder="Username">
                            </td>
                        </table>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="form-group">
                        <table>
                            <td>
                                <input class="form-control valid" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Sandi'" placeholder="Kata Sandi">
                            </td>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <center><input type="checkbox" name="chkPrivacy" id="chkPrivacy" value"setuju" onchange="jvChangePrivacy()"> <font size=2 style="color:#cccccc">Dengan mencentang kolom ini, berarti anda membaca dan menyetujui <a href="termofuse" target='_blank' style="color:#000066">Kebijakan Penggunaan</a> dan <a href="Privacy" target='_blank' style="color:#000066">Kebijakan Privasi</a> kami.<br>Centang kolom ini maka akan muncul tombol untuk melakukan Login JConnect.co.id.</font></center>
            </div>
            <div class="form-group mt-3">
                <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" disbaled>Masuk</button></center>
                <!-- <br>
                <center><button type="submit" name="submit2" id="submit2" class="button button-contactForm boxed-btn" disbaled>Submit</button></center> -->
            </div>
        </form>
        <div id="jqxNotification">
            <div id="notificationContent">
        </div>
      </div>  
    </div>
</div>