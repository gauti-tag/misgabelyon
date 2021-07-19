
$(function () {
    $(document).ready(function () {

        $('.delPetitPropheteLivre').click(function () {

            let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deletePetitPropheteLivre',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

                    //console.log(data);

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Livre supprimé avec succès',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    setTimeout(document.location.reload(), 300000)

                    //  setInterval(document.location.reload(),100000);

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