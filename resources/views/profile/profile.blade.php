<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Users / Profile - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin-beranda') }}">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="col-xl-15">

                <div class="card">
                    <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                        <img src="{{ Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets/img/profile-img.jpg') }}"
                                            alt="Profile" class="rounded-circle">
                                    </div>
                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf

    @if (session('status') === 'profile-updated')
        <div class="alert alert-success">
            Profil berhasil diperbarui.
        </div>
    @endif

                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets/img/profile-img.jpg') }}" alt="Profile" width="120" class="rounded shadow">
                                                <div class="pt-2">
                                                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto" accept=".jpg,.jpeg,.png,.webp">
                                                    @error('foto')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Full
                                                Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" value="{{ old('name', Auth::user()->name) }}" required>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                                    id="email" value="{{ old('email', Auth::user()->email) }}" required>
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->
                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form method="post" action="{{ route('profile.password.update') }}">
                                        @csrf

                                        @if (session('status') === 'password-updated')
                                            <div class="alert alert-success">
                                                Password berhasil diubah.
                                            </div>
                                        @endif

                                        <div class="row mb-3">
                                            <label for="current_password"
                                                class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror"
                                                    id="current_password" required>
                                                @error('current_password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                    id="password" required>
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password_confirmation"
                                                class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password_confirmation" type="password" class="form-control"
                                                    id="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Ubah Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>SMK Nasional Nganjuk</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
