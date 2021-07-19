<?php


class Registration extends CI_Controller
{
    private $data = array();

     public function __construct()
     {
         parent::__construct();
         $this->load->model('Clients_model','clients');

     }


    public function index()
    {
        /**
         * fetch data from ajax by post method
         */
        $data['nom'] = $this->input->post('lastName',true);
        $data['prenoms'] = $this->input->post('firstName',true);
        $data['email'] = $this->input->post('email',true);
        $data['telephone'] = $this->input->post('telephone',true);
        $data['motDePasse'] = $this->input->post('password',true);

        /**
         * store data in the array Clients
         */
        $dataClients = array(

            'nom'=>$data['nom'],
            'prenoms'=>$data['prenoms'],
            'telephone'=>$data['telephone'],
            'email'=>$data['email'],
            'password'=> hash('md5',$data['motDePasse'])
        );

       // var_dump($dataClients); die();

        /**
         * query to check data if it's exist or not (return a bool)
         */

        $checkClients = $this->clients->checkUser($dataClients);

        if($checkClients)
        {

            messageWarning('register','Attention! vous êtes déjà inscrit');
            redirect('boutique/Boutique/createRegister');

        }else{

            /**
             * query to add clients data to DataBase (return the registration id)
             */
            $insertClients = $this->clients->create($dataClients);

            if($insertClients)
            {

                messageSuccess('register','Félicitation vous êtes inscrit, veillez vous conectez svp!');
                redirect('boutique/Boutique/createRegister');

            }else{

                messageFailed('register','Inscription échouée');
                redirect('boutique/Boutique/createRegister');

            }
        }


    }

    public function connect()
    {

        /**
         * collect data from the form by the POST method
         */
         $data['email'] = $this->input->post('email_connect',true);
         $data['password'] = $this->input->post('password_connect',true);

         /**
          * hash the password
          */

         $data['password'] =  hash('md5',$data['password']);

        /**
         * check if the clients exits in the DataBase
         */

         $client = $this->clients->checkUser($data);

        // var_dump($client); die();

         if(count($client) == 1)
         {
             /**
              * bind data to create session connexion
              */

             $client_session= array(

                 "id_client_session"=>$client[0]['id'],
                 "nom_client_session"=>$client[0]['nom'],
                 "prenoms_client_session"=>$client[0]['prenoms'],
                 "telephone_client_session"=>$client[0]['telephone'],
                 "email_client_session"=>$client[0]['email']
             );

             /**
              * we create session
              */
             $this->session->set_userdata($client_session);

             /**
              * condition to verify if the id exist in the session
              */

             if($this->session->userdata('id_client_session'))
             {

                 redirect('boutique/informations-supplementaires');


             }else{

                 messageFailed('connect','connexion échouée, veuillez réessayer plus tard');
                 redirect('boutique/connectez-vous');
             }

         }else{

             messageFailed('connect','Email ou mot de passe incorrect');
             redirect('boutique/connectez-vous');

         }



    }

}