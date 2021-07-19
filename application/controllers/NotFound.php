<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {

	public function __construct(){
		parent::__construct();
         //$this->load->model('Contacts_model','contacts');
        //menu
        //$this->data['menu'] = $this->fonctions->menu;
        //$this->data['titrePage'] = 'Erreur 404';


        //contacts
      //  $contacts = $this->contacts->read('*', array('etat' => 1));
      //  $this->data['contacts'] = $contacts;
	}

	public function index()
    {

		     $this->layout->pages('notfound');

	}
}
