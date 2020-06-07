<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// TODO: Prise en charge des deux différents types de compte

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!isset($_SESSION['ident']))
		{
			$this->load->view('Login_view');
		}
		else redirect(base_url().'test'); // La page à laquelle les utilisateurs vont accéder
	}

	public function Verif()
	{
		$ident = $this->input->post('identifiant');
		$mdp = sha1($this->input->post('password'), 256); // Pas sur


		$this->load->model('Login_model');
		$reponse = $this->Login_model->verifLog($ident,$mdp);

		if( $reponse ){
			$_SESSION['ident'] = "admin";
			redirect(base_url().'test'); // La page à laquelle les utilisateurs vont accéder
		}
		else{
			redirect(base_url().'Login');
		}
	}

	public function Deconnexion()
	{
		$_SESSION['ident'] = '';
		redirect(base_url().'Accueil');
	}

}
