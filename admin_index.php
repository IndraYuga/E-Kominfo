<?php
include "function/auth.php"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pelatihan Kominfo</title>

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
</head>
<body>

<!-- POP UP INPUT DATA -->
<div class="modal fade shadow-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success ">
        <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">
          Buat Pelatihan
          <i class="fa-solid fa-pencil"></i>
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="function/proses-input2.php" method="POST" enctype="multipart/form-data">
        <label for="exampleDataList" class="form-label" for="judul">Judul Pelatihan</label>
        <input class="form-control form-control-sm shadow-sm" list="datalistOptions" id="exampleDataList" placeholder="Masukkan Judul Pelatihan" name="judul" id="judul" required>

        <div class="form-floating mt-2">
        <textarea class="form-control " placeholder="Masukkan Keterangan" id="floatingTextarea2" style="height: 100px" name="deskripsi" id="deskripsi"  required></textarea>
        <label for="floatingTextarea2" for="deskripsi">Deskripsi</label>
        </div>

        <label for="exampleDataList" class="form-label mt-2" for="pemateri">Pemateri</label>
        <input class="form-control form-control-sm shadow-sm"  placeholder="Masukkan Pemateri" aria-label=".form-control-sm example" name="pemateri" id="pemateri" required>

        <label for="exampleDataList" class="form-label mt-2" for="tanggal">Tanggal</label>
        <input class="form-control form-control-sm shadow-sm" type="date" placeholder="Masukkan Tanggal" aria-label=".form-control-sm example" type="date" name="tanggal" id="tanggal">
        
        <label for="exampleDataList" class="form-label mt-2" for="jam">Jam</label>
        <input class="form-control form-control-sm shadow-sm" type="time" placeholder="Masukkan Jam" aria-label=".form-control-sm example" name="jam" id="jam">

        <label for="exampleDataList" class="form-label mt-2" for="lokasi">Alamat</label>
        <textarea class="form-control " placeholder="Masukkan Alamat" id="floatingTextarea2" style="height: 100px" name="lokasi" id="lokasi"  required></textarea>
        

        <div class="mb-3">
          <label for="formFileSm" class="form-label mt-2 " for="gambar">Gambar</label>
          <input class="form-control form-control-sm shadow-sm" id="formFileSm" type="file" type="file" name="gambar" id="gambar" required>
        </div>
        
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-danger shadow-sm border-0" data-bs-dismiss="modal">Batal</button>
        <input type="submit" name="submit" value="Input" class="btn btn-primary shadow-sm border-0">
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

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

<div class="mt-5">.</div>
<div class="p-4 " style="padding:10px;" >
              <?php
              
              include "function/koneksi.php";

              // Query untuk mendapatkan data barang
              $sql = "SELECT * FROM tb_pelatihan";
              $result = $koneksi->query($sql);

              if ($result->num_rows > 0)
              echo'<table id="data-table" class="display">
              <thead>
                  <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Gambar</th>
                    <th scope="col" class="text-center">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col" class="text-center">Tanggal</th>
                    <th scope="col" class="text-center">Jam</th>
                    <th scope="col" class="text-center">Lokasi</th>
                    <th scope="col" class="text-center">Pemateri</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>';
                  include 'function/koneksi.php';
                  $sql = "SELECT * FROM tb_pelatihan";
                  $result = $koneksi->query($sql);
                  $no = 1;

                  while ($row = $result->fetch_assoc()) {

                  
                      
                      echo '<tr>';
                      echo '<td class="text-center align-middle" >' . $no++ . '</td>';
                      echo '<td class="text-center font align-middle"><img src="img/' . $row['gambar'] . '" class="img-thumbnail" height="10px" style="max-width: 60px; max-height: 60px; min-width: 60px; min-height: 60px ;" height="10px"></td>';
                      echo '<td class="text-center font align-middle">' . $row['judul'] . '</td>';
                      echo '<td>' . $row['deskripsi'] . '</td>';
                      echo '<td class="font text-center align-middle">' . $row['tanggal'] . '</td>';
                      echo '<td class="font text-center align-middle">' . $row['jam'] . '</td>';
                      echo '<td class="font text-center align-middle">' . $row['lokasi'] . '</td>';
                      echo '<td class="text-center font align-middle" >' . $row['pemateri'] . '</td>';
                      echo '<td class="text-center align-middle">' .
                          '<div class="dropdown">' .
                          '<button class="btn btn-secondary dropdown-toggle bg-primary border-0 font" type="button" data-bs-toggle="dropdown" aria-expanded="false">' .
                          'Menu' .
                          '</button>' .
                          '<ul class="dropdown-menu">' .
                          '<li>' .
                          '<a href="info_pelatihan.php?id_pelatihan=' . $row['id_pelatihan'] . '" class="btn btn-warning dropdown-item rounded-0 font text-success">
                          <i class="fa-solid fa-eye"></i>
                          Lihat
                          </a>' .
                          '</li>' .
                          '<li><hr class="dropdown-divider"></li>' .
                          '<li>' .
                          '<a href="edit_pelatihan.php?id_pelatihan=' . $row['id_pelatihan'] . '" class="btn btn-warning dropdown-item font text-warning rounded-0">
                          <i class="fa-solid fa-pen-to-square"></i>
                          Edit
                          </a>' .
                          '</li>' .
                          '<li><hr class="dropdown-divider"></li>' .
                          '<li>' .
                          '<a href="function/proses-delete.php?id_pelatihan=' . $row['id_pelatihan'] . '" class="btn btn-warning dropdown-item rounded-0 font text-danger" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                          <i class="fa-solid fa-trash"></i>
                          Hapus
                          </a>' .
                          '</li>' .
                          '</ul>' .
                          '</div>' .
                          '</td>' .
                          '</tr>';
                      // $no++;

                      $nama = $row['judul'];
              
                  }
                  ?>
              </tbody>
          </table>
            <div class="">
            <button type="button" class="btn btn-outline-success bg-success text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-right:40px;">
                <i class="fa-solid fa-plus" ></i>
                Tambah
            </button>
            </div>
            <br>
            <a href="function/export-pelatihan.php">
              <div class="">
              <button type="button" class="btn btn-outline-success bg-success text-white" data-bs-target="#staticBackdrop" style="margin-right:40px;">
                  Export Data
              </button>
              </div>
            </a>
        </div>
      </div>
    </div>
    <footer class="bg-light py-4 mt-4 border" >
    <div class="container text-light text-center">
      <p class="fs-5 display-5 " style="margin-bottom:5px;">
        <img src="img/logo.png" alt="" height="35px">
        <span class="fw-medium text-dark">Pelatihan Kominfo</span>
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
        // Mendapatkan tanggal sekarang
        var today = new Date();

        // Objek untuk memformat tanggal
        var options = { day: 'numeric', month: 'long', year: 'numeric' };

        // Memformat tanggal sesuai dengan opsi yang ditentukan
        var tanggal = today.toLocaleDateString('id-ID', options);

        // Menampilkan tanggal di elemen HTML dengan id "tanggal"
        document.getElementById('tanggal').innerText = tanggal;
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
    
</body>
</html>
