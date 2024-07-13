@extends('layouts.page')

@section('content')
    <section class="section section__feature">
        <div class="container">
            <div class="flex" style="gap: 30px">
                <div class="col-lg-8">
                    <div class="box__group">
                        <div class="box__group-body">
                            <div class="box__group-header">
                                <h4>Thông tin cá nhân</h4>
                                <p class="required"><span class="require_hight-light">(*)</span> Các thông tin bắt buộc</p>
                            </div>
                            <form action="{{url('update-profile')}}" method="POST">
                                @csrf
                                <div class="box-content">
                                    <div class="box-need-work">
                                        <div class="box-item">
                                            <p>Họ và tên <span class="require_hight-light">*</span></p>
                                            <input type="text" class="form-control box-item__input" placeholder="Nhập họ và tên" name="fullname" value="Minh Nhật">
                                        </div>
                                        <div class="box-item">
                                            <p>Số điện thoại</p>
                                            <input type="text" class="form-control box-item__input" placeholder="Nhập số điện thoại" name="phone" value="">
                                        </div>
                                        <div class="box-item">
                                            <p>Email</p>
                                            <input type="text" class="form-control box-item__input" value="minhnhat14713@gmail.com" disabled="" readonly="">
                                        </div>
                                    </div>
                                    <div class="box-submit">
                                        <button type="submit" class="button__primary default" style="padding: 14px 30px">Lưu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box__setting">
                        <div class="turn-on-job__header">
                            <div class="profile-avatar">
                                <img src="https://www.topcv.vn/images/avatar-default.jpg" alt="image">
                                <span class="vip-badge" style="background-color: gray">VERIFIED</span>
                                <a href="javascript:void(0)" class="change-avatar" data-target="#upload-profile-avatar" data-toggle="modal" id="btn-upload-avatar">
                                    <i class="fa-solid fa-camera"></i>
                                </a>
                            </div>
                            <div class="turn-on-job__header-info">
                                <div class="text-welcome">Chào bạn trở lại,</div>
                                <h4 class="profile-fullname">Minh Nhật</h4>
                                <div class="account-type vip">
                                    <span style="background-color:  gray">
                                    Tài khoản đã xác thực
                                    </span>
                                </div>
                                <div class="box-footer">
                                    <a href="https://www.topcv.vn/tai-khoan/nang-cap" class="btn btn-sm btn-upgrade">
                                        <i class="fa-solid fa-circle-arrow-up"></i>
                                        <span>
                                            Nâng cấp tài khoản
                                        </span>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection