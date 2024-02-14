<form action="{{route('AddAttachement')}}" method="post" id="attachmentForm" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="attachmentInput" name="attachment" value="">

    <div class="modal fade rounded-5" id="addattachment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header ">
            <div class="row ">
                <div class="col-12">
                    <h1 class="fw-bold ">
                      {{ __('content.إضافة مرفق') }}
                    </h1>
                </div>
                <div class="col-12">
                    <h4 class="fw-bold ">{{ __('content.مرجع الملف:') }}
                        <span style="color: #C09F5E">{{$id}}</span>
                        
                    </h4>
                </div>
             
            </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       
        <div class="modal-body">
           <div class="row py-2">
            <div class="col-12">

              <div class="relative">
                <input class="inputcheck input-cal input-base  form-control" id="input" placeholder=""
                     name="name" type="text">
                <label id="label-input" class="fw-bold"
                    style="font-weight: bold;font-size:18px;{{ app()->getLocale() === 'ar' ? 'right: 10px' : 'left: 10px' }}">{{ __('content.اسم المرفق') }}</label>
            </div>
            @error('name')
            <p class="text-end text-danger">{{ $message }}</p>
            @enderror

                {{-- <input type="text" class="form-control" placeholder='{{ __('content.اسم المرفق') }}' name="name"
                 style="font-weight: bold;font-size:18px"> --}}
            </div>
            <div class="col-6 py-3">
              {{-- <input type="file"  class="form-control" name="file_att"> --}}
              <div class="input-group">
               
               <input type="text" id="checkAttachment" class="form-control rounded-1" readonly
                   placeholder= '{{ __('content.إضافة مرفق') }}' aria-label="Recipient's username"
                   aria-describedby="basic-addon2"
                   style="font-weight: bold;font-size:18px;background-color:#ffffff" >
               <input type="file" name="file_att" id="attachment" hidden />
               <div class="input-group-append" onclick="handleFileSelection('checkAttachment','attachment')">
                   <img  src="{{ asset(
                       app()->getLocale() === 'ar' ? 'assets/icons/save.svg' : 'assets/icons/save2.svg' )}}" alt=""
                          srcset="" style="cursor: pointer">
               </div>
               @error('file_att')
               <p class="text-end text-danger">{{ $message }}</p>
             @enderror
           </div>
         </div>
            <div class="col-6 py-3">
                <select class="form-select" aria-label="Default select example" name="type_att"
                 style="font-weight: bold;font-size:18px">
                    <option selected>{{ __('content.نوع المرفق') }} </option>
                    <option value="bureau">bureau</option>
                    <option value="adverse">adverse</option>
                    <option value="trib">trib</option>
                  </select>
                  @error('type_att')
                  <p class="text-end text-danger">{{ $message }}</p>
                @enderror
            </div>
       

            <div class="row d-flex justify-content-center py-2">
                <div class="col-12  ">
                    <div class="row">
                      <div class="col-6">
                        <button type="submit" class="btn text-light w-100 py-2 text-capitalize"
                            style="width:125px;background: #C09F5E;font-weight: bold;font-size:18px" >{{ __('content.إضافة') }}</button>
                    </div>
                        <div class="col-6">
                            <a href="" class="btn  w-100 py-2 text-capitalize"
                                style="color:#C09F5E;width:125px;background: white;border:1px solid #C09F5E;font-weight: bold;font-size:18px"
                                >{{ __('content.إلغاء') }}</a>
                        </div>
                       
                    </div>
                 </div>
                </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</form>

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
