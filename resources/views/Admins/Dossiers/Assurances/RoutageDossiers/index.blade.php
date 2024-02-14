@extends('Admins.components.SideBar')

@section('title', 'Ajoute Avocat')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }

        .select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url("/assets/icons/select.svg")10px left center no-repeat !important;
            background: url("/assets/icons/select.svg") no-repeat 1.5% !important;


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
    <div >
        <div class="container my-5">
            <div class="d-flex justify-content-center my-2 align-items-center" style="height: 120px">
                <div class="col-11 text-center">
                    <h3 class="fw-bold text-center px-5 "
                        style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px' }}">
                        توجيه الملف 
                    </h3>
                    <h4 class="fw-bold text-center px-5 "
                        style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px' }};color: #C09F5E">
                        {{ __('content.تأمين') }}</h4>
                </div>
                <div class="col-1">
                    <a href="{{route('Succes_Assurance',$id)}}">
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
            <form action="{{ route('storeRoutageDossier') }}" method="post">
                @csrf
            <div class="row d-flex justify-content-center my-5">
            

                <input type="hidden" value="{{$id}}" name="id_dossier_Assurance" >

                <div class="col-8 py-3 my-3">
                    <select class="select form-select " name="id_secretary"
                        style="font-weight: bold;font-size:18px" aria-label="Default select example">
                        <option value="" disabled selected>السكرتير (ة)</option>
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    @error('id_secretary')
                            <p class=" text-danger">{{ $message }}</p>
                    @enderror
                   
                </div>
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-xl-6 col-sm-12  ">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn text-light w-100 py-2 text-capitalize" type="submit"
                                    style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">إرسال</button>
                            </div>
                            <div class="col-6">
                                <a href="{{route('Succes_Assurance',$id)}}" class="btn  w-100 py-2 text-capitalize"
                                    onclick="display()"
                                    style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.رجوع') }}</a>
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
