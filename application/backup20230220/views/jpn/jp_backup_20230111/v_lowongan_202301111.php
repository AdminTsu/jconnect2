<?php
    $levels = $this->session->userdata('USR_LEVELS');
    $usr_fnames = $this->session->userdata('USR_NAMESS');
    $usr_idents = $this->session->userdata('USR_IDENTS');
    $optCountry = $this->crud->getCommon(3,7);
    $optBidang = $this->m_jconnect->getBidangKerja();
    $arrJOBS = $this->m_job->getJobUpdate();
    $optJeniss = array('0'=>'--データ選択--','1'=>'契約','2'=>'ご期待ください');
?>
<!-- Right content -->
<script>
$(document).ready(function(){
    // $('#item-list').DataTable();

    $('#cmbCOMPNY').bind('change',function(data){
        var id = $('#cmbCOMPNY').val();
        $('#hidCOMPID').val(id);
        if(id != ''){
            $.post('/jpn/myjconnect_client/getDataCompany/' +id,function(data){
                var datanya = data.split('~');
                $('#txtCOMPNY').val(datanya[0]);
                $('#txtLCTION').val(datanya[2]);
                $('#txtBIDANG').val(datanya[3]);
            });
        }
    });

    $( function() {
        $( "#datEXPDAT" ).datepicker({
            dateFormat: "yy-mm-dd",
            showButtonPanel: true,
            todayHighlight: true,
            showTime: true,
            changeYear: true,
            changeMonth: true,
            inline: true
        });
    });

    $('.tablemanager').tablemanager({
        firstSort: [[3,0],[2,0],[1,'asc']],
        disable: [1,5,6],
        appendFilterby: true,
        dateFormat: [[4,"mm-dd-yyyy"]],
        debug: true,
        vocabulary: {
            voc_filter_by: 'でフィルタリング',
            voc_type_here_filter: 'データを検索する...',
            voc_show_rows: '表示'
        },
        pagination: true,
        showrows: [5,10,20,50,100],
        disableFilterBy: [1,5,6]
    });
});

</script>
<style>

/*#container { margin: 150px auto; max-width: 960px; }
a {
    text-decoration: none;
}*/
#item-list {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 20px;
}
#item-list, th, td {
    border: 1px solid #bbb;
    text-align: left;
    /*font-size : 10px;*/
}
#item-list tr:nth-child(even) {
    background-color: #dddddd;
}
#item-list tr:hover {
    background-color: #3399ff;
}
#item-list th {
    /*background-color: #ddd;*/
}
#item-list th,td {
    padding: 5px;
}
#item-list th:hover {
    background-color: #3399ff;
}
#item-list button {
    cursor: pointer;
}
/*Initial style sort*/
.tablemanager th.sorterHeader {
    cursor: pointer;
}
.tablemanager th.sorterHeader:after {
    /*content: " \f0dc";*/
    content: url("<?=base_url()?>resources/images/check_indeterminate_disabled.png");
    font-family: "FontAwesome";
}
/*Style sort desc*/
.tablemanager th.sortingDesc:after {
    /*content: " \f0dd";*/
    content: url("<?=base_url()?>resources/images/sortdesc.png");
    font-family: "FontAwesome";
}
/*Style sort asc*/
.tablemanager th.sortingAsc:after {
    /*content: " \f0de";*/
    content: url("<?=base_url()?>resources/images/sortasc.png");
    font-family: "FontAwesome";
}
/*Style disabled*/
.tablemanager th.disableSort {
}
#for_numrows {
    padding: 10px;
    float: left;
}
#for_filter_by {
    padding: 10px;
    float: right;
}

/* pagination setting*/
#pagesControllers {
    display: block;
    text-align: center;
    justify-content: space-between;
}
#pagesControllers button.pagecontroller-f{
    content:'Awal';
}

/* pagination setting display*/
.pagecontroller-f{
    background-color: #b3d9ff;
}
.pagecontroller-p{
    background-color: #b3d9ff;
}
.pagecontroller-num currentPage{
    background-color: #b3d9ff;
    color:#ff3399;
}
.pagecontroller-num{
    background-color: #b3d9ff;
}
.pagecontroller-n{
    background-color: #b3d9ff;
}
.pagecontroller-l{
    background-color: #b3d9ff;
}

