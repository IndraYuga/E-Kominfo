<?php
// Include file koneksi
include "koneksi.php";

// Cek apakah parameter id_pelatihan sudah diterima
if (isset($_GET['id_user'])) {
  $id_user = $_GET['id_user'];

  // Query untuk mendapatkan data barang berdasarkan id_user
  $sql = "SELECT foto FROM tb_user WHERE id_user = $id_user";
  $result = $koneksi->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $foto = $row['foto'];

    // Hapus foto dari folder uploads
    if (file_exists("foto/" . $foto)) {
      unlink("foto/" . $foto);
    }

    // Query untuk menghapus data barang dari database
    $sql = "
      SET FOREIGN_KEY_CHECKS=0;
      DELETE FROM tb_user WHERE id_user = $id_user;
    ";

    if (mysqli_multi_query($koneksi, $sql) === TRUE) {
      echo "Data barang berhasil dihapus.";
      header('location: ../admin_index.php');
    } else {
      echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
  } else {
    echo "Data barang tidak ditemukan.";
    
  }
} else {
  echo "ID barang tidak ditemukan.";
}

// Tutup koneksi
$koneksi->close();
?>
