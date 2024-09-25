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
                        <h2>プライバシーポリシー</h2>
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
                            <h4><b>プライバシーポリシー一覧</b></h4>
                        </div>
                    </div>
                </div>
                <div class="job-category-listing mb-50" id='side_myjconnect'>
                        <div class="single-listing">

                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy">オープニング</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/informasi_pribadi">A. 個人情報の収集</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/tujuan_pengumpulan_data">B. 個人情報の収集・利用目的</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/profile">C. jconnect.co.id プロファイル</a>
                            </div><br>  
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/pilihan_akses">D. 個人情報の選択とアクセス</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/retensi_informasi">E. 個人情報の保有</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/keamanan_informasi">F. 個人情報の安全性</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/kepada_siapa">G. 個人情報の開示先</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/kewajiban_anda">H. 個人情報に関するお客様の義務</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/transfer_informasi">I. お客様の個人情報をお客様の管轄区域外に転送すること</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/situs_terkait">J. 関連サイト</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/persetujuan_anda">K. お客様の同意</a>
                            </div><br>
                            <div class="single-listing">
                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/privacy/kontak_informasi">L. 連絡先</a>
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
                                    <h3 id="toc1">オープニング</h3>
                                    <p align="justify">
                                    お客様のプライバシーはJConnect.co.idにとって重要です                                    。このプライバシーに関するお知らせは、JConnect.co.id サービスおよび JConnect.co.id ウェブサイトの使用を規定する利用規約の一部を構成していますので、注意深くお読みください。本規約は、<b>2022年8月1日</b>から有効とします。
                                    <br>本プライバシーポリシーは、以下を説明するものです :
                                    </p>
                                        <ol class="ordered-list">
                                            <li align="justify">
                                                <p align="justify">
                                                お客様がJConnect.co.idサービスおよび/またはJConnect.co.idウェブサイトを使用する際にJConnect.co.idが処理するお客様に関する個人情報の種類
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                JConnect.co.id サービスおよび JConnect.co.id ウェブサイトを利用する際のお客様の個人情報の処理方法について
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                JConnect.co.idがお客様の個人情報を収集し処理する目的
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                お客様の個人情報にアクセスし、訂正する権利
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                JConnect.co.idがお客様の個人情報を開示する可能性のある第三者グループ
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                お客様が個人情報を提供することが必須であるか任意であるか、また、個人情報の提供が必須である場合に提供しなかった場合の影響と
                                                </p>
                                            </li>
                                            <li align="justify">
                                                <p align="justify">
                                                JConnect.co.idがお客様の個人情報の機密性と安全性を維持する方法について
                                                </p>
                                            </li>
                                        </ol>
                                    <p align="justify">
                                    いかなる変更も、登録時に提供された電子メールアドレスまたはJConnect.co.idウェブサイト上の適切な告知により、お客様に通知されるものとします。当社が重要な変更を行う場合は、変更が有効になる前に、電子メール（お客様のアカウントに登録された電子メールアドレスに送信されます）または本サイト上の通知によりお客様にお知らせします。この変更は、JConnect.co.id がお客様に通知した後、お客様の JConnect.co.id サービスおよび JConnect.co.id ウェブサイトの使用に適用されるものとします。新しい条件に同意されない場合は、JConnect.co.id サービスおよび/または JConnect.co.id ウェブサイトを継続して使用することはできません。変更の発効日以降も JConnect.co.id サービスおよび/または JConnect.co.id ウェブサイトの使用を継続する場合、お客様の JConnect.co.id サービスおよび/または JConnect.co.id ウェブサイトの使用は、変更されることになります。
                                    <br>
                                    本プライバシーポリシーにおいて :
                                    </p>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            「JConnect.co.id」、「JConnect.co.id サービス」、「JConnect.co.id ウェブサイト」、「お客様」、「広告主」および「雇用主」は、利用規約で定義されるのと同じ意味を有するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「JConnect.co.idプロフィール」とは、JConnect.co.idウェブサイトのユーザーが作成する、個人情報、履歴書、資格、証明書、写真を含むことができるプロフィールを意味します。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「個人情報」とは、個人を特定することができるデータをいいます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            処理」とは、収集、保存、保持、記録、組織化、適応、使用、開示、訂正および破棄を意味しますが、これらに限定されるものではありません。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            「アカウント」とは、雇用主、広告主または許可された担当者がJConnect.co.id採用管理システムに対して付与されるアクセスを意味します。
                                            </p>
                                        </li>
                                    </ol>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==2){
?>
                                    <h3 id="toc2">&nbsp;A. 個人情報の収集</h3>
                                    <p align="justify">
                                        当社は、以下の状況において、お客様から提供された情報を収集、使用、および/または処理することがあります。
                                    </p>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id サービスに登録する場合
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id サービスのいずれかに登録するたびに、MyJConnect.co.id アカウントを作成するためにお客様に関する特定の個人情報の提供をお願いしています。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    登録時に収集される個人情報には、お客様の電子メールアドレス、氏名、国籍、IDカード番号、パスポート番号、居住国などが含まれますが、これらに限定されるものではありません。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.idが求める個人情報が「必須項目」となっている場合、お客様はJConnect.co.idがこの個人情報を処理することを提供し、同意する必要があります。お客様は、当社にしかしながら、お客様がこの個人情報の提供に同意されない場合、および/または、このプライバシーに関するお知らせに記載されている方法で当社が個人情報を処理することに同意されない場合、JConnect.co.idはお客様に関連サービスを提供できず、当該サービスへのお申し込みは拒否させていただきます。しかしながら、お客様がこの個人情報の提供に同意されない場合、および/または、このプライバシーに関するお知らせに記載されている方法で当社が個人情報を処理することに同意されない場合、JConnect.co.idはお客様に関連サービスを提供できず、当該サービスへのお申し込みは拒否させていただきます。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    また、広告主および／または会社によっては、オンライン申込みの一環として、当該広告主および／または会社が選択した質問リストに回答するよう求める場合があります。アプリケーションの質問に回答することにより、お客様は、JConnect.co.idがお客様の回答を当該広告主および／または企業に提供し、お客様の回答を使用してお客様のJConnect.co.idプロファイルを作成し、広告主および／または企業がタレント検索の使用時に当該情報を表示できるようにすることを了承するものとします。JConnect.co.idはまた、検索およびマッチング機能の強化など、当社製品の向上のためにお客様の回答を使用することがあります。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様による JConnect.co.id サービスおよび/または JConnect.co.id ウェブサイトの使用から
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id サービスおよび/または JConnect.co.id ウェブサイトの利用をお客様が選択された場合、当社はお客様から直接個人情報を収集します。以下は、JConnect.co.idがお客様から直接収集する可能性のある個人情報の例です。 :
                                                    </p>
                                                    <ol class="ordered-list-roman">
                                                        <li>
                                                            <p align="justify">年齢</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">生年月日</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">電話番号または携帯電話番号</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">あなたの写真</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">学歴</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">学校／カレッジ／大学／機関から提供された本人確認書類</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">レジュメ</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">個人の趣味・嗜好</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">職務経験</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">クレジットカードまたはデビットカードの詳細</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">その他、広告主求人応募のための履歴書に関連する情報</p>
                                                        </li>
                                                    </ol>
                                                    <p align="justify">
                                                        JConnect.co.idでは、会社名、勤務先住所、広告主住所を収集します。また、主要な連絡先（本サイトでは「管理者」とも呼ばれます）の名前、電子メールアドレス、電話番号も収集します。広告主は、アカウントに追加のユーザーを追加することができ、その場合、JConnect.co.idは、それらの他のユーザーの名前と電子メールアドレスを収集します。広告主は、指定されたアカウント管理者に連絡することにより、会社名、広告主の住所等を変更することができるものとします。JConnect.co.idはこれらの情報を、広告主の申請書の提出、広告主の空席広告に問題がある場合の連絡、アカウント作成の準備など、お客様のアカウント管理のために使用します。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id のプロフィールに紹介者を追加する場合、JConnect.co.id はお客様のお名前、電話番号、Eメール、役職、その他関連情報をお伺いします。この情報は、求職の際に添付され、雇用主が応募者の推薦状を得るためにコンタクトを取ることがあります。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    お客様が JConnect.co.id サービスを利用して、そのサービスまたは JConnect.co.id ウェブサイトを友人に伝える場合、JConnect.co.id はお客様の友人の名前と電子メールアドレスをお伺いします。JConnect.co.idサービスの利用やJConnect.co.idウェブサイトの閲覧を案内するメールが、お友達に自動的に送信されます。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id がお客様に関するこの種の個人情報を処理することを停止したい場合、JConnect.co.id はお客様に関連サービスを提供することができなくなります。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    さらに、JConnect.co.idは、お客様の声や成功談を掲載する許可を得ることがあります。JConnect.co.id ウェブサイトにお客様の資料を掲載することに同意された場合、お客様が提出された個人情報は、他の JConnect.co.id ウェブサイトユーザーによって読まれたり、収集されたり、使用されたり、お客様に迷惑なメッセージを送るために使用される可能性があることをご承知おきください。お客様の声の更新・削除を希望される場合は、こちらからご連絡ください。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様がJConnect.co.idのウェブサイトを訪問される場合
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様がJConnect.co.idのウェブサイトにアクセスすると、当社のウェブサーバーは自動的に、お客様のインターネットプロトコル（IP）アドレス、訪問日時、訪問時間などの情報を収集します。お客様のIPアドレスは、お客様のコンピュータまたはその他のアクセス機器を一意に識別するものです。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id は、お客様がログインする際にお客様のコンピュータまたはその他のアクセス機器に「クッキー」を置くことで、お客様の JConnect.co.id ウェブサイトへの訪問を追跡する場合があります。クッキーとは、お客様がアクセスしているウェブサイトが、お客様のコンピュータやその他のアクセス機器に置く小さなテキストファイルです。ウェブサイトを機能させたり、より効果的に機能させたり、ウェブサイト所有者に情報を提供するために広く利用されています。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    クッキーにより、JConnect.co.idはお客様の好みを保存し、次回以降の訪問時に再入力する必要がありません。また、クッキーは、JConnect.co.idがユーザーの傾向やパターンを追跡するために匿名化されたクリックストリームデータを収集するのに役立ちます。JConnect.co.idは、広告主がより良いターゲット広告を提供できるように、匿名化されたクリックストリームデータを使用することがあります。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様は、インターネットブラウザの「ヘルプ」ファイルに記載されている説明に従って、クッキーを削除することができます。インターネットブラウザでクッキーを受け入れないように設定すると、ウェブサイトの一部の領域が正しく機能しなくなることをご了承ください。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id は、受信者がどのメールを開いたかを調べるために、HTMLベースのメールにクリアGIFを使用しています。これにより、JConnect.co.idは特定のコミュニケーションの効果やマーケティングキャンペーンの有効性を測定することができます。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    当社のパートナーおよびサービスプロバイダーは、JConnect.co.idウェブサイトの使用に関する情報を収集するためにクッキーを使用しています。当社のパートナーやサービスプロバイダーによるクッキーの使用は、当社のプライバシーポリシーの対象ではありません。私たちは、これらのクッキーにアクセスすることも、管理することもできません。
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
                                    <h3 id="toc3">&nbsp;B. 個人情報の収集・利用目的</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idがお客様の個人情報を処理する目的は、以下の通りです。 :
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    本人確認のため
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様の雇用適性および信用度を評価・確認するため
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様が希望されたJConnect.co.idサービスを提供するため（JConnect.co.idのサービス提供能力を向上させるために個人情報に関連する人工知能（以下「AI」）やデータ分析を利用することも含みます。）
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様に提供するJConnect.co.idサービスを管理・運営するため
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.idのサービスに関連してお客様に連絡するため
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    当社の戦略的パートナーにお客様の情報を提供することにより、お客様に合わせた教育サービスの提供を促進し、お客様のキャリアアップを図るため。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様への紹介機会の向上、またはお客様専用のサービスのカスタマイズのため
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    学校／カレッジ／大学／機関／専門資格団体に問い合わせて、学歴や専門資格を確認するため。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    ご記入いただいた身元保証人および／または保証人に連絡するため
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様が要求されたJConnect.co.idのサービスの注文を処理するため。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id サービス、請求に関するお問い合わせ、苦情、その他 JConnect.co.id サービスに関連してお客様が JConnect.co.id に送信したお問い合わせについて調査し解決するため。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    スタッフ教育および品質保証の管理のため
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id ウェブサイトおよびJConnect.co.idサービスのパフォーマンスを監視し、改善するため。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id ウェブサイトおよび JConnect.co.id サービスの維持・発展のため
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様の情報およびコミュニケーションのニーズを理解し、JConnect.co.idがJConnect.co.idサービスの改善とカスタマイズを行うため。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id サービスに関する調査・開発・統計分析を行い、傾向を把握し、お客様の関心を反映した新しいサービスを開発するため。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id が JConnect.co.id のウェブサイトにおけるお客様の閲覧傾向を把握し、それに応じてコンテンツをカスタマイズできるよう支援するため。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    不正行為を検知・防止するため
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、上記第2.1条に定める目的のために、お客様の個人情報の処理を制限することができない場合があります。当社への個人情報の提供は任意ですが、JConnect.co.id がそのような目的で個人情報を処理することに同意されない場合は、JConnect.co.id との JConnect.co.id サービスに関する関連契約を終了し、JConnect.co.id サイトの使用を停止してください。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            また、JConnect.co.idは、以下の目的でお客様の個人情報を利用することがあります :
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    Untuk を宣伝・販売する :
                                                    </p>
                                                    <ol class="ordered-list-roman">
                                                        <li align="justify">
                                                            <p align="justify">JConnect.co.idの他のサービスまたは</p>
                                                        </li>
                                                        <li align="justify">
                                                            <p align="justify">JConnect.co.idがお客様に有益であると考える第三者のサービス</p>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id ウェブサイトおよび/または JConnect.co.id サービスにおける季節の挨拶メッセージや重大なパフォーマンスエラーを通知するメッセージを送信するため。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    JConnect.co.id サービスおよび/または JConnect.co.id ウェブサイトの利用を含むがこれに限定されない、お客様のキャリア開発を最大化するためのヒント、アドバイス、調査情報をお送りすること。
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idは、B.1項およびB.3項に規定されている以外の方法でお客様の個人情報を処理する場合、お客様の同意を得るものとします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==4){
?>
                                    <h3 id="toc4">&nbsp;C. JCONNECT.CO.ID プロファイル</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            1. JConnect.co.id では、JConnect.co.id のプリセットフォーマットを使用して情報をアップロードすると、JConnect.co.id プロファイルを JConnect.co.id レジュメデータベースに配置することができます。これには2つの方法があります。 :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">
                                                    お客様は、JConnect.co.idプロフィールをJConnect.co.idレジュメデータベースに保存することができますが、潜在的な雇用主、広告主、アカウント保持者が検索できるようにすることはできません。JConnect.co.idプロフィールを検索可能にしないことは、オンライン応募に使用することはできますが、雇用者、広告主、アカウントホルダーはJConnect.co.idレジュメデータベースから検索することができません。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.idのプロフィールは、雇用主、広告主、アカウント保持者が検索できるようにすることができます。お客様がJConnect.co.idプロフィールを検索可能にした場合、お客様の完全なプロフィール、履歴書、個人情報は、JConnect.co.id履歴書データベースからお客様のJConnect.co.idプロフィールをダウンロードした雇用主、広告主、アカウント所有者が見ることができるようになります。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、JConnect.co.id レジュメデータベースへのアクセスを JConnect.co.id サービスに加入している者に限定するために最善の努力を行いますが、これらの関係者は、お客様の JConnect.co.id プロファイルのコピーを独自のファイルまたはデータベースに保存する場合があります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、JConnect.co.id の同意なしに、上記以外の当事者が JConnect.co.id の履歴書データベースにアクセスすることがないように、妥当な措置を講じるものとします。ただし、JConnect.co.idは、第三者によるJConnect.co.idプロファイルの保存、使用、プライバシーについて責任を負うものではありません。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            第 3.1 条にかかわらず、JConnect.co.id は、第 B.1 条に定める目的のため、JConnect.co.id サービスを実行するためにお客様の JConnect.co.id プロファイルに完全にアクセスする権利を有します。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==5){
?>
                                    <h3 id="toc5">&nbsp;D. 個人情報の選択とアクセス</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            プライバシーに関する懸念は人それぞれでしょう。JConnect.co.idの目標は、収集する情報を明確にすることで、その使用方法についてお客様が有意義な選択を行えるようにすることです。例えば :
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    個人情報を共有する相手をコントロールすることができる
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    様々なマーケティングプリファレンス、JConnect.co.idサービスの購読を確認し、コントロールすることができます。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様はいつでもご自身の個人情報およびプリファレンスを閲覧、編集、削除することができます。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様はJConnect.co.idからのマーケティング資料を受け取らないよう選択することができます。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    また、MyJConnect.co.idのアカウントにログインすることで、追加のJConnect.co.idサービスを購読することができます。
                                                    </p>
                                                </li>
                                            </ol>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            お客様はいつでもMyJConnect.co.idアカウントを削除することができます。削除された時点で、JConnect.co.idはお客様のアカウント、履歴書、データベース内のJConnect.co.idプロフィールへのすべてのアクセスを削除します。お客様のMyJConnect.co.idアカウントの削除は、お客様が当社に提出した、または当社、広告主もしくはアカウント保持者が過去にダウンロードしたJConnect.co.idプロファイルには影響を与えません。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==6){
?>
                                    <h3 id="toc6">&nbsp;E. 個人情報の保有</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idは、上記条項Bに記載された目的および法的または業務上の目的を達成するために必要な期間、お客様の個人情報を保持します。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==7){
?>
                                    <h3 id="toc7">&nbsp;F. 個人情報の安全性</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idは、個人情報のセキュリティの確保に努めます。JConnect.co.id は、個人情報を損失、盗難、誤用、不正アクセス、開示、改ざん、破壊から保護するために、適切な技術的、管理的、物理的手順を実施しています。当社のサービスにおいて入力された機密情報は、セキュア・ソケット・レイヤー技術（SSL）を用いて暗号化されて送信されます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            インターネット上の送信方法、電子的な保存方法は、100％安全とは言えません。そのため、その絶対的な安全性を保証するものではありません。当社ウェブサイトのセキュリティについてご質問がある場合。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==8){
?>
                                    <h3 id="toc8">&nbsp;G. 個人情報の開示先</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            上記Aで言及された個人情報は、JConnect.co.idが上記Bで言及された目的を達成するために、お客様へのJConnect.co.idサービスの提供を含む事業を効果的に管理するために、以下のように第三者クラスに開示される場合があります。 :
                                            <ol class="ordered-list-alpha">
                                                <li>
                                                    <p align="justify">広告主</p>
                                                </li>
                                                <li>
                                                    <p align="justify">雇用主</p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id がお客様に JConnect.co.id サービスの全部または一部を提供する際に、JConnect.co.id を支援するために契約した第三者（以下を含みますが、これに限定されません）。 :
                                                    </p>
                                                    <ol class="ordered-list-roman">
                                                        <li>
                                                            <p align="justify">プロファイリング／アセスメントサービス</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">オンライン広告サービス</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">地図作成サービス</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">保守・修理サービスおよび</p>
                                                        </li>
                                                        <li>
                                                            <p align="justify">市場調査およびウェブサイトの利用状況分析サービス</p>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    JConnect.co.id と協力して JConnect.co.id サービスを提供する、または JConnect.co.id サービスおよび/または JConnect.co.id ウェブサイトのマーケティングおよび宣伝を支援する戦略的なパートナー
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    お客様のキャリア展望および/または専門的資格の向上を目的とした教育提供などの追加サービスを提供する戦略的パートナー。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    学歴を確認するため、留学した学校・大学・機関およびその推薦者
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    認定を受けた専門資格団体
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    お客様がFacebook Connectを使用してJConnect.co.idのウェブサイトにログインした場合、同じくFacebook Connectを使用して当サイトにログインしたお客様のFacebookの友人。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    規制機関、政府機関またはその他の当局が、法令に基づき、または裁判所の命令もしくは決定に関連して、規制機能を遂行するために必要または認可された場合。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    犯罪、違法・非合法活動、詐欺の検知・防止、犯罪者の逮捕・訴追、またはこれらに関連する調査のための規制機関、政府機関、その他の当局の情報提供
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    法的手続き（または法的手続きの見込み）に関与または関連している当事者、法的手続きの目的のため。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    Penasihat profesional JConnect.co.id berdasarkan kebutuhan untuk mengetahui tujuan penasihat tersebut memberikan saran kepada JConnect.co.id
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    データ分析サービスプロバイダー、データストレージおよびクラウドサービスプロバイダー、および/または当社の事業活動を支援するサービスプロバイダーを含むがこれに限定されない、その他の第三者サービスプロバイダー。
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    当該第三者が取得したJConnect.co.idサービスの全部または一部を継続して提供する目的で、JConnect.co.idの資産または事業（売掛金および売上債権を含む）の全部または一部を取得した第三者、および
                                                    </p>
                                                </li>
                                                <li>
                                                    <p align="justify">
                                                    それ以外の場合は、あらゆるデータ保護法の下で許可されます。
                                                    </p>
                                                </li>
                                            </ol>
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            上記に加え、お客様に関する個人情報が第三者に提供される可能性がある場合、お客様は通知を受け、そのような情報を共有しないことを選択する機会を得ることができます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idは、収集した個人情報を他者に販売したり貸し出すことはありません。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==9){
?>
                                    <h3 id="toc9">&nbsp;H. 個人情報に関するお客様の義務</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            お客様は、お客様自身およびお客様が個人情報を提供するその他の人物に関する正確、誤解を招かない、完全かつ最新の情報を JConnect.co.id に提供し、この個人情報が不正確、誤解を招く、不完全、古くなった場合は、JConnect.co.id に連絡して更新する責任を負います。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            そのような場合、お客様はJConnect.co.idにお客様以外の人物（例えば、お客様の推薦者または保証人）に関する個人情報を提供する必要がある場合があります。その場合、当社は、お客様が個人情報をJConnect.co.idに提供することを当該個人に通知し、お客様が個人情報を当社に提供することに同意することを確認し、このプライバシー通知のコピーを入手できる場所（当社ウェブサイトの「プライバシーポリシー」）を当該個人に通知するよう、お客様を頼りにします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==10){
?>
                                    <h3 id="toc10">&nbsp;I. お客様の個人情報をお客様の管轄区域外に転送すること</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id は、JConnect.co.id サービスの一部を提供する JConnect.co.id のサービスプロバイダーや戦略的パートナー、当社の関連会社（「海外事業体」）に対して、お客様の個人情報を当社の管轄区域外に転送および開示することが時々あります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            当社は、JConnect.co.idおよび/またはその海外事業体が提供する製品およびサービスの提供、改善、開発を支援する目的で、お客様の個人情報をお客様の管轄区域外にのみ移転および開示します。JConnect.co.idは、JConnect.co.idの海外法人のプライバシーポリシーや現地のプライバシー法（該当する場合）に従い、海外法人から個人情報を受け取る場合もあります。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==11){
?>
                                    <h3 id="toc11">&nbsp;J. 関連サイト</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id のウェブサイトには、第三者のサイトへのリンクが含まれている場合があります。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.idは、そのような第三者のサイトについて責任を負いません。このようなサイトで提供される個人情報は、本プライバシーポリシーの恩恵を受けず、関連する第三者のプライバシーポリシー（もしあれば）に従うものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Facebookコネクトなどのログインサービスを利用して、当社サイトにログインすることができます。このサービスは、お客様の身元を認証し、当社の登録フォームにあらかじめ入力するために、お客様の氏名や電子メールアドレスなどの特定の個人情報を当社と共有するオプションを提供します。Facebookコネクトなどのサービスでは、このウェブサイトでの活動に関する情報をプロフィールページに掲載し、ネットワーク内の他の人と共有することができます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            Facebookコネクトを使用して当サイトにログインした場合、お客様はJConnect.co.idがお客様の名前、会社名、役職、Facebookプロフィール画像を、同じくFacebookコネクトを使用してJConnect.co.idにログインしたお客様のFacebookの友人に表示することに同意したものとします。FacebookとJConnect.co.idのアカウントは、いつでも連携を解除することができます。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            当社のウェブサイトには、Facebookのボタンやウィジェットなどのソーシャルメディア機能、または当社のサイト上で実行されるインタラクティブなミニプログラムが含まれています。これらの機能は、お客様のIPアドレス、お客様が当サイトのどのページを閲覧したかを収集し、機能が適切に動作するようにクッキーを設定することがあります。ソーシャルメディア機能およびウィジェットは、第三者によってホストされているか、または当社のサイト上で直接ホストされています。これらの機能とお客様の相互作用は、それらを提供する会社のプライバシーポリシーによって管理されます。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==12){
?>
                                    <h3 id="toc12">&nbsp;K. お客様の同意</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            JConnect.co.id サービスおよび/または JConnect.co.id ウェブサイトの使用にあたり、お客様は、JConnect.co.id に別途通知しない限り、上記の方法（随時変更される場合があります）による JConnect.co.id による個人情報の収集と使用に同意するものとします。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                            さらに、お客様は、お客様のレフェリー、お客様が留学された学校・カレッジ・大学・機関、お客様が認定を受けた専門資格団体および当社が、お客様の個人情報をJConnect.co.idに開示することに同意されたものとします。
                                            </p>
                                        </li>
                                    </ol><br>
<?php
    }
    //  ------------------------------------------------------ All Info ------------------------------- //
    if($type==13){
?>
                                    <h3 id="toc12">&nbsp;L. 連絡先</h3>
                                    <ol class="ordered-list">
                                        <li align="justify">
                                            <p align="justify">
                                            このプライバシーに関する通知についてご質問がある場合は、JConnect.co.idウェブサイトのヘルプまたはよくある質問をご覧ください。JConnect.co.id は、お客様の懸念に効果的に対応し、JConnect.co.id サービスおよび/または JConnect.co.id ウェブサイトを改善するために、お客様のお名前、電話番号、電子メールアドレス、コメントをお伺いしています。
                                            </p>
                                        </li>
                                        <li align="justify">
                                            <p align="justify">
                                             お客様は、適用法および／または適用されるデータ保護法に従って、さらにいつでもお客様の個人情報へのアクセスおよび／またはその訂正を要求する権利、および／またはその処理を制限する権利を有しています。当社は、要求された処理を制限する際に、上記条項B.2に記載されたのと同じ結果が適用される可能性があることを指摘する。また、お客様は、ご自身の個人情報が誤っていることを認識された場合には、その訂正および/または修正を行うことが要求されます。上記全てに関連して、お客様は :
                                            </p>
                                            <ol class="ordered-list-alpha">
                                                <li align="justify">
                                                    <p align="justify">
                                                    当社がお客様の個人情報を保管または使用しているかどうかを確認し、そのデータへのアクセスを要求すること。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    不正確、不完全または古くなった個人情報の訂正を要求すること。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    お客様が以前に与えた同意の全部または一部を撤回すること。いずれの場合も、適用される法的規制、契約条件、合理的な時間枠、および上記のような結果に従うものとします。
                                                    </p>
                                                </li>
                                                <li align="justify">
                                                    <p align="justify">
                                                    また、JConnect.co.idのデータ・プライバシー・オフィサー（jconnect.official@gmail.com）または電話（+62-811-1035-838）でお問い合わせください。
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