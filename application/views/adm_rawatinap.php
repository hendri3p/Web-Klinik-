<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pasien Rawat Inap</title>
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
    <link rel="shortcut icon" href="assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/Logo_Bidan_Nyimas-3.png">
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="oneui/css/oneui.min.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
    
        <!-- Sidebar -->
        <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" href="index.php">
                    <i class="fa fa-circle-notch text-primary"></i>
                    <span class="smini-hide">
                        <span class="font-w700 font-size-h5">Hi Admin</span>
                    </span>
                </a>
                <!-- END Logo -->
            </div>
            <!-- END Side Header -->
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="adm_dash.php">
                            <span class="nav-main-link-name">Dashboard</span>
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
                                <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Pasien Rawat Inap</h1>
                                <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Klinik Bidan Nyimas</h2>
                            </div>
                            <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                                <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                                    <a class="btn btn-success px-4 py-2" data-toggle="click-ripple" href="index.php">
                                        <i class="fa fa-save"></i> Simpan
                                    </a>
                                    <a class="btn btn-danger px-4 py-2" data-toggle="click-ripple" href="index.php">
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
            <div class="content">
                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-content block-content-full">
                            <div class="form-group">
                                <label for="tgl">Daftar Antrian Pasien</label>
                                <p></p>
                                <input type="date" class="btn btn-light" id="tgl" name="tgl" placeholder="Tanggal Berobat">
                                
                                <select class="btn btn-light" id="example-select" name="example-select">
                                    <option value="0">Pilih Jenis Perawatan</option>
                                    <option value="1">Bersalin</option>
                                    <option value="2">KB</option>
                                    <option value="3">Imunisasi</option>
                                    <option value="4">Pemeriksaan Kehamilan</option>
                                </select>
                            </div>
        
                                
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 80px;">Tgl</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>No.HP</th>
                                        <th>Pelayanan</th>
                                        <th>Keluhan</th>
                                        <th>Obat</th>
                                        <th>Hasil Diagnosa</th>
                                        <th>Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td class="text-center font-size-sm">10</td>
                                        <td class="font-w600 font-size-sm">
                                            <a href="be_pages_generic_blank.html">Umi</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm">
                                            35
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm">
                                            Kemiling
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm">
                                            08xxxxxxx
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm">
                                            Bersalin
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm">
                                            Mual dan Pusing
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm">
                                            <button class="btn btn-success">Upload</button> 
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm">
                                            <button class="btn btn-success">Edit</button>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm">
                                            <select class="form-control" id="example-select" name="example-select">
                                                <option value="0">Pilih Jenis</option>
                                                <option value="1">Umum</option>
                                                <option value="2">BPJS</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->                
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
    <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
    <script src="oneui/js/oneui.core.min.js"></script>
    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="oneui/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="oneui/js/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Page JS Code -->
    <script src="oneui/js/pages/be_pages_dashboard.min.js"></script>

    <!-- DataTables -->
        <script src="oneui/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="oneui/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="oneui/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="oneui/js/pages/be_tables_datatables.min.js"></script>            
</body>

</html>