<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	private $data = array();
	private $volunteerData = array('name'=>'', 'email'=>'', 'telephone' => '', 'message'=>' ', 'result'=>'', 'query'=>'' );
	
	public function __construct(){


		parent::__construct();
		//menu
		$this->data['menu'] = $this->fonctions->menu;
		$this->data['menu']['home'] = 'active';
		$this->data['menu']['formation'] = '';
		$this->load->model('volunteer_model','volunteer');
		$this->load->model('Connectes_model','connectes');
        $this->load->model('slide_one_model', 'slide_one');
        $this->load->model('slide_two_model', 'slide_two');
        $this->load->model('Slide_model','slide');
        $this->load->model('Interface_intuition_model','intuition');

	}

	public function index(){


	    $this->data['allSlideOne'] = $this->slide_one->readWhere('*',array('status_slide_one'=>1));
	    $this->data['allSlideTwo'] = $this->slide_two->readWhere('*',array('status_slide_two'=>1));
	    $this->data['allIntuition'] = $this->intuition->readWhere('*',array('status'=>1));

	    /*====== display slide by order =======*/


         $this->data['allSlide1'] = $this->slide->read('*',array('type'=>1,'status'=>1));
         $this->data['allSlide2'] = $this->slide->read('*',array('type'=>2, 'status'=>1));
         $this->data['allSlide3'] = $this->slide->read('*',array('type'=>3,'status'=>1,'date'=>date('Y-m-d'))); //date('Y-m-d')

         // fusionner les tableaux les uns apres les autre sans écraser des élements

         $this->data['slide'] = array_merge_recursive($this->data['allSlide1'],$this->data['allSlide2'], $this->data['allSlide3']);

        // var_dump($this->data['slide']); die();

		$this->layout->pages('home', $this->data);


		//$this->output->enable_profiler(true);
	}




	public function volunteerProcess()
    {
        /**
         * receive information name from the form of the view page without restriction and constraint (directly)
         */
            $volunteerData['name'] = trim($this->input->post('name'));
            $volunteerData['email'] = trim($this->input->post('email'));
            $volunteerData['telephone'] =trim($this->input->post('phone'));
            $volunteerData['message'] = trim($this->input->post('message'));


        /**
         * binding information (params) to database variable name
         */

              $volunteerData['query'] = array(

                  "name_volunteer"=>$volunteerData['name'],
                  "email_volunteer"=>$volunteerData['email'],
                  "phone_volunteer"=>$volunteerData['telephone'],
                  "message_volunteer"=>$volunteerData['message']


              );

        /**
         * check the BD if the information exist
         */

       //   $checkVolunteer = $this->volunteer->checkUser($volunteerData['query']);

       /*   if(count($checkVolunteer) == 1){

                echo ('vous êtes déjà inscrit(e)');

          }else{*/
              /**
               * I make a request to insert information to database
               */
              $volunteerData['result'] = $this->volunteer->create($volunteerData['query']);

              /**
               *  if the request works well that means it's true we set a message text according to our js file configuration that is "succes" look our js file
               */
              if($volunteerData['result']){

                 // echo 'success';
                //  echo '<div class="text-success">Nous vous remercions pour votre message, nous vous recontacterons très bientôt selon votre demande. En attendant prions ensemble : Notre Père, … </div>';

              }else{

                  echo 'Une erreur est survenue. Merci de reessayer plus tard!';

              }


        //  }


    }
	//--------------------------------------------------------------------

}
