<div class="row py-3">

    <div class=" {{ app()->getLocale() === 'ar' ? 'col-xl-3' : 'col-xl-4' }} col-sm-6">

        <div class="row justify-content-between border rounded-4">
            <div class="col-6 py-2 text-center fw-bold active py-3 rounded-4" wire:click="Change2"
                style="background:{{ $bgcolor2 }};
            cursor:pointer;border-radius:50px;color:{{ $bgcolor1 }};">

                {{ __('content.شخص معنوي') }}

            </div>
            <div class="col-6 py-2 text-center fw-bold active py-3 rounded-4" wire:click="Change1"
                style="background:{{ $bgcolor1 }};cursor:pointer;
            border-radius:50px;color:{{ $bgcolor2 }};transition:0.1s">
                {{ __('content.شخص ذاتي') }}

            </div>

        </div>
    </div>
    <div class="col-xl-5 col-sm-6">
        <div class="input-group mb-3 ">
            <div class="input-group ">


                <div class="input-group-append " style="">
                    <button class="btn btn-light  dropdown-toggle fw-bold  py-3 border text-capitalize"
                        style="color: #C09F5E;background-color: #fff;border-right-radius: 50px;
                        border-right-radius: 50px; {{ app()->getLocale() === 'ar'
                            ? 'border-top-right-radius: 20px; border-bottom-right-radius: 20px;'
                            : 'border-bottom-left-radius: 20px; border-top-left-radius: 20px;' }}"
                        type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">{{ __('content.' . $text) }}</button>
                    <div class="dropdown-menu  fw-bold" style="font-weight: bold;font-size:18px">
                        <button class="dropdown-item" wire:click='FilterName'> {{ __('content.اسم الموكل') }}</button>
                        <button class="dropdown-item" wire:click='FilterReference'> {{ __('content.المرجع') }}
                        </button>
                        <button class="dropdown-item text-capitalize" wire:click='FilterNum'>
                            {{ __('content.رقم الملف') }}</button>
                        <button class="dropdown-item" wire:click='FilterEnmy'> {{ __('content.الخصم') }} </button>
                    </div>
                </div>
                <input type="text" class="search form-control fw-bold text-capitalize"
                    placeholder="{{ __('content.بحث') }}" value="" aria-label="Text input with dropdown button"
                    wire:model="search"
                    style=" {{ app()->getLocale() === 'ar'
                        ? 'border-top-left-radius: 20px; border-bottom-left-radius: 20px;'
                        : 'border-top-right-radius: 20px; border-bottom-right-radius: 20px;' }}"
                    value="" wire:change='Filtrage'>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-12">
        <a href="{{ route('all_doc') }}" class="btn rounded-3 w-75 fw-bold py-2 w-100 text-capitalize"
            style="background: #C09F5E;color:#fff;">
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
            {{ __('content.ملفات حسب الإجراء') }}

        </a>
    </div>

    <div class="table-responsive-xl  py-5">
        @if (empty($search || $searchClient))
            <table class="table">
                <thead class="" style="border-bottom:1pt solid #fff">
                    <tr>
                        <th class=" w-25">{{ __('content.الموكلون') }}</th>
                        <th>{{ __('content.الملفات') }}</th>
                        <th>{{ __('content.آخر نشاط') }}</th>
                        <th>{{ __('content.جرد الملف') }}</th>
                        <th></th>
                    </tr>
        @endif
        <tr class="">
            <th class="">
                <div class="row">
                    <div class="col-xl-10 col-sm-12">
                        <div style="position: relative;">
                            <i class="bi bi-search"
                                style="position: absolute;
                                            {{ app()->getLocale() === 'ar' ? 'left: 10px;' : 'right: 10px;' }}
                                             top: 50%; transform: translateY(-50%); color: #C09F5E;"></i>
                            <input type="text" class="inputAff form-control" wire:model="searchClient"
                                wire:change='Filtrage' placeholder='{{ __('content.الإسم و النسب') }}'
                                
                                >
                        </div>
                    </div>
                </div>
            </th>
        </tr>
        @if (empty($search || $searchClient))
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->dossier_count }}</td>
                    <td>Jeu. 29 2022 à 17:30</td>
                    <td>
                        <a href="{{ route('expDoc', $user->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43"
                                fill="none">
                                <g clip-path="url(#clip0_436_8521)">
                                    <path
                                        d="M35.7416 9.91867L29.4995 3.67292C27.1291 1.30433 23.9793 0 20.6307 0H12.5413C7.60172 0 3.58301 4.01871 3.58301 8.95833V34.0417C3.58301 38.9813 7.60172 43 12.5413 43H30.458C35.3976 43 39.4163 38.9813 39.4163 34.0417V18.7856C39.4163 15.4334 38.1102 12.2872 35.7416 9.91867ZM33.2082 12.4539C33.778 13.0218 34.2599 13.6543 34.6505 14.3351H26.8729C25.8839 14.3351 25.0812 13.5307 25.0812 12.5435V4.76404C25.762 5.15462 26.3945 5.63658 26.9643 6.20633L33.2064 12.4521L33.2082 12.4539ZM35.833 34.0435C35.833 37.0069 33.4214 39.4185 30.458 39.4185H12.5413C9.57792 39.4185 7.16634 37.0069 7.16634 34.0435V8.95833C7.16634 5.99492 9.57792 3.58333 12.5413 3.58333H20.6307C20.9228 3.58333 21.213 3.59767 21.4997 3.62454V12.5417C21.4997 15.5051 23.9113 17.9167 26.8747 17.9167H35.7918C35.8187 18.2033 35.833 18.4936 35.833 18.7856V34.0435ZM28.1414 28.8566C28.8419 29.5553 28.8419 30.6895 28.1414 31.39L25.2514 34.2817C24.2176 35.3155 22.8578 35.8333 21.4997 35.8333C20.1416 35.8333 18.7817 35.3155 17.7479 34.2817L14.858 31.39C14.1574 30.6895 14.1574 29.5553 14.858 28.8566C15.5585 28.156 16.6908 28.156 17.3914 28.8566L19.708 31.1732V23.2935C19.708 22.3045 20.5089 21.5018 21.4997 21.5018C22.4905 21.5018 23.2913 22.3045 23.2913 23.2935V31.1732L25.608 28.8566C26.3085 28.156 27.4408 28.156 28.1414 28.8566Z"
                                        fill="#CBC5C5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_436_8521">
                                        <rect width="43" height="43" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('plus', $user->id) }}" class="fw-bold text-decoration-none"
                            style="color: black;">{{ __('content.مزيد+') }}</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="border-bottom: 1px solid #ccc;" class="my-5"></td>
                </tr>
            @endforeach
            </thead>
            </table>
        @else
            <table class="table">
                <thead class="text-end" style="border-bottom:1pt solid #fff">
                    <tr>
                        <th>الموكل</th>
                        <th>الخصم</th>
                        <th>الأستاذ المسؤول </th>
                        <th> رقم الملف</th>
                        <th>المحكمة</th>
                        <th>القاضي المقرر</th>
                        <th>نوع القضية</th>
                        <th>الجلسات</th>
                        <th>الإجراءالمطلوب</th>
                        <th>المرجع</th>
                    </tr>
                    @foreach ($results as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->enemy_name }}</td>
                            <td>{{ $user->avocats_name }}</td>
                            <td>{{ $user->RefTrib }}</td>
                            <td>{{ $user->Ttribunals }}{{ $user->TribunalTypes }}</td>
                            <td>{{ $user->Juge }}</td>
                            <td>{{ $user->TypeDossier }}</td>
                            <td>{{ $user->seances_count }}</td>
                            <td>
                                {{ $user->procedureName ? $user->procedureName : __('content.لا يوجد') }}
                            </td>
                            <td>{{ $user->reference }}</td>
                        </tr>
                    @endforeach
                </thead>
            </table>
        @endif

    </div>

</div>
