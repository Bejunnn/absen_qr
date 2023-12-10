<!DOCTYPE html>
<html lang="en">
<head>
  <title>Absensi | Proses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<?php
session_start();
include_once '../../../koneksi.php';

$nis = $_POST['nis'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
$keterangan = $_POST['keterangan'];

<<<<<<< HEAD
$update = "INSERT INTO absen (nis, tanggal, status, keterangan) VALUES ('$nis','$tanggal', '$status' ,'$keterangan')";
$hasil = mysqli_query($koneksi,$update);


if ($hasil){
//header ('location:view.php');
echo " <div class='alert alert-success'>
    <strong>Success!</strong> Redirecting you back in 1 seconds.
  </div>
<meta http-equiv='refresh' content='1; url= ../data_absen.php'/>  ";
} else { echo "<div class='alert alert-warning'>
    <strong>Failed!</strong> Redirecting you back in 1 seconds.
  </div>
 <meta http-equiv='refresh' content='1; url= ../data_absen.php'/> ";
=======
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
>>>>>>> 5ac4603794051ef0221e5da70d361834eeb50460
}
?>

</body>
</html>