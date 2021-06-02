<?php
    namespace Model;
    include_once 'model/DatabaseConnect.php';
    use PDO;
    use Model\DatabaseConnect;
    class nvModel extends DatabaseConnect {
        public function getAll()
        {
            $sql = "SELECT * FROM nhan_vien";
            $stmt = $this->dbc->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $rows = $stmt->fetchall();
            return $rows;
        }
        public function getOne($id)
        {
            $sql = "SELECT * FROM nhan_vien WHERE ID_nv = $id";
            $stmt = $this->dbc->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $row = $stmt->fetch();
            return $row;
        }
        public function update($data,$id)
        {
            $Ten_nv = $data['ten_nv'];
            $Chuc_vu = $data['chuc_vu'];
            $SDT = $data['SDT'];
            $Hinh_anh = $data['hinh_anh'];
            $sql = "UPDATE nhan_vien SET Ten_nv = '$Ten_nv', Chuc_vu = '$Chuc_vu', SDT = '$SDT', Hinh_anh = '$Hinh_anh' WHERE ID_nv = $id";
            $this->dbc->query($sql);
        }
        public function delete($id)
        {
            $sql = "DELETE FROM nhan_vien WHERE ID_nv = $id";
            $this->dbc->query($sql);
        }
        public function insert($data)
        {
            $Hinh_anh = $data['Hinh_anh'];
            $Ten_nv = $data['ten_nv'];
            $Chuc_vu = $data['chuc_vu'];
            $SDT = $data['SDT'];
            $sql = "INSERT INTO nhan_vien (Ten_nv, Chuc_vu, SDT, Hinh_anh) VALUES ('$Ten_nv', '$Chuc_vu', '$SDT', '$Hinh_anh')";
            $this->dbc->query($sql);
        }
    }
?>