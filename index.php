<?php
include "function/koneksi.php";




$result = mysqli_query($koneksi, "SELECT * FROM tb_pelatihan WHERE DATE(tanggal) >= DATE(NOW())");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Website Pendaftaran</title>
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
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <?php
            session_start();
            if(!isset($_SESSION["nama"])){
                echo'<a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">Tentang</a>
                <a href="courses.php" class="nav-item nav-link">Pelatihan</a>
                <a href="team.php" class="nav-item nav-link">Pengajar</a>
                <a href="contact.php" class="nav-item nav-link">Message Us</a>
                <a href="daftar.php" class="btn btn-dark py-4 px-lg-5 d-none d-lg-block" style="font-size: 20px;">MASUK<i class="fa fa-arrow-right ms-3"></i></a>';
            }else{
                echo'<a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">Tentang</a>
                <a href="courses.php" class="nav-item nav-link">Pelatihan</a>
                <a href="team.php" class="nav-item nav-link">Pengajar</a>
                <a href="contact.php" class="nav-item nav-link">Message Us</a>
                <a href="profil.php" class="nav-item nav-link">Profil</a>
                <a href="function\proses-logout.php" class="btn btn-dark py-4 px-lg-5 d-none d-lg-block" style="font-size: 20px;">KELUAR<i class="fa fa-arrow-right ms-3"></i></a>';
            }
            ?>
        </div>
            
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/DSC_0443-min.JPG" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Website Pelatihan Kominfo</h5>
                                <h1 class="display-3 text-white animated slideInDown">Website Pendaftaran Pelatihan BPSDMP Kominfo Surabaya</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Ayo bersama kita belajar untuk membuat dunia jadi lebih baik</p>
                                <?php
                                if(!isset($_SESSION["nama"])){
                                    echo '<a href="daftar.php" class="btn py-md-3 px-md-5 animated slideInRight bg-info text-white">Daftar</a>';
                                }else{
                                    echo '<a href="courses.php" class="btn py-md-3 px-md-5 animated slideInRight bg-info text-white">Daftar</a>';

                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/DSC_0185-min.JPG" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Website Pelatihan Kominfo</h5>
                                <h1 class="display-3 text-white animated slideInDown">Website Pendaftaran Pelatihan BPSDMP Kominfo Surabaya</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Ayo bersama kita belajar untuk membuat dunia jadi lebih baik</p>
                                <?php
                                if(!isset($_SESSION["nama"])){
                                    echo '<a href="daftar.php" class="btn py-md-3 px-md-5 animated slideInRight bg-info text-white">Daftar</a>';
                                }else{
                                    echo '<a href="courses.php" class="btn py-md-3 px-md-5 animated slideInRight bg-info text-white">Daftar</a>';

                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container mb-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/logo.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-dark pe-3" style="font-size: 24px;">Tentang</h6>
                    <h1 class="mb-4">Selamat Datang di E-Kominfo</h1>
                    <p class="mb-4" style="font-size: 20px; text-align: justify">Website Pelatihan Kominfo adalah platform pendidikan daring yang disediakan oleh Kementerian Komunikasi dan Informatika (Kominfo) 
                        dengan tujuan untuk memberikan pelatihan dan pengetahuan dalam berbagai aspek terkait teknologi informasi, komunikasi, dan informasi di Indonesia. 
                        Website ini dirancang untuk mendukung perkembangan dan pemberdayaan masyarakat dalam menghadapi era digital dan teknologi yang terus berkembang.</p>
                    
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5 mt-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-dark px-3" style="font-size: 14px;">Pelatihan</h6>
            <h1 class="mb-5">Contoh Pelatihan</h1>
        </div>
        <div class="row g-4">
            <?php while($row = mysqli_fetch_array($result)) { ?>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light h-100">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/<?php echo $row['gambar'];?>" alt="" style="width: 100%; height: 500px; object-fit: cover;">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <?php 
                                if(!isset($_SESSION["nama"])){
                                    echo'<a href="daftar.php" class="flex-shrink-0 btn btn-lg btn-info text-white px-4" style="border-radius: 20px 20px; font-size: 16px;">Daftar</a>';
                                } else {
                                    echo'<a href="daftar-courses.php?id_pelatihan=' . $row['id_pelatihan'] . '" class="flex-shrink-0 btn btn-lg btn-info text-white px-4" style="border-radius: 20px 20px; font-size: 16px;">Daftar</a>';
                                }
                                ?>                     
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-2"><?php echo $row['judul'];?></h3>
                            <h5 class="m-4"><?php echo $row['tanggal'];?></h5>
                            <div class="d-flex justify-content-center">
                            <small class="text-center me-2">
                                <i class="fa fa-user-tie text-dark me-1"></i>
                                <span style="border-right: 1px solid #000; padding-right: 5px;"><?php echo $row['pemateri'];?></span>
                            </small>
                            <small class="text-center me-2">
                                <i class="fa fa-clock text-dark me-1"></i>
                                <span style="border-right: 1px solid #000; padding-right: 5px;"><?php echo $row['jam'];?></span>
                            </small>
                            <small class="text-center">
                                <i class="fa fa-user text-dark me-1"></i>
                                <span style="border-right: 1px solid #000; padding-right: 5px;">30 Peserta</span>
                            </small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
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