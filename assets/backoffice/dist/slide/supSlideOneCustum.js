



$(function () {
    $(document).ready(function () {

        $('.delSlideOne').click(function () {

            let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deleteSlideOne',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

                    // console.log(data);

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Contenu supprimé avec success',
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

})