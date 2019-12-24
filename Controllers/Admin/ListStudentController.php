<?php
include "Models/Admin/UserModel.php";
class ListStudentController extends Controller
{
    use UserModel;
    public function __construct(){
        //xac thuc dang nhap
        $this->authentication();
    }
    public function index()
    {
        $data = $this->fetchAll();
        $this->renderHTML("Views/Admin/ListUserSinhVienView.php",array("data"=>$data));
    }
}
