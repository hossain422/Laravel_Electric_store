<div class="shop-p__collection " id="product_filter">
                        <div class="row is-grid-active ">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product-m">
                                    <div class="product-m__thumb">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">

                                            <img class="aspect__img" src="{{asset('storage/uploads/'.$product->image)}}" alt=""></a>
                                        <div class="product-m__quick-look">

                                            <a class="fas fa-search"
                                                data-id="{{$product->id}}"
                                                data-name="{{$product->name}}"
                                                data-price="{{$product->price}}"
                                                data-qty="{{$product->qty}}"
                                                data-short_desc="{{$product->short_desc}}"
                                                data-image="{{$product->image}}"
                                            data-bs-toggle="modal" id="quick_view" data-bs-target="#quick_view_modal" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                        <div class="product-m__add-cart">
                                            <!-- <form action="{{url('add_cart')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="qty" id="qty" value="1">
                                                <input type="hidden" name="product_id" id="product_id" value="{{$product->id}}">
                                                <button class="btn--e-brand btn btn-danger" type="submit" id="add_cart">Add to Cart</button>
                                            </form> -->
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="product-m__content">
                                        <div class="product-m__category">

                                            <a href="{{url('category', $product->sub_category_id)}}">{{$product->sub_category->sub_category_name}}</a></div>
                                        <div class="product-m__name">

                                            <a href="{{url('product_details', $product->id)}}">{{$product->name}}</a></div>
                                        <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                            <span class="product-m__review">(23)</span></div>
                                        <div class="product-m__price">${{$product->price}}</div>
                                        <div class="product-m__hover">
                                            <div class="product-m__preview-description">

                                                <span>{{$product->short_desc}}</span></div>
                                            <div class="product-m__wishlist">

                                                <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{$products->links()}}


                    <!--====== Quick Look Modal ======-->
        <div class="modal fade" id="quick_view_modal">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content modal--shadow">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Quick View</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="index.hml">Home</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">Electronics</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">DSLR Cameras</a></li>
                                        <li class="is-marked">

                                            <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->

                                
                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="">
                                            <div>

                                                <img id="quick_image" class="u-img-fluid" src="" alt="">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div id="thumbnail">
                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt="">
                                            </div>
                                            
                                        </div>
                                    </div> -->
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span id="quick_name" class="pd-detail__name"></span></div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span id="quick_price" class="pd-detail__price">$6.99</span>

                                            <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span id="quick_stock" class="pd-detail__stock">200 in stock</span>

                                            <span class="pd-detail__left">Only 2 left</span></div>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span id="quick_short_desc" class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.html">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.html">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form id="add_car" method="post" action="{{url('add_cart')}}" class="pd-detail__form">
                                            @csrf
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input id="qty" name="qty" class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">
                                                        
                                                        <span class="input-counter__plus fas fa-plus"></span></div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">
                                                    <input class="product_id" id="product_id" type="hidden" name="product_id">
                                                    <button class="btn btn-secondary btn--e-brand-b-2" type="submit">Add to Cart</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Quick Look Modal ======-->