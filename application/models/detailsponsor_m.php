<?php
	class Detailsponsor_m extends CI_Model{
		private $id_ds;
		private $id_png;
		private $id_pnp;
		
		public function setId_ds($value){
			$this->id_ds=$value;
			}
		public function setId_png($value){
			$this->id_png=$value;
			}
		public function setId_pnp($value){
			$this->id_pnp=$value;
			}
		
		public function getId_ds(){
			return $this->id_ds;
			}
		public function getId_png(){
			return $this->id_png;
			}
		public function getId_pnp(){
			return $this->id_pnp;
			}
		
		public function id_dsp(){
			
			$this->load->database('db_lsm');
			
			$temp = $this->db->get('tbl_detailsponsor');
			
			foreach($temp->result() as $row){
				$idk = $row->id_detailsponsor;
				}
			$idk1 = substr($idk,1,3);
			
			$temp1 = $idk1+1;
			
			if($temp1 > 99){
				return $this->id_ds="D".$temp1;
				}
			else if($temp1 >9){
				return $this->id_ds="D0".$temp1;
				}
			else{
				return $this->id_ds="D00".$temp1;
				}
			}
		
		public function tambah(){
			$query="INSERT INTO tbl_detailsponsor values('".$this->id_dsp()."','".$this->getId_png()."','".$this->getId_pnp()."')";
			
			$this->db->query($query);
			}
		}
?>