<?php
	class Maribergabung extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$this->load->view('maribergabung_v');
		}
	}
?>