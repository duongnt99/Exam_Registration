<?php
trait TaoCaModel{
    //lấy tất cả bản ghi
     //lấy tất cả bản ghi
    public function fetchAll(){
        $conn = Connection::getInstance();
        if(isset($_GET['id'])){
            $idki = $_GET['id'];
        }else{
            $idki = $_SESSION['id'];
        }
        $_SESSION['id']= $idki;
        $query = $conn->query("SELECT * FROM classes where IDKiThi = $idki order by id DESC");
        return $query->fetchAll();

    }
    //thêm ca thi
    public function insert(){
        $hocphan = $_POST["hocphan"];
        $mahocphan = $_POST["mahocphan"];
        $date = date('d-m-Y', strtotime($_POST["date"]));
        $date = $_POST["date"];
        $hstart = $_POST["hstart"];
        $hstop = $_POST["hstop"];
        $phongmay = $_POST["phongmay"];
        $soluong = $_POST["soluong"];
        $cathi = $_POST['cathi'];
        $kithi = $_SESSION['id'];
        $conn = Connection::getInstance();
        $query = $conn->prepare("INSERT INTO classes set SubjectID=:mahocphan, SubjectName=:hocphan, IDClasses=:cathi, Date=:ngaythi,Start=:giobatdau,End=:gioketthuc,Room=:phongthi,Amount=:soluong,IDKiThi=:kithi");
        $query->execute(array("mahocphan"=>$mahocphan,"hocphan"=>$hocphan,"cathi"=>$cathi,"ngaythi"=>$date,"giobatdau"=>$hstart,"gioketthuc"=>$hstop,"phongthi"=>$phongmay,"soluong"=>$soluong,"kithi"=>$kithi));
        //echo $hocphan."-".$mahocphan."-".$date."-".$hstart."-".$hstop."-".$phongmay;
        // echo var_dump(is_string($mahocphan));
        // echo var_dump(is_string($date));
    }

    public function deleteCa($id)
	{
		$conn = Connection::getInstance();
		$query = $conn->prepare("DELETE from classes where id=:id");
		$query->execute(array("id" => $id));
	}

    
}
