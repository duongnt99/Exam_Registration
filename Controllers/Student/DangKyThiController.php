<?php 
	//include file model
	include "Models/Student/DangKyThiModel.php";
	class DangKyThiController extends Controller{
		//su dung class LoginModel
		use DangKyThiModel;
		public function index(){
			//load view
			
			//$mssv = 17020835;
			$data = $this->fetch();
			$datakq = $this->fetchKq();
			$this->authentication_1();
			$this->renderHTML("Views/Student/DangKyThiView.php",array("data"=>$data,"datakq"=>$datakq));
		}
		public function add(){
			$this->doAdd();
			echo "ok";
		}
		public function deleteCaThi(){
			$id = $_POST['id'];
			$id_ca = $_POST['id_ca'];
			$this->updateDele($id_ca);
			$this->deleteCa($id);
			header("location:dangkythi");
		}

		//cập nhật sosos lượng đăng ký
		public function update(){
			$id = $_POST['id'];
			if($this->doAdd() == true){
				$conn = Connection::getInstance();
				$conn->query("UPDATE classes SET DaDangKy = DaDangKy + 1 WHERE id = $id and Amount > 0");
				echo 'ok';
			}else{
				echo "error";
			}
			
		}
	}
?>