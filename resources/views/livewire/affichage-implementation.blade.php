<div class="row py-3">
    <div class="col-xl-3 col-md-6 py-3">
        <div class="row justify-content-between border rounded-4">

            <div class="col-6 py-2 text-center fw-bold active py-3 rounded-4" wire:click="Change2"
                style="background:{{ $bgcolor2 }};
            cursor:pointer;border-radius:50px;color:{{ $bgcolor1 }};">
                شخص معنوي
            </div>
            <div class="col-6 py-2 text-center fw-bold active py-3 rounded-4" wire:click="Change1"
                style="background:{{ $bgcolor1 }};cursor:pointer;
            border-radius:50px;color:{{ $bgcolor2 }};transition:0.1s">
                شخص ذاتي
            </div>
        </div>
    </div>

    <div class="col-xl-5 col-md-6 py-3">
        <div class="input-group mb-3 ">
            <div class="input-group ">
                

                <div class="input-group-append " style="">
                    <button class="btn btn-light  dropdown-toggle fw-bold  py-3 border "
                        style="color: #C09F5E;background-color: #fff; border-right-radius: 50px; {{ app()->getLocale() === 'ar' ? 'border-top-right-radius: 20px; border-bottom-right-radius: 20px;' :
                        'border-bottom-left-radius: 20px; border-top-left-radius: 20px;' }}"
                        type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">{{ $text }}</button>
                    <div class="dropdown-menu text-end fw-bold" style="font-weight: bold;font-size:18px">
                        <button class="dropdown-item" wire:click='FilterReference'>مرجع الملف </button>
                        <button class="dropdown-item" wire:click='FilterNum'>رقم الملف التنفيذي</button>
                        <button class="dropdown-item" wire:click='FilterNumDoc'>رقم الملف </button>
                    </div>
                </div>
                <input type="text" class="form-control  fw-bold  " placeholder="بحث"  value=""
                    aria-label="Text input with dropdown button" wire:model="search"
                    style=" {{ app()->getLocale() === 'ar' ? 'border-top-left-radius: 20px; border-bottom-left-radius: 20px;' :
                    'border-top-right-radius: 20px; border-bottom-right-radius: 20px;' }}"  value=""
                    wire:change='Affichage'>
            </div>
        </div>
    </div>



    
    <div class="col-xl-3 col-md-12  align-items-center my-4">
        <a href="{{ route('FormTribunalDoc.index') }}" class="btn rounded-3 fw-bold  w-100"
            style="background: #C09F5E;color:#fff;">ملفات حسب المحكمة
        </a>
    </div>
    @include('Admins.Implementations.Delete')
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
                    <th class="text-truncate">رقم الملف التبليغى</th>
                    <th class="text-truncate">المفوض القضائي</th>
                    <th class="text-truncate">الإجراءالمطلوب</th>
                    <th></th>
                </tr>


                @foreach ($implementations as $implementation)
                    <tr>
                        <td>
                            <div class="row  ">
                                <div class="col-6 ">
                                    <label class="ImpSwitch switch border rounded-5 "
                                        data-id="{{ $implementation->IdImp }}">
                                        <input type="checkbox" class="checkbox"
                                            {{ $implementation->status == 'done' ? 'checked' : '' }}>
                                        <div class="slider"></div>
                                        <div class="slider-card">
                                            <div class="slider-card-face slider-card-front"></div>
                                            <div class="slider-card-face slider-card-back"></div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-2 px-1  ">
                                    @if ($implementation->status == 'done')
                                        <label
                                            class="implementation{{ $implementation->IdImp }} text-success fw-bold py-1">
                                            تمت
                                        </label>
                                    @else
                                        <label
                                            class="implementation{{ $implementation->IdImp }} text-danger fw-bold py-1">
                                            جارية
                                        </label>
                                    @endif

                                </div>

                        </td>
                        <td>{{ $implementation->reference }}</td>
                        <td>{{ $implementation->Clt }} {{ $implementation->Enmy }}</td>
                        <td>{{ $implementation->type_nom }}</td>
                        <td>{{ $implementation->trib_reference }}</td>
                        <td class="text-truncate">{{ $implementation->date_R }}</td>
                        <td class="text-truncate">{{ $implementation->folder_implentaire_num }}</td>
                        <td>{{ $implementation->implementation_num }}</td>
                        <td>{{ $implementation->procedure }}</td>
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
                                        <a href="{{ route('implementations.edit', $implementation->IdImp) }}"
                                            class="dropdown-item text-center"
                                            style="font-weight: bold;font-size:18px">تعديل</a>
                                    </li>

                                    <li>
                                        <button style="font-weight: bold;font-size:18px"
                                            data-id="{{ $implementation->IdImp }}"
                                            class="DeleteImp dropdown-item text-center text-danger" data-toggle="modal"
                                            data-target="#DeletedImp">حذف
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
            </thead>
        </table>
    </div>

</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    ///Ajax For get id Implementation and Set in Model Delete 
    $(document).ready(function() {
        $(document).on('click', '.DeleteImp', function() {
            var idImp = $(this).attr('data-id');
            $('#FromImp').val(idImp);

        })
    })
</script>
<script></script>
<script>
    $(document).ready(function() {

        var eventProcessed = false;

        $(document).on('click', '.ImpSwitch', function(event) {
            console.log('test');
            if (!eventProcessed) {
                eventProcessed = true;

                var ImpSwitch = $(this).attr('data-id');
                console.log('ImpSwitch checkbox id:', ImpSwitch);

                // Perform AJAX call
                jQuery.ajax({
                    url: "{{ route('switch-status-Imp') }}",
                    type: "get",
                    dataType: 'json',
                    cache: false,
                    data: {
                        ImpSwitch: ImpSwitch
                    },
                    success: function(response) {
                        if (response.implementation.status == 'done') {
                            var span = document.createElement("span");
                            $('.implementation' + response.implementation.id).html('تمت')
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

                            $('.implementation' + response.implementation.id).html('رائجة')
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
