/*==============================================================*/
// Raque LOGIN Form  JS
/*==============================================================*/
(function($) {

    "use strict"; // Start of use strict
    $("#loginForum").validator().on("submit", function(event) {

        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Tous les champs sont obligatoires");
        } else {

            // everything looks good!
            event.preventDefault();
            submitForm();
        }

    });

    $('#loginForm-btn').click(function(e) {

        e.preventDefault();
        var hasError = false;
        var check = false;
        var datasT = new FormData();

        $('#loginForum').find('input,select,textarea').each(function() {

            if ($(this).is(':input:file')) {

                if ($(this).val() !== '') {

                    datasT.append(this.name, $(this)[0].files[0]);
                }
            }
            else if ($(this).is(':checkbox')) {

                if ($(this).is(':checked')) {

                    datasT.append(this.name, $(this).val());
                    check = true;
                }
            }
            else if ($(this).is(':radio')) {

                if ($(this).is(':checked')) {

                    datasT.append(this.name, $(this).val());
                    check = true;
                }
            }
            else {

                datasT.append(this.name, $(this).val());
            }

        });

        $('#loginForum .requiredField').each(function() {

            if ($.trim($(this).val()) === '') {
                $(this).parent().find('input');
                $(this).addClass('inputError');
                hasError = true;
            } else if ($(this).hasClass('c_email')) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test($.trim($(this).val()))) {
                    $(this).parent().find('.c_email');
                    $(this).addClass('inputError');
                    hasError = true;
                } else {
                    $(this).removeClass('inputError');
                    hasError = false;
                }
            } else {
                $(this).removeClass('inputError');
            }
        });

        datasT.append(this.name, $(this).val());

        if (!hasError) {
            $.ajax({
                type: "POST",
                url: $('#loginForum').attr('action'),
                contentType: false,
                processData: false,
                data: datasT,
                success: function(text) {
                    console.log(text);
                    if (text == "success") {
                        formSuccess();
                    } else {
                        formError();
                        submitMSG(false, text);
                    }
                }
            });
        }
        else{
            formError();
            submitMSG(false, "Tous les champs sont obligatoires");
        }
    });

    function formSuccess() {

       /* $("#loginForum")[0].reset(); */
        submitMSG(true, "Connection réussie");

    }

    function formError() {
        $("#loginForum").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $("#msgLoginSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict