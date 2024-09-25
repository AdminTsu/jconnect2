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
                        <h2>利用規約</h2>
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
                            <h4><b>利用規定一覧</b></h4>
                        </div>
                    </div>
                </div>
                <div class="job-category-listing mb-50" id='side_myjconnect'>
                        <div class="single-listing">

                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse">A. 拘束力のある契約</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/definisi">B. 定義</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/registrasi">C. 登録</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/security">D. パスワードとセキュリティ</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/hak_milik">E. 知的財産権</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/ketersediaan">F. JConnect.co.id ウェブサイトの利用状況</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/penggunaan_anda_atas_situs">G. お客様のJConnect.co.idウェブサイトのご利用について</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/penggunaan_anda_atas_layanan">H. お客様のJConnect.co.idサービスのご利用について</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/term_for_company">I. 雇用主に適用される追加規定</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/term_of_user">J. アカウント保持者に適用される追加条件</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/term_of_candidate">K. 候補者に適用される追加条件</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/user_send">L. ユーザーコンテンツと提出物</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/billing">M. 料金の支払い</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/hak_menangguhkan">N. JConnect.co.idがお客様の登録を停止または取り消す権利</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/duedate">O. 期間と終了時期</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/kewajiban">P. JConnect.co.idの義務について</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/penolakan">Q. 不採用</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/pihak_ketiga">R. 第三者のウェブサイト</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/sponsor">S. 広告およびスポンサーシップポリシー</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/ganti_rugi">T. 補償内容</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/legal_valid">U. 適用される法律</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/international">V. 国際的な使用状況</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/variety">W. バラエティ</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/TermOfUse/publics">X. 一般</a>
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
                                    このページは、（「お客様」）がJConnect.co.idウェブサイトを利用する際の利用規約（「規約」）と、お客様とJConnect.co.id（「JConnect.co.id」、「当社」、「当社」）との関係を述べたものです。これらは、法律のもとでのお客様の権利と義務に影響しますので、注意深くお読みください。本規約に同意されない場合は、JConnect.co.id サイトの登録および利用をご遠慮ください。本規約は、以下の時点より有効とします。 <b>2022年8月1日</b>.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3 id="toc1">&nbsp;A. 拘束力のある契約</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            このJConnect.co.idのウェブサイトは、本規約に従ってお客様の使用のために提供されています。本規約は、お客様とJConnect.co.idとの間の拘束力のある合意を構成するものです。JConnect.co.id ウェブサイトにアクセスし、これを利用することにより、お客様は本規約を承諾し、これに拘束されることに同意するものとします。お客様は、ご自身の責任においてJConnect.co.idサイトを利用することに同意するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            本規約とお客様がJConnect.co.idと締結した契約が矛盾する場合、本規約が優先されます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            当社は、法的または規制上の理由から、あるいはJConnect.co.idウェブサイトの適切な運営を可能にするために、これらの条件を随時更新することができます。いかなる変更も、登録時に提供された電子メールアドレスまたはJConnect.co.idウェブサイト上の適切な告知によって、お客様に通知されるものとします。変更は、弊社がお客様に通知した時点で、お客様のJConnect.co.idウェブサイトの使用に適用されます。新しい条件に同意されない場合は、JConnect.co.idウェブサイトのご利用を継続されないようお願いいたします。変更の発効日以降もJConnect.co.idウェブサイトの使用を継続する場合、JConnect.co.idウェブサイトの使用は、新しい規約に拘束されることに同意したものとみなされます。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==2){
?>
                                    <h3 id="toc2">&nbsp;B. 定義</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            「広告主」とは、JConnect.co.idのウェブサイトのいずれかに広告を掲載するために契約した個人または事業体を意味します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「デザイン」には、JConnect.co.idウェブサイトのページの色の組み合わせやレイアウトが含まれます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「雇用者」または「採用者」とは、求人情報を掲載するためにJConnect.co.idウェブサイトにアクセスする個人または法人、または求職者の検索目的に関連する何らかの理由でJConnect.co.idサービスを利用する個人または法人を指します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「会社資料」とは、JConnect.co.id サービスに関連して使用するために会社が提供するパンフレット、電子メール、求人情報、ウェブサイトのコンテンツ、キャリアフェア資料、オーディオ、ビデオ、写真、ロゴ、商標、サービスマーク、ドメイン名、文書またはその他の資料（該当する場合）を指します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            "グラフィックス "とは、JConnect.co.idサイト上のすべてのロゴ、ボタンアイコン、その他のグラフィック要素（有料広告バナーを除く）を指します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「候補者」または「候補者」とは、雇用主としての立場を除き、雇用を求めるため、またはその他の立場でJConnect.co.idサイトにアクセスするユーザーを意味します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「会社概要」とは、雇用主が作成したプロフィールを意味します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「JConnect.co.id」とは、お客様が居住または事業本部を置く国のJConnect.co.idまたはJConnect.co.idウェブサイトを運営する会社を意味します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「JConnect.co.idコンテンツ」には、JConnect.co.idウェブサイトで使用されるすべてのテキスト、グラフィック、デザイン、プログラミング、情報、画像、ビデオ、音声ファイル、ソフトウェア、その他のコンテンツが含まれます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「JConnect.co.idデータベース」または「JConnect.co.idデータベース」は、JConnect.co.idウェブサイトに掲載されたすべての求人広告および/またはJConnect.co.idに登録されたすべての候補者と雇用者情報を含みます。</p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「JConnect.co.idプロフィール」または「JConnect.co.idプロフィール」とは、候補者が作成した個人情報、履歴書および写真を含むことができるプロフィールを意味します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「JConnect.co.id履歴書データベース」または「履歴書データベース」とは、JConnect.co.idデータベースに作成および／またはアップロードされた候補者プロファイルおよび履歴書を意味します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「JConnect.co.id サービス」とは、JConnect.co.id またはその代理店により提供される、以下を含むすべてのサービスを意味します。:</p>
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    求人情報の掲載・検索、個人情報を含むJConnect.co.idプロフィール・会社概要の作成など、オンライン求人サイトの提供。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    人材紹介サービスの提供
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    オンライン履歴書検索アクセスの提供
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    求人案件と求職者のマッチング、求人案件のユーザーおよび求職者への通知
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    求人案件と求職者のマッチング、求人案件のユーザーおよび求職者への通知
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    広告主および／または求人企業に対し、バナー、電子ダイレクトメールシステム、デザイン、掲載支援サービスなど、追加の人材供給源および広告サービスを提供する。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id ウェブサイトに広告を掲載するための広告主および／または雇用主サービスの提供。
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「プロフィール」とは、利用者及び候補者が作成する個人のプロフィール、又は当社が作成する会社のプロフィールを意味します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「プログラミング」には、JConnect.co.idウェブサイトで使用されるクライアント側のコード（HTML、JavaScriptなど）およびサーバー側のコード（Active Server Pages、データベースなど）の両方が含まれます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「JConnectアカウント」とは、JConnect採用管理システムにアクセスするための、ユーザー名とパスワードで認証されたアカウントを意味します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「アカウント所有者」とは、JConnect.co.idにJconnectアカウントを登録し、求職者のソーシングのみを目的としてJConnect.co.idレジュメデータベースにアクセスすることができるユーザーを指します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「テキスト」には、JConnect.co.id サイトの各ページに掲載されている、編集、ナビゲーション、説明のためのテキストがすべて含まれます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「ユーザー」とは、JConnect.co.id のウェブサイトおよび/または JConnect.co.id のサービスのいずれかの側面を使用する個人または事業体を指します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「ユーザーコンテンツ」とは、ユーザーがJConnect.co.idのウェブサイト上で、またはウェブサイトを通じて送信、投稿、表示するすべての情報、データ、テキスト、ソフトウェア、音楽、サウンド、写真、グラフィック、ビデオ、広告、メッセージ、その他のマテリアルを意味するものです。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「お客様」または「お客様の」とは、本規約に同意する個人（またはお客様が代理で行動している法人）を意味します。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==3){
?>
                                    <h3 id="toc3">&nbsp;C. 登録</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id ウェブサイトに登録するには、15歳以上であることが必要です。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、登録時または任意の時点で提供した詳細情報が正確かつ完全であることを確認する必要があります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、登録時に提供された情報に変更があった場合、当社がお客様と効果的にコミュニケーションをとることができるよう、個人情報を更新することにより、速やかに当社に通知するものとします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==4){
?>
                                    <h3 id="toc4">&nbsp;D. パスワードとセキュリティ</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id サイトの利用登録をする際に、パスワードの作成が求められます。不正行為を防止するために、お客様はこのパスワードを秘密にしなければならず、誰にも開示したり、共有したりしてはなりません。他人がお客様のパスワードを知っていることを知った場合、またはその疑いがある場合、お客様は当社に連絡することにより、当社に通知しなければなりません。 <u><a href="<?=base_url()?>dashboard/feedback" target='_blank' >これ</a></u> じきに.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、セキュリティ違反やJConnect.co.idウェブサイトの不正使用の可能性があると判断した場合、お客様にパスワードの変更をお願いしたり、お客様のアカウントを停止したりすることがあります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Sebagai お客様のパスワードの紛失またはJConnect.co.idウェブサイトの不正使用によるもの。 :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    これによって生じるすべての損失または損害は、お客様が負担するものとします。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    お客様は、JConnect.co.idが損失または損害を被った場合、JConnect.co.idに対して全額を補償するものとします。
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
                                    <h3 id="toc5">&nbsp;E. 知的財産権</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id ウェブサイト、JConnect.co.id コンテンツ、および JConnect.co.id ウェブサイトと JConnect.co.id コンテンツに対するすべての権利、権原、利益は、JConnect.co.id またはそのライセンサーが独占的に所有するものです。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id のウェブサイトおよび JConnect.co.id のコンテンツは、著作権、商標権、データベース権、その他の知的財産権により保護されています。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id を取得し、表示することができます。JConnect.co.id ウェブサイト上のコンテンツをコンピューター画面上に表示したり、ディスク（ただし、ネットワークに接続されたサーバーやその他の記憶装置は除く）に電子形式で保存したり、個人的かつ非商用目的で当該コンテンツのコピーを1部印刷することができますが、その際にはすべての著作権と所有権の表示をそのまま維持するものとします。JConnect.co.id の書面による明示的な許可なく、JConnect.co.id の素材やコンテンツを複製、変更、コピー、配布、または商業目的で使用することはできません。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==6){
?>
                                    <h3 id="toc6">&nbsp;F. JConnect.co.id ウェブサイトの利用状況</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            当社は、お客様に最高のサービスを提供することを目指していますが、JConnect.co.idウェブサイトのサービスがお客様のニーズを満たすことをお約束するものではありません。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id ウェブサイトに誤りやエラーがないこと、ウェブサイトおよび JConnect.co.id サーバーにウイルスやその他の有害なメカニズムがないことを保証するものではありません。JConnect.co.id ウェブサイトでエラーが発生した場合は、ここで報告してください。できるだけ早くエラーを修正するよう努めます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id サイトへのアクセスは、修理、メンテナンス、新しいコンテンツ、施設、サービスの導入のために制限されることがあります。私たちは、できるだけ早くアクセスやサービスを回復するように努力します。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==7){
?>
                                    <h3 id="toc7">&nbsp;G. お客様のJConnect.co.idウェブサイトのご利用について</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id はここに、JConnect.co.id のウェブサイトにアクセスし、個人的な使用および/または雇用目的にのみ使用する、限定的、終了可能、非独占的な権利をお客様に付与します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、JConnect.co.id サイトを以下の目的で使用することはできません。 :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    違法、嫌がらせ、中傷、罵倒、脅迫、有害、下品、卑猥、その他不適切なもの、または法律に違反するものを流布すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    期限切れの求人情報を含む JConnect.co.id のコンテンツまたは JConnect.co.id ウェブサイトから入手可能な情報を、いかなる方法でも取り込み、コピーまたは複製すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.idのコンテンツを複製し、公共の場で使用すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id のコンテンツまたは JConnect.co.id のウェブサイトから入手可能な情報へのリンク。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    犯罪を構成する行為を奨励する、または適用される法律、規制、実践規範に違反する資料を送信すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    他者による JConnect.co.id サイトの使用または享受を妨害すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    著作権で保護された資料を、所有者の許可なく電子的に複製、送信または保存すること。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、本規約に基づく権利または義務を再販売または譲渡しないことに同意するものとします。また、JConnect.co.idのウェブサイトを許可なく商業利用しないことにも同意するものとします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==8){
?>
                                    <h3 id="toc8">&nbsp;H. お客様のJConnect.co.idサービスのご利用について</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                             JConnect.co.idのサービスを利用できるのは以下の方のみです。 :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    就職を希望する個人、および教育・ボランタリーサービスなどのキャリア・キャリア情報
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    雇用主またはその代理人が雇用目的で候補者を募集し
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    広告主
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様による JConnect.co.id サービスの使用は、お客様が JConnect.co.id と締結しているその他の契約にも従います。本規約とお客様がJConnect.co.idと締結している契約との間に矛盾がある場合、本規約が優先されるものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            すべてのユーザーは、以下のことを行わないことに同意します。 :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    個人情報の収集、処理、または転送に関する法律または規制を含むがこれに限定されない適用される法律または規制に違反する、または JConnect.co.id のプライバシーポリシーに違反する素材 (JConnect.co.id コンテンツを含む) の送信、投稿、配布、保存または破棄を行うこと。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id のウェブサイトのセキュリティに違反する、または違反しようとすること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id ウェブサイトのいかなる部分もリバースエンジニアリングまたは逆コンパイルすること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    本規約で許可されている場合を除き、JConnect.co.id のコンテンツまたは JConnect.co.id のウェブサイトから入手できる情報（期限切れの求人情報を含む）を、いかなる点においても取り込み、コピーまたは複製すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    詐欺、虚偽または誤解を招く情報もしくは違法行為を助長、促進または支援するコンテンツまたは素材を投稿すること、または違法行為もしくは本規約で禁止されているその他の行為（違法な武器の製造または購入、他人のプライバシーの侵害、コンピュータウィルスまたは海賊版メディアの提供または作成、またはいかなる政治的見解の促進または支援など）に関する指導情報を支持または提供すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    他者のためにプロフィール、履歴書を掲載し、または求人に応募すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id ウェブサイトへのログイン認証情報を第三者と共有すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    お客様を対象としていないデータにアクセスしたり、お客様がアクセスすることを許可されていないサーバやアカウントにログインすること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id サイトに、不正確、不完全、誤解を招く、虚偽、最新ではない経歴情報、または自分自身の情報ではない情報を投稿または送信すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    アクセス制限のあるページやパスワードのみのページ、隠しページや隠し画像を含むコンテンツを投稿すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    他のユーザーに対し、パスワードや個人を特定できる情報を要求すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    他の個人または法人が投稿した素材を削除または変更すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    いかなるグループ、企業、個人に対する嫌がらせ、嫌がらせの扇動、または嫌がらせを擁護すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    ユーザーに対して製品やサービスを宣伝・広告する未承諾の手紙や電子メールを送ること、未承諾の電話をかけること、未承諾のファックスを送ること、またはユーザーが連絡しないよう明確に要求したユーザーに連絡すること。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id ウェブサイトへのウイルス送信、過負荷、「フラッディング」、「スパミング」、「メールボム」、「クラッシュ」などの手段により、いかなるユーザー、ホスト、ネットワークに対するサービスを妨害しようとすること（ただし、これらに限定されるものではありません）。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.jpをご利用ください。 違法な目的または違法な活動のための ID サービス、または中傷的、名誉毀損的、暗黙的または明示的に攻撃的、下品、わいせつ、脅迫的、嫌がらせ、虐待的、憎悪的、人種差別的、差別的、脅迫的な性質を持つコンテンツ、プロファイル、履歴書、求人情報の投稿または送信、または迷惑、不快、困惑、不安を引き起こす可能性のある、または JConnect が定めるいかなる種類のポルノ、下品、性的な資料へのリンクを含むものです。co.idの裁量によります。追加の利用規約または。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    真正なプロフィールや履歴書でない、商品やサービスの広告・宣伝を目的としたプロフィールや履歴書を掲載すること。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            ネットワークセキュリティに違反した場合、民事および刑事上の責任を問われることがあります。JConnect.co.id は、そのような違反に関わる可能性のある事象を調査し、そのような違反に関与したユーザーを起訴するために法執行機関を巻き込み、協力することがあります。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==9){
?>
                                    <h3 id="toc9">&nbsp;I. 雇用主に適用される追加規定</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id はここに、採用候補者の検索という社内業務目的で JConnect.co.id ウェブサイトにアクセスし使用する、限定的、終了可能、非独占的な権利を付与します。これにより、候補者の検索および採用に直接関連する使用目的に限り、JConnect.co.idコンテンツまたはJConnect.co.idウェブサイト上の資料を1部閲覧およびダウンロードすることが許可されます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            また、JConnect.co.id は、お客様の内部使用に限り、JConnect.co.id サービスを使用する限定的、終了可能、非独占的な権利をお客様に付与します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、お客様の会社アカウント、会社プロファイルおよびパスワード（該当する場合）の機密を保持する責任を負います。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、一時的または永久的に、お客様のパスワードまたはその他のアカウントアクセス情報を他者と共有することはできません。お客様は、お客様による許可の有無にかかわらず、お客様の JConnect.co.id サイト登録およびパスワードのすべての使用について単独で責任および/または法的義務を負うものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、お客様の会社アカウント、会社プロファイルまたはパスワードが不正に使用された場合、直ちにJConnect.co.idに通知することに同意するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            雇用主は、JConnect.co.id サービスに関連して使用するために雇用主が提供する雇用主資料が、著作権、商標、わいせつ、肖像権、プライバシー、名誉毀損に関する法律を含むがこれに限らず、いかなる法令または第三者の所有権をも侵害しないことを表明、保証、誓約するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            雇用主は、候補者から受け取った個人情報のうち、候補者の適性を取得し評価することに関連性のないものは無視することを認め、同意するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            雇用主は、JConnect.co.idウェブサイト上の雇用主マテリアルについて、単独で責任を負うものとします。JConnect.co.id は、お客様の JConnect.co.id ウェブサイトの使用に関連する雇用主とはみなされず、JConnect.co.id は、JConnect.co.id ウェブサイトに求人を掲載している企業によるいかなる雇用決定に対しても、理由の如何を問わず、一切の責任を負わないものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            会社資料には、以下を含めてはならない。 :
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    誤解を招くキーワード、読めないキーワード、「隠し」キーワード、繰り返しのキーワード、提示された求人情報と関連性のないキーワード。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    非関連会社の名前、ロゴ、または商標。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    不正確な情報、虚偽の情報、誤解を招くような情報、および。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    差別的、性的、わいせつ、中傷的、脅迫的、嫌がらせ、虐待的、憎悪的、または18歳未満の人に個人情報を求める素材またはそのリンク。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、当社のマテリアルを以下の目的で使用してはなりません。 :
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    労働と雇用、雇用機会均等と雇用資格要件、データプライバシー、データアクセスと使用、および知的財産に関する法律を含むがこれに限定されない、適用される地域および国の法律を遵守しない方法で求人を掲載すること。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    製品またはサービスの販売、宣伝または広告。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    すべてのフランチャイズ、マルチ商法、流通、マルチレベルマーケティングの機会を掲載する。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    真正な雇用を意味しない機会の促進、および
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    性的なサービスを宣伝したり、性的な性質を持つ仕事のために従業員を募集したりすること。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、JConnect.co.id ウェブサイト上で候補者に直接または間接的に手付金、紹介料、手続き料、その他同様の料金の支払いを求める、および/または候補者に購入を要求する雇用主資料を奨励しません。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idでは、1つの空室ポストに1つ以上の空室ポジションを広告する広告はお断りしています。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は JConnect.co.id サイト上の企業マテリアルを監視する義務を負いませんが、JConnect.co.id は企業マテリアルを不定期に監視することがあります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、JConnect.co.id の合理的な裁量により、本条項を遵守していない、または JConnect.co.id が JConnect.co.id の最善の利益にならないと考えるコンテンツが投稿された場合、当社マテリアルまたはコンテンツを JConnect.co.id ウェブサイトから削除する権利を留保します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            同じポジションの再掲載は、短期間に同じユーザーに再送信され、JConnect.co.idウェブサイト上の空席広告が重複することを最小限に抑えるため、空席掲載日から14日後に許可されています。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id サービスの使用中、お客様が JConnect.co.id に対して事実と異なる説明を行った場合、またはお客様の事業活動の性質もしくは本条件の違反に関して JConnect.co.id に誤解を与えた場合、JConnect.co.id はお客様の JConnect.co.id サービスの使用を終了させ、かかる場合、お客様は JConnect.co.id の使用を停止することができるものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、お客様の企業アカウントをキャンセルした場合、またはお客様の企業アカウントが終了した場合、お客様のJConnect.co.idプロフィールおよび保存された履歴書、ネットワークコンタクト、メールメーリングリストを含むJConnect.co.idのアカウント情報はすべて削除されたとみなされ、JConnect.co.idデータベースから削除されることがあることを理解し了承するものとします。JConnect.co.idのウェブサーバーで削除が反映されるのが遅れるため、しばらくは情報が利用可能な状態が続く可能性があります。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==10){
?>
                                    <h3 id="toc10">&nbsp;J. アカウント保持者に適用される追加条件</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            お客様がJConnect.co.idレジュメデータベースにアクセスするためにアカウントを登録した場合、またはアカウントを取得した場合、本条項はお客様に適用されます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            18歳以上の方に限ります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、本規約、JConnect.co.idとの契約、および個人情報に関する法律を含むすべての法律に従って、JConnect.co.idレジュメデータベースを使用する必要があります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、本条項の条件に従い、利用可能な JConnect.co.id プロフィールおよび履歴書を閲覧および/またはダウンロードする目的でのみ、JConnect.co.id ウェブサイトを通じて JConnect.co.id 履歴書データベースにアクセスする、制限付き、個人的、終了可能、譲渡不可、非独占的権利を付与しています。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idのレジュメデータベースは、お客様だけがアクセスし、使用することができます。レジュメデータベースへのアクセスを許可する固有のパスワードが提供されます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、ご自身のアカウントを他のいかなる第三者とも共有することはできません。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、正規の人材紹介会社、または人材派遣会社である場合、または雇用を目的としてJConnect.co.idのプロフィールと履歴書を明示的に使用する場合を除き、JConnect.co.id履歴書データベースからのデータをいかなる第三者にも開示しないことに同意するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Anda harus mengambil langkah-langkah fisik, teknis, dan administratif yang sesuai untuk melindungi data yang Anda peroleh dari JConnect.co.id Resume Database dari kehilangan, penyalahgunaan, akses tidak sah, perubahan pengungkapan, atau penghancuran.
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id 履歴書データベースは使用しないで下さい。
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    雇用者として、および/または労働者を求める雇用者の代理として以外の目的、または。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.idのプロフィールや履歴書保持者に対して、未承諾の電話やファックス、未承諾の手紙、メール、ニュースレターを送ること、または本人が承諾していない限り、個人に連絡すること。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idのレジュメデータベースから取得したデータは、本条項に定める目的を果たすために必要な期間を超えて保持されないものとします。この場合、お客様は、当該データをお客様の記録から削除、破壊、および/または除去することに同意し、引き受けるものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id のビジネス、ビジネスの見通し、JConnect.co.id のウェブサイトまたは JConnect.co.id の履歴書データベースのパフォーマンスや機能に悪影響を与える、または他のお客様が履歴書データベースにアクセスすることを妨げると JConnect.co.id が判断する方法で、履歴書データベースを使用してはなりません。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、すべてのお客様に安全かつ効果的にご利用いただくため、一定期間内にお客様がアクセスするデータ量（JConnect.co.id プロファイルおよび履歴書閲覧を含む）を制限する権利を有します。これらの制限は、JConnect.co.idの裁量で随時変更されることがあります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、JConnect.co.idレジュメデータベースへの登録を、求職者の検索にのみ使用することができます。JConnect.co.id の履歴書データベースに含まれる情報を使用して、製品やサービスの販売または宣伝を行うこと、あるいは JConnect.co.id が本条件と矛盾する、誤解を招く、不完全な、または法律や規制に違反すると判断するその他の行為を行うことは特に禁止されています。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idは、独自の判断により、JConnect.co.idレジュメデータベースの全部または一部をいつでも終了、停止、更新、変更、追加することができるものとします。JConnect.co.id のレジュメデータベースへのアクセスを許可することにより、JConnect.co.id はレジュメデータベースまたはその他の JConnect.co.id の財産またはサービスに対するいかなる利益も提供するものではありません。レジュメデータベースに対する全ての権利、利益はJConnect.co.idに帰属し、今後も継続されるものとします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==11){
?>
                                    <h3 id="toc11">&nbsp;K. 候補者に適用される追加条件</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id はここに、JConnect.co.id のウェブサイトにアクセスし、使用する限定的、終了可能、非独占的権利を、お客様自身の雇用機会を求める個人的な使用のためにのみ付与します。JConnect.co.id コンテンツまたは JConnect.co.id Web サイト上の素材を、個人的かつ非商業的な使用目的に限り、1部のみ閲覧およびダウンロードすることが許可されます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id ウェブサイトに登録する際、お客様はアカウントを作成し、有効な電子メールアドレスを含む特定の情報をJConnect.co.idに提供する必要があります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様が提出する JConnect.co.id プロファイルは、正確、完全、最新であり、誤解を招くものであってはなりません。JConnect.co.id プロファイルには、標準的な項目を入力する必要があります。お客様は、生死を問わず、他人になりすますことはできません。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、お客様が JConnect.co.id ウェブサイトに掲載した JConnect.co.id プロフィールおよび履歴書、またはそこに含まれる資料の形式、内容、正確さについて、お客様が単独で責任を負うことを認め、同意するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、かかる投稿から生じるいかなる結果についても、お客様が単独で責任を負うことを認め、これに同意するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、お客様が登録時に特定した好みに基づいて、その後もいつでも、またはお客様が承諾したときに、第三者のサービスや製品を提供する権利を有します。このような提供は、JConnect.co.id または第三者によって行われる場合があります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様の情報についての詳細は、JConnect.co.idのプライバシーポリシーをご覧ください。JConnect.co.id のプライバシーポリシーに記載されているように、JConnect.co.id は特定のユーザー情報を収集し、プライバシーポリシーの条件に従ってユーザーに定期的に連絡することがありますので、ご注意ください。さらに、JConnect.co.id は、法的要件、法執行機関からの要請、政府機関からの要請を、たとえその遵守のために特定のユーザー情報の開示が必要となる場合でも、独自の判断で遵守する権利を留保します。また、第三者は、ユーザー情報のキャッシュコピーを保持することがあります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、お客様が提供するすべての情報、お客様のJConnect.co.idプロフィール、履歴書および/またはアカウント情報が将来の雇用主に開示されることを理解し、了承するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、ご自身のアカウントに所有権がないこと、また、お客様が JConnect.co.id のアカウントをキャンセルした場合、または JConnect.co.id のアカウントが終了した場合、JConnect.co.id のプロフィール、履歴書、カバーレター、保存した求人などのアカウント情報はすべて削除済みとみなされ、 JConnect.co.id データベースから削除することができ、 JConnect.co.id ウェブサイト上のすべての公開領域から削除されることを理解し了承するものとします。JConnect.co.idのウェブサーバーで削除が反映されるのが遅れるため、しばらくは情報が利用可能な状態が続く可能性があります。さらに、第三者は、お客様の情報の保存されたコピーを保持することがあります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idは、長期間にわたって活動がない場合、お客様のアカウントとすべての情報を削除する権利を有します。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==12){
?>
                                    <h3 id="toc12">&nbsp;L. ユーザーコンテンツと提出物</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、すべてのユーザーコンテンツが、当該ユーザーコンテンツの発信者である個人の単独責任であることを理解します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、お客様が提供したすべての情報、お客様のJConnect.co.idプロフィール、履歴書および/またはアカウント情報がJConnect.co.idデータベースおよび/またはJConnect.co.id履歴書データベースに保存されることを理解し承認します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、お客様が提供するすべての情報、お客様のJConnect.co.idプロフィール、履歴書および／またはアカウント情報が、保管および／または処理目的のためにお客様の所在地以外の国に転送される場合があることを理解し、認め、同意するものとします。詳しくは、JConnect.co.idのプライバシーポリシーをご覧ください。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id ウェブサイト上またはこれらを経由してユーザーコンテンツを提出、投稿または表示することにより、お客様は、お客様のプライバシー設定に従い、JConnect.co.idに対して、当該ユーザーコンテンツを複製、翻案、配布および公開するための全世界的、非独占的、使用料無料のライセンスを供与するものとします。JConnect.co.id は、当該ユーザーコンテンツが JConnect.co.id ウェブサイトから削除された後、商業的に合理的な期間内にこのライセンス使用を終了させるものとします。JConnect.co.id は、独自の判断により、ユーザーコンテンツの受領、投稿、表示、送信を拒否する権利を有します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id ウェブサイトの公開エリアにユーザーコンテンツを投稿する場合、ユーザーは個人的な使用のために、当該ユーザーコンテンツにアクセス、閲覧、保存、複製することも許可するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、独自の判断により、これらの条件に違反する、適用される法律、規則、規制に違反する、虐待的、破壊的、不快、違法である、または JConnect.co.id ウェブサイトのユーザーの権利を侵害する、あるいはユーザーの安全を害する、または脅かすユーザーコンテンツを確認し、削除することができます。JConnect.co.id は、条件または適用される法律、規則、規制に違反したユーザーを除名し、JConnect.co.id ウェブサイトへのアクセスおよび/または JConnect.co.id サービスの利用を妨げる権利を留保します。JConnect.co.id は、ユーザーコンテンツが JConnect.co.id に責任を生じさせ、JConnect.co.id のブランドまたは公共イメージを損傷し、または JConnect.co.id のユーザー離れを引き起こすと判断した場合、独自の裁量で必要または適切と判断したユーザーコンテンツに関するあらゆる措置を取ることができるものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、ユーザーコンテンツ、ユーザーコンテンツの派生物、またはユーザーが投稿したその他の通信の真実性、正確性、信頼性を表明または保証するものではなく、ユーザーが表明したいかなる意見も支持するものではありません。お客様は、他のユーザーが投稿した素材を信頼する場合は、お客様自身のリスクで行うことを了承するものとします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==13){
?>
                                    <h3 id="toc13">&nbsp;M. 料金の支払い</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnectを利用する企業、利用する求職者ともに、料金は一切かかりません。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==14){
?>
                                    <h3 id="toc14">&nbsp;N. JConnect.co.idがお客様の登録を停止または取り消す権利</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            当社は、当社の合理的な裁量により、またはお客様が本規約に基づく義務に違反した場合には、お客様の登録を直ちに停止または取り消すことができるものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、ここに文書で通知することにより、いつでも登録を取り消すことができます。その場合、JConnect.co.id サイトの利用を停止してください。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様の登録およびJConnect.co.idサイトを利用する権利の停止または取り消しは、いずれかの当事者の法的権利または義務に影響を与えるものではありません。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==15){
?>
                                    <h3 id="toc15">&nbsp;O. 期間と終了時期</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            これらの条件は、お客様がJConnect.co.idウェブサイトのユーザーである限り、完全に効力を持ち続けるものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、お客様がこれらの条件に違反した場合、または JConnect.co.id がお客様が JConnect.co.id ウェブサイトの登録に提出した情報を確認または認証できない場合、JConnect.co.id の独自の裁量により、お客様のユーザーコンテンツの JConnect.co.id ウェブサイトからの削除、お客様の登録または JConnect.co.id ウェブサイトおよび/もしくは JConnect.co.id からお客様へのその他のサービスの即時終了など（これだけに限られません）すべての救済措置を追求する権利を有するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様がJConnect.co.idウェブサイトのユーザーでなくなった後も、本規約の第5条、13条、15条、16条、17条および20条を含む一定の条項が引き続き適用されます。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==16){
?>
                                    <h3 id="toc16">&nbsp;P. JConnect.co.idの義務について</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id のウェブサイトおよび JConnect.co.id サービスは、特に、.NET のための場所として機能します。
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    雇用者またはその代理人が求人情報を掲載し、求職者を調達・評価すること。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id のプロフィールと履歴書を掲載し、求人情報を検索して評価する候補者。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    広告主は広告を掲載することができます。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、提供する JConnect.co.id プロフィールを含め、リスティングの審査や検閲を行いません。JConnect.co.idは、求人企業と求職者間の実際の取引には関与していません。そのため、JConnect.co.id は、ユーザーコンテンツ、求人情報または JConnect.co.id もしくは掲載された履歴書の品質、安全性、合法性、掲載情報の真実性または正確性、雇用者が求職者に求人情報を提供する能力、求職者が求人情報を埋める能力について責任を負わず、JConnect.co.id は JConnect.co.id ウェブサイト上の求人、 JConnect.co.id プロフィール、履歴書、ユーザーコンテンツについていかなる表明も行わないものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、独自の判断により、JConnect.co.id プロファイル、企業プロファイル、企業マテリアルまたはその他の素材を含むがこれに限定されないユーザーコンテンツを JConnect.co.id ウェブサイトから適宜削除する権利を留保します。JConnect.co.idがこの裁量権を行使した場合、ユーザーによる本規約の違反があった場合。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id Webサイトでは、他のインターネットサイトまたはソースからのコンテンツも利用できます。JConnect.co.idは、JConnect.co.id Webサイトに含まれる資料が正しく、評判が高く、高品質であることを保証するよう努めていますが、コンテンツに関するいかなる保証も行いません。JConnect.co.id が JConnect.co.id ウェブサイト上の資料に誤りがあることを知らされた場合、当社はできるだけ早くその誤りを修正するよう努めます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            なお、見知らぬ人、未成年者、偽者との取引には、身体への傷害を含むがこれに限定されないリスクがある。お客様は、JConnect.co.idサイトを通じて接触する他のユーザーとの取引に関連するすべてのリスクを負うものとします。他人の情報は、その性質上、不快、有害、不正確である可能性があり、場合によっては誤表示や欺瞞的である可能性があります。JConnect.co.id サイトを利用する際は、慎重かつ常識的な行動を取ることを期待します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id ウェブサイトおよび JConnect.co.id コンテンツには、不正確な記述や誤植が含まれる場合があります。JConnect.co.id は、JConnect.co.id サイトまたは JConnect.co.id コンテンツの正確性、信頼性、完全性、適時性について、いかなる表明も行いません。すべての JConnect.co.id ウェブサイトおよび JConnect.co.id コンテンツの使用は、お客様ご自身の責任において行われるものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id ウェブサイト上のいかなる情報も、そのウェブサイト、製品、サービス、募集、経験、雇用、採用慣行、その他に関連するかどうかにかかわらず、ユーザーまたは第三者に関する推奨、表明、保証と見なされるべきものではありません。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            当社が本規約に違反した場合、当社は、お客様がJConnect.co.idウェブサイトを利用した時点で両者にとって予見可能な結果である限りにおいて、直接的結果としてお客様が被る損失に対してのみ責任を負うものとします。いかなる場合においても、当社の責任には、データの損失、利益の損失または事業の中断などの事業上の損失は含まれません。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id ウェブサイトおよび/または JConnect.co.id サービスの使用に起因するすべての請求に対する JConnect.co.id のお客様に対する責任総額は、限定されるものとします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==17){
?>
                                    <h3 id="toc17">&nbsp;Q. 不採用</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、JConnect.co.id サービスの中断、停止、中止の結果生じた情報の損失、または JConnect.co.id サービスを通じて利用もしくは送信できる JConnect.co.id コンテンツ、情報の正確性および品質に対して責任を負わないものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、JConnect.co.id のウェブサイトおよび/または JConnect.co.id サービス上またはこれらを通じて第三者に入力または利用可能または送信された電子メールまたは投稿のデータまたはコンテンツに対して編集上のコントロールを行使する方針ではないことを認め、同意するものとします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==18){
?>
                                    <h3 id="toc18">&nbsp;R. 第三者のウェブサイト</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            お客様の便宜のため、JConnect.co.idウェブサイトには、当社の管理外の他のウェブサイトまたは資料へのリンクが含まれています。JConnect.co.idは、JConnect.co.idウェブサイト以外のサイトのコンテンツについて責任を負うものではありません。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==19){
?>
                                    <h3 id="toc19">&nbsp;S. 広告およびスポンサーシップポリシー</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id サイトの一部には、広告やスポンサーシップが含まれている場合があります。広告主およびスポンサーは、JConnect.co.idサイトに掲載するために提出された素材が関連する法律や規範に準拠していることを確認する責任を負うものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、JConnect.co.id の独自の裁量により、JConnect.co.id ウェブサイトでの公開に適さない広告の掲載を拒否する権利を留保します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、広告およびスポンサーシップ資料の誤りや不正確さについて、お客様に対して一切の責任を負いません。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==20){
?>
                                    <h3 id="toc20">&nbsp;T. 補償内容</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、以下のいずれかを主張する、またはそれに起因する、合理的な弁護士費用および会計費用を含むがこれに限定されないあらゆる請求、訴訟または要求から JConnect.co.id およびその関連会社、ならびにそれぞれの役員、取締役、社員、代理人を防御、補償、免責することに同意するものとします。 :
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様がJConnect.co.idのウェブサイトに提供したユーザーコンテンツまたはその他の素材。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様による JConnect.co.id コンテンツの使用または。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様が本規約に違反した場合。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、そのような請求または手続きについて、速やかにお客様に通知します。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==21){
?>
                                    <h3 id="toc22">&nbsp;U. 適用される法律</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            本規約は、インドネシアの法律に準拠するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            私たちは、紛争を迅速かつ効率的に解決するよう努めます。当社の紛争処理方法にご不満があり、裁判手続きを希望される場合は、インドネシアで行ってください。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==22){
?>
                                    <h3 id="toc23">&nbsp;V. 国際的な使用状況</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            また、JConnect.co.idウェブサイトのコンテンツが違法または不法である地域からJConnect.co.idウェブサイトにアクセスすることは禁止されています。お客様がお住まいの地域からこのJConnect.co.idウェブサイトにアクセスする場合、お客様はご自身の判断でこれを行い、地域の法律を遵守する責任を負います。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==23){
?>
                                    <h3 id="toc24">&nbsp;W. バラエティ</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、本規約に基づくお客様の権利を他者に譲渡してはなりません。当社は、お客様の権利に影響を与えないと合理的に判断した場合、本規約に基づく当社の権利を他の事業者に譲渡することができます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様がこれらの条件に違反し、JConnect.co.idがそれを無視することを選択した場合、JConnect.co.idは後日、またはお客様が条件に違反したその他の状況において権利と救済策を行使する権利を保持します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、その合理的な支配を超える状況によって引き起こされた本規約の違反について責任を負わないものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            本規約のいずれかが管轄権を有する裁判所または行政機関により無効または執行不能であると判断された場合、当該条項の無効または執行不能は、本規約の他の条項に影響を及ぼさず、当該無効または執行不能の影響を受けないすべての条項は完全に有効であるものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、データ保護およびプライバシーに関する適用法から生じるデータ処理業者としての義務を、かかる義務が本契約に関連する限り、適宜遵守するためにあらゆる妥当な措置を講じており、今後も遵守するものとします。さらに、私たちは、その当事者が所有している間のすべての機密情報の機密性、完全性および可用性を、無許可、違法または偶発的なアクセスから保護するために設計された合理的な管理的、技術的および物理的措置を含む情報セキュリティプログラムを実施するための措置を講じており、今後もこれを維持する予定です。不正なアクセス、開示、譲渡、破壊、紛失、改ざん。ただし、秘密情報という用語には、自然人を特定し、または自然人に直接関連する情報（以下「個人データ」といいます）は含まれないものとします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==24){
?>
                                    <h3 id="toc25">&nbsp;X. 一般</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id のウェブサイトは、JConnect.co.id が所有し運営しています。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            ご不明な点がございましたら、こちらまでお問い合わせください。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id への通知は、JConnect.co.id の Web サイトに記載されている住所に送付する必要があります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            当社は、お客様が提出した住所、またはJConnect.co.idがお客様にとって適切であると合理的に判断したその他の住所に、通知を送付します。
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