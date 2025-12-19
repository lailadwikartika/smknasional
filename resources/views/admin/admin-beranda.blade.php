<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard SMK Nasional Nganjuk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/logo.jpg') }}" alt="">
                <span class="d-none d-lg-block">SMK Nasional Nganjuk</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <a class="nav-link nav-profile d-flex align-items-center pe-3" href="#" data-bs-toggle="dropdown">
                <img src="{{ Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets/img/profile-img.jpg') }}"
                    alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item d-flex align-items-center">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Keluar</span>
                        </button>
                    </form>
                </li>
            </ul><!-- End Profile Dropdown Items -->
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin-beranda') }}">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('kepala-sekolah.index') }}">
                    <i class="bi bi-person-badge"></i>
                    <span>Data Kepala Sekolah</span>
                </a>
            </li><!-- End Kepala Sekolah Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('guru.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Data Guru</span>
                </a>
            </li><!-- End Data Guru Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('jurusan.index') }}">
                    <i class="bi bi-book"></i>
                    <span>Data Jurusan</span>
                </a>
            </li><!-- End Data Jurusan Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('fasilitas.index') }}">
                    <i class="bi bi-building"></i> <!-- Fasilitas -->
                    <span>Fasilitas</span>
                </a>
            </li><!-- End Fasilitas Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('struktur-organisasi.index') }}">
                    <i class="bi bi-diagram-3"></i> <!-- Struktur Organisasi -->
                    <span>Struktur Organisasi</span>
                </a>
            </li><!-- End Struktur Organisasi Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('bkk.index') }}">
                    <i class="bi bi-briefcase"></i> <!-- BKK -->
                    <span>BKK</span>
                </a>
            </li><!-- End BKK Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('ekstrakurikuler.index') }}">
                    <i class="bi bi-palette"></i>
                    <span>Ekstrakurikuler</span>
                </a>
            </li><!-- End Ekstrakurikuler Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('pbdp.index') }}">
                    <i class="bi bi-person-plus"></i> <!-- PBDB -->
                    <span>PBDB</span>
                </a>
            </li><!-- End PBDB Nav -->
        </ul>

    </aside><!-- End Sidebar-->


    <main id="main" class="main">

        <div class="pagetitle">
            <h1 class="fw-bold">Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Cards Section -->
                <!-- Card Data Guru -->
                <div class="col-lg-6 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Data Guru</h5>

                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahGuru }} Orang</h6>
                                    <span class="text-muted small pt-2 ps-1">Jumlah Guru</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Data Guru -->

                <!-- Card Data Jurusan -->
                <div class="col-lg-6 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Data Jurusan</h5>

                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-book"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahJurusan }} Jurusan</h6>
                                    <span class="text-muted small pt-2 ps-1">Total Jurusan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Data Jurusan -->
                <!-- Card fasilitas -->
                <div class="col-lg-6 col-md-6">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Fasilitas</h5>

                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahFasilitas }} Fasilitas</h6>
                                    <span class="text-muted small pt-2 ps-1">Total Fasilitas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card fasilitas -->
                <!-- Card Ekstrakurikuler -->
                <div class="col-lg-6 col-md-6">
                    <div class="card info-card ekstrakurikuler-card">
                        <div class="card-body">
                            <h5 class="card-title">Ekstrakurikuler</h5>

                            <div class="d-flex align-items-center">
                                <div
                                    class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-palette"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $jumlahEkstrakurikuler }} Ekstrakurikuler</h6>
                                    <span class="text-muted small pt-2 ps-1">Total Ekstrakurikuler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Ekstrakurikuler -->
                <!-- End Cards Section -->

                <!-- Statistik Guru & Aktivitas -->
<div class="col-12">
    <div class="row">
        <!-- Kolom Grafik -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Guru Berdasarkan Tahun Masuk</h5>
                    <p class="small">Grafik jumlah guru berdasarkan tahun masuk</p>
                    <div id="guruHiringChart"></div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>SMK NASIONAL NGANJUK</span></strong>. YAYASAN NASIONAL NGANJUK
        </div>
    </footer><!-- End Footer -->
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Mengambil data yang dikirim dari BerandaController
            const tahunMasuk = {!! json_encode($tahunMasuk) !!};
            const jumlahGuruPerTahun = {!! json_encode($jumlahGuruPerTahun) !!};

            // Inisialisasi ApexCharts untuk statistik guru
            new ApexCharts(document.querySelector("#guruHiringChart"), {
                series: [{
                    name: 'Jumlah Guru',
                    data: jumlahGuruPerTahun
                }],
                chart: {
                    height: 350,
                    type: 'area', // Menggunakan tipe 'area' untuk visualisasi yang lebih baik
                    toolbar: {
                        show: false
                    },
                },
                markers: {
                    size: 4
                },
                colors: ['#4154f1'],
                fill: {
                    type: "gradient",
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2
                },
                xaxis: {
                    type: 'category',
                    categories: tahunMasuk
                },
                tooltip: {
                    x: {
                        format: 'yyyy'
                    },
                }
            }).render();
        });
    </script>
</body>

</html>