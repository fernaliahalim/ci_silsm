<?php
	class Detailpenempatan_m extends CI_Model{
		private $id_dp;
		private $id_pnp;
		private $id_png;
		
		public function setId_dp($value){
			$this->id_dp=$value;
			}
		public function setId_pnp($value){
			$this->id_pnp=$value;
			}
		public function setId_png($value){
			$this->id_png=$value;
			}
			
		public function getId_dp(){
			return $this->id_dp;
			}
		public function getId_pnp(){
			return $this->id_pnp;
			}
		public function getId_png(){
			return $this->id_png;
			}
		
		public function id_dpn(){
			
			$this->load->database('db_lsm');
			
			$temp = $this->db->get('tbl_detailpenempatan');
			
			foreach($temp->result() as $row){
				$idk = $row->id_detailpenempatan;
				}
			$idk1 = substr($idk,1,3);
			
			$temp1 = $idk1+1;
			
			if($temp1 > 99){
				return $this->id_dp="K".$temp1;
				}
			else if($temp1 >9){
				return $this->id_dp="K0".$temp1;
				}
			else{
				return $this->id_dp="K00".$temp1;
				}
			}
		
		public function tambah(){
			$query = "INSERT INTO tbl_detailpenempatan values('".$this->id_dpn()."','".$this->getId_pnp()."','".$this->getId_png()."')";
			return $this->db->query($query);
			}
			
		public function hapus(){
			$query = "DELETE FROM tbl_detailpenempatan WHERE id_pengajar='".$this->getId_png()."'";
			return $this->db->query($query);
			}
			
		public function hapus_semua(){
			$query = "DELETE FROM tbl_detailpenempatan";
			
			return $this->db->query($query);
			}
		}
?>