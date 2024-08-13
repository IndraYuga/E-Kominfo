<!-- <?php

session_start();
include 'koneksi.php';

$username = $_POST['nama'];
$password = $_POST['password'];

// Query untuk mencari admin dengan username dan password yang cocok di tabel admin
$query_user = "SELECT * FROM tb_user WHERE nama='$username' AND password='$password'";
$result_user = mysqli_query($koneksi, $query_user);

// Jika ditemukan, maka login
if (mysqli_num_rows($result_user) == 1) {
    $_SESSION['nama'] = $username;
    header('location: ../index.php');
}
else {
        // Jika tidak ditemukan user dengan username dan password yang cocok, kembali ke halaman login
        header('location: ../daftar.php?status=gagal');
    }

 ?>
 -->

 <?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $password = $_POST['password'];

  // Query database untuk memeriksa apakah pengguna/admin dengan nama dan password yang sesuai ada dalam database
  $query = "SELECT * FROM tb_user WHERE nama = '$nama' AND password = '$password'";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nama'] = $row['nama'];
    
    // Jika user adalah admin
    if ($row['role'] == 'admin') {
      $_SESSION['admin'] = true;
      header("Location: ../admin_index.php");
    } else {
      header("Location: ../index.php");
    }
  } else {
    // Jika username atau password salah, tampilkan pesan error
    $error = "Username atau password salah.";
  }
}
?>
