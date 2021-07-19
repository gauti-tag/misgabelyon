

$().ready(function () {

    $.validator.addMethod('Money', function (value) {

        return /^[0-9]{4}$/.test(value);

    }, 'le jeton est non valide');

    /**
     * method to check the correct phone number format entered by the user
     */
    $.validator.addMethod('checkPhoneNumber', function (value) {

        return /^[0-9]{10}$/.test(value);

    }, 'Cet numéro de téléphone est nom valide');


    /**
     * method to check correct email format entered by the user
     */
    $.validator.addMethod('checkEmail', function (value) {

        return /[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,3}/.test(value);
        
    }, 'Cet email est nom valide');

    /**
     * form validate rules and messages to the register form (page)
     */

    $('#register').validate({

        rules: {
            lastName: {
              required: true
            },
            firstName: {
                required: true
            },
            email:{
                required: true,
                email: true,
                checkEmail: true
            },
            telephone:{
                required: true,
                checkPhoneNumber: true

            },
            password:{
                required: true,
                minlength: 5,
                maxlength: 10
            },
            passwordConfirm:{
                required: true,
                minlength: 5,
                maxlength: 10,
                equalTo: "#password"
            }
        },

        messages: {

            lastName: {
                required : "Merci d'entrer votre nom svp!",
            },
            firstName: {
                required: "Merci d'entrer votre prenoms svp!",
            },
            email:{
                required: "Merci d'entrer votre addresse email svp!",
                email: "Email non valide"
            },
            telephone:{
                required: "Merci d'entrer votre numéro de téléphone"
            },
            password:{
                required: "Merci d'entrer votre mot de passe",
                minlength : "Entrer au minimum 5 caractères svp",
                maxlength: "Maximum 10 caractères svp!"
            },
            passwordConfirm:{
                required: "Merci de confirmer votre mot de passe",
                minlength: "Entrer au minimu 5 caractères svp!",
                maxlength: "Maximum 10 caractères svp!",
                equalTo: "Mot de passe non égal"
            }

        }

    })


  $('#connect').validate({

    rules: {

        email_connect: {
            required: true,
            email: true,
            checkEmail: true
        },
        password_connect: {
            required: true,
            minlength: 5,
            maxLength: 10,
        }

    },

      messages: {

          email_connect: {
              required : "Merci d'entrer votre email svp!",
              email: "Email non valide"

          },
          password_connect: {
              required: "Merci d'entrer votre mot de passe svp!",
              minlength: "Entrer au minimu 5 caractères svp!",
              maxlength: "Maximum 10 caractères svp!"
          }

      }
  })

    $('#command').validate({

        rules : {

            nom_command: {
                required: true
            },
            prenoms_command: {
                required: true
            },
            numero_command: {

                required: true,
                checkPhoneNumber: true
            },
            email_command: {
                required: true,
                email: true,
                checkEmail: true
            },
            adresse: {

                required: true
            },
            ville: {
                required: true
            },
            pays: {
                required: true
            }
        },

        messages : {

            nom_command: {
                required: "Merci d'entrer votre nom"
            },
            prenoms_command: {
                required: "Merci d'entrer votre prenoms"
            },
            numero_command: {

                required: "Merci d'entrer votre numéro de téléphone",
            },
            email_command: {
                required: "Merci d'entrer votre email",
                email: "Email non valide"
            },
            adresse: {

                required: "Merci d'entrer votre addresse"
            },
            ville: {
                required: "Merci d'entrer votre ville"
            },
            pays: {
                required: "Merci de selectionner votre pays"
            }

        }

    })




    $('#donate').validate({

        rules:{
            monney:{
                required: true,
                number: true
            }
        },
        messages:{

            monney: "Merci d'entrer votre montant svp!",
            number: "Merci d'entrer un montant en chiffres svp!"

        }

    })





})
