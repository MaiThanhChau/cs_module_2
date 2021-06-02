<?php
    namespace Controller;
    use Model\nvModel;
    use Model\cvModel;
    use Model\loaiModel;
    class nvController{
        public function list()
        {
            $objnvModel = new nvModel();
            $rows = $objnvModel->getAll();
            include 'View/nv/list.php';
        }
        public function edit()
        {
            $id = $_GET['id'];
            $objnvModel = new nvModel();
            $row = $objnvModel->getOne($id);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if( isset( $_FILES['hinh_anh'] )  ){
                    $tmp_name       = $_FILES['hinh_anh']['tmp_name'];
                    $file_name      = $_FILES['hinh_anh']['name'];
                    /*
                        bi-kip-phong.van-4.jpg
                        logo.png
                        logo.jpgeg
                    */
                    //lấy đuôi của file
                    $duoi           = end( explode('.',$file_name) );
                    /*
                        time(): 123456788765
                    */
                    //tên của file sẽ là 1 dãy số bất kì để k bị trùng
                    $file_name      = time().'.'.$duoi;
                    /*
                        $file_name = 123456788765.jpg
                    */

                    $target_file    = 'public/upload/'.$file_name;
                    move_uploaded_file($tmp_name,$target_file);

                    $data['hinh_anh'] = $target_file;
                }
                $data['ten_nv'] = $_POST['ten_nv'];
                $data['chuc_vu'] = $_POST['chuc_vu'];
                $data['SDT'] = $_POST['SDT'];
                if ($data['ten_nv'] != '' && $data['chuc_vu'] != '') {
                    $objnvModel = new nvModel();
                    $objnvModel->update($data, $id);
                    header("location: index.php?controller=nv&action=list");
                }

            }
            include 'View/nv/edit.php';
        }
        public function delete()
        {
            $id = $_GET['id'];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($_POST['confirm'] == 'Yes') {
                    $objnvModel = new nvModel();
                    $objnvModel->delete($id);
                    header("location: index.php?controller=nv&action=list");
                } else {
                    header("location: index.php?controller=nv&action=list");
                }
            }
            include 'View/nv/delete.php';
        }
        public function add()
        {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if( isset( $_FILES['Hinh_anh'] )  ){
                    $tmp_name       = $_FILES['Hinh_anh']['tmp_name'];
                    $file_name      = $_FILES['Hinh_anh']['name'];
                    /*
                        bi-kip-phong.van-4.jpg
                        logo.png
                        logo.jpgeg
                    */
                    //lấy đuôi của file
                    $duoi           = end( explode('.',$file_name) );
                    /*
                        time(): 123456788765
                    */
                    //tên của file sẽ là 1 dãy số bất kì để k bị trùng
                    $file_name      = time().'.'.$duoi;
                    /*
                        $file_name = 123456788765.jpg
                    */

                    $target_file    = 'public/upload/'.$file_name;
                    move_uploaded_file($tmp_name,$target_file);

                    $data['Hinh_anh'] = $target_file;
                }
                $data['ten_nv'] = $_POST['ten_nv'];
                $data['chuc_vu'] = $_POST['chuc_vu'];
                $data['SDT'] = $_POST['SDT'];
                if ($data['ten_nv'] != '' && $data['chuc_vu'] != '') {
                    $objnvModel = new nvModel();
                    $objnvModel->insert($data);
                    header("location: index.php?controller=cv&action=list");
                } else {
                    header("location: index.php?controller=cv&action=list");
                }
            }
            include 'View/nv/add.php';
        }
        public function view()
        {
            $ID_nv = $_GET['ID_nv'];

            $objnvModel = new nvModel();
            $rowNVs = $objnvModel->getAll();

            $rowNV = $objnvModel->getOne($ID_nv);

            $objcvModel = new cvModel();
            $rows = $objcvModel->getbyID_nv($ID_nv);


            include 'View/nv/view.php';
        }
    }
?>