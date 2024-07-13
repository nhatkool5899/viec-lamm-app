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
                        @if ($user != '')
                            
                        <div class="navbar__user">
                            <div class="navbar__user-item line">
                                <div class="block-for-employer">
                                    <p>Bạn là nhà tuyển dụng</p>
                                    <a href="#dang-tuyen">
                                        <span>Đăng tuyển ngay</span>
                                        <i class='bx bx-chevrons-right'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="navbar__user-item">
                                <div class="group__icon">
                                    <span class="icon__item">
                                        <i class='bx bxs-bell' ></i>
                                    </span>
                                    <span class="icon__item">
                                        <i class='bx bxs-chat' ></i>
                                    </span>
                                </div>
                                <div class="group__user">
                                    <div class="group__user-head">
                                        <div class="user__avt">
                                            <img src="{{asset('front-end/assets/imgs/avatar-default.jpg')}}" alt="avatar-default">
                                        </div>
                                        <div class="user__arrow">
                                            <i class='bx bx-chevron-down' ></i>
                                        </div>
                                    </div>
                                    <div class="user__dropdown">
                                        <ul class="user__menu">
                                            <div class="user__menu-info">
                                                <img src="{{asset('front-end/assets/imgs/avatar-default.jpg')}}" alt="avatar-default">
                                                <div class="caption">
                                                    <div class="name">Minh Nhật</div>
                                                    <div class="description">minhnhat14713@gmail.com</div>
                                                </div>
                                            </div>
                                            <li class="user__menu-item">
                                                <a href="#" class="user__menu-link">
                                                    <i class='bx bx-edit-alt'></i>
                                                    <span>Thông tin cá nhân</span>
                                                </a>
                                            </li>
                                            <li class="user__menu-item">
                                                <a href="#" class="user__menu-link">
                                                    <i class='bx bx-up-arrow-circle'></i>
                                                    <span>Nâng cấp tài khoản VIP</span>
                                                </a>
                                            </li>
                                            <li class="user__menu-item">
                                                <a href="#" class="user__menu-link">
                                                    <i class='bx bx-bookmark-alt-plus'></i>
                                                    <span>Việc làm đã nộp</span>
                                                </a>
                                            </li>
                                            <li class="user__menu-item">
                                                <a href="#" class="user__menu-link">
                                                    <i class='bx bx-heart' ></i>
                                                    <span>Việc làm đã lưu</span>
                                                </a>
                                            </li>
                                            <div class="menu__line"></div>
                                            <li class="user__menu-item">
                                                <a href="#" class="user__menu-link">
                                                    <i class='bx bx-log-out-circle' ></i>
                                                    <span>Đăng xuất</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @else

                        <div class="button__primary redirect-signin">
                            Đăng nhập
                        </div>
                        <div class="button__primary default redirect-signup">
                            Đăng ký
                        </div>
                        <a href="{{url('dang-nhap')}}" class="button__primary black">
                            Dành cho nhà tuyển dụng
                        </a>
                        @endif
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
                <form id="login-form">
                    @csrf
                    <div class="group-login">
                        <input type="email" name="email" class="input-login login-email" placeholder="&nbsp;" autocomplete="off">
                        <span class="input-text">Email</span>
                    </div>
                    <div class="group-login">
                        <input type="password" name="password" class="input-login login-password" placeholder="&nbsp;">
                        <span class="input-text">Mật khẩu</span>
                    </div>
                    <div class="group-login">
                        <button type="submit" class="submit-login confirm-login">Đăng nhập ứng viên</button>
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
                <form id="register-form">
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
                        <button type="submit" class="submit-login submit-register confirm-register">Đăng ký ứng viên</button>
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