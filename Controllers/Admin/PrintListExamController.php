<?php
class PrintListExamController extends Controller{
    public function index(){
        
        $this->renderHTML("Views/Admin/PrintListExamView.php");
        
    }
    public function fetch(){
        
        $mahocphan = $_POST['mahocphan'];
        $cathi = $_POST['cathi'];
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM ketqua where SubjectID='$mahocphan' and IDClasses=$cathi order by SubjectName ASC");
        //$query->execute(array("mahocphan"=>$mahocphan,"cathi"=>$cathi));
        $data = $query->fetchAll();
        $data = json_encode($data);
        print_r($data);
    }
}
?>