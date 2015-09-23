<?php
session_start(); 
error_reporting(0);
class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('ion_auth');
		$this->load->library('upload');
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}

	}

	function index()
	{
		echo $this->session->userdata('logged_in');
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	//~ function do_upload()
	//~ {
		//~ $config['upload_path'] = './uploads/';
		//~ $config['allowed_types'] = 'gif|jpg|png';
		//~ $config['max_size']	= '100200';
		//~ $config['max_width']  = '102400';
		//~ $config['max_height']  = '102400';
//~ 
		//~ $this->load->library('upload', $config);
//~ 
		//~ if ( ! $this->upload->do_upload())
		//~ {
			//~ $error = array('error' => $this->upload->display_errors());
//~ 
			//~ $this->load->view('upload_form', $error);
		//~ }
		//~ else
		//~ {
			//~ $data = array('upload_data' => $this->upload->data());
//~ 
			//~ $this->load->view('upload_success', $data);
		//~ }
	//~ }
	public function excelReader()
      {
        $this->load->view('excelReader');
	  }
	   public function excelReader1()
      {
		  
			echo $upload_path=$_SERVER['DOCUMENT_ROOT'].'/CodeIgniter/uploads/';
 			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = 'xls|xlsx';
			$config['max_size']	= '2000';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('file_name')){
				
				$file=$this->upload->data();
				
				$params = array('file' => "uploads", 'store_extended_info' => true);

			$this->load->library('Spreadsheet_Excel_Reader', $params);
			$xlsFile = $this->spreadsheet_excel_reader->dump(false, false, 0, 'excel');
			echo "<pre>";print_r($xlsFile);exit();
			$content = $this->spreadsheet_excel_reader->dump(true, true);
			$authcodecolumnCount = $this->spreadsheet_excel_reader->colcount();
			$authcoderowCount    = $this->spreadsheet_excel_reader->rowcount();
			}else
			{
				echo $this->upload->display_errors();
			}
	  }
}
?>
