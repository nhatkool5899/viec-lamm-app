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
                                <i class='bx bx-globe' ></i>
                                <span>https://nativex.edu.vn</span>
                            </div>
                            <div class="company__details-item">
                                <i class='bx bx-building-house'></i>
                                <span>100-499 nhân viên</span>
                            </div>
                            <div class="company__details-item">
                                <i class='bx bx-street-view'></i>
                                <span>22 người theo dõi</span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="company__follow">
                        <div class="button__follow">
                            <i class='bx bx-plus' ></i>
                            <span>Theo dõi công ty</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex company__main" style="gap: 30px">
                <div class="col-lg-8">
                    <div class="company__about">
                        <div class="about__head">Giới thiệu công ty</div>
                        <div class="box__content">
                            <div class="context">
                                <h4>About us</h4>
                                <p>NativeX is an online English learning platform, designed for working professionals with offices in Ho Chi Minh City & Hanoi, Vietnam.</p>
                                <p>About NativeX – The comprehensive online learning platform 
                                    NativeX is an online English learning platform, designed for working professionals with offices in Ho Chi Minh City & Hanoi, Vietnam.
                                </p>
                            </div>
                            <div class="context">
                                <h4>Mission</h4>
                                <p>Our mission is to empower adult learners with a well-rounded communication skill set for career advancement through our comprehensive English online learning platform. By utilizing a data-driven approach and scientific learning design on our advanced LMS platform, we aim to revolutionize the adult ELT market and offer the most effective and efficient means of learning English...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="company__about">
                        <div class="about__head">Việc làm tuyển dụng</div>
                        <div class="box__content">
                            <div class="card__right">
                                <div class="jobs__content card__jobs-content">
                                    <div class="jobs__logo card__right-logo">
                                        <img class="" src="https://cdn-new.topcv.vn/unsafe/200x/https://static.topcv.vn/company_logos/cong-ty-tnhh-giao-duc-vdn-a475a30c21944ad1919c284d516d6b91-667e91b84ebab.jpg" alt="job-logo">
                                    </div>
                                    <div class="jobs__info">
                                        <div class="jobs__name">Nhân viên kinh doanh nữ (Sales, Tư vấn tuyển sinh)</div>
                                        <div class="jobs__company" title="Công ty trách nhiệm giáo dục VDN">Công ty trách nhiệm giáo dục VDN</div>
                                        <div class="jobs__deadline">
                                            <span>Hạn nộp: 17/07</span>
                                            <span>Số lượng: 4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs__content card__jobs-content">
                                    <div class="jobs__logo card__right-logo">
                                        <img class="" src="https://cdn-new.topcv.vn/unsafe/200x/https://static.topcv.vn/company_logos/cong-ty-tnhh-giao-duc-vdn-a475a30c21944ad1919c284d516d6b91-667e91b84ebab.jpg" alt="job-logo">
                                    </div>
                                    <div class="jobs__info">
                                        <div class="jobs__name">Nhân viên kinh doanh nữ (Sales, Tư vấn tuyển sinh)</div>
                                        <div class="jobs__company" title="Công ty trách nhiệm giáo dục VDN">Công ty trách nhiệm giáo dục VDN</div>
                                        <div class="jobs__deadline">
                                            <span>Hạn nộp: 17/07</span>
                                            <span>Số lượng: 4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs__content card__jobs-content">
                                    <div class="jobs__logo card__right-logo">
                                        <img class="" src="https://cdn-new.topcv.vn/unsafe/200x/https://static.topcv.vn/company_logos/cong-ty-tnhh-giao-duc-vdn-a475a30c21944ad1919c284d516d6b91-667e91b84ebab.jpg" alt="job-logo">
                                    </div>
                                    <div class="jobs__info">
                                        <div class="jobs__name">Nhân viên kinh doanh nữ (Sales, Tư vấn tuyển sinh)</div>
                                        <div class="jobs__company" title="Công ty trách nhiệm giáo dục VDN">Công ty trách nhiệm giáo dục VDN</div>
                                        <div class="jobs__deadline">
                                            <span>Hạn nộp: 17/07</span>
                                            <span>Số lượng: 4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs__content card__jobs-content">
                                    <div class="jobs__logo card__right-logo">
                                        <img class="" src="https://cdn-new.topcv.vn/unsafe/200x/https://static.topcv.vn/company_logos/cong-ty-tnhh-giao-duc-vdn-a475a30c21944ad1919c284d516d6b91-667e91b84ebab.jpg" alt="job-logo">
                                    </div>
                                    <div class="jobs__info">
                                        <div class="jobs__name">Nhân viên kinh doanh nữ (Sales, Tư vấn tuyển sinh)</div>
                                        <div class="jobs__company" title="Công ty trách nhiệm giáo dục VDN">Công ty trách nhiệm giáo dục VDN</div>
                                        <div class="jobs__deadline">
                                            <span>Hạn nộp: 17/07</span>
                                            <span>Số lượng: 4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs__content card__jobs-content">
                                    <div class="jobs__logo card__right-logo">
                                        <img class="" src="https://cdn-new.topcv.vn/unsafe/200x/https://static.topcv.vn/company_logos/cong-ty-tnhh-giao-duc-vdn-a475a30c21944ad1919c284d516d6b91-667e91b84ebab.jpg" alt="job-logo">
                                    </div>
                                    <div class="jobs__info">
                                        <div class="jobs__name">Nhân viên kinh doanh nữ (Sales, Tư vấn tuyển sinh)</div>
                                        <div class="jobs__company" title="Công ty trách nhiệm giáo dục VDN">Công ty trách nhiệm giáo dục VDN</div>
                                        <div class="jobs__deadline">
                                            <span>Hạn nộp: 17/07</span>
                                            <span>Số lượng: 4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="company__about">
                        <div class="about__head">Thông tin liên hệ</div>
                        <div class="box__content">
                            <div class="about__title">
                                <i class='bx bx-map-alt' ></i>
                                <span>Địa chỉ công ty</span>
                            </div>
                            <div class="context">
                                <p>Tầng 1, Tòa nhà The Manor Officetel, số 89 Nguyễn Hữu Cảnh, Phường 22, Quận Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam</p>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15676.981679488888!2d106.717822!3d10.792506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a956761b01%3A0xfa6c972de18d3236!2sThe%20Manor%20Officetel!5e0!3m2!1svi!2sus!4v1720843712644!5m2!1svi!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection