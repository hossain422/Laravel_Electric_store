@extends('admin.admin_app')
@section('title', 'Category')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category/</span> 
            <a data-bs-toggle="modal" data-bs-target="#add_category_modal" href="" class="btn btn-sm btn-primary">Add Category</a></h4>

              <!-- Basic Layout -->
              <table id="example" class="display table" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    @php $i=1; @endphp
                    @foreach($category as $category)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>
                            <img width="80px" height="80px" src="{{asset('storage/uploads/'.$category->category_image)}}" alt="">
                        </td>
                        <td>{{$category->created_at->format('d_M_Y')}}</td>
                        <td>
                            @if($category->status == 1)
                            <a href="" class="active_category btn btn-sm btn-success"
                            data-id="{{$category->id}}" >Active</a>
                            @else
                            <a href="" class="inactive_category btn btn-sm btn-warning"
                            data-id="{{$category->id}}" >Inactive</a>
                            @endif
                        </td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#update_category_modal"
                                data-id="{{$category->id}}"
                                data-category_name="{{$category->category_name}}"
                                data-category_image="{{$category->category_image}}"
                            class="update_category btn btn-sm btn-warning">Update</a>
                            <a href="" class="delete_category btn btn-sm btn-danger"
                            data-id="{{$category->id}}" >Delete</a>
                        </td>
                        
                    </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>

                <!-- Add Category Modal  -->

                <div class="modal fade" id="add_category_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{url('/admin/store_category')}}" method="post" id="add_category_form" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Category Name</label>
                          <input type="text" name="category_name" id="category_name" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Category Image</label>
                          <input type="file" name="category_image" id="category_image" class="form-control"  placeholder="John Doe" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="ad_category btn btn-primary">Save Category</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                <!-- End Add Category Modal  -->
                <!-- Update Category Modal  -->

                <div class="modal fade" id="update_category_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post" id="update_category_form" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Category Name</label>
                          <input type="text" name="category_name" id="up_category_name" class="form-control"  placeholder="Laptop" />
                          <input type="hidden" name="id" id="id" class="form-control"  placeholder="Laptop" />
                        </div>
                        <div class="mb-3" >
                          <label class="form-label" for="basic-default-fullname">Category Image</label>
                          <img width="80px" height="80px" id="up_category_image" src="" alt="">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Category Image</label>
                          <input type="file" name="category_image" id="up_category_image" class="form-control"  placeholder="John Doe" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="ad_category btn btn-primary">Update Category</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                <!-- End Add Category Modal  -->




            </div>
            <!-- / Content -->

            
@endsection