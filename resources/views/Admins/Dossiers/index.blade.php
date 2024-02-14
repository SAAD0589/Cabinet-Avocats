@extends('Admins.components.SideBar')

@section('title', 'Affichage Doc')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }

        .btn {
            background: #fff;
        }

        .btn:hover {
            background-color: #C09F5E;
            color: #fff;
            transition: 0.5s;
        }
 
    </style>
    <div class="container py-5">
        <div class="row ">
            <div class="col-12 d-flex  px-5 py-2">
                <h3 class="py-1 fw-bold text-capitalize">
                    {{ __('content.الملفات') }}
                </h3>
            </div>
            <div class="col-xl-12 ">
                <div class="row ">
                    <div class="col-xl-7 col-md-10 col-sm-12">
                        <p class="" style="font-weight: bold;font-size:20px;color: #8C8D93;">
                            {{ __('content.TextDoc') }}
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-12 ">
                <div class="row ">
                    <div class="col-xl-3 col-md-4   py-2">
                        <a href="{{ route('recuperations.index') }}" class="btn btn-light w-100 py-3 fw-bold rounded-3 border text-capitalize " style="font-size: 18px">
                            {{ __('content.إستعادة') }}</a>
                    </div>
                    <div class="col-xl-3 col-md-4 py-2">
                        <a href="{{ route('assurances.index') }}" class="btn btn-light w-100 py-3 fw-bold rounded-3 border text-capitalize " style="font-size: 18px">
                            {{ __('content.تأمين') }}

                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 py-2">
                        <a href="{{ route('affichageDos') }}" class="text-capitalize btn btn-light w-100 py-3 fw-bold rounded-3 border"
                            style="font-size: 18px">
                            {{ __('content.دعاوى متنوعة') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts

@endsection
