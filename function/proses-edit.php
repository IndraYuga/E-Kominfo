<?php
// Cek apakah data barang sudah disubmit dari form edit
if (isset($_POST['submit'])) {
  // Ambil data barang yang diinput dari form edit
  $id_pelatihan = $_POST['id_pelatihan'];
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  $tanggal = $_POST['tanggal'];
  $jam = $_POST['jam'];
  $lokasi = $_POST['lokasi'];
  $pemateri = $_POST['pemateri'];

  // Include file koneksi
  include "koneksi.php";

  // Proses update gambar jika ada gambar baru yang diupload
  if ($_FILES['gambar']['name'] != "") {
    // Ambil gambar lama
    $sql = "SELECT gambar FROM tb_pelatihan WHERE id_pelatihan = $id_pelatihan";
    $result = $koneksi->query($sql);
    $row = $result->fetch_assoc();
    $gambarLama = $row['gambar'];

    // Hapus gambar lama
    

    // Upload gambar baru
    $gambar = $_FILES['gambar']['name'];
    $gambarTmp = $_FILES['gambar']['tmp_name'];
    $targetDir = "../img/";
    $gambarName = uniqid() . "_" . $gambar;
    $targetFile = $targetDir . $gambarName;

    if (move_uploaded_file($gambarTmp, $targetFile)) {
      // Update data barang dengan gambar baru
      $sql = "UPDATE tb_pelatihan SET gambar='$gambarName', judul='$judul', deskripsi='$deskripsi', tanggal='$tanggal', jam='$jam', lokasi='$lokasi',  pemateri='$pemateri' WHERE id_pelatihan = $id_pelatihan";

      if ($koneksi->query($sql) === TRUE) {
        header('location: ../admin_index.php');
      } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
      }
    } else {
      echo "Error saat mengunggah gambar.";
    }
  } else {
    // Update data barang tanpa mengganti gambar
    $sql = "UPDATE tb_pelatihan SET judul='$judul', deskripsi='$deskripsi', tanggal='$tanggal', jam='$jam', lokasi='$lokasi',  pemateri='$pemateri'  WHERE id_pelatihan = $id_pelatihan";

    if ($koneksi->query($sql) === TRUE) {
      header('location: ../admin_index.php');
    } else {
      echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
  }

  // Tutup koneksi
  $koneksi->close();
}
?>