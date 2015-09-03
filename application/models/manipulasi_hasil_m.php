<?php
	class Manipulasi_hasil_m extends CI_Model{
		private $id_hasil;
		private $id_pengajar;
		//private $id_soal;
		private $jawaban;
		
		public function setId_hasil($value){
			$this->id_hasil=$value;
			}
		
		public function setId_pengajar($value){
			$this->id_pengajar=$value;
			}
			
		public function setId_soal($value){
			$this->id_soal=$value;
			}
		
		public function setJawaban($value){
			$this->jawaban=$value;
			}
		
		public function getId_hasil(){
			return $this->id_hasil;
			}
		
		public function getId_pengajar(){
			return $this->id_pengajar;
			}
		
		public function getJawaban(){
			return $this->getJawaban();
			}
		
		public function view(){
			$query = "SELECT * FROM tbl_hasil";
			
			return $this->db->query($query);
			}
		
		public function hapus_semua(){
			$query = "DELETE FROM tbl_hasil";
			
			return $this->db->query($query);
			}
		}
?>