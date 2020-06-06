<?php
class Consultation_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function toutesLesOeuvres()
	{
	$query = $this->db->get('consultation');

        return $query->result();
		}



}
?>
