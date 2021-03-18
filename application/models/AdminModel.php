<?php
class AdminModel extends CI_Model {

	public function get_datas() {
		$this->db->select('*');
		$this->db->from('companies');
		$this->db->order_by('c_name','asc');
		$query=$this->db->get()->result();
		return $query;
	}

	public function get_cmny_names() {
		$this->db->select('c_name');
		$this->db->from('companies');
		$this->db->order_by('c_name','asc');
		$query=$this->db->get()->result();
		return $query;
	}

	public function search_data($search)
	{
		$this->db->select('*');
		$this->db->from('companies');
		$this->db->like('c_name', $search);
		$this->db->order_by('c_name','asc');
		$query=$this->db->get()->result();
		return $query;
	}

	public function add_data($result)
	{
		return $this->db->insert('companies',$result);
	}


	

}