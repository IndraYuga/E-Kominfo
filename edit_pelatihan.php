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
        <div class="container mt-5 mb-5" style="min-height: calc(100vh - 67px - 180px);">
          <div class="card mb-3 shadow-sm border">
            <div class="row g-0">
              <div class="col-xl-5 map col-lg-12">
                <div id="gambar">
                  <img src="img/<?php echo $row['gambar']; ?>" class="rounded-1 m-3" height="480px" width="455px">
                </div>
              </div>
              <div class="col-xl-7 col-lg-12">
                <div class="card-body">
                  <form action="function/proses-edit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_pelatihan" value="<?php echo $row['id_pelatihan']; ?>">

                    <label for="exampleDataList" class="form-label" for="judul">Judul pelatihan</label>
                    <input class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList" placeholder="Masukkan Barang" name="judul" id="judul" value="<?php echo $row['judul']; ?>" required>
                    
                    <div class="">
                      <div class="row g-0">
                        <div class="col-md-10">
                          <label for="formFileSm" class="form-label mt-2 " for="gambar">Gambar</label>
                          <input class="form-control form-control shadow-sm" id="formFileSm" type="file" name="gambar" id="gambar" accept="image/*">
                        </div>
                        <div class="col-md-2 p-4">
                          <div id="preview-gambar">
                            <img class="img-thumbnail mt-3 shadow-sm gambar"  style="max-width: 50px; max-height: 50px; min-width: 50px; min-height: 50px;" src="img/<?php echo $row['gambar']; ?>" width="100">
                          </div>
                          <input type="hidden" name="gambar_lama" value="<?php echo $row['gambar']; ?>">
                        </div>
                      </div>
                    </div>

                    <label for="floatingTextarea2" for="deskripsi">Deskripsi</label>
                    <div class="form-floating mt-3">
                      <textarea class="form-control shadow-sm" placeholder="Masukkan Keterangan" id="floatingTextarea2" style="height: 100px" name="deskripsi" id="deskripsi" required> <?php echo $row['deskripsi']; ?> </textarea>
                    </div>

                    <label for="exampleDataList" class="form-label" for="pemateri">Pemateri</label>
                    <input class="form-control form-control shadow-sm" list="datalistOptions" id="exampleDataList"  placeholder="Ganti Pemateri" aria-label=".form-control-sm example" name="pemateri" id="pemateri" value="<?php echo $row['pemateri']; ?>" required>

                    <label for="exampleDataList" class="form-label mt-2" for="tanggal">Tanggal</label>
                    <input class="form-control form-control-sm shadow-sm" type="date" placeholder="Masukkan Tanggal" aria-label=".form-control-sm example" type="date" name="tanggal" id="tanggal" value="<?php echo $row['tanggal']; ?>">

                    <label for="exampleDataList" class="form-label" for="jam">Jam</label>
                    <input class="form-control form-control-sm shadow-sm" type="time" placeholder="Masukkan Jam" aria-label=".form-control-sm example" name="jam" id="jam" value="<?php echo $row['jam']; ?>">

                    <label for="floatingTextarea2" for="lokasi">Alamat</label>
                    <div class="form-floating mt-3">
                      <textarea class="form-control shadow-sm" placeholder="Masukkan Keterangan" id="floatingTextarea2" style="height: 100px" name="lokasi" id="lokasi" required> <?php echo $row['lokasi']; ?> </textarea>
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
  <script>
        // Mendapatkan elemen input tanggal
        var tanggal = document.getElementById('tanggal');

        // Mendapatkan tanggal hari ini
        var today = new Date().toISOString().split('T')[0];

        // Menetapkan atribut min pada elemen input tanggal
        tanggal.setAttribute('min', today);

        // Menambahkan event listener untuk menghindari pemilihan hari kemarin
        tanggal.addEventListener('input', function () {
            var selectedDate = new Date(tanggal.value);
            var yesterday = new Date(today);
            yesterday.setDate(yesterday.getDate() - 1);

            // Jika tanggal yang dipilih adalah hari kemarin, atur nilai input ke tanggal hari ini
            if (selectedDate < yesterday) {
                tanggal.value = today;
                alert("Anda tidak dapat memilih tanggal sebelum hari ini.");
            }
        });
  </script>
  <script>
        // Mendapatkan elemen input waktu
        var jam = document.getElementById('jam');

        // Menambahkan event listener untuk menanggapi perubahan waktu
        jam.addEventListener('input', function () {
            var selectedTime = jam.value;
            console.log("Jam yang dipilih:", selectedTime);
        });
    </script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script>
      $(document).ready( function () {
           $('#data-table').DataTable();
      } );
  </script>
  
</body>
</html>

