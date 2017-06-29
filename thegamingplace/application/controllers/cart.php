<?php
class Cart extends CI_Controller{
	public $paypal_data = '';
	public $tax;
	public $shipping ;
	public $total = 0;
	public $grand_total;

	//Cart Index
	public function index(){
		$data['main_content'] = 'cart';
		$this->load->view('layouts/main',$data);
	}

	//Add to Cart
	public function add(){
		//Item data
		$data = array(
			'id' => $this->input->post('item_number'),'qty' => $this->input->post('qty'), 'price'=> $this->input->post('price'), 'name' => $this->input->post('title')
		);
		//print_r($data);die();

		//Insert into Cart
		$this->cart->insert($data);
		redirect('products');
	}
	public function update($in_cart = null){
		$data = $_POST;
		$this->cart->update($data);

		redirect('cart','refresh');
	}
	// Process form
	public function process() {
		  /*if(isset($_REQUEST['submit'])){
		  	foreach ($this->input->post('item_name') as $key) {
		  		$this->tax = $this->config->item('tax');
		  		$this->shipping = $this->config->item('shipping');

		  		$item_id = $this->input->post('item_code')[$key];
		  		$product = $this->Product_model->get_product_details($item_id);

		  		//Assign data to Paypal
			  		$this->paypal_data .= ' &L_PAYMENTREQUEST_O_NAME'.$key.'='.urlencode($product->title);
			  		$this->paypal_data .= ' &L_PAYMENTREQUEST_O_NUMBER'.$key.'='.urlencode($item_id);
			  		$this->paypal_data .= ' &L_PAYMENTREQUEST_O_AMT'.$key.'='.urlencode($product->price);
			  		$this->paypal_data .= ' &L_PAYMENTREQUEST_O_QTY'.$key.'='.urlencode($this->input->post('item_qty')[$key]);
		  			
			  		//Price X Quantity
		  			$subtotal = ($product->price * $this->input->post('item_qty')[$key]);
		  			$this->total = $this->total + $subtotal;

		  			$paypal_product['items'][]= array(
		  				'itm_name' => $product->title,
		  				'itm_price' => $product->price,
		  				'itm_code' => $item_id,
		  				'itm_qty' => $this->input->post('item_qty')[$key]
		  			);

		  			// Create Order Array
		  			$order_data = array(
		  				'product_id' => $item_id,
		  				'user_id' => $this->session->userdata('user_id'),
		  				'transaction_id' => 0,
		  				'qty' => $this->input->post('item_qty')[$key],
		  				'price'=> $subtotal,
		  				'address' => $this->input->post('address'),
		  				'address2' => $this->input->post('address2'),
		  				'city' => $this->input->post('city'),
		  				'state' => $this->input->post('state'),
		  				'zipcode' => $this->input->post('zipcode')
		  				);

		  			//Add Order Data
		  			$this->Product_model->add_order($order_data);
		  	}
		  	//Get Grand Total
		  	$this->grand_total = $this->total +$this->tax + $this->shipping;
		  	$paypal_product['assets'] = array(
		  			'tax_total' => $this->tax,
		  			'shipping_cost' => $this->shipping,
		  			 'grand_total' =>$this->total
		  		);
		  	$_SESSION["paypal_products"] = $paypal_product;
		  }
		  else{
		  //	print_r($_REQUEST['item_name[0]']);
		  	print_r($_REQUEST);
		  }*/
		  echo "Hi,Link for payment has been mailed to you. Please check...";
	}
}