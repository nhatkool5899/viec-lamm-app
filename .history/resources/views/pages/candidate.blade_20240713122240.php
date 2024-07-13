@extends('layouts.page')

@section('content')
    <section class="section__head">
        <div class="container">
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
        </div>
    </section>
    <section class="section section__feature">
        <div class="container">
            <div class="company__inner">
                <div class="company__banner">
                    <img src="https://static.topcv.vn/v4/image/normal-company/cover/company_cover_1.jpg" alt="banner-company">
                </div>
                <div class="company__infor">
                    <div class="company__logo">
                        <img src="{{asset('front-end/assets/imgs/avatar.png')}}" alt="logo">
                    </div>
                    <div class="company__middle">
                        <h3>Nguyễn Minh Nhật</h3>
                        <div class="company__details">
                            <div class="company__details-item">
                                <i class='bx bx-calendar'></i>
                                <span>05/08/1999</span>
                            </div>
                            <div class="company__details-item">
                                <i class='bx bx-male-female' ></i>
                                <span>Nam</span>
                            </div>
                            <div class="company__details-item">
                                <i class='bx bx-map-pin' ></i>
                                <span>Ninh Kiều, Cần Thơ</span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="company__follow">
                        <div class="button__follow">
                            <i class='bx bx-plus' ></i>
                            <span>Lưu hồ sơ</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex company__main" style="gap: 30px">
                <div class="col-lg-8">
                    <div class="company__about">
                        <div class="about__head">Thông tin hồ sơ</div>
                        <div class="box__content">
                            <div class="context">
                                <p>
                                    <strong>Mức lương mong muốn:</strong>
                                    <span>Thỏa thuận</span>
                                </p>
                                <p>
                                    <strong>Số năm kinh nghiệm:</strong>
                                    <span>Dưới 1 năm</span>
                                </p>
                                <p>
                                    <strong>Ngành nghề:</strong>
                                    <span> Điện / Điện tử / Điện lạnh</span>
                                </p>
                                <p>
                                    <strong>Lượt xem:</strong>
                                    <span>2.187</span>
                                </p>
                                <p>
                                    <strong>Cấp bậc mong muốn::</strong>
                                    <span>Nhân viên</span>
                                </p>
                                <p>
                                    <strong>Trình độ học vấn:</strong>
                                    <span>Cao đẳng</span>
                                </p>
                                <p>
                                    <strong>Ngày cập nhật:</strong>
                                    <span>13/07/2024</span>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="company__about">
                        <div class="about__head">Bộ lọc</div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection