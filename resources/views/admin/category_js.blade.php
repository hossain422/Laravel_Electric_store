<script>
    
    $(document).ready( function () {
        //__add Category__//
        $('#add_category_form').submit(function(e){
            e.preventDefault();
            // let category_name = $('#category_name').val(); 
            // let category_image = $('#category_image').val();
            var add_category = new FormData(this);
            $.ajax({
                method:'post',
                url: "{{url('admin/store_category')}}",
                data:add_category,
                cache:false,
                processData:false,
                contentType:false,
                success:function(res){
                    if(res.status=='success'){
                        $('#add_category_modal').modal('hide');
                        $('#add_category_form')[0].reset();
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Category Inserted is Successfully!!", "Success");
                    }
                },
            });
        });
        //__Edit Category__//

        $(document).on('click', '.update_category', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let category_name = $(this).data('category_name');
            let category_image = $(this).data('category_image');
            $('#id').val(id);
            $('#up_category_name').val(category_name);

            // Construct the image path using jQuery
            var path = "{{ asset('storage/uploads') }}/" + category_image;
            $('#up_category_image').attr('src', path);
        });
        


        //__Update Category__//
        $('#update_category_form').submit(function(e){
            e.preventDefault();
            var update_category = new FormData(this);
            $.ajax({
                method:'post',
                url: "{{url('admin/update_category')}}",
                data:update_category,
                cache:false,
                processData:false,
                contentType:false,

                success:function(res){
                    if(res.status=='success'){
                        $('#update_category_modal').modal('hide');
                        $('#update_category_form')[0].reset();
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Category Updated is Successfully!!", "Success");
                    }
                },
            });
        });
        //__Delete Category__//
        $(document).on('click', '.delete_category', function(e){
            e.preventDefault();
            let id = $(this).data('id'); 
            // alert(id);
            if(confirm('Are you sure to Delete??')){
                $.ajax({
                    method:'get',
                    url: "{{url('admin/delete_category')}}",
                    data:{id:id},
                    success:function(res){
                        if(res.status=='success'){
                            $('.table').load(location.href+' .table');
                            Command: toastr["success"]("Category Deleted is Successfully!!", "Warning");
                        }
                    },
                });
            }
            
        });
        //__Active Category__//
        $(document).on('click', '.active_category', function(e){
            e.preventDefault();
            let id = $(this).data('id'); 
            $.ajax({
                method:'get',
                url: "{{url('admin/active_category')}}",
                data:{id:id},
                success:function(res){
                    if(res.status=='success'){
                        $('.table').load(location.href+' .table');
                        Command: toastr["warning"]("Category Inactivated is Successfully!!", "Warning");
                    }
                },
            });
            
        });
        //__Inactive Category__//
        $(document).on('click', '.inactive_category', function(e){
            e.preventDefault();
            let id = $(this).data('id');            
            $.ajax({
                method:'get',
                url: "{{url('admin/inactive_category')}}",
                data:{id:id},
                success:function(res){
                    if(res.status=='success'){
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Category Activated is Successfully!!", "Success");
                    }
                },
            });
            
        });
    } );
</script>