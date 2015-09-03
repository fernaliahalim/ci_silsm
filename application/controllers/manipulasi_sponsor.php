<?php
	class Manipulasi_sponsor extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('daftar_m');
			$this->load->model('manipulasi_sponsor_m');
			$this->load->model('detailsponsor_m');
			$this->load->model('penempatan_m');
			}
		
		public function index(){
			$this->load->view('manipulasi_sponsor_v');
			}
		
		public function insert(){
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$jns_sponsor = $this->input->post('jns_sponsor');
			
			$penempatan = $this->input->post('penempatan');
			
			$ids = $this->daftar_m->idSponsor();
			
			$this->daftar_m->setId_sponsor($ids);
			$this->daftar_m->setNama($nama);
			$this->daftar_m->setAlamat($alamat);
			$this->daftar_m->setNomor_hp($no_telp);
			$this->daftar_m->setJns_sponsor($jns_sponsor);
			
			$this->detailsponsor_m->setId_png($ids);
			$this->detailsponsor_m->setId_pnp($penempatan);
		
			$this->detailsponsor_m->tambah();
			
			$hasil = $this->daftar_m->tambah_sponsor();
			
			if($hasil){
				redirect('manipulasi_sponsor');
				}
			else{
				echo "Gagal";
				}
		}
		
		public function delete_all(){
			$hasil = $this->manipulasi_sponsor_m->hapus_semua();
			
			if($hasil){
				$hs = $this->manipulasi_sponsor_m->hapusdetail();
				
				if($hs){
					redirect('manipulasi_sponsor');
					}
				else{
					echo "Gagal";
					}
				}
			else{
				echo "Gagal";
				}
			}
		
		public function delete(){
			$id = $this ->uri->segment(3);
			
			//echo $id;
			
			$this->manipulasi_sponsor_m->setId($id);
			
			$this->manipulasi_sponsor_m->hapus_detailid();
			
			$hasil = $this->manipulasi_sponsor_m->hapus();
			
			if($hasil){
				redirect('manipulasi_sponsor');
				}
			else{
				echo "Gagal";
				}
			}
		
		public function update(){
			$this->manipulasi_sponsor_m->setId($this->input->post('id_sponsor_tmp'));
			$this->manipulasi_sponsor_m->setNama($this->input->post('nama'));
			$this->manipulasi_sponsor_m->setAlamat($this->input->post('alamat'));
			$this->manipulasi_sponsor_m->setNo_telp($this->input->post('no_telp'));
			$this->manipulasi_sponsor_m->setJns_sponsor($this->input->post('jns_sponsor'));
			
			//echo $this->manipulasi_sponsor_m->getId();

			$hasil = $this->manipulasi_sponsor_m->ubah();
			
			if($hasil){
				redirect('manipulasi_sponsor');
				}
			else{
				echo "Gagal";
				}
			}
		}
?>