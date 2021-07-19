<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Differe extends CI_Controller
{
    private  $data = array();

      public function __construct()
      {
          parent::__construct();
          $this->load->model('Evangelisation_tv_differe_model','evangelisation_tv_differe');
          $this->load->model('Banner_exhortation_model','banner_exhortation');
      }


      public function index()
      {
          $this->data['tv_differe'] = $this->evangelisation_tv_differe->readWhere('*',array('status_evangelisation_tv_differe'=>1));

          $this->data['bannerDiffere'] = $this->banner_exhortation->readWhere('*', array('status_banner_exhortation'=>1));

          $this->layout->pages('evangelisation/evangelisation_deffere',$this->data);
      }


}