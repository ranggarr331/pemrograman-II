
<?php

/****************************************************
 * Halaman logout.
 * Halaman ini digunakan untuk menghapus session
 * yang telah dibuat ketika pengguna login.
 *****************************************************/

session_start();

// Pemeriksaan session
if (isset($_SESSION['login'])) {

    // Menghapus semua data session
    $_SESSION = array();

    // Menghancurkan session
    session_destroy();

    // Menampilkan pesan berhasil logout
    echo "<h1>Anda sudah berhasil LOGOUT</h1>";

    echo "<h2>
            Klik <a href='session1.php'>di sini</a>
            untuk LOGIN kembali.
          </h2>";

    echo "<h2>
            Anda sekarang tidak bisa masuk ke halaman
            <a href='session2.php'>session2.php</a> lagi.
          </h2>";

} else {

    echo "Anda belum login.";

}

?>
