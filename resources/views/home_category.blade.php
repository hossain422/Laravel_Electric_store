
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

                                                                    <a data-modal="modal" data-modal-id="#quick_view_modal"><i class="fas fa-search-plus"></i></a></li>
                                                                
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
