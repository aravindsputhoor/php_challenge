<?php
require APPPATH . '/libraries/CreatorJwt.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {
	public function __construct() {
			parent::__construct();
			$this->load->model('AdminManager');
			$this->load->model('AdminModel');

        if (!$this->AdminManager->is_user_in()) {
            $this->session->set_flashdata('redir_url', current_url());
            redirect(base_url('admin'));
            die();
        }

         $this->objOfJwt = new CreatorJwt();
        header('Content-Type: application/json');

		}
	
	public function search_data()
    {
    	$search= $this->input->post('inputdata');
    	$data = $this->AdminModel->search_data($search);
    	$jwtToken = $this->objOfJwt->GenerateToken($data);
        echo json_encode(array('Token'=>$jwtToken));

    }

    public function search_cmpny() 
    {
       $datas = $this->AdminModel->get_cmny_names();
       $result = array();
       foreach($datas as $data) {
        $result[] = $data->c_name;
       }
       $jwtToken = $this->objOfJwt->GenerateToken($result);
        echo json_encode(array('Token'=>$jwtToken));
    }

	
	
}
