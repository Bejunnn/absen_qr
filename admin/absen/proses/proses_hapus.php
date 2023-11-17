<?php
include '../../../koneksi.php';
$id_absen = $_GET['id_absen'];

// Properly escape the value to prevent SQL injection
$id_absen = mysqli_real_escape_string($koneksi, $id_absen);

$result = mysqli_query($koneksi, "DELETE FROM absen WHERE id_absen = '$id_absen'");
$cek = mysqli_affected_rows($koneksi);

if ($cek > 0) {
  echo "<script> 
          alert('BERHASIL MENGHAPUS');
        </script>";
  header("Location: ../index.php");
} else {
  echo "<script> 
          alert('GAGAL MENGHAPUS');
        </script>";
  header("Location: ../index.php");
}
?>
