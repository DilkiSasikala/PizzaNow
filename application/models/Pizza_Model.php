<?php

class Pizza_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_pizza($slug = FALSE)
	{
		if ($slug === FALSE) {
			$query = $this->db->get('Pizza');
			return $query->result_array();
		}
		$query = $this->db->get_where('Pizza', array('slug' => $slug));
		return $query->row_array();
	}


	function find_pizza($idArr = array())
	{
		$query = $this->db->where_in("id", $idArr)->get("Pizza");;
		return $query->row_array();
	}
}
