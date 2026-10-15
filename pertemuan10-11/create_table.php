<?php
$con = mysqli_connect("localhost:3309", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($con, "lat_dbase");

$sql = "CREATE TABLE IF NOT EXISTS buku_tamu (
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id),
    nama VARCHAR(50),
    email VARCHAR(50),
    komentar TEXT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($con, $sql)) {
    echo "Tabel buku_tamu berhasil dibuat!";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>