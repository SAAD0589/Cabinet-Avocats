<div class="row py-5">
    @include('Admins.users.Delete')
    <div class="table-responsive-xl">
        <table class="table ">
            <thead style="border-bottom:1pt solid #fff">
                <tr class="">
                    <th scope="col">{{ __('content.الإسم و النسب') }}</th>
                    <th scope="col">{{ __('content.الصفة') }}</th>
                    <th scope="col"> 
                        {{ __('content.البريد الإلكتروني') }}
                    </th>
                    <th scope="col">{{ __('content.الهاتف') }}</th>
                    <th scope="col">{{ __('content.الحالة') }}</th>
                    <th scope="col"> </th>
                </tr>
                <tr class="">
                    <th scope="col">
                        <div style="position: relative;">
                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="name"
                                wire:model="name" >
                                <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>
                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                            <input type="text" class ="inputAff form-control" wire:keydown='searchName' name="Specialise"
                                wire:model="Specialise" >
                            <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>
                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="email"
                                wire:model="email" >
                            <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>
                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="tel"
                                wire:model="tel" >
                            <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>
                        </div>
                    </th>
                    <th scope="col">
                        <select class="inputAff form-select" aria-label="Default select example" 
                            wire:click='searchName' wire:model="status" name="status">
                            <option selected value="">{{ __('content.الحالة') }}</option>
                            <option value="active">{{ __('content.نشط') }}</option>
                            <option value="hanging">{{ __('content.معلق') }}</option>
                        </select>
                    </th>
                    <th scope="col"></th>
                </tr>


                @foreach ($data as $item)
                    <tr class="my-5 " style="height: 60px">
                        <td class=" fw-bold">{{ $item->name }} {{ $item->LastName }}</td>
                        <td class=" fw-bold">

                            @if ($item->Adjectifs == 'admin')
                            
                            {{ __('content.أدمين') }}
                            @elseif($item->Adjectifs == 'secretary')
                            {{ __('content.سكرتار') }}
                            @else
                                null
                            @endif

                        </td>
                        <td class=" fw-bold">{{ $item->email }}</td>
                            <td class=" fw-bold">
                            {{ $item->Tel_Portable != null ? $item->Tel_Portable : __('content.لا يوجد') }}
                        </td>
                        <td class="">
                            @if ($item->status == 'active')
                                <img src="{{ asset('assets/logo/check.png') }}"
                                    style="height: 25px;text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);" />
                            @else
                                <img src="{{ asset('assets/logo/close.svg') }}" style="height: 20px" />
                            @endif
                        </td>
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
                                    <li><a class=" dropdown-item text-center" style="font-weight: bold;font-size:18px"
                                            href="{{ route('users.edit', $item->id) }}">{{ __('content.تعديل') }}</a></li>
                                    <li><button class="DeleteUser dropdown-item text-center text-danger"
                                        style="font-weight: bold;font-size:18px"
                                            data-toggle="modal" data-target="#DeletedUser" data-toggle="modal"
                                            data-id="{{ $item->id }}">{{ __('content.حذف') }}
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>
                                        </button></li>
                                </ul>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="5" style="border-bottom: 1px solid #ccc;" class="my-5"></td>
                    </tr>
                @endforeach
            </thead>
        </table>
        <style>
            #pagination {
                color: black
            }
        </style>
        @if ($data->hasPages())
            <ul class="pagination justify-content-center">
                <!-- Previous Button -->
                @if ($data->currentPage() > 1)
                    <li class="page-item ">
                        <a class="page-link" style="color:#C09F5E;border-radius: 30px;"
                            href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                @endif

                <!-- Numbered Pagination Buttons -->
                @for ($i = 1; $i <= $data->lastPage(); $i++)
                    <li class="page-item @if ($i == $data->currentPage()) active @endif">
                        <a class="page-link mx-1  border" id="pagination"
                            style="@if ($i == $data->currentPage()) color:#fff;background:#C09F5E;border-radius:30px; @else border-radius:30px; @endif"
                            href="{{ $data->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <!-- Next Button -->
                @if ($data->hasMorePages())
                    <li class="page-item">
                        <a class="page-link " style="color:#C09F5E;border-radius: 30px;"
                            href="{{ $data->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                @endif
            </ul>
        @endif
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    ///Ajax For get id Report and Set in Model Delete 
    $(document).ready(function() {
        $(document).on('click', '.DeleteUser', function() {

            var idUser = $(this).attr('data-id');
            console.log(idUser);
            $('#FromUser').val(idUser);

        })
    })
</script>
