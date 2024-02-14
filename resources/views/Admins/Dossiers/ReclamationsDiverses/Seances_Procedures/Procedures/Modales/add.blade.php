  

  <div class="modal fade rounded-5"  id="addProcedure" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <div class="row ">
                <div class="col-12">
                    <h1 class="fw-bold ">{{ __('content.إضافة إجراء') }}</h1>
                </div>
                <div class="col-12">
                    <h4 class="fw-bold ">
                      {{ __('content.مرجع الملف:') }}
                      <span style="color: #C09F5E">{{$id}}</span>
                        
                    </h4>
                </div>
             
            </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('procedure.store')}}" method="post" >
          @csrf
        <div class="modal-body">
           <div class="row py-3">
              <div class="col-6 py-3">

                <div class="relative">
                  <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                       name="dossier_tr_id" type="text" value="{{$id}}">
                  <label id="label-input" class="fw-bold"
                      style="font-weight: bold;font-size:18px;
                      {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                      {{ __('content.رقم الملف') }}</label>
              </div>


                {{-- <input type="text" class="form-control" readonly value="{{$id}}"
                name="dossier_tr_id"
                 placeholder="رقم الملف"  style="font-weight: bold;font-size:18px"> --}}
              </div>


              <div class="col-6 py-3">
                <input type="hidden"  name="id_doc" value="{{$id}}">
  
                <input type="text" class="datePicker form-control" readonly value="{{$date}}"
                name="date_procedure"
                placeholder="تاريخ التسجيل"  style="font-weight: bold;font-size:18px">
                 
              </div>
              
              <div class="col-12 py-2">
                 <select class="form-select" aria-label="Default select example" 
                 style="font-weight: bold;font-size:18px" name="incharage">
                     <option selected value=""> {{ __('content.الكاتبة المكلفة بالتسجيل') }}</option>
                   @foreach ($secretarys as $secretary)
                   <option value="{{$secretary->id}}">{{$secretary->name}}</option>
                   @endforeach
                   </select>
                   @error('incharage')
                   <p class="text-end text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="col-6 py-3">
                <select class="form-select" aria-label="Default select example" 
                  style="font-weight: bold;font-size:18px" name="procedure_name">
                      <option selected> {{ __('content.الإجراء المطلوب') }}</option>
                      <option value="test1">test1</option>
                      <option value="test2">test2</option>
                      <option value="test3">test3</option>
                    </select>
                    @error('procedure_name')
                    <p class="text-end text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="col-6 py-3">


                <div class="relative">
                  <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                       name="" type="text" >
                  <label id="label-input" class="fw-bold"
                      style="font-weight: bold;font-size:18px;
                      {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                      {{ __('content.الإجراءالمطلوب') }}</label>
              </div>


                {{-- <input type="text" class="form-control" 
                 placeholder="{{ __('content.الإجراءالمطلوب') }}" 
                  style="font-weight: bold;font-size:18px"> --}}

                 @error('resp_remarque')
                 <p class="text-end text-danger">{{ $message }}</p>
                @enderror
                </div>
              <div class="col-6">
                {{-- <input type="text" class="form-control" name="resp_remarque"
                placeholder="{{ __('content.المسؤول عن الإجراء') }}" 
                 style="font-weight: bold;font-size:18px"> --}}


                 <div class="relative">
                  <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                       name="resp_remarque" type="text" >
                  <label id="label-input" class="fw-bold"
                      style="font-weight: bold;font-size:18px;
                      {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                      {{ __('content.المسؤول عن الإجراء') }}</label>
              </div>


                @error('resp_remarque')
                    <p class="text-end text-danger">{{ $message }}</p>
                 @enderror
              </div>
              <div class="col-6 ">
                <input type="date" class="datePicker form-control" name="date_responsable"
                 placeholder="تاريخ التكليف بالإجراء"  style="font-weight: bold;font-size:18px">
                 @error('date_responsable')
                 <p class="text-end text-danger">{{ $message }}</p>
                  @enderror
              </div>
                      <div class="col-6 py-4">
                        <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                            style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px" >{{ __('content.إضافة') }}</button>
                      </div>
                      <div class="col-6 py-4">
                            <a href="" class="btn  w-100 py-2 text-capitalize"
                                style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">
                                {{ __('content.إلغاء') }}</a>
                      </div>
                       
                </div>
           </div>
  
  
  
        </div>
      </form>
  
      </div>
    </div>
  </div>
  
  
  
  