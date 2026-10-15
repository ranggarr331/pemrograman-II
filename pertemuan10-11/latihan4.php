<?php
// Menggunakan port 3309 sesuai konfigurasi MySQL Anda
$con = mysqli_connect("localhost:3309", "root", "");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Memilih database lat_dbase
mysqli_select_db($con, "lat_dbase");

// Memasukkan data pertama (Karina)
mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Karina', 'Suwandi', '29')");

// Memasukkan data kedua (Glenn)
mysqli_query($con, "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES ('Glenn', 'Gandari', '32')");

mysqli_close($con);
?>