<html>

<link rel="stylesheet" href="<?php echo base_url(CSS."bootstrap.css");?>">
<link rel="stylesheet" href="<?php echo base_url(CSS."font-awesome/css/font-awesome.min.css");?>">
<title><?=$title?></title>

<style>

/* ---------- GENERAL ---------- */
* {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
}
*:before, *:after {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
}

body {
  /*background: #2E9AFE;*/ffffff
  /*background: #ff0000; orange*/
  background: #ffffff;
  color: #dfe0e0;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  margin: 0;
}

a {
  color: #eee;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

input {
  border: none;
  font-family: 'Open Sans', Arial, sans-serif;
  font-size: 14px;
  line-height: 1.5em;
  padding: 0;
  -webkit-appearance: none;
}

p {
  line-height: 1.5em;
}

.clearfix {
  *zoom: 1;
}
.clearfix:before, .clearfix:after {
  content: ' ';
  display: table;
}
.clearfix:after {
  clear: both;
}

.container {
  left: 50%;
  position: fixed;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

/* ---------- LOGIN ---------- */
#login {
  padding: 46 0px;
  width: 280px;
}

#login form span {
  background-color: #dfe0e0;
  background-color: #dfe0e0;
  border-radius: 3px 0px 0px 3px;
  color: #606468;
  display: block;
  float: left;
  height: 50px;
  line-height: 50px;
  text-align: center;
  width: 50px;
}

#login form input {
  height: 50px;
}

#login form input[type="text"], input[type="password"] {
  background-color: #cccccc;
  border-radius: 0px 3px 3px 0px;
  color: #606468;
  /*margin-bottom: 1em;*/
  padding: 0 16px;
  width: 230px;
}

#login form input[type="submit"] {
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  background-color: #000099;
  color: #eee;
  font-weight: bold;
  margin-bottom: 2em;
  text-transform: uppercase;
  width: 280px;
}

#login form input[type="submit"]:hover {
  /*background-color: #f15958;*/
}

#login > p {
  text-align: center;
}

#login > p span {
  padding-left: 5px;
}
</style>
<?
  if(isset($messg)){
?>
    <link rel="shortcut icon" href="<?php echo base_url(IMAGES.'ico/Logo_JConnect_Gradient_dot_ico_01.ico');?>">
    <link rel="stylesheet" href="<?php echo base_url(CSS."jqx.base.css");?>">
    <link rel="stylesheet" href="<?php echo base_url(CSS."jqx.custom.css");?>">
    <script src="<?php echo base_url(JS."jquery.min.js");?>"></script>
    <script src="<?php echo base_url(JS."jqxwidgets/jqxcore.js");?>"></script>
    <script src="<?php echo base_url(JS."jqxwidgets/jqxnotification.js");?>"></script>
    <script type="text/javascript">
      $(document).ready(function () {
          $("#jqxNotification").jqxNotification({ width: "100%", appendContainer: "#container", opacity: 0.9, autoClose: true, template: "error" });
          $("#notificationContent").html("<?=$messg?>");
          $("#jqxNotification").jqxNotification("open");
      });
    </script>
<?  
  }
?>
      
<body>
  <center>

  <div class="container">
    <div class=row style="position:relative;top:10px;bottom:10px">
      <!-- <img src="<?=base_url(IMAGES."sdm_png_new_logo.png")?>" width=23%> -->
      <img src="<?=base_url(IMAGES."JConnect_Logo_01.png")?>" width=23%>
    </div>

    <div class= row id="login">
      <form class="login" role="form" id=formgw method=post action="/login/validate_credentials">
        <fieldset class="clearfix">
          <p><span class="fa fa-user fa-2x"></span><input type="text" placeholder="Username" name="username" id="username"></p> <!-- JS because of IE support; better: placeholder="Username" -->
          <p><span class="fa fa-lock fa-2x"></span><input type="password" id="password" name="password" placeholder="Password"></p> <!-- JS because of IE support; better: placeholder="Password" -->
          <p><input type="submit" value="Sign In"></p>
        </fieldset>
      </form>
      <div id="jqxNotification">
          <div id="notificationContent">
          </div>
      </div>      
      <div id="container" style="width: 280px; height: 100px;">
      </div>
    </div> <!-- end login -->
  </div>
</body>

</html>