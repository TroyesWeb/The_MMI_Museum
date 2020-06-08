<?php
class Upload extends CI_Controller {
	public function index()
		{
			$this->load->model('Upload_model');
			//$data['toutes'] = $this->Upload_model->Upload();
			//$this->load->view('Header_view');
			$this->load->view('Upload_view');
			//$this->load->view('Footer_view');
		}

}
?>
