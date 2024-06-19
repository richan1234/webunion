<?php
// todo
// session_start();

// // Panggil file koneksi
// require_once "conn.php";

// // Memeriksa apakah pengguna sudah login
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
//     header("Location: index.php");
//     exit();
// }

// // Mengambil ID pengguna dari sesi
// $IDUser = $_SESSION['IDUser'];

// // Query untuk mengambil data profil pengguna
// $sql = "SELECT u.IDUser, u.IDProdi, u.NIM, u.Nama, u.Email, u.Foto, u.IPK, p.NamaJurusan 
//         FROM user u 
//         INNER JOIN prodi p ON u.IDProdi = p.IDProdi 
//         WHERE u.IDUser = $IDUser";

// $result = $conn->query($sql);

// // Jika data ditemukan
// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     $nama_lengkap = $row['Nama'];
//     $nim = $row['NIM'];
//     $prodi = $row['NamaJurusan'];
//     $ipk = $row['IPK'];
//     $email = $row['Email'];
//     $photo = $row['Foto'];
// } else {
//     // Handle jika data pengguna tidak ditemukan
// }

// Menutup koneksi ke database (tidak perlu jika sudah di-handle di file koneksi)
// $conn->close();
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Union</title>
    <link rel="icon" href="<?= base_url('img/favicon.png') ?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url('css/animate.css') ?>" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('css/all.css') ?>" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url('css/flaticon.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/themify-icons.css') ?>" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url('css/slick.css') ?>" />
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/profile.css') ?>" />
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?= base_url('home') ?>">
                            <img src="<?= base_url('img/logo.png') ?>" alt="logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('home') ?>">Halaman Utama</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kategori
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="<?= base_url('home/kategori_akademik') ?>">Akademik</a>
                                        <a class="dropdown-item" href="<?= base_url('home/kategori_nonakademik') ?>">Non-Akademik</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('home/berita') ?>">Berita</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Form Pengajuan
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="<?= base_url('form/form_lomba') ?>">Info Lomba</a>
                                        <a class="dropdown-item" href="<?= base_url('form/form_tim') ?>">Tim Lomba</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href=""><i class="ti-bell"></i></a>
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <a href="<?= base_url('mahasiswa/profile') ?>" class="icon-link">
                                        <i class="ti-user"></i>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    <div class="container-fluid">
        <div class="row flex-wrap">
            <div class="bg-dark col-auto col-md-2 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
                <ul class="nav nav-pills flex-column mt-4">
                    <li class="nav-item py-2 py-sm-0 my-3 my-sm-4 my-lg-4">
                        <a href="<?= base_url('mahasiswa/profile') ?>" class="nav-link text-center text-white">
                            <img src="<?= base_url('sidebar/assets/Customer.svg') ?>" alt="" class="icon img-fluid" width="70" height="70"><br>
                            <span class="fs-4 d-none d-sm-inline">PROFIL</span>
                        </a>
                    </li>
                    <li class="nav-item py-2 py-sm-0 my-4 my-sm-4 my-lg-3">
                        <a href="<?= base_url('mahasiswa/profile_info_lomba') ?>" class="nav-link text-center text-white">
                            <img src="<?= base_url('sidebar/assets/Edit Property.svg') ?>" alt="" class="icon img-fluid" width="70" height="70"><br>
                            <span class="fs-4 d-none d-sm-inline">PENGAJUAN<br>LOMBA</span>
                        </a>
                    </li>
                    <li class="nav-item py-2 py-sm-0 my-4 my-sm-4 my-lg-3">
                        <a href="<?= base_url('mahasiswa/profile_tim_lomba') ?>" class="nav-link text-center text-white">
                            <img src="<?= base_url('sidebar/assets/People.svg') ?>" alt="" class="icon img-fluid" width="70" height="70"><br>
                            <span class="fs-4 d-none d-sm-inline">TIM</span>
                        </a>
                    </li>
                    <li class="nav-item py-2 py-sm-0 my-4 my-sm-4 my-lg-3">
                        <a href="#" class="nav-link text-center text-white">
                            <img src="<?= base_url('sidebar/assets/Settings.svg') ?>" alt="" class="icon img-fluid" width="70" height="70"><br>
                            <span class="fs-4 d-none d-sm-inline">PENGATURAN</span>
                        </a>
                    </li>
                    <li class="nav-item py-2 py-sm-0 my-4 my-sm-4 my-lg-3">
                        <a href="<?= base_url('auth/mahasiswa/logout') ?>" class="nav-link text-center text-white">
                            <img src="<?= base_url('sidebar/assets/Logout.svg') ?>" alt="" class="icon img-fluid" width="70" height="70"><br>
                            <span class="fs-4 d-none d-sm-inline">KELUAR</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="main-content col-auto min-vh-100 d-flex flex-column p-4 p-sm-4 p-md-5 p">
                <div class="container">
                    <h1>Profil Akun Anda</h1>
                    <div class="profile-info">
                        <div class="profile-display">
                            <img src="<?= base_url('uploads/mahasiswa/') . $mahasiswa['mahasiswa']['photo'] ?>" alt="Foto Profil" class="profile-picture">
                            <div class="profile-details">
                                <p><strong>Nama Lengkap:</strong> <?= $mahasiswa['mahasiswa']['nama_lengkap'] ?></p>
                                <p><strong>NIM:</strong> <?= $mahasiswa['mahasiswa']['NIM'] ?></p>
                                <p><strong>Prodi:</strong> <?= $prodi['nama_prodi'] ?></p>
                                <p><strong>IPK:</strong> <?= $mahasiswa['mahasiswa']['ipk'] ?></p>
                                <p><strong>Email:</strong> <?= $mahasiswa['mahasiswa']['email'] ?></p>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn edit-btn" onclick="window.location.href='<?= base_url('mahasiswa/edit_profile') ?>'">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
    </div>


    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="footer_iner section_bg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-lg-3">
                        <div class="single_footer_part">
                            <h4>About Us</h4>
                            <p>
                                Heaven fruitful doesn't over for these theheaven fruitful does
                                over days appear creeping seasons sad behold beari ath of it
                                fly signs bearing be one blessed after.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="single_footer_part">
                            <h4>Contact Info</h4>
                            <p>Address :Your address goes here, your demo address.</p>
                            <p>Phone : +8880 44338899</p>
                            <p>Email : info@colorlib.com</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="single_footer_part">
                            <h4>Important Link</h4>
                            <ul class="list-unstyled">
                                <li><a href="">WHMCS-bridge</a></li>
                                <li><a href="">Search Domain</a></li>
                                <li><a href="">My Account</a></li>
                                <li><a href="">Shopping Cart</a></li>
                                <li><a href="">Our Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="single_footer_part">
                            <h4>Newsletter</h4>
                            <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=72f2e839d961a245c79f87a4f&amp;id=21f8c8f4de" method="get" class="subscribe_form relative mail_part">
                                    <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '" />
                                    <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                        Subscribe
                                    </button>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with
                                <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="<?= base_url('js/jquery-1.12.1.min.js') ?>"></script>
    <!-- popper js -->
    <script src="<?= base_url('js/popper.min.js') ?>"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <!-- easing js -->
    <script src="<?= base_url('js/jquery.magnific-popup.js') ?>"></script>
    <!-- swiper js -->
    <script src="<?= base_url('js/swiper.min.js') ?>"></script>
    <!-- swiper js -->
    <script src="<?= base_url('js/masonry.pkgd.js') ?>"></script>
    <!-- particles js -->
    <script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery.nice-select.min.js') ?>"></script>
    <!-- slick js -->
    <script src="<?= base_url('js/slick.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery.counterup.min.js') ?>"></script>
    <script src="<?= base_url('js/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('js/contact.js') ?>"></script>
    <script src="<?= base_url('js/jquery.ajaxchimp.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery.form.js') ?>"></script>
    <script src="<?= base_url('js/jquery.validate.min.js') ?>"></script>
    <script src="<?= base_url('js/mail-script.js') ?>"></script>
    <!-- custom js -->
    <script src="<?= base_url('js/custom.js') ?>"></script>
</body>

</html>