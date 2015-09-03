<?php
class Manipulasi_admin_m extends CI_Model{
	private $idad;
	private $namaad;
	private $usernamead;
	private $passwordad;
	
	public function setIdad($value){
			$this->idad = $value;
		}
	
	public function setNamaad($value){
			$this->namaad = $value;
		}
		
	public function setUsernamead($value){
			$this->usernamead = $value;
		}
	
	public function setPasswordad($value){
			$this->passwordad = $value;
		}
	
	public function getIdad(){
		return $this->idad;
		}
	
	public function getNamaad(){
		return $this->namaad;
		}
	
	public function getUsernamead(){
		return $this->usernamead;
		}
	
	public function getPasswordad(){
		return $this->passwordad;
		}
	
	public function view(){
		$query = "SELECT * FROM tbl_admin";
		return $this->db->query($query);
	}
	
	public function id_ad(){
			
			$this->load->database('db_lsm');
			
			$temp = $this->db->get('tbl_admin');
			
			foreach($temp->result() as $row){
				$idk = $row->id_admin;
				}
			$idk1 = substr($idk,1,3);
			
			$temp1 = $idk1+1;
			
			if($temp1 > 99){
				return $this->id_ds="A".$temp1;
				}
			else if($temp1 >9){
				return $this->id_ds="A0".$temp1;
				}
			else{
				return $this->id_ds="A00".$temp1;
				}
			}
	
	public function save(){
		$queryinsert = "INSERT INTO tbl_admin(id_admin,nama,username,password) values('".$this->id_ad()."','".$this->getNamaad()."','".$this->getUsernamead()."','".$this->getPasswordad()."')";
		return $this->db->query($queryinsert);
	}
	
	public function delete_all(){
		$querydelete = "DELETE FROM tbl_admin";
		return $this->db->query($querydelete);
	}
	
	public function delete(){
		$querydelete = "DELETE FROM tbl_admin where id_admin='".$this->getIdad()."'";
		return $this->db->query($querydelete);
	}
	
	public function update(){
		$queryupdate = "UPDATE tbl_admin SET nama='".$this->getNamaad()."',username='".$this->getUsernamead()."', password='".$this->getPasswordad()."' WHERE id_admin='".$this->getIdad()."'";
		return $this->db->query($queryupdate);
	}
}

?>