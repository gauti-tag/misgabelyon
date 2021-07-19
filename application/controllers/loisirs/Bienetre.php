<?php


class Bienetre extends CI_Controller
{
   private $data = array();

   public function __construct()
   {
       parent::__construct();
       $this->load->model('Loisirs_bien_etre_model','bien_etre');

       //banner
       $this->load->model('Banner_loisir_bien_etre_model','banner_loisir_bien_etre');

   }


   public function index()
   {
       $this->data['bannerBienEtre'] = $this->banner_loisir_bien_etre->readWhere('*',array('status_banner_loisir_bien_etre'=>1));

       $this->data['allBienEtre'] = $this->bien_etre->readWhere('*',array('status_loisirs_bien_etre'=>1));
       $this->layout->pages('loisirs/bien_etre',$this->data);

   }


}