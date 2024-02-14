@extends('Admins.components.SideBar')

@section('title','Update Client')
 

@section('content')
<style>
    h3{
        font-size: 3rem;
        font-weight: bold;
    }
</style>
<div class="row">
    <div class="col-12 py-4">
      <h3 class="text-center py-2 align-self-center">{{ __('content.تعديل موكل') }}</h3>
    </div>
        <form action="{{route('clients.update',$userCheck->id)}}" method="post" >
            @csrf
            @method('PUT')
            <input type="hidden" name="selectedForm" value="0">
        <div class="row  justify-content-center">

                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="name" type="text"  value='{{$userCheck->name}}'>
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الإسم') }}</label>
                    </div>
                </div>
                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="LastName" type="text" value='{{$userCheck->LastName}}'>
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.النسب') }}</label>
                    </div>
                </div>

                <div class="col-5 py-2">
                    <div class="input-group"  id="Cin">

                        <input type="text" id="checkCIN" class="form-control rounded-1 custom-file-input"
                            style="font-weight: bold; font-size: 18px" placeholder="CIN" name="cin" value="{{$userCheck->cin}}">
                        <input type="file" id="cin" class="d-none" >
                        <div class="input-group-append " onclick="handleFileSelection('checkCIN', 'cin')">
                            <img  src="{{ asset(
                                app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                                   srcset="" style="cursor: pointer">
                        </div>
                    </div>



                    {{-- <input type="text" class="form-control "  placeholder="CIN"
                     name="cin" value="{{$userCheck->cin}}"> --}}
                     @error('cin')
                     <p class="text-end text-danger">{{ $message }}</p>
                     @enderror
                </div>
                <div class="col-5 py-2">

                    <div class="input-group">

                        <input type="text" id="checkPassport" class="form-control rounded-1 custom-file-input"
                            style="font-weight: bold; font-size: 18px" placeholder="Passport" name="passport" value="{{$userCheck->passport}}">
                        <input type="file" id="passport" class="d-none">
                        <div class="input-group-append " onclick="handleFileSelection('checkPassport', 'passport')">
                            <img  src="{{ asset(
                                app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                                   srcset="" style="cursor: pointer">
                        </div>
                    </div>
                

                    {{-- <input type="text" class="form-control "  placeholder="Passport" 
                    name="passport" value="{{$userCheck->passport}}"> --}}
                    @error('passport')
                    <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        <div class="row  justify-content-center py-2">
            <div class="col-10 py-1">
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input"
                        placeholder="" name="email" type="email"  value='{{$userCheck->email}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تأكيد الرقم السري') }}</label>
                </div>
            </div>
            <div class="col-5 py-3">
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input"
                        placeholder="" name="Tel_Fix" type="text" value='{{$userCheck->Tel_Fix}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الهاتف الثابت') }}</label>
                </div>
                    @error('Tel_Fix')
                    <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
            </div>
            <div class="col-5 py-3">
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input"
                        placeholder="" name="Tel_Portable" type="text" value="{{$userCheck->Tel_Portable}}">
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                        {{ __('content.الهاتف النقال') }}</label>
                </div>
                    @error('Tel_Portable')
                    <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
            </div>
            <div class="col-5 py-2">
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input"
                        placeholder="" name="Fax" type="text" value='{{$userCheck->Fax}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                        {{ __('content.الفاكس') }}</label>
                </div>
            </div>
            <div class="col-5 py-2">
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input"
                        placeholder="" name="Tel_Fix" type="text"  value='{{$userCheck->Tel_Portable_2}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                        {{ __('content.الهاتف  2') }}</label>
                </div>
            </div>
            <div class="col-5 py-2">
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input"
                        placeholder="" name="city" type="text" value='{{$userCheck->city}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المدينة') }}</label>
                </div>
            </div>
            <div class="col-5 py-2">
                {{-- <input type="text" class="form-control " placeholder="الحالة"  
                name="status" value="{{$userCheck->status}}"> --}}

                <select class="form-select" aria-label="Default select example"   name="status">
                    <option selected disabled>{{ __('content.الحالة') }}</option>

                    <option selected value="{{$userCheck->status}} ">
                        {{$userCheck->status=='active'? __('content.نشط') : __('content.معلق') }}</option>
                    <option value="{{$userCheck->status==='active'? 'hanging':'active'}}">
                        {{$userCheck->status==='active'?  __('content.معلق') : __('content.نشط') }}
                    </option>
                  </select>
            </div>
            <div class="col-10 py-2">
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input"
                        placeholder="" name="Adr" type="text" value='{{$userCheck->Adr}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.العنوان') }}</label>
                </div>
            </div>
            <div class="col-10 py-2">
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input"
                        placeholder="" name="" type="text" value='{{$userCheck->Adr2}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.العنوان 2') }}</label>
                </div>
            </div>
            <div class="col-10 py-3">
                <div class="relative">
                    <textarea class="inputcheck input-cal input-base  form-control" id="input" 
                    placeholder="" name="comment">{{$userCheck->comment}}</textarea>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.ملاحظات') }}</label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                            style="width:125px;background: #C09F5E;;font-weight: bold;font-size:18px">{{ __('content.تعديل') }}</button>
                        </div>
                        <div class="col-6">
                            <a href="/clients" class="btn w-100 py-2 text-capitalize"
                            style="font-weight: bold;font-size:18px;color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E">{{ __('content.إلغاء') }}</a>
                        </div>
                     
                    </div>
                  
                    
                </div>

            </div>

        </div>


    </form>

</div>
<script type="text/javascript">
    function handleFileSelection(inputFieldId, fileInputId) {
        let inputField = document.getElementById(inputFieldId);
        let fileInput = document.getElementById(fileInputId);

        fileInput.click(); // Trigger file input click

        fileInput.addEventListener('change', function() {
            if (fileInput.files.length > 0) {
                // Set the value of the input field to the selected file name
                inputField.value = fileInput.files[0].name;
                inputField.setAttribute('readonly', true); // Set as readonly
            }
        });
    }
</script>


@endsection