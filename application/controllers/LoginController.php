<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		if(($this->session->has_userdata('adminlog_details')))
      	{
          redirect('Admin');
      	}
	}

	public function index()
	{	
		if($this->input->post('submit')) {

			if ($this->form_validation->run('admin_login')) {
			
				$data['username'] = $this->input->post('user_name');
				$data['password'] = $this->input->post('pass_word');
			
				$catch = $this->UserModel->AdminLoginVerification($data);
				if($catch) {
					$this->session->set_userdata('adminlog_details',$data['username']); 
					redirect('Admin','refresh');
				} else {
					echo "<script>alert('Wrong Username or Password');</script>";
					$this->load->view('login/login');
				}

		} else {
			$this->load->view('login/login');
		}

		} else {
			$this->load->view('login/login');
		}
		
	}

	public function ChangePasswordAction() 
	{
		if($this->input->post('submit')) {

			if ($this->form_validation->run('forgot_password')) {

					$data['mobile'] = $this->input->post('mobile'); 
					$data['email']  = $this->input->post('email');
					$data['password'] = $this->input->post('password');
					
			} else {
					$this->load->view('login/forgotpassword');
			}
			
		} else {
			$this->load->view('login/forgotpassword');
		}
	}

}

/* End of file LoginController.php */
/* Location: ./application/controllers/LoginController.php */