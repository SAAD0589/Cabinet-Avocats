<div class="my-4">

    <div class="d-flex justify-content-center my-3 align-items-center" style="height: 120px">
        <div class="col-11 text-center">
            <h3 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">{{ __('content.إضافة مسطرة') }}</h3>
            <h4 class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}};color: #C09F5E">{{ __('content.دعاوى متنوعة') }}</h4>
            <div class="fw-bold text-center px-5 " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px'}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="13" viewBox="0 0 36 13"
                    fill="none">
                    <circle cx="6.5" cy="6.5" r="6.5" fill="#C09F5E" />
                    <circle cx="29.5" cy="6.5" r="6.5" fill="#C09F5E" />
                </svg>
            </div>
        </div>
        <div class="col-1">
            <a href="">
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

    <div class="row justify-content-center px-2 align-items-center py-4">
        <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-2' : 'col-xl-3'}}
         col-md-12 p-2  ">
            <button class="btn btn-light fw-bold w-100 border text-capitalize" id='btn1' style="background: #C09F5E;color:#fff;"
                onclick="primary()" type="button">{{ __('content.المحكمة الإبتدائية') }}</button>
        </div>
        <div class="col-xl-2 col-md-12 p-2 ">
            <button class="btn btn-light fw-bold w-100 border text-capitalize" id='btn2' onclick="apel()" type="button"
                style="background: #fff;color:#C09F5E;">{{ __('content.المحكمة الإستئنافية') }}</button>
        </div>
        <div class="col-xl-2 col-md-12 py-2  ">
            <button class="btn btn-light fw-bold w-100 border text-capitalize" id="btn3" onclick="cas()" type="button"
                style="background: #fff;color:#C09F5E;">{{ __('content.محكمة النقض') }}</button>
        </div>
        <div class="col-xl-2 col-md-12 py-2  ">
            <button class="btn btn-light fw-bold w-100 border text-capitalize" style="background: #fff;color:#C09F5E;" id="btn4"
                onclick="comment()" type="button">{{ __('content.ملاحظة') }}</button>
        </div>
    </div>

    <div class="row">
        <form action="{{ route('primary', $dossier->id) }}" method="get">
            @csrf


            <div class="row justify-content-center py-5" id="primary">
                <input type="hidden" name="type_tribunal" value="1">
                <div class="col-5 py-2">
                    <select class="form-select" id='villes' name="ville" aria-label="Default select example"
                        placeholder="المدينة"  style="font-weight: bold;font-size:18px">
                        <option value="">{{ __('content.المدينة') }}</option>
                        @foreach ($villes as $item)
                            <option value="{{ $item->id }}">{{ __('region.' . $item->ville_nom) }}</option>
                        @endforeach
                    </select>
                    @error('ville')
                        <p class=" text-danger">{{ __('err.' . $message) }}</p>
                    @enderror
                </div>
                <div class="col-5 py-2">

                    <select class="form-select" name="tribunal_id" id="tribunal" aria-label="Default select example"
                          style="font-weight: bold;font-size:18px">
                        <option value="">{{ __('content.المحكمة') }}</option>
                    </select>
                    @error('tribunal_id')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">
                    <select class="form-select" name="type_dossier" aria-label="Default select example"
                          style="font-weight: bold;font-size:18px">
                        <option value="">{{ __('content.نوع القضية') }}</option>
                        @foreach ($typeDossiers as $typeDossier)
                            <option value="{{ $typeDossier->id }}">
                                {{ __('content.'.$typeDossier->name) }}
                                </option>
                        @endforeach
                    </select>
                    @error('type_dossier')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="reference_trib">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.رقم الملف') }}</label>
                    </div>


                    @error('reference_trib')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-2">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="juge" >
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.القاضي') }}</label>
                    </div>
                    @error('juge')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-2">

                    <select class="form-select" aria-label="Default select example" name="sale_num"
                         style="font-weight: bold;font-size:18px">
                        <option value="">{{ __('content.القاعة') }}</option>
                        @for ($i = 1; $i <= 50; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @error('sale_num')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="col-5 py-2">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="heure">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الساعة') }}</label>
                    </div>
                    @error('heure')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-5">
                    <input type="hidden" class="form-control">
                </div>
                <div class="col-5 py-2">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="date_jugement">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تاريخ الحكم') }}</label>
                    </div>
                    @error('date_jugement')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-2">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="jugement">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.رقم الحكم') }}</label>
                    </div>

                    @error('jugement')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المنطوق') }}</label>
                    </div>


                    @error('')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="prejudice">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.حكم تمهيدي') }}</label>
                    </div>
                    @error('prejudice')
                        <p class=" text-danger">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="col-5">
                    <div class="row ">
                        <div class="col-12">
                            <p class=" fw-bold">{{ __('content.ملف في الغرفة الاستئنافية :') }}</p>
                        </div>
                        <div class="col-11  fw-bold  ">
                            <input type="radio" onclick="classDisp()" checked name="criminal"
                            value="primary">
                        <label for="" class="px-3 py-1">{{ __('content.نعم') }}</label>
                            <input type="radio" onclick="classhide()" value="Formhidd" name="check"
                            value="appellate">

                            <label for="" class="px-2 py-1">{{ __('content.لا') }}</label>
                           
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-5 py-2" id="shome2">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المنطوق') }}</label>
                    </div>

                </div>

                
                <div class="col-5" id="shome3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="descsentes" >
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.رقم القرار') }}</label>
                    </div>
                </div>
                <div class="col-5" id="shome1">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="date_dec" >
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تاريخ القرار') }}</label>
                    </div>
                </div>
                

                <div class="row d-flex justify-content-center py-5">
                    <div class="col-8  ">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                                    style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إضافة') }}</button>
                            </div>
                            <div class="col-6">
                                <button class="btn  w-100 py-2 text-capitalize" onclick="display()" type="button"
                                    style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.رجوع') }}</button>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </form>

        <form action="{{ route('apel', $dossier->id) }}" method="get">
            @csrf
            <div class="row justify-content-center py-5 " id="apel" style="display: none">
                  <div class="col-5 py-3">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="tribunal_id">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                            {{ __('content.المحكمة الإستئنافية') }}</label>
                    </div>
                    @error('tribunal_id')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">
                    <input type="hidden" name="type_tribunal" value="2">


                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="reference_trib">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.رقم الملف') }}</label>
                    </div>
                    @error('reference_trib')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-5">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="juge">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.القاضي') }}</label>
                    </div>

                    @error('juge')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 ">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="sale_num">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.القاعة') }}</label>
                    </div>
                    @error('sale_num')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="heure">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الساعة') }}</label>
                    </div>
                    @error('heure')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="jugement">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المنطوق') }}</label>
                    </div>
                    @error('jugement')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                 <div class="col-5">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="descsentes">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.رقم القرار') }}</label>
                    </div>
                    @error('descsentes')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="date_dec">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تاريخ القرار') }}</label>
                    </div>
                    @error('date_dec')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="txt_dec">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.قرار تمهيدي') }}</label>
                    </div>
                    @error('txt_dec')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="col-5 py-3 px-5">
                    <div class="row justify-content-around">
                      
                        <div class="col-xl-6 col-sm-12 fw-bold  py-2 ">
                           <input type="radio" name="criminal" value="appellate">
                            <label for="">{{ __('content.جنائي إستئنافي') }}</label>
                        </div>
                        <div class="col-xl-6 col-sm-12 fw-bold py-2 ">
                            <input type="radio" checked name="criminal" value="primary">
                            <label for="">{{ __('content.جنائي إبتدائي') }}</label>
                            
                        </div>
                    </div>
                </div>
                
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-8  ">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                                    style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إضافة') }}</button>
                            </div>
                            <div class="col-6">
                                <button class="btn  w-100 py-2 text-capitalize" onclick="display()" type="button"
                                    style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.رجوع') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>



        <form action="{{ route('cas', $dossier->id) }}" method="get">
            @csrf
            @method('PUT')
            <div class="row justify-content-center py-5" id="cas" style="display: none">
                <div class="col-xl-5 col-sm-10 py-2">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="reference_trib">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.رقم الملف') }}</label>
                    </div>
                    @error('reference_trib')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-5 py-2 col-sm-10">
                    <input type="hidden" name="type_tribunal" value="3">
                        <div class="relative">
                            <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                            type="text" name="jugement">
                            <label id="label-input" class="fw-bold"
                                style="font-weight: bold;font-size:18px;
                                {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المنطوق') }}</label>
                        </div>
                    @error('jugement')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                 <div class="col-xl-5 col-sm-10 py-2">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="date_dec">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تاريخ القرار') }}</label>
                    </div>
                    @error('date_dec')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-xl-5 col-sm-10 py-2">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder="" 
                        type="text" name="juge">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.القاضي') }}</label>
                    </div>


                    @error('juge')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
               
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-8  ">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                                    style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إضافة') }}</button>
                            </div>
                            <div class="col-6">
                                <button class="btn  w-100 py-2 text-capitalize" onclick="display()" type="button"
                                    style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.رجوع') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <form action="" method="post">
            @csrf
            @method('PUT')
            <div class="row py-5 px-5" id="comment" style="display: none">
                <input type="hidden" name="selectedForm" value="4">
                <div class="col-11">

                    <div class="relative">
                        <textarea name="observation" class="inputcheck input-cal input-base  form-control" id="input" placeholder="" type="text"></textarea>
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;
                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.ملاحظة') }}</label>
                    </div>
                    @error('observation')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-8  ">
                        <div class="row">
                          
                            <div class="col-6">
                                <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                                    style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إضافة') }}</button>
                            </div>
                            <div class="col-6">
                                <button class="btn  w-100 py-2 text-capitalize" onclick="display()" type="button"
                                    style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.رجوع') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>
<script>
    < script src = "{{ asset('assets/js/jquery-3.7.1.min.js') }}" >
</script>
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
</script>
