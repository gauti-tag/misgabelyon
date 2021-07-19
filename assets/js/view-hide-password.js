
$(document).ready(function () {


    $(".toggle-password").click(function() {

        /**
         * toggleClass to change the class 'bx-hide' to 'bx-show-alt'
         */
        $(this).toggleClass("bx-hide bx-show-alt");

        /**
         * the variable input receive the value of the attribute toggle
         * @type {void|define.amd.jQuery|HTMLElement|*}
         */
        var input = $($(this).attr("toggle"));
        /**
         * condition to verify the content of the attribute 'type'
         */
        if (input.attr("type") == "password") {

            input.attr("type", "text");

        } else {

            input.attr("type", "password");
        }
    });

})