<?php
class Upload_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function Upload($intitule, $description, $photo, $classe, $date)
	{
	$query = $this->db->query("INSERT INTO `consultation`(`oeuvre_intitule`, `oeuvre_desc`, `oeuvre_photo`, `oeuvre_date`, `oeuvre_classe`) VALUES ('$intitule','$description','$photo','$date','$classe')");
        return $query;
	}



}
?>
