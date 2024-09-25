<?php
    $levels = $this->session->userdata('USR_LEVELS');
    $usr_fnames = $this->session->userdata('USR_NAMESS');
    $usr_idents = $this->session->userdata('USR_IDENTS');
?>
<!-- Right content -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-80N6VV720L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-80N6VV720L');
</script>
<script>
$(document).ready(function(){
    if('<?=$jenis?>' == 'view'){
        jvDetail(idnya=null);
    }

    // --------------- onchange data perusahaan
    $('#cmbCOMPNY').bind('change',function(data){
        var id = $('#cmbCOMPNY').val();
        $('#hidCOMPID').val(id);
        if(id != ''){
            $.post('/Myjconnect_Client/getDataCompany/' +id,function(data){
                var datanya = data.split('~');
                $('#txtCOMPNY').val(datanya[0]);
                $('#txtLCTION').val(datanya[2]);
                $('#txtBIDANG').val(datanya[3]);
            });
        }
    });

    // // --------------- onchange data pekerjaan
    // $('#cmbNOMJOB').bind('change',function(data){
    //     var IDJOBNYA = $('#cmbNOMJOB').val();
    //     if(IDJOBNYA != ''){
    //         // alert(IDJOBNYA);
    //         $.post('/Myjconnect_Client/getDataJob/' +IDJOBNYA,function(data){
    //             var datanya = data.split('~');
    //             $('#txtPOSISI').val(datanya[2]);
    //             $('#txtSTSJOB').val(datanya[3]);
    //             $('#numVACNCY').val(datanya[4]);
    //         });
    //     }
    //     console.log(IDJOBNYA);
    // });

    // // --------------- onchange data peserta
    // $('#cmbPEKRJA').bind('change',function(data){
    //     var id = $('#cmbPEKRJA').val();
    //     if(id != ''){
    //         $.post('/Myjconnect_Client/getDataPekerja/' +id,function(data){
    //             var datanya = data.split('~');
    //             $('#cmbPEKRJA').val(datanya[0]);
    //             $('#hidPKRJID').val(datanya[0]);
    //             $('#dtlJNSKLM').val(datanya[2]);
    //             $('#dtlEXPRNC').val(datanya[3]);
    //             $('#dtlCOMPNY').val(datanya[4]);
    //             $('#dtlBIDANG').val(datanya[5]);
    //         });
    //     }
    // });
    
    $(function() {
        $( "#datRECDAT" ).datepicker({
            dateFormat: "yy-mm-dd",
            showButtonPanel: true,
            todayHighlight: true,
            showTime: true,
            changeYear: true,
            changeMonth: true,
            inline: true
        });
    });

    // ------- untuk tampilan tablemanager ------- //
    $('.tablemanager').tablemanager({
        firstSort: [[2,0],[1,'asc']],
        disable: [1,6,7,8],
        appendFilterby: true,
        dateFormat: [[4,"mm-dd-yyyy"]],
        debug: true,
        vocabulary: {
            voc_filter_by: 'Filter by',
            voc_type_here_filter: 'Cari..',
            voc_show_rows: 'Tampilkan'
        },
        pagination: true,
        showrows: [5,10,20,50,100],
        disableFilterBy: [1,6,7,8]
    });
});

function jvChangeJobs(){                    
    // --------------- onchange data pekerjaan
    var IDJOBNYA = $('#cmbNOMJOB').val();
    $('#NOMJOBNYA').val($('#cmbNOMJOB').val());
    var IDJOBNYA = $('#NOMJOBNYA').val();
    if(IDJOBNYA != ''){
        // alert(IDJOBNYA);
        $.post('/Myjconnect_Client/getDataJob/' +IDJOBNYA,function(data){
            var datanya = data.split('~');
            $('#txtPOSISI').val(datanya[2]);
            $('#txtSTSJOB').val(datanya[3]);
            $('#numVACNCY').val(datanya[4]);
        });
    }

    $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "/Myjconnect_Client/comboNomorJob/"+IDJOBNYA, // Isi dengan url/path file php yang dituju
        data: {IDJOBNYA : $("#cmbNOMJOB").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
            $("#pekerja").html(response.listPekerja).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
    });
    // console.log(IDJOBNYA);
}

