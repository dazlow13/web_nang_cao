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

function lop_index(){
    $connect = connect();
    $sql = "SELECT * FROM lop";
    $result = mysqli_query($connect, $sql);
    disconnect($connect);
    return $result;
}

function lop_store($ten){
    $connect = connect();
    $sql = "INSERT INTO lop (ten) VALUES ('$ten')";
    mysqli_query($connect, $sql);
    disconnect($connect);
}

function lop_edit($ma) {
    $connect = connect();
     $sql = "SELECT * FROM lop WHERE ma = '$ma'";
        $result = mysqli_query($connect, $sql );
        $each = mysqli_fetch_array($result);
    disconnect($connect);
    return $each;
}

function lop_update($ma, $ten) {
    $connect = connect();
    $sql = "UPDATE lop SET ten = '$ten' WHERE ma = '$ma'";
    mysqli_query($connect, $sql);
    disconnect($connect);
}

function lop_delete($ma) {
    $connect = connect();
    $sql = "DELETE FROM lop WHERE ma = '$ma'";
    mysqli_query($connect, $sql);
    disconnect($connect);
}