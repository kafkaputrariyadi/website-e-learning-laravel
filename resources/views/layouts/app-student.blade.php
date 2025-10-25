<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMPN 3 Purwokerto</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('img/Logo.png') }}" alt="ikon" width="30" height="30" style="object-fit: contain" />
            <span>SMPN 3 Purwokerto</span>
        </div>
        <nav>
            <a href="#" class="active">Course</a>
            <a href="#">Nilai</a>
            <a href="#">Tugas</a>
        </nav>
        <div class="user-profile">
            <span class="user-name">{{ auth()->user()->name }}</span>
            <div class="user-avatar">
                <img src="{{ asset('img/Student.png') }}" alt="{{ auth()->user()->name }}" />
            </div>
            </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Address</h3>
                <p>Jl. Gereja No.20, Karangjengkol,Sokanegara,<br />Kec. Purwokerto Tim., Kabupaten Banyumas,<br />Jawa Tengah 53115</p>
            </div>
            <div class="footer-section">
                <h3>Social Media</h3>
                <p>Facebook: SMPN3Purwokerto<br />Instagram: @smpn3pwt<br />Email: info@smpn3pwt.sch.id</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
