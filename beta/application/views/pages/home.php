<?php
$top = 15;
$height = '95%';
$right = '15';
// if($this->session->userdata('USR_LAYOUT')=="_samping"){
//   $top = 5;
//   $height ='100%';
//   $right = '60';
//   $csshome = '<link rel="stylesheet" href="' . base_url(CSS."page.css") .'">';
// }
echo isset($csshome) ? $csshome : "";
?>
	
  <div class="container" style = 'padding: <?=$top?>px <?=$right?>px 5px 10px; width:100%;height: 100%'>
  <div id=contentBody style = 'width:100%;height:<?=$height?>'>
    <div id="breadcrumb" style="height:40px"><?=$breadcrumb?></div>
    <div style="width:100%;height:93%">
    <?=$content?>
    </div>
  </div>  
</div>