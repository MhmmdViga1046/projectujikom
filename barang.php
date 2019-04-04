<?php
include("koneksi.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DATA BARANG - UKK Sarana dan Prasarana</title>
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

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
                    <li>
                        <a href="logout.php" target="_blank">
                            <i class="material-icons">logout</i>
                            <span>Logout</span>
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

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA BARANG
                </h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">

                            <a href="tambah.php" class="btn bg-green waves-effect">
                            <i class="material-icons">add_box</i> <span>TAMBAH DATA</span></a>
                        
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Satuan</th>
                                            <th>Stok</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  

                                    $no=1;
                                    $ambildata=mysql_query("SELECT * FROM barang order by id_barang ") or die (mysql_error());
                                    while ($eksekusi=mysql_fetch_array($ambildata)) {
                                    ?>                                       
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $eksekusi['kode_barang']; ?></td>
                                            <td><?php echo $eksekusi['nama_barang']; ?></ </td>
                                            <td><?php echo $eksekusi['jenis_barang']; ?></</td>
                                            <td><?php echo $eksekusi['satuan']; ?></</td>
                                            <td><?php echo $eksekusi['stok']; ?></</td>
                                            <td>
                                                <a href="hapus.php?nomorurut=<?php echo $eksekusi ['id_barang'];?>"class="btn btn-xs bg-red waves-effect">
                                                <i class="material-icons">delete</i></a>
                                                
                                                <a href="edit.php?nomorurut=<?php echo $eksekusi ['id_barang'];?>"class="btn btn-xs bg-orange waves-effect">

                                                <i class="material-icons">mode_edit</i></a> 
                                                
                                                <a href="detail.php?nomorurut=<?php echo $eksekusi ['id_barang'];?>"class="btn btn-xs bg-green waves-effect">
                                                <i class="material-icons">info</i></a>
                                            </td>
                                        </tr>
                                        <?php

                                        $no++;
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>