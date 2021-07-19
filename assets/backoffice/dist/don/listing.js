

$(function () {

    load_data();

    function load_data(query) {

        $.ajax({

            url: sUrl + "backoffice/admin/donationCheckListing",
            type: 'POST',
            data: {query: query},
            success: function (data) {

                $("#resultListingDon").html(data);

            }
        })
    }

    $("#recherche_don").keyup(function () {


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
    $(document).on('click','#delDon',function () {

        let id = $(this).data('id');
        let text = $(this).data('text');

        $.ajax({
            type: 'POST',
            url: sUrl + 'backoffice/admin/deleteDonationlisting',
            data: {
                id:id,
                text:text
            },
            success: function () {

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Donnée supprimée avec succès',
                    showConfirmButton: false,
                    timer: 2500
                });

                 setTimeout('document.location.reload()', 2000)
               // document.location.reload();

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



