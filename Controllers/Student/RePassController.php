<?php 
	//include file model
	include "Models/Student/RePassModel.php";
	class RePassController extends Controller{
		//su dung class LoginModel
		use RePassModel;
		public function index(){
			
			$this->renderHTML("Views/Student/RePassView.php");
		}
		public function edit(){
			//tạo biến $formAction để điều phối action của form
			$formAction = "index.php?controller=RePass&action=doEdit";
			//gọi view truyền dữ liệu ra view
			$this->renderHTML("Views/Student/RePassView.php",array("formAction"=>$formAction));
		}
		public function doEdit(){
			//gọi hàm insert trong model để insert bản ghi
			$this->update();
			header("location:home");
		}
		public function doEditCheck(){
			$data = $this->modelFetchCheck();
			echo $data;
		} 
	}
?>