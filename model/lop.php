<?php

require_once 'model/connect.php';
function lop_get_all(){
    $connect = connect();
    $sql = "SELECT * FROM lop";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    disconnect($connect);
    return $data;  
}
function render_options_lop($selected = '') {
    $lops = lop_get_all();
    $options = '';
    foreach ($lops as $lop) {
        $isSelected = ($lop['ma'] == $selected) ? 'selected' : '';
        $options .= "<option value='{$lop['ma']}' $isSelected>{$lop['ten']}</option>";
    } 
    return $options;
}

switch ($_GET['action'] ?? '') {
    case '':
        $sql = "SELECT * FROM lop";
        $result = mysqli_query($connect, $sql);
        break;
    case 'store':
        $sql = "INSERT INTO lop (ten) VALUES ('" . $_POST['ten'] . "')";
        mysqli_query($connect, $sql);
        break;
    case 'edit':
        $sql = "SELECT * FROM lop WHERE ma = '$ma'";
        $result = mysqli_query($connect, $sql );
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $ma = $_POST['ma'] ?? '';
        $ten = $_POST['ten'] ?? '';
        $sql = "UPDATE lop SET ten = '$ten' WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        break;
    case 'delete':
        $ma = $_GET['ma'] ?? '';
        $sql = "DELETE FROM lop WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        break;
}


