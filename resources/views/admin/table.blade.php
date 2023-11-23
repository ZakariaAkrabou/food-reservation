@extends('admin.dashboard')
@include('admin.tables.tableadd')
@section('content')




<div class="col-12">
  <div class="card">
      <div class="card-header">
          <h4 class="header-title">Piviot Table List</h4>
       <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-warning "  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addtable">Add Table</button>

        
       </div>


      </div>
      <div class="card-body">

          <table id="fixed-header-datatable"
              class="table table-striped dt-responsive nowrap table-striped w-100">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Guest Number</th>
                      <th>Status</th>
                      <th>Location</th>
                      <th>Action</th>
                  </tr>
              </thead>

              <tbody>

                @foreach ( $pivot as  $table)
                    
                
                     
                  <tr>
                      <td>{{ $table->name }}</td>
                      <td>{{ $table->name }}</td>
                      <td>{{ $table->status }}</td>
                     
                      <td>{{ $table->location }}</td>
                      <td>
                        <form action="{{ route('tables.destroy',$table->id) }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to delete this category?')">

                        <a href="{{route('tables.edit',$table->id)}}" class="btn btn-success"> <i class="bi bi-pencil-square"></i></a>
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