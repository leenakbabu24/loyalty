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
@foreach($update as $value)
    <form method="post" action="/feedbackAction">
        @csrf
    <h2 style="text-align: center;">CUSTOMER FEEDBACK FORM</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        CUSTOMER NAME <input type="text" name="customer_name" class="form-control" value="{{$value->name}}">
                        ADDRESS <input type="text" name="address" class="form-control" value="{{$value->address}}">
                        PHONE NUMBER <input type="number" name="number" class="form-control" value="{{$value->number}}">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">FEEDBACK</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="feedback"></textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach

</body>

</html>
@endsection