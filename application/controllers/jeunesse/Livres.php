<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livres extends CI_Controller
{

    private $data = array();

    /**
     * Prieres constructor.
     */
    public function __construct()
    {
        parent::__construct();

        //dynamic contents

        $this->load->model('Jeunesse_livre_jeune_model', 'jeunesse_livre_jeune');
        $this->load->model('Jeunesse_livre_petit_model', 'jeunesse_livre_petit');
        //banner

        $this->load->model('Banner_jeunesse_petits_livre_model','banner_jeunesse_petits_livre');
        $this->load->model('Banner_jeunesse_grand_livre_model','banner_jeunesse_grands_livre');
    }


    public function index()
    {

        $this->data['bannerLivrePetit'] = $this->banner_jeunesse_petits_livre->readWhere("*",array('status_banner_jeunesse_petits_livre'=>1));

        $this->data['allLivrePetit'] = $this->jeunesse_livre_petit->readWhere("*",array('status_jeunesse_livre_petit'=>1));


        // var_dump($this->data['bannerLivrePetit']); die();

        $this->layout->pages('jeunesse/petit_prophete/livre',$this->data);
    }

    public function jeune()
    {
        $this->data['bannerLivreGrand'] = $this->banner_jeunesse_grands_livre->readWhere("*",array('status_banner_jeunesse_grand_livre'=>1));

        $this->data['allLivreGrand'] = $this->jeunesse_livre_jeune->readWhere("*",array('status_jeunesse_livre_jeune'=>1));
        //

        //var_dump($this->data['allLivreGrand']); die();

        $this->layout->pages('jeunesse/grand_prophete/livre',$this->data);
    }

}