<?php


class Priere extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Exercice_priere_model', 'exercice_priere');
        $this->load->model('Comment_exercice_priere_model', 'comment_exercice_priere');
        $this->load->model('Priere_partage_model','priere_partage');
        $this->load->model('Priere_intention_model','priere_intention');

    }


    public function index()
    {
        $data['allPrierePartage'] = $this->priere_partage->readWhere('*',array('status_priere_partage'=>1));
        $this->layout->pages('priere/partage',$data);
    }

    public function intention()
    {
        $data['allPriereIntention'] = $this->priere_intention->readWhere('*',array('status_priere_intention'=>1));
        $this->layout->pages('priere/intention',$data);
    }

    public function exercices()
    {
        $data['all_exercises_priere'] = $this->exercice_priere->readWhere('*',array('status_exercice_priere'=>1));
        $this->layout->pages('priere/exercice',$data);
    }


    public function exercisePost($id)
    {
            if(isset($id))
            {
                //$data['count_replies'] = $this->comment_exercice_priere->compter();
                //$data['replies'] = $this->comment_exercice_priere->read();
                $data['allExercicesDetailsPriere'] = $this->exercice_priere->readWhere('*', array('id_exercice_priere'=>$id));
                $this->layout->pages('priere/exercice_details',$data);

            }


    }
}