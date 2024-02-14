@extends('Admins.components.SideBar')

@section('title', 'Affichage Reports')


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
    <div class="container  py-5">
        <div class="row ">
            <div class="col-xl-12 d-flex px-5">
                <h3 class=" fw-bold"> طلبات التبليغ</h3>
            </div>
            <div class="col-xl-9  col-sm-7 ">
                <div class="row ">
                    <div class="col-10 ">
                        <p class="text-end " style="font-weight: bold;font-size:20px;color: #8C8D93;">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف</p>
                    </div>
                </div>

            </div>
            <div class="col-xl-2 col-sm-4   rounded-3 mx-3 " style="border:1px solid rgb(213, 212, 212);height:46.5px">
                <a href="{{ route('reports.create') }}" class="text-dark text-decoration-none fw-bold">
                    <div class="row d-flex justify-content-between  ">
                        <div class="col-xl-9  col-sm-8 ">
                            <div class="row justify-content-center d-flex align-items-center" style="height: 45px">
                                <div class="col-xl-12 col-sm-10">
                                    <div class="fw-bold  text-center" style="font-size:18px;cursor: pointer;">إضافة طلب
                                        تبليغ</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-sm-3">
                            <div class="rounded-3" style="position: absolute;transform: translateX(5px);background:#C09F5E;height:45.5px;width:46.5px">
                                <svg class="" style="margin-top:11px;" xmlns="http://www.w3.org/2000/svg"
                                    width="45" height="26" viewBox="0 0 25 25" fill="none">
                                    <path d="M2 11H19" stroke="white" stroke-width="3" stroke-linecap="round" />
                                    <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                        
                    </div>
                </a>
            </div>
          
            <div class="col-12">
                <livewire:affichage-report />
            </div>



        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @livewireScripts

@endsection
