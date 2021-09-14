<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
=======
>>>>>>> 2f5f4fed041eb79be46b84c01fd8cce99c5fbfe5

class ProductController extends Controller
{
    function index()
    {
<<<<<<< HEAD
        $products= Product::orderby('id','DESC')->get();
        $productslimit=$products->take(6);
        return view('product',compact('products','productslimit'));
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data= Product::
        where('category', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        if(Session::has('user')){
            $userId=Session::get('user')['id'];
            return Cart::where('user_id',$userId)->count();
        }
        else
        {
            return redirect('/login');
        }
        
    }
    function cartList()
    {
        // if(isset(Session::get('user')['id']))
        // { 
        $userId=Session::get('user')['id'];
        $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();

        return view('cartlist',['products'=>$data]);
        // }
        // else{
        //     return redirect('/login');
        // }
    }
    function removeCart($id)
    {
       Cart::destroy($id);
       return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status='pending';
            $order->save();
        }
        Cart::where('user_id',$userId)->delete();
        return redirect('/');
        //return $req->input();
    }
    function myOrder()
    {
        if(isset(Session::get('user')['id']))
        {
            $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorder',['orders'=>$orders]);
        }
        else
        {
            return redirect('/login');
        }
    }

=======
        return "welcome to product page";
    }
>>>>>>> 2f5f4fed041eb79be46b84c01fd8cce99c5fbfe5
}
