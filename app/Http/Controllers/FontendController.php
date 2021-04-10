<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FontendController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
       return Shop::latest()->get();
    }
    public function details($id)
    {
     return Shop::where('id',$id)->first();
    }
    public function card(Request $req)
    {

        $cart=Cart::where('shop_id',$req->shop_id)->first();

        if(!is_null($cart)){
           $cart->increment ('quantity');
        }
        else{
            $cart = new Cart();
            $cart->user_id =Auth::id();
            $cart->shop_id = $req['shop_id'];
            $cart->quantity = $req['quantity'];
            $cart->save();
            // return redirect('cart');
         }
    }
    public function card_show()
    {
        $id= Auth::id();
        return Cart::where('user_id',$id)->with('Shop')->get();

    }
      public function card_count()
    {
        $id= Auth::id();
        return Cart::where('user_id',$id)->get()->
        sum('quantity');
    }


    public function card_delete($id)
    {
      return Cart::find($id)->delete();
    }
}