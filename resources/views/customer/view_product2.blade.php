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
    @csrf

    <h2 style="text-align: center;">PRODUCTS AVAILABLE</h2>
    <div class="container">
        <div class="row">
            @foreach($book as $value)
            <div class="col-sm-3">
                <div class="card">
                    <img src="image/{{$value->image}}" alt="" width="50px" height="50px">
                    <div class="card-body">
                        <h5 class="card-title">{{$value->category}}</h5>
                        <p class="card-text">{{$value->product_name}}</p>
                        <h5 class="card-title">Rs:{{$value->price}}</h5>
                        <a href="/cart/{{$value->id}}" class="btn btn-primary">ADD TO CART</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
@endsection