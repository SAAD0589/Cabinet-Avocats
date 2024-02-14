@extends('Admins.components.SideBar')

@section('title', 'Ajoute Report')


@section('content')
    <style>
        h3 {
            font-size: 3rem;
        }
    </style>
    <div class="container ">
        <div class="d-flex justify-content-between my-1 align-items-center" style="height: 120px">
            <div class=" w-100">
                <h3 class="fw-bold text-center px-5 " style="margin-right:90px "> إضافة طلب تنفيذي</h3>
            </div>
            <div class="">
                <a href="{{ route('implementations.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="50" viewBox="0 0 64 68" fill="none">
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
            <form action="{{ route('implementations.store') }}" method="post" enctype="multipart/form-data">
                <div class="">
                    @csrf
                    <div class="row py-2 justify-content-center">
                        <div class="col-5 py-2">
                            <input type="date" class="form-control" dir="rtl" placeholder="تاريخ وضع الطلب"
                                name="date_R" style="font-weight: bold;font-size:18px">
                            @error('date_R')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2">
                            <input type="text" class="form-control " dir="rtl" placeholder="رقم الملف التنفيذي"
                                name="folder_implentaire_num" style="font-weight: bold;font-size:18px">
                            @error('folder_implentaire_num')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 ">
                            <div class="row">
                                <h5 class="fw-bold ">نوع الموكل</h5>
                                <div class="col-4   py-2">
                                     <input type="radio" id="type_clt1" value="clt1" name="type_clt">
                                    <label style="font-weight: bold;font-size:18px">شخص معنوي</label>
                                   
                                </div>
                                <div class="col-4   py-2">
                                    <input type="radio" id="type_clt2" value="clt2" name="type_clt">
                                    <label style="font-weight: bold;font-size:18px">شخص ذاتي</label>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-5 ">
                            <select class="form-select" aria-label="Default select example" id="id_clt"
                                style="font-weight: bold;font-size:18px" name="dossier_id" dir="rtl">
                                <option selected>مرجع الملف</option>

                            </select>
                        </div>
                        <div class="col-5 py-2">
                            <input type="text" class="form-control " dir="rtl" placeholder="اسم المنفذ"
                                name="implementation_num" style="font-weight: bold;font-size:18px">
                            @error('implementation_num')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-5 py-2">
                            <input type="text" class="form-control " dir="rtl" placeholder="الإجراء المطلوب "
                                name="procedure" style="font-weight: bold;font-size:18px">
                            @error('procedure')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-5 ">
                            <div class="row">
                                <h5 class="fw-bold">تحديد الملف</h5>
                                 <div class="col-4   py-2">
                                    <input type="radio" name='type_dossier' value="appellate">
                                    <label style="font-weight: bold;font-size:18px"> استئنافي</label>
                                    
                                </div>
                                <div class="col-4   py-2">
                                    <input type="radio" name='type_dossier' value="primary">
                                    <label style="font-weight: bold;font-size:18px">إبتدائي </label>
                                    
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-5 py-2 ">
                            <input type="text" class="form-control " dir="rtl" placeholder="رقم الملف"
                                name="trib_reference" style="font-weight: bold;font-size:18px">
                            @error('trib_reference')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="row d-flex justify-content-center py-5">
                            <div class="col-8  ">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn text-light w-100 py-2"
                                            style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">إضافة</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('reports.index') }}" class="btn w-100 py-2"
                                            style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">إلغاء</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            console.log('hola');

            $(document).on('input', '#type_clt1', function() {
                var type_client = $(this).val()
                console.log('typeclt:', type_client);
                jQuery.ajax({
                    url: "{{ route('get-usersFormReport') }}", // Replace with the correct URL
                    type: "get",
                    datatype: 'json',
                    cache: false,
                    data: {
                        type_client: type_client
                    },
                    success: function(triblinaldossier) {
                        console.log(triblinaldossier);
                        var select = $('#id_clt');
                        select.empty();
                        jQuery.each(triblinaldossier, function(index, item) {
                            select.append('<option value="' + item.id + '">' + item
                                .type_nom + ' / ' + item.reference + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log('xhr.responseText');
                    }
                });
            })
            $(document).on('input', '#type_clt2', function() {
                var type_client = $(this).val();
                jQuery.ajax({
                    url: "{{ route('get-usersFormReport') }}", // Replace with the correct URL
                    type: "get",
                    datatype: 'json',
                    cache: false,
                    data: {
                        type_client: type_client
                    },
                    success: function(triblinaldossier) {
                        console.log(triblinaldossier);
                        var select = $('#id_clt');
                        select.empty();
                        jQuery.each(triblinaldossier, function(index, item) {
                            select.append('<option value="' + item.id + '">' + item
                                .type_nom + ' / ' + item.reference + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log('xhr.responseText');
                    }
                });

            });
        })
    </script>

@endsection
