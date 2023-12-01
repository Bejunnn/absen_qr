<?php
session_start();
include "koneksi.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
  // Get user input
  $username = $_POST['username'];
  $password = $_POST['password'];

// Query to check user credentials
$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $koneksi->query($query);

if ($result->num_rows == 1) {
    // Login successful
    $_SESSION['username'] = $username;
    header("Location: admin/index.php"); // Redirect to dashboard or any other page
} else {
    // Login failed
    echo "Invalid username or password";
}
}
$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <link rel="icon" href="assets/img/smkmadya.png">
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"><link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form method="post" class="login">
  <input type="text" name="username" id="username" placeholder="Username" >
  <input type="text" name="password" id="password" placeholder="Password">
  <button type="submit" class="btn-login" name="btn-login">Login</button>
</form>
<!-- partial -->
  
</body>
</html>
