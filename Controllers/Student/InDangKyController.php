<?php 
	//include file model
	include "Models/Student/InDangKyModel.php";
	class InDangKyController extends Controller{
		//su dung class LoginModel
		use InDangKyModel;
		public function __construct(){
			$this->authentication_1();
		}
		public function index(){
			//load view
			$ketqua = $this->fetch();
			$this->renderHTML("Views/Student/InDangKyView.php",array("ketqua"=>$ketqua));
		}
	}
?>