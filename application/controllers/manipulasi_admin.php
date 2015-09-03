<?php
	class Manipulasi_admin extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('manipulasi_admin_m');
			}
		
		public function index(){
			$this->load->view('manipulasi_admin_v');
			}
			
		public function insert(){
			//$idad = $this->input->post('id_admin');
			$namaad = $this->input->post('nama');
			$usernamead = $this->input->post('username');
			$passwordad = $this->input->post('password');
			
			//$this->manipulasi_admin_m->setIdad($idad);
			$this->manipulasi_admin_m->setNamaad($namaad);
			$this->manipulasi_admin_m->setUsernamead($usernamead);
			$this->manipulasi_admin_m->setPasswordad($passwordad);
			
			$hasil = $this->manipulasi_admin_m->save();
			
			if($hasil){
				redirect('manipulasi_admin');
			}
			else{
				echo "Gagal";
			}
		}
		
		public function delete_all(){
			$hasil = $this->manipulasi_admin_m->delete_all();
			
			if($hasil){
				redirect('manipulasi_admin');
			}
			else{
				echo "Gagal";
			}
		}
		
		public function delete(){
			$id = $this ->uri->segment(3);
			//echo $id;
			$this->manipulasi_admin_m->setIdad($id);
			$hasil = $this->manipulasi_admin_m->delete();
			
			if($hasil){
				redirect('manipulasi_admin');
			}
			else{
				echo "Gagal";
			}
		}
		
		public function update(){
			$id = $this->input->post('id_admin');
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->manipulasi_admin_m->setIdad($id);
			$this->manipulasi_admin_m->setNamaad($nama);
			$this->manipulasi_admin_m->setUsernamead($username);
			$this->manipulasi_admin_m->setPasswordad($password);
			
			$hasil = $this->manipulasi_admin_m->update();
			
			if($hasil){
				redirect('manipulasi_admin');
			}
			else{
				echo "Gagal";
			}
		}
	}
?>