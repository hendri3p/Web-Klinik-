<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Daftar Berobat Klinik Bidan Nyimas</title>
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
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?= base_url(); ?>assets/oneui/css/oneui.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/print.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/print.css" type="text/css" media="print">

    <!-- END Stylesheets -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/oneui/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/oneui/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/oneui/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/oneui/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/oneui/js/plugins/dropzone/dist/min/dropzone.min.css">
</head>

<body onload="print()">
    <!-- Page Container -->

    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
        <!-- Sidebar -->

        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" >
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
                                <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Kartu Pasien</h1>
                                <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Klinik Bidan Nyimas</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->
            <!-- Page Content -->
            <div class="content content-narrow">
                <div class="content">
                    <br>
                    <?php foreach ($pasien as $pas) { ?>
                    <!-- <center><a  class="btn btn-success" style="margin-top:1rem;"href="<?= base_url('c_cetak/print/').$pas['username'];?>"><i class="fa fa-print"></i>Print</a></center> -->
                    <div class="card mb-3 mx-auto bg-white" style="max-width: 500px;" >
                        <div class="card-title">
                            <h1 align="center" style="font-size:30px;">KARTU PASIEN</h1>
                            <p align="center" style="font-size:12px;">KLINIK BIDAN NYIMAS</p>
                            <h3 align="center" style="font-size:12px;">Jl.Poksai, Beringin Raya, Kec. Kemiling, Bandar Lampung</h3>
                        </div>
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text" style="font-size:12px;">Nama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  : <?= $pas['nama_user'];  ?></p>
                                <p class="card-text" style="font-size:12px;">Username&emsp;&emsp;&emsp;&emsp;&emsp; : <?= $pas['username'];  ?></p>
                                <p class="card-text" style="font-size:12px;">Umur&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : <?= $pas['umur']; ?></p>
                                <p class="card-text" style="font-size:12px;">Alamat&emsp;&emsp;&emsp;&emsp;&emsp;  &emsp; : <?= $pas['alamat'];  ?></p>
                                <p class="card-text" style="font-size:12px;">No.Hp &emsp; &emsp; &emsp;&emsp;&ensp; &emsp; : <?= $pas['no_telp'];  ?></p>
                                
                            </div>
                        </div>
                        <div class="col-md-2">
                        <img width="160" height="160" src="<?php echo base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
                        </div>
                    </div>
                </div>
            </div>
                <?php } ?>
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
    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="<?= base_url(); ?>assets/oneui/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Page JS Code -->
    <script src="<?= base_url(); ?>assets/oneui/js/pages/be_pages_dashboard.min.js"></script>
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/dropzone/dropzone.min.js"></script>
    <script>
    jQuery(function() { One.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']); });
    </script>
</body>

</html>