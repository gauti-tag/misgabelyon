

$(function () {

       $('.delProgram').click(function () {

           //alert('ok');

           let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deleteProgram',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

               // console.log(data);

                     Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Programme supprimé avec succès',
                        showConfirmButton: true,
                        timer: 5000
                    });

                  setTimeout('document.location.reload()',2000);



                },
                error: function () {

                 //   console.log(data);

                     Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Suppression échouée',
                        showConfirmButton: false,
                        timer: 5000
                    });

                }

            })

        })

})