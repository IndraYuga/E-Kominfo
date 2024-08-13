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
    if (isset($_GET['id_user'])) {
      $id_user = $_GET['id_user'];

      // Query untuk mendapatkan data barang berdasarkan id_user
      $sql = "SELECT * FROM tb_user WHERE id_user = $id_user";
      $result = $koneksi->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        
        <div class="container mt-5 mb-5" style="min-height: calc(100vh - 67px - 180px);">
          <div class="card mb-3 shadow-sm" >
            <div class="row g-0">
              <div class="col-xl-4 col-md-12">
                <div class="d-flex justify-content-center align-items-center mt-5" >
                  <img src="img/<?php echo $row['foto']; ?>" style="max-width: 400px; max-height: 400px; min-width: 200px; min-height: 200px;" class="img-thumbnail img-fluid ">
                </div>
              </div>
              <div class="col-xl-8 col-md-12">
                <div class="card-body">
                  <div class="card mt-3" >
                    <div class="card-header bg-info text-white">
                      Username :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['nama']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3" >
                    <div class="card-header bg-info text-white">
                      Nama :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['nama_lengkap']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3" >
                    <div class="card-header bg-info text-white">
                      Kelamin :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['kelamin']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3" >
                    <div class="card-header bg-info text-white">
                      Alamat :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['alamat']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3" >
                    <div class="card-header bg-info text-white">
                      Nomor Telepon :
                    </div>  
                      <ul class="list-group list-group-flush ">
                        <li class="list-group-item overflow-auto"><?php echo $row['hp']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                      Email :
                    </div>  
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $row['email']; ?></li>
                      </ul>
                  </div>
                  <div class="card mt-3" >
                    <div class="card-header bg-info text-white">
                      Role :
                    </div>  
                      <ul class="list-group list-group-flush ">
                        <li class="list-group-item overflow-auto"><?php echo $row['role']; ?></li>
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