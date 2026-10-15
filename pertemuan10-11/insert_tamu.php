<?php
$con = mysqli_connect("localhost:3309", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($con, "lat_dbase");

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$komentar = $_POST['komentar'];

$sql = "INSERT INTO buku_tamu (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";

if (mysqli_query($con, $sql)) {
    echo "<h3>Terima kasih, buku tamu berhasil disimpan!</h3>";
    echo "<a href='http://localhost:8123/pemrograman_php/pertemuan10-11/form_tamu.html'>Kembali ke Form</a> | ";
    echo "<a href='http://localhost:8123/pemrograman_php/pertemuan10-11/tampil_tamu.php'>Lihat Buku Tamu</a>";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>