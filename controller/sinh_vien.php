<?php

switch ($_GET['action'] ?? '') {
    case '':
        require 'model/sinh_vien.php';
        require 'view/sinh_vien/index.php';
        break;
    case 'create':
        require 'model/sinh_vien.php';
        require 'model/lop.php';
        $options_lops = render_options_lop($_POST['ma_lop'] ?? '');
        require 'view/sinh_vien/create.php';
        break;
    case 'store':
        $ten = $_POST['ten'] ?? '';
        $ma_lop = $_POST['ma_lop'] ?? '';
        require 'model/sinh_vien.php';
        header('Location: ?controller=sinh_vien');
        break;
    case 'edit':
        $ma = $_GET['ma'] ?? '';
        require 'model/sinh_vien.php';
        require 'view/sinh_vien/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'] ?? '';
        $ten = $_POST['ten'] ?? '';
        require 'model/sinh_vien.php';
        header('Location:?controller=sinh_vien');
        break;
    case 'delete':
        $ma = $_GET['ma'] ?? '';
        require 'model/sinh_vien.php';
        header('Location:?controller=sinh_vien');
        break;
    default:
        echo "Action not found";
        break;
}
