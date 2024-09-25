<?php echo $basejs?>

<script src="<?=base_url(JS."app.js");?>"></script>
<body class="sidebar-collapse skin-blue hold-transition skin-blue sidebar-mini">
  <?=$header?>
  <div id=contentluar class="content-wrapper" style='background: #fff;height: 100%;width:100%;overflow:scroll;'>
  <?=$content_body?>

  </div>
</body>
<?php if(isset($footer)) echo $footer ?>