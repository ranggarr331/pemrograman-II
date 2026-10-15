<?php
// hostname beserta port 3309
$servername = 'localhost:3309';
$dbusername = 'root';
$dbpassword = '';

$link = mysqli_connect($servername, $dbusername, $dbpassword);

if (!$link) {
    die("Not able to connect to server: " . mysqli_connect_error());
}

if ($link) {
    echo "ok....koneksi berhasil";
}
?>