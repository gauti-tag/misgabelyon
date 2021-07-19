<?php


class Register extends CI_Controller
{
    private $data = array();

   public function __construct()
   {
        parent::__construct();
       $this->load->model('Inscriptions_model', 'inscription');
       $this->load->model('Forgot_password_model', 'forgot_password');


   }

   public function index()
   {
       $this->layout->pages('connexion/email',$this->data);
   }



   public function checkEmail()
   {

       $emailPassword = $this->input->post('email',true);

       if(!empty($emailPassword))
       {

           $checkEmail = $this->inscription->checkUser(array('email'=>$emailPassword,'status'=>1));


           if(count($checkEmail) == 1)
           {

               $getId = $this->inscription->getElementByKey('inscription_id', array('email'=>$emailPassword));
               $getName = $this->inscription->getElementByKey('name', array('email'=>$emailPassword));
               $getLastName = $this->inscription->getElementByKey('prenoms', array('email'=>$emailPassword));

               $data['RealId'] =  $getId[0]['inscription_id'];
               $data['name'] = $getName[0]['name'];
               $data['prenoms'] = $getLastName[0]['prenoms'];
               $data['link'] = random_string('alnum',30);
               $data['status'] = 0;

             //  var_dump($data); die();

               $dataRenewPassword = array(

                   'student_id'=>$data['RealId'],
                   'link'=>$data['link'],
                   'status'=>$data['status'],
                   'time'=> time()

               );

               $insertForgotPasswordRequest = $this->forgot_password->create($dataRenewPassword);

               if($insertForgotPasswordRequest)
               {

                   $message = "Salut, <strong>".strtoupper($data['name'])."</strong>"." ". $data['prenoms']." ".anchor('connexion/Register/checking/'.$data['RealId'].'/'.$data['link'],' Veillez renouveller votre mot de passe svp! ','');
                   $url = 'http://ngservasgateway.com:4000/push/transactional';

                   $data_array = array(

                       'email' => array($emailPassword),
                       'subject' => 'Le Groupe Scolaire les Figuiers',
                       'body' => $message
                   );

                   $data_json_post = json_encode($data_array);

                   $resource = curl_init();

                   curl_setopt($resource,CURLOPT_URL,$url);
                   curl_setopt($resource,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
                   curl_setopt($resource,CURLOPT_POST,true);
                   curl_setopt($resource,CURLOPT_POSTFIELDS,$data_json_post);
                   curl_setopt($resource,CURLOPT_RETURNTRANSFER, 1);


                   $response = curl_exec($resource);

                   if($error = curl_error($resource))
                   {

                       messageFailed('error-email',$error);
                       $this->index();

                   }else{

                       $response_objet = json_decode($response);

                       if($response_objet)
                       {
                          // print_r($response_objet);
                           messageWarning('error-email','Veillez vérifier votre boite mail pour le renouvellement de votre mot de passe svp!');
                           $this->index();

                       }else{

                           messageFailed('error-inscription','Désolé! nous ne pouvons pas vous envoyer d\'email maintenant');
                           $this->index();

                       }

                   }
                   curl_close($resource);


               }else{

                   messageFailed('error-email','Désolé! une erreur s\'est produite');
                   $this->index();

               }


           }else{

               messageFailed('error-email','Désolé, email incorrect ou non actif!');
               $this->index();


           }

       }else{


           messageFailed('error-email','Veillez entrer votre adresse email');
           $this->index();

       }







   }

   public function checking()
   {
       $id = $this->uri->segment(4);
       $link = $this->uri->segment(5);
      // $time = time() - 86400;

       if(!isset($id) and !isset($link) and empty($id) and empty($link))
       {
           messageFailed('error-email','Veillez réessayer svp!');
           $this->index();

       }else{

        /*   $dataCheck = array(
               'link'=> $link,
               'status'=>0
           );*/

           $StudentId = $this->forgot_password->getElementByKey('student_id',array('link'=>$link,'status'=>0));

           $realStudentId = $StudentId[0]['student_id'];

           if($realStudentId)
           {

              redirect('connexion/RecoverPass/index/'.$realStudentId.'/'.$link);


           }else{


               messageFailed('error-email','Désolé, nous ne pouvons pas donner suite à votre requete!');
               $this->index();

           }

       }
   }





}