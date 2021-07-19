<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tv extends CI_Controller
{
    private $data = array();
    /**
     * Tv constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Evangelisation_television_model','evangelisation_tv');
    }



    public function index()
    {
        $this->data['linkTelevision'] = $this->evangelisation_tv->readWhere('*',array('status_evangelisation_tv'=>1));
       // $this->data['rub'] = 0;
        $this->layout->pages('evangelisation/evangelisation_tv',$this->data);

    }


}