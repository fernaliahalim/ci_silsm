<?php
	class Tes extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('tes_m');	
		}
		
		public function index()
		{
			$query = $this->tes_m->tampil_daftar_tes();
			$data['data_tes'] = $query->result();
			$this->load->view('tes_v',$data);	
		}	
	}
?>