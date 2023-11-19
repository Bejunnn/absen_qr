<?php
include '../../../koneksi.php';

$nis = $_POST['nis'];
$jam_pulang = $_POST['jam_pulang'];

// Validasi input
if (empty($nis) || empty($jam_pulang)) {
    echo "<script>alert('Isi semua kolom.');window.location='../input_plg.php';</script>";
    exit();
}

// Cek data
$cek_data = mysqli_query($koneksi, "SELECT * FROM pulang WHERE nis = '$nis'") or die(mysqli_error($koneksi));
if (mysqli_num_rows($cek_data) > 0) {
    echo "<script>alert('Anda sudah pulang.');window.location='../input_plg.php';</script>";
} else {
    // Query menggunakan prepared statement
    $query = "INSERT INTO pulang (nis, jam_pulang) VALUES (?, ?)";
    $stmt = mysqli_prepare($koneksi, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $nis, $jam_pulang);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if ($result) {
            echo "<script>alert('Anda Berhasil Absen.');window.location='../index.php';</script>";
        } else {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }
    } else {
        die("Prepared statement gagal: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
}
