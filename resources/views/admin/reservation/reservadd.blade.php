{{-- category add --}}
<div id="addreserv" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="warning-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-warning">
                <h4 class="modal-title" id="warning-header-modalLabel">Add Reservation</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
              <form action="{{ route('reservation.store') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
  
  
                @csrf

                
                <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="validationCustom01">FirstName</label>
                            <input type="text" class="form-control" id="validationCustom01" name="firstname" placeholder="Name" >
                  
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="validationCustom01">LastName</label>
                            <input type="text" class="form-control" id="validationCustom01" name="lastname" placeholder="Name" >
                  
                        </div>
                </div>

                <div class="row g-2">

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="validationCustom02">Email</label>
                        <input type="text" class="form-control" id="validationCustom02" name="email"
                            placeholder="Email" >
                     
                    </div>
    
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="validationCustom03">Phone Number</label>
                        <input type="text" class="form-control" id="validationCustom03" name="phone_number"
                            placeholder="Phone" >
                       
                    </div>

                </div>
               

                <div class="mb-3">
                    <label class="form-label" >Reservation Date</label>
                    <input type="datetime-local" class="form-control" id="reservation_date" name="reservation_date"
                        placeholder="reservation table" >
                   
                </div>

                
              
                <div class="mb-3">
                    <label for="inputState" class="form-label">Table</label>

                    <select class="form-select" id="table_id" name="table_id" aria-label="Floating label select example">
                        @foreach($tableres as $tableres)
                        <option value="{{ $tableres->id }}">{{ $tableres->name }}({{ $tableres->guest_number }} Guest) </option>
                        @endforeach
                    </select>
                   
                </div>


                <div class="mb-3">
                    <label class="form-label" for="validationCustom03">Guest Number</label>
                    <input type="number" class="form-control" id="validationCustom03" name="guest_number"
                        placeholder="guest number" >
                   
                </div>

                </div>
               
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
            
            </div>
          
          </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  
  
  
  
  