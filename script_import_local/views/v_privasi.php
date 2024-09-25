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
                        <h2>Kebijakan Privasi</h2>
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
                            <h4><b>Daftar Kebijakan Privasi</b></h4>
                        </div>
                    </div>
                </div>
                <div class="job-category-listing mb-50" id='side_myjconnect'>
                        <div class="single-listing">

                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy">PEMBUKAAN</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/informasi_pribadi">A. KOLEKSI INFORMASI PRIBADI</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/tujuan_pengumpulan_data">B. TUJUAN PENGUMPULAN DAN PENGGUNAAN INFORMASI PRIBADI</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/profile">C. PROFIL JCONNECT.CO.ID</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/pilihan_akses">D. PILIHAN DAN AKSES INFORMASI PRIBADI</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/retensi_informasi">E. RETENSI INFORMASI PRIBADI</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/keamanan_informasi">F. KEAMANAN INFORMASI PRIBADI</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/kepada_siapa">G. KEPADA SIAPA INFORMASI PRIBADI DIUNGKAPKAN</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/kewajiban_anda">H. KEWAJIBAN ANDA MENGENAI INFORMASI PRIBADI ANDA</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/transfer_informasi">I. TRANSFER INFORMASI PRIBADI ANDA LUAR YURISDIKSI LOKAL ANDA</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/situs_terkait">J. SITUS TERKAIT</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/persetujuan_anda">K. PERSETUJUAN ANDA</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>privacy/kontak_informasi">L. KONTAK INFORMASI</a>
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
                                <td>
