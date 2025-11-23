{{-- File: resources/views/auth/login.blade.php --}}
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

        <form id="loginForm" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <!-- 🔥 UBAH: ganti 'username' menjadi 'email' -->
                <input type="email" class="form-input" name="email" placeholder="kafkariyadi691@gmail.com" required
                    value="{{ old('email') }}" />
                @error('email')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="password-group">
                    <input type="password" class="form-input" id="password" name="password"
                        placeholder="Masukkan Password" required />
                    <span class="toggle-password" onclick="togglePassword()">
                        <i id="toggleIcon" class="fa-solid fa-eye"></i>
                    </span>
                </div>
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
                <div class="forgot-password">
                    <a href="{{ route('password.request') }}">Lupa Password?</a>
                </div>
            </div>

            <div class="remember-section">
                <input type="checkbox" id="remember" name="remember" />
                <label for="remember">Ingatkan saya</label>
            </div>

            <button type="submit" class="login-btn">Login</button>
        </form>

        <div class="footer-text">
            Belum punya akun? <a href="{{ route('register') }}">Registrasi</a>
        </div>
    </div>

    <script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }

    // Handle form submission
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        // Form akan secara otomatis mengarah ke dashboard setelah login berhasil
        // melalui redirect di AuthenticatedSessionController
    });
    </script>
</body>

</html>
