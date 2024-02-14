@extends('Admins.components.SideBar')

@section('title', 'Affichage Dossier')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }
    </style>
    <div class="container  py-5 ">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-sm-10  ">
                <h3 class=" fw-bold"> {{ __('content.الملفات') }}</h3>
            </div>
            <div class="col-xl-1 col-sm-1">
                <a href="{{ route('dossier.index') }}">
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
            <div class=" {{ app()->getLocale() === 'ar' ? 'col-xl-8 col-sm-8' : 'col-xl-8 col-sm-7' }}  px-5 my-3">
                <div class="row justify-content-between ">
                    <div class="col-xl-10 col-sm-12 ">
                        <h2 class=" fw-bold">
                            {{ __('content.إستعادة') }}
                        </h2>
                        <p class=" " style="font-weight: bold;font-size:20px;color: #8C8D93;">
                            {{ __('content.TextDoc') }}</p>
                    </div>
                </div>
            </div>
            
                <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-4 col-sm-4 ' : 'col-xl-4 col-sm-5' }} my-5 ">
                  <div class="row justify-content-end">
                  <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-6 col-sm-10 px-3' : 'col-xl-8 col-sm-10' }}    rounded-3 mx-3 "
                    style="border:1px solid rgb(213, 212, 212);height:46.5px">
                    <a href="{{route('Form1')}}" class="text-dark text-decoration-none fw-bold">
                        <div class="row d-flex justify-content-between  ">
                            @if (app()->getLocale() === 'ar')
                                <div class="col-xl-10  col-sm-10 ">
                                    <div class="row justify-content-center d-flex align-items-center" style="height: 45px">
                                        <div class="col-xl-12 col-sm-10">
                                            <div class="fw-bold  text-center" style="font-size:18px;cursor: pointer;">
                                                {{ __('content.إضافة  ملفات') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2  col-sm-2">
                                    <div class=""
                                        style="position: absolute;transform: translateX(13px);background:#C09F5E;
                                        height:45.5px;width:46.5px;border-radius:12px">
                                        <svg style="margin-top:11px;" xmlns="http://www.w3.org/2000/svg" width="45"
                                            height="26" viewBox="0 0 25 25" fill="none">
                                            <path d="M2 11H19" stroke="white" stroke-width="3" stroke-linecap="round" />
                                            <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                                stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                            @else
                                <div class="col-xl-2  col-sm-2">
                                    <div class="rounded-3"
                                        style="position: absolute; 
                    transform: translateX(-13px);background:#C09F5E;height:45.5px;width:46.5px">
                                        <svg style="margin-top:11px;" xmlns="http://www.w3.org/2000/svg" width="50"
                                            height="26" viewBox="0 0 25 25" fill="none">
                                            <path d="M2 11H19" stroke="white" stroke-width="3" stroke-linecap="round" />
                                            <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                                stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-xl-10  col-sm-10 ">
                                    <div class="row justify-content-center d-flex align-items-center" style="height: 45px">
                                        <div class="col-xl-12 col-sm-10">
                                            <div class="fw-bold  text-center" style="font-size:18px;cursor: pointer;">
                                                {{ __('content.إضافة  ملفات') }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endif
    
    
                        </div>
                    </a>
                </div>
                </div>
            </div>
            

            <div class="col-12">
                <livewire:affichage-recuperation />

            </div>



        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @livewireScripts

@endsection
