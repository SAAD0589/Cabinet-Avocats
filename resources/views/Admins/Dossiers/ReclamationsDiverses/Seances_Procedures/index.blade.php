@extends('Admins.components.SideBar')

@section('title', 'Affichage Remarque')


@section('content')
    <style>
        h3 {
            font-size: 3rem;
        }

        .switch {
            --circle-dim: 1.1em;
            font-size: 17px;
            position: relative;
            display: inline-block;
            width: 3.5em;
            height: 1.7em;
        }

        /* Hide default HTML checkbox */

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            transition: .4s;
            border-radius: 30px;
        }

        .slider-card {
            position: absolute;
            content: "";
            height: var(--circle-dim);
            width: var(--circle-dim);
            border-radius: 20px;
            left: 0.3em;
            bottom: 0.3em;
            transition: .4s;
            pointer-events: none;
        }

        .slider-card-face {
            position: absolute;
            inset: 0;
            backface-visibility: hidden;
            perspective: 1000px;
            border-radius: 50%;
            transition: .4s transform;
        }

        .slider-card-front {
            background-color: #DC3535;
        }

        .slider-card-back {
            background-color: #379237;
            transform: rotateY(180deg);
        }

        input:checked~.slider-card .slider-card-back {
            transform: rotateY(0);
        }

        input:checked~.slider-card .slider-card-front {
            transform: rotateY(-180deg);
        }

        input:checked~.slider-card {
            transform: translateX(1.5em);
        }

        input:checked~.slider {
            background-color: #fff;
        }

    </style>
    <div class="container py-5">
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Seances.index')
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Seances.Modales.Seances.add')
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Seances.Modales.Attachments.index')
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Seances.Modales.Seances.Update')
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Seances.Modales.Attachments.Update')
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Seances.Modales.Seances.Delete')
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Seances.Modales.Attachments.Delete')
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Procedures.Modales.add')
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Procedures.Modales.Update')
        <hr class="hr">
        @include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Procedures.index')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            console.log('Script is running');
            // Check if script is running

            $(document).on('click', '.attachment', function() {
                var attachment = $(this).attr('data-id');
                $('#attachmentInput').val(attachment);

                console.log('seance id:', attachment); // Log the selected value

                jQuery.ajax({
                    url: "{{ route('get-seans') }}", // Replace with the correct URL
                    type: "get",
                    datatype: 'html',
                    cache: false,
                    data: {
                        attachment: attachment
                    },
                    success: function(response) {
                        var tbody = $('#tbody');
                        // var Update={{ __('content.تعديل') }};
                        // var Delete={{ __('content.حذف') }};
                        tbody.empty();
                        jQuery.each(response, function(index, attachment) {
                            console.log('attachment :',
                                attachment); // Log the selected value
                            var drowpDown = `<div class="dropdown ">
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
                                        <li><button class="updateAtt dropdown-item Truncate-center text-center" style="font-weight: bold;font-size:18px"
                                              data-id=${attachment.id}
                                              data-toggle="modal" data-target="#updateAtt"
                                               data-dismiss="modal" aria-label="Close"
                                          >{{ __('content.تعديل') }}</button></li>
                                        <li><button style="font-weight: bold;font-size:18px"
                                                class="DeleteAtt dropdown-item text-center text-danger" data-toggle="modal"
                                                data-target="#DeleteAtt" data-dismiss="modal" aria-label="Close"
                                                data-id=${attachment.id}>{{ __('content.حذف') }}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                </svg>
                                            </button></li>
                                    </ul>
                                </div>`




                            tbody.append(`<tr>
                            <td>${attachment.created_at}</td><td>${attachment.name}</td>
                            <td class='text-truncate' style="max-width: 1px">
                                <a href='{{ asset('${attachment.file_att}') }}'
                                 class='text-success' target='_blank'>
                                 <svg class='px-1' xmlns="http://www.w3.org/2000/svg" width="23" height="29" viewBox="0 0 22 29" fill="none">
                                        <path d="M19.6108 7.07949L15.8364 2.94133C14.4032 1.37201 12.4987 0.507812 10.4739 0.507812H5.58268C2.59593 0.507813 0.166016 3.17044 0.166016 6.44322V23.0624C0.166016 26.3351 2.59593 28.9978 5.58268 28.9978H16.416C19.4028 28.9978 21.8327 26.3351 21.8327 23.0624V12.9544C21.8327 10.7333 21.0429 8.64881 19.6108 7.07949ZM18.0789 8.75921C18.4234 9.13552 18.7148 9.55456 18.951 10.0056H14.2483C13.6503 10.0056 13.1649 9.47265 13.1649 8.81857V3.66426C13.5766 3.92304 13.959 4.24237 14.3035 4.61986L18.0779 8.75803L18.0789 8.75921ZM19.666 23.0635C19.666 25.027 18.2078 26.6248 16.416 26.6248H5.58268C3.79085 26.6248 2.33268 25.027 2.33268 23.0635V6.44322C2.33268 4.47979 3.79085 2.88197 5.58268 2.88197H10.4739C10.6505 2.88197 10.826 2.89147 10.9993 2.90928V8.81738C10.9993 10.7808 12.4575 12.3786 14.2493 12.3786H19.6411C19.6573 12.5686 19.666 12.7609 19.666 12.9544V23.0635ZM15.0153 19.6269C15.4388 20.0899 15.4388 20.8413 15.0153 21.3055L13.2678 23.2214C12.6428 23.9064 11.8205 24.2494 10.9993 24.2494C10.1782 24.2494 9.35593 23.9064 8.73085 23.2214L6.98343 21.3055C6.55985 20.8413 6.55985 20.0899 6.98343 19.6269C7.40702 19.1628 8.09168 19.1628 8.51527 19.6269L9.91602 21.1618V15.9411C9.91602 15.2858 10.4003 14.754 10.9993 14.754C11.5984 14.754 12.0827 15.2858 12.0827 15.9411V21.1618L13.4834 19.6269C13.907 19.1628 14.5917 19.1628 15.0153 19.6269Z" fill="#CBC5C5"/>
                                </svg>
                                 ${attachment.file_att}</a></td>
                            <td><div>${drowpDown}</div></td></tr>`)
                        });

                        // 

                    },
                    error: function(xhr, status, error) {
                        console.log('xhr.responseText');
                    }
                });
            });

        });

        $(document).ready(function() {
            console.log('Script is running');
            // Check if script is running

            $(document).on('click', '.updateAtt', function() {
                var attachment = $(this).attr('data-id');
                $('#attachmentInput').val(attachment);

                console.log('attachment id:', attachment);
                jQuery.ajax({
                    url: "{{ route('find-att') }}", // Replace with the correct URL
                    type: "get",
                    datatype: 'html',
                    cache: false,
                    data: {
                        attachment: attachment
                    },
                    success: function(response) {
                        var attachment = response.attachment;
                        console.log(attachment.id);
                        $('.id_att').val(attachment.id);
                        $('.type_att').val(attachment.type_att);
                        $('.file_att').text(attachment.file_att);
                        $('.name').val(attachment.name);


                    },
                    error: function(xhr, status, error) {
                        console.log('xhr.responseText');
                    }
                });
            });

        });


        $(document).ready(function() {
            console.log('yow');
            // Check if script is running

            $(document).on('click', '.DeleteSeance', function() {
                var seance = $(this).attr('data-id');
                $('#inputDelete').val(seance);

                console.log('seance delete id:', seance);

            });
            $(document).on('click', '.DeleteAtt', function() {
                var attid = $(this).attr('data-id');
                $('#idatt').val(attid);

                console.log('seance delete id:', attid);

            });
            $(document).ready(function() {
                var eventProcessed = false;

                $(document).on('click', '.seance', function(event) {
                    if (!eventProcessed) {
                        eventProcessed = true;

                        var seanceid = $(this).attr('data-id');
                        console.log('seanceid checkbox id:', seanceid);

                        // Perform AJAX call
                        jQuery.ajax({
                            url: "{{ route('switch-status') }}",
                            type: "get",
                            dataType: 'json',
                            cache: false,
                            data: {
                                seanceid: seanceid
                            },
                            success: function(response) {
                                var ElemntFait = "{{ __('content.تمت') }}";
                                var ElemntNoFait = "{{ __('content.رائجة') }}";
                                var Status = "{{ __('content.الحالة') }}";
                                if (response.seance.status == 'fait') {


                                    var span = document.createElement("span");
                                    $('.seance' + response.seance.id).html(ElemntFait)
                                        .removeClass('text-danger').addClass(
                                            'text-success');
                                    Swal.fire({
                                        icon: "success",
                                        content: span,
                                        title: Status + ' ' + ElemntFait,
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                } else {
                                    var span = document.createElement("span");
                                    Swal.fire({
                                        icon: "error",
                                        content: span,
                                        title: Status + ' ' + ElemntNoFait,
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    $('.seance' + response.seance.id).html(ElemntNoFait)
                                        .removeClass('text-success').addClass(
                                            'text-danger');
                                }
                                console.log(response.seance.status);
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



        });
    </script>
    {{-- <script>
         $(document).ready(function() {
        $(document).on('click', '#updateSeance', function() {
            var seance = $(this).attr('data-id');
            console.log('Selected seance:', seance);

            $('#seanceInput').val(seance);
        });

        // Submit the form when any element with ID 'submitForm' is clicked
        $('#submitForm').click(function() {
            $('#attachmentForm').submit();
        });
    });
     </script> --}}

    <script>
        $(document).ready(function() {
            console.log('Script is running');
            // Check if script is running

            $(document).on('click', '.updateSeance', function() {
                var seance = $(this).attr('data-id');
                console.log('yest :', seance); // Log the selected value

                jQuery.ajax({
                    url: "{{ route('find-seans') }}", // Replace with the correct URL
                    type: "get",
                    datatype: 'html',
                    cache: false,
                    data: {
                        seance: seance
                    },
                    success: function(response) {
                        var seanceData = response.seance;
                        var dossiersData = response.dossiers;

                        $('.seanceInput').val(seanceData.id);
                        $('.Avocat').val(seanceData.Avocat);
                        $('.Date_Seance').val(seanceData.Date_Seance);
                        $('.action').val(seanceData.Action);
                        $('.action1').val(seanceData.Action1);
                        $('.avocat2').val(seanceData.avocat2);
                        $('.juge').val(seanceData.juge);
                        $('.comment').val(seanceData.comment);
                        if (dossiersData.isArchive == 1) {
                            $('.archive').prop('checked',
                                true); // Sets the radio button checked
                        } else {
                            $('.archive').prop('checked', false); // Unchecks the radio button
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('xhr.responseText');
                    }
                });
            });

        });
    </script>

    {{-- <script>
  $(document).ready(function () {
    console.log('Script is running');
    
    $('#idSeance').each(function () {
        var seanceId = $(this).data('id');
        console.log('Seance ID:', seanceId);

        $.ajax({
            url: "{{ route('fetch-att') }}",
            type: "GET",
            dataType: 'json',
            cache: false,
            data: { seanceId: seanceId },
            success: function (response) {
                var valAtt = $('#valAtt');
                console.log('Response:', response);
                $.each(response.seanceIds, function(index, value) {
                    if(value.total>0){
                        valAtt.append('<label>'+value.total+'</label>');
                    }else{
                        valAtt.append('<label>'+value.total+'</label>');
                    }
                    // console.log('Seance ID:', value.seance_id, 'Total:', value.total);
                    });
               
                // Process the data as needed
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
});

</script> --}}



    <script>
        ///Ajax For get Text Procedure Truncate
        $(document).ready(function() {
            $(document).on('click', '.truncateText', function() {
                var idReport = $(this).attr('data-id');
                // console.log(idReport);
                $('.textTruncate').html(idReport);

            })
        })
    </script>
@endsection
