<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
$apps_theme = $this->config->item('app_theme');
$grid_theme = $this->config->item('app_grids');
$usr_fnames = $this->session->userdata('USR_NAMESS');
$usr_logins = $this->session->userdata('USR_LOGINS');
$usr_levels = $this->session->userdata('USR_LEVELS');
$usr_menuid = $this->session->userdata('USR_MENUID');
$usr_idents = $this->session->userdata('USR_IDENTS');
$this->levels = $this->session->userdata('USR_LEVELS');
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- <title><?php echo ($title=="" ? $this->config->item('app_names') : $title) ?></title> -->
	<title><?= $this->config->item('app_names') . ($title!="" ? " :: " . $title : "")?></title>

	<link rel="icon" type="image/png" href="<?php echo base_url(IMAGES.'favicon4.png');?>">	
	<link rel="apple-touch-icon" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-precompresse.png');?>">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-57x57-precompressed.png');?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-72x72-precompressed.png');?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-114x114-precompressed.png');?>">

	<meta name="description" content="<?php echo $description ?>" />
	<meta name="viewport" content="width=device-width">
	<meta name="keywords" content="<?php echo $keywords ?>" />
	<meta name="author" content="<?php echo $author ?>" />

	<link rel="stylesheet" href="<?=base_url(CSS."bootstrap/bootstrap.min.css");?>">
	<link rel="stylesheet" href="<?=base_url(CSS."font-awesome/css/font-awesome.min.css");?>">
	<link rel="stylesheet" href="<?=base_url(CSS."jqxwidgets/jqx.base.css");?>">
	<link rel="stylesheet" href="<?=base_url(CSS."jqxwidgets/jqx.custom.css");?>">
	<link rel="stylesheet" href="<?=base_url(CSS."jqxwidgets/jqx." . $apps_theme . ".css");?>">
	<link rel="stylesheet" href="<?=base_url(CSS."jqxwidgets/jqx." . $grid_theme . ".css");?>">
	<link rel="stylesheet" href="<?=base_url(CSS."jqxwidgets/jqx.orange.css");?>">
	<link rel="stylesheet" href="<?=base_url(CSS."jqxwidgets/jqx.bootstrap.css");?>">

	<link rel="stylesheet" href="<?php echo base_url(CSS."global.css");?>">
	<link rel="stylesheet" href="<?php echo base_url(CSS."magnific-popup.css");?>">
	<link rel="stylesheet" href="<?php echo base_url(CSS."tablec.css");?>">

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo base_url(IMAGES.'ico/Logo_JConnect_Gradient_dot_ico_01.ico');?>">
	<link rel="apple-touch-icon" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-precompresse.png');?>">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-57x57-precompressed.png');?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-72x72-precompressed.png');?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-114x114-precompressed.png');?>">

	
	
