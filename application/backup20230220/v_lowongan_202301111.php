<?php
    $levels = $this->session->userdata('USR_LEVELS');
    $usr_fnames = $this->session->userdata('USR_NAMESS');
    $usr_idents = $this->session->userdata('USR_IDENTS');
    $optCountry = $this->crud->getCommon(3,7);
    $optBidang = $this->m_jconnect->getBidangKerja();
    $arrJOBS = $this->m_job->getJobUpdate();
    $optJeniss = array('0'=>'--Pilih Data--','1'=>'Kontrak','2'=>'Tetap');
?>
<!-- Right content -->
<script>
$(document).ready(function(){
    // $('#item-list').DataTable();

    $('#cmbCOMPNY').bind('change',function(data){
        var id = $('#cmbCOMPNY').val();
        $('#hidCOMPID').val(id);
        if(id != ''){
            $.post('/Myyjconnect_Client/getDataCompany/' +id,function(data){
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
            voc_filter_by: 'Filter by',
            voc_type_here_filter: 'Cari data..',
            voc_show_rows: 'Tampilkan'
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
    /*border: 1px solid #bbb;*/
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
                <table id="item-list" class="tablemanager" style='border: 1px solid #bbb;'>
                    <thead>
                        <tr class="table-primary" style='border: 1px solid #bbb;'>
                            <th class="disableFilterBy disableSort" style="text-align: center;border: 1px solid #bbb;">No</th>
                            <th style="text-align: center;border: 1px solid #bbb;">No.Job</th>
                            <th style="text-align: center;border: 1px solid #bbb;">Pekerjaan</th>
                            <th style="text-align: center;border: 1px solid #bbb;">Dibutuhkan</th>
                            <th style="text-align: center;border: 1px solid #bbb;">Berlaku</th>
                            <th style="text-align: center;border: 1px solid #bbb;">Status</th>
                            <th colspan=2 class="disableFilterBy disableSort" style="text-align: center;border: 1px solid #bbb;">Action</th>
                            <!-- <th class="disableFilterBy disableSort" style="text-align: center;border: 1px solid #bbb;">Hapus</th> -->
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
                    <tr style='border: 1px solid #bbb;'>
                        <td style='border: 1px solid #bbb;'>".$i."</td>
                        <td style='text-align:center;border: 1px solid #bbb;'>".$nomjob."</td>
                        <td style='border: 1px solid #bbb;'>".ucwords(strtolower($titles))."</td>
                        <td style='border: 1px solid #bbb;'>".$lowngn." orang</td>
                        <td style='text-align:center;border: 1px solid #bbb;'>".$expdat."</td>
                        <td style='text-align:center;border: 1px solid #bbb;'>".$status."</td>
                        <td style='text-align:center;border: 1px solid #bbb;'>
                            <a id='menu_web' class='genric-btn primary-border small' href=".base_url()."Myjconnect_Client/lowongan_edit/".$idents."/".$comidn.">Ubah</a><br>
                        </td>
                        <td style='text-align:center;border: 1px solid #bbb;'>
                            <a id='menu_web' class='genric-btn danger-border small' href=".base_url()."Myjconnect_Client/lowongan_hapus/".$idents."/".$comidn.">Hapus</a>
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
                <td colspan=7>Maaf, perusahaan anda belum ada pemasangan lowongan kerja, silahkan mulai membuat lowongan kerja anda.</td>
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
                $optCOMPNY = $this->m_jconnect->getCompanyCmb($idclnt);
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

            $optJenis = array(''=>'--Pilih Jenis','1'=>'Kontrak','2'=>'Tetap');
            $optStatus = array('0'=>'--Pilih Status--','1'=>'Aktif','2'=>'Seleksi','3'=>'Batal','4'=>'Tutup','5'=>'Expired','5'=>'Selesai');

?>
<!-- -------------------------------------------------------  edit lowongan --------------------------------------------------------------- -->
            
            <form action="/Myjconnect_Client/lowongan_simpan/<?=$comidn?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
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
                                    <td>No. Posting</td>
                                    <td>
                                        <input class="form-control" name="txtNOMORS" id="txtNOMORS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Posting'" placeholder="No. Posting" value='<?=$nomjob?>' readonly style='width: 150px;text-align: left;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul Pekerjaan</td>
                                    <td>
                                        <input class="form-control" name="txtTITLES" id="txtTITLES" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul Pekerjaan'" placeholder="Judul Pekerjaan" value='<?=$titles?>' style='width: 500px;text-align: left;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Perusahaan</td>
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
                                    <td>Lokasi</td>
                                    <td>
                                        <input class="form-control" name="txtLCTION" id="txtLCTION" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lokasi'" placeholder="Lokasi" value='<?=$lction?>' style='width: 300px;text-align: left;' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bidang Pekerjaan</td>
                                    <td>
                                        <input class="form-control" name="txtBIDANG" id="txtBIDANG" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Pekerjaan'" placeholder="Bidang Pekerjaan" value='<?=$bidang?>' style='width: 300px;text-align: left;' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deskripsi Pekerjaan</td>
                                    <td>
                                        <textarea class="form-control" name="txaDSCRIP" id="txaDSCRIP" type="text" rows=10 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deskripsi Pekerjaan'" placeholder="Deskripsi Pekerjaan" style='width: 650px;text-align: left;'><?=$dcript?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kemampuan/Skill</td>
                                    <td>
                                        <textarea class="form-control" name="txaRQSKIL" id="txaRQSKIL" type="text" rows=10 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kemampuan/Skill'" placeholder="Kemampuan/Skill" style='width: 650px;text-align: left;'><?=$rqskil?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fasilitas</td>
                                    <td>
                                        <textarea class="form-control" name="txaFSILTY" id="txaFSILTY" type="text" rows=10 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Fasilitas'" placeholder="Fasilitas" style='width: 650px;text-align: left;'><?=$fsilty?></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Jumlah Lowongan</td>
                                    <td>
                                        <input class="form-control" name="numVACNCY" id="numVACNCY" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jml'" placeholder="Jml" value='<?=$vacncy?>' style='width: 80px;text-align: right;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gaji Minimum</td>
                                    <td>
                                        <input class="form-control" name="numSALMIN" id="numSALMIN" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Minimum'" placeholder="Minimum" value='<?=$salmin?>' style='width: 150px;text-align: right;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gaji Maksimum</td>
                                    <td>
                                        <input class="form-control" name="numSALMAX" id="numSALMAX" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Maksimum'" placeholder="Maksimum" value='<?=$salmax?>' style='width: 150px;text-align: right;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input class="form-control" name="txtEMILCT" id="txtEMILCT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email" value='<?=$emilct?>' style='width: 400px;text-align: left;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Pekerjaan</td>
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
                                    <td>Masa Berlaku</td>
                                    <td>
                                        <input class="form-control" name="datEXPDAT" id="datEXPDAT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Berlaku'" placeholder="Berlaku" value='<?=$expdat?>' style='width: 120px;text-align: right;'>
                                    </td>
                                </tr>
                                <?php
                                    if($idents != '' || $idents != 0){
                                ?>
                                <tr>
                                    <td>Status Pekerjaan</td>
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
                                                <a id='menu_web' href="<?php echo base_url(); ?>Myjconnect_Client/profile_edit/<?=$comidn?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                                            </div><br>
                                        <?php }else{ ?>
                                            <div id='single-listing' class="single-listing">
                                                <button type="submit" name="submit" id="submit" class="genric-btn primary-border small" disbaled>&nbsp;&nbsp;Simpan</button>
                                                <a id='cancel' href="<?php echo base_url(); ?>Myjconnect_Client/lowongan/<?=$comidn?>" class="genric-btn primary-border small">Batal</a>
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
