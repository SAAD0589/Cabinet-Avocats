@extends('Admins.components.SideBar')

@section('title', 'Update Avocat')


@section('content')
    <style>
        h3 {
            font-size: 3rem;
            font-weight: bold;
        }
    </style>
    <div class="row py-5">
        <div class="col-12 ">
            <h3 class="text-center py-2 align-self-center ">
                {{ __('content.تعديل محامي') }}
            </h3>
        </div>
        <form action="{{ route('avocats.update', $avocat->id) }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="selectedForm" value="0">
            <div class="row  justify-content-center">
                <div class="col-5 py-3">
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="name" type="text" value="{{ $avocat->name }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الإسم') }}</label>
                    </div>
                    @error('name')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="LastName" type="text"  value="{{ $avocat->LastName }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.النسب') }}</label>
                    </div>

                    @error('LastName')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-2">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="Specialise" type="text" value="{{ $avocat->Specialise }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تخصص') }}</label>
                    </div>

                    @error('Specialise')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-2">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="tel" type="text" value="{{ $avocat->tel }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.الهاتف') }}</label>
                    </div>

                    @error('tel')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            <div class="row  justify-content-center">

                <div class="col-10 py-3">

                    
                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="email" type="text" value="{{ $avocat->email }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.البريد الإلكتروني') }}</label>
                    </div>

                    @error('email')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-10 py-2">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                            name="conf_email" type="text" value="{{ $avocat->email }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.تأكيد البريد الإلكتروني') }}</label>
                    </div>

                    @error('conf_email')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-5 py-3">

                    <div class="relative">
                        <input class="inputcheck input-cal input-base  " id="input"
                            placeholder="" name="Adr" type="text" value="{{ $avocat->Adr }}">
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.العنوان') }}</label>
                    </div>

                    @error('Adr')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-5 py-3">
                    <select class="form-select" aria-label="Default select example"  name="status">
                        @if (app()->getLocale() === 'ar' )
                        <option selected value="{{ $avocat->status }} ">
                            {{ $avocat->status === 'active' ? 'نشط' : 'معلق' }}</option>
                        <option value="{{ $avocat->status === 'active' ? 'hanging' : 'active' }}">
                            {{ $avocat->status === 'active' ? 'معلق' : 'نشط' }}
                        </option>
                        @else
                        <option selected value="{{ $avocat->status }} ">
                            {{ $avocat->status === 'active' ?  __('content.نشط')  :  __('content.معلق')  }}</option>
                        <option value="{{ $avocat->status === 'active' ? 'hanging' : 'active' }}">
                            {{ $avocat->status === 'active' ?  __('content.معلق')  :  __('content.نشط')  }}
                        </option>
                        @endif
                        
                    </select>
                    @error('status')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="col-10 py-3">

                    <div class="relative">
                        <textarea class="inputcheck input-cal input-base  form-control" id="input" placeholder="" name="comment">{{ $avocat->comment }}</textarea>
                        <label id="label-input" class="fw-bold"
                            style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.ملاحظات') }}</label>
                    </div>

                    @error('comment')
                        <p class="text-end text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row justify-content-center py-5">
                    <div class="col-8  ">
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                                    style="width:125px;background: #C09F5E;font-weight:bold;font-size:18px">
                                    {{ __('content.تعديل') }}</button>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('avocats.index') }}" class="btn  w-100 py-2 text-capitalize"
                                    style="color:#C09F5E;width:125px;font-weight: bold;font-size:18px
                                background: white;border:1px solid #C09F5E">{{ __('content.إلغاء') }}</a>
                            </div>

                        </div>
                    </div>






                </div>

            </div>


        </form>

    </div>



@endsection
