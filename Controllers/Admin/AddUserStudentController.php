<?php
include "Models/Admin/UserModel.php";
class AddUserStudentController extends Controller
{
    use UserModel;
    public function index()
    {
        $this->renderHTML("Views/Admin/AddUserStudentView.php");
    }
    public function add()
    {
        include "Assets/phpexcel/Classes/PHPExcel.php";
        $file = $_FILES['file']['tmp_name'];
        $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        $objReader->setLoadSheetsOnly('Sheet1');

        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('null', true, true, true);

        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        //echo $highestRow; 
        for ($row = 2; $row <= $highestRow; $row++) {
            $name_sv = $sheetData[$row]['B'];
            $mssv = $sheetData[$row]['A'];
            $pass = $sheetData[$row]['A'];
            // $pass = md5($pass);
            $ngaysinh = $sheetData[$row]['C'];
            $gioitinh = $sheetData[$row]['D'];
            $quequan = $sheetData[$row]['E'];
            $lopkhoahoc = $sheetData[$row]['F'];
            $conn = Connection::getInstance();
            $query = $conn->prepare("insert into user set StudentName=:name_sv, StudentID=:mssv, PassWord=:pass, DateOfBirth=:ngaysinh, Gender=:gioitinh, HomeTown=:quequan , Class=:lopkhoahoc");
            $query->execute(array("name_sv" => $name_sv, "mssv" => $mssv, "pass" => $pass,"ngaysinh"=>$ngaysinh,"gioitinh"=>$gioitinh,"quequan"=>$quequan,"lopkhoahoc"=>$lopkhoahoc));
        }
        header('location:dssv');
    }
}
