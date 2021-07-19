<?php


class Chat extends CI_Controller
{
  private $emailSession = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chat_model','chat');
    }



    public function index()
    {

          if($this->input->is_ajax_request())
          {

              $data['message'] = $this->input->post('message',true);
              $data['email'] = $this->input->post('email', true);




              $dataChat = array(

                  'email'=> $data['email'],
                  'message'=> $data['message'],
                  'etat'=> 1
              );


             $insertDataChat =  $this->chat->create($dataChat);

             if($insertDataChat)
             {

                  $sessionUserChat = array('session_chat' => $data['email']);

                  $this->session->set_userdata($sessionUserChat);


             }


          }
    }


    public function viewerClient()
    {
          $dataChat =  $this->chat->read('*');


              foreach ($dataChat as $row):

                  if($row->email === $this->session->userdata['session_chat']):

                    //  echo 'passe bien meme <br>';

                      if($row->etat == 1): // for visitors

                           echo '<div align="right" style="padding: 1px"><span style="border-radius: 15px; font-size: 12px" class="btn btn-info">'.$row->message.'</span><br><span style="font-size: 11px">'.$row->date.'</span></div>';

                        elseif($row->etat == 0):  // for admin of the website

                            echo '<div align="left" style="padding: 1px"><div><span style="border-radius: 15px; font-size: 12px" class="btn btn-dark">'.$row->message.'</span> <br> <span style="font-size: 11px">'.$row->date.'</span></div></div>';

                      endif;

                  endif;

                    /*  else:

                      echo 'ne passe pas <br>';

                      endif; */

              endforeach;


            // echo '<div align="center">Nous sommes là pour vous aider,<br/> n\'hésitez pas à nous écrire!</div>';

           //echo '<p id="chatDownClient"></p>';

        //echo '<script> $( "#chatDownClient")[0].scrollIntoView();</script>';

    }

    public function viewerAdmin()
    {

    }

}