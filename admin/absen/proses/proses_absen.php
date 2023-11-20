<?php
include '../../../koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jam_masuk = $_POST['jam_masuk'];

// Validasi input
if (empty($nis) || empty($nama) || empty($kelas) || empty($jam_masuk)) {
    echo "<script>alert('Isi semua kolom.');window.location='../input.php';</script>";
    exit();
}

// Cek data
$cek_data = mysqli_query($koneksi, "SELECT * FROM masuk WHERE nis = '$nis'") or die(mysqli_error($koneksi));
if (mysqli_num_rows($cek_data) > 0) {
    echo "<script>alert('Anda sudah absen.');window.location='../input.php';</script>";
} else {
    // Query menggunakan prepared statement
    $query = "INSERT INTO masuk (nis, nama, kelas, jam_masuk) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $nis, $nama, $kelas, $jam_masuk);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if ($result) {
            echo "<script>alert('Anda Berhasil Absen.');window.location='../input.php';</script>";
        } else {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }
    } else {
        die("Prepared statement gagal: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
}
