<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Table extends CI_Controller {


	public function index()
	{
		$data = array(
             array('Name', 'Color', 'Size'),
             array('Fred', 'Blue', 'Small'),
             array('Mary', 'Red', 'Large'),
             array('John', 'Green', 'Medium')
             );

		echo $this->table->generate($data); 
		$this->load->view('table');
		//$this->load->library('jquery');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */