<?php 
	use Data\PDOData;
	trait LoginModel{
		//lay mot ban ghi
		public function modelFetch(){
			$mssv = $_POST["mssv"];
			$pass = $_POST["pass"];
			//ma hoa password
			//$pass = md5($pass);
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from user where StudentID=:mssv and PassWord=:pass");
			$query->execute(array("mssv"=>$mssv,"pass"=>$pass));
			$result = $query->fetch();
			return $result;
			//---
			// $db = new PDOData();
			// $data = $db->doPreparedQuery("SELECT * from user where StudentID=? and PassWord=?",array($mssv,$pass));
			// return $data;
		}
		public function checkCookie(){
			
		}
	}
?>