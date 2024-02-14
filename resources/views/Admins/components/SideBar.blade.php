<html lang="{{ app()->getLocale() }}">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Add the Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel = "icon" href ="{{ asset('assets/logo/iconTitle.svg') }}" type = "image/x-icon">
    {{-- <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    
    <link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0/mdb.min.css"
rel="stylesheet"
/> --}}

    <!-- Bootstrap Toggle CSS -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Add the Bootstrap JavaScript (including the required dependencies) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.1.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}" />
    @livewireStyles
    <title>@yield('title')</title>
</head>
<style>
    .inputAff:focus {
        box-shadow: 0 0 0 0.1rem #C09F5E;
        border-color: #C09F5E;
    }

    .input-group>.search:focus {
        box-shadow: 0 0 0 0.1rem #C09F5E;
        border-color: #C09F5E;
    }

    .datePicker:focus {
        box-shadow: 0 0 0 0.1rem #C09F5E;
        border-color: #C09F5E;
    }
    #input:focus {
    box-shadow: 0 0 0 0px #e8e8e8, 0 0 0 2px #C09F5E;
    background: #FFFFFF;
}
</style>
@include('Admins.components.NavBar')


<div class=" my-4   " dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

    <div class="row  justify-content-center">

        <div class="col-xl-1 col-sm-1  ">

            <div class="d-flex flex-column  justify-content-between align-items-start   ">
                <div class=" navbar-nav">
                    <a href="{{ route('home') }}" class=" text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="37" viewBox="0 0 37 37"
                            fill="none">
                            <path class='home'
                                d="M18.0217 36.0577C15.4351 36.0577 12.8485 36.0588 10.2619 36.0577C6.74475 36.0556 3.86587 33.1778 3.86372 29.6616C3.86157 27.0879 3.86157 24.5153 3.86587 21.9416C3.86587 21.3463 4.18717 20.8853 4.70514 20.694C5.20268 20.5092 5.7819 20.6123 6.08494 21.0476C6.27837 21.3248 6.42021 21.702 6.42344 22.0373C6.45138 24.5562 6.43848 27.0761 6.43848 29.5961C6.43848 31.7926 8.14389 33.4851 10.3404 33.484C15.4598 33.4808 20.5793 33.4808 25.6987 33.484C27.8974 33.4851 29.6039 31.7947 29.6039 29.5993C29.6039 27.0525 29.6017 24.5067 29.606 21.9599C29.6071 21.2421 30.0767 20.6983 30.7386 20.6188C31.3716 20.5436 31.9669 20.9487 32.1313 21.5816C32.1711 21.7342 32.1765 21.8997 32.1765 22.0588C32.1786 24.6185 32.1829 27.1782 32.1765 29.7379C32.1689 33.1369 29.3105 36.0158 25.9029 36.0534C24.5897 36.0685 23.2765 36.0556 21.9623 36.0556C20.6491 36.0556 19.336 36.0556 18.0217 36.0556V36.0577Z"
                                fill="black" />
                            <path class='home'
                                d="M17.9322 3.07916C17.842 3.21241 17.771 3.36286 17.6593 3.47462C12.5656 8.57794 7.46661 13.677 2.37403 18.7814C1.9904 19.1661 1.57452 19.4175 1.0168 19.2972C0.0485784 19.0887 -0.326461 17.9292 0.326902 17.1791C0.406424 17.0889 0.494542 17.0061 0.579436 16.9201C6.02019 11.4815 11.4609 6.04079 16.9006 0.601111C17.7012 -0.199474 18.3374 -0.200548 19.138 0.598961C24.5884 6.04831 30.0366 11.4987 35.4892 16.9459C35.7923 17.249 36.0437 17.5649 36.0405 18.0184C36.0362 18.5697 35.7794 18.9726 35.2915 19.2048C34.8144 19.4315 34.3501 19.3617 33.9353 19.0317C33.8096 18.9318 33.7021 18.8104 33.5882 18.6975C28.5193 13.6254 23.4504 8.55322 18.3847 3.47784C18.2729 3.36608 18.1987 3.21779 18.1063 3.08561C18.0483 3.08346 17.9913 3.08131 17.9333 3.07809L17.9322 3.07916Z"
                                fill="black" />
                        </svg>
                        <p id='home' class="titre text-center fw-bold">{{ __('SideBar.الرئيسة') }}</p>
                </div>
                <div class=" navbar-nav">
                    <a href="/clients" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="34" viewBox="0 0 45 33"
                            fill="none">
                            <path class="client"
                                d="M34.2747 25.6517C34.5653 27.0237 34.8696 28.3358 35.11 29.6591C35.2102 30.2053 35.2065 30.7753 35.1939 31.3328C35.1764 32.136 34.5415 32.7472 33.76 32.7684C32.9685 32.7908 32.3374 32.2321 32.2259 31.4289C32.0543 30.2016 32.0155 28.9332 31.6661 27.757C30.7093 24.533 28.7382 22.1134 25.5234 20.8724C21.8916 19.4705 17.7564 20.7689 15.228 24.0565C13.7302 26.0034 12.955 28.2148 12.8373 30.6606C12.8247 30.9088 12.826 31.1595 12.7972 31.4064C12.702 32.2383 12.0533 32.8021 11.2418 32.7696C10.4453 32.7372 9.82916 32.1024 9.8229 31.2655C9.80912 29.5555 10.0984 27.8942 10.6682 26.2803C10.7308 26.1045 10.791 25.9286 10.8661 25.7166C9.79785 25.1104 8.68327 24.9383 7.49356 25.2439C4.83736 25.9261 3.00143 28.2946 3.00769 31.0335C3.00769 31.2505 3.02022 31.4738 2.97513 31.6833C2.81859 32.4179 2.13106 32.9168 1.39218 32.8569C0.655811 32.7971 0.0684662 32.1922 0.0183728 31.4426C-0.264655 27.2357 2.75347 23.2571 6.91623 22.3104C8.78596 21.8851 10.5392 22.1707 12.2524 23.0525C14.7295 19.4668 18.1146 17.3777 22.5253 17.3789C26.9235 17.3802 30.2948 19.4668 32.7719 23.0525C34.0268 22.409 35.3342 22.0473 36.7431 22.1159C40.7681 22.3117 44.4111 25.6642 44.9133 29.6503C44.9809 30.1879 45.0072 30.7354 45.0072 31.278C45.0072 32.2134 44.3422 32.8831 43.4731 32.8607C42.6253 32.8395 42.0079 32.1622 42.0167 31.2455C42.0392 28.7611 40.9609 26.9027 38.7756 25.7228C37.3492 24.9533 35.8652 24.851 34.3749 25.5906C34.306 25.6243 34.2459 25.6729 34.2785 25.6517H34.2747Z"
                                fill="black" />
                            <path class="client"
                                d="M14.9102 7.3861C14.9202 3.29022 18.2326 -0.014916 22.3165 5.063e-05C26.4404 0.0150173 29.7428 3.33138 29.7253 7.44098C29.7077 11.4969 26.359 14.7684 22.2401 14.7534C18.2088 14.7397 14.9026 11.4159 14.9114 7.3861H14.9102ZM17.9107 7.39234C17.9082 9.81569 19.8782 11.7663 22.3252 11.7651C24.7548 11.7651 26.7322 9.78825 26.7259 7.36614C26.7197 4.96774 24.7472 2.99338 22.349 2.9859C19.8857 2.97842 17.9133 4.93655 17.9107 7.39109V7.39234Z"
                                fill="black" />
                            <path class="client"
                                d="M14.0005 13.4142C14.008 16.5672 11.4645 19.0953 8.2836 19.0965C5.18407 19.0978 2.6243 16.5447 2.62305 13.4503C2.62305 10.2799 5.14775 7.75179 8.31741 7.74805C11.4583 7.74555 13.993 10.2724 13.9993 13.4142H14.0005ZM11.0012 13.3967C10.9911 11.915 9.79767 10.7339 8.3124 10.7364C6.80459 10.7389 5.61738 11.935 5.62364 13.4441C5.62865 14.9171 6.83339 16.1107 8.3124 16.1094C9.81395 16.1082 11.0099 14.9009 11.0012 13.3967Z"
                                fill="black" />
                            <path class="client"
                                d="M36.3349 19.0961C33.2554 19.141 30.6618 16.6079 30.6092 13.5024C30.5566 10.413 33.0901 7.79132 36.1708 7.74767C39.3643 7.70277 41.9716 10.1872 42.008 13.3128C42.0455 16.4982 39.5446 19.0475 36.3349 19.0949V19.0961ZM39.0099 13.4113C39.0074 11.9396 37.8026 10.7398 36.3261 10.736C34.8246 10.7323 33.6085 11.9383 33.6098 13.43C33.6098 14.8955 34.8145 16.0953 36.2973 16.109C37.7876 16.1228 39.0136 14.9042 39.0111 13.4126L39.0099 13.4113Z"
                                fill="black" />
                        </svg>
                        <p id='client' class="titre text-center fw-bold ">
                            {{ __('SideBar.الموكلون') }}
                        </p>
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('dossier.index') }}" class=" text-decoration-none text-dark">

                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="30" viewBox="0 0 34 30"
                            fill="none">
                            <path class='dossiers'
                                d="M33.2797 13.6588C32.5898 12.7669 31.5317 12.2542 30.3757 12.2542H29.7482V9.54453C29.7482 5.78481 26.5708 2.72603 22.6653 2.72603H15.503C15.2849 2.72603 15.0639 2.67558 14.8698 2.58285L10.4005 0.430929C9.81406 0.148644 9.15677 5.69831e-07 8.49948 5.69831e-07H5.66632C2.54134 -0.00136313 0 2.44511 0 5.45343V23.1815C0 26.9412 3.17739 30 7.0829 30H24.8723C28.0256 30 30.7511 28.0472 31.6747 25.0811L33.8449 16.7408C34.1764 15.6744 33.9696 14.552 33.2797 13.6588ZM2.83316 23.1815V5.45343C2.83316 3.94927 4.10383 2.72603 5.66632 2.72603H8.49948C8.71763 2.72603 8.93862 2.77649 9.13269 2.86922L13.602 5.02114C14.1885 5.30342 14.8458 5.45207 15.503 5.45207H22.6653C25.0083 5.45207 26.915 7.2876 26.915 9.54316V12.2528H12.2038C9.79565 12.2528 7.64528 13.7243 6.83641 15.9621L3.7341 25.6962C3.17031 25.002 2.83316 24.1293 2.83316 23.1815ZM31.1138 16.018L28.9436 24.357C28.3996 26.1012 26.7634 27.2726 24.8723 27.2726H7.0829C6.78825 27.2726 6.50069 27.244 6.22304 27.1881L9.52933 16.8117C9.92456 15.7166 11.0012 14.9816 12.2053 14.9816H30.3771C30.72 14.9816 30.9197 15.1725 31.0075 15.2871C31.0953 15.4016 31.2285 15.6403 31.1138 16.018Z"
                                fill="black" />
                        </svg>
                        <p id="dossiers" class="titre text-center fw-bold">
                            {{ __('SideBar.الملفات') }}
                        </p>
                    </a>
                </div>
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="92" height="34" viewBox="0 0 34 34"
                        fill="none">
                        <path
                            d="M26.9167 2.83333H25.5V1.41667C25.5 0.634667 24.8667 0 24.0833 0C23.2999 0 22.6667 0.634667 22.6667 1.41667V2.83333H11.3333V1.41667C11.3333 0.634667 10.7001 0 9.91667 0C9.13325 0 8.5 0.634667 8.5 1.41667V2.83333H7.08333C3.17758 2.83333 0 6.01092 0 9.91667V26.9167C0 30.8224 3.17758 34 7.08333 34H26.9167C30.8224 34 34 30.8224 34 26.9167V9.91667C34 6.01092 30.8224 2.83333 26.9167 2.83333ZM7.08333 5.66667H26.9167C29.2598 5.66667 31.1667 7.5735 31.1667 9.91667V11.3333H2.83333V9.91667C2.83333 7.5735 4.74017 5.66667 7.08333 5.66667ZM26.9167 31.1667H7.08333C4.74017 31.1667 2.83333 29.2598 2.83333 26.9167V14.1667H31.1667V26.9167C31.1667 29.2598 29.2598 31.1667 26.9167 31.1667ZM26.9167 19.8333C26.9167 20.6153 26.2834 21.25 25.5 21.25H8.5C7.71658 21.25 7.08333 20.6153 7.08333 19.8333C7.08333 19.0513 7.71658 18.4167 8.5 18.4167H25.5C26.2834 18.4167 26.9167 19.0513 26.9167 19.8333ZM17 25.5C17 26.282 16.3667 26.9167 15.5833 26.9167H8.5C7.71658 26.9167 7.08333 26.282 7.08333 25.5C7.08333 24.718 7.71658 24.0833 8.5 24.0833H15.5833C16.3667 24.0833 17 24.718 17 25.5Z"
                            fill="black" />
                    </svg>
                    <p class="titre text-center fw-bold">
                        {{ __('SideBar.مذكرات') }}
                    </p>
                </div>
                <div class="">
                    <a href="{{ route('avocats.index') }}" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="39" viewBox="0 0 41 39"
                            fill="none">
                            <path class="avocats"
                                d="M8.03788 9.08818C8.21825 9.44384 8.36376 9.73849 8.51624 10.0305C10.3373 13.5192 12.1636 17.0052 13.9759 20.4991C14.145 20.8251 14.341 20.9951 14.7157 20.9384C14.8699 20.9149 15.0302 20.9349 15.2733 20.9349C15.2002 23.4141 14.2443 25.406 12.3396 26.9176C9.88596 28.8641 6.44424 29.0716 3.78583 27.5321C1.0342 25.9386 -0.148186 22.9041 0.0147511 20.9663C0.105369 20.9558 0.206442 20.921 0.297931 20.9384C0.866033 21.0439 1.13527 20.7571 1.38447 20.2724C3.20553 16.7349 5.05709 13.2123 6.89732 9.68444C6.98969 9.50835 7.07333 9.32703 7.19793 9.07423C6.94873 9.0629 6.77011 9.0568 6.59149 9.04721C5.80469 9.00362 5.27754 8.4771 5.29409 7.75183C5.30978 7.07275 5.87439 6.57936 6.65335 6.57849C10.0376 6.57587 13.4209 6.57064 16.8051 6.58546C17.1763 6.5872 17.4159 6.48521 17.5501 6.14524C17.5553 6.13216 17.5632 6.11909 17.5719 6.10775C18.5469 4.8516 18.8667 3.42895 18.6863 1.86333C18.6062 1.17031 18.8492 0.598457 19.5001 0.264587C20.1798 -0.083231 20.8646 -0.104152 21.5347 0.297713C22.0348 0.597586 22.2988 1.02909 22.2849 1.62884C22.2709 2.23904 22.3101 2.85099 22.2735 3.45858C22.2413 3.97813 22.3755 4.42184 22.6517 4.8516C22.934 5.29095 23.1919 5.74773 23.4368 6.20888C23.5831 6.48521 23.7713 6.58459 24.0911 6.58372C27.4605 6.57151 30.8299 6.57849 34.1993 6.57413C34.6402 6.57413 35.0428 6.65694 35.3399 7.00302C35.6562 7.37176 35.7642 7.80413 35.5725 8.26091C35.3782 8.72293 35.0245 9.00711 34.5078 9.04111C34.2838 9.05593 34.0582 9.04372 33.748 9.04372C33.8647 9.29042 33.9318 9.44559 34.0094 9.59552C35.8705 13.1617 37.7421 16.7227 39.5858 20.2977C39.8289 20.7684 40.0947 21.0421 40.6445 20.9367C40.7369 20.9192 40.8397 20.9523 41 20.968C40.9007 23.5998 39.8455 25.7224 37.6864 27.1808C35.0393 28.9696 32.2258 29.0664 29.4611 27.4728C27.0109 26.0607 25.8146 23.8317 25.67 20.9628C25.8625 20.9506 26.0054 20.9149 26.1396 20.9375C26.6031 21.0151 26.8314 20.7893 27.0362 20.3936C28.8921 16.8082 30.7681 13.2341 32.6371 9.65567C32.7224 9.49179 32.7991 9.32355 32.9141 9.08644C32.7015 9.07075 32.5534 9.04982 32.4044 9.04982C29.1945 9.04808 25.9854 9.05593 22.7754 9.03849C22.3607 9.03588 22.2735 9.17361 22.2744 9.55978C22.284 17.842 22.2849 26.1234 22.2735 34.4057C22.2735 34.8084 22.3859 34.9226 22.7859 34.9174C24.4266 34.8965 26.0682 34.9078 27.7089 34.9095C28.7013 34.9104 29.4097 35.4256 29.6615 36.3243C29.936 37.3033 29.6057 38.2848 28.7936 38.7652C28.5566 38.9055 28.2473 38.9875 27.9711 38.9883C23.0185 39.0014 18.0668 39.0031 13.1142 38.9953C11.9902 38.9936 11.1886 38.1 11.1938 36.9005C11.1982 35.871 12.0198 34.8581 13.1586 34.8947C14.8412 34.9496 16.528 34.9008 18.2123 34.9165C18.5652 34.92 18.6881 34.8258 18.6872 34.4554C18.6776 26.1295 18.6785 17.8046 18.6846 9.47871C18.6846 9.17448 18.6227 9.04024 18.2785 9.04111C14.9815 9.05244 11.6852 9.04808 8.38816 9.04982C8.30277 9.04982 8.21825 9.06726 8.03614 9.08644L8.03788 9.08818ZM7.61704 10.693C5.94061 14.1442 4.31211 17.4977 2.6627 20.8939H12.574C10.9176 17.4846 9.29259 14.1398 7.61791 10.693H7.61704ZM38.3024 20.9096C36.6373 17.4838 35.0123 14.1381 33.3385 10.693C31.662 14.1459 30.0335 17.4977 28.3763 20.9096H38.3024Z"
                                fill="black" />
                        </svg>
                        <p id='avocats' class="titre text-center fw-bold">
                            {{ __('SideBar.المحامين') }}
                        </p>
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('users.index') }}" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="33" viewBox="0 0 30 39"
                            fill="none">
                            <path class="users"
                                d="M14.6249 19.4999C16.5533 19.4999 18.4383 18.9281 20.0417 17.8567C21.6451 16.7854 22.8948 15.2627 23.6327 13.4811C24.3707 11.6995 24.5637 9.73913 24.1875 7.84782C23.8113 5.95652 22.8827 4.21925 21.5192 2.8557C20.1556 1.49214 18.4184 0.56355 16.5271 0.187347C14.6358 -0.188857 12.6754 0.00422451 10.8938 0.742174C9.11223 1.48012 7.5895 2.7298 6.51816 4.33317C5.44682 5.93654 4.875 7.82159 4.875 9.74994C4.87758 12.335 5.90563 14.8134 7.73354 16.6413C9.56145 18.4692 12.0399 19.4973 14.6249 19.4999ZM14.6249 3.24998C15.9105 3.24998 17.1672 3.6312 18.2361 4.34542C19.305 5.05965 20.1382 6.0748 20.6301 7.26252C21.1221 8.45023 21.2508 9.75715 21 11.018C20.7492 12.2789 20.1301 13.4371 19.2211 14.3461C18.3121 15.2551 17.1539 15.8742 15.893 16.125C14.6321 16.3758 13.3252 16.2471 12.1375 15.7551C10.9498 15.2632 9.93465 14.43 9.22042 13.3611C8.5062 12.2922 8.12498 11.0355 8.12498 9.74994C8.12498 8.02605 8.80979 6.37276 10.0288 5.15378C11.2478 3.9348 12.901 3.24998 14.6249 3.24998Z"
                                fill="black" />
                            <path class="users"
                                d="M14.6249 22.749C10.7475 22.7533 7.03006 24.2955 4.28829 27.0373C1.54652 29.7791 0.00430111 33.4965 0 37.3739C0 37.8049 0.171204 38.2182 0.475948 38.523C0.780693 38.8277 1.19402 38.9989 1.62499 38.9989C2.05596 38.9989 2.46929 38.8277 2.77403 38.523C3.07878 38.2182 3.24998 37.8049 3.24998 37.3739C3.24998 34.3571 4.44841 31.4639 6.58162 29.3306C8.71483 27.1974 11.6081 25.999 14.6249 25.999C17.6417 25.999 20.535 27.1974 22.6682 29.3306C24.8014 31.4639 25.9998 34.3571 25.9998 37.3739C25.9998 37.8049 26.171 38.2182 26.4758 38.523C26.7805 38.8277 27.1939 38.9989 27.6248 38.9989C28.0558 38.9989 28.4691 38.8277 28.7739 38.523C29.0786 38.2182 29.2498 37.8049 29.2498 37.3739C29.2455 33.4965 27.7033 29.7791 24.9615 27.0373C22.2198 24.2955 18.5024 22.7533 14.6249 22.749Z"
                                fill="black" />
                        </svg>
                        <p id='users' class="titre text-center fw-bold">
                            {{ __('SideBar.المستخدمون') }}
                        </p>
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('RendezVous.index') }}" class="text-decoration-none text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="92" height="35" viewBox="0 0 39 40"
                        fill="none">
                        <path class="rendezVous"
                            d="M14.6249 39.0107H1.62499C1.19401 39.0107 0.780693 38.8395 0.475948 38.5348C0.171204 38.23 0 37.8167 0 37.3857C0 36.9548 0.171204 36.5414 0.475948 36.2367C0.780693 35.9319 1.19401 35.7607 1.62499 35.7607H14.6249C15.0559 35.7607 15.4692 35.9319 15.7739 36.2367C16.0787 36.5414 16.2499 36.9548 16.2499 37.3857C16.2499 37.8167 16.0787 38.23 15.7739 38.5348C15.4692 38.8395 15.0559 39.0107 14.6249 39.0107Z"
                            fill="black" />
                        <path class="rendezVous"
                            d="M11.3749 32.5107H1.62499C1.19401 32.5107 0.780693 32.3395 0.475948 32.0348C0.171204 31.73 0 31.3167 0 30.8857C0 30.4548 0.171204 30.0414 0.475948 29.7367C0.780693 29.4319 1.19401 29.2607 1.62499 29.2607H11.3749C11.8059 29.2607 12.2192 29.4319 12.524 29.7367C12.8287 30.0414 12.9999 30.4548 12.9999 30.8857C12.9999 31.3167 12.8287 31.73 12.524 32.0348C12.2192 32.3395 11.8059 32.5107 11.3749 32.5107Z"
                            fill="black" />
                        <path class="rendezVous"
                            d="M8.12494 26.0107H1.62499C1.19401 26.0107 0.780693 25.8395 0.475948 25.5348C0.171204 25.23 0 24.8167 0 24.3857C0 23.9548 0.171204 23.5414 0.475948 23.2367C0.780693 22.9319 1.19401 22.7607 1.62499 22.7607H8.12494C8.55592 22.7607 8.96924 22.9319 9.27398 23.2367C9.57873 23.5414 9.74993 23.9548 9.74993 24.3857C9.74993 24.8167 9.57873 25.23 9.27398 25.5348C8.96924 25.8395 8.55592 26.0107 8.12494 26.0107Z"
                            fill="black" />
                        <path class="rendezVous"
                            d="M21.1251 38.9375C20.6941 38.9567 20.2732 38.8039 19.9548 38.5127C19.6365 38.2215 19.4469 37.8158 19.4278 37.3848C19.4086 36.9538 19.5614 36.5329 19.8526 36.2146C20.1438 35.8963 20.5495 35.7067 20.9804 35.6875C24.0557 35.4061 26.9871 34.2543 29.4313 32.367C31.8755 30.4797 33.7313 27.9349 34.7813 25.0309C35.8314 22.1268 36.0323 18.9837 35.3604 15.9696C34.6885 12.9555 33.1716 10.1953 30.9875 8.01218C28.8035 5.82909 26.0425 4.31353 23.0281 3.64302C20.0137 2.97251 16.8707 3.17481 13.9671 4.22622C11.0635 5.27763 8.51968 7.13462 6.63346 9.57969C4.74725 12.0248 3.59678 14.9567 3.31682 18.032C3.27803 18.4613 3.07031 18.8575 2.73936 19.1336C2.40841 19.4097 1.98133 19.543 1.55208 19.5043C1.12283 19.4655 0.72657 19.2578 0.450472 18.9268C0.174373 18.5958 0.0410533 18.1688 0.0798409 17.7395C0.533032 12.7399 2.89693 8.10773 6.67945 4.80716C10.462 1.50659 15.3717 -0.208046 20.3866 0.02018C25.4015 0.248406 30.1352 2.40191 33.6023 6.0324C37.0694 9.6629 39.0027 14.4907 38.9999 19.5108C39.0248 24.383 37.2148 29.0861 33.9298 32.6846C30.6448 36.283 26.1257 38.513 21.2713 38.931C21.2226 38.9359 21.1722 38.9375 21.1251 38.9375Z"
                            fill="black" />
                        <path class="rendezVous"
                            d="M19.5 9.76074C19.069 9.76074 18.6557 9.93195 18.3509 10.2367C18.0462 10.5414 17.875 10.9548 17.875 11.3857V19.5107C17.8751 19.9416 18.0464 20.3549 18.3511 20.6595L23.2261 25.5345C23.5326 25.8305 23.943 25.9943 24.3691 25.9906C24.7952 25.9869 25.2027 25.816 25.504 25.5147C25.8053 25.2134 25.9762 24.8059 25.9799 24.3798C25.9836 23.9537 25.8198 23.5432 25.5238 23.2368L21.125 18.8379V11.3857C21.125 10.9548 20.9538 10.5414 20.649 10.2367C20.3443 9.93195 19.931 9.76074 19.5 9.76074Z"
                            fill="black" />
                    </svg>
                    <p id='RendezVous' class="titre text-center fw-bold">
                        {{ __('SideBar.مواعيد') }}
                    </p>
                    </a>
                </div>
                <div class="">
                    <div class="{{ app()->getLocale() === 'ar' ? 'dropleft' : 'dropright' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="35" viewBox="0 0 32 36"
                            fill="none">
                            <path class="Report&Implementation" fill-rule="evenodd" clip-rule="evenodd"
                                d="M31.75 15.7275V28.5C31.75 32.6355 28.3855 36 24.25 36H9.25C5.1145 36 1.75 32.6355 1.75 28.5C1.75 27.672 2.422 27 3.25 27C4.078 27 4.75 27.672 4.75 28.5C4.75 30.981 6.769 33 9.25 33H24.25C26.731 33 28.75 30.981 28.75 28.5V15.7275C28.75 15.483 28.738 15.24 28.7155 15H21.25C18.769 15 16.75 12.981 16.75 10.5V3.0345C16.51 3.012 16.267 3 16.0225 3H9.25C6.76906 3 4.7501 5.0189 4.75 7.49982C4.75 7.49988 4.75 7.49994 4.75 7.5C4.75 8.32843 4.07843 9 3.25 9C2.42157 9 1.75 8.32843 1.75 7.5C1.75 7.49994 1.75 7.49988 1.75 7.49982C1.7501 3.3644 5.11456 0 9.25 0H16.0225C18.8275 0 21.463 1.092 23.4475 3.075L28.675 8.3025C30.658 10.2855 31.75 12.9225 31.75 15.7275ZM27.7615 12C27.4345 11.4315 27.031 10.9005 26.554 10.425L21.3265 5.1975C20.8495 4.7205 20.32 4.317 19.7515 3.99V10.5015C19.7515 11.328 20.425 12.0015 21.2515 12.0015H27.763L27.7615 12Z"
                                fill="black" />
                            <path class="Report&Implementation"
                                d="M10.5751 24.0004H1.17501C0.863379 24.0004 0.56451 23.8766 0.344153 23.6563C0.123795 23.4359 0 23.137 0 22.8254C0 22.5138 0.123795 22.2149 0.344153 21.9945C0.56451 21.7742 0.863379 21.6504 1.17501 21.6504H10.5751C10.8867 21.6504 11.1856 21.7742 11.406 21.9945C11.6263 22.2149 11.7501 22.5138 11.7501 22.8254C11.7501 23.137 11.6263 23.4359 11.406 23.6563C11.1856 23.8766 10.8867 24.0004 10.5751 24.0004Z"
                                fill="black" />
                            <path class="Report&Implementation"
                                d="M8.22508 19.3002H1.17501C0.863379 19.3002 0.56451 19.1764 0.344153 18.9561C0.123795 18.7357 0 18.4368 0 18.1252C0 17.8136 0.123795 17.5147 0.344153 17.2943C0.56451 17.074 0.863379 16.9502 1.17501 16.9502H8.22508C8.53671 16.9502 8.83558 17.074 9.05594 17.2943C9.27629 17.5147 9.40009 17.8136 9.40009 18.1252C9.40009 18.4368 9.27629 18.7357 9.05594 18.9561C8.83558 19.1764 8.53671 19.3002 8.22508 19.3002Z"
                                fill="black" />
                            <path class="Report&Implementation"
                                d="M5.87506 14.6H1.17501C0.863379 14.6 0.56451 14.4762 0.344153 14.2559C0.123795 14.0355 0 13.7366 0 13.425C0 13.1134 0.123795 12.8145 0.344153 12.5942C0.56451 12.3738 0.863379 12.25 1.17501 12.25H5.87506C6.18669 12.25 6.48556 12.3738 6.70591 12.5942C6.92627 12.8145 7.05007 13.1134 7.05007 13.425C7.05007 13.7366 6.92627 14.0355 6.70591 14.2559C6.48556 14.4762 6.18669 14.6 5.87506 14.6Z"
                                fill="black" />
                        </svg>
                        <p class="titre text-center fw-bold" id='RepImp'> {{ __('SideBar.التبليغ | التنفيذ') }}
                        </p>

                        <ul class="parentItem dropdown-menu p-0 "
                            style="
                        {{ app()->getLocale() === 'ar' ? 'border-radius: 18px 0 0 18px;' : 'border-radius: 0 18px 18px 0;' }}">
                            <li><a class="itemdrop dropdown-item fw-bold text-center py-2"
                                    style="
                                    {{ app()->getLocale() === 'ar' ? 'border-radius: 18px 0 0 0;' : 'border-radius: 0 18px 0 0;' }}"
                                    href="{{ route('reports.index') }}"
                                    id="FirstItem">{{ __('content.التبليغ') }}</a></li>
                            <div class="dropdown-divider m-0 "></div>

                            <li><a class="itemdrop dropdown-item fw-bold text-center py-2"
                                    href="{{ route('implementations.index') }}"
                                    id="SecondItem">{{ __('content.التنفيذ') }}</a></li>
                            <div class="dropdown-divider m-0"></div>

                            <li><a class="itemdrop dropdown-item fw-bold text-center py-2 px-5"
                                    style="
                    {{ app()->getLocale() === 'ar' ? 'border-radius: 0 0 0 18px;' : 'border-radius: 0 0 18px 0;' }}"
                                    href="{{ route('FormTribunalDoc.index') }}"
                                    id="LasrItem">{{ __('content.ملفات حسب المحكمة') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <a href="{{ route('Archive.index') }}" class=" text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="35" viewBox="0 0 35 35"
                            fill="none">
                            <path class="Archive"
                                d="M27.7083 2.91667H18.1883C17.9637 2.91667 17.7362 2.86271 17.5365 2.76354L12.934 0.460833C12.3302 0.158958 11.6535 0 10.9769 0H7.29167C3.27104 0 0 3.27104 0 7.29167V24.7917C0 27.386 1.39708 29.8054 3.64438 31.1063C4.34292 31.5117 5.23396 31.271 5.63646 30.5754C6.04042 29.8769 5.80125 28.9858 5.10563 28.5833C3.75521 27.8017 2.91667 26.3492 2.91667 24.7917V11.6667H32.0833V24.7917C32.0833 26.3477 31.2448 27.8002 29.8944 28.5833C29.1973 28.9858 28.9581 29.8783 29.3635 30.5754C29.6333 31.0421 30.1233 31.3031 30.6265 31.3031C30.8744 31.3031 31.1252 31.2404 31.3556 31.1063C33.6029 29.8054 35 27.386 35 24.7917V10.2083C35 6.18771 31.729 2.91667 27.7083 2.91667ZM2.91667 7.29167C2.91667 4.87958 4.87958 2.91667 7.29167 2.91667H10.9769C11.2015 2.91667 11.429 2.96917 11.6287 3.06979L16.2312 5.3725C16.8365 5.67292 17.5131 5.83188 18.1869 5.83188H27.7069C29.6056 5.83188 31.2098 7.05542 31.8135 8.74854H2.91667V7.29167ZM17.4869 14.5833C11.8592 14.5833 7.27854 19.164 7.27854 24.7917C7.27854 30.4194 11.8592 35 17.4869 35C23.1146 35 27.6952 30.4194 27.6952 24.7917C27.6952 19.164 23.1146 14.5833 17.4869 14.5833ZM17.4869 32.0833C13.4662 32.0833 10.1952 28.8123 10.1952 24.7917C10.1952 20.771 13.4662 17.5 17.4869 17.5C21.5075 17.5 24.7785 20.771 24.7785 24.7917C24.7785 28.8123 21.5075 32.0833 17.4869 32.0833ZM19.9762 25.219C20.5465 25.7892 20.5465 26.7108 19.9762 27.281C19.6919 27.5654 19.3185 27.7083 18.9452 27.7083C18.5719 27.7083 18.1985 27.5654 17.9142 27.281L16.4558 25.8227C16.1817 25.5485 16.0285 25.1796 16.0285 24.7917V21.875C16.0285 21.0685 16.6804 20.4167 17.4869 20.4167C18.2933 20.4167 18.9452 21.0685 18.9452 21.875V24.1879L19.9762 25.219Z"
                                fill="black" />
                        </svg>
                        <p id='Archive' class="titre text-center fw-bold">
                            {{ __('SideBar.الأرشيف') }}
                        </p>
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('bibliotheques.index') }}" class=" text-decoration-none text-dark">

                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="32" viewBox="0 0 35 32"
                            fill="none">
                            <path class="bibliotheques"
                                d="M27.7083 2.91667H18.1883C17.9638 2.91667 17.7362 2.86271 17.5365 2.76354L12.934 0.460833C12.3302 0.158958 11.6535 0 10.9769 0H7.29167C3.27104 0 0 3.27104 0 7.29167V24.7917C0 27.386 1.39708 29.8054 3.64438 31.1063C4.34292 31.5117 5.23396 31.271 5.63646 30.5754C6.04042 29.8769 5.80125 28.9858 5.10563 28.5833C3.75521 27.8017 2.91667 26.3492 2.91667 24.7917V11.6667H32.0833V24.7917C32.0833 26.3477 31.2448 27.8002 29.8944 28.5833C29.1973 28.9858 28.9581 29.8783 29.3635 30.5754C29.6333 31.0421 30.1233 31.3031 30.6265 31.3031C30.8744 31.3031 31.1252 31.2404 31.3556 31.1063C33.6029 29.8054 35 27.386 35 24.7917V10.2083C35 6.18771 31.729 2.91667 27.7083 2.91667ZM2.91667 7.29167C2.91667 4.87958 4.87958 2.91667 7.29167 2.91667H10.9769C11.2015 2.91667 11.429 2.96917 11.6287 3.06979L16.2312 5.3725C16.8365 5.67292 17.5131 5.83188 18.1869 5.83188H27.7069C29.6056 5.83188 31.2098 7.05542 31.8135 8.74854H2.91667V7.29167Z"
                                fill="black" />
                            <path class="bibliotheques"
                                d="M24.6249 31.25H11.625C11.194 31.25 10.7807 31.0788 10.4759 30.774C10.1712 30.4693 10 30.056 10 29.625C10 29.194 10.1712 28.7807 10.4759 28.4759C10.7807 28.1712 11.194 28 11.625 28H24.6249C25.0559 28 25.4692 28.1712 25.7739 28.4759C26.0787 28.7807 26.2499 29.194 26.2499 29.625C26.2499 30.056 26.0787 30.4693 25.7739 30.774C25.4692 31.0788 25.0559 31.25 24.6249 31.25Z"
                                fill="black" />
                            <path class="bibliotheques"
                                d="M21.3749 24.75H11.625C11.194 24.75 10.7807 24.5788 10.4759 24.274C10.1712 23.9693 10 23.556 10 23.125C10 22.694 10.1712 22.2807 10.4759 21.9759C10.7807 21.6712 11.194 21.5 11.625 21.5H21.3749C21.8059 21.5 22.2192 21.6712 22.524 21.9759C22.8287 22.2807 22.9999 22.694 22.9999 23.125C22.9999 23.556 22.8287 23.9693 22.524 24.274C22.2192 24.5788 21.8059 24.75 21.3749 24.75Z"
                                fill="black" />
                            <path class="bibliotheques"
                                d="M18.1249 18.25H11.625C11.194 18.25 10.7807 18.0788 10.4759 17.774C10.1712 17.4693 10 17.056 10 16.625C10 16.194 10.1712 15.7807 10.4759 15.4759C10.7807 15.1712 11.194 15 11.625 15H18.1249C18.5559 15 18.9692 15.1712 19.274 15.4759C19.5787 15.7807 19.7499 16.194 19.7499 16.625C19.7499 17.056 19.5787 17.4693 19.274 17.774C18.9692 18.0788 18.5559 18.25 18.1249 18.25Z"
                                fill="black" />
                        </svg>

                        <p id='bibliotheques' class="titre text-center fw-bold">
                            {{ __('SideBar.ملفات الكتابة') }}
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-10 col-sm-10  rounded-5 shadow mx-4" class="Form_add" style="background:#ffffff">
            @yield('content')
            {{-- <a href="{{ route('lang.switch', 'ar') }}">Arabic</a>
            <a href="{{ route('lang.switch', 'fr') }}">French</a> --}}

        </div>
    </div>


