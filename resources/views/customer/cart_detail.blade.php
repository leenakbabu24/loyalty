<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <!-- Bootstrap -->
   
    <!-- Font Awesome -->
<link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    
       
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
        <div class="container mt-3">
            <h2 style="text-align: center;">PRODUCT IN CART</h2>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IMAGE</th>
                    <th>PRODUCT NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>TOTAL</th>
                    
                </tr>
            </thead>
               <tbody>
                @foreach($book as $value)
                <tr>
                <td>{{$value->id}}</td>
                <td><img src="image/{{$value->image}}" alt="" width="50px" height="50px"></td>
                    <td>{{$value->product_name}}</td>
                    <input type="hidden" name="cartid" value="{{$value->id}}" id="cartid">
                    <td><input type="" name="price" id="price" value="{{$value->price}}" ></td>
                <td><input type="number" name="quantity" id="quantity" value="{{$value->quantity}}" min="1" class="quantity"></td>
                <td><input type="" name="total" id="total" value="{{$value->total}}"></td>
                <td><a href="/delete_item/{{$value->id}}" class="nav-link"><i class="fa fa-trash"></i></a></td>
                </tr>
      @endforeach
               </tbody>
</table>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
		$(".quantity").on('change', function()
		{
            var row = $(this).closest('tr');
    // var id = parseInt(row.find("#id").val());
    
    var quantity = parseInt(row.find(this).val());
   
    var price = parseInt(row.find('#price').val());
    
    var total= parseInt(quantity)*parseInt(price);
    // alert(total)
    // row.find('#total').html(total);
    row.find('#total').val(total);
    var x = row.find('#cartid').val();
    // alert(x);

			$.ajax({
				type:"get",
				url:"/cartAction/"+x,
				data:{
                    // id:id,
					quantity:quantity,
                    total:total,
                    
				},
				success:function(result)
				{
                  
					$('#total').html(result);
				}
			});
            // location.reload(true);
		});
	});
</script>
<h4><a href="/view_product2"><i class="fa fa-arrow-left"></i>CONTINUE SHOPPING</a></h4>
<h3 style="text-align: right;"><a href="/checkout">CHECKOUT<i class="fa fa-arrow-right"></i></a></h3>

</body>

</html>