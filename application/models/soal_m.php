<?php
	class Soal_m extends CI_Model
	{
		public function tampil_soal($id_soal)
		{
			$query = "select * from tbl_tes where id_tes = '".$id_soal."' order by nomer";
			return $this->db->query($query);
		}	
		
		public function simpan_hasil($id, $nilai)
		{
			$query = "insert into tbl_hasil(id_hasil, id_pengajar, nilai) values ('NULL','".$id."','".$nilai."')";
			$this->db->query($query);
		}
		
		public function update_status_pengajar($id)
		{
			$query = "update tbl_pengajar set status = 'Pengajar' where id_pengajar = '".$id."' ";
			$this->db->query($query);
		}
		
	}
?>