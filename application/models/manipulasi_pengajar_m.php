<?php
	class Manipulasi_pengajar_m extends CI_Model{
		private $id_pengajar;
		private $nama;
		private $username;
		private $password;
		private $ttl;
		private $jenkel;
		private $foto;
		private $no_hp;
		private $alamat;
		private $universitas;
		private $fakultas;
		private $jurusan;
		private $strata;
		private $ipk;
		private $tugas_akhir;
		private $status;
		
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
		public function setNo_hp($value){
			$this->no_hp=$value;
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
		public function setStatus($value){
			$this->status=$value;
			}
			
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
		public function getNo_hp(){
			return $this->no_hp;
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
		public function getStatus(){
			return $this->status;
			}
		
		public function view(){
		$query = "SELECT * FROM tbl_pengajar";
		return $this->db->query($query);
			}
			
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
		
		public function save(){
			$query = "INSERT INTO tbl_pengajar(id_pengajar,nama,username,password,ttl,jenkel,nomor_hp,alamat,universitas,fakultas,jurusan,strata,ipk,tugas_akhir,status) values('".$this->getId_pengajar()."','".$this->getNama()."','".$this->getUsername()."','".$this->getPassword()."','".$this->getTtl()."','".$this->getJenkel()."','".$this->getNo_hp()."','".$this->getAlamat()."','".$this->getUniversitas()."','".$this->getFakultas()."','".$this->getJurusan()."','".$this->getStrata()."','".$this->getIpk()."','".$this->getTugas_akhir()."','Calon')";
			
			return $this->db->query($query);
			}
		
		public function delete_all(){
		$querydelete = "DELETE FROM tbl_pengajar";
		return $this->db->query($querydelete);
			}
		
		public function delete(){
		$querydelete = "DELETE FROM tbl_pengajar where id_pengajar='".$this->getId_pengajar()."'";
		return $this->db->query($querydelete);
			}
		
		public function update(){
		$queryupdate = "UPDATE tbl_pengajar SET nama='".$this->getNama()."',
		username='".$this->getUsername()."', 
		password='".$this->getPassword()."', 
		ttl='".$this->getTtl()."', 
		jenkel='".$this->getJenkel()."', 
		foto='".$this->getFoto()."', 
		nomor_hp='".$this->getNo_hp()."', 
		alamat='".$this->getAlamat()."', 
		universitas='".$this->getUniversitas()."', 
		fakultas='".$this->getFakultas()."', 
		jurusan='".$this->getJurusan()."', 
		strata='".$this->getStrata()."', 
		ipk=".$this->getIpk().", 
		tugas_akhir='".$this->getTugas_akhir()."' 
		WHERE id_pengajar='".$this->getId_pengajar()."'";
		
		//$queryupdate="UPDATE tbl_pengajar SET nama='Fernalia Cantik' WHERE id_pengajar='P001'"
;		
		return $this->db->query($queryupdate);
			}
		
		public function penempatan(){
			$query="SELECT * FROM tbl_penempatan";
			
			return $this->db->query($query);
			}
		}
?>