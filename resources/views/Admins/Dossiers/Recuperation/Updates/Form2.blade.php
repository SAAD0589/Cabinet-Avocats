  
    <div class="container my-5" id="FormOne">
        <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px" >
            <div class="col-11 text-center">
                <h3 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                    {{ __('content.إضافة ملف') }}
                </h3>
                <h4 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}};color: #C09F5E">{{ __('content.إستعادة') }}</h4>
                <div class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="13" viewBox="0 0 82 13" fill="none">
                        <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E" />
                        <circle cx="29.5" cy="6.5" r="6.5" fill="#C09F5E" />
                        <circle cx="52.5" cy="6.5" r="6.5" fill="#D9D9D9" />
                        <circle cx="75.5" cy="6.5" r="6.5" fill="#D9D9D9" />
                    </svg>
                </div>

            </div>
            <div class="col-1">
                <a href="{{ route('recuperations.index') }}">
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

        <div class="row d-flex justify-content-end my-5" >
            <form action="{{ route('RecuperationUpdate2',$recuperationcheck->id) }}" method="post" enctype="multipart/form-data" >
                <div class="">
                    @csrf
                    <div class="row py-2 justify-content-center">
                        
                        <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                                name="name_Rec" type="text" style="font-weight: bold;font-size:18px" value="{{$recuperationcheck->name_Rec}}">
                                <label id="label-input" class="fw-bold" style="font-weight: bold;font-size:18px;
                                {{app()->getLocale() === 'ar'? 'right: 10px' :'left: 10px' }}" >{{ __('content.اسم صاحب الائتمان') }}</label>
                            </div>




                            @error('name_Rec')
                                    <p class=" text-danger">{{ $message }}</p>
                            @enderror
                           </div>
                           <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" name="num_Rec" type="text" value="{{$recuperationcheck->num_Rec}}">
                                <label id="label-input" class="fw-bold" style="font-weight: bold;font-size:18px;{{app()->getLocale() === 'ar'? 'right: 10px' :'left: 10px' }}">{{ __('content.رقم عقد الائتمان') }}</label>
                            </div>

                            @error('num_Rec')
                                    <p class=" text-danger">{{ $message }}</p>
                            @enderror
                           </div>
        
                           <div class="col-5 py-3">
                            <div class="relative">
                                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" name="adr_Rec" type="text" value="{{$recuperationcheck->adr_Rec}}">
                                <label id="label-input" class="fw-bold" style="font-weight: bold;font-size:18px;{{app()->getLocale() === 'ar'? 'right: 10px' :'left: 10px' }}">{{ __('content.العنوان الوارد في العقد') }}</label>
                            </div>

                             @error('adr_Rec')
                             <p class=" text-danger">{{ $message }}</p>
                             @enderror
                           </div>
                            <div class="col-5 py-3">
                                <select class="form-select" name="id_ville" 
                                    style="font-weight: bold;font-size:18px" aria-label="Default select example">
                                    <option value="" disabled selected>{{ __('content.مدينة') }}</option>
                                    @foreach ($villes as $ville)
                                    <option @if ($recuperationcheck->id_ville  == $ville->id) selected @endif value="{{ $ville->id }}">
                                        {{ $ville->ville_nom }}</option>
                                     @endforeach
                                </select>
                                @error('id_ville')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-5 py-3">
                                <select class="form-select" name="id_trib" style="font-weight: bold;font-size:18px"
                                    aria-label="Default select example">
                                    <option value="" disabled selected>{{ __('content.المحكمة المختصة') }}</option>
                                    @foreach ($tribunals as $tribunal)
                                    <option @if ($recuperationcheck->id_trib  == $tribunal->id) selected @endif value="{{ $tribunal->id }}">
                                        {{ $tribunal->trib_nom }}</option>
                                     @endforeach
                                </select>
                                @error('id_trib')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-5 py-3">
                                <select class="form-select" name="id_userOffice" style="font-weight: bold;font-size:18px"
                                    aria-label="Default select example">
                                    <option value="" disabled selected>{{ __('content.موظفي المكتب') }}</option>
                                    @foreach ($secretarys as $secretary)
                                    <option @if ($recuperationcheck->id_userOffice  == $secretary->id) selected @endif value="{{ $secretary->id }}">
                                        {{ $secretary->name }}</option>
                                     @endforeach
                                </select>   
                                @error('id_userOffice')
                                    <p class=" text-danger">{{ $message }}</p>
                                @enderror
                            </div>






                        <div class="row d-flex justify-content-center py-5">
                            <div class="col-8  ">
                                <div class="row">
                                    <div class="col-6">
                                        <button id="next" class="btn text-light w-100 py-2 text-capitalize"
                                            onclick="hide()" type="button"
                                            style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.التالي') }}</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn  w-100 py-2 text-capitalize"
                                            style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.تعديل') }}</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>