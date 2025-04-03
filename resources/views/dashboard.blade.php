<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <ul class="header-list">
                <li class="header-list__item">
                    <a href="">Home</a>
                </li>
                <li class="header-list__item">
                    <a href="{{ route('user.authUser') }}">Đăng nhập</a>
                </li>
                <li class="header-list__item">
                    <a href="{{ route('user.createUser') }}">Đăng ký</a>
                </li>
            </ul>
        </div>
        @yield('content')
        <div class="footer">
            <p>Lập trình web @01/2024</p>
        </div>
    </div>
</body>

</html>