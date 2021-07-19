<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecoute extends CI_Controller
{
    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Echange_ecoute_model','echange_ecoute');
        $this->load->model('Banner_echange_ecoute_model','banner_ecoute');
    }


    public function index()
    {
         $this->data['bannerEcoute'] = $this->banner_ecoute->readWhere('*',array('status_banner_ecoute'=>1));
         $this->data['dataEcoute'] = $this->echange_ecoute->readWhere('*',array('status_echange_ecoute'=>1));
         $this->layout->pages('echange/ecoute',$this->data);
    }

}