<?php 
	include "Models/Student/HomeModel.php";
	class HomeController extends Controller{
		use HomeModel;
		//ham tao
		public function __construct(){
			//xac thuc dang nhap
			$this->authentication_1();
		}
		public function index(){			
			//goi view
			if(isset($_SESSION["mssv"])){
				$mssv = $_SESSION["mssv"];
			}
			$conn = Connection::getInstance();
			$query = "SELECT * FROM listsubject Where StudentID = $mssv";
			$query1 = "SELECT * FROM listsubject Where status = 1 and StudentID = $mssv";
			$query2 = "SELECT * FROM listsubject Where status = 0 and StudentID = $mssv";
			$data = $conn->query($query);
			$data = $data->rowCount();
			$data1 = $conn->query($query1);
			$data1 = $data1->rowCount();
			$data2 = $conn->query($query2);
			$data2 = $data2->rowCount();

		
			
			$querylist = $conn->query("SELECT SubjectID,SubjectName FROM listsubject where status = 1 and StudentID = '$mssv'");
			$datalist = $querylist->fetchAll();
			$querylistno = $conn->query("SELECT SubjectID,SubjectName FROM listsubject where status = 0 and StudentID = '$mssv'");
			$datalistno = $querylistno->fetchAll();

			$this->renderHTML("Views/Student/HomeView.php",array("data"=>$data,"data1"=>$data1,"data2"=>$data2,"datalist"=>$datalist,"datalistno"=>$datalistno));
		}
		public function getTb(){
			
		}
	}
?>