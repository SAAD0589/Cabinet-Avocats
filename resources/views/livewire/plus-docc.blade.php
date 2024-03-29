<div class="row jutify-content-between p-4">
   
    <div class="col-xl-9 col-lg-7 col-sm-12  ">
        <div class="row ">
            <div class="col-xl-7 ">
                <div class="input-group mb-3">
                    <div class="input-group ">
                       
                        <div class="input-group-append">
                            <button class="btn btn-light  dropdown-toggle fw-bold  py-3 border text-capitalize"
                                style="color: #C09F5E;background-color: #fff;
                                border-right-radius: 50px; {{ app()->getLocale() === 'ar' ? 'border-top-right-radius: 20px; border-bottom-right-radius: 20px;' :
                                'border-bottom-left-radius: 20px; border-top-left-radius: 20px;' }}"
                                type="button" data-toggle="dropdown" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">{{ __('content.'.$text) }}</button>
                            <div class="dropdown-menu  fw-bold" style="font-weight: bold;font-size:18px">
                                <button class="dropdown-item" wire:click='FilterName'>{{ __('content.اسم الموكل') }}</button>
                                <button class="dropdown-item" wire:click='FilterReference'>{{ __('content.المرجع') }}</button>
                                <button class="dropdown-item" wire:click='FilterNum' >{{ __('content.رقم الملف') }}</button>
                                <button class="dropdown-item" wire:click='FilterEnmy'>{{ __('content.الخصم') }}  </button>
                            </div>
                        </div>
                        <input type="text" class="search form-control fw-bold text-capitalize" placeholder="{{ __('content.بحث') }}" 
                        aria-label="Text input with dropdown button" wire:model="search"
                        wire:change='FetchData'
                        style=" {{ app()->getLocale() === 'ar' ? 'border-top-left-radius: 20px; border-bottom-left-radius: 20px;' :
                        'border-top-right-radius: 20px; border-bottom-right-radius: 20px;' }}">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-3 col-lg-5 col-sm-12">
        <a href="{{ route('all_doc') }}" class="btn rounded-3 w-75 fw-bold w-100 text-capitalize" style="background: #C09F5E;color:#fff;">
            {{ __('content.ملفات حسب الإجراء') }}
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
                <g clip-path="url(#clip0_1100_3469)">
                    <path
                        d="M1.05443 28.2088C1.21688 28.301 1.37527 28.4005 1.54259 28.4838C3.09641 29.2635 4.92478 28.4911 5.50147 26.7999C6.19107 24.7771 6.86523 22.7487 7.54589 20.7227C8.37275 18.2615 9.20043 15.8012 10.0216 13.3384C10.0687 13.1961 10.1231 12.9971 10.0606 12.892C9.97125 12.7432 9.77956 12.5766 9.62442 12.5693C9.47172 12.562 9.2451 12.71 9.16794 12.8524C9.01524 13.1322 8.94133 13.4549 8.83817 13.7614C7.42324 17.9712 6.00587 22.1801 4.59663 26.3923C4.41956 26.9204 4.14015 27.3474 3.626 27.599C2.94046 27.9346 2.10872 27.8198 1.57914 27.3135C0.982954 26.7433 0.827815 25.9563 1.18683 25.1912C2.13959 23.1628 3.1021 21.1384 4.06217 19.1132C5.14246 16.834 6.22437 14.5549 7.30547 12.2757C7.47766 11.9134 7.41349 11.6279 7.13489 11.4968C6.84736 11.3618 6.58257 11.4847 6.41362 11.8414C4.38463 16.1174 2.35727 20.3935 0.327473 24.6695C-0.149315 25.6741 -0.112764 26.6438 0.506166 27.5804C0.522411 27.6046 0.522411 27.6394 0.529721 27.6693L1.05606 28.208L1.05443 28.2088Z"
                        fill="white" />
                    <path
                        d="M18.7992 5.24295C18.2437 4.79812 17.4322 4.70591 16.8766 5.1742C16.4746 5.51308 16.1765 5.40875 15.798 5.25104C15.6071 5.17097 15.5096 5.09575 15.4966 4.86039C15.4601 4.20042 15.1181 3.70625 14.5065 3.45391C13.1769 2.90555 11.8432 2.36771 10.503 1.84523C10.3226 1.77487 10.1423 1.70451 9.96201 1.63495C9.73458 1.5476 9.51202 1.50635 9.29597 1.51121C8.89797 1.51848 8.52271 1.68024 8.17832 1.98354C8.10684 2.04662 7.96795 2.04015 7.85911 2.05471C7.82256 2.05956 7.78194 2.02479 7.74133 2.01427C7.35958 1.91479 7.12321 1.76274 7.07935 1.28232C7.01681 0.597276 6.34752 0.0764173 5.64087 0.00767045C4.90497 -0.0635028 4.21294 0.365154 3.91403 1.10519C3.34059 2.52623 2.77852 3.95212 2.21157 5.3764C2.06943 5.73469 1.92079 6.09056 1.78433 6.45128C1.49436 7.22043 1.73153 8.01143 2.37727 8.44898C3.03437 8.89381 3.84093 8.83882 4.45824 8.28561C4.59063 8.16671 4.69623 8.14002 4.84324 8.22333C4.88792 8.24921 4.93746 8.27024 4.98782 8.28399C5.33384 8.37943 5.51903 8.54604 5.56045 8.95852C5.61894 9.54165 5.99744 9.97031 6.55058 10.1952C7.39125 10.5373 8.23193 10.8786 9.07504 11.215C9.4836 11.3784 9.89215 11.5402 10.3023 11.7011C10.5468 11.7974 10.7929 11.8928 11.0382 11.9874C11.684 12.2373 12.2915 12.1168 12.826 11.6558C12.8991 11.5927 13.0502 11.5652 13.1452 11.5927C13.3946 11.6647 13.6325 11.7763 13.8819 11.8742C13.912 12.8245 14.3993 13.4368 15.2221 13.5953C16.0197 13.7482 16.7792 13.3122 17.1154 12.4913C17.8359 10.7362 18.5531 8.97954 19.2638 7.22043C19.5782 6.44319 19.4003 5.72418 18.7992 5.24295ZM5.79113 7.54718C5.40207 7.38381 5.04712 7.23176 4.68973 7.08779C4.34452 6.94868 4.14227 7.01824 3.94734 7.33043C3.70366 7.72269 3.37145 7.85129 3.03356 7.68468C2.67049 7.50674 2.56733 7.17514 2.74521 6.72626C3.23662 5.48639 3.73047 4.24814 4.22431 3.00908C4.43631 2.47771 4.63937 1.94148 4.8668 1.41577C5.01625 1.07042 5.37364 0.917556 5.69204 1.02755C6.05998 1.15372 6.21269 1.44327 6.10222 1.84928C6.02343 2.13882 5.93652 2.42837 5.82362 2.70578C5.44105 3.65206 5.04224 4.59188 4.65561 5.53654C4.51185 5.88674 4.60607 6.15688 4.89279 6.27173C5.18032 6.38657 5.42725 6.25879 5.57751 5.90696C5.74971 5.50419 5.91378 5.09898 6.0811 4.69459C6.34671 4.05322 6.61231 3.41185 6.88766 2.74703C7.13946 2.84651 7.35633 2.93305 7.59107 3.02687C6.98676 4.54416 6.39544 6.03071 5.79113 7.54718ZM12.3679 10.534C12.1429 11.0978 11.8196 11.2361 11.2527 11.0104C10.9359 10.8842 10.6191 10.7581 10.3023 10.6311C9.89378 10.4677 9.48441 10.3043 9.07585 10.141C8.40331 9.87164 7.73077 9.6015 7.05823 9.33137C6.93396 9.28203 6.81781 9.21167 6.75445 9.18012C6.47017 8.8647 6.46692 8.58 6.59607 8.25892C7.28404 6.54995 7.96145 4.83613 8.64373 3.12474C8.76476 2.82063 8.89878 2.63704 9.07747 2.55858C9.2586 2.4769 9.48603 2.5052 9.79306 2.62814C9.96282 2.69608 10.1334 2.76402 10.3032 2.83195C11.5126 3.31399 12.7212 3.79765 13.9298 4.28211C14.4976 4.50938 14.6389 4.82885 14.4155 5.39177C13.7349 7.10639 13.0518 8.82021 12.3679 10.534ZM18.3314 6.86618C17.6239 8.61397 16.9156 10.3618 16.1992 12.1063C16.1383 12.2535 16.0311 12.3999 15.9068 12.5002C15.6567 12.7032 15.3764 12.6717 15.123 12.4929C14.8891 12.3279 14.8347 12.0982 14.9313 11.8289C15.0329 11.5458 15.1181 11.2555 15.227 10.9748C15.5965 10.0229 15.9767 9.07579 16.3454 8.12385C16.3934 8.00091 16.4315 7.86018 16.4194 7.7324C16.3974 7.49946 16.2415 7.35631 16.0084 7.32558C15.7281 7.28918 15.5543 7.43881 15.456 7.68791C15.1214 8.53067 14.7892 9.37342 14.4545 10.2162C14.3644 10.4443 14.2677 10.6699 14.1654 10.919C13.9128 10.8195 13.6926 10.7322 13.4498 10.6359C14.05 9.12755 14.6413 7.63858 15.253 6.10026C15.6502 6.25312 16.0173 6.3979 16.3869 6.53701C16.7613 6.67935 16.9368 6.61789 17.1479 6.27901C17.3802 5.90777 17.7133 5.78079 18.0455 5.93931C18.4085 6.11239 18.5101 6.42459 18.3314 6.86618Z"
                        fill="white" />
                    <path
                        d="M31.7232 8.23588C29.0501 5.58629 26.3802 2.93266 23.7128 0.275796C23.5211 0.0849227 23.3099 0 23.0362 0C19.2601 0.00485272 15.4848 0 11.7087 0.00727908C11.4479 0.00808787 11.1791 0.0388218 10.9281 0.107569C10.1646 0.315427 9.58951 0.824963 9.29629 1.51081C9.16065 1.82624 9.08511 2.17968 9.0778 2.55819C9.25893 2.47651 9.48636 2.50481 9.79338 2.62775C9.96314 2.69569 10.1337 2.76363 10.3035 2.83156V2.73694C10.3035 2.37541 10.3701 2.07697 10.5033 1.84484C10.7372 1.43398 11.1774 1.22531 11.8167 1.22531C15.2671 1.2245 18.7183 1.2245 22.1696 1.2245H22.5578V1.61596C22.5578 3.29095 22.557 4.96514 22.5586 6.64014C22.5586 8.32161 23.6251 9.38355 25.3113 9.38436C27.0065 9.38517 28.7016 9.38436 30.3968 9.38436H30.7696V9.72243C30.7696 15.9161 30.7696 22.1098 30.7688 28.3035C30.7688 29.2554 30.2408 29.7779 29.2775 29.7779H11.7988C10.8225 29.7779 10.3035 29.2571 10.3035 28.2784C10.3027 22.752 10.3027 17.2264 10.3027 11.7007V10.6307C9.8941 10.4673 9.48473 10.3039 9.07617 10.1406C9.07617 10.4989 9.07617 10.8563 9.07617 11.2146V16.166C9.07617 20.2431 9.07617 24.3202 9.07617 28.3973C9.07617 28.4483 9.07698 28.4984 9.07861 28.5486C9.10785 29.5773 9.75927 30.4775 10.7348 30.835C10.894 30.8932 11.0556 30.945 11.2156 31H29.8566C29.8908 30.9814 29.9232 30.9555 29.9598 30.9466C31.2375 30.628 31.9945 29.6922 31.9953 28.3973C31.9985 21.9011 31.9953 15.405 32.0002 8.90798C32.0002 8.63704 31.9173 8.42837 31.7232 8.23588ZM29.5171 8.16066C28.1063 8.16066 26.6954 8.16147 25.2853 8.16066C24.322 8.15985 23.7989 7.64304 23.7973 6.68463C23.7949 5.283 23.7965 3.88056 23.7965 2.47893V2.28078C25.7621 4.23238 27.7529 6.20906 29.7186 8.16066H29.5171Z"
                        fill="white" />
                    <path
                        d="M20.5009 22.2671C18.9593 22.2671 17.4185 22.2671 15.8768 22.2671C15.7753 22.2671 15.673 22.2703 15.573 22.2574C15.2173 22.2129 14.9866 21.9622 14.9923 21.6362C14.998 21.3103 15.236 21.0725 15.5966 21.0377C15.6973 21.028 15.7988 21.0321 15.9004 21.0321C18.9934 21.0321 22.0864 21.0321 25.1795 21.0321C25.311 21.0321 25.4443 21.0321 25.5726 21.0547C25.878 21.1089 26.0778 21.3507 26.0794 21.6451C26.0811 21.9395 25.8845 22.1806 25.5791 22.2412C25.4613 22.2647 25.3379 22.2663 25.216 22.2663C23.6443 22.2679 22.0726 22.2671 20.5001 22.2671H20.5009Z"
                        fill="white" />
                    <path
                        d="M20.5235 16.7838C18.9315 16.7838 17.3387 16.7887 15.7467 16.7774C15.5655 16.7757 15.36 16.724 15.2106 16.6269C14.9994 16.4902 14.9442 16.25 15.0164 16.0058C15.0887 15.7631 15.2642 15.6159 15.5144 15.5723C15.6134 15.5553 15.7166 15.5618 15.8181 15.5618C18.9623 15.5618 22.1057 15.5618 25.2499 15.5618C25.3311 15.5618 25.4124 15.5585 25.4928 15.565C25.8388 15.5949 26.0817 15.8513 26.0792 16.1797C26.076 16.5121 25.8347 16.7717 25.4814 16.7766C24.5993 16.7879 23.7172 16.7822 22.8343 16.783C22.0635 16.783 21.2927 16.783 20.5218 16.783L20.5235 16.7838Z"
                        fill="white" />
                    <path
                        d="M20.5361 18.2931C22.1078 18.2931 23.6795 18.2922 25.252 18.2955C25.3917 18.2955 25.5387 18.3036 25.6711 18.344C25.9472 18.4281 26.1089 18.6975 26.0772 18.9781C26.0471 19.249 25.8473 19.4618 25.5695 19.5038C25.4501 19.5216 25.3267 19.5216 25.2057 19.5216C22.0923 19.5224 18.979 19.5216 15.8657 19.5216C15.7641 19.5216 15.6626 19.5216 15.5619 19.5119C15.2346 19.4771 15.012 19.2531 14.9933 18.9474C14.9746 18.6336 15.1899 18.3634 15.518 18.3076C15.6269 18.289 15.7406 18.2939 15.8519 18.2939C17.4138 18.2939 18.9749 18.2939 20.5369 18.2939L20.5361 18.2931Z"
                        fill="white" />
                    <path
                        d="M18.9422 23.7766C20.0176 23.7766 21.093 23.7742 22.1684 23.7782C22.5396 23.7799 22.776 23.9384 22.8491 24.2158C22.9571 24.6218 22.6875 24.9777 22.2399 24.9987C21.9264 25.0133 21.6112 25.0027 21.2969 25.0027C19.4913 25.0027 17.6857 25.0027 15.8792 25.0027C15.7883 25.0027 15.6965 25.0068 15.6055 24.9995C15.2392 24.9696 14.9874 24.7108 14.9923 24.3751C14.9971 24.033 15.2449 23.7855 15.625 23.7815C16.4267 23.771 17.2276 23.7774 18.0292 23.7766C18.3338 23.7766 18.6376 23.7766 18.9422 23.7766Z"
                        fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0_1100_3469">
                        <rect width="32" height="31" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </a>
    </div>
    <div class="table-responsive my-5">

        <table class="table">
            <thead class="" style="border-bottom:1pt solid #fff">
                <tr>
                    <th scope="col" class="text-truncate">{{ __('content.الموكل') }}</th>
                    <th scope="col" class="text-truncate">{{ __('content.الخصم') }}</th>
                    <th scope="col" class="text-truncate">{{ __('content.الأستاذ المسؤول') }}</th>
                    <th scope="col" class="text-truncate"> {{ __('content.رقم الملف') }}</th>
                    <th scope="col" class="text-truncate">{{ __('content.المحكمة') }}</th>
                    <th scope="col" class="text-truncate">{{ __('content.القاضي المقرر') }}</th>
                    <th scope="col" class="text-truncate">{{ __('content.نوع القضية') }}</th>
                    <th scope="col" class="text-truncate">{{ __('content.الجلسات') }}</th>
                    <th scope="col" class="text-truncate">{{ __('content.الإجراءالمطلوب') }}</th>
                    <th scope="col" class="text-truncate">{{ __('content.المرجع') }}</th>
                    <th scope="col" class="text-truncate"></th>
                </tr>
                @include('Admins.Dossiers.ReclamationsDiverses.Plus.delete')
                @foreach  ($dossiers as $dossier)
                    <tr>
                        <td>{{ $dossier->User }}</td>
                        <td>{{ $dossier->Adversaire }}</td>
                        <td>{{ $dossier->AvocatName }}</td>
                        <td>{{ $dossier->RefTrib }}</td>
                        <td class="text-truncate">
                            {{$dossier->TribunalType}}
                            {{ $dossier->Tribunal }}
                        </td>
                        <td>{{ $dossier->Juge }}</td>
                        <td>{{ $dossier->TypeDossier }}</td>
                        <td>{{$dossier->seances_count}}</td>
                        <td>
                            {{$dossier->procedureName ? $dossier->procedureName :__('content.لا يوجد') }}
                        </td>
                        <td>{{ $dossier->reference }}</td>
                        <td>

                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="20" viewBox="0 0 7 27"
                                fill="none" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <path
                                    d="M3.5 7C5.433 7 7 5.433 7 3.5C7 1.567 5.433 0 3.5 0C1.567 0 0 1.567 0 3.5C0 5.433 1.567 7 3.5 7Z"
                                    fill="#C09F5E" />
                                <path
                                    d="M3.5 17C5.433 17 7 15.433 7 13.5C7 11.567 5.433 10 3.5 10C1.567 10 0 11.567 0 13.5C0 15.433 1.567 17 3.5 17Z"
                                    fill="#C09F5E" />
                                <path
                                    d="M3.5 27C5.433 27 7 25.433 7 23.5C7 21.567 5.433 20 3.5 20C1.567 20 0 21.567 0 23.5C0 25.433 1.567 27 3.5 27Z"
                                    fill="#C09F5E" />
                            </svg>

                            <div class="dropdown-menu text-center " aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item fw-bold" href="#">QR code</a>
                                <a class="dropdown-item fw-bold" href="{{ route('UpdateReclamationsDiverses', $dossier->IdDoc) }}">{{ __('content.تعديل الملف') }}</a>
                                <a class="dropdown-item fw-bold"
                                    href="{{ route('remarque.show', $dossier->IDTrb) }}">{{ __('content.الجلسات') }} </a>
                                <a class="dropdown-item fw-bold" href="{{ route('saveArchive', $dossier->IdDoc) }}">{{ __('content.حفظ') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                        viewBox="0 0 17 17" fill="none">
                                        <g clip-path="url(#clip0_436_9501)">
                                            <path
                                                d="M16.2918 17L8.50016 9.24588L0.708496 17V2.125C0.708496 1.56141 0.932379 1.02091 1.33089 0.622398C1.72941 0.223883 2.26991 0 2.8335 0L14.1668 0C14.7304 0 15.2709 0.223883 15.6694 0.622398C16.0679 1.02091 16.2918 1.56141 16.2918 2.125V17ZM8.50016 7.24767L14.8752 13.5894V2.125C14.8752 1.93714 14.8005 1.75697 14.6677 1.62413C14.5349 1.49129 14.3547 1.41667 14.1668 1.41667H2.8335C2.64563 1.41667 2.46547 1.49129 2.33263 1.62413C2.19979 1.75697 2.12516 1.93714 2.12516 2.125V13.5894L8.50016 7.24767Z"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_436_9501">
                                                <rect width="17" height="17" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a class="DeleteDoc dropdown-item fw-bold text-danger" data-target="#DeleteDoc"
                                    aria-label="Close" data-dismiss="modal" data-toggle="modal"
                                    data-id={{ $dossier->IdDoc }}>{{ __('content.حذف') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 18 18" fill="none">
                                        <g clip-path="url(#clip0_436_9506)">
                                            <path
                                                d="M15.75 3H13.425C13.2509 2.15356 12.7904 1.39301 12.1209 0.846539C11.4515 0.300068 10.6142 0.00109089 9.75 0L8.25 0C7.38585 0.00109089 6.54849 0.300068 5.87906 0.846539C5.20964 1.39301 4.74907 2.15356 4.575 3H2.25C2.05109 3 1.86032 3.07902 1.71967 3.21967C1.57902 3.36032 1.5 3.55109 1.5 3.75C1.5 3.94891 1.57902 4.13968 1.71967 4.28033C1.86032 4.42098 2.05109 4.5 2.25 4.5H3V14.25C3.00119 15.2442 3.39666 16.1973 4.09966 16.9003C4.80267 17.6033 5.7558 17.9988 6.75 18H11.25C12.2442 17.9988 13.1973 17.6033 13.9003 16.9003C14.6033 16.1973 14.9988 15.2442 15 14.25V4.5H15.75C15.9489 4.5 16.1397 4.42098 16.2803 4.28033C16.421 4.13968 16.5 3.94891 16.5 3.75C16.5 3.55109 16.421 3.36032 16.2803 3.21967C16.1397 3.07902 15.9489 3 15.75 3ZM8.25 1.5H9.75C10.2152 1.50057 10.6688 1.64503 11.0487 1.91358C11.4286 2.18213 11.7161 2.56162 11.8717 3H6.12825C6.28394 2.56162 6.57143 2.18213 6.95129 1.91358C7.33115 1.64503 7.78479 1.50057 8.25 1.5ZM13.5 14.25C13.5 14.8467 13.2629 15.419 12.841 15.841C12.419 16.2629 11.8467 16.5 11.25 16.5H6.75C6.15326 16.5 5.58097 16.2629 5.15901 15.841C4.73705 15.419 4.5 14.8467 4.5 14.25V4.5H13.5V14.25Z"
                                                fill="#FF0000" />
                                            <path
                                                d="M7.5 13.5C7.69891 13.5 7.88968 13.421 8.03033 13.2803C8.17098 13.1397 8.25 12.9489 8.25 12.75V8.25C8.25 8.05109 8.17098 7.86032 8.03033 7.71967C7.88968 7.57902 7.69891 7.5 7.5 7.5C7.30109 7.5 7.11032 7.57902 6.96967 7.71967C6.82902 7.86032 6.75 8.05109 6.75 8.25V12.75C6.75 12.9489 6.82902 13.1397 6.96967 13.2803C7.11032 13.421 7.30109 13.5 7.5 13.5Z"
                                                fill="#FF0000" />
                                            <path
                                                d="M10.5 13.5C10.6989 13.5 10.8897 13.421 11.0303 13.2803C11.171 13.1397 11.25 12.9489 11.25 12.75V8.25C11.25 8.05109 11.171 7.86032 11.0303 7.71967C10.8897 7.57902 10.6989 7.5 10.5 7.5C10.3011 7.5 10.1103 7.57902 9.96967 7.71967C9.82902 7.86032 9.75 8.05109 9.75 8.25V12.75C9.75 12.9489 9.82902 13.1397 9.96967 13.2803C10.1103 13.421 10.3011 13.5 10.5 13.5Z"
                                                fill="#FF0000" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_436_9506">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

<script>
    $(document).ready(function() {
        console.log('yow');
        // Check if script is running

        $(document).on('click', '.DeleteDoc', function() {
            var docId = $(this).attr('data-id');
            $('#inputDelete').val(docId);

            console.log('doc delete id:', docId);

        });
    })
</script>
