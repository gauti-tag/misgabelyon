

  $(function () {
    $(document).ready(function () {

            // alert('cool');

           $('.delVolunteer').click(function () {


              // alert('working fine.');

             //  console.log('super');

               let id = $(this).data('id');
                let text = $(this).data('text')

                $.ajax({
                    type: 'POST',
                    url: sUrl + 'backoffice/admin/deleteAccueilEcouteAccompagnement',
                    data: {
                        id:id,
                        text:text
                    },
                    success: function () {

                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Membre supprimé avec success',
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