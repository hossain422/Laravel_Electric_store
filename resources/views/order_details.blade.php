@extends('layouts.app')
@section('title', 'Order Details')
@section('content')      
      <!--====== App Content ======-->
      <div class="app-content">

<!--====== Section 1 ======-->
<div class="u-s-p-y-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="breadcrumb">
                <div class="breadcrumb__wrap">
                    <ul class="breadcrumb__list">
                        <li class="has-separator">

                            <a href="index.html">Home</a></li>
                        <li class="is-marked">

                            <a href="dash-manage-order.html">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section 1 ======-->


<!--====== Section 2 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="dash">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">

                        <!--====== Dashboard Features ======-->
                        <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                            <div class="dash__pad-1">

                            <span class="dash__text u-s-m-b-16">Hello, {{Auth::user()->name}}</span>
                                <ul class="dash__f-list">
                                    <li>

                                        <a class=" {{ Request::is('dashboard') ? 'dash-active' : '' }}" href="{{url('dashboard')}}">Manage My Account</a></li>
                                    <li>

                                        <a class="{{ Request::is('profile') ? 'dash-active' : '' }}" href="{{url('profile')}}">My Profile</a></li>

                                    <li>

                                        <a class="{{ Request::is('order') ? 'dash-active' : '' }}" href="{{url('order')}}">My Orders</a></li>
                                    <li>

                                        <a class="{{ Request::is('') ? 'dash-active' : '' }}" href="{{url('logout')}}">Logout</a></li>


                                </ul>
                            </div>
                        </div>
                        <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                            <div class="dash__pad-1">
                                <ul class="dash__w-list">
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                            <span class="dash__w-text">{{$order->count()}}</span>

                                            <span class="dash__w-name">Orders Placed</span></div>
                                    </li>
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                                            <span class="dash__w-text">0</span>

                                            <span class="dash__w-name">Cancel Orders</span></div>
                                    </li>
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                            <span class="dash__w-text">0</span>

                                            <span class="dash__w-name">Wishlist</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Dashboard Features ======-->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <h1 class="dash__h1 u-s-m-b-30">Order Details</h1>
                        @foreach($order as $order)
                        <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                            <div class="dash__pad-2">
                                <div class="dash-l-r">
                                    <div>
                                        <div class="manage-o__text-2 u-c-secondary">Order #{{$order->invoice}}</div>
                                        <div class="manage-o__text u-c-silver">Placed on {{$order->created_at->format('d-M-Y')}}</div>
                                    </div>
                                    <div>
                                        <div class="manage-o__text-2 u-c-silver">Total:

                                            <span class="manage-o__text-2 u-c-secondary">${{$order->total}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                            <div class="dash__pad-2">
                                <div class="manage-o">
                                    <div class="manage-o__header u-s-m-b-30">
                                        <div class="manage-o__icon"><i class="fas fa-box u-s-m-r-5"></i>

                                            <span class="manage-o__text">Package 1</span></div>
                                    </div>
                                    <div class="dash-l-r">
                                        <div class="manage-o__text u-c-secondary">Delivered on 26 Oct 2016</div>
                                        <div class="manage-o__icon"><i class="fas fa-truck u-s-m-r-5"></i>

                                            <span class="manage-o__text">Standard</span></div>
                                    </div>
                                    <div class="manage-o__timeline">
                                        <div class="timeline-row">
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <div class="timeline-step">
                                                    <div class="timeline-l-i timeline-l-i--finish">

                                                        <span class="timeline-circle"></span></div>

                                                    <span class="timeline-text">Processing</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <div class="timeline-step">
                                                    <div class="timeline-l-i timeline-l-i--finish">

                                                        <span class="timeline-circle"></span></div>

                                                    <span class="timeline-text">Shipped</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <div class="timeline-step">
                                                    <div class="timeline-l-i">

                                                        <span class="timeline-circle"></span></div>

                                                    <span class="timeline-text">Delivered</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach($item as $item)
                                    <div class="manage-o__description border-bottom">
                                        <div class="description__container">
                                            <div class="description__img-wrap">

                                                <img class="u-img-fluid" src="{{asset('storage/uploads/'.$item->product->image)}}" alt=""></div>
                                            <div class="description-title">{{$item->product->name}}</div>
                                        </div>
                                        <div class="description__info-wrap">
                                            <div>

                                                <span class="manage-o__text-2 u-c-silver">Quantity:

                                                    <span class="manage-o__text-2 u-c-secondary">{{$item->qty}}</span></span></div>
                                            <div>

                                                <span class="manage-o__text-2 u-c-silver">Total:
                                                    @php $item_total = $item->product->price * $item->qty; @endphp
                                                    <span class="manage-o__text-2 u-c-secondary">${{$item_total}}</span></span></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                    @foreach($shipping as $shipping)
                                    <div class="dash__pad-3">
                                        <h2 class="dash__h2 u-s-m-b-8">Shipping Address</h2>
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
                                        <h2 class="dash__h2 u-s-m-b-8">Total Summary</h2>
                                        <!-- <div class="dash-l-r u-s-m-b-8">
                                            <div class="manage-o__text-2 u-c-secondary">Subtotal</div>
                                            <div class="manage-o__text-2 u-c-secondary">$16.00</div>
                                        </div> -->
                                        <div class="dash-l-r u-s-m-b-8">
                                            <div class="manage-o__text-2 u-c-secondary">Shipping Fee</div>
                                            <div class="manage-o__text-2 u-c-secondary">$5.00</div>
                                        </div>
                                        <div class="dash-l-r u-s-m-b-8">
                                            <div class="manage-o__text-2 u-c-secondary">Total</div>
                                            
                                            <div class="manage-o__text-2 u-c-secondary">${{$order->total}}</div>
                                            
                                        </div>
                                        <div class="dash-l-r u-s-m-b-8">
                                            <div class="manage-o__text-2 u-c-secondary">Payment Method</div>
                                            
                                            <div class="manage-o__text-2 u-c-secondary">{{$order->payment_type}}</div>
                                            
                                        </div>

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

@endsection