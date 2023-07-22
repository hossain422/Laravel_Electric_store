<script>
    
    $(document).ready( function () {
        //__add Category__//
        $('#add_sub_category_form').submit(function(e){
            e.preventDefault();
            var store_sub_category = new FormData(this);
            $.ajax({
                method:'post',
                url:"{{url('admin/store_sub_category')}}",
                data:store_sub_category,
                cache:false,
                processData:false,
                contentType:false,
                success:function(res){
                    if(res.status=='success'){
                        $('#add_sub_category_modal').modal('hide');
                        $('#add_sub_category_form')[0].reset();
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("SubCategory Inserted is Successfully!!", "Success");
                    }
                },
            });
        });
        $(document).on('click', '.update_sub_category', function(e){
            e.preventDefault();
            var up_id = $(this).data('up_id');
            var category_name = $(this).data('category_name');
            var category_id = $(this).data('category_id');
            var sub_category_name = $(this).data('sub_category_name');

            $('#up_category_id').val(category_id);
            $('#up_category_id').text(category_name);
            $('#up_sub_category_name').val(sub_category_name);
            $('#up_id').val(up_id);
        });
        $('#update_sub_category_form').submit(function(e){
            e.preventDefault();
            var update_sub_category = new FormData(this);

            $.ajax({
                method:'post',
                url:"{{url('admin/update_sub_category')}}",
                data:update_sub_category,
                cache:false,
                processData:false,
                contentType:false,
                success:function(res){
                    $('#update_sub_category_modal').modal('hide');
                    $('#update_sub_category_form')[0].reset();
                    $('.table').load(location.href+' .table');
                    Command: toastr["success"]("SubCategory Updated is Successfully!!", "Success");
                },
            });
        });
        $(document).on('click', '.delete_sub_category', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            if(confirm('Are you sure to Delete??')){
                $.ajax({
                    method:'get',
                    url:"{{url('admin/delete_sub_category')}}",
                    data:{id:id},
                    success:function(res){
                        $('.table').load(location.href+' .table');
                        Command: toastr["warning"]("SubCategory Deleted is Successfully!!", "Success");
                    },
                });
            };
        });
        $(document).on('click', '.active_sub_category', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                method:'get',
                url:"{{url('admin/active_sub_category')}}",
                data:{id:id},
                success:function(res){
                    $('.table').load(location.href+' .table');
                    Command: toastr["warning"]("SubCategory Inactivated is Successfully!!", "Warning");
                }
            });
        });
        $(document).on('click', '.inactive_sub_category', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                method:'get',
                url:"{{url('admin/inactive_sub_category')}}",
                data:{id:id},
                success:function(res){
                    $('.table').load(location.href+' .table');
                    Command: toastr["success"]("SubCategory Activated is Successfully!!", "Success");
                }
            });
        });
    } );
</script>