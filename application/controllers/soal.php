<?php
	class Soal extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();	
			$this->load->model('soal_m');
		}
		public function index()
		{
			$id_tes = $this->uri->segment(3);
			
			$query = $this->soal_m->tampil_soal($id_tes);
			$data['soal'] = $query->result();
			$this->load->view('soal_v', $data);
		}	
	}
?>