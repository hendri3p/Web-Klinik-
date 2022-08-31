<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Laporan Data Pasien</title>
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
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?= base_url(); ?>assets/oneui/css/oneui.min.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
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
                    <span class="smini-hide">
                        <span class="font-w700 font-size-h5">Halaman Admin</span>
                    </span>
                </a>
                <!-- END Logo -->
            </div>
            <!-- END Side Header -->
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="<?= base_url('c_admdash'); ?>">
                            <span class="nav-main-link-name font-size-h6">Dashboard</span>
                        </a>
                        <a class="nav-main-link active" href="<?= base_url('c_admrawatjalan'); ?>">
                            <span class="nav-main-link-name font-size-h6">Rawat Jalan</span>
                        </a>
                        <a class="nav-main-link active" href="<?= base_url('c_admrawatinap'); ?>">
                            <span class="nav-main-link-name font-size-h6">Rawat Inap</span>
                        </a>
                        <a class="nav-main-link active" href="<?= base_url('c_admdatapasien'); ?>">
                            <span class="nav-main-link-name font-size-h6">Laporan Data Pasien</span>
                        </a>
                        <a class="nav-main-link active" href="<?= base_url('c_daftarberobat'); ?>">
                            <span class="nav-main-link-name font-size-h6">Daftar Berobat</span>
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
                                <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Laporan Data Pasien</h1>
                                <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Klinik Bidan Nyimas</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->
            <!-- Page Content -->
            <div class="content">
            <!-- Dynamic Table Full -->
            <div class="block">
                <div class="block-content block-content-full">
                    <form action="" method="GET">
                    <div class="row" style="margin-bottom: 4px">
                        <div class="col-xs-4 col-xs-offset-4">
                            <form action="" method="GET">
                                <div class="input-group">
                                    <input type="date" name="tgl_berobat" class="form-control ml-3">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" value="Cari">Cari</button>
                                        <a href="<?= base_url('c_admdatapasien') ?>" class="btn btn-warning">Clear</a>
                                    </span>
                                </div>
                            </form>
                            <br>
                            <form action="" method="GET">
                                <div class="input-group">
                                    <input type="search" name="searchh" class="form-control ml-3" id="searchh" placeholder="Nama Pasien">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" value="Cari">Cari</button>
                                        <a href="<?= base_url('c_admdatapasien') ?>" class="btn btn-warning">Clear</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    </form>
                    <table class="table table-bordered table-responsive table-striped table-vcenter ">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 80px;">No</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>No.Hp</th>
                                <th>Pelayanan</th>
                                <th>Riwayat Penyakit</th>
                                <th>Keluhan</th>
                                <th>Resep Obat</th>
                                <th>Hasil Diagnosa</th>
                                <th>Pembayaran</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1;
                        foreach ($pasien as $pas) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $pas['tgl_berobat'] ?></td>
                                    <td><?php echo $pas['nama_user'] ?></td>
                                    <td><?php echo $pas['umur'] ?></td>
                                    <td><?php echo $pas['alamat'] ?></td>
                                    <td><?php echo $pas['no_telp'] ?></td>
                                    <td><?php echo $pas['jenis_perawatan'] ?></td>
                                    <td><?php echo $pas['riwayat_penyakit'] ?></td>
                                    <td><?php echo $pas['keluhan'] ?></td>
                                    <td><?php echo $pas['obat'] ?></td>
                                    <td><?php echo $pas['hasil_diagnosa'] ?></td>
                                    <td><?php echo $pas['pembayaran'] ?></td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->
        </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <script src="<?= base_url(); ?>assets/oneui/js/oneui.core.min.js"></script>

    <script src="<?= base_url(); ?>assets/oneui/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="<?= base_url(); ?>assets/oneui/js/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Page JS Code -->
    <script src="<?= base_url(); ?>assets/oneui/js/pages/be_pages_dashboard.min.js"></script>

    <!-- DataTables -->
        <script src="<?= base_url(); ?>assets/oneui/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>assets/oneui/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>assets/oneui/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="<?= base_url(); ?>assets/oneui/js/pages/be_tables_datatables.min.js"></script>            
</body>

</html>