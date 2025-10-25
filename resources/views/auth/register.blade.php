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

        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="name" name="name" placeholder="Masukkan username" :value="old('name')" required
                    autofocus />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email" :value="old('email')"
                    required />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" class="form-input"
                        placeholder="Masukkan Password" required />
                    <span class="toggle-password" onclick="togglePassword()">
                        <i id="toggleIcon" class="fa-solid fa-eye"></i>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-input"
                        placeholder="Konfirmasi Password" required />
                </div>
            </div>

            <div class="login-link">
                Sudah punya akun? <a href="{{ route('login') }}">Login</a>
            </div>

            <button type="submit" class="btn">REGISTER</button>
        </form>
    </div>

    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>