

 $(function () {
       $(document).ready(function () {


           $("#recherche_student").keyup(function () {

               const search = $(this).val();

               $.ajax({
                   type:'POST',
                   url: sUrl + 'backoffice/admin/getStudent',
                   data: {search:search},
                   success: function () {

                   },
                   error: function () {

                   }
               })

           })


           $('.delStudent').click(function () {


              let id = $(this).data('id');
               let text = $(this).data('text')

               $.ajax({
                   type: 'POST',
                   url: sUrl + 'backoffice/admin/deleteStudent',
                   data: {
                       id:id,
                       text:text
                   },
                   success: function () {

                     //console.log(data);

                       Swal.fire({
                           position: 'top-end',
                           icon: 'success',
                           title: 'Etudiant supprimé avec success',
                           showConfirmButton: false,
                           timer: 2500
                       });

                   setTimeout('document.location.reload()', 2500)

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