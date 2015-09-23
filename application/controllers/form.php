<?php

class Form extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('ion_auth');
		//$this->ion_auth->logout();
		// echo "<pre>";
	 //   	print_r($this->session->all_userdata());
	 //   	die;
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

	}


	function index()
	{
		$this->load->library('calendar');

		$data = array(
               3  => 'http://example.com/news/article/2006/03/',
               7  => 'http://example.com/news/article/2006/07/',
               13 => 'http://example.com/news/article/2006/13/',
               26 => 'http://example.com/news/article/2006/26/'
             );

echo $this->calendar->generate(2006, 6, $data);

		$msg = 'jack sparrow';
		$key = 'key';
		echo $encrypted_string = $this->encrypt->encode($msg,$key);
		echo "<br>";
		echo $this->encrypt->decode($encrypted_string,$key);
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
}
?>