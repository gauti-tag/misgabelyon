




(function($) {

            $("#exerciseDetailsForm").validator().on("submit", function(event){

                if (event.isDefaultPrevented()) {

                    // handle the invalid form...

                    formError();
                    submitMSG(false, "Tous les champs sont obligatoires");

                }else{

                    // everything looks good!

                    event.preventDefault();

                }
            });





    $('#exerciseDetailsForm-btn').click(function(e){

       // alert('working');

        e.preventDefault();
        var hasError = false;
        var check = false;
        var datasT = new FormData();

        $('#exerciseDetailsForm').find('input,select,textarea').each(function() {

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

        $('#exerciseDetailsForm .requiredField').each(function() {

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
                url: $('#exerciseDetailsForm').attr('action'),
                contentType: false,
                processData: false,
                data: datasT,
                success: function(result) {
                    //  console.log(text);
                    if (result) {

                        formSuccess();
                        $("#exerciseDetailsForm")[0].reset();
                        submitMSG(true, "posté");


                    }else{

                        // $("#exerciseDetailsForm")[0].reset();

                        formError();
                        submitMSG(false, 'non posté');

                    }
                }
            });

        }else{

            formError();
            submitMSG(false, "Tous les champs sont obligatoires");

        }
    });


    function formSuccess(){


        let pseudoAdmin = $('#pseudoExercise').val().trim().toUpperCase();
        let messageAdmin = $('#messageExercise').val().trim();

        let date = new Date().toLocaleDateString();

        if(pseudoAdmin.length > 0 && messageAdmin.length > 0){

            $('#commentStudentPosted').append(" <li>\n" +
                "                                      <h3 style=\"font-size: 20px\" class=\"livre\">"+ pseudoAdmin +" </h3>\n" +
                "                                      <span style=\"color: black\"> "+ messageAdmin +" </span>\n" +
                "                                      <p style=\"font-size: 12px\">"+ date +" </p>\n" +
                "                                  </li>")

        }

    }


    function formError(){

        $("#exerciseDetailsForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
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
