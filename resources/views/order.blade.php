@extends('layouts.app')
@section('title', 'My Order')
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

                            <a href="dash-my-order.html">My Account</a></li>
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

                                        <a class=" {{ Request::is('dashboard') ? 'dash-active' : '' }}" href="{{url('dashboard')}}dashboard">Manage My Account</a></li>
                                    <li>

                                        <a class="{{ Request::is('profile') ? 'dash-active' : '' }}" href="{{url('profile')}}profile">My Profile</a></li>

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
                        <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                            <div class="dash__pad-2">
                                <h1 class="dash__h1 u-s-m-b-14">My Orders</h1>

                                <span class="dash__text u-s-m-b-30">Here you can see all products that have been delivered.</span>
                                <form class="m-order u-s-m-b-30">
                                    <div class="m-order__select-wrapper">

                                        <label class="u-s-m-r-8" for="my-order-sort">Show:</label><select class="select-box select-box--primary-style" id="my-order-sort">
                                            <option selected>Last 5 orders</option>
                                            <option>Last 15 days</option>
                                            <option>Last 30 days</option>
                                            <option>Last 6 months</option>
                                            <option>Orders placed in 2018</option>
                                            <option>All Orders</option>
                                        </select></div>
                                </form>
                                <div class="m-order__list">
                                    @foreach($order as $order)
                                    <div class="m-order__get">
                                        <div class="manage-o__header u-s-m-b-30">
                                            <div class="dash-l-r">
                                                <div>
                                                    <div class="manage-o__text-2 u-c-secondary">Order #{{$order->invoice}}</div>
                                                    <div class="manage-o__text u-c-silver">Placed on {{$order->created_at->format('d-M-Y')}}</div>
                                                </div>
                                                @if($order->status == 1)
                                                <div>
                                                    <span class="manage-o__badge badge--processing">Processing</span>
                                                </div>
                                                 @else
                                                <div>
                                                    <span class="btn btn-sm btn-success">Order Received</span>
                                                </div>
                                                    @endif
                                                <div>
                                                    <div class="dash__link dash__link--brand">
                                                        

                                                        <a href="{{url('order_details', $order->invoice)}}">MANAGE</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        @php 
                                        $item = App\Models\OrderItem::where('order_id', $order->invoice)->limit(1)->get();
                                        $item_count = App\Models\OrderItem::where('order_id', $order->invoice)->get();
                                        @endphp
                                        @foreach($item as $item)
                                        <div class="manage-o__description">
                                            <div class="description__container">
                                                <div class="description__img-wrap">

                                                    <img class="u-img-fluid" src="{{('storage/uploads/'. $item->product->image)}}" alt=""></div>
                                                <div class="description-title">{{$item->product->name}}</div>
                                            </div>
                                            <div class="description__info-wrap">
                                                <!-- <div>
                                                    @if($order->status == 1)
                                                    <span class="manage-o__badge badge--processing">Processing</span></div>
                                                    @else
                                                    <span class="btn btn-sm btn-success">Order Received</span></div>
                                                    @endif
                                                <div> -->

                                                    <span class="manage-o__text-2 u-c-silver">Product Items:

                                                        <span class="manage-o__text-2 u-c-secondary">{{$item_count->count()}}</span></span></div>
                                                <div>

                                                    <span class="manage-o__text-2 u-c-silver">Total:

                                                        <span class="manage-o__text-2 u-c-secondary">${{$order->total}}</span></span></div>
                                                    <div><a href="{{url('invoice_download', $order->invoice)}}" class="manage-o__badge badge--processing">Download</a></div>
                                            </div>
                                        </div>
                                        @endforeach
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