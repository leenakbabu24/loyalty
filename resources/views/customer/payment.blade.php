<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PAYMENT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>

<body style="background-color:bisque;">

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-dark fs-5">PAYMENT</h5>
            <section>
              <form method="post" action="/paymentAction">
                @csrf
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="name">
                  <label for="floatingInput">NAME</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" name="address">
                  <label for="floatingPassword">ADDRESS</label>
                </div>
                <h5>SUBTOTAL:</h5>
                @foreach($total as $value)

                <input type="hidden" id="res" class="form-control" value=" {{$value->res}}" name="subtotal">
                <h4 style="text-align: right;">{{$value->res}}</h4>
                @endforeach
                <div style="text-align: center;">
                  <input type="submit" class="btn btn-primary" value="CONFIRM PAYMENT">
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>