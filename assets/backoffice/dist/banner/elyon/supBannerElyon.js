
$(function () {

    $(document).ready(function () {

        $('.delBannerElyon').click(function () {

            let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl+'backoffice/admin/deleteBannerElelyon',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Image supprimée avec succès',
                        showConfirmButton: false,
                        timer: 2500
                    });

                    /**
                     * relaod the page
                     */
                    setTimeout('document.location.reload()',2000);

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