<?php
class Upload extends CI_Controller {
	public function index()
		{
			$this->load->model('Upload_model');
			$this->load->database();
			$this->load->helper('url');
			if (!isset($_SESSION['ident'])) {
				redirect(base_url() . 'Login');
			}

			else if ($_SESSION['ident'] = 'admin') {
				$this->load->view('Upload_view');
			}

			else if ($_SESSION['ident'] = 'user') {
				$this->load->view('Upload_view');
			}
		}

	public function Envoi()
	{

		$intitule = $this->input->post('intitule');
		$description = $this->input->post('description');
		$photo = $this->input->post('photo');
		$classe = $this->input->post('classe');
		$date = $this->input->post('date');

		$config['upload_path']          = base_url().'/assets/photos/uploads';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		$this->load->model('Upload_model');

		$upload = $this->Upload_model->Upload($intitule, $description, $photo, $classe, $date);
		if ($upload=true){
			redirect(base_url ().'Accueil');
		}
		else{
			redirect (base_url ().'Upload');
		}
		// TODO: enregistrement de l'image dans /assets/photos
	}
}
?>
