<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lokasi Sekolah - SMK Nasional Nganjuk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="assets/logo.jpg" alt="Logo SMK Nasional Nganjuk" style="height: 60px; width: auto; margin-right: 12px;">
                <h1 class="sitename m-0 fs-4">SMK Nasional Nganjuk</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <a href="{{ route('beranda') }}">Beranda</a>
                    <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <!-- Contoh tombol setelah diubah -->
                            <a href="{{ route('visi-misi') }}">Visi & Misi</a>
                            <a href="{{ route('sejarah-sekolah') }}">Sejarah Sekolah</a>
                            <a href="{{ route('data-jurusan') }}">Data Jurusan</a>
                            <a href="{{ route('data-fasilitas') }}">Fasilitas</a>
                        </ul>
                    </li>
                    <a href="{{ route('data-struktur-organisasi') }}">Struktur Organisasi</a>
                    <a href="{{ route('data-bkk') }}">BKK</a>
                    <li class="dropdown"><a href="#"><span>Data Kepegawaian</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <a href="{{ route('data-kepala-sekolah') }}">Data Kepala Sekolah</a>
                            <a href="{{ route('data-guru') }}">Data Guru</a>
                        </ul>
                    </li>
                    <a href="{{ route('data-pbdb') }}">PPDB</a>
                    <a href="{{ route('lokasi') }}" class="active">Lokasi</a>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <!-- Konten Lokasi Sekolah -->
    <main class="container py-6">
    <section id="" class="">
    <h1 class="text-center mb-4">Lokasi SMK Nasional Nganjuk</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Alamat</h5>
                        <p class="card-text">
                            Jl. Diponegoro No.73, Nganjuk, Ganung Kidul, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64419
                        </p>
                    </div>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 340px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.651042940989!2d111.90184457591184!3d-7.604985292404877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b08028f672d%3A0xf38d14d81abf7e8f!2sYayasan%20Nasional%20Nganjuk%20Sekolah%20Menengah%20Kejuruan%20Nasional!5e0!3m2!1sid!2sid!4v1717002345678!5m2!1sid!2sid"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
            </div>
        </div>
    </main>
    </section>
    <!-- Footer -->

<!-- Footer -->
    <footer class="footer py-5 border-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6 col-lg-4">
                    <h5 class="mb-2">SMK Nasional Nganjuk</h5>
                    <p class="mb-0">Sekolah Menengah Kejuruan yang berkomitmen menghasilkan lulusan berkualitas dengan keterampilan yang dibutuhkan dunia industri.</p>
                    <h5 class="mt-4 mb-2">VISI</h5>
                    <p class="mb-0">Terwujudnya lulusan SMK yang bertakwa, terampil dan mandiri</p>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h6 class="mb-2">Kontak</h6>
                    <ul class="list-unstyled mb-0">
                        <li>Jl. P. Diponegoro No. 73</li>
                        <li>Nganjuk, Jawa Timur</li>
                        <li>(0358) 321160</li>
                        <li>07.00 - 13.00 WIB</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                    <h6 class="mb-2">Program</h6>
                    <p class="mb-1">Akuntansi</p>
                    <h6 class="mb-2">Ekstrakurikuler:</h6>
                    <ul class="mb-0">
                        <li>Pramuka</li>
                        <li>Volleyball</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <small>© 2024 SMK Nasional Nganjuk. Yayasan Nasional Nganjuk.</small>
            </div>
        </div>
    </footer>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
