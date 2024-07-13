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
                        <img src="https://cdn-new.topcv.vn/unsafe/140x/https://static.topcv.vn/company_logos/QMOE8IDE8fymcxwi2oQSqfd0xwhPTLUv_1685700767____bf16a9bce0dec8cc42da7a53953bf7c1.png" alt="logo">
                    </div>
                    <div class="company__middle">
                        <h3>CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC NATIVE X</h3>
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
                </div>
            </div>
        </div>
    </section>
@endsection