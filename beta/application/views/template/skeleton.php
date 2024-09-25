<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php
$apps_theme = $this->config->item('app_theme');
$grid_theme = $this->config->item('app_grids');
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
<!-- Start direct chat Whatsapp -->
        <!-- <input class='chatMenu hidden' id='offchatMenu' type='checkbox' />
        <label class='chatButton' for='offchatMenu' title="Chat by Whatsapp">
          <svg class='svg-1' viewBox='0 0 32 32'>
            <g>
              <path d='M16,2A13,13,0,0,0,8,25.23V29a1,1,0,0,0,.51.87A1,1,0,0,0,9,30a1,1,0,0,0,.51-.14l3.65-2.19A12.64,12.64,0,0,0,16,28,13,13,0,0,0,16,2Zm0,24a11.13,11.13,0,0,1-2.76-.36,1,1,0,0,0-.76.11L10,27.23v-2.5a1,1,0,0,0-.42-.81A11,11,0,1,1,16,26Z'></path>
              <path d='M19.86,15.18a1.9,1.9,0,0,0-2.64,0l-.09.09-1.4-1.4.09-.09a1.86,1.86,0,0,0,0-2.64L14.23,9.55a1.9,1.9,0,0,0-2.64,0l-.8.79a3.56,3.56,0,0,0-.5,3.76,10.64,10.64,0,0,0,2.62,4A8.7,8.7,0,0,0,18.56,21a2.92,2.92,0,0,0,2.1-.79l.79-.8a1.86,1.86,0,0,0,0-2.64Zm-.62,3.61c-.57.58-2.78,0-4.92-2.11a8.88,8.88,0,0,1-2.13-3.21c-.26-.79-.25-1.44,0-1.71l.7-.7,1.4,1.4-.7.7a1,1,0,0,0,0,1.41l2.82,2.82a1,1,0,0,0,1.41,0l.7-.7,1.4,1.4Z'></path>
            </g>
          </svg>
          <svg class='svg-2' viewBox='0 0 512 512'>
            <path d='M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3l68.2 68.2-68.2 68.2c-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z'></path>
          </svg>
        </label>

        <div class='chatBox'>
          <div class='chatContent'>
            <div class='chatHeader'>
                <svg viewbox='0 0 32 32'>
                  <path d='M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z'></path>
                    <rect height='2' width='2' x='19' y='9'></rect>
                    <rect height='2' width='2' x='14' y='9'></rect>
                    <rect height='2' width='2' x='24' y='9'></rect>
                  <path d='M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z'></path>
                </svg>
              <div class='chatTitle'>Silahkan chat dengan Tim kami <span>Admin akan segera membalas pesan Anda</span></div>
            </div>
            <div class='chatText'>
              <span>Hallo..selamat datang di JConnect, Ada yang bisa kami bantu?</span>
              <span class='typing'>...</span>
            </div>
          </div>
          
          <a class='chatStart' href='https://api.whatsapp.com/send?phone=628111035838&text=Hallo,%20selamat%20datang%20di%20JConnect,%20Ada%20yang%20bisa%20kami%20bantu?' rel='nofollow noreferrer' target='_blank'>
            <span>Click di sini untuk memulai chat via Whatsapp...</span>        
          </a>
        </div> -->
    <script type="text/javascript">
    $(document).ready(function() {
			$('#windowProses').jqxWindow({isModal: true, autoOpen: false, height: '320px', width:'410px', animationType:'none', maxWidth: '900'});
    });
    </script>	
</html>
<style>
      /* Chatbox Whatsapp */
      :root {
      --warna-background: #EA9000 ; /* Warna background header dan tombol chat */
      --warna-bg-chat: #f0f5fb;
      --warna-icon: #fff; /* Warna icon chat */
      --warna-text: #505050;
      --warna-text-alt: #989b9f;
      --lebar-chatbox: 320px;
      }

      svg{width: 22px;height: 22px;vertical-align: middle;fill: var(--warna-icon)}
      .chatMenu, .chatButton .svg-2{display: none}

      .chatButton{position: fixed;background-color: var(--warna-background);bottom: 20px;left: 20px;border-radius: 50px;z-index: 20;overflow: hidden;display: flex;align-items: center;justify-content: center;width: 50px;height: 50px;-webkit-transition: all .2s ease-out;transition: all .2s ease-out}
      .chatButton svg{margin: auto;fill: var(--warna-icon)}
        
      .chatBox{position: fixed;bottom: 70px;left: 20px;width: var(--lebar-chatbox);-webkit-transition: all .2s ease-out;transition: all .2s ease-out;z-index: 21;opacity: 0;visibility: hidden;line-height: normal}
      .chatContent{border-radius: 15px;background-color: #f2f2f2;box-shadow: 0 5px 15px 0 rgba(0,0,0,.05);overflow: hidden}
      .chatHeader{position: relative;display: flex;align-items: center;padding: 15px 20px;background-color: var(--warna-background);overflow: hidden}
      .chatHeader svg{width: 32px;height: 32px;flex-shrink: 0;fill: var(--warna-icon)}
      .chatHeader .chatTitle{padding-left: 15px;font-size: 14px;color: var(--warna-icon)}
      .chatHeader .chatTitle span{font-size: 11.5px;display: block;line-height: 1.58em}
        
      .chatText{display: flex;flex-wrap: wrap;margin: 25px 20px;font-size: 12px;color: var(--warna-text)}
      .chatText span{display: inline-block;margin-right: auto;padding: 10px 10px 10px 20px;background-color: var(--warna-bg-chat);border-radius: 3px 15px 15px}
      .chatText span:after{content: 'Just now';margin-left: 15px;font-size: 9px;color: var(--warna-text-alt)}
      .chatText .typing{margin: 15px 0 0 auto;padding: 10px 20px 10px 10px;border-radius: 15px 3px 15px 15px}
      .chatText .typing: after{display: none}
        
      .chatStart{display: flex;align-items: center;margin-top: 15px;padding: 18px 20px;border-radius: 10px;background-color: #f2f2f2;overflow: hidden;font-size: 12px;color: var(--warna-text)}
      .chatMenu:checked + .chatButton{-webkit-transform: rotate(360deg);transform: rotate(360deg)}
      .chatMenu:checked + .chatButton .svg-1{display: none}
      .chatMenu:checked + .chatButton .svg-2{display: block}
      .chatMenu:checked ~ .chatBox{bottom: 90px;opacity: 1;visibility: visible}
    </style>
    <!-- END CSS Direct Chat Whatsapp -->
<!-- <script type="text/javascript">
  window.$crisp=[];
  window.CRISP_WEBSITE_ID="354a8073-ae9c-40bb-95fe-7cb1caa26cde";
  (function(){
    d=document;
    s=d.createElement("script");
    s.src="https://client.crisp.chat/l.js";
    s.async=1;
    d.getElementsByTagName("head")[0].appendChild(s);
  })();
</script> -->