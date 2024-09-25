<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Undermaintenance extends CI_controller {

	function __construct(){
		parent::__construct();
	}
	
	function index()
	{
		$html = "
			<html>
				<head>
					<title>JConnect</title> </head>
				<body>
					<h1>Server Under Maintenance</h1>
				</body>
			</html>
		";
		echo $html;
	}
	
}