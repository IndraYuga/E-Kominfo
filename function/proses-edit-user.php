<?php
// Cek apakah data barang sudah disubmit dari form edit
if (isset($_POST['submit'])) {
  // Ambil data barang yang diinput dari form edit
  $id_user = $_POST['id_user'];
  $nama = $_POST['nama'];
  $namaLengkap = $_POST['nama_lengkap'];
  $kelamin = $_POST['kelamin'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $hp = $_POST['hp'];

  // Include file koneksi
  include "koneksi.php";

  // Proses update gambar jika ada gambar baru yang diupload
  if ($_FILES['foto']['name'] != "") {
    // Ambil foto lama
    $sql = "SELECT foto FROM tb_user WHERE id_user = $id_user";
    $result = $koneksi->query($sql);
    $row = $result->fetch_assoc();
    $fotoLama = $row['foto'];

    // Hapus foto lama

    // Upload foto baru
    $foto = $_FILES['foto']['name'];
    $fotoTmp = $_FILES['foto']['tmp_name'];
    $targetDir = "../img/";
    $fotoName = uniqid() . "_" . $foto;
    $targetFile = $targetDir . $fotoName;

    if (move_uploaded_file($fotoTmp, $targetFile)) {
      // Update data barang dengan foto baru
      $sql = "UPDATE tb_user SET foto='$fotoName', nama='$nama', nama_lengkap='$namaLengkap',  kelamin='$kelamin', alamat='$alamat', email='$email', hp='$hp' WHERE id_user = $id_user";

      if ($koneksi->query($sql) === TRUE) {
        header('location: ../profil.php');
      } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
      }
    } else {
      echo "Error saat mengunggah foto.";
    }
  } else {
    // Update data barang tanpa mengganti foto
    $sql = "UPDATE tb_user SET nama='$nama', nama_lengkap='$namaLengkap', kelamin='$kelamin', alamat='$alamat', email='$email', hp='$hp'  WHERE id_user = $id_user";

    if ($koneksi->query($sql) === TRUE) {
      header('location: ../profil.php');
    } else {
      echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
  }

  // Tutup koneksi
  $koneksi->close();
}
?>