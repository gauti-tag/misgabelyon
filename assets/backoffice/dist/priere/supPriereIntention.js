
$(function () {
    $(document).ready(function () {

        $('.delPriereIntention').click(function () {

            let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deletePriereIntention',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Intention de prière supprimée avec succès',
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