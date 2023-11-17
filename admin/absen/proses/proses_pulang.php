<?php 
include "../../../koneksi.php";
// ambil id dari url
$id = $_GET['id_absen'];
date_default_timezone_set('Asia/Jakarta');
// tampilkan data seuai id
$result = mysqli_query($koneksi, "SELECT * FROM absen where id_absen");
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$time_out =date('Y-m-d H:i:s');
// ubah status_pembayaran transaksi laundry menjadi lunas = 1
$result = mysqli_query($koneksi, "UPDATE absen SET status = 'pulang', jam_pulang = '$time_out' WHERE id_absen = '$id'");

if ($result) {
  echo"<script>
    alert('tamu dengan nama sudah Check Out'); window.location='../index.php';
  </script>";
} else {
  echo "<script>
          alert('data gagal diubah!'); window.location='../index.php';
      </script>";
}

?>