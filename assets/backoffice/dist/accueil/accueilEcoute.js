


$(function () {

   load_data();

    function load_data(query) {
        $.ajax({

            url: sUrl + "backoffice/admin/searchData",
            type: 'POST',
            data: {query: query},
            success: function (data) {

               // alert(data);
                $("#resultAccueilMembers").html(data);

            }
        })
    }

    $("#recherche").keyup(function () {

        const search = $(this).val();

        if (search !== '') {

            load_data(search)

        } else {

            load_data();
        }

    })

    //alert('cool');

    //delVolunteerAccueil


    $(document).on('click','.delVolunteerAccueil',function () {

        let id = $(this).data('id');
        let text = $(this).data('text');

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
                    title: 'Membre supprimé avec succès',
                    showConfirmButton: false,
                    timer: 2500
                });

                 setTimeout('document.location.reload()', 2000)
                //document.location.reload();

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