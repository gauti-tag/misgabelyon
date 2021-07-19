<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller{

	private $data = array();
	
	public function __construct(){
		parent::__construct();
		//menu
		$this->data['menu'] = $this->fonctions->menu;
		$this->data['menu']['formation'] = 'active';
		$this->load->model('inscriptions_model', 'inscriptions');
        $this->load->model('pays_model','pays');
	}

	public function index(){

        $this->data['pays'] = $this->pays->read();
		$this->layout->pages('inscription', $this->data);
	}

	/*public function porcessing(){


		$name = trim($this->input->post('name'));
		$email = trim($this->input->post('email'));
		$civilite = trim($this->input->post('civilite'));
		$pays = trim($this->input->post('pays'));
		$ville = trim($this->input->post('ville'));
		$complement = trim($this->input->post('complement'));
		$code_postal = trim($this->input->post('code_postal'));
		$voie = trim($this->input->post('voie'));
		$mobile = trim($this->input->post('mobile'));
		$phone = trim($this->input->post('phone'));
		$newsletter = trim($this->input->post('newsletter'));
		$tab = $this->input->post('interets');


		// print_r($tab); exit;


		$interets = '';
		$n = sizeof($tab);

		if($n != 0){

			for ($i=0; $i < $n ; $i++) {

				$interets = $interets.$tab[$i].'|';

			}

			$interets = substr($interets, 0, -1);
		}
		// echo $interets; exit;

		if($newsletter == 'on') $newsletter = 1;
		else $newsletter = 0;

		$sql = array(
			'name' => $name,
			'civilite' => $civilite,
			'email' => $email,
			'pays' => $pays,
			'ville' => $ville,
			'complement' => $complement,
			'code_postal' => $code_postal,
			'voie' => $voie,
			'mobile' => $mobile,
			'phone' => $phone,
			'newsletter' => $newsletter,
			'interets' => $interets
		);

		// print_r($sql); exit;

		$pre = $this->inscriptions->create($sql);

    if($pre){

    	echo 'success';
  	}
  	else{
  		echo 'Une erreur est survenue. Merci de reessayer plus tard!';
  	}

	}*/




}
