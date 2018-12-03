<?php

class Loginmodel extends CI_Model
{

	public function login_valid( $username, $password )
	{
		$q= $this->db->where(['uname'=>$username ,'pword'=>$password])
		         ->get('users');//select * from users where username = $username and password = $password
		         if ($q->num_rows() ) {
		         //return TRUE;
		         	//$row = $q->row();
		         	//return $row->id;
		         	return $q->row()->id;
		     }else{
		     	return FALSE;
		    }
	}
}