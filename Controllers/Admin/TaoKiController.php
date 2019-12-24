<?php
include "Models/Admin/TaoKiModel.php";
class TaoKiController extends Controller
{
    use TaoKiModel;
    public function __construct(){
        //xac thuc dang nhap
        $this->authentication();
    }
    public function index()
    {
        $data = $this->fetchAll();  
        $formAction = "index.php?area=Admin&controller=TaoKi&action=add";
        $this->renderHTML("Views/Admin/TaoKiView.php",array("data"=>$data,"formAction"=>$formAction));
        // $this->renderHTML("Views/Admin/TaoKiView.php",array("formAction"=>$formAction));
    }
    public function add()
    {
        $this->insert();
        header("location:tao-ki-thi");
    }
}
