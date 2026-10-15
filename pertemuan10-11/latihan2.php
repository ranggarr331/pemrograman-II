<?php
$servername = "localhost:3309";
$dbusername = "root";
$dbpassword = "";
$dbname     = "lat_dbase";

$link = mysqli_connect($servername, $dbusername,$dbpassword);

if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$cek = mysqli_query($link, "CREATE DATABASE IF NOT EXISTS `$dbname`") or die("Couldn't Create Database: $dbname");

if ($cek) {
    echo "Database $dbname berhasil dibuat atau sudah ada";
}
?>