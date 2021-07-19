




$(function () {


      $('.delContactService').click(function () {

            let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deleteContactService',
                data: {
                    id:id,
                    text:text
                },
                success: function () {


                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Contact supprimé avec success',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    setTimeout('document.location.reload()', 2500)


                },
                error: function () {

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