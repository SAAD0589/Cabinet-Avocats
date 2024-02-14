@extends('Admins.components.SideBar')

@section('title', 'Ajoute Avocat')


@section('content')
<style>
    h3 {
        font-size: 3rem;
    }
</style>
<form action="{{route('dossier.store')}}" method="post">
    @csrf
<div>

<div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
    <div class="col-11 text-center  ">
        
        <h3 class="fw-bold " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">{{ __('content.إضافة مسطرة') }}</h3>
        <h4 class="fw-bold " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-90px'}};color: #C09F5E" >{{ __('content.دعاوى متنوعة') }}</h4>
        <div class="fw-bold " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-90px'}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="13" viewBox="0 0 36 13"
                fill="none">
                <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E" />
                <circle cx="29.5" cy="6.5" r="6.5" fill="#D9D9D9" />
            </svg>
        </div>
    </div>
    <div class="col-1 ">
        <div class="row justify-content-center">
        <a href="{{ route('affichageDos') }}">
            <svg style="{{ app()->getLocale() === 'ar' ? '' :'rotate:180deg;' }}" xmlns="http://www.w3.org/2000/svg" width="80" height="50" viewBox="0 0 64 68" fill="none">
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
   
    
 

</div>

   
<div class="row d-flex ">
    <div class="col-12">
        <div class="row mx-2">
            <div class="col-xl-5">
                <p class="" style="font-weight: 900;font-size:18px">{{ __('content.:نوع الموكل') }}</p>
                <div class="col-12   fw-bold p-2">
                    <input type="radio"   value="clt1" id="type_clt1"
                    name="type_clt">
                    <label for="" class="p-2">{{ __('content.شخص معنوي') }}</label>
                    <input type="radio"   checked  
                    name="type_clt" value="clt2" id="type_clt2">
                    <label for="" class="p-2">{{ __('content.شخص ذاتي') }} <label>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-5 py-2">
            <select class="form-select" aria-label="Default select example" 
              style="font-weight: bold;font-size:18px"  name='id_clt' id="id_clt">
                <option value="" selected>{{ __('content.الموكل') }}</option>
                @foreach ($users as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
              @error('id_clt')
              <p class=" text-danger">{{ $message }}</p>
              @enderror

        </div>
        <div class="col-5 py-2">

            <div class="relative">
                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                 type="text" name='reference' readonly>
                <label id="label-input" class="fw-bold"
                    style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المرجع') }}</label>
            </div>
            @error('reference')
            <p class=" text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-5 py-2">
            <input type="date" class="form-control"  placeholder="تاريخ استلام الملف" 
            style="font-weight: bold;font-size:18px" name='date_ref'>
            
            @error('date_ref')
            <p class=" text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-5 py-2">
         
            <select style="font-weight: bold;font-size:18px"
            class="form-select"  name='couleur'>
                <option value="" style="font-weight: bold;font-size:18px">{{ __('content.لون الملف') }}</option>
                <option value="admin" style="font-weight: bold;font-size:18px">{{ __('content.الأزرق') }} </option>
                <option value="comme" style="font-weight: bold;font-size:18px">{{ __('content.الأخضر') }} </option>
                <option value="penal" style="font-weight: bold;font-size:18px">{{ __('content.الأحمر') }} </option>
                <option value="civil" style="font-weight: bold;font-size:18px">{{ __('content.الأصفر') }} </option>
            </select>
            @error('couleur')
            <p class=" text-danger">{{ $message }}</p>
            @enderror

        </div>
        <div class="col-5 py-3">
            <select class="form-select" aria-label="Default select example" name="id_avocat"
               style="font-weight: bold;font-size:18px">
                <option value="" selected>{{ __('content.المحامي') }}</option>
                @foreach ($avocats as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
              @error('id_avocat')
              <p class=" text-danger">{{ $message }}</p>
              @enderror
        </div>
        <div class="col-5 py-3">
            <div class="relative">
                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" type="text" name="Adversaire">
                <label id="label-input" class="fw-bold"
                    style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الخصم') }}</label>
            </div>

            @error('Adversaire')
            <p class=" text-danger">{{ $message }}</p>
            @enderror

        </div>
        

        <div class="col-10">
            <p class="fw-bold">{{ __('content.خاص بالطرف الخصم :') }}</p>
        </div>
        <div class="col-5 py-2">

            <div class="relative">
                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" type="text" name="avocat_Adversaire">
                <label id="label-input" class="fw-bold"
                    style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المحامي') }}</label>
            </div>

            @error('avocat_Adversaire')
            <p class=" text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-5 py-2">
            <div class="relative">
                <input class="inputcheck input-cal input-base  form-control" id="input" 
                placeholder="" type="text" name="Adresse_Adversaire">
                <label id="label-input" class="fw-bold"
                    style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.العنوان') }}</label>
            </div>
            @error('Adresse_Adversaire')
            <p class=" text-danger">{{ $message }}</p>
            @enderror

        </div>
        

        <div class="row d-flex justify-content-center py-5">
            <div class="col-8  ">
                <div class="row">
                    <div class="col-6">
                        <button type="submit" wire:click='next1' class="btn text-light w-100 py-2 text-capitalize"
                            style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px" >{{ __('content.إضافة') }}</button>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('affichageDos') }}"  class="btn  w-100 py-2 text-capitalize" 
                            style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px"
                            >{{ __('content.إلغاء') }}</a>
                    </div>
                   
                </div>
             </div>
            </div>

        </div>
    </div>
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(document).ready(function () {
        console.log('Script is running'); // Check if script is running
    
        $(document).on('input', '#type_clt1', function () {
          var type_client = $(this).val();
          console.log('Selected value:', type_client); // Log the selected value

          jQuery.ajax({
            url: "{{route('get-users')}}", // Replace with the correct URL
            type: "get",
            datatype:'html',
            cache: false,
            data: { type_client: type_client },
            success: function (response) {
              var select = $('#id_clt');
              select.empty();
              jQuery.each(response, function (index, user) {
                select.append('<option value="' + user.id + '">' + user.name + '</option>');
              });
            },
            error: function (xhr, status, error) {
              console.log('xhr.responseText');
            }
          });
        });
        $(document).on('input', '#type_clt2', function () {
          var type_client = $(this).val();
          console.log('Selected value:', type_client); // Log the selected value

          jQuery.ajax({
            url: "{{route('get-users')}}", // Replace with the correct URL
            type: "get",
            datatype:'json',
            cache: false,
            data: { type_client: type_client },
            success: function (response) {
                console.log('helle',response);
              var select = $('#id_clt');
              select.empty();
              jQuery.each(response, function (index, user) {
                select.append('<option value="' + user.id + '">' + user.name + '</option>');
              });
            },
            error: function (xhr, status, error) {
              console.log('xhr.responseText');
            }
          });
        });
      });
    </script>
    


</div>
</form>
@endsection