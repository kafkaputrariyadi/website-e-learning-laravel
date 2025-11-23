{{-- File: resources/views/auth/register.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - SMPN 3 Purwokerto</title>

    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
    <div class="card">
        <h1 class="welcome-title">Selamat Datang</h1>
        <p class="subtitle">Halaman Registrasi Siswa SMPN 3 Purwokerto</p>

        <form id="registerForm" class="register-form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" required />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" class="form-input"
                        placeholder="Masukkan password" required />
                    {{-- Tambah ikon mata untuk Password --}}
                    <span class="toggle-password" data-target="password">
                        <i class="fa-solid fa-eye"></i>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-input"
                        placeholder="Ulangi password" required />
                    {{-- Tambah ikon mata untuk Konfirmasi Password --}}
                    <span class="toggle-password" data-target="password_confirmation">
                        <i class="fa-solid fa-eye"></i>
                    </span>
                </div>
            </div>

            <div class="login-link">
                Sudah punya akun? <a href="{{ route('login') }}">Login</a>
            </div>

            <button type="submit" class="btn">Register</button>
        </form>
    </div>

    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>
