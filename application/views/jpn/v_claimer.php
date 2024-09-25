<?php
$levels = $this->session->userdata('USR_LEVELS');
$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_idents = $this->session->userdata('USR_IDENTS');

?>
<!-- Job List Area Start -->
<!-- <script src='//code.jquery.com/jquery-1.11.1.min.js'></script> -->
<style>
    .job-category-listing {
        /*background-color: #f5f5f5;*/
        background-color: #ffffff;
        /*position:fixed;*/
        position:relative;
        width: 100%;
    }
    a {
        color: #000066;
    }
    a:hover {
        /*background-color: #ffffff;*/
        color: #ff0066;
        /*margin: 0px auto 0px auto;
        width:300px;*/
    }
    #cancel:hover {
        background-color: red;
        color: #ffffff;
    }
    .single-listing {
        text-align: left;
    }
    #single-listing {
        text-align: center;
    }
</style>
<!-- <form enctype="multipart/form-data" method='post' action="<?= base_url() ?>myjconnect/profile_simpan/"> -->
<div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" style='height: 50%' data-background="<?=base_url()?>resources/assets/img/gallery/how-applybg.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?=$title?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
<div class="job-listing-area pt-40 pb-40">
    <div class="container">
        <div class="row">
            <!-- Left content -->
            <div class="col-xl-3 col-lg-3 col-md-4">

                <div class="row">
                    <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                            <div class="ion">&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <h4><b>Daftar Istilah Penggunaan</b></h4>
                        </div>
                    </div>
                </div>
                <div class="job-category-listing mb-50" id='side_myjconnect'>
                        <div class="single-listing">

                            <div class="single-listing">
                                <a id='menu_web' href="#toc1">Perjanjian Mengikat</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc2">Definisi</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="#toc3">Registrasi</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Kata Sandi dan Keamanan</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="#toc5">Hak Milik Intelektual</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Ketersediaan Website JConnect.co.id</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Konten Pengguna dan Kiriman</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Penggunaan Anda atas Layanan JConnect.co.id</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Ketentuan Tambahan yang berlaku untuk Pengusaha</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Ketentuan Tambahan berlaku untuk Pemegang Akun</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Ketentuan Tambahan berlaku untuk Kandidat</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Konten Pengguna dan Kiriman</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Pembayaran Biaya</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Hak JConnect.co.id untuk menangguhkan atau membatalkan pendaftaran Anda</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Jangka Waktu dan Pengakhiran</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Kewajiban JConnect.co.id</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Penolakan</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Situs Web Pihak Ketiga</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Kebijakan Periklanan dan Sponsor</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Ganti Rugi</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Pengembalian Dana</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Hukum yang berlaku</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Penggunaan Internasional</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Aneka Ragam</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="#toc4">Umum</a>
                            </div><br>

                        </div>
                        <div class="result"></div>
                </div>

            </div>

