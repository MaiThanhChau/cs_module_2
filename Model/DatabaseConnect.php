<?php
namespace Model;
use PDO;
 class DatabaseConnect {
     protected $dbc = null;

     public function __construct() {
        $username = 'root'; //tên đăng nhập CSDL
        $password = ''; // mật khẩu
        $options  = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $this->dbc = new PDO('mysql:host=localhost;dbname=phan_cong_cong_viec', $username, $password,$options);
    }
 }
?>