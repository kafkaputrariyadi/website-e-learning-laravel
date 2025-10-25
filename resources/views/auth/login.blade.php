<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - SMPN 3 Purwokerto</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
    <div class="login-container">
        <div class="logo-section">
            <div class="logo"></div>
        </div>

        <h1 class="welcome-text">Selamat Datang</h1>
        <p class="subtitle">Halaman Login Siswa SMPN 3 Purwokerto</p>

        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <form method="POST" action="{{ route('login') }}">
            @csrf <div class="form-group">
                <input type="email" name="email" class="form-input" placeholder="Masukan Email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="form-group">
                <div class="password-group">
                    <input type="password" name="password" class="form-input" id="password"
                        placeholder="Masukan Password" required />
                    <span class="toggle-password" onclick="togglePassword()">
                        <i id="toggleIcon" class="fa-solid fa-eye"></i>
                    </span>
                </div>
                @if (Route::has('password.request'))
                <div class="forgot-password">
                    <a href="{{ route('password.request') }}">Lupa Password</a>
                </div>
                @endif
            </div>

            <div class="remember-section">
                <input type="checkbox" id="remember_me" name="remember" />
                <label for="remember_me">Ingatlah saya</label>
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>

        <div class="footer-text">
            Belum punya akun? <a href="{{ route('register') }}">Registrasi</a>
        </div>
        <div class="step active"></div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
