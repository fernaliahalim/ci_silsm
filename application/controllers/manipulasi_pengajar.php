<?php
	class Manipulasi_pengajar extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('manipulasi_pengajar_m');
			$this->load->model('detailpenempatan_m');
			}	
		
		public function index(){
			$this->load->view('manipulasi_pengajar_v');
			}
		
		public function insert(){
			$id = $this->manipulasi_pengajar_m->id_sekarang();
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$ttl = $this->input->post('ttl');
			$jenkel = $this->input->post('jenkel');
			$foto = $this->input->post('foto');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
			$universitas = $this->input->post('universitas');
			$fakultas = $this->input->post('fakultas');
			$jurusan = $this->input->post('jurusan');
			$strata = $this->input->post('strata');
			$ipk = $this->input->post('ipk');
			$ta = $this->input->post('ta');
			
			$lokasi = $this->input->post('lokasi');
			
			$this->manipulasi_pengajar_m->setId_pengajar($id);
			$this->manipulasi_pengajar_m->setNama($nama);
			$this->manipulasi_pengajar_m->setUsername($username);
			$this->manipulasi_pengajar_m->setPassword($password);
			$this->manipulasi_pengajar_m->setTtl($ttl);
			$this->manipulasi_pengajar_m->setJenkel($jenkel);
			$this->manipulasi_pengajar_m->setFoto($foto);
			$this->manipulasi_pengajar_m->setNo_hp($no_hp);
			$this->manipulasi_pengajar_m->setAlamat($alamat);
			$this->manipulasi_pengajar_m->setUniversitas($universitas);
			$this->manipulasi_pengajar_m->setFakultas($fakultas);
			$this->manipulasi_pengajar_m->setJurusan($jurusan);
			$this->manipulasi_pengajar_m->setStrata($strata);
			$this->manipulasi_pengajar_m->setIpk($ipk);
			$this->manipulasi_pengajar_m->setTugas_akhir($ta);
			
			$this->detailpenempatan_m->setId_pnp($lokasi);
			$this->detailpenempatan_m->setId_png($id);
			
			$this->detailpenempatan_m->tambah();
			
			$hasil = $this->manipulasi_pengajar_m->save();
			
			if($hasil){
				redirect('manipulasi_pengajar');
			}
			else{
				echo "Gagal";
			}
		}
		
		public function delete_all(){
			$this->detailpenempatan_m->hapus_semua();
			$hasil = $this->manipulasi_pengajar_m->delete_all();
			
			if($hasil){
				redirect('manipulasi_pengajar');
			}
			else{
				echo "Gagal";
			}
		}
		
		public function delete(){
			$id = $this ->uri->segment(3);
			//$idlokasi = $this->uri->segment(4);
			//echo $id;
			
			$this->detailpenempatan_m->setId_png($id);
			$this->detailpenempatan_m->hapus();
			
			$this->manipulasi_pengajar_m->setId_pengajar($id);
			$hasil = $this->manipulasi_pengajar_m->delete();
			
			if($hasil){
				redirect('manipulasi_pengajar');
			}
			else{
				echo "Gagal";
			}
		}
		
		public function update(){
			$id = $this->input->post('id_pengajar');
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$ttl = $this->input->post('ttl');
			$jenkel = $this->input->post('jenkel');
			$foto = $this->input->post('foto');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
			$universitas = $this->input->post('universitas');
			$fakultas = $this->input->post('fakultas');
			$jurusan = $this->input->post('jurusan');
			$strata = $this->input->post('strata');
			$ipk = $this->input->post('ipk');
			$ta = $this->input->post('ta');
			
			//echo $jenkel;
			
			//$data['uhuy'] = $id;
			//$this->load->view('manipulasi_pengajar_v',$data);
			
			$this->manipulasi_pengajar_m->setId_pengajar($id);
			$this->manipulasi_pengajar_m->setNama($nama);
			$this->manipulasi_pengajar_m->setUsername($username);
			$this->manipulasi_pengajar_m->setPassword($password);
			$this->manipulasi_pengajar_m->setTtl($ttl);
			$this->manipulasi_pengajar_m->setJenkel($jenkel);
			$this->manipulasi_pengajar_m->setFoto($foto);
			$this->manipulasi_pengajar_m->setNo_hp($no_hp);
			$this->manipulasi_pengajar_m->setAlamat($alamat);
			$this->manipulasi_pengajar_m->setUniversitas($universitas);
			$this->manipulasi_pengajar_m->setFakultas($fakultas);
			$this->manipulasi_pengajar_m->setJurusan($jurusan);
			$this->manipulasi_pengajar_m->setStrata($strata);
			$this->manipulasi_pengajar_m->setIpk($ipk);
			$this->manipulasi_pengajar_m->setTugas_akhir($ta);
			
			$hasil = $this->manipulasi_pengajar_m->update();
			
			if($hasil){
				redirect('manipulasi_pengajar');
			}
			else{
				echo "Gagal";
			}
		}
	}
?>