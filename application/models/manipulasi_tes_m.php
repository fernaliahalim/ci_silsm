<?php
	class Manipulasi_tes_m extends CI_Model{
		private $id_soal;
		private $nomer;
		private $soal;
		private $a;
		private $b;
		private $c;
		private $d;
		private $jawaban;
		
		public function setId_soal($value){
			$this->id_soal=$value;
			}
		public function setNomer($value){
			$this->nomer=$value;
			}
		public function setSoal($value){
			$this->soal=$value;
			}
		public function setA($value){
			$this->a=$value;
			}
		public function setB($value){
			$this->b=$value;
			}
		public function setC($value){
			$this->c=$value;
			}
		public function setD($value){
			$this->d=$value;
			}
		public function setJawaban($value){
			$this->jawaban=$value;
			}
			
		public function getId_soal(){
			return $this->id_soal;
			}
		public function getNomer(){
			return $this->nomer;
			}
		public function getSoal(){
			return $this->soal;
			}
		public function getA(){
			return $this->a;
			}
		public function getB(){
			return $this->b;
			}
		public function getC(){
			return $this->c;
			}
		public function getD(){
			return $this->d;
			}
		public function getJawaban(){
			return $this->jawaban;
			}
		
		public function view(){
		$query = "SELECT * FROM tbl_tes";
		return $this->db->query($query);
			}
		
		public function id_ad(){
			
			$this->load->database('db_lsm');
			
			$temp = $this->db->get('tbl_tes');
			
			foreach($temp->result() as $row){
				$idk = $row->id_soal;
				}
			$idk1 = substr($idk,1,3);
			
			$temp1 = $idk1+1;
			
			if($temp1 > 99){
				return $this->id_ds="T".$temp1;
				}
			else if($temp1 >9){
				return $this->id_ds="T0".$temp1;
				}
			else{
				return $this->id_ds="T00".$temp1;
				}
			}
	
	public function tambah(){
		
		$queryinsert = "INSERT INTO tbl_tes(id_tes,nomer, soal,a,b,c,d,jawaban)
						values('".$this->getId_soal()."',
						'".$this->getNomer()."',
						'".$this->getSoal()."',
						'".$this->getA()."',
						'".$this->getB()."',
						'".$this->getC()."',
						'".$this->getD()."',
						'".$this->getJawaban()."')";
		
		return $this->db->query($queryinsert);
	}
	
		public function hapus_semua(){
			$query = "DELETE FROM tbl_tes";
			
			return $this->db->query($query);
			}
		
		public function hapus(){
			$query = "DELETE FROM tbl_tes WHERE nomer='".$this->getNomer()."'";
			
			return $this->db->query($query);
			}

		public function ubah($id,$nomer,$soal,$a,$b,$c,$d,$jawaban){
			$query = "UPDATE tbl_tes SET soal='".$soal."',
						a='".$a."',
						b='".$b."',
						c='".$c."',
						d='".$d."',
						jawaban='".$jawaban."'  
						WHERE nomer='".$nomer."'";

			return $this->db->query($query);
		}
	}
?>