<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {


	public function index()
	{
		//$this->load->helper('form');
		$this->load->library('cart');
		$this->load->view('cart');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */