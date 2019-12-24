<?php 
	//start session
	session_start();
	//load file Connection.php -> ket noi csdl
	include "App/Connection.php";
	//load file Controller -> de dieu phoi view, xac thuc dang nhap...
	include "Data/PDOData.php";
	include "App/Controller.php";
	//load file Routing.php -> de dieu phoi url nham load MVC
	include "App/Routing.php";
	
	include "Assets/phpexcel/Classes/PHPExcel.php";
	
?>