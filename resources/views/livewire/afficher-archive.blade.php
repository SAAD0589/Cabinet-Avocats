<div class="row py-5">
    <div class="table-responsive-xl">
        <table class="table ">
            <thead style="border-bottom:1pt solid #fff">
                <tr class="">
                    <th scope="col">{{ __('content.الجلسات') }}</th>
                    <th scope="col">{{ __('content.المرجع') }}</th>
                    <th scope="col">{{ __('content.الخصم') }}</th>
                    <th scope="col"> {{ __('content.الموكل') }}</th>
                    <th scope="col">{{ __('content.رقم الملف') }}</th>
                    <th scope="col">{{ __('content.المحكمة') }}</th>
                    <th scope="col"> </th>
                </tr>
                <tr class="">
                    <th scope="col">
                        <div style="position: relative;">
                           
                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="seances_count"
                                wire:model="seances_count"  value="">
                                <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>


                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                            
                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="reference"
                                wire:model="reference"  value="">
                                <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>


                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                            
                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="Enmy"
                                wire:model="Enmy"  value="">
                                <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>


                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                           
                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="Clt"
                                wire:model="Clt"  value="">
                                <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>


                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                           
                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="ref_Trib"
                                wire:model="ref_Trib"  value="">
                                <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>

                        </div>
                    </th>
                    <th scope="col">
                        <div style="position: relative;">
                           
                            <input type="text" class="inputAff form-control" wire:keydown='searchName' name="trib_nom"
                                wire:model="trib_nom"  value="">
                                <i class="bi bi-search mx-2" style="position: absolute; {{ app()->getLocale() === 'ar' ? 'left' : 'right' }}: 4px; top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>

                        </div>
                    </th>
                    <th scope="col"></th>
                </tr>
                @foreach ($archives as $archive)
                    <!-- Button trigger modal -->


                    <!-- Modal -->

                    <tr class="my-5 " style="height: 60px">
                        <td class="fw-bold">{{ $archive->seances_count }}</td>
                        <td class="fw-bold">{{ $archive->reference }}</td>
                        <td class="fw-bold">{{ $archive->Enmy }}</td>
                        <td class="fw-bold">{{ $archive->Clt }}</td>
                        <td class="fw-bold">{{ $archive->ref_Trib }}</td>
                        <td class="fw-bold">{{ $archive->trib_nom }}</td>
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
                                    <li><button class="FromArchiveDelete dropdown-item text-center"
                                            style="font-weight: bold;font-size:18px" data-target="#FromArchiveDelete"
                                            data-id="{{ $archive->IdDoc }}" data-toggle="modal">
                                            {{ __('content.حذف من الأرشيف') }}
                                        </button></li>

                                    <li><button style="font-weight: bold;font-size:18px"
                                            data-id="{{ $archive->IdDoc }}"
                                            class="DeleteArchive dropdown-item text-center text-danger"
                                            data-toggle="modal" data-target="#exampleModalCenter">{{ __('content.حذف') }}
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
                        <td colspan="7" style="border-bottom: 1px solid #ccc;" class="my-5"></td>
                    </tr>
                @endforeach
            </thead>
        </table>
        @include('Admins.Archives.Delete')
        @include('Admins.Archives.DeleteFromArchive.Delete')
        {{--         
@if ($data->hasPages())
        
    
    <ul class="pagination justify-content-center">
        <!-- Previous Button -->
        @if ($data->currentPage() > 1)
            <li class="page-item ">
                <a class="page-link rounded-circle" style="color:#C09F5E;
                box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        @endif
    
        <!-- Numbered Pagination Buttons -->
        @for ($i = 1; $i <= $data->lastPage(); $i++)
        <li class="page-item @if ($i == $data->currentPage()) active @endif">
            <a class="page-link mx-1 border rounded-circle" 
            style="@if ($i == $data->currentPage()) background:#C09F5E;color:#fff;
            @else color:#C09F5E;box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
             @endif"
               href="{{ $data->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
        <!-- Next Button -->
        @if ($data->hasMorePages())
            <li class="page-item">
                <a class="page-link rounded-circle" style="color:#C09F5E;
                box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        @endif
    </ul>
    @endif --}}
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.DeleteArchive', function() {
            var archiveId = $(this).attr('data-id');
            $('#ArchiveId').val(archiveId);

            console.log('biobliotheque delete id:', archiveId);

        });
    })

    $(document).ready(function() {
        $(document).on('click', '.FromArchiveDelete', function() {
            var archiveId = $(this).attr('data-id');
            $('#FromArchive').val(archiveId);

            console.log('biobliotheque delete id:', archiveId);

        });
    })
</script>
