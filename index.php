<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Presensi Siswa</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
            urls: ['assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
</head>

<body>

    <div class="wrapper overlay-sidebar">
        <div class="main-header" style="background-color: #273B4A;">
            <!-- Logo Header -->
            <div class="container">
                <div class="logo-header" data-background-color="blue2">

                    <a href="index.php">
                        <img src="assets/img/smk.png" alt="navbar brand" class="navbar-brand" width="40">
                        <b class="text-white">Presensi Siswa</b>
                    </a>
                </div>
            </div>
            <!-- End Logo Header -->
                 <!-- End Logo Header -->
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="container">
                        <div class="page-inner py-5">
                            <div class="d-flex justify-content-center">
                                <center><div> 
                                    <h1 class="text-white pb-2 fw-bold">Selamat Datang di Aplikasi Presensi Siswa</h1>
                                    <h2 class="text-white op-7 mb-2">SMK Wikrama Bogor</h2>
                                </div></center>

                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="page-inner mt--5">
                    <!-- <div class="row row-card-no-pd mt--2"> -->
        </div>
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="container">
                        <div class="page-inner py-5">
                        <div class="col-md-4 ml-auto mr-auto col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <center>
                                        <h4 class="card-title"><b>Masuk Ke Aplikasi</b></h4>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center"
                                        id="pills-tab-with-icon" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php">
                                                <i class="flaticon-profile"></i>
                                                Masuk
                                            </a>
                                        </li>
                                        <li class="nav-item">
											<a class="nav-link" href="admin/admin.php">
												<i class="flaticon-profile-1"></i>
												Admin
											</a>
										</li>

                                    </ul>

                                </div>
                            </div>
                        </div>




                    <!-- </div> -->

                </div>
            </div>
        </div>
    </div>



    <footer class="footer">
        <div class="text-center">
            &copy; <?php echo date('Y');?> Presensi Siswa SMK Wikrama Bogor</a>
            </div>
    </footer>

    </div>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="assets/js/atlantis.min.js"></script>



</body>

</html>