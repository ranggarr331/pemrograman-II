<?php
// Menggunakan port 3309 sesuai konfigurasi MySQL Anda
$con = mysqli_connect("localhost:3309", "root", "");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Memilih database lat_dbase
mysqli_select_db($con, "lat_dbase");

// Mengambil data langsung dari $_POST sesuai logika gambar Anda
$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age) 
        VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]')";

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

echo "1 record added";

mysqli_close($con);
?>