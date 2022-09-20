@extends('manager.indexheader_manager')
@section('managersection')
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
        <div class="container mt-3">
            <h2 style="text-align: center;">CUSTOMER DETAILS</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>ADDRESS</th>
                        <th>NUMBER</th>
                        
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
               <tbody>
                @foreach($book as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->gender}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->number}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->password}}</td>
                    <td>{{$value->status}}</td>
        
                </tr>
                @endforeach
               </tbody>
            </table>
        </div>
</body>

</html>
@endsection