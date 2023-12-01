<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../../koneksi.php';

// membuat variabel untuk menampung data dari form
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jam_masuk = $_POST['jam_masuk'];

// Mendapatkan tanggal saat ini
$tanggal_sekarang = date('Y-m-d');

// Mengecek apakah sudah ada data untuk NIS tersebut pada tanggal sekarang
$cek_query = "SELECT * FROM masuk WHERE nis = '$nis' AND DATE_FORMAT(tanggal, '%Y-%m-%d') = '$tanggal_sekarang'";
$cek_result = mysqli_query($koneksi, $cek_query);

if (mysqli_num_rows($cek_result) > 0) {
    // Jika sudah ada data, tampilkan pesan kesalahan
    echo "<script>alert('Anda sudah melakukan absen hari ini.');window.location='../input.php';</script>";
} else {
    // Jika belum ada data, jalankan query INSERT
    $query = "INSERT INTO masuk (nis, nama, kelas, jam_masuk, tanggal) VALUES ('$nis','$nama','$kelas','$jam_masuk', '$tanggal_sekarang')";
    $result = mysqli_query($koneksi, $query);

    // periksa query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        // tampilkan alert dan redirect ke halaman input_plg.php
        echo "<script>alert('Anda Berhasil Absen.');window.location='../input.php';</script>";
    }
}
?>
