@extends('admin.dashboard')
@include('admin.menus.add')
@section('content')




<div class="col-12">
  <div class="card">
      <div class="card-header">
          <h4 class="header-title">Menus List</h4>
       <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-warning "  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addmenu">Add Menu</button>

        
       </div>


      </div>
      <div class="card-body">

          <table id="fixed-header-datatable"
              class="table table-striped dt-responsive nowrap table-striped w-100">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th>Action</th>
                  </tr>
              </thead>

              <tbody>

                @foreach ($menu as $mn )
                    
               
                     
                    <tr>
                      <td>{{ $mn->name }}</td>
                      <td> <img src="{{ Storage::url($mn->image) }}" alt="" style="width: 50px; height:50px" class="me-2 rounded-circle"></td>
                      <td>{{ $mn->price }}</td>
                        <td>
                            @if($mn->categories)
                                @foreach($mn->categories as $category)
                                    {{ $category->name }},
                                @endforeach
                            @endif
                        </td>
                      <td>{{ $mn->description }}</td>
                      <td>
                        <form action="{{ route('menus.destroy',$mn->id) }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to delete this Menu?')">

                        <a href="{{ route('menus.edit',$mn->id) }}" class="btn btn-success"> <i class="bi bi-pencil-square"></i></a>

                            @csrf
                            @method('DELETE')

                        <button type="submit" class="btn btn-danger"> <i class="bi bi-trash-fill"></i></button>
                        </form>
                      </td>
                     
                    </tr>
                  
                  @endforeach
                    
                
              </tbody>
           
          </table>
      </div> <!-- end card body-->
  </div> <!-- end card -->
</div>






@endsection