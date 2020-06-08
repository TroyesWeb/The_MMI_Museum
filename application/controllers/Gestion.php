<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gestion extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		if (!isset($_SESSION['ident']) || $_SESSION['ident'] != 'admin') redirect(base_url() . 'Login');
		if (!isset($_SESSION['ident']) || $_SESSION['ident'] != 'user') redirect(base_url() . 'Login');
	}

	public function index()
	{
		$this->load->view('gestion_accueil_view');
	}
}
