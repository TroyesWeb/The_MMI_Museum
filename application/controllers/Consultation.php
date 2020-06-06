<?php
class Consultation extends CI_Controller {
	public function index()
		{
			$this->load->model('Consultation_model');
			$data['toutes'] = $this->Consultation_model->toutesLesOeuvres();
			//$this->load->view('Header_view');
			$this->load->view('Consultation_view',$data);
			//$this->load->view('Footer_view');
		}

}
?>
