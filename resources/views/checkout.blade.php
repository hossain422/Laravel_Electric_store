@extends('layouts.app')
@section('title', 'Checkout')
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

                            <a href="checkout.html">Checkout</a></li>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="checkout-msg-group">
                        <div class="msg u-s-m-b-30">

                            <span class="msg__text">Returning customer?

                                <a class="gl-link" href="#return-customer" data-toggle="collapse">Click here to login</a></span>
                            <div class="collapse" id="return-customer" data-parent="#checkout-msg-group">
                                <div class="l-f u-s-m-b-16">

                                    <span class="gl-text u-s-m-b-16">If you have an account with us, please log in.</span>
                                    <form class="l-f__form">
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="login-email">E-MAIL *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="login-email" placeholder="Enter E-mail"></div>
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="login-password">PASSWORD *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="login-password" placeholder="Enter Password"></div>
                                        </div>
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-15">

                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">LOGIN</button></div>
                                            <div class="u-s-m-b-15">

                                                <a class="gl-link" href="lost-password.html">Lost Your Password?</a></div>
                                        </div>

                                        <!--====== Check Box ======-->
                                        <div class="check-box">

                                            <input type="checkbox" id="remember-me">
                                            <div class="check-box__state check-box__state--primary">

                                                <label class="check-box__label" for="remember-me">Remember Me</label></div>
                                        </div>
                                        <!--====== End - Check Box ======-->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="msg">

                            <span class="msg__text">Have a coupon?

                                <a class="gl-link" href="#have-coupon" data-toggle="collapse">Click Here to enter your code</a></span>
                            <div class="collapse" id="have-coupon" data-parent="#checkout-msg-group">
                                <div class="c-f u-s-m-b-16">

                                    <span class="gl-text u-s-m-b-16">Enter your coupon code if you have one.</span>
                                    <form class="c-f__form">
                                        <div class="u-s-m-b-16">
                                            <div class="u-s-m-b-15">

                                                <label for="coupon"></label>

                                                <input class="input-text input-text--primary-style" type="text" id="coupon" placeholder="Coupon Code"></div>
                                            <div class="u-s-m-b-15">

                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">APPLY</button></div>
                                        </div>
                                    </form>
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


