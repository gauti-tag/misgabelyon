
<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

  /* function limitText($text)
   {
       $string = strip_tags($text);

       if(strlen($string) > 200)
       {
           $stringCut = substr($string,0,200);
           $endPoint = strrpos($stringCut, ' ');

           if($endPoint)
           {
              return $stringCutted = substr($stringCut,0,$endPoint);

           }else{

             return $stringCutted = substr($stringCut,0);

           }
       }
   }*/


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

    function messageSuccess($type,$message)
    {
        $CI = get_instance();
        $CI->load->library('session');
        $messageBis = ' <div class="alert alert-success alert-dismissible" role="alert" style="width: 100%">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        '.$message.'
                    </div>';
        return $CI->session->set_flashdata($type,$messageBis);
    }

    function messageWarning($type,$message)
        {
            $CI = get_instance();
            $CI->load->library('session');
            $messageBis = ' <div class="alert alert-warning alert-dismissible" role="alert" style="width: 100%">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                '.$message.'
                            </div>';
            return $CI->session->set_flashdata($type,$messageBis);
        }

    function messageFailed($type,$message)
    {
        $CI = get_instance();
        $CI->load->library('session');
        $messageBis = ' <div class="alert alert-danger alert-dismissible" role="alert" style="width: 100%">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            '.$message.'
                        </div>';
       return $CI->session->set_flashdata($type,$messageBis);
    }

      function sendEmail($from_nom,$from_email,$reply_to,$message,$objet,$destinataire){

        $headers ='From: "'.$from_nom.'"<'.$from_email.'>'."\n";
        $headers .='Reply-To: '.$reply_to.''."\n";
        $headers .='Content-Type: text/html; charset="utf-8"'."\n";
        $headers .='Content-Transfer-Encoding: 8bit';

         if(mail($destinataire, $objet, $message, $headers))
         {
             return true;

         }else{

              return false;
         }

    }


     function  verifyInput($variable)
    {
        $variable = trim($variable);
        $variable = htmlspecialchars($variable);
        $variable = stripcslashes($variable);

        return $variable;
    }

     function sanitizeString($variable)
    {
        if(filter_var($variable,FILTER_SANITIZE_STRING))
        {
            return $variable;

        }else{

            return false;

        }
    }

     function sanitizeUrl($variable)
    {

        if(filter_var($variable, FILTER_VALIDATE_URL))
        {
            return $variable;

        }else{

            return  false;
        }

    }


     function isEmail($variable)
    {
        $variable = filter_var($variable,FILTER_VALIDATE_EMAIL);

        return $variable;
    }


     function isPhoneNumber($variable)
    {
        $variable = preg_match('/^[0-9 ]*$/',$variable);
        return $variable;
    }


    function clientLoggedIn()
    {
        $CI = get_instance();
        $CI->load->library('session');

        if($CI->session->userdata('id_client_session'))
        {
            return true;

        }else{

            return false;

        }

    }

    function getClientId()
    {
        $CI = get_instance();

        $CI->load->library('session');

        if($CI->session->userdata('id_client_session'))
        {
            return $CI->session->userdata('id_client_session');

        }else{

            return false;
        }
    }

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

        if($CI->session->userdata('id_student_session') and ($CI->session->userdata('status_student_session') == 1))
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

            return 0;
        }
    }

    function statusSuccess($message)
    {
        echo '<span class="label label-success">'.$message.'</span>';
    }

    function statusFailed($message)
    {
        echo '<span class="label label-danger">'.$message.'</span>';
    }


    function statusDefault($message)
    {
        echo '<span class="label label-default">'.$message.'</span>';
    }



  /*  function ApiEmail($url,$data_array = array())
    {
        $data_post = http_build_query($data_array);

        $resource = curl_init();

        curl_setopt($resource,CURLOPT_URL,$url);
        curl_setopt($resource,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        curl_setopt($resource,CURLOPT_POST,true);
        curl_setopt($resource,CURLOPT_POSTFIELDS,$data_post);
        curl_setopt($resource,CURLOPT_RETURNTRANSFER,true);


        $response = curl_exec($resource);

        if($error = curl_error($resource))
        {
            echo $error;

           // return false;

        }else{

            $decoded = json_decode($response);

            foreach ($decoded as $key => $value)
            {
                echo $key.':'.$value.'<br>';
            }

           // return true;

        }

        curl_close($resource);

    }*/

/*function callAPI($method, $url, $data){

    $curl = curl_init();

    switch ($method){

        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;

        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;

        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        //'APIKEY: 111111111111111111111',
        'Content-Type: application/json'
    ));

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
}*/





  /*  function menu($way='',$way='',$way='',$way='',$way='')
    {
       return array_push($way);

    }*/


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





