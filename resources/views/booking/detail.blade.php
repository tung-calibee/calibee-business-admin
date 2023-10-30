@extends('layouts.admin')
@section('content')
<div data-testid="react17-adapter">
    <div class="gfb-root-styles_root__oFJST">
        <main class="activity_root__2BPP9">
            <section class="activity_tableArea__q2Cep" style="color: #000; background-color: #f5f5f5;">
                <div class="bg-white rounded-[8px] overflow-hidden shadow-level-1">
                        <div style="width: 100%; height: 100%; padding: 24px 0; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                            <a href="booking-calibeebusiness.html" style="width: 24px; height: 24px; justify-content: center; align-items: center; display: flex">
                                <img src="{{ asset('images/Arrow - Left.svg') }}" alt="">
                            </a>
                            <div style="width: 25%; height: 100%; border-radius: 24px; overflow: hidden; border: 1px #E0E0E0 solid; justify-content: flex-start; align-items: center; display: inline-flex;background-color: #fff;">
                                <button id="job-button" style="width: 155px; padding: 8px 32px;border-radius: 20px; border: 1px white solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex; background: none;">
                                    <div style="text-align: center; color: #212121; font-size: 12px; letter-spacing: 0.20px; word-wrap: break-word">Job Details</div>
                                </button>
                                <button id="booking-button" style="padding:8px 32px; background: #F2FFFC; border-radius: 20px; border: 1px #12B555 solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex; width: 182px">
                                    <a href="{{ route('booking.detail') }}" style="text-align: center; color: #212121; font-size: 12px; word-wrap: break-word">Booking Details</a>
                                </button>
                            </div>
                        </div>

                    <div style="width: 100%; height: 100%; border: 1px solid #ccc; border-bottom: none; padding: 20px 25px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; display: inline-flex;background-color: #fff; border-top-right-radius: 8px;border-top-left-radius: 8px;">
                        <div style="justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
                            <div style="color: #383E43; font-size: 20px; font-family: Roboto; font-weight: 700; line-height: 24px; word-wrap: break-word">Booking Details</div>
                            <div></div>
                        </div>
                        <div style="justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
                            <div style="width: 350px; align-self: stretch; justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                <div style="color: #383E43; font-size: 14px; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">DK23-000918</div>
                                <div style="width: 1px; height: 100%; background-color: #E0E0E0;">
                                </div>
                                <div style="color: #383E43; font-size: 14px; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word;">Vệ sinh định kỳ - Quý 4 - 2023</div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 100%; height: 100%; padding-top: 32px; background: white; justify-content: flex-start; align-items: flex-start; gap: 26px; display: inline-flex; border: 1px solid #ccc; border-bottom: none;">
                        <div style="flex: 1 1 0; align-self: stretch; padding: 12px; background: white;  flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex">
                           <img src="{{ asset('images/chart1.jpg') }}" alt="" style="width: 320px; height: auto;">
                        </div>
                        <div style="flex: 1 1 0; align-self: stretch; padding: 12px; background: white;  flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex">
                           <img src="{{ asset('images/chart2.jpg') }}" alt="" style="width: 320px; height: auto;">
                        </div>
                        <div style="flex: 1 1 0; align-self: stretch; padding: 12px; background: white;  flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex">
                           <img src="{{ asset('images/chart3.jpg') }}" alt="" style="width: 320px; height: auto;">
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
                                                    <div style="    width: 100%;height: 100%;padding-left: 32px;padding-right: 32px;padding-top: 10px;padding-bottom: 10px;border-radius: 8px;border: 1px #E0E0E0 solid;flex-direction: column;justify-content: flex-start;align-items: flex-start;gap: 6px;display: inline-flex;">
                                                        <div style="align-self: stretch; height: 38px; justify-content: space-between; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; color: #616161; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Phí dịch vụ</div>
                                                            <div style="flex: 1 1 0; text-align: right; color: #616161; font-size: 14px; font-family: Roboto; font-weight: 600; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">25.000.000đ</div>
                                                        </div>
                                                        <div style="align-self: stretch; height: 38px; justify-content: space-between; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; color: #616161; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Mã giảm giá</div>
                                                            <div style="flex: 1 1 0; text-align: right; color: #616161; font-size: 14px; font-family: Roboto; font-weight: 600; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">-</div>
                                                        </div>
                                                        <div style="align-self: stretch; height: 38px; justify-content: space-between; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; color: #616161; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Giảm giá</div>
                                                            <div style="flex: 1 1 0; text-align: right; color: #616161; font-size: 14px; font-family: Roboto; font-weight: 600; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">0đ</div>
                                                        </div>
                                                        <div style="align-self: stretch; height: 38px; justify-content: space-between; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; color: #616161; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Phương thức thanh toán</div>
                                                            <div style="flex: 1 1 0; text-align: right; color: #616161; font-size: 14px; font-family: Roboto; font-weight: 600; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">Bank Transfer</div>
                                                        </div>
                                                        <div style="align-self: stretch; height: 38px; justify-content: space-between; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; color: #616161; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Tổng thanh toán</div>
                                                            <div style="flex: 1 1 0; text-align: right; color: #12B555; font-size: 14px; font-family: Roboto; font-weight: 600; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">25.000.000đ</div>
                                                        </div>
                                                        <div style="align-self: stretch; height: 38px; justify-content: space-between; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; color: #616161; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Trạng thái thanh toán</div>
                                                            <div style="flex: 1 1 0; text-align: right; color: #12B555; font-size: 14px; font-family: Roboto; font-weight: 600; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">Paid</div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            
                                            <div class="ant-col-12" style="padding-left: 12px; padding-right: 12px;">
                                                <p class="CompanyEditPage__confirmPageTitle___3Ob1X">Checklist
                                                </p>
                                                <fieldset class="CompanyEditPage__fieldset___1HRyk">
                                                    <legend class="CompanyEditPage__legend___3eQRB">Phạm vi công việc</legend>
                                                    <div style="width: 100%; height: 100%; padding-bottom: 32px; padding-left: 32px; padding-right: 32px; border-radius: 8px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                                            <div style="width: 24px; height: 24px; justify-content: center; align-items: center; display: flex">
                                                                <div style="width: 24px; height: 24px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="width: 20px; height: 20px; position: relative">
                                                                       <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="flex: 1 1 0; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: inline-flex">
                                                                <div style="align-self: stretch; color: #000; opacity: 0.65; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Dọn phòng họp</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                                            <div style="width: 24px; height: 24px; justify-content: center; align-items: center; display: flex">
                                                                <div style="width: 24px; height: 24px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="width: 20px; height: 20px; position: relative">
                                                                        <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="flex: 1 1 0; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: inline-flex">
                                                                <div style="align-self: stretch; color: #000; opacity: 0.65; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Dọn nhà vệ sinh</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                                            <div style="width: 24px; height: 24px; justify-content: center; align-items: center; display: flex">
                                                                <div style="width: 24px; height: 24px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="width: 20px; height: 20px; position: relative">
                                                                        <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="flex: 1 1 0; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: inline-flex">
                                                                <div style="align-self: stretch; color: #000; opacity: 0.65; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Kiểm tra 5 thùng và đổ rác</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                                            <div style="width: 24px; height: 24px; justify-content: center; align-items: center; display: flex">
                                                                <div style="width: 24px; height: 24px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="width: 20px; height: 20px; position: relative">
                                                                        <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="flex: 1 1 0; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: inline-flex">
                                                                <div style="align-self: stretch; color: #000; opacity: 0.65; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Lau chùi máy Photocopy lầu 2</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                                            <div style="width: 24px; height: 24px; justify-content: center; align-items: center; display: flex">
                                                                <div style="width: 24px; height: 24px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="width: 20px; height: 20px; position: relative">
                                                                        <img src="{{ asset('images/Frame 34641.svg') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="flex: 1 1 0; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: inline-flex">
                                                                <div style="align-self: stretch; color: #000; opacity: 0.65; font-size: 12px; font-family: Roboto; font-weight: 400; letter-spacing: 0.20px; word-wrap: break-word">Tưới cây ban công</div>
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
@push('booking-detail')
<script>
    var bookingbutton = document.getElementById('booking-button');
    var jobbutton = document.getElementById('job-button');

    bookingbutton.addEventListener('click', function(event) {
        window.location.href =  '{{ route("booking.detail") }}'; 
    });
    jobbutton.addEventListener('click', function(event) {
        window.location.href = '{{ route("booking.job") }}'; 
    });
</script>
@endpush