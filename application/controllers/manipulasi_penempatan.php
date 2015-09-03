<?php
	class Manipulasi_penempatan extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('manipulasi_penempatan_m');
			}
		
		public function index(){
			$this->load->view('manipulasi_penempatan_v');
			}
			
		public function insert(){
			$this->manipulasi_penempatan_m->setLokasi($this->input->post('lokasi'));
			
			$hasil = $this->manipulasi_penempatan_m->tambah();
			
			if($hasil){
				redirect('manipulasi_penempatan');
				}
			else{
				echo "Gagal";
				}
			}
		
		
		public function update(){
			$id = $this->input->post('id_penempatan');
			$lokasi = $this->input->post('lokasi');
			
			//echo $id;
			
			$this->manipulasi_penempatan_m->setId_penempatan($id);
			$this->manipulasi_penempatan_m->setLokasi($lokasi);
			
			$hasil = $this->manipulasi_penempatan_m->ubah();
			
			if($hasil){
				redirect('manipulasi_penempatan');
				}
			else{
				echo "Gagal";
				}
			}
		
		public function delete_all(){
			$hasil = $this->manipulasi_penempatan_m->hapus_semua();
			
			if($hasil){
				redirect('manipulasi_penempatan');
			}
			else{
				echo "Gagal";
			}
		}
		
		public function delete(){
			$id = $this ->uri->segment(3);
			$this->manipulasi_penempatan_m->setId_penempatan($id);
			$hasil = $this->manipulasi_penempatan_m->hapus();
			
			if($hasil){
				redirect('manipulasi_penempatan');
			}
			else{
				echo "Gagal";
			}
		}
		}
?>