<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Admin;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function orderindex()
    {
        $data= Order::all();
        return view('orderindex',['orders'=>$data]);
    }
    function ItemIndex()
    {
        $data= Product::all();
        return view('itemindex',['products'=>$data]);
    }
function addProduct()
{
 return view('addProduct');
}

    function addProductPost(Request $request)
    {
       
$product=$request->all();


if($request->hasFile('gallery')){
    $fileWithExt=$request->file('gallery')->getClientOriginalName();
    //Get just filename
    $file=pathinfo($fileWithExt, PATHINFO_FILENAME);
    //Get just ext
    $extension=$request->file('gallery')->getClientOriginalExtension();
    //Filename to Store
    $fileName=$file.'.'.$extension;
    //Upload Image
    $path=$request->file('gallery')->storeAs('public/Images',$fileName);
    $mediapath="Images/".$fileName;
    
}

    $product['gallery']=$fileName;
    $product['path']=$mediapath;
    $create=Product::create($product);
if($create)
{
    
    session()->flash('success', 'Event successfully created!');
    return redirect('/addProduct');   
    
}
else
{
    session()->flash('error', 'Event not created!');
    return redirect('/addProduct');
    
}

    
        }
        function adminlogin()
    {
        // $admin= Admin::where(['email'=>$req->email])->first();
        // if(!$admin || !Hash::check($req->password,$admin->password))
        // {
        //     return "Username or Password is invalid";
        // }
        // else{
        //     $req->session()->put('admin', $admin);
        //     return redirect('/');
        // }
return view('adminlogin');
    }

    public function admincheck(Request $req)
    {
        $admin= Admin::where(['email'=>$req->email])->first();
        if(!$admin || !Hash::check($req->password,$admin->password))
        {
            return '<script> alert("Username or Password is invalid")</script>';
        }
        else{
            $req->session()->put('admin', $admin);
            return redirect('/admin');
        }
    }
}

