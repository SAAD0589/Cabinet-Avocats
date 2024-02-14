@extends('Admins.components.SideBar')

@section('title', 'Ajoute dossier')


@section('content')
<style>
    h3 {
        font-size: 3rem;
    }
</style>
<div>

    <div class="row justify-content-start my-1" style="height: 120px">

        <div class="col-4 align-self-center ">
            <a href="">
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
        <div class=" col-4 align-self-center">
            <h3 class="text-center fw-bold"> إضافة مسطرة</h3>
            <h4 class="text-center " style="color: #C09F5E">دعاوى متنوعة</h4>
            <div class="text-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="13" viewBox="0 0 36 13"
                    fill="none">
                    <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E" />
                    <circle cx="29.5" cy="6.5" r="6.5" fill="#C09F5E" />
                </svg>
            </div>
        </div>

    </div>

    <div class="row justify-content-center  align-items-center py-5" style="height: 80px">
        <div class="col-2 ">
            <button class="btn btn-light fw-bold w-100 border" style="background: #fff;color:#C09F5E;" id="btn4"
                onclick="comment()" type="button">ملاحظة</button>
        </div>
        <div class="col-2">
            <button class="btn btn-light fw-bold w-100 border" id="btn3" onclick="cas()" type="button"
                style="background: #fff;color:#C09F5E;">محكمة النقض </button>
        </div>
        <div class="col-2">
            <button class="btn btn-light fw-bold w-100 border" id='btn2' onclick="apel()" type="button"
                style="background: #fff;color:#C09F5E;">محكمة الإستئناف</button>
        </div>
        <div class="col-2">
            <button class="btn btn-light fw-bold w-100 border" id='btn1' style="background: #C09F5E;color:#fff;"
                onclick="primary()" type="button">المحكمة الإبتدائية </button>
        </div>
    </div>

    <div class="row">
        <form action="" method="post">
            @csrf
            @method('PUT')

            <div class="row justify-content-center py-5" id="primary">
                <input type="hidden" name="selectedForm" value="1">

                <div class="col-5 py-2">

                    <select class="form-select" name="e1_trib" id="tribunal" aria-label="Default select example"
                        placeholder="محكمة" dir="rtl" style="font-weight: bold;font-size:18px">
                        <option value="">محكمة</option>
                    </select>
                    @error('e1_trib')
                    <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-2">
                    <select class="form-select" id='villes' name="e1_ville" aria-label="Default select example"
                        placeholder="المدينة" dir="rtl" style="font-weight: bold;font-size:18px">
                        <option value="">المدينة</option>
                        @foreach ($villes as $item)
                            <option value="{{ $item->id }}">{{ __('msg.' . $item->ville_nom) }}</option>
                        @endforeach
                    </select>
                    @error('e1_ville')
                    <p class="text-end text-danger">{{  __('err.' . $message) }}</p>
                    @enderror
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="e1_reference_trib" placeholder="رقم الملف"dir="rtl"
                        style="font-weight: bold;font-size:18px">
                        @error('e1_reference_trib')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="e1_type_dossier" placeholder="نوع القضية"
                        dir="rtl" style="font-weight: bold;font-size:18px">
                        @error('e1_type_dossier')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-5 py-2">

                    <select class="form-select" aria-label="Default select example" name="e1_sale_nim"
                        placeholder="القاعة" dir="rtl" style="font-weight: bold;font-size:18px">
                        <option value="">القاعة</option>
                        @for ($i = 1; $i <= 50; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @error('e1_sale_nim')
                    <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control" name="juge" placeholder="القاضي"
                     dir="rtl"
                        style="font-weight: bold;font-size:18px">
                        @error('juge')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div class="col-5">
                    <input type="hidden" class="form-control">
                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control" name="e1_heure"
                     placeholder="الساعة" dir="rtl" value="{{ old('e1_heure') }}"
                        style="font-weight: bold;font-size:18px">
                        @error('e1_heure')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                       
                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control" name="e1_jugement_num" placeholder="رقم الحكم"
                        dir="rtl" style="font-weight: bold;font-size:18px">
                        @error('e1_jugement_num')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control" name="e1_date_jugement" placeholder="تاريخ الحكم"
                        dir="rtl" style="font-weight: bold;font-size:18px">
                        @error('e1_date_jugement')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control" name="e1_prejudice" placeholder="حكم تمهيدي"
                        dir="rtl" style="font-weight: bold;font-size:18px">
                        @error('e1_prejudice')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control" name="e1_jugement" placeholder="المنطوق"
                        dir="rtl" style="font-weight: bold;font-size:18px">
                        @error('e1_jugement')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div class="col-5 py-2" id="shome2">
                    <input type="text" class="form-control" name="e1_decision" placeholder="المنطوق "dir="rtl"
                        style="font-weight: bold;font-size:18px">
                </div>

                <div class="col-5">
                    <div class="row ">
                        <div class="col-12">
                            <p class="text-end fw-bold">:ملف في الغرفة الاستئنافية </p>
                        </div>
                        <div class="col-11  fw-bold text-end ">
                            <label for="" class="px-3 py-1">نعم</label>
                            <input type="radio"  onclick="classDisp()" checked value="yes"
                                name="check" value="yes">
                            <label for="" class="px-2 py-1">لا</label>
                            <input type="radio"  onclick="classhide()" 
                                value="Formhidd" name="check" >
                        </div>
                    </div>
                </div>

                <div class="col-5" id="shome1">
                    <input type="text" class="form-control" name="e1_date_dec" placeholder="تاريخ القرار"
                        dir="rtl" style="font-weight: bold;font-size:18px">
                </div>
                <div class="col-5" id="shome3">
                    <input type="text" class="form-control" name="e1_descsentes" placeholder="رقم القرار"
                        dir="rtl" style="font-weight: bold;font-size:18px">
                </div>

                <div class="row d-flex justify-content-center py-5">
                    <div class="col-8  ">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn  w-100 py-2" onclick="display()" type="button"
                                    style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">رجوع</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn text-light w-100 py-2"
                                    style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">إضافة</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>

        <form action="" method="post">
            @csrf
            @method('PUT')
        <div class="row justify-content-center py-5 " id="apel" style="display: none">
            <div class="col-5 py-2">
                <input type="hidden" name="selectedForm" value="2">

                <input type="text" class="form-control" placeholder="رقم الملف" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e2_refereence_cour">
                    @error('e2_refereence_cour')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
                    
            </div>
            <div class="col-5 py-2">
                <input type="text" class="form-control" placeholder="محكمة الاستئناف" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e2_cours_apel">
                    @error('e2_cours_apel')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5 ">
                <input type="text" class="form-control" placeholder="القاعة" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e2_salle">
                    @error('e2_salle')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="القاضي" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e2_migistrat">
                    @error('e2_migistrat')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5 py-2">
                <input type="text" class="form-control" placeholder="المنطوق" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e2_dec">
                    @error('e2_dec')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5 py-2">
                <input type="text" class="form-control" placeholder="الساعة" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e2_heure">
                    @error('e2_heure')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="تاريخ القرار" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e2_date_dec">
                    @error('e2_date_dec')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="رقم القرار" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e2_sent_num">
                    @error('e2_sent_num')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5 py-2">
                <div class="row">
                    <div class="col-12 fw-bold text-end py-2 px-4">
                        <label for="">جنائي إستئنافي</label>
                        <input type="radio" name="criminal" value="appellate">
                        <label for="">جنائي إبتدائي</label>
                        <input type="radio" name="criminal" value="primary">
                    </div>
                </div>
            </div>
            <div class="col-5 py-2" >
                <input type="text" class="form-control" placeholder="قرار تمهيدي" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e2_txt_dec">
                    @error('e2_txt_dec')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror

            </div>
            <div class="row d-flex justify-content-center py-5">
                <div class="col-8  ">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn  w-100 py-2" onclick="display()" type="button"
                                style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">رجوع</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn text-light w-100 py-2"
                                style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">إضافة</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>



        <form action="" method="post">
            @csrf
            @method('PUT')
        <div class="row justify-content-center py-5" id="cas" style="display: none">
            <div class="col-5 py-2">
                <input type="hidden" name="selectedForm" value="3">
                <input type="text" class="form-control" placeholder=" المنطوق" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e3_sent_num">
                    @error('e3_sent_num')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5 py-2">
                <input type="text" class="form-control" placeholder="رقم الملف" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e3_reference">
                    @error('e3_reference')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5 py-2">
                <input type="text" class="form-control" placeholder=" القاضي" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e3_migistrat">
                    @error('e3_migistrat')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="col-5 py-2">
                <input type="text" class="form-control" placeholder=" تاريخ القرار" dir="rtl"
                    style="font-weight: bold;font-size:18px" name="e3_date_sent">
                    @error('e3_date_sent')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="row d-flex justify-content-center py-5">
                <div class="col-8  ">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn  w-100 py-2" onclick="display()" type="button"
                                style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">رجوع</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn text-light w-100 py-2"
                                style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">إضافة</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>


        <form action="" method="post">
            @csrf
            @method('PUT')
        <div class="row py-5" id="comment" style="display: none">
            <input type="hidden" name="selectedForm" value="4">
            <div class="col-11">
                <textarea name="observation" cols="30" rows="10" dir="rtl"
                    style="font-weight: bold;font-size:18px" class="form-control"
                     placeholder="ملاحظة"></textarea>
                     @error('observation')
                        <p class="text-end text-danger">{{ $message }}</p>
                        @enderror
            </div>
            <div class="row d-flex justify-content-center py-5">
                <div class="col-8  ">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn  w-100 py-2" onclick="display()" type="button"
                                style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">رجوع</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn text-light w-100 py-2"
                                style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">إضافة</button>
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
        console.log('Script is running'); // Check if script is running

        $(document).on('change', '#villes', function() {
            var tribunal = $(this).val();
            console.log('Selected value:', tribunal); // Log the selected value

            jQuery.ajax({
                url: "{{ route('get-ville') }}", // Replace with the correct URL
                type: "get",
                datatype: 'html',
                cache: false,
                data: {
                    tribunal: tribunal
                },
                success: function(response) {
                    var select = $('#tribunal');
                    select.empty();
                    jQuery.each(response, function(index, tribunal) {
                        select.append('<option value="' + tribunal.id + '">' +
                            tribunal.trib_nom + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.log('xhr.responseText');
                }
            });
        });

    });
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


@endsection