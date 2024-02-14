<div class="div">
    <div class="row justify-content-end">
        <div class="  {{ app()->getLocale() === 'ar' ? 'col-xl-3 col-sm-4' : 'col-xl-4 col-sm-5' }}">
            <button class="btn btn-light  py-3 px-4 w-100 fw-bold rounded-3 text-capitalize"
                wire:click='TribunalTypePremary' style="background: {{ $bg1 }};color:{{ $color1 }}">
                {{ __('content.المحكمة الإبتدائية') }}
            </button>
        </div>
        <div class="col-xl-3  {{ app()->getLocale() === 'ar' ? 'col-sm-4' : 'col-sm-3' }}">
            <button class="btn btn-light  py-3 px-4 w-100 fw-bold rounded-3 text-capitalize" wire:click='TribunalTypeApel'
                style="background: {{ $bg2 }};color:{{ $color2 }}">
                {{ __('content.المحكمة الإستئنافية') }}</button>
        </div>
        <div class="col-xl-3 col-sm-4">
            <button class="btn btn-light py-3 px-4 w-100 fw-bold rounded-3 text-capitalize "
                wire:click='TribunalTypeCas' style="background: {{ $bg3 }};color:{{ $color3 }}">
                {{ __('content.محكمة النقض') }}</button>
        </div>
        <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-3' : 'col-xl-2' }} col-sm-0"></div>


        <div class="col-xl-3 col-sm-4 py-2">
            <select class="form-control py-3 w-100 fw-bold rounded-3" wire:model='TypeDossier'
                wire:change='SelectTypeDossier'
                style="font-weight: bold;font-size:18px;border: 1px solid #efeeee;cursor: pointer;">
                <option value="" selected>{{ __('content.نوع الملف') }}</option>
                <option value="1">{{ __('content.جنائي') }}</option>
                <option value="2">{{ __('content.تجاري') }}</option>
                <option value="3">{{ __('content.إجتماعي') }}</option>
                <option value="4">{{ __('content.إستشارة') }}</option>
            </select>
        </div>
        <div class="col-xl-3 py-2 col-sm-4">
            {{-- <button class="btn btn-light  py-3 px-4 w-100 fw-bold rounded-3">الجهة </button> --}}
            <select class="form-control py-3  w-100 fw-bold rounded-3"
                style="font-weight: bold;font-size:18px;border: 1px solid #efeeee;
            cursor: pointer;"
                wire:model='villesId' wire:change='SelectRegion'>
                <option value="">{{ __('content.الجهة') }}</option>
                @foreach ($villes as $ville)
                    <option value="{{ $ville->id }}">{{ __('region.' . $ville->ville_nom) }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xl-3 py-2 col-sm-4">
            {{-- <button class="btn btn-light py-3 px-4 w-100 fw-bold rounded-3">المحكمة </button> --}}
            <select class="form-control py-3 px-4 w-100 fw-bold rounded-3 " wire:model='tribunalCheck'
                wire:change='SelectTribunal'
                style="font-weight: bold;font-size:18px;border: 1px solid #efeeee;cursor: pointer;">
                <option value="">{{ __('content.المحكمة') }}</option>
                @foreach ($tribunals as $tribunal)
                    <option value="{{ $tribunal->trib_nom }}">{{ $tribunal->trib_nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xl-3 py-3 px-1 col-sm-4 text-end">
            <a href="{{ route('allDoc') }}"
                class="{{ app()->getLocale() === 'ar' ? 'w-50' : 'w-75' }}
             mx-5  btn btn-light py-2  fw-bold  rounded-3 text-capitalize">
                <label for="">{{ __('content.تحميل') }} </label>
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
            </a>
        </div>



    </div>

    <div class="table-responsive py-3">
        <table class="table">
            <thead class="" style="border-bottom:1pt solid #fff">
                <tr>
                    <th class="text-truncate">{{ __('content.المرجع') }}</th>
                    <th class="text-truncate">{{ __('content.الأطراف') }}</th>
                    <th class="text-truncate">{{ __('content.المحكمة') }}</th>
                    <th class="text-truncate">{{ __('content.نوع القضية') }}</th>
                    <th class="text-truncate">{{ __('content.رقم الملف') }}</th>
                    </th>
                    <th class="text-truncate">{{ __('content.القاضي المقرر') }}</th>
                    <th class="text-truncate">{{ __('content.تاريخ الجلسة') }}</th>
                    <th class="text-truncate">{{ __('content.الإجراءالمطلوب') }}</th>
                    <th class="text-truncate">{{ __('content.الأستاذ المسؤول') }}</th>
                </tr>
                @foreach ($dossiers as $dossier)
                    
                    <tr>
                        <td>{{ $dossier->reference }}</td>
                        <td class="text-truncate">{{ $dossier->User }} {{ $dossier->Adversaire }}</td>
                        <td class="text-truncate">{{ $dossier->Tribunal }} {{ $dossier->TribunalType }}</td>
                        <td>{{ $dossier->TypeDossier }}</td>
                        <td>{{ $dossier->RefTrib }}</td>
                        <td>{{ $dossier->Juge }}</td>
                        <td class="">2024-05-24</td>
                        <td class="text-truncate">
                            {!! $dossier->procedureName
                                ? $dossier->procedureName .
                                    '<svg class="truncateText" data-id="' .
                                    $dossier->procedureName .
                                    '"  data-toggle="modal" data-target="#pluscomm"  
                                                     xmlns="http://www.w3.org/2000/svg" width="34" height="31" viewBox="0 0 34 31" fill="none">
                                                    <rect y="0.00195312" width="34" height="31" rx="4" fill="#F2F5FA"/>
                                                    <path d="M16.7139 10.002V22.002" stroke="#868686"/>
                                                    <path d="M23 16.002L11 16.002" stroke="#868686"/>
                                                </svg>'
                                : __('content.لا يوجد') !!}

                        </td>
                        <td>{{ $dossier->Avocat }}</td>
                    </tr>
                    <tr>
                        <td colspan="9" style="border-bottom: 1px solid #ccc;" class="my-5"></td>
                    </tr>
                @endforeach

            </thead>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.truncateText', function() {
                var ProcesureDossier = $(this).attr('data-id');
                console.log(ProcesureDossier);
                $('.textTruncate').html(ProcesureDossier);

            })
        })
    </script>
</div>
