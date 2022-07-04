<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_Model extends CI_Model
{
	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	public function login_check($email, $password)
	{
		$query = $this->db->select('*');
		$query = $this->db->from('users');
		$query = $this->db->where('email', $email);
		$query = $this->db->where('password', $password);
		// $query = $this->db->where('status','1');
		$query = $this->db->get();
       // echo $this->db->last_query(); die;
		if($query->num_rows() > 0)
			return $query->result();
		else
			return false;
	}
	
	public function update_user($data, $id){
		$this->db->where('id', $id);
		$return=$this->db->update('admin', $data);		
		//print_r($data); die;
		return $return;
	}

	public function get_user_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id', $id);
		$item = $this->db->get();
		if($item->num_rows()> 0 ){
			return $item->result_array();
		}else{
			return false;
		}
		exit();	
	}

	public function check_users_oldpassword($id,$password){
		$this->db->select('*');
        $this->db->from('admin'); 
        $this->db->where('id',$id);
        $this->db->where('password',$password);
        $result = $this->db->get()->first_row();
        return $result;
	}
}	