<form action="{{route('bibliotheques-delete')}}" method="post">
  @csrf
  <div class="modal fade" id="DeleteBib" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true" style="height: 200px">
  
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <input type="hidden" name="inputDelete" id="inputDelete" value="">
        <div class="row justify-content-end p-2">
            <div class="col-10 ">
                <h4 class="modal-title text-center fw-bold" id="exampleModalLongTitle">
                  {{ __('content.هل تؤكد عملية الحذف ؟') }}
                </h4>

            </div>
            <div class="col-1">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
          </div>
          <div class="row py-2 ">
            <div class="col-12 ">
                <div class="row px-2">
                    <div class="col-6">
                        <button type="button" class="btn w-100 border rounded-3 text-capitalize" style="background: #fff" data-dismiss="modal">{{ __('content.لا') }}</button>

                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn text-light w-100 border rounded-3 text-capitalize" style="background: red">{{ __('content.نعم') }}</button>

                    </div>
                </div>
              
            </div>
            
        
        </div>
       
        
      </div>
  
    </div>
  </div>
</form>