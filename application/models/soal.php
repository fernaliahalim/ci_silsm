<?php
	class Soal extends CI_Controller
	{
		public function __contruct()
		{
			parent::__contruct();	
			$this->load->modal('soal_m');
		}
		public function index()
		{
				
		}	
	}
?>