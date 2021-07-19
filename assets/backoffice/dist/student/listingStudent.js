

$(function () {


   // alert('ok');
    load_data();

    function load_data(query) {

        $.ajax({

            url: sUrl + "backoffice/admin/searchStudent",
            type: 'POST',
            data: {query: query},
            success: function (data) {

                $("#resultStudent").html(data);

            }
        })
    }

    $("#recherche_student").keyup(function () {


        const search = $(this).val();

        if (search !== '') {

            load_data(search)

        } else {

            load_data();
        }

    })


    /**
     * add event to button
     */
     $(document).on('click','.delStudent',function () {

        let id = $(this).data('id');
        let text = $(this).data('text');

        $.ajax({
            type: 'POST',
            url: sUrl + 'backoffice/admin/deleteStudent',
            data: {
                id:id,
                text:text
            },
            success: function () {

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'édudiant supprimé avec succès',
                    showConfirmButton: true,
                    timer: 1000
                });

                   setTimeout('document.location.reload()', 1000)
                ;

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



