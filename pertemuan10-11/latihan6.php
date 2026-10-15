<?php
// Koneksi ke server MySQL dengan port 3309
$con = mysqli_connect("localhost:3309", "root", "");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Memilih database lat_dbase
mysqli_select_db($con, "lat_dbase");

// Menjalankan query untuk mengambil data dari tabel tbl_mhs
$hasil = mysqli_query($con, "select * from tbl_mhs");

// Mengambil data dengan asosiasi nama kolom menggunakan mysqli_fetch_assoc
while ($data = mysqli_fetch_assoc($hasil)) {
    echo "{$data['FirstName']} {$data['LastName']} {$data['Age']}<br>";
}

// Menutup koneksi database
mysqli_close($con);
?>