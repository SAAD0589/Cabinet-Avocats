@extends('Admins.components.SideBar')

@section('title', 'Ajoute Avocat')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }
        
    </style>
    <div class="container my-5">
        <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
            <div class="col-11 text-center ">
                <h3 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                    {{ __('content.إضافة ملف') }}
                </h3>
                <h4  class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}};color: #C09F5E">{{ __('content.إستعادة') }}</h4>
                <div  class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="13" viewBox="0 0 82 13" fill="none">
                        <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E" />
                        <circle cx="29.5" cy="6.5" r="6.5" fill="#D9D9D9" />
                        <circle cx="52.5" cy="6.5" r="6.5" fill="#D9D9D9" />
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
            <form action="{{ route('store1') }}" method="post" enctype="multipart/form-data">
                <div class="">
                    @csrf
                    <div class="row py-2 justify-content-center">
                        <div class="{{app()->getLocale() === 'ar' ? 'col-5': 'col-xl-5 col-sm-6'}}">
                            <h4 class="fw-bold">{{ __('content.:نوع الموكل') }}</h4>
                            <div class="row ">
                                <div class="col-xl-4 p-2 col-sm-6">
                                    <input type="radio" name="type_clt" id="input1" value="clt1">
                                    <label for="" class="fw-bold">{{ __('content.شخص معنوي') }}</label>
                                </div>
                                <div class="col-xl-4 p-2 col-sm-6">
                                    <input type="radio" name="type_clt" id="input2" value="clt2">
                                    <label for="" class="fw-bold">{{ __('content.شخص ذاتي') }}</label>
                                </div>
                            </div>


                        </div>
                        <div class=" {{app()->getLocale() === 'ar' ? 'col-5': 'col-xl-5 col-sm-6'}} ">
                            <h4 class="fw-bold">{{ __('content.نوع الملف :') }}</h4>
                            <div class="row">
                                <div class=" {{app()->getLocale() === 'ar' ? 'col-xl-4 col-sm-6': 'col-xl-5 col-sm-7'}} p-2">
                                    <input type="radio" name="id_type_dossier" id="" value="5">
                                    <label for="" class="fw-bold">{{ __('content.استرجاع السيارة') }}</label>
                                </div>
                                <div class="  {{app()->getLocale() === 'ar' ? 'col-xl-4 col-sm-6': 'col-xl-5 col-sm-5'}} p-2">
                                    <input type="radio" name="id_type_dossier" id="" value="5">
                                    <label for="" class="fw-bold">{{ __('content.قرض شخصي') }}</label>
                                </div>
                            </div>


                        </div>

                        <div class="col-xl-5 col-sm-6 py-2">
                            <select class="input form-select" name="id_clt" id="id_clt"
                                style="font-weight: bold;font-size:18px" aria-label="Default select example">
                                <option selected value="">{{ __('content.الموكل') }}</option>
                            </select>
                            @error('id_clt')
                                <p class=" text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-xl-5 col-sm-6 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                 type="text" name='reference' readonly>
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المرجع') }}</label>
                            </div>

                            {{-- <select class="form-select" name="dossier_id" readonly
                                style="font-weight: bold;font-size:18px" aria-label="Default select example">
                                <option selected value="" disabled>{{ __('content.المرجع') }}</option>
                            </select> --}}
                            {{-- <input type="text" class="input form-control" placeholder="المرجع" dir="rtl"
                                name="dossier_id"> --}}
                            @error('dossier_id')
                                <p class=" text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-xl-5 col-sm-6 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control"  id="input" placeholder="" name="enmy" type="text">
                                <label id="label-input" class="fw-bold" 
                                style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الخصم') }}</label>
                            </div>
                            @error('enmy')
                            <p class=" text-danger">{{ $message }}</p>
                            @enderror
                            {{-- <div class="group">
                                <input type="text" class="form-control" placeholder="الخصم" name="enmy">
                               
                            </div> --}}


                        </div>
                        <div class="col-xl-5 col-sm-6 py-2">
                            <input type="date" id="form12" class="form-control" name="date_Rec" />
                            @error('date_Rec')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>






                        <div class="row d-flex justify-content-center py-5">
                            <div class="col-xl-8  col-sm-12">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                                            style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إضافة') }}</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{route('recuperations.index')}}" class="btn  w-100 py-2 text-capitalize"
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

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            console.log('One Test');
            $(document).on('input', '#input1', function() {
                var type_client = $(this).val();
                console.log('Selected value:', type_client); // Log the selected value
                jQuery.ajax({
                    url: "{{ route('get-users_Doc') }}", // Replace with the correct URL
                    type: "get",
                    datatype: 'json',
                    cache: false,
                    data: {
                        type_client: type_client
                    },
                    success: function(response) {
                        var select = $('#id_clt');
                        select.empty();
                        jQuery.each(response, function(index, users) {
                            select.append('<option value="' + users.id + '">' + users
                                .name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log('xhr.responseText');
                    }
                });

            })
            $(document).on('input', '#input2', function() {
                var type_client = $(this).val();
                console.log('Selected value:', type_client); // Log the selected value
                jQuery.ajax({
                    url: "{{ route('get-users_Doc') }}", // Replace with the correct URL
                    type: "get",
                    datatype: 'json',
                    cache: false,
                    data: {
                        type_client: type_client
                    },
                    success: function(response) {
                        var select = $('#id_clt');
                        select.empty();
                        jQuery.each(response, function(index, users) {
                            select.append('<option value="' + users.id + '">' + users
                                .name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log('xhr.responseText');
                    }
                });

            })
        })
    </script>

    @livewireScripts


@endsection
