<?php


class Contact extends CI_Controller
{

      private $data = array();


     public function __construct()
     {
         parent::__construct();

         $this->load->model('Contacts_model','contact');

     }


     public function index()
     {

         $this->layout->pages('contact',$this->data);

     }

     public function process()
     {

         $data['name'] = $this->input->post('name',true);
         $data['email'] = $this->input->post('email',true);
         $data['sujet'] = $this->input->post('msg_subject',true);
         $data['phone'] = $this->input->post('phone_number',true);
         $data['message'] = $this->input->post('message',true);


         $dataContacts = array(

             'name'=> $data['name'],
             'email'=>$data['email'],
             'subject'=>$data['sujet'],
             'phone'=>$data['phone'],
             'message'=>$data['message']

         );

         /*$checkContacts = $this->contact->checkUser($dataContacts);


         if(count($checkContacts) == 1 )
         {

             messageFailed('error','Désolé, vous êtes déjà enregistré');
             $this->index();

         }else{*/


                $insertContacts = $this->contact->create($dataContacts);

                if($insertContacts)
                {

                    messageSuccess('success','success');
                    $this->index();

                }else{

                     messageFailed('error','Enregistrement échoué');
                     $this->index();

                }

        /* }*/

     }

}