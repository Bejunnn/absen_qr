<?php

include 'koneksi.php';

error_reporting(0);
session_start();

if (isset($_SESSION['sebagai'])) {
  if ($_SESSION['sebagai'] == 'admin') {
    header("Location: admin/index.php");
    exit;
  } elseif ($_SESSION['sebagai'] == 'user') {
    header("Location: user/index.php");
    exit;

  }
}

if (isset($_POST['btn-login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM login WHERE username='$username' and password='$password'";
  $result = mysqli_query($koneksi, $sql);
  if (mysqli_num_rows($result) === 1) {
    $_SESSION['username'] = true;
    $rows = mysqli_fetch_assoc($result);
    if ($rows['sebagai'] == 'admin') {
      $_SESSION['sebagai'] = $rows['sebagai'];
      $_SESSION['nama'] = $rows['nama'];
      // $_SESSION['id'] = $rows['password'];
      return header("Location: admin/index.php");

      if (isset($_SESSION['username'])) {
        header("Location: admin/index.php");
        exit;
      }
    } elseif ($rows['sebagai'] == 'user') {
      $_SESSION['sebagai'] = $rows['sebagai'];
      $_SESSION['nama'] = $rows['nama'];
      // $_SESSION['id'] = $rows['password'];
      return header("Location: user/index.php");


      if (isset($_SESSION['username'])) {
        header("Location: user/index.php");
        exit;
      }
    }
  } else {
    echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <link rel="icon" href="assets/img/smkmadya.png">
  <meta charset="UTF-8">
  <title>Absensi | Admin Login</title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"><link rel="stylesheet" href="assets/css/style.css">

</head>
<style>
  .text-2{
    color: lightslategray;
    font-weight: bold;
  }
</style>
<body>
<!-- partial:index.partial.html -->
<form method="post" class="login">
  <input type="text" name="username" id="username" placeholder="Username" >
  <input type="password" name="password" id="password" placeholder="Password">
  <button type="submit" class="btn-login" name="btn-login">Login</button>
  <a href="index.php" class="text-2">Go to Siswa Page</a>
</form>
<!-- partial -->
  
</body>
</html>
