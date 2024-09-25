<script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>
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
    <div class="single-slider section-overly slider-height3 d-flex align-items-center" style='height: 250px' data-background="<?=base_url()?>resources/assets/img/gallery/how-applybg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Kebijakan Penggunaan Perjanjian yang Mengikat | JConnect</h2>
                        <!-- <h2>Kebijakan Penggunaan</h2> -->
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
                            <h4><b>Syarat Penggunaan</b></h4>
                        </div>
                    </div>
                </div>
                <div class="job-category-listing mb-50" id='side_myjconnect'>
                        <div class="single-listing">

                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse">A. Perjanjian yang Mengikat</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/definisi">B. Definisi</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/registrasi">C. Registrasi</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/security">D. Kata Sandi dan Keamanan</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/hak_milik">E. Hak Milik Intelektual</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/ketersediaan">F. Ketersediaan Website JConnect.co.id</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/penggunaan_anda_atas_situs">G. Penggunaan Anda atas Situs Web JConnect.co.id</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/penggunaan_anda_atas_layanan">H. Penggunaan Anda atas Layanan JConnect.co.id</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/term_for_company">I. Ketentuan Tambahan yang berlaku untuk Pengusaha</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/term_of_user">J. Ketentuan Tambahan berlaku untuk Pemegang Akun</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/term_of_candidate">K. Ketentuan Tambahan berlaku untuk Kandidat</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/user_send">L. Konten Pengguna dan Kiriman</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/billing">M. Pembayaran Biaya</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/hak_menangguhkan">N. Hak JConnect.co.id untuk menangguhkan atau membatalkan pendaftaran Anda</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/duedate">O. Jangka Waktu dan Pengakhiran</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/kewajiban">P. Kewajiban JConnect.co.id</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/penolakan">Q. Penolakan</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/pihak_ketiga">R. Situs Web Pihak Ketiga</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/sponsor">S. Kebijakan Periklanan dan Sponsor</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/ganti_rugi">T. Ganti rugi</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/legal_valid">U. Pengembalian Dana</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/international">V. Hukum yang Berlaku</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/variety">W. Penggunaan Internasional</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>TermOfUse/publics">X. Umum</a>
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
<?php
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==1){
?>
                            <tr>
                                <td>
                                    <p align="justify">
                                    Halaman ini menyatakan syarat penggunaan (“Ketentuan”) di mana Anda (“Anda”) dapat menggunakan Situs Web JConnect.co.id, dan hubungan Anda dengan JConnect.co.id (“JConnect.co.id”, “kita” atau “kita”). Harap baca dengan seksama karena hal itu mempengaruhi hak dan kewajiban Anda berdasarkan hukum. Jika Anda tidak menyetujui Ketentuan ini, mohon untuk tidak mendaftar atau menggunakan Situs JConnect.co.id. Ketentuan ini berlaku sejak <b>1 Agustus 2022</b>.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 id="toc1">&nbsp;A. Kontrak yang Mengikat</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Website JConnect.co.id ini disediakan untuk Anda gunakan dengan tunduk pada Ketentuan ini. Ketentuan ini merupakan perjanjian yang mengikat antara Anda dan JConnect.co.id. Dengan mengakses atau menggunakan Situs JConnect.co.id Anda setuju untuk menerima dan/atau terikat dengan Ketentuan ini. Anda setuju untuk menggunakan Situs JConnect.co.id dengan risiko Anda sendiri.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Dalam hal terjadi pertentangan antara Ketentuan ini dan perjanjian apa pun yang telah Anda buat dengan JConnect.co.id, Ketentuan ini yang akan berlaku.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Kami dapat memperbaharui syarat dan ketentuan ini dari waktu ke waktu untuk alasan hukum atau peraturan atau untuk memungkinkan pengoperasian situs JConnect.co.id dengan baik. Setiap perubahan akan diberitahukan kepada Anda melalui alamat email yang Anda berikan saat pendaftaran atau dengan pemberitahuan yang sesuai di situs JConnect.co.id. Setiap perubahan akan berlaku untuk penggunaan Anda atas situs JConnect.co.id pada saat kami memberitahukannya kepada Anda. Jika Anda tidak menyetujui syarat dan ketentuan baru, mohon untuk tidak melanjutkan penggunaan Situs JConnect.co.id. Jika Anda terus menggunakan Situs Web JConnect.co.id setelah tanggal efektif perubahan, penggunaan Situs Web JConnect.co.id merupakan persetujuan Anda untuk terikat dengan ketentuan baru.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==2){
?>
                                    <h3 id="toc2">&nbsp;B. Definisi</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            'Pengiklan' berarti setiap orang atau badan yang telah dikontrak untuk memasang iklan di salah satu situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Desain' termasuk kombinasi warna dan tata letak halaman-halaman di situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Pemberi Kerja' atau 'Pemberi Kerja' berarti setiap individu atau entitas yang mengakses situs JConnect.co.id untuk memposting lowongan pekerjaan atau menggunakan layanan JConnect.co.id untuk alasan apa pun yang terkait dengan tujuan pencarian pencari kerja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Materi Perusahaan' berarti setiap brosur, email, lowongan pekerjaan, konten situs web, materi pameran karier, audio, video, foto, logo, merek dagang, merek layanan, nama domain, dokumen, atau materi lainnya. bahan (jika ada).
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            "Grafik" berarti semua logo, ikon tombol dan elemen-elemen grafis lainnya pada situs JConnect.co.id (tidak termasuk banner iklan berbayar).
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Kandidat' atau 'calon' berarti pengguna yang mengakses situs JConnect.co.id untuk mencari pekerjaan atau dalam kapasitas lainnya, selain sebagai pemberi kerja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Profil perusahaan' berarti profil yang disiapkan oleh pemberi kerja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'JConnect.co.id' berarti JConnect.co.id atau perusahaan yang mengoperasikan Situs JConnect.co.id di negara tempat Anda tinggal atau memiliki kantor pusat bisnis Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Konten JConnect.co.id' mencakup semua teks, grafik, desain, pemrograman, informasi, gambar, video, file audio, perangkat lunak, dan konten lainnya yang digunakan pada Situs Web JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Database JConnect.co.id' atau 'database JConnect.co.id' mencakup semua iklan lowongan pekerjaan yang diposting di situs JConnect.co.id dan/atau semua informasi kandidat dan pemberi kerja yang terdaftar di JConnect.co.id.</p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Profil JConnect.co.id' atau 'profil JConnect.co.id' berarti profil yang dibuat oleh kandidat yang dapat mencakup informasi pribadi, CV dan foto.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Database CV JConnect.co.id' atau 'database CV' berarti profil kandidat dan CV yang dibuat dan/atau diunggah ke database JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Layanan JConnect.co.id' berarti semua layanan yang disediakan oleh JConnect.co.id atau agennya, termasuk :</p>
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    Menyediakan situs lowongan kerja online, termasuk memposting dan mencari pekerjaan, dan membuat profil JConnect.co.id dan profil perusahaan, termasuk detail pribadi.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Penyediaan layanan rekrutmen
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Menyediakan akses pencarian CV online.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Mencocokkan lowongan pekerjaan dengan pencari kerja dan memberi tahu pengguna dan pencari kerja tentang lowongan.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Mencocokkan lowongan pekerjaan dengan pencari kerja dan memberi tahu pengguna dan pencari kerja tentang lowongan.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Menyediakan pengiklan dan/atau perekrut dengan sumber bakat tambahan dan layanan periklanan, seperti spanduk, sistem surat langsung elektronik, desain dan layanan dukungan posting.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Penyediaan jasa pengiklan dan/atau pemberi kerja untuk beriklan di situs JConnect.co.id.
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Profil' berarti profil pribadi yang dibuat oleh pengguna dan kandidat atau profil perusahaan yang dibuat oleh kami.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Pemrograman' mencakup kode sisi klien (misalnya HTML, JavaScript) dan kode sisi server (misalnya Active Server Pages, database) yang digunakan pada situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Akun JConnect' berarti akun yang diautentikasi dengan nama pengguna dan kata sandi untuk mengakses sistem manajemen perekrutan JConnect.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Pemegang Akun' berarti pengguna yang telah mendaftarkan akun Jconnect dengan JConnect.co.id dan memiliki akses ke database CV JConnect.co.id untuk tujuan tunggal mencari pencari kerja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Teks' mencakup semua teks editorial, navigasi dan deskriptif pada setiap halaman situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Pengguna' berarti setiap orang atau entitas yang menggunakan aspek apapun dari situs web JConnect.co.id dan/atau layanan JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Konten Pengguna' berarti semua informasi, data, teks, naskah, teks, perangkat lunak, musik, suara, foto, grafik, video, iklan, pesan atau materi lainnya yang Anda kirimkan, posting atau tampilkan pada atau melalui situs JConnect.co.id. Artinya.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            'Anda' atau 'milik Anda' berarti setiap individu (atau badan hukum yang bertindak atas nama Anda) yang menyetujui Syarat dan Ketentuan ini.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==3){
?>
                                    <h3 id="toc3">&nbsp;C. Pendaftaran</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Anda harus berusia minimal 15 tahun untuk mendaftar di situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda harus memastikan bahwa detail yang Anda berikan pada saat pendaftaran atau pada titik mana pun adalah akurat dan lengkap.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda harus segera memberi tahu kami tentang perubahan apa pun pada informasi yang diberikan pada saat pendaftaran dengan memperbarui detail pribadi Anda sehingga kami dapat berkomunikasi dengan Anda secara efektif.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==4){
?>
                                    <h3 id="toc4">&nbsp;D. Kata Sandi dan Keamanan</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Ketika Anda mendaftar untuk menggunakan situs JConnect.co.id, Anda akan diminta untuk membuat kata sandi. Untuk mencegah penipuan, Anda harus menjaga kerahasiaan kata sandi ini dan tidak boleh mengungkapkan atau membaginya dengan siapa pun. Jika Anda mengetahui atau mencurigai bahwa orang lain mengetahui kata sandi Anda, Anda harus memberi tahu kami dengan menghubungi kami. <u><a href="<?=base_url()?>dashboard/feedback" target='_blank' >ini</a></u> segera.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id dapat meminta Anda untuk mengubah kata sandi Anda atau menangguhkan akun Anda jika JConnect.co.id percaya telah terjadi pelanggaran keamanan atau kemungkinan penyalahgunaan situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Sebagai Karena kehilangan kata sandi Anda atau penggunaan situs JConnect.co.id secara tidak sah :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    Kerugian atau kerusakan apa pun yang diakibatkan oleh hal ini akan ditanggung oleh pelanggan.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Anda akan sepenuhnya mengganti kerugian JConnect.co.id dalam hal terjadi kerugian atau kerusakan yang diderita oleh JConnect.co.id.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==5){
?>
                                    <h3 id="toc5">&nbsp;E. Hak Milik Intelektual</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Semua hak, kepemilikan dan kepentingan dalam dan terhadap Situs JConnect.co.id, Konten JConnect.co.id dan Situs JConnect.co.id dan Konten JConnect.co.id dimiliki secara eksklusif oleh JConnect.co.id atau pemberi lisensinya. JConnect.co.id atau pemberi lisensinya secara eksklusif.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Situs JConnect.co.id dan konten JConnect.co.id dilindungi oleh hak cipta, hak merek dagang, hak basis data dan hak kekayaan intelektual lainnya.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda dapat mengambil dan menampilkan JConnect.co.id, menampilkan konten di situs JConnect.co.id pada layar komputer, menyimpannya dalam bentuk elektronik pada disk (tetapi tidak pada server jaringan atau perangkat penyimpanan lainnya), dan mencetak satu salinan konten tersebut untuk penggunaan pribadi dan non-komersial Anda, asalkan Anda tetap menjaga keutuhan semua hak cipta dan pemberitahuan kepemilikan. Anda dapat mereproduksi, memodifikasi, menyalin, mendistribusikan atau menggunakan untuk tujuan komersial apapun materi atau konten apapun di JConnect.co.id tanpa izin tertulis dari JConnect.co.id. menyalin, mendistribusikan atau menggunakan untuk tujuan komersial tanpa izin tertulis dari JConnect.co.id.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==6){
?>
                                    <h3 id="toc6">&nbsp;F. Penggunaan Situs Web JConnect.co.id</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Meskipun kami bertujuan untuk memberikan Anda layanan terbaik, kami tidak dapat menjanjikan bahwa layanan di situs JConnect.co.id akan memenuhi kebutuhan Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Kami tidak menjamin bahwa situs web JConnect.co.id bebas dari kesalahan atau ketidakakuratan, atau bahwa situs web dan server JConnect.co.id bebas dari virus atau mekanisme berbahaya lainnya. Jika Anda menemukan kesalahan pada situs web JConnect.co.id silakan laporkan di sini. Kami akan berusaha untuk memperbaiki kesalahan tersebut sesegera mungkin.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Akses ke situs JConnect.co.id mungkin dibatasi karena perbaikan, pemeliharaan atau pengenalan konten, fasilitas atau layanan baru. Kami akan berusaha keras untuk memulihkan akses dan layanan sesegera mungkin.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==7){
?>
                                    <h3 id="toc7">&nbsp;G. Penggunaan Anda atas Situs Web JConnect.co.id</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id dengan ini memberi Anda hak terbatas, dapat diakhiri, dan non-eksklusif untuk mengakses situs JConnect.co.id dan menggunakannya semata-mata untuk tujuan pribadi dan/atau pekerjaan Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda tidak boleh menggunakan Situs JConnect.co.id untuk tujuan-tujuan berikut ini :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    Penyebaran materi ilegal, melecehkan, memfitnah, kasar, mengancam, berbahaya, tidak senonoh, cabul atau materi yang tidak pantas atau materi yang melanggar hukum.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mengambil, menyalin atau memperbanyak dengan cara apapun isi dari JConnect.co.id atau informasi yang tersedia dari situs JConnect.co.id, termasuk lowongan pekerjaan yang sudah kadaluarsa.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mereproduksi dan menggunakan konten JConnect.co.id di depan umum.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Tautan ke konten atau informasi JConnect.co.id yang tersedia di situs JConnect.co.id.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mengirimkan materi yang mendorong perilaku yang merupakan tindak pidana atau melanggar hukum, peraturan, atau kode praktik yang berlaku.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mengganggu penggunaan atau kenikmatan pihak lain atas Situs JConnect.co.id.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mereproduksi, mentransmisikan atau menyimpan materi berhak cipta secara elektronik tanpa izin pemiliknya.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda setuju untuk tidak menjual kembali atau mengalihkan hak atau kewajiban Anda berdasarkan Syarat dan Ketentuan ini. Anda juga setuju untuk tidak membuat penggunaan komersial yang tidak sah dari situs JConnect.co.id.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==8){
?>
                                    <h3 id="toc8">&nbsp;H. Penggunaan Anda atas Layanan JConnect.co.id</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                             Layanan JConnect.co.id hanya tersedia untuk :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    Informasi karier dan karier bagi individu yang mencari pekerjaan dan untuk layanan pendidikan dan sukarela
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    pemberi kerja atau agennya merekrut kandidat untuk tujuan ketenagakerjaan; dan
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    sponsor iklan
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Penggunaan Anda atas Layanan JConnect.co.id juga tunduk pada perjanjian lain yang Anda miliki dengan JConnect.co.id. Dalam hal terjadi ketidakkonsistenan antara Ketentuan ini dan perjanjian apa pun yang dimiliki Pelanggan dengan JConnect.co.id, maka Ketentuan ini yang akan berlaku.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Semua pengguna setuju untuk tidak :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    Mengirimkan, memposting, mendistribusikan, menyimpan atau menghancurkan materi apapun (termasuk Konten JConnect.co.id) yang melanggar hukum atau peraturan yang berlaku, termasuk, tanpa batasan, hukum atau peraturan apapun mengenai pengumpulan, pemrosesan atau transfer informasi pribadi, atau yang melanggar Kebijakan Privasi JConnect.co.id atau menghancurkan materi apapun (termasuk Konten JConnect.co.id) yang melanggar Kebijakan Privasi JConnect.co.id.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Melanggar atau mencoba melanggar keamanan situs JConnect.co.id.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Merekayasa balik atau mendekompilasi bagian manapun dari situs JConnect.co.id.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Untuk mengambil, menyalin atau mereproduksi dalam hal apapun konten atau informasi JConnect.co.id yang tersedia di situs JConnect.co.id (termasuk lowongan pekerjaan yang sudah kadaluarsa), kecuali sebagaimana diizinkan dalam Syarat dan Ketentuan ini.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Memposting konten atau materi yang mempromosikan, memfasilitasi, atau mendukung informasi yang curang, palsu, atau menyesatkan atau kegiatan ilegal, atau mendukung atau memberikan informasi instruksional tentang kegiatan ilegal atau kegiatan lain yang dilarang oleh Ketentuan ini (seperti pembuatan atau pembelian senjata ilegal, invasi privasi orang lain, penyediaan atau pembuatan virus komputer atau media bajakan, atau promosi atau dukungan dari pandangan politik apa pun).
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Memposting profil, CV atau melamar pekerjaan atas nama orang lain.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Berbagi kredensial login untuk situs web JConnect.co.id dengan pihak ketiga.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mengakses data yang tidak ditujukan untuk Anda atau masuk ke server atau akun yang tidak diizinkan untuk Anda akses.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Memposting atau mengirimkan ke situs JConnect.co.id informasi biografis yang tidak akurat, tidak lengkap, menyesatkan, salah, tidak benar, tidak mutakhir, atau informasi apa pun yang bukan milik Anda.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Memposting konten yang mencakup akses terbatas atau halaman khusus kata sandi, halaman tersembunyi, atau gambar tersembunyi.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Meminta kata sandi atau informasi identitas pribadi lainnya dari pengguna lain.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Menghapus atau mengubah materi yang diposting oleh individu atau badan hukum lain.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Melecehkan, menghasut pelecehan, atau menganjurkan pelecehan terhadap kelompok, perusahaan, atau individu mana pun.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mengirim surat atau email yang tidak diminta, melakukan panggilan telepon yang tidak diminta atau mengirim faks yang tidak diminta untuk mempromosikan atau mengiklankan produk atau layanan kepada pengguna, atau menghubungi pengguna yang secara khusus meminta untuk tidak dihubungi.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mencoba untuk mengganggu layanan kepada pengguna, host atau jaringan manapun dengan, namun tidak terbatas pada, mengirimkan virus ke situs JConnect.co.id, overloading, 'flooding', 'spamming', 'mailbombing', 'crashing' atau cara lainnya. (tetapi tidak terbatas pada).
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id Layanan Identitas untuk tujuan yang melanggar hukum atau aktivitas ilegal atau untuk memposting atau mengirimkan konten, profil, CV, atau posting pekerjaan yang memfitnah, mencemarkan nama baik, menyinggung secara implisit atau eksplisit, vulgar, cabul, mengancam, melecehkan, kasar, penuh kebencian, rasis, diskriminatif atau mengancam di alam, atau mengganggu atau yang dapat menyebabkan ketersinggungan, rasa malu atau kegelisahan atau mengandung tautan ke materi pornografi, tidak senonoh atau seksual dalam bentuk apa pun sebagaimana ditentukan oleh JConnect.co.id atas kebijakannya sendiri. Ketentuan Penggunaan Tambahan atau.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Memposting profil atau CV yang bukan profil atau CV asli dan dimaksudkan untuk mengiklankan atau mempromosikan produk atau layanan.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Pelanggaran keamanan jaringan dapat mengakibatkan pertanggungjawaban perdata dan pidana, dan JConnect.co.id dapat melibatkan dan bekerja sama dengan otoritas penegak hukum untuk menyelidiki peristiwa yang mungkin melibatkan pelanggaran tersebut dan untuk menuntut pengguna yang terlibat dalam pelanggaran tersebut. .
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==9){
?>
                                    <h3 id="toc9">&nbsp;I. Ketentuan Tambahan yang berlaku Bagi Pemberi Kerja</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id dengan ini memberi Anda hak terbatas, dapat diakhiri, dan non-eksklusif untuk mengakses dan menggunakan situs JConnect.co.id untuk tujuan bisnis internal pencarian kandidat. Anda dengan ini diberi wewenang untuk melihat dan mengunduh satu salinan Konten atau materi JConnect.co.id di Situs JConnect.co.id semata-mata hanya untuk penggunaan yang berhubungan langsung dengan pencarian kandidat dan rekrutmen.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id juga memberikan Anda hak terbatas, dapat diakhiri, dan non-eksklusif untuk menggunakan Layanan JConnect.co.id hanya untuk penggunaan internal Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda bertanggung jawab untuk menjaga kerahasiaan akun perusahaan, profil perusahaan, dan kata sandi Anda (jika ada).
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda tidak boleh membagikan kata sandi Anda atau informasi akses akun lainnya dengan orang lain, baik untuk sementara maupun permanen. Anda bertanggung jawab sepenuhnya dan/atau secara hukum bertanggung jawab atas semua penggunaan registrasi dan kata sandi situs JConnect.co.id Anda, dengan atau tanpa otorisasi Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda setuju untuk segera memberitahukan JConnect.co.id atas setiap penggunaan yang tidak sah dari akun perusahaan, profil perusahaan atau kata sandi Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Pemberi Kerja menyatakan, menjamin dan berjanji bahwa Materi Pemberi Kerja yang disediakan oleh Pemberi Kerja untuk digunakan sehubungan dengan Layanan JConnect.co.id tidak melanggar hukum atau hak milik pihak ketiga, termasuk, tanpa batasan, hak cipta, merek dagang, kecabulan, publisitas, privasi dan hukum pencemaran nama baik Pengguna harus.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Pemberi kerja mengakui dan setuju untuk mengabaikan data pribadi apa pun yang diterima dari kandidat yang tidak relevan untuk mendapatkan dan menilai kesesuaian kandidat.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Pemberi Kerja bertanggung jawab sepenuhnya atas Materi Pemberi Kerja di Situs JConnect.co.id; JConnect.co.id tidak akan dianggap sebagai pemberi kerja sehubungan dengan penggunaan Anda atas Situs JConnect.co.id dan JConnect.co.id akan tidak bertanggung jawab atas keputusan ketenagakerjaan yang dibuat oleh perusahaan yang memposting pekerjaan di situs JConnect.co.id dengan alasan apapun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Dokumen perusahaan tidak boleh menyertakan :
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Kata kunci yang menyesatkan, tidak terbaca atau 'tersembunyi', kata kunci yang berulang-ulang, kata kunci yang tidak relevan dengan informasi pekerjaan yang disajikan.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Nama, logo, atau merek dagang dari perusahaan yang tidak terafiliasi.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    informasi yang tidak akurat, salah atau menyesatkan dan
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Materi atau tautan ke materi yang diskriminatif, seksual, cabul, memfitnah, mengancam, melecehkan, kasar, penuh kebencian, atau yang mencari informasi pribadi dari orang yang berusia di bawah 18 tahun.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda tidak boleh menggunakan materi kami untuk tujuan berikut ini :
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Memposting pekerjaan dengan cara yang tidak mematuhi hukum lokal dan nasional yang berlaku, termasuk tetapi tidak terbatas pada hukum yang berkaitan dengan tenaga kerja dan ketenagakerjaan, kesempatan kerja yang sama dan persyaratan kelayakan kerja, privasi data, akses dan penggunaan data, serta kekayaan intelektual.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Menjual, mempromosikan atau mengiklankan produk atau layanan.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Buat daftar semua peluang waralaba, skema piramida, distribusi, dan pemasaran berjenjang.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    promosi peluang yang tidak menyiratkan pekerjaan yang sesungguhnya dan
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Mengiklankan layanan seksual atau merekrut karyawan untuk pekerjaan yang bersifat seksual.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak mendorong materi pemberi kerja di situs JConnect.co.id yang secara langsung atau tidak langsung mengharuskan kandidat untuk membayar deposit, biaya perkenalan, biaya pemrosesan atau biaya serupa lainnya dan/atau mengharuskan kandidat untuk membeli
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak menerima iklan yang mengiklankan lebih dari satu posisi kosong dalam satu pos kosong.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak berkewajiban untuk memantau Materi Perusahaan di Situs JConnect.co.id, namun JConnect.co.id dapat memantau Materi Perusahaan dari waktu ke waktu.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id berhak, dalam kebijaksanaan wajar JConnect.co.id, untuk menghapus Materi atau Konten kami jika diposting yang JConnect.co.id yakini tidak sesuai dengan Ketentuan ini atau tidak untuk kepentingan terbaik JConnect.co.id. JConnect.co.id berhak untuk menghapus Materi atau Konten kami dari situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Pemasangan ulang posisi yang sama diperbolehkan 14 hari setelah tanggal pemasangan lowongan kerja untuk meminimalisir duplikasi iklan lowongan kerja di situs JConnect.co.id, yang dikirimkan ulang kepada pengguna yang sama dalam waktu singkat.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Apabila, pada saat menggunakan Layanan JConnect.co.id, Pelanggan memberikan representasi yang tidak benar kepada JConnect.co.id atau menyesatkan JConnect.co.id mengenai sifat kegiatan usaha Pelanggan atau pelanggaran terhadap Ketentuan ini, JConnect.co.id akan mengakhiri penggunaan Layanan JConnect.co.id oleh Anda dan, dalam hal tersebut, Anda dapat berhenti menggunakan JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda memahami dan mengakui bahwa jika Anda membatalkan atau mengakhiri akun perusahaan Anda, profil JConnect.co.id Anda dan setiap JConnect.co.id yang tersimpan di JConnect.co.id Anda memahami dan menerima bahwa semua informasi akun Anda akan dianggap dihapus dan dapat dihapus dari database JConnect.co.id, dan karena keterlambatan server web JConnect.co.id yang mencerminkan penghapusan tersebut, informasi tersebut mungkin akan tetap tersedia untuk beberapa waktu. Hal ini dapat menyebabkan informasi tetap tersedia selama beberapa waktu.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==10){
?>
                                    <h3 id="toc10">&nbsp;J. Ketentuan Tambahan yang berlaku Untuk Pemegang Akun</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Jika Anda mendaftar atau mendapatkan akun untuk mengakses Database Resume JConnect.co.id, klausul ini berlaku untuk Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Harus berusia minimal 18 tahun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda harus menggunakan Database Resume JConnect.co.id sesuai dengan Syarat dan Ketentuan ini, kontrak Anda dengan JConnect.co.id dan semua hukum yang berlaku, termasuk tanpa batasan Undang-Undang Informasi Pribadi.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id memberi Anda hak terbatas, pribadi, dapat diakhiri, tidak dapat dipindahtangankan, dan tidak eksklusif untuk mengakses database CV JConnect.co.id melalui situs web JConnect.co.id semata-mata untuk tujuan melihat dan/atau mengunduh profil JConnect.co.id dan CV Anda yang tersedia sesuai dengan ketentuan klausul ini Anda diberikan hak terbatas, pribadi, dapat diakhiri, tidak dapat dipindahtangankan, dan tidak eksklusif untuk mengakses
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Database CV JConnect.co.id hanya dapat diakses dan digunakan oleh Anda. Anda akan diberikan kata sandi unik yang memberi Anda akses ke database CV.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda tidak boleh membagikan akun Anda dengan pihak ketiga lainnya.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda setuju untuk tidak mengungkapkan data dari database CV JConnect.co.id kepada pihak ketiga manapun kecuali Anda adalah agen perekrutan atau kepegawaian yang berwenang atau Anda secara tegas menggunakan profil JConnect.co.id dan CV Anda untuk tujuan pekerjaan Anda setuju untuk tidak mengungkapkan data apapun dari database CV JConnect.co.id kepada pihak ketiga manapun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda harus mengambil langkah-langkah fisik, teknis, dan administratif yang sesuai untuk melindungi data yang Anda peroleh dari JConnect.co.id Resume Database dari kehilangan, penyalahgunaan, akses tidak sah, perubahan pengungkapan, atau penghancuran.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Jangan gunakan database CV JConnect.co.id.
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    untuk tujuan apa pun selain sebagai pemberi kerja dan/atau atas nama pemberi kerja yang mencari pekerja; atau
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Mengirimkan panggilan telepon yang tidak diminta, faksimili, surat yang tidak diminta, email atau buletin kepada pemegang profil JConnect.co.id atau CV, atau menghubungi individu kecuali jika mereka telah memberikan persetujuannya.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Data yang diperoleh dari database resume JConnect.co.id tidak akan disimpan lebih lama dari yang diperlukan untuk memenuhi tujuan yang ditetapkan dalam klausul ini. Dalam hal ini, Anda setuju dan berjanji untuk menghapus, memusnahkan dan/atau menghapus data tersebut dari catatan Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            mempengaruhi bisnis JConnect.co.id, prospek bisnis, kinerja atau fungsionalitas situs JConnect.co.id atau database CV JConnect.co.id, atau menghalangi pelanggan lain untuk mengakses database CV Anda tidak boleh menggunakan database CV dengan cara apapun yang JConnect.co.id tentukan akan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id berhak untuk membatasi jumlah data yang Anda akses (termasuk profil JConnect.co.id dan tampilan CV Anda) selama periode waktu tertentu untuk memastikan pengalaman yang aman dan efektif bagi semua pelanggan. Batasan-batasan ini dapat berubah dari waktu ke waktu atas kebijakan JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda hanya dapat menggunakan pendaftaran Anda pada database CV JConnect.co.id untuk mencari pencari kerja menggunakan informasi yang terdapat dalam database CV JConnect.co.id untuk menjual atau mengiklankan produk atau jasa; atau mengambil tindakan lain yang dianggap JConnect.co.id tidak konsisten dengan syarat dan ketentuan ini, menyesatkan, tidak lengkap atau melanggar hukum atau peraturan apapun secara khusus dilarang.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id dapat menghentikan, menangguhkan, memperbarui, mengubah, atau menambah Database Resume JConnect.co.id, secara keseluruhan atau sebagian, setiap saat atas kebijakannya sendiri. Mengizinkan akses ke Database Resume JConnect.co.id JConnect.co.id tidak memberikan manfaat apa pun pada Database Resume atau properti atau layanan JConnect.co.id lainnya. Semua hak dan kepentingan dalam Database Resume adalah dan akan tetap menjadi milik JConnect.co.id.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==11){
?>
                                    <h3 id="toc11">&nbsp;K. Ketentuan Tambahan yang Berlaku Bagi Kandidat</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id dengan ini memberi Anda hak terbatas, dapat diakhiri, dan non-eksklusif untuk mengakses dan menggunakan Situs JConnect.co.id semata-mata untuk penggunaan pribadi Anda dalam mencari peluang kerja Anda sendiri. Konten JConnect.co.id atau Anda diizinkan untuk melihat dan mengunduh hanya satu salinan materi di Situs JConnect.co.id untuk penggunaan pribadi dan non-komersial Anda saja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Saat mendaftar di situs JConnect.co.id, Anda harus membuat akun dan memberikan JConnect.co.id informasi tertentu, termasuk alamat email yang valid.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Profil JConnect.co.id yang Anda kirimkan harus akurat, lengkap, terbaru dan tidak menyesatkan Anda harus melengkapi bidang standar dalam profil JConnect.co.id Anda. Anda tidak boleh menyamar sebagai orang lain, hidup atau mati.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda mengakui dan setuju bahwa Anda bertanggung jawab sepenuhnya atas bentuk, isi, dan keakuratan setiap Profil JConnect.co.id dan CV yang Anda posting di Situs Web JConnect.co.id atau setiap materi yang terkandung di dalamnya.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda mengakui dan setuju bahwa Anda bertanggung jawab sepenuhnya atas segala konsekuensi yang timbul dari postingan tersebut.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id berhak untuk menawarkan layanan dan produk pihak ketiga kepada Anda berdasarkan preferensi yang Anda identifikasi pada saat pendaftaran, kapan saja setelahnya atau ketika Anda menyetujui. Penawaran tersebut dapat dilakukan oleh JConnect.co.id atau oleh pihak ketiga.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Untuk informasi lebih lanjut tentang informasi Anda, silakan lihat Kebijakan Privasi JConnect.co.id Seperti yang dijelaskan dalam Kebijakan Privasi JConnect.co.id, JConnect.co.id mengumpulkan informasi pengguna tertentu dan Harap dicatat bahwa JConnect.co.id dapat menghubungi pengguna secara berkala sesuai dengan syarat dan ketentuan. Selain itu, JConnect.co.id berhak untuk mematuhi persyaratan hukum, permintaan penegak hukum dan permintaan dari lembaga pemerintah atas kebijakannya sendiri, bahkan jika pengungkapan informasi pengguna tertentu diperlukan untuk mematuhi persyaratan tersebut. Pihak ketiga juga dapat menyimpan salinan cache informasi pengguna.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda memahami dan mengakui bahwa semua informasi yang Anda berikan, profil JConnect.co.id Anda, resume dan/atau informasi akun akan diungkapkan kepada calon pemberi kerja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda memahami bahwa Anda tidak memiliki hak kepemilikan atas akun Anda dan jika Anda membatalkan akun JConnect.co.id Anda atau akun JConnect.co.id Anda dihentikan, profil JConnect.co.id, CV, surat lamaran, surat lamaran yang disimpan, dan surat lamaran Anda tidak dapat digunakan lagi. Anda memahami dan menerima bahwa semua informasi akun Anda, termasuk pekerjaan, akan dianggap dihapus dan dapat dihapus dari database JConnect.co.id dan dari semua area publik di situs JConnect.co.id. server web akan lambat untuk mencerminkan penghapusan, sehingga informasi Anda mungkin tetap tersedia untuk beberapa waktu. Selain itu, pihak ketiga dapat menyimpan salinan informasi Anda yang tersimpan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id berhak untuk menghapus akun Anda dan semua informasi jika tidak ada aktivitas untuk jangka waktu yang lama.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==12){
?>
                                    <h3 id="toc12">&nbsp;L. Konten dan Kiriman Pengguna</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Anda memahami bahwa semua Konten Pengguna adalah tanggung jawab sepenuhnya dari individu dari mana Konten Pengguna tersebut berasal.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda memahami dan mengakui bahwa semua informasi yang Anda berikan, profil JConnect.co.id, CV dan/atau informasi akun Anda akan disimpan pada database JConnect.co.id dan/atau database CV JConnect.co.id. .
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda memahami, mengakui dan menyetujui bahwa semua informasi yang Anda berikan, profil JConnect.co.id Anda, resume dan/atau informasi akun dapat ditransfer ke luar lokasi Anda untuk tujuan penyimpanan dan/atau pemrosesan. Untuk informasi lebih lanjut, silakan lihat Kebijakan Privasi JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Dengan mengirimkan, memposting atau menampilkan Konten Pengguna pada atau melalui Situs JConnect.co.id, Anda memberikan JConnect.co.id lisensi di seluruh dunia, non-eksklusif, bebas royalti untuk mereproduksi, mengadaptasi, mendistribusikan, dan mempublikasikan Konten Pengguna tersebut, tunduk pada pengaturan privasi Anda. JConnect.co.id akan mengakhiri penggunaan berlisensi ini dalam waktu yang wajar secara komersial setelah Konten Pengguna tersebut dihapus dari Situs JConnect.co.id. JConnect.co.id berhak, atas kebijakannya sendiri, untuk menolak menerima, memposting, menampilkan, atau mengirimkan Konten Pengguna apa pun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Jika Anda memposting Konten Pengguna ke area publik situs JConnect.co.id, Anda juga memberikan izin untuk mengakses, melihat, menyimpan dan mereproduksi Konten Pengguna tersebut untuk penggunaan pribadi Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id dapat, atas kebijakannya sendiri, mengidentifikasi dan menghapus setiap Konten Pengguna yang melanggar Ketentuan ini, melanggar hukum, aturan atau peraturan yang berlaku, kasar, mengganggu, menyinggung, ilegal atau melanggar hak atau membahayakan keselamatan pengguna Situs JConnect.co.id, atau JConnect.co.id berhak untuk menghapus setiap Konten Pengguna yang melanggar Ketentuan atau hukum, aturan atau peraturan yang berlaku dan untuk mencegah akses ke Situs JConnect.co.id dan/atau penggunaan Layanan JConnect.co.id. JConnect.co.id berhak untuk mengeluarkan setiap Konten Pengguna yang menurut pertimbangannya sendiri diyakini akan menyebabkan tanggung jawab kepada JConnect.co.id, merusak merek atau citra publik JConnect.co.id, atau menyebabkan JConnect.co.id kehilangan pengguna. JConnect.co.id dapat mengambil tindakan apa pun sehubungan dengan Konten Pengguna yang dianggap perlu atau sesuai dengan kebijakannya sendiri.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak mewakili atau menjamin kebenaran, keakuratan atau keandalan dari setiap Konten Pengguna, turunan dari Konten Pengguna atau komunikasi lainnya yang diposting oleh pengguna dan tidak mendukung setiap pendapat yang diungkapkan oleh pengguna. Anda mengakui bahwa setiap ketergantungan pada materi yang diposting oleh pengguna lain adalah risiko Anda sendiri.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==13){
?>
                                    <h3 id="toc13">&nbsp;M. Pembayaran Biaya</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Tidak ada pungutan biaya sepersenpun baik itu dari pihak perusahaan yang menggunakan JConnect ataupun dari pihak pencari kerja yang menggunakannya.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==14){
?>
                                    <h3 id="toc14">&nbsp;N. Hak JConnect.co.id Untuk Menangguhkan atau Membatalkan Pendaftaran Anda</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Kami dapat, atas kebijaksanaan kami yang wajar, atau jika Anda melanggar salah satu kewajiban Anda berdasarkan Syarat dan Ketentuan ini, segera menangguhkan atau membatalkan pendaftaran Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda dapat membatalkan pendaftaran Anda kapan saja dengan memberi tahu kami secara tertulis di sini. Dalam hal demikian, Anda harus berhenti menggunakan Situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Penangguhan atau pembatalan pendaftaran dan hak Anda untuk menggunakan situs JConnect.co.id tidak mempengaruhi hak atau kewajiban hukum dari salah satu pihak.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==15){
?>
                                    <h3 id="toc15">&nbsp;O. Jangka Waktu dan Batas Akhir</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Ketentuan ini akan tetap berlaku dan berkekuatan penuh selama Anda menjadi pengguna situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id berhak, atas kebijakan JConnect.co.id sendiri, untuk menghentikan pendaftaran Anda jika Anda melanggar Ketentuan ini atau jika JConnect.co.id tidak dapat memverifikasi atau mengotentikasi informasi yang telah Anda kirimkan untuk pendaftaran di Situs JConnect.co.id. Konten Pengguna dari Situs JConnect.co.id dan untuk mengupayakan semua upaya hukum, termasuk, tanpa batasan, penghentian segera pendaftaran Anda atau layanan lainnya dari Situs JConnect.co.id dan/atau JConnect.co.id kepada Anda. Anda berhak untuk melakukan semua upaya hukum termasuk, namun tidak terbatas pada, penghentian segera pendaftaran Anda dan/atau layanan lainnya dari Situs JConnect.co.id dan/atau JConnect.co.id kepada Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Setelah Anda berhenti menjadi pengguna situs JConnect.co.id, ketentuan-ketentuan tertentu dari Syarat dan Ketentuan ini, termasuk Bagian 5, 13, 15, 16, 17 dan 20, akan terus berlaku.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==16){
?>
                                    <h3 id="toc16">&nbsp;P. Kewajiban JConnect.co.id</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Situs web JConnect.co.id dan layanan JConnect.co.id berfungsi, antara lain, sebagai tempat untuk .
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Pemasangan lowongan pekerjaan oleh pemberi kerja atau agen mereka untuk mendapatkan dan mengevaluasi pelamar kerja.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Kandidat dapat memposting profil dan CV JConnect.co.id mereka, mencari dan mengevaluasi lowongan pekerjaan.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Pengiklan dapat memasang iklan.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak menyaring atau menyensor listing, termasuk profil JConnect.co.id yang disediakan, dan JConnect.co.id tidak terlibat dalam transaksi aktual antara pemberi kerja dan pencari kerja. Dengan demikian, JConnect.co.id tidak bertanggung jawab atas kualitas, keamanan atau legalitas konten pengguna, posting pekerjaan atau resume yang diposting di JConnect.co.id atau kebenaran atau keakuratan informasi yang diposting, kemampuan pemberi kerja untuk memberikan posting pekerjaan kepada pencari kerja, kemampuan pencari kerja untuk mengisi posting pekerjaan Tidak ada tanggung jawab yang diasumsikan dan JConnect.co.id tidak membuat representasi tentang pekerjaan-pekerjaan di Situs JConnect.co.id, profil JConnect.co.id, CV atau Konten Pengguna.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id berhak, atas kebijakannya sendiri, untuk menghapus setiap Konten Pengguna dari Situs JConnect.co.id dari waktu ke waktu, termasuk namun tidak terbatas pada Profil JConnect.co.id, Profil Perusahaan, Materi Perusahaan atau materi lainnya . dalam hal JConnect.co.id melaksanakan diskresi ini dan telah terjadi pelanggaran Syarat dan Ketentuan ini oleh Pengguna.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Situs JConnect.co.id juga menyediakan konten dari situs atau sumber internet lainnya. jconnect.co.id berupaya untuk memastikan bahwa materi yang terdapat pada Situs JConnect.co.id adalah benar, bereputasi baik dan berkualitas tinggi. Jika JConnect.co.id mengetahui adanya kesalahan dalam materi di Situs JConnect.co.id, kami akan berusaha untuk memperbaikinya sesegera mungkin.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Harap diperhatikan bahwa ada risiko yang terkait dengan berurusan dengan orang asing, anak di bawah umur dan penipu, termasuk tetapi tidak terbatas pada risiko cedera tubuh. Anda menanggung semua risiko yang terkait dengan berurusan dengan pengguna lain yang berhubungan dengan Anda melalui situs JConnect.co.id. Informasi tentang orang lain mungkin bersifat menyinggung, berbahaya atau tidak akurat menurut sifatnya dan dalam beberapa kasus bersifat misrepresentatif atau menipu Kami mengharapkan Anda untuk menggunakan kehati-hatian dan akal sehat ketika menggunakan situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Situs JConnect.co.id dan Konten JConnect.co.id mungkin mengandung ketidakakuratan atau kesalahan ketik. JConnect.co.id tidak membuat pernyataan tentang keakuratan, keandalan, kelengkapan atau ketepatan waktu dari Situs JConnect.co.id atau Konten JConnect.co.id. Penggunaan seluruh Situs Web JConnect.co.id dan Konten JConnect.co.id merupakan risiko Anda sendiri.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Tidak ada apapun di situs JConnect.co.id yang dapat dianggap sebagai dukungan, representasi atau jaminan mengenai pengguna atau pihak ketiga manapun, baik yang berhubungan dengan situs web, produk, layanan, perekrutan, pengalaman, pekerjaan, praktik perekrutan atau sebaliknya.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Jika kami melanggar Syarat dan Ketentuan ini, kami hanya akan bertanggung jawab atas kerugian yang Anda alami sebagai akibat langsung, sejauh konsekuensi tersebut dapat diperkirakan oleh kedua belah pihak pada saat Anda menggunakan situs JConnect.co.id. Dalam hal apa pun tanggung jawab kami tidak akan mencakup kerugian bisnis seperti kehilangan data, kehilangan keuntungan, atau gangguan bisnis.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Tanggung jawab total JConnect.co.id kepada Anda untuk semua klaim yang timbul dari penggunaan Anda atas Situs Web JConnect.co.id dan/atau Layanan JConnect.co.id akan dibatasi.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==17){
?>
                                    <h3 id="toc17">&nbsp;Q. Penolakan</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak bertanggung jawab atas kehilangan informasi yang diakibatkan oleh gangguan, penangguhan, atau penghentian layanan JConnect.co.id atau atas akurasi atau kualitas dari setiap konten atau informasi JConnect.co.id yang tersedia atau dikirimkan melalui layanan JConnect.co.id. 
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Bukan merupakan kebijakan Anda untuk melakukan kontrol editorial atas data atau isi dari setiap email atau posting yang dimasukkan atau disediakan atau dikirimkan kepada pihak ketiga pada atau melalui Situs Web JConnect.co.id dan/atau Layanan JConnect.co.id. Anda mengakui dan setuju bahwa.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==18){
?>
                                    <h3 id="toc18">&nbsp;R. Situs Web Pihak Ketiga</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Demi kenyamanan Anda, situs web JConnect.co.id berisi tautan ke situs web atau materi lain yang tidak berada di bawah kendali kami. JConnect.co.id tidak bertanggung jawab atas isi dari situs-situs di luar situs JConnect.co.id.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==19){
?>
                                    <h3 id="toc19">&nbsp;S. Kebijakan Periklanan dan Sponsor</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Bagian dari situs JConnect.co.id mungkin berisi iklan dan sponsor. Pengiklan dan sponsor bertanggung jawab untuk memastikan bahwa materi yang dikirimkan untuk dimasukkan ke dalam situs JConnect.co.id sesuai dengan hukum dan kode yang relevan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id berhak, atas kebijakan JConnect.co.id sendiri, untuk menolak mempublikasikan iklan apa pun yang tidak sesuai untuk dipublikasikan di situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak bertanggung jawab kepada Anda atas kesalahan atau ketidakakuratan dalam materi iklan dan sponsor.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==20){
?>
                                    <h3 id="toc20">&nbsp;T. Ganti Rugi</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Anda setuju untuk membela, mengganti kerugian dan membebaskan JConnect.co.id dan afiliasinya serta pejabat, direktur, karyawan dan agennya masing-masing dari setiap dan semua klaim, tindakan atau tuntutan, termasuk tanpa batasan biaya hukum dan akuntansi yang wajar, yang dituduhkan atau yang timbul dari salah satu dari berikut ini Anda setuju untuk membela, mengganti kerugian dan membebaskan JConnect.co.id dan afiliasinya, dan masing-masing pejabat, direktur, karyawan dan agennya dari setiap dan semua klaim, tindakan atau tuntutan, termasuk namun tidak terbatas pada biaya hukum dan akuntansi yang wajar :
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Setiap Konten Pengguna atau materi lainnya yang Anda berikan kepada situs JConnect.co.id.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Penggunaan Anda atas Konten JConnect.co.id atau.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Jika pelanggan melanggar Syarat dan Ketentuan ini.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id akan segera memberi tahu Anda tentang klaim atau proses tersebut.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==21){
?>
                                    <h3 id="toc22">&nbsp;U. Hukum yang Berlaku</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Syarat dan Ketentuan ini diatur oleh hukum Indonesia.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Kami berusaha keras untuk menyelesaikan sengketa dengan cepat dan efisien. Jika Anda tidak puas dengan metode penyelesaian perselisihan kami dan ingin melanjutkan ke proses pengadilan, silakan lakukan di Indonesia.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==22){
?>
                                    <h3 id="toc23">&nbsp;V. Penggunaan Internasional</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Anda juga dilarang mengakses Situs Web JConnect.co.id dari wilayah-wilayah di mana isi dari Situs Web JConnect.co.id adalah ilegal atau melanggar hukum. Jika Anda memilih untuk mengakses situs web JConnect.co.id ini dari lokasi Anda, Anda melakukannya atas kebijaksanaan Anda sendiri dan bertanggung jawab untuk mematuhi hukum setempat.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==23){
?>
                                    <h3 id="toc24">&nbsp;W. Aneka Ragam</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Anda tidak boleh mengalihkan hak-hak Anda berdasarkan Ketentuan ini kepada orang lain. Kami dapat mengalihkan hak-hak kami berdasarkan Ketentuan ini ke entitas lain jika kami secara wajar menentukan bahwa hal itu tidak akan memengaruhi hak-hak Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Jika Anda melanggar Ketentuan ini dan JConnect.co.id memilih untuk mengabaikannya, JConnect.co.id tetap memiliki hak untuk menggunakan hak dan upaya hukumnya di kemudian hari atau dalam keadaan lain di mana Anda melanggar Ketentuan.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak bertanggung jawab atas pelanggaran Syarat dan Ketentuan ini yang disebabkan oleh keadaan di luar kendali yang wajar.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Jika salah satu dari Syarat dan Ketentuan ini ditemukan tidak sah atau tidak dapat dilaksanakan oleh pengadilan atau badan administratif yurisdiksi yang kompeten, ketidakabsahan atau ketidakberlakuan ketentuan tersebut tidak akan mempengaruhi ketentuan lain dari Syarat dan Ketentuan ini dan semua ketentuan yang tidak terpengaruh oleh ketidakabsahan atau ketidakberlakuan tersebut akan tetap berlaku dan memiliki kekuatan penuh.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id telah mengambil, dan akan terus mengambil, semua langkah yang wajar untuk mematuhi kewajibannya sebagai pemroses data yang timbul dari hukum yang berlaku yang berkaitan dengan perlindungan data dan privasi dari waktu ke waktu sejauh kewajiban tersebut berhubungan dengan Perjanjian ini. Selain itu, kami telah mengambil langkah-langkah untuk menerapkan program keamanan informasi, termasuk tindakan administratif, teknis dan fisik yang wajar, yang dirancang untuk melindungi kerahasiaan, integritas dan ketersediaan semua informasi rahasia saat berada dalam kepemilikan pihak tersebut dari akses yang tidak sah, melanggar hukum atau tidak disengaja; dan bermaksud untuk mempertahankan hal ini di masa mendatang. Akses, pengungkapan, pemindahan, pemindahan, penghancuran, kehilangan atau perubahan yang tidak sah. Namun demikian, istilah informasi rahasia tidak boleh mencakup informasi yang mengidentifikasi atau secara langsung berhubungan dengan orang perorangan ('data pribadi').
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==24){
?>
                                    <h3 id="toc25">&nbsp;X. Umum</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Situs web JConnect.co.id dimiliki dan dioperasikan oleh JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Jika Anda memiliki pertanyaan, silakan hubungi kami <a href="<?=base_url()?>contact">disini</a>.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Pemberitahuan kepada JConnect.co.id harus dikirim ke alamat yang diberikan pada situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Kami akan mengirimkan pemberitahuan ke alamat yang Anda kirimkan atau ke alamat lain yang JConnect.co.id yakini sesuai untuk Anda.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
?>
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