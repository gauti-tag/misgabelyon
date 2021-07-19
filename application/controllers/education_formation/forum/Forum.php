<?php


class Forum extends CI_Controller
{
    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->data['menu'] = $this->fonctions->menu;
        $this->load->model('ForumAdmin_model','forumA');
        $this->load->model('CommentForumAdmin_model','commentForumA');

    }


    public function index()
    {

         $this->layout->pages('formation/forum/forum');
    }


    public function displayForum()
    {
        // $data['countAllMessage'] = $this->commentForumA->compter();
        $data['forumAdmin'] = $this->forumA->readWhere('*',array('status_forum_admin'=>1));

        // $data['forumAdmin'] = $this->forumA->read_array('*',array('status_forum_admin'=>1));

        foreach ($data['forumAdmin'] as $donnee)
        {

            $output = ' <div class="col-lg-12 col-sm-12">
                <div class="single-services-box overly-outside">
                    <div class="overly-inside">
                        <i class="#"></i>
                        <h3><span>'. $donnee->auteur_forum_admin .'</span> :'.$donnee->titre_forum_admin.'</h3>
                        <p style="font-family: open sans, sans-serif; font-style: italic">'.$donnee->theme_forum_admin.'</p>
                        <p> <em>Publié le <span>'.$donnee->created_at_forum_admin.'</span></em> </p>

                        <a href="'.site_url('formation/forum/'.$donnee->id_forum_admin).'" class="read-more">
                            Commenter
                        </a>
                        <a href="#" class="pull-right">Commentaire(s) <span style="font-size: 12px" class="badge">['.$this->commentForumA->compter(array('id_forum_admin'=>$donnee->id_forum_admin,'status_comment_forum_admin'=>1)).']</span></a>
                    </div>
                </div>
            </div>';


            echo $output;

        }

    }



}