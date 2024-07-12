<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Việc làm miền Tây</title>

    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('front-end/assets/css/custom-select.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/responsive.css')}}">


</head>
<body>
    
    <div class="app">
        <header>
            <div class="header">
                <div class="header__container container">
                    <div class="header__left">
                        <div class="logo">
                            <a href="{{url('/')}}" class="logo-link">
                            <img src="{{asset('front-end/assets/imgs/logo/logo.png')}}" alt="logo"></a>
                        </div>
                        <ul class="navigation">
                            <li class="nav__item">
                                <a href="#" class="nav__link">Giới thiệu</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Công ty</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Tìm ứng viên</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Việc làm hot</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Việc mới nhất</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__link">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__right">
                        <div class="button__primary redirect-signin">
                            Đăng nhập
                        </div>
                        <div class="button__primary default redirect-signup">
                            Đăng ký
                        </div>
                        <div class="button__primary black">
                            Dành cho nhà tuyển dụng
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clear-header"></div>
        <div class="banner">
            @yield('banner')
        </div>
        <main>
            @yield('content')
        </main>
        <footer>

        </footer>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script src="{{asset('front-end/assets/js/custom-select.js')}}"></script>
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>
</body>
</html>