<!DOCTYPE html>
<html>
<head>
    <title>Link Reset Password</title>
</head>
<body>
    <p>Halo,</p>
    <p>Anda menerima email ini karena ada permintaan reset password untuk akun Anda.</p>
    <p>Klik link berikut untuk mereset password Anda:</p>
    <a href="{{ route('password.reset', ['token' => $token, 'email' => $email]) }}">{{ route('password.reset', ['token' => $token, 'email' => $email]) }}</a>
    <p>Jika Anda tidak meminta reset password, abaikan email ini.</p>
</body>
</html>