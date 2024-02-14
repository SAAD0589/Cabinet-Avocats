<div class="row py-5">
    <div class="row  px-5 py-3">
        <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-3' : 'col-xl-4' }}
         col-sm-6">
            <div class="row d-flex justify-content-center ">

                <div class="col-12 ">
                    <div class="row justify-content-between border rounded-4">
                        <div class="col-6  text-center fw-bold active py-3 rounded-4" wire:click="Change2"
                            :class="{ 'active': $activeButton === 2 }"
                            style="background:{{ $activeButton == 2 ? '#C09F5E' : '#fff' }};
                    cursor:pointer;border-radius:50px;color:{{ $activeButton == 2 ? '#fff' : '#C09F5E' }};">
                            آخر
                        </div>
                        <div class="col-6  text-center fw-bold active py-3 px-2 rounded-4" wire:click="Change1"
                            style="background:{{ $bgcolor1 }};cursor:pointer;
                        border-radius:30px;color:{{ $bgcolor2 }};transition:0.1s"
                            :class="{ 'active': $activeButton === 0 }">

                            {{ __('content.الموكلون') }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('Admins.AnnuaireTelephonique.Delete')

    <div class="table-responsive">
        <table class="table ">
            <thead style="border-bottom:1pt solid #fff">

                <tr class="">
                    <th scope="col" class="text-truncate">
                        نوعية الخدمة
                    </th>
                    <th scope="col" class="text-truncate">
                        الإسم الكامل
                    </th>
                    <th scope="col" class="text-truncate">
                        الهاتف النقال
                    </th>
                    <th scope="col" class="text-truncate">
                        رقم الهاتف الارضي
                    </th>
                    <th scope="col"></th>
                </tr>
                <tr class="">
                    <th scope="col">
                        <div style="position: relative;">
                            <input type="text" class="inputAff form-control" wire:keydown='searchName'
                                name="QualiteService" wire:model="QualiteService" value="">
                            <i class="bi bi-search mx-2"
                                style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>
                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                            <div style="position: relative; ">
                                <input type="text" class="inputAff form-control" wire:keydown='searchName'
                                    name="Nomcomplet" wire:model="Nomcomplet" value="">
                                <i class="bi bi-search mx-2"
                                    style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>
                            </div>

                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                            <input type="text" class="inputAff form-control" wire:keydown='searchName'
                                name="telephonePortable" wire:model="telephonePortable" value="">
                            <i class="bi bi-search mx-2"
                                style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>

                    </th>
                    <th scope="col">
                        <div style="position: relative;">

                            <input type="text" class="inputAff form-control" wire:keydown='searchName'
                                name="NumeroTelephoneFixe" wire:model="NumeroTelephoneFixe" value="">
                            <i class="bi bi-search mx-2"
                                style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>

                        </div>
                    </th>
                    <th scope="col"></th>
                </tr>
                @foreach ($data as $item)
                    <tr class="my-5 " style="height: 60px">
                        <td class="fw-bold text-truncate">{{ $item->QualiteService }}</td>
                        <td class="fw-bold text-truncate">{{ $item->Nomcomplet }}</td>
                        <td class="fw-bold text-truncate">{{ $item->telephonePortable }}</td>
                        <td class="fw-bold text-truncate">{{ $item->NumeroTelephoneFixe }}</td>
                        <th scope="row">
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
                                    <li><a class="dropdown-item text-center" style="font-weight: bold;font-size:18px"
                                            href="{{ route('AnnuaireTelephonique.edit', $item->id) }}">{{ __('content.تعديل') }}</a>
                                    </li>
                                    <li><button style="font-weight: bold;font-size:18px "
                                            class="DeletedAnnuaireTelephoniques dropdown-item text-center text-danger text-capitalize"
                                            data-toggle="modal" data-toggle="modal"
                                            data-target="#DeletedAnnuaireTelephoniques"
                                            data-id="{{ $item->id }}">{{ __('content.حذف') }}
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
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4" style="border-bottom: 1px solid #ccc;" class="my-5"></td>
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
    ///Ajax For get id Report and Set in Model Delete 
    $(document).ready(function() {
        $(document).on('click', '.DeletedAnnuaireTelephoniques', function() {
            console.log('ss');

            var idAnnuaireTelephoniques = $(this).attr('data-id');
            console.log(idAnnuaireTelephoniques);
            $('.FromAnnuaireTelephoniques').val(idAnnuaireTelephoniques);

        })
    })
</script>