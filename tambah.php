<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>TAMBAH BARANG - UKK SMK Madinatul Quran</title>
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

    <section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH BARANG</h2>
                        </div>
                        <div class="body">
                            <form action="tambah_proses.php" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kode_barang" required>
                                        <label class="form-label">kode barang</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name ="nama_barang" required>
                                        <label class="form-label">nama barang</label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <select class="form-control show-tick" name ="jenis_barang"required>
                                        <option value="">-- jenis barang --</option>
                                        <option value="Minuman">Minuman</option>
                                        <option value="Pakaian">Pakaian</option>
                                        <option value="Minyak Wangi">Minyak Wangi</option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Alat tulis">Alat tulis</option>
                                        <option value="Obat">Obat</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control show-tick" name = "satuan" required>
                                        <option value="">-- Satuan --</option>
                                        <option value="Box">Box</option>
                                        <option value="Butir">Butir</option>
                                        <option value="Kilogram">Kilogram</option>
                                        <option value="Meter">Meter</option>
                                        <option value="Liter">Liter</option>
                                        <option value="Kotak">Kotak</option>
                                        <option value="Biji">Biji</option>
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name= "stok" required>
                                        <label class="form-label">Stok</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit"><i class="material-icons">add_box</i><span> TAMBAH</span></button>
                                <a href="barang.php" class="btn bg-red waves-effect">
                                <i class="material-icons">cancel</i> <span>BATAL</span></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
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