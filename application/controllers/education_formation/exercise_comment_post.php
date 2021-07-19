<?php


class Exercise_comment_post extends CI_Controller
{
   // private $data = array();
    //private $commentData = array('pseudo'=>' ', 'message'=>'','result'=>'','affect'=>'');

    public function __construct()
    {
         parent::__construct();

        $this->load->model('Exercise_comment_model','exercise');
        $this->load->model('Exercice_model','exercice');

    }



     public function addCommentExerciseStudent()
     {

         $data['pseudoExerciseStudent'] = strtoupper($this->input->post('pseudoExercise',true));
         $data['messageExerciseStudent'] = $this->input->post('messageExercise',true);

         $ipExerciseStudent =  $this->input->post('idCommentExercise',true);


         $dataExerciseCommentStudent = array(

             'pseudo_comment_forum_admin'=> $data['pseudoExerciseStudent'],
             'comment_comment_forum_admin'=> $data['messageExerciseStudent'],
             'id_forum_admin'=> $ipExerciseStudent,
             '	id_student_forum_admin'=> getStudentId()

         );


         $insertDataExerciseStudent = $this->commentForumA->create($dataExerciseCommentStudent);

         if($insertDataExerciseStudent){

             echo 'poster';

         }else{

             echo 'failed';

         }
     }





}