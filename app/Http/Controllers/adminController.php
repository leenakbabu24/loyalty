<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register2;
use App\Models\manager;
use App\Models\product;
use App\Models\about;
use App\Models\contact;
class adminController extends Controller
{
    
    public function index()
    {
      return view('index');
    }
    public function index_admin()
    {
      return view('admin.index_admin');
    }

    public function logout()
    {
        return view('index');
    }
    public function loginadminAction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $data = register2::where('username', $username)->where('password', $password)->first();
        if (isset($data)) {
            if ($data->usertype == "admin") {
                $req->session()->put(array('sess' => $data->id));
                return redirect('/index_admin');
            }
        }else {
            return redirect('/login_admin');
        }
        
    }
public function login_admin()
{
    return view('login_admin');
}
public function view_manager()
    {
        $data['book'] = manager::get();
        return view('admin.view_manager', $data);
    }
    public function approve1($id)
    {
        $data = ['status' => "approved"];
        manager::where('id', $id)->update($data);
        return redirect('view_manager');
    }
    public function decline1($id)
    {
        $data = ['status' => "declined"];
        manager::where('id', $id)->update($data);
        return redirect('view_manager');
    }
    public function view_product1()
    {
        
        $data['book']=product::get();
        return view('/admin.view_product1',$data);
    }
    public function approve2($id)
    {
        $data = ['status' => "approved"];
        product::where('id', $id)->update($data);
        return redirect('view_product1');
    }
    public function decline2($id)
    {
        $data = ['status' => "declined"];
        product::where('id', $id)->update($data);
        return redirect('view_product1');
    }
    public function add_about()
    {
        return view('admin.add_about');
    }
    public function addaboutAction(Request $req){
        $about=$req->input('about');
        $data=[
            'about'=>$about,
        ];
        about::insert($data);
        return redirect('/index_admin');
    }
    public function view_about()
    {
        
        $data['book']=about::get();
        return view('/admin.view_about',$data);
    }
    public function edit1($id)
    {
        $data['update'] = about::where('id',$id)->get();
        return view('admin.edit1', $data);
    }
    public function editaction1(Request $req, $id)
    {
        $about = $req->input('about');
      
       
        $data = [
            
            'about' => $about,
        ];
        about::where('id', $id)->update($data);
        return redirect('/view_about');
 
    }
    public function delete1($id)
    {
       about::where('id', $id)->delete();
        return redirect('/view_about');
    }
    public function view_contact()
    {
        
        $data['book']=contact::get();
        return view('/admin.view_contact',$data);
    }
}
