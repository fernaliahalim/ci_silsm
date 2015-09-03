<?php
class Pengguna_m extends CI_Model{
	private $username;
	private $password;
	
	public function setUsername($user) {
		$this->username = $user;
	}
	
	public function setPassword($pass) {
		$this->password = $pass;
	}
	public function getUsername(){
		return $this->username;	
	}
	public function getPassword(){
		return $this->password;	
	}
	
	public function view_by_user_pass() {
		$query = "SELECT * From tbl_pengajar WHERE username ='".$this->getUsername()."' AND password = '".$this->getPassword()."'";
		
		return $this->db->query($query);
	}

	public function view() {
		$query = "SELECT nama, username, password From tbl_admin WHERE username ='".$this->getUsername()."' AND password = '".$this->getPassword()."'";
		
		return $this->db->query($query);
	}
}

?>