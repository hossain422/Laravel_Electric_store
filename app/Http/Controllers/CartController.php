<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $cart = Cart::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('cart',  compact('cart'));
    }
    public function add_cart(Request $request){
        if(Auth::check()){
            $check = Cart::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)->first();
       
            if($check){
                return redirect()->back()->with('warning', 'Product already added To Cart!!');
                // return response()->json([
                //     'status' => 'error'
                // ]);
            }
            else{
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $request->product_id;
                $cart->qty = $request->qty;
                $cart->save();
                return redirect()->back()->with('success', 'Product Added To Cart is Successfully!!');
                // return response()->json([
                //     'status' => 'success',
                // ]);
            }
        }
        else{
            return redirect('login')->with('warning', 'Please! Sign In before Add to Cart!');
        }
    }

    public function delete_cart(Request $request){
        $cart = Cart::find($request->id);
        $cart->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
    public function update_cart(Request $request){
        $cart = Cart::find($request->id);
        $cart->qty = $request->qty;
        $cart->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
