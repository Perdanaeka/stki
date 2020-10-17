<?php
//include 'index.php';

$host  = "localhost";
$username  = "root";
$password  = "root";
$database  = "stki";
$koneksi  = mysqli_connect($host,  $username,  '', $database);
$pilihdatabase  = mysqli_select_db($koneksi, "stki");
if  ($pilihdatabase) echo "<h3>Koneksi Berhasil </h3><hr><br/>";
else echo "Koneksi Gagal <br/>";
?>