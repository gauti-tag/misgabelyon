<?php


class Donate extends CI_Controller
{
    private $data = array();

   public function __construct()
   {
       parent::__construct();
       $this->load->model('Pays_model', 'pays');
       $this->load->model('Don_model', 'don');
       $this->load->model('Payment_history_model', 'payment_history');
       $this->load->model('Banner_don_model','banner_don');
   }


   public function index()
   {
       $this->data['banner'] = $this->banner_don->read('*',array('status_banner_don'=>1));
       $this->data['pays'] = $this->pays->read();
       $this->layout->pages('donation',$this->data);
   }

   /*public function process()
   {

       $donnees = array('montant'=>'','montantError'=>'','montantLibre'=>'','montantLibreError'=>'','civilite'=>'','civiliteError'=>'','name'=>'','nameError'=>'','prenoms'=>'','prenomsError'=>'',
           'email'=>'','emailError'=>'','address'=>'','addressError'=>'','postal'=>'','postalError'=>'','ville'=>'','villeError'=>'','pays'=>'','paysError'=>'','telephone'=>'','telephoneError'=>'',
           'jour'=>'','jourError'=>'','mois'=>'','moisError'=>'','annee'=>'','anneeError'=>'','payment'=>'','paymentError'=>'','valider'=>false,'maxmontant'=>'','date-naissance'=>'','statusApi'=>'','errorApi'=>'','errorApi2'=>'');

         if($this->input->post())
         {

               $donnees['montant'] = (int)$this->input->post('montant',true);
               $donnees['montantLibre'] = (int)$this->input->post('montantLibre',true);
               $donnees['civilite'] = $this->input->post('civilite',true);
               $donnees['name'] = $this->input->post('name',true);
               $donnees['prenoms'] = $this->input->post('prenoms',true);
               $donnees['email'] = $this->input->post('email',true);
               $donnees['address'] = $this->input->post('address',true);
               $donnees['postal'] = $this->input->post('postal',true);
               $donnees['ville'] = $this->input->post('ville',true);
               $donnees['pays'] = $this->input->post('pays',true);
               $donnees['telephone'] = $this->input->post('telephone',true);
               $donnees['jour'] = $this->input->post('jour',true);
               $donnees['mois'] = $this->input->post('mois',true);
               $donnees['annee'] = $this->input->post('annee',true);
               $donnees['payment'] = $this->input->post('paymentOption',true);

               $donnees['valider'] = true;


            if(empty($donnees['montantLibre']))
               {
                    $donnees['montantLibreError'] = "Taper un montant svp!";
                    $donnees['valider'] = false;
               }

               if(empty($donnees['montant']))
               {
                   $donnees['montantError'] = "Selectionner votre montant svp!";
                   $donnees['valider'] = false;
               }


               if(empty($donnees['name']))
               {
                   $donnees['nameError'] = "Entrer votre nom svp!";
                   $donnees['valider'] = 0;
               }

               if(empty($donnees['prenoms']))
               {
                   $donnees['prenomsError'] = "Entrer votre prénoms svp!";
                   $donnees['valider'] = false;
               }

               if(!isEmail($donnees['email']))
               {
                   $donnees['emailError'] = "Entrer un bon email svp!";
                   $donnees['valider'] = false;
               }

               if(empty($donnees['address']))
               {
                   $donnees['addressError'] = "Entrer votre addresse svp!";
                   $donnees['valider'] = false;
               }

               if(empty($donnees['postal']))
               {
                   $donnees['postalError'] = "Entrer votre un code postal";
                   $donnees['valider'] = false;

               }
               if(empty($donnees['ville']))
               {
                   $donnees['villeError'] = "Entrer le nom de votre ville";
                   $donnees['valider'] = false;
               }

               if(empty($donnees['pays']))
               {
                   $donnees['paysError'] = "Selectionner votre pays svp!";
                   $donnees['valider'] = false;
               }

               if(!isPhoneNumber($donnees['telephone']))
               {
                   $donnees['telephoneError'] = "Enter un bon numéro de téléphone svp!";
                   $donnees['valider'] = false;

               }

               if(empty($donnees['jour']))
               {
                   $donnees['jourError'] = "Selectionner le jour svp!";
                   $donnees['valider'] = false;

               }
               if(empty($donnees['mois']))
               {
                   $donnees['moisError'] = "Selectionner le mois svp!";
                   $donnees['valider'] = false;

               }

               if(empty($donnees['annee']))
               {
                   $donnees['anneeError'] = "Selectionner l'année svp!";
                   $donnees['valider'] = false;

               }

               if(empty($donnees['payment']))
               {
                   $donnees['paymentError'] = "Selectionner un moyen de payement svp!";
                   $donnees['valider'] = false;
               }

         }

       if($donnees['valider'])
        {

           $donnees['maxmontant'] = $donnees['montant'] + $donnees['montantLibre'];
           $donnees['date-naissance'] = $donnees['jour']."/".$donnees['mois']."/".$donnees['annee'];

           $donnees['order_id'] = random_string('alnum',50);

           $dataDon = array(

               'civilite'=>$donnees['civilite'],
               'nom'=>$donnees['name'],
               'prenoms'=>$donnees['prenoms'],
               'email'=>$donnees['email'],
               'adresse'=>$donnees['address'],
               'code-postal'=>$donnees['postal'],
               'ville'=>$donnees['ville'],
               'pays'=>$donnees['pays'],
               'telephone'=>$donnees['telephone'],
               'date-naissance'=>$donnees['date-naissance'],
               'mode-paiement'=>$donnees['payment'],
               'montant'=>$donnees['maxmontant'],
               'status'=>0,
               'order_id'=>$donnees['order_id']

           );


           $insertDon = $this->don->create($dataDon);

           if($insertDon)
           {

               $url = 'http://crossroadtest.net:6968/service/auth';

               $data_array = array(

                       'auth' => array(
                                "name" =>"MISGABELYON",
                                "authentication_token" => "DtjpWous910z5Rb7qlgNnTGMZXcyBIrU",
                                "order"=> $donnees['order_id']
                       )

               );

               $data_json_post = json_encode($data_array);

               $resource = curl_init();

               curl_setopt($resource,CURLOPT_URL,$url);
               curl_setopt($resource,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
               curl_setopt($resource,CURLOPT_POST,true);
               curl_setopt($resource,CURLOPT_POSTFIELDS,$data_json_post);
               curl_setopt($resource,CURLOPT_RETURNTRANSFER, 1);

               $response = curl_exec($resource);

               if($error = curl_error($resource))
               {

                 $donnees['errorApi'] = $error;

               }else{

                   $donnees['statusApi'] = $response;


                   if($donnees['statusApi'])
                   {


                       $url2 = 'http://crossroadtest.net:6968/service/auth';

                       $data_array2 = array(

                                "currency"=> "xof",
                                "operation_token"=> "iVqaZlX0-aGCJ-C1sG-cJ80-uZpBWvikD2Pj",
                                "order"=> $donnees['order_id'],
                                "transaction_amount"=> $donnees['maxmontant'],
                                "jwt"=> $donnees['statusApi']

                       );

                       $data_json_post2 = json_encode($data_array2);

                       $resource2 = curl_init();

                       curl_setopt($resource,CURLOPT_URL,$url2);
                       curl_setopt($resource,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
                       curl_setopt($resource,CURLOPT_POST,true);
                       curl_setopt($resource,CURLOPT_POSTFIELDS,$data_json_post2);
                       curl_setopt($resource,CURLOPT_RETURNTRANSFER, 1);

                       $response2 = curl_exec($resource2);

                       if($error2 = curl_error($resource)) {

                           $donnees['errorApi2'] = $error2;

                       }else{

                           $donnees['statusApi'] = 'ok';
                       }

                   }

               }


           }else{



           }

       }


       echo json_encode($donnees);


   }*/


