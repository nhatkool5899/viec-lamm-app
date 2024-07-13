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
                            <button class="button__apply-now">Ứng tuyển ngay</button>
                            <button class="button__save">
                                <i class='bx bx-heart' ></i>
                                <span>Lưu tin</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box__setting">
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection