<?php
	class Manipulasi_sponsor_m extends CI_MOdel{
		private $id;
		private $nama;
		private $alamat;
		private $no_telp;
		private $jns;
		
		public function setId($value){
			$this->id=$value;
			}
		public function setNama($value){
			$this->nama=$value;
			}
			
		public function setAlamat($value){
			$this->alamat=$value;
			}
		
		public function setJns_sponsor($value){
			$this->jns=$value;
			}
		
		public function setNo_telp($value){
			$this->no_telp=$value;
			}
		
		public function getId(){
			return $this->id;
			}
		public function getNama(){
			return $this->nama;
			}
		
		public function getNo_telp(){
			return $this->no_telp;
			}
			
		public function getAlamat(){
			return $this->alamat;
			}
		
		public function getJns_sponsor(){
			return $this->jns;
			}
		
		public function view(){
			$query = "SELECT * FROM tbl_sponsor";
			
			return $this->db->query($query);
			}
		
		public function hapus_semua(){
			$query = "DELETE FROM tbl_sponsor";
			
			return $this->db->query($query);
			}
		
		public function hapusdetail(){
			$query = "DELETE FROM tbl_detailsponsor";
			
			return $this->db->query($query);
			}
		
		public function hapus(){
			$query = "DELETE FROM tbl_sponsor WHERE id_sponsor='".$this->getId()."'";
			
			return $this->db->query($query);
			}
		
		public function hapus_detailid(){
			$query = "DELETE FROM tbl_detailsponsor WHERE id_sponsor='".$this->getId()."'";
			
			return $this->db->query($query);
			}
			
		public function ubah(){
			$query = "UPDATE tbl_sponsor SET nama='".$this->getNama()."',
						alamat='".$this->getAlamat()."',
						no_telepon='".$this->getNo_telp()."',
						jenis_sponsor='".$this->getJns_sponsor()."'
						WHERE id_sponsor='".$this->getId()."'";
			return $this->db->query($query);
			}
		}
?>