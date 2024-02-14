<div>
    <div class="row py-4 px-3">
        <div class="col-11 ">
            <h3 class=" fw-bold">{{ __('content.الجلسات') }}</h3>
            <h4 class=" fw-bold"> {{ __('content.مرجع الملف:') }}
                <span class="fw-bold" style="color: #C09F5E;font-weight: bold;font-size:2rem">{{ $id }}</span>

            </h4>
        </div>
        <div class="col-1 align-self-center ">
            <a href="{{ route('affichageDos') }}">
                <svg style="{{ app()->getLocale() === 'ar' ? '' :'rotate:180deg;' }}" xmlns="http://www.w3.org/2000/svg" width="80" height="50" viewBox="0 0 64 68" fill="none">
                    <path
                        d="M19.6923 0.5H44.3077C54.9069 0.5 63.5 9.10025 63.5 19.7101V48.2899C63.5 58.8998 54.9069 67.5 44.3077 67.5H19.6923C9.09312 67.5 0.5 58.8998 0.5 48.2899V19.7101C0.5 9.10025 9.09312 0.5 19.6923 0.5Z"
                        stroke="#C09F5E" />
                    <path
                        d="M33.9611 45.0522C34.5451 45.6363 35.4921 45.6363 36.0762 45.0522C36.6602 44.4682 36.6602 43.5212 36.0762 42.9372L33.9611 45.0522ZM23.9713 35.0624L33.9611 45.0522L36.0762 42.9372L26.0864 32.9473L23.9713 35.0624Z"
                        fill="#C09F5E" />
                    <path d="M35.0625 24.0322L25.031 34.0638" stroke="#C09F5E" stroke-width="3"
                        stroke-linecap="round" />
                </svg>
            </a>
        </div>



    </div>
    <div class="row  justify-content-between">
        <div class="col-xl-8 col-sm-7">
            <p class="" style="color: #8C8D93;font-size:20px;font-weight: bold;">
                {{ __('content.TextDoc') }}
            </p>
        </div>
        <div class="col-xl-4 col-sm-5 ">
            <div class="row justify-content-end">
                <div class="{{app()->getLocale() === 'ar' ?'col-xl-6 col-sm-8':'col-xl-8 col-sm-10'}}
                    col-sm-4   rounded-3 mx-3 " style="border:1px solid rgb(213, 212, 212);height:46.5px">
                       <a data-toggle="modal" data-target="#AddSeance" class="text-dark text-decoration-none fw-bold">
                           <div class="row d-flex justify-content-between  ">
                               @if (app()->getLocale() === 'ar' )
                               <div class="col-xl-9  col-sm-8 mx-2">
                                   <div class="row justify-content-center d-flex align-items-center" style="height: 45px">
                                       <div class="col-xl-12 col-sm-12">
                                           <div class="fw-bold  text-center" style="font-size:18px;cursor: pointer;"> 
                                               {{ __('content.إضافة جلسة') }}
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-xl-1  col-sm-1">
                                   <div class="rounded-3"
                                       style="position: absolute; transform: translateX(28px);background:#C09F5E;height:45.5px;width:46.5px">
                                       <svg class="" style="margin-top:11px;" xmlns="http://www.w3.org/2000/svg"
                                           width="45" height="26" viewBox="0 0 25 25" fill="none">
                                           <path d="M2 11H19" stroke="white" stroke-width="3" stroke-linecap="round" />
                                           <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                               stroke-linecap="round" />
                                       </svg>
                                   </div>
                               </div>
                               @else
                               <div class="col-xl-2  col-sm-2">
                                   <div class="rounded-3"
                                       style="position: absolute; transform: translateX(-13px);background:#C09F5E;height:45.5px;width:46.5px">
                                       <svg class="" style="margin-top:11px;" xmlns="http://www.w3.org/2000/svg"
                                           width="50" height="26" viewBox="0 0 25 25" fill="none">
                                           <path d="M2 11H19" stroke="white" stroke-width="3" stroke-linecap="round" />
                                           <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                               stroke-linecap="round" />
                                       </svg>
                                   </div>
                               </div>
                               <div class="col-xl-10  col-sm-10 ">
                                   <div class="row justify-content-center d-flex align-items-center" style="height: 45px">
                                       <div class="col-xl-12 col-sm-12 ">
                                           <div class="fw-bold  text-center" style="font-size:18px;cursor: pointer;"> 
                                               {{ __('content.إضافة جلسة') }}
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               
                               @endif
                            
       
                           </div>
                       </a>
                   </div>
            </div>
        </div>
    </div>

    <div class="table-responsive py-2">
        <table class="table ">
            <thead style="border-bottom:1pt solid #fff">
                <tr class="">
                    <th scope="col" class="text-truncate">{{ __('content.الحالة') }}</th>
                    <th scope="col" class="text-truncate ">{{ __('content.مرفقات') }}</th>
                    <th scope="col" class="text-truncate ">{{ __('content.المدينة') }}</th>
                    <th scope="col" class="text-truncate ">{{ __('content.المحكمة') }}</th>
                    <th scope="col" class="text-truncate ">{{ __('content.القاضي') }}</th>
                    <th scope="col" class="text-truncate ">{{ __('content.المحامي') }}</th>
                    <th scope="col" class="text-truncate "> {{ __('content.التاريخ') }}</th>
                    <th scope="col" class=" text-truncate">{{ __('content.مآل الجلسة') }}</th>
                    <th scope="col" class="text-truncate ">{{ __('content.تعليق') }}</th>
                    <th scope="col" class="text-truncate "></th>
                </tr>
                @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Seances.Modales.Seances.Truncate')

                @foreach ($results as $result)
                    <tr>
                        <td class="{{app()->getLocale() === 'ar' ?'':'px-5'}}"
                            >
                            <div class="row {{app()->getLocale() === 'ar' ?'':'justify-content-around'}} ">
                                <div class="col-5 ">
                                    @if ($result->status == 'fait')
                                        <label class="seance{{ $result->Id_Seance }} text-success fw-bold  py-1">
                                            {{ __('content.تمت') }}
                                        </label>
                                    @else
                                        <label class="seance {{ $result->Id_Seance }} text-danger fw-bold py-1">
                                            {{ __('content.رائجة') }}
                                        </label>
                                    @endif

                                </div>

                                <div class="col-6">
                                    <label class="seance switch border rounded-5 " data-id="{{ $result->Id_Seance }}">
                                        <input type="checkbox" {{ $result->status == 'fait' ? 'checked' : '' }}>
                                        <div class="slider"></div>
                                        <div class="slider-card">
                                            <div class="slider-card-face slider-card-front"></div>
                                            <div class="slider-card-face slider-card-back"></div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </td>
                        <td class="">

                            <div class="attachment d-inline-flex" data-toggle="modal" data-id="{{ $result->Id_Seance }}"
                                data-target="#attachmentModale" id="idSeance" style="cursor: pointer">

                                <div class=" rounded border fw-bold text-end"
                                    style="{{ $result->attachments_count > 0 ? 'background: #C09F5E; color: #fff;' : 'background: #fff; color: #C09F5E;' }}">
                                    <div class="px-1 mx-2  d-inline-flex align-items-center" style="height: 30px">{{ __('content.نسخة') }}
                                        {{ $result->attachments_count }}
                                        <svg class="mx-2" xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="18" viewBox="0 0 18 18" fill="none">
                                            <g clip-path="url(#clip0_436_9749)">
                                                <path
                                                    d="M14.9618 4.152L12.3488 1.5375C11.3565 0.546 10.038 0 8.63625 0H5.25C3.18225 0 1.5 1.68225 1.5 3.75V14.25C1.5 16.3177 3.18225 18 5.25 18H12.75C14.8177 18 16.5 16.3177 16.5 14.25V7.86375C16.5 6.4605 15.9532 5.1435 14.9618 4.152ZM13.9012 5.21325C14.1397 5.451 14.3415 5.71575 14.505 6.00075H11.2492C10.8352 6.00075 10.4992 5.664 10.4992 5.25075V1.99425C10.7842 2.15775 11.049 2.3595 11.2875 2.598L13.9005 5.2125L13.9012 5.21325ZM15 14.2507C15 15.4913 13.9905 16.5007 12.75 16.5007H5.25C4.0095 16.5007 3 15.4913 3 14.2507V3.75C3 2.5095 4.0095 1.5 5.25 1.5H8.63625C8.7585 1.5 8.88 1.506 9 1.51725V5.25C9 6.4905 10.0095 7.5 11.25 7.5H14.9827C14.994 7.62 15 7.7415 15 7.86375V14.2507ZM11.7802 12.0795C12.0735 12.372 12.0735 12.8468 11.7802 13.14L10.5705 14.3505C10.1377 14.7833 9.5685 15 9 15C8.4315 15 7.86225 14.7833 7.4295 14.3505L6.21975 13.14C5.9265 12.8468 5.9265 12.372 6.21975 12.0795C6.513 11.7863 6.987 11.7863 7.28025 12.0795L8.25 13.0492V9.75075C8.25 9.33675 8.58525 9.00075 9 9.00075C9.41475 9.00075 9.75 9.33675 9.75 9.75075V13.0492L10.7198 12.0795C11.013 11.7863 11.487 11.7863 11.7802 12.0795Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_436_9749">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>

                                </div>
                                <div class="px-2 mx-2d-inline-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29"
                                        viewBox="0 0 34 31" fill="none">
                                        <rect width="34" height="31" rx="4" fill="#C09F5E" />
                                        <path d="M16.7139 10V22" stroke="white" />
                                        <path d="M23 15.7148L11 15.7148" stroke="white" />
                                    </svg>
                                </div>
                            </div>

                        </td>
                        <td>{{ $result->ville }}</td>
                        <td>{{ $result->tribunal }}</td>
                        <td>{{ $result->juge }}</td>
                        <td>{{ $result->avocat }}</td>
                        <td class="text-truncate" >{{ $result->Date_Seance }}</td>
                        <td>{{ $result->action }}</td>
                        <td class="">
                            <div class="row ">
                                <div class="truncateText col-12 " data-id="{{ $result->comment }}"
                                    data-toggle="modal" >
                                    <label for="" class="text-truncate" style="max-width: 60px;"> {{ $result->comment }}...</label>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="31"
                                        data-target="#pluscomm" data-toggle="modal" viewBox="0 0 34 31"
                                        fill="none">
                                        <rect width="34" height="31" rx="4" fill="#F2F5FA" />
                                        <path d="M16.7139 10V22" stroke="#868686" />
                                        <path d="M23 15.7148L11 15.7148" stroke="#868686" />
                                    </svg>

                                </div>
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
                                    <li><button class="updateSeance dropdown-item text-center"
                                            style="font-weight: bold;font-size:18px" data-target="#UpdateSeance"
                                            data-toggle="modal" data-id="{{ $result->Id_Seance }}">{{ __('content.تعديل') }}</button>
                                    </li>
                                    <li><button style="font-weight: bold;font-size:18px"
                                            class="DeleteSeance dropdown-item text-center text-danger"
                                            data-toggle="modal" data-target="#DeleteSeance"
                                            data-id="{{ $result->Id_Seance }}">{{ __('content.حذف') }}
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
                        </td>
                    </tr> 
                @endforeach
            </thead>
        </table>
    </div>
</div>