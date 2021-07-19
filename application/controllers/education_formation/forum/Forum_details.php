<?php


class Forum_details extends CI_Controller
{
    private  $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->model('ForumAdmin_model','forumA');
        $this->load->model('CommentForumAdmin_model','commentForumA');
        $this->load->model('exercise_comment_model','exerciseExerciseStudent');
    }

     public function commentForumDetail($idForumAdminDetail)
     {
         if(isset($idForumAdminDetail)){

             $data['allMessageForumAdminDetails'] = $this->commentForumA->read('*',array('id_forum_admin'=>$idForumAdminDetail,'status_comment_forum_admin'=>1));
             $data['countAllMessage'] =  $this->commentForumA->compter(array('id_forum_admin'=>$idForumAdminDetail, 'status_comment_forum_admin'=>1));
             $data['forumAdminDetails'] = $this->forumA->readWhere('*',array('id_forum_admin'=>$idForumAdminDetail));
             $this->layout->pages('formation/forum/forum_details',$data);


         }else{

             echo 'not working';

         }
     }

     public function addCommentStudents()
     {


             $data['pseudoStudent'] = strtoupper($this->input->post('pseudoForumA',true));
             $data['messageStudent'] = $this->input->post('messageFormA',true);

             $ipEchangeForum =  $this->input->post('idForum',true);


             $dataForumCommentAdmin = array(

                 'pseudo_comment_forum_admin'=> $data['pseudoStudent'],
                 'comment_comment_forum_admin'=> $data['messageStudent'],
                 'status_comment_forum_admin'=> 1,
                 'created_at_comment_forum_admin'=> strftime('%d %B %Y %I:%M:%S'),
                 'id_forum_admin'=> $ipEchangeForum


             );


             $insertDataForumAdmin =  $this->commentForumA->create($dataForumCommentAdmin);

             if($insertDataForumAdmin){

                 echo 'poster';

             }else{

                 echo 'failed';

             }





     }



     public function addExerciseCommentStudent()
     {

         $data['pseudoExerciseStudent'] = strtoupper($this->input->post('pseudoExercise',true));

         $data['messageExerciseStudent'] = $this->input->post('messageExercise',true);

         $ipExerciseStudent =  $this->input->post('idCommentExercise',true);


         $dataExerciseCommentStudent = array(

             'pseudo_comment'=> $data['pseudoExerciseStudent'],
             'message_comment'=> $data['messageExerciseStudent'],
             'id_exercise_admin'=> $ipExerciseStudent,
             'id_comment_student_exercise'=> getStudentId()

         );


         $insertDataExerciseStudent = $this->exerciseExerciseStudent->create($dataExerciseCommentStudent);

         if($insertDataExerciseStudent){

             echo 'poster';

         }else{

             echo 'failed';

         }
     }




   //  public function process()
   //  {
   //      echo 'poster';
   //  }




}




