<?php
function connect() {
$connect = mysqli_connect('localhost', 'root', '', 'j2school', 3307);
mysqli_set_charset($connect, 'utf8');
return $connect;
}
function disconnect($connect) {
    if ($connect) {
        mysqli_close($connect);
    }
}
