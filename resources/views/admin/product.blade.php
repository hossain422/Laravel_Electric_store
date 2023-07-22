@extends('admin.admin_app')
@section('title', 'Products')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Products/</span> 
            <a data-bs-toggle="modal" data-bs-target="#add_product_modal" href="" class="btn btn-sm btn-primary">Add Product</a></h4>
<marquee behavior="" direction="left">Bangladesh is a beautiful Country!!</marquee>
              <!-- Basic Layout -->
              <table id="example" class="display table" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    @php $i=1; @endphp
                    @foreach($product as $product)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product->name}}</td>
                        <td>
                            <img width="80px" height="80px" src="{{asset('storage/uploads/'.$product->image)}}" alt="">
                        </td>
                        
                        <td>{{$product->sub_category->sub_category_name}}</td>
                        <td>{{$product->brand->brand_name}}</td>
                        <td>$ {{$product->price}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->created_at->format('d_M_Y')}}</td>
                        <td>
                            @if($product->status == 1)
                            <a href="" class="active_product btn btn-sm btn-success"
                            data-id="{{$product->id}}" >Active</a>
                            @else
                            <a href="" class="inactive_product btn btn-sm btn-warning"
                            data-id="{{$product->id}}" >Inactive</a>
                            @endif
                        </td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#update_product_modal"
                                data-id="{{$product->id}}"
                                data-name="{{$product->name}}"
                                data-image="{{$product->image}}"
                                data-thambnail= "{{$product->thambnail}}"
                                data-brand_name="{{$product->brand->brand_name}}"
                                data-brand_id="{{$product->brand_id}}"
                                data-category_name="{{$product->category->category_name}}"
                                data-category_id="{{$product->category_id}}"
                                data-sub_category_name="{{$product->sub_category->sub_category_name}}"
                                data-sub_category_id="{{$product->sub_category_id}}"
                                data-price="{{$product->price}}"
                                data-qty="{{$product->qty}}"
                                data-tag="{{$product->tag}}"
                                data-short_desc="{{$product->short_desc}}"
                                data-description="{{$product->description}}"
                            class="update_product btn btn-sm btn-warning">Update</a>

                            <a href="" class="delete_product btn btn-sm btn-danger"
                            data-id="{{$product->id}}" >Delete</a>
                        </td>
                        
                    </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>product Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>

                <!-- Add product Modal  -->

                <div class="modal fade" id="add_product_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post" id="add_product_form" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Product Name</label>
                          <input type="text" name="name" id="name" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Product Image</label>
                          <input type="file" name="image" id="image" class="form-control"  placeholder="John Doe" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Thambnail Image</label>
                          <input type="file" name="thambnail[]" id="thambnail[]" class="form-control" multiple  placeholder="John Doe" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Category</label>
                          <select class="form-control" name="category_id" id="">
                            <option value="">Select Category</option>
                            @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">SubCategory</label>
                          <select class="form-control" name="sub_category_id" id="">
                            <option value="">Select SubCategory</option>
                            @foreach($sub_category as $sub_category)
                            <option value="{{$sub_category->id}}">{{$sub_category->sub_category_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Brands</label>
                          <select class="form-control" name="brand_id" id="">
                            <option value="">Select Brand</option>
                            @foreach($brand as $brand)
                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Price</label>
                          <input type="text" name="price" id="price" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Short Description</label>
                          <textarea class="form-control" name="short_desc" id="short_desc" cols="30" rows="15"></textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Description</label>
                          <textarea class="form-control" name="description" id="description" cols="30" rows="20"></textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Tags</label>
                          <input type="text" name="tag" id="tag" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Qty</label>
                          <input type="text" name="qty" id="qty" class="form-control"  placeholder="90" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="ad_product btn btn-primary">Save Product</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                <!-- End Add product Modal  -->
                <!-- Update product Modal  -->

                <div class="modal fade" id="update_product_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post" id="update_product_form" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Product Name</label>
                          <input type="text" name="name" id="up_name" class="form-control"  placeholder="Laptop" />
                          <input type="hidden" name="up_id" id="up_id" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Product Image : </label>
                          <img width="80px" height="80px" id="up_image" src="" alt="">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Product Image</label>
                          <input type="file" name="image"  class="form-control"  placeholder="John Doe" />
                        </div>
                        <div id="up_multi_image" class="mb-3">
                          <label  class="form-label" for="basic-default-fullname">Thambnail Image : </label>
                          
                          <!-- <img width="80px" height="80px" id="up_multi_image" src="" alt=""> -->
                          

                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Thambnail Image</label>
                          <input type="file" name="thambnail[]" id="thambnail[]" class="form-control" multiple  placeholder="John Doe" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Category</label>
                          <select class="form-control" name="category_id" id="">
                            <option id="up_category" value="">Select Category</option>
                            @foreach($up_category as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">SubCategory</label>
                          <select class="form-control" name="sub_category_id" id="">
                            <option id="up_sub_category" value="">Select SubCategory</option>
                            @foreach($up_sub_category as $sub_category)
                            <option value="{{$sub_category->id}}">{{$sub_category->sub_category_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Brands</label>
                          <select class="form-control" name="brand_id" id="">
                            <option id="up_brand" value="">Select Brand</option>
                            @foreach($up_brand as $brand)
                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Price</label>
                          <input type="text" name="price" id="up_price" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Short Description</label>
                          <textarea class="form-control" name="short_desc" id="up_short_desc" cols="30" rows="15"></textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Description</label>
                          <textarea class="form-control" name="description" id="up_description" cols="30" rows="20"></textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Tags</label>
                          <input type="text" name="tag" id="up_tag" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Qty</label>
                          <input type="text" name="qty" id="up_qty" class="form-control"  placeholder="90" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="ad_product btn btn-primary">Update Product</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                <!-- End Update product Modal  -->




            </div>
            <!-- / Content -->

            
@endsection