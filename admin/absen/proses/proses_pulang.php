<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../../koneksi.php';

	// membuat variabel untuk menampung data dari form

  $nis = $_POST['nis'];
  $jam_pulang = $_POST['jam_pulang'];



//cek dulu jika ada foto produk jalankan coding ini
if($nis != "") {
   $query = "INSERT INTO pulang ( nis, jam_pulang) VALUES ( '$nis','$jam_pulang')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Anda Berhasil Absen.');window.location='../index.php';</script>";
                  }
}

 