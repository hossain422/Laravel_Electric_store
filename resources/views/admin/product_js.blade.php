<script>
    $(document).ready(function(){
        $('#add_product_form').submit(function(e){
            e.preventDefault();
            var add_product = new FormData(this);
            $.ajax({
                method:'post',
                url:"{{url('admin/store_product')}}",
                data:add_product,
                cache:false,
                processData:false,
                contentType:false,
                success:function(res){
                    if(res.status=='success'){
                        $('#add_product_modal').modal('hide');
                        $('#add_product_form')[0].reset();
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Product Inserted is Successfully!!", "Inserted");
                    }
                    
                }
            });
        });
        

        $(document).on('click', '.update_product', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var name = $(this).data('name');
            var image = $(this).data('image');
            var thambnail = $(this).data('thambnail');
            var brand_name = $(this).data('brand_name');
            var brand_id = $(this).data('brand_id');
            var category_name = $(this).data('category_name');
            var category_id = $(this).data('category_id');
            var sub_category_name = $(this).data('sub_category_name');
            var sub_category_id = $(this).data('sub_category_id');
            var price = $(this).data('price');
            var qty = $(this).data('qty');
            var tag = $(this).data('tag');
            var short_desc = $(this).data('short_desc');
            var description = $(this).data('description');

            // alert(thambnail+brand_name);

            $('#up_id').val(id);
            $('#up_name').val(name);
            var image_path = "{{ asset('storage/uploads') }}/" + image;
            var multi_image_path = "{{ asset('storage/uploads') }}/";

            $('#up_image').attr('src', image_path);
            // $('#up_multi_image').attr('src', multi_image_path);
            $('#up_category').text(category_name);
            $('#up_category').val(category_id);
            $('#up_sub_category').text(sub_category_name);
            $('#up_sub_category').val(sub_category_id);
            $('#up_brand').text(brand_name);
            $('#up_brand').val(brand_id);
            $('#up_price').val(price);
            $('#up_short_desc').text(short_desc);
            $('#up_description').text(description);
            $('#up_tag').val(tag);
            $('#up_qty').val(qty);
            if(thambnail){
                var imageHtml = '';
                thambnail.forEach(function(thumb) {
                        var imageUrl = multi_image_path + thumb;
                        imageHtml += '<img width="80px" height="80px" src="' + imageUrl + '" alt="Multi Image">';
                    });
                $('#up_multi_image').html(imageHtml);
            }else{
                //
            }
            

        });
        $('#update_product_form').submit(function(e){
            e.preventDefault();
            var update_product = new FormData(this);
            $.ajax({
                method:'post',
                url:"{{url('admin/update_product')}}",
                data:update_product,
                processData:false,
                cache:false,
                contentType:false,
                success:function(res){
                    if(res.status=='success'){
                        $('#update_product_modal').modal('hide');
                        $('#update_product_form')[0].reset();
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Product Updated is Successfully!!", "Updated");
                    }
                }
            });
        });
        $(document).on('click', '.delete_product', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            if(confirm('Are you sure to Delete??')){
                $.ajax({
                    method:'get',
                    url:"{{url('admin/delete_product')}}",
                    data:{id:id},
                    success:function(res){
                        if(res.status=='success'){
                            $('.table').load(location.href+' .table');
                            Command: toastr["warning"]("Product Deleted is Successfully!!", "Deleted");
                        }
                    },
                });
            }
        });
        $(document).on('click', '.active_product', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                method:'get',
                url:"{{url('admin/active_product')}}",
                data:{id:id},
                success:function(res){
                    if(res.status=='success'){
                        $('.table').load(location.href+' .table');
                        Command: toastr["warning"]("Product Inactivated is Successfully!!", "Inativated");
                    }
                }
            });
        });
        $(document).on('click', '.inactive_product', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                method:'get',
                url:"{{url('admin/inactive_product')}}",
                data:{id:id},
                success:function(res){
                    if(res.status=='success'){
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Product Activated is Successfully!!", "Activated");
                    }
                }
            });
        });
    });

</script>