<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temoignages extends CI_Controller
{

    private $data = array();

    /**
     * Temoignages constructor.
     */
     public function __construct()
     {
         parent::__construct();
         $this->load->model('Evangelisation_temoignages_model','evangelisation_temoignages');
         $this->load->model('Banner_elyon_model','banner_elyon');

     }



     public function index()
     {

         $this->data['allTemoignages'] = $this->evangelisation_temoignages->readWhere('*', array('status_evangelisation_temoignages'=>1));

         $this->data['bannerElyon'] = $this->banner_elyon->readWhere('*', array('status_banner_elyon'=>1));

         $this->layout->pages('evangelisation/evangelisation_temoignage',$this->data);
     }

}