<?php
	class Daftar_m extends CI_Model{
		private $id_pengajar;
		private $nama;
		private $username;
		private $password;
		private $ttl;
		private $jenkel;
		private $foto;
		private $nomor_hp;
		private $alamat;
		private $universitas;
		private $fakultas;
		private $jurusan;
		private $strata;
		private $ipk;
		private $tugas_akhir;
		
		//method
		private $id_sponsor;
		private $jns_sponsor;
		
		//setter pengajar
		public function setId_pengajar($value){
			$this->id_pengajar=$value;
			}
		public function setNama($value){
			$this->nama=$value;
			}
		public function setUsername($value){
			$this->username=$value;
			}
		public function setPassword($value){
			$this->password=$value;
			}
		public function setTtl($value){
			$this->ttl=$value;
			}
		public function setJenkel($value){
			$this->jenkel=$value;
			}
		public function setFoto($value){
			$this->foto=$value;
			}
		public function setNomor_hp($value){
			$this->nomor_hp=$value;
			}
		public function setAlamat($value){
			$this->alamat=$value;
			}
		public function setUniversitas($value){
			$this->universitas=$value;
			}
		public function setFakultas($value){
			$this->fakultas=$value;
			}
		public function setJurusan($value){
			$this->jurusan=$value;
			}
		public function setStrata($value){
			$this->strata=$value;
			}
		public function setIpk($value){
			$this->ipk=$value;
			}
		public function setTugas_akhir($value){
			$this->tugas_akhir=$value;
			}
			
		//setter sponsor
		public function setId_sponsor($value){
			$this->id_sponsor=$value;
			}	
		public function setJns_sponsor($value){
			$this->jns_sponsor=$value;
			}
		
		//getter pengajar
		public function getId_pengajar(){
			return $this->id_pengajar;
			}
		public function getNama(){
			return $this->nama;
			}
		public function getUsername(){
			return $this->username;
			}
		public function getPassword(){
			return $this->password;
			}
		public function getTtl(){
			return $this->ttl;
			}
		public function getJenkel(){
			return $this->jenkel;
			}
		public function getFoto(){
			return $this->foto;
			}
		public function getNomor_hp(){
			return $this->nomor_hp;
			}
		public function getAlamat(){
			return $this->alamat;
			}
		public function getUniversitas(){
			return $this->universitas;
			}
		public function getFakultas(){
			return $this->fakultas;
			}
		public function getJurusan(){
			return $this->jurusan;
			}
		public function getStrata(){
			return $this->strata;
			}
		public function getIpk(){
			return $this->ipk;
			}
		public function getTugas_akhir(){
			return $this->tugas_akhir;
			}
		
		//getter sponsor
		public function getId_sponsor(){
			return $this->id_sponsor;
			}	
		public function getJns_sponsor(){
			return $this->jns_sponsor;
			}
			
		//method untuk mengambil data increment database untuk tbl_pengajar
		public function id_sekarang(){
			/*$query =  "SELECT max(substr(id_pengajar,2,3)) + 1 FROM tbl_pengajar";
			
			$temp = $this->db->query($query);*/
			
			$this->load->database('db_lsm');
			
			$temp = $this->db->get('tbl_pengajar');
			
			foreach($temp->result() as $row){
				$idk = $row->id_pengajar;
				}
			$idk1 = substr($idk,1,3);
			
			$temp1 = $idk1+1;
			
			if($temp1 > 99){
				return $this->id_pengajar="P".$temp1;
				}
			else if($temp1 >9){
				return $this->id_pengajar="P0".$temp1;
				}
			else{
				return $this->id_pengajar="P00".$temp1;
				}
			}
			
		//method untuk nambah ke database
		public function tambah(){
			$query = "INSERT INTO tbl_pengajar(id_pengajar,nama,username,password,ttl,jenkel,nomor_hp,alamat,universitas,fakultas,jurusan,strata,ipk,tugas_akhir,status) values('".$this->getId_pengajar()."','".$this->getNama()."','".$this->getUsername()."','".$this->getPassword()."','".$this->getTtl()."','".$this->getJenkel()."','".$this->getNomor_hp()."','".$this->getAlamat()."','".$this->getUniversitas()."','".$this->getFakultas()."','".$this->getJurusan()."','".$this->getStrata()."','".$this->getIpk()."','".$this->getTugas_akhir()."','Calon')";
			
			return $this->db->query($query);
			}
		
		//untuk mengambil data increment dari database untuk tbl_sponsor
		public function idSponsor(){
			
			$this->load->database('db_lsm');
			
			$temp = $this->db->get('tbl_sponsor');
			
			foreach($temp->result() as $row){
				$idk = $row->id_sponsor;
				}
			$idk1 = substr($idk,1,3);
			
			$temp1 = $idk1+1;
			
			if($temp1 > 99){
				return $this->id_pengajar="S".$temp1;
				}
			else if($temp1 >9){
				return $this->id_pengajar="S0".$temp1;
				}
			else{
				return $this->id_pengajar="S00".$temp1;
				}
			}
			
			//untuk menambah data ke tbl_sponsor
			public function tambah_sponsor(){
				$query = "INSERT INTO tbl_sponsor(id_sponsor,nama,alamat,no_telepon,jenis_sponsor) values('".$this->getId_sponsor()."','".$this->getNama()."','".$this->getAlamat()."','".$this->getNomor_hp()."','".$this->getJns_sponsor()."')";
				
				return $this->db->query($query);
				}
}
?>