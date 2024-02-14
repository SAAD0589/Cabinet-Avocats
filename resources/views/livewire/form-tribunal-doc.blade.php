<div class="row py-3">

    <div class="col-12">
        <div class="row  mx-3">
            <div class="col-xl-4  py-3">
                <div class="row justify-content-between border rounded-4">
                    <div class="col-6 py-2 text-center fw-bold active py-3 rounded-4" wire:click="Change2"
                        style="background:{{ $bgcolor2 }};cursor:pointer;border-radius:50px;color:{{ $bgcolor1 }};">
                        طلبات التنفيذ
                    </div>
                    <div class="col-6 py-2 text-center fw-bold active py-3 rounded-4" wire:click="Change1"
                        style="background:{{ $bgcolor1 }};cursor:pointer;
                     border-radius:50px;color:{{ $bgcolor2 }};transition:0.1s">
                        طلبات التبليغ
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row ">
            <div class="col-xl-3 col-sm-4">
                <button class="btn btn-light  py-3 px-4 w-100 fw-bold rounded-3" wire:click='TribunalTypePremary'
                    style="background: {{ $bg1 }};color:{{ $color1 }}">المحكمة الإبتدائية</button>
            </div>
            <div class="col-xl-3 col-sm-4">
                <button class="btn btn-light  py-3  w-100 fw-bold rounded-3" wire:click='TribunalTypeApel'
                    style="background: {{ $bg2 }};color:{{ $color2 }}">المحكمة الإستئنافية</button>
            </div>
            <div class="col-xl-3 col-sm-4">
                <button class="btn btn-light py-3 px-4 w-100 fw-bold rounded-3 " wire:click='TribunalTypeCas'
                    style="background: {{ $bg3 }};color:{{ $color3 }}">محكمة النقض</button>
            </div>
            <div class="col-xl-3"></div>



        </div>



        <div class="row justify-content-between py-2">
            <div class="col-xl-9 col-sm-8">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-sm-6">
                        {{-- <button class="btn btn-light  py-3 px-4 w-100 fw-bold rounded-3">الجهة </button> --}}
                        <select class="form-control py-3  w-100 fw-bold rounded-3 text-end"
                            style="font-weight: bold;font-size:18px;border: 1px solid #efeeee;cursor: pointer;"
                            wire:model='villesId' wire:change='SelectRegion'>
                            <option value="">الجهة</option>
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}">{{ __('region.' . $ville->ville_nom) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        {{-- <button class="btn btn-light py-3 px-4 w-100 fw-bold rounded-3">المحكمة </button> --}}
                        <select class="form-control py-3 px-4 w-100 fw-bold rounded-3 text-end"
                            wire:model='tribunalCheck' wire:change='SelectTribunal'
                            style="font-weight: bold;font-size:18px;border: 1px solid #efeeee;cursor: pointer;">
                            <option value="">المحكمة</option>
                            @foreach ($tribunals as $tribunal)
                                <option value="{{ $tribunal->trib_nom }}">{{ $tribunal->trib_nom }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
            <div class="col-xl-3  col-sm-4  align-self-center ">
                <button wire:click='exportToExcel' class="btn btn-light py-2  fw-bold rounded-3 w-100 ">تحميل
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 26"
                        fill="none">
                        <g clip-path="url(#clip0_436_9130)">
                            <path
                                d="M21.6115 5.99733L17.8372 2.22083C16.4039 0.788667 14.4994 0 12.4747 0H7.58341C4.59666 0 2.16675 2.42992 2.16675 5.41667V20.5833C2.16675 23.5701 4.59666 26 7.58341 26H18.4167C21.4035 26 23.8334 23.5701 23.8334 20.5833V11.3588C23.8334 9.33183 23.0437 7.4295 21.6115 5.99733ZM20.0797 7.53025C20.4242 7.87367 20.7156 8.25608 20.9517 8.66775H16.249C15.651 8.66775 15.1657 8.18133 15.1657 7.58442V2.88058C15.5773 3.11675 15.9597 3.40817 16.3042 3.75267L20.0786 7.52917L20.0797 7.53025ZM21.6667 20.5844C21.6667 22.3763 20.2086 23.8344 18.4167 23.8344H7.58341C5.79158 23.8344 4.33341 22.3763 4.33341 20.5844V5.41667C4.33341 3.62483 5.79158 2.16667 7.58341 2.16667H12.4747C12.6512 2.16667 12.8267 2.17533 13.0001 2.19158V7.58333C13.0001 9.37517 14.4582 10.8333 16.2501 10.8333H21.6418C21.6581 11.0067 21.6667 11.1822 21.6667 11.3588V20.5844ZM17.016 17.4482C17.4396 17.8707 17.4396 18.5564 17.016 18.98L15.2686 20.7285C14.6435 21.3536 13.8212 21.6667 13.0001 21.6667C12.1789 21.6667 11.3567 21.3536 10.7316 20.7285L8.98416 18.98C8.56058 18.5564 8.56058 17.8707 8.98416 17.4482C9.40775 17.0246 10.0924 17.0246 10.516 17.4482L11.9167 18.8489V14.0844C11.9167 13.4864 12.401 13.0011 13.0001 13.0011C13.5992 13.0011 14.0834 13.4864 14.0834 14.0844V18.8489L15.4842 17.4482C15.9077 17.0246 16.5924 17.0246 17.016 17.4482Z"
                                fill="#070707" />
                        </g>
                        <defs>
                            <clipPath id="clip0_436_9130">
                                <rect width="26" height="26" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>


        </div>
    </div>




    @include('Admins.Reports.Delete')
    @include('Admins.Implementations.Delete')
    @include('Admins.FormTribunalDocs.Truncate')
    <div class="table-responsive-xl  py-5">
        <table class="table">
            <thead class="text-end" style="border-bottom:1pt solid #fff">
                <tr>
                    <th class="text-truncate">الحالة</th>
                    <th class="text-truncate">مرجع الملف بالمكتب</th>
                    <th class="text-truncate">الأطراف</th>
                    <th class="text-truncate">المحكمة</th>
                    <th class="text-truncate">رقم الملف</th>
                    <th class="text-truncate">تاريخ الطلب</th>
                    @if ($check == 1)
                        <th class="text-truncate">رقم الملف التبليغى</th>
                    @else
                        <th class="text-truncate">رقم الملف التنفيذي</th>
                    @endif
                    <th class="text-truncate">المفوض القضائي</th>
                    <th class="text-truncate">الإجراءالمطلوب</th>
                    <th></th>
                </tr>
                @if ($check == 1)
                    @foreach ($items as $itemRep)
                        <tr>
                            <td>

                                <div class="row  ">
                                    <div class="col-6 ">
                                        <label class="itemSwitchRep switch border rounded-5 "
                                            data-id="{{ $itemRep->IdItem }}">
                                            <input type="checkbox" class="checkbox"
                                                {{ $itemRep->status == 'done' ? 'checked' : '' }}>
                                            <div class="slider"></div>
                                            <div class="slider-card">
                                                <div class="slider-card-face slider-card-front"></div>
                                                <div class="slider-card-face slider-card-back"></div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-2 px-2  ">
                                        @if ($itemRep->status == 'done')
                                            <label class="itemRepo{{ $itemRep->IdItem }} text-success fw-bold py-1">
                                                تمت
                                            </label>
                                        @else
                                            <label class="itemRepo{{ $itemRep->IdItem }} text-danger fw-bold py-1">
                                                جارية
                                            </label>
                                        @endif

                                    </div>

                            </td>
                            <td>{{ $itemRep->reference }}</td>
                            <td>{{ $itemRep->Clt }} {{ $itemRep->Enmy }}</td>
                            <td>{{ $itemRep->type_nom }}</td>
                            <td>{{ $itemRep->trib_reference }}</td>
                            <td>{{ $itemRep->date_R }}</td>
                            <td>{{ $itemRep->judicial_commisioner }}</td>
                            <td>{{ $itemRep->Num_Doc_R }}</td>
                            <td class="">
                                <div class="truncateText d-flex  " data-id="{{ $itemRep->procedure }}"
                                    data-toggle="modal" data-target="#TruncateText">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="30" height="28"
                                        viewBox="0 0 34 31" fill="none">
                                        <rect width="34" height="31" rx="4" fill="#F2F5FA" />
                                        <path d="M16.7139 10V22" stroke="#868686" />
                                        <path d="M23 16L11 16" stroke="#868686" />
                                    </svg>
                                    <div class="d-inline-block text-truncate text-end  py-1" dir="rtl"
                                        style="max-width: 120px;">{{ $itemRep->procedure }}...</div>
                                </div>


                            </td>
                            <td>
                                <div class="dropdown ">
                                    <svg class=" dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="7"
                                        height="20" viewBox="0 0 7 27" fill="none">
                                        <path
                                            d="M3.5 7C5.433 7 7 5.433 7 3.5C7 1.567 5.433 0 3.5 0C1.567 0 0 1.567 0 3.5C0 5.433 1.567 7 3.5 7Z"
                                            fill="#CBC5C5" />
                                        <path
                                            d="M3.5 17C5.433 17 7 15.433 7 13.5C7 11.567 5.433 10 3.5 10C1.567 10 0 11.567 0 13.5C0 15.433 1.567 17 3.5 17Z"
                                            fill="#CBC5C5" />
                                        <path
                                            d="M3.5 27C5.433 27 7 25.433 7 23.5C7 21.567 5.433 20 3.5 20C1.567 20 0 21.567 0 23.5C0 25.433 1.567 27 3.5 27Z"
                                            fill="#CBC5C5" />
                                    </svg>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="{{ route('reports.edit', $itemRep->IdItem) }}"
                                                class="dropdown-item text-center"
                                                style="font-weight: bold;font-size:18px">تعديل</a>
                                        </li>

                                        <li>
                                            <button style="font-weight: bold;font-size:18px"
                                                data-id="{{ $itemRep->IdItem }}"
                                                class="DeleteReport dropdown-item text-center text-danger"
                                                data-toggle="modal" data-target="#DeletedReport">حذف
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="10" style="border-bottom: 1px solid #ccc;" class="my-5"></td>
                        </tr>
                    @endforeach
                @else
                    @foreach ($items as $itemImp)
                        <tr>
                            <td>
                                <div class="row justify-content-around ">
                                    <div class="col-2 px-1  ">
                                        @if ($itemImp->status == 'done')
                                            <label class="itemImp{{ $itemImp->IdItem }} text-success fw-bold py-1">
                                                تمت
                                            </label>
                                        @else
                                            <label class="itemImp{{ $itemImp->IdItem }} text-danger fw-bold py-1">
                                                جارية
                                            </label>
                                        @endif

                                    </div>
                                    <div class="col-6 ">
                                        <label class="itemSwitchImp switch border rounded-5 "
                                            data-id="{{ $itemImp->IdItem }}">
                                            <input type="checkbox" class="checkbox"
                                                {{ $itemImp->status == 'done' ? 'checked' : '' }}>
                                            <div class="slider"></div>
                                            <div class="slider-card">
                                                <div class="slider-card-face slider-card-front"></div>
                                                <div class="slider-card-face slider-card-back"></div>
                                            </div>
                                        </label>
                                    </div>
                            </td>
                            <td>{{ $itemImp->reference }}</td>
                            <td>{{ $itemImp->Clt }} {{ $itemImp->Enmy }}</td>
                            <td>{{ $itemImp->type_nom }}</td>
                            <td>{{ $itemImp->trib_reference }}</td>
                            <td>{{ $itemImp->date_R }}</td>
                            <td>{{ $itemImp->implementation_num }}</td>
                            <td>{{ $itemImp->folder_implentaire_num }}</td>
                            <td class="text-truncate">
                                <div class="truncateText d-flex justify-content-end  "
                                    data-id="{{ $itemImp->procedure }}" data-toggle="modal"
                                    data-target="#TruncateText">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="30"
                                        height="28" viewBox="0 0 34 31" fill="none">
                                        <rect width="34" height="31" rx="4" fill="#F2F5FA" />
                                        <path d="M16.7139 10V22" stroke="#868686" />
                                        <path d="M23 16L11 16" stroke="#868686" />
                                    </svg>
                                    <div class="d-inline-block text-truncate text-end  py-1" dir="rtl"
                                        style="max-width: 120px;">{{ $itemImp->procedure }}...</div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown ">
                                    <svg class=" dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="7"
                                        height="20" viewBox="0 0 7 27" fill="none">
                                        <path
                                            d="M3.5 7C5.433 7 7 5.433 7 3.5C7 1.567 5.433 0 3.5 0C1.567 0 0 1.567 0 3.5C0 5.433 1.567 7 3.5 7Z"
                                            fill="#CBC5C5" />
                                        <path
                                            d="M3.5 17C5.433 17 7 15.433 7 13.5C7 11.567 5.433 10 3.5 10C1.567 10 0 11.567 0 13.5C0 15.433 1.567 17 3.5 17Z"
                                            fill="#CBC5C5" />
                                        <path
                                            d="M3.5 27C5.433 27 7 25.433 7 23.5C7 21.567 5.433 20 3.5 20C1.567 20 0 21.567 0 23.5C0 25.433 1.567 27 3.5 27Z"
                                            fill="#CBC5C5" />
                                    </svg>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="{{ route('implementations.edit', $itemImp->IdItem) }}"
                                                class="dropdown-item text-center"
                                                style="font-weight: bold;font-size:18px">تعديل</a>
                                        </li>

                                        <li>
                                            <button style="font-weight: bold;font-size:18px"
                                                data-id="{{ $itemImp->IdItem }}"
                                                class="DeleteImp dropdown-item text-center text-danger"
                                                data-toggle="modal" data-target="#DeletedImp">حذف
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="10" style="border-bottom: 1px solid #ccc;" class="my-5"></td>
                        </tr>
                    @endforeach
                @endif


            </thead>
        </table>
        {{-- @if ($items->hasPages())
        <ul class="pagination justify-content-center">
            <!-- Previous Button -->
            @if ($items->onFirstPage())
                <li class="page-item ">
                    <a class="page-link rounded-circle"
                        style="color:#C09F5E;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;"
                        href="{{ $items->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @endif
    
            <!-- Numbered Pagination Buttons -->
            @for ($i = 1; $i <= $items->lastPage(); $i++)
                <li class="page-item @if ($i == $items->currentPage()) active @endif">
                    <a class="page-link mx-1  border fw-bold  rounded-circle "
                        style="@if ($i == $items->currentPage()) background:#C09F5E;color:#fff;
            @else color:#C09F5E;box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px; @endif"
                        href="{{ $items->url($i) }} ">{{ $i }}</a>
                </li>
            @endfor
            <!-- Next Button -->
            @if ($items->hasMorePages())
                <li class="page-item ">
                    <a class="page-link rounded-circle"
                        style="color:#C09F5E;
           box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;"
                        href="{{ $items->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @endif
        </ul>
    @endif --}}
    </div>

</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    ///Ajax For get Text Procedure Truncate
    $(document).ready(function() {
        $(document).on('click', '.truncateText', function() {
            var idReport = $(this).attr('data-id');
            $('#Text').html(idReport);

        })
    })


    ///Ajax For get id Report and Set in Model Delete 
    $(document).ready(function() {
        $(document).on('click', '.DeleteReport', function() {
            var idReport = $(this).attr('data-id');
            $('#FromReport').val(idReport);

        })
    })

    ///Ajax For get id Implementation and Set in Model Delete 
    $(document).ready(function() {
        $(document).on('click', '.DeleteImp', function() {
            var idImp = $(this).attr('data-id');
            $('#FromImp').val(idImp);

        })
    })
</script>
<script>
    $(document).ready(function() {

        var eventProcessed = false;
        $(document).on('click', '.itemSwitchImp', function(event) {
            console.log('test');
            if (!eventProcessed) {
                eventProcessed = true;

                var itemSwitchImp = $(this).attr('data-id');
                console.log('itemSwitchImp checkbox id:', itemSwitchImp);

                // Perform AJAX call
                jQuery.ajax({
                    url: "{{ route('switch-status-Item-Imp') }}",
                    type: "get",
                    dataType: 'json',
                    cache: false,
                    data: {
                        itemSwitchImp: itemSwitchImp
                    },
                    success: function(response) {
                        if (response.implementation.status == 'done') {
                            var span = document.createElement("span");
                            $('.itemImp' + response.implementation.id).html('تمت')
                                .removeClass('text-danger').addClass(
                                    'text-success');
                            Swal.fire({
                                icon: "success",
                                content: span,
                                title: "الحالة تمت",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $('.checkbox' + response.implementation.id).prop('checked',
                                true);
                        } else {
                            var span = document.createElement("span");
                            Swal.fire({
                                icon: "error",
                                content: span,
                                title: "الحالة جارية",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $('.checkbox' + response.implementation.id).prop('checked',
                                false);

                            $('.itemImp' + response.implementation.id).html('رائجة')
                                .removeClass('text-success').addClass(
                                    'text-danger');
                        }
                    },

                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                    },
                    complete: function() {
                        eventProcessed =
                            false; // Reset the flag after the AJAX call completes
                    }
                });
            }
        });
    });
</script>

<script>
    $(document).ready(function() {

        var eventProcessed = false;
        $(document).on('click', '.itemSwitchRep', function(event) {
            console.log('test');
            if (!eventProcessed) {
                eventProcessed = true;

                var itemSwitchRep = $(this).attr('data-id');
                console.log('itemSwitchRep checkbox id:', itemSwitchRep);

                // Perform AJAX call
                jQuery.ajax({
                    url: "{{ route('switch-status-Item-Rep') }}",
                    type: "get",
                    dataType: 'json',
                    cache: false,
                    data: {
                        itemSwitchRep: itemSwitchRep
                    },
                    success: function(response) {
                        if (response.report.status == 'done') {
                            var span = document.createElement("span");
                            $('.itemRepo' + response.report.id).html('تمت')
                                .removeClass('text-danger').addClass(
                                    'text-success');
                            Swal.fire({
                                icon: "success",
                                content: span,
                                title: "الحالة تمت",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $('.checkbox' + response.report.id).prop('checked',
                                true);
                        } else {
                            var span = document.createElement("span");
                            Swal.fire({
                                icon: "error",
                                content: span,
                                title: "الحالة جارية",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $('.checkbox' + response.report.id).prop('checked',
                                false);

                            $('.itemRepo' + response.report.id).html('رائجة')
                                .removeClass('text-success').addClass(
                                    'text-danger');
                        }
                    },

                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                    },
                    complete: function() {
                        eventProcessed =
                            false; // Reset the flag after the AJAX call completes
                    }
                });
            }
        });
    });
</script>
