{{-- category add --}}
<div id="addtable" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="warning-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-warning">
                <h4 class="modal-title" id="warning-header-modalLabel">Add Table</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
              <form action="{{ route('tables.store') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
  
  
                @csrf
  
                <div class="mb-3">

                    <label class="form-label" for="validationCustom01">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Name"  required>
                  
                </div>


                <div class="mb-3">

                    <label class="form-label" for="validationCustom02">Guest Number</label>
                    <input type="number" class="form-control" id="validationCustom02" name="guest_number"  required>
                 
                </div>

                <div class="mb-3">
                    <label for="inputState" class="form-label">Status</label>

                    <select class="form-select" id="floatingSelect" name="status" aria-label="Floating label select example">
                        @foreach(App\Enums\TableStatus::cases() as $status)
                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                   
                </div>

                <div class="mb-3">
                    <label for="inputState" class="form-label">Location</label>
                   
                    <select id="location" name="location" class="form-select">
                        @foreach(App\Enums\TableLocation::cases() as $location)
                        <option value="{{ $location->value }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                   
                </div>
               
               
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Save changes</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  
  
  
  
  