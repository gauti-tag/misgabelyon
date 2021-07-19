
$(function () {
    $(document).ready(function () {

        $('.delPriereExercice').click(function () {

            let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deletePriereExercice',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Exercice supprimé avec succès',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    // setTimeout(document.location.reload(), 300000)
                    document.location.reload();

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