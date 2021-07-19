<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    function setFlashData($type,$message,$url)
   {
       $CI = get_instance();
       $CI->load->library('session');
       $CI->session->set_flashdata($type,$message);
       redirect($url);
   }

   // or with class like boostrap

    /*    function setFlashData($class,$message,$url)
        {
            $CI = get_instance();
            $CI->load->library('session');
            $CI->session->set_flashdata('class',$class);
            $CI->session->set_flashdata('message',$message);
            redirect($url);
        }  */

    function adminLoggedIn()
    {
        $CI = get_instance();
        $CI->load->library('session');

         if($CI->session->userdata('id_admin_session'))
         {
             return true;

         }else{

             return false;
         }

    }

    function getAdminId()
    {
        $CI = get_instance();

        $CI->load->library('session');

        if($CI->session->userdata('id_admin_session'))
        {
            return $CI->session->userdata('id_admin_session');

        }else{

            return false;
        }

    }


    function studentLoggedIn()
    {
        $CI = get_instance();
        $CI->load->library('session');

        if($CI->session->userdata('id_student_session'))

        {
            return true;

        }else{

            return false;
        }

    }

    function getStudentId()
    {
        $CI = get_instance();

        $CI->load->library('session');

        if($CI->session->userdata('id_student_session'))
        {
            return $CI->session->userdata('id_student_session');

        }else{

            return false;
        }
    }


  /*  function connectes(){

        $CI = get_instance();
        $CI->load->model('Connectes','connectes');

        $checkIp = $this->connectes->checkDataByKey($_SERVER['REMOTE_ADDR'],'ip');

        $ipVisiter = array(

            'ip'=> $checkIp,
            'timestamp'=> time()
        );

        $time = array(
            'timestamp'=> time()
        );

        if(count($checkIp) == 0){

            $this->connectes->create($ipVisiter);

        }else{

             $this->connectes->update(array('id'=>$_SERVER['REMOTE_ADDR']), $time);

        }

         $timestamp_5min = time() - (60 * 5);

         $this->connectes->delete('timestamp'< $timestamp_5min );

         $nbreIp = $this->connectes->compter(array('ip'));

          echo $nbreIp;

    } */

