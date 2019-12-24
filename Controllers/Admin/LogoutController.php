<?php 
	class LogoutController{
		public function index(){
			unset($_SESSION["user"]);
			unset($_SESSION["id"]);
			header("location:index.php?area=Admin");
		}
	}
?>