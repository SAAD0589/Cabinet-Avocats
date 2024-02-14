@extends('Admins.components.SideBar')

@section('title', 'Ajoute dossier')


@section('content')
    <style>
        h3 {
            font-size: 3rem;
        }

        .TitleDoc {
            color: #C09F5E;
        }
    </style>
    <form action="{{ route('UpdateForm1', $dossier->id) }}" method="post" id="FormOne" class="my-4">
        @csrf

        <div>
            <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
                <input type="hidden" name="selectedForm" value="0">
                <div class="col-11 text-center">
                    <h3 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">{{ __('content.تعديل مسطرة') }}</h3>
                    <h4 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                        {{ __('content.دعاوى متنوعة') }}</h4>
                    <div class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="13" viewBox="0 0 36 13"
                            fill="none">
                            <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E" />
                            <circle cx="29.5" cy="6.5" r="6.5" fill="#D9D9D9" />
                        </svg>
                    </div>
                </div>
                <div class="col-1 ">
                    <a href="{{ route('affichageDos') }}">
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


            <div class="row d-flex ">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-xl-6 col-sm-12 ">
                            <p class="fw-bold ">{{ __('content.:نوع الموكل') }}</p>
                            <div class="col-12   fw-bold p-2">

                                <input type="radio" {{ $usercheck->type_clt == 'clt2' ? 'checked' : '' }} name="type_clt"
                                    value="clt2" id="type_clt1">
                                <label class="p-2">{{ __('content.شخص ذاتي') }} </label>
                                <input type="radio" value="clt1" id="type_clt1" name="type_clt"
                                    {{ $usercheck->type_clt == 'clt1' ? 'checked' : '' }}>
                                <label class="p-2">{{ __('content.شخص معنوي') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-5 py-2">
                        <select class="form-select" aria-label="Default select example"
                            style="font-weight: bold;font-size:18px" name='id_clt' id="id_clt">
                            <option>{{ __('content.الموكل') }}</option>
                            @if (!empty($usercheck->name))
                                <option value="{{ $usercheck->id }}" selected>{{ $usercheck->name }}</option>
                            @endif

                            @foreach ($usersClt2 as $item)
                                @if ($usercheck->id != $item->id)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('id_clt')
                            <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 py-2">

                        <div class="relative">
                            <input class="inputcheck input-cal input-base  form-control" value="{{ $dossier->reference }}"
                                id="input" placeholder="" type="text" name='reference'>
                            <label id="label-input" class="fw-bold"
                                style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المرجع') }}</label>
                        </div>


                        @error('reference')
                            <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 py-2">
                        <input type="date" class="form-control" placeholder="تاريخ استلام الملف"
                            style="font-weight: bold;font-size:18px" name='date_ref' value="{{ $dossier->date_ref }}">
                        @error('date_ref')
                            <p class="text-end text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="col-5 py-2">

                        <select style="font-weight: bold;font-size:18px" class="form-select" name='couleur'>
                            <option value="" style="font-weight: bold;font-size:18px">{{ __('content.لون الملف') }}
                            </option>
                            <option value="{{ $dossier->couleur }}" selected>
                                @if ($dossier->couleur == 'admin')
                                    {{ __('content.الأزرق') }}
                                @elseif ($dossier->couleur == 'comme')
                                    {{ __('content.الأخضر') }}
                                @elseif ($dossier->couleur == 'penal')
                                    {{ __('content.الأحمر') }}
                                @elseif ($dossier->couleur == 'civil')
                                    {{ __('content.الأصفر') }}
                                @endif

                            </option>
                            @if ($dossier->couleur != 'admin')
                                <option value="admin" style="font-weight: bold;font-size:18px">{{ __('content.الأزرق') }}
                                </option>
                            @endif
                            @if ($dossier->couleur != 'comme')
                                <option value="comme" style="font-weight: bold;font-size:18px">{{ __('content.الأخضر') }}
                                </option>
                            @endif
                            @if ($dossier->couleur != 'penal')
                                <option value="penal" style="font-weight: bold;font-size:18px">{{ __('content.الأحمر') }}
                                </option>
                            @endif
                            @if ($dossier->couleur != 'civil')
                                <option value="civil" style="font-weight: bold;font-size:18px">{{ __('content.الأصفر') }}
                                </option>
                            @endif

                        </select>
                        @error('couleur')
                            <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 py-2">
                        <select class="form-select" aria-label="Default select example" name="id_avocat"
                            style="font-weight: bold;font-size:18px">
                            <option>{{ __('content.المحامي') }}</option>
                            @foreach ($avocats as $item)
                                <option @if ($dossier->id_avocat == $item->id) selected @endif value="{{ $item->id }}">
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('id_avocat')
                            <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 py-2">

                        <div class="relative">
                            <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                type="text" name="id_clt_enmy">
                            <label id="label-input" class="fw-bold"
                                style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الخصم') }}</label>
                        </div>

                        @error('id_clt_enmy')
                            <p class="text-end text-danger">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="col-10">
                        <p class="fw-bold">{{ __('content.خاص بالطرف الخصم :') }}</p>
                    </div>
                    <div class="col-5 py-2">
                        <div class="relative">
                            <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                type="text" name="avocat_enmy">
                            <label id="label-input" class="fw-bold"
                                style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المحامي') }}</label>
                        </div>
                        @error('avocat_enmy')
                            <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 py-2">

                        <div class="relative">
                            <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                type="text" name="adr_clt_enmy">
                            <label id="label-input" class="fw-bold"
                                style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.العنوان') }}</label>
                        </div>

                       

                    </div>


                    <div class="row d-flex justify-content-center py-5">
                        <div class="col-8  ">
                            <div class="row">

                                <div class="col-6">
                                    <button type="button" class="btn text-light w-100 py-2 text-capitalize"
                                        onclick="hide()"
                                        style="width:125px;background: #C09F5E;font-weight: bold;
                            font-size:18px">{{ __('content.التالي') }}</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn  w-100 py-2 text-capitalize" type="submit"
                                        style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.تعديل') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </form>
    <div style="display: none" id="FormTwo">
        @include('Admins.Dossiers.Add_Update.Forms')
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
    <script>
        var shome1 = document.getElementById('shome1');
        var shome2 = document.getElementById('shome2');
        var shome3 = document.getElementById('shome3');

        var btn1 = document.getElementById('btn1');
        var btn2 = document.getElementById('btn2');
        var btn3 = document.getElementById('btn3');
        var btn4 = document.getElementById('btn4');

        function classDisp() {
            shome1.style.display = "";
            shome2.style.display = "";
            shome3.style.display = "";

        }

        function classhide() {
            shome1.style.display = "none";
            shome2.style.display = "none";
            shome3.style.display = "none";

        }

        function showSection(sectionId) {
            // Hide all sections
            document.getElementById('primary').style.display = 'none';


            document.getElementById('apel').style.display = 'none';
            document.getElementById('cas').style.display = 'none';
            document.getElementById('comment').style.display = 'none';

            // Show the selected section
            document.getElementById(sectionId).style.display = '';

        }

        function primary() {
            // Add any logic you need for the "primary" button click
            // For example, you can call the showSection function to display the relevant section
            showSection('primary');
            document.getElementById('btn1').style.backgroundColor = '#C09F5E';
            document.getElementById('btn1').style.color = '#fff';

            document.getElementById('btn2').style.backgroundColor = '#fff';
            document.getElementById('btn2').style.color = '#C09F5E';
            document.getElementById('btn3').style.backgroundColor = '#fff';
            document.getElementById('btn3').style.color = '#C09F5E';
            document.getElementById('btn4').style.backgroundColor = '#fff';
            document.getElementById('btn4').style.color = '#C09F5E';
        }

        function apel() {
            // Add any logic you need for the "apel" button click
            showSection('apel');
            document.getElementById('btn2').style.backgroundColor = '#C09F5E';
            document.getElementById('btn2').style.color = '#fff';

            document.getElementById('btn1').style.backgroundColor = '#fff';
            document.getElementById('btn1').style.color = '#C09F5E';
            document.getElementById('btn3').style.backgroundColor = '#fff';
            document.getElementById('btn3').style.color = '#C09F5E';
            document.getElementById('btn4').style.backgroundColor = '#fff';
            document.getElementById('btn4').style.color = '#C09F5E';


        }

        function cas() {
            // Add any logic you need for the "cas" button click
            showSection('cas');
            document.getElementById('btn3').style.backgroundColor = '#C09F5E';
            document.getElementById('btn3').style.color = '#fff';

            document.getElementById('btn1').style.backgroundColor = '#fff';
            document.getElementById('btn1').style.color = '#C09F5E';
            document.getElementById('btn2').style.backgroundColor = '#fff';
            document.getElementById('btn2').style.color = '#C09F5E';
            document.getElementById('btn4').style.backgroundColor = '#fff';
            document.getElementById('btn4').style.color = '#C09F5E';
        }

        function comment() {
            // Add any logic you need for the "comment" button click
            showSection('comment');
            document.getElementById('btn4').style.backgroundColor = '#C09F5E';
            document.getElementById('btn4').style.color = '#fff';

            document.getElementById('btn1').style.backgroundColor = '#fff';
            document.getElementById('btn1').style.color = '#C09F5E';
            document.getElementById('btn2').style.backgroundColor = '#fff';
            document.getElementById('btn2').style.color = '#C09F5E';
            document.getElementById('btn3').style.backgroundColor = '#fff';
            document.getElementById('btn3').style.color = '#C09F5E';
        }
    </script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            console.log('Script is running'); // Check if script is running

            $(document).on('input', '#type_clt1', function() {
                var type_client = $(this).val();
                console.log('Selected value:', type_client); // Log the selected value

                jQuery.ajax({
                    url: "{{ route('get-users') }}", // Replace with the correct URL
                    type: "get",
                    datatype: 'html',
                    cache: false,
                    data: {
                        type_client: type_client
                    },
                    success: function(response) {
                        var select = $('#id_clt');
                        select.empty();
                        jQuery.each(response, function(index, user) {
                            select.append('<option value="' + user.id + '">' + user
                                .name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log('xhr.responseText');
                    }
                });
            });
            $(document).on('input', '#type_clt2', function() {
                var type_client = $(this).val();
                console.log('Selected value:', type_client); // Log the selected value

                jQuery.ajax({
                    url: "{{ route('get-users') }}", // Replace with the correct URL
                    type: "get",
                    datatype: 'html',
                    cache: false,
                    data: {
                        type_client: type_client
                    },
                    success: function(response) {
                        var select = $('#id_clt');
                        select.empty();
                        jQuery.each(response, function(index, user) {
                            select.append('<option value="' + user.id + '">' + user
                                .name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log('xhr.responseText');
                    }
                });
            });
        });
    </script>
@endsection
