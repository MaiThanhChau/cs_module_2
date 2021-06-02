<?php

namespace Controller;

use Model\adminModel;

class adminController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Ten_dang_nhap = $_POST['Ten_dang_nhap'];
            $Mat_khau = $_POST['Mat_khau'];

            $objadminModel = new adminModel();
            $check = $objadminModel->checkLogin($Ten_dang_nhap, $Mat_khau);

            if ($check) {
                $_SESSION['admin'] = $check;
                unset($_SESSION['loi']);
                header("location: index.php?controller=cv&action=list&page=1");
            } else {
                $_SESSION['loi'] = "Đăng nhập không thành công";
            }
        }
        include 'View/admin/login.php';
    }
    public function logout()
    {
        unset($_SESSION['admin']);
        $_SESSION['thanh_cong'] = 'Đăng xuất thành công';
        header('location: index.php?controller=admin&action=login');
    }
}
