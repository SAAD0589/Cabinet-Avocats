<div class="row py-2">
    <div class="table-responsive-xl">
        <table class="table ">
            <thead style="border-bottom:1pt solid #fff">
                <tr class="">
                    <th scope="col" class="text-truncate">{{ __('content.مآل الجلسة') }} </th>
                    <th scope="col" class="text-truncate">{{ __('content.الأطراف') }} </th>
                    <th scope="col" class="text-truncate">{{ __('content.تاريخ الجلسة') }} </th>
                    <th scope="col" class="text-truncate">{{ __('content.الأستاذ المتمرن المكلف بالكتابة') }} </th>
                    <th scope="col" class="text-truncate">{{ __('content.تاريخ منح الملف') }} </th>
                    <th scope="col" class="text-truncate">{{ __('content.تاريخ إرجاع الملف') }} </th>
                    <th scope="col" class=""></th>
                </tr>
                <tr class="">
                    <th scope="col"></th>
                    <th scope="col">
                        <div style="position: relative;">

                            <input type="text" class="inputAff form-control" 
                            wire:keydown='searchName' wire:model="parties">
                            <i class="bi bi-search mx-2"
                                style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>

                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">

                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="Date_Seance"
                                wire:model="Date_Seance">
                            <i class="bi bi-calendar mx-2"
                                style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>
                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">

                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="Avocat"
                                wire:model="Avocat" >
                            <i class="bi bi-search mx-2"
                                style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>

                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                            <input type="text" class="inputAff form-control" wire:keydown='searchName'
                                name="date_insert_dossier" wire:model="date_insert_dossier">
                            <i class="bi bi-calendar mx-2"
                                style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>

                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">

                            <input type="text" class="inputAff form-control" wire:keydown='searchName'
                                name="date_back_dossier" wire:model="date_back_dossier">
                            <i class="bi bi-calendar mx-2"
                                style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>

                        </div>
                    </th>
                    <th scope="col"></th>

                </tr>
                @include('Admins.Bibliotheques.Delete')
                @foreach ($bibliotheques as $bibliotheque)
                    <tr>
                        <td class="fw-bold">{{ $bibliotheque->action }}</td>
                        <td class="fw-bold text-truncate">{{ $bibliotheque->parties }}</td>

                        <td class="fw-bold">{{ $bibliotheque->Date_Seance }}</td>

                        <td class="fw-bold">{{ $bibliotheque->Avocat }}</td>

                        <td class="fw-bold">
                            {{ $bibliotheque->date_insert_dossier != null ? $bibliotheque->date_insert_dossier : '00/00/0000' }}
                        </td>
                        <td class="fw-bold">
                            {{ $bibliotheque->date_back_dossier != null ? $bibliotheque->date_insert_dossier : '00/00/0000' }}
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
                                    <li><a class="dropdown-item text-center" style="font-weight: bold;font-size:18px"
                                            href="{{ route('bibliotheques.edit', $bibliotheque->id) }}">{{ __('content.تعديل') }}</a></li>
                                    <li><button style="font-weight: bold;font-size:18px"
                                            class="DeleteBib dropdown-item text-center text-danger" data-toggle="modal"
                                            data-target="#DeleteBib" data-id="{{ $bibliotheque->id }}">{{ __('content.حذف') }}
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
                        <td colspan="7" style="border-bottom: 1px solid #ccc;" class="my-5"></td>
                    </tr>
                @endforeach
            </thead>
        </table>

        @if ($bibliotheques->hasPages())

            <ul class="pagination justify-content-center">
                <!-- Previous Button -->
                @if ($bibliotheques->currentPage() > 1)
                    <li class="page-item ">
                        <a class="page-link" style="color:#C09F5E;border-radius: 30px;"
                            href="{{ $bibliotheques->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                @endif

                <!-- Numbered Pagination Buttons -->
                @for ($i = 1; $i <= $bibliotheques->lastPage(); $i++)
                    <li class="page-item @if ($i == $bibliotheques->currentPage()) active @endif">
                        <a class="page-link mx-1 text-light border"
                            style="@if ($i == $bibliotheques->currentPage()) background:#C09F5E;border-radius:30px; @else border-radius:30px; @endif"
                            href="{{ $bibliotheques->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <!-- Next Button -->
                @if ($bibliotheques->hasMorePages())
                    <li class="page-item">
                        <a class="page-link " style="color:#C09F5E;border-radius: 30px;"
                            href="{{ $bibliotheques->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                @endif
            </ul>
        @endif
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.DeleteBib', function() {
            var bibId = $(this).attr('data-id');
            $('#inputDelete').val(bibId);

            console.log('biobliotheque delete id:', bibId);

        });
    })
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
