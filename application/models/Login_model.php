<?php
class Login_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function verifLog($i,$p)
	{
		$query = $this->db->query("SELECT * FROM users WHERE identifiant='$i' AND password= sha2('$p',256)");
return $query->num_rows();
}

}
