

$(function () {


    load_data();

    function load_data(query) {

        $.ajax({

            url: sUrl + "backoffice/admin/checkListHistoryTransaction",
            method: 'POST',
            data: {query: query},
            success: function (data) {

                $("#resultListHistorytransaction").html(data);

            }
        })
    }

    $("#recherche_transaction").keyup(function () {


        const search = $(this).val();

        if (search !== '') {

            load_data(search)

        } else {

            load_data();
        }

    })






})



