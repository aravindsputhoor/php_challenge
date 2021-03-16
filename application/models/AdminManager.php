<?php
class AdminManager extends CI_Model {

    public $SESSION_ID = 'ADMIN_ID';
    public $SESSION_STATUS = 'ADMIN_IN';

    public function __construct() {
        parent::__construct();
    }
	
    public function is_user_in() {
        return $this->session->userdata($this->SESSION_STATUS) == TRUE &&
                $this->session->userdata($this->SESSION_ID) > 0 && $this->session->userdata('role')==1;
    }
    public function log_in($email, $password) {
        $user = $this->get_user($email, $password);
        //return $user;
        if ($user == NULL) {
            return FALSE;
        } else {
            $this->session->set_userdata(array(
                $this->SESSION_STATUS => TRUE,
                $this->SESSION_ID => $user->ID,
				'role' => 1
            ));
            return TRUE;
        }
    }
    public function logout_user() {
        $this->session->unset_userdata(array(
            $this->SESSION_ID, $this->SESSION_STATUS,'role'
        ));
        return TRUE;
    }
    public function get_me() {
        $q = $this->db->where('ID', $this->session->userdata($this->SESSION_ID))
                ->get('user_admin');
        return $q->num_rows() > 0 ? $q->first_row() : NULL;
    }
    public function get( $email, $password = NULL) {
        $condition = array('email' => $email,'status' =>1);
        if ($password != NULL) {
            $condition['password'] = sha1($password);
            $condition['status'] = 1;
            $condition['role'] = 1;
        }
        $q = $this->db->where($condition)->get('user_admin');
        return $q->num_rows() > 0 ? $q->first_row() : NULL;
    }
public function resolve_user_login($id, $password)
    {     
	    $pass = sha1($password);	
        $this->db->where('ID', $id);
        $this->db->where('password', $pass);
        $q = $this->db->get('user_admin');
        return $q->num_rows() > 0 ? $q->first_row() : NULL;
    }
    public function get_user($email, $password = NULL) {
        return $this->get( $email, $password);
    }
    public function getuser($userid) {
        $q = $this->db->where('ID', $userid)
                ->get('user_admin');
        return $q->num_rows() > 0 ? $q->first_row() : NULL;
    }
  public function change_userpassword($data,$id)
    {
      $this->db->where('ID',$id);
      return $query = $this->db->update('user_admin', $data);
  }
  
  
  
  
  	public function get_all_countries()
	{
	    $this->db->select('*');
		$this->db->from('countries');
		$where=array('status'=>1);
		$this->db->where($where);
		$query=$this->db->get()->result();
		return $query;
	}
	
	public function get_all_states()
	{
	    $this->db->select('*');
		$this->db->from('states');
		$where=array('s_status'=>1);
		$this->db->where($where);
		$query=$this->db->get()->result();
		return $query;
	}
	
	public function get_all_cities()
	{
	    $this->db->select('*');
		$this->db->from('cities');
		$where=array('c_status'=>1);
		$this->db->where($where);
		$query=$this->db->get()->result();
		return $query;
	}
}
