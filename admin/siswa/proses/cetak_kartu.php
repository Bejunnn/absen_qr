<!doctype html>
<html class="no-js" lang="en">

<?php 
	include '../../../koneksi.php';
    
?>

<html>
<head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Data Siswa</title>
  <link rel="icon" href="../../../assets/img/smkmadya.png">
</head>
</head>

<body>

        <?php 
        $brgs=mysqli_query($koneksi,"SELECT * from data_siswa");
        while($row=mysqli_fetch_array($brgs)){

            ?>
            <body onload="window.print()">
            <div style="width: 850px;height: 260px;margin-bottom: -12px;padding:; background-image: url('../../../assets/img/balangko.png');">

            <img style="border-radius: 6px; position: absolute;margin-left: 30px;margin-top: 90px; width: 90px; height: 100px;overflow: hidden;" class="img-responsive img" src="../../../assets/images/<?php echo $row["img"];?>">
            
            <img style="position: absolute;margin-left: 45px;margin-top: 8px; width: 50px;" src="../../../assets/img/madep.png">

            <p style="color: #fff;position: absolute;padding-left: 85px;padding-top: 3px; width:300px; height: 40px;text-transform: uppercase;text-align: center;letter-spacing: 2px; font-size: 12px;"><b> SMK Madya Depok </b><br>Jl. Raya Leuwinanggung, Kec. Tapos, Kota Depok, <br> Jawa Barat 16456</p>

            <p style="letter-spacing: 2px;margin-left: 150px;padding-top: 90px;width: 240px; text-align: left; font-size: 15px"><b>KARTU ABSENSI SISWA</b></p>

            <p style="font-family: arial;font-size: 9px;position: absolute;margin-left: 35px;margin-top: 80px;width: 83px;height:30px;text-align:center;position: center;float: center"><?php
                $tanggal = date ("j");
                $bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
                $bulan = $bulan[date("n")];
                $tahun = date("Y");
                $thn = $tahun+3;
            ?>Berlaku Selama <br><b> Menjadi Siswa </b></p>
                <!--- <php echo $tanggal ." ". $bulan ." ". $thn;?> --->


            <table cellspacing="0em" style="margin-top: -10px; padding-left: 150px; position: relative;font-family: arial;font-size: 10px;transition-property: 500px;width: 400px;height: 100px;"> 
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><?php echo "$row[nis]";?></td>
                </tr> 
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo "$row[nama]";?></td>
                </tr> 
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><?php echo "$row[jurusan]";?></td>
                </tr>
                <tr>
                    <td>TTL</td>
                    <td>:</td>
                    <td><?php echo "$row[tempat_l]";?>, <?php echo "$row[tanggal_l]";?></td>
                </tr> 
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo "$row[jenis_kelamin]";?></td>
                </tr> 
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo "$row[alamat]";?></td>
                </tr>
                
            </table>
            <p style="margin-top: -190px;padding-left: 560px;padding-top: 10px;font-size: 11px;"> <b style="font-size: 12px;">PERATURAN KARTU ABSENSI</b>
            <ol style="padding-left: 480px;font-family: arial;font-size: 11px;text-align: justify;padding-right: 30px;margin-top: -8px;">
                      <li>Kartu ini diterbitkan oleh SMK Madya Depok, segala penggunaan kartu ini diatur oleh pihak sekolah sesuai ketentuan dan syarat yang berlaku.</li>
                      <li>Setiap Siswa/i wajib membawa kartu ini untuk absen masuk dan pulang sesuai jadwal.</li>
                      <li>Kartu ini tidak boleh dialih pinjamkan/dititipkan kepada orang lain.</li>
                      <li>Bila menemukan kartu ini, mohon untuk segera laporkan ke pihak sekolah.</li>
                      <li>Bila kartu hilang akan dikenakan denda sebesar Rp.10.000,00 untuk biaya pembuatan kartu.</li>
            </ol>
            <p style="padding-left: 650px;font-family: arial;font-size: 10px;text-align: justify;padding-right: 25px;width: 35%;margin-top: -6px;">Mengetahui,<br><b>Kepala Sekolah<br><br><br><br>Uwoh Pramijaya, S.Pd.I.MM</b></p>
            <img style="padding-left: 620px;font-family: arial;font-size: 10px;text-align: justify;padding-right: 25px;width: 15%;margin-top: -65px;position: absolute;" src="../../../assets/img/ttd.png">
            </p>
        </div>
        <br>

    <?php 
        }
        ?>
										
</body>

</html>