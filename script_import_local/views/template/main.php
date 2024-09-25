<?php echo $basejs?>
<!--body onunload="jvtransLock(1);" onload="jvtransLock(0);"-->
<body>
<?php echo $header ?>

<!--<div id="main" role="main" class="row">-->
  <div class="content-wrapper" style='padding-top:15px;background: #fff;height: 100%;position:fixed;width:100%;overflow:scroll;'>
  	<?=$content_body?>
  </div>
<!--</div>-->
<?php if(isset($footer)) echo $footer ?>
</body>

