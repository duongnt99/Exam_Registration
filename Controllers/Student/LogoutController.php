<?php 
	class LogoutController{
		public function index(){
			//huy cac gia tri
			unset($_SESSION["mssv"]);
			unset($_SESSION["name_sv"]);
			unset($_SESSION["ngaysinh"]);
			unset($_SESSION["gioitinh"]);
			unset($_SESSION["quequan"]);
			unset($_SESSION["lopkhoahoc"]);
			//quay tro ve trang index.php?
			header("location:index.php");
		}
	}
?>