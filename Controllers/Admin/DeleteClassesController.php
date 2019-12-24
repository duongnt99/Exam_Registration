<?php
include "Models/Admin/TaoCaModel.php";
class DeleteClassesController extends Controller
{
    use TaoCaModel;
    public function __construct(){
        //xac thuc dang nhap
        $this->authentication();
    }
    public function index()
    {
        $id = isset($_GET["id"]);
        $this->deleteCa($id);
        //header("location:tao-ca-thi");
    } 

}
