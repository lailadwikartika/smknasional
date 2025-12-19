<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Login component CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-10/assets/css/login-10.css">
</head>

<body>
    <!-- Login 10 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <a class="me-3">
                                <img src="{{ asset('assets/logo.jpg') }}"
                                    style="mix-blend-mode: multiply; width: 80px; height: auto;">
                            </a>
                            <h4 class="mb-0">SMK NASIONAL NGANJUK</h4>
                        </div>
                    </div>
                    <div class="card border border-light-subtle rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <p class="text-center mb-4 fw-bold fs-5">
                                    Selamat Datang Admin <span class="d-block">SMK NASIONAL NGANJUK</span>
                                </p>
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                                placeholder="name@example.com" value="{{ old('email') }}" required>
                                            <label for="email" class="form-label">Masukan Email Anda</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-2">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                                                placeholder="Password" required>
                                            <label for="password">Masukan Katasandi Anda</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="text-end mb-2">
                                        <a href="{{ route('password.request') }}" class="text-decoration-none">Lupa katasandi?</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg">Masuk</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
