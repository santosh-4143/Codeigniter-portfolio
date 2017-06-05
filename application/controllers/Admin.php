<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->library('upload');
		$this->load->model('UserModel');
		if(!($this->session->has_userdata('adminlog_details')))
      	{
          redirect('/LoginController');
      	}

	}

	public function index()
	{
		$this->load->view('admin/home');
	}

	public function InsertImageAction()
	{
		
		if($this->input->post('submit')) 
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->form_validation->run('insert_image') && $this->upload->do_upload('userfile')) {

				$data['img_title'] = $this->input->post('img_title');
				$data['img_category'] = $this->input->post('img_category');
				$data['description'] = $this->input->post('description');
				$idata = $this->upload->data();
				$data['photo'] = $idata['raw_name'].$idata['file_ext'];
				
				$catch = $this->UserModel->InsertPhoto($data);
					if($catch == 1) {
						echo "<script>alert('Image Details Uploaded Successfully');</script>";
						redirect('Admin/InsertImageAction','refresh');
					} else {
						echo "<script>alert('Failed to Upload Image Details. Try Again ');</script>";
						redirect('Admin/InsertImageAction','refresh');
					}
			} else{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/insert',$error);
			}
        }
        else
        {
		   $this->load->view('admin/insert', array('error' => ' ' ));
        }
	}

	// it is a callback function to check category is selectedd or not
	public function select_category($category)
	{
		if($category == 'none') {
			$this->form_validation->set_message('select_category', 'Please Select Category.');
			return false;
		} else {
			return true;
		}
	}

	public function ViewImageAction()
	{
		$catch['view'] = $this->UserModel->ShowAllImages();
		$this->load->view('admin/viewimages',$catch);
	}

	public function ViewImageDetailsByID($id)
	{
		$catch['view'] = $this->UserModel->GetAllDetailsById($id);
		$this->load->view('admin/viewimagebyid',$catch);
	}

	public function UpdateImageDetailsByID()
	{
		
		if($this->input->post('submit')) 
		{

			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

				$id 				  = $this->input->post('inputid');
				$data['img_title'] 	  = $this->input->post('img_title');
				$data['img_category'] = $this->input->post('img_category');
				$data['description']  = $this->input->post('description');
				
				if (  $this->upload->do_upload()){
				
					$idata         = $this->upload->data();
					$data['photo'] = base_url('uploads/'.$idata['raw_name'].$idata['file_ext']);
				}
				
				$catch = $this->UserModel->UpdatePhotoDetails($data,$id);
					if($catch == 1) {
						echo "<script>alert('Image Details Updated Successfully');</script>";
						redirect('Admin/ViewImageAction','refresh');
					} else {
						echo "<script>alert('Failed to Upload Details. Try Again ');</script>";
						redirect('Admin/UpdateImageDetailsByID','refresh');
					}
        }
        else
        {
           $get_id = $this->uri->segment(3);
           $catch['view'] = $this->UserModel->GetAllDetailsById($get_id);
           //$error = array('error' => $this->upload->display_errors());
		   $this->load->view('admin/updateimage',$catch);
        }
	}

	public function DeleteImageDetailsByID($id) 
	{
		$catch = $this->UserModel->DeleteImage($id);
		if($catch) {
			echo "<script>alert('Successfully Deleted');</script>";
             redirect('Admin/ViewImageAction','refresh');
         } else {
         	echo "<script>alert('Failed to Delete. Try Again ..');</script>";
             redirect('Admin/ViewImageAction','refresh');
         }
	}

	public function ViewAllMessagesAction()
	{
		$catch['view'] = $this->UserModel->ShowAllMessages();
		$this->load->view('admin/inbox', $catch);
	}

	public function DeleteInboxMessageByID($id) 
	{
		$catch = $this->UserModel->DeleteMessage($id);
		if($catch) {
			echo "<script>alert('Successfully Deleted');</script>";
             redirect('Admin/ViewAllMessagesAction','refresh');
         } else {
         	echo "<script>alert('Failed to Delete. Try Again ..');</script>";
             redirect('Admin/ViewAllMessagesAction','refresh');
         }
	}

	public function ViewMessageByID($id) 
	{
		$catch['view'] = $this->UserModel->ShowMessageById($id);
		$this->load->view('admin/showmessagebyid', $catch);
	}

	public function ChangeAdminSettingsAction()
	{
		if($this->input->post('submit')) {
			//print_r($this->input->post());die;
			if($this->form_validation->run('forgot_password')) {

				$data['admin_mobile'] = $this->input->post('mobile');
				$data['admin_email'] = $this->input->post('email');
				$data['admin_password'] = $this->input->post('pass');
				
				$catch = $this->UserModel->ChangeAdminSettings($data,$this->session->userdata('adminlog_details'));
					if($catch == 1) {
						echo "<script>alert('Password Updated Successfully');</script>";
						redirect('Admin','refresh');
					} else {
						echo "<script>alert('Failed to Update Password. Try Again ');</script>";
						redirect('Admin/ChangeAdminSettingsAction','refresh');
					}
			}else
			{
				$this->load->view('admin/profile');
			}
		}else {
			$this->load->view('admin/profile');
		}
	}

	public function LogoutAction() {
         $this->session->sess_destroy();
         redirect('LoginController');
     }
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
