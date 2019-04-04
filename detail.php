s<?php 

include ("koneksi.php");


?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DETAIL BARANG - UKK SMK Madinatul Quran</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Tunggu Sebentar...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
   
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">APP Sarana dan Prasarana</a>
            </div>
        </div>
    </nav>

    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/logomq.jpg" width="76" height="76" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rizqi Alhamdah</div>
                    <div class="email">rizqialhamdah73@gmail.com</div>
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu Utama</li>
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="barang.php">
                            <i class="material-icons">business</i>
                            <span>Data Barang</span>
                        </a>
                    </li>
                    <li>
                        <a href="laporan.php" target="_blank">
                            <i class="material-icons">print</i>
                            <span>Laporan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - SMK Madinatul Quran.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>
    <?php
    $ambildata=mysql_query("SELECT * FROM barang WHERE id_barang='$_GET[nomorurut]' ") or die(mysql_error());
    $munculkandata=mysql_fetch_array($ambildata);
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DETAIL BARANG : 
                    <?php echo $munculkandata['nama_barang']; ?>
                </h2>
            </div>
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a href="barang.php" class="btn bg-green waves-effect">
                            <i class="material-icons">keyboard_backspace</i> <span>KEMBALI</span></a>
                        </div>
                        <div class="body table-responsive">
                            
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th scope="row">Kode Barang</th>
                                        <td>:</td>
                                        <td><?php echo $munculkandata['kode_barang']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Barang</th>
                                        <td>:</td>
                                        <td><?php echo $munculkandata['nama_barang']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Barang</th>
                                        <td>:</td>
                                        <td><?php echo $munculkandata['jenis_barang']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Satuan</th>
                                        <td>:</td>
                                        <td><?php echo $munculkandata['satuan']; ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Stok</th>
                                        <td>:</td>
                                        <td> <?php echo $munculkandata['stok'];?> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>