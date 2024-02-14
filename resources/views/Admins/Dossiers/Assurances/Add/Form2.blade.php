@extends('Admins.components.SideBar')

@section('title', 'Ajoute Avocat')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }

        /* Adjust the position of the caret */
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url("/assets/icons/select.svg")10px left center no-repeat !important;
            background: url("/assets/icons/select.svg") no-repeat 97% !important;
            height: 100px;


        }

        .select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url("/assets/icons/select.svg")10px left center no-repeat !important;
            background: url("/assets/icons/select.svg") no-repeat 99% !important;


        }

        .form-control[readonly] {
            background: #ffffff;
            cursor: context-menu;
        }

        .input-group>.form-control:focus {
            box-shadow: inset 0 0 0 1px #C09F5E;
            border-color: #C09F5E;


        }
    </style>

    {{-- Update Form One  --}}
    @include('Admins.Dossiers.Assurances.Update.Form1')


    {{-- Display Form Two For Add Data --}}
    <div style="display: none" id="FormTwo">
        <div class="container my-5">
            <div class="d-flex justify-content-center my-2 align-items-center" style="height: 120px">
                <div class="col-11 text-center">
                    <h3 class="fw-bold text-center px-5 "
                        style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px' }}">
                        {{ __('content.إضافة ملف') }}
                    </h3>
                    <h4 class="fw-bold text-center px-5 "
                        style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px' }};color: #C09F5E">
                        {{ __('content.تأمين') }}</h4>
                    <div class="fw-bold text-center px-5 "
                        style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="13" viewBox="0 0 36 13"
                            fill="none">
                            <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E" />
                            <circle cx="29.5" cy="6.5" r="6.5" fill="#C09F5E" />
                        </svg>
                    </div>

                </div>
                <div class="col-1">
                    <a onclick="display()">
                        <svg style="{{ app()->getLocale() === 'ar' ? '' : 'rotate:180deg;' }}"
                            xmlns="http://www.w3.org/2000/svg" width="80" height="50" viewBox="0 0 64 68"
                            fill="none">
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
            <div class="row d-flex justify-content-end my-5">
                <form action="{{ route('store2', $assurancecheck->id) }}" method="post" enctype="multipart/form-data">
                    <div class="content">
                        @csrf
                        <div class="row py-2 justify-content-center">
                            <div class="col-5 py-3">
                                <div class="input-group">
                                    <input type="text" id="cehckNumeroRapportPoliceJudiciaire"
                                        class="form-control rounded-1 custom-file-input"
                                        style="font-weight: bold; font-size: 18px" placeholder=" رقم محضر الضابطة القضائية"
                                        name="NumeroRapportPoliceJudiciaire" readonly>
                                    <input type="file" id="NumeroRapportPoliceJudiciaire" class="d-none">
                                    <div class="input-group-append "
                                        onclick="handleFileSelection('cehckNumeroRapportPoliceJudiciaire', 'NumeroRapportPoliceJudiciaire')">
                                        <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                            alt="" srcset="" style="cursor: pointer">
                                    </div>
                                </div>
                                @error('NumeroRapportPoliceJudiciaire')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-5 py-3">
                                <div class="input-group">
                                    <input type="text" id="checkMinisterePublicNon"
                                        class="form-control rounded-1 custom-file-input"
                                        style="font-weight: bold; font-size: 18px" placeholder='رقم النيابة العامة'
                                        name="MinisterePublicNon" readonly>
                                    <input type="file" id="MinisterePublicNon" class="d-none">
                                    <div class="input-group-append "
                                        onclick="handleFileSelection('checkMinisterePublicNon', 'MinisterePublicNon')">
                                        <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                            alt="" srcset="" style="cursor: pointer">
                                    </div>
                                </div>
                                @error('MinisterePublicNon')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-5 py-2">
                                <div class="input-group">
                                    <input type="text" id="checkSuivi_M_AgentRoi"
                                        class="form-control rounded-1 custom-file-input"
                                        style="font-weight: bold; font-size: 18px" placeholder='متابعة السيد وكيل الملك'
                                        name="Suivi_M_AgentRoi" readonly>
                                    <input type="file" id="Suivi_M_AgentRoi" class="d-none">
                                    <div class="input-group-append "
                                        onclick="handleFileSelection('checkSuivi_M_AgentRoi', 'Suivi_M_AgentRoi')">
                                        <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                            alt="" srcset="" style="cursor: pointer">
                                    </div>
                                </div>
                                @error('Suivi_M_AgentRoi')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-5 py-2">
                                <div class="relative">
                                    <input class="inputcheck input-cal input-base  form-control" id="input"
                                        placeholder="" type="text" name='NumeroDossier'>
                                    <label id="label-input" class="fw-bold"
                                        style="font-weight: bold;font-size:18px;
                                {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.رقم الملف') }}</label>
                                </div>
                                @error('NumeroDossier')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-10 py-3">
                                <select class="select form-select " name="id_tribunals"
                                    style="font-weight: bold;font-size:18px" aria-label="Default select example">
                                    <option value="" disabled selected>{{ __('content.المحكمة المختصة') }}</option>
                                    @foreach ($tribunals as $tribunal)
                                        <option value="{{ $tribunal->id }}">{{ $tribunal->trib_nom }}</option>
                                    @endforeach
                                </select>
                                @error('id_tribunals')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-10">
                                <p class="my-2" style="font-weight: 900;font-size:18px;">الأطراف:</p>
                            </div>
                            <div class="col-10 py-2">
                                <div class="relative">
                                    <input class="inputcheck input-cal input-base  form-control" id="input"
                                        placeholder="" type="text" name='reference' readonly
                                        value="{{ $usercheck->name }}">
                                    <label id="label-input" class="fw-bold"
                                        style="font-weight: bold;font-size:18px;
                                {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الموكل') }}</label>
                                </div>
                            </div>

                            {{-- First --}}
                            <div class="col-10">
                            <div class="d-flex justify-content-between">
                                <div class="col-6 ">
                                    <div class="col-12 py-2 NexAssure">
                                        <div class="input-group">
                                            <input type="text" id="checkAssure"
                                                class="form-control rounded-1 custom-file-input"
                                                style="font-weight: bold; font-size: 18px" placeholder='الطرف المؤمن'
                                                name="Assure[]" readonly>
                                            <input type="file" id="Assure" class="d-none">
                                            <div class="input-group-append "
                                                onclick="handleFileSelection('checkAssure', 'Assure')">
                                                <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                                    alt="" srcset="" style="cursor: pointer">
                                            </div>
                                        </div>
                                        @error('Assure')
                                            <p class=" text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-11">
                                        <div class="row">
                                            <div class="col-xl-8 col-sm-12" onclick="addNewAssure()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                                    viewBox="0 0 27 27" fill="none">
                                                    <rect x="0.210938" y="0.210938" width="26.5781" height="26.5781"
                                                        rx="4.00781" fill="#C09F5E" />
                                                    <rect x="0.210938" y="0.210938" width="26.5781" height="26.5781"
                                                        rx="4.00781" stroke="#D6DFEF" stroke-width="0.421875" />
                                                    <path d="M13.5828 8.4375V18.3516" stroke="white" stroke-width="0.84375"
                                                        stroke-linecap="round" />
                                                    <path d="M18.3516 13.457L8.4375 13.457" stroke="white" stroke-width="0.84375"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <label class="m-2"
                                                    style="font-weight: 900;font-size:18px;cursor: pointer">إضافة
                                                    طرف آخر
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mx-2">
                                    <div class="col-12 py-2 NewRevendicationsMatiereDroitsCiviquesNext">
                                        <div class="input-group">
                                            <input type="text" id="checkRevendicationsMatiereDroitsCiviques"
                                                class="form-control rounded-1 custom-file-input"
                                                style="font-weight: bold; font-size: 18px" placeholder='المطالب بالحق المدني'
                                                name="RevendicationsMatiereDroitsCiviques[]" readonly>
                                            <input type="file" id="RevendicationsMatiereDroitsCiviques" class="d-none">
                                            <div class="input-group-append "
                                                onclick="handleFileSelection('checkRevendicationsMatiereDroitsCiviques', 'RevendicationsMatiereDroitsCiviques')">
                                                <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                                    alt="" srcset="" style="cursor: pointer">
                                            </div>
                                        </div>
                                        @error('RevendicationsMatiereDroitsCiviques')
                                            <p class=" text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-xl-8 col-sm-12" onclick="addNewRevendicationsMatiereDroitsCiviques()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                                    viewBox="0 0 27 27" fill="none">
                                                    <rect x="0.210938" y="0.210938" width="26.5781" height="26.5781"
                                                        rx="4.00781" fill="#C09F5E" />
                                                    <rect x="0.210938" y="0.210938" width="26.5781" height="26.5781"
                                                        rx="4.00781" stroke="#D6DFEF" stroke-width="0.421875" />
                                                    <path d="M13.5828 8.4375V18.3516" stroke="white" stroke-width="0.84375"
                                                        stroke-linecap="round" />
                                                    <path d="M18.3516 13.457L8.4375 13.457" stroke="white" stroke-width="0.84375"
                                                        stroke-linecap="round" />
                                                </svg>
                                                <label class="m-2"
                                                    style="font-weight: 900;font-size:18px;cursor: pointer">إضافة
                                                    طرف آخر
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                           

                           

                          <div class="col-10">
                            <div class="row justify-content-start">
                                <div class="col-6 py-2 AutreCompagnieAssuranceNew">
                                    <div class="input-group">
                                        <input type="text" id="checkAutreCompagnieAssurance"
                                            class="form-control rounded-1 custom-file-input"
                                            style="font-weight: bold; font-size: 18px" placeholder='شركة التأمين أخرى'
                                            name="AutreCompagnieAssurance[]" readonly>
                                        <input type="file" id="AutreCompagnieAssurance" class="d-none">
                                        <div class="input-group-append "
                                            onclick="handleFileSelection('checkAutreCompagnieAssurance', 'AutreCompagnieAssurance')">
                                            <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                                alt="" srcset="" style="cursor: pointer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                 
                            




                            <div class="col-10">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-4" onclick="addNewPartie()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                            viewBox="0 0 27 27" fill="none">
                                            <rect x="0.210938" y="0.210938" width="26.5781" height="26.5781"
                                                rx="4.00781" fill="#C09F5E" />
                                            <rect x="0.210938" y="0.210938" width="26.5781" height="26.5781"
                                                rx="4.00781" stroke="#D6DFEF" stroke-width="0.421875" />
                                            <path d="M13.5828 8.4375V18.3516" stroke="white" stroke-width="0.84375"
                                                stroke-linecap="round" />
                                            <path d="M18.3516 13.457L8.4375 13.457" stroke="white" stroke-width="0.84375"
                                                stroke-linecap="round" />
                                        </svg>
                                        <label class="m-2"
                                            style="font-weight: 900;font-size:18px;cursor: pointer">إضافة
                                            طرف آخر
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-10">
                                <hr style="color: #C09F5E">
                            </div>
                            <div class="col-10">
                                <input class="my-2" type="radio" value="true" name="isFirst">
                                <label class="mx-2" style="font-weight: 900;font-size:18px;cursor: pointer"> أول
                                    جلسة</label>
                            </div>
                            <div class="row d-flex justify-content-center py-5">
                                <div class="col-xl-8 col-sm-12  ">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn text-light w-100 py-2 text-capitalize" type="submit"
                                                style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إضافة') }}</button>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn  w-100 py-2 text-capitalize"
                                                onclick="display()"
                                                style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.رجوع') }}</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script>
        var FormOne = document.getElementById("FormOne");
        var FormTwo = document.getElementById("FormTwo");

        function hide() {
            FormOne.style.display = 'none';
            FormTwo.style.display = '';
        }

        function display() {
            FormOne.style.display = '';
            FormTwo.style.display = 'none';
        }
    </script>
    <script type="text/javascript">
        function handleFileSelection(inputFieldId, fileInputId) {
            let inputField = document.getElementById(inputFieldId);
            let fileInput = document.getElementById(fileInputId);

            fileInput.click(); // Trigger file input click

            fileInput.addEventListener('change', function() {
                if (fileInput.files.length > 0) {
                    // Set the value of the input field to the selected file name
                    inputField.value = fileInput.files[0].name;
                    inputField.setAttribute('readonly', true); // Set as readonly
                }
            });
        }
    </script>

    <script>
        let fieldIndex = 1;

        function addNewPartie() {
            fieldIndex++;

            const newContent = document.createElement('div');
            newContent.className = 'col-6 py-2'; // Set the new div's class to 'col-10'
            newContent.innerHTML = `
        <div class="input-group">
            <input type="text" id="checkAutreCompagnieAssurance${fieldIndex}" class="form-control rounded-1 custom-file-input"
                style="font-weight: bold; font-size: 18px" placeholder='شركة التأمين أخرى' readonly name="AutreCompagnieAssurance[]">
            <input type="file" id="AutreCompagnieAssurance${fieldIndex}" class="d-none">
                <div class="input-group-append " onclick="handleFileSelection('checkAutreCompagnieAssurance${fieldIndex}', 'AutreCompagnieAssurance${fieldIndex}')">
                <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                    alt="" srcset="" style="cursor: pointer">
                </div>
        </div>`;

            // Get all elements with class 'col-5'
            const col5Elements = document.querySelectorAll('.AutreCompagnieAssuranceNew');

            // Select the last 'col-5' element
            const lastCol5Element = col5Elements[col5Elements.length -
                1]; // Adjust the selector based on your HTML structure

            // Append the new content after the parent element
            lastCol5Element.insertAdjacentElement('afterend', newContent);
        }

        function addNewAssure() {
            
            fieldIndex++;

            const newContent = document.createElement('div');
            newContent.className = 'row'; // Set the new div's class to 'col-10'
            newContent.innerHTML = 
            
            `<div class='col-12 py-2'>
            <div class="input-group">
                <input type="text" id="checkAssure${fieldIndex}" class="form-control rounded-1 custom-file-input"
                     style="font-weight: bold; font-size: 18px" placeholder='الطرف المؤمن' name="Assure[]" readonly>
                <input type="file" id="Assure${fieldIndex}" class="d-none">
                    <div class="input-group-append" onclick="handleFileSelection('checkAssure${fieldIndex}', 'Assure${fieldIndex}')">
                        <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                            alt="" srcset="" style="cursor: pointer">
                    </div>
            </div>
            </div>`;

            // Get all elements with class 'col-5'
            const col5Elements = document.querySelectorAll('.NexAssure');

            // Select the last 'col-5' element
            const lastCol5Element = col5Elements[col5Elements.length - 1]; // Adjust the selector based on your HTML structure

            // Append the new content after the parent element
            lastCol5Element.insertAdjacentElement('afterend', newContent);

        }
        function addNewRevendicationsMatiereDroitsCiviques() {
            fieldIndex++;

            const newContent = document.createElement('div');
            newContent.className = 'row'; // Set the new div's class to 'col-10'
            newContent.innerHTML = 
            
            `<div class='col-12 py-2'>
                <div class="input-group">
                    <input type="text" id="checkRevendicationsMatiereDroitsCiviques${fieldIndex}" class="form-control rounded-1 custom-file-input"
                        style="font-weight: bold; font-size: 18px" placeholder='المطالب بالحق المدني' name="RevendicationsMatiereDroitsCiviques[]" readonly>
                    <input type="file" id="RevendicationsMatiereDroitsCiviques${fieldIndex}" class="d-none">
                    <div class="input-group-append" onclick="handleFileSelection('checkRevendicationsMatiereDroitsCiviques${fieldIndex}', 'RevendicationsMatiereDroitsCiviques${fieldIndex}')">
                        <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                            alt="" srcset="" style="cursor: pointer">
                    </div>
                </div>
            </div>`;

            // Get all elements with class 'col-5'
            const col5Elements = document.querySelectorAll('.NewRevendicationsMatiereDroitsCiviquesNext');

            // Select the last 'col-5' element
            const lastCol5Element = col5Elements[col5Elements.length - 1]; // Adjust the selector based on your HTML structure

            // Append the new content after the parent element
            lastCol5Element.insertAdjacentElement('afterend', newContent);

        }
    </script>

    @livewireScripts


@endsection
