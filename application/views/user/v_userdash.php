<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Klinik Bidan Nyimas</title>
    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Icons -->

    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?= base_url(); ?>assets/oneui/css/oneui.min.css">

    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
        <!-- Sidebar -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" href="index.html">
                   <!--  <i class="fa fa-circle-notch text-primary"></i> -->
                    <span class="smini-hide">
                        <span class="font-w700 font-size-h5">Selamat Datang</span> 
                    </span>
                </a>
                <!-- END Logo -->
            </div>
            <!-- END Side Header -->
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="c_usrdash">
                            <span class="nav-main-link-name font-size-h6">Dashboard</span>
                        </a>
                        <a class="nav-main-link active" href="<?= base_url('c_userdaftarberobat'); ?>">
                            <span class="nav-main-link-name font-size-h6">Daftar Berobat</span>
                        </a>
                        <a class="nav-main-link active" href="<?= base_url('c_usrrekammedis'); ?>">
                            <span class="nav-main-link-name font-size-h6">Rekam Medis</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </nav>
        <!-- END Sidebar -->
        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-image overflow-hidden" style="background-image: url('assets/images/slider3.jpg');">
                <div class="bg-primary-dark-op">
                    <div class="content content-narrow content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-4 mb-5 text-center text-sm-left">
                            <div class="flex-sm-fill">
                                <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>
                                <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Klinik Bidan Nyimas</h2>
                            </div>
                            <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                                <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                    <a class="btn btn-danger btn-lg btn-block" data-toggle="click-ripple" href="<?= base_url('welcome/logout'); ?>">
                                        <i class="si si-logout"></i> Logout
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->
            <!-- Page Content -->
            <div class="content content-narrow">
                <div class="content">
                    <!-- Simple Ribbon -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Glass on Background Color -->
                            <div class="block">
                                <div class="bg-image" style="background-color: #1f939b;">
                                    <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                        <div class="text-center py-6">
                                            <h3 class="text-white mb-0">Daftar Berobat</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <a href="<?= base_url('c_userdaftarberobat');?>"><button type="button" class="btn btn-success btn-lg btn-block">Daftar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Glass on Background Color -->
                        </div>
                        <div class="col-md-6">
                            <!-- Glass on Background Image -->
                            <div class="block">
                                <div class="bg-image" style="background-color: #1f939b;">
                                    <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                        <div class="text-center py-6">
                                            <h3 class="text-white mb-0">Kartu Berobat</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <a href="<?= base_url('c_cetak');?>"><button type="button" class="btn btn-success btn-lg btn-block">Unduh</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Glass on Background Image -->
                        <div class="col-md-6">
                            <!-- Glass on Background Image -->
                            <div class="block">
                                <div class="bg-image" style="background-color: #1f939b;">
                                    <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                        <div class="text-center py-6">
                                            <h3 class="text-white mb-0">Rekam Medis Pasien</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <a href="<?= base_url('c_usrrekammedis'); ?>"><button type="button" class="btn btn-success btn-lg btn-block">Lihat</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </div>
                </div>
                <!-- END Simple Ribbon -->
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <script src="<?= base_url(); ?>assets/oneui/js/oneui.core.min.js"></script>

    <script src="<?= base_url(); ?>assets/oneui/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Page JS Code -->
    <script src="<?= base_url(); ?>assets/oneui/js/pages/be_pages_dashboard.min.js"></script>
</body>

</html>