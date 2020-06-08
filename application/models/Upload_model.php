<?php
class Upload_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//public function upload()
	//{
	//$query = $this->db->query('INSERT INTO `consultation`(`oeuvre_inti`, `oeuvre_desc`, `oeuvres_photo`, `oeuvres_type`, `oeuvre_classe, oeuvres_date`) VALUES ($intitule,[value-2],[value-3],[value-4],[value-5],[value-6])');
    //    return $query->result();
	//}



}
?>
