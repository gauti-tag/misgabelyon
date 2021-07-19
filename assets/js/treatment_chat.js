/**
 *
 * @param timeoutPeriod
 */
/*function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}*/


 function loadTheSmsSection()
 {
    // $( "#view_chat" ).load(window.location.href + "#view_chat");
     $('#view_chat').load(sUrl+'Chat/viewerClient');
 }



/**
 * fonction to load the content of the chat
 */
$(function(){


     // $('#view_chat').load(sUrl+'Chat/viewerClient');
       setTimeout("loadTheSmsSection()", 1000);

     //$( "#scrolldownchatuser")[0].scrollIntoView();

    /* $(document).on('#chatDownClient',function () {

         $(this)[0].scrollIntoView();

     })*/


})

/**
 *
 * @param email of the visitor who want to send sms
 * @param message sending by the user
 */

function sender(email, message){

    $.post(

        sUrl+'Chat',
        {
            email : email,
            message: message
        },
        function(data){

        }
    )
}


/**
 * n'oublie pas la récupération de l'addresse Ip
 * recherche sur comment se procurer une addresse ip en javascript
 */

$(document).ready(function(){

    // if the session exist the input is not disabled
       if(sessionStorage.getItem('sessionEmail'))
       {
           // when a keyboard is pressed
           $('#message').keypress(function(key){

               // when the keyword pressed is "enter"
               if(key.keyCode == 13 ){

                   // get the sms sanitized
                   let message =  $(this).val().trim();

                   // if the textarea is not empty
                   if(message.length>0){

                       //get the address from the session created
                        var emailTosend = sessionStorage.getItem('sessionEmail');

                      // alert('email : '+emailTosend + 'le massege est: '+ message);

                       // display instantly the sms on view page
                       $("#view_chat").append('<div align="right" style="padding: 1px"><span style="border-radius: 15px; font-size: 12px" class="btn btn-info">'+ message +'</span><br><span style="font-size: 11px"></span></div>');
                       // sending the addresss and the message
                       sender(emailTosend, message);

                       // make empty the input
                       //$(this).text("");

                       // reload the sms area
                        $('#view_chat').load(sUrl+'Chat/viewerClient');

                   }
               }
           })

       }else{

           // when the session doesn't exist the input is disabled
           $('.message').addClass('disabled');

           // regex expression to check the email in input
           var regExp = /^([\w\.\+]{1,})([^\W])(@)([\w]{1,})(\.[\w]{1,})+$/;
           // regex expression to check number in input (prompt)
           var regNumber =  /^[0-9]{10}$/;

           $('#message').click(function () {

               var email = prompt('Veillez entrer un email ou un numéro de téléphone avant de continuer');

                if(email.length > 0)
                {
                    if (regExp.test(email) || regNumber.test(email)) {

                        // create a session storage
                        sessionStorage.setItem('sessionEmail',email);

                        // reload the page first time
                        document.location.reload();

                        // remove the class disabled
                        $('#message').removeClass('disabled');


                        //reload the page seconde time
                        document.location.reload();

                    }else{

                        alert('Entrez une adresse e-mail ou un numéro de téléphone à 10 valide.');
                    }

                }else{

                  alert('Merci d\'entrer votre email svp!');

                }




           })

         }




   /* $('#message').keypress(function(key){

        if(key.keyCode == 13 ){

            let message =  $(this).val().trim();

            if(message.length>0){

                alert(message);

                 $("#view_chat").append('<div align="right" style="padding: 1px"><span style="border-radius: 15px; font-size: 12px" class="btn btn-info">'+ message +'</span><br><span style="font-size: 11px"></span></div>');
                sender(message);
                 $(this).text("");

            }
        }
    })*/
})