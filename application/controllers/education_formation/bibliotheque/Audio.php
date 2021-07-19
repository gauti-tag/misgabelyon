<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audio extends CI_Controller
{
   private $data = array();
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Audio_model','audio');
    }

    public function index()
    {
        $data['allAudio']  = $this->audio->readWhere('*', array('status_audio'=>1));

       // $this->load->view('formation/bibliotheque/audio',$this->data);
        $this->layout->pages('formation/bibliotheque/audio',$data);
    }

}