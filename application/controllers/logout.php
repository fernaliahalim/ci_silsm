<?php
class Logout extends CI_Controller{
	public function index(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('status');
		redirect('login');
		}
}
?>