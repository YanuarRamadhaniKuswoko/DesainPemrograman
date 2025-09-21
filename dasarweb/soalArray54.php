<?php

$nilaiSiswaMatematika = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90,
];

$totalNilai = array_sum($nilaiSiswaMatematika);
$jumlahSiswa = count($nilaiSiswaMatematika);
$rataRataKelas = $totalNilai / $jumlahSiswa;

echo "<br>Rata-rata kelas: " . number_format($rataRataKelas, 2) . "<br><br>";
echo "Daftar siswa dengan nilai di atas rata-rata kelas:<br>";

foreach ($nilaiSiswaMatematika as $nama => $nilai) {
    if ($nilai > $rataRataKelas) {
        echo "Nama: {$nama}, Nilai: {$nilai}<br>";
    }
}
?>