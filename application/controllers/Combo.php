<?php


class Combo extends CI_Controller
{

	public function __construct(){

		parent::__construct();

		// Load model
		$this->load->model('Combo_Model');
	}

	/*
	 * Check if a view exist of this page
	 */
	public function index($page = 'combo')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}


		$data['combos'] = $this->Combo_Model->get_combo();

		$this->load->view('templates/header');
		$this->load->view('pages/combo', $data);
		$this->load->view('templates/footer');
	}
}
