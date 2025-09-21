<?php


$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: " . $hasilTambah . "<br>";
echo "Hasil Kurang: " . $hasilKurang . "<br>";
echo "Hasil Kali: " . $hasilKali . "<br>";
echo "Hasil Bagi: " . $hasilBagi . "<br>";
echo "Sisa Bagi: " . $sisaBagi . "<br>";
echo "Pangkat: " . $pangkat . "<br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr  = $s || $b;
$hasilNOTA = !$a;
$hasilNOTB = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

?>