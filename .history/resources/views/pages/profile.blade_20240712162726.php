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
                <div class="col-lg-4"></div>
            </div>
        </div>
    </section>
@endsection