<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller
{
  private $data = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->layout->pages('formation/bibliotheque/video',$this->data);
    }


}