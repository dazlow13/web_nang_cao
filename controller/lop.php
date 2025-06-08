<?php


switch ($_GET['action'] ?? '') {
    case '':
        require 'model/lop.php';
        $result = lop_index();
        require 'view/lop/index.php';  
        break;
    case 'create':
        require 'view/lop/create.php';
        break;
    case 'store':
        $ten = $_POST['ten'] ?? '';
        require 'model/lop.php';
        lop_store($ten);
        header('Location: ?controller=lop');
        break;
    case 'edit':
        $ma = $_GET['ma'] ?? '';
        require 'model/lop.php';
        $each = lop_edit($ma);
        require 'view/lop/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'] ?? '';
        $ten = $_POST['ten'] ?? '';
        require 'model/lop.php';
        lop_update($ma, $ten);
        header('Location:?controller=lop');
        break;
    case 'delete':
        $ma = $_GET['ma'] ?? '';
        require 'model/lop.php';
        lop_delete($ma);
        header('Location:?controller=lop');
        break;
    default:
        echo "Action not found";
        break;
}
