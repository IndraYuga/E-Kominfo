<?php
include 'function/koneksi.php';
session_start();

// cek apakah user sudah login atau belum
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
$result = mysqli_query($koneksi, "SELECT * FROM barang");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profil</title>
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
        <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
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
    <body>
        <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4 center">   </h4>
            <form action="function/proses-edit-user.php" class="custom-card" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-2 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                            <div class="d-flex align-items-center">
                            <img src="img/<?php echo $user['foto']; ?>" style="max-width: 200px; width: 100%; height: auto; min-width: 100px;" alt class="ui-w-60 me-3">
                            <div class="ml-3">
                            <div class="col-md-10">
                          <label for="formFileSm" class="form-label mt-2 " for="foto">foto</label>
                          <input class="form-control form-control shadow-sm" id="formFileSm" type="file" name="foto" id="foto" accept="image/*">
                        </div>
                        <div class="col-md-2 p-4">
                          <div id="preview-foto">
                            <img class="img-thumbnail mt-3 shadow-sm foto"  style="max-width: 50px; max-height: 50px; min-width: 50px; min-height: 50px;" src="img/<?php echo $user['foto']; ?>" width="100">
                          </div>
                          <input type="hidden" name="foto_lama" value="<?php echo $user['foto']; ?>">
                        </div>
                            </div>
                        </div>
                        <div class="text-light small mt-1"></div>
                    </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input placeholder="Username" class="form-control mb-1" name="nama" id="nama" value="<?php echo $user['nama']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input placeholder="Nama Lengkap" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?php echo $user['nama_lengkap']; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input placeholder="Email" class="form-control mb-1" name="email" id="email" value="<?php echo $user['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nomor Handphone</label>
                                        <input placeholder="Nomor Handphone" class="form-control mb-1" name="hp" id="hp" value="<?php echo $user['hp']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <input placeholder="Alamat" class="form-control mb-1" name="alamat" id="alamat" value="<?php echo $user['alamat']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <input placeholder="Jenis Kelamin" class="form-control mb-1" name="kelamin" id="kelamin" value="<?php echo $user['kelamin']; ?>">
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <div class="text-end mt-3">
                        <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Simpan">&nbsp;
                    </div>
                </div>
                <br>
            </form>
            </div>
        </div>
        <br>
    <?php
    // Include file koneksi
    include "function/koneksi.php";

    // Cek apakah parameter id_barang sudah diterima
    if ($user['id_pelatihan'] == TRUE) {
      $id_pelatihan = $user['id_pelatihan'];

      // Query untuk mendapatkan data barang berdasarkan id_pelatihan
      $sql = "SELECT * FROM tb_pelatihan WHERE id_pelatihan = $id_pelatihan";
      $result = $koneksi->query($sql);

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        
        <div class="container mt-5 mb-5" style="min-height: calc(100vh - 67px - 180px);">
        <h3>Pelatihan Yang Sedang Diikuti:</h3>
        <div class="card mb-3 shadow-sm">
            <div class="row g-0">
            <div class="col-xl-4">
                    <div class="d-flex justify-content-center align-items-center" style="height: 450px;">
                        <img src="img/<?php echo $row['gambar']; ?>" style="max-width: 400px; max-height: 400px; min-width: 200px; min-height: 200px;" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-xl-8" style="margin-top: 60px;">
                    <div class="card-body">
                        <div class="card container-fluid custom-card" >
                            <li class="list-group-item"><h3><?php echo $row['judul']; ?></h3></li>
                            <li class="list-group-item"><?php echo $row['deskripsi']; ?></li>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header bg-info text-white" style="font-size: 18px; padding: 10px;">
                                Tanggal :
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-size: 16px;"><?php echo $row['tanggal']; ?></li>
                            </ul>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header bg-info text-white" style="font-size: 18px; padding: 10px;">
                                Jam :
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-size: 16px;"><?php echo $row['jam']; ?></li>
                            </ul>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header bg-info text-white" style="font-size: 18px; padding: 10px;">
                                Lokasi :
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-size: 16px;"><?php echo $row['lokasi']; ?></li>
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
      echo "<h3 class='container mt-5 mb-5' style='min-height: calc(100vh - 67px - 180px);'>Tidak ada Pelatihan yang diikuti</h3> ";
    }
    ?>
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