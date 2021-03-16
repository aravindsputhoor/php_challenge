<?php
class AdminModel extends CI_Model {

	public function get_datas() {
		$this->db->select('*');
		$this->db->from('mcap31122020');
		$this->db->order_by('c_name','asc');
		$query=$this->db->get()->result();
		return $query;
	}

	public function get_cmny_names() {
		$this->db->select('c_name');
		$this->db->from('mcap31122020');
		$this->db->order_by('c_name','asc');
		$query=$this->db->get()->result();
		return $query;
	}

	public function search_data($search)
	{
		$this->db->select('*');
		$this->db->from('mcap31122020');
		$this->db->like('c_name', $search);
		$this->db->order_by('c_name','asc');
		$query=$this->db->get()->result();
		return $query;
	}


	

}