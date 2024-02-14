@extends('Admins.components.SideBar')

@section('title', 'Ajoute Client')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }
    </style>
    <div class="container ">
        <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
            <div class="col-11 text-center ">
                <h3 class="fw-bold text-center px-5 "
                    style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px' }}">
                    {{ __('content.إضافة موكل') }}
                </h3>
            </div>
            <div class="col-1 ">
                <a href="{{ route('clients.index') }}">
                    <svg style="{{ app()->getLocale() === 'ar' ? '' : 'rotate:180deg;' }}" xmlns="http://www.w3.org/2000/svg"
                        width="80" height="50" viewBox="0 0 64 68" fill="none">
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
        <div class="row d-flex ">
            <div>
                <style>
                    input[type='radio']:after {
                        width: 15px;
                        height: 15px;
                        border-radius: 15px;
                        top: -2px;
                        left: -1px;
                        position: relative;
                        background-color: #d1d3d1;
                        content: '';
                        display: inline-block;
                        visibility: visible;
                        border: 2px solid white;
                    }

                    input[type='radio']:checked:after {
                        width: 15px;
                        height: 15px;
                        border-radius: 15px;
                        top: -2px;
                        left: -1px;
                        position: relative;
                        background-color: #C09F5E;
                        content: '';
                        display: inline-block;
                        visibility: visible;
                        border: 2px solid rgb(227, 226, 226);
                    }

                    .input-group>.form-control:focus {
                        border-color: #C09F5E;
                        -webkit-box-shadow: none;
                        box-shadow: #C09F5E;
                    }

                    .form-control:focus {
                        border-color: #C09F5E;
                        box-shadow: #C09F5E;
                    }
                </style>
                <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
                    <div class="">
                        <div class="row d-flex  my-2 ">

                            <div class="col-xl-8  col-sm-12 ">
                                <label class=" m-2 mx-4"
                                    style="font-weight: bold;font-size:20px">{{ __('content.:نوع الموكل') }}</label>

                                <input type="radio" class="mx-1" checked value="clt1" name="type_clt" value="clt1"
                                    onclick="Clt1()">
                                <label class="mx-3" for="form1" style="font-weight: bold;font-size:18px">
                                    {{ __('content.شخص معنوي') }}
                                </label>
                                <input class="mx-3" type="radio" value="clt2" name="type_clt" onclick="Clt2()">
                                <label for="form2" style="font-weight: bold;font-size:18px">
                                    {{ __('content.شخص ذاتي') }}
                                </label>
                            </div>



                        </div>
                    </div>

                    @csrf
                    <div class="row  justify-content-center">
                        <input type="hidden" name="selectedForm" value="1">

                        {{-- NomAgence --}}
                        <div class="col-10 py-2" id="NomAgence">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    value="{{ old('nom_Agence') }}" name="nom_Agence" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.اسم الشركة') }}</label>
                            </div>
                            @error('nom_Agence')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- NomAgence --}}

                        {{-- ICE RC --}}
                        <div class="col-5 py-2" id="ICE">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="ICE" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">RC</label>
                            </div>
                            {{-- <input type="text" class="form-control fw-bold"  style="font-size:18px"
                                placeholder="ICE" > --}}
                        </div>
                        <div class="col-5 py-2" id="RC">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="RC" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">ICE</label>
                            </div>

                            {{-- <input type="text" class="form-control fw-bold"  placeholder="RC"
                                name="RC"> --}}
                        </div>
                        {{-- ICE RC --}}

                    </div>
                    <div class="row  justify-content-center">
                        {{-- <input type="hidden" name="selectedForm" value="0"> --}}
                        <div class="col-5 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="name" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الإسم') }}</label>
                            </div>


                        </div>
                        <div class="col-5 py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="LastName" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.النسب') }}</label>
                            </div>
                        </div>


                        <div class="col-5 ">


                            {{-- Cin --}}
                            <div class="input-group" style="display: none" id="Cin">

                                <input type="text" id="checkCIN" class="form-control rounded-1 custom-file-input"
                                    style="font-weight: bold; font-size: 18px" placeholder="CIN" name="cin">
                                <input type="file" id="cin" class="d-none">
                                <div class="input-group-append " onclick="handleFileSelection('checkCIN', 'cin')">
                                    <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                        alt="" srcset="" style="cursor: pointer">
                                </div>
                            </div>
                            {{-- Cin --}}
                        </div>
                        {{-- Passport --}}
                        <div class="Passport col-5 " style="display: none" id="Passport">
                            <div class="input-group">

                                <input type="text" id="checkPassport" class="form-control rounded-1 custom-file-input"
                                    style="font-weight: bold; font-size: 18px" placeholder="Passport" name="passport">
                                <input type="file" id="passport" class="d-none">
                                <div class="input-group-append "  onclick="handleFileSelection('checkPassport', 'passport')">
                                    <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                        alt="" srcset="" style="cursor: pointer">
                                </div>
                            </div>
                        </div>
                        {{-- Passport --}}
                    </div>
                    <!-- Add your Form 2 HTML content here -->
                    <div class="row  justify-content-center">
                        <div class="col-10 py-3">
                            {{-- <input type="file" class="form-control "> --}}
                            <div class="input-group">

                                <input type="text" id="Checkimage" class="form-control rounded-1" readonly
                                    placeholder= '{{ __('content.إضافة صورة') }}' aria-label="Recipient's username"
                                    aria-describedby="basic-addon2"
                                    style="font-weight: bold;font-size:18px;background-color:#ffffff" name="images">
                                <input type="file" name="" id="image" hidden />
                                <div class="input-group-append" onclick="handleFileSelection('Checkimage', 'image')">
                                    <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                        alt="" srcset="" style="cursor: pointer">
                                </div>

                            </div>

                        </div>
                        <div class="col-10 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="email" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.البريد الإلكتروني') }}</label>
                            </div>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="col-10 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="conf_email" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تأكيد البريد الإلكتروني') }}</label>
                            </div>
                        </div>
                        <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="password" type="password">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تأكيد الرقم السري') }}</label>
                            </div>

                        </div>
                        <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="conf_password" type="password">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الرقم السري') }}</label>
                            </div>



                        </div>
                        <div class="col-5 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="Tel_Fix" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الهاتف الثابت') }}</label>
                            </div>

                        </div>
                        <div class="col-5 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="Tel_Portable" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    {{ __('content.الهاتف النقال') }}</label>
                            </div>


                            {{-- <input type="text" class="form-control "  placeholder='{{ __('content.الهاتف النقال') }}'
                                name="Tel_Portable" style="font-weight: bold;font-size:18px"> --}}
                        </div>
                        <div class="col-5 py-3">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="Fax" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    {{ __('content.الفاكس') }}</label>
                            </div>


                        </div>
                        <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="Tel_Fix" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    {{ __('content.الهاتف  2') }}</label>
                            </div>



                        </div>
                        <div class="col-5 ">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="city" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المدينة') }}</label>
                            </div>



                        </div>
                        <div class="col-5 ">

                            <select class="form-select" aria-label="Default select example" name="status"
                                style="font-weight: bold;font-size:18px">
                                <option selected disabled>{{ __('content.الحالة') }}</option>
                                <option value="active">{{ __('content.نشط') }}</option>
                                <option value="hanging">{{ __('content.معلق') }}</option>
                            </select>
                        </div>

                        <div class="col-10 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="Adr" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.العنوان') }}</label>
                            </div>
                        </div>
                        <div class="col-10 ">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input"
                                    placeholder="" name="" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.العنوان 2') }}</label>
                            </div>

                        </div>
                        <div class="col-10 py-3">
                            {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="{{ __('content.ملاحظات') }}"
                                name="comment" style="font-weight: bold;font-size:18px"></textarea> --}}

                            <div class="relative">
                                <textarea class="inputcheck input-cal input-base  form-control" id="input" placeholder="" name="comment"></textarea>
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.ملاحظات') }}</label>
                            </div>
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn text-light fw-bold  w-100 py-2 text-capitalize"
                                            style="width:125px;background: #C09F5E;">{{ __('content.إضافة') }}</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('clients.index') }}"
                                            class="btn fw-bold  w-100 py-2 text-capitalize"
                                            style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E">{{ __('content.إلغاء') }}</a>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>


                </form>
                @if ($errors->any()){
                    <div class="alert alert-danger" role="alert">
                        <strong>Errors</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    }

                @endif
            </div>
            <script>
                var NomAgence = document.getElementById('NomAgence')
                var Passport = document.getElementById('Passport')
                var Cin = document.getElementById('Cin')
                var RC = document.getElementById('RC')
                var ICE = document.getElementById('ICE')

                function Clt1() {
                    NomAgence.style.display = "";
                    RC.style.display = "";
                    ICE.style.display = "";
                    Passport.style.display = "none";
                    Cin.style.display = "none";



                }

                function Clt2() {

                    NomAgence.style.display = "none";
                    RC.style.display = "none";
                    ICE.style.display = "none";
                    Cin.style.display = "";
                    Passport.style.display = "";
                    Passport.style.paddingTop = "15px";
                    Cin.style.paddingTop = "15px";

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




        </div>
    </div>
    @if ($errors->any()){
        <div class="alert alert-danger" role="alert">
            <strong>Errors</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        }

    @endif
    @livewireScripts


@endsection
