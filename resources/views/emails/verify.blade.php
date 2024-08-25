<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Email</title>
</head>
<body>
    <h2>Halo {{ $user->name }},</h2>
    <p>Silakan klik link di bawah ini untuk memverifikasi email Anda:</p>
    <a href={{ route('verify.email', $user->email_verification_token) }}>Verifikasi Email</a>
    <p>Link ini akan kadaluarsa dalam 24 jam.</p>
    <p>Jika Anda tidak merasa mendaftar di situs kami, abaikan email ini.</p>
</body>
</html>