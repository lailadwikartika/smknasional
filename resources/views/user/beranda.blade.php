<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Beranda Sekolah - SMK Nasional Nganjuk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('beranda') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <img src="{{ asset('assets/logo.jpg') }}" alt="Logo SMK Nasional Nganjuk"
                    style="height: 60px; width: auto; margin-right: 12px;">
                <h1 class="sitename m-0 fs-4">SMK Nasional Nganjuk</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <a href="{{ route('beranda') }}" class="active">Beranda</a>
                    <li class="dropdown"><a href="#"><span>Profile</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
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
                    <li class="dropdown"><a href="#"><span>Data Kepegawaian</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <a href="{{ route('data-kepala-sekolah') }}">Data Kepala Sekolah</a>
                            <a href="{{ route('data-guru') }}">Data Guru</a>
                        </ul>
                    </li>
                    <a href="{{ route('data-pbdb') }}">PPDB</a>
                    <a href="{{ route('lokasi') }}">Lokasi</a>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section class="hero-section position-relative d-flex align-items-center justify-content-center" style="min-height:80vh; background: url('{{ asset('assets/foto sekolah.jpg') }}') center center/cover no-repeat;">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.55);"></div>
            <div class="container position-relative z-2">
                <div class="row justify-content-center align-items-center" style="min-height:70vh;">
                    <div class="col-lg-10 text-center text-white">
                        <h1 class="display-2 fw-bold mb-3 text-white" style="line-height:1.1;">Selamat Datang di <br>SMK Nasional Nganjuk</h1>
                        <p class="lead mb-4 fs-4 text-white">Membangun Generasi Unggul, Berkarakter, dan Berprestasi</p>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                            <a href="{{ route('sejarah-sekolah') }}" class="btn btn-primary btn-lg px-5 text-white">Tentang Kami</a>
                            <a href="#kontak" class="btn btn-outline-light btn-lg px-5 text-white">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sambutan-kepala-sekolah" class="py-5 bg-white border-bottom">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-3 text-center mb-4 mb-md-0">
                        <div class="card border-0 shadow-sm p-3">
                            @if ($kepala && $kepala->foto)
                                <img src="{{ asset('storage/' . $kepala->foto) }}" alt="{{ $kepala->nama }}" class="img-fluid rounded-circle mb-2" >
                            @else
                                <img src="{{ asset('assets/img/person/default.jpg') }}" alt="Default Foto" class="img-fluid rounded-circle mb-2" >
                            @endif
                            <div class="fw-bold">{{ $kepala->nama ?? '-' }}</div>
                            <div class="text-muted small">Kepala Sekolah</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="bg-light rounded p-4 shadow-sm h-100">
                            <h2 class="mb-3">Sambutan Kepala Sekolah</h2>
                            @if ($kepala)
                                <p class="mb-1">Assalamu'alaikum warahmatullahi wabarakatuh,</p>
                                <div>{!! nl2br(e($kepala->sambutan ?? 'Belum ada sambutan kepala sekolah.')) !!}</div>
                                <p class="mt-3">Wassalamu'alaikum warahmatullahi wabarakatuh.</p>
                            @else
                                <p class="text-muted">Belum ada data kepala sekolah yang ditampilkan.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Ekstrakurikuler Section -->
    <section id="ekstrakurikuler" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Ekstrakurikuler</h2>
            <div class="row g-4">
                @forelse ($ekstrakurikuler as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://via.placeholder.com/400x250' }}"
                                class="card-img-top" alt="Foto {{ $item->nama_ekstrakurikuler }}" style="height: 150px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h6 class="card-title fw-bold">{{ $item->nama_ekstrakurikuler }}</h6>
                                <div class="small text-muted">{{ $item->keterangan }}</div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Belum ada data ekstrakurikuler yang tersedia.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
            </main>
    
    
    <!-- Footer -->
    <footer id="kontak" class="footer py-5 border-top">
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
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

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
        <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
