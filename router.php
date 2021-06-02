<?php
    session_start();
    include_once 'Controller/cvController.php';
    include_once 'Controller/nvController.php';
    include_once 'Controller/adminController.php';
    include_once 'Model/DatabaseConnect.php';
    include_once 'Model/cvModel.php';
    include_once 'Model/nvModel.php';
    include_once 'Model/loaiModel.php';
    include_once 'Model/adminModel.php';

    use Controller\cvController;
    use Controller\nvController;
    use Controller\loaiController;
    use Controller\adminController;
    switch ($controller) {
        case 'cv':
            $objController = new cvController();
            break;
        case 'loai':
            $objController = new loaiController();
            break;
        case 'nv':
            $objController = new nvController();
            break;
        case 'admin':
            $objController = new adminController();
            break;
        default:
            $objController = new cvController();
            break;
    }
    switch ($action) {
        case 'list':
            $objController->list();
            break;
        case 'add':
            $objController->add();
            break;
        case 'edit':
            $objController->edit();
            break;
        case 'delete':
            $objController->delete();
            break;
        case 'view':
            $objController->view();
            break;
        case 'checked':
            $objController->checked();
            break;
        case 'listAll':
            $objController->listAll();
            break;
        case 'search':
            $objController->search();
            break;
        case 'login':
            $objController->login();
            break;
        case 'logout':
            $objController->logout();
            break;
        default:
            $objController->list();
            break;
    }
?>