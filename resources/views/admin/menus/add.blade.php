{{-- category add --}}
<div id="addmenu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="warning-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-warning">
                <h4 class="modal-title" id="warning-header-modalLabel">Add Menu</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
              <form action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
  
  
                @csrf
  
                <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="name"
                        placeholder="Name"  required>
                  
                </div>
                <div class="mb-3">
                    <label class="form-label" for="validationCustom02">Image</label>
                    <input type="file" class="form-control" id="validationCustom02" name="image"
                        placeholder="Image" required>
                 
                </div>
                <div class="mb-3">
                    <label class="form-label" for="validationCustom03">Price</label>
                    <input type="text" class="form-control" id="validationCustom03" name="price"
                        placeholder="price" required>
                   
                </div>
                <div class="mb-3">
                    <label class="form-label" for="validationCustom04">Description</label>
                    <textarea  class="form-control" id="validationCustom04" placeholder="Description" name="description" required></textarea>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label" for="validationCustom03">Category</label>
                    <select class="form-control" id="categories" name="categories">
                        @foreach ($category  as  $ctg )
                        <option value="{{ $ctg->id }}">{{ $ctg->name }}</option>
                        @endforeach
                      
                    </select>
                        
                   
                </div>
               
               
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  
  
  
  
  