</div>

</div>

<div class="footer">
    @extends('Admins.components.footer')
</div>
@livewireScripts
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
<script>
    // Initialization for ES Users
    // import {
    //     Input,
    //     initMDB
    // } from "mdb-ui-kit";

    // initMDB({
    //     Input
    // });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    // Get the SVG element by its ID
    var svgElementsHomes = document.getElementsByClassName('home');
    var svgElementsClients = document.getElementsByClassName('client');
    var svgElementsAvocats = document.getElementsByClassName('avocats');
    var svgElementsUsers = document.getElementsByClassName('users');
    var svgElementsDossiers = document.getElementsByClassName('dossiers');
    var svgElementsbibliotheques = document.getElementsByClassName('bibliotheques');
    var svgElementsArchives = document.getElementsByClassName('Archive');
    var svgElementsRepImps = document.getElementsByClassName('Report&Implementation');
    var svgElementsRendezVous = document.getElementsByClassName('rendezVous');


    // var svgElementsFormTribunalDocs = document.getElementsByClassName('FormTribunalDocs');

    // Get the URL of the page
    var currentURL = window.location.href;

    // Check if the URL contains the word "home"
    if (currentURL.includes('home')) {

        // Iterate over the SVG elements with class "home"
        for (var i = 0; i < svgElementsHomes.length; i++) {
            var svgElementsHome = svgElementsHomes[i];
            // Modify the fill color of the SVG path
            svgElementsHome.setAttribute('fill', '#C09F5E');
            svgElementsHome.setAttribute('background', '#C09F5E');

        }
        var paragraph = document.getElementById("home");
        paragraph.style.color = "#C09F5E";
    } else if (currentURL.includes('client')) {
        for (var i = 0; i < svgElementsClients.length; i++) {
            var svgElementsClient = svgElementsClients[i];
            // Modify the fill color of the SVG path
            svgElementsClient.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("client");
        paragraph.style.color = "#C09F5E";
    } else if (currentURL.includes('avocats')) {
        for (var i = 0; i < svgElementsAvocats.length; i++) {
            var svgElementsAvocat = svgElementsAvocats[i];
            // Modify the fill color of the SVG path
            svgElementsAvocat.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("avocats");
        paragraph.style.color = "#C09F5E";
    } else if (currentURL.includes('users')) {
        for (var i = 0; i < svgElementsUsers.length; i++) {
            var svgElementsUser = svgElementsUsers[i];
            // Modify the fill color of the SVG path
            svgElementsUser.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("users");
        paragraph.style.color = "#C09F5E";
    } else if ((
            currentURL.includes('dossier') || currentURL.includes('affichageDos') ||
            currentURL.includes('Alldoc') || currentURL.includes('/plus/') ||
            currentURL.includes('/remarque/') || currentURL.includes('/recuperations') ||
            currentURL.includes('/DossiersProcedure') ||
            currentURL.includes('assurances') ||
            currentURL.includes('/UpdateReclamationsDiverses/')||
            currentURL.includes('/Succes_Assurance')||
            currentURL.includes('/RoutageDossier')
        )) {
        for (var i = 0; i < svgElementsDossiers.length; i++) {
            var svgElementsDossier = svgElementsDossiers[i];
            // Modify the fill color of the SVG path
            svgElementsDossier.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("dossiers");
        paragraph.style.color = "#C09F5E";
    } else if ((currentURL.includes('bibliotheques'))) {
        for (var i = 0; i < svgElementsbibliotheques.length; i++) {
            var svgElementsbibliotheque = svgElementsbibliotheques[i];
            // Modify the fill color of the SVG path
            svgElementsbibliotheque.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("bibliotheques");
        paragraph.style.color = "#C09F5E";
    } else if ((currentURL.includes('archive'))) {
        for (var i = 0; i < svgElementsArchives.length; i++) {
            var svgElementsArchive = svgElementsArchives[i];
            // Modify the fill color of the SVG path
            svgElementsArchive.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("Archive");
        paragraph.style.color = "#C09F5E";
    } else if ((currentURL.includes('reports'))) {
        for (var i = 0; i < svgElementsRepImps.length; i++) {
            var svgElementsRepImp = svgElementsRepImps[i];
            // Modify the fill color of the SVG path
            svgElementsRepImp.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("RepImp");
        var FirstItem = document.getElementById("FirstItem");
        paragraph.style.color = "#C09F5E";
        FirstItem.style.background = "#C09F5E";
        FirstItem.style.color = "#fff";
    } else if ((currentURL.includes('implementations'))) {
        for (var i = 0; i < svgElementsRepImps.length; i++) {
            var svgElementsRepImp = svgElementsRepImps[i];
            // Modify the fill color of the SVG path
            svgElementsRepImp.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("RepImp");
        var SecondItem = document.getElementById("SecondItem");
        paragraph.style.color = "#C09F5E";
        SecondItem.style.background = "#C09F5E";
        SecondItem.style.color = "#fff";
    } else if ((currentURL.includes('FormTribunalDoc'))) {
        for (var i = 0; i < svgElementsRepImps.length; i++) {
            var svgElementsRepImp = svgElementsRepImps[i];
            // Modify the fill color of the SVG path
            svgElementsRepImp.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("RepImp");
        var LasrItem = document.getElementById("LasrItem");
        paragraph.style.color = "#C09F5E";
        LasrItem.style.background = "#C09F5E";
        LasrItem.style.color = "#fff";
    }else if (currentURL.includes('RendezVous')) {
        for (var i = 0; i < svgElementsRendezVous.length; i++) {
            var svgElementsRendezVou = svgElementsRendezVous[i];
            // Modify the fill color of the SVG path
            svgElementsRendezVou.setAttribute('fill', '#C09F5E');
        }
        var paragraph = document.getElementById("RendezVous");
        paragraph.style.color = "#C09F5E";
    }
</script>

</html>
