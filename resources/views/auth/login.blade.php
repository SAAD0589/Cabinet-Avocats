@extends('Admins.components.layoutLogin')
@section('Title', 'Login')



@section('content')
<div class="div" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">


    <div class="d-flex flex-column justify-content-center pt-5 " >
        <h2 class="text-center py-3 " style="z-index: 1;"><span>OUAHBI</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="97" height="74" viewBox="0 0 97 133" fill="none">
                <path
                    d="M88.7781 131.118H96.7727V132.171H67.5132V131.118H76.5621L57.5565 82.4483C50.9214 84.5589 43.0774 88.0237 35.5346 94.0504C23.9211 103.241 16.9848 116.051 15.6253 119.967C14.5709 125.693 16.3783 131.118 21.206 131.118H26.335V132.171H2.65625V131.118H6.12443C10.1951 131.118 13.362 123.733 15.7759 117.104C24.373 99.9267 39.0028 87.2713 57.2513 81.5455L42.7722 44.6287L48.5036 27.3008C48.5036 27.3008 53.1807 40.1066 54.235 42.6686L68.4129 78.9836C70.0737 78.8331 71.5798 78.6826 72.7888 78.5321V79.435C71.7344 79.5854 70.3749 79.7359 68.7181 79.8864L88.7781 131.118Z"
                    fill="#C09F5E" />
                <path
                    d="M96.7715 53.338C96.7715 77.144 85.4592 96.2815 67.2107 103.963L65.7045 104.565C64.1944 105.167 62.6882 105.619 61.3287 106.225L59.0654 106.826C53.1834 108.786 46.8495 108.786 40.8169 108.786H39.3067C37.7966 108.636 38.403 108.636 36.7422 108.486C33.2741 108.335 30.8602 107.583 29.3501 106.977C28.8982 106.826 28.4464 106.676 28.1451 106.525C27.392 106.224 27.0908 106.074 26.639 105.924C23.1708 104.419 20.3051 102.459 18.0418 100.348C15.0255 98.0872 13.2141 95.6757 11.708 93.5691C11.4067 93.2682 11.2561 92.8168 10.9549 92.5158L10.6536 92.0644C7.78791 87.3919 6.12716 82.4224 4.7716 79.71H4.92222C1.9059 72.1745 0.245117 63.7363 0.245117 54.5457C0.245117 23.5051 20.0038 0 48.5103 0C79.8824 0 96.7754 22.6023 96.7754 53.338H96.7715ZM34.1817 3.76573C19.7026 11.3012 13.9712 30.7357 13.9712 53.6389C13.9712 59.5152 14.423 65.3915 15.4813 70.8163C20.9115 58.7628 34.4869 55.298 46.7029 55.298C65.8591 55.298 76.7155 54.2447 83.0533 53.037C82.9027 29.5319 75.0587 8.28778 58.4709 2.25706C55.9064 1.65518 52.8901 1.35424 49.7231 1.35424C43.9917 1.35424 37.9591 2.25706 35.0934 3.46479L34.1897 3.76573H34.1817ZM65.8551 102.007C78.2217 93.4186 83.2 75.3384 83.2 54.2447C76.5649 55.298 65.4033 56.2048 46.6989 56.2048C30.4084 56.2048 14.1218 63.1344 14.1218 81.67C14.1218 88.4491 16.8369 95.8341 21.514 100.808C21.9658 101.108 22.7189 101.861 23.7772 102.467C26.6429 104.276 29.5086 105.631 32.2237 106.383C36.445 107.286 41.4233 107.587 45.3473 107.737C50.6269 107.737 61.0314 105.326 65.2566 102.463L65.8591 102.011L65.8551 102.007Z"
                    fill="#C09F5E" />
            </svg>


            <span>AVOCATS</span>
        </h2>

    </div>


    <div id="div2" class=" row justofy-content-center">

        <div class="col-12" style="height: 100vh;">
                <div class="card mx-auto rounded-4" id="cards" style="max-width:700px;height: 430px">
                    <div class="card-body py-5 row">
                        <div class="col-12 justify-content-center">
                            <h2 class="text-center"> 
                                {{ __('login.تسجيل الدخول') }}
                            </h2>
                        </div>
                        <div class="col-12">
                            <p class="text-center text-secondary">{{ __('login.هذا النص هو مثال لنص') }}</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row ">
                                <div class="col-12 ">
                                    <label class="form-label"> {{ __('login.البريد الإلكتروني') }}</label>
                                </div>
                                <div class="col-12 py-2">
                                    <input type="email" placeholder="{{ __('login.البريد الإلكتروني') }}" name="email"
                                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                        required autocomplete="email" autofocus>
                                </div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="col-12  ">
                                <label class="form-label "> {{ __('login.الرقم السري') }}</label>
                            </div>
                            <div class="col-12">
                                <input type="password" placeholder="{{ __('login.الرقم السري') }}" name="password"
                                class=" rounded-right form-control  @error('password') is-invalid @enderror" required
                                autocomplete="current-password">
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            <div class="text-center py-5 ">
                                <button type="submit" id="btn1" class="btn btn-light text-light "
                                    style="background-color:#C09F5E;width:75%;">
                                    @if (app()->getLocale() === 'ar')
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16"
                                        viewBox="0 0 22 16" fill="none">
                                        <path
                                            d="M21.7071 7.29289C22.0976 7.68342 22.0976 8.31658 21.7071 8.70711L15.3431 15.0711C14.9526 15.4616 14.3195 15.4616 13.9289 15.0711C13.5384 14.6805 13.5384 14.0474 13.9289 13.6569L19.5858 8L13.9289 2.34315C13.5384 1.95262 13.5384 1.31946 13.9289 0.928932C14.3195 0.538408 14.9526 0.538408 15.3431 0.928932L21.7071 7.29289ZM0 7L21 7V9L0 9L0 7Z"
                                            fill="white" />
                                    </svg>
                                    {{ __('login.دخول') }}
                                    @else
                                    {{ __('login.دخول') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16"
                                        viewBox="0 0 22 16" fill="none">
                                        <path
                                            d="M21.7071 7.29289C22.0976 7.68342 22.0976 8.31658 21.7071 8.70711L15.3431 15.0711C14.9526 15.4616 14.3195 15.4616 13.9289 15.0711C13.5384 14.6805 13.5384 14.0474 13.9289 13.6569L19.5858 8L13.9289 2.34315C13.5384 1.95262 13.5384 1.31946 13.9289 0.928932C14.3195 0.538408 14.9526 0.538408 15.3431 0.928932L21.7071 7.29289ZM0 7L21 7V9L0 9L0 7Z"
                                            fill="white" />
                                    </svg>
                                    @endif
                                    
                                </button>
                            </div>
                        </form>
                    </div>
                </div>


        </div>
    </div>
</div>
    @include('Admins.components.footer')
@endsection
