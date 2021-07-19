<?php


class RecoverPass extends CI_Controller
{
    private $data = array();

     public function __construct()
     {
         parent::__construct();

         $this->load->model('Inscriptions_model','inscription');
         $this->load->model('Forgot_password_model','password');

     }

     public function index()
     {
         $this->data['id'] = $this->uri->segment(4);
         $this->data['link'] = $this->uri->segment(5);

         $this->layout->pages('connexion/recover_password',$this->data);
     }

     public function confirm()
     {
         $this->layout->pages('connexion/confirm_password',$this->data);
     }


     public function processingPassword()
     {

         $id = $this->input->post('id',true);
         $link = $this->input->post('link',true);


           $idStudent = $this->password->getElementByKey('student_id',array('student_id'=>$id,'link'=>$link));

           $realStudentId = $idStudent[0]['student_id'];

         if(!count($idStudent) == 1)
         {
                messageFailed('error-recover-pass','Désolé, le délai a expiré!');
                $this->index();

         }else {

             $password_1 = $this->input->post('password1', true);
             $password_2 = $this->input->post('password2', true);

             if ($password_1 !== $password_2)
             {
                 messageFailed('error-recover-pass','veiilez saisir un même mot de passe');
                 $this->index();

                   }else{

                 $dataPass = array(

                     'password'=> $password_1

                 );

                     $upDatePass = $this->inscription->update(array('inscription_id'=>$realStudentId),$dataPass);

                 if($upDatePass)
                 {

                     redirect('connexion/RecoverPass/confirm');

                 }else{

                     messageFailed('error-recover-pass', 'Impossible de modifier le mot de passe');
                     $this->index();

                 }

                 $status = 1;

                 $dataChangeStatus = array(

                     'status'=> $status

                 );

                 $upDateStatusTableForgotPass = $this->password->update(array('student_id'=>$realStudentId), $dataChangeStatus);

             }

         }

     }






}