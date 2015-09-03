<?php
	class Tentangkami extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->load->view('tentangkami_v');
		}
	}
?>