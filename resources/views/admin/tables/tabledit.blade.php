@extends('admin.dashboard')

@section('content')


<div class="content-wrapper">     
        <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="header-title">Table Edit</h4>
                      @if ($message = Session::get('success'))
                      <div class="alert alert-success alert-block">
                          
                          <strong>{{ $message }}</strong>
                      </div>
                       @endif
          
                  @if ($message = Session::get('error'))
                      <div class="alert alert-danger alert-block">
                      
                          <strong>{{ $message }}</strong>
                      </div>
                  @endif
                  </div>
                  <div class="card-body">
                      <form action="{{ route('tables.update',$pvedit->id)}}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                          <div class="row g-2">
                              <div class="mb-3 col-md-6">
                                  <label for="inputEmail4" class="form-label">Name</label>
                                  <input type="text" class="form-control" id="inputEmail4" value="{{ $pvedit->name }}" name="name">
                              </div>
                              <div class="mb-3 col-md-6">
                                  <label for="inputPassword4" class="form-label">Guest Number</label>
                                  <input type="text" class="form-control" id="inputPassword4" value="{{ $pvedit->guest_number }}" name="guest_number">
                              </div>
                          </div>

                          <div class="mb-3">
                            <label for="inputState" class="form-label">Status</label>
        
                            <select class="form-select" id="floatingSelect" name="status" aria-label="Floating label select example">
                                @foreach(App\Enums\TableStatus::cases() as $status)
                                <option value="{{ $status->value }}" @selected($pvedit->status->value == $status->value)>{{ $status->name }}</option>
                                @endforeach
                            </select>
                           
                        </div>

                        <div class="mb-3">
                            <label for="inputState" class="form-label">Location</label>
        
                            <select class="form-select" id="floatingSelect" name="location" aria-label="Floating label select example">
                                @foreach(App\Enums\TableLocation::cases() as $location)
                                <option value="{{ $location->value }}" @selected($pvedit->location->value == $location->value)>{{ $location->name }}</option>
                                @endforeach
                            </select>
                           
                        </div>


                         

                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{ route('tables.index') }}" type="submit" class="btn btn-outline-dark">Back</a>
                      </form>

                  </div> <!-- end card-body -->
              </div> <!-- end card-->
          </div> <!-- end col -->
      </div>

</div>








@endsection