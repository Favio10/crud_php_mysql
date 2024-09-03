<?php
function connection() {
    $host = "localhost";
    $user = "root";
    $pass = 123456;

    $bd = "users_crud_php";

    $connect = mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;
}
?>