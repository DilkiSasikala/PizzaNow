<?php
class Location extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();

	}

	public function index()
	{
		if ($this->session->has_userdata('orderList') or $this->session->has_userdata('comboList')) {

			if ($this->session->has_userdata('delivery')) {
				$data['deliveries'] = $this->session->userdata('delivery');
				$data['items'] = $this->session->userdata('orderList');
				$data['combos'] = $this->session->userdata('comboList');
				$data['totals'] = $this->session->userdata('total');
				$data['time'] = $this->set_time();

				$this->load->view('templates/location_header');
				$this->load->view('pages/confirmation', $data);
				$this->load->view('templates/footer');
			}
			else{
				$data['deliveries'] = NULL;

				$this->load->view('templates/location_header');
				$this->load->view('pages/location');
				$this->load->view('templates/footer');
			}

		}
		else{
			show_404();
		}
	}

	//Get delivery details
	public function set_delivery(){
		$address = $this->input->get('address');
		$phone = $this->input->get('phone_no');

		$delivery_details = array(
			'address' => $address,
			'phone' => $phone
		);

		$delivery = array($delivery_details);
		$uniqueId = uniqid();
		$this->session->set_userdata('orderId', $uniqueId);
		$this->session->set_userdata('delivery', $delivery);

		redirect('location');
	}


	//Set delivery time
	public function set_time(){
		date_default_timezone_set('Asia/Colombo');
		$time = date('Y-m-d H:i', strtotime('+30 minute'));
		return $time;
	}

	//Clear cart after confirmation
	public function clear_cart(){
		$this->session->unset_userdata('orderList');
		$this->session->unset_userdata('comboList');
		$this->session->unset_userdata('total');
		$this->session->unset_userdata('orderId');
		$this->session->unset_userdata('delivery');
		redirect('home/index');
	}
}
