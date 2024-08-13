<?php
include "function/koneksi.php";

session_start();

$namaUser = $_SESSION['nama'];


    $query = "SELECT * FROM tb_user WHERE nama = '$namaUser' LIMIT 1";
    $result = mysqli_query($koneksi, $query);
     
                                                                                        
                                                                                        // Ambil data admin
    $user = mysqli_fetch_assoc($result);
                                                                                        
                                                                                        // Cek apakah data admin ditemukan
    if (!$user) {
      die("Admin tidak ditemukan!");
    }

    // var_dump($user);
    // return;
    
    
    $result = mysqli_query($koneksi, "SELECT * FROM tb_pelatihan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pelatihan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-dark" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-dark"><i class=""></i>E-KOMINFO</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0"><a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">Tentang</a>
                <a href="courses.php" class="nav-item nav-link">Pelatihan</a>
                <a href="team.php" class="nav-item nav-link">Pengajar</a>
                <a href="contact.php" class="nav-item nav-link">Message Us</a>
                <a href="profil.php" class="nav-item nav-link">Profil</a>
                <a href="function\proses-logout.php" class="btn btn-dark py-4 px-lg-5 d-none d-lg-block" style="font-size: 20px;">KELUAR<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-dark py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">DAFTAR PELATIHAN</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
<!-- Modal -->
<div class="">

    <?php
    // Include file koneksi
    include "function/koneksi.php";

    // Cek apakah parameter id_pelatihan sudah diterima
    if (isset($_GET['id_pelatihan'])) {
      $id_pelatihan = $_GET['id_pelatihan'];

      // Query untuk mendapatkan data barang berdasarkan id_pelatihan
      $sql = "SELECT * FROM tb_pelatihan WHERE id_pelatihan = $id_pelatihan";
      $result = $koneksi->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
        
        <!-- CONTENT -->
      <div class="mt-4">.</div>
        <div class="container mt-5 mb-5 d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 67px - 180px);">
          <div class="card mb-3 shadow-sm border">
            <div class="row g-0">
              <!-- <form action="function/proses-daftar-pel.php" method="POST" enctype="multipart/form-data"> -->
              <div class="container mt-5 mb-5" style="min-height: calc(100vh - 67px - 180px);">
                <input type="hidden" value="<?php echo $id_pelatihan?>" name="id_pelatihan">
                <div class="col-xl-4 d-flex flex-xl-column col-md-12 justify-content-center">
                  <div class="ms-1 img d-flex justify-content-center align-items-center custom-card" >
                    <img src="img/<?php echo $row['gambar']; ?>" style="max-width: 400px; width: 100%; height: auto; min-width: 200px; min-height:200px; margin-top:15px; margin-left:14px; margin-bottom:15px;" class="img-thumbnail ">
                  </div>
                </div>
                <div class="col-xl-8 col-md-12 justify-content-center">
                  <div class="card-body">
                    <div class="card container-fluid custom-card" >
                          <li class="list-group-item"><h3><?php echo $row['judul']; ?></h3></li>
                          <li class="list-group-item"><?php echo $row['deskripsi']; ?></li>
                    </div>
                    <div class="card mt-3 container-fluid custom-card" >
                      <div class="card-header bg-info text-white">
                        Tanggal :
                      </div>  
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><?php echo $row['tanggal']; ?></li>
                        </ul>
                    </div>
                    <div class="card mt-3 container-fluid custom-card" >
                      <div class="card-header bg-info text-white">
                        Lokasi :
                      </div>  
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><?php echo $row['lokasi']; ?></li>
                        </ul>
                    </div>
                    <div class="card mt-3 container-fluid custom-card">
                      <div class="card-header bg-info text-white">
                        Pemateri :
                      </div>  
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><?php echo $row['pemateri']; ?></li>
                        </ul>
                    </div>
                    <style>
                      .custom-card {
                      /* Inisialisasi lebar sesuai kebutuhan Anda */
                      width: 100%; /* Lebar default */
                      }

                      @media (min-width: 1200px) {
                      .custom-card {
                      width: 1200px; /* Sesuaikan dengan lebar layar yang Anda inginkan */
                      margin-left: auto;
                      margin-right: auto;
                      }
                    }
                    </style>
                    <br>
                    
                    <form action="function/proses-daftar-pel.php" class="custom-card" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">

                    <label for="exampleDataList" class="form-label bg-info text-white" for="nama"> Username</label>
                    <input class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList" placeholder="Masukkan username" name="nama" id="nama" value="<?php echo $user['nama']; ?>" required>
                    
                    <label for="exampleDataList" class="form-label mt-2 bg-info text-white" for="nama_lengkap"> Nama Lengkap</label>
                    <input class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList"  placeholder="Ganti Nama" aria-label=".form-control-sm example" name="nama_lengkap" id="nama_lengkap" value="<?php echo $user['nama_lengkap']; ?>" required>
                    
                    <label for="exampleDataList" class="form-label mt-2 bg-info text-white" for="email"> email</label>
                    <input class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList"  placeholder="Ganti Email" aria-label=".form-control-sm example" name="email" id="email" value="<?php echo $user['email']; ?>" required>

                    
                    <input type="hidden" class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList"  placeholder="Daftar" aria-label=".form-control-sm example" name="id_pelatihan" id="id_pelatihan" value="<?php echo $row['id_pelatihan']; ?>" required>

                    <div class="bottom-0 end-0 p-1 text-end">
                      <a href="courses.php" class="mg-left btn btn-warning mt-3 text-white">Kembali</a>
                      <input type="submit" name="submit" value="Simpan" class="btn btn-primary mt-3 text-white">
                    </div>
                    </form>
                  </div>
                  </div>
                </div>
              <!-- </form> -->
            </div>
          </div>
        </div>
      </div>

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
    <!-- Courses End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Tentang Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Balai Pengembangan Sumber Daya Manusia 
                        dan Penelitian Komunikasi dan Informatika 
                        (BPSDMP Kominfo) Surabaya</p>       
                             </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Ketajen No.36 Gedangan, 
                        Kabupaten Sidoarjo, Jawa Timur 61254</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(031) 8011944</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Kominfo@go.id</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Foto</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/DSC_0289-min.JPG" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/DSC_0291-min.JPG" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/DSC_0294-min.JPG" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/DSC_0291-min.JPG" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/DSC_0294-min.JPG" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/DSC_0289-min.JPG" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-dark btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>