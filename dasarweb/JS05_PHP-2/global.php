<?php
$nama = @$_GET['nama']; 
$usia = @$_GET['usia'];
// Menggunakan interpolasi sederhana tanpa kurung kurawal
echo "Halo $nama! Apakah benar anda berusia $usia tahun?"; 
?>