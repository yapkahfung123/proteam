$('#submit').click(function(){

    var form = $('#form');
    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var message = $('#message').val();

    if (name.length == 0 || email.length == 0 || phone.length == 0 || message.length == 0) {
        return false;
    } else {
        $.ajax({
            url: "index",
            method: "POST",
            data: {name: name, email: email, phone: phone, message: message},
            success: function () {
                swal({
                    title: "Success",
                    text: "Email Send Successfully",
                    icon: "success",
                    button: "Continue",
                }).then((value => {
                    window.location.href = "";
                }));

            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal("Error deleting!", "Please try again", {
                    icon: "error"
                });
            }
        })
    }
});

$('#submit_cn').click(function(){
    var form = $('#form_cn');
    var name = $('#name_cn').val();
    var email = $('#email_cn').val();
    var phone = $('#phone_cn').val();
    var message = $('#message_cn').val();


    if (name.length == 0 || email.length == 0 || phone.length == 0 || message.length == 0) {
        return false;
    } else {
        $.ajax({
            url: "index",
            method: "POST",
            data: {name: name, email: email, phone: phone, message: message},
            success: function () {
                swal({
                    title: "Success",
                    text: "Email Send Successfully",
                    icon: "success",
                    button: "Continue",
                }).then((value => {
                    window.location.href = "/cn";
                }));

            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal("Error deleting!", "Please try again", {
                    icon: "error"
                });
            }
        })
    }

});


$('.deleteForm').click(function () {
    var form_id = $(this).closest("tr").find("td:first").html();

    swal({
        title: "Are you sure?",
        text: "Form ID " + form_id + " will be deleted.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {

            $(this).closest("tr").remove();

            $.ajax({
                url: "deleteform",
                method: "POST",
                data: {"formid": form_id},
                success: function () {
                    swal("Done!", "It was succesfully deleted!", {
                        icon: "success"
                    });
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal("Error deleting!", "Please try again", {
                        icon: "error"
                    });
                }
            })
        }
    });
})
