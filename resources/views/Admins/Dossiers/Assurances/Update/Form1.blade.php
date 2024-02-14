
<div class="container my-5" id="FormOne">
    <form action="{{ route('assuranceUpdate',$assurancecheck->id) }}" method="post">
        @csrf
        <div id="FormOne">

            <div class="d-flex justify-content-center my-5 align-items-center" style="height: 120px">
                <div class="col-11 text-center  ">

                    <h3 class="fw-bold " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-80px' }}">
                        {{ __('content.تعديل ملف') }}
                    </h3>
                    <h4 class="fw-bold "
                        style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-90px' }};color: #C09F5E">
                        {{ __('content.تأمين') }}</h4>
                    <div class="fw-bold " style="margin-right: {{ app()->getLocale() === 'ar' ? '80px' : '-90px' }}">
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
                            <svg style="{{ app()->getLocale() === 'ar' ? '' : 'rotate:180deg;' }}"
                                xmlns="http://www.w3.org/2000/svg" width="80" height="50" viewBox="0 0 64 68"
                                fill="none">
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
                <div class="row d-flex justify-content-center">

                    <div class="col-5 py-2">

                        <select class=" form-select" name="id_clt" style="font-weight: bold;font-size:18px"
                            aria-label="Default select example" >
                            <option value="" disabled selected>{{ __('content.الموكل') }}</option>
                            @foreach ($users as $user)
                                <option @if ($usercheck->id == $user->id) selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('id_clt')
                            <p class=" text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-5 py-2">
                        <div class="relative">
                            <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                type="text" name='reference' readonly value="{{$assurancecheck->reference}}">
                            <label id="label-input" class="fw-bold"
                                style="font-weight: bold;font-size:18px;
                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.المرجع') }}</label>
                        </div>
                        @error('reference')
                            <p class=" text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="col-5 ">
                        <div class="col-12  fw-bold ">
                            <p class="my-2" style="font-weight: 900;font-size:18px;">طريقة التكليف: </p>
                            <div class="row justify-content-around">
                                <div class="col-xl-5 col-sm-12">
                                    <input type="radio" value="InstallationSeance" name="Methode_Affectation"
                                        {{$assurancecheck->Methode_Affectation=='InstallationSeance' ? 'checked':''}}
                                    >
                                    <label class="">تنصيب في الجلسة</label>
                                </div>
                                <div class="col-xl-6 col-sm-12">
                                    <input type="radio" value="Cession_Par_Client" name="Methode_Affectation"
                                    {{$assurancecheck->Methode_Affectation!='InstallationSeance' ? 'checked':''}}>
                                    <label class="">تكليف من طرف الموكل<label>
                                </div>
                            </div>


                        </div>


                        @error('Methode_Affectation')
                            <p class=" text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="col-5 py-4">
                        <input type="date" class="form-control" placeholder="تاريخ استلام الملف"
                            style="font-weight: bold;font-size:18px" name='Date_Reception_Dossier'
                            value="{{$assurancecheck->Date_Reception_Dossier}}">

                        @error('Date_Reception_Dossier')
                            <p class=" text-danger">{{ $message }}</p>
                        @enderror
                    </div>





                    <div class="row d-flex justify-content-center py-5">
                        <div class="col-xl-8 col-sm-12  ">
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




        </div>
    </form>
</div>
