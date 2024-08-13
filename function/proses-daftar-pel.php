

<?php

include 'koneksi.php';
session_start();

// cek apakah user sudah login atau belum
$namaUser = $_SESSION['nama'];

$query = "SELECT * FROM tb_user WHERE nama = '$namaUser' LIMIT 1";
$result = mysqli_query($koneksi, $query);                                                                                     
                                                                                        // Ambil data admin
$user = mysqli_fetch_assoc($result);                                                                        
                                                                                        // Cek apakah data admin ditemukan
if (!$user) {
  die("Admin tidak ditemukan!");
}

// var_dump($user);
// return;

// Cek apakah data barang sudah disubmit dari form edit
if (isset($_POST['submit'])) {
  // Ambil data barang yang diinput dari form edit
  $id_user = $_POST['id_user'];
  $namaLengkap = $_POST['nama_lengkap'];
  $email = $_POST['email'];
  $id_pelatihan = $_POST['id_pelatihan'];

  // Include file koneksi
  include "koneksi.php";
    // Update data barang tanpa mengganti foto
    $sql = "
    SET FOREIGN_KEY_CHECKS=0;
    UPDATE tb_user SET nama_lengkap='$namaLengkap', email='$email', id_pelatihan='$id_pelatihan'  WHERE id_user = $id_user;
    
    ";

    if (mysqli_multi_query($koneksi, $sql) === TRUE) {
      header('location: ../courses.php');
    } else {
      echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

  // Tutup koneksi
  $koneksi->close();
}
?>