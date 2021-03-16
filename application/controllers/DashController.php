<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class DashController extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->model('AdminManager');
			$this->load->model('AdminModel');

        if (!$this->AdminManager->is_user_in()) {
            $this->session->set_flashdata('redir_url', current_url());
            redirect(base_url('admin'));
            die();
        }

		}
		
	public function index() 
	{
		$session_id = $this->session->userdata('ADMIN_ID');
		
		$data['nse']=$this->AdminModel->get_datas();
        $this->load->view('table',$data);
    }

    
	
	
	
	
	
		
}
