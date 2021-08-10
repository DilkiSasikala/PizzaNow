<?php


class Home extends CI_Controller
{

	public function __construct(){

		parent::__construct();

		// Load model
		$this->load->model('Topping_Model');
		$this->load->model('Side_Model');
	}
	/*
	 * Check if a view exist of this page
	 */
	public function index($page = 'home')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}

		$data['pizzas'] = $this->Pizza_Model->get_pizza();

		$this->load->view('templates/header');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}


	//Load pizza from database
	public function customize($slug=NULL)
	{
		$data['pizza'] = $this->Pizza_Model->get_pizza($slug);
		if(empty($data['pizza'])){
			show_404();
		}
		$data['toppings'] = $this->Topping_Model->get_topping();
		$data['sides'] = $this->Side_Model->get_side();

		$this->load->view('templates/header');
		$this->load->view('pages/customize', $data);
		$this->load->view('templates/footer');
	}
}

