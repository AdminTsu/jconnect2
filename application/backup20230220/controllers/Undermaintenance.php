<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Undermaintenance extends CI_controller {

	function Undermaintenance(){
		parent::__construct();
	}
	
	function index()
	{
		$html = "
			<html>
				<head>
					<title>KIM</title>
				</head>
				<body>
					<h1>Server Under Maintenance</h1>
				</body>
			</html>
		";
		echo $html;
	}
	
}