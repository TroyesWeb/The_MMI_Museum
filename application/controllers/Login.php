<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


	}

	public function index()
	{
		$_SESSION['ident']='xxx';
		$this->load->view('Login_view');
	}

	public function Verif()
	{
		$ident = $this->input->post('identifiant');
		$mdp = $this->input->post('password');


		$this->load->model('Login_model');
		$reponse = $this->Login_model->verifLog($ident,$mdp);

		if( $reponse ){
			$_SESSION['ident'] = "admin";
			redirect(base_url().'test'); // Mettre la page à laquelle les utilisateurs vont accéder
		}
		else{
			redirect(base_url().'Login');

		}

	}

}
