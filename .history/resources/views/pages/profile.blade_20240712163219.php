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
                            <form action="https://www.topcv.vn/ajax-upload-avatar" method="post" enctype="multipart/form-data" id="upload-avatar-form" style="display: none;">
                            <input type="hidden" name="_token" value="ZEdQk95koTx9pKPCVlYcLVmKIcG88TGxrumXR2fd">
                            <input type="file" name="avatar" id="avatar-image">
                            </form>
                            <div id="imageEditorWraper" style="display: none;">
                            <div class="container">
                            <h3>Chỉnh sửa ảnh đại diện</h3>
                            <div class="editor-col-left">
                            <h4>Ảnh gốc</h4>
                            <div class="imageEditor">
                            <img src="">
                            </div>
                            <div class="editorChooseImage">
                            <a href="#" class="btn-choose-image"><i class="fa fa-picture-o"></i><br>Click chọn ảnh để tải lên!</a>
                            </div>
                            <div class="tipCompress" style="color: red;margin-top: 5px;margin-left: 20px;text-align: left;">
                            Nếu ảnh của bạn có dung lượng trên 5MB, vui lòng
                            <a href="https://compressor.io/compress" target="_blank" style="color:"> bấm vào đây</a> để giảm dung lượng ảnh.
                            </div>
                            <div class="loadingShow" style="display: none;">
                            <i class="fa fa-spinner fa-spin"></i>
                            <br><br>
                            <span class="loadingMessage">Đang tải ảnh lên ...</span>
                            </div>
                            </div>
                            <div class="editor-col-right">
                            <h4>Ảnh đại diện hiển thị</h4>
                            <div class="imageEditorControls">
                            <div class="img-edit-preview" style="border: 1px solid #efefef;border-radius: 50%"><img src="/images/avatar-default.jpg"></div>
                            <div class="edit-image-btns">
                            <button type="button" class="btn-change-image">Đổi ảnh</button>
                            <button type="button" class="btn-remove-image">Xóa ảnh</button><br>
                            </div>
                            <div>
                            <button type="button" class="btn-save-image">Xong</button>
                            </div>
                            <div>
                            <a href="#" class="btn-close-image-editor" title="Đóng trình chỉnh sửa (Không lưu thay đổi)">Đóng lại (Không lưu)</a>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
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
        </div>
    </section>
@endsection