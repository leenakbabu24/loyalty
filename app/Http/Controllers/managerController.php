<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\manager;
use App\Models\product;
use App\Models\feedback;

class managerController extends Controller
{
    
    public function index_manager()
    {
      return view('manager.index_manager');
    }
    public function logout()
    {
        return view('index');
    }
    public function edit_profile()
    {
        $id=session('sess');
        $data['update'] = manager::where('id', $id)->get();
        return view('manager.edit_profile', $data);
    }
    public function updateaction(Request $req, $id)
    {
        $manager_id = session('sess');
        $name = $req->input('name');
        $gender = $req->input('gender');
     
        $shopname = $req->input('shopname');
       
        $username = $req->input('username');
        $password = $req->input('password');
      
       
        $data = [
            'manager_id'=>$manager_id,
            'name' => $name,
            'gender' => $gender,
           
            'shopname' => $shopname,
            'username' => $username,
            'password' => $password,
            

        ];
        manager::where('id', $id)->update($data);
        return redirect('/index_manager');
    }
    public function view_customer()
    {
        $data['book'] = register::get();
        return view('manager.view_customer', $data);
    }
    public function add_product()
    {
        return view('manager.add_product');
    }
    public function addAction(Request $req)
    {
        $manager_id = session('sess');
        $category=$req->input('category');
        $product_name=$req->input('product_name');
        $image=$req->file('image');
        $filename=$image->getClientOriginalName();
        $image->move(public_path().'/image/',$filename);
        $price=$req->input('price');
        $data=[
            'manager_id'=>$manager_id,
            'category'=>$category,
            'product_name'=>$product_name,
            'image'=>$filename,
            'price'=>$price
        ];
        product::insert($data);
        return redirect('add_product');
    
    }
    public function view_product()
    {
        $manager_id=session('sess');
        $data['book']=product::get();
        return view('/manager.view_product',$data);
    }
    public function edit($id)
    {
        $data['update'] = product::where('id', $id)->get();
    
        return view('manager.edit', $data);
    }
    public function editaction_manager(Request $req, $id)
    {
        $manager_id = session('sess');
        $category=$req->input('category');
        $product_name = $req->input('product_name');
        $price = $req->input('price');
        $image=$req->file('image');
        if($image=="")
        {
            $data = [
                'manager_id'=>$manager_id,
                'category' => $category,
                'product_name' => $product_name,
                'price' => $price
    
            ];
        }
        else{
            $filename=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$filename);
           
            
           
            $data = [
                'manager_id'=>$manager_id,
                'category' => $category,
                'product_name' => $product_name,
                'image' => $filename,
                'price' => $price
    
            ];
        }
       
        product::where('id', $id)->update($data);
        return redirect('view_product');
    }
    public function delete($id)
    {
        product::where('id', $id)->delete();
        return redirect('/view_product');
    }
    public function view_feedback()
    {
        $manager_id=session('sess');
        $data['book']=feedback::get();
        return view('/manager.view_feedback',$data);
    }
    public function approve($id)
    {
        $data = ['status' => "approved"];
        feedback::where('id', $id)->update($data);
        return redirect('view_feedback');
    }
    public function decline($id)
    {
        $data = ['status' => "declined"];
        feedback::where('id', $id)->update($data);
        return redirect('view_feedback');
    }
}
