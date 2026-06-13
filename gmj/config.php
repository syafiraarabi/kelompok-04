<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "gmj_company";

$conn = mysqli_connect(
    $host,
    $user,
    $pass,
    $db
);

if(!$conn){
    die("Koneksi database gagal");
}

?>