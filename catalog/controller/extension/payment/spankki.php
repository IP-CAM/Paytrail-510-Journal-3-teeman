<?php
class ControllerExtensionPaymentSpankki extends Controller {

	public function index() {

        $this->load->language('extension/payment/paytrail_510_journal');
    
        $data['postcode'] = '';

        
    $this->load->model('checkout/order');
        
    if(isset($this->session->data['order_id'])){
        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

        if($order_info['payment_postcode'] && $order_info['payment_lastname'] && $order_info['shipping_postcode']) {
           $data['postcode'] = $order_info['payment_postcode'];
        }
     }
         
		return $this->load->view('extension/payment/paytrail_510_journal', $data);
	}
}
?>