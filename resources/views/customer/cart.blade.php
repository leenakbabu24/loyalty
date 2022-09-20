
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
@foreach($cart as $value)
    <form method="post" action="/cart/{{$value->id}}">
        @csrf
        <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-dark fs-5">PRODUCT IN CART</h5>
                        
                        TOTAL:<input type="number" name="total" class="form-control">
                        PRICE: <input type="number" name="price" class="form-control" value="{{$value->price}}">
                        QUANTITY: <input type="number" name="quantity" class="form-control">
                        STATUS: <input type="text" name="status" class="form-control">
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">SUBMIT</button>
                        </div> 
                       @endforeach
                    </div>
                </div>
            </div>
        </div>

    </form>
</body>

</html>