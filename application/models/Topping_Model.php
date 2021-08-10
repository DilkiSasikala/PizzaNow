<?php
class Topping_Model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_topping($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('Topping');
			return $query->result_array();
		}
		$query = $this->db->get_where('Topping', array('slug' => $slug));
		return $query->row_array();
	}

	function find_topping($idArr = array())
	{
		$query = $this->db->where_in("id", $idArr)->get("Topping");;
		return $query->result_array();
	}

}
