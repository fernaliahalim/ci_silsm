<?php
	class Status_tes_hasil extends CI_Controller{
		public function __construct(){
			parent:: __construct();
			}
		
		public function index(){
			$this->load->view('sukses_v');
			}
		
		public function gagal(){
			$this->load->view('gagal_v');
			}
		}
?>