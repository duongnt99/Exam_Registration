<?php 
	//Kết nối cơ sở dữ liệu
	class Connection{
		//ham ket noi csdl, tra ve bien ket noi
		public static function getInstance(){
			$conn = new PDO("mysql:host=localhost;dbname=demo","root","");
			$conn->exec("set names 'utf8'");
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $conn;
		}
	}
	//Connection::getInstance();
?>