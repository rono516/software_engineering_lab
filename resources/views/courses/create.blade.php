@extends('dashboard.main')

@section('content')

<div class="content">
    <div class="container-fluid flex">
      <div class="row">
        <div class="col-md-6">
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
            </div>
            <div class="card-body ">
              <form method="POST" action="{{url('/courses/store')}}">
                @csrf
                <div class="form-group">
                  <label for="title" class="bmd-label-floating">Course title</label>
                  <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="form-group">
                  <label for="short_description" class="bmd-label-floating">Short description</label>
                  <input type="text" name="short_description" class="form-control" id="short_description">
                </div>
                <div class="form-group">
                  <label for="price" class="bmd-label-floating">Price</label>
                  <input type="number" name="price" class="form-control" id="price">
                </div>
                <div class="form-group">
                  <label for="image_url" class="bmd-label-floating">Image Url</label>
                  <input type="text" name="image_url" class="form-control" id="image_url">
                </div>

                <div class="card-footer ">
                  <button type="submit" class="btn btn-fill btn-gray">Add Course</button>
                </div>
                
              </form>
            </div>
            
          </div>
        </div>
        <div class="col-md-6">
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
            </div>
            <div class="card-body ">
              <form class="form-horizontal">
                <div class="row">
                  <label class="col-md-3 col-form-label">Email</label>
                  <div class="col-md-9">
                    <div class="form-group has-default">
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-md-3 col-form-label">Password</label>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="password" class="form-control">
                    </div>
                  </div>
                </div>
                
              </form>
            </div>
            <div class="card-footer ">
              <div class="row">
                <div class="col-md-9">
                  <button type="submit" class="btn btn-fill btn-gray">Add Module</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection