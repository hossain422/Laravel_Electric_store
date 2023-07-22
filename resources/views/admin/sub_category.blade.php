@extends('admin.admin_app')
@section('title', 'Sub Category')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sub Category/</span> 
            <a data-bs-toggle="modal" data-bs-target="#add_sub_category_modal" href="" class="btn btn-sm btn-primary">Add SubCategory</a></h4>

              <!-- Basic Layout -->
              <table id="example" class="display sub_category table" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>SubCategory Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    @php $i=1; @endphp
                    @foreach($sub_category as $sub_category)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$sub_category->category->category_name}}</td>
                        <td>{{$sub_category->sub_category_name}}</td>
                        <td>{{$sub_category->created_at->format('d_M_Y')}}</td>
                        <td>
                            @if($sub_category->status == 1)
                            <a href="" class="active_sub_category btn btn-sm btn-success"
                            data-id="{{$sub_category->id}}">Active</a>
                            @else
                            <a href="" class="inactive_sub_category btn btn-sm btn-warning"
                            data-id="{{$sub_category->id}}">Inactive</a>
                            @endif
                        </td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#update_sub_category_modal"
                                data-up_id="{{$sub_category->id}}"
                                data-category_id="{{$sub_category->category_id}}"
                                data-category_name="{{$sub_category->category->category_name}}"
                                data-sub_category_name="{{$sub_category->sub_category_name}}"
                            class="update_sub_category btn btn-sm btn-warning">Update</a>
                            <a href="" class="delete_sub_category btn btn-sm btn-danger"
                            data-id="{{$sub_category->id}}" >Delete</a>
                        </td>
                        
                    </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>SubCategory Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>

                <!-- Add Sub Category Modal  -->

                <div class="modal fade" id="add_sub_category_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post" id="add_sub_category_form" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add SubCategory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Category Name</label>
                          <select class="form-control" name="category_id" id="">
                            <option value="">Select Category</option>
                            @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">SubCategory Name</label>
                          <input type="text" name="sub_category_name" id="sub_category_name" class="form-control"  placeholder="Laptop" />
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="ad_category btn btn-primary">Save SubCategory</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                <!-- End Add Category Modal  -->
                <!-- Update Category Modal  -->

                <div class="modal fade" id="update_sub_category_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post" id="update_sub_category_form" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update SubCategory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Category Name</label>
                          <select class="form-control" name="category_id">
                            <option id="up_category_id" value="">Select Category</option>
                            @foreach($up_category as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Category Name</label>
                          <input type="text" name="sub_category_name" id="up_sub_category_name" class="form-control"  placeholder="Laptop" />
                          <input type="hidden" name="up_id" id="up_id" class="form-control"  placeholder="Laptop" />
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