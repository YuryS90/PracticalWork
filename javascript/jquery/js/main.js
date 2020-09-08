$("#loginform").submit(function (event) {

    event.preventDefault();
    var post_url = $(this).attr("action");
    var request_method = $(this).attr("method");
    var form_data = $(this).serialize();
    
    $.ajax({
        url: post_url,
        type: request_method,
        data: form_data
    }).done(function (response) {
        var obj = jQuery.parseJSON(response);
        $("#response").html(obj.response);
    });
});