<div class="modal fade " id="updateAtt" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">

    <form action="{{route('Updateatt')}}" method="post">
        @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="fw-bold ">
                                {{ __('content.تعديل مرفق') }}
                            </h3>
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
                        
                        <div class="col-12 py-3">
                            <input type="hidden" class="id_att" id="" name="id_att"  class="form-control">

                            <div class="relative">
                                <input class="name inputcheck input-cal input-base  form-control" id="input" placeholder=""
                                     name="name" type="text">
                                <label id="label-input" class="fw-bold"
                                    style="font-weight: bold;font-size:18px;
                                    {{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">
                                    {{ __('content.اسم المرفق') }}</label>
                            </div>

                            {{-- <input type="text"  placeholder='{{ __('content.اسم المرفق') }}' name="name"  class="form-control"
                                style="font-weight: bold;font-size:18px"  id="name"> --}}
                            @error('name')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-6 py-2">
                            {{-- <input type="file" class="form-control" name="file_att" placeholder="الإجراء"
                                dir="rtl" style="font-weight: bold;font-size:18px" id="file_att"> --}}

                                <div class="input-group">

                                    <input type="text" id="Checkfile_att" class=" form-control rounded-1" readonly
                                        placeholder= '{{ __('content.الإجراء') }}' aria-label="Recipient's username"
                                        aria-describedby="basic-addon2"
                                        style="font-weight: bold;font-size:18px;background-color:#ffffff" name="file_att">
                                    <input type="file" name="" id="file_att" hidden />
                                    <div class="input-group-append" onclick="handleFileSelection('Checkfile_att', 'file_att')">
                                        <img src="{{ asset(app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg') }}"
                                            alt="" srcset="" style="cursor: pointer">
                                    </div>
    
                                </div>
    
                                
                            @error('file_att')
                                <p class="text-end text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-6 py-2">
                            <select class="type_att form-select"  name="type_att" id="">
                                <option selected> {{ __('content.نوع المرفق') }}</option>
                                <option value="bureau">bureau</option>
                                <option value="adverse">adverse</option>
                                <option value="trib">trib</option>
                              </select>
                              @error('type_att')
                              <p class="text-end text-danger">{{ $message }}</p>
                          @enderror
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
                                <div class="col-6 ">
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="text-capitalize btn  w-100 py-2"
                                        style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px">{{ __('content.إلغاء') }}</button>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    </form>
</div>
</div>
<script>
       function handleFileSelection(inputFieldId, fileInputId) {
                    let inputField = document.getElementById(inputFieldId);
                    let fileInput = document.getElementById(fileInputId);

                    fileInput.click(); // Trigger file input click

                    fileInput.addEventListener('change', function() {
                        if (fileInput.files.length > 0) {
                            // Set the value of the input field to the selected file name
                            inputField.value = fileInput.files[0].name;
                            inputField.setAttribute('readonly', true); // Set as readonly
                        }
                    });
                }
</script>