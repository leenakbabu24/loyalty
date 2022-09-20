@extends('manager.indexheader_manager')
@section('managersection')

  <h2 style="text-align: center;">EDIT PROFILE</h2>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
        <div class="card border-0 shadow rounded-12 my-5">
          <div class="card-body p-4 p-sm-12">
            <div class="form-group">

              @foreach($update as $value)
              <form method="post" action="/updateaction/{{$value->id}}">
                @csrf
                <div class="form-floating mb-3">
                <label for="floatingInput">NAME</label>
                  <input type="text" class="form-control" placeholder="name" name="name" value="{{$value->name}}">
                 
                </div>
                <div class="form-check-inline">
                  <h5><b>GENDER</b></h5>
                  <input type="radio" class="form-check-input" id="gender" name="gender" value="{{$value->gender}}">MALE
                  <label class="form-check-label" for="gender"></label>
                </div>
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" id="gender" name="gender" value="{{$value->gender}}">FEMALE
                  <label class="form-check-label" for="gender"></label>
                </div>
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" id="gender" name="gender" value="{{$value->name}}">OTHERS
                  <label class="form-check-label" for="gender"></label>
                </div>

                <div class="form-group">
                <label for="floatingPassword">SHOP NAME</label>
                  <input type="text" class="form-control" name="shopname" placeholder="shopname" value="{{$value->shopname}}">
              
                </div>


                <div class="form-floating mb-3">
                <label for="floatingPassword">USERNAME</label>
                  <input type="text" class="form-control" name="username" placeholder="username" value="{{$value->username}}">
                
                </div>


                <div class="form-floating mb-3">
                <label for="floatingPassword">PASSWORD</label>
                  <input type="password" class="form-control" placeholder="password" name="password" value="{{$value->password}}">
                 
                </div>



                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">UPDATE</button>
                </div>
                @endforeach
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection