


$(function () {
    $(document).ready(function () {
        //  alert('working');
        // Swal.fire('Any fool can use a computer');
        $('.delTvDiffere').click(function () {


           let id = $(this).data('id');
            let text = $(this).data('text');

            $.ajax({
                type: 'POST',
                url: sUrl + 'backoffice/admin/deleteTvDiffere',
                data: {
                    id:id,
                    text:text
                },
                success: function () {

                  //  console.log(data);

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Cour supprimé avec success',
                        showConfirmButton: false,
                        timer: 2500
                    });

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