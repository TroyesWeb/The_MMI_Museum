<?php
class Upload extends CI_Controller {
	public function index()
		{
			$this->load->model('Upload_model');
			$this->load->database();
			$this->load->helper('url');
			if (!isset($_SESSION['ident']) || $_SESSION['ident'] != 'admin') {
				redirect(base_url() . 'Login');
			}
			if (!isset($_SESSION['ident']) || $_SESSION['ident'] != 'user') {
				redirect(base_url() . 'Login');
			}
			else {
				$this->load->view('Upload_view');
			}
		}

}
?>
