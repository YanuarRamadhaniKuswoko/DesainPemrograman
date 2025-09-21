<?php

$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}

$hargaAkhir = $hargaProduk - $diskon;

echo "<br>";
echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon yang didapat: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($hargaAkhir, 0, ',', '.');
?>