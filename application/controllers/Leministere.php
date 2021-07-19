<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Leministere extends CI_Controller{

	private $data = array();
	
	public function __construct(){
		parent::__construct();

		$this->load->model('inscriptions_model', 'inscriptions');
        $this->load->model('interface_bienvenue','bienvenue');
        $this->load->model('Interface_partenaires_model','partenaires');
        $this->load->model('Interface_organisation_model','organisation');
        $this->load->model('Banner_presentation_model','banner_presentation');
        $this->load->model('Banner_organisation_model','banner_organisation');
        $this->load->model('Banner_partners_model','banner_partners');
        $this->load->model('Content_partenaire_model','content_partenaire');
		//menu
		$this->data['menu'] = $this->fonctions->menu;
		$this->data['menu']['formation'] = 'active';
		$this->data['menu']['home'] = 'active';

	}

	public function index(){

	    $this->data['allPresentation'] = $this->bienvenue->readWhere('*',array('status_interface_bienvenue'=>1));
	    $this->data['bannerPresentation'] = $this->banner_presentation->readWhere('*',array('status_banner_presentation'=>1));

		$this->layout->pages('presentation', $this->data);
	}

	public function organisation(){

        $this->data['allOrganisation'] = $this->organisation->readWhere('*',array('status_interface_organisation'=>1));
        $this->data['bannerOrganisation'] = $this->banner_organisation->readWhere('*',array('status_banner_organisation'=>1));
		$this->layout->pages('organisation', $this->data);
	}

	public function partenaires(){

		//$this->data['rub'] = 0;
        $this->data['allPartenaires'] = $this->partenaires->readWhere('*',array('status_interface_partenaires'=>1));
        $this->data['bannerPartenaires'] = $this->banner_partners->readWhere('*',array('status_banner_partenanires'=>1));
        $this->data['ContentPartenaires'] = $this->content_partenaire->readWhere('*',array('status_content_partenaires'=>1));

		$this->layout->pages('partenaires', $this->data);
	}

	public function programme(){

		$this->layout->pages('programme', $this->data);
	}

}
