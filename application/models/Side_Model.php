<?php
class Side_Model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_side($slug = FALSE){
		if($slug === FALSE){
			$query = $this->db->get('Side');
			return $query->result_array();
		}
		$query = $this->db->get_where('Side', array('slug' => $slug));
		return $query->row_array();
	}

	function find_side($idArr = array())
	{
		$query = $this->db->where_in("id", $idArr)->get("Side");;
		return $query->result_array();
	}
}
