<?php
    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    } else {
        $controller = 'admin';
    }
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'login';
    }

    
    if ($action != 'login') {
        include 'layout/header.php';
        include 'layout/menu.php';
        include 'layout/footer.php';  
    } 
    include 'router.php';
