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
<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>
<script type='text/javascript'>

    $(document).ready(function() {
        $("#username").on({
            keydown: function(e) {
            if (e.which === 32)
                return false;
            },
            keyup: function(){
                this.value = this.value.toLowerCase();
            },
            change: function() {
                this.value = this.value.replace(/\s/g, "");
            }
        });
        
        $('#submit').hide();
        
        $('#username').bind('change',function(e){
            var usrnam = $('#username').val();
            var prm    = {};
            prm['usrnam'] = usrnam;
            
            $.post('/register/cekUsername/',prm,function(data){
                if(data == 1){
                    alert('Username sudah digunakan, silahkan gunakan username yang lain!');
                    $('#username').val('');
                    $('#username').focus();
                    return;
                }
            });
        });
        
        $('#passwrd2').bind('change',function(data){
            var password = $('#password').val();
            var passwrd2 = $('#passwrd2').val();
            
            if(passwrd2 != password){
                alert('Password yang anda masukan tidak sama, silahkan ulangi kembali!');
                $('#passwrd2').val('');
                $('#passwrd2').focus();
                return;
            }
        });
        
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
<?php
    $optStatus = array(
        '0'=>'Pilih Status &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
        '1'=>'Akan berangkat ke Jepang &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
        '2'=>'Sudah berada di Jepang &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
        '3'=>'Sudah kembali dari Jepang &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'
    );

    $require = "<font style='color:red;'> *</font>";
?>
    
<div class="row">
    <div class="col-12">
        <center><h2 class="contact-title">Form Pendaftaran Calon Kandidat</h2></center>
    </div>
    <div class="col-lg-12">
        <form class="form-contact contact_form" method="post" action="/register/validation" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="register">
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> Username
                        <table>
                            <td>
                                <input class="form-control" name="username" id="username" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" placeholder="Username" required>
                            </td>
                        </table>
                    </div>
                </div>
            <?php echo $this->session->flashdata('msg_logins'); ?>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> Kata Sandi
                        <table>
                            <td>
                                <input class="form-control valid" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Sandi'" placeholder="Kata Sandi" required>
                            </td>
                        </table>
                    </div>
                </div>
            <?php echo $this->session->flashdata('msg_passwd'); ?>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> Ulangi Kata Sandi
                        <table>
                            <td>
                                <input class="form-control valid" name="passwrd2" id="passwrd2" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ulangi kata sandi'" placeholder="Ulangi kata sandi" required>
                            </td>
                        </table>
                    </div>
                </div>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> Nama Lengkap
                        <table>
                            <td>
                                <input class="form-control valid" name="namess" id="namess" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" placeholder="Nama Lengkap" required>
                            </td>
                        </table>
                    </div>
                </div>
            <?php echo $this->session->flashdata('msg_namess'); ?>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> Email
                        <table>
                            <td>
                                <input class="form-control valid" name="emails" id="emails" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'" placeholder="Alamat Email" required>
                            </td>
                        </table>
                    </div>
                </div>
            <?php echo $this->session->flashdata('msg_emails'); ?>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> Sertifikat Level Bahasa Jepang
                        <table>
                            <td>
                                <input class="form-control" name="filbhs" id="filbhs" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Level Bahasa Jepang'" placeholder="Sertifikat Level Bahasa Jepang" required>
                            </td>
                        </table>
                    </div>
                </div>
            <?php echo $this->session->flashdata('msg_filbhs'); ?>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> Foto Izin Visa Selama di Jepang
                        <table>
                            <td>
                                <input class="form-control" name="visafl" id="visafl" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto Visa Selama di Jepang'" placeholder="Foto Visa Selama di Jepang" required>
                            </td>
                        </table>
                    </div>
                </div>
            <?php echo $this->session->flashdata('msg_visafl'); ?>
                <div class="ccol-sm-12">
                    <div class="form-group"> Sertifikat Spesial Skills Worker (SSW)
                        <table>
                            <td>
                                <input class="form-control" name="filssw" id="filssw" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Spesial SKills Worker (SSW)'" placeholder="Spesial SKills Worker (SSW)" required>
                            </td>
                        </table>
                    </div>
                </div>
            <?php // echo $this->session->flashdata('msg_filssw'); ?>
                <div class="ccol-sm-12">
                    <div class="form-group"> Sertifikat Magang (JITCO/OTIT)
                        <table>
                            <td>
                                <input class="form-control" name="magang" id="magang" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sertifikat Spesial SKills Worker (SSW)'" placeholder="Spesial SKills Worker (SSW)" required>
                            </td>
                        </table>
                    </div>
                </div>
            <?php // echo $this->session->flashdata('msg_magang'); ?>
                <div class="ccol-sm-12">
                    <div class="form-group"><?=$require?> Status saat ini
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
            <?php echo $this->session->flashdata('msg_status'); ?>
                <div class="col-12">
                    <center>Sudah punya akun <a href="<?=base_url()?>login_web" class="genric-btn primary circle arrow">Masuk</a></center>
                </div>
                <div class="col-12">
                    <center><input type="checkbox" name="chkPrivacy" id="chkPrivacy" value"setuju" onchange="jvChangePrivacy()"> <font size=2 style="color:#cccccc">Dengan mencentang kolom ini, berarti anda membaca dan menyetujui <a href="<?=base_url()?>termofuse" target='_blank' style="color:#000066">Kebijakan Penggunaan</a> dan <a href="<?=base_url()?>privacy" target='_blank' style="color:#000066">Kebijakan Privasi</a> kami.</font></center>
                </div>
            </div>
            <div class="form-group mt-3">
                <center><button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn" disbaled>Daftar</button></center>
                <!-- <br>
                <center><button type="submit" name="submit2" id="submit2" class="button button-contactForm boxed-btn" onclick='jvSend();' disbaled>Submit</button></center> -->
            </div>
        </form>
    </div>
</div>