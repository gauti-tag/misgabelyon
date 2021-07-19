



$(function () {


    //alert('forum backoffice');

          $('.delForumAdmin').click(function () {

              //console.log('forum console');


                    let id = $(this).data('id');
                    let text = $(this).data('text')

                    $.ajax({
                        type: 'POST',
                        url: sUrl + 'backoffice/admin/deleteForumAdmin',
                        data: {
                            id:id,
                            text:text
                        },
                        success: function () {

                          Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Thème supprimé avec success',
                                showConfirmButton: false,
                                timer: 2500
                            });


                            setTimeout('document.location.reload()', 2000)


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