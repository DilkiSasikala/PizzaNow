<?php
class Cart extends CI_Controller
{
	public function __construct(){

		parent::__construct();

		// Load model
		$this->load->model('Topping_Model');
		$this->load->model('Side_Model');
		$this->load->model('Combo_Model');
	}

	public function index()
	{

			$data['isSet'] = TRUE;
			$data['items'] = $this->session->userdata('orderList');
			$data['combos'] = $this->session->userdata('comboList');

			$data['total'] = $this->total();


			$this->load->view('templates/header');
			$this->load->view('pages/cart', $data);
			$this->load->view('templates/footer');

	}


	//Add pizza orders to session
	public function add($id){

		$product = $this->Pizza_Model->find_pizza($id);
		//logging
		if ($product == '')
		{
			log_message('error', 'Pizza is not fetched from database');
		}
		else
		{
			log_message('debug', 'Pizza was fetched'.print_r($product,TRUE));
		}
		$pizza_id = $product['id'];
		$pizza = $this->input->get('pizza');
		$size = $this->input->get('size');
		$toppings = $this->input->get('topping');
		$sides = $this->input->get('side');
		$amount = $this->input->get('amount');

		if ($toppings) {
			$topping_list = $this->Topping_Model->find_topping($toppings);

			//logging
			if ($topping_list == '')
			{
				log_message('error', 'Toppings are not fetched from database');
			}
			else
			{
				log_message('debug', 'Topping was fetched'.print_r($product,TRUE));
			}
		}
		else{
			$topping_list = NULL;
		}

		if ($sides) {
			$side_list = $this->Side_Model->find_side($sides);

			//logging
			if ($side_list == '')
			{
				log_message('error', 'Sides are not fetched from database');
			}
			else
			{
				log_message('debug', 'Sides was fetched'.print_r($side_list,TRUE));
			}
		}
		else{
			$side_list = NULL;
		}


		$order_list = array(
			'id' => $pizza_id,
			'pizza' => $pizza,
			'size' => $size,
			'toppings' => $topping_list,
			'sides' => $side_list,
			'amount' => $amount
		);

		if ($this->session->has_userdata('orderList')) {
			$cart = $this->session->userdata('orderList');
			array_push($cart, $order_list);
			$this->session->set_userdata('orderList', $cart);
		} else {
			$cart = array($order_list);
			$this->session->set_userdata('orderList', $cart);

		}
		redirect('cart');

	}

	//Add combo orders to session
	public function add_combo($id){

		$combo_details = $this->Combo_Model->find_combo($id);
		//logging
		if ($combo_details == '')
		{
			log_message('error', 'Combo details are not fetched from database');
		}
		else
		{
			log_message('debug', 'Combo details was fetched'.print_r($combo_details,TRUE));
		}
		$combo_title = $combo_details['combo_name'];
		$price = $combo_details['price'];
		$combo_id = $combo_details['id'];
		$combo_list = array(
			'id' => $combo_id,
			'combo' => $combo_title,
			'price' => $price
		);

		if ($this->session->has_userdata('comboList')) {
			$cart = $this->session->userdata('comboList');
			array_push($cart, $combo_list);
			$this->session->set_userdata('comboList', $cart);
		} else {
			$cart = array($combo_list);
			$this->session->set_userdata('comboList', $cart);

		}
		redirect('cart');
	}


	//Calculate order total
	private function total()
	{
		$total = 0;
		$topping_total = 0;
		$side_total = 0;
		$combo_total = 0;

		if ($this->session->has_userdata('orderList')) {
			$items = $this->session->userdata('orderList');

			foreach ($items as $item) {
				if($item['toppings']) {
					foreach ($item['toppings'] as $topping) {
						$topping_total += $topping['price'];
					}
				}
				if($item['sides']) {
					foreach ($item['sides'] as $side) {
						$side_total += $side['price'];
					}
				}

				$total = $total + $item['size'] * $item['amount'] + $topping_total + $side_total;

			}
		}
			if($this->session->has_userdata('comboList')) {
				$combos = $this->session->userdata('comboList');

				foreach ($combos as $combo) {
					$combo_total += $combo['price'];
				}
			}

		$final_total = $total + $combo_total;
			$array_total = array($final_total);
		$this->session->set_userdata('total', $array_total);

		return $final_total;
	}

	//Remove item from cart
	public function remove_pizza($id){
		$items = $this->session->userdata('orderList');
		if($items){
			foreach ($items as $item=>$value){
				if($id==$value['id']){
					unset($items[$item]);
					// reindex the array.
					$items = array_values($items);
					break;
				}
			}
			$this->session->set_userdata('orderList', $items);
		}
		redirect('cart');
	}


	//Remove combo items from cart
	public function remove_combo($id){
		$items = $this->session->userdata('comboList');
		if($items){
			foreach ($items as $item=>$value){
				if($id==$value['id']){
					unset($items[$item]);
					$items = array_values($items);
					break;
				}
			}
			$this->session->set_userdata('comboList', $items);
		}
		redirect('cart');
	}

}
