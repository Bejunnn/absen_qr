<?php
session_start();
include "koneksi.php";
if (isset($_POST['nis']) && isset($_POST['nama'])) {
  // Get user input
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];

// Query to check user credentials
$query = "SELECT * FROM siswa WHERE nis='$nis' AND nama='$nama'";
$result = $koneksi->query($query);

if ($result->num_rows == 1) {
    // Login successful
    $_SESSION['nama'] = $nama;
    $_SESSION['nis'] = $nis;
    header("Location: user/index.php"); // Redirect to dashboard or any other page
} else {
    // Login failed
    echo "<script>alert('nisn atau nama Anda salah. Silahkan coba lagi!')</script>";
}
}
$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
<link rel="icon" href="../assets/img/smkmadya.png">
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"><link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form method="post" class="login">
  <input type="text" name="nis" id="nis" placeholder="nis" >
  <input type="text" name="nama" id="nama" placeholder="nama">
  <button type="submit" class="btn-login" name="btn-login">Login</button>
  <a href="admin.php">Go to Admin Page</a>

</form>


<a href="https://codepen.io/davinci/" target="_blank">check my other pens</a>
<!-- partial -->
  
</body>
</html>
