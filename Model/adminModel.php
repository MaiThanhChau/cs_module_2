<?php
namespace Model;
use PDO;
use Model\DatabaseConnect;

class adminModel extends DatabaseConnect{
    public function checkLogin($Ten_dang_nhap, $Mat_khau)
    {
        $sql = "SELECT * FROM `admin` WHERE Ten_dang_nhap = '$Ten_dang_nhap' AND Mat_khau = '$Mat_khau'";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        if( isset($row) ){
            return $row;
        }else{
            return false;
        }
    }
}