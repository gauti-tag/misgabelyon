
(function($) {


    //alert('cool');

    $("#echangeForum").validator().on("submit", function(event){

        if (event.isDefaultPrevented()) {

            // handle the invalid form...

            formError();
            submitMSG(false, "Tous les champs sont obligatoires");

        }else{

            // everything looks good!

            event.preventDefault();

        }
    });





    $('#echangeForum-Btn').click(function(e){



        e.preventDefault();
        var hasError = false;
        var check = false;
        var datasT = new FormData();

        $('#echangeForum').find('input,select,textarea').each(function() {

            if ($(this).is(':input:file')) {
                if ($(this).val() !== '') {
                    datasT.append(this.name, $(this)[0].files[0]);
                }
            }else if($(this).is(':checkbox')){
                if ($(this).is(':checked')) {
                    datasT.append(this.name, $(this).val());
                    check = true;
                }
            }else if ($(this).is(':radio')){

                if ($(this).is(':checked')) {

                    datasT.append(this.name, $(this).val());
                    check = true;

                }
            }else{

                datasT.append(this.name, $(this).val());

            }

        });

        $('#echangeForum .requiredField').each(function() {

            if ($.trim($(this).val()) === ''){

                $(this).parent().find('input');
                $(this).addClass('inputError');
                hasError = true;

            }else if($(this).hasClass('c_email')) {

                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

                if(!emailReg.test($.trim($(this).val()))){
                    $(this).parent().find('.c_email');
                    $(this).addClass('inputError');
                    hasError = true;
                }else{
                    $(this).removeClass('inputError');
                    hasError = false;
                }
            } else {
                $(this).removeClass('inputError');
            }
        });

        datasT.append(this.name, $(this).val());

        if(!hasError){


            $.ajax({
                type: "POST",
                url: $('#echangeForum').attr('action'),
                contentType: false,
                processData: false,
                data: datasT,
                success: function(result) {

                    if (result) {

                        formSuccess();
                        $("#echangeForum")[0].reset();
                        submitMSG(true, "Commentaire posté");


                    }else{

                        formError();
                        submitMSG(false, text);

                    }
                }
            });

        }else{

            formError();
            submitMSG(false, "Tous les champs sont obligatoires");

        }
    });


    function formSuccess(){


        let pseudoAdmin = $('#pseudoForumEchange').val().trim().toUpperCase();
        let messageAdmin = $('#messageFormEchange').val().trim();

        let date = new Date().toLocaleDateString();

        if(pseudoAdmin.length > 0 && messageAdmin.length > 0){

            $('#postedCommentAdminEchange').append(" <li>\n" +
                "                                      <h3 class=\"livre\">"+ pseudoAdmin +" </h3>\n" +
                "                                      <p style=\"color: black\"> "+ messageAdmin +" </p>\n" +
                "                                      <span style=\"font-size: 12px\">"+ date +" </span>\n" +
                "                                  </li>")

        }

    }


     function formError(){

        $("#echangeForum").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
    }


    function submitMSG(valid, msg) {

        if(valid){

            var msgClasses = "h5 tada animated text-success";

        }else{

            var msgClasses = "h5 text-danger";

        }

        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);

    }

}(jQuery));  // End of use strict
