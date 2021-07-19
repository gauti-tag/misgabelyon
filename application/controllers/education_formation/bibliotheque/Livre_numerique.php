<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livre_numerique extends CI_Controller
{
    private $data = array();

    public function __construct()
    {
        parent::__construct();

        $this->load->model('NumericBook_model','book');
    }


    public function index()
    {
        
               $data['allBook'] = $this->book->readWhere('*',array('status_numeric_book'=> 1));
               $this->layout->pages('formation/bibliotheque',$data);
    }

    
    
    

}