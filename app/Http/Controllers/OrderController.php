<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Shipping;
use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use niklasravnsborg\LaravelPdf\Pdf as LaravelPdfPdf;

// use niklasravnsborg\LaravelPdf\Facades\Pdf as FacadesPdf;

class OrderController extends Controller
{
    public function checkout(){
        $cart = Cart::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('checkout', compact('cart'));
    }
    
    public function dashboard(){
        $order = Order::where('user_id', Auth::user()->id)->get();
        return view('dashboard', compact('order'));
    }
    public function order(){
        $order = Order::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get(); 
        return view('order', compact('order'));
    }
    public function order_details($order_id){
        $order = Order::where('invoice', $order_id)->get();
        $order_total = Order::where('invoice', $order_id)->get();
        $item = OrderItem::where('order_id', $order_id)->get();
        $shipping = Shipping::where('order_id', $order_id)->get();
        return view('order_details', compact('order', 'item', 'shipping', 'order_total'));
    }
    public function place_order(Request $request){
        // order
        $order = new Order();
        $order->invoice = uniqid();
        $order->user_id = Auth::user()->id;
        $order->total = $request->total;
        $order->save();
        // Shipping
        $shipping = new Shipping();
        $shipping->order_id = $order->invoice;
        $shipping->name = $request->name;
        $shipping->email = $request->email;
        $shipping->phone = $request->phone;
        $shipping->address = $request->address;
        $shipping->city = $request->city;
        $shipping->country = $request->country;
        $shipping->zip = $request->zip;
        $shipping->save();
        
        // Order Item
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($cart as $cart) {
            $order_item = new OrderItem();
            $order_item->order_id = $order->invoice;
            $order_item->product_id = $cart->product_id;
            $order_item->qty = $cart->qty;
            $order_item->save();

            $product = Product::find($cart->product_id);
            $product->qty = $product->qty - $cart->qty;
            $product->save();
            $cart->delete();
            
        }
        return redirect('payment');
    }

    public function invoice_download($order_id){
        $order = Order::where('invoice', $order_id)->get();
        $order_total = Order::where('invoice', $order_id)->get();
        $item = OrderItem::where('order_id', $order_id)->get();
        $shipping = Shipping::where('order_id', $order_id)->get();

        $pdf = Pdf::loadView('invoice', compact('order', 'item', 'shipping', 'order_total'));
        return $pdf->download('Electric_store_invoice.pdf');
    }


        
}
