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
    <form method="post" action="/addAction" enctype="multipart/form-data">
        @csrf
        <h2 style="text-align: center;">ADD PRODUCTS</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <label for="category">CATEGORY</label>
              <select class="form-control" id="category" name="category">
                <option value="----">-----</option>
                <option value="ELECTRONICS">ELECTRONICS</option>
                <option value="MOBILES">MOBILES</option>
                <option value="CAMERA">CAMERA</option>
                <option value="APPLIANCES">APPLIANCES</option>

              </select>
                            PRODUCT NAME <input type="text" name="product_name" class="form-control">
                            IMAGE <input type="file" name="image" class="form-control">
                            PRICE <input type="number" name="price" class="form-control">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
@endsection