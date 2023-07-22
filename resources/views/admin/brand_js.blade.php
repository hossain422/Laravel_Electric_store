<script>
    $(document).ready(function(){
        $('#add_brand_form').submit(function(e){
            e.preventDefault();
            var add_brand = new FormData(this);
            $.ajax({
                method:'post', 
                url:"{{url('admin/store_brand')}}",
                data:add_brand,
                cache:false,
                processData:false,
                contentType:false,
                success:function(res){
                    if(res.status=='success'){
                         $('#add_brand_modal').modal('hide');
                         $('#add_brand_form')[0].reset();
                         $('.table').load(location.href+' .table');
                         Command: toastr["success"]("Brand Inserted is Successfully!!", "Success");
                    }
                   
                },
            });
        });
        //__ Edit Brand __//
        $(document).on('click', '.update_brand', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            var brand_name = $(this).data('brand_name');
            var brand_image = $(this).data('brand_image');

            $('#up_id').val(id);
            $('#up_brand_name').val(brand_name);
            var path = "{{asset('storage/uploads')}}/"+brand_image;
            $('#up_brand_image').attr('src',path);
        });
        //__ Update Brand __//
        $('#update_brand_form').submit(function(e){
            e.preventDefault();
            var update_brand = new FormData(this);
            $.ajax({
                method:'post',
                url:"{{url('admin/update_brand')}}",
                data:update_brand,
                cache:false,
                processData:false,
                contentType:false,
                success:function(res){
                    if(res.status=='success'){
                        $('#update_brand_modal').modal('hide');
                        $('#update_brand_form')[0].reset();
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Brand Updated is Successfully!!", "Success");
                    }
                }
            });
        });
        //__ Delete Brand __//
        $(document).on('click', '.delete_brand', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            if(confirm('Are you sure to Delete??')){
                $.ajax({
                    method:'get',
                    url:"{{url('admin/delete_brand')}}",
                    data:{id:id},
                    success:function(res){
                        if(res.status=='success'){
                            $('.table').load(location.href+' .table');
                            Command: toastr["success"]("Brand Deleted is Successfully!!", "Warning");
                        }
                    }
                });
            }
        });
        //__ Delete Brand __//
        $(document).on('click', '.active_brand', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                method:'get',
                url:"{{url('admin/active_brand')}}",
                data:{id:id},
                success:function(res){
                    if(res.status=='success'){
                        $('.table').load(location.href+' .table');
                        Command: toastr["warning"]("Brand Inactivated is Successfully!!", "Warning");
                    }
                }
            });
        });
        //__ Delete Brand __//
        $(document).on('click', '.inactive_brand', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                method:'get',
                url:"{{url('admin/inactive_brand')}}",
                data:{id:id},
                success:function(res){
                    if(res.status=='success'){
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Brand Activated is Successfully!!", "Success");
                    }
                }
            });
        });

    });
</script>