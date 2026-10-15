<?php
$con = mysqli_connect("localhost:3309", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($con, "lat_dbase");

// 1. Tentukan jumlah record per halaman
$limit = 5;

// 2. Tentukan halaman aktif dari parameter URL (default halaman 1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page > 1) ? ($page * $limit) - $limit : 0;

// 3. Ambil data dengan pembatasan LIMIT dan OFFSET
$hasil = mysqli_query($con, "SELECT * FROM buku_tamu LIMIT $start, $limit");

// 4. Hitung total seluruh record untuk menentukan jumlah halaman
$query_total = mysqli_query($con, "SELECT COUNT(*) AS total FROM buku_tamu");
$row_total = mysqli_fetch_assoc($query_total);
$total_records = $row_total['total'];
$total_pages = ceil($total_records / $limit);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku Tamu</title>
</head>
<body>
    <h2>Daftar Buku Tamu (5 Record per Halaman)</h2>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>
        <?php 
        $no = $start + 1;
        while ($data = mysqli_fetch_assoc($hasil)) { 
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['komentar']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <br>

    <!-- Navigasi Paginasi Halaman -->
    <div>
        <strong>Halaman: </strong>
        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
            <?php if ($i == $page) { ?>
                <span>[<?php echo $i; ?>]</span>
            <?php } else { ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php } ?>
        <?php } ?>
    </div>
    
    <br>
    <a href="http://localhost:8123/pemrograman_php/pertemuan10-11/form_tamu.html">Isi Buku Tamu Lagi</a>
</body>
</html>

<?php
mysqli_close($con);
?>