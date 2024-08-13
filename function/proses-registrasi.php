<?php
include 'koneksi.php';
// jika form di submit, masukkan data ke basis data.
if (isset($_POST['submit'])){
// menghapus backslashes
$username = stripslashes($_POST['nama']);
$nama = stripslashes($_POST['nama_lengkap']);
$hp = stripslashes($_POST['hp']);
$email = stripslashes($_POST['email']);
$password = stripslashes($_POST['password']);

//memberi perlindungan dari karakter unik atau khusus dalam string
$username = mysqli_real_escape_string($koneksi,$username);
$nama = mysqli_real_escape_string($koneksi,$nama);
$hp = mysqli_real_escape_string($koneksi, $hp);
$email = mysqli_real_escape_string($koneksi,$email);
$password = mysqli_real_escape_string($koneksi,$password);
$query = mysqli_query($koneksi,"INSERT into tb_user (nama, nama_lengkap, hp, email, password) VALUES ('$username', '$nama', '$hp', '$email', '$password')");
if($query){
    header('Location: ../daftar.php');
}
}else{
header('Location: registrasi.php');
}
?>