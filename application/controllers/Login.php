<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// TODO: Prise en charge des deux différents types de compte -> Créer le contrôleur Gestion avec deux méthodes pour les deux types de comptes

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
//	if (!isset($_SESSION['ident']))
//	{
			$_SESSION['ident']='xxx';
			$this->load->view('Login_view');
//	}
//		else redirect(base_url().'test'); // La page à laquelle les utilisateurs vont accéder
	}

	public function Verif()
	{
		$ident = $this->input->post('identifiant');
		$mdp = $this->input->post('password'); //256); // Pas sur


		$this->load->model('Login_model');

		$reponse_A = $this->Login_model->verifLog_A($ident,$mdp); // Check table Admin
		$reponse_U = $this->Login_model->verifLog_U($ident,$mdp); // Check table User

		if( $reponse_A ){
			$_SESSION['ident'] = "admin";

			redirect(base_url().'Gestion'); // La page à laquelle les admins vont accéder
		}


		elseif( $reponse_U ){
			$_SESSION['ident'] = "user";
			redirect(base_url().'Accueil_E'); // La page à laquelle les etudiants vont accéder
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
?>
