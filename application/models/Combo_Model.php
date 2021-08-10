<?php
class Combo_Model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_combo($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('Combo');
			return $query->result_array();
		}
		$query = $this->db->get_where('Combo', array('slug' => $slug));
		return $query->row_array();
	}


	function find_combo($idArr = array())
	{
		$query = $this->db->where_in("id", $idArr)->get("Combo");;
		return $query->row_array();
	}
}
