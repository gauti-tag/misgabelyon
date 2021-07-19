<?php


class Annonces extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Loisirs_annonce_model','annonce');
        $this->load->model('Month_model','month');

        //banner
        $this->load->model('Banner_loisir_petites_annonces_model','banner_loisir_petites_annonce');


    }

    public function index()
    {

        $this->data['bannerAnnonces'] = $this->banner_loisir_petites_annonce->readWhere('*',array('status_banner_loisir_petites_annonces'=>1));

        $this->data['allAnnonces'] = $this->annonce->readWhere('*',array('status_loisirs_annonce'=>1));
        $this->data['month'] = $this->month->read();
        $this->layout->pages('loisirs/annonce',$this->data);

    }
}