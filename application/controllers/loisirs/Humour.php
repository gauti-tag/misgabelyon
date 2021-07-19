<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Humour extends CI_Controller
{

     private  $data = array();

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Loisirs_humour_model','humour');

        //banner
        $this->load->model('Banner_loisir_humour_model','banner_loisir_humour');

    }


    public function index()
    {

          $this->data['bannerHumour'] = $this->banner_loisir_humour->readWhere('*',array('status_banner_loisir_humour'=>1));

          $this->data['allHumour'] = $this->humour->readWhere('*',array('status_loisirs_humour'=>1));
          $this->layout->pages('loisirs/humour',$this->data);
    }






}