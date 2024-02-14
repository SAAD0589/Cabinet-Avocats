<div class="modal fade rounded-5" id="UpdateSeance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('Upseanse') }}" method="post">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="fw-bold ">
                                    {{ __('content.تعديل جلسة') }}
                                </h3>
                            </div>
                            <div class="col-12">
                                <h4 class="fw-bold "> {{ __('content.مرجع الملف:') }}
                                    <span style="color: #C09F5E">{{ $id }}</span>
                                    
                                </h4>

                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 py-3">
                                <input type="hidden" class="seanceInput " id="seanceInput" name="seanceInput" value="">
                                <select class="Avocat form-select " name="Avocat" id="Avocat"
                                    style="font-weight: bold;font-size:18px">
                                    <option value="" disabled>{{ __('content.المحامي') }}</option>
                                    @foreach ($avocats as $avocat)
                                        <option value="{{ $avocat->name }}">{{ $avocat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 py-3">
                                <input type="date" class="Date_Seance form-control datePicker" name="Date_Seance" placeholder="{{ __('content.التاريخ') }}"
                                    style="font-weight: bold;font-size:18px" id="Date_Seance">
                                @error('Date_Seance')
                                    <p class="text-end text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6 py-2">
                                {{-- <input type="text" class="form-control" name="action1" placeholder="{{ __('content.الإجراء') }}"
                                    style="font-weight: bold;font-size:18px" id="action1"> --}}

                                    <div class="relative">
                                        <input class="action1 inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                             name="action1" type="text">
                                        <label id="label-input" class="fw-bold"
                                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الإجراء') }}</label>
                                    </div>
                                @error('action1')
                                    <p class="text-end text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6 py-2">

                                {{-- <input type="text" class="form-control" name="action" placeholder="{{ __('content.الإجراء') }}"
                                    style="font-weight: bold;font-size:18px" id="action"> --}}

                                    <select class="action form-select" name="action" style="font-weight: bold;font-size:18px"
                                    style="font-weight: bold;font-size:18px">
                                    <option disabled selected>{{ __('content.الإجراء') }}</option>
                                    <option value="test1">test1</option>
                                    <option value="test2">test2</option>
                                    <option value="test3">test3</option>
                                </select>
                                @error('action')
                                    <p class="text-end text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6 py-3">
                                {{-- <input type="text" class="form-control " name="avocat2"
                                    placeholder='{{ __('content.الأستاذ المسؤول') }}'
                                    style="font-weight: bold;font-size:18px" id="avocat2"> --}}

                                    <div class="relative">
                                        <input class="avocat2 inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                             name="avocat2" type="text">
                                        <label id="label-input" class="fw-bold"
                                            style="font-weight: bold;font-size:18px;
                                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                            {{ __('content.االأستاذ المسؤول') }}</label>
                                    </div>

                                @error('avocat2')
                                    <p class="text-end text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6 py-3">
                                {{-- <input type="text" class="form-control" name="juge" placeholder="{{ __('content.القاضي') }}"
                                    style="font-weight: bold;font-size:18px" id="juge"> --}}

                                    <div class="relative">
                                        <input class="juge inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                             name="juge" type="text">
                                        <label id="label-input" class="fw-bold"
                                            style="font-weight: bold;font-size:18px;
                                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                            {{ __('content.القاضي') }}</label>
                                    </div>
                                @error('juge')
                                    <p class="text-end text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 py-2">
                                {{-- <textarea placeholder="{{ __('content.تعليق') }}" cols="10" rows="2" name="comment" class="form-control"
                                    style="font-weight: bold;font-size:18px" id="comment">
                                </textarea> --}}
                                
                                <div class="relative">
                                    <textarea class="comment inputcheck input-cal input-base  form-control" id="input" placeholder="" name="comment"></textarea>
                                    <label id="label-input" class="fw-bold"
                                        style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.ملاحظات') }}</label>
                                </div>
                                
                                @error('comment')
                                    <p class="text-end text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-center py-2 ">
                                <div class="col-12 text-center">
                                    <input type="radio" class="archive" name="archive" value="1" id="archive">

                                    <label style="font-weight: bold;font-size:18px">
                                        {{ __('content.إضافة لملفات الكاتبة') }}
                                    </label>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row d-flex justify-content-center ">
                            <div class="col-8  ">
                                <div class="row">
                                  
                                    <div class="col-6">
                                        <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                                            style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px">{{ __('content.تعديل') }}</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="btn  w-100 py-2 text-capitalize"
                                            style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إلغاء') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
