<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Password Reset component CSS -->
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/components/password-resets/password-reset-10/assets/css/password-reset-10.css">
</head>

<body>
    <!-- Password Reset 10 - Bootstrap Brain Component -->
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
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <p class="text-center mb-4">Masukkan Email yang terdaftar untuk melakukan reset password</p>
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                                placeholder="name@example.com" required>
                                            <label for="email" class="form-label">Email</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-lg" type="submit">Reset
                                                Password</button>
                                        </div>
                                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-4">
                        <a href="{{ route('login') }}" class="link-secondary text-decoration-none">Login</a>
                    </div>
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