@extends('admin.admin_app')
@section('title', 'Brands')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Brands/</span> 
            <a data-bs-toggle="modal" data-bs-target="#add_brand_modal" href="" class="btn btn-sm btn-primary">Add brand</a></h4>

              <!-- Basic Layout -->
              <table id="example" class="display table" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Brand Name</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    @php $i=1; @endphp
                    @foreach($brand as $brand)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$brand->brand_name}}</td>
                        <td>
                            <img width="80px" height="80px" src="{{asset('storage/uploads/'.$brand->brand_image)}}" alt="">
                        </td>
                        <td>{{$brand->created_at->format('d_M_Y')}}</td>
                        <td>
                            @if($brand->status == 1)
                            <a href="" class="active_brand btn btn-sm btn-success"
                            data-id="{{$brand->id}}" >Active</a>
                            @else
                            <a href="" class="inactive_brand btn btn-sm btn-warning"
                            data-id="{{$brand->id}}" >Inactive</a>
                            @endif
                        </td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#update_brand_modal"
                                data-id="{{$brand->id}}"
                                data-brand_name="{{$brand->brand_name}}"
                                data-brand_image="{{$brand->brand_image}}"
                            class="update_brand btn btn-sm btn-warning">Update</a>
                            <a href="" class="delete_brand btn btn-sm btn-danger"
                            data-id="{{$brand->id}}" >Delete</a>
                        </td>
                        
                    </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>brand Name</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>

                <!-- Add brand Modal  -->

                <div class="modal fade" id="add_brand_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post" id="add_brand_form" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add brand</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">brand Name</label>
                          <input type="text" name="brand_name" id="brand_name" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">brand Image</label>
                          <input type="file" name="brand_image" id="brand_image" class="form-control"  placeholder="John Doe" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="ad_brand btn btn-primary">Save brand</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                <!-- End Add brand Modal  -->
                <!-- Update brand Modal  -->

                <div class="modal fade" id="update_brand_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post" id="update_brand_form" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update brand</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">brand Name</label>
                          <input type="text" name="up_brand_name" id="up_brand_name" class="form-control"  placeholder="Laptop" />
                          <input type="hidden" name="up_id" id="up_id" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3" >
                          <label class="form-label" for="basic-default-fullname">brand Image</label>
                          <img width="80px" height="80px" id="up_brand_image" src="" alt="">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">brand Image</label>
                          <input type="file" name="up_brand_image" id="up_brand_image" class="form-control"  placeholder="John Doe" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update brand</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                <!-- End Add brand Modal  -->




            </div>
            <!-- / Content -->

            
@endsection