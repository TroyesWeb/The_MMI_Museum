<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gestion extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		if (!isset($_SESSION['ident'])) {
			redirect(base_url() . 'Login');
		}

		else if ($_SESSION['ident'] = 'admin') {
			$this->load->view('Gestion_accueil_view');
		}

		else if ($_SESSION['ident'] = 'user') {
			$this->load->view('Gestion_accueil_view');
		}
	}

	public function index()
	{
		$this->load->view('Gestion_accueil_view');
	}
}
