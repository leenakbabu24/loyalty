@extends('admin.adminheader')
@section('adminsection')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

        @csrf
        <div class="container mt-3">
            <h2 style="text-align: center;">MANAGER DETAILS</h2>
           
            <table class="table table-bordered">
                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>SHOP NAME</th>
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
                    <td>{{$value->shopname}}</td>
                    <td>{{$value->username}}</td>
                    <td>{{$value->password}}</td>
                    <td>{{$value->status}}</td>
                    <td><a href="/approve1/{{$value->id}}">APPROVE</a></td>
                    <td><a href="/decline1/{{$value->id}}">DECLINE</a></td>
                  
                </tr>
                @endforeach
               
               </tbody>
              
            </table>
        </div>
       
</body>

</html>
@endsection