<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Invoice</title>
</head>
<body>  
      
<h2 style="background: green; color: #fff; text-align:center; padding:5px;" >Order Invoice</h2>
    
    <h1>Electric Store</h1>
    
    <hr>
    <h4>Order :</h4>
    <table class="table border">
       <thead>
       <tr>
            <th>Invoice</th>
            <th>Payment Type</th>
            <th>Total Price</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
       </thead>
        @foreach($order as $order)
        <tbody>
        <tr>
            <td>{{$order->invoice}}</td>
            <td>{{$order->payment_type}}</td>
            <td>$ {{$order->total}}</td>
            <td>{{$order->created_at->format('d-M-Y')}}</td>
            <td>
                @if($order->status == 1)
                <button class="btn btn-sm btn-warning">Pending</button>
                @else
                <button class="btn btn-sm btn-success">Order Received</button>
                @endif
            </td>
        </tr>
        </tbody>
        @endforeach 
    </table>
    <hr>
    <h4>Order Item :</h4>
    <table class="table border">
       <tr>
            <th>Invoice</th>
            <!-- <th>Image</th> -->
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>
        
        @foreach($item as $order)
        <tr>
            <td>#{{$order->order_id}}</td>
            <!-- <td>
                <img width="60px" height="60px" src="{{asset('storage/images/'.$order->product->image)}}" alt="">
            </td> -->
            <td>{{$order->product->name}}</td>
            <td>${{$order->product->price}}</td>
            <td>{{$order->qty}}</td>
            <td>
                @php $item_total = $order->product->price * $order->qty @endphp
               ${{$item_total}}
            </td>
        </tr>
        @endforeach 
    </table>

<!--====== Section 2 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="dash">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">

                        
                        
                        <!--====== End - Dashboard Features ======-->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                    @foreach($shipping as $shipping)
                                    <div class="dash__pad-3">
                                        <h4 class="dash__h2 u-s-m-b-8">Shipping Address</h4>
                                        <table class="table">
                                            <tr>
                                                <th>Name</th>
                                                <td>{{$shipping->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{$shipping->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td>{{$shipping->phone}}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{$shipping->address}}</td>
                                            </tr>
                                            <tr>
                                                <th>City</th>
                                                <td>{{$shipping->city}}</td>
                                            </tr>
                                            <tr>
                                                <th>Country</th>
                                                <td>{{$shipping->country}}</td>
                                            </tr>
                                            <tr>
                                                <th>Zip Code</th>
                                                <td>{{$shipping->zip}}</td>
                                            </tr>
                                            
                                        </table>

                                        

                                    </div>
                                    @endforeach
                                </div>
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="dash__box dash__box--bg-white dash__box--shadow u-h-100">
                                    @foreach($order_total as $order)
                                    <div class="dash__pad-3">
                                        <h4 class="dash__h2 u-s-m-b-8">Total Summary</h4>
                                        <!-- <div class="dash-l-r u-s-m-b-8">
                                            <div class="manage-o__text-2 u-c-secondary">Subtotal</div>
                                            <div class="manage-o__text-2 u-c-secondary">$16.00</div>
                                        </div> -->
                                        <div class="dash-l-r u-s-m-b-8">
                                            <div class="manage-o__text-2 u-c-secondary"></div>
                                            <div class="manage-o__text-2 u-c-secondary"></div>
                                        </div>
                                        <div class="dash-l-r u-s-m-b-8">
                                            <div class="manage-o__text-2 u-c-secondary"></div>
                                            
                                            <div class="manage-o__text-2 u-c-secondary"></div>
                                            
                                        </div>
                                        <div class="dash-l-r u-s-m-b-8">
                                            <div class="manage-o__text-2 u-c-secondary"></div>
                                            
                                            <div class="manage-o__text-2 u-c-secondary"></div>
                                            
                                        </div>
                                        <table class="table">
                                            <tr>
                                                <th>Shipping Fee</th>
                                                <th>:</th>
                                                <td>$5.00</td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <th>:</th>
                                                <td>${{$order->total}}</td>
                                            </tr>
                                            <tr>
                                                <th>Payment Method</th>
                                                <th>:</th>
                                                <td>{{$order->payment_type}}</td>
                                            </tr>
                                            
                                            
                                        </table>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 2 ======-->
</div>
<!--====== End - App Content ======-->

</body>
</html>