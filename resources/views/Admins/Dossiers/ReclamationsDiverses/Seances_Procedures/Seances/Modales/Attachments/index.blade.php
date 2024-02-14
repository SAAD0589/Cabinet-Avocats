<div class="modal fade rounded-5" id="attachmentModale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row justify-content-between">
                    <div class="col-10 ">
                        <h3 class="fw-bold ">{{ __('content.لائحة مرفقات') }}</h3>
                    </div>
                    <div class="col-2">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row py-3">
                        <div class="{{app()->getLocale() === 'ar' ?'col-xl-7 col-sm-6':'col-xl-6 col-sm-6'}}" style="font-size:18px;">
                            <p class="fw-bold ">{{ __('content.مرجع الملف:') }}
                                <span style="color: #C09F5E;">{{ $id }}</span>
                            </p>
                        </div>
                        <div class="{{app()->getLocale() === 'ar' ?'col-xl-4 col-sm-6':'col-xl-6 col-sm-6'}}
                          border rounded-3 ">
                            <a data-dismiss="modal" aria-label="Close" data-target="#addattachment" data-toggle="modal"
                                id="test" data-id="val" class=" text-dark text-decoration-none fw-bold">
                                <div class="row d-flex justify-content-between  ">
                                    @if (app()->getLocale() === 'ar')
                                        <div class="col-xl-9  col-sm-8">
                                            <div class="row justify-content-center d-flex align-items-center"
                                                style="height: 45px">
                                                <div class="col-xl-12 col-sm-10">
                                                    <div class="fw-bold  text-center"
                                                        style="font-size:18px;cursor: pointer;">
                                                        {{ __('content.مرفق جديد') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3  col-sm-3">
                                            <div class="rounded-3 "
                                                style="position: absolute;transform: translateX(-10px);background:#C09F5E;height:45.5px;width:46.5px">
                                                <svg class="" style="margin-top:11px;"
                                                    xmlns="http://www.w3.org/2000/svg" width="45" height="25"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <path d="M2 11H19" stroke="white" stroke-width="3"
                                                        stroke-linecap="round" />
                                                    <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-xl-2  col-sm-2">
                                            <div class="rounded-3 "
                                                style="position: absolute;transform: translateX(-18px);background:#C09F5E;height:45.5px;width:46.5px">
                                                <svg class="" style="margin-top:11px;"
                                                    xmlns="http://www.w3.org/2000/svg" width="50" height="25"
                                                    viewBox="0 0 25 25" fill="none">
                                                    <path d="M2 11H19" stroke="white" stroke-width="3"
                                                        stroke-linecap="round" />
                                                    <path d="M10.5 2.46387L10.5 19.5349" stroke="white" stroke-width="3"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-xl-10  col-sm-10 ">
                                            <div class="row justify-content-center d-flex align-items-center"
                                                style="height: 45px">
                                                <div class="col-xl-12 col-sm-12">
                                                    <div class="fw-bold  text-center"
                                                        style="font-size:18px;cursor: pointer;">
                                                        {{ __('content.مرفق جديد') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif


                                </div>
                            </a>
                        </div>
                    </div>



                </div>

            </div>

            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-truncate">{{ __('content.تاريخ تحميل') }}</th>
                                <th class="text-truncate">{{ __('content.اسم المرفق') }}</th>
                                <th class="text-truncate">{{ __('content.نوع المرفق') }}</th>
                                <th></th>
                            </tr>

                        </thead>
                        <tbody id="tbody">

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>


@include('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.Seances.Modales.Attachments.add')
