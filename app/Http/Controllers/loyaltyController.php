<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\manager;
use App\Models\product;
use App\Models\feedback;
use App\Models\about;
use App\Models\contact;
use App\Models\cart;
use App\Models\payment;
class loyaltyController extends Controller
{
    public function __construct()
    {
        $this->obj = new cart;
    }

    public function index()
    {
        return view('index');
    }
    public function index_customer()
    {
        return view('customer.index_customer');
    }
    public function logout()
    {
        return view('index');
    }
    public function register_user()
    {
        return view('register_user');
    }
    public function registeruserAction(Request $req)
    {
        $name = $req->input('name');
        $gender = $req->input('gender');
        $address = $req->input('address');
        $number = $req->input('number');
        $username = $req->input('username');
        $password = $req->input('password');

        $data = [

            'name' => $name,
            'gender' => $gender,
            'address' => $address,
            'number' => $number,
            'username' => $username,
            'password' => $password


        ];
        register::insert($data);
        return redirect('index');
    }
    public function register_manager()
    {
        return view('register_manager');
    }
    public function registermanagerAction(Request $req)
    {
        $name = $req->input('name');
        $gender = $req->input('gender');
        $shopname = $req->input('shopname');

        $username = $req->input('username');
        $password = $req->input('password');

        $data = [

            'name' => $name,
            'gender' => $gender,
            'shopname' => $shopname,
            'username' => $username,
            'password' => $password


        ];
        manager::insert($data);
        return redirect('index');
    }
    public function login_user()
    {
        return view('login_user');
    }
    public function loginuserAction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $data = register::where('username', $username)->where('password', $password)->first();

        if (isset($data)) {
            $req->session()->put(array('sess' => $data->id));
            return redirect('/index_customer');
        } else {
            return redirect('/login_user');
        }
    }
    public function login_manager()
    {
        return view('login_manager');
    }

    public function loginmanagerAction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $data = manager::where('username', $username)->where('password', $password)->where('status', 'approved')->first();
        if (isset($data)) {
            $req->session()->put(array('sess' => $data->id));
            return redirect('/index_manager');
        } else {
            return redirect('/login_manager');
        }
    }
    public function edit_profile1()
    {
        $id = session('sess');
        $data['update'] = register::where('id', $id)->get();
        return view('customer.edit_profile1', $data);
    }
    public function updateaction(Request $req, $id)
    {
        $user_id = session('sess');
        $name = $req->input('name');
        $gender = $req->input('gender');
        $address = $req->input('address');
        $number = $req->input('number');

        $username = $req->input('username');
        $password = $req->input('password');


        $data = [
            'user_id' => $user_id,
            'name' => $name,
            'gender' => $gender,
            'address' => $address,
            'number' => $number,
            'username' => $username,
            'password' => $password,


        ];
        register::where('id', $id)->update($data);
        return redirect('/index_customer');
    }
    public function add_feedback()
    {
        $id = session('sess');
        $data['update'] = register::where('id', $id)->get();
        return view('customer.add_feedback', $data);
    }
    public function feedbackAction(Request $req)
    {
        $customer_name = $req->input('customer_name');
        $address = $req->input('address');
        $number = $req->input('number');
        $feedback = $req->input('feedback');

        $data = [

            'customer_name' => $customer_name,
            'address' => $address,
            'number' => $number,
            'feedback' => $feedback,

        ];
        feedback::insert($data);
        return redirect('/index_customer');
    }
    public function view_product2()
    {

        $data['book'] = product::where('status', 'approved')->get();
        return view('/customer.view_product2', $data);
    }
    public function about_view()
    {
        $data['book'] = about::get();
        return view('/about_view', $data);
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactAction(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $message = $req->input('message');


        $data = [

            'name' => $name,
            'email' => $email,
            'message' => $message,


        ];
        contact::insert($data);
        return redirect('/index');
    }
    public function cart($id)
    {
        $user_id = session('sess');
        $price = product::where('id', $id)->value('price');
        // // $id=$req->input('product_id');
        // $total = $req->input('total');
        // $quantity = $req->input('quantity');
        // $status= $req->input('status');

        $data = [

            'user_id' => $user_id,
            'product_id' => $id,
            'price'=>$price,
            'total' => $price,
            'status' => "cart"
        ];
        cart::insert($data);
        // echo $price;
        // exit();
        // return view('customer.cart',$data);
        return redirect('/view_product2');
    }
    public function cart_detail()
    {
        $user_id = session('sess');
        $data['book'] = cart::join('products', 'products.id', '=', 'carts.product_id')
            ->distinct()
            ->where('carts.status', "cart")
            ->where('carts.user_id', $user_id)
            ->select(['products.image', 'products.product_name', 'products.price', 'carts.quantity', 'carts.price', 'carts.status', 'carts.id'])

            ->get();

        return view('customer.cart_detail', $data);
    }
    public function cartAction(Request $req, $id)
    {

        $total = $req->input('total');
        $quantity = $req->input('quantity');

        $data = [
            'quantity' => $quantity,
            'total'=>$total
        ];
        cart::where('id', $id)->update($data);
    }
    public function delete_item($id)
    {
        cart::where('id', $id)->delete();
        return redirect('/cart_detail');
    }
    public function checkout()
    {
        $id = session('sess');
        $res['cart'] = $this->obj->getSubtotal('carts', $id);
        //    print_r($res);
        $res['credit']= register::where('id',$id)->get();
        
        return view('customer.checkout', $res);
    }
    public function payment()
    {
        $user_id = session('sess');
        $id = session('sess');
        $data['cart'] = cart::where('status', 'cart')->get();
        $data['total'] = $this->obj->getSubtotal('carts', $id);
        return view('customer.payment', $data);
    }
    public function paymentAction(Request $req)
    {
        $user_id = session('sess');
        $subtotal = $req->input('subtotal');
        // $id = session('sess');
        
        
        $data = [

            
            'user_id' => $user_id,
            'subtotal' => $subtotal,
            'status' => 'ordered',
            
        ];
        payment::insert($data);
        $credit= register::where('id',$user_id)->value('credit_point');
        if($subtotal<=20000){
            $da=['credit_point'=>$credit+200];
        }elseif($subtotal<=40000){
            $da=['credit_point'=>$credit+400];
        }
        elseif($subtotal<=60000){
            $da=['credit_point'=>$credit+600];
        }
        elseif($subtotal<=80000){
            $da=['credit_point'=>$credit+800];
        }
        elseif($subtotal<=100000)
        {
            $da=['credit_point'=>$credit+1000];
        }
        else{
            $da=['credit_point'=>$credit+0];
        }


        register::where('id', $user_id)->update($da);
        // echo'<script>alert("ORDER CONFIRMED")</script>';
        $data1 = ['status' => "ordered"];
        cart::where('user_id', $user_id)->update($data1);
        return redirect('/view_product2');
    }
   public function creditAction(Request $req)
   {
    $user_id=session('sess');
    $subtotal = $this->obj->getSubtotalvalue('carts', $user_id);
    // echo $subtotal;
    // exit();
    
    
    $data = [
        'user_id' => $user_id,
        'subtotal' => $subtotal,
        'status' => 'credited',
        
    ];
    payment::insert($data);
    $data1 = ['status' => "credited"];
    cart::where('user_id', $user_id)->update($data1);
    return redirect('/view_product2');
   }

}