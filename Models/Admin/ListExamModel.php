<?php
trait ListExam{

    public function fetchHqt1(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM `listsubject` WHERE SubjectName = 'Hệ quản trị cơ sở dữ liệu' AND Status = 1");
        return $query->fetchAll();
    }
    public function fetchHqt0(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM `listsubject` WHERE SubjectName = 'Hệ quản trị cơ sở dữ liệu' AND Status = 0");
        return $query->fetchAll();
    }
    public function fetchWeb1(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM `listsubject` WHERE SubjectName = 'Phát triển ứng dụng Web' AND Status = 1");
        return $query->fetchAll();
    }
    public function fetchWeb0(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM `listsubject` WHERE SubjectName = 'Phát triển ứng dụng Web' AND Status = 0");
        return $query->fetchAll();
    }
    public function fetchAI1(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM `listsubject` WHERE SubjectName = 'Trí tuệ nhân tạo' AND Status = 1");
        return $query->fetchAll();
    }
    public function fetchAI0(){
        $conn = Connection::getInstance();
        $query = $conn->query("SELECT * FROM `listsubject` WHERE SubjectName = 'Trí tuệ nhân tạo' AND Status = 0");
        return $query->fetchAll();
    }
}
?>