<?php
  $periode = '';
  if($bulan > 0){
      $lengBln = strlen($bulan);
      if($lengBln == 1){
          $bulan = '0'.$bulan;
      }
  }
  // echo $bulan;
  if($bulan == 0){
    $periode = $tahun;
  }else{
    $periode = $tahun.'-'.$bulan;
  }

  if($types == 1){
    $judul = 'Report Rekap Posting Pekerjaan';
  }else{
    $judul = 'Report Group by Job Type';
  }
  
  $i = 1;
  $SPSLIZ = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>
  <style type="text/css">
  p{
      margin: 5px 0 0 0;
  }
      p.footer{
      text-align: right;
      font-size: 11px;
      border-top: 1px solid #D0D0D0;
      line-height: 32px;
      padding: 0 10px 0 10px;
      margin: 20px 0 0 0;
      display: block;
  }
  .bold{
      font-weight: bold;
  }
  #footer {
  clear: both;
  position: relative;
  height: 40px;
  margin-top: -40px;
  }
  .kepala {
    background-color: #769bf0;
  }
  </style>
</head>
<script type="text/javascript">
  function jvPrint(){
    window.print();
  }
</script>
<body style="font-size: 12px">
    <table width="100%" >
      <tr>
        <td width="70%"><img src="<?=base_url()?>resources/assets/img/logo/Logo_jconnect_new.png" style="width: 80px;"></td>
        <!-- <td align="right" valign="top"> <span style="font-size: 12px"><?=date('Y-m-d H:i:s')?></span></td> -->
      </tr>
    </table>
        
    <p align="center"> 
      <span style="font-size: 18px"><b><?=$judul?></b></span> <br>
    </p>
    <hr>
    <p>
    <?php
      if($types==1){
    ?>

    <table>
      <tr>
        <th align="left"> Periode </th><td> : <?=$periode?></td>
      </tr>
    </table>

    <?php
      }else{
    ?>

    <table>
      <tr>
        <th align="left"> Periode </th><td> : <?=$periode?></td>
      </tr>
      <tr>
        <th align="left"> Spesialisasi </th><td> : <?=$aspecs?></td>
      </tr>
    </table>

    <?php
      }
    ?>
    
    </p>
    
    <p>
      <table style="border: 1px solid black;border-collapse: collapse;font-size: 11px" width="100%">
        <tr style="margin: 5px">
          <th class="kepala" style="border: 1px solid black;">No</th>
          <th class="kepala" style="border: 1px solid black;">No. Jobs</th>
          <th class="kepala" style="border: 1px solid black;">Judul</th>
          <th class="kepala" style="border: 1px solid black;">Nama</th>
          <th class="kepala" style="border: 1px solid black;">Tempat/Tgl.Lahir</th>
          <th class="kepala" style="border: 1px solid black;">Jenis Kelamin</th>
          <th class="kepala" style="border: 1px solid black;">No. HP</th>
        </tr>
        
        <?php
          foreach($data as $row){
            echo '
              <tr style="margin: 5px">
                <td style="border: 1px solid black;" align="center">'.$i.'</td>
                <td style="border: 1px solid black;" align="center">'.$row['JOB_NOMJOB'].'</td>
                <td style="border: 1px solid black;" align="left">'.$row['TITLES'].'</td>
                <td style="border: 1px solid black;" align="left">'.$row['PEKRJA'].'</td>
                <td style="border: 1px solid black;" align="left">'.$row['TMPTGLLHR'].'</td>
                <td style="border: 1px solid black;" align="left">'.$row['JNSKLM'].'</td>
                <td style="border: 1px solid black;" align="right">'.$row['NOMRHP'].'</td>
              </tr>
            ';

            $i++;
            $SPSLIZ = $aspecs;
          }
        ?>
        
      </table>
  </p>
  <!-- <p>
    <br>
  </p>
  <p>
     <table class='header' style='align:center;'>
      <tr>
        <td><input type='button' name='cetak' id='cetak' value='Print' target='_blank' onclick='jvPrint();' class='genric-btn primary small'></td>
      </tr>
     </table>
  </p> -->
  <p class="footer"></p>
</body>
</html>