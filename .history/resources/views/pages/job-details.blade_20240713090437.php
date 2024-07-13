@extends('layouts.page')

@section('content')
    <section class="section section__feature">
        <div class="container">
            <div class="flex" style="gap: 30px">
                <div class="col-lg-8">
                    <div class="box__group">
                        <div class="details__title">Nhân Viên Dự Án Môi Trường, Lương Thưởng Theo Năng Lực</div>
                        <div class="details__info">
                            <div class="details__info-item">
                                <span class="icon">
                                    <i class='bx bxs-dollar-circle'></i>
                                </span>
                                <div>
                                    <p>Mức lương</p>
                                    <p><strong>10- 25 triệu</strong></p>
                                </div>
                            </div>
                            <div class="details__info-item">
                                <span class="icon">
                                    <i class='bx bxs-map' ></i>
                                </span>
                                <div>
                                    <p>Địa điểm</p>
                                    <p><strong>Cần Thơ</strong></p>
                                </div>
                            </div>
                            <div class="details__info-item">
                                <span class="icon">
                                    <i class='bx bx-shape-polygon' ></i>
                                </span>
                                <div>
                                    <p>Kinh nghiệm</p>
                                    <p><strong>1 năm</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="details__deadline">
                            <i class='bx bxs-time-five' ></i>
                            <span>Hạn nộp hồ sơ: 01/08/2024</span>
                        </div>
                        <div class="details__action">
                            <button class="button__apply-now">
                                <i class='bx bx-send' ></i>
                                <span>
                                    Ứng tuyển ngay
                                </span>
                            </button>
                            <button class="button__save">
                                <i class='bx bx-heart' ></i>
                                <span>Lưu tin</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box__group">
                        <div class="company__head">
                            <img src="https://cdn-new.topcv.vn/unsafe/80x/https://static.topcv.vn/company_logos/cong-ty-tnhh-tu-van-va-dau-tu-3t-4a70e1143e9d870b849fb9745da0b7fc-65eeb4421038a.jpg" alt="image">
                            <h4>CÔNG TY TNHH TƯ VẤN VÀ ĐẦU TƯ 3T</h4>
                        </div>
                        <div class="company__info">
                            <div class="company__info-item">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                    </svg>
                                    <span>Quy mô</span>
                                </div>
                                <p>25 - 50 nhân viên</p>
                            </div>
                            <div class="company__info-item">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                      </svg>
                                    <span>Địa điểm</span>
                                </div>
                                <span>Tầng 1, G4, tòa nhà Five Star Garden, số 2 đường Kim Giang, Hà Nội.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection