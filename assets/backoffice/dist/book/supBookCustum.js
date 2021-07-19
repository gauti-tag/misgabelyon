
    $(document).ready(function () {

         $('.delBook').click(function () {


            let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deleteBook',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Livre numérique supprimé avec success',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    setTimeout('document.location.reload()', 2000)


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
