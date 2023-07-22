@extends('layouts.app')
@section('title', 'Shop')
@section('content')     
<!--====== App Content ======-->
<div class="app-content">

<!--====== Section 1 ======-->
<div class="u-s-p-y-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="shop-w-master">
                    <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                        <span>FILTERS</span></h1>
                    <div class="shop-w-master__sidebar sidebar--bg-snow">
                        <div class="u-s-m-b-30">
                            <div class="shop-w">
                                <div class="shop-w__intro-wrap">
                                    <h1 class="shop-w__h">CATEGORY</h1>

                                    <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
                                </div>
                                <div class="shop-w__wrap collapse show" id="s-category">
                                    <ul class="shop-w__category-list gl-scroll">
                                        @foreach($sub_category as $sub_category)
                                        <li class="has-list">

                                            <a href="{{url('category', $sub_category->id)}}">{{$sub_category->sub_category_name}}</a>
                                            @php 
                                                $category_count = App\Models\Product::where('sub_category_id', $sub_category->id)->where('status', 1)->count();
                                            @endphp
                                            <span class="category-list__text u-s-m-l-6">({{$category_count}})</span>

                                            
                                        </li>
                                        @endforeach
                                        <!-- <li class="has-list">

                                            <a href="#">Women's Clothing</a>

                                            <span class="category-list__text u-s-m-l-6">(5)</span>

                                            <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                            <ul>
                                                <li class="has-list">

                                                    <a href="#">Hot Categories</a>

                                                    <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                    <ul>
                                                        <li>

                                                            <a href="#">Dresses</a></li>
                                                        <li>

                                                            <a href="#">Blouses & Shirts</a></li>
                                                        <li>

                                                            <a href="#">T-shirts</a></li>
                                                        <li>

                                                            <a href="#">Rompers</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-list">

                                                    <a href="#">Intimates</a>

                                                    <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                    <ul>
                                                        <li>

                                                            <a href="#">Bras</a></li>
                                                        <li>

                                                            <a href="#">Brief Sets</a></li>
                                                        <li>

                                                            <a href="#">Bustiers & Corsets</a></li>
                                                        <li>

                                                            <a href="#">Panties</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-list">

                                                    <a href="#">Wedding & Events</a>

                                                    <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                    <ul>
                                                        <li>

                                                            <a href="#">Wedding Dresses</a></li>
                                                        <li>

                                                            <a href="#">Evening Dresses</a></li>
                                                        <li>

                                                            <a href="#">Prom Dresses</a></li>
                                                        <li>

                                                            <a href="#">Flower Dresses</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-list">

                                                    <a href="#">Bottoms</a>

                                                    <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                    <ul>
                                                        <li>

                                                            <a href="#">Skirts</a></li>
                                                        <li>

                                                            <a href="#">Shorts</a></li>
                                                        <li>

                                                            <a href="#">Leggings</a></li>
                                                        <li>

                                                            <a href="#">Jeans</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-list">

                                                    <a href="#">Outwear</a>

                                                    <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                    <ul>
                                                        <li>

                                                            <a href="#">Blazers</a></li>
                                                        <li>

                                                            <a href="#">Basic Jackets</a></li>
                                                        <li>

                                                            <a href="#">Trench</a></li>
                                                        <li>

                                                            <a href="#">Leather & Suede</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-list">

                                                    <a href="#">Jackets</a>

                                                    <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                    <ul>
                                                        <li>

                                                            <a href="#">Denim Jackets</a></li>
                                                        <li>

                                                            <a href="#">Trucker Jackets</a></li>
                                                        <li>

                                                            <a href="#">Windbreaker Jackets</a></li>
                                                        <li>

                                                            <a href="#">Leather Jackets</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-list">

                                                    <a href="#">Accessories</a>

                                                    <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                    <ul>
                                                        <li>

                                                            <a href="#">Tech Accessories</a></li>
                                                        <li>

                                                            <a href="#">Headwear</a></li>
                                                        <li>

                                                            <a href="#">Baseball Caps</a></li>
                                                        <li>

                                                            <a href="#">Belts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-list">

                                                    <a href="#">Other Accessories</a>

                                                    <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                    <ul>
                                                        <li>

                                                            <a href="#">Bags</a></li>
                                                        <li>

                                                            <a href="#">Wallets</a></li>
                                                        <li>

                                                            <a href="#">Watches</a></li>
                                                        <li>

                                                            <a href="#">Sunglasses</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                       

                                            
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="u-s-m-b-30">
                            <div class="shop-w">
                                <div class="shop-w__intro-wrap">
                                    <h1 class="shop-w__h">Brands</h1>

                                    <span class="fas fa-minus shop-w__toggle" data-target="#brand" data-toggle="collapse"></span>
                                </div>
                                <div class="shop-w__wrap collapse show" id="brand">
                                    <ul class="shop-w__category-list gl-scroll">
                                        @foreach($brand as $brand)
                                        <li class="has-list">

                                            <a href="{{url('brand', $brand->id)}}">{{$brand->brand_name}}</a>
                                            @php 
                                                $brand_count = App\Models\Product::where('brand_id', $brand->id)->where('status', 1)->count();
                                            @endphp
                                            <span class="category-list__text u-s-m-l-6">({{$brand_count}})</span>

                                            
                                        </li>
                                        @endforeach
                                        
                                       

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="u-s-m-b-30">
                            <div class="shop-w">
                                <div class="shop-w__intro-wrap">
                                    <h1 class="shop-w__h">PRICE</h1>

                                    <span class="fas fa-minus shop-w__toggle" data-target="#s-price" data-toggle="collapse"></span>
                                </div>
                                <div class="shop-w__wrap collapse show" id="s-price">
                                    <form class="shop-w__form-p">
                                        <div class="shop-w__form-p-wrap">
                                            <div>

                                                <label for="price-min"></label>

                                                <input class="input-text input-text--primary-style" type="text" id="price-min" placeholder="Min"></div>
                                            <div>

                                                <label for="price-max"></label>

                                                <input class="input-text input-text--primary-style" type="text" id="price-max" placeholder="Max"></div>
                                            <div>

                                                <button class="btn btn--icon fas fa-angle-right btn--e-transparent-platinum-b-2" type="submit"></button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="u-s-m-b-30">
                            <div class="shop-w">
                                <div class="shop-w__intro-wrap">
                                    <h1 class="shop-w__h">MANUFACTURER</h1>

                                    <span class="fas fa-minus shop-w__toggle" data-target="#s-manufacturer" data-toggle="collapse"></span>
                                </div>
                                <div class="shop-w__wrap collapse show" id="s-manufacturer">
                                    <ul class="shop-w__list-2">
                                        <li>
                                            <div class="list__content">

                                                <input type="checkbox" checked>

                                                <span>Calvin Klein</span></div>

                                            <span class="shop-w__total-text">(23)</span>
                                        </li>
                                        <li>
                                            <div class="list__content">

                                                <input type="checkbox">

                                                <span>Diesel</span></div>

                                            <span class="shop-w__total-text">(2)</span>
                                        </li>
                                        <li>
                                            <div class="list__content">

                                                <input type="checkbox">

                                                <span>Polo</span></div>

                                            <span class="shop-w__total-text">(2)</span>
                                        </li>
                                        <li>
                                            <div class="list__content">

                                                <input type="checkbox">

                                                <span>Tommy Hilfiger</span></div>

                                            <span class="shop-w__total-text">(9)</span>
                                        </li>
                                        <li>
                                            <div class="list__content">

                                                <input type="checkbox">

                                                <span>Ndoge</span></div>

                                            <span class="shop-w__total-text">(3)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="shop-p">
                    <div class="shop-p__toolbar u-s-m-b-30">
                        <div class="shop-p__meta-wrap u-s-m-b-60">

                            <span class="shop-p__meta-text-1">FOUND {{$products->count()}} RESULTS</span>
                            <div class="shop-p__meta-text-2">

                                <!-- <span>Related Searches:</span>

                                <a class="gl-tag btn--e-brand-shadow" href="#">men's clothing</a>

                                <a class="gl-tag btn--e-brand-shadow" href="#">mobiles & tablets</a>

                                <a class="gl-tag btn--e-brand-shadow" href="#">books & audible</a></div> -->
                        </div>
                        <div class="shop-p__tool-style">
                            <div class="tool-style__group u-s-m-b-8">

                                <span class="js-shop-grid-target is-active">Grid</span>

                                <span class="js-shop-list-target">List</span></div>
                            <form>
                                <div class="tool-style__form-wrap">
                                    <div class="u-s-m-b-8"><select name="filter_page" id="filter_page" class="filter_page select-box select-box--transparent-b-2">
                                            <option value="9">Show: 9</option>
                                            <option value="12" selected>Show: 12</option>
                                            <option value="15">Show: 15</option>
                                            <option value="21">Show: 21</option>
                                        </select></div>
                                    <div class="u-s-m-b-8"><select id="sort" class="select-box select-box--transparent-b-2">
                                            <option value="new_item" selected>Sort By: Newest Items</option>
                                            <option value="old_item">Sort By: Oldest Items</option>
                                            <option value="low_price">Sort By: Lowest Price</option>
                                            <option value="high_price">Sort By: Highest Price</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @include('filter_result')
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section 1 ======-->
</div>
<!--====== End - App Content ======-->

@endsection