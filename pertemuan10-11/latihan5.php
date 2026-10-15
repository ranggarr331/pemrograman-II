<?php
// Koneksi ke server MySQL dengan port 3309
$con = mysqli_connect("localhost:3309", "root", "");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Memilih database lat_dbase (menggantikan fungsi lama mysql_db_query)
mysqli_select_db($con, "lat_dbase");

// Menjalankan query untuk mengambil data dari tabel tbl_mhs
$hasil = mysqli_query($con, "select * from tbl_mhs");

// Mengambil dan menampilkan data baris per baris
while ($data = mysqli_fetch_row($hasil)) {
    echo "$data[0] $data[1] $data[2]<br>";
}

// Menutup koneksi database
mysqli_close($con);
?>