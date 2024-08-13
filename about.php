<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tentang</title>
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


    <!-- Header Start -->
    <div class="container-fluid bg-dark py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Tentang Kita</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-light mb-4"></i>
                            <h5 class="mb-3 text-light">Pengajar Terlatih</h5>
                            <p class="text-light" style="font-size: 14px;">Pengajar-pengajar kami adalah ahli di bidangnya, dengan keahlian yang luas dan dedikasi 
                                untuk membantu Anda meraih pemahaman yang mendalam dalam berbagai topik menarik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-light mb-4"></i>
                            <h5 class="mb-3 text-light">Kelas Online</h5>
                            <p class="text-light" style="font-size: 14px;">Di platform pelatihan kami, kelas online adalah pintu gerbang bagi Anda untuk memperluas wawasan, 
                                mengembangkan keterampilan, dan menjelajahi berbagai topik menarik. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-light mb-4"></i>
                            <h5 class="mb-3 text-light">Tugas dan Latihan</h5>
                            <p class="text-light" style="font-size: 14px;">Tugas dan latihan yang ada pada kami bertujuan untuk mengembangkan keterampilan praktis yang dapat Anda gunakan dalam karier, 
                                pendidikan, dan kehidupan sehari-hari.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-light mb-4"></i>
                            <h5 class="mb-3 text-light">Informasi</h5>
                            <p class="text-light" style="font-size: 14px;">Informasi bukan hanya sekumpulan data, tetapi fondasi yang kuat untuk pertumbuhan intelektual dan keahlian praktis. 
                                Mendapatkan ilmu yang bermanfaat bagi masa depan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/DSC_0305.JPG" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-dark pe-3" style="font-size: 18px;">Tentang</h6>
                    <h1 class="mb-4">Selamat Datang di E-Kominfo</h1>
                    <p class="mb-4" style="font-size: 18px; text-align: justify">Website Pelatihan Komunikasi dan Informatika (Kominfo) adalah platform pendidikan daring 
                        yang diselenggarakan oleh Kementerian Komunikasi dan Informatika Indonesia. Website ini bertujuan untuk memberikan pelatihan dan pengetahuan dalam bidang komunikasi dan informatika 
                        kepada masyarakat umum, para profesional, dan pihak-pihak yang tertarik untuk mengembangkan kemampuan di bidang tersebut.</p>
                    <p class="mb-4" style="font-size: 18px; text-align: justify">Dengan antarmuka yang user-friendly, website ini menyediakan beragam kursus dan materi pembelajaran yang mencakup 
                        berbagai aspek komunikasi dan informatika, mulai dari dasar hingga tingkat lanjutan. Materi-materi yang disajikan meliputi topik-topik seperti jaringan komputer, keamanan siber, 
                        media sosial, pengelolaan data, teknologi informasi, regulasi komunikasi, dan banyak lagi.</p>
                            <div class="row gy-2 gx-4 mb-4" style="font-size: 16px;">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-dark me-2"></i>Instruktur Terlatih</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-dark me-2"></i>Ilmu yang Bermanfaat</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-dark me-2"></i>Kelas Online</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-dark me-2"></i>Bimbingan Latihan dan Tugas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->        

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