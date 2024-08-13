<?php 
include 'koneksi.php';
// Mengeksekusi query untuk mengambil data dari tabel
$sql = "SELECT * FROM tb_user";
$result = $koneksi->query($sql);

// Memeriksa apakah query berhasil dieksekusi
if ($result->num_rows > 0) {
    // Menghasilkan file Excel
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="Data_User.xls"');

    echo "<table border='1'>";
    // Menuliskan header
    echo "<tr><th>id_user</th><th>Username</th><th>Namma Lengkap</th><th>Kelamin</th><th>Alamat</th><th>Nomor HP</th><th>Email</th></tr>";

    // Menuliskan data
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_user"]."</td><td>".$row["nama"]."</td><td>".$row["nama_lengkap"]."</td><td>".$row["kelamin"]."</td><td>".$row["alamat"]."</td><td>".$row["hp"]."</td><td>".$row["email"]."</td></tr>";
        // Sesuaikan kolom dengan nama kolom pada tabel Anda
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}

?>