<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AuthController extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->model('AdminManager');
		}
		public function index() {	
			if ($this->AdminManager->is_user_in()) {
				redirect(base_url('dashboard'));
				die();
			}
			$redir_url = base_url();
			$this->session->set_flashdata('redir_url',$redir_url);
			$errors = NULL;
			if ($this->input->post()) {
				$this->load->library('form_validation');
				$this->form_validation->set_rules('email', 'Email', 'trim|strip_tags|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|strip_tags|required', array('required' => 'You must provide a %s.')
				);
				if ($this->form_validation->run() == TRUE) {
					//var_dump($this->AdminManager->log_in($this->input->post('email', TRUE), $this->input->post('password', TRUE)));die();
					if ($this->AdminManager->log_in($this->input->post('email', TRUE), $this->input->post('password', TRUE))) {
						redirect($redir_url);
						return;
						} else {
						$errors = "Invalid email and password combination";
					}
					} else {
					$errors = validation_errors();
				}
			}
			if(isset($errors)){
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">'.$errors.'</div>');
			}
			$this->load->view('admin_login', array(
            'error' => $errors
			));
		}
		public function login() {		
			$this->load->view('backend/admin_login', array('error' => ""));
		}
		public function logout() {		
			$this->AdminManager->logout_user();
			redirect(base_url());
		}
		
		public function change_user_password()
		{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('opassword','Old Password','required|trim');
			$this->form_validation->set_rules('npassword','New Password','required|trim');
			$this->form_validation->set_rules('vpassword','Verify New Password','required|trim|matches[npassword]');
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('manage/header');
				$this->load->view('manage/change_password');
				$this->load->view('manage/footer');
			}
			else
			{
				$id = $this->session->userdata('USER_ID');  
				$password = $this->input->post('opassword');
				if($this->AdminManager->resolve_user_login($id,$password)) 
				{	
					$newpswd=$this->input->post('npassword');
					$new_pass = sha1($newpswd);
					$data = array(
					'password' => $new_pass
					);
					$res = $this->AdminManager->change_userpassword($data,$id);
					if($res)
					{
						$this->session->set_flashdata('msg','swal({text: "Password Updated Successfully",icon: "success",timer: 6000,});');
						redirect('manage/admins/change_password', 'refresh');
						
					}
					else{
						$this->session->set_flashdata('msg','swal({text: "Failed.. Please Try Again",icon: "warning",timer: 6000,});');
						rredirect('manage/admins/change_password', 'refresh');
						
					}
				}
				else{
					$this->session->set_flashdata('msg','swal({text: "Incorrect Current Password",icon: "warning",timer: 6000,});');
					redirect('manage/admins/change_password', 'refresh');
					
					
				}
			}
			
		}		
	}
