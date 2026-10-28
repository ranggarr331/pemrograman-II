<?php
$conn = mysqli_connect("localhost", "root", "", "calon_mhs");

if (!$conn) {
  die("koneksi gagal: " . mysqli_connect_error());
}
?>
