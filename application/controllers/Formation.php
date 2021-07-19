<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Formation extends CI_Controller{

	private $data = array();
	
	public function __construct(){
		parent::__construct();
		$this->load->model('inscriptions_model', 'inscription');
		$this->load->model('LiveTv_model', 'livetv');
		$this->load->model('package_model', 'package');
        $this->load->model('TvDiffere_model','tvdiffere');
        $this->load->model('Exercices_model','exercice');
        $this->load->model('pays_model','pays');
		$this->load->helper('custum');
        $this->load->helper('string');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url');
        $this->load->model('Banner_formation_model','banner_formation');
        $this->load->model('Programme_model','program');
        $this->load->model('Month_model','month');

        // banner
        $this->load->model('Banner_condition_model','banner_condition');
        $this->load->model('Banner_programme_model','banner_program');
		//menu
		$this->data['menu'] = $this->fonctions->menu;
		$this->data['menu']['formation'] = 'active';
		$this->data['menu']['home'] = 'active';
	}

	public function index(){

	        $this->data['bannerFormation'] = $this->banner_formation->readWhere('*',array('status_banner_formation'=>1));
            $this->layout->pages('formation',$this->data);

	}

	public function conditions(){

	    $this->data['bannerCondition'] = $this->banner_condition->readWhere("*", array('status_banner_condition'=>1));
		$this->layout->pages('conditions', $this->data);
	}

	public function programme(){
        $this->data['bannerProgramme'] = $this->banner_program->readWhere("*", array('status_banner_programme'=>1));
	    $this->data['allProgramme'] = $this->program->read();
	    $this->data['month'] = $this->month->read();

	    //var_dump($this->data['allProgramme']); die();
		$this->layout->pages('programme', $this->data);
	}

	public function directs()
    {

            if(studentLoggedIn()){

                 $data['lienTv'] = $this->livetv->readWhere('*',array('status_tv'=>1));
                 $data['rub'] = 0;

                 $this->layout->pages('formation/tv', $data);

             }else{

                 $page = 1;

                messageFailed('error','Veillez vous connectez svp!');
                redirect('connexion/Login/index/'.$page);

            }

    }

    public function exercices()
    {
         if(studentLoggedIn()){

             $data['allExercice'] = $this->exercice->readWhere('*',array('status_exercice'=>1));
             $this->layout->pages('formation/exercices', $data);

         }else{

             $page = 3;

             messageFailed('error','Veillez vous connectez svp!');
             redirect('connexion/Login/index/'.$page);

         }

    }

    public function exercices_details()
    {
        if(studentLoggedIn()){

            $this->layout->pages('formation/exercices_details', $this->data);

        }else{

            messageFailed('error','Veillez vous connectez svp!');
            redirect('connexion/Login');

        }

    }

    public function differes()
    {
          if(studentLoggedIn())
          {
              $data['tv_differe'] = $this->tvdiffere->readWhere('*',array('status'=>1));
              $this->layout->pages('formation/cours_video', $data);

          }else{

              $page = 2;
              messageFailed('error','Veillez vous connectez svp!');
              redirect('connexion/Login/index/'.$page);

          }

    }

	public function processing()
    {
            $data['name'] = verifyInput($this->input->post('name',true));
            $data['prenoms'] = verifyInput($this->input->post('prenoms',true));
            $data['email'] = verifyInput($this->input->post('email',true));
            $data['pays'] = verifyInput($this->input->post('pays',true));
            $data['password'] = verifyInput($this->input->post('password',true));
            $data['mobile'] = verifyInput($this->input->post('mobile',true));


        /*   $data['addStudentEmail'] = verifyInput($this->input->post('email',true));
           $data['addStudentNom'] = verifyInput($this->input->post('name',true));
           $data['addStudentPrenoms'] = verifyInput($this->input->post('prenoms',true));
           $data['addStudentPhone'] = verifyInput($this->input->post('mobile',true));
           $data['addStudentPassword'] = verifyInput($this->input->post('password',true));
           $data['addStudentCountry'] = verifyInput($this->input->post('pays',true));


           $dataStudents = array(

               'name'=>$data['addStudentNom'],
               'prenoms'=>$data['addStudentPrenoms'],
               'email'=>$data['addStudentEmail'],
               'pays'=>$data['addStudentCountry'],
               'password'=>hash('md5',$data['addStudentPassword']),
               'mobile'=>$data['addStudentPhone']

           );*/

           $checkStudents = $this->inscription->checkUser(array('email'=>$data['email']));


               if(count($checkStudents) == 1)
               {

                   messageFailed('error-inscription','Désolé! vous êtes déjà inscrit');
                   redirect('inscription');


               }else{

                   $data['password'] = hash("md5",$data['password']);
                   $data['link'] = random_string('alnum',20);

                   $insertStudent = $this->inscription->create($data);

                   if($insertStudent)
                   {

                       $message = "Salut, <strong>".strtoupper($data['name'])."</strong>"." ". $data['prenoms']." ".anchor('Formation/confirm/'.$data['link'],' Veuillez activer votre compte svp! ','');
                       $url = 'http://ngservasgateway.com:4000/push/transactional';

                       $data_array = array(

                           'email' => array($data['email']),
                           'subject' => 'SOUS LE FiGUIER',
                           'body' => $message
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

                           messageWarning('error-inscription',$error);
                           redirect('inscription');

                       }else{

                           $response_objet = json_decode($response);

                          if($response_objet)
                          {

                              messageWarning('error-inscription','Inscription effectuée avec succès! Veuillez vérifier votre boite mail pour la validation de votre compte.');
                              redirect('inscription');

                          }else{

                              messageFailed('error-inscription','Désolé! nous ne pouvons pas vous envoyer d\'email maintenant');
                              redirect('inscription');

                          }

                       }
                       curl_close($resource);



                   }else{

                    messageFailed('error-inscription','désolé! inscription échouée, veillez réessayer svp!');
                    redirect('inscription');

                   }

               }
	}

    public function confirm($link)
    {

        if(!empty($link)){

            $checkLink = $this->inscription->checkUser(array('link'=>$link));

            if(count($checkLink) == 1)
            {

                //$activateStudent =

                    $this->inscription->activateTheLink(array('link'=>$link),array('status'=>1,'link'=>$link.'Okay'));

             /*  if($activateStudent)
               {*/

                  messageSuccess('success','Félicitation! votre compte est maintenant actif! Veuillez vous connecter svp');
                  redirect('connexion/Confirm');


             /*   }else{

                  messageFailed('error-inscription','Désolé, votre conpte est inactif! Veillez vérifier votre boite email svp');
                  redirect('inscription');

              }*/

            }else{

                messageFailed('error-inscription','désolé! Votre compte est déjà activé');
                redirect('inscription');
            }

        }else{

            messageFailed('error-inscription','attention! Veillez entrer votre lien de connection');
            redirect('inscription');

        }

    }


}
