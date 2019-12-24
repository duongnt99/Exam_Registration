<?php
//include file model
include "Models/Admin/LoginModel.php";
class LoginController extends Controller
{
	//su dung class LoginModel
	use LoginModel;
	public function index()
	{
		//load view
		$this->renderHTML("Views/Admin/LoginView.php");
	}
	//khi an nut submit
	public function doLogin()
	{
		//goi ham lay 1 ban ghi tu class model
		$record = $this->modelFetch();
		
		if (isset($record->user) && isset($record->name)) {
			//gan session email
			$_SESSION["user"] = $record->user;
			$_SESSION["name"] = $record->name;
			$_SESSION["status"] = $record->status;
			if(!empty($_POST['remember'])){
				setcookie('user',$_POST['user'],time()+360000);
				setcookie('passad',$_POST['pass'],time()+360000);
				setcookie('rememberad',$_POST['remember'],time()+360000);
			}
			if(empty($_POST['remember'])){
				setcookie('user',$_POST['user'],time()-360000);
				setcookie('passad',$_POST['pass'],time()-360000);
				setcookie('rememberad',$_POST['remember'],time()-360000);
			}
			//quay tro lai trang index.php
			header("location:admin");
		} else {
			//$error = "Thông tin đăng nhập không đúng";
			$error = "Test Demo - User: 123 pass: 123";
			$this->renderHTML("Views/Admin/LoginView.php",array("error"=>$error));
		}
		
	}
	// public function doAddCheckEmail()
	// {
	// 	//$data = $this->modelFetchCheckEmail();
	// 	$data = 0;
	// 	echo $data;
	// }
}
