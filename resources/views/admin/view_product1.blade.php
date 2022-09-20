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
            <h2>PRODUCT DETAILS</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CATEGORY</th>
                        <th>PRODUCT NAME</th>
                        <th>IMAGE</th>
                        <th>PRICE</th>
                        <th>MANAGER ID</th>
                        <th>STATUS</th>
        
                    </tr>
                </thead>
               <tbody>
                @foreach($book as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->category}}</td>
                    <td>{{$value->product_name}}</td>
                    <td><img src="image/{{$value->image}}" alt="" width="50px" height="50px"></td>
                    <td>{{$value->price}}</td>
                    <td>{{$value->manager_id}}</td>
                    <td>{{$value->status}}</td>
                    <td><a href="/approve2/{{$value->id}}">APPROVE</a></td>
                    <td><a href="/decline2/{{$value->id}}">DECLINE</a></td>
                </tr>
                @endforeach
               </tbody>
            </table>
        </div>
</body>

</html>
@endsection