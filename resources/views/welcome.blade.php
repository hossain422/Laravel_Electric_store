 
@extends('layouts.app')
@section('title', 'Welcome')
@section('content')  
      
      <!--====== App Content ======-->
        <div class="app-content">

                    <!--====== Primary Slider ======-->
                    <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey mt-5">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div height="900px" class="carousel-inner">
                            <div class="carousel-item active">
                            <img height="600px" src="{{asset('images/banners/banner_1.png')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img height="600px" src="{{asset('images/banners/banner_2.jpg')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img height="600px" src="{{asset('images/banners/banner_3.png')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
               
            </div>
            

<!--====== Electronics Tab ======-->
<div class="u-s-p-b-60">

<!--====== Section Intro ======-->
<div class="section__intro u-s-m-b-46">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="block mt-2">

                    <span class="block__title">Brands</span>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section Intro ======-->

<div class="container">
      <marquee behavior="" direction="right" class="logo_2">
@foreach($brand as $brand)
    <a href="{{url('brand', $brand->id)}}"><img class="mx-2" width="70px" height="80px" src="{{asset('storage/uploads/'.$brand->brand_image)}}" alt=""></a>
    <!-- <h4>{{$brand->brand_name}}</h4> -->
@endforeach
</marquee>
</div>
<!--====== Section Intro ======-->
<div class="section__intro u-s-m-b-46">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="block mt-2">

                    <span class="block__title">Mobile'S</span>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!

<!--====== Section Content ======-->
<div class="section__content">
    <div class="container">
        <div class="tab-content">

            <!--====== Tab 1 ======-->
            <div class="tab-pane  fade show active" id="e-l-p">
                <div class="slider-fouc">
                    <div class="owl-carousel tab-slider" data-item="4">
                       
                        
                    </div>
                </div>
            </div>
            <!--====== End - Tab 1 ======-->
            <!--====== Tab 1 ======-->
            <div class="tab-pane  fade show active" id="e-l-p">
                <div class="slider-fouc">
                    <div class="owl-carousel tab-slider" data-item="4">
                        @foreach($electronic_category as $category_product)
                        <div class="u-s-m-b-30">
                            <div class="product-o product-o--hover-on">
                                <div class="product-o__wrap">

                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">

                                        <img class="aspect__img" src="{{asset('storage/uploads/'.$category_product->image)}}" alt=""></a>
                                    <div class="product-o__action-wrap bg-transparent">
                                        <ul class="product-o__action-list">
                                            <li>

                                                <a class="bg-white"
                                                id="quick_view" data-bs-toggle="modal" data-bs-target="#quick_view_modal"
                                                    data-id="{{$category_product->id}}"
                                                    data-name="{{$category_product->name}}"
                                                    data-price="{{$category_product->price}}"
                                                    data-qty="{{$category_product->qty}}"
                                                    data-short_desc="{{$category_product->short_desc}}"
                                                    data-image="{{$category_product->image}}"
                                                data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="text-secondary fa-solid fa-eye"></i></a></li>
                                            <li>

                                                <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                            <li>

                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">

                                    <a href="shop-side-version-2.html">Electronics</a></span>

                                <span class="product-o__name">

                                    <a href="{{url('product_details', $category_product->id)}}">{{$category_product->name}}</a></span>
                                <!-- <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                    <span class="product-o__review">(0)</span></div> -->

                                <span class="product-o__price text-bold text-danger">${{$category_product->price}}

                                    <!-- <span class="product-o__discount">$160.00</span></span> -->
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <!--====== End - Tab 1 ======-->




           


            
        </div>
    </div>
</div>
<!--====== End - Section Content ======-->
</div>
<!--====== End - Electronics Tab ======-->

            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">RECENT PRODUCTS</h1>

                                    <span class="section__span u-c-silver">NEWLY ADDED PRODUCTS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            @foreach($recent_product as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">

                                            <img class="aspect__img" src="{{asset('storage/uploads/'.$product->image)}}" alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-bs-toggle="modal" data-bs-target="#quick_view_modal"
                                                        data-id="{{$product->id}}"
                                                        data-name="{{$product->name}}"
                                                        data-price="{{$product->price}}"
                                                        data-qty="{{$product->qty}}"
                                                        data-short_desc="{{$product->short_desc}}"
                                                        data-image="{{$product->image}}"
                                                    id="quick_view" ><i class="fa-solid fa-eye"></i></a></li>
                                                <li>

                                                    <!-- <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a></li> -->
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a></li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="{{url('sub_category', $product->sub_category_id)}}">{{$product->sub_category->sub_category_name}}</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="{{url('product_details', $product->id)}}">{{$product->name}}</a></span>

                                            <span class="product-r__price">${{$product->price}}</span></div>

                                        <!-- <span class="product-r__description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 3 ======-->


            <!--====== Section 4 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-16">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">BEST SELLING PRODUCT</h1>

                                    <span class="section__span u-c-silver u-s-m-b-16">FIND PRODUCTS THAT ARE MOST SELLING</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <!-- start old  -->
                             <div class="col-lg-12 ">
                                <div class="filter-category-container">
                                    <div class="filter__category-wrapper">
                                        <button class="btn filter__btn filter__btn--style-2 js-checked" type="button" data-filter="*">ALL</button>
                                    </div>
                                    @foreach($categories as $category)
                                    <div class="filter__category-wrapper">
                                    <button class="home_category btn filter__btn filter__btn--style-2"
                                        data-id="{{$category->id}}"
                                    type="button" data-filter=".fil1{{$category->id}}">{{$category->sub_category_name}}</button>
                                    </div>
                                    @endforeach
                                     <!-- <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-2" type="button" data-filter=".bottom">BOTTOM</button></div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-2" type="button" data-filter=".footwear">FOOTWEAR</button></div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-2" type="button" data-filter=".accessories">ACCESSORIES</button></div>  -->
                                </div>
                                <div class="filter__grid-wrapper u-s-m-t-30 home_category_section" >
                                <div class="row ">
                                        @foreach($home_category as $product)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item fil1{{$product->sub_category_id}} " >
                                            <div class="product-bs">
                                                <div class="product-bs__container">
                                                    <div class="product-bs__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">

                                                            <img class="aspect__img" src="{{('storage/uploads/'.$product->image)}}" alt=""></a>
                                                        <div class="product-bs__action-wrap">
                                                            <ul class="product-bs__action-list">
                                                                <li>

                                                                <a data-bs-toggle="modal" data-bs-target="#quick_view_modal"
                                                                data-id="{{$product->id}}"
                                                                data-name="{{$product->name}}"
                                                                data-price="{{$product->price}}"
                                                                data-qty="{{$product->qty}}"
                                                                data-short_desc="{{$product->short_desc}}"
                                                                data-image="{{$product->image}}"
                                                                id="quick_view" ><i class="fa-solid fa-eye"></i></a></li>
                                                                
                                                                <li>

                                                                    <a href="signin.html"><i class="fas fa-heart"></i></a></li>
                                                                <li>

                                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-bs__category">

                                                        <a href="shop-side-version-2.html">{{$product->sub_category_name}}</a></span>

                                                    <span class="product-bs__name">

                                                        <a href="product-detail.html">{{$product->name}}</a></span>
                                                    <div class="product-bs__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-bs__review">(23)</span></div>

                                                    <span class="product-bs__price">${{$product->price}}

                                                        <!-- <span class="product-bs__discount">$160.00</span></span> -->
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                
                             </div> 
                            <!-- end Old -->



                            <div class="col-lg-12">
                                <div class="load-more">

                                    <button class="btn btn--e-brand" type="button">Load More</button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 4 ======-->


   
                    <!--====== Section 9 ======-->
                    <div class="u-s-p-b-60">

                        <!--====== Section Intro ======-->
                        <div class="section__intro u-s-m-b-46">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section__text-wrap">
                                            <h1 class="section__heading u-c-secondary u-s-m-b-12">LATEST FROM BLOG</h1>

                                            <span class="section__span u-c-silver">START YOU DAY WITH FRESH AND LATEST NEWS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Section Intro ======-->


                        <!--====== Section Content ======-->
                        <div class="section__content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                        <div class="bp-mini bp-mini--img u-h-100">
                                            <div class="bp-mini__thumbnail">

                                                <!--====== Image Code ======-->

                                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="blog-detail.html">

                                                    <img class="aspect__img" src="images/blog/post-2.jpg" alt=""></a>
                                                <!--====== End - Image Code ======-->
                                            </div>
                                            <div class="bp-mini__content">
                                                <div class="bp-mini__stat">

                                                    <span class="bp-mini__stat-wrap">

                                                        <span class="bp-mini__publish-date">

                                                            <a>

                                                                <span>25 February 2018</span></a></span></span>

                                                    <span class="bp-mini__stat-wrap">

                                                        <span class="bp-mini__preposition">By</span>

                                                        <span class="bp-mini__author">

                                                            <a href="#">Dayle</a></span></span>

                                                    <span class="bp-mini__stat">

                                                        <span class="bp-mini__comment">

                                                            <a href="blog-detail.html"><i class="far fa-comments u-s-m-r-4"></i>

                                                                <span>8</span></a></span></span></div>
                                                <div class="bp-mini__category">

                                                    <a>Learning</a>

                                                    <a>News</a>

                                                    <a>Health</a></div>

                                                <span class="bp-mini__h1">

                                                    <a href="blog-detail.html">Life is an extraordinary Adventure</a></span>
                                                <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                <div class="blog-t-w">

                                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                        <div class="bp-mini bp-mini--img u-h-100">
                                            <div class="bp-mini__thumbnail">

                                                <!--====== Image Code ======-->

                                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="blog-detail.html">

                                                    <img class="aspect__img" src="images/blog/post-12.jpg" alt=""></a>
                                                <!--====== End - Image Code ======-->
                                            </div>
                                            <div class="bp-mini__content">
                                                <div class="bp-mini__stat">

                                                    <span class="bp-mini__stat-wrap">

                                                        <span class="bp-mini__publish-date">

                                                            <a>

                                                                <span>25 February 2018</span></a></span></span>

                                                    <span class="bp-mini__stat-wrap">

                                                        <span class="bp-mini__preposition">By</span>

                                                        <span class="bp-mini__author">

                                                            <a href="#">Dayle</a></span></span>

                                                    <span class="bp-mini__stat">

                                                        <span class="bp-mini__comment">

                                                            <a href="blog-detail.html"><i class="far fa-comments u-s-m-r-4"></i>

                                                                <span>8</span></a></span></span></div>
                                                <div class="bp-mini__category">

                                                    <a>Learning</a>

                                                    <a>News</a>

                                                    <a>Health</a></div>

                                                <span class="bp-mini__h1">

                                                    <a href="blog-detail.html">Wait till its open</a></span>
                                                <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                <div class="blog-t-w">

                                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                        <div class="bp-mini bp-mini--img u-h-100">
                                            <div class="bp-mini__thumbnail">

                                                <!--====== Image Code ======-->

                                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="blog-detail.html">

                                                    <img class="aspect__img" src="images/blog/post-5.jpg" alt=""></a>
                                                <!--====== End - Image Code ======-->
                                            </div>
                                            <div class="bp-mini__content">
                                                <div class="bp-mini__stat">

                                                    <span class="bp-mini__stat-wrap">

                                                        <span class="bp-mini__publish-date">

                                                            <a>

                                                                <span>25 February 2018</span></a></span></span>

                                                    <span class="bp-mini__stat-wrap">

                                                        <span class="bp-mini__preposition">By</span>

                                                        <span class="bp-mini__author">

                                                            <a href="#">Dayle</a></span></span>

                                                    <span class="bp-mini__stat">

                                                        <span class="bp-mini__comment">

                                                            <a href="blog-detail.html"><i class="far fa-comments u-s-m-r-4"></i>

                                                                <span>8</span></a></span></span></div>
                                                <div class="bp-mini__category">

                                                    <a>Learning</a>

                                                    <a>News</a>

                                                    <a>Health</a></div>

                                                <span class="bp-mini__h1">

                                                    <a href="blog-detail.html">Tell me difference between smoke and vape</a></span>
                                                <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                <div class="blog-t-w">

                                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Section Content ======-->
                    </div>
                    <!--====== End - Section 9 ======-->
        </div>
        <!--====== End - App Content ======-->



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

                                            <!-- <span class="pd-detail__left">Only 2 left</span></div> -->
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
        </div>
        <!--====== End - Quick Look Modal ======-->
        

@endsection