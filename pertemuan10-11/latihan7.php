<?php
// Koneksi ke server MySQL dengan port 3309
$con = mysqli_connect("localhost:3309", "root", "");

// Memilih database lat_dbase
mysqli_select_db($con, "lat_dbase");

// Menjalankan query untuk mengambil data dari tabel
$hasil = mysqli_query($con, "select * from tbl_mhs");

// Menghitung jumlah record
$hit = mysqli_num_rows($hasil);

echo "jumlah record $hit";

// Menutup koneksi database
mysqli_close($con);
?>