<?php
$statusMsg = '';
$msgClass = '';
$optCATGRY = array(
    '0'=>'Pilih Kategory &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '1'=>'Masalah Akses Akun/Password &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '2'=>'Halaman yang bermasalah &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
    '3'=>'Kritik dan Saran &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'
);
?>
    <!-- Hero Area End -->
    <script>
        
    </script>
    <!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">

        <div class="col-12">
            <h2 class="contact-title">Lokasi Kami</h2>
        </div>
        <div class="d-none d-sm-block mb-5 pb-4" align='center' style='border: 1px;'>
            <!-- <?=$map['js']?> -->
            <head>
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
                <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
            </head>
            <body>
                <!-- <div id="mapDiv" style="width: 770px; height: 500px;border: 1px;border-color: red;"></div> -->
                <div class="slider-area ">
                    <div class="slider-active">
                        <div id="mapDiv" style="width: 1150px; height: 500px;border: 1px;border-color: red;"></div>
                    </div>
                </div>
                <script>
                // position we will use later
                var lat = -6.277319823830188;
                var lon = 106.97340992251081;
                // initialize map
                map = L.map('mapDiv').setView([lat, lon], 13);
                // set map tiles source
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                  maxZoom: 18,
                }).addTo(map);
                // add marker to the map
                marker = L.marker([lat, lon]).addTo(map);
                // add popup to the marker
                marker.bindPopup("<center><b style='color:red;'>LOKASI</b></center><br><b>Kantor Pusat JConnect</b> <br>GRAND GALAXY CITY RSA 3 No 25-27, Jakasetia, RT.001/RW.002, Pekayon Jaya, Kec. Bekasi Selatan, Kota Bekasi, Jawa Barat 17147, Indonesia").openPopup();
                </script>
            </body>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Hubungi Kami</h2>
            </div>
            
            <?php echo $this->session->flashdata('msg'); ?>

            <div class="col-lg-8">
                <form class="form-contact contact_form" action="<?= base_url() ?>contact/send/" method="get" id="contactForm" novalidate="novalidate">
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ketik Nama Anda'" placeholder="Ketik nama anda">
                            </div>
                        </div>
                        <div class="col-sm-6">
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
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info reveal">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <p>GRAND GALAXY CITY RSA 3 No 25-27, Jakasetia, RT.001/RW.002, Pekayon Jaya, Kec. Bekasi Selatan, Kota Bekasi, Jawa Barat 17147, Indonesia</p>
                    </div>
                </div>
                <div class="media contact-info reveal">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+62 813-1234-5358</h3>
                    </div>
                </div>
                <div class="media contact-info reveal">
                    <span class="contact-info__icon"><i class="ti-book"></i></span>
                    <div class="media-body">
                        <h3>Senin-Jumat</h3>
                        <p>08.30 - 17.30 WIB</p>
                        <h3>Sabtu & Minggu</h3>
                        <p>Libur</p>
                    </div>
                </div>
                <div class="media contact-info reveal">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>contact.us@jconnect.co.id</h3>
                        <p>Kirimi kami pertanyaanmu!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ================ contact section end ================= -->