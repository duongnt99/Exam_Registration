<?php
use Data\PDOData;
trait DangKyThiModel
{
	//lấy tat ca ban ghi trong bang examlist
	public function fetch()
	{
		if (isset($_SESSION["mssv"])) {
			$mssv = $_SESSION["mssv"];
		}
		$db = new PDOData();
		$data = $db->doPreparedQuery("
		SELECT * from classes 
		INNER JOIN (SELECT SubjectID from listSubject WHERE StudentID =? and status = 1) listSubject 
		ON classes.SubjectID = listSubject.SubjectID  
		ORDER BY classes.SubjectID DESC",array($mssv));
		return $data;
	}
	public function doAdd()
	{
		$mssv = $_SESSION['mssv'];
		$name = $_SESSION['name_sv'];
		$ngaysinh = date("d/m/Y", strtotime($_SESSION['ngaysinh']));
		$hocphan = $_POST["hocphan"];
		$mahocphan = $_POST["mahocphan"];
		//$date = date('d-m-Y', strtotime($_POST["date"]));
		$date = $_POST["ngaythi"];
		$hstart = $_POST["giobatdau"];
		$hstop = $_POST["gioketthuc"];
		$phongmay = $_POST["phongthi"];
		$cathi = $_POST['cathi'];
		$id_ca = $_POST['id_ca'];

		$db = new PDOData();
		// $query = $conn->prepare("select * from ketqua where SubjectID=:mahocphan AND StudentID=:mssv");
		//thuc hien truy van co truyen danh sach bien
		$data = $db->doPreparedQuery("SELECT * from ketqua where SubjectID=? AND StudentID=?",array($mahocphan,$mssv));
		//lay mot ban ghi
		if($data == null){
			$db->doPrepareSql("INSERT INTO ketqua set id_ca=?, StudentID=?, StudentName=?, DateOfBirth=?, SubjectID=?, SubjectName=?, IDClasses=?, Date=?, Start=?, End=?, Room=?",array($id_ca,$mssv,$name,$ngaysinh,$mahocphan,$hocphan,$cathi,$date,$hstart,$hstop,$phongmay));
			return true;
		}else{
			return false;
		}
		
	}

	//lay ket qua dang ky
	public function fetchKq()
	{
		$mssv = $_SESSION['mssv'];
		$db = new PDOData();
		$data = $db->doPreparedQuery("SELECT * from ketqua where StudentID=?",array($mssv));
		return $data;
	}

	public function deleteCa($id)
	{
		$conn = Connection::getInstance();
		$query = $conn->prepare("DELETE from ketqua where id=$id");
		$query->execute(array("id" => $id));
	}
	public function updateDele($id)
	{
		$conn = Connection::getInstance();
		$conn->query("UPDATE classes SET DaDangKy = DaDangKy - 1 WHERE id = $id and DaDangKy > 0");
	}
}
