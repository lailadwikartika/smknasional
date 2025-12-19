<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Jurusan</title>
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
                <a class="nav-link collapsed" href="{{ route('admin-beranda') }}">
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
                <a class="nav-link" href="{{ route('jurusan.index') }}">
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
            <h1>Data Jurusan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-beranda') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data Jurusan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a href="{{ route('jurusan.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle me-1"></i> Tambah
                    </a>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Jurusan</h5>

                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th><b>Kode Jurusan</b></th>
                                            <th>Nama Jurusan</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $jurusan)
                                        <tr>
                                            <td>{{ $jurusan->kode_jurusan }}</td>
                                            <td>{{ $jurusan->nama_jurusan }}</td>
                                            <td>{{ $jurusan->keterangan ?? '-' }}</td>
                                            <td>
                                                <!-- Edit button -->
                                                <a href="{{ route('jurusan.edit', $jurusan->id_jurusan) }}"
                                                    class="btn btn-sm btn-warning me-1">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </a>

                                                <!-- Delete form -->
                                                <form action="{{ route('jurusan.destroy', $jurusan->id_jurusan) }}"
                                                    method="POST" class="d-inline"
                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Belum ada data jurusan.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $data->links() }}
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>