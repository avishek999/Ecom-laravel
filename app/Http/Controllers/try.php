<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
//use Session;

class ProductController extends Controller
{
    function index()
    {
        $data = product::all();
        return view('home', ['products' => $data]);
    }

    function  detail($id)
    {
        $data =  product::find($id);
        return view('detail', ['product' => $data]);
    }

    function addtocart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('login');
        }
    }
    static function cartItems()
    {

        $userID = Session::get('user')['id'];
        return cart::where('user_id', $userID)->count();
    }

    function cartlist()
    {
        return  0;
        die;
        // $userID = Session::get('user')['id'];
        // $products = DB::table('cart')
        //     ->join('products', 'cart.product_id', '=', 'products.id')
        //     ->where('cart.user_id', $userID)
        //     ->select('products.*', 'cart.id as cart_id')
        //     ->get();

        // return view('cartlist', ['products' => $products]);
    }
    function removcart($id)
    {
        cart::destroy($id);
        return redirect('cartlist');
    }

    function ordernow()
    {

        $userID = Session::get('user')['id'];
        $total =  $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userID)
            ->select('products.*', 'cart.id as cart_id')
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }
   public function myOrders()
    {
        // $userId=Session::get('user')['id'];
        // $orders= DB::table('orders')
        //  ->join('products','orders.product_id','=','products.id')
        //  ->where('orders.user_id',$userId)
        //  ->get();
 
        //  return view('myorders',['orders'=>$orders]);
        return "hello";
    }
    function j(){
        return "hello";
    }
}