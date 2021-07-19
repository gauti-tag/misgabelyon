



$(function () {

    //alert('cool');

    $('.update-status-slide').click(function () {

        Swal.fire({
            title: 'Activation / Désactivation',
            text: "Veuillez confirmer l'activation ou la désactivation du contenu!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmer'

        }).then((result) => {

            if (result.isConfirmed) {

                let status = $(this).data('status');
                let text = $(this).data('text')

                $.ajax({
                    type: 'POST',
                    url: sUrl + 'backoffice/admin/changeSlideStatus',
                    data: {
                        status: status,
                        text: text
                    },
                    success: function () {

                        Swal.fire(
                            'Félicitation!',
                            'Commentaire activé ou désactivé avec succès.',
                            'success'
                        )

                        // console.log(data);

                        setTimeout('document.location.reload()', 2000)

                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Echec d\'activation ou de désactivation de ce commentaire'
                        })
                    }

                })

            }

        })

    })
})