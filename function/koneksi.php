<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_pelatihan";

$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi database
if (!$koneksi) {
  die("Koneksi database gagal: " . mysqli_connect_error());
}
?>