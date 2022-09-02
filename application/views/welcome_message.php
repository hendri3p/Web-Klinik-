<!DOCTYPE html>
<html lang="en">

<head>
    <title>Klinik Bidan Nyimas</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.theme.default.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/tooplate-style.css">

    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/images/Logo_Bidan_Nyimas-3.png">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <!-- PRE LOADER -->
    <!-- HEADER -->

    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- lOGO TEXT HERE -->
                <a class="navbar-brand"></i>Klinik Bidan Nyimas</a>
            </div>
            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#top" class="smoothScroll">Beranda</a></li>
                    <li><a href="#appointment" class="#smoothScroll">Daftar Akun</a></li>
                    <li><a href="#google-map" class="smoothScroll">Kontak</a></li>
                    <li class="appointment-btn"><a href="#about">Login</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                    <div class="item item-first">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Selamat Datang Bunda</h3>
                                <h1>Klinik Bidan Nyimas</h1>
                                <a href="#google-map" class="section-btn btn btn-default smoothScroll">Jadwal Bidan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Selamat datang di </i>Klinik Bidan Nyimas</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <p>Hai Bunda, </p>
                            <p>Terimakasih telah memercayai klinik bidan nyimas untuk menjaga kesehatan bunda dan si buah hati</p>
                        </div>
                        <figure class="profile wow fadeInUp" data-wow-delay="1s">
                            <img src="assets/images/Ibu Dinda.jpeg" class="img-responsive" alt="">
                            <figcaption>
                                <h3>Nyimas Hamidayanti Amd.Keb</h3>
                                <p>Kepala Bidan</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="<?= base_url('Welcome/login'); ?>">
                        <!-- SECTION TITLE -->
                        <div class="profile wow fadeInUp" data-wow-delay="1s">
                            <h2>Login Akun</h2>
                            <h4>Sudah punya akun? Yuk, login!</h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                           <div class="col-md-12 col-sm-12">
                                <label></label>
                                <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Login</button>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container" >
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <!-- CONTACT FORM HERE -->

                    <form id="appointment-form" role="form" method="post" action="<?= base_url('Welcome/register'); ?>">
                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Daftar Akun</h2>
                            <h4>Belum punya akun? Yuk, daftar sekarang!</h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="nama_user">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="password">Password</label>
                                <input type="text" name="password"  id="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="Umur">Umur</label>
                                <input type="text" class="form-control" id="umur" name="umur" placeholder="Umur">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="Alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" >
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="no_telp">Nomor Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-success btn-lg btn-block"  name="submit">Daftar Akun</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- GOOGLE MAP -->
    <section id="google-map">
        <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
     -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d293689.2454127059!2d104.96343285690519!3d-5.4388432602345205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40d18b246dead7%3A0x84828b621fa759c7!2sBPM%20Nyimas!5e0!3m2!1sid!2sid!4v1646914234442!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Alamat</h4>
                              <p>Jl. Poksai, Beringin Raya, </p>
                              <p>Kec. Kemiling, Kota Bandar Lampung, </p>
                              <p>35155</p>
                            <div class="contact-info">
                                <p><i class="fa fa-phone"></i> 0812-4060-2407</p>
                            </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Jenis Pelayanan</h4>
                              <p>Bersalin</p>
                              <p>KB</p>
                              <p>Imunisasi</p>
                              <p>Pemeriksaan Kehamilan</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                <h4 class="wow fadeInUp" data-wow-delay="0.4s">Jam Kerja</h4>
                                <p>Setiap Hari <span>06:00 - 20:00 WIB</span></p>
                              </div> 
                         </div>
                    </div>

                
                <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-12 col-sm-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2022 Nur Adinda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- SCRIPTS -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.sticky.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/smoothscroll.js"></script>
    <script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
</body>

</html>