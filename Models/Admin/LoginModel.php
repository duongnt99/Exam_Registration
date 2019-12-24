<?php 
	trait LoginModel{
		//lay mot ban ghi
		public function modelFetch(){
			$user = $_POST["user"];
			$pass = $_POST["pass"];
			//ma hoa password
			//$pass = md5($pass);
			//---
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select * from userad where user=:user and pass=:pass");
			$query->execute(array("user"=>$user,"pass"=>$pass));
			$result = $query->fetch();
			return $result;
			//---
		}
		public function checkCookie(){
			
		}
	}
?>