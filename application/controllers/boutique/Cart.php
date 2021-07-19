<?php


class Cart extends CI_Controller
{
       public function __construct()
       {
           parent::__construct();
          // $this->load->helper('number');
           $this->load->model('Articles_model', 'article');
       }

        /**
         * method for adding dynamic data to cart shopping
         */

       public function index()
       {
           if($this->input->is_ajax_request())
           {
               $data['id'] = $this->input->post('id',true);
               $data['qty'] = $this->input->post('qty',true);
               $data['price'] = $this->input->post('price',true);
               $data['name'] = $this->input->post('name',true);
               $data['image'] = $this->input->post('image',true);

               $dataCart = array(

                   'id'=>$data['id'],
                   'qty'=>$data['qty'],
                   'price'=>$data['price'],
                   'name'=>$data['name'],
                   'image'=>$data['image']
               );

               /**
                * code to insert data to cart
                */

               $this->cart->insert($dataCart);

               /**
                * message to see from the javaScript file to test the working method
                */
              // echo ('added');

           }


       }

     /*  public function view()
       {
           $this->layout->pages('boutique/card',true);
       }*/

       public function data()
       {

           $data['views'] = $this->cart->contents();
           $data['total'] = $this->cart->total();
           $data['totalItems'] = $this->cart->total_items();
           //echo number_to_currency($total,'XOF');
           //print_r($realTotal); die();
           //$data['total_items'] = $this->cart->total_items();
           // var_dump($data['realTotal']);
           $data['recentArticleView'] = $this->article->readLimit('*',array('status_articles'=>1),4);
           $this->layout->pages('boutique/card',$data);

       }

       public function remove_items()
       {
            $row_id = $this->input->post('row_id',true);

            $data = array(
                'rowid'=>$row_id,
                'qty'=>0
            );

            $this->cart->update($data);
       }






}