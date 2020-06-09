<?php
class Login_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function verifLog_A($a,$d)
	{
		$query = $this->db->query("SELECT * FROM admin WHERE admin_identifiant='$a' AND admin_password=sha2('$d',256)");

		return $query->num_rows();
	}


	public function verifLog_U($u,$s)
	{
		$query = $this->db->query("SELECT * FROM users WHERE identifiant='$u' AND password= sha2('$s',256)");
		return $query->num_rows();
	}

}
