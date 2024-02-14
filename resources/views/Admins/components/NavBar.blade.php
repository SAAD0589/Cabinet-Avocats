<style>
    .text {
        font-weight: bold;
        border-bottom: 2px solid #C09F5E;
        border-top: 2px solid #C09F5E;
        color: #fff;
        font-family: 'Playball', cursive;
        font-family: 'Poppins', sans-serif;
        font-family: 'Roboto', sans-serif;
        font-family: 'Roboto Slab', serif;
        padding-top: 5px;
        padding-bottom: 5px;


    }

    .item:active {
        color: #fff;
        text-decoration: none;
        background-color: #C09F5E;
    }
</style>
<div class=" my-3" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">
    <div class="d-flex  justify-content-between">
        <div class="col-xl-7">
            <div class="d-flex  py-2 ">

                <div class="col-xl-6 col-sm-9 px-5 ">
                    <div class="row ">
                        <div class="col-xl-10  col-sm-12  align-self-center">
                            <span class="text text-dark fw-bold">OUAHBI</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="35" viewBox="0 0 42 56"
                                fill="none">
                                <path
                                    d="M37.7272 55.5511H41.0894V55.9973H28.784V55.5511H32.5897L24.5967 34.9311C21.8062 35.8252 18.5073 37.2932 15.3351 39.8466C10.451 43.7404 7.53382 49.1676 6.96206 50.8268C6.51865 53.2527 7.27877 55.5511 9.30911 55.5511H11.4661V55.9973H1.50781V55.5511H2.96639C4.67834 55.5511 6.01024 52.4222 7.0254 49.6139C10.641 42.3362 16.7937 36.9744 24.4683 34.5486L18.379 18.9078L20.7894 11.5664C20.7894 11.5664 22.7564 16.9919 23.1998 18.0774L29.1624 33.4631C29.8609 33.3994 30.4943 33.3356 31.0027 33.2719V33.6544C30.5593 33.7181 29.9876 33.7819 29.2908 33.8456L37.7272 55.5511Z"
                                    fill="#A88F5D" />
                                <path
                                    d="M41.0892 22.598C41.0892 32.684 36.3318 40.7921 28.6572 44.0467L28.0237 44.3017C27.3886 44.5567 26.7552 44.748 26.1834 45.0047L25.2316 45.2597C22.7579 46.0901 20.0941 46.0901 17.557 46.0901H16.9219C16.2868 46.0264 16.5418 46.0264 15.8434 45.9626C14.3848 45.8989 13.3696 45.5801 12.7345 45.3234C12.5445 45.2597 12.3545 45.1959 12.2278 45.1322C11.911 45.0047 11.7844 44.9409 11.5943 44.8772C10.1358 44.2397 8.93055 43.4092 7.97873 42.515C6.71018 41.5571 5.94839 40.5354 5.31495 39.6429C5.18826 39.5154 5.12492 39.3242 4.99823 39.1966L4.87154 39.0054C3.66634 37.0258 2.96789 34.9203 2.3978 33.7711H2.46114C1.1926 30.5786 0.494141 27.0035 0.494141 23.1096C0.494141 9.95854 8.80386 0 20.7925 0C33.9864 0 41.0909 9.57603 41.0909 22.598H41.0892ZM14.7665 1.59545C8.67717 4.78802 6.26677 13.0219 6.26677 22.7255C6.26677 25.2151 6.4568 27.7047 6.90188 30.0031C9.18559 24.8963 14.8949 23.4284 20.0324 23.4284C28.0887 23.4284 32.6545 22.9821 35.32 22.4705C35.2566 12.5119 31.9577 3.51132 24.9816 0.956261C23.903 0.701258 22.6345 0.573757 21.3026 0.573757C18.8922 0.573757 16.3551 0.956261 15.1499 1.46794L14.7699 1.59545H14.7665ZM28.0871 43.218C33.2879 39.5792 35.3816 31.919 35.3816 22.9821C32.5912 23.4284 27.897 23.8126 20.0307 23.8126C13.1796 23.8126 6.33012 26.7485 6.33012 34.6016C6.33012 37.4737 7.47198 40.6025 9.43897 42.7096C9.629 42.8372 9.94572 43.1559 10.3908 43.4126C11.596 44.1793 12.8012 44.753 13.9431 45.0718C15.7184 45.4543 17.812 45.5818 19.4623 45.6455C21.6827 45.6455 26.0584 44.6239 27.8354 43.4109L28.0887 43.2197L28.0871 43.218Z"
                                    fill="#A88F5D" />
                            </svg>
                            <span class="text text-dark fw-bold">AVOCATS</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6  col-sm-10 ">
                    <input type="text" class="inputAff rounded-5 form-control "
                        placeholder="{{ __('content.بحث') }} ....">
                </div>
            </div>
        </div>


        <div class="col-xl-2 col-sm-2 ">


            <div class="row mx-4" style="position: relative">
                <div class="col-xl-3 col-sm-4 px-1" style="cursor: pointer">
                    <a href="{{route('AnnuaireTelephonique.index')}}">
                        <img src="{{ asset('assets/images/address-book.png') }}" alt="Background Image"
                            style="position: absolute;
                     {{ app()->getLocale() === 'ar' ? 'transform: translateX(-13px);' : 'transform: translateX(12px);' }}
                    height:40%;top:27%">

                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="50" viewBox="0 0 73 73"
                            fill="none">
                            <g filter="url(#filter0_d_2112_1497)">
                                <path
                                    d="M36.5 64C53.3447 64 67 50.3447 67 33.5C67 16.6553 53.3447 3 36.5 3C19.6553 3 6 16.6553 6 33.5C6 50.3447 19.6553 64 36.5 64Z"
                                    fill="#F9F9F9" />
                            </g>
                            <defs>
                                <filter id="filter0_d_2112_1497" x="0" y="0" width="73" height="73"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="3" />
                                    <feGaussianBlur stdDeviation="3" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.161 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_2112_1497" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2112_1497"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-4 px-2" style="position: relative;cursor: pointer;">
                    <svg style="position: absolute; 
                    {{ app()->getLocale() === 'ar' ? ' top: 5; left: -1' : ' top: 6; left: 10' }}"
                        xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 12"
                        fill="none">
                        <path
                            d="M6 12C9.31371 12 12 9.31371 12 6C12 2.68629 9.31371 0 6 0C2.68629 0 0 2.68629 0 6C0 9.31371 2.68629 12 6 12Z"
                            fill="#FD1342" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="50" viewBox="0 0 73 73"
                        fill="none">
                        <g filter="url(#filter0_d_2112_1493)">
                            <path
                                d="M36.5 64C53.3447 64 67 50.3447 67 33.5C67 16.6553 53.3447 3 36.5 3C19.6553 3 6 16.6553 6 33.5C6 50.3447 19.6553 64 36.5 64Z"
                                fill="#F9F9F9" />
                        </g>
                        <defs>
                            <filter id="filter0_d_2112_1493" x="0" y="0" width="73" height="73"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="3" />
                                <feGaussianBlur stdDeviation="3" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.161 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_2112_1493" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2112_1493"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </div>

                <div class="col-xl-3 col-sm-4">
                    <div class="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" id="dropdownMenuButton" data-mdb-dropdown-init
                            data-mdb-ripple-init aria-expanded="false" style="cursor: pointer" width="45"
                            height="50" viewBox="0 0 73 73" fill="none">
                            <g filter="url(#filter0_d_2112_1500)">
                                <path
                                    d="M36.5 64C53.3447 64 67 50.3447 67 33.5C67 16.6553 53.3447 3 36.5 3C19.6553 3 6 16.6553 6 33.5C6 50.3447 19.6553 64 36.5 64Z"
                                    fill="#F9F9F9" />
                            </g>
                            <path
                                d="M45 36C46.1046 36 47 35.1046 47 34C47 32.8954 46.1046 32 45 32C43.8954 32 43 32.8954 43 34C43 35.1046 43.8954 36 45 36Z"
                                fill="#C09F5E" />
                            <path
                                d="M36 36C37.1046 36 38 35.1046 38 34C38 32.8954 37.1046 32 36 32C34.8954 32 34 32.8954 34 34C34 35.1046 34.8954 36 36 36Z"
                                fill="#C09F5E" />
                            <path
                                d="M27 36C28.1046 36 29 35.1046 29 34C29 32.8954 28.1046 32 27 32C25.8954 32 25 32.8954 25 34C25 35.1046 25.8954 36 27 36Z"
                                fill="#C09F5E" />
                            <defs>
                                <filter id="filter0_d_2112_1500" x="0" y="0" width="73" height="73"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="3" />
                                    <feGaussianBlur stdDeviation="3" />
                                    <feColorMatrix type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.161 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_2112_1500" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2112_1500"
                                        result="shape" />
                                </filter>
                            </defs>
                        </svg>
                        <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">

                            @if (app()->getLocale() === 'ar')
                                <li>
                                    <a class="item dropdown-item fw-bold" href="{{ route('lang.switch', 'fr') }}">
                                        Française
                                        <i class="bi bi-globe2 px-1"></i>

                                    </a>
                                </li>
                                <li><a class="item dropdown-item text-danger fw-bold" href=""
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-left"></i>
                                        خروج
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li>
                                    <a class="item dropdown-item fw-bold" href="{{ route('lang.switch', 'ar') }}">عربي
                                        <i class="bi bi-globe2"></i>

                                    </a>
                                </li>
                                <li><a class="item dropdown-item text-danger fw-bold" href=""
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-left"></i>
                                        LogOut
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
