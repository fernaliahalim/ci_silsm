<?php
	class Daftar extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('daftar_m');
			$this->load->model('detailsponsor_m');
			$this->load->model('detailpenempatan_m');
		}
		
		public function index(){
			$nama = $this->input->get('nama');
			$username = $this->input->get('username');
			$password = $this->input->get('password');
			$tgl = $this->input->get('tgl');
			$bulan = $this->input->get('bulan');
			$tahun = $this->input->get('tahun');
			$jenkel = $this->input->get('jenkel');
			$no_hp = $this->input->get('no_hp');
			$alamat = $this->input->get('alamat');
			$universitas = $this->input->get('pt');
			$fakultas = $this->input->get('fakultas');
			$jurusan = $this->input->get('jurusan');
			$strata = $this->input->get('strata');
			$ipk = $this->input->get('ipk');
			$tugas_akhir = $this->input->get('ta');
			
			$penempatan = $this->input->get('penempatan');
			
			$idtemp = $this->daftar_m->id_sekarang();
			
			$this->daftar_m->setId_pengajar($idtemp);
			$this->daftar_m->setNama($nama);
			$this->daftar_m->setUsername($username);
			$this->daftar_m->setPassword($password);
			
			$ttl = $tahun."-".$bulan."-".$tgl;
			$this->daftar_m->setTtl($ttl);
			
			if($jenkel == "Laki-laki"){
				$jk = 'L';
				}else{
					$jk = 'P';
					}
			$this->daftar_m->setJenkel($jk);
			
			$this->daftar_m->setNomor_hp($no_hp);
			$this->daftar_m->setAlamat($alamat);
			$this->daftar_m->setUniversitas($universitas);
			$this->daftar_m->setFakultas($fakultas);
			$this->daftar_m->setJurusan($jurusan);
			$this->daftar_m->setStrata($strata);
			$this->daftar_m->setIpk($ipk);
			$this->daftar_m->setTugas_akhir($tugas_akhir);
			
			$this->detailpenempatan_m->setId_pnp($penempatan);
			$this->detailpenempatan_m->setId_png($idtemp);
			
			$this->detailpenempatan_m->tambah();
			
			$hasil = $this->daftar_m->tambah();
			
			if($hasil){
				redirect('login');
				}
			else{
				echo "Gagal";
				}
		}
	
		public function lihat_id(){
			$hasil = $this->daftar_m->id_sponsor();
			
			echo $hasil;
		}
		
		public function kemitraan(){
			$nama = $this->input->get('nama');
			$alamat = $this->input->get('alamat');
			$no_telp = $this->input->get('no_telp');
			$jns_sponsor = $this->input->get('jns_sponsor');
			
			$penempatan = $this->input->get('penempatan');
			
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
				redirect(site_url());
				}
			else{
				echo "Gagal";
				}
		}
	}
?>