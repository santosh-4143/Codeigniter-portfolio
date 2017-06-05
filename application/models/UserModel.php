<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function AdminLoginVerification($data)
	{
		$query = $this->db->select('*')
						  ->from('login')
						  ->where(array('admin_username'=>$data['username'],'admin_password'=>$data['password']))
						  ->get();
		$results = $query->result_array();
		return $results;
	}

	public function InsertPhoto($data) 
	{
		$sql = $this->db->insert('images',$data);
		if($sql) { return 1;}
		else { return 0;}
	}

	public function ShowAllImages()
	{
		$query = $this->db->select('*')
						  ->from('images')
						  ->where('is_deleted','0')
						  ->order_by('created_at','DESC')
						  ->get();
		$results = $query->result_array();
		return $results;
	}

	public function GetAllDetailsById($id)
	{
		$query = $this->db->select('*')
						  ->from('images')
						  ->where('id',$id)
						  ->get();	
	    $results = $query->result_array();
	    return $results;
	}

	public function DeleteImage($id)
	{
		$query = $this->db->update('images',array('is_deleted'=>'1'),array('id' => $id));

		if($query) {
			return 1;
		} else {
			return 0;
		}
	}

	public function UpdatePhotoDetails($data,$id)
	{

		$this->db->where('id', $id);
		$query = $this->db->update('images', $data); 
		if($query) {
			return 1;
		} else {
			return 0;		
		}
	}

	public function ShowImageswithLimit($category) {
		$query = $this->db->select('id,photo')
						  ->from('images')
						  ->where(array('is_deleted'=>'0','img_category'=>$category))
						  ->order_by('created_at','DESC')
						  ->get();
						 
		$results = $query->result_array();
		return $results;
	}

	public function ContactUs($data)
	{
		$query = $this->db->insert('contact_us',$data);
		if($query) {
			return 1;
		} else {
			return 0;
		}
	}

	public function ShowAllMessages()
	{
		$query = $this->db->select('*')
						  ->from('contact_us')
						  ->where('is_deleted','0')
						  ->order_by('date','DESC')
						  ->get();	
	    $results = $query->result_array();
	    return $results;

	}

	public function DeleteMessage($id)
	{
		$query = $this->db->update('contact_us',array('is_deleted'=>'1'),array('id' => $id));
		if($query) {
			return 1;
		} else {
			return 0;
		}
	}

	public function ShowMessageById($id)
	{
		$query = $this->db->select('*')
						  ->from('contact_us')
						  ->where('id',$id)
						  ->get();	
	    $results = $query->result_array();
	    return $results;
	}

	public function ChangeAdminSettings($data,$user)
	{
		$this->db->where('admin_username', $user);
		$query = $this->db->update('login', $data); 
		if($query) {
			return 1;
		} else {
			return 0;		
		}
	}


}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */