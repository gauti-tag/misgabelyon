<?php


class Confirm extends CI_Controller
{

     private $data = array();

     public function __construct()
     {
         parent::__construct();
     }

     public function index()
     {
         $this->layout->pages('connexion/confirm',$this->data);
     }
}