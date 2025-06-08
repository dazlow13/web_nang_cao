<?php
require_once 'connect.php'; // Include your database connection

function sinh_vien_index() {
    $connect = connect();
    $sql = "SELECT sinh_vien.*, lop.ten AS ten_lop 
            FROM sinh_vien 
            LEFT JOIN lop ON sinh_vien.ma_lop = lop.ma";
    $result = mysqli_query($connect, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function sinh_vien_store($ten, $ma_lop) {
    $connect = connect();
    $sql = "INSERT INTO sinh_vien (ten, ma_lop) VALUES ('$ten', '$ma_lop')";
    mysqli_query($connect, $sql);
    disconnect($connect);
}
function sinh_vien_edit($ma) {
    $connect = connect();
    $sql = "SELECT * FROM sinh_vien WHERE ma = '$ma'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    disconnect($connect);
    return $each;
}
function sinh_vien_update($ma, $ten, $ma_lop) {
    $connect = connect();
    $sql = "UPDATE sinh_vien SET ten = '$ten', ma_lop = '$ma_lop' WHERE ma = '$ma'";
    mysqli_query($connect, $sql);
    disconnect($connect);
}
function sinh_vien_delete($ma) {
    $connect = connect();
    $sql = "DELETE FROM sinh_vien WHERE ma = '$ma'";
    mysqli_query($connect, $sql);
    disconnect($connect);
}