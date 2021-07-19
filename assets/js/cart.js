

$(document).ready(function () {

    $(".add-product").click(function () {

        let id = $(this).data('id');
        let name = $(this).data('name');
        let qty = $(this).data('qty');
        let price = $(this).data('price');
        let image = $(this).data('image');

        $.ajax({
            type: 'POST',
            url: sUrl + 'boutique/Cart',
            data: {
                id:id,
                name:name,
                qty:qty,
                price:price,
                image:image },
            success:function (data) {

                document.location.reload()
                
            },
            error:function () {

                //alert('not added');

            }

        })



        //alert('id is  '+ id + ',  name is  '+ name + ',  the price is  '+price);s

    })


    $('.remove_item').click(function () {

        var row_id = $(this).attr('id');
        //alert(row_id);
         $.ajax({
             url: sUrl + 'boutique/Cart/remove_items',
             method: 'POST',
             data: {row_id:row_id},
             success: function () {
                /*   Swal.fire({
                     position: 'center',
                     icon: 'success',
                     title: 'Article supprimé avec succès',
                     showConfirmButton: false,
                     timer: 5500
                 })*/
                 setTimeout(function () {
                     document.location.reload()
                 },70)
             }

         })

    })

    /**
     * script activate button when they is article and disabled when they is no artcle in shop
     */

 //var stateButton = $('#actionButton').val();

 //console.log(stateButton);


  if($('#actionButton').val() === '0' )
  {
      $('#btn-command').css('pointer-events','none')
     // console.log('ok')

  }else{

      $('#btn-command').css('pointer-events','initial')
      //console.log('Nok')


  }

   /* $('#btn-command').click(function () {

        $(this).off('click')

    })*/


})