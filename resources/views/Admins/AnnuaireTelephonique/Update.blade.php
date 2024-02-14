@extends('Admins.components.SideBar')

@section('title', 'Update Annuaire Telephonique')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }

        /* Adjust the position of the caret */


        .select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            height: 42px;
            padding: 10px 10px 10px 17px;


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
    <div class="container ">
        <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
            <div class="col-11 text-center">
                <h3 class="fw-bold text-center px-5 "
                    style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px' }}">
                    تعديل دليل هاتف
                </h3>
            </div>
            <div class="col-1">
                <a href="{{ route('AnnuaireTelephonique.index') }}">
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

        <div class="row d-flex justify-content-end">
            <form action="{{ route('AnnuaireTelephonique.update', $checkAnnuaireTelephonique->id) }}" method="post"
                enctype="multipart/form-data">
                <div class="">
                    @method('PUT')
                    @csrf
                    <div class="row py-2 justify-content-center">
                        <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="QualiteService" type="text"
                                    value="{{ $checkAnnuaireTelephonique->QualiteService }}">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    نوعية الخدمة
                                </label>
                            </div>
                            @error('QualiteService')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="Nomcomplet" type="text" value="{{ $checkAnnuaireTelephonique->Nomcomplet }}">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    الإسم الكامل
                                </label>
                            </div>
                            @error('Nomcomplet')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="NumeroTelephoneFixe" type="text"
                                    value="{{ $checkAnnuaireTelephonique->NumeroTelephoneFixe }}">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    رقم الهاتف الارضي
                                </label>
                            </div>

                            @error('NumeroTelephoneFixe')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="col-5 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="telephonePortable" type="text"
                                    value="{{ $checkAnnuaireTelephonique->telephonePortable }}">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    الهاتف النقال
                                </label>
                            </div>
                            @error('telephonePortable')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-3 my-1">
                            <select class="select form-select " name="TypeUtilisateur"
                                style="font-weight: bold;font-size:18px
                          background: url('/assets/icons/select.svg')10px left center no-repeat !important;
                        background: url('/assets/icons/select.svg')
                        {{ app()->getLocale() === 'ar' ? 'no-repeat 3%' : 'no-repeat 97%' }}  !important;"
                                aria-label="Default select example">
                                <option value="" disabled> {{ __('content.نوع المستخدم') }}</option>
                                @if ($checkAnnuaireTelephonique->TypeUtilisateur == '1')
                                    <option value="1" selected>
                                        {{ __('content.الموكلون') }}
                                    </option>
                                    <option value="2">
                                        {{ __('content.آخر') }}
                                    </option>
                                @else
                                    <option value="2" selected>
                                        {{ __('content.آخر') }}
                                    </option>
                                    <option value="1">
                                        {{ __('content.الموكلون') }}
                                    </option>
                                @endif
                            </select>
                            @error('TypeUtilisateur')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="email" type="email" value="{{ $checkAnnuaireTelephonique->email }}">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    {{ __('content.البريد الالكتروني') }}
                                </label>
                            </div>

                            @error('email')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>




                        <div class="row d-flex justify-content-center py-5">
                            <div class="col-8  ">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="button1 btn w-100 py-2 text-capitalize"
                                            style="">{{ __('content.تعديل') }}</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('AnnuaireTelephonique.index') }}"
                                            class="button2 btn  w-100 py-2 text-capitalize">{{ __('content.إلغاء') }}</a>
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
