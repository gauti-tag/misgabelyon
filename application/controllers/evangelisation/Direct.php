<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direct extends CI_Controller
{
    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Evangelisation_tv_live_model','evangelisation_tv_live');
        $this->load->model('Banner_enseignement_model','banner_enseignement');
    }

    public function index()
    {
        $this->data['lienTv'] = $this->evangelisation_tv_live->readWhere('*',array('status_evangelisation_tv_live'=>1));
        //$this->data['rub'] = 0;

        $this->data['bannerTV'] = $this->banner_enseignement->readWhere('*',array('status_banner_enseignement'=>1));
        $this->layout->pages('evangelisation/evangelisation_live',$this->data);
    }

}