<style>

	.ui-jqgrid .ui-jqgrid-htable th div {
    height:auto;
    overflow:hidden;
    padding-right:4px;
    padding-top:2px;
    position:relative;
    vertical-align:text-top;
    white-space:normal !important;
    font-size: 10px;
	}
  .ui-jqgrid-btable{
    font-size: 10px;
	}
  .ui-widget-content jqgrow ui-row-ltr{
    vertical-align: middle;
    font-weight:bold; 
  }
  .ui-jqgrid .ui-pg-table td {font-weight:normal; vertical-align:middle; padding:0px;}
	.ui-dialog{
		 z-index: 1060 ;
	}
	.jqx-cell{
		font-size: 11px;
	}
	.jqx-grid-cell{
		font-size: 11px;
	}
		.jqx-grid-column-header, .jqx-grid-columngroup-header {
		    white-space: normal;
	}
		.ui-jqgrid .ui-jqgrid-toppager {
		    height: 130px; /* default value in ui.jqgrid.CSS is 21px */
					}
		/* Breadcrumbs from http://bootsnipp.com/snippets/featured/triangle-breadcrumbs-arrows */
		.btn-breadcrumb .btn:not(:last-child):after {
		  content: " ";
		  display: block;
		  width: 0;
		  height: 0;
		  border-top: 17px solid transparent;
		  border-bottom: 17px solid transparent;
		  border-left: 10px solid white;
		  position: absolute;
		  top: 50%;
		  margin-top: -17px;
		  left: 100%;
		  z-index: 3;
		}
		.btn-breadcrumb .btn:not(:last-child):before {
		  content: " ";
		  display: block;
		  width: 0;
		  height: 0;
		  border-top: 17px solid transparent;
		  border-bottom: 17px solid transparent;
		  border-left: 10px solid rgb(173, 173, 173);
		  position: absolute;
		  top: 50%;
		  margin-top: -17px;
		  margin-left: 1px;
		  left: 100%;
		  z-index: 3;
		}

		.btn-breadcrumb .btn {
		  padding:6px 12px 6px 24px;
		}
		.btn-breadcrumb .btn:first-child {
		  padding:6px 6px 6px 10px;
		}
		.btn-breadcrumb .btn:last-child {
		  padding:6px 18px 6px 24px;
		}

		/** Default button **/
		.btn-breadcrumb .btn.btn-default:not(:last-child):after {
		  border-left: 10px solid #fff;
		}
		.btn-breadcrumb .btn.btn-default:not(:last-child):before {
		  border-left: 10px solid #ccc;
		}
		.btn-breadcrumb .btn.btn-default:hover:not(:last-child):after {
		  border-left: 10px solid #ebebeb;
		}
		.btn-breadcrumb .btn.btn-default:hover:not(:last-child):before {
		  border-left: 10px solid #adadad;
		}

		/* The responsive part */

		.btn-breadcrumb > * > div {
		    /* With less: .text-overflow(); */
		    white-space: nowrap;
		    overflow: hidden;
		    text-overflow: ellipsis;    
		}

		.btn-breadcrumb > *:nth-child(n+2) {
		  display:none;
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
		/* === For phones =================================== */
		@media (max-width: 767px) {
		  .btn-breadcrumb > *:nth-last-child(-n+2) {
		      display:block;
		  } 
		  .btn-breadcrumb > * div {
		      max-width: 60px;
		  }
			.divbc{
				margin-left:10px;width:100%
			}
			#tombolfloat { 
			  height: 50px; 
			  width: 100%; 
			  position: absolute; 
			  top: 100%; 
			  left:0%;
			  z-index: 999;
			}	    
		}

		/* === For tablets ================================== */
		@media (min-width: 768px) and (max-width:991px) {
		    .btn-breadcrumb > *:nth-last-child(-n+4) {
		        display:block;
		    } 
		    .bt   n-breadcrumb > * div {
		        max-width: 100px;
		    }
		}

		/* === For desktops ================================== */
		@media (min-width: 992px) {
		    .btn-breadcrumb > *:nth-last-child(-n+6) {
		        display:block;
		    } 
		    .btn-breadcrumb > * div {
		        max-width: 170px;
		    }
		}
		.btn-detanto {
		  background-color: #fff;
		  border-color: #ccc;
		}
		a.btn  {
			color:#000;
		}
		a.btn:hover {
			color:#8F8F8F;
		}
		a.btn:visited {
			color:#8F8F8F;
			text-decoration: none
		}
		#jqxTree li{
		    font-size:8px;
		}

		/*
		@media (min-width: 768px) {
		  .form-horizontal .form-group .control-label {
		    padding-top: 7.333333px;
		    font-size: 12px;
		  }
		}

		.form-control {
		  padding: 1px 1px;
		  font-size: 10px;
		  margin-bottom: 10px
		}*/		

.form-control {
  display: block;
  width: 100%;
  height: 29px;
  padding: 6px 12px;
  font-size: 12px;
}
.jqx-widget-content {
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
		.dpic
		{
			margin:5px;
			border-radius:5px;
			border:1px dotted #ccc;
		}		
		.jqx-validator-error-element{
			z-index: 1;
		}
				</style>

</head>
	<?php
	echo $body;
	?>
  <div id='windowProses'>
      <div id="headerProses">
          <span id="captureContainer" style="float: left">Processing..</span>
      </div>
      <div id="content" style='overflow: hidden'>
          <img id=imgPROSES src="<?=base_url(IMAGES."process.gif")?>" style='display:none;width:400px;height: 300px'>
      </div>
  </div>

    <script type="text/javascript">
    $(document).ready(function() {
			$('#windowProses').jqxWindow({isModal: true, autoOpen: false, height: '320px', width:'410px', animationType:'none', maxWidth: '900'});
    });
    </script>	
</html>