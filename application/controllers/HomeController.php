<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
			//$catch['all'] = $this->UserModel->ShowImageswithLimit('all');	
			
			$catch['sketch'] = $this->UserModel->ShowImageswithLimit('sketch');	
			//echo "<pre>"; print_r($catch['sketch']);	
			$catch['oil_painting'] = $this->UserModel->ShowImageswithLimit('oil painting');
			$catch['glass_painting'] = $this->UserModel->ShowImageswithLimit('glass painting');
			// $catch['glass_painting'] = $this->UserModel->ShowImageswithLimit('glass_painting');		
			$catch['others'] = $this->UserModel->ShowImageswithLimit('others');	
	
			$this->load->view('website/home',$catch);
		
	}

	public function ContactAction() {

		if($this->input->post('submit')) {

			if($this->form_validation->run('contacts')) {
					$data['name'] = $this->input->post('inputname');
					$data['email'] = $this->input->post('inputemail');
					$data['message'] = $this->input->post('inputsubject');
					
					$catch = $this->UserModel->ContactUs($data);
					if($catch) {
						echo "<script>alert('Message Successfully Send');</script>";
						redirect('HomeController/ContactAction','refresh');
					} else {
						echo "<script>alert'Message Failed to Send. Try Again');</script>";
					}
			} else {
					$this->load->view('website/contact');
			}
			
		}else {
			   $this->load->view('website/contact');
	    }
	} 

	public function ImageGallaryAction() 
	{
		if($this->input->post('photo') == "all"){
			$catch = $this->UserModel->ShowImageswithLimit();
		}else {
			echo "no";
		}
	}

	public function ViewImageById($id) 
	{
		$catch['view'] = $this->UserModel->GetAllDetailsById($id);
		$this->load->view('website/singleimage', $catch);
	}

	public function AboutAction()
	{
		$this->load->view('website/about');
	}

	

}

/* End of file HomeController.php */
/* Location: ./application/controllers/HomeController.php */