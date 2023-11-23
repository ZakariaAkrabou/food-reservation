@extends('admin.dashboard')
@include('admin.category.modals')
@section('content')




<div class="col-12">
  <div class="card">
      <div class="card-header">
          <h4 class="header-title">Category Table</h4>
       <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-warning "  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addcategory">Add Category</button>

        
       </div>


      </div>
      <div class="card-body">

          <table id="fixed-header-datatable"
              class="table table-striped dt-responsive nowrap table-striped w-100">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Slug</th>
                      <th>Description</th>
                      <th>Action</th>
                  </tr>
              </thead>

              <tbody>


                      @foreach ($category as $cat )
                  <tr>
                      <td>{{ $cat->name }}</td>
                      <td> <img src="/admin/uploads/category/{{ $cat->image }}" style="width: 50px; height:50px" alt="table-user" class="me-2 rounded-circle" /></td>
                      <td>{{ $cat->slug }}</td>
                     
                      <td>{{ $cat->description }}</td>
                      <td>
                        <form action="{{ route('category.destroy',$cat->id) }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to delete this category?')">

                        <a href="{{ route('category.edit',$cat->id) }}" class="btn btn-success"> <i class="bi bi-pencil-square"></i></a>

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