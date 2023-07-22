<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(){
        $order = Order::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->limit(1)->first();
        $shipping = Shipping::where('order_id', $order->invoice)->first();
        $url = 'https://sandbox.aamarpay.com/request.php'; // live url https://secure.aamarpay.com/request.php
            $fields = array(
                'store_id' => 'aamarpaytest', //store id will be aamarpay,  contact integration@aamarpay.com for test/live id
                 'amount' => $order->total, //transaction amount
                'payment_type' => 'VISA', //no need to change
                'currency' => 'BDT',  //currenct will be USD/BDT
                'tran_id' => rand(1111111,9999999), //transaction id must be unique from your end
                'cus_name' => $shipping->name,  //customer name
                'cus_email' => $shipping->email, //customer email address
                'cus_add1' => $shipping->address,  //customer address
                'cus_add2' => 'Mohakhali DOHS', //customer address
                'cus_city' => $shipping->city,  //customer city
                'cus_state' => 'Dhaka',  //state
                'cus_postcode' => $shipping->zip, //postcode or zipcode
                'cus_country' => $shipping->country,  //country
                'cus_phone' => $shipping->phone, //customer phone number
                'cus_fax' => 'Not¬Applicable',  //fax
                'ship_name' => $shipping->name, //ship name
                'ship_add1' => $shipping->address,  //ship address
                'ship_add2' => 'Mohakhali',
                'ship_city' => $shipping->city, 
                'ship_state' => 'Dhaka',
                'ship_postcode' => $shipping->zip, 
                'ship_country' => $shipping->country,
                'desc' => 'payment description', 
                'success_url' => route('success'), //your success route
                'fail_url' => route('fail'), //your fail route
                'cancel_url' => 'http://localhost/foldername/cancel.php', //your cancel url
                'opt_a' => 'Reshad',  //optional paramter
                'opt_b' => 'Akil',
                'opt_c' => 'Liza', 
                'opt_d' => 'Sohel',
                'signature_key' => 'dbb74894e82415a2f7ff0ec3a97e4183'); //signature key will provided aamarpay, contact integration@aamarpay.com for test/live signature key

                $fields_string = http_build_query($fields);
         
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_VERBOSE, true);
            curl_setopt($ch, CURLOPT_URL, $url);  
      
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $url_forward = str_replace('"', '', stripslashes(curl_exec($ch)));	
            curl_close($ch); 

            $this->redirect_to_merchant($url_forward);
    }

    function redirect_to_merchant($url) {

        ?>
        <html xmlns="http://www.w3.org/1999/xhtml">
          <head><script type="text/javascript">
            function closethisasap() { document.forms["redirectpost"].submit(); } 
          </script></head>
          <body onLoad="closethisasap();">
          
            <form name="redirectpost" method="post" action="<?php echo 'https://sandbox.aamarpay.com/'.$url; ?>"></form>
            <!-- for live url https://secure.aamarpay.com -->
          </body>
        </html>
        <?php	
        exit;
    } 

    
    public function success(Request $request){
        $order = Order::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->limit(1)->first();
        $order->status = 2;
        $order->payment_type = $request->card_type;
        $order->save();
        
        $payment = new Payment();
        $payment->order_id = $order->invoice;
        $payment->name = $request->cus_name;
        $payment->email = $request->cus_email;
        $payment->phone = $request->cus_phone;
        $payment->address = $request->cus_add1;
        $payment->city = $request->cus_city;
        $payment->country = $request->cus_country;
        $payment->zip = $request->cus_postcode;
        $payment->merchant_id = $request->merchant_id;
        $payment->currency = $request->currency;
        $payment->card_type = $request->card_type;
        $payment->bank_txn = $request->bank_txn;
        $payment->amount = $request->amount;
        $payment->save();
        return redirect('order')->with('success', 'Thanks for your Order🥰🥰!');
    }

    public function fail(Request $request){
        return $request;
    }
}
