<div class="modal fade rounded-5" id="updateProcedure" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('updatePro') }}" method="post">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">

                        <div class="row">
                            <div class="col-12">
                                <h3 class="fw-bold ">{{ __('content.تعديل إجراء') }}</h3>
                            </div>
                            <div class="col-12">
                                <h4 class="fw-bold ">{{ __('content.مرجع الملف:') }}
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
                                <input type="hidden" id="idPro" name="idPro" class="form-control">
                                {{-- <input type="text" placeholder="{{ __('content.الإجراء المطلوب') }}"
                                    class="form-control" style="font-weight: bold;font-size:18px"> --}}


                                    <div class="relative">
                                        <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                             name="dossier_tr_id" type="text">
                                        <label id="label-input" class="fw-bold"
                                            style="font-weight: bold;font-size:18px;
                                            {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                            {{ __('content.الإجراء المطلوب') }}</label>
                                    </div>
                      

                            </div>



                            <div class="col-6 py-3">
                                <input type="date" class="datePicker form-control" name="date_responsable"
                                    placeholder='{{ __('content.تاريخ التكليف بالإجراء') }}'
                                    style="font-weight: bold;font-size:18px" id="date_responsable">

                            </div>
                            <div class="col-6 py-2">
                                <select class="form-select" name="procedure_name" id="procedure_name"
                                    style="font-weight: bold;font-size:18px">
                                    <option selected> {{ __('content.الإجراء المطلوب') }}</option>
                                    <option value="test1">test1</option>
                                    <option value="test2">test2</option>
                                    <option value="test3">test3</option>
                                </select>

                            </div>

                            <div class="col-6 py-2">

                                <div class="relative">
                                    <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                         name="resp_remarque" type="text">
                                    <label id="label-input" class="fw-bold"
                                        style="font-weight: bold;font-size:18px;
                                        {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                        {{ __('content.المسؤول عن الإجراء') }}</label>
                                </div>

                                
                                {{-- <input type="text" class="form-control" name="resp_remarque"
                                    placeholder='{{ __('content.المسؤول عن الإجراء') }}'
                                    style="font-weight: bold;font-size:18px" id="resp_remarque"> --}}

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
                                        <button type="button" data-dismiss="modal" aria-label="Close"
                                            class="btn  w-100 py-2 text-capitalize"
                                            style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إلغاء') }}</button>
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
