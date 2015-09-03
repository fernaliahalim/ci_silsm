<?php
	class Manipulasi_hasil extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('manipulasi_hasil_m');
			}
		
		public function index(){
			$this->load->view('manipulasi_hasil_v');
			}
		
		public function delete_all(){
			$hasil = $this->manipulasi_hasil_m->hapus_semua();
			
			if($hasil){
				redirect('manipulasi_hasil');
			}
			else{
				echo "Gagal";
			}
		}
	}
?>