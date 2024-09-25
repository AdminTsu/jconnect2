<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php

$apps_theme = $this->config->item('app_theme');
$grid_theme = $this->config->item('app_grids');
$USR_THEMES = $this->session->userdata("USR_THEMES");
if($USR_THEMES!=""){
	$apps_theme = $USR_THEMES;
}
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- <title><?php echo ($title=="" ? $this->config->item('app_names') : $title) ?></title> -->
	<title><?= $this->config->item('app_names') . ($title!="" ? " :: " . $title : "")?></title>

	<link rel="shortcut icon" href="<?php echo base_url(IMAGES.'ico/favicon.ico');?>">
	<link rel="apple-touch-icon" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-precompresse.png');?>">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-57x57-precompressed.png');?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-72x72-precompressed.png');?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-114x114-precompressed.png');?>">

	<meta name="description" content="<?php echo $description ?>" />
	<meta name="viewport" content="width=device-width">
	<meta name="keywords" content="<?php echo $keywords ?>" />
	<meta name="author" content="<?php echo $author ?>" />
	<link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap/bootstrap.min.css");?>">
	<link rel="stylesheet" href="<?php echo base_url(CSS."font-awesome/css/font-awesome.min.css");?>">
	
	<link rel="stylesheet" href="<?php echo base_url(CSS."skins/skin-blue.css");?>">
	
	<link rel="stylesheet" href="<?php echo base_url(CSS."jqxwidgets/jqx.base.css");?>">
	<link rel="stylesheet" href="<?php echo base_url(CSS."jqxwidgets/jqx.custom.css");?>">
	<link rel="stylesheet" href="<?php echo base_url(CSS."jqxwidgets/jqx." . $apps_theme . ".css");?>">
	<link rel="stylesheet" href="<?php echo base_url(CSS."jqxwidgets/jqx." . $grid_theme . ".css");?>">
	<link rel="stylesheet" href="<?php echo base_url(CSS."breadcrumb.css");?>">
	<link rel="stylesheet" href="<?php echo base_url(CSS."magnific-popup.css");?>">

	<!--======= end :: jqxwidget loading -->
	<style type="text/css">
    html, body {
        height: 100%;
        margin: 0px;
    }	
		.divbc{
			margin-left:50px;margin-top:0px;width:50%
		}
		#tombolfloat { 
		  height: 104px; 
		  width: 124px; 
		  position: fixed; 
		  top: 25%; 
		  left:82%;
		  z-index: 999;
		}
		.form-control {
		  display: block;
		  width: 100%;
		  height: 29px;
		  padding: 6px 12px;
		  font-size: 12px;
		}
		.form-group{
			margin-bottom: 8px
		}
		.vertical_center{		  
		  display:inline-block;
		  float:none;
		  vertical-align:middle;
		  
		}
		.cke_panel{
			z-index: 1000002 !important;
		}
		.breadcrumb{
			margin-bottom: 5px;
		}
	</style>
</head>
	<?php
	echo $body;
	?>
</html>