
     $('.payment').click(function () {

                 let valeur = $(this).attr("aria-label")
                  $('#paymentOption').val(valeur);

     })



    $(document).ready(function () {


        $('#donate').submit(function (e) {

            e.preventDefault();
            $('.errors').empty();

            let donation = $(this).serialize();


             $.ajax({

                   url: sUrl + 'Donate/process',
                   type: 'POST',
                   data: donation,
                   dataType : 'json',
                   success: function (res) {

            /*           if(res.valider == false)
                       {
                           Swal.fire(
                               'Attention!',
                               'Formulaire imcomplet!',
                               'warning'
                           )

                           $('#montant + .errors').html(res.montantError);
                           $('#montantLibre + .errors').html(res.montantLibreError);
                           $('#civilite + .errors').html(res.civiliteError);
                           $('#name + .errors').html(res.nameError);
                           $('#prenoms + .errors').html(res.prenomsError);
                           $('#email + .errors').html(res.emailError);
                           $('#address + .errors').html(res.addressError);
                           $('#postal + .errors').html(res.postalError);
                           $('#ville + .errors').html(res.villeError);
                           $('#pays + .errors').html(res.paysError);
                           $('#telephone + .errors').html(res.telephoneError);
                           $('#jour + .errors').html(res.jourError);
                           $('#mois + .errors').html(res.moisError);
                           $('#annee + .errors').html(res.anneeError);
                           $('#paymentOption + .errors').html(res.paymentError);
                       }*/

                       if(res.valider == true)
                       {

                       /*  Swal.fire(

                                'Félicitation!',
                                'Le Groupe Scolaire les Figuiers  vous rémercie pour le don de '+ res.maxmontant +' vous serai rédirigé vers la page de paiement. numéro de transaction'+res.statusApi,
                                'success'
                           )*/

                           if(res.statusApi == 'ok')
                           {
                               window.location.replace("http://crossroadtest.net:6968/"+res.order_id);
                           }

                           $('#montant').val('');
                           $('#montantLibre').val('');
                           $('#civilite').val('');
                           $('#name').val('');
                           $('#prenoms').val('');
                           $('#email').val('');
                           $('#address').val('');
                           $('#postal').val('');
                           $('#ville').val('');
                           $('#pays').val('');
                           $('#telephone').val('');
                           $('#jour').val('');
                           $('#mois').val('');
                           $('#annee').val('');
                           $('#paymentOption').val('');

                       }else{

                           Swal.fire(
                               'Attention!',
                               'Formulaire imcomplet!',
                               'warning'
                           )
                           $('#montant + .errors').html(res.montantError);
                           $('#montantLibre + .errors').html(res.montantLibreError);
                           $('#civilite + .errors').html(res.civiliteError);
                           $('#name + .errors').html(res.nameError);
                           $('#prenoms + .errors').html(res.prenomsError);
                           $('#email + .errors').html(res.emailError);
                           $('#address + .errors').html(res.addressError);
                           $('#postal + .errors').html(res.postalError);
                           $('#ville + .errors').html(res.villeError);
                           $('#pays + .errors').html(res.paysError);
                           $('#telephone + .errors').html(res.telephoneError);
                           $('#jour + .errors').html(res.jourError);
                           $('#mois + .errors').html(res.moisError);
                           $('#annee + .errors').html(res.anneeError);
                           $('#paymentOption + .errors').html(res.paymentError);


                       }

                       
                   }


             })





        })
    })