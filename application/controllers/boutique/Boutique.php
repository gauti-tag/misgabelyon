<?php

class Boutique extends CI_Controller
{

    private $data = array();



     public function __construct()
     {
         parent::__construct();

         $this->load->model('Categories_model','categories');
         $this->load->model('Articles_model', 'article');
         $this->load->model('Boutique_carousel_model','carousel');
         $this->load->model('pays_model','pays');
         $this->load->model('Clients_model','clients');
         $this->load->model('Details_command_model','details_commands');
         $this->load->model('Command_model','command');
         $this->load->model('Addresses_clients_model','address_client');
         $this->load->model('Total_amount_commande_model','total_amount');
         $this->load->model('Shop_number_service_model','number_service');

         /**
          *
          */


     }


     public function index()
     {
             $this->data['categories'] = $this->categories->readWhere('*',array('status'=>1));
             $this->data['articlesUSB'] = $this->article->readLimit('*',array('status_articles'=>1,'category_id'=>1),4);
             $this->data['articlesCD'] = $this->article->readLimit('*',array('status_articles'=>1,'category_id'=>2),4);
             $this->data['articlesMP3'] = $this->article->readLimit('*',array('status_articles'=>1,'category_id'=>3),4);
             $this->data['articlesBook'] = $this->article->readLimit('*',array('status_articles'=>1,'category_id'=>4),4);


           /*$this->data['cle'] = $this->article->compter('category_id',1);
             $this->data['cd'] = $this->article->compter('category_id',2);
             $this->data['mp3'] = $this->article->compter('category_id',3);*/
             $this->data['carousel'] = $this->carousel->read();
             $this->data['number'] = $this->number_service->readWhere('*',array('status'=>1));

             $this->load->vars($this->data);
             $this->layout->pages('boutique/shop',$this->data);

    }

    public function product($id)
    {
        $this->data['current_article'] = $this->article->readWhere('*',array('id_articles'=>$id));
        $this->layout->pages('boutique/product',$this->data);
    }


    public function command()
    {
        if($this->session->userdata('id_client_session'))
        {
            $this->data['pays'] = $this->pays->read();
            $this->load->library('cart');
            $this->data['recapView'] = $this->cart->contents();
            $this->data['recapTotalItems'] = $this->cart->total_items();
            $this->data['recapTotal'] = $this->cart->total();
            $this->layout->pages('boutique/commande',$this->data);

        }else{

            redirect('boutique/connectez-vous');

        }

    }