    public function treatment()
    {
            $don['donateAmount'] = (int)$this->input->post('monney',true);
            $don['donateCivility'] = $this->input->post('civilite',true);
            $don['donateLastName'] = $this->input->post('nom',true);
            $don['donateFirstName'] = $this->input->post('prenoms',true);
            $don['donateEmail'] = $this->input->post('email',true);
            $don['donateCity'] = $this->input->post('ville',true);
            $don['donateCountry'] = $this->input->post('pays',true);
            $don['donatePhoneNumber'] = $this->input->post('telephone',true);
            $don['donateBirthDate'] = $this->input->post('dateDeNaissance',true);


                //echo 'traitement en cours de maintenance, réessayer plus tard svp!';

                 $order_id = random_string('alnum',5);

                  $dataDon = array(

                    'montant'=>$don['donateAmount'],
                    'civilite'=>$don['donateCivility'],
                    'nom'=>$don['donateLastName'],
                    'prenoms'=>$don['donateFirstName'],
                    'email'=>$don['donateEmail'],
                    'ville'=>$don['donateCity'],
                    'telephone'=>$don['donatePhoneNumber'],
                    'date-naissance'=>$don['donateBirthDate'],
                    'pays'=>$don['donateCountry'],
                    'status'=> 0,
                    'order_id'=> $order_id
                );

                $insertDon = $this->don->create($dataDon);

                if($insertDon)
                {

                    /**
                     * call the Api to get the token for connection
                     */

                    $url = 'http://crossroadtest.net:6968/service/auth';

                    $data_array = array(

                        'auth' => array(
                            "name" =>"MISGABELYON", // Service name fix by the Devops team
                            "authentication_token" => "DtjpWous910z5Rb7qlgNnTGMZXcyBIrU", // given by the Devops team
                            "order"=> $order_id
                        )

                    );

                    $data_json_post = json_encode($data_array);

                    $resource = curl_init();

                    curl_setopt($resource,CURLOPT_URL,$url);
                    curl_setopt($resource,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
                    curl_setopt($resource,CURLOPT_POST,true);
                    curl_setopt($resource,CURLOPT_POSTFIELDS,$data_json_post);
                    curl_setopt($resource,CURLOPT_RETURNTRANSFER, 1);

                    $response = curl_exec($resource);

                    if($error = curl_error($resource))
                    {
                        /**
                         * response 'error' if the api call failed
                         */
                        messageFailed('error-donate',$error);
                        $this->index();

                    }else{

                        /**
                         * response true.
                         */
                          $res = json_decode($response);
                        /**
                         * create the query to post the amount to the gatWay portail
                         */
                          $url2 = 'http://crossroadtest.net:6968/order';

                        ?>

                  <!-- form to contain informations to build the query to post -->

                   <form id="apiGateWay" method="post" action="<?php echo $url2 ?>">

                        <input type="hidden" name="currency" value="xof">
                        <input type="hidden" name="operation_token" value="iVqaZlX0-aGCJ-C1sG-cJ80-uZpBWvikD2Pj">
                        <input type="hidden" name="order" value="<?php echo $order_id ?>">
                        <input type="hidden" name="transaction_amount" value="<?php echo $don['donateAmount'] ?>">
                        <input type="hidden" name="jwt" value="<?php echo $res->auth_token ?>">
                        <input type="submit" value="envoyer" style="display: none">
                     
                   </form>

                        <script type="text/javascript">

                            // function to submit automatically the form
                            function submitForm() {

                                document.getElementById('apiGateWay').submit();

                            }
                            // we load the function
                            window.onload = submitForm;

                        </script>
             <?php
                        }


                    }else{

                    messageFailed('','erreur, veillez réessayer plus tard svp!');
                    $this->index();

                }



    }

    public function responseGetApiGateWay()
    {
        $don['receiveInfoGetDonOrder'] = $this->input->get('order_id');
        $don['receiveInfoGetDonStatus'] = $this->input->get('status_id');
        $don['receiveInfoGetDonTransactionId'] = $this->input->get('transaction_id');
        $don['receiveInfoGetDonTransactionAmount'] = $this->input->get('transaction_amount');
        $don['receiveInfoGetDonCurrency'] = $this->input->get('currency');
        $don['receiveInfoGetDonPaidTransactionAmount'] = $this->input->get('paid_transaction_amount');
        $don['receiveInfoGetDonPaidCurrency'] = $this->input->get('paid_currency');
        $don['receiveInfoGetDonRate'] = $this->input->get('change_rate');
        $don['receiveInfoGetDonConflictualCurrency'] = $this->input->get('conflictual_currency');
        $don['receiveInfoGetDonConflictualTransactionAmount'] = $this->input->get('conflictual_transaction_amount');
        $don['receiveInfoGetDonWallet'] = $this->input->get('wallet');

        if(isset($don['receiveInfoGetDonOrder']) and isset($don['receiveInfoGetDonStatus']) and isset($don['receiveInfoGetDonTransactionId']) and isset($don['receiveInfoGetDonPaidTransactionAmount']) and isset($don['receiveInfoGetDonCurrency'])
            and isset($don['receiveInfoGetDonPaidTransactionAmount']) and isset($don['receiveInfoGetDonPaidCurrency'])
              and isset($don['receiveInfoGetDonWallet'])){

               messageSuccess('success-donate','Don effectué avec succès');
               $this->index();

         }else{

            messageSuccess('error-donate','erreur de transaction');
            $this->index();

        }


    }


    public function responsePostApiGateWay()
    {

        $don['receiveInfoPostDonOrder'] = $this->input->post('order_id',true);
        $don['receiveInfoPostDonStatus'] = $this->input->post('status_id',true);
        $don['receiveInfoPostDonTransactionId'] = $this->input->post('transaction_id',true);
        $don['receiveInfoPostDonTransactionAmount'] = $this->input->post('transaction_amount',true);
        $don['receiveInfoPostDonCurrency'] = $this->input->post('currency',true);
        $don['receiveInfoPostDonPaidTransactionAmount'] = $this->input->post('paid_transaction_amount',true);
        $don['receiveInfoPostDonPaidCurrency'] = $this->input->post('paid_currency',true);
        $don['receiveInfoPostDonRate'] = $this->input->post('change_rate',true);
        $don['receiveInfoPostDonConflictualCurrency'] = $this->input->post('conflictual_currency',true);
        $don['receiveInfoPostDonConflictualTransactionAmount'] = $this->input->post('conflictual_transaction_amount',true);
        $don['receiveInfoPostDonWallet'] = $this->input->post('wallet',true);



        $dataNotification = array(

                'order_id'=>$don['receiveInfoPostDonOrder'],
                'status_id'=>$don['receiveInfoPostDonStatus'],
                'transaction_id'=>$don['receiveInfoPostDonTransactionId'],
                'transaction_amount'=>$don['receiveInfoPostDonTransactionAmount'],
                'currency'=>$don['receiveInfoPostDonCurrency'],
                'paid_transaction_amount'=>$don['receiveInfoPostDonPaidTransactionAmount'],
                'paid_currency'=>$don['receiveInfoPostDonPaidCurrency'],
                'change_rate'=>$don['receiveInfoPostDonRate'],
                'conflictual_currency'=>$don['receiveInfoPostDonConflictualCurrency'],
                'conflictual_transaction_amount'=>$don['receiveInfoPostDonConflictualTransactionAmount'],
                'wallet'=>$don['receiveInfoPostDonWallet'],
        );


        $insertDataNotification = $this->payment_history->create();

        if($insertDataNotification)
        {

            //messageSuccess('','');


        }else{



        }





    }





}