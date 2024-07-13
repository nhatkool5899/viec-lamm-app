@extends('layouts.page')

@section('content')
    <section class="section__head">
        <div class="container">
            
        </div>
    </section>
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
                        <a href="#" class="company__head">
                            <img src="https://cdn-new.topcv.vn/unsafe/80x/https://static.topcv.vn/company_logos/cong-ty-tnhh-tu-van-va-dau-tu-3t-4a70e1143e9d870b849fb9745da0b7fc-65eeb4421038a.jpg" alt="image">
                            <h4>CÔNG TY TNHH TƯ VẤN VÀ ĐẦU TƯ 3T</h4>
                        </a>
                        <div class="company__info">
                            <div class="company__info-item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                    </svg>
                                    <span>Quy mô:</span>
                                </div>
                                <p>25 - 50 nhân viên</p>
                            </div>
                            <div class="company__info-item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                      </svg>
                                    <span>Địa điểm:</span>
                                </div>
                                <p>Tầng 1, G4, tòa nhà Five Star Garden, số 2 đường Kim Giang, Hà Nội.</p>
                            </div>
                        </div>
                        <div class="company__view">
                            <a href="#" class="company__link">Xem thêm về công ty <i class='bx bx-link' ></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jobs__details">
                <div class="flex" style="gap: 30px">
                    <div class="col-lg-8">
                        <div class="box__group">
                            <div class="job__details-head">
                                <h4>Chi tiết tuyển dụng</h4>
                                <span class="job__details-bell"><i class='bx bx-bell' ></i> Gửi tôi việc làm tương tự</span>
                            </div>
                            <div class="jobs__details-content">
                                <div class="jobs__details-title">
                                    <p>
                                        Mô tả công việc
                                    </p>
                                </div>
                                <ul>
                                    <li>Thiết kế các công trình xử lý môi trường, thi công công trình xử lý môi trường,</li>
                                    <li>Lập báo cáo đánh giá tác động môi trường, lập hồ sơ xin giấy phép môi trường,</li>
                                    <li>
                                        Quan trắc môi trường, phân tích các chỉ tiêu môi trường trong phòng thí nghiệm.
                                    </li>
                                </ul>
                            </div>
                            <div class="jobs__details-content">
                                <div class="jobs__details-title">
                                    <p>
                                        Yêu cầu ứng viên
                                    </p>
                                </div>
                                <ul>
                                    <li>Tốt nghiệp Đại học chuyên ngành Công nghệ môi trường, cấp thoát nước, Khoa học môi trường, Hóa học (hóa phân tích), Công nghệ hóa học và các ngành nghề liên quan</li>
                                    <li>
                                        Có kinh nghiệm làm việc từ (trên 2 năm ) trở lên, làm việc với các dự án phát triển cộng đồng là một lợi thế.
                                    </li>
                                    <li>
                                        Sử dụng thành thạo máy tính, các phần mềm Word, Excel, Powerpoint và Autocad.
                                    </li>
                                    <li>Sử dụng thành thạo các thiết bị, dụng cụ trong phòng thí nghiệm đối với ứng viên làm việc tại phòng thí nghiệm.</li>
                                    <li>Có kỹ năng lập kế hoạch, tổ chức thực hiện và quản lí dự án.</li>
                                    <li>Có kỹ năng viết báo cáo dự án và khả năng thuyết trình tốt.</li>
                                    <li> Có khả năng đi công tác, đi công trường thi công công trình.</li>
                                    <li>Có thể làm việc dưới áp lực cao và làm việc độc lập, làm việc theo nhóm.</li>
                                    <li>Có thái độ làm việc nghiêm túc, chịu trách nhiệm trong công việc và sản phẩm mình làm ra.</li>
                                </ul>
                            </div>
                            <div class="jobs__details-content">
                                <div class="jobs__details-title">
                                    <p>Quyền lợi</p>
                                </div>
                                <ul>
                                    <li>Thu nhập: Từ 10 – 25 tr theo dự án thực hiện, có thể lên đến 30tr nếu làm tốt. Lương và phụ cấp sẽ được trả dựa trên kinh nghiệm và trình độ chuyên môn của ứng viên. Sẽ trao đổi cụ thể khi phỏng vấn</li>
                                    <li>Phụ cấp ăn trưa, điện thoại, thưởng các ngày lễ trong năm.Tham gia các hoạt động team building, du lịch</li>
                                    <li>
                                        Thưởng hoàn thành kế hoạch
                                    </li>
                                </ul>
                            </div>
                            <div class="jobs__details-content">
                                <div class="jobs__details-title"><p>Địa điểm làm việc</p></div>
                                <ul>
                                    <li>Hà Nội: Tầng 1 G4 tòa nhà Five Star Garden, số 2 đường Kim Giang, P. Kim Giang, Thanh Xuân</li>
                                </ul>
                            </div>
                            <div class="jobs__details-content">
                                <div class="jobs__details-title"><p>Thời gian làm việc</p></div>
                                <ul>
                                    <li>Thứ 2 - Thứ 7 (từ 08:00 đến 17:00)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box__group">
                            <div class="job__details-head">
                                <h4>Thông tin chung</h4>
                            </div>
                            <ul class="jobs__required">
                                <li>
                                    <div class="details__info-item">
                                        <span class="icon">
                                            <i class='bx bx-universal-access'></i>
                                        </span>
                                        <div>
                                            <p>Cấp bậc</p>
                                            <p><strong>Nhân viên</strong></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="details__info-item">
                                        <span class="icon">
                                            <i class='bx bx-user-plus' ></i>
                                        </span>
                                        <div>
                                            <p>Số lượng tuyển</p>
                                            <p><strong>5 người</strong></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="details__info-item">
                                        <span class="icon">
                                            <i class='bx bxs-backpack' ></i>
                                        </span>
                                        <div>
                                            <p>Hình thức làm việc</p>
                                            <p><strong>Toàn thời gian</strong></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="details__info-item">
                                        <span class="icon">
                                            <i class='bx bx-user' ></i>
                                        </span>
                                        <div>
                                            <p>Giới tính</p>
                                            <p><strong>Không yêu cầu</strong></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="details__info-item">
                                        <span class="icon">
                                            <i class='bx bx-user-pin' ></i>
                                        </span>
                                        <div>
                                            <p>Bằng cấp</p>
                                            <p><strong>Cao đẳng, Đại học</strong></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection