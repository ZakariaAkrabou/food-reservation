@extends('admin.dashboard')

@section('content')


<div class="content-wrapper">     
        <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="header-title">Menu Edit</h4>
                      
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
                      <form action="{{ route('menus.update',$menedit->id)}}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                          <div class="row g-2">
                              <div class="mb-3 col-md-6">
                                  <label for="inputEmail4" class="form-label">Name</label>
                                  <input type="text" class="form-control" id="inputEmail4" value="{{ $menedit->name }}" name="name">
                              </div>
                              <div class="mb-3 col-md-6">
                                  <label for="inputPassword4" class="form-label">Price</label>
                                  <input type="text" class="form-control" id="inputPassword4" value="{{ $menedit->price }}" name="price">
                              </div>
                          </div>

                          <div class="mb-3 d-flex justify-content-center"">
                              <img src="{{ Storage::url($menedit->image) }}" style="width: 100px; height:100px">
                          </div>

                          <div class="mb-3">
                            <label for="inputAddress" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                          </div>

                          <select class="form-control" id="categories" name="categories[]" multiple>
                            @foreach ($category  as  $ctg )
                            <option value="{{ $ctg->id }}" @selected($menedit->categories->contains($ctg))>{{ $ctg->name }}</option>
                            @endforeach
                          
                            </select>


                          <div class="mb-3">
                              <label for="inputAddress2" class="form-label">Description</label>
                              <textarea class="form-control" id="inputAddress" name="description">{{ $menedit->description }}</textarea>

                          </div>

                         

                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{ route('menus.index') }}" type="submit" class="btn btn-outline-dark">Back</a>
                      </form>

                  </div> <!-- end card-body -->
              </div> <!-- end card-->
          </div> <!-- end col -->
      </div>

</div>








@endsection