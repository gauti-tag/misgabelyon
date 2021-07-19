<?php


class Parole extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Evangelisation_parole_model', 'parole');
        $this->load->model('Evangelisation_parole_video_model', 'parole_video');
        $this->load->model('Jours_model', 'jours');
        $this->load->model('Banner_parole_model','banner_parole');


    }


    public function index()
    {

       // echo 'word of the week';

           $this->data['parole']  = $this->parole->readWhere('*',array('status_evangelisation_parole'=>1));
          $this->data['jours']  = $this->jours->read();

          $this->data['parole_video']  = $this->parole_video->readWhere('*',array('status_evangelisation_parole_video'=>1));
          $this->data['bannerParole'] = $this->banner_parole->readWhere('*', array('status_banner_parole'=>1));


        $this->layout->pages('evangelisation/evangelisation_parole_semaine',$this->data);

    }


}