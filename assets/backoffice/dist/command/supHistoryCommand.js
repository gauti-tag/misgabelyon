
$(function () {


    //$('.delHistoryCommand').click(function () {

    $(document).on('click','#deleteHistoryCommandInfo',function () {

    //  alert('ok');

       let id = $(this).data('id');
      let text = $(this).data('text')

      $.ajax({
          type: 'POST',
          url: sUrl+'backoffice/admin/deleteHistoryCommand',
          data: {
              id:id,
              text:text
          },
          success: function (data) {

              console.log(data);

              Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Commande supprimée avec succès',
                  showConfirmButton: false,
                  timer: 2500
              });

                /**
                 * relaod the page
                 */
                 setTimeout('document.location.reload()',2000);

               },
               error: function (data) {

               console.log(data);

                    Swal.fire({
                       position: 'top-end',
                       icon: 'error',
                       title: 'Suppression échouée',
                       showConfirmButton: false,
                       timer: 1500
                   });

               }

})

})


})