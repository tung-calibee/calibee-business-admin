@extends('layouts.admin')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/booking/index.css') }}">
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
                            <button id="job-button" class="booking-active">
                                <a href="{{ route('booking.job') }}" class="job-text">Job Details</a>
                            </button>
                            <button id="booking-button">
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
                    <div style="background-color: #fff; font-size: 14px; border: 1px solid #ccc; border-top: none;" class="table_root__3n85C border-t border-t-neutral-75 -mt-[1px] table_pointerCursor__VnewE gfbs-table-wrapper"
                        data-column-fixed="false">
                        <div class="gfbs-spin gfbs-spin-large gfbs-spin-block gfbs-spin-hidden">
                            <div class="gfbs-spin-children">
                                <div
                                    class="gfbs-table-fixed-header gfbs-table-scroll-position-left gfbs-table-scroll-position-right">
                                    <div class="gfbs-table-container">
                                        <div class="gfbs-table-header" style="background-color: #f5f5f5;"
                                            style="overflow-y: scroll;">
                                            <table class="gfbs-table">
                                                <colgroup class="gfbs-table-colgroup">
                                                    <col
                                                    class="gfbs-table-col gfbs-table-column-expand"  style="width: 100px; min-width: 80px;">
                                                <col class="gfbs-table-col"
                                                    style="width: 200px; min-width: 180px">
                                                <col class="gfbs-table-col"
                                                    style="width: 200px; min-width: 180px">
                                                <col class="gfbs-table-col"
                                                    style="width: 180px; min-width: 170px">
                                                <col class="gfbs-table-col"
                                                    style="width: 180px; min-width: 170px">
                                                <col class="gfbs-table-col"
                                                    style="width: 180px; min-width: 170px">
                                                <col class="gfbs-table-col"
                                                    style="width: 180px; min-width: 170px">
                                                        
                                                </colgroup>
                                                <thead class="gfbs-table-thead">
                                                    <tr role="row" aria-rowindex="1"
                                                        class="gfbs-table-row">
                                                        <th role="columnheader"
                                                            aria-colindex="1"
                                                            class="gfbs-table-row-head" 
                                                            colspan="1" rowspan="1">STT
                                                        </th>
                                                        <th role="columnheader"
                                                            aria-colindex="2"
                                                            class="gfbs-table-row-head"
                                                            colspan="1" rowspan="1">Ngày làm việc
                                                           </th>
                                                        <th role="columnheader"
                                                            aria-colindex="3"
                                                            class="gfbs-table-row-head"
                                                            colspan="1" rowspan="1">Giờ làm việc
                                                        </th>
                                                        <th role="columnheader"
                                                            aria-colindex="4"
                                                            class="gfbs-table-row-head"
                                                            colspan="1" rowspan="1">Checked In
                                                        </th>
                                                        <th role="columnheader"
                                                            aria-colindex="5"
                                                            class="gfbs-table-row-head"
                                                            colspan="1" rowspan="1">Checked Out
                                                            </th>
                                                        <th role="columnheader"
                                                            aria-colindex="6"
                                                            class="gfbs-table-row-head"
                                                            colspan="1" rowspan="1">Người làm việc
                                                            </th>
                                                        <th role="columnheader"
                                                            aria-colindex="7"
                                                            class="gfbs-table-row-head"
                                                            colspan="1" rowspan="1">Trạng thái
                                                            </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        <div class="gfbs-table-body" style="max-height: 545px;">
                                            <table role="treegrid" aria-rowcount="10"
                                                aria-colcount="9" class="gfbs-table">
                                                <colgroup class="gfbs-table-colgroup">
                                                    <col
                                                    class="gfbs-table-col gfbs-table-column-expand"  style="width: 100px; min-width: 80px;">
                                                <col class="gfbs-table-col"
                                                    style="width: 200px; min-width: 180px">
                                                <col class="gfbs-table-col"
                                                    style="width: 200px; min-width: 180px">
                                                <col class="gfbs-table-col"
                                                    style="width: 180px; min-width: 170px">
                                                <col class="gfbs-table-col"
                                                    style="width: 180px; min-width: 170px">
                                                <col class="gfbs-table-col"
                                                    style="width: 180px; min-width: 170px">
                                                <col class="gfbs-table-col"
                                                    style="width: 180px; min-width: 170px">
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
                    <div class="activity-table-pagination_wrapper__1YeJ7" style="height: 60px; background-color: #fff; font-size: 14px;border: 1px solid #ccc; border-top: none; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
                        <div style="padding: 0 10px;" role="combobox"
                            aria-label="select value"
                            class="gfbs-select simple-select_root__1p-oW activity-table-pagination_itemsPerPageSelector__1EDX5 gfbs-select-single"
                            >
                            <div class="gfbs-select-selection">
                                <div  class="gfbs-select-content-wrapper" ><span
                                    class="gfbs-select-selection-text" style="font-size: 10px; color: #383E43;">Total Records 33</span>
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
                            <div class="gfbs-select-arrow"><span role="img"
                                    class="gfbs-icon gfbs-icon-default icon_root__2C6ht simple-select_arrowIcon__gaGvZ"
                                    aria-hidden="true" style="display: flex;align-items: center;justify-content: center;width: 100%;height: 100%;">
                                    <img style="width: 16px;" src="{{ asset('images/Arrow - Down 2 - gray61.svg') }}">
                                 </span></div>
                        </div>
                        <div class="pagination_root__2yFTb"
                            data-testid="activity-table-pagination">
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
</div>
@stop
@push('job-detail')
<script>
    var data = [
         {
             id: '1/33',
             date: 'Thứ 2, 16/10/2023',
             timeRange: '15:00 - 17:00',
             checkin: '15:09:03',
             checkout: '17:43:25',
             worker: 'Ngô Đức Ngọc Phi',
             status: 'Completed'
         },
         {
             id: '2/33',
             date: 'Thứ 4, 18/10/2023',
             timeRange: '15:00 - 17:00',
             checkin: '15:03:35',
             checkout: '17:10:15',
             worker: 'Ngô Đức Ngọc Phi',
             status: 'Completed'
         },
         {
             id: '3/33',
             date: 'Thứ 6, 20/10/2023',
             timeRange: '15:00 - 17:00',
             checkin: '15:09:52',
             checkout: '17:21:58',
             worker: 'Ngô Đức Ngọc Phi',
             status: 'Completed'
         },
         {
             id: '4/33',
             date: 'Thứ 2, 23/10/2023',
             timeRange: '15:00 - 17:00',
             checkin: '-- : -- : --',
             checkout: '-- : -- : --',
             worker: 'Đoàn Thị Mỹ Hương',
             status: 'Not Started'
         },
         {
             id: '5/33',
             date: 'Thứ 4, 25/10/2023',
             timeRange: '15:00 - 17:00',
             checkin: '-- : -- : --',
             checkout: '-- : -- : --',
             worker: 'Đoàn Thị Mỹ Hương',
             status: 'Not Started'
         },
         {
             id: '6/33',
             date: 'Thứ 6, 27/10/2023',
             timeRange: '15:00 - 17:00',
             checkin: '-- : -- : --',
             checkout: '-- : -- : --',
             worker: 'Đoàn Thị Mỹ Hương',
             status: 'Not Started'
         },
         {
             id: '7/33',
             date: 'Thứ 2, 30/10/2023',
             timeRange: '15:00 - 17:00',
             checkin: '-- : -- : --',
             checkout: '-- : -- : --',
             worker: 'Đoàn Thị Mỹ Hương',
             status: 'Not Started'
         },
         {       
             id: '8/33',
             date: 'Thứ 4, 01/11/2023',
             timeRange: '15:00 - 17:00',
             checkin: '-- : -- : --',
             checkout: '-- : -- : --',
             worker: 'Đoàn Thị Mỹ Hương',
             status: 'Not Started'
         },
         {
             id: '9/33',
             date: 'Thứ 6, 03/11/2023',
             timeRange: '15:00 - 17:00',
             checkin: '-- : -- : --',
             checkout: '-- : -- : --',
             worker: 'Đoàn Thị Mỹ Hương',
             status: 'Not Started'
         },
         {
             id: '10/33',
             date: 'Thứ 2, 06/11/2023',
             timeRange: '15:00 - 17:00',
             checkin: '-- : -- : --',
             checkout: '-- : -- : --',
             worker: 'Đoàn Thị Mỹ Hương',
             status: 'Not Started'
         },
        
     ];

     // Lặp qua mảng dữ liệu và thêm từng dòng vào bảng
     var table = document.querySelector('.gfbs-table-tbody');

     data.forEach(function(rowData) {
         var newRow = document.createElement('tr');
         newRow.classList.add('gfbs-table-row');

         var columns = ['id', 'date', 'timeRange', 'checkin', 'checkout', 'worker', 'status'];

         columns.forEach(function(columnName) {
             var cell = document.createElement('td');
             cell.classList.add('gfbs-table-row-cell');

             if (columnName === 'status') {
                 if (rowData.status === 'Completed') {
                     cell.innerHTML = `
                     <span class="activity-table_totalFare__13EPs" style="display: flex; gap: 5px;">
                         <img  src="{{ asset('images/ph_dot-outline-fill.svg') }}">
                         <span style="color: #383E43;">${rowData.status}</span>
                     </span>
                 `;
                 } else {
                 cell.innerHTML = `
                     <span class="activity-table_totalFare__13EPs" style="display: flex; gap: 5px;">
                         <img  src="{{ asset('images/ph_dot-outline-gray.svg') }}">
                         <span style="color: #383E43;">${rowData.status}</span>
                     </span>
                 `;
                 }
             } else {
                 cell.innerHTML = `<span style="color: #383E43;">${rowData[columnName]}</span>`;
             }

             newRow.appendChild(cell);
         });

         table.appendChild(newRow);
     });
 </script>
@endpush