<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/responsif-datatabel.css">

    <link rel="stylesheet" href="fontawesome-6-4-0/css/all.min.css">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  <style>
    #map {
      height: 800px;
      width: auto;
    }
    </style>
</head>
<body>
<!-- NAVBAR MOBILE -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-dark"><i class=""></i>E-KOMINFO</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="list_user.php" class="nav-item nav-link">User</a>
            <a href="admin_index.php" class="nav-item nav-link">Pelatihan</a>
            <a href="function\proses-logout.php" class="btn btn-dark py-4 px-lg-5 d-none d-lg-block" style="font-size: 20px;">KELUAR<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
            
        </div>
    </nav>
  <div class="mt-4 des">.</div>
  <div class="container">
    <?php
    // Include file koneksi
    include "function/koneksi.php";

    // Cek apakah parameter id_barang sudah diterima
    if (isset($_GET['id_pelatihan'])) {
      $id_pelatihan = $_GET['id_pelatihan'];

      // Query untuk mendapatkan data barang berdasarkan id_pelatihan
      $sql = "SELECT * FROM tb_pelatihan WHERE id_pelatihan = $id_pelatihan";
      $result = $koneksi->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        
        <div class="container mt-5 mb-5" style="min-height: calc(100vh - 67px - 180px);">
          <div class="card mb-3 shadow-sm" >
            <div class="row g-0">
              <div class="col-xl-4 col-md-12">
              <div class="d-flex justify-content-center align-items-center mt-4" style="height: 450px;">
                <img src="img/<?php echo $row['gambar']; ?>" style="max-width: 400px; max-height: 400px; min-width: 200px; min-height: 200px;" class="img-thumbnail">
              </div>
              </div>
              <div class="col-xl-8 col-md-12">
                <div class="card-body">
                  <div class="card" >
                    <div class="card-header bg-info text-white">
                      Judul :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['judul']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3" >
                    <div class="card-header bg-info text-white">
                      Deskripsi :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['deskripsi']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3" >
                    <div class="card-header bg-info text-white">
                      Jam :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['jam']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                      Tanggal :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['tanggal']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                      Lokasi :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['lokasi']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3" >
                    <div class="card-header bg-info text-white">
                      Pemateri :
                    </div>  
                      <ul class="list-group list-group-flush ">
                        <li class="list-group-item overflow-auto"><?php echo $row['pemateri']; ?></li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <?php
      } else {
        echo "Data Pelatihan tidak ditemukan.";
      }
    } else {
      echo "ID Pelatihan tidak ditemukan.";
    }

    // Tutup koneksi
    // $koneksi->close();
    ?>
  
<h3>List Peserta</h3>
<div class="mt-5">.</div>
<div class="p-4 " style="padding:10px;" >
              <?php
              
              include "function/koneksi.php";

              // Query untuk mendapatkan data barang
              $sql2 = "SELECT * FROM tb_user";
              $result2 = $koneksi->query($sql2);

              if ($result2->num_rows > 0)
              echo'<table id="data-table" class="display">
              <thead>
                  <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Gambar</th>
                    <th scope="col" class="text-center">Id User</th>
                    <th scope="col" class="text-center">Username</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Nomor Telepon</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>';
                  include 'function/koneksi.php';
                  $sql2 = "SELECT * FROM tb_user WHERE id_pelatihan = $id_pelatihan";
                  $result2 = $koneksi->query($sql2);
                  $no = 1;

                  while ($row2 = $result2->fetch_assoc()) {
                      
                      echo '<tr>';
                      echo '<td class="text-center align-middle" >' . $no . '</td>';
                      echo '<td class="text-center font align-middle"><img src="img/' . $row2['foto'] . '" class="img-thumbnail" height="10px" style="max-width: 60px; max-height: 60px; min-width: 60px; min-height: 60px ;" height="10px"></td>';
                      echo '<td class="text-center font align-middle">' . $row2['id_user'] . '</td>';
                      echo '<td class="text-center font align-middle">' . $row2['nama'] . '</td>';
                      echo '<td class="text-center font align-middle">' . $row2['nama_lengkap'] . '</td>';
                      echo '<td>' . $row2['alamat'] . '</td>';
                      echo '<td class="font text-center align-middle">' . $row2['email'] . '</td>';
                      echo '<td class="font text-center align-middle">' . $row2['hp'] . '</td>';
                      echo '<td class="text-center align-middle">' .
                          '<div class="dropdown">' .
                          '<button class="btn btn-secondary dropdown-toggle bg-primary border-0 font" type="button" data-bs-toggle="dropdown" aria-expanded="false">' .
                          'Menu' .
                          '</button>' .
                          '<ul class="dropdown-menu">' .
                          '<li>' .
                          '<a href="info_user.php?id_user=' . $row2['id_user'] . '" class="btn btn-warning dropdown-item rounded-0 font text-success">
                          <i class="fa-solid fa-eye"></i>
                          Lihat
                          </a>' .
                          '</li>' .
                          '<li><hr class="dropdown-divider"></li>' .
                          '<li>' .
                          '<a href="function/proses-delete-peserta.php?id_user=' . $row2['id_user'] . '" class="btn btn-warning dropdown-item rounded-0 font text-danger" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                          <i class="fa-solid fa-trash"></i>
                          Hapus
                          </a>' .
                          '</li>' .
                          '</ul>' .
                          '</div>' .
                          '</td>' .
                          '</tr>';
                      $no++;

                      $nama = $row2['nama'];
              
                  }
                  ?>
              </tbody>
          </table>
          <?php
          echo '
          <a href="function/export-peserta.php?id_pelatihan=' .$row['id_pelatihan']. '">
              <div class="">
              <button type="button" class="btn btn-outline-success bg-success text-white" data-bs-target="#staticBackdrop" style="margin-right:40px;">
                  Export Data
              </button>
              </div>
          </a>';
          ?>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-light py-4 mt-4 border">
    <div class="container text-light text-center">
      <p class="fs-5 display-5 " style="margin-bottom:5px;">
        <img src="img/logo.png" alt="" height="35px">
        <span class="fw-medium text-dark">Pelatihan</span>
      </p>
      <small class="text-black-50">&copy; Copyright by PKL Informatika UMSIDA 2023 Sidoarjo, All rights reserved</small>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#data-table').DataTable();
        } );
    </script>
</body>
</html>