<?php
$servername = "localhost:3309";
$dbusername = "root";
$dbpassword = "";
$dbname     = "lat_dbase";

$con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs (
    mhsID int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(mhsID),
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";

mysqli_query($con, $sql);

$input = mysqli_query($con, "INSERT INTO tbl_mhs(FirstName, LastName, Age) VALUES('Anjar', 'Prabowo', 25)");

if ($input) {
    echo "Tabel berhasil dibuat dan data awal berhasil dimasukkan!";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>