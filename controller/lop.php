<?php


switch ($_GET['action'] ?? '') {
    case '':
        require 'model/lop.php';
        require 'view/lop/index.php';
        break;
    case 'create':
        require 'view/lop/create.php';
        break;
    case 'store':
        $ten = $_POST['ten'] ?? '';
        require 'model/lop.php';
        header('Location: ?controller=lop');
        break;
    case 'edit':
        $ma = $_GET['ma'] ?? '';
        require 'model/lop.php';
        require 'view/lop/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'] ?? '';
        $ten = $_POST['ten'] ?? '';
        require 'model/lop.php';
        header('Location:?controller=lop');
        break;
    case 'delete':
        $ma = $_GET['ma'] ?? '';
        require 'model/lop.php';
        header('Location:?controller=lop');
        break;
    default:
        echo "Action not found";
        break;
}
