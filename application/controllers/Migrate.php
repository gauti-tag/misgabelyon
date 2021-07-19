<?php


class Migrate extends CI_Controller
{
    public function index()
    {
        $this->load->library('migration');

        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());

        }else{

            echo '<h3>Félicitation! migration des tables réussis </h3>';

        }
    }
}