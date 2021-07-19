<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musique extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loisirs_musique_model','loisirs_musique');

        //Banner
        $this->load->model('Banner_loisir_musique_model','banner_loisir_musique');

    }



    public function index()
    {
        $this->data['bannerMusiqueLoisiris'] = $this->banner_loisir_musique->readWhere('*',array('status_banner_loisir_musique'=>1));


        $this->data['allMusiqueLoisiris'] = $this->loisirs_musique->readWhere('*',array('status_loisirs_musique'=>1));
        $this->layout->pages('loisirs/musique',$this->data);

    }

}