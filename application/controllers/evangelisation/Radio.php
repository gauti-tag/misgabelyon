<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radio extends CI_Controller
{

    private $data = array();

      public function __construct()
      {
          parent::__construct();

          $this->load->model('Evangelisation_radio_model','evangelisation_radio');

      }


      public function index()
      {

          $this->data['allRadio'] = $this->evangelisation_radio->readWhere('*',array('status_evangelisation_radio'=>1));

          $this->layout->pages('evangelisation/evangelisation_radio',$this->data);
      }




}