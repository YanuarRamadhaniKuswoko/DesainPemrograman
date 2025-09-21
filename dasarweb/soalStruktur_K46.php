<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

array_splice($nilaiSiswa, 0, 2);

array_splice($nilaiSiswa, -2, 2);

$totalNilai = array_sum($nilaiSiswa);
$jumlahSiswa = count($nilaiSiswa);

echo "<br>";
echo "Nilai siswa yang tersisa: " . implode(', ', $nilaiSiswa) . "<br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai <br>";
echo "Jumlah siswa yang tersisa: $jumlahSiswa <br>";

if ($jumlahSiswa > 0) {
    $rataRata = $totalNilai / $jumlahSiswa;
    echo "Nilai rata-rata yang digunakan: " . number_format($rataRata, 2);
}
?>