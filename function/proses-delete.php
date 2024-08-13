<?php
// Include file koneksi
include "koneksi.php";

// Cek apakah parameter id_pelatihan sudah diterima
if (isset($_GET['id_pelatihan'])) {
  $id_pelatihan = $_GET['id_pelatihan'];

  // Query untuk mendapatkan data barang berdasarkan id_pelatihan
  $sql = "SELECT gambar FROM tb_pelatihan WHERE id_pelatihan = $id_pelatihan";
  $result = $koneksi->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $gambar = $row['gambar'];

    // Hapus gambar dari folder uploads
    if (file_exists("gambar/" . $gambar)) {
      unlink("gambar/" . $gambar);
    }

    // Query untuk menghapus data barang dari database
    $sql = "
      SET FOREIGN_KEY_CHECKS=0;
      UPDATE tb_user SET id_pelatihan = NULL WHERE id_pelatihan = $id_pelatihan;
      DELETE FROM tb_pelatihan WHERE id_pelatihan = $id_pelatihan;
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
