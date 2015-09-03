<?php
	class Manipulasi_tes extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('manipulasi_tes_m');
			}
		
		public function index(){
			$this->load->view('manipulasi_tes_v');
			}
		
		public function insert(){
			$this->manipulasi_tes_m->setId_soal('T001');
			$this->manipulasi_tes_m->setNomer($this->input->post('nomer'));
			$this->manipulasi_tes_m->setSoal($this->input->post('soal'));
			$this->manipulasi_tes_m->setA($this->input->post('a'));
			$this->manipulasi_tes_m->setB($this->input->post('b'));
			$this->manipulasi_tes_m->setC($this->input->post('c'));
			$this->manipulasi_tes_m->setD($this->input->post('d'));
			$this->manipulasi_tes_m->setJawaban($this->input->post('jawaban'));
			
			$hasil = $this->manipulasi_tes_m->tambah();
			
			if($hasil){
				redirect('manipulasi_tes');
				}
			else{
				echo "Gagal";
				}
			}
		
		public function delete_all(){
			$hasil = $this->manipulasi_tes_m->hapus_semua();
			
			if($hasil){
				redirect('manipulasi_tes');
			}
			else{
				echo "Gagal";
			}
		}
		
		public function delete(){
			$id = $this->uri->segment(3);
			//echo $id;
			$this->manipulasi_tes_m->setNomer($id);
			$hasil = $this->manipulasi_tes_m->hapus();
			
			if($hasil){
				redirect('manipulasi_tes');
			}
			else{
				echo "Gagal";
			}
		}
		
		public function update(){
			$id = $this->input->post('id_tes_tmp');
			$nomer = $this->input->post('nomer');
			$soal = $this->input->post('soal');
			$a = $this->input->post('a');
			$b = $this->input->post('b');
			$c = $this->input->post('c');
			$d = $this->input->post('d');
			$jawaban = $this->input->post('jawaban');
			
			/*echo $id;
			echo $nomer;
			echo $soal;
			echo $a;
			echo $b;
			echo $c;
			echo $d;
			echo $jawaban;*/

			$hasil = $this->manipulasi_tes_m->ubah($id,$nomer,$soal,$a,$b,$c,$d,$jawaban);

			if($hasil){
				redirect('manipulasi_tes');
			}
			else{
				echo "Gagal";
			}
			}
		}
?>