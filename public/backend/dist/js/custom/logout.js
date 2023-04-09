$(document).ready(function() {
    function logout() {
        $(document).on('click', '#logout', function(event){
            event.preventDefault();
            var url = $(this).attr('href');
            $('#logout-form').attr('action', url);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#17a2b8',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#logout-form").submit();
                }
            })
        })
    }
    // search function
    $('#mySearch').on('keyup', function(){
        var value = $(this).val().toLowerCase();
        $('#searchData .mydata').filter(function(){
            $(this).toggle().text().toLowerCase().indexOf(value)>-1;
        });
    });
    logout();


})
