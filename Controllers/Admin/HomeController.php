<?php 
	//include "Models/Frontend/HomeModel.php";
	class HomeController extends Controller{
		//use HomeModel;
		//ham tao
		public function __construct(){
			//xac thuc dang nhap
			$this->authentication();
		}
		public function index(){			
			//goi view
			$conn = Connection::getInstance();
			
			$dataKi = $conn->query("SELECT * FROM kithi");
			$dataKi = $dataKi->rowCount();

			$dataSV = $conn->query("SELECT * FROM user");
			$dataSV = $dataSV->rowCount();
			
			$dataAd = $conn->query("SELECT * FROM userad");
			$dataAd = $dataAd->rowCount();

			$querylist = $conn->query("SELECT * FROM listsubject where status = 1");
			$datalist = $querylist->rowCount();

			$querylistno = $conn->query("SELECT * FROM listsubject where status = 0");
			$datalistno = $querylistno->rowCount();

			$this->renderHTML("Views/Admin/HomeView.php",array("dataKi"=>$dataKi,"dataSV"=>$dataSV,"dataAd"=>$dataAd,"datalist"=>$datalist,"datalistno"=>$datalistno));
		}
	}
?>