<?php
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==1){
?>
                                    <h3 id="toc1">PEMBUKAAN</h3>
                                    <p align="justify">
                                    Hai, Privasi Anda penting bagi JConnect.co.id. Harap baca Pemberitahuan Privasi ini dengan cermat karena merupakan bagian dari Ketentuan Penggunaan yang mengatur penggunaan Layanan JConnect.co.id dan Situs Web JConnect.co.id. Ketentuan ini berlaku sejak <b>01 Agustus 2022</b>.
                                    <br>
                                    Pemberitahuan Privasi ini menjelaskan :
                                    </p>
                                        <ol class="ordered-list">
                                            <li align="justify">
                                                <p align="justify">
                                                Jenis informasi pribadi tentang Anda yang diproses oleh JConnect.co.id saat Anda menggunakan Layanan JConnect.co.id dan/atau Situs Web JConnect.co.id
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                Bagaimana JConnect.co.id memproses informasi pribadi tentang Anda saat Anda menggunakan Layanan JConnect.co.id dan Situs Web JConnect.co.id
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                Tujuan JConnect.co.id mengumpulkan dan memproses informasi pribadi Anda
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                Hak Anda untuk mengakses dan memperbaiki informasi pribadi Anda
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                Kelompok pihak ketiga yang dapat dituju oleh JConnect.co.id untuk mengungkapkan informasi pribadi Anda
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                Apakah wajib atau sukarela bagi Anda untuk memberikan informasi pribadi dan konsekuensi dari kegagalan memberikan informasi pribadi Anda ketika itu wajib dan
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                Bagaimana JConnect.co.id menjaga kerahasiaan dan keamanan informasi pribadi Anda
                                                </p>
                                            </li>
                                        </ol>
                                    <p align="justify">
                                    Setiap perubahan akan diberitahukan kepada Anda melalui alamat email yang Anda berikan saat pendaftaran atau melalui pengumuman yang sesuai di Situs Web JConnect.co.id. Jika kami membuat perubahan materi apa pun, kami akan memberi tahu Anda melalui email (dikirim ke alamat email yang ditentukan di akun Anda) atau melalui pemberitahuan di Situs ini sebelum perubahan menjadi efektif. Perubahan akan berlaku untuk penggunaan Layanan JConnect.co.id dan Situs Web JConnect.co.id setelah JConnect.co.id memberi Anda pemberitahuan. Jika Anda tidak ingin menerima Persyaratan baru, Anda tidak boleh terus menggunakan Layanan JConnect.co.id dan/atau Situs Web JConnect.co.id. Jika Anda terus menggunakan Layanan JConnect.co.id dan/atau Situs Web JConnect.co.id setelah tanggal berlakunya perubahan, penggunaan Layanan JConnect.co.id dan/atau JConnect.
                                    <br>
                                    Dalam Pemberitahuan Privasi ini :
                                    </p>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            “JConnect.co.id“, “Layanan JConnect.co.id“, “Situs Web JConnect.co.id“, “Anda“, “Pengiklan” dan “Pengusaha” memiliki arti yang sama seperti yang didefinisikan dalam Ketentuan Penggunaan
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            “Profil JConnect.co.id” berarti profil yang dibuat oleh pengguna Situs Web JConnect.co.id yang dapat mencakup informasi pribadi, resume, kredensial, sertifikasi, dan foto
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            “informasi pribadi” adalah data yang dapat digunakan untuk mengidentifikasi individu
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Yang dimaksud dengan “mengolah” termasuk tetapi tidak terbatas pada pengumpulan, penyimpanan, penyimpanan, pencatatan, pengorganisasian, pengadaptasian, penggunaan, pengungkapan, pembetulan dan pemusnahan
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            “Akun ” berarti akses yang diberikan kepada Pemberi Kerja atau Pengiklan atau Personil Resmi ke Sistem Manajemen Perekrutan JConnect.co.id.
                                            </p>
                                        </li>
                                    </ol>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==2){
?>
                                    <h3 id="toc2">&nbsp;A. KOLEKSI INFORMASI PRIBADI</h3>
                                    <p align="justify">
                                        Kami dapat mengumpulkan, menggunakan dan/atau memproses informasi yang Anda berikan kepada kami dalam keadaan berikut :
                                    </p>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Saat Anda mendaftar untuk Layanan JConnect.co.id
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    Setiap kali Anda mendaftar ke JConnect.co.id untuk salah satu Layanan JConnect.co.id, Anda akan diminta untuk memberikan informasi pribadi tertentu tentang diri Anda untuk membuat akun MyJConnect.co.id.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Informasi pribadi yang dikumpulkan selama proses pendaftaran termasuk tetapi tidak terbatas pada alamat email, nama, kebangsaan, nomor kartu identitas, nomor paspor, negara tempat tinggal Anda.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Kapan pun informasi pribadi yang diminta oleh JConnect.co.id ditandai sebagai “Bidang Wajib diisi”, Anda harus memberikan dan menyetujui pemrosesan informasi pribadi ini oleh JConnect.co.id. Anda tidak wajib memberikan informasi pribadi Anda kepada kami. Namun, jika Anda tidak setuju untuk memberikan informasi pribadi ini dan/atau tidak setuju kami memprosesnya dengan cara yang ditetapkan dalam Pemberitahuan Privasi ini, maka JConnect.co.id tidak akan dapat memberikan layanan yang relevan kepada Anda dan aplikasi Anda untuk hal tersebut. layanan akan ditolak.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Beberapa Pengiklan dan/atau Perusahaan mungkin juga meminta Anda untuk menjawab daftar pertanyaan yang dipilih oleh Pengiklan dan/atau Perusahaan tersebut sebagai bagian dari aplikasi online Anda. Dengan menjawab pertanyaan Aplikasi, Anda mengakui bahwa JConnect.co.id akan memberikan jawaban Anda kepada Pengiklan dan/atau Perusahaan tersebut dan dapat menggunakan jawaban Anda untuk mengisi Profil JConnect.co.id Anda dan memungkinkan Pengiklan dan/atau Perusahaan untuk memunculkan informasi tersebut saat menggunakan Pencarian Bakat. JConnect.co.id juga dapat menggunakan jawaban Anda untuk meningkatkan produk kami, termasuk melalui peningkatan kemampuan pencarian dan pencocokan kami.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Dari penggunaan Anda atas Layanan JConnect.co.id dan/atau Situs Web JConnect.co.id
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    Kami mengumpulkan informasi pribadi langsung dari Anda ketika Anda memilih untuk menggunakan Layanan JConnect.co.id dan/atau menggunakan Situs Web JConnect.co.id. Berikut ini adalah contoh informasi pribadi yang dapat dikumpulkan JConnect.co.id langsung dari Anda :
                                                    </p>
                                                    <ol class="ordered-list-roman">
                                                        <li>
                                                            <p align="justify">Usia</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Tanggal Lahir</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Nomor telepone atau nomor ponsel</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Foto anda</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Kualifikasi akademik</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Dokumen identitas yang diberikan oleh sekolah/perguruan tinggi/universitas/lembaga</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Melanjutkan</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Minat dan Preferensi Pribadi</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Pengalaman kerja</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Rincian kartu kredit atau kartu debit</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Informasi lain yang terkait dengan resume untuk lamaran kerja pengiklan</p>
                                                        </li>
                                                    </ol>
                                                    <p align="justify">
                                                        JConnect.co.id mengumpulkan nama perusahaan, alamat bisnis, dan alamat Pengiklan. Itu juga mengumpulkan nama, alamat email dan nomor telepon dari kontak utama (juga disebut di Situs sebagai 'administrator'). Pengiklan dapat memilih untuk menambahkan pengguna tambahan ke akun mereka, dalam hal ini JConnect.co.id akan mengumpulkan nama dan alamat email pengguna lain tersebut. Pengiklan dapat mengubah nama perusahaan, alamat Pengiklan, atau detail lainnya dengan menghubungi Manajer Akun yang ditunjuk. JConnect.co.id menggunakan detail ini untuk mengelola akun Anda, termasuk mengirimkan aplikasi Calon Pengiklan, menghubungi Pengiklan jika ada masalah dengan iklan lowongan mereka dan mengatur pembuatan akun.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Jika Anda memilih untuk menambahkan pemberi referensi ke Profil JConnect.co.id Anda, JConnect.co.id akan menanyakan nama, nomor telepon, email, jabatan, dan keterangan terkait lainnya kepada Anda. Informasi ini akan dilampirkan sebagai bagian dari lamaran pekerjaan Anda dan pemberi kerja dapat menghubungi mereka untuk mendapatkan referensi untuk aplikasi Anda.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Jika Anda memilih untuk menggunakan Layanan JConnect.co.id untuk memberi tahu teman tentang layanannya atau Situs Web JConnect.co.id, JConnect.co.id akan menanyakan nama dan alamat email teman Anda. Email yang mengundang teman Anda untuk menggunakan Layanan JConnect.co.id atau mengunjungi Situs Web JConnect.co.id akan dikirimkan kepadanya secara otomatis.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Jika Anda ingin menghentikan JConnect.co.id memproses jenis informasi pribadi tentang Anda ini, JConnect.co.id tidak akan lagi dapat memberikan layanan yang relevan kepada Anda.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Selain itu, JConnect.co.id dapat meminta izin Anda untuk memposting testimonial atau kisah sukses Anda. Jika Anda setuju untuk memposting materi Anda di Situs Web JConnect.co.id, Anda harus menyadari bahwa setiap informasi pribadi yang Anda kirimkan dapat dibaca, dikumpulkan, atau digunakan oleh pengguna Situs Web JConnect.co.id lainnya dan dapat digunakan untuk mengirimi Anda pesan yang tidak diminta. Jika Anda ingin memperbarui atau menghapus testimonial Anda, Anda dapat menghubungi kami di sini.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Saat Anda mengunjungi Situs Web JConnect.co.id
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Saat Anda mengunjungi Situs Web JConnect.co.id, server web kami secara otomatis mengumpulkan informasi tentang kunjungan Anda ke situs web ini, termasuk alamat Protokol Internet (IP), waktu, tanggal, dan durasi kunjungan Anda. Alamat IP Anda adalah pengidentifikasi unik untuk komputer Anda atau perangkat akses lainnya.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id dapat melacak kunjungan Anda ke Situs Web JConnect.co.id dengan menempatkan "cookie" di komputer Anda atau perangkat akses lainnya saat Anda masuk. Cookie adalah file teks kecil yang ditempatkan di komputer Anda atau perangkat akses lainnya oleh situs web yang Anda kunjungi. Mereka banyak digunakan untuk membuat situs web berfungsi, atau bekerja lebih efektif, serta untuk memberikan informasi kepada pemilik situs web.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Cookie memungkinkan JConnect.co.id menyimpan preferensi untuk Anda sehingga Anda tidak perlu memasukkannya kembali pada kunjungan berikutnya. Cookie juga membantu JConnect.co.id mengumpulkan data aliran klik anonim untuk melacak tren dan pola pengguna. JConnect.co.id dapat menggunakan data aliran klik anonim untuk membantu Pengiklan mengirimkan iklan yang ditargetkan dengan lebih baik.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Anda dapat menghapus cookie dengan mengikuti petunjuk yang disediakan di file "bantuan" browser internet Anda. Anda harus memahami bahwa area situs web tertentu tidak akan berfungsi dengan baik jika Anda mengatur browser internet Anda untuk tidak menerima cookie.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id juga menggunakan gif yang jelas dalam email berbasis HTML untuk mengetahui email mana yang telah dibuka oleh penerima. Hal ini memungkinkan JConnect.co.id untuk mengukur efektivitas komunikasi tertentu dan efektivitas kampanye pemasarannya.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Mitra dan penyedia layanan kami menggunakan cookie untuk mengumpulkan informasi tentang penggunaan Situs Web JConnect.co.id. Penggunaan cookie oleh mitra dan penyedia layanan kami tidak tercakup dalam kebijakan privasi kami. Kami tidak memiliki akses atau kontrol atas cookie ini.
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==3){
?>
                                    <h3 id="toc3">&nbsp;B. TUJUAN PENGUMPULAN DAN PENGGUNAAN INFORMASI PRIBADI</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Tujuan JConnect.co.id memproses informasi pribadi Anda adalah sebagai berikut :
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk memverifikasi identitas Anda
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk menilai dan/atau memverifikasi kelayakan kerja dan kelayakan kredit Anda;
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk menyediakan Layanan JConnect.co.id yang Anda minta (termasuk menggunakan kecerdasan buatan (“AI”) dan analisis data terkait dengan informasi pribadi untuk meningkatkan kemampuan JConnect.co.id dalam menyediakan layanan ini)
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk mengelola dan mengelola Layanan JConnect.co.id yang diberikan kepada Anda
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk menghubungi Anda sehubungan dengan Layanan JConnect.co.id
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk memfasilitasi penyediaan bagi Anda penawaran pendidikan yang disesuaikan dan meningkatkan prospek karir Anda dengan memberikan informasi Anda kepada mitra strategis kami
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk meningkatkan peluang penempatan bagi Anda atau untuk menyesuaikan layanan khusus untuk Anda
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk memverifikasi kualifikasi akademik dan profesional Anda dengan menghubungi sekolah/perguruan tinggi/universitas/lembaga/badan kualifikasi profesional
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk menghubungi wasit dan/atau penjamin yang rinciannya telah Anda berikan
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk memproses pesanan Anda untuk Layanan JConnect.co.id yang telah Anda minta
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk menyelidiki dan menyelesaikan setiap Layanan JConnect.co.id, pertanyaan penagihan, keluhan, atau pertanyaan lain yang Anda kirimkan ke JConnect.co.id terkait Layanan JConnect.co.id
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk mengelola pelatihan staf dan jaminan kualitas
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk memantau dan meningkatkan kinerja Situs Web JConnect.co.id dan Layanan JConnect.co.id
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk memelihara dan mengembangkan Situs Web JConnect.co.id dan Layanan JConnect.co.id
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk mendapatkan pemahaman tentang kebutuhan informasi dan komunikasi Anda agar JConnect.co.id dapat meningkatkan dan menyesuaikan Layanan JConnect.co.id
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk melakukan penelitian dan pengembangan dan analisis statistik sehubungan dengan Layanan JConnect.co.id untuk mengidentifikasi tren dan mengembangkan layanan baru yang mencerminkan minat Anda
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk membantu JConnect.co.id dalam memahami preferensi penelusuran Anda di Situs Web JConnect.co.id sehingga JConnect.co.id dapat menyesuaikan konten yang sesuai
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk mendeteksi dan mencegah aktivitas penipuan
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda mungkin tidak dapat membatasi pemrosesan informasi pribadi Anda untuk tujuan yang ditetapkan dalam Klausul 2.1 di atas. Meskipun penyediaan informasi pribadi Anda kepada kami bersifat sukarela, jika Anda tidak menyetujui JConnect.co.id memproses informasi pribadi Anda untuk tujuan tersebut, Anda harus mengakhiri perjanjian Anda yang relevan dengan JConnect.co.id untuk Layanan JConnect.co.id dan berhenti menggunakan Situs JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Selain itu, JConnect.co.id dapat menggunakan informasi pribadi Anda untuk tujuan berikut:
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk mempromosikan dan memasarkan kepada Anda:
                                                    </p>
                                                    <ol class="ordered-list-roman">
                                                        <li align="justify">
                                                            <p align="justify">Layanan JConnect.co.id Lainnya; atau</p>
                                                        </li>
                                                        <li align="justify">
                                                            <p align="justify">Layanan pihak ketiga yang menurut JConnect.co.id mungkin menarik bagi Anda</p>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk mengirimi Anda pesan ucapan selamat musiman dan/atau pesan yang memberi tahu Anda tentang kesalahan kinerja kritis di Situs Web JConnect.co.id dan/atau Layanan JConnect.co.id.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk mengirimkan tips, saran, dan informasi survei kepada Anda untuk memaksimalkan pengembangan karir Anda termasuk namun tidak terbatas pada penggunaan Layanan JConnect.co.id dan/atau Situs Web JConnect.co.id.
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id akan meminta persetujuan Anda sebelum memproses informasi pribadi Anda selain yang ditetapkan dalam Klausul B.1 dan B.3.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==4){
?>
                                    <h3 id="toc4">&nbsp;C.  PROFIL JCONNECT.CO.ID</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            1.  JConnect.co.id memberi Anda pilihan untuk menempatkan Profil JConnect.co.id Anda di Database Resume JConnect.co.id asalkan Anda menggunakan format preset JConnect.co.id untuk mengunggah informasi Anda. Ada dua cara untuk melakukannya:
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    Anda dapat menyimpan Profil JConnect.co.id Anda di Basis Data Resume JConnect.co.id, tetapi tidak mengizinkannya untuk dapat dicari oleh calon Pemberi Kerja atau Pengiklan atau Pemegang Akun . Tidak mengizinkan Profil JConnect.co.id Anda dapat dicari berarti Anda dapat menggunakannya untuk melamar pekerjaan secara online, tetapi Pengusaha atau Pengiklan atau Pemegang Akun  tidak akan memiliki akses untuk mencarinya melalui Basis Data Resume JConnect.co.id
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Anda dapat mengizinkan Profil JConnect.co.id Anda dapat dicari oleh Pengusaha atau Pengiklan atau Pemegang Akun . Saat Anda memilih untuk membuat Profil JConnect.co.id Anda dapat dicari, profil lengkap, resume, dan informasi pribadi Anda akan terlihat oleh Pengusaha atau Pengiklan atau Pemegang Akun  yang mengunduh Profil JConnect.co.id Anda dari Database Resume JConnect.co.id
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id menggunakan upaya terbaiknya untuk membatasi akses ke Database Resume JConnect.co.id hanya untuk mereka yang telah berlangganan Layanan JConnect.co.id, pihak-pihak ini dapat menyimpan salinan Profil JConnect.co.id Anda di file atau database mereka sendiri.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id akan mengambil langkah-langkah yang wajar untuk memastikan bahwa pihak selain yang disebutkan di atas tidak akan, tanpa persetujuan JConnect.co.id, mendapatkan akses ke Database Resume JConnect.co.id. Namun, JConnect.co.id tidak bertanggung jawab atas penyimpanan, penggunaan, atau privasi Profil JConnect.co.id oleh pihak ketiga mana pun.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Terlepas dari Klausul 3.1, JConnect.co.id berhak untuk memiliki akses penuh ke Profil JConnect.co.id Anda untuk tujuan yang ditetapkan dalam Klausul B.1 untuk melakukan Layanan JConnect.co.id.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==5){
?>
                                    <h3 id="toc5">&nbsp;D. PILIHAN DAN AKSES INFORMASI PRIBADI</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Anda mungkin memiliki masalah privasi yang berbeda. Tujuan JConnect.co.id adalah untuk memperjelas informasi apa yang dikumpulkannya, sehingga Anda dapat membuat pilihan yang berarti tentang cara penggunaannya. Sebagai contoh :
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Anda dapat mengontrol dengan siapa Anda membagikan informasi pribadi Anda
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Anda dapat meninjau dan mengontrol langganan Anda ke berbagai preferensi pemasaran, Layanan JConnect.co.id
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Anda dapat melihat, mengedit, atau menghapus informasi dan preferensi pribadi Anda kapan saja
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Anda dapat memilih untuk tidak menerima materi pemasaran apa pun dari JConnect.co.id
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    eAnda juga dapat berlangganan Layanan JConnect.co.id tambahan dengan masuk ke akun MyJConnect.co.id
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda dapat menghapus akun MyJConnect.co.id Anda kapan saja di mana JConnect.co.id akan menghapus semua akses ke akun, resume, dan Profil JConnect.co.id Anda di database. Penghapusan akun MyJConnect.co.id Anda tidak memengaruhi Profil JConnect.co.id yang telah Anda kirimkan ke Perusahaan atau yang sebelumnya diunduh oleh Perusahaan, Pengiklan, atau Pemegang Akun .
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==6){
?>
                                    <h3 id="toc6">&nbsp;E. RETENSI INFORMASI PRIBADI</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id akan menyimpan informasi pribadi Anda selama periode yang diperlukan untuk memenuhi tujuan yang ditetapkan dalam Klausul B di atas dan tujuan hukum atau bisnis apa pun.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==7){
?>
                                    <h3 id="toc7">&nbsp;F. KEAMANAN INFORMASI PRIBADI</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id berkomitmen untuk menjaga keamanan informasi pribadi. JConnect.co.id memiliki prosedur teknis, administratif, dan fisik yang sesuai untuk melindungi informasi pribadi dari kehilangan, pencurian, dan penyalahgunaan, serta terhadap akses, pengungkapan, perubahan, dan penghancuran yang tidak sah. Informasi sensitif yang dimasukkan pada layanan kami dienkripsi selama transmisi informasi tersebut menggunakan teknologi lapisan soket aman (SSL).
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Tidak ada metode transmisi melalui Internet, atau metode penyimpanan elektronik, yang 100% aman. Oleh karena itu, kami tidak dapat menjamin keamanan mutlaknya. Jika Anda memiliki pertanyaan tentang keamanan di situs Web kami.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==8){
?>
                                    <h3 id="toc8">&nbsp;G. KEPADA SIAPA INFORMASI PRIBADI DIUNGKAPKAN</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Informasi pribadi yang disebutkan dalam Klausul A di atas dapat diungkapkan kepada kelas pihak ketiga sebagai berikut agar JConnect.co.id dapat mengelola bisnisnya secara efektif termasuk memberikan Layanan JConnect.co.id kepada Anda untuk mencapai tujuan yang dijelaskan dalam Klausul B di atas :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">Pengiklan</p>
                                                </li>
                                                <li>
                                                    <p align="justify">Pemberi Kerja</p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Pihak ketiga yang dikontrak oleh JConnect.co.id untuk membantu JConnect.co.id dalam memberikan semua atau sebagian Layanan JConnect.co.id kepada Anda, termasuk namun tidak terbatas pada hal-hal berikut :
                                                    </p>
                                                    <ol class="ordered-list-roman">
                                                        <li>
                                                            <p align="justify">Jasa pembuatan profil/penilaian</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Layanan periklanan online</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Layanan pemetaan</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Layanan pemeliharaan dan perbaikan dan</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">Layanan riset pasar dan analisis penggunaan situs web</p>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mitra strategis yang bekerja dengan JConnect.co.id untuk menyediakan Layanan JConnect.co.id atau yang membantu memasarkan dan mempromosikan Layanan JConnect.co.id dan/atau Situs Web JConnect.co.id
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Mitra strategis yang menyediakan layanan tambahan seperti penawaran pendidikan untuk tujuan meningkatkan prospek karir dan/atau kualifikasi profesional Anda.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Sekolah/perguruan tinggi/universitas/lembaga tempat Anda belajar dan wasit Anda untuk memverifikasi kualifikasi akademik Anda
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Badan kualifikasi profesional tempat Anda memperoleh akreditasi
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Di mana Anda masuk ke Situs Web JConnect.co.id menggunakan Facebook Connect – teman Facebook Anda yang juga telah masuk ke situs kami menggunakan Facebook Connect
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Badan pengatur, badan pemerintah atau otoritas lain jika diperlukan atau diberi wewenang untuk melakukannya untuk menjalankan fungsi pengaturan apa pun, berdasarkan undang-undang apa pun atau sehubungan dengan perintah atau keputusan pengadilan apa pun
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Badan pengatur, badan pemerintah atau otoritas lain untuk tujuan deteksi atau pencegahan kejahatan, kegiatan ilegal/melanggar hukum atau penipuan atau untuk penangkapan atau penuntutan pelanggar, atau untuk penyelidikan yang berkaitan dengan semua ini
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Setiap pihak yang terlibat atau terkait dengan proses hukum (atau proses hukum prospektif), untuk tujuan proses hukum
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Penasihat profesional JConnect.co.id berdasarkan kebutuhan untuk mengetahui tujuan penasihat tersebut memberikan saran kepada JConnect.co.id
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Penyedia layanan pihak ketiga lainnya, termasuk namun tidak terbatas pada penyedia layanan analisis data, penyedia penyimpanan data dan layanan cloud dan/atau penyedia layanan apa pun yang membantu kami dalam menjalankan aktivitas bisnis kami
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Setiap pihak ketiga yang memperoleh semua atau sebagian aset atau bisnis JConnect.co.id (termasuk akun dan piutang dagang) untuk tujuan pihak ketiga tersebut terus menyediakan semua atau sebagian Layanan JConnect.co.id yang diperolehnya dan
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Jika tidak, diizinkan berdasarkan undang-undang perlindungan data apa pun.
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Selain yang disebutkan di atas, Anda akan menerima pemberitahuan ketika informasi pribadi tentang Anda mungkin masuk ke pihak ketiga, dan Anda akan memiliki kesempatan untuk memilih untuk tidak membagikan informasi tersebut
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak menjual atau menyewakan informasi pribadi apa pun yang dikumpulkan kepada pihak lain mana pun.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==9){
?>
                                    <h3 id="toc9">&nbsp;H. KEWAJIBAN ANDA MENGENAI INFORMASI PRIBADI ANDA</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Anda bertanggung jawab untuk memberikan informasi yang akurat, tidak menyesatkan, lengkap dan terkini kepada JConnect.co.id tentang diri Anda dan orang lain yang informasi pribadinya Anda berikan kepada kami dan untuk memperbarui informasi pribadi ini ketika dan ketika menjadi tidak akurat, menyesatkan, tidak lengkap dan kedaluwarsa dengan menghubungi JConnect.co.id di sini.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Dalam situasi tersebut, Anda mungkin perlu memberikan informasi pribadi kepada JConnect.co.id tentang orang lain selain diri Anda sendiri (misalnya, wasit atau penjamin Anda). Jika demikian, kami mengandalkan Anda untuk memberi tahu individu ini bahwa Anda memberikan informasi pribadi mereka kepada JConnect.co.id, untuk memastikan mereka menyetujui Anda memberikan informasi mereka kepada kami dan untuk memberi tahu mereka tentang di mana mereka dapat menemukan salinan Pemberitahuan Privasi ini ( di website kami diKebijakan pribadi)
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==10){
?>
                                    <h3 id="toc10">&nbsp;I. TRANSFER INFORMASI PRIBADI ANDA LUAR YURISDIKSI LOKAL ANDA</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Dari waktu ke waktu JConnect.co.id dapat mentransfer dan mengungkapkan informasi pribadi Anda di luar yurisdiksi lokal kami kepada penyedia layanan JConnect.co.id dan/atau mitra strategis yang terlibat dalam menyediakan bagian dari Layanan JConnect.co.id dan/atau kepada perusahaan terkait kami (“luar negeri entitas").
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Kami hanya akan mentransfer dan mengungkapkan informasi pribadi Anda di luar yurisdiksi Anda untuk tujuan membantu JConnect.co.id dan/atau entitas luar negerinya untuk memberikan, meningkatkan, dan mengembangkan produk dan layanan yang ditawarkan oleh kami dan mereka. JConnect.co.id juga dapat menerima Informasi Pribadi dari entitas luar negeri JConnect.co.id dari waktu ke waktu sesuai dengan kebijakan privasi entitas luar negeri tersebut dan/atau Undang-Undang Privasi setempat (sebagaimana berlaku).
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==11){
?>
                                    <h3 id="toc11">&nbsp;J. SITUS TERKAIT</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Situs web JConnect.co.id yang mungkin berisi tautan ke situs pihak ketiga.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id tidak bertanggung jawab atas situs pihak ketiga tersebut. Setiap informasi pribadi yang Anda sediakan di situs tersebut tidak akan mendapatkan manfaat dari Pemberitahuan Privasi ini dan akan tunduk pada kebijakan privasi pihak ketiga yang relevan (jika ada).
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda dapat masuk ke situs kami menggunakan layanan masuk seperti Facebook Connect. Layanan ini akan mengautentikasi identitas Anda dan memberi Anda pilihan untuk membagikan informasi pribadi tertentu kepada kami seperti nama dan alamat email Anda untuk mengisi formulir pendaftaran kami sebelumnya. Layanan seperti Facebook Connect memberi Anda opsi untuk memposting informasi tentang aktivitas Anda di situs web ini ke halaman profil Anda untuk dibagikan dengan orang lain dalam jaringan Anda.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Jika Anda menggunakan Facebook Connect untuk masuk ke situs kami, Anda menyetujui JConnect.co.id menampilkan nama, perusahaan, jabatan, dan gambar profil Facebook Anda kepada teman Facebook Anda yang juga telah masuk ke JConnect.co.id menggunakan Facebook Connect. Anda dapat memutuskan tautan akun Facebook dan JConnect.co.id Anda kapan saja.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Situs web kami menyertakan Fitur Media Sosial, seperti tombol dan widget Facebook, atau program mini interaktif yang berjalan di situs kami. Fitur-fitur ini dapat mengumpulkan alamat IP Anda, halaman mana yang Anda kunjungi di situs kami, dan dapat mengatur cookie untuk mengaktifkan Fitur agar berfungsi dengan baik. Fitur dan widget Media Sosial dihosting oleh pihak ketiga atau dihosting langsung di situs kami. interaksi Anda dengan Fitur ini diatur oleh kebijakan privasi perusahaan yang menyediakannya.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==12){
?>
                                    <h3 id="toc12">&nbsp;K. PERSETUJUAN ANDA</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Dalam menggunakan Layanan JConnect.co.id dan/atau Situs Web JConnect.co.id, Anda menyetujui pengumpulan dan penggunaan informasi pribadi oleh JConnect.co.id dengan cara yang dijelaskan di atas (yang dapat berubah dari waktu ke waktu) kecuali dan sampai Anda memberi tahu JConnect.co.id sebaliknyadi sini.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Selanjutnya, Anda menyetujui wasit Anda, sekolah/perguruan tinggi/universitas/institusi tempat Anda belajar, badan kualifikasi profesional tempat Anda menerima akreditasi dan Perusahaan untuk mengungkapkan informasi pribadi Anda ke JConnect.co.id.
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==13){
?>
                                    <h3 id="toc12">&nbsp;L. KONTAK INFORMASI</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            Jika Anda masih memiliki pertanyaan tentang Pemberitahuan Privasi ini, silakan kunjungiMembantuatauPertanyaan yang Sering Diajukandi Situs Web JConnect.co.id. JConnect.co.id meminta nama, nomor telepon, alamat email, dan komentar Anda sehingga JConnect.co.id dapat menanggapi kekhawatiran Anda secara efektif dan bekerja untuk meningkatkan Layanan JConnect.co.id dan/atau Situs Web JConnect.co.id.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda memiliki hak untuk meminta akses dan/atau mengoreksi informasi pribadi Anda dan/atau membatasi pemrosesannya kapan saja selanjutnya sesuai dengan hukum yang berlaku dan/atau hukum perlindungan data yang berlaku. Kami harus menunjukkan bahwa, dalam membatasi Pemrosesan seperti yang diminta, konsekuensi yang sama yang dijelaskan dalam Klausul B.2 di atas dapat berlaku. Anda juga diminta untuk memperbaiki dan/atau mengubah informasi pribadi Anda sejauh Anda menyadari bahwa itu tidak benar. Sehubungan dengan semua hal di atas, Anda dapat:
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Periksa apakah kami menyimpan atau menggunakan informasi pribadi Anda dan meminta akses ke data tersebut
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Meminta agar kami memperbaiki informasi pribadi Anda yang tidak akurat, tidak lengkap, atau kedaluwarsa dan
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Menarik, seluruhnya atau sebagian, persetujuan Anda yang diberikan sebelumnya, dalam setiap kasus tunduk pada batasan hukum yang berlaku, kondisi kontrak dan jangka waktu yang wajar serta konsekuensi seperti yang disebutkan di atas.
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    Anda juga dapat menghubungi Petugas Privasi Data JConnect's.com untuk pertanyaan lebih lanjut di jconnect.official@gmail.com atau melalui telepon di +62-
                                                    </p>
                                                </li>
                                            </ol>
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