<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Việc làm miền Tây</title>

    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
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
                        <a href="{{url('dang-nhap')}}" class="button__primary black">
                            Dành cho nhà tuyển dụng
                        </a>
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


        <div class="modal-login">
            <span class="modal-close"><i class="bx bx-x"></i></span>
            <div class="modal-content">
                <div class="modal-content-title">
                    <span>
                        Đăng nhập
                    </span>
                </div>
                <form method="post">
                    @csrf
                    <div class="group-login">
                        <input type="email" name="email" class="input-login input-phone" placeholder="&nbsp;" autocomplete="off">
                        <span class="input-text">Email</span>
                    </div>
                    <div class="group-login">
                        <input type="password" name="password" class="input-login input-password" placeholder="&nbsp;">
                        <span class="input-text">Mật khẩu</span>
                    </div>
                    <div class="group-login">
                        <button type="submit" class="submit-login confirm-login">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-register">
            <span class="modal-close"><i class="bx bx-x"></i></span>
            <div class="modal-content">
                <div class="modal-content-title">
                    <span>
                        Đăng ký
                    </span>
                </div>
                <form>
                    @csrf
                    <div class="group-flex">
                        <div class="group-login">
                            <input type="email" name="email" class="input-login register-email" placeholder="&nbsp;">
                            <span class="input-text">Email đăng nhập</span>
                        </div>
                    </div>
                    <div class="group-flex">
                        <div class="group-login">
                            <input type="password" name="password" class="input-login register-password" placeholder="&nbsp;">
                            <span class="input-text">Mật khẩu</span>
                        </div>
                    </div>
                    <div class="group-flex">
                        <div class="group-login">
                            <input type="password" name="confirm-password" class="input-login confirm-password" placeholder="&nbsp;">
                            <span class="input-text">Nhập lại mật khẩu</span>
                        </div>
                    </div>
                    <div class="group-flex">
                        <div class="group-login">
                            <input type="text" name="name" class="input-login register-name" placeholder="&nbsp;">
                            <span class="input-text">Họ tên</span>
                        </div>
                        <div class="group-login">
                            <input type="number" name="phone" class="input-login register-phone" placeholder="&nbsp;">
                            <span class="input-text">Số điện thoại</span>
                        </div>
                    </div>
                    <div class="group-flex">
                        <div class="group-login" style="gap: 20px">
                            <span>Giới tính:</span>
                            <label style="display: flex;gap:6px" for="male">
                                <span style="font-size: 14px; font-weight:300">Nam</span>
                                <input type="radio" name="gender" value="1" id="male">
                            </label>
                            <label style="display: flex;gap:6px" for="female">
                                <span style="font-size: 14px; font-weight:300">Nữ</span>
                                <input type="radio" name="gender" value="2" id="female">
                            </label>
                            <label style="display: flex;gap:6px" for="other">
                                <span style="font-size: 14px; font-weight:300">Khác</span>
                                <input type="radio" name="gender" value="3" id="other">
                            </label>
                        </div>
                    </div>
                    <div class="group-flex">
                        <div class="group-login">
                            <input type="date" name="birthday" class="input-login register-birthday" placeholder="&nbsp;">
                            <span class="input-text">Ngày sinh</span>
                        </div>
                        <div class="group-login">
                            <input type="text" name="address" class="input-login register-address" placeholder="&nbsp;">
                            <span class="input-text">Địa chỉ</span>
                        </div>
                    </div>
                    <div class="group-login">
                        <button type="submit" class="submit-login submit-register confirm-register">Đăng ký</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="box-alert">
            
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script src="{{asset('front-end/assets/js/custom-select.js')}}"></script>
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>
</body>
</html>