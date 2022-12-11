<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pwp2";

$cond = mysqli_connect($host,$user,$pass,$db);

if (!$con) {
    die("Koneksi Gagal:".mysqli_connect_error());
}
?>