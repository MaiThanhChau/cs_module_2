<?php

namespace Controller;

use Model\cvModel;
use Model\nvModel;
use Model\loaiModel;

class cvController
{
    public function list()
    {
        $objnvModel = new nvModel();
        $rowNVs = $objnvModel->getAll();

        //phân trang
        $objcvModel = new cvModel();

        if (isset($_GET['page'])) {
            $current_page = $_GET['page'];
        } else {
            $current_page = 1;
        }
        $total_record = $objcvModel->getTotalRecord();
        $limit = 5;
        $total_page = ceil($total_record->total / $limit);
        $start = ($current_page - 1) * $limit;
        $rowCVs = $objcvModel->getbyLimit($start, $limit);

        include 'View/cv/list.php';
    }
    public function listAll()
    {
        $objcvModel = new cvModel();
        $rowCVs = $objcvModel->getAllbyTrangthai();

        $tongsoCV = $objcvModel->tongsoCV();

        $CVdahoanthanh = $objcvModel->CVdahoanthanh();

        $CVchuahoanthanh = $objcvModel->CVchuahoanthanh();


        include 'View/cv/listAll.php';
    }
    public function view()
    {

        $id = $_GET['id'];
        $objcvModel = new cvModel();
        $row = $objcvModel->getOne($id);

        $objloaiModel = new loaiModel();
        $rowLOAIs = $objloaiModel->getAll();
        include 'View/cv/view.php';
    }
    public function edit()
    {
        $id = $_GET['id'];

        $objcvModel = new cvModel();
        $rowCV = $objcvModel->getOne($id);

        $objnvModel = new nvModel();
        $rowNVs = $objnvModel->getAll();

        $objloaiModel = new loaiModel();
        $rowLOAIs = $objloaiModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data['Mo_ta'] = $_POST['Mo_ta'];
            $data['ID_nv'] = $_POST['ID_nv'];
            $data['ID_loai'] = $_POST['ID_loai'];
            if ($data['Mo_ta'] != '') {
                $objcvModel = new cvModel();
                $objcvModel->update($data, $id);
                header("location: index.php?controller=cv&action=list");
            }
        }
        include 'View/cv/edit.php';
    }
    public function delete()
    {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['confirm'] == 'Yes') {
                $objcvModel = new cvModel();
                $objcvModel->delete($id);
                //chuyển hướng về trang danh sách
                header("location: index.php?controller=cv&action=list");
            } else {
                header("location: index.php?controller=cv&action=list");
            }
        }

        include 'View/cv/delete.php';
    }
    public function add()
    {
        $objnvModel = new nvModel();
        $rowNVs = $objnvModel->getAll();

        $objloaiModel = new loaiModel();
        $rowLOAIs = $objloaiModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data['Mo_ta'] = $_POST['Mo_ta'];
            $data['ID_nhan_vien'] = $_POST['ID_nv'];
            $data['ID_loai_cong_viec'] = $_POST['ID_loai'];
            if ($data['Mo_ta'] != '' && $data['ID_nhan_vien'] != 0 && $data['ID_loai_cong_viec'] != 0) {
                $objcvModel = new cvModel();
                $objcvModel->insert($data);
                header("location: index.php?controller=cv&action=list");
            }
        }
        include 'View/cv/add.php';
    }
    public function checked()
    {

        //khi có CV được hoàn thành
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (count($_POST) > 0) {
                //chuyển ID từ keys sang values trong mảng
                $mang_ID = array_keys($_POST);

                //chuyển các ID trong mảng thành chuỗi
                $chuoi_ID = implode(',', $mang_ID);

                $objcvModel = new cvModel();
                $objcvModel->updateTrangThai($chuoi_ID);
                header("location: index.php?controller=cv&action=list");
            } else {
                header("location: index.php?controller=cv&action=list");
            }
        }
    }
    public function search()
    {

        $objnvModel = new nvModel();
        $rowNVs = $objnvModel->getAll();
        $loi = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Loai_cv = $_POST['search'];
            $objcvModel = new cvModel();
            $rowLoaiCVs = $objcvModel->getbyLoaicv($Loai_cv);
            if ($rowLoaiCVs) {
                include 'View/cv/search.php';
            } else {
                $loi = 'Nhập đúng loại công việc!';
                include 'View/cv/search.php';
            }
        }
    }
}
