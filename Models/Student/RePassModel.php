<?php 
	use Data\PDOData;
	trait RePassModel{
		public function update(){
			$pass = $_POST["pass"];
			$newpass = $_POST["newpass"];
			$repass = $_POST["repass"];
			//mã hóa pass
			// $repass = md5($repass);
			// $pass = md5($pass);
			// $newpass = md5($newpass);

			// $conn = Connection::getInstance();
			// if($newpass==$repass){
			// 	$query  = $conn->prepare("UPDATE user set PassWord=:repass where PassWord=:pass");
			// 	$query->execute(array("repass"=>$repass,"pass"=>$pass));
			// }
			$db = new PDOData();
			if($newpass==$repass){
				$db->doPrepareSql("UPDATE user set PassWord=? where PassWord=?",array($repass,$pass));
			}
		}
		public function modelFetchCheck(){
			$pass = $_POST["pass"];
			//$pass = md5($pass);
			$conn = Connection::getInstance();
            $query  = $conn->query("SELECT * from user where PassWord='$pass' ");
            return $query->rowCount();
			//---
		}
	}
?>