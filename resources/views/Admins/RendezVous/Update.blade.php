@extends('Admins.components.SideBar')

@section('title', 'Update Rendez Vous')


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
                    تعديل موعد     
                </h3>
            </div>
            <div class="col-1">
                <a href="{{route('RendezVous.index')}}">
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
            <form action="{{ route('RendezVous.update',$rendez_vouses->id) }}" method="post" enctype="multipart/form-data">
                <div class="">
                    @method('PUT')
                    @csrf
                    <div class="row py-2 justify-content-center">
                        <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="TypeRendezVous" type="text" value="{{$rendez_vouses->TypeRendezVous}}">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    نوع الموعد
                                </label>
                            </div>
                            @error('TypeRendezVous')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="DateHeure" type="datetime-local"  value="{{$rendez_vouses->DateHeure}}">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    التاريخ
                                </label>
                            </div>
                            @error('DateHeure')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2">

                            <select class="select form-select " name="status"
                                style="font-weight: bold;font-size:18px
                              background: url('/assets/icons/select.svg')10px left center no-repeat !important;
                            background: url('/assets/icons/select.svg')
                            {{ app()->getLocale() === 'ar' ? 'no-repeat 3%' : 'no-repeat 97%' }}  !important;"
                                aria-label="Default select example">
                                <option value="" disabled >الصفة</option>
                                <option {{$rendez_vouses->status=='avocat'? 'selected': ''}}
                                 value="{{$rendez_vouses->status=='avocat'? 'avocat': 'secretary'}}">
                                    {{$rendez_vouses->status=='avocat'? 'محامي': 'سكرتار'}}
                                </option>
                                <option {{$rendez_vouses->status!='secretary'? 'selected': ''}}
                                 value="{{$rendez_vouses->status!='secretary'? 'secretary': 'avocat'}}">
                                    {{$rendez_vouses->status!='secretary'? 'سكرتار': 'محامي'}}
                                </option>
                            </select>
                            @error('status')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="col-5 py-2">
                            <select class="select form-select " name="id_avocat"
                                style="font-weight: bold;font-size:18px 
                            background: url('/assets/icons/select.svg')10px left center no-repeat !important;
                            background: url('/assets/icons/select.svg')
                            {{ app()->getLocale() === 'ar' ? 'no-repeat 3%' : 'no-repeat 97%' }}  !important;"
                                aria-label="Default select example">
                                <option value="" disabled selected>الأستاذ</option>
                                @foreach ($avocats as $avocat)
                                    <option @if ($avocat->id == $rendez_vouses->id_avocat ) selected @endif  value="{{ $avocat->id }}">
                                        {{ $avocat->name }}
                                    </option>
                                @endforeach

                            </select>
                            @error('id_avocat')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-4 my-1">
                            <div class="col-12  fw-bold ">
                                <div class="row justify-content-center">
                                    <div class="col-xl-5 col-sm-6">
                                        <input {{$usercheck->type_clt=='clt1'? 'checked': ''}} type="radio"  name="type_clt" id="input1" value="clt1">
                                        <label class="fw-bold">شخص معنوي</label>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <input {{$usercheck->type_clt!='clt1'? 'checked': ''}} type="radio" name="type_clt" id="input2" value="clt2">
                                        <label class="fw-bold">شخص ذاتي<label>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-5 py-3">

                            <select class="select form-select " name="id_clt" id="id_clt"
                                style="font-weight: bold;font-size:18px
                              background: url('/assets/icons/select.svg')10px left center no-repeat !important;
                            background: url('/assets/icons/select.svg')
                            {{ app()->getLocale() === 'ar' ? 'no-repeat 3%' : 'no-repeat 97%' }}  !important;"
                                aria-label="Default select example">
                                <option value="" disabled >الموكل</option>
                                {{-- <option value="{{$usercheck->id}}" selected>{{$usercheck->name}}</option> --}}
                                @foreach ($users as $user)
                                <option @if ($user->id == $usercheck->id ) selected @endif  value="{{ $user->id }}">
                                    {{ $user->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('id_clt')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="col-5 py-2 ">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="AutrePersonne" type="text"  value="{{$rendez_vouses->AutrePersonne}}">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    شخص اخر
                                </label>
                            </div>
                            @error('AutrePersonne')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2">

                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                    name="commentaires" type="text"  value="{{$rendez_vouses->commentaires}}">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    ملاحظات
                                </label>
                            </div>
                            @error('commentaires')
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
                                        <a href="{{route('RendezVous.index')}}"
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
