@extends('Admins.components.SideBar')

@section('title', 'Ajoute Avocat')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }
    </style>

    {{-- Update Form One  --}}
    @include('Admins.Dossiers.Recuperation.Updates.Form2')


    {{-- Display Form Two For Add Data --}}
    <div style="display: none" id="FormTwo">
        <div class="container my-5" id="FormOne">
            <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
                <div class="col-11 text-center">
                    <h3 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                        {{ __('content.إضافة ملف') }}
                    </h3>
                    <h4 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}};color: #C09F5E">{{ __('content.إستعادة') }}</h4>
                    <div class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="13" viewBox="0 0 82 13"
                            fill="none">
                            <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E" />
                            <circle cx="29.5" cy="6.5" r="6.5" fill="#C09F5E" />
                            <circle cx="52.5" cy="6.5" r="6.5" fill="#C09F5E" />
                            <circle cx="75.5" cy="6.5" r="6.5" fill="#D9D9D9" />
                        </svg>
                    </div>

                </div>
                <div class="col-1">
                    <a href="{{ route('recuperations.index') }}">
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

            <div class="row d-flex justify-content-end my-3">
                <form action="{{ route('store3', $recuperationcheck->id) }}" method="post" enctype="multipart/form-data">
                    <div class="">
                        @csrf
                        @include('Admins.Dossiers.Recuperation.Forms.Folders')
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- <script src="{{ asset('assets/js/Files.js') }}"></script> --}}
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


    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    @livewireScripts


@endsection
