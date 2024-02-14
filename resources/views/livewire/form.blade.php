<div>
    <style>
        input[type='radio']:after {
            width: 15px;
            height: 15px;
            border-radius: 15px;
            top: -2px;
            left: -1px;
            position: relative;
            background-color: #d1d3d1;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 2px solid white;
        }

        input[type='radio']:checked:after {
            width: 15px;
            height: 15px;
            border-radius: 15px;
            top: -2px;
            left: -1px;
            position: relative;
            background-color: #C09F5E;
            content: '';
            display: inline-block;
            visibility: visible;
            border: 2px solid rgb(227, 226, 226);
        }
    </style>
        <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
    <div class="">
        <div class="row d-flex  my-2 ">

            <div class="col-xl-5  col-sm-8 ">
                <label class=" m-2 mx-4"  style="font-weight: bold;font-size:20px">نوع الموكل :</label>

                <input type="radio" class="mx-1" wire:click="Form1"  checked value="clt1"
                    name="type_clt" value="clt1">
                <label class="mx-1" for="form1"  style="font-weight: bold;font-size:18px">شخص معنوي</label>
                <input class="mx-1" type="radio" wire:click="Form2" value="clt2"
                    name="type_clt">
                <label for="form2"  style="font-weight: bold;font-size:18px">شخص ذاتي</label>
            </div>



        </div>
    </div>

        @csrf
        @if ($type_clt)
            <div class="row py-2 justify-content-center">
                <input type="hidden" name="selectedForm" value="1">
                
                <div class="col-10">
                    <input type="text" class="form-control " dir="rtl" placeholder="اسم الشركة" style="font-weight: bold;font-size:18px"
                        name="nom_Agence" value="{{old('nom_Agence')}}" >
                        
        @error('nom_Agence') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control fw-bold" dir="rtl"  style="font-size:18px"
                    placeholder="ICE" name="ICE">
                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control fw-bold" dir="rtl" placeholder="RC" name="RC">
                </div>
                <div class="col-5 ">
                    <input type="text" class="form-control " dir="rtl" placeholder="نسب الممثل" name="LastName" style="font-weight: bold;font-size:18px">
                </div>
                <div class="col-5 ">
                    <input type="text" class="form-control " dir="rtl" placeholder="إسم الممثل" name="name" style="font-weight: bold;font-size:18px">
                </div>

            </div>
            <!-- Add your Form 1 HTML content here -->
        @elseif (!$type_clt)
            <!-- Form 2 content -->
            <div class="row  justify-content-center">
                <input type="hidden" name="selectedForm" value="0">

                <div class="col-5 py-2">
                    <input type="text" class="form-control " dir="rtl" style="font-weight: bold;font-size:18px" placeholder="النسب" name="LastName">
                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control " dir="rtl"  style="font-weight: bold;font-size:18px"placeholder="الإسم" name="name">
                </div>

                <div class="col-5 py-2">
                    
                    <div class="input-group">
                        <div class="input-group-append">
                            <svg style="cursor: pointer" xmlns="http://www.w3.org/2000/svg" width="47" height="40"
                                viewBox="0 0 74 64" fill="none">
                                <path d="M0 10C0 4.47715 4.47715 0 10 0H74V64H10C4.47715 64 0 59.5228 0 54V10Z" fill="#D6DFEF" />
                                <path
                                    d="M35.4075 27.0465L38.0896 24.3635L38.0832 38.5147C38.0832 39.021 38.4936 39.4314 38.9998 39.4314C39.5061 39.4314 39.9165 39.021 39.9165 38.5147L39.9229 24.3791L42.5922 27.0493C42.9564 27.401 43.5366 27.3909 43.8883 27.0267C44.2314 26.6715 44.2314 26.1083 43.8883 25.7531L40.945 22.8061C39.8714 21.7318 38.1302 21.7312 37.0559 22.8048C37.0555 22.8053 37.0551 22.8057 37.0547 22.8061L34.1113 25.7504C33.7596 26.1145 33.7697 26.6948 34.1338 27.0465C34.4891 27.3896 35.0522 27.3896 35.4075 27.0465Z"
                                    fill="#9CB2D8" />
                                <path
                                    d="M49.0829 36.667C48.5767 36.667 48.1663 37.0774 48.1663 37.5836V41.2502C48.1663 41.7565 47.7559 42.1669 47.2497 42.1669H30.7499C30.2437 42.1669 29.8333 41.7565 29.8333 41.2502V37.5836C29.8333 37.0774 29.4229 36.667 28.9166 36.667C28.4104 36.667 28 37.0774 28 37.5836V41.2502C28 42.769 29.2312 44.0002 30.75 44.0002H47.2497C48.7684 44.0002 49.9997 42.769 49.9997 41.2502V37.5836C49.9996 37.0774 49.5892 36.667 49.0829 36.667Z"
                                    fill="#9CB2D8" />
                            </svg>
                        </div>
                        <input type="text" id="secret_keys" class="form-control rounded-1 custom-file-input" dir="rtl"
                        style="font-weight: bold; font-size: 18px" placeholder="CIN" name="cin">
                        <input type="file" id="input_file" class="d-none">
            
                    </div>
            


                    
                    {{-- <input type="text" class="form-control " > --}}
                </div>
                <div class="col-5 py-2">
                    <input type="text" class="form-control " dir="rtl"  style="font-weight: bold;font-size:18px"placeholder="Passport" name="passport">
                </div>
            </div>
            <!-- Add your Form 2 HTML content here -->
        @endif
        <div class="row  justify-content-center">
            <div class="col-10 py-2">
                {{-- <input type="file" class="form-control "
                
                > --}}
                <div class="input-group">
                    
                    <input type="text" id="secret_key" class="form-control rounded-1" dir="rtl"  placeholder="إضافة صورة"
                        aria-label="Recipient's username" aria-describedby="basic-addon2"
                        style="font-weight: bold;font-size:18px" name="images">
                    <input type="file" name="" id="input_file" hidden />
                    <div class="input-group-append" onclick="open_file()">
                        <svg style="cursor: pointer" xmlns="http://www.w3.org/2000/svg" width="46" height="40"
                            viewBox="0 0 74 64" fill="none">
                            <path d="M0 10C0 4.47715 4.47715 0 10 0H74V64H10C4.47715 64 0 59.5228 0 54V10Z" fill="#D6DFEF" />
                            <path
                                d="M35.4075 27.0465L38.0896 24.3635L38.0832 38.5147C38.0832 39.021 38.4936 39.4314 38.9998 39.4314C39.5061 39.4314 39.9165 39.021 39.9165 38.5147L39.9229 24.3791L42.5922 27.0493C42.9564 27.401 43.5366 27.3909 43.8883 27.0267C44.2314 26.6715 44.2314 26.1083 43.8883 25.7531L40.945 22.8061C39.8714 21.7318 38.1302 21.7312 37.0559 22.8048C37.0555 22.8053 37.0551 22.8057 37.0547 22.8061L34.1113 25.7504C33.7596 26.1145 33.7697 26.6948 34.1338 27.0465C34.4891 27.3896 35.0522 27.3896 35.4075 27.0465Z"
                                fill="#9CB2D8" />
                            <path
                                d="M49.0829 36.667C48.5767 36.667 48.1663 37.0774 48.1663 37.5836V41.2502C48.1663 41.7565 47.7559 42.1669 47.2497 42.1669H30.7499C30.2437 42.1669 29.8333 41.7565 29.8333 41.2502V37.5836C29.8333 37.0774 29.4229 36.667 28.9166 36.667C28.4104 36.667 28 37.0774 28 37.5836V41.2502C28 42.769 29.2312 44.0002 30.75 44.0002H47.2497C48.7684 44.0002 49.9997 42.769 49.9997 41.2502V37.5836C49.9996 37.0774 49.5892 36.667 49.0829 36.667Z"
                                fill="#9CB2D8" />
                        </svg>
                    </div>
        
                </div>
                
            </div>
            <div class="col-10">
                <input type="text" class="form-control " dir="rtl" placeholder="البريد الإلكتروني"
                    name="email" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-10 py-2">
                <input type="text" class="form-control " dir="rtl" placeholder="تأكيد البريد الإلكتروني"
                    name="conf_email" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-5 ">
                <input type="password" class="form-control " dir="rtl" placeholder="تأكيد الرقم السري"
                    name="password" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-5 ">
                <input type="password" class="form-control " dir="rtl" placeholder="الرقم السري"
                    name="conf_password" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-5 py-2">
                <input type="text" class="form-control " dir="rtl" placeholder="الهاتف الثابت"
                    name="Tel_Fix" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-5 py-2">
                <input type="text" class="form-control " dir="rtl" placeholder="الهاتف النقال"
                    name="Tel_Portable" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-5 ">
                <input type="text" class="form-control " placeholder="الفاكس" dir="rtl" name="Fax" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-5 ">
                <input type="text" class="form-control " placeholder="الهاتف  2 " dir="rtl" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-5 py-2">
                <input type="text" class="form-control " placeholder="المدينة" dir="rtl" name="city" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-5 py-2">
                {{-- <input type="text" class="form-control " placeholder="الحالة" dir="rtl" name="status"> --}}
            
                <select class="form-select" aria-label="Default select example" dir="rtl"  
                name="status" style="font-weight: bold;font-size:18px">
                    <option selected>الحالة</option>
                    <option value="active">نشط</option>
                    <option value="hanging">معلق</option>
                  </select>
            </div>
            
            <div class="col-10 py-2">
                <input type="text" class="form-control " dir="rtl" placeholder="العنوان" name="Adr" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-10 py-2">
                <input type="text" class="form-control " dir="rtl" placeholder="العنوان 2" style="font-weight: bold;font-size:18px">
            </div>
            <div class="col-10 py-2">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" dir="rtl" placeholder="ملاحظات"
                    name="comment" style="font-weight: bold;font-size:18px"></textarea>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn text-light fw-bold  w-100 py-2"
                            style="width:125px;background: #C09F5E;">إضافة</button>
                        </div>
                        <div class="col-6">
                            <a href="{{route('clients.index')}}" class="btn fw-bold  w-100 py-2"
                        style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E">إلغاء</a>
                        </div>
                       
                    </div>
                    
                  
                </div>

            </div>

        </div>


    </form>
    @if ($errors->any()){
        <div class="alert alert-danger" role="alert">
            <strong>Errors</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        }

    @endif
</div>
<script type="text/javascript">
    function open_file() {
        let secret_key = document.getElementById("secret_key");
        let input_file = document.getElementById("input_file");

        input_file.click(); // Trigger file input click

        input_file.addEventListener('change', function() {
            if (input_file.files.length > 0) {
                // Set the value of the secret_key input to the selected file name
                secret_key.value = input_file.files[0].name;
                secret_key.setAttribute('readonly', true); // Set as readonly

            }
        });
    }
</script>