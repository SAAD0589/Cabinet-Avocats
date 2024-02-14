<form action="{{route('DeleteReport')}}" method="post">
    @csrf
    <div class="modal fade" id="DeletedReport" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true" style="height: 200px">
    
      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
      <div class="modal-dialog modal-dialog-centered" role="document">
    
        <div class="modal-content">
          <input type="hidden" value="" name="inputDelete" id="FromReport">
          <div class="row justify-content-end p-2">
              <div class="col-10 ">
                  <h4 class="modal-title text-center fw-bold" id="exampleModalLongTitle">هل تؤكد عملية الحذف من الارشيف؟</h4>
  
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
                          <button type="button" class="btn w-100 border rounded-3" style="background: #fff" data-dismiss="modal">لا</button>
  
                      </div>
                      <div class="col-6">
                          <button type="submit" class="btn text-light w-100 border rounded-3" style="background: red">نعم</button>
  
                      </div>
                  </div>
                
              </div>
              
          
          </div>
         
          
        </div>
    
      </div>
    </div>
  </form>