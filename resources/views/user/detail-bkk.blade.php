<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detail Lowongan - {{ $bkk->judul_lowongan }}</title>
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
        <img src="{{ asset('assets/logo.jpg') }}" alt="Logo SMK Nasional Nganjuk" style="height: 60px; width: auto; margin-right: 12px;">
        <h1 class="sitename m-0 fs-4">SMK Nasional Nganjuk</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <a href="{{ route('beranda') }}">Beranda</a>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <a href="{{ route('visi-misi') }}">Visi & Misi</a>
              <a href="{{ route('sejarah-sekolah') }}">Sejarah Sekolah</a>
              <a href="{{ route('data-jurusan') }}">Data Jurusan</a>
              <a href="{{ route('data-fasilitas') }}">Fasilitas</a>
            </ul>
          </li>
          <a href="{{ route('data-struktur-organisasi') }}">Struktur Organisasi</a>
          <a href="{{ route('data-bkk') }}" class="active">BKK</a>
          <li class="dropdown"><a href="#"><span>Data Kepegawaian</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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

<main class="container py-6 mt-6">
  <section class="section">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        @if ($bkk->foto)
          {{-- Menggunakan class img-fluid agar responsif dan mb-4 untuk margin bawah --}}
          <img src="{{ asset('storage/' . $bkk->foto) }}" class="img-fluid rounded mb-4" alt="{{ $bkk->judul_lowongan }}">
        @endif
        <h1 class="fs-2">{{ $bkk->judul_lowongan }}</h1>
        <p class="text-muted">
          <strong>Perusahaan:</strong> {{ $bkk->nama_perusahaan }} <br>
          <strong>Pendaftaran Dibuka:</strong> {{ \Carbon\Carbon::parse($bkk->tanggal_dibuka)->translatedFormat('d F Y') }} <br>
          <strong>Pendaftaran Ditutup:</strong> {{ \Carbon\Carbon::parse($bkk->tanggal_ditutup)->translatedFormat('d F Y') }}
        </p>
        <hr>
        <h5 class="mt-4">Persyaratan</h5>
        <div class="persyaratan-content">
            {!! nl2br(e($bkk->persyaratan)) !!}
        </div>
        <div class="mt-4 text-end">
            <a href="{{ route('data-bkk') }}" class="btn btn-outline-secondary">Kembali ke Daftar BKK</a>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer -->
<footer class="footer py-5 border-top">
    <div class="container text-center">
        <small>© 2024 SMK Nasional Nganjuk. Yayasan Nasional Nganjuk.</small>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
