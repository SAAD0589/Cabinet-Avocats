@extends('Admins.components.SideBar')

@section('title', 'Affichage Annuaire Telephonique')


@section('content')
    @livewireStyles
    <style>
        h3 {
            font-size: 3rem;
        }
    </style>
    <div class="container py-5">
        <div class="row ">
            <div class="col-12 d-flex  px-5 py-3">
                <h3 class="py-1 fw-bold">
                    دليل الهاتف
                </h3>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-7 col-sm-6 ">
                    <div class="row justify-content-between">
                        <div class="col-xl-11 col-sm-12">
                            <p style="font-weight: bold;font-size:20px;color: #8C8D93;">
                                {{ __('content.TextDoc') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-4 col-sm-3' : 'col-xl-4 col-sm-4' }} mx-1 ">
                    <div class="row justify-content-end">
                        <div class="{{ app()->getLocale() === 'ar' ? 'col-xl-6' : 'col-xl-8' }} rounded-4 "
                            style="border:1px solid rgb(213, 212, 212);height:46.5px">
                            <a href="{{ route('AnnuaireTelephonique.create') }}"
                                class="text-dark text-decoration-none fw-bold">
                                <div class="row d-flex justify-content-between ">
                                    @if (app()->getLocale() === 'ar')
                                        <div class="col-xl-10 col-sm-10 align-self-center ">
                                            <p class=" my-2 text-center" style="font-size:18px;cursor: pointer;">
                                                إضافة دليل هاتف
                                            </p>
                                        </div>
                                        <div class="col-xl-2  col-sm-2">
                                            <div class="rounded-3"
                                                style="position: absolute; transform: translateX(22px);background:#C09F5E;height:45.5px;width:46.5px">
                                                <svg class="" style="margin-top:11px;"
                                                    xmlns="http://www.w3.org/2000/svg" width="45" height="26"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <path d="M2 11H19" stroke="white" stroke-width="3"
                                                        stroke-linecap="round" />
                                                    <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-xl-2 col-sm-2">
                                            <div class="rounded-3"
                                                style="position: absolute; transform: translateX(-13px);background:#C09F5E;height:45.5px;width:46.5px">
                                                <svg style="margin-top:11px;" xmlns="http://www.w3.org/2000/svg"
                                                    width="50" height="26" viewBox="0 0 25 25" fill="none">
                                                    <path d="M2 11H19" stroke="white" stroke-width="3"
                                                        stroke-linecap="round" />
                                                    <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 col-sm-10 align-self-center">
                                            <p class="my-2 text-center" style="font-size:18px;cursor: pointer;">
                                                إضافة دليل هاتف
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12">
            <livewire:affichage-annuaire-telephonique />
        </div>
    </div>

    @livewireScripts

@endsection
