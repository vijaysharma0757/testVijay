<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajaxpartmodel extends CI_Controller {


	public function top()
	{
		extract($_POST);

		$this->load->database();
		$this->db->select('*');
		$this->db->from('action');
		$this->db->where('id',$id);
		$query=$this->db->get();
		$query=$query->row_array();
		// echo "<pre>";
		// print_r($query);
		// die;
		$data=array(
		'top'=>1,
		'count'=>$query['count']+1
			);
		$this->db->where('id',$id);
		$res=$this->db->update('action',$data);
		if(isset($res))
			return true;
		else 
			return false;
	}
	public function all()
	{
		extract($_POST);
		$this->load->database();
		$this->db->select('*');
		$this->db->from('action');
		$query=$this->db->get();
		return $query->result_array();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */