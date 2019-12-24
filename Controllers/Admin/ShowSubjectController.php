<?php
include "Models/Admin/ListExamModel.php";
class ShowSubjectController extends Controller
{
    use ListExam;
    public function __construct(){
        //xac thuc dang nhap
        $this->authentication();
    }
    public function index()
    {

    }
    public function showHqt1()
    {
        $dataHqt1 = $this->fetchHqt1();
        $this->renderHTML("Views/Admin/ShowHqtView.php",array("dataHqt1"=>$dataHqt1));
    }
    public function showHqt0()
    {
        $dataHqt0 = $this->fetchHqt0();
        $this->renderHTML("Views/Admin/ShowHqt_0View.php",array("dataHqt0"=>$dataHqt0));
    }
    public function showWeb1()
    {
        $dataWeb1 = $this->fetchWeb1();
        $this->renderHTML("Views/Admin/ShowWeb1View.php",array("dataWeb1"=>$dataWeb1));
    }
    public function showWeb0()
    {
        $dataWeb0 = $this->fetchWeb0();
        $this->renderHTML("Views/Admin/ShowWeb0View.php",array("dataWeb0"=>$dataWeb0));
    }
    public function showAI1()
    {
        $dataAI1 = $this->fetchAI1();
        $this->renderHTML("Views/Admin/ShowAI1View.php",array("dataAI1"=>$dataAI1));
    }
    public function showAI0()
    {
        $dataAI0 = $this->fetchAI0();
        $this->renderHTML("Views/Admin/ShowAI0View.php",array("dataAI0"=>$dataAI0));
    }
}
