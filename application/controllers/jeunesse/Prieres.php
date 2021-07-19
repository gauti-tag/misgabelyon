<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prieres extends CI_Controller
{

     private $data = array();
    /**
     * Prieres constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jeunesse_priere_petit_model', 'jeunesse_priere_petit');
        $this->load->model('Jeunesse_priere_jeune_model', 'jeunesse_priere_jeune');

        // banner

        $this->load->model('Banner_jeunesse_petits_priere_model','banner_jeunesse_petits_priere');
        $this->load->model('Banner_jeunesse_grands_priere_model','banner_jeunesse_grands_priere');


    }

    public function index()
    {
        $this->data['bannerPrierePetit'] = $this->banner_jeunesse_petits_priere->readWhere("*", array('status_banner_jeunesse_petits_priere'=>1));
        $this->data['allPrierePetit'] = $this->jeunesse_priere_petit->readWhere('*',array('status_jeunesse_priere_petit'=>1));
        $this->layout->pages('jeunesse/petit_prophete/priere',$this->data);

    }


    public function jeune()
    {
        $this->data['bannerPriereGrand'] = $this->banner_jeunesse_grands_priere->readWhere("*", array('status_banner_jeunesse_grand_priere'=>1));
        $this->data['allPriereJeune'] = $this->jeunesse_priere_jeune->readWhere('*',array('status_jeunesse_priere_jeune'=>1));
        $this->layout->pages('jeunesse/grand_prophete/priere',$this->data);
    }

}