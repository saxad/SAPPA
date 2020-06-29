$(document).on('click', '.delete-confirm', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    swal({
            title: "Are you sure!",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes!",
            showCancelButton: true,
        },
        function () {
            $.ajax({
                type: "POST",
                url: "{{url('/destroy')}}",
                data: {
                    id: id
                },
                success: function (data) {
                    //
                }
            });
        });
});