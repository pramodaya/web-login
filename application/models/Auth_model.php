<?php
/**
* 
*/
class Auth_model extends CI_Model{
	
	
//check user availability
	public function get_user($data){
		$username=$data['username'];
		$password=$data['password'];
		
		$query=$this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
		return $query;
	}

//insert data to table
	public function add_user($data){
		$this->db->insert('users',$data);
	}
}


?>