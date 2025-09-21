<?php
// Bagian 1: Deklarasi Variabel
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";

echo "<br>"; // Baris baru agar output tidak menyatu

// Bagian 2: Deklarasi Boolean
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";

echo "<br>"; // Baris baru

// Bagian 3: Deklarasi Konstanta
// Mendefinisikan konstanta, nilainya tidak dapat diubah
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>