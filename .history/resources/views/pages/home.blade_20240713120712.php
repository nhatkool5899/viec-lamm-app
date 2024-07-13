@extends('layouts.page')

@section('banner')
<div class="wrapper__banner">
    <div class="container">
        <div class="flex banner__row">
            <div class="col-lg-6 banner__col">
                <div class="inner__head">
                    <div class="inner__introduce">
                        <h1 class="text__effects" data-text="Việc làm Miền Tây">Việc làm Miền Tây</h1>
                        <h2>Kết nối đam mê - Chạm tới thành công</h2>
                    </div>
                    <div class="inner__search">
                        <form action="{{url('search/jobs')}}" method="POST">
                        @csrf
                  
                            <div class="box__search flex">
                                <div class="search__body flex">
                                    <div class="search__jobs col-6">
                                        <i class='bx bx-search'></i>
                                        <input type="text" name="search" class="input-search" placeholder="Vị trí ứng tuyển">
                                    </div>
                                    <div class="search__jobs col-6" style="gap: 0">
                                        <i class='bx bx-map' ></i>
                                        <select class="select-location" id="location">
                                            <option value="1">Hà Nội</option>
                                            <option value="1">Hồ Chí Minh</option>
                                            <option value="1">Đà Nẵng</option>
                                            <option value="1">Cần Thơ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search__button">
                                    <button type="submit" class="button__primary default search__submit">
                                        Tìm kiếm
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="banner__main">
                        <div class="slider__banner">
                            <div class="slide__item">
                                <a href="#link" class="slide__img">
                                    <img src="{{asset('front-end/assets/imgs/banner/banner-1.jpg')}}" alt="banner1">
                                </a>
                            </div>
                            <div class="slide__item">
                                <a href="#link" class="slide__img">
                                    <img src="{{asset('front-end/assets/imgs/banner/banner-2.jpg')}}" alt="banner2">
                                </a>
                            </div>
                            <div class="slide__item">
                                <a href="#link" class="slide__img">
                                    <img src="{{asset('front-end/assets/imgs/banner/banner-3.jpg')}}" alt="banner3">
                                </a>
                            </div>
                            <div class="slide__item">
                                <a href="#link" class="slide__img">
                                    <img src="{{asset('front-end/assets/imgs/banner/banner-4.jpg')}}" alt="banner4">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 banner__col">
                <div class="wrapper__market">
                    <div class="market__main">
                        <div class="market__today">
                            <div class="market__text">
                                <i class='bx bx-search-alt'></i>
                                <span>Thị trường việc làm hôm nay</span>
                            </div>
                            <div class="market__day">08/07/2024</div>
                        </div>
                        <div class="market__info">
                            <div class="market__info-info">
                                <span class="market__context">Việc làm đang tuyển</span>
                                <span class="market__number">5.899</span>
                            </div>
                            <div class="market__info-info">
                                <span class="market__context">Việc làm mới hôm nay</span>
                                <span class="market__number">22</span>
                            </div>
                        </div>
                        <div class="market__today">
                            <div class="market__text">
                                <i class='bx bx-search-alt'></i>
                                <span>Nhu cầu tuyển dụng theo</span>
                            </div>
                            <div class="market__day">
                                <select class="select__jobs">
                                    <option value="1">Ngành nghề</option>
                                    <option value="2">Mức lương</option>
                                </select>
                            </div>
                        </div>
                        <div class="market__chart">
                            <canvas id="myChart" height="80"></canvas>
                        </div>
                        <div class="market__note">
                            <div class="market__note-item">
                                <span class="color-label" style="--clr: rgba(17, 215, 105, 1)"></span>
                                <span>Kinh doanh / Bán hàng</span>
                            </div>
                            <div class="market__note-item">
                                <span class="color-label" style="--clr: rgba(48, 138, 255, 1)"></span>
                                <span>Marketing / Truyền thông</span>
                            </div>
                            <div class="market__note-item">
                                <span class="color-label" style="--clr: rgba(218, 131, 0, 1)"></span>
                                <span>Dịch vụ tư vấn</span>
                            </div>
                            <div class="market__note-item">
                                <span class="color-label" style="--clr: rgba(28, 255, 241, 1)"></span>
                                <span>Hành chính / Văn phòng</span>
                            </div>
                            <div class="market__note-item">
                                <span class="color-label" style="--clr: rgba(255, 231, 0, 1)"></span>
                                <span>Công nghệ thông tin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="section section__feature">
    <div class="container">
        <div class="box__header">
            <div class="box__header-wrap">
                <div class="box__header-title">
                    <h2>Việc làm tốt nhất</h2>
                    <img src="{{asset('front-end/assets/imgs/toppy-ai.png')}}" alt="image">
                </div>
            </div>
            <div class="box__header-tool">
                <a href="{{url('xem-tat-ca')}}" class="btn-view-more">
                    Xem tất cả
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
        <div class="box__filter">
            <div class="filter__main">
                <div class="filter__title">
                    <i class='bx bx-filter'></i>
                    <span>Lọc theo:</span>
                </div>
                <select class="filter__select">
                    <option value="1">Địa điểm</option>
                    <option value="2">Mức lương</option>
                    <option value="3">Kinh nghiệm</option>
                    <option value="4">Ngành nghề</option>
                </select>
            </div>
            <div class="jobs__list-location">
                <div class="jobs__item-location active">Tất cả</div>
                <div class="jobs__item-location">Cần Thơ</div>
                <div class="jobs__item-location">Hồ Chí Minh</div>
                <div class="jobs__item-location">Vĩnh Long</div>
                <div class="jobs__item-location">Hậu Giang</div>
            </div>
        </div>
        <div class="jobs__main">
            <div class="box__jobs">

                <div class="jobs__body" id="jobs__list">
                    @foreach ($paginatedItems as $job)
                        <div class="jobs__content">
                            <a href="{{url('cong-ty/'.$job['employer']['_id'])}}" class="jobs__logo">
                                <img src="{{ $job['employer']['logo'] }}" alt="job-logo">
                            </a>
                            <div class="jobs__info">
                                <a href="{{url('viec-lam/'.$job['_id'])}}" class="jobs__name" title="{{$job['jobTitle']}}">{{ $job['jobTitle'] }}</a>
                                <a href="{{url('cong-ty/'.$job['employer']['_id'])}}" class="jobs__company" title="{{ $job['employer']['name'] }}">{{ $job['employer']['name'] }}</a>
                                <div class="jobs__price">
                                    <span>{{ $job['salary'] }}</span>
                                    <span>{{ $job['level'] }}</span>
                                </div>
                                <div class="jobs__deadline">
                                    <span>Hạn nộp: {{ $job['expiredDay'] }}</span>
                                    <span>Số lượng: {{ $job['count'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                </div>
                <div id="loading" class="loading">
                    <div class="loading-gif">
                        <img src="{{asset('front-end/assets/imgs/loading.gif')}}" alt="loading">
                    </div>
                </div>
            </div>


            <div id="pagination__links">
                {{ $paginatedItems->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
        <div class="images__inner">
            <img src="{{asset('front-end/assets/imgs/vietcore-bannerquangcao.jpg')}}" alt="image-1">
            <img src="{{asset('front-end/assets/imgs/nhadat-cantho.jpg')}}" alt="image-1">
            <img src="{{asset('front-end/assets/imgs/dongphucict.jpg')}}" alt="image-1">
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="card__body">
            <div class="card__home">
                <div class="box__header">
                    <div class="box__header-wrap">
                        <div class="box__header-title">
                            <h2>Top công ty hàng đầu</h2>
                            <img src="{{asset('front-end/assets/imgs/toppy-ai.png')}}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="card__grid">
                    <div class="card__content">
                        <a href="{{url('cong-ty/123')}}" class="card__head">
                            <div class="card__logo">
                                <img src="https://cdn-new.topcv.vn/unsafe/200x/https://static.topcv.vn/company_logos/cong-ty-tnhh-giao-duc-vdn-a475a30c21944ad1919c284d516d6b91-667e91b84ebab.jpg" alt="job-logo">
                            </div>
                            <div class="card__info">
                                <div class="card__info-name">Công ty cổ phần vsip cần thơ</div>
                                <div class="card__info-address">Xã Vĩnh Trinh, Huyện Vĩnh Thạnh, Cần Thơ</div>
                                <div class="card__info-type">
                                    <div class="card__type-item">
                                        Quy mô: 50 - 60 
                                    </div>
                                    <div class="card__type-item">
                                        Loại hình: Công ty TNHH
                                    </div>
                                    <div class="card__type-item">
                                        Lĩnh vực: Công nghệ
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card__jobs">
                            <div class="card__jobs-item">
                                <div class="jobs__item-name">
                                    <i class='bx bx-heart'></i>
                                    <a href="{{url('viec-lam/123')}}" class="jobs__link">Chuyển viên marketing (tư vấn tuyển sinh, sales)</a>
                                </div>
                                <div class="jobs__item-details">
                                    <span class="salary"><b>Lương:</b> thỏa thuận</span>
                                    <span><b>Hạn nộp:</b> 10/08</span>
                                </div>
                            </div>
                            <div class="card__jobs-item">
                                <div class="jobs__item-name">
                                    <i class='bx bx-heart'></i>
                                    <a href="{{url('viec-lam/123')}}" class="jobs__link">Chuyển viên marketing (tư vấn tuyển sinh, sales)</a>
                                </div>
                                <div class="jobs__item-details">
                                    <span class="salary"><b>Lương:</b> 7 - 15 triệu</span>
                                    <span><b>Hạn nộp:</b> 10/08</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card__content">
                        <a href="{{url('cong-ty/123')}}" class="card__head">
                            <div class="card__logo">
                                <img src="https://vieclamcantho.com.vn/public/upload/nhatuyendung/709307190396-1625642539.jpg" alt="job-logo">
                            </div>
                            <div class="card__info">
                                <div class="card__info-name">CÔNG TY TNHH MANHOMES CẦN THƠ - ĐỐI TÁC CHIẾN LƯỢC VINHOMES</div>
                                <div class="card__info-address">A7-4 đường số 5, KDC Nam Long, Tp Cần Thơ</div>
                                <div class="card__info-type">
                                    <div class="card__type-item">
                                        Quy mô: 50 - 60 
                                    </div>
                                    <div class="card__type-item">
                                        Loại hình: Công ty TNHH
                                    </div>
                                    <div class="card__type-item">
                                        Lĩnh vực: Bất động sản
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card__jobs">
                            <div class="card__jobs-item">
                                <div class="jobs__item-name">
                                    <i class='bx bx-heart'></i>
                                    <a href="{{url('viec-lam/123')}}" class="jobs__link">TRƯỞNG PHÒNG MARKETING</a>
                                </div>
                                <div class="jobs__item-details">
                                    <span class="salary"><b>Lương:</b> thỏa thuận</span>
                                    <span><b>Hạn nộp:</b> 10/08</span>
                                </div>
                            </div>
                            <div class="card__jobs-item">
                                <div class="jobs__item-name">
                                    <i class='bx bx-heart'></i>
                                    <a href="{{url('viec-lam/123')}}" class="jobs__link">CHUYÊN VIÊN TƯ VẤN VINHOMES</a>
                                </div>
                                <div class="jobs__item-details">
                                    <span class="salary"><b>Lương:</b> 7 - 15 triệu</span>
                                    <span><b>Hạn nộp:</b> 10/08</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card__content">
                        <a href="{{url('cong-ty/123')}}" class="card__head">
                            <div class="card__logo">
                                <img src="https://vieclamcantho.com.vn/public/upload/nhatuyendung/cong-ty-co-phan-phan-mem-citigo4801678092062.jpg" alt="job-logo">
                            </div>
                            <div class="card__info">
                                <div class="card__info-name">CÔNG TY CỔ PHẦN CÔNG NGHỆ KIOTVIET</div>
                                <div class="card__info-address">Số 53 Nguyễn Tri Phương, phường An Khánh, Quận Ninh Kiều, TP Cần Thơ</div>
                                <div class="card__info-type">
                                    <div class="card__type-item">
                                        Quy mô: 50 - 60 
                                    </div>
                                    <div class="card__type-item">
                                        Loại hình: Công ty TNHH
                                    </div>
                                    <div class="card__type-item">
                                        Lĩnh vực: Công nghệ
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card__jobs">
                            <div class="card__jobs-item">
                                <div class="jobs__item-name">
                                    <i class='bx bx-heart'></i>
                                    <a href="{{url('viec-lam/123')}}" class="jobs__link">[KiotViet]- Chuyên Viên Tư Vấn Phần Mềm</a>
                                </div>
                                <div class="jobs__item-details">
                                    <span class="salary"><b>Lương:</b> thỏa thuận</span>
                                    <span><b>Hạn nộp:</b> 10/08</span>
                                </div>
                            </div>
                            <div class="card__jobs-item">
                                <div class="jobs__item-name">
                                    <i class='bx bx-heart'></i>
                                    <a href="{{url('viec-lam/123')}}" class="jobs__link">[KiotViet]- Trưởng Phòng Kinh Doanh Chi Nhánh Đồng Tháp</a>
                                </div>
                                <div class="jobs__item-details">
                                    <span class="salary"><b>Lương:</b> 7 - 15 triệu</span>
                                    <span><b>Hạn nộp:</b> 10/08</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card__sidebar">
                <div class="box__header">
                    <div class="box__header-wrap">
                        <div class="box__header-title">
                            <h2>Việc làm mới nhất</h2>
                        </div>
                    </div>
                </div>
                <div class="card__sidebar-main">
                    <div class="card__right">
                        @foreach ($new_jobs as $job)
                            <div class="jobs__content card__jobs-content">
                                <a href="{{url('cong-ty/'.$job['employer']['_id'])}}" class="jobs__logo">
                                    <img src="{{ $job['employer']['logo'] }}" alt="job-logo">
                                </a>
                                <div class="jobs__info">
                                    <a href="{{url('viec-lam/'.$job['_id'])}}" class="jobs__name" title="{{$job['jobTitle']}}">{{ $job['jobTitle'] }}</a>
                                    <a href="{{url('cong-ty/'.$job['employer']['_id'])}}" class="jobs__company" title="{{ $job['employer']['name'] }}">{{ $job['employer']['name'] }}</a>
                                    <div class="jobs__deadline">
                                        <span>Hạn nộp: {{ $job['expiredDay'] }}</span>
                                        <span>Số lượng: {{ $job['count'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    
                    </div>
                    <div class="button__inner">
                        <a href="http://127.0.0.1:8000/xem-tat-ca" class="btn-view-all">
                            Xem tất cả
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section__feature">
    <div class="container">
        <div class="connect__app flex">
            <div class="col-6">
                <div class="app__img">
                    <img src="{{asset('front-end/assets/imgs/app.png')}}" alt="app">
                </div>
            </div>
            <div class="col-6">
                <div class="box__header">
                    <div class="box__header-wrap">
                        <div class="box__header-title">
                            <h2>Cùng ứng dụng Việc Làm 24h tạo bước tiến vững chắc cho tương lai của bạn </h2>
                        </div>
                        <div class="header__slogan">"Kết nối đam mê - Chạm tới thành công"</div>
                        <p class="header__subtitle">Trải nghiệm tạo CV, tìm việc, ứng tuyển và hơn thế nữa - chỉ với một ứng dụng duy nhất. Bắt đầu ngay hôm nay!</p>
                    </div>
                </div>
                <div class="download__app">
                    <h3>Tải ứng dụng ngay</h3>
                    <div class="flex">
                        <img class="qr" src="https://cdn-new.topcv.vn/unsafe/https://static.topcv.vn/v4/image/welcome/mobile-app/qrcode_black.png" alt="qr">
                        <div class="link__store">
                            <img src="https://cdn-new.topcv.vn/unsafe/https://static.topcv.vn/v4/image/welcome/mobile-app/appstore_black.png" alt="ios">
                            <img src="https://cdn-new.topcv.vn/unsafe/https://static.topcv.vn/v4/image/welcome/mobile-app/googleplay_black.png" alt="appstore">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="box__header">
            <div class="box__header-wrap">
                <div class="box__header-title">
                    <h2>Top ngành nghề nổi bật</h2>
                </div>
                <p class="box__header-subtitle">Bạn muốn tìm việc mới? Xem danh sách việc làm <a href="{{url('viec-lam')}}">tại đây</a></p>
            </div>
        </div>
        <div class="top__category">
            <a href="#item" class="top__category-link">
                <div class="top__category-item">
                    <div class="top__category-image">
                        <img src="{{asset('front-end/assets/imgs/icon/kinh-doanh-ban-hang.webp')}}" alt="icon-1">
                    </div>
                    <div class="top__category-name">
                        Kinh doanh / Bán hàng
                    </div>
                    <div class="top__category-caption">
                        14.650 việc làm
                    </div>
                </div>
            </a>
            <a href="#item" class="top__category-link">
                <div class="top__category-item">
                    <div class="top__category-image">
                        <img src="{{asset('front-end/assets/imgs/icon/it-phan-mem.webp')}}" alt="icon-1">
                    </div>
                    <div class="top__category-name">
                        IT / Phần mềm
                    </div>
                    <div class="top__category-caption">
                        3.845 việc làm
                    </div>
                </div>
            </a>
            <a href="#item" class="top__category-link">
                <div class="top__category-item">
                    <div class="top__category-image">
                        <img src="{{asset('front-end/assets/imgs/icon/hanh-chinh-van-phong.webp')}}" alt="icon-1">
                    </div>
                    <div class="top__category-name">
                        Hành chính / Văn phòng
                    </div>
                    <div class="top__category-caption">
                        4.578 việc làm
                    </div>
                </div>
            </a>
            <a href="#item" class="top__category-link">
                <div class="top__category-item">
                    <div class="top__category-image">
                        <img src="{{asset('front-end/assets/imgs/icon/giao-duc-dao-tao.webp')}}" alt="icon-1">
                    </div>
                    <div class="top__category-name">
                        Giáo dục / Đào tạo
                    </div>
                    <div class="top__category-caption">
                        3.636 việc làm
                    </div>
                </div>
            </a>
            <a href="#item" class="top__category-link">
                <div class="top__category-item">
                    <div class="top__category-image">
                        <img src="{{asset('front-end/assets/imgs/icon/tu-van.webp')}}" alt="icon-1">
                    </div>
                    <div class="top__category-name">
                        Chuyên viên tư vấn
                    </div>
                    <div class="top__category-caption">
                        3.650 việc làm
                    </div>
                </div>
            </a>
            <a href="#item" class="top__category-link">
                <div class="top__category-item">
                    <div class="top__category-image">
                        <img src="{{asset('front-end/assets/imgs/icon/marketing-truyen-thong.webp')}}" alt="icon-1">
                    </div>
                    <div class="top__category-name">
                        Marketing / Truyền thông
                    </div>
                    <div class="top__category-caption">
                        7.650 việc làm
                    </div>
                </div>
            </a>
            <a href="#item" class="top__category-link">
                <div class="top__category-item">
                    <div class="top__category-image">
                        <img src="{{asset('front-end/assets/imgs/icon/van-tai-kho-van.webp')}}" alt="icon-1">
                    </div>
                    <div class="top__category-name">
                        Vận tải / Kho vận
                    </div>
                    <div class="top__category-caption">
                        1.650 việc làm
                    </div>
                </div>
            </a>
            <a href="#item" class="top__category-link">
                <div class="top__category-item">
                    <div class="top__category-image">
                        <img src="{{asset('front-end/assets/imgs/icon/ke-toan-kiem-toan.webp')}}" alt="icon-1">
                    </div>
                    <div class="top__category-name">
                        Kế taosn / Kiểm toán
                    </div>
                    <div class="top__category-caption">
                        14.650 việc làm
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="section section__feature">
    <div class="container">
        <div class="box__header">
            <div class="box__header-wrap">
                <div class="box__header-title">
                    <h2>Hồ sơ ứng viên mới nhất</h2>
                </div>
                <p class="box__header-subtitle">Tìm ứng viên phù hợp với vị trí tuyển dụng của doanh nghiệp <a href="{{url('viec-lam')}}">tại đây</a></p>
            </div>
            <div class="box__header-tool">
                <a href="{{url('xem-tat-ca')}}" class="btn-view-more">
                    Xem tất cả
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
        <div class="candidate__wrapper">
            <div class="candidate__inner">

                @foreach ($candidates as $item)
                    
                <div class="candidate__info">
                    <div class="candidate__info-image">
                        <img class="candidate__avt" src="{{$item['avatar']}}" alt="avatar">
                        <span class="profile__star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </span>
                    </div>
                    <div class="candidate__content">
                        <div class="candidate__jobs">
                            <i class='bx bx-link' ></i>
                            <span>{{$item['position']}}</span>
                        </div>
                        <div class="candidate__name">
                            <i class='bx bx-male-sign'></i>
                            <span>{{$item['name']}}</span>
                            <span class="year">1999</span>
                            <i class='check bx bxs-check-circle' ></i>
                        </div>
                        <div class="candidate__details">
                            <span>
                                <i class='bx bxs-graduation' ></i>
                                Đại học
                            </span>
                            <span>
                                <i class='bx bxs-award'></i>
                                Dưới 1 năm
                            </span>
                        </div>
                        <div class="candidate__details">
                            <span>
                                <i class='bx bx-dollar' ></i>
                                7 - 10 triệu
                            </span>
                            <span>
                                <i class='bx bx-time-five' ></i>
                                10 phút trước
                            </span>
                        </div>
                    </div>
                </div>

                @endforeach

                <div class="candidate__info">
                    <div class="candidate__info-image">
                        <img class="candidate__avt" src="{{asset('front-end/assets/imgs/avatar.png')}}" alt="avatar">
                        <span class="profile__star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </span>
                    </div>
                    <div class="candidate__content">
                        <div class="candidate__jobs">
                            <i class='bx bx-link' ></i>
                            <span>Nhân viên marketing</span>
                        </div>
                        <div class="candidate__name">
                            <i class='bx bx-male-sign'></i>
                            <span>Nguyễn Minh Nhật</span>
                            <span class="year">1999</span>
                            <i class='check bx bxs-check-circle' ></i>
                        </div>
                        <div class="candidate__details">
                            <span>
                                <i class='bx bxs-graduation' ></i>
                                Đại học
                            </span>
                            <span>
                                <i class='bx bxs-award'></i>
                                Dưới 1 năm
                            </span>
                        </div>
                        <div class="candidate__details">
                            <span>
                                <i class='bx bx-dollar' ></i>
                                7 - 10 triệu
                            </span>
                            <span>
                                <i class='bx bx-time-five' ></i>
                                10 phút trước
                            </span>
                        </div>
                    </div>
                </div>
                <div class="candidate__info">
                    <div class="candidate__info-image">
                        <img class="candidate__avt" src="{{asset('front-end/assets/imgs/avatar.png')}}" alt="avatar">
                        <span class="profile__star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </span>
                    </div>
                    <div class="candidate__content">
                        <div class="candidate__jobs">
                            <i class='bx bx-link' ></i>
                            <span>Nhân viên marketing</span>
                        </div>
                        <div class="candidate__name">
                            <i class='bx bx-male-sign'></i>
                            <span>Nguyễn Minh Nhật</span>
                            <span class="year">1999</span>
                            <i class='check bx bxs-check-circle' ></i>
                        </div>
                        <div class="candidate__details">
                            <span>
                                <i class='bx bxs-graduation' ></i>
                                Đại học
                            </span>
                            <span>
                                <i class='bx bxs-award'></i>
                                Dưới 1 năm
                            </span>
                        </div>
                        <div class="candidate__details">
                            <span>
                                <i class='bx bx-dollar' ></i>
                                7 - 10 triệu
                            </span>
                            <span>
                                <i class='bx bx-time-five' ></i>
                                10 phút trước
                            </span>
                        </div>
                    </div>
                </div>
                <div class="candidate__info">
                    <div class="candidate__info-image">
                        <img class="candidate__avt" src="{{asset('front-end/assets/imgs/avatar.png')}}" alt="avatar">
                        <span class="profile__star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </span>
                    </div>
                    <div class="candidate__content">
                        <div class="candidate__jobs">
                            <i class='bx bx-link' ></i>
                            <span>Nhân viên marketing</span>
                        </div>
                        <div class="candidate__name">
                            <i class='bx bx-male-sign'></i>
                            <span>Nguyễn Minh Nhật</span>
                            <span class="year">1999</span>
                            <i class='check bx bxs-check-circle' ></i>
                        </div>
                        <div class="candidate__details">
                            <span>
                                <i class='bx bxs-graduation' ></i>
                                Đại học
                            </span>
                            <span>
                                <i class='bx bxs-award'></i>
                                Dưới 1 năm
                            </span>
                        </div>
                        <div class="candidate__details">
                            <span>
                                <i class='bx bx-dollar' ></i>
                                7 - 10 triệu
                            </span>
                            <span>
                                <i class='bx bx-time-five' ></i>
                                10 phút trước
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection