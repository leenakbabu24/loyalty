@extends('customer.indexheader_customer')
@section('customersection')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>
 
  <h2 style="text-align: center;">EDIT PROFILE</h2>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <div class="form-group">

              @foreach($update as $value)
              <form method="post" action="/updateaction/{{$value->id}}">
                @csrf
                <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="name" name="name" value="{{$value->name}}">
                                <label for="floatingInput">NAME</label>
                            </div>
                            GENDER<div class="form-check-inline">
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
                                <label for="address">ADDRESS</label>
                                <textarea class="form-control" rows="5" id="comment" name="address" value="{{$value->address}}">{{$value->address}}</textarea>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" placeholder="number" name="number" value="{{$value->number}}">
                                <label for="floatingPassword">PHONE NUMBER</label>
                            </div>
    
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" placeholder="username" value="{{$value->username}}">
                                <label for="floatingPassword">USERNAME</label>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" placeholder="password" name="password" value="{{$value->password}}">
                                <label for="floatingPassword">PASSWORD</label>
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
  </div>

</body>

</html>
@endsection