<!--====== Section 3 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <form action="{{url('place_order')}}" method="post" class="checkout-f__delivery">
                @csrf 
            <div class="checkout-f">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="checkout-f__h1">DELIVERY INFORMATION</h1>
                        
                            <div class="u-s-m-b-30">
                                <div class="u-s-m-b-15">

                                    <!--====== Check Box ======-->
                                    <div class="check-box">

                                        <input type="checkbox" id="get-address">
                                        <div class="check-box__state check-box__state--primary">

                                            <label class="check-box__label" for="get-address">Use default shipping and billing address from account</label></div>
                                    </div>
                                    <!--====== End - Check Box ======-->
                                </div>

                                <!--====== First Name, Last Name ======-->
                                <div class="gl-inline">
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="billing-fname">FIRST NAME *</label>

                                        <input name="name" class="input-text input-text--primary-style" type="text" required id="billing-fname" data-bill=""></div>
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="billing-lname">LAST NAME *</label>

                                        <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill=""></div>
                                </div>
                                <!--====== End - First Name, Last Name ======-->


                                <!--====== E-MAIL ======-->
                                <div class="u-s-m-b-15">

                                    <label class="gl-label" for="billing-email">E-MAIL *</label>

                                    <input name="email" class="input-text input-text--primary-style" type="email" required id="billing-email" data-bill=""></div>
                                <!--====== End - E-MAIL ======-->


                                <!--====== PHONE ======-->
                                <div class="u-s-m-b-15">

                                    <label class="gl-label" for="billing-phone">PHONE *</label>

                                    <input name="phone" required class="input-text input-text--primary-style" type="text" id="billing-phone" data-bill=""></div>
                                <!--====== End - PHONE ======-->


                                <!--====== Street Address ======-->
                                <div class="u-s-m-b-15">

                                    <label class="gl-label" for="billing-street">STREET ADDRESS *</label>

                                    <input name="address" required class="input-text input-text--primary-style" type="text" id="billing-street" placeholder="House name and street name" data-bill=""></div>
                                <div class="u-s-m-b-15">

                                    <label for="billing-street-optional"></label>

                                    <input class="input-text input-text--primary-style" type="text" id="billing-street-optional" placeholder="Apartment, suite unit etc. (optional)" data-bill=""></div>
                                <!--====== End - Street Address ======-->


                                <!--====== Country ======-->
                                <div class="u-s-m-b-15">

                                    <!--====== Select Box ======-->

                                    <label class="gl-label" for="billing-country">COUNTRY *</label>
                                    <input class="input-text input-text--primary-style" required type="text" name="country" value="Bangladesh">
                                    <!--====== End - Select Box ======-->
                                </div>
                                <!--====== End - Country ======-->


                                <!--====== Town / City ======-->
                                <div class="u-s-m-b-15">

                                    <label class="gl-label" for="billing-town-city">TOWN/CITY *</label>

                                    <input name="city" required class="input-text input-text--primary-style" type="text" id="billing-town-city" data-bill=""></div>
                                <!--====== End - Town / City ======-->


                                <!--====== ZIP/POSTAL ======-->
                                <div class="u-s-m-b-15">

                                    <label class="gl-label" for="billing-zip">ZIP/POSTAL CODE *</label>

                                    <input name="zip" required class="input-text input-text--primary-style" type="text" id="billing-zip" placeholder="Zip/Postal Code" data-bill=""></div>
                                <!--====== End - ZIP/POSTAL ======-->
                                <div class="u-s-m-b-10">

                                    <!--====== Check Box ======-->
                                    <div class="check-box">

                                        <input type="checkbox" id="make-default-address" data-bill="">
                                        <div class="check-box__state check-box__state--primary">

                                            <label class="check-box__label" for="make-default-address">Make default shipping and billing address</label></div>
                                    </div>
                                    <!--====== End - Check Box ======-->
                                </div>
                                <div class="u-s-m-b-10">

                                    <a class="gl-link" href="#create-account" data-toggle="collapse">Want to create a new account?</a></div>
                                <div class="collapse u-s-m-b-15" id="create-account">

                                    <span class="gl-text u-s-m-b-15">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</span>
                                    <div>

                                        <label class="gl-label" for="reg-password">Account Password *</label>

                                        <input class="input-text input-text--primary-style" type="text" data-bill id="reg-password"></div>
                                </div>
                                <div class="u-s-m-b-10">

                                    <label class="gl-label" for="order-note">ORDER NOTE</label><textarea class="text-area text-area--primary-style" id="order-note"></textarea></div>
                                <div>

                                    <button class="btn btn--e-transparent-brand-b-2" type="submit">SAVE</button></div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="checkout-f__h1">ORDER SUMMARY</h1>

                        <!--====== Order Summary ======-->
                        <div class="o-summary">
                            <div class="o-summary__section u-s-m-b-30">
                                <div class="o-summary__item-wrap gl-scroll">
                                @php $sub_total = 0; @endphp
                                    @foreach($cart as $cart)
                                    <div class="o-card">
                                        <div class="o-card__flex">
                                            <div class="o-card__img-wrap">

                                                <img class="u-img-fluid" src="{{asset('storage/uploads/'.$cart->product->image)}}" alt=""></div>
                                            <div class="o-card__info-wrap">

                                                <span class="o-card__name">

                                                    <a href="#">{{$cart->product->name}}</a></span>

                                                <span class="o-card__quantity">Quantity x {{$cart->qty}}</span>

                                                <span class="o-card__price">${{$cart->product->price}}</span></div>
                                        </div>

                                        <!-- <a class="o-card__del far fa-trash-alt"></a> -->
                                    </div>
                                    <input name="product_id" value="{{$cart->product_id}}" type="hidden">
                                    <input name="qty" value="{{$cart->qty}}" type="hidden">
                                    @php 
                                        $sub_total += $cart->product->price * $cart->qty;
                                    @endphp

                                    @endforeach
                                    
                                </div>
                            </div>
                            
                            <div class="o-summary__section u-s-m-b-30">
                                <div class="o-summary__box">
                                    <table class="o-summary__table">
                                        <tbody>
                                                <tr>
                                                    <td>SHIPPING</td>
                                                    <td>$5.00</td>
                                                </tr>
                                                <tr>
                                                    <td>TAX</td>
                                                    <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>SUBTOTAL</td>
                                                    <td>${{$sub_total}}</td>
                                                </tr>
                                                <tr>
                                                    <td>GRAND TOTAL</td>
                                                    @php $grand_total = $sub_total + 5; @endphp
                                                    <td>${{$grand_total}}</td>
                                                    <input name="total" value="{{$grand_total}}" type="hidden">
                                                </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="o-summary__section u-s-m-b-30">
                                <div class="o-summary__box">
                                     
                                        <div>

                                            <button class="btn btn-danger btn--e-brand-b-2" type="submit">PLACE ORDER</button></div>
                                            <!-- <a class="btn btn-danger" href="{{url('payment')}}">Place Order</a> -->
                                </div>
                            </div>
                        </div>
                        <!--====== End - Order Summary ======-->
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 3 ======-->
</div>
<!--====== End - App Content ======-->
@endsection