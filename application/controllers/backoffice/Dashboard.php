<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
   private $data = array();

   public function __construct()
   {
       parent::__construct();

       $this->load->model('User_model','user');
       $this->load->model('Manager_model','manager');
       $this->load->helper('custum_helper');
       
   }

    public function index()
    {
       // $this->layout->backoffice('login',$this->data);
       // $this->load->viw('backoffice/login',$this->data);

       //  $data['home'] = "home";
         $this->data['home'] = "home";

       //  $data['title'] = "trying to fix it";
         $this->data['title'] = "trying to fix it";

         var_dump($this->data);
        // exit();


        //$this->load->view('backoffice/home/mainHome', $this->data, true);



    }

    public function home()
    {

         // $data['email_admin'] = $this->input->post('email',true);
         // $data['password_admin'] = $this->input->post('password',true);

        $data['password_user'] = $this->input->post('password',true);
        $data['email_user'] = $this->input->post('email',true);


          if(!empty($data['email_user']) and !empty($data['password_user'])) {

                    $admin=  $this->user->checkUser($data);

                 if(count($admin) == 1 ){

                         $admin_session = array(
                             "id_admin_session"=>$admin[0]['id_user'],
                             "email_admin_session"=>$admin[0]['email_user'],
                             "password_admin_session"=>$admin[0]['password_user']
                         );

                    $this->session->set_userdata($admin_session);

                     if($this->session->userdata('id_admin_session')){

                              $this->layout->backoffice('dashboard',$this->data);

                     }else{

                         $this->session->set_flashdata('error','votre session est desactivé');
                         redirect('backoffice/dashboard');

                     }

                 }else{

                     $this->session->set_flashdata('error','Email ou mot de passe incorrect');
                     redirect('backoffice/dashboard');
                 }

            }else{

                $this->session->set_flashdata('error','veillez remplir correctement les champs');
                redirect('backoffice/dashboard');

            }


    }






}