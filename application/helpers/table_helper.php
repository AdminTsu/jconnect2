<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function generateTable($pass){
  $CI = get_instance();
	$CI->load->library('table');
	//===== default parameter
	$class = "table table-striped";
	$type = "array";
  $url = "";
  foreach ($pass as $param=>$value){
    ${$param}=$value;
  }
  // die();
  if($url!=""){
    // "http://produksi.detanto.net/purchase/nosj/getLpb_detail/I15-0414/1";//
  	$completeUrl = base_url().$url;
		$json = json_decode(file_get_contents($completeUrl),true);
    $resultset1 = json_decode(json_encode($json[0]['Rows']));
    // $CI->common->debug_array($completeUrl);
    $maxRow = count($resultset1);
    $urutan = array();     
    foreach ($col as $arrUrut) {
      $urutan[] = $arrUrut['lsturut'];
    }
    array_multisort($urutan, SORT_ASC, $col);    
    $loop = 0;
    // $CI->common->debug_array($col);
          // echo "<pre>";
          // print_r($col);
          // echo "</pre>";
    $arrHeader = array();
    foreach($col as $key=>$val){
      $ah="";
      $aw="";
      $at="";
      $ac="";
      $aa="";
      $align = "";
      $hidden ="";
      $type="";
      $arrField = array();
      foreach($val as $val1=>$val2){
        ${$val1}=$val2;
        if($val1=="namanya"){
          $namafield = $val2;
          if($namafield!="CI_rownum"){
            $arrField = array_merge($arrField, array('namafield'=>$val2));
            $arrHeader = array_merge($arrHeader, array($label));
          }else{
            unset($namafield);
          }
        }
        if(isset($gw) && $aw=="" && isset($namafield)){
          $arrField = array_merge($arrField, array('width'=>$gw));
        }else{
          if($aw!="" && isset($namafield)){
            $arrField = array_merge($arrField, array('width'=>$aw));
          }
        }
        if(isset($ga) && $aa=="" && isset($namafield)){
          $arrField = array_merge($arrField, array('align'=>$ga));
        }else{
          if($aa!="" && isset($namafield)){
            $arrField = array_merge($arrField, array('align'=>$aa));
          }
        }
      }
      if(count($arrField)>0){
        $cfield[] = $arrField;  
      }
      unset($namafield);
      unset($gw);
      unset($ga);
      $aa="";
      $aw="";
      $loop++;
    }
    // $CI->common->debug_array($resultset1);
    // foreach ($resultset1 as $key => $value) {
      
    //   $i=0;
    //   foreach ($value as $keydetail => $valuedetail) {
    //     $linked[][$i] = array('namanya'=>$keydetail,'value'=>$valuedetail);
    //   }
    //   $i++;
    //   $count = count($json[0]['Rows']);
    //   // for($i=0;$i<$count;$i++){
    //   //   echo $value[$i];
    //   // }
    //   // echo $value[$key];
    // }

    $CI->load->library('table');
    $class = "table table-striped";
    $tmpl = array (
    'table_open'=> '<table class="'.$class.'">'
    );
    $CI->table->set_template($tmpl);  
    $CI->table->set_heading($arrHeader);
    foreach ($resultset1 as $key => $value) {
      if(count($cfield)>0){
        $addrow =array();
        $looping = 1;
        foreach ($cfield as $keydetail => $valuedetail) {
          $align = "";
          $field = $valuedetail['namafield'];
          $width = $valuedetail['width'];
          if(isset($valuedetail['align'])){
            $align = $valuedetail['align'];  
          }
          if($field=="Nomor"){
            $rowdetail= array('data'=>$loop+1,'width'=>$width);
          }else{
            $rowdetail ="";
            $data = $value->{$field};
            $data = (is_numeric($data)) ? number_format($data) : $data;
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
          $looping++;          
        }        
      }
      $CI->table->add_row($addrow);
    }
    return $CI->table->generate();
  }	
}
function generateTables($pass){
  $CI = get_instance();
	$CI->load->library('table');
	$class = "table table-striped";

  foreach ($pass as $param=>$value){
    ${$param}=$value;
  }
	$tmpl = array (
	'table_open'=> '<table class="'.$class.'">'
	);

	$CI->table->set_template($tmpl);   	

  $urutan = array();     
  foreach ($nilai as $arrUrut) {
    $urutan[] = $arrUrut['lsturut'];
  }
  array_multisort($urutan, SORT_ASC, $nilai);

  $linked[] = $nilai;
  
  foreach ($nilai as $key=>$value) {
    $header[] = $value['header'];
    $width = 10;
    $align = "left";
    if(isset($value['width'])){
      $width=$value['width'];
    }
    if(isset($value['align'])){
      $align = $value['align'];  
    }
    $detail[] = array('namafield'=>$value['namafield'],'width'=>$width,'align'=>$align);
  }

	$CI->table->set_heading($header);
  $tablenya = "";

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
        
  
        $addrow = array_merge($addrow, array($rowdetail)); 
        $looping++;
      }
    }
    $CI->table->add_row($addrow);
  }
  return $CI->table->generate();
}