<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html" />
  <meta name="author" content="Hakko Bio Richard" />

  <title><?=$title?></title>
</head>

  <style type="text/css">
    #lbl{
  width: 5px;
  font-weight:bold;
      }
      .body {
  font-family: verdana,arial,sans-serif;
      }
      table.header {
  font-family: verdana,arial,sans-serif;
  font-size:10px;
  color:#333333;
  border-width: 0px;
  border-color: #000000;
  border-collapse: collapse;
      }
      table.gridtable {
  font-family: verdana,arial,sans-serif;
  font-size:8px;
  color:#333333;
  border-width: 1px;
  border-color: #000000;
  border-collapse: collapse;
      }
      table.gridtable th {
  border-width: 1px;
  padding: 2px;
  border-style: solid;
  border-color: #000000;
  background-color: #999999;
        color:#000000;
  font-weight:bold;
      }
      table.gridtable td {
  border-width: 1px;
  padding: 2px;
  border-style: solid;
  border-color: #000000;
  background-color: #ffffff;
      } 
  </style>
<body>
<script type="text/javascript">
  function jvPrint(){
    window.print();
  }
</script>
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
  
  $html = "
    <table class=header style='align:center;width:100%;'>
      <tr>
        <td colspan='9' align='center'>
        <center>
          <font size=4>
          <u><b>".$judul."</b></u>
          </font>
        </center>
        </td>
      </tr>
    </table><br>
  ";

  foreach($data as $row){
    $SPSLIZ = '';

    if($types == 1){
      $i = 1;
      $html .= "
        <table class=header style='align:center;'>
          <tr>
            <td align='left'>Periode</td><td>:</td>
            <td>".$periode."</td>
          </tr>
        </table>
        <hr>
      ";
    }else{
      $i = 1;
      if($SPSLIZ != $row['JOB_ASPECS']){
        $html .= "
          <table class=header style='align:center;'>
            <hr>
            <tr>
              <td align='left'>Periode</td><td>:</td>
              <td>".$periode."</td>
            </tr>
            <tr>
              <td align='left'>Spesialisasi</td><td>:</td>
              <td>".$row['JOB_ASPECS']."</td>
            </tr>
          </table>
          <hr>
        ";
      }
    }

    $html .= "
      <table class=gridtable style='align:center;width:100%;'>
        <tr>
          <th>No.</th>
          <th>No. Jobs</th>
          <th>Judul</th>
          <th>Nama</th>
          <th>Tempat/Tgl.Lahir</th>
          <th>Jenis Kelamin</th>
          <th>No. HP</th>
        </tr>
    ";

    $html .="
      <tr>
        <td style='text-align:center;'>".$i."</td>
        <td style='text-align:left;'>".$row['JOB_NOMJOB']."</td>
        <td style='text-align:left;'>".$row['TITLES']."</td>
        <td style='text-align:left;'>".$row['PEKRJA']."</td>
        <td style='text-align:left;'>".$row['TMPTGLLHR']."</td>
        <td style='text-align:left;'>".$row['JNSKLM']."</td>
        <td style='text-align:right;'>".$row['NOMRHP']."</td>
      </tr>
    ";

    $i++;
    $SPSLIZ = $row['JOB_ASPECS'];
  }

  $html .= "
    </table><hr>
    <table class='header' style='align:center;'>
      <tr>
        <td><input type='button' name='cetak' id='cetak' value='Print' target='_blank' onclick='jvPrint();' class='genric-btn primary small'></td>
      </tr>
    </table>
  ";
  
  echo $html;
?>


</body>
</html>