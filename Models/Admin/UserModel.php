<?php
trait UserModel
{
	//--
	//sinh viên
	//--
	//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
	public function fetchAll()
	{
		$conn = Connection::getInstance();
		$query = $conn->query("SELECT * from user order by id ");
		return $query->fetchAll();
	}


	//--
	//admin
	//--
	public function fetchAdmin()
	{
		$conn = Connection::getInstance();
		$query = $conn->query("SELECT * from userad order by id desc ");
		return $query->fetchAll();
	}
	public function addUserAd()
	{
		$name = $_POST["name"];
		$password = $_POST["password"];
		//ma hoa password
		//$password = md5($password);
		$user = $_POST["user"];
		$conn = Connection::getInstance();
		$query = $conn->prepare("insert into userad set name=:name, user=:user, pass=:password");
		$query->execute(array("name" => $name, "user" => $user, "password" => $password));
	}
	public function deleteUserAd($id)
	{
		$conn = Connection::getInstance();
		$query = $conn->prepare("DELETE from userad where id=:id");
		$query->execute(array("id" => $id));
	}
}
