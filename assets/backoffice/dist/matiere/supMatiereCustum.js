




$(function () {
    $(document).ready(function () {
        //  alert('working');
        // Swal.fire('Any fool can use a computer');
        $('.delMatiere').click(function () {

            let id = $(this).data('id');
            let text = $(this).data('text')

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deleteMatiere',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

                    //console.log(data);

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Matiere supprimée avec success',
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