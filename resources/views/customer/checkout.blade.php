<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ORDER</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom CSS -->


  <link rel="stylesheet" href="css/responsive.css">
</head>

<body style="background-color:bisque;">
  @csrf
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-dark fs-5">ORDER SUMMARY</h5>
            @foreach($cart as $value)
            <h5>SUBTOTAL:</h5>
            <input type="hidden" id="res" class="form-control" value=" {{$value->res}}">
            <h4 style="text-align: right;">{{$value->res}}</h4>

            <div style="text-align: center;">
              <a href="/payment" class="btn btn-primary">PAYMENT</a>
              @foreach($credit as $value1)
              @if ($value1->credit_point >= $value->res)
              <a href="/creditAction" class="btn enabled btn-primary">CREDIT</a>
              @else
              <a href="/" class="btn disabled btn-primary">CREDIT</a>
              @endif
              @endforeach
              
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <h4 style="margin-left:2px;"><a href="/view_product2"><i class="fa fa-arrow-left"></i>CONTINUE SHOPPING</a></h4>

</body>

</html>