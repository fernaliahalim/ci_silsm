<?php
	class Manipulasi_penempatan_m extends CI_Model{
		private $id_penempatan;
		private $lokasi;
		
		public function setId_penempatan($value){
			$this->id_penempatan=$value;
			}
		public function setLokasi($value){
			$this->lokasi=$value;
			}
		
		public function getId_penempatan(){
			return $this->id_penempatan;
			}
		public function getLokasi(){
			return $this->lokasi;
			}
		
		public function view(){
		$query = "SELECT * FROM tbl_penempatan";
		return $this->db->query($query);
			}
		
		public function id_ad(){
			
			$this->load->database('db_lsm');
			
			$temp = $this->db->get('tbl_penempatan');
			
			foreach($temp->result() as $row){
				$idk = $row->id_penempatan;
				}
			$idk1 = substr($idk,1,3);
			
			$temp1 = $idk1+1;
			
			if($temp1 > 99){
				return $this->id_ds="L".$temp1;
				}
			else if($temp1 >9){
				return $this->id_ds="L0".$temp1;
				}
			else{
				return $this->id_ds="L00".$temp1;
				}
			}
			
			public function tambah(){
				$query = "INSERT INTO tbl_penempatan(id_penempatan,lokasi)
							values('".$this->id_ad()."','".$this->getLokasi()."')";
				
				return $this->db->query($query);
				}
			
			public function ubah(){
				$query = "UPDATE tbl_penempatan SET lokasi='".$this->getLokasi()."
							' WHERE id_penempatan = '".$this->getId_penempatan()."'";
				
				return $this->db->query($query);
				}
			
			public function hapus(){
				$query = "DELETE FROM tbl_penempatan WHERE id_penempatan='".$this->getId_penempatan()."'";
				
				return $this->db->query($query);
				}
			
			public function hapus_semua(){
				$query = "DELETE FROM tbl_penempatan";
				
				return $this->db->query($query);
				}
		}		
?>