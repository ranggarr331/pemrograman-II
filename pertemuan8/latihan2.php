<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>

<!-- Menentukan Form Input -->
<form method="post">
    Masukkan Bilangan Pertama : <br>
    <input type="text" name="A" size="10"> <br>
    Masukkan Bilangan Kedua : <br>
    <input type="text" name="B" size="10"> <br>
    <input type="submit" value="hitung">
</form>

<!-- membandingkan 2 buah bilangan yang diinput -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["A"];
    $b = $_POST["B"];

    function jumlah($A, $B) {
        $jumlahbil = $A + $B;
        return $jumlahbil;
    }

    function kurang($A, $B) {
        $kurangbil = $A - $B;
        return $kurangbil;
    }

    function kali($A, $B) {
        $kalibil = $A * $B;
        return $kalibil;
    }

    function bagi($A, $B) {
        $bagibil = $A / $B;
        return $bagibil;
    }

    echo "<br>";
    echo "Bilangan Pertama : ";
    echo $a;
    echo "<br>";
    echo "Bilangan Kedua : ";
    echo $b;
    echo "<br><br>";

    echo "Hasil Penjumlahan 2 buah bilangan ";
    echo "<br>";
    $jumlahbil = jumlah($a, $b);
    printf("Penjumlahan antara : %d + %d = %d", $a, $b, $jumlahbil);
    echo "<br><br>";

    echo "Hasil Pengurangan 2 buah bilangan ";
    echo "<br>";
    $kurangbil = kurang($a, $b);
    printf("Pengurangan antara : %d - %d = %d ", $a, $b, $kurangbil);
    echo "<br><br>";

    echo "Hasil Perkalian 2 buah bilangan ";
    echo "<br>";
    $kalibil = kali($a, $b);
    printf("Perkalian antara : %d * %d = %d ", $a, $b, $kalibil);
    echo "<br><br>";

    echo "Hasil Pembagian 2 buah bilangan ";
    echo "<br>";
    $bagibil = bagi($a, $b);
    printf("Pembagian antara : %d / %d = %d ", $a, $b, $bagibil);
    echo "<br><br>";
}
?>

</body>
</html>

<?php
function repeat($text, $num = 10)
{
    echo "<ol>\r\n";
    for ($i = 0; $i < $num; $i++) {
        echo "<li>$text </li>\r\n";
    }
    echo "</ol>";
}

// Contoh pemanggilan fungsi:
// repeat("Teks yang diulang", 5);
?>