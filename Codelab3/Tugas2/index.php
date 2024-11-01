<?php
// Fungsi untuk mencetak segitiga sama sisi menghadap ke atas
function segitigaSamaSisiAtas($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Mencetak spasi untuk meratakan segitiga
        for ($j = $n; $j > $i; $j--) {
            echo "&nbsp;"; // Spasi kosong
        }
        // Mencetak bintang
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*"; // Bintang
        }
        echo "<br>"; // Baris baru
    }
}

// Fungsi untuk mencetak segitiga sama sisi menghadap ke bawah
function segitigaSamaSisiBawah($n) {
    for ($i = $n; $i >= 1; $i--) {
        // Mencetak spasi untuk meratakan segitiga
        for ($j = $n; $j > $i; $j--) {
            echo "&nbsp;"; // Spasi kosong
        }
        // Mencetak bintang
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*"; // Bintang
        }
        echo "<br>"; // Baris baru
    }
}

// Jumlah baris segitiga
$jumlahBaris = 5;

// Output segitiga sama sisi menghadap ke atas
echo "Segitiga Sama Sisi Menghadap ke Atas:<br>";
segitigaSamaSisiAtas($jumlahBaris);
echo "<br>";

// Output segitiga sama sisi menghadap ke bawah
echo "Segitiga Sama Sisi Menghadap ke Bawah:<br>";
segitigaSamaSisiBawah($jumlahBaris);
?>