function jvChangePekerja(){
    // --------------- onchange data peserta
    var id = $('#cmbPEKRJA').val();
    // alert(id);
    if(id != 0){
        $.post('/Myjconnect_Client/getDataPekerja/' +id,function(data){
            var datanya = data.split('~');
            // alert(datanya[0]);
            $('#cmbPEKRJA').val(datanya[0]);
            $('#hidPKRJID').val(datanya[0]);
            $('#dtlJNSKLM').val(datanya[2]);
            $('#dtlEXPRNC').val(datanya[3]);
            $('#dtlCOMPNY').val(datanya[4]);
            $('#dtlBIDANG').val(datanya[5]);
        });
    }
}

function jvDetail(idnya){
    $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "/Myjconnect_Client/getDetailPerekrutan/"+idnya, // Isi dengan url/path file php yang dituju
        success: function(response){ // Ketika proses pengiriman berhasil
            $("#tabeldata").html(response);
        }
    });
}
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
    background-color: #ddd;
}
#item-list th {
    /*background-color: #ddd;*/
}
#item-list th,td {
    padding: 5px;
}
#item-list th:hover {
    background-color: #ddd;
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
    content: url("<?=base_url()?>resources/images/sortremove.png");
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
        // echo $jml.'<br>';
        // print_r($datarecrut);
        if($jenis == 'view'){
?>
<!-- ----------------------------------------------------  view perekrutan ------------------------------------------------------------- -->
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
                            <th style="text-align: center;border: 1px solid #bbb;">No.Rekrut</th>
                            <th style="text-align: center;border: 1px solid #bbb;">Pekerjaan</th>
                            <th style="text-align: center;border: 1px solid #bbb;">Lokasi</th>
                            <th style="text-align: center;border: 1px solid #bbb;">Status</th>
                            <th class="disableFilterBy disableSort" style="text-align: center;border: 1px solid #bbb;">Detail</th>
                            <th class="disableFilterBy disableSort" style="text-align: center;border: 1px solid #bbb;">Ubah</th>
                            <th class="disableFilterBy disableSort" style="text-align: center;border: 1px solid #bbb;">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>

<?php
    if($jml > 0){
        $i = 1;
        $jobsno = '';
        foreach($datarecrut as $row){

            $nomjob = isset($row['JOB_NOMJOB']) ? $row['JOB_NOMJOB'] : NULL;
            $identsnya = isset($row['REC_IDENTS']) ? $row['REC_IDENTS'] : NULL;
            $titles = isset($row['JOB_TITLES']) ? $row['JOB_TITLES'] : NULL;
            $lction = isset($row['JOB_LCTION']) ? $row['JOB_LCTION'] : NULL;
            $comidn = isset($row['REC_COMPNY']) ? $row['REC_COMPNY'] : NULL;
            // $client = isset($row['CLIENT']) ? $row['CLIENT'] : NULL;
            $status = isset($row['STATUS']) ? $row['STATUS'] : NULL;
            // echo $idents."<br>";
            if($nomjob != $jobsno){
                echo "
                    <tr style='border: 1px solid #bbb;'>
                        <td style='border: 1px solid #bbb;'>".$i."</td>
                        <td style='text-align:center;border: 1px solid #bbb;'>".$nomjob."</td>
                        <td style='border: 1px solid #bbb;'>".ucwords(strtolower($titles))."</td>
                        <td style='text-align:left;border: 1px solid #bbb;'>".$lction."</td>
                        <td style='text-align:center;border: 1px solid #bbb;'>".ucwords(strtolower($status))."</td>
                        <td style='text-align:center;border: 1px solid #bbb;'>
                            <button type='button' class='genric-btn success small' onClick='jvDetail(".$identsnya.")'>
                                <i class='fa fa-eye'></i>
                            </button>
                        </td>
                        <td style='text-align:center;border: 1px solid #bbb;'>
                            <a id='menu_web' class='genric-btn primary small' href=".base_url()."myjconnect_client/perekrutan_edit/".$identsnya."/".$comidn."><i class='fa fa-edit'></i></a>
                        </td>
                        <td style='text-align:center;border: 1px solid #bbb;'>
                            <a id='menu_web' class='genric-btn danger small' href=".base_url()."myjconnect_client/perekrutan_hapus/".$identsnya."/".$comidn."><i class='fa fa-times'></i></a>
                        </td>
                    </tr>
                ";
                            // <a id='menu_web' class='genric-btn success small' href='#' data-popup-target='#popup".$identsnya."'><i class='fa fa-eye'></i></a>
                             // href=".base_url()."myjconnect_client/lowongan_detail/".$idents."/".$comidn."
                $i++;
                $jobsno = $nomjob;
            }
// <a id='menu_web' class='genric-btn danger-border small' href=".base_url()."myjconnect_client/lowongan_hapus/".$idents."/".$comidn.">Hapus</a>
        }
    }else{
        echo "
            <tr>
                <td colspan=8 style='text-align:center'>Maaf, perusahaan anda belum ada melakukan perekrutan kerja.</td>
            </tr>
        ";
    }
?>
        </tbody>
    </table>
    </div><br>

    <div><b>Detail Perekrutan</b></div>
    <div id="tabeldata"></div>

<?php
        }
        
        // print_r($datanya);
        if($jenis == 'edit' || $jenis == 'add'){
            if($jenis == 'add'){
                $nomjob = '';
                $idents = '';
                $comidn = '';
                $tglrec = '';
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
                
                // print_r($data_job);
                foreach($data_job as $row){
                    $nomjob = isset($row['REC_NOMORS']) ? $row['REC_NOMORS'] : NULL;
                    $idents = isset($row['IDENTS']) ? $row['IDENTS'] : NULL;
                    $jobpos = isset($row['REC_JOBPOS']) ? $row['REC_JOBPOS'] : NULL;
                    $lction = isset($row['LCTION']) ? $row['LCTION'] : NULL;
                    $titles = isset($row['PEKERJAAN']) ? $row['PEKERJAAN'] : NULL;
                    $vacncy = isset($row['JOB_VACNCY']) ? $row['JOB_VACNCY'] : NULL;
                    $bidang = isset($row['ASPECS']) ? $row['ASPECS'] : NULL;
                    $tglrec = isset($row['REC_TGLREC']) ? $row['REC_TGLREC'] : NULL;
                    $comidn = isset($row['REC_COMPNY']) ? $row['REC_COMPNY'] : NULL;
                    
                    $optCOMPNY = $this->m_jconnect->getCompanyCmb($comidn);
                    $idnya = $idents;
                }
            }
            
            $optJenis = array(''=>'--Pilih Jenis','1'=>'Kontrak','2'=>'Tetap');
            $optStatus = array('0'=>'--Pilih Status--','1'=>'Aktif','2'=>'Seleksi','3'=>'Batal','4'=>'Tutup','5'=>'Expired','5'=>'Selesai');
            $optJobpos = $this->m_jconnect->getJobpost_autotag($idclnt);
            // $IDJOBNYA ="<script>document.write(IDJOBNYA);</script>";
            // echo $IDJOBNYA;
            // $optPekerja = $this->m_jconnect->getPekerja_autotag(0);
            // print_r($optPekerja);
            
?>
<!-- -------------------------------------------------------  add/edit perekrutan --------------------------------------------------------------- -->       <!-- action="/Myjconnect_Client/perekrutan_simpan/<?=$comidn?>" -->
            
            <form method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data"> 
                <table class='table1'>
                    <input type='hidden' name='hidIDENTS' id='hidIDENTS' value='<?=$idnya?>' placeholder="hidIDENTS">
                    <input type='hidden' name='hidTRNSKS' id='hidTRNSKS' value='<?=$jenis?>' placeholder="hidTRNSKS">
                    <input type='hidden' name='hidCOMPID' id='hidCOMPID' value='<?=$comidn?>' placeholder="hidCOMPID">
                    <input type='hidden' name='NOMJOBNYA' id='NOMJOBNYA' value='<?=$jobpos?>' placeholder="NOMJOBNYA">
                    <tr>
                        <td>
                            <table class='table2'>
                                <tr>
                                    <th colspan=2><?=$icon?>&nbsp;&nbsp;<?=$menu?></th>
                                </tr>
                                <tr>
                                    <td>No. Rekrut</td>
                                    <td>
                                        <input class="form-control" name="txtNOMORS" id="txtNOMORS" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Rekrut'" placeholder="No. Rekrut" value='<?=$nomjob?>' readonly style='width: 120px;text-align: center;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tgl. Rekrut</td>
                                    <td>
                                        <input class="form-control" name="datRECDAT" id="datRECDAT" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tgl. Rekrut'" placeholder="Tgl. Rekrut" value='<?=$tglrec?>' style='width: 120px;text-align: center;'>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Perusahaan</td>
                                    <td>
                                        <select style='width: 500px;text-align: left;' class="form-control" name="cmbCOMPNY" id="cmbCOMPNY" required>
                                            <?php
                                                foreach($optCOMPNY as $key=>$row){
                                                    if($jenis == 'edit'){
                                                        if($comidn == $key){
                                                            $selected = 'selected';
                                                        }else{
                                                            $selected = '';
                                                        }
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
                                        <input class="form-control" name="txtLCTION" id="txtLCTION" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lokasi'" placeholder="Lokasi" value='<?=$lction?>' style='width: 500px;text-align: left;' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bidang Pekerjaan</td>
                                    <td>
                                        <input class="form-control" name="txtBIDANG" id="txtBIDANG" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Pekerjaan'" placeholder="Bidang Pekerjaan" value='<?=$bidang?>' style='width: 400px;text-align: left;' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No. Posting Pekerjaan</td>
                                    <td>
                                        <select style='width: 400px;text-align: left;' class="form-control" name="cmbNOMJOB" id="cmbNOMJOB" onchange='jvChangeJobs()' required>
                                            <?php
                                                foreach($optJobpos as $key=>$row){
                                                    if($jobpos == $key){
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
                                    <td>Posisi Pekerjaan</td>
                                    <td>
                                        <input class="form-control" name="txtPOSISI" id="txtPOSISI" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Posisi Pekerjaan'" placeholder="Posisi Pekerjaan" value='<?=$titles?>' style='width: 400px;text-align: left;' readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status Pekerjaan</td>
                                    <td>
                                        <input class="form-control" name="txtSTSJOB" id="txtSTSJOB" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bidang Pekerjaan'" placeholder="Bidang Pekerjaan" value='<?=$bidang?>' style='width: 300px;text-align: left;' readonly>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Kebutuhan Lowongan</td>
                                    <td>
                                        <input class="form-control" name="numVACNCY" id="numVACNCY" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jml'" placeholder="Jml" value='<?=$vacncy?>' style='width: 80px;text-align: right;' readonly>
                                    </td>
                                </tr>

                                <tr><td colspan=2>_____________________________________________________________________________________________</td></tr>

                                <tr>
                                    <td colspan=2>
                                        <form action="">
                                            <table class='table2'>
                                                <tr>
                                                    <td colspan=3><b><u>Tambah List Pekerja</u></b></td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerja</td>
                                                    <td id='pekerja'>
                                                        <select class="form-control" name="cmbPEKRJA1" id="cmbPEKRJA1">
                                                            <option value=0>-- Pilih Pekerja --</option>
                                                        </select>
                                                        <input class="form-control" name="hidPKRJID" id="hidPKRJID" type="hidden" width='350px'> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>
                                                        <input class="form-control" name="dtlJNSKLM" id="dtlJNSKLM" type="text" readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pengalaman</td>
                                                    <td>
                                                        <input class="form-control" name="dtlEXPRNC" id="dtlEXPRNC" type="text" width='350px' readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Perusahaan</td>
                                                    <td>
                                                        <input class="form-control" name="dtlCOMPNY" id="dtlCOMPNY" type="text" width='350px' readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bidang</td>
                                                    <td>
                                                        <input class="form-control" name="dtlBIDANG" id="dtlBIDANG" type="text" width='350px' readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input name="submit" id="submit" value='Tambah' type="button" onclick="jvAddToTable()" width='350px'>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan=2>
                                        <table id='tbl_detail' border=1 width="100%" class='table2'>
                                            <tr>
                                                <th style='display: none;text-align:center'>IDPKRJ</th>
                                                <th style='text-align:center'>Pekerja</th>
                                                <th style='text-align:center'>Jenis Kelamin</th>
                                                <th style='text-align:center'>Pengalaman</th>
                                                <th style='text-align:center'>Perusahaan</th>
                                                <th style='text-align:center'>Bidang</th>
                                                <th style='text-align:center'>Aksi</th>
                                            </tr>
                                        <?php
                                            if($jenis == 'edit' || $jenis == 'add'){
                                                if($jenis == 'add'){
                                                    $idpkrj = '';
                                                    $namess = '';
                                                    $jnsklm = '';
                                                    $exprnc = '';
                                                    $exprpt = '';
                                                    $bidang = '';
                                                }else{
                                                    // print_r($data_detail);
                                                    foreach($data_detail as $row){
                                                        $idpkrj = isset($row['REC_PKRJID']) ? $row['REC_PKRJID'] : NULL;
                                                        $namess = isset($row['PKR_NAMESS']) ? $row['PKR_NAMESS'] : NULL;
                                                        $jnsklm = isset($row['JNSKLM']) ? $row['JNSKLM'] : NULL;
                                                        $exprnc = isset($row['PKR_EXPRNC']) ? $row['PKR_EXPRNC'] : NULL;
                                                        $exprpt = isset($row['PKR_EXPNPT']) ? $row['PKR_EXPNPT'] : NULL;
                                                        $bidang = isset($row['PKR_EXPBDG']) ? $row['PKR_EXPBDG'] : NULL;

                                                        // echo $namess.'~'.$jnsklm.'~'.$exprnc.'~'.$exprpt.'~'.$bidang;
                                                    }

                                                    echo "
                                                        <tr border=1 class='data-pekerja'>
                                                            <td style='display:none;'>$idpkrj</td>
                                                            <td>".ucwords(strtolower($namess))."</td>
                                                            <td>$jnsklm</td>
                                                            <td>$exprnc</td>
                                                            <td>$exprpt</td>
                                                            <td>$bidang</td>
                                                            <td>
                                                                <button type='button' class='genric-btn danger-border small' onClick='jvDelete(this)'>
                                                                    <i class='fa fa-times'></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    ";
                                                }
                                            }
                                        ?>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan=2 style='text-align: right;'>
                                        <div class="single-listing">
                                        <?php if($jenis == 'view'){ ?>
                                            <div id='single-listing' class="single-listing">
                                                <a id='menu_web' href="<?php echo base_url(); ?>myjconnect_client/profile_edit/<?=$comidn?>" class="genric-btn primary-border small"><i class="fa fa-edit">&nbsp;&nbsp;Ubah</i></a>
                                            </div><br>
                                        <?php }else{ ?>
                                            <div id='single-listing' class="single-listing">
                                                <button name="submit" id="submit" class="genric-btn primary-border small" onclick="jvSaveRekrut()">&nbsp;&nbsp;Simpan</button>
                                                <!-- <a id='submit' onclick="jvSaveRekrut()" class="genric-btn primary-border small">Simpan</a> -->
                                                <a id='cancel' href="<?php echo base_url(); ?>myjconnect_client/perekrutan/<?=$comidn?>" class="genric-btn primary-border small">Batal</a>
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
<script type="text/javascript">
// -------------------- JS Buat Popup Form - START ------------------------------- //
$(window).load(function () {
    $(document).ready(function ($) {
        $("[data-popup-target]").click(function () {
            $("html").addClass("overlay");
            var activePopup = $(this).attr("data-popup-target");
            $(activePopup).addClass("visible");
        });

        $(document).keyup(function (e) {
            if (e.keyCode == 27 && $("html").hasClass("overlay")) {
              clearPopup();
            }
        });

        $(".popup-exit").click(function () {
            clearPopup();
        });

        $(".popup-overlay").click(function () {
            clearPopup();
        });
    });

});
// -------------------- JS Buat Popup Form - END ------------------------------- //

    function jvSaveRekrut(){
        var idents = $('#hidIDENTS').val();
        var hidtrn = $('#hidTRNSKS').val();
        var hidcom = $('#hidCOMPID').val();
        var nomors = $('#txtNOMORS').val();
        var recdat = $('#datRECDAT').val();
        var compny = $('#cmbCOMPNY').val();
        var nomjob = $('#cmbNOMJOB').val();

        var param = {};
        param['idents'] = idents;
        param['hidtrn'] = hidtrn;
        param['hidcom'] = hidcom;
        param['nomors'] = nomors;
        param['recdat'] = recdat;
        param['compny'] = compny;
        param['nomjob'] = nomjob;

        // alert(idents+'~'+hidtrn+'~'+hidcom+'~'+nomors+'~'+recdat+'~'+compny+'~'+nomjob);
        // return;

        var datanya = {};
        var data =[];
        var rowCount = $('#tbl_detail tr').length;
        // alert(rowCount);
        var pekrjanya = '';
        var detailnya = '';        

        $('#tbl_detail tr').not(':first').not(':last').each(function() {
        // $(".data-pekerja tr:not(:first)").not(':last').each(function() {
            var idpkrj = $(this).find('td:eq(0)').text();
            var namess = $(this).find('td:eq(1)').text();
            var klmjns = $(this).find('td:eq(2)').text();
            var pnglmn = $(this).find('td:eq(3)').text();
            var prshan = $(this).find('td:eq(4)').text();
            var bidnya = $(this).find('td:eq(5)').text();

            if(idpkrj != '' && idpkrj != null){
                // alert(idpkrj+'~'+pekrjanya);
                // alert(idpkrj+'~'+namess+'~'+klmjns+'~'+pnglmn+'~'+prshan+'~'+bidnya);
                datanya = {
                    REC_PKRJID:idpkrj
                };
                // alert(JSON.stringify(datanya));
            }
            // alert(JSON.stringify(datanya));
            // console.log(datanya);return;
            data.push(datanya);
            detailnya = JSON.stringify(data);
            // pekrjanya = idpkrj;
        });

        param['hidDETAIL'] = detailnya;
        if(confirm('Simpan Data?')){
            // alert(JSON.stringify(data));
            $.post('/Myjconnect_Client/perekrutan_simpan',param,function(data){
                // alert(data);
                // alert('Data Saved Success!');
                self.location.replace('/Myjconnect_Client/perekrutan/'+hidcom);
            });
        }
    }

    function jvAddToTable() {        
        var nomjobnya = $("#cmbNOMJOB").val();
        var pekrjanya = $("#cmbPEKRJA").text();
        var pekridnya = $("#cmbPEKRJA").val();
        var jnsklmnya = $("#dtlJNSKLM").val();
        var exprncnya = $("#dtlEXPRNC").val();
        var compnynya = $("#dtlCOMPNY").val();
        var bidangnya = $("#dtlBIDANG").val();

        if(nomjobnya == 0){
            alert('Data pekerjaan belum dipilih!');
            return;
        }

        if(pekridnya == 0 && jnsklmnya == '' && exprncnya == '' && compnynya == '' && bidangnya == ''){
            alert('Data kandidat belum dipilih!');
            return;
        }

        $.post('/Myjconnect_Client/cekPekerja/'+$('#cmbPEKRJA').val(),function(data){
            if(data == 1){
                alert('Pekerja sudah di rekrut!');
                return;
            }else{                        
                // First check if a <tbody> tag exists, add one if not
                if ($("#tbl_detail tbody").length == 0) {
                    $("#tbl_detail").append("<tbody></tbody>");
                }

                // Append product to the table
                $("#tbl_detail tbody").append(
                    "<tr>" +
                        "<td style='display:none;'>" + $("#hidPKRJID").val() + "</td>" +
                        "<td>" + $("#cmbPEKRJA option:selected").text() + "</td>" +
                        "<td>" + $("#dtlJNSKLM").val() + "</td>" +
                        "<td>" + $("#dtlEXPRNC").val() + "</td>" +
                        "<td>" + $("#dtlCOMPNY").val() + "</td>" +
                        "<td>" + $("#dtlBIDANG").val() + "</td>" +
                        "<td>" +
                            "<button type='button' class='genric-btn danger-border small' onClick='jvDelete(this)'>" +
                                "<i class='fa fa-times'></i>" +
                            "</button>" +
                        "</td>" +
                    "</tr>"
                );

                $("#hidPKRJID").val('');
                $("#cmbPEKRJA").val(0);
                $("#dtlJNSKLM").val('');
                $("#dtlEXPRNC").val('');
                $("#dtlCOMPNY").val('');
                $("#dtlBIDANG").val('');
            }
        });
    }

    function jvDelete(ctl) {
        // $(ctl).parents("tr").remove();
        var lenRow = $('#tbl_detail tbody tr').length;
        //alert(lenRow);
        if (lenRow == 1 || lenRow <= 1) {
            alert('Tidak bisa hapus semua baris!');
        } else {
            $('#tbl_detail tbody tr:last').remove();
        }
    }

function clearPopup() {
    $(".popup.visible").addClass("transitioning").removeClass("visible");
    $("html").removeClass("overlay");

    setTimeout(function () {
      $(".popup").removeClass("transitioning");
    }, 200);
}
</script>

<style type="text/css">
    /* popup window */

#popup_window {
    padding: 10px;
    background: #267e8a;
    cursor: pointer;
    color: #fcfcfc;
}
.popup-overlay {
    width: 100%;
    height: 100%;
    position: fixed;
    background: rgba(196, 196, 196, 0.85);
    top: 0;
    left: 100%;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    -webkit-transition: opacity 0.2s ease-out;
    -moz-transition: opacity 0.2s ease-out;
    -ms-transition: opacity 0.2s ease-out;
    -o-transition: opacity 0.2s ease-out;
    transition: opacity 0.2s ease-out;
}
.overlay .popup-overlay {
    opacity: 1;
    left: 0;
}
.popup {
    position: fixed;
    top: 5%;
    left: 50%;
    z-index: -9999;
}
.popup .popup-body {
    background: #ffffff;
    background: -moz-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
    background: -webkit-gradient(
      linear,
      left top,
      left bottom,
      color-stop(0%, #ffffff),
      color-stop(100%, #f7f7f7)
    );
    background: -webkit-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
    background: -o-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
    background: -ms-linear-gradient(top, #ffffff 0%, #f7f7f7 100%);
    background: linear-gradient(to bottom, #ffffff 0%, #f7f7f7 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7f7f7', GradientType=0);
    opacity: 0;
    min-height: 150px;
    width: 800px;
    margin-left: -400px;
    padding: 20px;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    -webkit-transition: opacity 0.2s ease-out;
    -moz-transition: opacity 0.2s ease-out;
    -ms-transition: opacity 0.2s ease-out;
    -o-transition: opacity 0.2s ease-out;
    transition: opacity 0.2s ease-out;
    position: relative;
    -moz-box-shadow: 1px 2px 3px 1px rgb(185, 185, 185);
    -webkit-box-shadow: 1px 2px 3px 1px rgb(185, 185, 185);
    box-shadow: 1px 2px 3px 1px rgb(185, 185, 185);
    border: 1px solid #e9e9e9;
}

.popup .popup-body {
/*width: 100% !important;
height: 100% !important;*/
}

.popup.visible,
.popup.transitioning {
z-index: 9999;
}
.popup.visible .popup-body {
opacity: 1;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}
.popup .popup-exit {
cursor: pointer;
display: block;
width: 24px;
height: 24px;
position: absolute;
top: 150px;
right: 195px;
background: url("images/quit.png") no-repeat;
}
.popup .popup-content {
overflow: scroll;
height: 450px;
}
.popup-content .popup-title {
font-size: 24px;
border-bottom: 1px solid #e9e9e9;
padding-bottom: 10px;
}
.popup-content p {
font-size: 13px;
text-align: justify;
width: 800px;
}

/* view popup window */
</style>

<!-- <div class="viewDetail">&nbsp;</div>
<div class="popup-overlay">&nbsp;</div> -->
<!-- ------------------------------------------------------ view popup window detail ------------------------------------------------------ -->
<!-- <div class="popup-overlay">&nbsp;</div>
<div id="popup<?=$identsnya?>" class="popup">
    <div class="popup-body">
        <div class="popup-content">
          <h2>Detail Perekrutan</h2><br>
          <h5>No. Job : <?=$nomjob?></h5>
          <h5>Pekerjaan : <?=$titles?></h5>
          <table id='tbl_detail_popup<?=$identsnya?>' border=1 width="100%" class='table2'>
                <tr>
                    <th style='display: none;' align='center'>IDPKRJ</th>
                    <th align='center'>Pekerja</th>
                    <th align='center'>Jenis Kelamin</th>
                    <th align='center'>Pengalaman</th>
                    <th align='center'>Perusahaan</th>
                    <th align='center'>Bidang</th>
                </tr> -->
                <?php
                    // print_r($data);
                    // $datanya = $this->m_perekrutan->getPerekrutanWeb_detail($identsnya,1);
                    // foreach($datanya as $row){
                    //     $idpkrj = isset($row['REC_PKRJID']) ? $row['REC_PKRJID'] : NULL;
                    //     $namess = isset($row['PKR_NAMESS']) ? $row['PKR_NAMESS'] : NULL;
                    //     $jnsklm = isset($row['JNSKLM']) ? $row['JNSKLM'] : NULL;
                    //     $exprnc = isset($row['PKR_EXPRNC']) ? $row['PKR_EXPRNC'] : NULL;
                    //     $exprpt = isset($row['PKR_EXPNPT']) ? $row['PKR_EXPNPT'] : NULL;
                    //     $bidang = isset($row['PKR_EXPBDG']) ? $row['PKR_EXPBDG'] : NULL;

                    //     // echo $namess.'~'.$jnsklm.'~'.$exprnc.'~'.$exprpt.'~'.$bidang;
                    // }

                    // echo "
                    //     <tr border=1>
                    //         <td style='display:none;'>$idpkrj</td>
                    //         <td>".ucwords(strtolower($namess))."</td>
                    //         <td>$jnsklm</td>
                    //         <td>$exprnc</td>
                    //         <td>$exprpt</td>
                    //         <td>$bidang</td>
                    //     </tr>
                    // ";
                ?>
            <!-- </table>
        </div>
        <div align="right"><input type="button" name="close" id="close" value="Close" onclick='clearPopup();' class="genric-btn danger small"></div>
    </div>
</div> -->
