@extends('Admins.components.SideBar')

@section('title', 'Affichage Form Tribunals Dossiers')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }

        .switch {
            --circle-dim: 1.1em;
            font-size: 17px;
            position: relative;
            display: inline-block;
            width: 3.5em;
            height: 1.7em;
        }

        /* Hide default HTML checkbox */

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            transition: .4s;
            border-radius: 30px;
        }

        .slider-card {
            position: absolute;
            content: "";
            height: var(--circle-dim);
            width: var(--circle-dim);
            border-radius: 20px;
            left: 0.3em;
            bottom: 0.3em;
            transition: .4s;
            pointer-events: none;
        }

        .slider-card-face {
            position: absolute;
            inset: 0;
            backface-visibility: hidden;
            perspective: 1000px;
            border-radius: 50%;
            transition: .4s transform;
        }

        .slider-card-front {
            background-color: #DC3535;
        }

        .slider-card-back {
            background-color: #379237;
            transform: rotateY(180deg);
        }

        input:checked~.slider-card .slider-card-back {
            transform: rotateY(0);
        }

        input:checked~.slider-card .slider-card-front {
            transform: rotateY(-180deg);
        }

        input:checked~.slider-card {
            transform: translateX(1.5em);
        }

        input:checked~.slider {
            background-color: #fff;
        }
    </style>
    <div class="container py-5">
        <div class="row py-3 ">
            <div class="col-xl-11 col-sm-10 d-flex   py-2">
                <h3 class="py-1 fw-bold text-end "> ملفات حسب المحكمة</h3>
            </div>
            <div class="col-xl-1 col-sm-2  align-self-center">
                <a href="" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="50" viewBox="0 0 64 68" fill="none">
                        <path
                            d="M19.6923 0.5H44.3077C54.9069 0.5 63.5 9.10025 63.5 19.7101V48.2899C63.5 58.8998 54.9069 67.5 44.3077 67.5H19.6923C9.09312 67.5 0.5 58.8998 0.5 48.2899V19.7101C0.5 9.10025 9.09312 0.5 19.6923 0.5Z"
                            stroke="#C09F5E" />
                        <path
                            d="M33.9663 45.0461C34.5475 45.6273 35.4898 45.6273 36.071 45.0461C36.6522 44.4649 36.6522 43.5226 36.071 42.9414L33.9663 45.0461ZM23.9764 35.0563L33.9663 45.0461L36.071 42.9414L26.0812 32.9515L23.9764 35.0563Z"
                            fill="#C09F5E" />
                        <path d="M35.062 24.0312L25.0305 34.0628" stroke="#C09F5E" stroke-width="3"
                            stroke-linecap="round" />
                    </svg>
                </a>
            </div>
            

            <div class="col-xl-12 col-sm-12 ">
                <div class="row ">
                    <div class="col-xl-8 xol-sm-12">
                        <p class=" " style="font-weight: bold;font-size:20px;color: #8C8D93;

                  ">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف</p>
                    </div>
                </div>

            </div>

            <div class="col-12">
                <livewire:form-tribunal-doc />
            </div>

        </div>
    </div>

    @livewireScripts

@endsection
