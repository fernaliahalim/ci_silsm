<?php
	class Hitung_skor extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();	
			$this->load->model('soal_m');
		}
		
		public function index()
		{
			$skor = 0;
			$jawaban = $this->input->post('jawaban');
			//echo $jawaban['0'];
			//echo $jawaban['1'];
			//echo $jawaban['2'];
			//echo $jawaban['3'];
			//echo $jawaban['4'];
			$banyak = count($jawaban);
			$nilai = 100/$banyak;
			
			$query = $this->soal_m->tampil_soal($this->uri->segment(3));
			$data = $query->result();
			
			$i = 0;
			foreach($data as $row)
			{
				if($jawaban[$i] == $row->jawaban)
				{
					$skor = $skor + $nilai;
				}
				$i++;
			}
			
		$skor;
		$id_pengajar =  $this->session->userdata('id');
		
		$this->soal_m->simpan_hasil($id_pengajar, $skor);	
		if($skor >= 70)
		{
			$this->soal_m->update_status_pengajar($id_pengajar);
			redirect('status_tes_hasil');
		}
		else{
			redirect('status_tes_hasil/gagal');
			}
		
		}
		//end function	
	}//end class
?>