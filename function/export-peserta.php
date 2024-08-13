<?php
    // Include file koneksi
    include "koneksi.php";

    // Cek apakah parameter id_pelatihan sudah diterima
    if (isset($_GET['id_pelatihan'])) {
        $id_pelatihan = $_GET['id_pelatihan'];
  
        // Query untuk mendapatkan data barang berdasarkan id_pelatihan
        $sql = "SELECT * FROM tb_pelatihan WHERE id_pelatihan = $id_pelatihan";
        $result = $koneksi->query($sql);
        $barang = mysqli_fetch_assoc($result);   
        if (!$barang) {
        die("Admin tidak ditemukan!");
        }
    }
$sql2 = "SELECT * FROM tb_user WHERE id_pelatihan = $id_pelatihan";
$result2 = $koneksi->query($sql2);

// Memeriksa apakah query berhasil dieksekusi
if ($result2->num_rows > 0) {
    // Menghasilkan file Excel
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="Data_Peserta.xls"');

    echo "<table border='1'>";
    // Menuliskan header
    echo "<tr><th>id_user</th><th>Username</th><th>Nama</th><th>Alamat</th><th>Email</th><th>No HP</th></tr>";

    // Menuliskan data
    while ($row = $result2->fetch_assoc()) {
        echo "<tr><td>".$row["id_user"]."</td><td>".$row["nama"]."</td><td>".$row["nama_lengkap"]."</td><td>".$row["alamat"]."</td><td>".$row["email"]."</td><td>".$row["hp"]."</td></tr>";
        // Sesuaikan kolom dengan nama kolom pada tabel Anda
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}
    // var_dump($barang);
    // return;
    ?>