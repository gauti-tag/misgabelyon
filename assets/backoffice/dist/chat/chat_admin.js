

function pageAdmin() {
    $( "" ).load("");
}

/**
 * fonction to load the content of the chat
 */
$(function(){

   // alert('cool');

    // focus down of the place messages are
    $( "#elementDown")[0].scrollIntoView();

    //setTimeout("document.location.reload()", 2000);
    setTimeout("pageAdmin()", 2000);

})

/**
 *
 * @param address
 * @param message
 * @param status
 */

 function sender(address, message, status){

    $.post(

        sUrl+'backoffice/Admin/sendChat',
        {
        address : address,
        message : message,
        status : status
        },
        function(data){

          document.location.reload();


        }
    )
}

/**
 * n'oublie pas la récupération de l'addresse Ip
 * recherche sur comment se procurer une addresse ip en javascript
 */

$(document).ready(function(){


   $('#messageAdmin').keypress(function(key){

        if(key.keyCode == 13 ){

            let messageAdmin =  $(this).val().trim();
            let addressClient = $('#address_client').val();
            let statusAdmin = 0;

            if(messageAdmin.length>0){

                 // lien du logo image
                let linkLogo = 'assets/img/logo_misgabelyion.jpg';

                  $("#view_chat_admin").append("<div class='direct-chat-msg right'><div class='direct-chat-info clearfix'><span class='direct-chat-name pull-right'>Misgabelyon</span><span class='direct-chat-timestamp pull-left'></span></div><img class='direct-chat-img' src='"+ sUrl +""+ linkLogo +"' alt='Message User Image'><div class='direct-chat-text'>"+ messageAdmin +" </div></div>");
                    sender(addressClient,messageAdmin,statusAdmin);
                    $(this).val(' ');


            }
        }
    })




})