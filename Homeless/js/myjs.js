jQuery(document).ready(function($) {
    $('#submitBtn').on('click', function(event) {
        event.preventDefault();

        var dataUrl = $(this).data('url');
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        console.log(dataUrl)
        $.ajax({
            url: dataUrl,
            type: 'POST',
            data: {
                action: 'send_data_handler',
                name: name,
                email: email,
                message: message
            },
            success: function(response) {
                alert(response.message);
                console.log(response.message);
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    });
});
