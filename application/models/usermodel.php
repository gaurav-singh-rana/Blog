<?php
class UserModel extends CI_Model
{

	public function getUsers()
	{
		//$this->load->database();
		$q= $this->db->get("user_accounts");
		//$q= $this->db->query("SELECT * FROM user_accounts");
		/*return[
			['firstname'=>'First User', 'lastname'=>'First Name'],
			['firstname'=>'Second User', 'lastname'=>'Second Name'],
			['firstname'=>'Third User', 'lastname'=>'Third Name'],
		];*/
 //print_r($q);
		/*$result = $q->result();
		echo "<pre>";
		print_r($result);*/
return $q->result_array();

	}
}