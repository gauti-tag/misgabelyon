<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    private $data = array();
    public function __construct(){
        parent::__construct();
        // $this->load->library('form_validation');
        //  $this->load->model('login_model','login');
        //  $this->load->model('User_model','user');
        $this->load->library('session');
        $this->load->model('Inscriptions_model','inscription');
        $this->load->helper('custum');

    }

    /**
     * the executable function when we call the controller
     */
     public function index(){

             $this->data['page'] = $this->uri->segment(4);

             $this->layout->pages('connexion/login',$this->data);


     }



    public function checkStudentSession()
    {

        $data['email'] =  $this->input->post('email',true);
        $data['password'] = $this->input->post('password', true);

        $page = $this->input->post('page', true);


        /**
         * hash the password
         */

        $data['password'] = hash('md5',$data['password']);


        /**
         * condition if data are not empty
         */
        if(!empty($data['email']) and !empty($data['password']))
        {

            /**
             * verify data to database if they are the same information
             */
            $student = $this->inscription->checkUser($data);

          //  var_dump($student); die();
            /**
             * condition if we get it from database
             */
            if(count($student) == 1)
            {
                /**
                 * bind data to create session connexion
                 */

                $student_session= array(

                    "id_student_session"=>$student[0]['inscription_id'],
                    "name_student_session"=>$student[0]['name'],
                    "email_student_session"=>$student[0]['email'],
                    "status_student_session"=>$student[0]['status']
                   //"password_student_session"=>$student[0]['password']
                );

                /**
                 * we create session
                 */
                $this->session->set_userdata($student_session);

               // var_dump( $this->session->set_userdata($student_session)); die();

                /**
                 * condition to verify if the id exist in the session
                 */

                if($this->session->userdata('id_student_session') and $this->session->userdata('status_student_session') == 1){

                    /**
                     * every thing is okay now we log the user to enjoy the website
                     */

                    if(isset($page) and $page == 1)
                    {

                        redirect('Formation/tv');

                    }elseif ($page == 2){

                        redirect('Formation/coursVideo');

                    }elseif ($page == 3){

                          redirect('Formation/exercices');

                    }elseif($page == 10){

                          redirect('boutique/Boutique/index');


                    }else{

                        redirect('formation');
                    }

                }else{

                    messageFailed('error','Désolé, votre session est indisponible');
                    $this->index();
                }

            }else{


                messageFailed('error','Email ou mot de passe incorrect');
                $this->index();
            }

        }else{

            /**
             * function to create in helpers folder to simplify sending error message and redirection
             */

            messageFailed('error','Veillez entrer vos identifiants svp!');
            $this->index();

        }
    }


    /* public function check_email_availability()
     {
          if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))

         {
             echo '<label class="test-danger"><span class="glyphicon glyphicon-remove">Incorrect email</span></label>';

         }else
          {
              if($this->login->is_email_available($_POST['email']))
              {
                  echo '<label class="test-danger"><span class="glyphicon glyphicon-remove">email déjà enregistré</span></label>';

              }else{

                  echo '<label class="test-danger"><span class="glyphicon glyphicon-remove">email correct</span></label>';

              }
          }
     }*/


    /**
     * function to disconnect your user session
     */

  //  public function logOut()
   // {
        /**
         * condition to verify if the id exist and working
         */
    //    if($this->session->userdata('id_session'))
    //    {
            /**
             *  when it exist we set now null to the id_session
             */
        //    $this->session->set_userdata('id_session',' ');
        //    $this->session->set_flashdata('error','vous êtes deconnecté');
        //    $this->index();

       // }else{

        //    $this->session->set_flashdata('error','Veillez vous connecter svp!');
        //    $this->index();


      //  }

        //  $this->session->unset_userdata('email');
        //$this->layout->pages('home',$this->data);
   // }


    public function logOutStudent()
    {
        if($this->session->userdata('id_student_session')){

            $this->session->unset_userdata('id_student_session');

            redirect('connexion/login');

        }else{

            redirect(site_url());

        }
    }



}