/*hover pagecontroller*/
.pagecontroller-f:hover{
    background-color: #ff3399;
}
.pagecontroller-p:hover{
    background-color: #ff3399;
}
.pagecontroller-num currentPage:hover{
    background-color: #ff3399;
    color:#b3d9ff;
}
.pagecontroller-num:hover{
    background-color: #ff3399;
}
.pagecontroller-n:hover{
    background-color: #ff3399;
}
.pagecontroller-l:hover{
    background-color: #ff3399;
}
</style>
<!-- Right content -->
<?php
    //  ------------------------------------------------------ Lowongan ------------------------------- //
        // print_r($data);
        if($jenis == 'view'){
?>
<!-- ----------------------------------------------------  view lowongan ------------------------------------------------------------- -->
            <table class='table1'>
                <tr>
                    <th colspan=7><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                </tr>
            </table><br>
            <!-- <p>
                <input type="text" id="1" class="cari" onkeyup="searchTable(1)" size="40" placeholder="Cari...">
            </p> -->
            <div id='container'>
                <table id="item-list" class="tablemanager">
                    <thead>
                        <tr class="table-primary">
                            <th class="disableFilterBy disableSort" style="text-align: center;">いいえ</th>
                            <th style="text-align: center;">ジョブ番号</th>
                            <th style="text-align: center;">求人情報</th>
                            <th style="text-align: center;">募集中</th>
                            <th style="text-align: center;">適用範囲</th>
                            <th style="text-align: center;">ステータス</th>
                            <th class="disableFilterBy disableSort" style="text-align: center;">変更</th>
                            <th class="disableFilterBy disableSort" style="text-align: center;">削除</th>
                        </tr>
                    </thead>
                    <tbody>

<?php
    if($jml > 0){
        $i = 1;
        // print_r($data);
        $jobsno = '';
        foreach($data as $row){

            $nomjob = isset($row['JOB_NOMJOB']) ? $row['JOB_NOMJOB'] : NULL;
            $idents = isset($row['JOB_IDENTS']) ? $row['JOB_IDENTS'] : NULL;
            $comidn = isset($row['JOB_COMPNY']) ? $row['JOB_COMPNY'] : NULL;
            $titles = isset($row['JOB_TITLES']) ? $row['JOB_TITLES'] : NULL;
            $lowngn = isset($row['JOB_VACNCY']) ? $row['JOB_VACNCY'] : NULL;
            $bidang = isset($row['JOB_ASPECS']) ? $row['JOB_ASPECS'] : NULL;
            $expdat = isset($row['JOB_EXPDAT']) ? $row['JOB_EXPDAT'] : NULL;
            $jeniss = isset($row['JOB_DRTION']) ? $row['JOB_DRTION'] : NULL;
            $status = isset($row['JOB_STATUS']) ? $row['JOB_STATUS'] : NULL;
            // echo $nomjob."<br>";
            if($nomjob != $jobsno){
                echo "
                    <tr>
                        <td>".$i."</td>
                        <td style='text-align:center;'>".$nomjob."</td>
                        <td>".ucwords(strtolower($titles))."</td>
                        <td>".$lowngn." orang</td>
                        <td style='text-align:center;'>".$expdat."</td>
                        <td style='text-align:center;'>".$status."</td>
                        <td style='text-align:center;'>
                            <a id='menu_web' class='genric-btn primary-border small' href=".base_url()."jpn/myjconnect_client/lowongan_edit/".$idents."/".$comidn.">変更</a><br>
                        </td>
                        <td style='text-align:center;'>
                            <a id='menu_web' class='genric-btn danger-border small' href=".base_url()."jpn/myjconnect_client/lowongan_hapus/".$idents."/".$comidn.">削除</a>
                        </td>
                    </tr>
                ";
                $i++;
                $jobsno = $nomjob;
            }
        }
    }else{
        echo "
            <tr>
                <td colspan=7>申し訳ございませんが、貴社は求人情報を掲載していません。求人情報の作成を開始してください。</td>
            </tr>
        ";              
    }
?>
        </tbody>
    </table>
    </div><br>
<?php
        }

        // print_r($data_job);
        if($jenis == 'edit' || $jenis == 'add'){
            if($jenis == 'add'){
                $nomjob = '';
                $idents = '';
                $comidn = '';
                $lction = '';
                $titles = '';
                $vacncy = '';
                $bidang = '';
                $expdat = '';
                $jeniss = '';
                $status = '';
                $dcript = '';
                $rqskil = '';
                $fsilty = '';
                $salmin = '';
                $salmax = '';
                $emilct = '';
                $client = '';
                $optCOMPNY = $this->m_jconnect->getCompanyCmb($idents);
                $idnya = '';
                $comidn= $idclnt;
            }else{
                foreach($data_job as $row){
                    $nomjob = isset($row['JOB_NOMJOB']) ? $row['JOB_NOMJOB'] : NULL;
                    $idents = isset($row['JOB_IDENTS']) ? $row['JOB_IDENTS'] : NULL;
                    $comidn = isset($row['JOB_COMPNY']) ? $row['JOB_COMPNY'] : NULL;
                    $lction = isset($row['JOB_LCTION']) ? $row['JOB_LCTION'] : NULL;
                    $titles = isset($row['JOB_TITLES']) ? $row['JOB_TITLES'] : NULL;
                    $vacncy = isset($row['JOB_VACNCY']) ? $row['JOB_VACNCY'] : NULL;
                    $bidang = isset($row['JOB_ASPECS']) ? $row['JOB_ASPECS'] : NULL;
                    $expdat = isset($row['JOB_EXPDAT']) ? $row['JOB_EXPDAT'] : NULL;
                    $jeniss = isset($row['JOB_DRTION']) ? $row['JOB_DRTION'] : NULL;
                    $status = isset($row['JOB_STATUS']) ? $row['JOB_STATUS'] : NULL;
                    $dcript = isset($row['JOB_DSCRIP']) ? $row['JOB_DSCRIP'] : NULL;
                    $rqskil = isset($row['JOB_RQSKIL']) ? $row['JOB_RQSKIL'] : NULL;
                    $fsilty = isset($row['JOB_FSILTY']) ? $row['JOB_FSILTY'] : NULL;
                    $salmin = isset($row['JOB_SALMIN']) ? $row['JOB_SALMIN'] : NULL;
                    $salmax = isset($row['JOB_SALMAX']) ? $row['JOB_SALMAX'] : NULL;
                    $emilct = isset($row['JOB_EMILCT']) ? $row['JOB_EMILCT'] : NULL;
                    $client = isset($row['CLIENT']) ? $row['CLIENT'] : NULL;
                    $optCOMPNY = $this->m_jconnect->getCompanyCmb($comidn);
                    $idnya = $idjob;
                }
            }

            $optJenis = array(''=>'--セレクトタイプ--','1'=>'契約','2'=>'ご期待ください');
            $optStatus = array('0'=>'--Pilih Status--','1'=>'Aktif','2'=>'Seleksi','3'=>'Batal','4'=>'Tutup','5'=>'Expired','5'=>'Selesai');

?>
<!-- -------------------------------------------------------  edit lowongan --------------------------------------------------------------- -->
        
            <form action="/jpn/myjconnect_client/lowongan_simpan/<?=$comidn?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
                <table class='table1'>
                    <input type='hidden' name='hidIDENTS' id='hidIDENTS' value='<?=$idnya?>' placeholder="hidIDENTS"> 
                    <input type='hidden' name='hidTRNSKS' id='hidTRNSKS' value='<?=$jenis?>' placeholder="hidTRNSKS">          
                    <input type='hidden' name='hidCOMPID' id='hidCOMPID' value='<?=$comidn?>' placeholder="hidCOMPID">
                    <tr>
                        <td>
                            <table class='table2'>
                                <tr>
                                    <th colspan=2><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                                </tr>
                                <tr>
                                    <td width="120px">投稿番号</td>
                                    <td>
                                        <input class="form-control" name="txtNOMORS" id="txtNOMORS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '投稿番号'" placeholder="投稿番号" value='<?=$nomjob?>' readonly style='width: 150px;text-align: left;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>役職名</td>
                                    <td>
                                        <input class="form-control" name="txtTITLES" id="txtTITLES" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '役職名'" placeholder="役職名" value='<?=$titles?>' style='width: 500px;text-align: left;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>会社概要</td>
                                    <!-- <td>
                                        <input class="form-control" name="txtCOMPNY" id="txtCOMPNY" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '会社概要'" placeholder="会社概要" value='<?=$client?>' style='width: 500px;text-align: left;'>
                                    </td> -->
                                    <td>
                                        <select style='width: 500px;text-align: left;' class="form-control" name="cmbCOMPNY" id="cmbCOMPNY" onchange="jvChangeContry(this.value)" required>
                                            <?php
                                                foreach($optCOMPNY as $key=>$row){
                                                    if($comidn == $key){
                                                        $selected = 'selected';
                                                    }else{
                                                        $selected = '';
                                                    }
                                                    echo "<option value=".$key." ".$selected.">".$row."</option>";
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>所在地</td>
                                    <td>
                                        <input class="form-control" name="txtLCTION" id="txtLCTION" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '所在地'" placeholder="所在地" value='<?=$lction?>' style='width: 300px;text-align: left;' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>作品分野</td>
                                    <td>
                                        <input class="form-control" name="txtBIDANG" id="txtBIDANG" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '作品分野'" placeholder="作品分野" value='<?=$bidang?>' style='width: 300px;text-align: left;' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>仕事内容</td>
                                    <td>
                                        <textarea class="form-control" name="txaDSCRIP" id="txaDSCRIP" type="text" rows=10 onfocus="this.placeholder = ''" onblur="this.placeholder = '仕事内容'" placeholder="仕事内容" style='width: 650px;text-align: left;'><?=$dcript?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>能力・スキル</td>
                                    <td>
                                        <textarea class="form-control" name="txaRQSKIL" id="txaRQSKIL" type="text" rows=10 onfocus="this.placeholder = ''" onblur="this.placeholder = '能力・スキル'" placeholder="能力・スキル" style='width: 650px;text-align: left;'><?=$rqskil?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>施設紹介</td>
                                    <td>
                                        <textarea class="form-control" name="txaFSILTY" id="txaFSILTY" type="text" rows=10 onfocus="this.placeholder = ''" onblur="this.placeholder = '施設紹介'" placeholder="施設紹介" style='width: 650px;text-align: left;'><?=$fsilty?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>空席数</td>
                                    <td>
                                        <input class="form-control" name="numVACNCY" id="numVACNCY" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = '空席数'" placeholder="空席数" value='<?=$vacncy?>' style='width: 80px;text-align: right;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>最低給与額</td>
                                    <td>
                                        <input class="form-control" name="numSALMIN" id="numSALMIN" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = '最低給与額'" placeholder="最低給与額" value='<?=$salmin?>' style='width: 150px;text-align: right;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>最高給与額</td>
                                    <td>
                                        <input class="form-control" name="numSALMAX" id="numSALMAX" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = '最高給与額'" placeholder="最高給与額" value='<?=$salmax?>' style='width: 150px;text-align: right;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>電子メール</td>
                                    <td>
                                        <input class="form-control" name="txtEMILCT" id="txtEMILCT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '電子メール'" placeholder="電子メール" value='<?=$emilct?>' style='width: 400px;text-align: left;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>作品の種類</td>
                                    <td>
                                        <select style='width: 500px;text-align: left;' class="form-control" name="cmbDRTION" id="cmbDRTION" onchange="jvChangeContry(this.value)" required>
                                            <?php
                                                foreach($optJenis as $key=>$row){
                                                    if($jeniss == $key){
                                                        $selected = 'selected';
                                                    }else{
                                                        $selected = '';
                                                    }
                                                    echo "<option value=".$key." ".$selected.">".$row."</option>";
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>有効期間</td>
                                    <td>
                                        <input class="form-control" name="datEXPDAT" id="datEXPDAT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '有効期間'" placeholder="Berlaku" value='<?=$expdat?>' style='width: 120px;text-align: right;'>
                                    </td>
                                </tr>
                                <?php
                                    if($idents != '' || $idents != 0){
                                ?>
                                <tr>
                                    <td>雇用の状況</td>
                                    <td>
                                        <select style='width: 500px;text-align: left;' class="form-control" name="cmbSTATUS" id="cmbSTATUS" onchange="jvChangeContry(this.value)" required>
                                            <?php
                                                foreach($optStatus as $key=>$row){
                                                    if($status == $key){
                                                        $selected = 'selected';
                                                    }else{
                                                        $selected = '';
                                                    }
                                                    echo "<option value=".$key." ".$selected.">".$row."</option>";
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                                <tr>
                                    <td colspan=2 style='text-align: right;'>
                                        <div class="single-listing">
                                        <?php if($jenis == 'view'){ ?>
                                            <div id='single-listing' class="single-listing">
                                                <a id='menu_web' href="<?php echo base_url(); ?>jpn/myjconnect_client/profile_edit/<?=$comidn?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;変更</i></a>
                                            </div><br>
                                        <?php }else{ ?>
                                            <div id='single-listing' class="single-listing">
                                                <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>&nbsp;&nbsp;セーブ</button>
                                                <a id='cancel' href="<?php echo base_url(); ?>jpn/myjconnect_client/lowongan/<?=$comidn?>" class="genric-btn primary-border small">キャンセル</a>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table><br>
            </form>
<?php
        }
?>
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