<style>
    .table1 {
        font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 100%;
        border: 1px;
    }

    .table1 tr th{
        /*background: #35A9DB;*/
        background: #000066;
        color: #fff;
        font-weight: normal;
    }

    .table1, th, td {
        padding: 2px 8px;
        text-align: left;
    }

    .table1 tr:hover {
        background-color: #ffffff;
    }

    .table1 tr:nth-child(even) {
        background-color: #ffffff;
    }

    .container_img {
        position: relative;
        width: 50%;
    }

    h3 {
        /*background: #35A9DB;*/
        background: #000066;
        color: #fff;
        font-weight: normal;
    }

    .image {
        opacity: 1;
        display: block;
        width: 160px;
        height: 200px;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .text {
        background-color: #04AA6D;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    #myBtn {
        cursor: pointer;
    }

    /* table of content*/
    /* Table of Contents by igniel.com */
    .toc {background-color:#f8f9fa; padding:10px 13px; display:table; line-height:1.6em;width:100%;}/*border:1px solid #a2a9b1; */
    .toc h3 {display:inline-block; margin-right:10px}
    .toc a {text-decoration:none}
    .toc a:hover {text-decoration:underline}
    .toc ul {list-style-type:none; list-style-image:none; margin:0px; padding:0px; text-align:left}
    .toc ul li {list-style-type:none;}
    .toc ul li a {margin-left:.5em}
    .toc ul li ul {margin-left:2em}
    .toctogglelabel {cursor:pointer; color:#0645ad}
    :not(:checked) > .toctoggle {display:inline !important; position:absolute;  opacity:0}
    :not(:checked) > .toctogglespan:before {content:'['}
    .toctoggle:not(:checked) + .toctitle .toctogglelabel:after {content:'sembunyikan';display: inline}
    .toctoggle:checked + .toctitle .toctogglelabel:after {content:'tampilkan'}
    :not(:checked) > .toctogglespan:after {content:']'}
    .toctoggle:checked ~ ul{display:none}
    :target::before {content:''; display:block; height:0px; margin-top:0px; visibility:hidden}

</style>

<!-- Right content -->

<script>
    $(document).ready(function(){
    });
</script>

<div class="col-xl-9 col-lg-9 col-md-8">
    <!-- Featured_job_start -->
    <section class="featured-job-area">
        <div class="container">
<?php
    //  ------------------------------------------------------ All Info ------------------------------- //
?>
<!-- ----------------------------------------------------  view profile ------------------------------------------------------------- -->
                        <table class='table1'>
                            <tr>
                                <!-- <th><?=$menu?></th> -->
                            </tr>
                            <!-- <tr>
                                <td>
                                    <div class="toc">
                                        <input type="checkbox" role="button" id="toctoggle" class="toctoggle">
                                        <div class="toctitle"><h2>Daftar isi</h2>
                                            <span class="toctogglespan">
                                                <label class="toctogglelabel" for="toctoggle"></label>
                                            </span>
                                        </div>
                                        <ul>
                                            <li>A. <a href="#toc1" title="Binding Agreement">Binding Agreement</a></li>
                                            <li>B. <a href="#toc2" title="Definitions">Definitions</a></li>
                                            <li>C. <a href="#toc3" title="Judul Tiga">Judul Tiga</a></li>
                                            <li>D. <a href="#toc4" title="Judul Empat">Judul Empat</a></li>
                                            <li>E. <a href="#toc5" title="Judul Lima">Judul Lima</a>
                                                <ul>
                                                    <li>5.1 <a href="#toc5_1" title="Sub Judul Lima ke Satu">Sub Judul Lima ke Satu</a></li>
                                                    <li>5.2 <a href="#toc5_2" title="Sub Judul Lima ke Dua">Sub Judul Lima ke Dua</a></li>
                                                </ul>
                                            </li>
                                            <li>F. <a href="#toc6" title="Judul Enam">Judul Enam</a></li>
                                        </ul>
                                        <br>
                                        <h2 id="toc1">Judul Satu</h2>
                                        <h2 id="toc2">Judul Dua</h2>
                                        <h2 id="toc3">Judul Tiga</h2>
                                        <h2 id="toc4">Judul Empat</h2>
                                        <h2 id="toc5">Judul Lima</h2>
                                        <h3 id="toc5_1">Sub Judul Lima ke Satu</h3>
                                        <h3 id="toc5_2">Sub Judul Lima ke Dua</h3>
                                        <h2 id="toc6">Judul Enam</h2>

                                    </div>
                                </td>
                            </tr> -->
                            <tr>
                                <td>
                                    <p align="justify">
                                    Halaman ini menyatakan syarat penggunaan (“Ketentuan”) di mana (“Anda”) dapat menggunakan Situs Web JConnect.co.id, dan hubungan Anda dengan JConnect.co.id (“JConnect.co.id”, “kita”). Harap baca dengan seksama karena hal itu mempengaruhi hak dan kewajiban Anda berdasarkan hukum. Jika Anda tidak menyetujui Ketentuan ini, mohon untuk tidak mendaftar atau menggunakan Situs JConnect.co.id. Ketentuan ini berlaku sejak <?=date('d M Y')?>.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 id="toc1">A. Perjanjian Mengikat</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. Website JConnect.co.id ini disediakan untuk Anda gunakan dengan tunduk pada Ketentuan ini. Ketentuan ini merupakan perjanjian yang mengikat antara Anda dan JConnect.co.id. Dengan mengakses atau menggunakan Situs JConnect.co.id Anda setuju untuk menerima dan/atau terikat dengan Ketentuan ini. Anda setuju untuk menggunakan Situs JConnect.co.id dengan risiko Anda sendiri.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2. Dalam hal terjadi konflik antara Ketentuan ini dan kontrak apa pun yang Anda miliki dengan JConnect.co.id, Ketentuan ini akan diutamakan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. Kami dapat memperbarui Ketentuan ini dari waktu ke waktu untuk alasan hukum atau peraturan atau untuk memungkinkan pengoperasian Situs Web JConnect.co.id dengan benar. Setiap perubahan akan diberitahukan kepada Anda melalui alamat email yang Anda berikan pada saat pendaftaran atau melalui pengumuman yang sesuai di Situs Web JConnect.co.id. Perubahan akan berlaku untuk penggunaan Situs Web JConnect.co.id setelah kami memberikan pemberitahuan kepada Anda. Jika Anda tidak ingin menerima Persyaratan baru, Anda tidak boleh terus menggunakan Situs Web JConnect.co.id. Jika Anda terus menggunakan Situs Web JConnect.co.id setelah tanggal berlakunya perubahan, penggunaan Situs Web JConnect.co.id oleh Anda menunjukkan persetujuan Anda untuk terikat oleh Ketentuan baru.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc2">B. Definisi</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. “Pengiklan” berarti orang atau badan yang terikat kontrak untuk memasang iklan di salah satu Situs Web JConnect.co.id
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2. “Desain” meliputi kombinasi warna dan tata letak halaman Website JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. “Pemberi Kerja” atau “Pemberi Kerja” berarti orang atau badan yang mengakses Situs Web JConnect.co.id untuk memposting pekerjaan atau menggunakan Layanan JConnect.co.id untuk alasan apa pun terkait dengan tujuan mencari kandidat pekerjaan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4. “Materi Perusahaan” termasuk brosur, email, posting pekerjaan, konten situs web, materi pameran karir, audio, video, foto, logo, merek dagang, merek layanan, nama domain, dokumen atau materi lain yang disediakan oleh Perusahaan, jika ada, untuk digunakan sehubungan dengan Layanan JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            5. “Grafik” mencakup semua logo, ikon tombol, dan elemen grafis lainnya di Situs JConnect.co.id, kecuali spanduk iklan berbayar.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            6. “Calon” atau “Calon” berarti Pengguna yang mengakses Situs JConnect.co.id untuk mencari pekerjaan atau dalam kapasitas lain kecuali sebagai Pemberi Kerja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            7. “Profil Perusahaan” berarti profil yang dibuat oleh Pemberi Kerja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            8. “JConnect.co.id” berarti JConnect.co.id Pte Ltd atau perusahaan yang mengoperasikan Situs Web JConnect.co.id untuk negara tempat Anda tinggal atau kantor pusat bisnis.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            9. “Konten JConnect.co.id” mencakup semua Teks, Grafik, Desain, Pemrograman, informasi, gambar, video, file audio, perangkat lunak, dan konten lain yang digunakan di Situs Web JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            10. “Basis Data JConnect.co.id” atau “Basis Data JConnect.co.id” mencakup semua iklan pekerjaan yang dipasang di Situs Web JConnect.co.id dan/atau semua informasi kandidat dan/atau pemberi kerja yang terdaftar di JConnect.co.id.</p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            11. “Profil JConnect.co.id” atau “Profil JConnect.co.id” berarti profil yang dibuat oleh Kandidat yang dapat mencakup informasi pribadi, resume dan foto.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            12. “JConnect.co.id Resume Database” atau “Resume Database” berarti Profil calon JConnect.co.id dan resume yang dibuat dan/atau diunggah ke dalam database JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            13. “Layanan JConnect.co.id” berarti setiap layanan yang disediakan oleh JConnect.co.id atau agennya termasuk:</p>
                                            <ol>
                                                <li>
                                                    <p align="justify">
                                                    a. Penyediaan situs lowongan kerja online, termasuk memposting dan mencari peluang kerja, serta membuat Profil JConnect.co.id dan Profil Perusahaan yang dapat memuat informasi pribadi.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    b. Penyediaan layanan pencarian bakat.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    3. Penyediaan akses pencarian resume online.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    c.  Pencocokan spesifikasi pekerjaan dengan calon potensial Profil JConnect.co.id dan memberi tahu Pengguna dan/atau Kandidat tentang posisi yang tersedia
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    d. Memberi pihak Pengusaha akses ke sistem manajemen rekrutmen CMS JConnect.co.id dengan mendaftarkan Akun di JConnect.co.id
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    e.  Menyediakan Pengiklan dan/atau Pemberi Kerja dengan sumber bakat tambahan dan layanan periklanan termasuk spanduk, sistem surat langsung elektronik, desain dan layanan dukungan posting dan
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    f. Menyediakan layanan Pengiklan dan/atau Pemberi Kerja untuk beriklan di Situs Web JConnect.co.id.
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            14. “Profil” berarti profil individu yang dibuat oleh Pengguna dan/atau Kandidat atau profil perusahaan yang dibuat oleh Perusahaan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            15. “Pemrograman” mencakup kode sisi klien (HTML, JavaScript, dll.) dan kode sisi server (Halaman Server Aktif, VBScript, database, dll.) yang digunakan di Situs Web JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            16. “Akun JConnect” berarti akun yang diautentikasi dengan nama pengguna dan kata sandi, untuk mengakses sistem manajemen rekrutmen JConnect.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            17. “Pemegang Akun” mengacu pada setiap Pengguna yang telah mendaftar untuk Akun Jconnect dengan JConnect.co.id dan/atau memiliki akses ke Basis Data Resume JConnect.co.id dengan tujuan semata-mata untuk mencari kandidat pekerjaan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            18. “Teks” mencakup semua teks pada setiap halaman Situs JConnect.co.id, baik editorial, navigasi, maupun instruksional.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            19. “Pengguna” mengacu pada setiap individu atau entitas yang menggunakan aspek apa pun dari Situs Web JConnect.co.id dan/atau Layanan JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            20. “Konten Pengguna” berarti semua informasi, data, teks, perangkat lunak, musik, suara, foto, grafik, video, iklan, pesan, atau materi lain yang dikirimkan, diposting, atau ditampilkan oleh Pengguna di atau melalui Situs Web JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            22. “Anda” atau “Anda” berarti orang yang (atau entitas atas nama siapa Anda bertindak) yang menyetujui Persyaratan ini.
                                            </p>
                                        </li>
                                        <li align="justify">
                                        </li>
                                    </ul><br>

                                    <h3 id="toc3">C. Registrasi</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. Untuk mendaftar di Website JConnect.co.id Anda harus berusia 15 tahun ke atas.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2. Anda harus memastikan bahwa rincian yang Anda berikan pada saat pendaftaran atau sewaktu-waktu adalah benar dan lengkap.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. Anda harus segera memberi tahu kami tentang setiap perubahan pada informasi yang Anda berikan saat mendaftar dengan memperbarui detail pribadi Anda agar kami dapat berkomunikasi dengan Anda secara efektif.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc4">D. Kata Sandi dan Keamanan</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. Ketika Anda mendaftar untuk menggunakan Situs JConnect.co.id Anda akan diminta untuk membuat kata sandi. Untuk mencegah penipuan, Anda harus menjaga kerahasiaan kata sandi ini dan tidak boleh mengungkapkannya atau membagikannya kepada siapa pun. Jika Anda mengetahui atau mencurigai bahwa orang lain mengetahui kata sandi Anda, Anda harus memberi tahu kami dengan menghubungi kami di sini langsung.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2. Jika JConnect.co.id memiliki alasan untuk meyakini bahwa kemungkinan akan terjadi pelanggaran keamanan atau penyalahgunaan Situs Web JConnect.co.id, kami mungkin meminta Anda untuk mengubah kata sandi Anda atau kami dapat menangguhkan akun Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. Sebagai akibat dari kehilangan Kata Sandi Anda atau penyalahgunaan Situs Web JConnect.co.id :
                                            <ol>
                                                <li>
                                                    <p align="justify">
                                                    a. Semua kerugian atau kerusakan yang terjadi karenanya akan ditanggung oleh Anda dan
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    b. Anda harus mengganti kerugian JConnect.co.id sepenuhnya jika JConnect.co.id mengalami kerugian atau kerusakan.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                    </ul><br>
                                    
                                    <h3 id="toc5">E. Hak Milik Intelektual</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. Situs Web JConnect.co.id, Konten JConnect.co.id, dan semua hak, kepemilikan, dan kepentingan dalam dan terhadap Situs Web JConnect.co.id dan Konten JConnect.co.id adalah milik eksklusif JConnect.co.id atau pemberi lisensinya .
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2. Website JConnect.co.id dan Konten JConnect.co.id dilindungi oleh hak cipta, merek dagang, hak database dan hak kekayaan intelektual lainnya.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. Anda dapat mengambil dan menampilkan JConnect.co.id. Konten Situs JConnect.co.id pada layar komputer, menyimpan konten tersebut dalam bentuk elektronik pada disk (tetapi bukan server atau perangkat penyimpanan lain yang terhubung ke jaringan) atau mencetak satu salinan konten tersebut untuk pribadi Anda sendiri, non- penggunaan komersial, asalkan Anda tetap menyimpan semua hak cipta dan pemberitahuan kepemilikan secara utuh. Anda tidak boleh mereproduksi, memodifikasi, menyalin atau mendistribusikan atau menggunakan untuk tujuan komersial materi atau Konten JConnect.co.id di Situs Web JConnect.co.id tanpa izin tertulis dari JConnect.co.id.
                                            </p>
                                        </li>
                                    </ul><br>
                                    
                                    <h3 id="toc6">F. Ketersediaan Website JConnect.co.id</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. Meskipun kami bertujuan untuk menawarkan layanan terbaik kepada Anda, kami tidak berjanji bahwa layanan di Situs Web JConnect.co.id akan memenuhi kebutuhan Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2. Kami tidak dapat menjamin bahwa Situs Web JConnect.co.id akan bebas dari kesalahan, bebas dari kesalahan, atau bahwa Situs Web dan server JConnect.co.id bebas dari virus atau mekanisme berbahaya lainnya. Jika terjadi kesalahan pada Situs JConnect.co.id, Anda harus melaporkannya di sini dan kami akan berusaha memperbaiki kesalahan tersebut sesegera mungkin.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. Akses Anda ke Situs JConnect.co.id terkadang dibatasi untuk memungkinkan perbaikan, pemeliharaan, atau pengenalan konten, fasilitas, atau layanan baru. Kami akan berusaha memulihkan akses dan/atau layanan sesegera mungkin.
                                            </p>
                                        </li>
                                    </ul><br>
                                    
                                    <h3 id="toc7">G. Konten Pengguna dan Kiriman</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. JConnect.co.id dengan ini memberi Anda hak terbatas, dapat dihentikan, non-eksklusif untuk mengakses dan menggunakan Situs Web JConnect.co.id hanya untuk penggunaan pribadi dan/atau tujuan pekerjaan Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  Anda tidak boleh menggunakan Situs JConnect.co.id untuk tujuan berikut:
                                            <ol>
                                                <li>
                                                    <p align="justify">
                                                    a. Menyebarkan materi yang melanggar hukum, melecehkan, memfitnah, kasar, mengancam, berbahaya, vulgar, cabul, atau tidak pantas atau melanggar hukum apa pun
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    b. Menggabungkan, menyalin, atau menggandakan dengan cara apa pun Konten JConnect.co.id atau informasi yang tersedia dari Situs Web JConnect.co.id, termasuk lowongan pekerjaan yang kedaluwarsa.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    c. Mereproduksi Konten JConnect.co.id untuk penggunaan umum.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    d. Tautan ke Konten JConnect.co.id atau informasi apa pun yang tersedia dari Situs Web JConnect.co.id mana pun.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    e. Mentransmisikan materi yang mendorong perilaku yang merupakan tindak pidana, atau melanggar hukum, peraturan, atau kode praktik yang berlaku.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    f. Mengganggu penggunaan atau kenikmatan orang lain atas Situs JConnect.co.id atau
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    g. Membuat, mengirimkan atau menyimpan salinan elektronik dari materi yang dilindungi oleh hak cipta tanpa izin dari pemiliknya.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. Anda setuju untuk tidak menjual kembali atau mengalihkan hak atau kewajiban Anda berdasarkan Ketentuan ini. Anda juga setuju untuk tidak melakukan penggunaan komersial yang tidak sah atas Situs Web JConnect.co.id mana pun.
                                            </p>
                                        </li>
                                    </ul><br>
                                    
                                    <h3 id="toc8">H. Penggunaan Anda atas Layanan JConnect.co.id</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. Layanan JConnect.co.id hanya dapat digunakan oleh :
                                            <ol>
                                                <li>
                                                    <p align="justify">
                                                    a. Individu yang mencari pekerjaan, dan informasi karir dan karir, seperti pendidikan dan layanan sukarela
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    b. Majikan atau agen mereka mencari kandidat untuk tujuan pekerjaan dan
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    a. Pengiklan
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2. Penggunaan Anda atas Layanan JConnect.co.id juga tunduk pada kontrak lain yang mungkin Anda miliki dengan JConnect.co.id. Jika ada pertentangan antara Ketentuan ini dan kontrak apa pun yang Anda miliki dengan JConnect.co.id, Ketentuan ini yang akan berlaku.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3.  Semua Pengguna setuju untuk tidak :
                                            <ol>
                                                <li>
                                                    <p align="justify">
                                                    a. Mengirimkan, memposting, mendistribusikan, menyimpan atau menghancurkan materi, termasuk namun tidak terbatas pada Konten JConnect.co.id, yang melanggar hukum atau peraturan yang berlaku, termasuk namun tidak terbatas pada undang-undang atau peraturan yang mengatur pengumpulan, pemrosesan, atau pemindahan informasi pribadi, atau melanggar JConnect.co.id Kebijakan pribadi
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    b. Melanggar atau berupaya melanggar keamanan Situs Web JConnect.co.id mana pun.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    c. Merekayasa balik atau mendekompilasi bagian mana pun dari Situs Web JConnect.co.id mana pun.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    d. Menggabungkan, menyalin, atau menggandakan dalam hal apa pun dari Konten JConnect.co.id atau informasi yang tersedia dari Situs Web JConnect.co.id mana pun, termasuk lowongan pekerjaan yang kedaluwarsa, selain yang diizinkan oleh Ketentuan ini.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    e. Memposting konten atau materi apa pun yang memfasilitasi, mempromosikan atau mendukung penipuan, informasi palsu atau menyesatkan atau aktivitas ilegal, ATAU mendukung atau memberikan informasi instruksional tentang aktivitas ilegal atau aktivitas lain yang dilarang oleh Ketentuan ini, seperti membuat atau membeli senjata ilegal, melanggar privasi seseorang, menyediakan atau membuat virus komputer atau media pembajakan, ATAU mempromosikan atau mendukung pandangan politik apa pun.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    f. Memposting profil apa pun, melanjutkan, atau melamar pekerjaan apa pun atas nama pihak lain
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    g. Berbagi dengan pihak ketiga setiap kredensial masuk ke Situs Web JConnect.co.id mana pun.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    h. Mengakses data yang tidak ditujukan untuk Anda atau masuk ke server atau akun yang tidak diizinkan untuk Anda akses
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    i. Memposting atau mengirimkan ke Situs JConnect.co.id setiap informasi biografi yang tidak akurat, tidak lengkap, menyesatkan, palsu, tidak terkini atau informasi yang bukan milik Anda.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    j. Memposting konten yang berisi halaman akses terbatas atau kata sandi saja, atau halaman atau gambar tersembunyi.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    k. Meminta kata sandi atau informasi pengenal pribadi dari Pengguna lain.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    l. Menghapus atau mengubah materi apa pun yang diposting oleh orang atau entitas lain mana pun.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    m. Melecehkan, menghasut pelecehan, atau menganjurkan pelecehan terhadap kelompok, perusahaan, atau individu mana pun.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    n. Mengirim surat atau email yang tidak diminta, melakukan panggilan telepon yang tidak diminta atau mengirim faks yang tidak diminta yang mempromosikan dan/atau mengiklankan produk atau layanan kepada Pengguna mana pun, atau menghubungi pengguna yang secara khusus meminta untuk tidak Anda hubungi.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    o. Mencoba mengganggu layanan kepada Pengguna, host, atau jaringan mana pun, termasuk, tanpa batasan, melalui cara mengirimkan virus ke Situs Web JConnect.co.id mana pun, kelebihan muatan, “banjir”, “spam”, “mailbombing”, atau “crashing ”.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    p. Menggunakan Layanan JConnect.co.id untuk tujuan yang melanggar hukum atau aktivitas ilegal, atau memposting atau mengirimkan konten, profil, resume, atau postingan pekerjaan yang memfitnah, memfitnah, secara implisit atau eksplisit menyinggung, vulgar, cabul, mengancam, melecehkan, kasar , penuh kebencian, rasis, diskriminatif, bersifat mengancam atau mungkin menyebabkan gangguan, ketidaknyamanan, rasa malu, kecemasan atau dapat menyebabkan pelecehan kepada siapa pun atau menyertakan tautan apa pun ke materi pornografi, tidak senonoh, atau eksplisit secara seksual dalam bentuk apa pun, sebagaimana ditentukan oleh JConnect. kebijaksanaan co.id. Ketentuan Penggunaan Tambahan atau.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    q. Memposting profil atau resume apa pun yang bukan profil atau resume asli dan yang berupaya mengiklankan atau mempromosikan produk atau layanan.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4. Pelanggaran keamanan jaringan dapat mengakibatkan tanggung jawab perdata dan/atau pidana. JConnect.co.id akan menyelidiki kejadian yang mungkin melibatkan pelanggaran tersebut dan mungkin melibatkan, dan bekerja sama dengan, otoritas penegak hukum dalam menuntut Pengguna yang terlibat dalam pelanggaran tersebut.
                                            </p>
                                        </li>
                                    </ul><br>
                                    
                                    <h3 id="toc9">I. Ketentuan Tambahan yang berlaku untuk Pengusaha</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. JConnect.co.id dengan ini memberi Anda hak terbatas, dapat dihentikan, non-eksklusif untuk mengakses dan menggunakan Situs Web JConnect.co.id untuk keperluan bisnis internal Anda mencari kandidat untuk pekerjaan. Ini memberi Anda wewenang untuk melihat dan mengunduh satu salinan Konten atau materi JConnect.co.id di Situs Web JConnect.co.id semata-mata untuk Anda gunakan secara langsung terkait dengan pencarian dan perekrutan Kandidat.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.JConnect.co.id juga memberi Anda hak non-eksklusif yang terbatas, dapat dihentikan, untuk menggunakan Layanan JConnect.co.id hanya untuk penggunaan internal Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. Anda bertanggung jawab untuk menjaga kerahasiaan akun Perusahaan, Profil Perusahaan, dan kata sandi Anda, sebagaimana berlaku.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4. Anda tidak boleh membagikan kata sandi Anda atau informasi akses akun lainnya dengan pihak lain mana pun, untuk sementara atau selamanya, dan Anda bertanggung jawab penuh dan/atau bertanggung jawab atas semua penggunaan pendaftaran dan kata sandi Situs JConnect.co.id Anda, baik yang diizinkan atau tidak oleh Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            5. Anda setuju untuk segera memberi tahu JConnect.co.id tentang penggunaan tidak sah atas akun perusahaan, Profil Perusahaan, atau kata sandi Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            6. Pemberi Kerja menyatakan, menjamin dan membuat perjanjian bahwa setiap Materi Pemberi Kerja yang disediakan oleh Pemberi Kerja untuk digunakan sehubungan dengan Layanan JConnect.co.id tidak akan melanggar undang-undang atau peraturan atau hak milik pihak ketiga, termasuk, tanpa batasan, hak cipta, merek dagang, kecabulan, hak atau publisitas atau privasi, dan undang-undang pencemaran nama baik.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            7. Pengusaha mengakui dan setuju bahwa itu akan mengabaikan data pribadi yang diterima dari Kandidat yang tidak relevan untuk memperoleh dan menilai kesesuaian kandidat.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            8. Pemberi Kerja bertanggung jawab penuh atas Materi Pemberi Kerja di Situs JConnect.co.id. JConnect.co.id tidak dianggap sebagai pemberi kerja sehubungan dengan penggunaan Anda atas Situs Web JConnect.co.id dan JConnect.co.id tidak bertanggung jawab atas keputusan pekerjaan apa pun, untuk alasan apa pun, yang dibuat oleh entitas mana pun memposting pekerjaan di Situs Web JConnect.co.id mana pun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            9.  Materi Perusahaan tidak boleh mengandung :
                                            <ol>
                                                <li align="justify">
                                                    <p align="justify">
                                                    a. Kata kunci yang menyesatkan, tidak dapat dibaca, atau “tersembunyi”, kata kunci berulang atau kata kunci yang tidak relevan dengan peluang kerja yang disajikan.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    b. Mama, logo atau merek dagang dari perusahaan yang tidak terafiliasi.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    c. Informasi yang tidak akurat, palsu, atau menyesatkan dan.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    d. Materi atau tautan ke materi yang diskriminatif, eksplisit secara seksual, cabul, memfitnah, memfitnah, mengancam, melecehkan, kasar, atau penuh kebencian, atau meminta informasi pribadi dari siapa pun yang berusia di bawah 18 tahun
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            10. Anda tidak boleh menggunakan Materi Perusahaan Anda untuk :
                                            <ol>
                                                <li align="justify">
                                                    <p align="justify">
                                                    a. Memposting pekerjaan dengan cara yang tidak mematuhi undang-undang lokal dan nasional yang berlaku, termasuk namun tidak terbatas pada undang-undang yang berkaitan dengan tenaga kerja dan ketenagakerjaan, kesempatan kerja yang sama dan persyaratan kelayakan pekerjaan, privasi data, akses dan penggunaan data, dan kekayaan intelektual.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    b. Menjual, mempromosikan atau mengiklankan produk atau layanan.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    c. Memposting setiap peluang waralaba, skema piramida, distribusi, atau pemasaran multi-level.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    d. Mempromosikan setiap kesempatan yang tidak mewakili pekerjaan yang bonafide; dan
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    e. Mengiklankan layanan seksual atau mencari karyawan untuk pekerjaan yang bersifat seksual.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            11. JConnect.co.id tidak mendorong Materi Pemberi Kerja di Situs Web JConnect.co.id yang meminta Kandidat untuk membayar deposit, biaya penempatan, biaya pemrosesan atau biaya serupa lainnya, secara langsung atau tidak langsung, dan/atau mengharuskan Kandidat untuk melakukan pembelian.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            12. JConnect.co.id tidak mengizinkan iklan lowongan yang mengiklankan lebih dari 1 posisi lowongan di setiap postingan lowongan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            13. JConnect.co.id tidak berkewajiban untuk memantau Materi Perusahaan di Situs JConnect.co.id, tetapi JConnect.co.id dapat memantau Materi Perusahaan secara acak.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            14. JConnect.co.id berhak untuk menghapus Materi Perusahaan atau konten apa pun dari Situs Web JConnect.co.id, yang dalam pelaksanaan kebijaksanaan JConnect.co.id yang wajar, tidak mematuhi Bagian ini, atau jika konten apa pun diposting yang menurut JConnect.co.id bukanlah kepentingan terbaik JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            15. Reposting posisi yang sama diperbolehkan 14 hari setelah tanggal posting lowongan untuk meminimalkan pengiriman ulang ke pengguna yang sama dalam waktu singkat dan duplikasi iklan lowongan di Website JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            16. Jika sewaktu-waktu selama Anda menggunakan Layanan JConnect.co.id, Anda membuat pernyataan yang salah tentang fakta kepada JConnect.co.id atau menyesatkan JConnect.co.id sehubungan dengan sifat kegiatan bisnis Anda atau pelanggaran Ketentuan di sini , JConnect.co.id dapat menghentikan penggunaan Anda atas Layanan JConnect.co.id dan dalam hal demikian, setiap pembayaran yang Anda lakukan akan hangus.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            17. Anda memahami dan mengakui bahwa jika Anda membatalkan akun Perusahaan Anda atau akun Perusahaan Anda dihentikan, semua informasi akun Anda dari JConnect.co.id, termasuk Profil dan resume JConnect.co.id yang tersimpan, kontak jaringan, dan milis email, akan ditandai sebagai telah dihapus dan dapat dihapus dari Database JConnect.co.id. Informasi dapat terus tersedia untuk beberapa waktu karena keterlambatan dalam menyebarkan penghapusan tersebut melalui server web JConnect.co.id.
                                            </p>
                                        </li>
                                    </ul><br>
                                    
                                    <h3 id="toc10">J. Ketentuan Tambahan berlaku untuk Pemegang Akun</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. Jika Anda mendaftar untuk dan/atau membayar Akun SiVA untuk, antara lain, mengakses Basis Data Resume JConnect.co.id, Bagian ini berlaku untuk Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2. Anda harus berusia 18 tahun atau lebih.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. Anda harus menggunakan Basis Data Resume JConnect.co.id sebagaimana ditentukan dalam Ketentuan ini, dalam kontrak apa pun yang Anda miliki dengan JConnect.co.id, dan sesuai dengan semua undang-undang termasuk undang-undang yang mengatur data pribadi.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4. JConnect.co.id memberi Anda hak terbatas, pribadi, dapat dihentikan, tidak dapat dipindahtangankan, non-eksklusif untuk mengakses Basis Data Resume JConnect.co.id melalui Situs Web JConnect.co.id untuk tujuan melihat dan/atau mengunduh satu salinan Profil JConnect.co.id yang tersedia dan resume semata-mata untuk penggunaan Anda dengan tunduk pada ketentuan Bagian ini.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            5. Database Resume JConnect.co.id akan diakses dan digunakan hanya oleh Anda. Anda akan diberikan kata sandi unik yang memungkinkan Anda mengakses Basis Data Resume.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            6. Anda tidak boleh membagikan Akun SiVA Anda dengan pihak lain mana pun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            7. Anda setuju bahwa Anda tidak boleh mengungkapkan data apa pun dari JConnect.co.id Resume Database kepada pihak ketiga mana pun, kecuali Anda adalah agen perekrutan resmi, atau agen kepegawaian atau menggunakan Profil JConnect.co.id dan melanjutkan secara eksplisit untuk tujuan pekerjaan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            8. Anda harus mengambil langkah-langkah fisik, teknis, dan administratif yang sesuai untuk melindungi data yang Anda peroleh dari JConnect.co.id Resume Database dari kehilangan, penyalahgunaan, akses tidak sah, perubahan pengungkapan, atau penghancuran.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            9. Database Resume JConnect.co.id tidak boleh digunakan :
                                            <ol>
                                                <li align="justify">
                                                    <p align="justify">
                                                    a. ntuk tujuan apapun selain sebagai pemberi kerja dan/atau atas nama pemberi kerja yang mencari pekerja; atau.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    b. Untuk membuat panggilan telepon atau faks yang tidak diminta atau mengirim surat, email, atau buletin yang tidak diminta ke Profil JConnect.co.id atau pemegang resume atau untuk menghubungi setiap individu kecuali mereka telah setuju untuk dihubungi.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            10. Data yang diperoleh dari Basis Data Resume JConnect.co.id tidak boleh disimpan lebih lama dari yang diperlukan untuk memenuhi tujuan yang ditetapkan dalam Bagian ini. Dalam hal ini, Anda setuju dan berjanji untuk menghapus, menghancurkan dan/atau menghapus data tersebut dari catatan Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            11. Anda tidak boleh menggunakan JConnect.co.id Resume Database dengan cara apa pun yang menurut penilaian JConnect.co.id akan berdampak buruk terhadap bisnis JConnect.co.id, prospek bisnis, kinerja atau fungsi Situs Web JConnect.co.id mana pun. atau JConnect.co.id Resume Database, atau mengganggu kemampuan pelanggan lain untuk mengakses Resume Database.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            12. Untuk memastikan pengalaman yang aman dan efektif bagi semua pelanggan kami, JConnect.co.id berhak membatasi jumlah data (termasuk Profil JConnect.co.id dan tampilan resume) yang dapat diakses oleh atau diberikan kepada Anda dalam periode waktu tertentu. Batasan ini dapat diubah atas kebijakan JConnect.co.id dari waktu ke waktu.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            13. Anda dapat menggunakan langganan Anda ke JConnect.co.id Resume Database hanya untuk mencari kandidat pekerjaan. Anda secara khusus dilarang menggunakan informasi yang terdapat dalam Basis Data Resume JConnect.co.id untuk menjual atau mempromosikan produk atau layanan apa pun atau melakukan tindakan lain yang, menurut penilaian JConnect.co.id, tidak sesuai dengan Ketentuan ini, menyesatkan atau tidak lengkap , atau melanggar hukum atau peraturan apa pun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            14. JConnect.co.id dapat mengakhiri, menangguhkan, memperbarui, mengubah atau menambah, atas kebijakannya sendiri, semua atau sebagian dari Basis Data Resume JConnect.co.id kapan saja. Dengan mengizinkan akses ke Basis Data Resume JConnect.co.id, JConnect.co.id tidak menyampaikan kepentingan apa pun pada atau ke Basis Data Resume atau properti atau Layanan JConnect.co.id lainnya. Baiklah, kepentingan dalam dan terhadap Resume Database adalah dan akan tetap ada di JConnect.co.id.
                                            </p>
                                        </li>
                                    </ul><br>
                                    
                                    <h3 id="toc11">K. Ketentuan Tambahan berlaku untuk Kandidat</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1. JConnect.co.id dengan ini memberi Anda hak terbatas, dapat dihentikan, non-eksklusif untuk mengakses dan menggunakan Situs Web JConnect.co.id hanya untuk penggunaan pribadi Anda mencari peluang kerja untuk diri Anda sendiri. Ini memberi Anda wewenang untuk melihat dan mengunduh satu salinan Konten atau materi JConnect.co.id di Situs Web JConnect.co.id semata-mata untuk penggunaan pribadi dan non-komersial Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2. Saat Anda mendaftar di Situs Web JConnect.co.id, Anda akan diminta untuk membuat akun dan memberikan informasi tertentu kepada JConnect.co.id termasuk alamat email yang valid.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3. Setiap Profil JConnect.co.id yang Anda kirimkan harus akurat, lengkap, terkini dan tidak menyesatkan. Profil JConnect.co.id mengharuskan Anda mengisi kolom standar. Anda tidak boleh menyamar sebagai orang lain, hidup atau mati.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4. Anda mengakui dan setuju bahwa Anda bertanggung jawab penuh atas bentuk, konten, dan keakuratan setiap Profil JConnect.co.id dan resume atau materi yang terkandung di dalamnya yang ditempatkan oleh Anda di Situs Web JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            5. Anda mengakui dan setuju bahwa Anda bertanggung jawab penuh atas segala konsekuensi yang timbul dari posting tersebut.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            6. JConnect.co.id berhak untuk menawarkan layanan dan produk pihak ketiga kepada Anda berdasarkan preferensi yang Anda identifikasi dalam pendaftaran Anda dan setiap saat setelahnya atau Anda telah setuju untuk menerima, penawaran tersebut dapat dilakukan oleh JConnect.co.id atau oleh pihak ketiga.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            7. Silakan lihat Kebijakan Privasi JConnect.co.id, untuk keterangan lebih lanjut mengenai informasi Anda. Harap dicatat, sebagaimana tercantum dalam JConnect.co.id'sKebijakan pribadi, bahwa JConnect.co.id dapat mengumpulkan informasi Pengguna tertentu dan dapat menghubungi Pengguna secara berkala sesuai dengan ketentuanKebijakan pribadi. Selain itu, JConnect.co.id berhak untuk mematuhi, atas kebijakannya sendiri, dengan persyaratan hukum, permintaan dari lembaga penegak hukum atau permintaan dari entitas pemerintah, bahkan sejauh kepatuhan tersebut mungkin memerlukan pengungkapan informasi Pengguna tertentu. Selain itu, pihak ketiga dapat menyimpan salinan informasi Pengguna yang disimpan dalam cache.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            8. Anda memahami dan mengakui bahwa semua informasi yang Anda berikan, Profil JConnect.co.id, resume, dan/atau informasi akun Anda akan diungkapkan kepada calon Pemberi Kerja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            9. Anda memahami dan mengakui bahwa Anda tidak memiliki hak kepemilikan atas akun Anda dan bahwa jika Anda membatalkan akun JConnect.co.id atau Akun JConnect.co.id Anda dihentikan, semua informasi akun Anda dari JConnect.co.id, termasuk JConnect. co.id Profil, resume, surat lamaran, pekerjaan yang disimpan, akan ditandai sebagai dihapus di dan dapat dihapus dari Basis Data JConnect.co.id dan akan dihapus dari area publik mana pun di Situs Web JConnect.co.id. Informasi dapat terus tersedia untuk beberapa waktu karena keterlambatan dalam menyebarkan penghapusan tersebut melalui server web JConnect.co.id. Selain itu, pihak ketiga dapat menyimpan salinan informasi Anda yang tersimpan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            10. JConnect.co.id berhak untuk menghapus akun Anda dan semua informasi Anda setelah lama tidak aktif.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc12">L. Konten Pengguna dan Kiriman</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Anda memahami bahwa semua Konten Pengguna adalah satu-satunya tanggung jawab orang dari mana Konten Pengguna tersebut berasal.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  Anda memahami dan mengakui bahwa semua informasi yang Anda berikan, Profil JConnect.co.id, resume, dan/atau informasi akun Anda akan disimpan dalam Basis Data JConnect.co.id dan/atau Basis Data Resume JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3.  Anda memahami, mengakui dan menyetujui bahwa semua informasi yang Anda berikan, Profil JConnect.co.id, resume, dan/atau informasi akun Anda dapat dialihkan ke negara-negara di luar lokasi Anda untuk tujuan penyimpanan dan/atau pemrosesan. Silakan lihat JConnect.co.idKebijakan pribadi, untuk rincian lebih lanjut.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4.  Dengan mengirimkan, memposting, atau menampilkan Konten Pengguna di atau melalui Situs Web JConnect.co.id, Anda memberikan JConnect.co.id, sesuai dengan pengaturan privasi Anda, lisensi bebas royalti di seluruh dunia, non-eksklusif, untuk mereproduksi, mengadaptasi, mendistribusikan, dan mempublikasikan Konten Pengguna tersebut melalui Situs JConnect.co.id. JConnect.co.id akan menghentikan penggunaan berlisensi ini dalam jangka waktu yang wajar secara komersial setelah Konten Pengguna tersebut dihapus dari Situs Web JConnect.co.id. JConnect.co.id berhak menolak untuk menerima, memposting, menampilkan, atau mengirimkan Konten Pengguna apa pun atas kebijakannya sendiri.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            5.  Jika Anda memposting Konten Pengguna di area publik mana pun di Situs Web JConnect.co.id, Anda juga mengizinkan Pengguna mana pun untuk mengakses, melihat, menyimpan, dan mereproduksi Konten Pengguna tersebut untuk penggunaan pribadi.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            6.  JConnect.co.id dapat meninjau dan menghapus Konten Pengguna apa pun yang, menurut penilaiannya sendiri, melanggar Ketentuan ini, melanggar hukum, aturan, atau regulasi yang berlaku, kasar, mengganggu, menyinggung, atau ilegal, atau melanggar hak, atau membahayakan atau mengancam keamanan, Pengguna Situs Web JConnect.co.id mana pun. JConnect.co.id berhak untuk mengeluarkan Pengguna dan mencegah akses mereka lebih lanjut ke Situs Web JConnect.co.id dan/atau penggunaan Layanan JConnect.co.id karena melanggar Ketentuan atau hukum, aturan, atau peraturan yang berlaku. JConnect.co.id dapat mengambil tindakan apa pun sehubungan dengan Konten Pengguna yang dianggap perlu atau sesuai atas kebijakannya sendiri jika diyakini bahwa Konten Pengguna tersebut dapat menimbulkan kewajiban bagi JConnect.co.id, merusak merek atau publik JConnect.co.id gambar, atau menyebabkan JConnect.co.id kehilangan Pengguna.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            7.  JConnect.co.id tidak mewakili atau menjamin kebenaran, keakuratan, atau keandalan Konten Pengguna, karya turunan dari Konten Pengguna, atau komunikasi lain apa pun yang diposting oleh Pengguna dan JConnect.co.id juga tidak mendukung pendapat apa pun yang diungkapkan oleh Pengguna. Anda mengakui bahwa segala ketergantungan pada materi yang diposting oleh Pengguna lain akan menjadi risiko Anda sendiri.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc13">M. Pembayaran Biaya</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Semua jumlah terutang ke JConnect.co.id harus dibayar dalam jangka waktu pembayaran yang ditentukan sejak tanggal faktur.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  JConnect.co.id dapat mengenakan bunga sebesar 8% per tahun untuk setiap keterlambatan pembayaran.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3.  Pengiklan bertanggung jawab atas pembayaran penuh biaya sejak dimulainya kontrak dan/atau pesanan penjualan. Pembayaran harus dilakukan meskipun ada kesalahan atau kelalaian dalam iklan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4.  Semua harga yang dikutip belum termasuk pajak yang berlaku kecuali jika disebutkan sebaliknya.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc14">N. Hak JConnect.co.id untuk menangguhkan atau membatalkan pendaftaran Anda</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Kami dapat menangguhkan atau membatalkan pendaftaran Anda segera atas kebijakan wajar kami atau jika Anda melanggar kewajiban Anda berdasarkan Ketentuan ini.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  Anda dapat membatalkan pendaftaran Anda kapan saja dengan memberi tahu kami secara tertulis di sini. Jika Anda melakukannya, Anda harus berhenti menggunakan Situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3.  Penangguhan atau pembatalan pendaftaran Anda dan hak Anda untuk menggunakan Situs JConnect.co.id tidak akan mempengaruhi hak atau kewajiban hukum salah satu pihak.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc15">O. Jangka Waktu dan Pengakhiran</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Ketentuan ini akan tetap berlaku penuh dan berlaku selama Anda menjadi pengguna Situs Web JConnect.co.id mana pun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  JConnect.co.id berhak, atas kebijakannya sendiri, untuk menempuh semua upaya hukumnya, termasuk namun tidak terbatas pada penghapusan Konten Pengguna Anda dari Situs Web JConnect.co.id dan penghentian segera pendaftaran Anda dengan atau kemampuan untuk mengakses Situs JConnect.co.id dan/atau layanan lain apa pun yang diberikan kepada Anda oleh JConnect.co.id, jika Anda melanggar Ketentuan ini atau jika JConnect.co.id tidak dapat memverifikasi atau mengautentikasi informasi apa pun yang Anda kirimkan pendaftaran Website JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3.  Bahkan setelah Anda bukan lagi Pengguna Situs Web JConnect.co.id, ketentuan tertentu dari Ketentuan ini akan tetap berlaku, termasuk Bagian 5, 13, 15, 16, 17 dan 20, inklusif.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc16">P. Kewajiban JConnect.co.id</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Situs JConnect.co.id dan Layanan JConnect.co.id bertindak sebagai, antara lain, tempat untuk :
                                            <ol>
                                                <li align="justify">
                                                    <p align="justify">
                                                    a. Pengusaha atau agen mereka untuk memposting peluang kerja dan mencari dan mengevaluasi kandidat pekerjaan;.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    b. Kandidat untuk memposting Profil dan resume JConnect.co.id dan mencari dan mengevaluasi peluang kerja; dan.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    c. Pengiklan untuk memasang iklan mereka.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  JConnect.co.id tidak menyaring atau menyensor daftar, termasuk Profil JConnect.co.id yang ditawarkan. JConnect.co.id tidak terlibat dalam transaksi aktual antara pemberi kerja dan kandidat. Akibatnya, JConnect.co.id tidak bertanggung jawab atas Konten Pengguna, kualitas, keamanan atau legalitas pekerjaan atau JConnect.co.id atau resume yang diposting, kebenaran atau keakuratan daftar, kemampuan pemberi kerja untuk menawarkan pekerjaan peluang kepada kandidat atau kemampuan kandidat untuk mengisi lowongan pekerjaan dan JConnect.co.id tidak membuat pernyataan tentang pekerjaan, Profil JConnect.co.id, resume atau Konten Pengguna di Situs Web JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3.  JConnect.co.id berhak atas kebijakannya sendiri untuk menghapus Konten Pengguna apa pun termasuk namun tidak terbatas pada Profil JConnect.co.id, Profil Perusahaan, Materi Perusahaan, atau materi lainnya dari Situs Web JConnect.co.id dari waktu ke waktu . Ketika JConnect.co.id menggunakan kebijaksanaan ini dan ada pelanggaran Ketentuan ini oleh Pengguna, pembayaran apa pun yang dilakukan oleh Pengguna akan hangus.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4.  Situs web JConnect.co.id juga menyediakan konten dari situs atau sumber internet lain dan sementara JConnect.co.id mencoba untuk memastikan bahwa materi yang disertakan dalam Situs Web JConnect.co.id adalah benar, bereputasi baik, dan berkualitas tinggi, namun tidak membuat jaminan atau jaminan apa pun sehubungan dengan konten itu. Jika JConnect.co.id diberitahu tentang ketidakakuratan materi di Situs Web JConnect.co.id, kami akan berusaha untuk memperbaiki ketidakakuratan sesegera mungkin.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            5.  Perhatikan bahwa ada risiko, termasuk namun tidak terbatas pada risiko cedera fisik, berurusan dengan orang asing, orang di bawah umur, atau orang yang berpura-pura palsu. Anda menanggung semua risiko yang terkait dengan berurusan dengan pengguna lain yang berhubungan dengan Anda melalui Situs JConnect.co.id. Berdasarkan sifatnya, informasi orang lain mungkin menyinggung, berbahaya, atau tidak akurat, dan dalam beberapa kasus akan diberi label yang salah atau menipu. Kami mengharapkan Anda untuk berhati-hati dan menggunakan akal sehat saat menggunakan Situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            6.  Situs JConnect.co.id dan Konten JConnect.co.id mungkin mengandung ketidakakuratan atau kesalahan ketik. JConnect.co.id tidak membuat pernyataan tentang keakuratan, keandalan, kelengkapan, atau ketepatan waktu dari Situs Web JConnect.co.id atau Konten JConnect.co.id. Penggunaan semua Situs JConnect.co.id dan Konten JConnect.co.id adalah risiko Anda sendiri.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            7.  Tidak ada satu pun di Situs Web JConnect.co.id yang dapat dianggap sebagai dukungan, representasi, atau jaminan sehubungan dengan Pengguna atau pihak ketiga mana pun, baik yang berkaitan dengan situs web, produk, layanan, perekrutan, pengalaman, pekerjaan, atau praktik perekrutannya, atau lainnya.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            8.  Jika kami melanggar Ketentuan ini, kami hanya akan bertanggung jawab atas segala kerugian yang Anda derita sebagai akibat langsung dan sejauh itu merupakan konsekuensi yang dapat diperkirakan bagi kami berdua pada saat Anda menggunakan Situs Web JConnect.co.id . Tanggung jawab kami dalam hal apa pun tidak termasuk kerugian bisnis seperti kehilangan data, kehilangan keuntungan, atau gangguan bisnis.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            9.  Tanggung jawab agregat oleh JConnect.co.id kepada Anda atas semua klaim yang timbul dari penggunaan Situs Web JConnect.co.id dan/atau Layanan JConnect.co.id oleh Anda akan terbatas pada jumlah biaya paket yang ada yang dilanggan dan dibayar oleh Anda dan yang beroperasi pada saat itu, atau jika Anda seorang Kandidat, akan dibatasi hingga RM100.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc17">Q. Penolakan</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  JConnect.co.id tidak bertanggung jawab atas hilangnya informasi apapun yang disebabkan sebagai akibat dari gangguan, penangguhan atau penghentian Layanan JConnect.co.id atau untuk Konten JConnect.co.id, keakuratan atau kualitas informasi yang tersedia atau dikirimkan melalui Layanan JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  Anda mengakui dan setuju bahwa bukan kebijakan JConnect.co.id untuk melakukan kontrol editorial atas dan untuk mengedit atau mengubah data atau konten dari email atau posting atau informasi apa pun yang mungkin dimasukkan atau disediakan atau dikirimkan ke atau dari pihak ketiga pihak di atau melalui Situs Web JConnect.co.id dan/atau Layanan JConnect.co.id.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc18">R. Situs Web Pihak Ketiga</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Untuk kenyamanan pelanggan, Situs JConnect.co.id menyertakan tautan ke situs web atau materi lain yang berada di luar kendalinya. JConnect.co.id tidak bertanggung jawab atas konten di situs mana pun di luar Situs Web JConnect.co.id.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc19">S. Kebijakan Periklanan dan Sponsor</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Bagian dari Situs JConnect.co.id mungkin berisi iklan dan sponsor. Pengiklan dan sponsor bertanggung jawab untuk memastikan bahwa materi yang dikirimkan untuk disertakan di Situs JConnect.co.id mematuhi undang-undang dan kode yang relevan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  JConnect.co.id berhak menolak untuk menjalankan iklan apa pun yang, atas kebijakan JConnect.co.id, tidak sesuai untuk dipublikasikan di Situs Web JConnect.co.id mana pun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3.  JConnect.co.id tidak akan bertanggung jawab kepada Anda atas kesalahan atau ketidaktepatan dalam materi iklan dan sponsor.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc20">T. Ganti rugi</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Anda setuju untuk membela, mengganti rugi, dan membebaskan JConnect.co.id, dan afiliasinya, dan pejabat, direktur, karyawan, dan agennya masing-masing, dari dan terhadap klaim, tindakan, atau tuntutan apa pun, termasuk namun tidak terbatas pada biaya hukum dan akuntansi yang wajar. , menuduh atau akibat dari :
                                            <ol>
                                                <li align="justify">
                                                    <p align="justify">
                                                    a. Setiap Konten Pengguna atau materi lain yang Anda berikan ke Situs Web JConnect.co.id.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    b. Penggunaan Anda atas Konten JConnect.co.id atau.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    c. Pelanggaran Anda terhadap Ketentuan ini.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  JConnect.co.id akan segera memberikan pemberitahuan kepada Anda tentang klaim, gugatan, atau proses tersebut.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc21">U. Pengembalian dana</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Untuk kenyamanan pelanggan, Situs JConnect.co.id menyertakan tautan ke situs web atau materi lain yang berada di luar kendalinya. JConnect.co.id tidak bertanggung jawab atas konten di situs mana pun di luar Situs Web JConnect.co.id.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc22">V. Hukum yang berlaku</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Ketentuan ini akan tunduk pada hukum Indonesia.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  Kami akan mencoba menyelesaikan perselisihan dengan cepat dan efisien. Jika Anda tidak senang dengan cara kami menangani perselisihan apa pun dan Anda ingin mengambil proses pengadilan, Anda harus melakukannya di Indonesia.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc23">W. Penggunaan Internasional</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Kami tidak berjanji bahwa materi di Situs Web JConnect.co.id sesuai atau tersedia untuk digunakan di lokasi Anda, dan mengakses Situs Web JConnect.co.id dari wilayah di mana isinya ilegal atau melanggar hukum dilarang. Jika Anda memilih untuk mengakses Situs JConnect.co.id ini dari lokasi Anda, Anda melakukannya atas inisiatif Anda sendiri dan bertanggung jawab untuk mematuhi hukum setempat.
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc24">X. Aneka ragam</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Anda tidak boleh mengalihkan hak Anda berdasarkan Ketentuan ini kepada orang lain. Kami dapat mengalihkan hak kami berdasarkan Ketentuan ini ke bisnis lain di mana kami cukup yakin bahwa hak Anda tidak akan terpengaruh.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  Jika Anda melanggar Ketentuan ini dan JConnect.co.id memilih untuk mengabaikannya, JConnect.co.id tetap berhak untuk menggunakan hak dan upaya hukumnya di kemudian hari atau dalam situasi lain di mana Anda melanggar Ketentuan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3.  JConnect.co.id tidak bertanggung jawab atas setiap pelanggaran Ketentuan ini yang disebabkan oleh keadaan di luar kendali yang wajar.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4.  Jika salah satu dari Ketentuan ini ditemukan oleh pengadilan atau badan administratif dari yurisdiksi yang kompeten tidak sah atau tidak dapat dilaksanakan, ketidakabsahan atau ketidakberlakuan ketentuan tersebut tidak akan mempengaruhi ketentuan lain dari Ketentuan ini dan semua ketentuan yang tidak terpengaruh oleh ketidakabsahan atau ketidakberlakuan tersebut akan tetap dalam kekuatan dan efek penuh.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            5.  JConnect.co.id telah mengambil setiap langkah yang wajar untuk mematuhi dan akan terus mematuhi kewajibannya sebagai pengolah data yang timbul dari undang-undang perlindungan data dan privasi yang berlaku dari waktu ke waktu sejauh kewajiban tersebut relevan dengan Perjanjian ini. Selanjutnya, kami telah mengambil langkah-langkah untuk menerapkan dan akan memelihara program keamanan informasi termasuk tindakan administratif, teknis dan fisik yang wajar yang dirancang untuk mengamankan dan melindungi kerahasiaan, integritas, dan ketersediaan semua Informasi Rahasia saat berada dalam kepemilikan pihak tersebut terhadap akses yang tidak sah, melanggar hukum, atau tidak disengaja. , pengungkapan, transfer, penghancuran, kehilangan atau perubahan. Namun, istilah Informasi Rahasia tidak akan mencakup informasi apa pun yang mengidentifikasi atau berhubungan langsung dengan orang perseorangan (“Data Pribadi”).
                                            </p>
                                        </li>
                                    </ul><br>

                                    <h3 id="toc25">Y. Umum</h3>
                                    <ul>
                                        <li align="justify">
                                            <p align="justify">
                                            1.  Website JConnect.co.id dimiliki dan dioperasikan oleh JConnect.co.id Pte Ltd.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            2.  Jika Anda memiliki pertanyaan silahkan hubungi kami di sini
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            3.  Pemberitahuan kepada JConnect.co.id harus dikirimkan ke alamat yang tercantum di Website JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            4.  Kami akan mengirimkan pemberitahuan kepada Anda di alamat yang Anda kirimkan atau ke alamat lain yang secara wajar ditentukan oleh JConnect.co.id sebagai alamat yang sesuai untuk Anda.
                                            </p>
                                        </li>
                                    </ul><br>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td colspan=4 width="10px" height="10px" style='text-align: justify;'>&nbsp;</td>
                            </tr>
                        </table><br>
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>