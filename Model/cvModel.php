<?php

namespace Model;

use PDO;
use Model\DatabaseConnect;

class cvModel extends DatabaseConnect
{
    public function getOne($id)
    {
        $sql = "SELECT * FROM `cong_viec` JOIN loai_cv ON cong_viec.ID_loai_cong_viec = loai_cv.ID_loai_cv JOIN nhan_vien ON cong_viec.ID_nhan_vien = nhan_vien.ID_nv WHERE cong_viec.ID_cv = $id";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        return $row;
    }
    public function getTotalRecord()
    {
        $sql = "SELECT COUNT(ID_cv) AS total FROM cong_viec WHERE Trang_thai = 'Chưa hoàn thành'";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        return $row;
    }
    public function getbyLimit($start, $limit)
    {
        $sql = "SELECT * FROM cong_viec  JOIN loai_cv ON cong_viec.ID_loai_cong_viec = loai_cv.ID_loai_cv JOIN nhan_vien ON cong_viec.ID_nhan_vien = nhan_vien.ID_nv WHERE Trang_thai = 'Chưa hoàn thành' ORDER BY cong_viec.ID_cv ASC LIMIT $start, $limit";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchall();
        return $rows;
    }
    public function getbyID_nv($ID_nv)
    {
        $sql = "SELECT * FROM cong_viec
            JOIN loai_cv ON cong_viec.ID_loai_cong_viec = loai_cv.ID_loai_cv
            JOIN nhan_vien ON cong_viec.ID_nhan_vien = nhan_vien.ID_nv
            WHERE nhan_vien.ID_nv = '$ID_nv'";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchall();
        return $rows;
    }
    public function getbyLoaicv($Loai_cv)
    {
        $sql = "SELECT * FROM cong_viec
            JOIN loai_cv ON cong_viec.ID_loai_cong_viec = loai_cv.ID_loai_cv
            JOIN nhan_vien ON cong_viec.ID_nhan_vien = nhan_vien.ID_nv
            WHERE loai_cv.Loai_cv LIKE '$Loai_cv'";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchall();
        return $rows;
    }
    public function getAllbyTrangthai()
    {
        $sql = "SELECT * FROM `cong_viec` JOIN loai_cv ON cong_viec.ID_loai_cong_viec = loai_cv.ID_loai_cv JOIN nhan_vien ON cong_viec.ID_nhan_vien = nhan_vien.ID_nv ORDER BY cong_viec.Trang_thai ASC";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchall();
        return $rows;
    }
    public function tongsoCV()
    {
        $sql = "SELECT COUNT(*) AS tong_so FROM cong_viec";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        return $row;
    }
    public function CVdahoanthanh()
    {
        $sql = "SELECT COUNT(*) AS tong_so FROM cong_viec WHERE Trang_thai = 'Đã hoàn thành'";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        return $row;
    }
    public function CVchuahoanthanh()
    {
        $sql = "SELECT COUNT(*) AS tong_so FROM cong_viec WHERE Trang_thai = 'Chưa hoàn thành'";
        $stmt = $this->dbc->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        return $row;
    }
    public function update($data, $id)
    {
        $Mo_ta = $data['Mo_ta'];
        $ID_nhan_vien = $data['ID_nv'];
        $ID_loai_cong_viec = $data['ID_loai'];
        $sql = "UPDATE cong_viec SET Mo_ta = '$Mo_ta', ID_nhan_vien = $ID_nhan_vien, ID_loai_cong_viec = $ID_loai_cong_viec WHERE ID_cv = $id";
        $this->dbc->query($sql);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM cong_viec WHERE ID_cv = $id";
        $this->dbc->query($sql);
    }
    public function insert($data)
    {
        $Mo_ta = $data['Mo_ta'];
        $ID_nhan_vien = $data['ID_nhan_vien'];
        $ID_loai_cong_viec = $data['ID_loai_cong_viec'];
        $sql = "INSERT INTO cong_viec (Mo_ta, ID_nhan_vien, ID_loai_cong_viec) VALUES ('$Mo_ta', $ID_nhan_vien, $ID_loai_cong_viec)";
        $this->dbc->query($sql);
    }
    public function updateTrangThai($chuoi_ID)
    {
        $sql = "UPDATE cong_viec SET Trang_thai = 'Đã hoàn thành' WHERE ID_cv IN ('$chuoi_ID')";
        $this->dbc->query($sql);
    }
}
