<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMPN 3 Purwokerto - LMS</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <div class="container">
        <div class="decoration"></div>
        <div class="decoration"></div>
        <div class="decoration"></div>

        <header class="header">
            <div class="logo"></div>
            <nav class="nav-buttons">
                <a href="{{ route('login') }}" class="btn btn-login">Login</a>
                <a href="{{ route('register') }}" class="btn btn-register">Register</a>
            </nav>
        </header>

        @yield('content')

    </div>

    <script src="{{ asset('js/Script.js') }}"></script>
</body>

</html>