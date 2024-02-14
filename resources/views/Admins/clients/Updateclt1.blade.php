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
      <form action="{{route('clients.update',$userCheck->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <input type="hidden" name="selectedForm" value="1">

          <div class="row py-2 justify-content-center">
              <div class="col-10 py-2">
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                         name="nom_Agence" type="text" value='{{$userCheck->nom_Agence}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.اسم الشركة') }}</label>
                </div>

              </div>
              <div class="col-5 py-3">

                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                         name="ICE" type="text" value='{{$userCheck->ICE}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">ICE</label>
                </div>
              </div>
              <div class="col-5 py-3">

                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                         name="RC" type="text" value='{{$userCheck->RC}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">RC</label>
                </div>
              </div>
              <div class="col-5 py-2">

                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                        name="name" type="text"  value='{{$userCheck->name}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الإسم') }}</label>
                </div>

    
              </div>
              <div class="col-5 py-2">

                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                        name="LastName" type="text" value='{{$userCheck->LastName}}'>
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.النسب') }}</label>
                </div>                 
              </div>
          </div>
      <div class="row  justify-content-center py-1">
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
          </div>
          <div class="col-5 py-3">

            <div class="relative">
                <input class="inputcheck input-cal input-base  form-control" id="input"
                    placeholder="" name="Tel_Portable" type="text" value="{{$userCheck->Tel_Portable}}">
                <label id="label-input" class="fw-bold"
                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                    {{ __('content.الهاتف النقال') }}</label>
            </div>

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
              {{-- <input type="text" class="form-control " value='{{$userCheck->status}}'
              placeholder="الحالة"  name="status"> --}}
              <select class="form-select" aria-label="Default select example"   name="status">
                <option selected disabled>{{ __('content.الحالة') }}</option>

                <option selected value="{{$userCheck->status}} ">
                    {{$userCheck->status=='active'? __('content.نشط'): __('content.معلق')}}</option>
                <option value="{{$userCheck->status==='active'? 'hanging':'active'}}">
                    {{$userCheck->status==='active'?  __('content.معلق'): __('content.نشط')}}
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
                        style="font-weight: bold;font-size:18px;width:125px;background: #C09F5E">{{ __('content.تعديل') }}</button>
                    </div>
                    <div class="col-6">
                        <a href="{{route('clients.index')}}" class="btn  w-100 py-2 text-capitalize"
                        style="font-weight: bold;font-size:18px;color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E">{{ __('content.إلغاء') }}</a>
                 
                    </div>
                   
                </div>
                 
              </div>

          </div>

      </div>


  </form>

</div>



@endsection