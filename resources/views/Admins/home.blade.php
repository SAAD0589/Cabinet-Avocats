@extends('Admins.components.SideBar')

@section('title', 'Home')


@section('content')

    <div class="container  my-5">
        <div class="row">
            <div class="col-12 d-flex  align-items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="45 " viewBox="0 0 38 38" fill="none">
                    <path
                        d="M18.5125 37.0387C15.8555 37.0387 13.1985 37.0398 10.5416 37.0387C6.92865 37.0365 3.97143 34.0804 3.96922 30.4686C3.96702 27.8249 3.96702 25.1822 3.97143 22.5385C3.97143 21.927 4.30148 21.4534 4.83354 21.2569C5.34462 21.0671 5.9396 21.173 6.25089 21.6201C6.44958 21.9049 6.59529 22.2924 6.5986 22.6368C6.6273 25.2242 6.61405 27.8127 6.61405 30.4013C6.61405 32.6575 8.36587 34.3961 10.6221 34.395C15.8809 34.3917 21.1396 34.3917 26.3984 34.395C28.6569 34.3961 30.4098 32.6597 30.4098 30.4046C30.4098 27.7884 30.4076 25.1734 30.412 22.5573C30.4131 21.8199 30.8955 21.2614 31.5755 21.1797C32.2256 21.1024 32.8372 21.5186 33.0061 22.1687C33.0469 22.3255 33.0524 22.4955 33.0524 22.6588C33.0546 25.2882 33.059 27.9176 33.0524 30.547C33.0447 34.0384 30.1084 36.9957 26.6081 37.0343C25.2592 37.0498 23.9103 37.0365 22.5603 37.0365C21.2114 37.0365 19.8625 37.0365 18.5125 37.0365V37.0387Z"
                        fill="black" />
                    <path
                        d="M18.4202 3.16295C18.3275 3.29983 18.2546 3.45437 18.1398 3.56917C12.9076 8.81136 7.66979 14.0491 2.43864 19.2924C2.04456 19.6876 1.61737 19.9459 1.04447 19.8223C0.0499003 19.6081 -0.335344 18.4171 0.335798 17.6466C0.417483 17.5539 0.507999 17.4689 0.595203 17.3806C6.18401 11.794 11.7728 6.20517 17.3605 0.617468C18.1829 -0.204902 18.8364 -0.206006 19.6587 0.61526C25.2575 6.2129 30.854 11.8116 36.455 17.4071C36.7662 17.7183 37.0245 18.0429 37.0212 18.5087C37.0168 19.075 36.753 19.4889 36.2518 19.7274C35.7617 19.9603 35.2849 19.8885 34.8588 19.5496C34.7296 19.447 34.6192 19.3222 34.5022 19.2063C29.2954 13.9962 24.0885 8.78597 18.8849 3.57248C18.7701 3.45768 18.694 3.30535 18.599 3.16957C18.5394 3.16737 18.4809 3.16516 18.4213 3.16185L18.4202 3.16295Z"
                        fill="black" />
                </svg>
                <h4 class="fw-bold my-2 " style="font-size: 2.1rem;"
            >{{ __('content.الصفحة الرئيسية') }}</h4>

            </div>
        </div>

    </div>



    <div class="row justiify-content-center">
        <div class="col-xl-5  py-3  ">
            <div class="row jutify-content-around">
                <div class="col-xl-6    col-lg-6 col-md-12">
                    <div class="card text-white mb-3 rounded-5 shadow"
                        style="height:220px;background: linear-gradient(150deg, #C09F5E 3.98%, #E4C589 95.42%);">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <h4 class="card-title  fw-bold " style="text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.26);">
                                        {{ __('content.ملفات في طور التنفيذ') }}
                                    </h4>
                                </div>
                                <div class="">
                                    <img src="{{asset('assets/icons/IconDossier.svg')}}"
                                    style="cursor:pointer">
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-12">
                                    <label class="card-text  my-2" style="font-weight: bold;text-overflow: ellipsis;">
                                        {{ __('content.TextHome') }}
                                    </label>
                                </div>
                            </div>
                            @if (app()->getLocale() === 'ar')
                            <div class="row" style="height: 2px">
                            </div>
                            @else
                            <div class="row" >
                            </div>
                            @endif
                            <div class="d-flex justify-content-between  " style="height: 80px">
                                <div>
                                    <h3 style="font-weight:900;font-size:42px;text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);">
                                        0000</h3>
                                </div>
                                <div>
                                   <img src="{{asset('assets/icons/IconsNextHome.svg')}}"
                                   style="{{ app()->getLocale() === 'ar' ? '' : 'rotate:180deg;' }}cursor:pointer">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6   col-lg-6 col-md-12">
                    <div class="card text-white mb-3 rounded-5 shadow"
                        style="height:220px;background: linear-gradient(150deg, #C09F5E 3.98%, #E4C589 95.42%);">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <h4 class="card-title  fw-bold "
                                        style="text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.26);">
                                        {{ __('content.ملفات في طور التبليغ') }}
                                    </h4>
                                </div>
                                <div class="">
                                    <img src="{{asset('assets/icons/IconDossier.svg')}}"
                                    style="cursor:pointer">
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-12">
                                    <label class="card-text  my-2 text-truncate" style="max-width: 180px;font-weight: bold;text-overflow: ellipsis;">
                                        {{ __('content.TextHome') }}
                                    </label>
                                </div>
                            </div>
                            @if (app()->getLocale() === 'ar')
                            <div class="row" style="height: 25px">
                            </div>
                            @else
                            <div class="row" style="height: 4px">
                            </div>
                            @endif
                            <div class="d-flex justify-content-between " style="height: 80px">
                                <div>

                                    <h3 style="font-weight:900;font-size:42px;text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);">
                                        0000</h3>
                                </div>
                                <div>
                                    <img src="{{asset('assets/icons/IconsNextHome.svg')}}" 
                                    style="{{ app()->getLocale() === 'ar' ? '' : 'rotate:180deg;' }}cursor:pointer">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-10  col-lg-6 col-md-12  ">
                    <div class="card text-white mb-3 rounded-5 shadow"
                        style="background: linear-gradient(150deg, #C09F5E 3.98%, #E4C589 95.42%);">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class=" ">
                                    <h4 class="card-title text-end fw-bold"
                                        style="font-weight: bold;text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.26);">
                                        
                                        {{ __('content.جلسات غير معينة') }}</h4>

                                </div>
                                <div class="">
                                    <img src="{{asset('assets/icons/SeancesNonAttribuees.svg')}}"
                                    style="cursor:pointer">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="card-text my-2" style="font-weight: bold;text-overflow: ellipsis;"> {{ __('content.TextHome') }}
                                    </p>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between  align-items-center ">

                                <div>
                                    <h3 class="my-1" style="font-weight:900;font-size:42px;text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);">
                                        0000</h3>
                                </div>
                                
                                <div class="my-2">
                                    <img src="{{asset('assets/icons/IconsNextHome.svg')}}" 
                                   style="{{ app()->getLocale() === 'ar' ? '' : 'rotate:180deg;' }}cursor:pointer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-3   py-3">
            <div class="row justify-content-between">
                <div class="col-xl-11  col-lg-6 col-md-12">
                    <div class="card text-white mb-3 rounded-5 shadow"
                        style="height:220px;background: linear-gradient(150deg, #C09F5E 3.98%, #E4C589 95.42%);">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-between">
                                <div class="">
                                    <h4 class="card-title  fw-bold "
                                        style="text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.26);"> 
                                        {{ __('content.الإجراءات') }}
                                    </h4>
                                </div>
                                <div class="">
                                    <img src="{{asset('assets/icons/Procedure.svg')}}"
                                    style="cursor:pointer">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p class="card-text  my-4 text-truncate"  style="max-width:200px;font-weight: bold;text-overflow: ellipsis;">
                                        {{ __('content.TextHome') }}
                                    </p>
                                </div>
                            </div>
                            {{-- @if (app()->getLocale() === 'ar')
                            <div class="row" style="height: 5%">
                            </div>
                            @else
                            <div class="row" style="height: 4px">
                            </div>
                            @endif --}}

                            
                            <div class="d-flex justify-content-between" style="height: 80px">
                                <div>
                                    <h3 style="font-weight:900;font-size:42px;text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);">
                                        0000</h3>
                                </div>
                                <div>
                                    <img src="{{asset('assets/icons/IconsNextHome.svg')}}" 
                                   style="{{ app()->getLocale() === 'ar' ? '' : 'rotate:180deg;' }}cursor:pointer">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 py-3 ">
            <div class="row justify-content-between">
                <div class="col-xl-10  rounded-5 "
                    style="height:480px;background:#F2F5FA;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.26);">
                    <div class="row justify-content-center">
                        <div class=" {{app()->getLocale() === 'ar'? 'col-xl-8':'col-xl-10'}} col-12  my-2">
                            <h4 class="text-center my-4 " style="font-weight: 900;">
                                {{ __('content.ملف العميل و آخر المستجدات') }}
                            </h4>
                        </div>
                        <div class="col-xl-10 d-flex justify-content-center " style="height: 330px">
                            <div class="card text-white bg-secondary mb-3 rounded-5 shadow-lg bg-white"
                                style="max-width: 18rem;background: linear-gradient(150deg, #C09F5E 3.98%, #E4C589 95.42%);">
                                <div class="card-body">
                                    <h5 class="card-title  fw-bold">{{ __('content.TextHome') }}</h5>
                                    <p class="card-text " style="font-weight: bold;">{{ __('content.Num') }}</p>
                                    <p class=" " style="font-weight: bold;">
                                        {{ __('content.TextDocHome') }}
                                    </p>
                                    <div class="row align-items-end ">
                                        <div class="col-12 " style="height: 100px">
                                            <p class="">
                                                <button class="rounded-5 btn btn-light text-capitalize" style="font-weight: bold;">
                                                    {{ __('content.هذا النص هو مثال') }}
                                                </button>
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-sm-3 my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="144" height="6" viewBox="0 0 144 6"
                                fill="none">
                                <path d="M3 3H63" stroke="#D3D3D3" stroke-width="5" stroke-linecap="round"
                                    onclick="one()" />
                                <path d="M81 3H141" stroke="#C09F5E" stroke-width="5" stroke-linecap="round"
                                    onclick="two()" />
                            </svg>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


<script>
    function one() {
        alert('one')
    }

    function two() {
        alert('two')
    }
</script>
