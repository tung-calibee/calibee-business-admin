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
                            <div style="width: 25%; height: 100%; border-radius: 24px; overflow: hidden; border: 1px #E0E0E0 solid; justify-content: flex-start; align-items: center; display: inline-flex; background-color: #fff;">
                                <button id="job-button" style="padding:8px 32px; background: #F2FFFC; border-radius: 20px; border: 1px #12B555 solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex">
                                    <div style="text-align: center; color: #212121; font-size: 12px; letter-spacing: 0.20px; word-wrap: break-word">Job Details</div>
                                </button>
                                <button id="booking-button" style="width: 155px; padding: 8px 32px;border-radius: 20px; border: 1px white solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex; background: none;">
                                    <div style="text-align: center; color: #212121; font-size: 12px; word-wrap: break-word">Booking Details</div>
                                </button>
                            </div>
                        </div>

                    <div style="width: 100%; height: 100%; border: 1px solid #ccc; border-bottom: none; padding: 20px 25px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; display: inline-flex; background-color: #fff; border-top-right-radius: 8px;border-top-left-radius: 8px;">
                        <div style="justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
                            <div style="color: #383E43; font-size: 20px; font-family: Roboto; font-weight: 700; line-height: 24px; word-wrap: break-word">Job Details</div>
                            <div></div>
                        </div>
                        <div style="justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex">
                            <div style="width: 350px; align-self: stretch; justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                <div style="color: #383E43; font-size: 14px; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">DK23-000918</div>
                                <div style="width: 1px; height: 100%; background-color: #E0E0E0;">
                                </div>
                                <div style="color: #383E43; font-size: 14px; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">Vệ sinh định kỳ - Quý 4 - 2023</div>
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
                            <div style="width: 100%; height: 100%; padding-left: 36px; padding-right: 36px; padding-top: 24px; padding-bottom: 24px; justify-content: flex-end; align-items: center; gap: 48px; display: inline-flex">
                                <div style="justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
                                    <div style="padding: 5px; border-radius: 4px; border: 1px #EEEEEE solid; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                        <div style="width: 18px; height: 18px; justify-content: center; align-items: center; display: flex">
                                            <img  src="{{ asset('images/Left 2.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div style="width: 28px; padding: 4px; background: #12B555; border-radius: 4px; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                        <div style="color: white; font-size: 10px; font-family: Roboto; font-weight: 500; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">1</div>
                                    </div>
                                    <div style="width: 28px; padding: 4px; border-radius: 4px; border: 1px #EEEEEE solid; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                        <div style="color: #616161; font-size: 10px; font-family: Roboto; font-weight: 500; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">2</div>
                                    </div>
                                    <div style="width: 28px; padding: 4px; border-radius: 4px; border: 1px #EEEEEE solid; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                        <div style="color: #616161; font-size: 10px; font-family: Roboto; font-weight: 500; line-height: 19.60px; letter-spacing: 0.20px; word-wrap: break-word">3</div>
                                    </div>
                                    <div style="padding: 5px; border-radius: 4px; border: 1px #EEEEEE solid; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                        <div style="width: 18px; height: 18px; justify-content: center; align-items: center; display: flex">
                                            <img src="{{ asset('images/Arrow - Right 2.svg') }}" alt="">
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
<script>
    var bookingbutton = document.getElementById('booking-button');
    var jobbutton = document.getElementById('job-button');

    bookingbutton.addEventListener('click', function(event) {
        window.location.href = "{{ route('booking.index') }}";
    });
    jobbutton.addEventListener('click', function(event) {
        window.location.href =  @php '{{ route("booking.job") }}' @endphp; 
    });
</script>
@endpush