<?php


class About extends CI_Controller
{

	/*
	 * Check if a view exist of this page
	 */
	public function index($page = 'about')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}
}
