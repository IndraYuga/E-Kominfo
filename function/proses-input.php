<?php
// Cek apakah data barang sudah disubmit dari form
if (isset($_POST['submit'])) {
  // Ambil data barang yang diinput dari form
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  $tanggal = $_POST['tanggal'];
  $jam = $_POST['jam'];
  $lokasi = $_POST['lokasi'];
  $pemateri = $_POST['pemateri'];

  // Generate judul file acak
  $gambarName = uniqid() . "_" . $_FILES['gambar']['name'];

  // Lokasi penyimpanan file gambar
  $targetDir = "../img/";
  $targetFile = $targetDir . basename($gambarName);

  // Pindahkan file gambar ke lokasi penyimpanan
  if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
    // Simpan data ke dalam database (contoh menggunakan MySQLi)
    include "koneksi.php";

    // Siapkan pernyataan SQL untuk menyimpan data ke dalam tabel
    $sql = "INSERT INTO tb_pelatihan (gambar, judul, deskripsi, tanggal, jam, lokasi, pemateri) VALUES ('$gambarName', '$judul', '$deskripsi', '$tanggal', '$jam', '$lokasi', '$pemateri')";

    // Eksekusi pernyataan SQL
    if ($koneksi->query($sql) === TRUE) {
      echo "Data berhasil disimpan.";
      header('location: ../admin_index.php');
    } else {
      echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Tutup koneksi
    $koneksi->close();
  } else {
    echo "Error saat mengunggah gambar.";
  }
}
?>
