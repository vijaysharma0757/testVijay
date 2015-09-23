
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Ajaxpart extends CI_Controller {


	public function index()
	{
		$this->load->model('ajaxpartmodel','ajaxs');
		$data['res']=$this->ajaxs->all();
		// echo "<pre>";
		// print_r($data['res']);
		// die
		$this->load->view('action',$data);
	}
	public function top()
	{
		$this->load->model('ajaxpartmodel','ajaxs');
		$this->ajaxs->top();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */