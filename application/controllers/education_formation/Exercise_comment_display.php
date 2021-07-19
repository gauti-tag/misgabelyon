<?php


class Exercise_comment_display extends CI_Controller
{
    private $data = array();

     public function __construct()
     {
         parent::__construct();

         $this->load->model('Exercices_model','exercice');
         $this->load->model('exercise_comment_model','exercise_comment');
     }

    /**
     * @param $id
     *  receive the param (id) form the chosen exercise to redirect to the detail page
     */
     public function exerciseCommentProcess($id)
     {

         if(studentLoggedIn())
         {

             if(isset($id))
             {
                // $data['count_display'] = $this->exercise_comment->compter();

                // $data['display'] = $this->exercise_comment->read();

                 $data['allExercicesDetails'] = $this->exercice->readWhere('*', array('id_exercice'=>$id));

                 $this->layout->pages('formation/exercises_details',$data);

             }

         }else{

             $this->session->set_flashdata('error-connexion','Veillez vous connectez svp!');
             redirect('connexion/login');
         }

     }



    public function exerciceComment()
    {



        $commentData['exercisePseudo'] = $this->input->post('pseudoEx');

        $commentData['exerciseMessage']=  $this->input->post('messageEx');


        $commentData['affect'] = array(

            "pseudo_comment"=>$commentData['exercisePseudo'],
            "message_comment"=>$commentData['exerciseMessage'],


        );

        //  echo  print_r($commentData);

        $commentData['result'] = $this->exercise->create($commentData['affect']);

        if($commentData['result'])
        {
            echo ('commenter');

        }else{

            echo 'une erreur est survenue ';
        }


    }


}