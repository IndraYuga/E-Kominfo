<?php
include "function/auth.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pelatihan</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <!-- <link rel="stylesheet" type="text/css" href="css/index-styles.css">
  <link rel="stylesheet" href="css/style.css"> -->
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="fontawesome-6-4-0/css/all.min.css">

  <link rel="stylesheet" href="css/responsif-edit.css">

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
  
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFQdh4Hw02USMIedVSEEwchGwx8jf66eg&callback=initMap" async defer></script> -->
  
</head>
<body>

    <!-- NAVBAR MOBILE -->


    <!-- NAVBAR -->
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


  <div class="">

    <?php
    // Include file koneksi
    include "function/koneksi.php";

    // Cek apakah parameter id_pelatihan sudah diterima
    if (isset($_GET['id_user'])) {
      $id_user = $_GET['id_user'];

      // Query untuk mendapatkan data barang berdasarkan id_user
      $sql = "SELECT * FROM tb_user WHERE id_user = $id_user";
      $result = $koneksi->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        
        <!-- CONTENT -->
        <div class="mt-4">.</div>
        <div class="container mt-5 mb-5" style="min-height: calc(100vh - 67px - 180px);">
          <div class="card mb-3 shadow-sm border">
            <div class="row g-0">
              <div class="col-xl-5 map col-lg-12">
                <div id="foto">
                  <img src="img/<?php echo $row['foto']; ?>" class="rounded-1 m-3" height="480px" width="455px">
                </div>
              </div>
              <div class="col-xl-7 col-lg-12">
                <div class="card-body">
                  <form action="function/proses-edit-profile.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>">

                    <label for="exampleDataList" class="form-label" for="nama">Username</label>
                    <input class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList" placeholder="Masukkan username" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>
                    
                    <label for="exampleDataList" class="form-label" for="nama_lengkap">Nama Lengkap</label>
                    <input class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList"  placeholder="Ganti Nama" aria-label=".form-control-sm example" name="nama_lengkap" id="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>" required>
                    
                    <label for="exampleDataList" class="form-label" for="kelamin">Kelamin</label>
                    <input class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList"  placeholder="Ganti Kelamin" aria-label=".form-control-sm example" name="kelamin" id="kelamin" value="<?php echo $row['kelamin']; ?>" required>

                    <label for="floatingTextarea2" for="alamat">Alamat</label>
                    <div class="form-floating mt-3">
                      <textarea class="form-control shadow-sm" placeholder="Masukkan Alamat" style="height: 100px" name="alamat" id="alamat" required> <?php echo $row['alamat']; ?> </textarea>
                    </div>

                    <label for="exampleDataList" class="form-label" for="email">email</label>
                    <input class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList"  placeholder="Ganti Email" aria-label=".form-control-sm example" name="email" id="email" value="<?php echo $row['email']; ?>" required>

                    <div class="">
                      <div class="row g-0">
                        <div class="col-md-10">
                          <label for="formFileSm" class="form-label mt-2 " for="foto">foto</label>
                          <input class="form-control form-control shadow-sm" id="formFileSm" type="file" name="foto" id="foto" accept="image/*">
                        </div>
                        <div class="col-md-2 p-4">
                          <div id="preview-foto">
                            <img class="img-thumbnail mt-3 shadow-sm foto"  style="max-width: 50px; max-height: 50px; min-width: 50px; min-height: 50px;" src="img/<?php echo $row['foto']; ?>" width="100">
                          </div>
                          <input type="hidden" name="foto_lama" value="<?php echo $row['foto']; ?>">
                        </div>
                      </div>
                    </div>
                    

                    <div class="bottom-0 end-0 p-1 text-end">
                      <a href="admin_index.php" class="mg-left btn btn-warning mt-3 text-white">Kembali</a>
                      <input type="submit" name="submit" value="Simpan" class="btn btn-primary mt-3 text-white">
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="bg-light py-4 mt-4 border">
          <div class="container text-light text-center">
            <p class="fs-5 display-5 " style="margin-bottom:5px;">
              <img src="function/gambar/logo.png" alt="" height="35px">
              <span class="fw-medium text-dark">Pelatihan Kominfo</span>
            </p>
            <small class="text-black-50">&copy; Copyright by PKL Informatika UMSIDA 2023 Sidoarjo, All rights reserved</small>
          </div>
        </footer>

        

        <?php
      } else {
        echo "Data barang tidak ditemukan.";
      }
    } else {
      echo "ID barang tidak ditemukan.";
    }

    // Tutup koneksi
    $koneksi->close();
    ?>


  </div>
  
</body>
</html>

