sesi navbar

<?php
        session_start();
        if(!isset($_SESSION["nama"])){
            echo'<div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">Tentang</a>
                <a href="courses.php" class="nav-item nav-link">Pelatihan</a>
                <a href="team.php" class="nav-item nav-link">Pengajar</a>
                <a href="contact.php" class="nav-item nav-link">Message Us</a>
            </div>
            <a href="logout.php" class="btn btn-dark py-4 px-lg-5 d-none d-lg-block" style="font-size: 20px;">daftar<i class="fa fa-arrow-right ms-3"></i></a>
                
            </div>';
        }else{
            echo'<div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">Tentang</a>
                <a href="courses.php" class="nav-item nav-link">Pelatihan</a>
                <a href="team.php" class="nav-item nav-link">Pengajar</a>
                <a href="contact.php" class="nav-item nav-link">Message Us</a>
            </div>
            <a href="logout.php" class="btn btn-dark py-4 px-lg-5 d-none d-lg-block" style="font-size: 20px;">logout<i class="fa fa-arrow-right ms-3"></i></a>
                
            </div>';
        }
        ?>

<!-- <?php
include 'koneksi.php';
session_start();

// cek apakah user sudah login atau belum
if (!isset($_SESSION['nama'])) {
  header("Location: login.php");
}

// cek apakah form edit telah disubmit
if (isset($_POST['submit'])) {
  $id_user = $_POST['id_user'];
  
  // Ambil id_pelatihan dari GET
  if (isset($_GET['id_pelatihan'])) {
    $id_pelatihan = $_GET['id_pelatihan'];
    $sql = "SELECT id_pelatihan FROM barang WHERE id_pelatihan = $id_pelatihan";
    $result2 = $koneksi->query($sql);
    
    // Query untuk melakukan update data user
    $query = "UPDATE tb_user SET id_pelatihan = '$result2' WHERE id_user = '$id_user'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      // Jika update berhasil, redirect ke halaman courses.php
      header("Location: ../courses.php");
      exit;
    } else {
      // Jika update gagal, tampilkan pesan error
      die("Update data gagal: " . mysqli_error($koneksi));
    }
  } else {
    // Handle kesalahan jika $_GET['id_pelatihan'] tidak ada
    echo "ID Pelatihan tidak ditemukan.";
  }
}
?> -->

<?php 

// koneksi
$conn = new mysqli('localhost', 'root', '', 'test');

if (isset($_POST['submit'])) {
 $date1 = $_POST['date1'];
 $date2 = $_POST['date2'];

 if (!empty($date1) && !empty($date2)) {
  // perintah tampil data berdasarkan range tanggal
  $q = mysqli_query($conn, "SELECT * FROM produk WHERE tgl_transaksi BETWEEN '$date1' and '$date2'"); 
 } else {
  // perintah tampil semua data
  $q = mysqli_query($conn, "SELECT * FROM produk"); 
 }
} else {
 // perintah tampil semua data
 $q = mysqli_query($conn, "SELECT * FROM produk");
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>Tutorial PHP</title>

 <!-- Bootstrap -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
 
 <div class="container mt-5 mx-auto">
  <center>
   <h1>Menampilkan data berdasarkan periode tanggal dengan PHP</h1>
  </center>

  <div class="card mt-5">
   <div class="card-body mx-auto">
    <form method="POST" action="" class="form-inline mt-3">
     <label for="date1">Tanggal mulai </label>
     <input type="date" name="date1" id="date1" class="form-control mr-2">
     <label for="date2">sampai </label>
     <input type="date" name="date2" id="date2" class="form-control mr-2">
     <button type="submit" name="submit" class="btn btn-primary">Cari</button>
    </form>

    <table class="table table-bordered mt-5">
     <tr>
      <th>#</th>
      <th>Nama Barang</th>
      <th>Harga Satuan</th>
      <th>Qty</th>
      <th>Tgl. Transaksi</th>
     </tr>

     <?php
     
     $no = 1;

     while ($r = $q->fetch_assoc()) {
     ?>

     <tr>
      <td><?= $no++ ?></td>
      <td><?= ucwords($r['nama_produk']) ?></td>
      <td><?= $r['harga'] ?></td>
      <td><?= $r['qty'] ?></td>
      <td><?= date('d-M-Y', strtotime($r['tgl_transaksi'])) ?></td>
     </tr>

     <?php   
     }
     ?>

    </table>
   </div>
  </div>
 </div>

</body>
</html>