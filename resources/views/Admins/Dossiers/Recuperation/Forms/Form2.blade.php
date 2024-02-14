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
    background: url("/assets/icons/select.svg")  no-repeat 97%!important;
    height: 100px;


}



    </style>

    {{-- Update Form One  --}}
    @include('Admins.Dossiers.Recuperation.Updates.Form1')


    {{-- Display Form Two For Add Data --}}
    <div style="display: none" id="FormTwo">
        <div class="container my-5" id="FormOne">
            <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px" >
                <div class="col-11 text-center">
                    <h3 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                        {{ __('content.إضافة ملف') }}
                    </h3>
                    <h4 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}};color: #C09F5E">{{ __('content.إستعادة') }}</h4>
                    <div class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="13" viewBox="0 0 82 13" fill="none">
                            <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E"/>
                            <circle cx="29.5" cy="6.5" r="6.5" fill="#C09F5E"/>
                            <circle cx="52.5" cy="6.5" r="6.5" fill="#D9D9D9"/>
                            <circle cx="75.5" cy="6.5" r="6.5" fill="#D9D9D9"/>
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
        
            <div class="row d-flex justify-content-end my-5" >
                <form action="{{ route('store2',$recuperationcheck->id) }}" method="post" enctype="multipart/form-data" >
                    <div class="">
                        @csrf
                        <div class="row py-2 justify-content-center">
                          
                           <div class="col-xl-5 col-sm-6 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                                name="name_Rec" type="text" style="font-weight: bold;font-size:18px">
                                <label id="label-input" class="fw-bold" style="font-weight: bold;font-size:18px;
                                {{app()->getLocale() === 'ar'? 'right: 10px' :'left: 10px' }}" >{{ __('content.اسم صاحب الائتمان') }}</label>
                            </div>

                            
                            {{-- <input type="text" placeholder="اسم صاحب الائتمان"  name="name_Rec"
                            class="form-control" > --}}
                            @error('name_Rec')
                                    <p class=" text-danger">{{ $message }}</p>
                            @enderror
                           </div>
                           <div class="col-xl-5 col-sm-6 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" name="num_Rec" type="text">
                                <label id="label-input" class="fw-bold" style="font-weight: bold;font-size:18px;{{app()->getLocale() === 'ar'? 'right: 10px' :'left: 10px' }}">{{ __('content.رقم عقد الائتمان') }}</label>
                            </div>


                            {{-- <input type="text" placeholder="رقم عقد الائتمان"  name="num_Rec"
                            class="form-control" style="font-weight: bold;font-size:18px"> --}}
                            @error('num_Rec')
                                    <p class=" text-danger">{{ $message }}</p>
                            @enderror
                           </div>
        
                           <div class="col-xl-5 col-sm-6 py-2">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" name="adr_Rec" type="text">
                                <label id="label-input" class="fw-bold" style="font-weight: bold;font-size:18px;{{app()->getLocale() === 'ar'? 'right: 10px' :'left: 10px' }}">{{ __('content.العنوان الوارد في العقد') }}</label>
                            </div>


                            {{-- <input type="text" placeholder="العنوان الوارد في العقد" name="adr_Rec"
                             class="form-control" style="font-weight: bold;font-size:18px"> --}}
                             @error('adr_Rec')
                             <p class=" text-danger">{{ $message }}</p>
                             @enderror
                           </div>
                            <div class="col-xl-5 col-sm-6 py-2">
                                <select class=" form-select custom-select " name="id_ville" 
                                    style="font-weight: bold;font-size:18px;" aria-label="Default select example">
                                    <option value="" disabled selected >{{ __('content.مدينة') }}</option>
                                    @foreach ($villes as $ville)
                                        <option  value="{{$ville->id}}" class="text-dark inputcheck">
                                            {{ __('region.'.$ville->ville_nom) }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_ville')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xl-5 col-sm-6 py-3">
                                <select class=" form-select" name="id_trib" style="font-weight: bold;font-size:18px"
                                    aria-label="Default select example">
                                    <option value="" disabled selected>{{ __('content.المحكمة المختصة') }}</option>
                                    @foreach ($tribunals as $tribunal)
                                        <option value="{{$tribunal->id}}">{{$tribunal->trib_nom}}</option>
                                    @endforeach
                                </select>
                                @error('id_trib')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-xl-5 col-sm-6 py-3">
                                <select class=" form-select" name="id_userOffice" style="font-weight: bold;font-size:18px"
                                    aria-label="Default select example">
                                    <option disabled selected value="" >{{ __('content.موظفي المكتب') }}</option>
                                    @foreach ($secretarys as $secretarys)
                                        <option class="inputcheck" value="{{$secretarys->id}}">{{$secretarys->name}}</option>
                                    @endforeach
                                </select>
                                @error('id_userOffice')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row d-flex justify-content-center py-5">
                                <div class="col-xl-8 col-sm-12  ">
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn text-light w-100 py-2 text-capitalize" type="submit"
                                                style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إضافة') }}</button>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" class="btn  w-100 py-2 text-capitalize" onclick="display()"
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
        const selectElement = document.getElementsByClassName('mySelect');

selectElement.addEventListener('change', function() {
  if (this.classList.contains('mySelectBoxShadow')) {
    this.classList.remove('mySelectBoxShadow');
  } else {
    this.classList.add('mySelectBoxShadow');
  }
});
    </script>

    @livewireScripts


@endsection
