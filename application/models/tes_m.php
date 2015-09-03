<?php
	class Tes_m extends CI_Model
	{
		public function tampil_daftar_tes()
		{
			$query = "select * from tbl_tes2";
			return $this->db->query($query);	
		}	
	}
?>