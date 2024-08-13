<?php 
include 'koneksi.php';
// Mengeksekusi query untuk mengambil data dari tabel
$sql = "SELECT * FROM tb_pelatihan";
$result = $koneksi->query($sql);

// Memeriksa apakah query berhasil dieksekusi
if ($result->num_rows > 0) {
    // Menghasilkan file Excel
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename="data_excel.xls"');

    echo "<table border='1'>";
    // Menuliskan header
    echo "<tr><th>judul</th><th>deskripsi</th><th>tanggal</th><th>jam</th><th>lokasi</th><th>pemateri</th></tr>";

    // Menuliskan data
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["judul"]."</td><td>".$row["deskripsi"]."</td><td>".$row["tanggal"]."</td><td>".$row["jam"]."</td><td>".$row["lokasi"]."</td><td>".$row["pemateri"]."</td></tr>";
        // Sesuaikan kolom dengan nama kolom pada tabel Anda
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}

?>