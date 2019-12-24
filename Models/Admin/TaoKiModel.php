<?php
trait TaoKiModel{
    //lấy tất cả bản ghi
     //lấy tất cả bản ghi
    public function fetchAll(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM kithi");
        return $query->fetchAll();

    }
    //thêm kì thi
    public function insert(){
        $tenkithi = $_POST["tenkithi"];
        $namtochuc = $_POST["namtochuc"];
        $hocki = $_POST["hocki"];
        $ghichu = $_POST["ghichu"];
        $conn = Connection::getInstance();
        $query = $conn->prepare("INSERT INTO kithi set TenKiThi=:tenkithi, Năm=:namtochuc, HocKi=:hocki, Note=:ghichu");
        $query->execute(array("tenkithi"=>$tenkithi,"namtochuc"=>$namtochuc,"hocki"=>$hocki,"ghichu"=>$ghichu));
    }
}
