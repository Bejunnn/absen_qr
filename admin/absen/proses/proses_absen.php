<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../../koneksi.php';

	// membuat variabel untuk menampung data dari form

  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas= $_POST['kelas'];
  $jam_masuk = $_POST['jam_masuk'];



//cek dulu jika ada foto produk jalankan coding ini
if($nis != "") {
   $query = "INSERT INTO masuk ( nis, nama, kelas, jam_masuk) VALUES ( '$nis','$nama','$kelas','$jam_masuk')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Anda Berhasil Absen.');window.location='../in.php';</script>";
                  }
}

 