<?php
	class Daftarkemitraan extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('penempatan_m');
		}
		
		public function index(){
			$this->load->view('pendaftarankemitraan_v');
		}
	}
?>