    public function treatmentCommand()
    {

            /**
             * fetch id of the client from the form
             */

            $idClient = $this->input->post('idClient',true);

           /**
            * fetch data clients from the form always in DataBAse
            */
           $clients['nomClient'] = $this->input->post('nom_command',true);
           $clients['prenomsClient'] = $this->input->post('prenoms_command',true);
           $clients['emailClient'] = $this->input->post('email_command',true);


        /**
         * fetch data clients from the form witch does not exist in DataBase
         */
           $clients['phoneNumberClient'] = $this->input->post('numero_command',true);
           $clients['addressClient'] = $this->input->post('adresse',true);
           $clients['cityClient'] = $this->input->post('ville',true);
           $clients['countryClient'] = $this->input->post('country',true);


           //var_dump($idClient); die();

        /**
         * collect the data to update
         */
         /*  $dataClients = array(

               'telephone'=>$clients['phoneNumberClient'],
               'addresse'=>$clients['addressClient'],
               'ville'=>$clients['cityClient'],
               'pays'=>$clients['countryClient']
           );*/

        $dataAddressesClients = array(

            'phone'=>$clients['phoneNumberClient'],
            'addresse_physique'=>$clients['addressClient'],
            'ville'=>$clients['cityClient'],
            'pays'=>$clients['countryClient'],
            'client_id'=>$idClient
        );
       // var_dump($dataAddressesClients); die();
           /**
            * query to update the dataBase into the table clients
            */

            //$upDateClients = true; // $this->clients->update(array('id'=>$idClient),$dataClients);

            $createAddressClient = $this->address_client->create($dataAddressesClients);

            if($createAddressClient)
            {
                /**
                 * generate the unique code
                 */

                $codeCommand = "MISGAB-".mt_rand(1,5000);



                /**
                 * data to command table
                 */

                $dataCommand = array(

                    'code'=>$codeCommand,
                    'client_id'=>$idClient,
                    'status'=> 0

                );

                /**
                 * query to create a command code
                 */

                  $insertCodeCommand = $this->command->create($dataCommand);

                  if($insertCodeCommand)
                  {

                    //  $imgBannerFormationToDel = $this->banner_formation->getImageById('file_banner_formation',array('id_banner_formation'=>$idBannerFormationDecrypt));

                      $id_of_code_command_generated = $this->command->getImageById('id',array('code'=>$codeCommand));

                      /**
                       * inserting the total amount of the current command
                       */
                      $dataAmountSave = array(
                              'montant'=> $this->cart->total(),
                              'command_id'=> $id_of_code_command_generated['0']['id']
                      );


                      $this->total_amount->create($dataAmountSave);



                      /**
                       * boucle for list the articles from the shop cart []
                       */
                      foreach ($this->cart->contents() as $row):
                          $dataDetailsArticles[] = array(
                              'id_commande'=> $id_of_code_command_generated['0']['id'],
                              'nom_article'=> $row['name'],
                              'prix_article'=> $row['price'],
                              'qty_article'=> $row['qty']
                          );
                      endforeach;

                      //var_dump($dataDetailsArticles); die();
                      /**
                       * boucle for inserting the hole list in the dataBase
                       */
                      foreach ($dataDetailsArticles as $items):
                          /**
                           * Query to insert items to DataBase
                           */
                          $insertArticle = $this->details_commands->create($items);

                      endforeach;

                      if($insertArticle)
                      {

                          /**
                           * call the Api to get the token for connection
                           */

                          $url = 'http://crossroadtest.net:6968/service/auth';

                          $data_array = array(

                              'auth' => array(
                                  "name" =>"MISGABELYON", // Service name fix by the Devops team
                                  "authentication_token" => "DtjpWous910z5Rb7qlgNnTGMZXcyBIrU", // given by the Devops team
                                  "order"=> $codeCommand  // command code generated
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
                              //messageFailed('error',$error);
                             // redirect('');

                              echo 'error GateWay'.$error;

                          }else{

                              //echo 'success'; die();

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

                              <form id="apiGateWayCommand" method="post" action="<?php echo $url2 ?>">

                                  <input type="hidden" name="currency" value="xof">
                                  <input type="hidden" name="operation_token" value="iVqaZlX0-aGCJ-C1sG-cJ80-uZpBWvikD2Pj">
                                  <input type="hidden" name="order" value="<?php echo $codeCommand ?>">
                                  <input type="hidden" name="transaction_amount" value="<?php echo $this->cart->total() ?>">
                                  <input type="hidden" name="jwt" value="<?php echo $res->auth_token ?>">
                                  <input type="submit" value="envoyer" style="display: none">

                              </form>

                              <script type="text/javascript">

                                  // function to submit automatically the form
                                   function submitForm() {

                                      document.getElementById('apiGateWayCommand').submit();

                                  }
                                  // we load the function
                                  window.onload = submitForm;

                              </script>

                              <?php


                          }



                      }else{

                          echo 'erreur, veillez réessayer plus tard svp!';

                      }


                  }

            }

    }

   public function confirm()
   {
       $this->layout->pages('boutique/confirmation',$this->data);
   }

    public function failed()
    {
        $this->layout->pages('boutique/failed',$this->data);
    }

    public function products($id)
    {
         if($id == 1)
         {
             $this->data['session'] = 'Clé USB';
             $this->data['all'] = $this->article->readWhere('*',array('category_id'=>1));

         }elseif ($id == 2)
         {
             $this->data['session'] = 'CD';
             $this->data['all'] = $this->article->readWhere('*',array('category_id'=>2));

         }elseif ($id == 3)
         {
             $this->data['session'] = 'MP3';
             $this->data['all'] = $this->article->readWhere('*',array('category_id'=>3));
         }

        $this->layout->pages('boutique/products_category',$this->data);
    }

    public function createRegister()
    {
         $this->layout->pages('boutique/create-register',$this->data);
    }


    public function viewMenuArticle()
    {
        $categories = $this->categories->readWhere('*',array('status'=>1));
        $outputMenu ='';
            foreach ($categories as $row):
                       $outputMenu .= '<li class="nav-item">';
                        $outputMenu .='<a href="'.site_url('boutique').'" class="nav-link">'.$row->name.'  </a>';
                         $outputMenu.='</li>';
             endforeach;

             echo $outputMenu;
    }


    /*public function history()
    {
        $this->load->model('History_command_model','history');

        $data =  $this->history->historic_command();

        var_dump($data);
    }*/












}