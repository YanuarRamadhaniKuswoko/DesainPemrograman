<?php
$host = 'localhost';
$port = '5432';
$dbname = 'phpdatabase';
$user = 'postgres';
$pass = '123456';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}

pg_set_client_encoding($conn, 'UTF8');

$sql = "SELECT
\"NIM\" AS \"Nim\",
\"Nama\" AS \"Nama\",
\"Email\" AS \"Email\",
\"Jurusan\" AS \"Jurusan\"
FROM public.\"TB_Mahasiswa\"
ORDER BY \"Nim\";";

$result = pg_query($conn, $sql);
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}

$nomor_urut = 1;
?>
