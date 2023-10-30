@extends('layouts.admin')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/booking/index.css') }}">
@endsection
@section('content')
<div class="gfb-root-styles_root__oFJST">
    <main class="activity_root__2BPP9">
        <section class="activity_tableArea__q2Cep" style="color: #000; background-color: #f5f5f5;">
            <div class="bg-white rounded-[8px] overflow-hidden shadow-level-1">
                <div style="padding: 24px 0;">
                    <div style="width: 100%; height: 100%; justify-content: flex-start; align-items: flex-start; gap: 64px; display: inline-flex">
                        <div class="card-container" >
                            <div class="card" style="width: 165px">
                                <div class="card-content">All Bookings</div>
                                <img src="{{ asset('images/Arrow - Down 2.svg') }}">
                            </div>
                            <div style="width: 294px;" class="card" >
                                <div class="event-info">
                                    <img src="{{ asset('images/event.svg') }}">
                                    <div class="card-content">31/08/2023 - 29/09/2023</div>
                                </div>
                                <div class="arrow-icon" >
                                    <div style="width: 24px; height: 24px; justify-content: center; align-items: center; display: flex">
                                        <img src="{{ asset('images/Arrow - Down 2.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 101px; gap: 8px;">
                                <div class="arrow-icon">
                                    <div style="width: 24px; height: 24px; position: relative">
                                        <img src=" {{ asset('images/tune.svg') }}">
                                    </div>
                                </div>
                                <div class="input-label">Filters</div>
                            </div>
                        </div>
                        
                        <div class="footer-container" >
                            <div class="search-bar">
                                <div class="input-container">
                                    <div class="input-wrapper" style="width: 149px;">
                                        <div style="width: 149px; align-self: stretch; padding-left: 16px; padding-right: 16px; padding-top: 8px; padding-bottom: 8px; background: white; border-bottom-left-radius: 8px; border-top-left-radius: 8px; border: 1px #C6CACD solid; justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                            <div class="input-label">Mã Booking</div>
                                          <img src="{{ asset('images/Arrow - Down 2.svg') }}">
                                        </div>
                                    </div>
                                    <div class="input-wrapper" style="flex: 1 1 0;">
                                        <div class="search-input" >
                                            <div style="flex: 1 1 0; color: #888D92; font-weight: 400; line-height: 20px; word-wrap: break-word">Search</div>
                                            <div style="justify-content: flex-end; align-items: center; gap: 8px; display: flex">
                                                <div style="width: 24px; height: 24px; position: relative">
                                                    <img src="{{ asset('images/search.svg') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="download-button">
                                    <div class="download-btn">Download</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container">
                    <div class="header-content">
                        <div class="header-title">All Bookings</div>
                    </div>
                </div>
                <div style="background-color: #fff; border: 1px solid #ccc; border-top: none;" class="table_root__3n85C border-t border-t-neutral-75 -mt-[1px] table_pointerCursor__VnewE gfbs-table-wrapper">
                    <div class="gfbs-spin gfbs-spin-large gfbs-spin-block gfbs-spin-hidden">
                        <div class="gfbs-spin-children">
                            <div
                                class="gfbs-table-fixed-header gfbs-table-scroll-position-left gfbs-table-scroll-position-right">
                                <div class="gfbs-table-container">
                                    <div class="gfbs-table-header" style="background-color: #f5f5f5;"
                                       >
                                        <table class="gfbs-table">
                                            <colgroup class="gfbs-table-colgroup">
                                                <col
                                                    class="gfbs-table-col gfbs-table-column-expand"  style="width: 117px; min-width: 100px;">
                                                <col class="gfbs-table-col activity-table_creationTime__2fveH"
                                                    style="width: 101px; min-width: 90px;">
                                                <col class="gfbs-table-col"
                                                    style="width: 117px; min-width: 100px;">
                                                <col class="gfbs-table-col"
                                                    style="width: 117px; min-width: 100px;">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px;">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px;">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px;">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px;">
                                                    
                                            </colgroup>
                                            <thead class="gfbs-table-thead">
                                                <tr role="row" aria-rowindex="1"
                                                    class="gfbs-table-row">
                                                    <th role="columnheader"
                                                        aria-colindex="1"
                                                        class="gfbs-table-row-head activity-table_creationTime__2fveH"
                                                        colspan="1" rowspan="1">ID/Tên dịch vụ
                                                    </th>
                                                    <th role="columnheader"
                                                        aria-colindex="2"
                                                        class="gfbs-table-row-head"
                                                        colspan="1" rowspan="1">Mã hợp đồng
                                                       </th>
                                                    <th role="columnheader"
                                                        aria-colindex="3"
                                                        class="gfbs-table-row-head"
                                                        colspan="1" rowspan="1">Loại dịch vụ
                                                    </th>
                                                    <th role="columnheader"
                                                        aria-colindex="4"
                                                        class="gfbs-table-row-head"
                                                        colspan="1" rowspan="1">Ngày làm việc
                                                    </th>
                                                    <th role="columnheader"
                                                        aria-colindex="5"
                                                        class="gfbs-table-row-head"
                                                        colspan="1" rowspan="1">Đơn giá
                                                        </th>
                                                    <th role="columnheader"
                                                        aria-colindex="6"
                                                        class="gfbs-table-row-head"
                                                        colspan="1" rowspan="1">Giảm giá
                                                        </th>
                                                    <th role="columnheader"
                                                        aria-colindex="7"
                                                        class="gfbs-table-row-head"
                                                        colspan="1" rowspan="1">Thành tiền
                                                        </th>
                                                    <th role="columnheader"
                                                        aria-colindex="8"
                                                        class="gfbs-table-row-head"
                                                        colspan="1" rowspan="1">Trạng thái</th>
                                                    <th role="columnheader"
                                                        aria-colindex="9"
                                                        class="gfbs-table-row-head"
                                                        colspan="1" rowspan="1">Trạng thái thanh toán</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="gfbs-table-body" style="max-height: 545px;">
                                        <table role="treegrid" aria-rowcount="10"
                                            aria-colcount="9" class="gfbs-table">
                                            <colgroup class="gfbs-table-colgroup">
                                                <col
                                                class="gfbs-table-col gfbs-table-column-expand"  style="width: 117px; min-width: 100px;">
                                                <col class="gfbs-table-col activity-table_creationTime__2fveH"
                                                    style="width: 101px; min-width: 90px;">
                                                <col class="gfbs-table-col"
                                                    style="width: 117px; min-width: 100px;">
                                                <col class="gfbs-table-col"
                                                    style="width: 117px; min-width: 100px;">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px;">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px;">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px;">
                                                <col class="gfbs-table-col"
                                                    style="width:78px; min-width: 70px;">
                                        </colgroup>
                                            </colgroup>
                                            <tbody class="gfbs-table-tbody">
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="activity-table-pagination_wrapper__1YeJ7" style="height: 60px; background-color: #fff; font-size: 14px; border: 1px solid #ccc ;border-top:none; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
                    <div style="padding: 0 10px;" role="combobox"
                        aria-label="select value"
                        class="gfbs-select simple-select_root__1p-oW activity-table-pagination_itemsPerPageSelector__1EDX5 gfbs-select-single">
                        <div class="gfbs-select-selection">
                            <div class="gfbs-select-content-wrapper" ><span
                                class="gfbs-select-selection-text" style="font-size: 10px; color: #383E43;">Total Records 25</span>
                            </div>
                        </div>
                    </div>
                    <div style="border: 1px solid #616161; padding: 0 10px; border-radius: 5px;" role="combobox" aria-disabled="false" aria-expanded="false"
                        aria-controls="gfbs-select-9vmabksalni" aria-haspopup="listbox"
                        aria-label="select value" 
                        class="gfbs-select simple-select_root__1p-oW activity-table-pagination_itemsPerPageSelector__1EDX5 gfbs-select-single"
                        id="activity-table-items-per-page-selector">
                        <div class="gfbs-select-selection">
                            <div class="gfbs-select-content-wrapper"><span 
                                class="gfbs-select-selection-text" style="font-size: 10px; color: #383E43;">10 Records Per Page</span>
                            </div>
                        </div>
                        <div class="gfbs-select-arrow"><span role="img" style="display: flex;align-items: center;justify-content: center;width: 100%;height: 100%;"
                                class="gfbs-icon gfbs-icon-default icon_root__2C6ht simple-select_arrowIcon__gaGvZ"
                                aria-hidden="true"  style="display: flex;align-items: center;justify-content: center;width: 100%;height: 100%;">
                            <img style="width: 16px;" src="{{ asset('images/Arrow - Down 2 - gray61.svg') }}">
                            </span></div>
                    </div>
                    <div class="pagination_root__2yFTb">
                        <div class="pagination-container">
                            <div class="pagination-main" style="gap: 12px;">
                                <div class="pagination-main pagination-icon">
                                    <div style="width: 18px; height: 18px; justify-content: center; align-items: center; display: flex">
                                        <img src="{{ asset('images/Arrow - Left 2.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="pagination-number active">
                                    1
                                 </div>
                                 <div class="pagination-number">
                                     2
                                 </div>
                                 <div class="pagination-number">
                                     3
                                 </div>
                                <div class="pagination-main pagination-icon">
                                    <div style="width: 18px; height: 18px; justify-content: center; align-items: center; display: flex">
                                        <img src= "{{ asset('images/Arrow - Right 2.svg') }}" alt="">
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
@stop
@push('javascript')
<script>
    var data = [
          {
              id: 'CL23-000917',
              service_name: 'Vệ sinh sofa phòng họp',
              contract_id: '-',
              service_type: 'Giặt sofa, thảm,..',
              day: '08/10/2023',
              time: '15:00 - 17:00',
              price: '11.000.000đ',
              discount: '-',
              total: '11.000.000đ',
              status: 'Completed',
              pay_status: 'Paid',
          },

         {
              id: 'DK23-000918',
              service_name: 'Vệ sinh định kỳ Quý 4 - 2023',
              contract_id: '111023/Calibee-HĐDV',
              service_type: 'Dọn dẹp định kỳ',
              day: '01/10/23 - 10/12/23',
              time: '15:00 - 17:00',
              price: '25.000.000đ',
              discount: '-',
              total: '25.000.000đ',
              status: 'On-Service',
              pay_status: 'Paid',
          },
          {
              id: 'DK23-000966',
              service_name: 'Vệ sinh định kỳ Quý 3 - 2023',
              contract_id: '111022/Calibee-HĐDV',
              service_type: 'Dọn dẹp định kỳ',
              day: '01/07/23 - 31/09/23',
              time: '14:00 - 16:00',
              price: '25.000.000đ',
              discount: '-',
              total: '25.000.000đ',
              status: 'Completed',
              pay_status: 'Paid',
          },
         {
              id: 'CL23-001021',
              service_name: 'Tổng vệ sinh tiệc kick off dự án',
              contract_id: '-',
              service_type: 'Tổng vệ sinh',
              day: '05/02/2023',
              time: '9:00 - 11:00',
              price: '2.300.000đ',
              discount: '-',
              total: '2.300.000đ',
              status: 'Completed',
              pay_status: 'Paid',
          },
         {
              id: 'CL23-001011',
              service_name: 'Vệ sinh thảm toàn công ty',
              contract_id: '-',
              service_type: 'Giặt sofa, thảm,...',
              day: '05/01/2023',
              time: '7:00 - 12:00',
              price: '4.300.000đ',
              discount: '-',
              total: '4.300.000đ',
              status: 'Completed',
              pay_status: 'Paid',
          },
         {
              id: 'CL23-001010',
              service_name: 'Vệ sinh máy lạnh phòng họp dự án',
              contract_id: '-',
              service_type: 'Vệ sinh máy lạnh',
              day: '05/02/2023',
              time: '9:00 - 11:00',
              price: '1.300.000đ',
              discount: '-',
              total: '1.300.000đ',
              status: 'Completed',
              pay_status: 'Paid',
          },
         {
              id: 'CL23-001009',
              service_name: 'Vệ sinh rèm lớn sảnh chính',
              contract_id: '-',
              service_type: 'Giặt sofa, thảm...',
              day: '04/01/2023',
              time: '9:00 - 11:00',
              price: '960.000đ',
              discount: '-',
              total: '960.000đ',
              status: 'Completed',
              pay_status: 'Paid',
          },
      ];

      var table = document.querySelector('.gfbs-table-tbody');

      data.forEach(function(rowData) {
          var newRow = document.createElement('tr');
          newRow.classList.add('gfbs-table-row');

          var columns = ['id',  'contract_id', 'service_type', 'day', 'price', 'discount', 'total', 'status', 'pay_status'];

          columns.forEach(function(columnName) {
              var cell = document.createElement('td');
              cell.classList.add('gfbs-table-row-cell');
             
              if (columnName === 'id') {
                 cell.innerHTML = `<span class="activity-table_totalFare__13EPs">
                                         <p style="color: #383E43;">${rowData.id}</p>
                                         <p style="color: #383E43;">${rowData.service_name}</p>
                                     </span>`;
              } else
              if (columnName === 'day') {
                 cell.innerHTML = `<span class="activity-table_totalFare__13EPs">
                                         <p style="color: #383E43;">${rowData.day}</p>
                                         <p style="color: #383E43;">${rowData.time}</p>
                                     </span>`;
              } else
              
              if (columnName === 'status') {
               
             
                         if(rowData.status === 'On-Service'){
                         
                         cell.innerHTML = `<div style="width: 100%; height: 100%; padding-left: 10px; padding-right: 10px; padding-top: 6px; padding-bottom: 6px; background: rgba(247, 85, 85, 0.12); border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: inline-flex">
                                             <div style="text-align: center; color: #F75555; font-size: 10px; font-family: Roboto; font-weight: 500; letter-spacing: 0.20px; word-wrap: break-word; font-weight: 600;">${rowData.status}</div>
                                         </div>`
                     }else{
                         cell.innerHTML = `<div style="width: 100%; height: 100%; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                             <div style="flex: 1 1 0; height: 24px; padding: 6px 10px; background: rgba(74, 222, 128, 0.12); border-radius: 6px; justify-content: center; align-items: center; gap: 8px; display: flex">
                                                 <div style="text-align: center; color: #4AAF57; font-size: 10px; font-weight: 600; letter-spacing: 0.20px; word-wrap: break-word">${rowData.status}</div>
                                             </div>
                                         </div>`;
                     }
              }else
             
              if (columnName === 'pay_status') {
                 cell.innerHTML = `<div style="width: 100%; height: 100%; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                         <div style="flex: 1 1 0; height: 24px; padding: 6px 10px; border-radius: 6px; border: 1px #4AAF57 solid; justify-content: center; align-items: center; gap: 8px; display: flex">
                                             <div style="flex: 1 1 0; text-align: center; color: #4AAF57; font-size: 10px; font-weight: 600; letter-spacing: 0.20px; word-wrap: break-word">${rowData.pay_status}</div>
                                    </div>
                                    </div>`;
              
              } else {
                  cell.innerHTML = `<span style="color: #383E43;">${rowData[columnName]}</span>`;
              }

              newRow.appendChild(cell);
          });

          table.appendChild(newRow);
      });
  </script>

  <script>
     var menuItems = document.querySelectorAll('.gfbs-table-row');
     var secondMenuItem = menuItems[2];
     secondMenuItem.addEventListener('click', function(event) {
        window.location.href = "{{ route('booking.job') }}" ; 
     });
  </script>
@endpush