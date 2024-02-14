@extends('Admins.components.SideBar')

@section('title', 'Ajoute User')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }
    </style>
    <div class="container ">
        <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
            <div class="col-11 text-center">
                <h3 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                    {{ __('content.إضافة مستخدم') }}
                </h3>
            </div>
            <div class="col-1">
                <div class="row justify-content-center">
                <a href="{{ route('users.index') }}">
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
           

        </div>
        <div class="row d-flex justify-content-end">
            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                <div class="">
                    @csrf
                    <input type="hidden" name="type_clt" value="clt3">
                    <div class="row py-2 justify-content-center">
                        <div class="col-5 py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="name" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الإسم') }}</label>
                            </div>

                            @error('name')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="LastName" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.النسب') }}</label>
                            </div>



                            @error('LastName')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-10 py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="email" type="email">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.البريد الإلكتروني') }}</label>
                            </div>



                            @error('email')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-10 py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="conf_email" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تأكيد البريد الإلكتروني') }}</label>
                            </div>


            
                            @error('conf_email')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="conf_password" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الرقم السري') }}</label>
                            </div>

                            @error('conf_password')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="password" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تأكيد الرقم السري') }}</label>
                            </div>
                            @error('password')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-5 py-2">
                            <select class="form-select" name="Adjectifs" 
                                style="font-weight: bold;font-size:18px" aria-label="Default select example">
                                <option selected value="" disabled>{{ __('content.الصفة') }}</option>
                                <option value="secretary">{{ __('content.سكرتار') }}</option>
                                <option value="admin">{{ __('content.أدمين') }}</option>

                            </select>
                            @error('Adjectifs')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2">
                            <select class="form-select" name="status"  aria-label="Default select example"
                                style="font-weight: bold;font-size:18px">
                                <option selected value="" disabled>{{ __('content.الحالة') }}</option>
                                <option value="active">{{ __('content.نشط') }}</option>
                                <option value="hanging">{{ __('content.معلق') }}</option>

                            </select>
                            @error('status')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2 ">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="Tel_Portable" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الهاتف النقال') }}</label>
                            </div>

                            @error('Tel_Portable')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2 ">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="Tel_Fix" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الهاتف الثابت') }}</label>
                            </div>

                            @error('Tel_Fix')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-5  py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="Tel_Portable_2" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الهاتف  2') }}</label>
                            </div>


                          
                            @error('Tel_Portable_2')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5  py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="Fax" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الفاكس') }}</label>
                            </div>

                            @error('Fax')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        

                        <div class="col-5 py-2 ">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="city" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المدينة') }}</label>
                            </div>



                            @error('city')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2 ">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="Adr" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.العنوان') }}</label>
                            </div>


                            @error('Adr')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        
                        <div class="col-10 py-3">

                            <div class="relative">
                                <textarea class="inputcheck input-cal input-base  form-control" id="input" placeholder="" name="comment"></textarea>
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.ملاحظات') }}</label>
                            </div>

                            @error('comment')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row d-flex justify-content-center py-5">
                            <div class="col-8  ">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                                            style="width:125px;background: #C09F5E;;font-weight: bold;font-size:18px">{{ __('content.إضافة') }}</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('users.index') }}" class="btn  w-100 py-2 text-capitalize"
                                            style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إلغاء') }}</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @livewireScripts


@endsection
