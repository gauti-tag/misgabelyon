<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Echange_forum_model','echange_forum');
        $this->load->model('Comment_echange_forum_model','comment_echange_forum');
        $this->load->model('Banner_echange_forum_model','banner_echange_forum');
    }


    public function index()
    {
        $this->data['banner_echange_forum'] = $this->banner_echange_forum->readWhere('*',array('status_banner_echange_forum'=>1));
        $this->layout->pages('echange/forum',$this->data);
    }


    public function viewForumEchange()
    {
        $data['echangeForum'] = $this->echange_forum->readWhere('*',array('status_echange_forum'=>1));

        foreach ($data['echangeForum'] as $row)
        {
            $output = ' <div class="col-lg-12 col-sm-12">
                    <div class="single-services-box overly-outside">
                        <div class="overly-inside">
                            <i class="#"></i>
                            <h3><span>'. $row->auteur_echange_forum.' </span> : '.$row->titre_echange_forum.'</h3>
                            <p style="font-family: open sans, sans-serif; font-style: italic">'.$row->theme_echange_forum.'</p>
                            <p> <em>Publié le <span>'. $row->created_at_echange_forum.'</span></em> </p>

                            <a href="'.site_url('echange/Forum/details/'.$row->id_echange_forum).'" class="read-more">
                                Commenter
                            </a>
                            <a href="#" class="pull-right">Commentaire(s) <span style="font-size: 12px" class="badge">['.$this->comment_echange_forum->compter(array('echange_forum_id'=>$row->id_echange_forum,'status_comment_echange_forum'=>1)).']</span></a>
                        </div>
                    </div>
                </div>
                  ';

            echo $output;
        }
    }


    public function details($id)
    {
        if(isset($id)){

            $this->data['allMessageEchangeForumDetails'] = $this->comment_echange_forum->read('*',array('echange_forum_id'=>$id,'status_comment_echange_forum'=>1));

            $this->data['countAllMessage'] =  $this->comment_echange_forum->compter(array('echange_forum_id'=>$id, 'status_comment_echange_forum'=>1));

            $this->data['echangeForumDetails'] = $this->echange_forum->readWhere('*',array('id_echange_forum'=>$id));

            $this->layout->pages('echange/forum_details',$this->data);


        }else{

            echo 'not working';

        }
    }


    public function addCommentForum()
    {

        $data['pseudoCommentEchange'] = strtoupper($this->input->post('pseudoForumEchange',true));
        $data['messageCommentEchange'] = $this->input->post('messageFormEchange',true);

        $ipForumAdmin =  $this->input->post('idForum',true);

        $dataForumCommentAdmin = array(

            'pseudo_comment_echange_forum'=> $data['pseudoCommentEchange'],
            'comment_comment_echange_forum'=> $data['messageCommentEchange'],
            'status_comment_echange_forum'=> 1,
            'created_at_comment_echange_forum'=> strftime('%d %B %Y %I:%M:%S'),
            'echange_forum_id'=> $ipForumAdmin,
            'user_id'=> getStudentId()

        );

       $insertDataEchangeAdmin = $this->comment_echange_forum->create($dataForumCommentAdmin);

        if($insertDataEchangeAdmin){

            echo 'poster comment echange';

        }else{

            echo 'failed post comment echange';

        }

    }
}