<?php
	class Penempatan_m extends CI_Model{
		private $id;
		private $lokasi;
		
		public function setId($value){
			$this->id=$value;
			}
		public function setLokasi($value){
			$this->lokasi=$value;
			}
		
		public function getId(){
			return $this->id;
			}
		
		public function getLokasi(){
			return $this->lokasi;
			}
		
		public function lihat(){
			$query = "SELECT * FROM tbl_penempatan";
			
			return $this->db->query($query);
			}
		}
?>