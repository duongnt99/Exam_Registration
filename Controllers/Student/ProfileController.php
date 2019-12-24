<?php 
	include "Models/Student/ProfileModel.php";
	class ProfileController extends Controller{
		use ProfileModel;
		//ham tao
		public function __construct(){
			//xac thuc dang nhap
			$this->authentication_1();
		}
		public function index(){			

			$this->renderHTML("Views/Student/ProfileView.php");
		}
		public function getTb(){
			
		}
	}
?>