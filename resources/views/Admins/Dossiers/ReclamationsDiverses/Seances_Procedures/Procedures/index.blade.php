<div class="row py-3 justify-content-between">
    <div class="col-xl-6 col-sm-6">
        <h3 class="fw-bold">{{ __('content.الإجراء المطلوب') }}</h3>
    </div>
    <div class="col-xl-5 col-sm-5 mx-4">
        <div class="row  justify-content-end ">
            <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-5' : 'col-xl-6' }} col-md-8 col-sm-12  rounded-3 "
                style="border:1px solid rgb(213, 212, 212);height:46.5px">
                <a data-toggle="modal" data-target="#addProcedure" class="text-dark text-decoration-none fw-bold">
                    <div class="row d-flex justify-content-between  ">
                        @if (app()->getLocale() === 'ar')
                            <div class="col-xl-9  col-sm-9 mx-2">
                                <div class="row justify-content-center d-flex align-items-center" style="height: 45px">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="fw-bold  text-center" style="font-size:18px;cursor: pointer;">
                                            {{ __('content.إضافة إجراء') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1  col-sm-1">
                                <div class="rounded-3"
                                    style="position: absolute; transform: translateX(28px);background:#C09F5E;height:45.5px;width:46.5px">
                                    <svg class="" style="margin-top:11px;" xmlns="http://www.w3.org/2000/svg"
                                        width="45" height="26" viewBox="0 0 25 25" fill="none">
                                        <path d="M2 11H19" stroke="white" stroke-width="3" stroke-linecap="round" />
                                        <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                            stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                        @else
                            <div class="col-xl-2  col-sm-2">
                                <div class="rounded-3"
                                    style="position: absolute; transform: translateX(-13px);background:#C09F5E;height:45.5px;width:46.5px">
                                    <svg class="" style="margin-top:11px;" xmlns="http://www.w3.org/2000/svg"
                                        width="50" height="26" viewBox="0 0 25 25" fill="none">
                                        <path d="M2 11H19" stroke="white" stroke-width="3" stroke-linecap="round" />
                                        <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                            stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-xl-10  col-sm-10 ">
                                <div class="row justify-content-center d-flex align-items-center" style="height: 45px">
                                    <div class="col-xl-12 col-sm-12 ">
                                        <div class="fw-bold  text-center" style="font-size:18px;cursor: pointer;">
                                            {{ __('content.إضافة إجراء') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif


                    </div>
                </a>
            </div>
        </div>
    </div>



</div>
<div class="table-responsive">
    <table class="table ">
        <thead style="border-bottom:1pt solid #fff">
            <tr class="">
                <th scope="col" class="text-truncate ">{{ __('content.الحالة') }}</th>
                <th scope="col" class="text-truncate ">{{ __('content.الإجراء') }}</th>
                <th scope="col" class="text-truncate ">{{ __('content.المرجع') }}</th>
                <th scope="col" class="text-truncate ">{{ __('content.الأطراف') }}</th>
                <th scope="col" class="text-truncate ">{{ __('content.المحكمة') }}</th>
                <th scope="col" class="text-truncate ">{{ __('content.المحامي') }}</th>
                <th scope="col" class="text-truncate "> {{ __('content.التاريخ') }}</th>
                <th scope="col" class=" text-truncate">{{ __('content.المسؤول عن الإجراء') }}</th>
                <th scope="col" class=" text-truncate">{{ __('content.تاريخ التكليف بالإجراء') }}</th>
                <th scope="col" class="text-truncate "></th>
            </tr>


            @foreach ($procedures as $procedure)
                <tr class="">
                    <td class="{{ app()->getLocale() === 'ar' ? '' : 'px-5' }}">
                        <div class="row justify-content-around">
                            <div class="col-2  ">
                                @if ($procedure->status == 'done')
                                    <label class="procedure{{ $procedure->id }} text-success fw-bold py-1">
                                        {{ __('content.تم') }}
                                    </label>
                                @else
                                    <label
                                        class="procedure{{ $procedure->id }} text-danger fw-bold py-1 text-truncate">
                                        {{ __('content.لم يتم') }}
                                    </label>
                                @endif

                            </div>
                            <div class="col-6 ">
                                <label class="procedure switch border rounded-5 " data-id="{{ $procedure->id }}">
                                    <input type="checkbox" {{ $procedure->status == 'done' ? 'checked' : '' }}>
                                    <div class="slider"></div>
                                    <div class="slider-card">
                                        <div class="slider-card-face slider-card-front"></div>
                                        <div class="slider-card-face slider-card-back"></div>
                                    </div>
                                </label>
                            </div>

                    </td>
                    <td>{{ $procedure->procedure_name }}</td>
                    <td>{{ $procedure->dossier_tr_id }}</td>
                    <td class="text-truncate">{{ $procedure->user1 }} {{ $procedure->user2 }}</td>
                    <td>{{ $procedure->tribunal }}</td>
                    <td class="text-truncate">{{ $procedure->avocat }}</td>
                    <td class="text-truncate">{{ $procedure->date_procedure }}</td>
                    <td>{{ $procedure->resp_remarque }}</td>
                    <td>{{ $procedure->date_responsable }}</td>
                    <td>
                        <div class="dropdown ">
                            <svg class=" dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false" xmlns="http://www.w3.org/2000/svg" width="7"
                                height="20" viewBox="0 0 7 27" fill="none">
                                <path
                                    d="M3.5 7C5.433 7 7 5.433 7 3.5C7 1.567 5.433 0 3.5 0C1.567 0 0 1.567 0 3.5C0 5.433 1.567 7 3.5 7Z"
                                    fill="#CBC5C5" />
                                <path
                                    d="M3.5 17C5.433 17 7 15.433 7 13.5C7 11.567 5.433 10 3.5 10C1.567 10 0 11.567 0 13.5C0 15.433 1.567 17 3.5 17Z"
                                    fill="#CBC5C5" />
                                <path
                                    d="M3.5 27C5.433 27 7 25.433 7 23.5C7 21.567 5.433 20 3.5 20C1.567 20 0 21.567 0 23.5C0 25.433 1.567 27 3.5 27Z"
                                    fill="#CBC5C5" />
                            </svg>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><button class="updateProcedure dropdown-item text-center"
                                        style="font-weight: bold;font-size:18px" data-target="#updateProcedure"
                                        data-toggle="modal"
                                        data-id="{{ $procedure->id }}">{{ __('content.تعديل') }}</button></li>
                                <li>
                                    <button style="font-weight: bold;font-size:18px"
                                        class="deleteProcedure dropdown-item text-center text-danger"
                                        data-toggle="modal" data-target="#deleteProcedure"
                                        data-id="{{ $procedure->id }}">{{ __('content.حذف') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                            <path
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
</div>

@include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Procedures.Modales.Delete')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        console.log('Script is running');
        // Check if script is running

        $(document).on('click', '.updateProcedure', function() {
            var procedure = $(this).attr('data-id');
            console.log('procedure id :', procedure); // Log the selected value

            jQuery.ajax({
                url: "{{ route('find-procedure') }}", // Replace with the correct URL
                type: "get",
                datatype: 'json',
                cache: false,
                data: {
                    procedure: procedure
                },
                success: function(response) {
                    // var seanceData = response.seance;
                    var procedure = response.procedure;

                    $('#idPro').val(procedure.id);
                    $('#procedure_name').val(procedure.procedure_name);
                    $('#date_responsable').val(procedure.date_responsable);
                    $('#resp_remarque').val(procedure.resp_remarque);

                },
                error: function(xhr, status, error) {
                    console.log('xhr.responseText');
                }
            });
        });


    });
</script>
<script>
    $(document).ready(function() {
        console.log('test');
        $(document).on('click', '.deleteProcedure', function() {
            var procedure = $(this).attr('data-id');
            $('#procedure').val(procedure);
            console.log('procedure id :', procedure); // Log the selected value
        });
    })
    $(document).ready(function() {
        var eventProcessed = false;

        $('.procedure').on('click', function(event) {
            if (!eventProcessed) {
                eventProcessed = true;

                var procedure = $(this).attr('data-id');
                console.log('procedure checkbox id:', procedure);

                // Perform AJAX call
                jQuery.ajax({
                    url: "{{ route('switch-status-Pro') }}",
                    type: "get",
                    dataType: 'json',
                    cache: false,
                    data: {
                        procedure: procedure
                    },
                    success: function(response) {
                        if (response.procedure.status == 'done') {
                            var span = document.createElement("span");
                            var translatedTextFait =
                            "{{ __('content.تم') }}"; // Retrieve translated text from Blade template

                            Swal.fire({
                                icon: "success",
                                content: span,
                                title: translatedTextFait,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $('.procedure' + response.procedure.id).html(translatedTextFait)
                                .removeClass(
                                    'text-danger').addClass('text-success');

                        } else {
                            var span = document.createElement("span");
                            var translatedTextNoFait =
                            "{{ __('content.لم يتم') }}"; // Retrieve translated text from Blade template

                            Swal.fire({
                                icon: "error",
                                content: span,
                                title: translatedTextNoFait,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $('.procedure' + response.procedure.id).html(
                                    translatedTextNoFait)
                                .removeClass('text-success').addClass('text-danger');
                        }
                        // console.log(response.procedure);
                    },

                    error: function(xhr, status, error) {
                        console.log('Error:', error);
                    },
                    complete: function() {
                        eventProcessed =
                            false; // Reset the flag after the AJAX call completes
                    }
                });
            }
        });
    });
</script>
