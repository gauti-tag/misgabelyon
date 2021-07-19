<?php
//if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fonctions{

    //Constructeur
    public function __construct(){
        $this->CI =& get_instance();
    }

    //Interface PUBLIC
    public $menu = array('home' => '', 'presentation' => '', 'formations' => '', 'contacts' => '', 'plan' => '', 'references' => '', 'contacts' => '', 'evenements' => '', 'slides' => '');

    //ADMIN
    public $menuAdmin = array('dashboard' => '');
    //envoi de mail

    public function sendMail($to, $sujet, $message){
      $this->CI->load->library('email');
      $this->CI->email->from('info@cogitech.com', 'Le Groupe Scolaire les Figuiers');
      $this->CI->email->reply_to('info@cogitech.com', 'info@cogitech.com');
      $this->CI->email->to($to);
      $this->CI->email->subject('COGITECH - '.$sujet);
      $this->CI->email->message($message);

      $ok = $this->CI->email->send();
      $this->CI->email->clear();

      return $ok;
    }


    /**
     * @param $name
     * @param $val
     */
    public function setUser($name = array(),$val = array())
    {
      $this->CI->session->set_userdata($name,$val);

    }

    public function verifUser($name = array())
    {
         $this->Ci->session->userdata();
    }


    public function menuLink()
    {

    }




}

/* End of file fonctions.php */

/* Location: ./application/libraries/fonctions.php */

?>