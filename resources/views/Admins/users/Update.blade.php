@extends('Admins.components.SideBar')

@section('title', 'Update User')


@section('content')
    <style>
        h3 {
            font-size: 3rem;
        }
    </style>
    <div class="container">
        <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
            <div class="col-11 text-center">
                <h3 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">{{ __('content.تعديل مستخدم') }}</h3>
            </div>
            <div class="col-1 ">
                <a href="{{ route('users.index') }}">
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


        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="selectedForm" value="0">
            <div class="row  justify-content-center">
                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="name" type="text" value="{{ $user->name }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الإسم') }}</label>
                    </div>


                    @error('name')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="LastName" type="text" value="{{ $user->LastName }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.النسب') }}</label>
                    </div>

                    @error('LastName')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-10 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="email" type="email" value="{{ $user->email }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.البريد الإلكتروني') }}</label>
                    </div>
                    @error('email')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-10 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="conf_email" type="text" value="{{ $user->email }}">
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
                    @error('password')
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

                    @error('conf_password')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <div class="row  justify-content-center">
                <div class="col-5 py-2">
                    <select class="form-select" aria-label="Default select example" name="Adjectifs"
                    style="font-weight: bold;font-size:18px">
                        <option selected value="" disabled>{{ __('content.الصفة') }}</option>

                        <option selected value="{{ $user->Adjectifs }} ">
                            {{ $user->Adjectifs == 'admin' ? __('content.أدمين') : __('content.سكرتار') }}</option>
                        <option value="{{ $user->Adjectifs === 'admin' ? 'secretary' : 'admin' }}">
                            {{ $user->Adjectifs === 'admin' ? __('content.سكرتار') : __('content.أدمين') }}
                        </option>
                    </select>
                    @error('Adjectifs')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-5 py-2">
                    <select class="form-select" aria-label="Default select example" name="status" 
                    style="font-weight: bold;font-size:18px">
                        <option selected value="" disabled>{{ __('content.الحالة') }}</option>

                        <option selected value="{{ $user->status }} ">
                            
                            {{ $user->status == 'active' ? __('content.نشط') : __('content.معلق') }}</option>
                        <option value="{{ $user->status === 'active' ? 'hanging' : 'active' }}">
                            {{ $user->status === 'active' ? __('content.معلق') : __('content.نشط') }}
                        </option>
                    </select>
                    @error('status')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
               
                



                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="Tel_Portable" type="text" value="{{ $user->Tel_Portable }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الهاتف النقال') }}</label>
                    </div>
                    @error('Tel_Portable')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="Tel_Fix" type="text" value="{{ $user->Tel_Fix }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الهاتف الثابت') }}</label>
                    </div>


                </div>
                <div class="col-5 ">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="Tel_Portable_2" type="text" value="{{ $user->Tel_Portable_2 }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الهاتف  2') }}</label>
                    </div>
                </div>
                <div class="col-5 ">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="Fax" type="text" value="{{ $user->Fax }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الفاكس') }}</label>
                    </div>

                </div>

                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="city" type="text">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المدينة') }}</label>
                    </div>

                    {{-- <input type="text" class="form-control " placeholder="{{ __('content.المدينة') }}"
                        name="Adr2" value="{{ $user->Adr2 }}"> --}}
                </div>
                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="Adr" type="text"  value="{{ $user->Adr }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.العنوان') }}</label>
                    </div>
                </div>

                <div class="col-10 ">
                    <div class="relative">
                        <textarea class="inputcheck input-cal input-base  form-control" id="input" placeholder="" name="comment"></textarea>
                        <label id="label-input" class="fw-bold" {{ $user->comment }}
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.ملاحظات') }}</label>
                    </div>


                </div>
                <div class="row justify-content-center py-3">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn text-light  w-100 py-2 text-capitalize"
                                    style="width:125px;background: #C09F5E;;font-weight: bold;font-size:18px">{{ __('content.تعديل') }}

                            </div>
                            <div class="col-6">
                                <a href="{{ route('users.index') }}" class="btn  w-100 py-2 text-capitalize"
                                    style="font-weight: bold;font-size:18px;color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E">{{ __('content.إلغاء') }}</a>
                            </div>

                        </div>



                        </button>
                    </div>

                </div>

            </div>


        </form>

    </div>



@endsection
