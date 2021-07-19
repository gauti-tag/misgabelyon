<?php


class Verset extends CI_Controller
{
    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Evangelisation_verset_model', 'verset');
        $this->load->model('Evangelisation_verset_two_model', 'verset2');
    }


    public function index()
    {
       $this->data['verset'] = $this->verset->readWhere('*',array('status_evangelisation_verset'=>1));
       $this->data['verset2'] = $this->verset2->readWhere('*',array('status_evangelisation_verset2'=>1));


      // var_dump($this->data['verset']);

       $this->layout->pages('evangelisation/evangelisation_verset_quotidien',$this->data);
    }
}