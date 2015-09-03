<?php
	class Manipulasi_kontakkami extends Ci_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('manipulasi_kontakkami_m');
			}
		
		public function index(){
			$this->load->view('manipulasi_kontakkami_v');
			}
		
		public function insert(){
			$this->manipulasi_kontakkami_m->setNama($this->input->post('nama'));
			$this->manipulasi_kontakkami_m->setEmail($this->input->post('email'));
			$this->manipulasi_kontakkami_m->setPesan($this->input->post('pesan'));
			
			$query=$this->manipulasi_kontakkami_m->tambah();
			
			if($query){
				redirect('manipulasi_kontakkami');
				}
			else{
				echo "Gagal";
				}
			}
			
		public function delete_all(){
			$query=$this->manipulasi_kontakkami_m->hapus();
			
			if($query){
				redirect('manipulasi_kontakkami');
				}
			else{
				echo "Gagal";
				}
			}
		}
?>