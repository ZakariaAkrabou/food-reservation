@extends('admin.dashboard')
@include('admin.reservation.reservadd')


@section('content')




<div class="col-12">
  <div class="card">
      <div class="card-header">
          <h4 class="header-title">Reservation List</h4>
       <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-warning "  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addreserv">Add Reservation</button>

        
       </div>


      </div>
      <div class="card-body">

          <table id="fixed-header-datatable"
              class="table table-striped dt-responsive nowrap table-striped w-100">
              <thead>
                  <tr>
                      <th>Full name</th>
                    
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Date</th>
                      <th>Table</th>
                      <th>Guest</th>
                      <th>Action</th>
                  </tr>
              </thead>

              <tbody>

                    
                @foreach ($reserv as $res)
                    
              
                     
                  <tr>
                      <td>{{ $res->firstname }} {{ $res->lastname }}</td>
                      
                      <td>{{ $res->email }}</td>
                      <td>{{ $res->phone_number }}</td>
                      <td>{{ date('Y-m-d', strtotime($res->reservation_date)) }}</td>
                      <td>{{ $res->table->name }}</td>
                      <td>{{ $res->guest_number }}</td>
                      <td>
                        <form action="{{ route('reservation.destroy',$res->id) }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to delete this category?')">

                        <a href="" class="btn btn-warning"> <i class="bi bi-pencil-square"></i></a>
                            @csrf
                            @method('DELETE')
                            
                        <button type="submit" class="btn btn-success"> <i class="bi bi-check-square-fill"></i></button>
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