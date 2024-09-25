<?php  if (!defined('BASEPATH')) exit(header("Location: /"));
/**
 * Common Library
 *
 * @package    CodeIgniter
 * @subpackage Library
 * @category   Commonly Use Function Library
 *
 * @author     detanto / detanto[at]gmail.com
 * @project    kemas indah maju
 * Modified 2009 10 11
 */
 
class Reporting {  
  var $mytable;
  var $CI;
  var $label;
  var $kind;
  
  function Reporting() {
    $this->CI =& get_instance();
  }
  function layar($pass){
    $grid = true;
    $classtable = "pc-table";
    $type='array';
    $nilai=null;
    $resultset=null;
    $juduls='Laporan';
    $file = 'layar';
    $jenis=null; // layar atau excel
    $html = 1;
    $group = "";
    $pageheader = true;
    $atas = "";
    $format = '';
    foreach ($pass as $param=>$value){
      ${$param}=$value;
    }
    $this->CI->load->library('table');
    $tmpl = array ( 'table_open'  => '<table cellspacing="1" style="width:100%" class="' . $classtable . '">' );
    $this->CI->table->set_template($tmpl);
    // $paging = null;
    if($type=="json"){
      $header = array();
      $detail = array();
      $JSON = $this->common->extractjsonf($nilai,"report");      
      $linked = array();
      foreach ($JSON as $key => $value) {
        foreach ($value as $key_one => $value_one) {
          $loopsrc = 1;
          foreach($value_one as $keyd=>$valued){
            if($keyd=="fd"){
              $header = array_merge($header, array($valued));
            }
            if($keyd=="fn"){
              $namafield =$valued;
              $detail = array_merge($detail, array($valued));
            }
            if($keyd=="link"){
              $link = "x";
              foreach ($valued as $linkkey => $linkvalue) {
                foreach ($linkvalue as $keylink => $valuelink) {
                  if($keylink=="links"){
                    $link = $valuelink;
                  }
                  if($keylink=="param"){
                    $param = $valuelink;
                  }
                }
                $linked[] = array('namafield'=>$namafield,'link'=>$link, 'param'=>$param);
              }
            }
            $loopsrc++;
          }
        }
      }
    }
    if($type=="array"){
      $urutan = array();     
      foreach ($nilai as $arrUrut) {
        $urutan[] = $arrUrut['lsturut'];
      }
      array_multisort($urutan, SORT_ASC, $nilai);

      $linked[] = $nilai;
      foreach ($nilai as $key=>$value) {
        $header[] = $value['header'];
        $arrDetail = array('namafield'=>$value['namafield']);
        $width = 10;
        $align = "left";
        if(isset($value['width'])){
          $arrDetail = array_merge($arrDetail,array('width'=>$value['width']));
          // $width=$value['width'];
        }
        if(isset($value['widthlabel'])){
          $widthlabel=$value['widthlabel'];
        }
        if(isset($value['align'])){
          $arrDetail = array_merge($arrDetail,array('align'=>$value['align']));
          // $align = $value['align'];  
        }
        if(isset($value['format'])){
          $arrDetail = array_merge($arrDetail,array('format'=>$value['format']));
          // $format = $value['format'];  
        }
        if(isset($value['precision'])){
          $arrDetail = array_merge($arrDetail,array('precision'=>$value['precision']));
          // $precision = $value['precision'];  
        }
        // $arrDetail = array('namafield'=>$value['namafield'],'width'=>$width,'align'=>$align);
        if(!$grid){
          $arrDetail = array_merge($arrDetail,array('label'=>$value['header'],'widthlabel'=>$widthlabel));
        }
        $detail[] = $arrDetail;
      }
    }
    $ujawal = "";
    $ujakhr = "";
    if(isset($underjudul)){
      if($underjudul){
        $ujawal = "<ul>";
        $ujakhr = "</ul>";      
      }
    }
    if($pageheader){
      $atas = "
          <div style='height:20px'></div>
          <table colspan='9' align='center' class=header>
              <tr>
                  <td colspan='9' id='title' align='center' style='font-size:20px;'>
                  ".$ujawal."<b>".$juduls."</b>".$ujakhr."
                  </td>
              </tr>
              <tr>
                <td style='font-size:10pt'>Waktu Cetak</td><td style='font-size:10pt'>:</td><td style='font-size:10pt'>" . date('Y-m-d H:i') . "</td>
              </tr>
              <tr>
                <td style='font-size:10pt'>Oleh</td><td style='font-size:10pt'>:</td><td style='font-size:10pt'>" .  $this->CI->session->userdata('nama') . "</td>
              </tr>
          </table>
          <div style='height:20px'></div>
      ";      
    }

    $tablenya = "";
    $i=0;
    $loop = 0;
    $tablenya = $atas;
    if($grid){
      if($group!=""){
        $paging=null;
      }
      $this->CI->table->set_heading($header);
      $group_awal = null;
      $group_temp = null;
      $judulgroup = null;
      $maxRow = $resultset->num_rows();
      
      foreach($resultset->result() as $row){
        if(count($detail)>0){
          $addrow =array();
          $looping = 1;
          $pisah = false;
          foreach ($detail as $key => $value) {
            $align = "";
            $field = $value['namafield'];
            $width = $value['width'];
            if(isset($value['align'])){
              $align = $value['align'];  
            }
            if(isset($value['format'])){
              $format = $value['format'];  
            }
            if(isset($value['precision'])){
              $precision = $value['precision'];  
            }
            
            if($looping==1){
              if($group!=""){
                $group_awal = $row->{$group};
                if($group_awal!=$group_temp && $group_temp!=""){
                  $pisah = true;
                  $judulgroup = $group_temp;
                  $loop =0;
                }
                $group_temp = $row->{$group};
              }
            }
            if($field=="Nomor"){
              $rowdetail= array('data'=>$loop+1,'width'=>$width);
            }else{
              $rowdetail ="";
              $data = $row->{$field};
              
              if($format == 'string'){
                $data = $data; 
              }else{
                if(isset($precision)){
                  $precision = $precision;
                }else{
                  $precision = 0; 
                }
                $data = (is_numeric($data)) ? number_format($data, $precision,",",".") : $data;
              }
              
              $nilairow = array('data'=>$data,'width'=>$width);
              if($align!=""){
                $nilairow = array_merge($nilairow, array('style'=>'text-align:'.$align));
              }
              if($rowdetail==""){
                if(is_numeric($nilairow)){
                  $nilairow = array('data'=>$data, 'align'=>'right','width'=>$width);
                }
                $rowdetail = $nilairow;
              }            
            }
            $addrow = array_merge($addrow, array($rowdetail)); 
            unset($precision);
            // unset($format);
            $looping++;
          }
        }
        $i++;
        if($pisah || $i==$maxRow){

          if($i==$maxRow){

            ///cek beda gak sama judul sebelumnya
            // if($group_temp <> $judulgroup && $group!="" && $judulgroup!=""){
            //   $detailtable = $this->CI->table->generate();
            //   $this->CI->table->clear();
            //   $tablenya .= "<div class='group'>" . $judulgroup ."</div>" . $detailtable;
            //   $this->CI->table->set_heading($header);
            // }
            $this->CI->table->add_row($addrow);
            $judulgroup = $group_awal;
          }

          $detailtable = $this->CI->table->generate();
          $this->CI->table->clear();
          $atasnya = "";
          if(isset($grouparr)){
            if($grouparr){
              $arrgroup = explode("^", $judulgroup);
              if(isset($arrgroup[1])){
                $judulgroup = $arrgroup[1];  
              }else{
                $judulgroup = $arrgroup[0];
              }
              
            }
          }
          $tablenya .= $atasnya . "<div class='group'>" . $judulgroup . "</div>" . $detailtable;
          $this->CI->table->set_heading($header);
          // $addrow = array();
          if($i!=$maxRow){
            $this->CI->table->add_row($addrow);
          }
          $loop=0;        
        }else{
          $this->CI->table->add_row($addrow);
        }
        $loop++;


        if($paging!=null && $jenis==1){
          if($i==$paging){
            if(count($addrow)>0 ){
              $detailtable = $this->CI->table->generate();
              $this->CI->table->clear();
              $tablenya .= $atas . $detailtable;
              $this->CI->table->set_heading($header);
              $loop =0;
              $i=0;
            }
          }
        }
      }

      // if($paging==null || $i<=$paging){
      // // if($paging==null){  
      //   if($i>0 && $group==""){
      //     $tablenya.= $this->CI->table->generate();
      //   }
      // }
    }else{
      //kalau bukan grid (hanya nampilin satu row)
      // $maxRow = $resultset->num_rows();
      // print_r($detail);
      $looping = 0;
      foreach ($detail as $key => $value) {
        $align = "";
        $widthlabel = "";
        if(isset($value['widthlabel'])){
          $widthlabel = $value['widthlabel'];  
        }
        $field = $value['namafield'];
        $width = $value['width'];
        if(isset($value['align'])){
          $align = $value['align'];  
        }
        if(isset($value['label'])){
          $label = array('data'=>"<b>".$value['label']."</b>");
          if($widthlabel!=""){
            $label = array_merge($label, array('style'=>'width:'.$widthlabel));
          }
        }
        if($field=="Nomor"){
          $rowdetail= array('data'=>$loop+1,'width'=>$width);
        }else{
          $rowdetail ="";
          $data = $resultset->{$field};
          if($format == 'string'){
            $data = $data; 
          }else{
            $data = (is_numeric($data)) ? number_format($data,0,",",".") : $data;    
          }
          $nilairow = array('data'=>$data,'width'=>$width);
          if($align!=""){
            $nilairow = array_merge($nilairow, array('style'=>'text-align:'.$align));
          }
          if($rowdetail==""){
            if(is_numeric($nilairow)){
              $nilairow = array('data'=>$data, 'align'=>'right','width'=>$width);
            }
            $rowdetail = $nilairow;
          }            
        }
        $this->CI->table->add_row($label, $rowdetail);
        // $addrow = array_merge($header, $addrow, array($rowdetail)); 
        $looping++;        
      }
      /*
      foreach($resultset as $row){
        if(count($detail)>0){
          $addrow =array();
          $looping = 1;
          $pisah = false;
          foreach ($detail as $key => $value) {
            $align = "";
            $field = $value['namafield'];
            $width = $value['width'];
            if(isset($value['align'])){
              $align = $value['align'];  
            }
            if(isset($value['header'])){
              $header = $value['header'];  
            }
            if($field=="Nomor"){
              $rowdetail= array('data'=>$loop+1,'width'=>$width);
            }else{
              $rowdetail ="";
              $data = $resultset->{$field};
              if($format == 'string'){
                $data = $data; 
              }else{
                $data = (is_numeric($data)) ? number_format($data) : $data;    
              }
              $nilairow = array('data'=>$data,'width'=>$width);
              if($align!=""){
                $nilairow = array_merge($nilairow, array('style'=>'text-align:'.$align));
              }
              if($rowdetail==""){
                if(is_numeric($nilairow)){
                  $nilairow = array('data'=>$data, 'align'=>'right','width'=>$width);
                }
                $rowdetail = $nilairow;
              }            
            }
            $addrow = array_merge($header, $addrow, array($rowdetail)); 
            $looping++;
          }
        }
        $i++;
        $this->CI->table->add_row($addrow);
        $loop++;
      }
      */
    }  
    if($jenis==2){
      $tablenya = $atas . $this->CI->table->generate();
    }
    $css = "
    <head>
      <style>
        .group{
          height:40px;
          font-family:verdana,'Trebuchet MS', Arial, Helvetica, sans-serif;
          padding-top:12px;
          font-weight:bold;  
        }
        table.header{
          font-family:verdana,'Trebuchet MS', Arial, Helvetica, sans-serif;
          font-size: 1em;
        }        
        table.pc-table{
          font-family:verdana,'Trebuchet MS', Arial, Helvetica, sans-serif;
          font-size: 1em;
          // font-weight: bold;
        }
  
        table.pc-table td{
          font-size: 0.8em;
        }
        table.pc-table tbody.td{
          font-size: 0.8em;
          font-weight:normal;
        }
        
        table.pc-table{
          font-family:verdana,'Trebuchet MS', Arial, Helvetica, sans-serif;
        width:100%;
        border-collapse:collapse;
        }
        
        table.pc-table td, table.pc-table th 
        {
          border:1px solid #555555;
          padding:3px 7px 2px 7px;
        }
  
        table.pc-table th{
        font-size:0.60em;
          vertical-align: middle;
        text-align:center;
        padding-top:5px;
        padding-bottom:4px;
        background-color:#5F5F5F;
        color:#ffffff;
        }
        
        table.pc-table td{
          font-size: 0.55em;
        }
      </style>
    </head>    
    ";
    if($file=='layar'){
      $html = "<html>" . $css . $tablenya ."</html>";
      $rpt = "rpt".rand(1,9).rand(1,9).rand(1,9).".rpcx";
      if ( ! write_file("temp/$rpt", $html, 'w')){
        echo 'Unable to write the file';
      }else{
        //echo 'File written!';
        echo substr($rpt,0,-5);
      }
    }else{
      return $tablenya;
    }
  } 
}
