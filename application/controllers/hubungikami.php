<?php
	class Hubungikami extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
			$this->load->model('hubungikami_m');
			}
		
		public function index(){
			$this->load->view('hubungikami_v');
			}
		
		public function tambah(){
			$nama = $this->input->get('nama');
			$email = $this->input->get('email');
			$pesan = $this->input->get('pesan');
			
			$this->hubungikami_m->setNama($nama);
			$this->hubungikami_m->setEmail($email);
			$this->hubungikami_m->setPesan($pesan);
			
			$hasil = $this->hubungikami_m->tambah();
			
			if($hasil){
				redirect(site_url());
				}
			else{
				echo "Gagal";
				}
			}
	}
?>