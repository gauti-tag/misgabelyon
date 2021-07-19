<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musique extends CI_Controller
{
    private  $data = array();
    /**
     * Prieres constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jeunesse_musique_petit_model','musique_petit');
        $this->load->model('Jeunesse_musique_grand_model','musique_grand');

        //banner

        $this->load->model('Banner_jeunesse_petits_musique_model','banner_jeunesse_petits_musique');
        $this->load->model('Banner_jeunesse_grand_musique_model','banner_jeunesse_grands_musique');
    }


    public function index()
    {
        $this->data['bannerMusiquePetit'] = $this->banner_jeunesse_petits_musique->readWhere("*",array('status_banner_jeunesse_petits_musique'=>1));
        $this->data['allAudioPetit'] = $this->musique_petit->readWhere('*',array('status_jeunesse_musique_petit'=>1));
        $this->layout->pages('jeunesse/petit_prophete/musique',$this->data);
    }

    public function jeune()
    {
        $this->data['bannerMusiqueGrand'] = $this->banner_jeunesse_grands_musique->readWhere("*",array('status_banner_jeunesse_grand_musique'=>1));
        $this->data['allAudioGrand'] = $this->musique_grand->readWhere('*',array('status_jeunesse_musique_grand'=>1));
        $this->layout->pages('jeunesse/grand_prophete/musique',$this->data);
    }

}