<?php
	class Hubungikami_m extends CI_Model{
		private $nama;
		private $email;
		private $pesan;
		
		public function setNama($value){
			$this->nama=$value;
			}
		public function setEmail($value){
			$this->email=$value;
			}
		public function setPesan($value){
			$this->pesan=$value;
			}
		public function getNama(){
			return $this->nama;
			}
		public function getEmail(){
			return $this->email;
			}
		public function getPesan(){
			return $this->pesan;
			}
		public function tambah(){
			$query = "INSERT INTO tbl_kontakkami(nama,email,pesan) values('".$this->getNama()."','".$this->getEmail()."','".$this->getPesan()."')";
			
			return $this->db->query($query);
			}
		}
?>