<?php


class Gateway extends CI_Controller
{
    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('History_transaction_model','transaction');
        $this->load->model('Don_model', 'don');
        $this->load->model('Command_model','command');
        $this->load->library('cart');


    }

    public function index()
    {

        $gateWayGet['receiveInfoGetOrder'] = $this->input->get('order_id');
        $gateWayGet['receiveInfoGetStatus'] = $this->input->get('status_id');
        $gateWayGet['receiveInfoGetTransactionId'] = $this->input->get('transaction_id');
        $gateWayGet['receiveInfoGetTransactionAmount'] = $this->input->get('transaction_amount');
        $gateWayGet['receiveInfoGetCurrency'] = $this->input->get('currency');
        $gateWayGet['receiveInfoGetPaidTransactionAmount'] = $this->input->get('paid_transaction_amount');
        $gateWayGet['receiveInfoGetPaidCurrency'] = $this->input->get('paid_currency');
        $gateWayGet['receiveInfoGetRate'] = $this->input->get('change_rate');
        $gateWayGet['receiveInfoGetConflictualCurrency'] = $this->input->get('conflictual_currency');
        $gateWayGet['receiveInfoGetConflictualTransactionAmount'] = $this->input->get('conflictual_transaction_amount');
        $gateWayGet['receiveInfoGetWallet'] = $this->input->get('wallet');


       // echo json_encode($gateWayGet);

          //  if(!empty($gateWayGet['receiveInfoGetStatus']) and isset($gateWayGet['receiveInfoGetStatus'])) {

              if($gateWayGet['receiveInfoGetStatus'] == 1)
              {

                  /**
                   * check if the part of string is in order_id caractere
                   */
                   if(str_contains($gateWayGet['receiveInfoGetOrder'],'MISGAB'))
                   {

                       //echo 'les commandes';
                       /**
                        * display commande confirmation
                        */

                       $this->data['order_id'] = $gateWayGet['receiveInfoGetOrder'];
                       $this->layout->pages('boutique/confirmation',$this->data);


                   }else{

                       //echo 'les dons';
                       /**
                        * display don notification confirmation
                        */

                       $this->data['order_id'] = $gateWayGet['receiveInfoGetOrder'];
                       $this->layout->pages('boutique/confirmation-don',$this->data);

                   }

              }else{

                  $this->layout->pages('boutique/failed');

              }

         //   }
    }

    public function responsePost()
    {

        //echo $this->input->method(TRUE);

         if($this->input->method(TRUE) == "POST")
        {
            $gateWayPost['receiveInfoPostOrder'] = $this->input->post_get('order_id',true);
            $gateWayPost['receiveInfoPostStatus'] = $this->input->post_get('status_id',true);
            $gateWayPost['receiveInfoPostTransactionId'] = $this->input->post_get('transaction_id',true);
            $gateWayPost['receiveInfoPostTransactionAmount'] = $this->input->post_get('transaction_amount',true);
            $gateWayPost['receiveInfoPostCurrency'] = $this->input->post_get('currency',true);
            $gateWayPost['receiveInfoPostPaidTransactionAmount'] = $this->input->post_get('paid_transaction_amount',true);
            $gateWayPost['receiveInfoPostPaidCurrency'] = $this->input->post_get('paid_currency',true);
            $gateWayPost['receiveInfoPostRate'] = $this->input->post_get('change_rate',true);
            $gateWayPost['receiveInfoPostConflictualCurrency'] = $this->input->post_get('conflictual_currency',true);
            $gateWayPost['receiveInfoPostConflictualTransactionAmount'] = $this->input->post_get('conflictual_transaction_amount',true);
            $gateWayPost['receiveInfoPostWallet'] = $this->input->post_get('wallet',true);



            $dataNotification = array(

                'order_id'=>$gateWayPost['receiveInfoPostOrder'],
                'status_id'=>$gateWayPost['receiveInfoPostStatus'],
                'transaction_id'=>$gateWayPost['receiveInfoPostTransactionId'],
                'transaction_amount'=>$gateWayPost['receiveInfoPostTransactionAmount'],
                'currency'=>$gateWayPost['receiveInfoPostCurrency'],
                'paid_transaction_amount'=>$gateWayPost['receiveInfoPostPaidTransactionAmount'],
                'paid_currency'=>$gateWayPost['receiveInfoPostPaidCurrency'],
                'change_rate'=>$gateWayPost['receiveInfoPostRate'],
                'conflictual_currency'=>$gateWayPost['receiveInfoPostConflictualCurrency'],
                'conflictual_transaction_amount'=>$gateWayPost['receiveInfoPostConflictualTransactionAmount'],
                'wallet'=>$gateWayPost['receiveInfoPostWallet'],
            );

            if($gateWayPost['receiveInfoPostStatus'] == 1)
            {

                if(str_contains($gateWayPost['receiveInfoGetOrder'],'MISGAB')) {
                    /**
                     * update the line of the command saved
                     */
                    $this->command->update(array('code' => $gateWayPost['receiveInfoPostOrder']), $gateWayPost);

                  }else{

                    /**
                     * Update the status of line for donate where the order_id always exist
                     */
                    $this->don->update(array('order_id'=>$gateWayPost['receiveInfoGetOrder']), array('status'=>$gateWayPost['receiveInfoPostStatus']));

                }
                /**
                 * create a history transaction line
                 */
                  $this->transaction->create($dataNotification);


                /**
                 * I destroy the cart content
                 */

                 $this->cart->destroy();

            }

        }


















    }

}