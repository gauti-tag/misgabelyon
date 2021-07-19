


$(function (){


    $('.delEvangelisationTv').click(function () {

        let id = $(this).data('id');
        let text = $(this).data('text')

        $.ajax({
            type: 'POST',
            url: sUrl + 'backoffice/admin/deleteEvangelisationTv',
            data: {
                id:id,
                text:text
            },
            success: function () {

                //console.log(data);

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Lien supprimé avec success',
                    showConfirmButton: true,
                    timer: 2500
                });

                setTimeout('document.location.reload()', 2000)

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