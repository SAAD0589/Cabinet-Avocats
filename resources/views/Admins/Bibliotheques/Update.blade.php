@extends('Admins.components.SideBar')

@section('title','Update Bibliotheque')
 

@section('content')
<style>
    h3{
        font-size: 3rem;
        font-weight: bold;
    }
    .inputcheck:not(:placeholder-shown){
    box-shadow: 0 0 0 0px #e8e8e8, 0 0 0 2px #C09F5E;
    background: #FFFFFF;
}
</style>
<div class="container">
    <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
        <div class="col-11 text-center ">
        <h3 class="fw-bold text-center px-5 "
        style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px' }}">
            {{ __('content.تعديل ملف كتابة') }}
        </h3>
        </div>
    <div class="col-1">
        <a href="{{ route('bibliotheques.index') }}">
            <svg style="{{ app()->getLocale() === 'ar' ? '' : 'rotate:180deg;' }}" xmlns="http://www.w3.org/2000/svg" width="80" height="50" viewBox="0 0 64 68" fill="none">
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
        <form action="{{route('bibliotheques.update',$bibliotheque->id)}}" method="post" >
            @csrf
            @method('PUT')
            {{-- <input type="hidden" name="selectedForm" value="0"> --}}
        <div class="row  justify-content-center">
            <div class="col-5 py-3">
                {{-- <input type="text" class="form-control " dir="rtl" placeholder="مآل الجلس" 
                name="" value="{{$bibliotheque->action}}" readonly style="font-weight: bold;font-size:18px"> --}}
                
                <div class="relative">
                    <input class="inputcheck input-cal input-base  form-control" id="input" readonly placeholder=""
                         name="dossier_tr_id" type="text" value="{{$bibliotheque->action}}">
                    <label id="label-input" class="fw-bold"
                        style="font-weight: bold;font-size:18px;
                        {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                        {{ __('content.مآل الجلسة') }}</label>
                </div>
  
                
            </div>
                <div class="col-5 py-3">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" readonly placeholder=""
                             name="dossier_tr_id" type="text" value="{{$bibliotheque->parties}}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                            {{ __('content.الأطراف') }}</label>
                    </div>

                    {{-- <input type="text" class="form-control " dir="rtl" placeholder="الأطراف"
                     name="" value="{{$bibliotheque->parties}}" readonly 
                      style="font-weight: bold;font-size:18px"> --}}
                </div>
               
                <div class="col-5 py-3">
                    <input type="text" class="datePicker form-control" placeholder="تاريخ الجلسة" 
                    name="" value="{{$bibliotheque->Date_Seance}}" readonly style="font-weight: bold;font-size:18px">
                </div>
                <div class="col-5 py-3">
                    {{-- <input type="text" class="form-control " placeholder="الأستاذ المتمرن المكلف بالكتابة"
                     name="" value="{{$bibliotheque->Avocat}}"  style="font-weight: bold;font-size:18px"> --}}
                    
                     
                     <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" readonly placeholder=""
                             name="dossier_tr_id" type="text" value="{{$bibliotheque->Avocat}}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                            {{ __('content.الأستاذ المتمرن المكلف بالكتابة') }}</label>
                    </div>


                </div>
              
                <div class="col-5 py-2">
                    <input type="date" class="datePicker form-control " dir="rtl" placeholder="تاريخ منح الملف"
                    name="date_insert_dossier" value="{{$bibliotheque->date_insert_dossier}}" style="font-weight: bold;font-size:18px">
                </div>
                <div class="col-5 py-2">
                    <input type="date" class="datePicker form-control " dir="rtl" placeholder="تاريخ إرجاع ملف"
                     name="date_back_dossier" value="{{$bibliotheque->date_insert_dossier}}"  style="font-weight: bold;font-size:18px">
                </div>
            
             
                <div class="col-5 py-4">
                    <div class="row justify-content-center">
                        
                        <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-5 col-sm-5' : 'col-xl-5 col-sm-12' }}">
                            <input type="radio" name="type_clt">
                            <label  style="font-weight: bold;font-size:18px">
                                {{ __('content.شخص معنوي') }}
                            </label>
                        </div>
                        <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-5 col-sm-5' : 'col-xl-5 col-sm-12' }}">
                            <input type="radio" name="type_clt">
                            <label  style="font-weight: bold;font-size:18px">
                                {{ __('content.شخص ذاتي') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-5 py-3">
                    {{-- <input type="text" class="form-control " placeholder="مرجع الملف"
                     name="" value="" style="font-weight: bold;font-size:18px"> --}}

                     <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                             name="dossier_tr_id" type="text" >
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                            {{ __('content.مرجع الملف') }}</label>
                    </div>
                </div>
            </div>
        <div class="row  justify-content-center">
            <div class="row justify-content-center py-5">
                <div class="col-8  ">
                    <div class="row">
                       
                        <div class="col-6">
                            <a href="{{route('bibliotheques.index')}}" class="btn  w-100 py-2 text-capitalize"
                                style="color:#C09F5E;width:125px;font-weight: bold;font-size:18px
                                background: white;border:1px solid #C09F5E">{{ __('content.إلغاء') }}</a>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                                style="width:125px;background: #C09F5E;font-weight:bold;font-size:18px">{{ __('content.تعديل') }}</button>
                        </div>
                    </div>
                 </div>
               





            </div>

        </div>


    </form>

</div>



@endsection