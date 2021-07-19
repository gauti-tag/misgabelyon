

$(function () {


        $('.delIntuition').click(function () {


            //console.log('del intuition');

           let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deleteIntuition',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Contenu supprimé avec succès',
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