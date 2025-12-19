<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Data Guru - SMK Nasional Nganjuk</title>
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
          <li class="dropdown"><a href="#" class="active"><span>Data Kepegawaian</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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

<!-- Konten Data Kepala Sekolah -->
<main class="container py-6">
  <section id="" class="">
  <h1 class="text-center mb-4">Guru SMK Nasional Nganjuk</h1>

    <div class="row gy-4">
        @forelse($guru as $guru)
            <div class="col-lg-4 col-md-6">
                <div class="card shadow h-100">
                    @if ($guru->foto)
                        <img src="{{ asset('storage/' . $guru->foto) }}" class="card-img-top"
                            alt="Foto {{ $guru->nama }}" style="height: 300px; object-fit: cover;">
                    @else
                        <img src="{{ asset('assets/img/person/default.jpg') }}" class="card-img-top"
                            alt="Foto Default" style="height: 300px; object-fit: cover;">
                    @endif
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">{{ $guru->nama ?? '-' }}</h5>
                        <p class="card-text text-muted">{{ $guru->mata_pelajaran ?? 'Guru' }}</p>
                        <p class="card-text small"><strong>NIP/NUPTK:</strong> {{ $guru->nip_nuptk ?? '-' }}</p>
                        <p class="card-text small"><strong>Jenis Kelamin:</strong> {{ $guru->jenis_kelamin ?? '-' }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <div class="alert alert-info">Belum ada data guru yang tersedia.</div>
            </div>
        @endforelse
    </div>
</main>
</section>
<!-- Footer -->
    <footer class="footer py-5 border-top">
        <div class="container">
            <div class="row gy-4">
    <div class="col-md-6 col-lg-4">
        <h5 class="mb-3">SMK Nasional Nganjuk</h5>
        <p class="mb-3">
            Sekolah Menengah Kejuruan yang berkomitmen menghasilkan lulusan berkualitas dengan keterampilan yang dibutuhkan dunia industri.
        </p>
        
        <h5 class="mt-4 mb-2">VISI</h5>
        <p class="mb-0">Terwujudnya lulusan SMK yang bertakwa, terampil dan mandiri</p>
    </div>

    <div class="col-md-6 col-lg-4">
        <h6 class="mb-3">Kontak</h6>
        <ul class="list-unstyled mb-0">
            <li class="mb-1">Jl. P. Diponegoro No. 73</li>
            <li class="mb-1">Nganjuk, Jawa Timur</li>
            <li class="mb-1">(0358) 321160</li>
            <li>07.00 - 13.00 WIB</li>
        </ul>
    </div>

    <div class="col-md-6 col-lg-4">
        <h6 class="mb-3">Program</h6>
        <p class="mb-3">Akuntansi</p>
        
        <h6 class="mb-2">Ekstrakurikuler:</h6>
        <ul class="mb-0">
            <li class="mb-1">Pramuka</li>
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
