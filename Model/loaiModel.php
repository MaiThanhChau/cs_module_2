<?php
    namespace Model;
    use PDO;
    use Model\DatabaseConnect;
    class loaiModel extends DatabaseConnect{
        public function getAll()
        {
            $sql = "SELECT * FROM loai_cv";
            $stmt = $this->dbc->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $rows = $stmt->fetchall();
            return $rows;
        }
    }
?>