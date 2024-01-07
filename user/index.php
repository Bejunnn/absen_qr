<?php
include '../koneksi.php';
// Start the session
session_start();

if (isset($_SESSION['sebagai'])) {
    if ($_SESSION['sebagai'] == 'admin') {
        header('Location: ../index.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Absensi | Homepage</title>
    <!-- Custom fonts for this template-->
    <link rel="icon" href="../assets/img/smkmadya.png">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">

</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Prompt', sans-serif;
    }

    .container {
        background-color: #fff;
        width: 400px;
        height: 250px;
        border-radius: 7px;
        padding: 20px;
        transition: .1s;
    }

    .header h1 {
        font-size: 23px;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .header p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    input,
    button {
        width: 100%;
        height: 50px;
        outline: none;
        border-radius: 5px;
    }

    button {
        border: none;
        background-color: #1d68d8;
        font-size: 15px;
        color: #fff;
        cursor: pointer;
    }

    input {
        border: 1px solid #8b8a8a;
        padding-left: 10px;
        margin-bottom: 15px;
        font-size: 20px;
    }

    .qr-code {
        padding: 25px 0;
        border: 1px solid #ccc;
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        opacity: 0;
        pointer-events: none;
        transition: .5s;
    }

    .container.active {
        height: 490px;
    }

    .container.active .qr-code {
        opacity: 1;
        pointer-events: auto;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <div class="sticky-top">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div>
               <img src="../assets/img/madep.png" alt="logo" width="40px">
               <span class="brand-text">Absensi</span>
                </div>
               
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="../logout.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <div class="text-center d-none d-md-inline">
                <a class="btn" id="sidebarToggle"><i class="fas fa-bars"></i></a>

            </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-0 col-sm-0 clearfix">
                        <ul class="navbar-nav pull-left">
                            <li><h4><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h4>

						</li>
                        </ul>
                    </div>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle" src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a href="../logout.php" class="dropdown-item" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->            
                <?php
                    $a = 0;
                    $query  = "SELECT count(nis) AS am FROM masuk WHERE id";
                    $sql    = mysqli_query($koneksi, $query);
                    if(mysqli_num_rows($sql)>0){
                    $data = mysqli_fetch_assoc($sql);
                    $a = $data['am'];
                    }
                
                    $b = 0;
                    $query  = "SELECT count(id) AS ap FROM pulang WHERE id";
                    $sql    = mysqli_query($koneksi, $query);
                    if(mysqli_num_rows($sql)>0){
                    $data = mysqli_fetch_assoc($sql);
                    $b  = $data['ap'];
                    }
                ?>
                
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <br>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                    </div>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">QR Code</h6>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="header">
                                        <h1>QR Code Generator</h1>
                                        <p>Ketik NIS to Generate a QR Code</p>
                                    </div>
                                    <div class="input-form">
                                        <!-- Corrected class name here -->
                                        <input type="text" class="qr-input" value="<?php echo $nis; ?>" readonly>
                                        <button class="generate-btn">Generate QR Code</button>
                                    </div>
                                    <div class="qr-code">
                                        <img class="qr-image">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="../assets/js/demo/chart-area-demo.js"></script>
        <script src="../assets/js/demo/chart-pie-demo.js"></script>
        <script>
            var container = document.querySelector(".container");
            var generateBtn = document.querySelector(".generate-btn");
            // Corrected class name here
            var qrInput = document.querySelector(".qr-input");
            var qrImg = document.querySelector(".qr-image");
            generateBtn.onclick = function() {
                if (qrInput.value.length > 0) {
                    generateBtn.innerText = "Generating QR Code...";
                    qrImg.src = "https://api.qrserver.com/v1/create-qr-code/?size=170x170&data=" + qrInput.value;
                    qrImg.onload = function() {
                        container.classList.add("active");
                        generateBtn.innerText = "Generate QR Code";
                    }
                }
            }
        </script>
</body>

</html>