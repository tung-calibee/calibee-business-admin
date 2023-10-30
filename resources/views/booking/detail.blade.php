@extends('layouts.admin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/booking/detail.css') }}">
@endsection
@section('content')
<div data-testid="react17-adapter">
    <div class="gfb-root-styles_root__oFJST">
        <main class="activity_root__2BPP9">
            <section class="activity_tableArea__q2Cep" style="color: #000; background-color: #f5f5f5;">
                <div class="bg-white rounded-[8px] overflow-hidden shadow-level-1">
                    <div class="d-inline-flex align-items-center justify-content-start gap-3" style="width: 100%; height: 100%; padding: 24px 0;">
                        <a href="{{route('booking.index')}}">
                            <img src="{{ asset('images/Arrow - Left.svg') }}" alt="">
                        </a>
                        <div class="tabbing">
                            <button id="job-button">
                                <a href="{{ route('booking.job') }}" class="job-text">Job Details</a>
                            </button>
                            <button id="booking-button" class="booking-active">
                                <a href="{{ route('booking.detail') }}" class="job-text">Booking Details</a>
                            </button>
                        </div>
                    </div>

                    <div class="booking-title">
                        <div class="booking-details-header">
                            <div class="booking-details-header-text">Booking Details</div>
                        </div>
                        <div class="booking-details-header">
                            <div class="booking-details-info">
                                <div class="booking-details-info-label" >DK23-000918</div>
                                <div class="booking-details-info-divider" ></div>
                                <div class="booking-details-info-label">Vệ sinh định kỳ - Quý 4 - 2023</div>
                            </div>
                        </div>
                    </div>
                    <div class="image-container">
                        <div class="image-item">
                          <img src="{{ asset('images/chart1.jpg') }}" alt="">
                        </div>
                        <div class="image-item">
                          <img src="{{ asset('images/chart2.jpg') }}" alt="">
                        </div>
                        <div class="image-item">
                          <img src="{{ asset('images/chart3.jpg') }}" alt="">
                        </div>
                      </div>
                </div>
                <div class="AppContent__content___3NdQe ant-layout-content" style="border: 1px solid #ccc; border-top: none;">
                    <div class="AppContent__page___2sSVT">
                        <div class="CompanyEditPage__layout___2QEU- ant-layout">
                            <div class="ant-layout-content">
                                <div class="ant-row-flex ant-row-flex-center" style="background-color: #fff;">
                                    <div class="ant-col-23 CompanyEditPage__container___1WTal" style="padding: 0;">
                                        <div class="ant-row CompanyEditPage__confirmPageContainer___2uSyT"
                                            style="margin-left: -12px; margin-right: -12px;">
                                            <div class="ant-col-12" style="padding-left: 12px; padding-right: 12px;">
                                                <p class="CompanyEditPage__confirmPageTitle___3Ob1X">Thông tin Booking</p>
                                                <fieldset class="CompanyEditPage__fieldset___1HRyk">
                                                    <legend class="CompanyEditPage__legend___3eQRB">Thông tin chung</legend>
                                                    <div class="ant-row">
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Tên dịch vụ</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color" >Vệ sinh định kỳ - Quý 4 - 2023</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Mã dịch vụ</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color" >DK23-000918</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Ngày tạo booking</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">15-09-2023 13:32:36</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Giờ làm việc</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">15:00 - 17:00
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Lịch làm việc</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">Thứ 2, 4, 6</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Tổng thời lượng</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">2 giờ</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Ngày bắt đầu</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">Thứ 2, ngày 01/10/2023</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Ngày kết thúc</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">Chủ nhật, ngày 31/12/2023</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Diện tích cần dọn</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">90m² - 140m²</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Số lượng nhân viên</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">1</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="CompanyEditPage__fieldset___1HRyk">
                                                    <legend class="CompanyEditPage__legend___3eQRB ">Thông tin Khách hàng</legend>
                                                    <div class="ant-row">
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Tên khách hàng</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">CÔNG TY TNHH XKORTECH</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Số điện thoại</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">+84972231875
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Toà nhà</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">
                                                                    -</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Địa chỉ</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">244 Đường Cống Quỳnh, Phạm Ngũ Lão, Quận 1, Hồ Chí Minh, Việt Nam</p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ant-col-12">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Cổng</p>
                                                                <p class="CompanyEditPage__value___HPJAM">
                                                                    -</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <fieldset class="CompanyEditPage__fieldset___1HRyk">
                                                    <legend class="CompanyEditPage__legend___3eQRB">Tùy chọn</legend>
                                                    <div class="ant-row">
                                                        <div class="ant-col-xs-24">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Ưu tiên người làm yêu thích</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">Không</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-xs-24">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    CTV biết ngoại ngữ</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">Không</p>
                                                            </div>
                                                        </div>
                                                        <div class="ant-col-xs-24">
                                                            <div class="CompanyEditPage__valueDisplay___2aUZJ">
                                                                <p class="CompanyEditPage__valueDisplayField___3ESrF">
                                                                    Dịch vụ Premium</p>
                                                                <p class="CompanyEditPage__value___HPJAM text-color">Không</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="ant-col-12" style="padding-left: 12px; padding-right: 12px; color: #424242">
                                                <p class="CompanyEditPage__confirmPageTitle___3Ob1X">Thông tin thanh toán</p>
                                                <fieldset class="CompanyEditPage__fieldset___1HRyk">
                                                    <legend class="CompanyEditPage__legend___3eQRB">Tổng cộng</legend>
                                                    <div class="payment-details-container">
                                                    <div class="payment-detail-item">
                                                        <div class="payment-detail-label">Phí dịch vụ</div>
                                                        <div class="payment-detail-value">25.000.000đ</div>
                                                    </div>
                                                    <div class="payment-detail-item">
                                                        <div class="payment-detail-label">Mã giảm giá</div>
                                                        <div class="payment-detail-value">-</div>
                                                    </div>
                                                    <div class="payment-detail-item">
                                                        <div class="payment-detail-label">Giảm giá</div>
                                                        <div class="payment-detail-value">0đ</div>
                                                    </div>
                                                    <div class="payment-detail-item">
                                                        <div class="payment-detail-label">Phương thức thanh toán</div>
                                                        <div class="payment-detail-value">Bank Transfer</div>
                                                    </div>
                                                    <div class="payment-detail-item">
                                                        <div class="payment-detail-label">Tổng thanh toán</div>
                                                        <div class="payment-detail-value total-payment">25.000.000đ</div>
                                                    </div>
                                                    <div class="payment-detail-item">
                                                        <div class="payment-detail-label">Trạng thái thanh toán</div>
                                                        <div class="payment-detail-value payment-status">Paid</div>
                                                    </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            
                                            <div class="ant-col-12" style="padding-left: 12px; padding-right: 12px;">
                                                <p class="CompanyEditPage__confirmPageTitle___3Ob1X">Checklist
                                                </p>
                                                <fieldset class="CompanyEditPage__fieldset___1HRyk">
                                                    <legend class="CompanyEditPage__legend___3eQRB">Phạm vi công việc</legend>
                                                    <div class="job-scope-container">
                                                        <div class="job-scope-item">
                                                            <div class="icon-container">
                                                                <div class="icon-wrapper">
                                                                    <div  class="icon">
                                                                       <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="job-description">
                                                                <div class="job-title">Dọn phòng họp</div>
                                                            </div>
                                                        </div>
                                                        <div class="job-scope-item">
                                                            <div class="icon-container">
                                                                <div class="icon-wrapper">
                                                                    <div  class="icon">
                                                                       <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="job-description">
                                                                <div class="job-title">Dọn nhà vệ sinh</div>
                                                            </div>
                                                        </div>
                                                        <div class="job-scope-item">
                                                            <div class="icon-container">
                                                                <div class="icon-wrapper">
                                                                    <div  class="icon">
                                                                       <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="job-description">
                                                                <div class="job-title">Kiểm tra 5 thùng và đổ rác</div>
                                                            </div>
                                                        </div>
                                                        <div class="job-scope-item">
                                                            <div class="icon-container">
                                                                <div class="icon-wrapper">
                                                                    <div  class="icon">
                                                                       <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="job-description">
                                                                <div class="job-title">Lau chùi máy Photocopy lầu 2</div>
                                                            </div>
                                                        </div>
                                                        <div class="job-scope-item">
                                                            <div class="icon-container">
                                                                <div class="icon-wrapper">
                                                                    <div  class="icon">
                                                                       <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="job-description">
                                                                <div class="job-title">Tưới cây ban công</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
@stop
