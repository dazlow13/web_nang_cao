<?php
require_once 'connect.php'; // Include your database connection

$connect = connect(); // Establish the connection
switch ($_GET['action'] ?? '') {
    case '':
        $sql = "SELECT sinh_vien.*, lop.ten AS ten_lop FROM sinh_vien
                LEFT JOIN lop ON sinh_vien.ma_lop = lop.ma";
        $result = mysqli_query($connect, $sql);
        break;
    case 'store':
        $sql = "INSERT INTO sinh_vien (ten) VALUES ('" . $_POST['ten'] . "')";
        $ma_lop = $_POST['ma_lop'] ?? '';
        if ($ma_lop) {
            $sql = "INSERT INTO sinh_vien (ten, ma_lop) VALUES ('" . $_POST['ten'] . "', '$ma_lop')";
        } else {
            $sql = "INSERT INTO sinh_vien (ten) VALUES ('" . $_POST['ten'] . "')";
        }
        mysqli_query($connect, $sql);
        break;
    case 'edit':
        $sql = "SELECT * FROM sinh_vien WHERE ma = '" . $_GET['ma'] . "'";
        $ma = $_GET['ma'] ?? '';
        $result = mysqli_query($connect, $sql );
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $ma = $_POST['ma'] ?? '';
        $ten = $_POST['ten'] ?? '';
        $sql = "UPDATE sinh_vien SET ten = '$ten' WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        break;
    case 'delete':
        $ma = $_GET['ma'] ?? '';
        $sql = "DELETE FROM sinh_vien WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        break;
    
}


