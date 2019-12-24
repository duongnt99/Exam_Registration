<?php
//include file model
include "Models/Student/LoginModel.php";
class LoginController extends Controller
{
	//su dung class LoginModel
	use LoginModel;
	public function index()
	{
		//load view
		$this->renderHTML("Views/Student/LoginView.php");
	}
	//khi an nut submit
	public function doLogin()
	{
		//goi ham lay 1 ban ghi tu class model
		$record = $this->modelFetch();
		
		if (isset($record->StudentID)) {
			//gan session email
			$_SESSION["mssv"] = $record->StudentID;
			$_SESSION["name_sv"] = $record->StudentName;
			$_SESSION["ngaysinh"] = $record->DateOfBirth;
			$_SESSION["gioitinh"] = $record->Gender;
			$_SESSION["quequan"] = $record->HomeTown;
			$_SESSION["lopkhoahoc"] = $record->Class;
			if(!empty($_POST['remember'])){
				setcookie('mssv',$_POST['mssv'],time()+360000);
				setcookie('pass',$_POST['pass'],time()+360000);
				setcookie('remember',$_POST['remember'],time()+360000);
			}
			if(empty($_POST['remember'])){
				setcookie('mssv',$_POST['mssv'],time()-360000);
				setcookie('pass',$_POST['pass'],time()-360000);
				setcookie('remember',$_POST['remember'],time()-360000);
			}
			//quay tro lai trang index.php
			header("location:home");
		} else {
			//$error = "Thông tin đăng nhập không đúng";
			$error = "Bạn nhập sai thông tin!";
			$this->renderHTML("Views/Student/LoginView.php",array("error"=>$error));
		}
		
	}
	// public function doAddCheckEmail()
	// {
	// 	//$data = $this->modelFetchCheckEmail();
	// 	$data = 0;
	// 	echo $data;
	// }
}
