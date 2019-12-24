<?php
include "Models/Admin/UserModel.php";
class UserAdminController extends Controller
{
    use UserModel;
    public function index()
    {
        $data = $this->fetchAdmin();
        $formAction = "index.php?area=Admin&controller=UserAdmin&action=add";
        $this->renderHTML("Views/Admin/ListUserAdminView.php", array("data" => $data,"formAction" => $formAction));
    }
    public function add()
    {
        $this->addUserAd();
        header("location:user-admin");
    }
    public function deleteUserAdmin()
    {
        $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        $this->deleteUserAd($id);
        header("location:user-admin");
        
    }
}
